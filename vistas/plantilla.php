<!DOCTYPE html>
<html lang="en" dir="ltr">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      <link rel="Preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Ballet&family=Poppins:ital,wght@1,500&display=swap" rel="stylesheet">
      <link rel="Stylesheet" href="vistas/css/Estilos.css">
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <head>
      <body>
        <?php
          #include()Se realiza para invocar el archivo que contiene el codigo html
          include "modulos/encabezado.php";
          include "modulos/Menu.php";
          if(isset($_GET["ruta"])){
            if($_GET["ruta"] == "ConsultaUbicacion" || 
              $_GET["ruta"] == "vistasss" || 
              $_GET["ruta"] == "NuevaUbicacion")
            include "modulos/".$_GET["ruta"].".php";      
          }
        ?>
      </body>
    </head>
  </html>