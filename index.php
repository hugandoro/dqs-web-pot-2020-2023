<?php
header('Content-Type: text/html; charset=UTF-8');
error_reporting(0);
$currentPage = $_SERVER["PHP_SELF"];
require_once('bd/sle.php');
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

    <script src="ajax_arbol_plan.js"></script>

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
                        <a class="nav-link" href="index.php">Construccion POT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#AnclaParticipacion">Participación ciudadana</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="prensa.php">Prensa y medios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="redessociales.php">#FormulemosPOT</a>
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
                <div style="font-size: 28pt"><b>Plan de Ordenamiento Territorial - Dosquebradas</b></div>
                <div style="font-size: 18pt">Formulación y socialización</div>
                <hr>
                <center><a href="#"><img class="mb-2" src="images/calendario2.jpg" alt="" width="100%"></a></center>
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
            <div class="col-lg-3 mb-3">
                <div class="card h-100 box-shadow" align="center">
                    <div class="card-header bg-secondary text-white">
                        <h3 class="my-0 font-weight-normal">Seguimiento y evaluación</h3>
                    </div>

                    <div><a href="dimension1.php"><img class="card-img-top" src="images/D1.png"></a></div> 

                    <div class="card-body">
                        <!-- <h1 class="card-title pricing-card-title">Dimension N° 1</h1>-->
                        <div>Corresponde a los resultados obtenidos respecto de los objetivos planteados en el Plan de Ordenamiento Territorial vigente el Acuerdo 014 de 2.000.  </div><br>
                        <!--<a class='btn btn-outline-primary btn-lg' href="dimension1.php">Opina y participa</a>-->
                        <a class='btn btn-outline-dark btn-sm' href="dimension1.php">Conoce y participa</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mb-3">
                <div class="card h-100 box-shadow" align="center">
                    <div class="card-header bg-secondary text-white">
                        <h3 class="my-0 font-weight-normal">Memoria justificativa</h3>
                    </div>

                    <div><a href="dimension2.php"><img class="card-img-top" src="images/D2.png"></a></div> 

                    <div class="card-body">
                        <!-- <h1 class="card-title pricing-card-title">Dimension N° 1</h1>-->
                        <div>Contiene la necesidad, la conveniencia y el propósito de las modificaciones que se pretenden efectuar, identificando la descripción técnica y la evaluación de sus impactos sobre el Plan de Ordenamiento vigente.</div><br>
                        <!--<a class='btn btn-outline-primary btn-lg' href="dimension2.php">Opina y participa</a>-->
                        <a class='btn btn-outline-dark btn-sm' href="dimension2.php">Conoce y participa</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mb-3">
                <div class="card h-100 box-shadow" align="center">
                    <div class="card-header bg-secondary text-white">
                        <h3 class="my-0 font-weight-normal">Componente diagnostico</h3>
                    </div>

                    <div><a href="dimension3.php"><img class="card-img-top" src="images/D3.png"></a></div> 

                    <div class="card-body">
                        <!-- <h1 class="card-title pricing-card-title">Dimension N° 1</h1>-->
                        <div>Resumen de las características del territorio en sus componentes urbano y rural realizando una evaluación de la situación actual. </div><br>
                        <!--<a class='btn btn-outline-primary btn-lg' href="dimension3.php">Opina y participa</a>-->
                        <a class='btn btn-outline-dark btn-sm' href="dimension3.php">Conoce y participa</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mb-3">
                <div class="card h-100 box-shadow" align="center">
                    <div class="card-header bg-secondary text-white">
                        <h3 class="my-0 font-weight-normal">Documento tecnico</h3>
                    </div>

                    <div><a href="dimension4.php"><img class="card-img-top" src="images/D4.png"></a></div> 

                    <div class="card-body">
                        <!-- <h1 class="card-title pricing-card-title">Dimension N° 1</h1>-->
                        <div>Instrumento que contiene las disposiciones técnicas y normativas en los componentes general, urbano y rural, para dinamizar el modelo de ocupación propuesto e innovador para el municipio con proyección a 12 años. </div><br>
                        <!--<a class='btn btn-outline-primary btn-lg' href="dimension4.php">Opina y participa</a>-->
                        <a class='btn btn-outline-dark btn-sm' href="dimension4.php">Conoce y participa</a>
                    </div>
                </div>
            </div>
        </div>

         <!-- Tarjetas -->
        <div class="row">
            <div class="col-lg-12 mb-12">
                <div class="card h-100 box-shadow" align="center">
                    <div class="card-header bg-secondary text-white">
                        <h3 class="my-0 font-weight-normal">Mapas</h3>
                    </div>

                    <div><a href="dimension5.php"><img class="card-img-top" src="images/D5.png"></a></div> 

                    <div class="card-body">
                        <!-- <h1 class="card-title pricing-card-title">Dimension N° 1</h1>-->
                        <div>La cartografía, elemento dinámico para el conocimiento espacial de la Municipalidad.</div><br>
                        <!--<a class='btn btn-outline-primary btn-lg' href="dimension1.php">Opina y participa</a>-->
                        <a class='btn btn-outline-dark btn-sm' href="dimension5.php">Conoce y participa</a>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <!-- Texto a 3 columnas -->
        <?php
        $sql = "SELECT * FROM contador WHERE id = 1";
        $result = mysqli_query($sle,$sql) or die(mysql_error());
        $contador = mysqli_fetch_row($result);

        $sql = "SELECT SUM(aprobacion) totalAprobacion FROM aportes";
        $result = mysqli_query($sle,$sql) or die(mysql_error());
        $votos = mysqli_fetch_row($result);

        $sql = "SELECT * FROM aportes";
        $result = mysqli_query($sle,$sql) or die(mysql_error());
        $aportes = mysqli_num_rows($result);
        ?>

        <div class="row">
            <div class="col-md-4" align="center">
                <div style="font-size: 25pt">Visitas</div>
                <div style="font-size: 60pt"><b><?php echo $contador[1]; ?></b></div>
            </div>
            <div class="col-md-4" align="center">
                <div style="font-size: 25pt">Aportes</div>
                <div style="font-size: 60pt"><b><?php echo $aportes; ?></b></div>
            </div>
            <div class="col-md-4" align="center">
                <div style="font-size: 25pt">Corazones</div>
                <div style="font-size: 60pt"><b><?php echo $votos[0]; ?></b></div>
            </div>
        </div>


        <!-- Pie de pagina -->
        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-12 col-md">
                    <center><img class="mb-2" src="images/logo_miniatura_administracion.png" alt="" width="100" height="100">
                        <small class="d-block mb-3 text-muted">Secretaria Municipal de Planeación</small>
                        <small class="d-block mb-3 text-muted">&copy; 2020-2023</small></center>
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
    $result = mysqli_query($sle,$sql);
    if (mysqli_num_rows($result) == 0) {
        $sql = "INSERT INTO visitas VALUES(NULL,'$IDUSER',CURDATE(),'999999')";
        mysqli_query($sle,$sql);
    }

    $sql = "UPDATE contador SET portada = portada + 1 WHERE id = 1";
    mysqli_query($sle,$sql) or die(mysql_error());
    ?>

    <!-- ChatBOT-->
    <script SameSite="None; Secure" src="https://static.landbot.io/landbot-widget/landbot-widget-1.0.0.js"></script>
    <script>
        var myLandbot = new LandbotLivechat({
            index: 'https://landbot.io/u/H-418686-4VRLIWRAZFTWWSUO/index.html',
        });
    </script>
    <!-- Fin del codigo ChatBOT-->

</body>

</html>