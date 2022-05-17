<?php 
    require_once("assets/head.php");
    require_once("classes/classDocs.php");

    $obj = new Documentos;
    

?>
<div class="container">

<h1>Donwload Documentações</h1><br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<a href=<?php Documentos::smartlabeldoc_download(); ?>> Download </a><br>
<a href=<?php Documentos::smartlabeldoc_visualizar(); ?> target="_blank"> Visualizar </a>




