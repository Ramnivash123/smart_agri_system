<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Agri IQ - Crop Yield Prediction</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        .weather-section, .services-section, .prediction-result {
            margin-top: 50px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
        }

        .prediction-result {
            background-color: #e0ffe0;
            border: 1px solid #c1e6c1;
        }
    </style>
</head>

<body class="main-layout">
    <!-- loader -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->

    <!-- header -->
    <header>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="images/logo2.png" alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="location_icon_bottum_tt">
                            <ul>
                                <li><img src="icon/email1.png" />agriiq@gmail.com</li>
                                <li><img src="icon/call1.png" />9876543210</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 location_icon_bottum">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="menu-area">
                                    <div class="limit-box">
                                        <nav class="main-menu">
                                            <ul class="menu-area-main">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="#about">About</a></li>
                                                <li class="active"><a href="tests.php">Tests</a></li>
                                                <li><a href="#contact">Contact Us</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                <form class="search">
                                    <input class="form-control" type="text" placeholder="Search">
                                    <button><img src="images/search_icon.png"></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Crop Yield Prediction -->
    <div class="container">
        <div class="weather-section">
            <h2>Crop Yield Prediction</h2>
            <form action="crop-yield-prediction.php" method="post">
                <div class="form-group">
                    <label for="crop">Crop Name:</label>
                    <input type="text" id="crop" name="crop" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="cost_cultivation">Cost of Cultivation:</label>
                    <input type="number" id="cost_cultivation" name="cost_cultivation" class="form-control" step="0.01" required>
                </div>
                
                <div class="form-group">
                    <label for="production">Production:</label>
                    <input type="number" id="production" name="production" class="form-control" step="0.01" required>
                </div>
                <div class="form-group">
                    <label for="yield_value">Yield:</label>
                    <input type="number" id="yield_value" name="yield_value" class="form-control" step="0.01" required>
                </div>
                <div class="form-group">
                    <label for="temperature">Temperature:</label>
                    <input type="number" id="temperature" name="temperature" class="form-control" step="0.01" required>
                </div>
                <div class="form-group">
                    <label for="rainfall">Annual Rainfall:</label>
                    <input type="number" id="rainfall" name="rainfall" class="form-control" step="0.01" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Predict Price</button>
            </form>
        </div>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $crop = $_POST['crop'];
            $cost_cultivation = $_POST['cost_cultivation'];
            
            $production = $_POST['production'];
            $yield_value = $_POST['yield_value'];
            $temperature = $_POST['temperature'];
            $rainfall = $_POST['rainfall'];
           

            $command = escapeshellcmd("python3 /path/to/app4.py '$crop' $cost_cultivation  $production $yield_value $temperature $rainfall ");
            $output = shell_exec($command);

            echo "<div class='prediction-result'>";
            echo "<h3>Prediction Result:</h3>";
            echo "<p>$output</p>";
            echo "</div>";
        }
        ?>
    </div>


    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- menu -->
    <script src="js/jquery.slicknav.min.js"></script>
    <!-- custom -->
    <script src="js/custom.js"></script>
</body>

</html>
