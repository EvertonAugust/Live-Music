<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Live Music</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!--icones google -->
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="modal-06/css/style_cadastro_banda.css">
    <link rel="stylesheet" href="modal-06/css/style_cadastro_estabelecimento.css">
    <link rel="stylesheet" href="modal-06/css/style_login.css">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="modal-06/css/ionicons.min.css">
    <link rel="stylesheet" href="modal-06/css/flaticon.css">
    <link rel="stylesheet" href="css/stylesearch.css">
    <link rel="stylesheet" href="carrossel/css/style_carrossel.css">
    <link rel="stylesheet" href="carrossel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">



    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">






</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <div class="logo">
                <a class="navbar-brand" href="#page-top"><img style="width: 6.5rem;" src="images/logo_tcc2.svg"></a>
            </div>

            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>



            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#show">Shows</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Galeria</a></li>
                    <li class="nav-item"><a class="nav-link" href="#signup">Contato</a></li>
                    <li class="nav-item">
                        <p class="nav-invisible"></p>
                    </li>
                    <li>
                        <div class="search-box">
                            <button class="btn-search"><i class="fas fa-search"></i></button>
                            <input type="text" class="input-search" placeholder="Pesquisar">
                        </div>
                    </li>
                    <li class="nav-item">
                        <p class="nav-invisible"></p>
                    </li>
                    <li class="nav-item">
                        <p class="nav-invisible"></p>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a style="border-bottom:none ;margin-left: 20px;position: relative; bottom: 1px;" class="nav-link" href="#"><span class="iconeT ion ion-ios-settings"></span></a>
                            <div class="dropdown-content">
                                <a data-toggle="modal" data-target="#exampleModalCenter" style="font-size:90% ;color:white;font-weight: bold;" href="">Entrar</a>
                                <a style="font-size:90%;color:white;font-weight: bold;" href="./pages/cadastro/cadastro_musico.html">Cadastrar Músico</a>
                                <a style="font-size:90% ;color:white;font-weight: bold;" href="./pages/cadastro/cadastro_estabelecimento.html">Cadastrar Estabelecimento</a>

                            </div>
                        </div>
                    </li>




                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead" id="home">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div style="padding-top: 70px;" class="text-center">

                    <h1 class="mx-auto my-0 text-uppercase">Live Music</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">A plataforma que você encontra melodia e emoção em um só lugar !!!</h2>
                    <ul>
                        <!-- <li><a class="btn btn-primary botao" href="#about" data-toggle="modal" data-target="#exampleModalCenter">Login</a></li>-->


                    </ul>

                    <a href="#show"><i style="color: white;font-size: 40px;position: absolute;bottom: 10%;left: 50%;" class="fa fa-chevron-down" aria-hidden="true"></i></a>

                </div>
            </div>






        </div>

        <!-- Modals -->
        <?php
        include 'modal-06/login.php';
        include 'modal-06/cadastro.php';

        ?>


        <!-- Modals -->

    </header>


    <!-- Carrossel -->


    <?php
    include 'carrossel/carrossel.php';
    ?>

    <!-- Carrossel -->




    <!-- Projects-->
    <section class="projects-section bg-light">
        <p id="projects"></p>

        <div class="container px-4 px-lg-5">

            <!-- Featured Project Row-->

            <!-- Project One Row-->
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6"><a href="#"><img class="img-fluid effect-zoe" src="images/musico.jpeg" alt="..." /></a></div>
                <div class="col-lg-6">
                    <div class="purple text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text">Músicos</h4>
                                <p style="text-align:start ;" class="mb-0 white">Clique aqui e explore a galeria de fotos dos nossos artistas.</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project Two Row-->
            <div class="row gx-0 justify-content-center">
                <div class="col-lg-6"><a href="#"><img class="img-fluid effect-zoe" src="images/estabelecimento.jpeg" alt="..." /></a></div>
                <div class="col-lg-6 order-lg-first">
                    <div class="purple text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="text-white">Estabelecimentos</h4>
                                <p style="text-align:start ;" class="mb-0 white">Clique aqui e conheça o ambiente dos estabelecimentos presentes no Live Music. </p>
                                <hr class="d-none d-lg-block mb-0 me-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Contact-->
    <section id="signup" class="contact-section bg-black">
        <div class="container px-4 px-lg-5">

            <div class="social d-flex justify-content-center">

                <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="mx-2" href="#!"><i class="fa-brands fa-instagram"></i></a>
                <a class="mx-2" href="#!"><i class="fa-brands fa-whatsapp"></i></a>


            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5 text-center"><i style="color:white ;" class="fas fa-mobile-alt"></i> (19) 9 9123-4567</div>
        <div class="container px-4 px-lg-5 text-center"><i style="color:white ;" class="fas fa-envelope"></i> weblivemusic@gmail.com</div>
        <br>


    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->


</body>

<!--scripts carrossel -->
<script src="carrossel/js/jquery.min.js"></script>
<script src="carrossel/js/popper.js"></script>
<script src="carrossel/js/bootstrap.min.js"></script>
<script src="carrossel/js/owl.carousel.min.js"></script>
<script src="carrossel/js/main.js"></script>

<!--scripts modal -->
<script src="modal-06/js/main.js"></script>
<script src="modal-06/js/jquery.min.js"></script>
<script src="modal-06/js/popper.js"></script>
<script src="modal-06/js/bootstrap.min.js"></script>




</html>