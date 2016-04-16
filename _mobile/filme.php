<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Filme do Dia</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="../view/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../view/css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../view/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Barra</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Filme do dia</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a href="#">Filme</a>
                    </li>
                    <li>
                        <a href="serie.php">Série</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav></br>
</head>
<!--conn-->
<?php include('../config/conn.php'); ?>
<body id="page-top" class="index">


    <!-- Apresentação seletor filmes -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Filmes</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <!-- 1 -->
                <div class="col-xs-6 col-sm-4 portfolio-item">
                    <!-- <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal"> -->
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <?php echo"<img src=".$escrever['capa']." class='img-responsive' alt='' >"?>;
                    </a>
                </div>
               <!-- 2 -->  
                <div class="col-xs-6 col-sm-4 portfolio-item"> 
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <?php echo"<img src=".$escrever['capa']." class='img-responsive' alt='' >"?>;
                    </a>
                </div>

                <div class="col-xs-6 col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <?php echo"<img src=".$escrever['capa']." class='img-responsive' alt='' >"?>;
                    </a>
                </div>

                <div class="col-xs-6 col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <?php echo"<img src=".$escrever['capa']." class='img-responsive' alt='' >"?>;
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <?php echo"<img src=".$escrever['capa']." class='img-responsive' alt='' >"?>;
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <?php echo"<img src=".$escrever['capa']." class='img-responsive' alt='' >"?>;
                    </a>
                </div> 
            </div>
        </div>
    </section>
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

 <!-- Portfolio Modals -->
   <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <!--conteudo 1 -->
         <div class='container'>
                <div class='row'>
                    <div class='col-lg-8 col-lg-offset-2'>
                        <div class='modal-body'>
                <?php echo"<h2>". $escrever['titulo']."</h2>"?>
                                <hr class='star-primary'>
                <?php echo"<p>". $escrever['titulo']."</p>"?>
                <?php echo" <div class='embed-responsive embed-responsive-4by3'>
                               <iframe class='embed-responsive-item'  src=".$escrever['link']." width='500' height='208' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>"?>                             
                        </div>
                         <div>
                <?php echo"</p>Tipo: <strong>".$escrever['tipo']."</strong></p>"?>
                <?php echo"</p>Gênero: <strong>".$escrever['genero']."</strong></p>"?>
                            <button type='button' class='btn btn-default' data-dismiss='modal'><i class='fa fa-times'></i> Sair</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
        <!-- conteudo 2 --> 
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                <?php echo"<h2>". $escrever['titulo']."</h2>"?>
                                <hr class='star-primary'>
                <?php echo"<p>". $escrever['titulo']."</p>"?>
                <?php echo" <div class='embed-responsive embed-responsive-4by3'>
                               <iframe class='embed-responsive-item'  src=".$escrever['link']." width='500' height='208' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>"?>                             
                        </div>
                         <div>
                <?php echo"</p>Tipo: <strong>".$escrever['tipo']."</strong></p>"?>
                <?php echo"</p>Gênero: <strong>".$escrever['genero']."</strong></p>"?>
                            <button type='button' class='btn btn-default' data-dismiss='modal'><i class='fa fa-times'></i> Sair</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
      
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                <?php echo"<h2>". $escrever['titulo']."</h2>"?>
                                <hr class='star-primary'>
                <?php echo"<p>". $escrever['titulo']."</p>"?>
                <?php echo" <div class='embed-responsive embed-responsive-4by3'>
                               <iframe class='embed-responsive-item'  src=".$escrever['link']." width='500' height='208' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>"?>                             
                        </div>
                         <div>
                <?php echo"</p>Tipo: <strong>".$escrever['tipo']."</strong></p>"?>
                <?php echo"</p>Gênero: <strong>".$escrever['genero']."</strong></p>"?>
                            <button type='button' class='btn btn-default' data-dismiss='modal'><i class='fa fa-times'></i> Sair</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                <?php echo"<h2>". $escrever['titulo']."</h2>"?>
                                <hr class='star-primary'>
                <?php echo"<p>". $escrever['titulo']."</p>"?>
                <?php echo" <div class='embed-responsive embed-responsive-4by3'>
                               <iframe class='embed-responsive-item'  src=".$escrever['link']." width='500' height='208' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>"?>                             
                        </div>
                         <div>
                <?php echo"</p>Tipo: <strong>".$escrever['tipo']."</strong></p>"?>
                <?php echo"</p>Gênero: <strong>".$escrever['genero']."</strong></p>"?>
                            <button type='button' class='btn btn-default' data-dismiss='modal'><i class='fa fa-times'></i> Sair</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                <?php echo"<h2>". $escrever['titulo']."</h2>"?>
                                <hr class='star-primary'>
                <?php echo"<p>". $escrever['titulo']."</p>"?>
                <?php echo" <div class='embed-responsive embed-responsive-4by3'>
                               <iframe class='embed-responsive-item'  src=".$escrever['link']." width='500' height='208' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>"?>                             
                        </div>
                         <div>
                <?php echo"</p>Tipo: <strong>".$escrever['tipo']."</strong></p>"?>
                <?php echo"</p>Gênero: <strong>".$escrever['genero']."</strong></p>"?>
                            <button type='button' class='btn btn-default' data-dismiss='modal'><i class='fa fa-times'></i> Sair</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                <?php echo"<h2>". $escrever['titulo']."</h2>"?>
                                <hr class='star-primary'>
                <?php echo"<p>". $escrever['titulo']."</p>"?>
                <?php echo" <div class='embed-responsive embed-responsive-4by3'>
                               <iframe class='embed-responsive-item'  src=".$escrever['link']." width='500' height='208' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>"?>                             
                        </div>
                         <div>
                <?php echo"</p>Tipo: <strong>".$escrever['tipo']."</strong></p>"?>
                <?php echo"</p>Gênero: <strong>".$escrever['genero']."</strong></p>"?>
                            <button type='button' class='btn btn-default' data-dismiss='modal'><i class='fa fa-times'></i> Sair</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
<?php mysqli_close($con)?> 
    <!-- jQuery -->
    <script src="../view/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../view/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="../view/js/classie.js"></script>
    <script src="../view/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../view/js/jqBootstrapValidation.js"></script>
    <script src="../view/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../view/js/freelancer.js"></script>

</body>

</html>
