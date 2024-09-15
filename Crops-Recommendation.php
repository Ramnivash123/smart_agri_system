<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Agri IQ - Plant Disease Prediction</title>
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
        .weather-section {
            margin-top: 50px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
        }

        .services-section {
            margin-top: 50px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
        }

        .service-item {
            text-align: center;
            margin-bottom: 20px;
        }

        .service-link {
            display: block;
            text-decoration: none;
            color: #333;
        }

        .service-link img {
            width: 50px;
            height: auto;
            margin-bottom: 10px;
        }

        .service-link span {
            display: block;
            font-size: 16px;
        }

        .prediction-result {
            margin-top: 20px;
            padding: 15px;
            background-color: #e0ffe0;
            border: 1px solid #c1e6c1;
            border-radius: 5px;
        }

        .range-section {
            margin-top: 30px;
            padding: 15px;
            background-color: #f1f1f1;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .range-item {
            margin-bottom: 10px;
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

    <!-- Crops Recommendation -->
    <div class="container">
        <h2 class="text-center">Crop Recommendation</h2>
        <form id="prediction-form" method="POST">
            <div class="form-group">
                <label for="Nitrogen">Nitrogen:</label>
                <input type="number" class="form-control" id="Nitrogen" name="Nitrogen" required>
            </div>
            <div class="form-group">
                <label for="Phosphorus">Phosphorus:</label>
                <input type="number" class="form-control" id="Phosphorus" name="Phosphorus" required>
            </div>
            <div class="form-group">
                <label for="Potassium">Potassium:</label>
                <input type="number" class="form-control" id="Potassium" name="Potassium" required>
            </div>
            <div class="form-group">
                <label for="Temperature">Temperature:</label>
                <input type="number" step="0.01" class="form-control" id="Temperature" name="Temperature" required>
            </div>
            <div class="form-group">
                <label for="Humidity">Humidity:</label>
                <input type="number" step="0.01" class="form-control" id="Humidity" name="Humidity" required>
            </div>
            <div class="form-group">
                <label for="Ph">pH:</label>
                <input type="number" step="0.01" class="form-control" id="Ph" name="Ph" required>
            </div>
            <div class="form-group">
                <label for="Rainfall">Rainfall:</label>
                <input type="number" step="0.01" class="form-control" id="Rainfall" name="Rainfall" required>
            </div>
            <button type="button" id="submit-btn" class="btn btn-primary">Submit</button>
        </form>

        <!-- Input Ranges Section -->
        <div class="range-section">
            <h3>Input Ranges</h3>
            <div class="range-item">
                <strong>Nitrogen:</strong> 0 - 140
            </div>
            <div class="range-item">
                <strong>Phosphorus:</strong> 5 - 145
            </div>
            <div class="range-item">
                <strong>Potassium:</strong> 5 - 205
            </div>
            <div class="range-item">
                <strong>Temperature:</strong> 8.83 - 43.68°C
            </div>
            <div class="range-item">
                <strong>Humidity:</strong> 14.26 - 99.98%
            </div>
            <div class="range-item">
                <strong>pH:</strong> 3.5 - 9.94
            </div>
            <div class="range-item">
                <strong>Rainfall:</strong> 20.21 - 298.56 mm
            </div>
        </div>

        <div id="prediction-result" class="prediction-result"></div>
    </div>

    <!-- footer -->
    
    <!-- end footer -->

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        document.getElementById('submit-btn').addEventListener('click', function() {
            const formData = new FormData(document.getElementById('prediction-form'));
            
            fetch('http://127.0.0.1:5000/predict', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                document.getElementById('prediction-result').innerText = 'Predicted Crop: ' + data.prediction;
            })
            .catch(error => console.error('Error:', error));
        });
    </script>
</body>

</html>
