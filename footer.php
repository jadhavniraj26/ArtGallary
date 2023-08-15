<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
    <style>
    /* ... Your existing CSS rules ... */

    /* Sticky Footer CSS */
    .content {
        min-height: calc(100vh - 123px); /* Adjust the value based on your navbar and footer heights */
    }

    .footer {
        background-color: #2a3f54;
        color: #fff;
        padding: 20px 0;
        text-align: center;
        
        bottom: 0;
    }
</style>

</head>
<body>
<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Contact Us</h3>
                    <p>Email: info@sanisartgallery.com</p>
                    <p>Phone: +1 123-456-7890</p>
                </div>
                <div class="col-md-6">
                    <h3>Follow Us</h3>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>