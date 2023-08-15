<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanis Art Gallery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Add Bootstrap CSS link -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <style>
        .navbar {
            background-color: #2a3f54;
        }
        .navbar-brand {
            color: #fff;
            font-size: 24px;
            font-weight: bold;
        }
        .navbar-nav .nav-link {
            color: #fff;
            font-size: 18px;
        }
        .navbar-nav .nav-link:hover {
            color: #f39c12;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Sanis Art Gallery</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="http://localhost/final/card.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="sketchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Types of Sketches
                    </a>
                    <div class="dropdown-menu" aria-labelledby="sketchDropdown">
                        <a class="dropdown-item" href="http://localhost/final/allpencil.php">Pencil Sketch</a>
                        <a class="dropdown-item" href="http://localhost/final/acryliccard.php">Acrylic Sketch</a>
                        <a class="dropdown-item" href="http://localhost/final/nature.php">Nature Paintings</a>
                        <a class="dropdown-item" href="http://localhost/final/canvas.php">Canvas Paintings</a>
                    </div>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="http://localhost/final/reachus.php"><i class="fa fa-contact" style="font-size:30px;color:red"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/final/reachus.php"><i class="fa fa-address-book" style="font-size:30px;color:red"></i>
</a>
                    </li>
                    
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-shopping-cart" style="font-size:30px;color:red"></i>
</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="sketchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" style="font-size:30px;color:red"></i>
</a>
                        <div class="dropdown-menu" aria-labelledby="sketchDropdown">
                        <a class="dropdown-item" href="http://localhost/final/userlogin.php">User Login</a>
                        <a class="dropdown-item" href="http://localhost/final/addproduct.php">Admin Login</a>
                        </div>
                </li>
                    
                   
                    
                    
                </ul>
            </div>
        </div>
    </nav>

    <!-- Your content goes here -->

    <!-- Add Bootstrap JS scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
