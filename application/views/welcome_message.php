<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinemax Inicio</title>
</head>

<body>
    <div style="background-color: #e3f2fd;" class="text-center">
        <img src="<?php echo base_url("assets/images/logo.png"); ?>" width="200px" alt="Logo">
    </div>

    <div >
        <div id="myCarousel" class="carousel slide" data-ride="carousel" width="110px">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                
            </ol>

            <!-- Wrapper for slides -->
            <div class="text-center">
                <div class="carousel-inner" role="listbox">

                    <div class="item active img-responsive center-block">
                        <img class="img-responsive center-block" width="100%" height="110px" align="center"
                            src="assets/images/cr1.jpg" alt="cr1">
                    </div>



                    <div class="item">
                        <img class="img-responsive center-block" width="100%" height="110px" src="assets/images/cr2.jpg"
                            alt="cr2">
                    </div>

                    
            </div>


            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next" role="button">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</body>

</html>