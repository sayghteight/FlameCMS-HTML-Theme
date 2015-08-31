<?php

/* 
* Nombre : Modulo de SEO (Navegacion)
* Autor : Ares
* Versión : 0.1Alpha
* Web : Reignofnorrath.es
 */

$page = $_GET['p'];

if ($page == "")
{
    @include('application/pages/index.php');
}

switch($page)
{    
    case "index":
        @include('application/pages/index.php');
        break;
    default:
        @include('application/pages/404.html');
}
