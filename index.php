<html lang="en">
  <head>
    <title>CEPHCIS &mdash; Intranet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <header role="banner">
      <div class="top-bar">
        <div class="container">
          <div class="row">
            </div>
          </div>
        </div>
      </div>

      <div class="container logo-wrap">
        <div class="row pt-5">
          <div class="col-12 text-center">
            <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
            <h1 class="site-logo"><a href="index.html"><img src="img/icon/logou.png" width="8%">  INTRANET CEPHCIS</a></h1>
          </div>
        </div>
      </div>
      
      <nav class="navbar navbar-expand-md  navbar-light bg-light">
        <div class="container">
          
         
          <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Inicio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="category.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Secretarías</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="academica.html">Académica</a>
                  <a class="dropdown-item" href="administrativa.html">Administrativa</a>
                  <a class="dropdown-item" href="tecnica.html">Técnica</a>
                </div>

              </li>
              <li class="nav-item">
                <a class="nav-link" href="computo.php">Cómputo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Reglamentos.html">Reglamentos</a>
              </li>
               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="category.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Comisiones y Comités
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="comites.html">Comisiones y Comités</a>
                  <a class="dropdown-item" href="minutas.html">Minutas</a>
                </div>
              <li class="nav-item">
                <a class="nav-link" href="consejo.html">Consejo Interno</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="acercade.html">Acerca de</a>
              </li>
              
            </ul>
            
          </div>
        </div
      </nav>
    </header>
    <!-- END header -->

    <section class="site-section pt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

           <div class="owl-carousel owl-theme home-slider">
              <!-- <div>
                <a href="formatos/Circular CPHC DIR 014 2019 información relevante.pdf" target="_blank" class="a-block d-flex align-items-center height-lg" style="background-image: url('formatos/Terna.png'); ">
                </a>
              </div> -->
              
               <div> 
                <a href="https://distancia.cuaed.unam.mx/campusvirtual.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('images/Campus Virtual.png'); ">
                </a>
              </div>


              <div> 
                <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('images/img_2.jpg'); ">
                  <div class="text half-to-full">
                    <div class="post-meta">
                      <span class="category">Rendón Peniche</span>
                      <span class="mr-2">March 15, 2018 </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h3>Centro Peninsular en Humanidades y Ciencias Sociales</h3>
                    <p>Calle 43 s/n entre 44 y 46, col. Industrial. C.P. 97150, Mérida, Yucatán, México.</p>
                  </div>
                </a>
              </div>
              <div>
                <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('images/img_3.jpg'); ">
                  <div class="text half-to-full">
                    <div class="post-meta">
                      <span class="category">Lol-Be</span>
                    </div>
                    <h3>Nueva sede del Centro Peninsular en Humanidades y Ciencias Sociales</h3>
                    <p>Ubicada frente al Parque de las Americas</p>
                  </div>
                </a>
              </div>
              <div>
                <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('images/dragones.jpg'); ">
                  <div class="text half-to-full">
                    <div class="post-meta">
                      <span class="category">Dragones</span>
                    </div>
                    <h3>Sede Dragones</h3>
                    <p>Escuela especializada en Lenguas de la UNAM</p>
                  </div>
                </a>
              </div>
            </div>
    </section>
    <!-- END section -->

    <section class="site-section py-sm">
      <div class="container">
			<div class="row mb-5 mt-5">

			 <div class="col-md-12">
                <h2 class="mb-4"><img src="img/icon/agenda3.png" width="5%" > Eventos en las Sedes</h2> 
                
       </div> 
<!--                                          -->
<!-- Inicio de consulta de Actividades en PHP -->
<!--                                          -->
<?php 
 setlocale(LC_ALL,"es_ES");
 date_default_timezone_set('America/Mexico_City');
 include("agendapersonal.php");
 include("horarioagedap.php");
 include("sedes.php");
 include("espacios.php");
 //este boton es para repetir

 $month=date("m");
$year=date("Y");
$diaActual=date("d");
 $sede = '';
 $tipoa ='';
$FechaCompleta =$year.'-'.$month.'-'.$diaActual;


