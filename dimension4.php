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

            <div class="row">
                <div class="text-center col-lg-12 mb-6">
                    <center>
                        <br><div style="font-size: 34pt">Formulación</div><br>
                    </center>

                    <?php 
                        //FUNCION PARA GUARDAR UN APORTE
                        if (isset($_POST['email']))
                        {
                            mysqli_query($sle,"SET NAMES 'utf8'");
                            $nombre = $_POST['nombre'];
                            $email = $_POST['email'];
                            $problema = $_POST['problema'];
                            $idea = $_POST['idea'];

                            $nombre = mysqli_real_escape_string($sle, $nombre);
                            $email = mysqli_real_escape_string($sle, $email);
                            $problema = mysqli_real_escape_string($sle, $problema);
                            $idea = mysqli_real_escape_string($sle, $idea);

                            $sql = "INSERT INTO aportes (dimension, nombre, email, diagnostico, idea, aprobacion) VALUES ('4', ?, ?, ?, ?,'0')";
                            $sentencia = mysqli_prepare($sle, $sql) or die("Unable to prepare statement: " . $sle->error);
                            mysqli_stmt_bind_param($sentencia, "ssss", $nombre, $email, $problema, $idea);
                            mysqli_stmt_execute($sentencia) or die("Unable to execute query: " . $sentencia->error);

                            echo "<center><picture><img class='img-responsive' src='images/banner4.jpg'></picture></center>";

                            //Versiones documentos
                            echo "<br>";
                            echo "<table class = 'table table-bordered'>";
                            echo "<tr class='table-light'>";
                            echo "<td><div style='font-size: 12pt; text-align: left'><b>POT Municipio de Dosquebradas - Version 30 de Diciembre 2020</b></div></td>";
                            echo "<td><a class='btn btn-info btn-lg btn-block' href='https://pot.dosquebradas.gov.co/repositorio/POT%20-%20Diciembre%2030%20-%202020/4%20-%20Formulacion/'> Descargar </a></td>";
                            echo "</tr>";
                            echo "<tr class='table-light'>";
                            echo "<td><div style='font-size: 12pt; text-align: left'>POT Municipio de Dosquebradas - Version 30 de Diciembre 2019</div></td>";
                            echo "<td><a class='btn btn-info btn-lg btn-block' href='https://pot.dosquebradas.gov.co/repositorio/POT%20-%20Diciembre%2030%20-%202019/4%20-%20Documento%20tecnico/'> Descargar </a></td>";
                            echo "</tr>";
                            echo "</table>";
                            // Fin versiones documentos

                            echo "<br><a class='btn btn-danger btn-lg btn-block' href='dimension4.php?formulario=nuevo'><h2>.:: Cuéntanos tu propuesta ::.</h2></a>";
                            echo "<br><h4 class='display-6'>Gracias por tu aporte</h4>";
                        }

                        //FUNCION CARGAR UN FORMULARIO
                        elseif (isset($_GET['formulario']))
                        {
                    ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <form name='aporte' role='form' method='post' action='dimension4.php'>
                                        <fieldset>
                                            <legend class="text-center header">Cuentanos tu idea o propuesta</legend>
                        
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <input maxlength="100" id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control" required>
                                                </div>
                                            </div>
                        
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <input maxlength="100" id="email" name="email" type="email" placeholder="Email" class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <textarea maxlength="300" class="form-control" id="problema" name="problema" placeholder="Que problemática relacionada con el ordenamiento del territorio percibe usted en DOSQUEBRADAS ?" rows="3"></textarea>
                                                </div>
                                            </div>
                        
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <textarea maxlength="300" class="form-control" id="idea" name="idea" placeholder="Cuéntanos brevemente tu idea para mejorar..." rows="3" required></textarea>
                                                </div>
                                            </div>
                        
                                            <div class="form-group">
                                                <div class="col-md-12 text-center">
                                                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                    <?php
                        } 

                        //FUNCION PARA REGISTRAR VOTO
                        elseif (isset($_GET['id']))
                        {
                            $IDUSER = $_SERVER [ 'REMOTE_ADDR' ];
                            $aux = $_GET['id'];
                            $sql="SELECT * FROM visitas WHERE direccion_ip = '$IDUSER' AND fecha=CURDATE() AND aporte=$aux";
                            $result= mysqli_query($sle,$sql);
                            if(mysqli_num_rows($result)==0)
                            {
                                $id = $_GET['id'];
                                $sql = "UPDATE aportes SET aprobacion = aprobacion + 1 WHERE id = '$id'";
                                mysqli_query($sle,$sql)or die (mysql_error());
                            }

                            echo "<center><picture><img class='img-responsive' src='images/banner4.jpg'></picture></center>";

                            //Versiones documentos
                            echo "<br>";
                            echo "<table class = 'table table-bordered'>";
                            echo "<tr class='table-light'>";
                            echo "<td><div style='font-size: 12pt; text-align: left'><b>POT Municipio de Dosquebradas - Version 30 de Diciembre 2020</b></div></td>";
                            echo "<td><a class='btn btn-info btn-lg btn-block' href='https://pot.dosquebradas.gov.co/repositorio/POT%20-%20Diciembre%2030%20-%202020/4%20-%20Formulacion/'> Descargar </a></td>";
                            echo "</tr>";
                            echo "<tr class='table-light'>";
                            echo "<td><div style='font-size: 12pt; text-align: left'>POT Municipio de Dosquebradas - Version 30 de Diciembre 2019</div></td>";
                            echo "<td><a class='btn btn-info btn-lg btn-block' href='https://pot.dosquebradas.gov.co/repositorio/POT%20-%20Diciembre%2030%20-%202019/4%20-%20Documento%20tecnico/'> Descargar </a></td>";
                            echo "</tr>";
                            echo "</table>";
                            // Fin versiones documentos

                            echo "<br><a class='btn btn-danger btn-lg btn-block' href='dimension4.php?formulario=nuevo'><h2>.:: Cuéntanos tu propuesta ::.</h2></a>";
                        }

                        //CARGA POR DEFECTO SI NO SE TIENE INTERACCION ALGUNA
                        else
                        {
                            echo "<center><picture><img class='img-responsive' src='images/banner4.jpg'></picture></center>";

                            //Versiones documentos
                            echo "<br>";
                            echo "<table class = 'table table-bordered'>";
                            echo "<tr class='table-light'>";
                            echo "<td><div style='font-size: 12pt; text-align: left'><b>POT Municipio de Dosquebradas - Version 30 de Diciembre 2020</b></div></td>";
                            echo "<td><a class='btn btn-info btn-lg btn-block' href='https://pot.dosquebradas.gov.co/repositorio/POT%20-%20Diciembre%2030%20-%202020/4%20-%20Formulacion/'> Descargar </a></td>";
                            echo "</tr>";
                            echo "<tr class='table-light'>";
                            echo "<td><div style='font-size: 12pt; text-align: left'>POT Municipio de Dosquebradas - Version 30 de Diciembre 2019</div></td>";
                            echo "<td><a class='btn btn-info btn-lg btn-block' href='https://pot.dosquebradas.gov.co/repositorio/POT%20-%20Diciembre%2030%20-%202019/4%20-%20Documento%20tecnico/'> Descargar </a></td>";
                            echo "</tr>";
                            echo "</table>";
                            // Fin versiones documentos

                            echo "<hr><center><h2>.:: Periodo de participacion virtual cerrado - Gracias por tus aportes ::.</h2></center><hr>";
                            echo "<br><a class='btn btn-danger btn-lg btn-block' href='dimension4.php?formulario=nuevo'><h2>.:: Cuéntanos tu propuesta ::.</h2></a>";
                        }
                    ?>
                    <hr>
                </div>
            </div>

            <!-- Tarjetas -->
            <div class="row">

                <div class="col-lg-12 mb-12">
                    <center><h3 class="my-0 font-weight-normal"><b>Estas son las ideas de la gente de Dosquebradas</b></center></h3><hr>
                </div>

                <?php
                    mysqli_query($sle,"SET NAMES 'utf8'");
                    $sql = "SELECT * FROM aportes WHERE dimension = '4' ORDER BY aprobacion DESC";
                    $result = mysqli_query($sle,$sql)or die (mysql_error());
                    while ($registro = mysqli_fetch_row($result))
                    {
                ?>

                <div class="col-lg-3 mb-3">
                    <div class="card h-100 box-shadow" align="center">
                        <div class="card-header bg-dark text-white">
                            <h4 class="my-0 font-weight-normal"><?php echo htmlspecialchars($registro[2]); ?></h4>
                        </div>
                        <div class="card-body">
                            <!-- <h1 class="card-title pricing-card-title">Dimension N° 1</h1>-->
                            <div><?php echo htmlspecialchars($registro[5]); ?></div>
                        </div>
                        <div>
                            <?php
                                if (isset($_GET['id']))
                                {
                                    if ($_GET['id'] == $registro[0])
                                    {
                                        echo "<p class='glyphicon glyphicon-heart-empty'></p>";
                                        echo "<span class='badge'>$registro[6]</span>";
                                    }
                                    else
                                    {
                                        echo "<a class='glyphicon glyphicon-heart-empty' href='dimension4.php?id=$registro[0]'></a>";
                                        echo "<a href='dimension4.php?id=$registro[0]'>Me gusta <span class='badge'>$registro[6]</span></a>";
                                    }
                                }
                                else
                                {
                                    echo "<a class='glyphicon glyphicon-heart-empty' href='dimension4.php?id=$registro[0]'></a>";
                                    echo "<a href='dimension4.php?id=$registro[0]'>Me gusta <span class='badge'>$registro[6]</span></a>";
                                }
                                //echo "<span class='badge'>$registro[6] votos</span>";
                            ?>
                        </div>
                    </div>
                </div>

                <?php
                    }
                ?>

            </div>

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
            $aux=444444;
            if (isset($_GET['id'])) $aux = $_GET['id'];

            $sql="SELECT * FROM visitas WHERE direccion_ip = '$IDUSER' AND fecha=CURDATE() AND aporte=$aux";
            $result= mysqli_query($sle,$sql);
            if(mysqli_num_rows($result)==0)
            {
                $sql="INSERT INTO visitas VALUES(NULL,'$IDUSER',CURDATE(),'$aux')";
                mysqli_query($sle,$sql);
            }

            $sql = "UPDATE contador SET d4 = d4 + 1 WHERE id = 1";
            mysqli_query($sle,$sql)or die (mysql_error());
        ?>        
        

    </body>
</html>
