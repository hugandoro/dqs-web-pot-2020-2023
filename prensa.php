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
                            <a class="nav-link" href="https://pot.dosquebradas.gov.co/repositorio/POT%20-%20Diciembre%2030%20-%202020/7%20-%20Participacion%20democratica/">Participación democratica POT</a>
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

            <div class="row">
                <div class="text-center col-lg-12 mb-6">
                    <br>
                    <center>
                    <table>
                        <tr>
                            <td><hr><center><h3 class="my-0 font-weight-normal">#FormulemosPOT</center></h3><td>
                        </tr>
                    </table>    
                    </center>               
                    <hr>
                </div>
            </div>

            <!-- Boletines -->
            <br>
            <div class="row">
                <div class="col-md-12" align="center">
                    <div style="font-size: 20pt">Boletines<br><br></div>
                </div>
                <div class="col-md-12" align="center">
                    <table class="table">
                        <tr>
                            <td style="font-size: 13pt">Agosto 11 de 2020</td>
                            <td style="font-size: 13pt">Culminadas las audiencias temáticas de la socialización del Plan de Ordenamiento Territorial</td>
                            <td>
                                <a href="https://www.dosquebradas.gov.co/web/index.php/215-secretarias/planeacion/noticias/2020/3837-culminadas-las-audiencias-tematicas-de-la-socializacion-del-plan-de-ordenamiento-territorial">
                                    <picture><img class='img-responsive' src="images/icono-pdf.png" width="35px"></picture>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td style="font-size: 13pt">Agosto 02 de 2020</td>
                            <td style="font-size: 13pt">Con masiva participación se realizó la octava audiencia pública virtual del POT</td>
                            <td>
                                <a href="https://www.dosquebradas.gov.co/web/index.php/215-secretarias/planeacion/noticias/2020/3823-con-masiva-participacion-se-realizo-la-octava-audiencia-publica-virtual-del-pot">
                                    <picture><img class='img-responsive' src="images/icono-pdf.png" width="35px"></picture>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td style="font-size: 13pt">Julio 30 de 2020</td>
                            <td style="font-size: 13pt">Ordenamiento rural, tema de gran interés en el POT</td>
                            <td>
                                <a href="https://www.dosquebradas.gov.co/web/index.php/215-secretarias/planeacion/noticias/2020/3806-ordenamiento-rural-tema-de-gran-interes-en-el-pot">
                                    <picture><img class='img-responsive' src="images/icono-pdf.png" width="35px"></picture>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td style="font-size: 13pt">Julio 22 de 2020</td>
                            <td style="font-size: 13pt">Gremio de comerciantes participó en la formulación del POT</td>
                            <td>
                                <a href="https://www.dosquebradas.gov.co/web/index.php/215-secretarias/planeacion/noticias/2020/3788-gremio-de-comerciantes-participo-en-la-formulacion-del-pot">
                                    <picture><img class='img-responsive' src="images/icono-pdf.png" width="35px"></picture>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td style="font-size: 13pt">Julio 13 de 2020</td>
                            <td style="font-size: 13pt">Vivienda, componente de la quinta audiencia pública del POT en Dosquebradas</td>
                            <td>
                                <a href="https://www.dosquebradas.gov.co/web/index.php/215-secretarias/planeacion/noticias/2020/3769-vivienda-componente-de-la-quinta-audiencia-publica-del-pot-en-dosquebradas">
                                    <picture><img class='img-responsive' src="images/icono-pdf.png" width="35px"></picture>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td style="font-size: 13pt">Julio 07 de 2020</td>
                            <td style="font-size: 13pt">Espacio Público y Equipamiento Colectivo, de gran interés para la comunidad</td>
                            <td>
                                <a href="https://www.dosquebradas.gov.co/web/index.php/215-secretarias/planeacion/noticias/2020/3748-espacio-publico-y-equipamiento-colectivo-de-gran-interes-para-la-comunidad">
                                    <picture><img class='img-responsive' src="images/icono-pdf.png" width="35px"></picture>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td style="font-size: 13pt">Julio 05 de 2020</td>
                            <td style="font-size: 13pt">En coordinación con la CARDER, inician mesas de trabajo para el POT en Dosquebradas</td>
                            <td>
                                <a href="https://www.dosquebradas.gov.co/web/index.php/215-secretarias/planeacion/noticias/2020/3744-en-coordinacion-con-la-carder-inician-mesas-de-trabajo-para-el-pot-en-dosquebradas">
                                    <picture><img class='img-responsive' src="images/icono-pdf.png" width="35px"></picture>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td style="font-size: 13pt">Julio 01 de 2020</td>
                            <td style="font-size: 13pt">Continúan audiencias participativas virtuales del POT en Dosquebradas</td>
                            <td>
                                <a href="https://www.dosquebradas.gov.co/web/index.php/215-secretarias/planeacion/noticias/2020/3728-continuan-audiencias-participativas-virtuales-del-pot-en-dosquebradas">
                                    <picture><img class='img-responsive' src="images/icono-pdf.png" width="35px"></picture>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td style="font-size: 13pt">Junio 24 de 2020</td>
                            <td style="font-size: 13pt">Con participación ciudadana se sigue ajustando el POT en Dosquebradas</td>
                            <td>
                                <a href="https://www.dosquebradas.gov.co/web/index.php/215-secretarias/planeacion/noticias/2020/3707-con-participacion-ciudadana-se-sigue-ajustando-el-pot-en-dosquebradas">
                                    <picture><img class='img-responsive' src="images/icono-pdf.png" width="35px"></picture>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td style="font-size: 13pt">Junio 16 de 2020</td>
                            <td style="font-size: 13pt">Participación ciudadana visible en el Componente Ambiental del POT</td>
                            <td>
                                <a href="https://www.dosquebradas.gov.co/web/index.php/215-secretarias/planeacion/noticias/2020/3686-participacion-ciudadana-visible-en-el-componente-ambiental-del-pot">
                                    <picture><img class='img-responsive' src="images/icono-pdf.png" width="35px"></picture>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td style="font-size: 13pt">Junio 06 de 2020</td>
                            <td style="font-size: 13pt">Alcaldía de Dosquebradas y Consejo Territorial de Planeación se articulan por el POT</td>
                            <td>
                                <a href="https://www.dosquebradas.gov.co/web/index.php/215-secretarias/planeacion/noticias/2020/3661-alcaldia-de-dosquebradas-y-consejo-territorial-de-planeacion-se-articulan-por-el-pot">
                                    <picture><img class='img-responsive' src="images/icono-pdf.png" width="35px"></picture>
                                </a>
                            </td>
                        </tr>
                    </table>
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


    </body>
</html>