$meses=array(1=>"Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
"Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

//aqui se agrega las listas
 $oAgendaP = new agendapersonal();
$oAgendaP->FechaInicio =$FechaCompleta;
$oAgendaP->FechaFin =$FechaCompleta;
   $oAgendaP->IdSede =$sede;
   $oAgendaP->IdTipoA=$tipoa;
$rowAgendaP = $oAgendaP->get_list_agendap();

$ArrDias ='';
//concatenamos 0 a los dias y meses para que sea buscado ya que si son menores de 10 se obtienen sin el cero 

$NomDia =$FechaCompleta;
$Titulo = '';
$Titulo2='';

   foreach ($rowAgendaP as $elementAP)
{
    $Sede='';
    $Espacio='';
    
    if ($elementAP['IdSede'] !='')
    {
        $osedes = new sedes();
        $osedes->IdSede=$elementAP['IdSede'];
        $osedes->get_recobery_sedes();
    }

    if ($elementAP['IdEspacio'] !='')
    {
        $oespacios= new espacios();
        $oespacios->IdEspacio=$elementAP['IdEspacio'];
        $oespacios->get_recobery_espacios();
    }

   
        $ArrDias =explode('~',$elementAP['Semanas']);
        if (in_array($NomDia,$ArrDias))
         {   
            $Prioridad ='<img style="cursor:pointer;" title="Evento con prioridad"  src="img/icon/calendar.png" width="22" height="22" data-toggle="tooltip" data-placement="bottom"/>';
            if ($elementAP['Prioridad']=='1')
            {
                $Prioridad='<img style="cursor:pointer;" title="Evento con prioridad"  src="img/icon/star.png" width="22" height="22" data-toggle="tooltip" data-placement="bottom"/>';
            }
             $HI = substr($elementAP['HoraInicio'], 0, 5);
            $HF = substr($elementAP['HoraFin'], 0, 5);
             $Titulo.='<li>';
             $Titulo .='<span style ="font-size:16px;cursor: pointer;"   onclick="get_ModalEmail(\''.$FechaCompleta.'\',\''.$elementAP['IdAgendaP'].'\')">Actividad: '.$Prioridad.''.$elementAP['Titulo'].'</span> <br/>'.'Sede: '.$osedes->Nombre.'<br/> Espacio: '.$oespacios->Nombre.'<br/>Horario: '.$HI.'-'.$HF.'&nbsp&nbsp&nbsp&nbsp';
             $Titulo .='<hr>';
            $Titulo.='</li> ';
            $Titulo2 = $Titulo;                                                                                                        
        }                        
}
 $arrayFechaSelect =explode('-',$NomDia);
 $oAgendaP = new agendapersonal();          
        $oAgendaP->FechaInicio=$arrayFechaSelect[1].'-'.$arrayFechaSelect[2];
        $oAgendaP->get_agendaferiado(); 

?>

<div class="col-lg-12"  style="background-color: #bf930d;border-radius: 20px 20px 0px 0px;" > 
<h2 style="font-weight: bold; color: white; text-align: center;"><?php echo $meses[intval($month)].' '.$diaActual;?> </h2>
  
</div>
        
<div class="col-lg-12" style="background-color:  #4e4848;"  > 

<ul  style=" color: white; list-style:none;">
   <?php echo $Titulo2; '/n'?>
</ul>
   
</div>

<!--                                       -->
<!-- Fin de Consulta de Actividades en PHP -->
<!--                                       -->
               
             <div class="col-md-12">
              <h2 class="mb-4"><img src="img/icon/editarviaje.png">Noticias Relevantes</h2>
              </div>
        
              <div class="col-md-12">

               
<div class="post-entry-horzontal">
                  <a href="formatos/ConvEleccionFeb.pdf">
                    <div class="image element-animate height-sh"  data-animate-effect="fadeIn" style="background-image: url(images/listado.png);"></div>
                    <span class="text">
                      <div class="post-meta">
                        <span class="category">C O N V O C A T O R I A</span>
                        <span class="mr-2">Enero 20, 2022 </span> &bullet;
                        </div>
                          <h2>CONVOCATORIA PARA LA ELECCIÓN DE UN CONSEJERO REPRESENTANTE DE LOS INVESTIGADORES Y PROFESORES ANTE
                              EL CONSEJO INTERNO DEL CENTRO PENINSULAR EN HUMANIDADES Y CIENCIAS SOCIALES DE LA UNAM PERIODO 2022-2024</h2>
                    </span>
                  </a>
                </div>
<!--    ESPACIO PARA ANUNCIO                                   -->
<!-- Fin de Consulta de Actividades en PHP -->


              	<div class="post-entry-horzontal">
                	<a href="https://www.dgcs.unam.mx/boletin/bdboletin/2020_609bis.html">
                    <div class="image element-animate height-sh"  data-animate-effect="fadeIn" style="background-image: url(images/covid.jfif);"></div>
                    <span class="text">
                      <div class="post-meta">
                        <span class="category">Aviso Importante </span>
                        <span class="mr-2">Julio 22, 2020 </span> &bullet;
                        </div>
                      <h2>en concordancia con las recomendaciones de la UNESCO Respuesta del ámbito educativo al COVID 19, Preparación para la reapertura de las escuelas, la UNAM regresará a sus actividades no escolares en forma disminuida, gradual y diferenciada 10 días hábiles después de que el semáforo sanitario municipal o estatal se encuentre en amarillo. </h2>
                    </span>
                  </a>
                </div>
                <!-- END post -->

                
                <!-- END post -->
              </div>
            </div>
          </div>

          <!-- END main-content -->    
    </section>
  

    <footer class="site-footer">
    
Copyright &copy;<script>document.write(new Date().getFullYear());</script> todos los derechos reservados  | Universidad Nacional Autónoma de México ( UNAM ) por <a href="https://www.cephcis.unam.mx" target="_blank">CEPHCIS</a>

    </footer>
    <!-- END footer -->
    
   

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    
    <script src="js/main.js"></script>
  </body>
</html>
