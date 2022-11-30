<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineMax</title>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body ">
<!-- <div class="text-center">
    <img  src="<?php echo base_url("assets/images/logo.png");?>" width="60px" alt="Logo">
</div> -->
<nav class="navbar navbar-light " style="background-color: #ff0000; hover:#ffffff; ">
  

  <div class="container-fluid">
  <div>
    <a class="navbar-brand" >
        <img src="<?php echo base_url("assets/images/logo.png");?>" width="40px" height="40px" class="d-inline-block " alt="logo">
      
      </a
      
  
  </div>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"  aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a style="color:white;"class="navbar-brand" href="<?php echo site_url("");?>">CineMax</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Peliculas <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url("peliculas/index");?>">Listado de Peliculas</a></li>
            <li role="separator" class="divider"></li>
            
          
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Salas <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url("salas/index");?>">Listado de Salas</a></li>
            <li role="separator" class="divider"></li>
           
          
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Snacks <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url("snacks/index");?>">Listado de Snacks</a></li>
            
          
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Trabajador <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url("trabajadores/index");?>">Listado de Trabajadores</a></li>
          
          
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sucursales <span class="caret"></span></a>
          <ul class="dropdown-menu" >
            <li><a href="<?php echo site_url("sucursales/index");?>">Listado de Sucursales</a></li>
     
          
          </ul>
        </li>
        

      </ul>
      <form class="navbar-form navbar-left">
        
      </form>
      <ul class="nav navbar-nav navbar-right">
      <li class="dropdown" style="background-color:blue;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-tag"></i> Boleto <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url("boletos/index");?>">Listado de boletos</a></li>
            <li role="separator" class="divider"></li>
            
          
          </ul>
        </li>
        
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<style>
  .navbar  a{
    color:white;
  }
  .navbar  li{
    color:black;
  }
  .navbar-header a{
    color:white;
  }
  .navbar  a:hover{
    color:black;
  }
  .nav .open>a, .nav .open>a:focus, .nav .open>a:hover {
    background-color: blueviolet;
    
}


.nav > li > a:hover{
    background-color:blue;
}
</style>
    
