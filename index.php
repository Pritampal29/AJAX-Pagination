<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/bootstrap.min.css">
    <style>
        .load-more{
            display:none;
        }
        .active{
            background-color: #000 !important;
        }
    </style>
    <title>AJAX Pagination</title>
</head>

<body>
    <div class="container py-5 text-center">
        <div class="row">
            <div id="load_data" class="data">
                <h1>Pagination With Ajax</h1>
                <table id="dataTable" class="table border">
                    
                </table>

                <div class="load-more" id="load-more-icn">
                    <img src="./assets/skateboarding.gif" alt="">
                </div>
            </div>
        </div>
    </div>


    <script src="./assets/jquery.min.js"></script>
    <script src="ajax.js"></script>
</body>

</html>