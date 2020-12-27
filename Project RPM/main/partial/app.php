<!doctype html>
<html >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->

    <title>Realtime Presence Monitoring</title>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
     <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>

</head>
    <div id="app">

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-lg" style="background-color: rgba();">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    Realtime Presence Monitoring
                </a>
                

                <div style="text-align: right;" id="navbarSupportedContent">
                
                    <!-- Right Side Of Navbar -->
                        <!-- Authentication Links -->
                        <?php 
                            include 'session.php';
                            include 'koneksi.php';
                            $nama_session = $_SESSION['username'];
                            $email = $_SESSION['email'];
                        ?>
              
                        </div>
                               
                                <div class="ml-auto">
                                   <strong><?php echo $nama_session ?></strong>
                                    <button class="btn btn-primary" href="logout.php">
                                        Logout
                                </button>

                                    <form id="logout-form" action="logout.php" method="POST" class="d-none">
                                    </form>
                      
                </div>
            </div>
        </nav>
<body >

   


    


