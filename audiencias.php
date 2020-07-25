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

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    </head>

    <body style="background-color:#ffffff;">
        <!-- TAG para Facebook -->
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v6.0"></script>
        <!-- Fin del TAG -->

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
                            <a class="nav-link" href="index.php">Participación ciudadana</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="prensa.php">Prensa y medios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="redessociales.php">#EstrategiaRedesSociales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="audiencias.php">Audiencias virtuales</a>
                        </li>
                    </ul>
                </div>
            </nav>


            <!-- Ponencias virtuales -->
            <br><br>
            <div class="row">
                <div class="col-md-3" align="center">
                    <iframe width="100%" height="200" src="https://www.youtube.com/embed/NHm5cRolCiU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div style="font-size: 12pt">Junio 13 | Ambiental</div>
                </div>

                <div class="col-md-3" align="center">
                    <iframe width="100%" height="200" src="https://www.youtube.com/embed/GGi4v4WK0Qk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div style="font-size: 12pt">Junio 20 | Servicios publicos</div>
                </div>

                <div class="col-md-3" align="center">
                    <iframe width="100%" height="200" src="https://www.youtube.com/embed/4bjY-c8433Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div style="font-size: 12pt">Junio 27 | Movilidad</div>
                </div>

                <div class="col-md-3" align="center">
                    <iframe width="100%" height="200" src="https://www.youtube.com/embed/LDEt5GYFRxI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div style="font-size: 12pt">Julio 4 | Espacio público</div>
                </div>
            </div>

            <br><hr>

            <div class="row">
                <div class="col-md-3" align="center">
                    <iframe width="100%" height="200" src="https://www.youtube.com/embed/TywpY-4q0SI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div style="font-size: 12pt">Julio 11 | Vivienda</div>
                </div>

                <div class="col-md-3" align="center">
                    <iframe width="100%" height="200" src="https://www.youtube.com/embed/7BY66yFylO4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div style="font-size: 12pt">Julio 18 | Usos del suelo</div>
                </div>

                <div class="col-md-3" align="center">
                    <iframe width="100%" height="200" src="https://www.youtube.com/embed/7fMMi7cTyIA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div style="font-size: 12pt">Julio 25 | Ordenamiento rural</div>
                </div>

                <div class="col-md-3" align="center">
                </div>
            </div>

            <br>
            <!-- Pie de pagina -->
            <footer class="pt-4 my-md-5 pt-md-5 border-top">
                <div class="row">
                <div class="col-12 col-md">
                    <center><img class="mb-2" src="images/logo_miniatura_administracion.png" alt="" width="100" height="100">
                    <small class="d-block mb-3 text-muted">&copy; 2020-2023</small>
                    <small class="d-block mb-3 text-muted">Secretaria Municipal de Planeación</small></center>
                </div>
                <div class="col-6 col-md">
                    <h5>Institucional</h5>
                    <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="https://www.dosquebradas.gov.co/web/">Página  oficial</a></li>
                    <li><a class="text-muted" href="https://www.dosquebradas.gov.co/web/index.php/nuestro-municipio/politicas-publicas">Políticas  publicas</a></li>
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
            $IDUSER = $_SERVER [ 'REMOTE_ADDR' ];
            $aux=999999;
            if (isset($_GET['id'])) $aux = $_GET['id'];

            $sql="SELECT * FROM visitas WHERE direccion_ip = '$IDUSER' AND fecha=CURDATE() AND aporte=$aux";
            $result= mysqli_query($sle,$sql);
            if(mysqli_num_rows($result)==0)
            {
                $sql="INSERT INTO visitas VALUES(NULL,'$IDUSER',CURDATE(),'999999')";
                mysqli_query($sle,$sql);
            }

            $sql = "UPDATE contador SET portada = portada + 1 WHERE id = 1";
            mysqli_query($sle,$sql)or die (mysql_error());
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
