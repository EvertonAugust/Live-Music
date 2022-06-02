<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Nome do site que não existe kkkkk</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
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
            <a class="navbar-brand" href="#page-top">Logo</a>

            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>



            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#show">Shows</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projetos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#signup">Contato</a></li>
                    <li class="nav-item">
                        <p class="nav-invisible"></p>
                    </li>
                    <li>
                        <div class="search-box">
                            <button class="btn-search"><i class="fas fa-search"></i></button>
                            <input type="text" class="input-search" placeholder="Type to Search...">
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
                        <li><a class="btn btn-primary botao" href="#about" data-toggle="modal" data-target="#exampleModalCenter">Login</a></li>
                        <li><a href="#show-carrossel"><i style="color:white ;font-size:40px ;margin-top:2.5rem ;" class="fa fa-chevron-down" aria-hidden="true"></i></a></li>

                    </ul>





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
    <section class="projects-section bg-light" id="projects">
        <div class="container px-4 px-lg-5">
        

<!-- Featured Project Row-->

<!-- Project One Row-->
<div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
    <div class="col-lg-6"><img class="img-fluid imagem" src="images/musico.jpeg" alt="..." /></div>
    <div class="col-lg-6">
        <div class="purple text-center h-100 project">
            <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-left">
                    <h4 class="text">Músicos</h4>
                    <p style="text-align:justify ;" class="mb-0 white">An example of where you can put an image of a project, or
                        anything else, along with a description.</p>
                    <hr class="d-none d-lg-block mb-0 ms-0" />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Project Two Row-->
<div class="row gx-0 justify-content-center">
    <div class="col-lg-6"><img class="img-fluid imagem" style="height:100% ;" src="images/estabelecimento.jpeg" alt="..." /></div>
    <div class="col-lg-6 order-lg-first">
        <div class="purple text-center h-100 project">
            <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-right">
                    <h4 class="text-white">Estabelecimentos</h4>
                    <p style="text-align:justify ;" class="mb-0 white">Another example of a project with its respective
                        description. These sections work well responsively as well, try this theme on a
                        small screen!</p>
                    <hr class="d-none d-lg-block mb-0 me-0" />
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    </section>

    <!-- Contact-->
    <section id="signup" class="contact-section bg-purple">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i style="color:black ;" class="fas fa-envelope mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50"><a class="text-black-50" href="#!">hello@yourdomain.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i style="color:black ;" class="fas fa-mobile-alt mb-2"></i>
                            <h4 class="text-uppercase m-0">Phone</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">+1 (555) 902-8832</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social d-flex justify-content-center">
                
                <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="mx-2" href="#!"><i class="fa-brands fa-instagram"></i></a>
                <a class="mx-2" href="#!"><i class="fa-brands fa-whatsapp"></i></a>
                

            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer bg-purple small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; Your Website 2022</div>
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