
<?php 
    include 'partial/app.php';
?>
<script src="webcam/dist/webcam.js "></script>
<style>
        body {
            margin: 0;
            padding: 0;
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        canvas {
            position: absolute !important;
        }
    </style>
</head>

<body>

    <style>
#my_camera{
 width: 320px;
 height: 240px;
 border: 1px solid black;
}
</style>

    <div id="camera" style="display: none;"></div>
    
    <div id="webcam">
    </div>
    <div id="simpan" >
        <input type=button value="Mulai Scan" onClick="simpan()" style="font-weight:bold;">
    </div>
 
 
    <script src="webcamjs/webcam.min.js"></script>
    <script language="Javascript">
        var camera = document.getElementById('camera');
        Webcam.set({
                        width: 320,
                        height: 240,
                        image_format: 'jpg',
                        jpeg_quality: 100
                    });
                Webcam.attach( '#camera' );
        function simpan() {
            camera.style.display = 'block';
        var count = 1;
                var interval = setInterval(function () {
                if (count <= 4) {
                    upload(count)
                    count += 1;
                }else{
                    clearInterval(interval);
                    camera.style.display = 'none';
                }
                }, 1000);//request every x seconds
         }
        // konfigursi webcam
               
        function upload(count){
                    // ambil foto
                    Webcam.snap( function(data_uri) {
                        
                        // upload foto
                        Webcam.upload( data_uri, 'post.php?count='+count, function(code, text) {} );
         
                        Webcam.unfreeze();
           
                    } );
                }
    </script>
    
</body>
</html>