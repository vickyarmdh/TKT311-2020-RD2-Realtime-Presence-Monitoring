<!doctype html>
<html >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->

    <title>Realtime Presence Monitoring</title>

    <!-- Scripts -->
    <script src="js/app.js" defer></script>
    <script src="js/dist/face-api.min.js" defer></script>
    <script src="js/dist/script.js" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
     <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

</head>
<body style="background-color: rgb(119, 125, 131)">
    <div id="app">

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="home.php">
                    Realtime Presence Monitoring
                </a>
                

                <div style="text-align: right;" id="navbarSupportedContent">
                
                    <!-- Right Side Of Navbar -->
                        <!-- Authentication Links -->
                                <?php  

                                if(strpos($_SERVER['REQUEST_URI'], 'login.php') === false) {
                                ?>
                                <a  class="btn btn-primary" href="login.php">Masuk</a>
                            <?php }else{ ?>
                                <a  class="btn btn-primary" href="register.php">Daftar</a>
                            <?php } ?>
                        <?php 
                            include 'koneksi.php';
                            if (isset($_SESSION['nama_user'])) {
                                $nama_session = $_SESSION['nama_user'];
                            $sql = "SELECT * FROM users WHERE name='$nama_session'";
                            $query = mysqli_connect($koneksi,$sql);
                            $bol = false;
                            while ($row = mysqli_fetch_array($query)) {
                                $bol = true;
                                }
                            if ($bol) {

                            
                        ?>
              
                        </div>
                                <div class="mr-2 d-none d-lg-inline small"
                                style="margin-right: 1rem;">
                                    <div style="width: 23vh; text-align: right;"><strong><?php echo $nama_session ?></strong></div>
                                </div>
                                <div class="ml-auto">
                                    <button class="btn btn-primary" href="logout.php">
                                        Logout
                                </button>

                                    <form id="logout-form" action="logout.php" method="POST" class="d-none">
                                    </form>
                        <?php
                                  }

                             } ?>
                </div>
            </div>
        </nav>
        
        </nav>
   


    


