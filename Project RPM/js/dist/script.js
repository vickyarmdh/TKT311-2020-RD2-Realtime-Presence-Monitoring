const video = document.getElementById('video')
const status = document.getElementById('status');
var count = 0;
Promise.all([
    faceapi.nets.faceRecognitionNet.loadFromUri('../js/models'),
    faceapi.nets.faceLandmark68Net.loadFromUri('../js/models'),
    faceapi.nets.ssdMobilenetv1.loadFromUri('../js/models') //heavier/accurate version of tiny face detector
]).then(start)

function start() {
    navigator.getUserMedia(
        { video:{} },
        stream => video.srcObject = stream,
        err => console.error(err)
    )

    recognizeFaces()
}

async function recognizeFaces() {

    const labeledDescriptors = await loadLabeledImages()
    console.log(labeledDescriptors)
    const faceMatcher = new faceapi.FaceMatcher(labeledDescriptors, 0.7)

    video.addEventListener('play', async () => {
        console.log('Playing')
        const canvas = faceapi.createCanvasFromMedia(video)
        document.body.append(canvas)

        const displaySize = { width: video.width, height: video.height }
        faceapi.matchDimensions(canvas, displaySize)

        setInterval(async () => {
            const detections = await faceapi.detectAllFaces(video).withFaceLandmarks().withFaceDescriptors()

            const resizedDetections = faceapi.resizeResults(detections, displaySize)

            canvas.getContext('2d').clearRect(0, 0, canvas.width, canvas.height)

            const results = resizedDetections.map((d) => {
                return faceMatcher.findBestMatch(d.descriptor)
            })
            results.forEach( (result, i) => {
                const box = resizedDetections[i].detection.box
                const drawBox = new faceapi.draw.DrawBox(box, { label: result.toString() })
                drawBox.draw(canvas)
                if (strpos(result.toString(),'unknown') !== false ) {
                  count+=1;
                  console.log('Wajah Tidak Terdeteksi');
                }
            })
        }, 500)
    })
}

function loadLabeledImages() {
  
    //const labels = ['Black Widow', 'Captain America', 'Hawkeye' , 'Jim Rhodes', 'Tony Stark', 'Thor', 'Captain Marvel']
    const labels = [files] // for WebCam
    return Promise.all(
        labels.map(async (label)=>{
            const descriptions = []
            for(let i=1; i<=4; i++) {
                const img = await faceapi.fetchImage(`public/${label}/${i}.jpg`)
                const detections = await faceapi.detectSingleFace(img).withFaceLandmarks().withFaceDescriptor()
                console.log(label + i + JSON.stringify(detections))
                descriptions.push(detections.descriptor)
            }
            status.append(' Faces Loaded ')
            return new faceapi.LabeledFaceDescriptors(label, descriptions)
        })
    )
}
function upload() {
  $.ajax({
      type:'POST',
      url:'upload.php',
      data:{"count":count,"email":files},
     });
}