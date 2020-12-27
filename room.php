<?php 
    include 'partial/app.php';
?>
    <div id='status'></div>
  <script src='file.php?email=<?php echo $email ?>'></script>
  <script defer src="../js/dist/face-api.min.js"></script>
  <script defer src="../js/dist/script.js"></script>
<script type="text/javascript">
        
</script>
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
      position: absolute;
    }
  </style>
</head>
  <video id="video" width="720" height="560" controls muted></video>
  
</body>
</html>
