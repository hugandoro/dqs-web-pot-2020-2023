<?php
header('Content-Type: text/html; charset=UTF-8');
error_reporting(0);
$currentPage = $_SERVER["PHP_SELF"];
require_once('bd/sle.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="application-name" content="Plan de Ordenamiento Territorial POT - Dosquebradas 2020 / 2023">
    <meta name="author" content="Alcaldia Municipio de Dosquebradas">
    <meta name="description" content="Plan de Ordenamiento Territorial POT Dosquebradas">
    <meta name="generator" content="www.pot.dosquebradas.gov.co">
    <meta name="keywords" content="dosquebradas, plan de ordenamiento territorial, pot, territorial">

    <title>POT Dosquebradas - Plan de Ordenamiento Territorial</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<!-- <body style="background-color:#F1F7E5;"> -->

<body style="background-color:#ffffff;">

    <div class="container">

        <!-- Barra de navegacion superior -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
            <a class="navbar-brand" href="index.php"><img src="images/logo_miniatura_administracion.png" width="50" height="50" alt=""></a>
            <a class="navbar-brand" href="index.php"><img src="images/logo_miniatura_pot.png" width="50" height="50" alt=""></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample09">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="https://pot.dosquebradas.gov.co/repositorio/POT%20-%20Diciembre%2030%20-%202020/7%20-%20Participacion%20democratica/">Participación democratica POT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="prensa.php">Prensa y medios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://pot.dosquebradas.gov.co/repositorio/PLANES%20PARCIALES/">Planes parciales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="audiencias.php">Audiencias virtuales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="territoriales.php">Audiencias territoriales</a>
                    </li>
                </ul>
            </div>
        </nav>

        <br>

        <div class="row">
            <div class="col-md-12" align="center">
                <div style="font-size: 24pt"><b>Plan de Ordenamiento Territorial - Dosquebradas</b></div>
                <div style="font-size: 36pt"><b>POT 2023 - 2035</b></div>
                <hr>
                <center><a href="#"><img class="mb-2" src="images/banner.jpg" alt="" width="100%"></a></center>
            </div>
            <!-- <div class="col-md-12" align="center"> -->
            <!-- <a class='btn btn-success btn-lg btn-block' href='https://forms.gle/gxBDfLTXD3YkuehQ8' target="_blank"><h4>Inscripción Ponencias - Proyectos estratégicos, instrumentos de gestión</h4></a>-->
            <!-- <a class='btn btn-success btn-lg btn-block' href='#'><h4>.:: Inscripción CERRADA - Proyectos estratégicos ::.</h4></a> -->
            <!-- </div> -->
        </div>

        <hr>
        <br id="AnclaParticipacion">

        <!-- Tarjetas -->
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100 box-shadow" align="center">
                    <div class="card-header bg-success text-white">
                        <h3 class="my-0 font-weight-normal">Propuesta diciembre 20 de 2022</h3>
                    </div>

                    <div><a href="/repositorio/POT - Diciembre 20 - 2022/"><img class="card-img-top" src="images/D8.png"></a></div>

                    <div class="card-body">
                        <a class='btn btn-outline-dark btn-sm' href="/repositorio/POT - Diciembre 20 - 2022/">Conoce...</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card h-100 box-shadow" align="center">
                    <div class="card-header bg-secondary text-white">
                        <h3 class="my-0 font-weight-normal">Propuesta diciembre 30 de 2020</h3>
                    </div>

                    <div><a href="/repositorio/POT - Diciembre 30 - 2020/"><img class="card-img-top" src="images/D3.png"></a></div>

                    <div class="card-body">
                        <a class='btn btn-outline-dark btn-sm' href="/repositorio/POT - Diciembre 30 - 2020/">Conoce...</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card h-100 box-shadow" align="center">
                    <div class="card-header bg-secondary text-white">
                        <h3 class="my-0 font-weight-normal">Propuesta diciembre 30 de 2019</h3>
                    </div>

                    <div><a href="/repositorio/POT - Diciembre 30 - 2019/"><img class="card-img-top" src="images/D1.png"></a></div>

                    <div class="card-body">
                        <a class='btn btn-outline-dark btn-sm' href="/repositorio/POT - Diciembre 30 - 2019/">Conoce...</a>
                    </div>
                </div>
            </div>
        </div>


        <hr>

        <!-- Texto a 3 columnas -->
        <?php

        // Consulta contador de visitas
        $idContador = 1;
        $idContador = mysqli_real_escape_string($sle, $idContador);

        $sql = "SELECT * FROM contador WHERE id = ?";
        $sentencia = mysqli_prepare($sle, $sql) or die("Unable to prepare statement: " . $sle->error);
        mysqli_stmt_bind_param($sentencia, "i", $idContador);
        mysqli_stmt_execute($sentencia) or die("Unable to execute query: " . $sentencia->error);
        $resultado = mysqli_stmt_get_result($sentencia);
        $contador = mysqli_fetch_array($resultado);
        // Fin de la consulta

        // Consulta total aportes
        $sql = "SELECT * FROM aportes";
        $sentencia = mysqli_prepare($sle, $sql) or die("Unable to prepare statement: " . $sle->error);
        mysqli_stmt_execute($sentencia) or die("Unable to execute query: " . $sentencia->error);
        $resultado = mysqli_stmt_get_result($sentencia);
        $aportes = mysqli_num_rows($resultado);
        // Fin de la consulta

        // Consulta total de aprobacion o sumatoria de corazones
        $sql = "SELECT SUM(aprobacion) totalAprobacion FROM aportes";
        $sentencia = mysqli_prepare($sle, $sql) or die("Unable to prepare statement: " . $sle->error);
        mysqli_stmt_execute($sentencia) or die("Unable to execute query: " . $sentencia->error);
        $resultado = mysqli_stmt_get_result($sentencia);
        $votos = mysqli_fetch_array($resultado);
        // Fin de la consulta
        ?>

        <div class="row">
            <div class="col-md-6" align="center">
                <div style="font-size: 25pt">Visitas</div>
                <div style="font-size: 60pt"><b><?php echo htmlspecialchars($contador['portada']); ?></b></div>
            </div>
            <!--<div class="col-md-4" align="center">
                <div style="font-size: 25pt">Aportes</div>
                <div style="font-size: 60pt"><b><?php echo htmlspecialchars($aportes); ?></b></div>
            </div>-->
            <div class="col-md-6" align="center">
                <div style="font-size: 25pt">Corazones</div>
                <div style="font-size: 60pt"><b><?php echo htmlspecialchars($votos[0]); ?></b></div>
            </div>
        </div>


        <!-- Pie de pagina -->
        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-12 col-md">
                    <center><img class="mb-2" src="images/logo_miniatura_administracion.png" alt="" width="100" height="100">
                        <small class="d-block mb-3 text-muted">Secretaria Municipal de Planeación</small>
                        <small class="d-block mb-3 text-muted">&copy; 2020-2023</small>
                    </center>
                </div>
                <div class="col-6 col-md">
                    <h5>Institucional</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="https://www.dosquebradas.gov.co/web/">Página oficial</a></li>
                        <li><a class="text-muted" href="https://www.dosquebradas.gov.co/web/index.php/nuestro-municipio/politicas-publicas">Políticas publicas</a></li>
                        <li><a class="text-muted" href="https://www.dosquebradas.gov.co/web/index.php/component/jdownloads/category/258-planes-y-documentos-adicionales?Itemid=0">MIPG</a></li>
                        <li><a class="text-muted" href="https://www.dosquebradas.gov.co/web/index.php/nuestro-municipio/plan-de-ordenamiento-territorial-pot/documentos-descargables">Plan de ordenamiento territorial</a></li>
                        <li><a class="text-muted" href="https://www.dosquebradas.gov.co/web/index.php/about/gaceta-municipal/decretos/category/2-normatividad">Normatividad</a></li>
                        <li><a class="text-muted" href="https://www.dosquebradas.gov.co/web/index.php/about/rendicion-de-cuentas">Rendición de cuentas</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Referentes de consulta</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="https://www.undp.org/content/undp/es/home/sustainable-development-goals.html">ODS - Objetivos del Desarrollo Sostenible</a></li>
                        <li><a class="text-muted" href="https://plandesarrollo.dosquebradas.gov.co/">Plan de desarrollo municipal</a></li>
                        <li><a class="text-muted" href="https://www.risaralda.gov.co/loader.php?lServicio=Tools2&lTipo=descargas&lFuncion=descargar&idFile=33546">POT Departamento de Risaralda</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <img class="mb-2" src="images/logo_pot_500.png" alt="" width="150">
                </div>
            </div>
        </footer>
    </div>

    <?php
    $IDUSER = $_SERVER['REMOTE_ADDR'];
    $aux = 999999;
    if (isset($_GET['id'])) $aux = $_GET['id'];

    $sql = "SELECT * FROM visitas WHERE direccion_ip = '$IDUSER' AND fecha=CURDATE() AND aporte=$aux";
    $result = mysqli_query($sle, $sql);
    if (mysqli_num_rows($result) == 0) {
        $sql = "INSERT INTO visitas VALUES(NULL,'$IDUSER',CURDATE(),'999999')";
        mysqli_query($sle, $sql);
    }

    $sql = "UPDATE contador SET portada = portada + 1 WHERE id = 1";
    mysqli_query($sle, $sql) or die(mysql_error());
    ?>

</body>

</html>