<?php
    require 'vendor/autoload.php';
    if(isset($_POST['nome'])){
        SendEmail::send($_POST['nome'],$_POST['email'],$_POST['celular'], $_POST['palestrante']);
        // echo '<script>alert("ainda está pegando")</script>';
    }else{
            
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="plugin/bootstrap/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleSobre.css">
    <link rel="stylesheet" href="css/styleProgramacao.css">
    <link rel="stylesheet" href="css/stylOficinas.css">
    <link rel="stylesheet" href="css/styleGaleria.css">

    <title>Oficinas</title>
</head>

<body>
    <!-- CARREGAMENTO PAGE -->
    <div class="carregamento-page">
        <div class="container-img-carregamento">
            <img src="img/LOGO-FESTIVAL-MIN.png" alt="" srcset="">
            <div class="bol-carregamento"></div>
        </div>
    </div>
    
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#">MINISTERIO DO TURISMO E ATACADÃO APRESENTAM:</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon text-white"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto" id="menu">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="sobre.html">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="oficinas.php">Oficinas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="programacao.html">Programação</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="galeria.html">galeria fotos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="imprensa.html">Imprensa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contato.html">Contato</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <style>
        .alert{
            padding: 15px 20px;
            background-color: white;
            position: fixed;
            top: 100px;
            right: 100px;
            border-radius: 10px;
            z-index:33;
            font-family: 'xilosa'
        }
        .success{
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }
        .danger{
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }
    </style>

    <?php
        if($_GET['url'] == 'mensagem-enviada'){
    ?>
        <div class="alert success">
            Seu E-mail foi enviado com sucesso!!
        </div>
    <?php }else if($_GET['url'] == 'erro-enviar-mensagem') { ?>
        <div class="alert danger">
           Ocorreu um erro no envio do seu e-mail, <br>
           tente mais tarde!
        </div>
    <?php }else{

    } ?>

    <!-- <div class="background-video">
        <video autoplay muted loop id="sobre-video" style="margin-top: 120px;">
            <source src="video/festaCulturalNazareProgramacao.mp4" type="video/mp4">
        </video>
    </div> -->

    <div class="overlap-video">
        <div class="container-oficinas">
            <div class="programacao-nazare">
                <div class="row">
                    <div class="col-md-6 w-100">
                        <h3>Oficinas</h3>
                    </div>
                    <div class="col-md-6 btn-ao-vivo text-right w-100">
                        <a class="btn-ao-vivo" href="https://youtu.be/3O7FyHf0VMc" target="_blank">
                            <img src="img/btn-ao-vivo.png" alt="Botão para assistir ao vivo o evento" srcset="">
                        </a>
                        <a class="btn-ao-vivo " href="https://www.youtube.com/channel/UCyEB9C9GlyEzLe_kzGN6-iw" target="_blank">
                            <img class="mt-4 mb-4" src="img/btn-lives-passadas.png" alt="Botão para assistir lives passadas" srcset="">
                        </a>
                        <!-- <a class="btn-ao-vivo " href="#" data-toggle="modal" data-target="#bd-example-modal-lg">
                            <img class="mt-4 mb-4" src="img/btn-lives-passadas.png" alt="Botão para assistir lives passadas" srcset="">
                        </a> -->
                    </div>
                </div>
                <br>
            </div>
            <!-- MODAL OFICINA -->
            <div class="modal fade text-left" style="color:black"
                                            id="bd-example-modal-lg" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Lives passadas</h5>
                            <button type="button" class="close" data-dismiss="modal"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body video-nazare">
                        <h2 class="modal-title" id="exampleModalLongTitle">Lives de Gastronômia</h2>
                        <h5 class="modal-title" id="exampleModalLongTitle">Oficina</h5>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/bFk3ZVtedUA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/a1WYa_CQrUE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">Fechar</button>
                        <!-- <button type="button" class="btn btn-primary">Save
                            changes</button> -->
                    </div>
                    </div>
                </div>
            </div>


            <div class="oficinas">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="img-oficina text-center">
                            <img src="img/gastronomia.png" alt="gastronomia" srcset="">
                            <div class="palestrante text-white">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- MODAL VIDEO KENNY -->
                                        <div class="modal fade text-left" style="color:black"
                                            id="video-chamada-kenny-nogueira" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Vídeo de
                                                            chamada oficina do Kenny Nogueira</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body video-nazare">
                                                        <iframe src="https://www.youtube.com/embed/BzKMl2mEMcc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <!-- <button type="button" class="btn btn-primary">Save
                                                        changes</button> -->
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a href="#" class="container-img-palestrante" data-toggle="modal"
                                            data-target="#video-chamada-kenny-nogueira">
                                            <div class="img-palestrante"
                                                style="background-image: url('img/palestrantes/kenny-nogueira.png');"
                                                id="kenny-nogueira"></div>
                                            <div class="overlap-img-palestrante" id="overlap-kenny-nogueira">
                                                <div class="video-chamada">
                                                    <img src="img/video-camera.png"
                                                        alt="Assistir víde de chamada do Kenny nogueira para sua oficia"
                                                        srcset="">
                                                    <h6>Assistir vídeo <br>
                                                        de chamada</h6>
                                                </div>
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col-md-6 dados">
                                        <div class="dados-palestrante text-left">
                                            <h2>Kenny nogueira</h2>

                                            <p>Arquiteto Gourmet, participante do
                                                programa “Sabor em Jogo no GNT”,
                                                membro da Equipe Ganhadora Festival
                                                “Arte da Cosinha”, ganhador do reality
                                                Show “Egua do Chef”.</p>

                                            <p>Ministrará 10 oficinas com 10 receitas
                                                de comida saudavel e barata que são
                                                relacionadas ao Círio de Nazaré.</p>

                                            <p style="border:0; padding: 0;">OBS: A oficina de gastronomia terá 10
                                                vagas para participantes por dia.</p>


                                            <!-- MODAL EMAIL KENNY -->
                                            <div class="modal fade text-left" style="color:black"  id="inscricao-oficina-kenny-nogueira" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">VAGAS ESGOTADAS</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <!-- <form action="" method="post" name="inscricao-oficina">
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Nome completo:</label>
                                                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome" placeholder="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">E-mail:</label>
                                                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Celular:</label>
                                                                    <input type="text" class="form-control celular" id="exampleInputEmail1" aria-describedby="emailHelp" name="celular" placeholder="">
                                                                </div>
                                                                <input type="hidden" name="palestrante" value="Kenny Nogueira">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Fechar</button>
                                                                <input type="submit" value="Enviar" name="acao" class="btn btn-secondary">
                                                            </div>
                                                        </form> -->
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- BUTTON MODAL EMAIL ABRIR -->
                                            <a type="button" class="btn-escreva-se" data-toggle="modal"
                                                data-target="#inscricao-oficina-kenny-nogueira">
                                                <img src="img/btn-escreva-se.png" alt="" srcset="">
                                            </a>

                                        </div>
                                        <p class="text-left">Data: 23 a 27/11 e 30/11 a 04/12 das 14h às 16h.
                                            <br>
                                            Local: <strong>Faculdade de Gastronômia da Unama</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="img-oficina text-center">
                            <img src="img/artesanato.png" alt="Artesanaro" srcset="">
                            <div class="palestrante text-white">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- MODAL VIDEO JOÃO -->
                                        <div class="modal fade text-left" style="color:black"
                                            id="video-chamada-roberto-navegantes" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Vídeo de
                                                            chamada oficina do Roberto Navegantes</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body video-nazare">
                                                        <iframe src="https://www.youtube.com/embed/BzKMl2mEMcc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <!-- <button type="button" class="btn btn-primary">Save
                                                        changes</button> -->
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="container-img-palestrante" data-toggle="modal"
                                        data-target="#video-chamada-roberto-navegantes">
                                            <div class="img-palestrante"
                                                style="background-image: url('img/palestrantes/roberto-navegantes.png');"
                                                id="roberto-navegantes"></div>
                                            <div class="overlap-img-palestrante" id="overlap-roberto-navegantes">
                                                <div class="video-chamada">
                                                    <img src="img/video-camera.png"
                                                        alt="Assistir víde de chamada do Kenny nogueira para sua oficia"
                                                        srcset="">
                                                    <h6>Assistir vídeo <br>
                                                        de chamada</h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 dados">
                                        <div class="dados-palestrante text-left">
                                            <h2>Roberto Navegantes</h2>

                                            <p>Artesão da Olaria do Espanhol em Icoaraci-PA, 30 anos na produção de cerâmica marajoara.
</p>

                                            <p>Suas peças são de uma beleza impar e trazem em seus fortes traços um pouco da história dos nativos da região amazônica, berço do renascimento da cerâmica. O artesão irá ministrar oficinas de artesanato estilo marajoara, ensinando suas técnicas e tendências que são preservadas a várias gerações.</p>

                                            <p style="border:0; padding: 0;">OBS: A oficina de artesanato terá 10
                                                vagas para participantes por dia.</p>


                                            <!-- MODAL EMAIL JOÃO -->
                                            <div class="modal fade text-left" style="color:black" id="inscricao-oficina-roberto-navegantes" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Confirme sua presença</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="" method="post" name="inscricao-oficina">
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Nome completo:</label>
                                                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome" placeholder="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">E-mail:</label>
                                                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Celular:</label>
                                                                    <input type="text" class="form-control celular" id="exampleInputEmail1" aria-describedby="emailHelp" name="celular" placeholder="">
                                                                </div>
                                                                <input type="hidden" name="palestrante" value="Roberto Navegantes">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Fechar</button>
                                                                    <input type="submit" value="Enviar" name="acao" class="btn btn-secondary">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- BUTTON MODAL EMAIL ABRIR -->
                                            <a type="button" class="btn-escreva-se" data-toggle="modal"
                                                data-target="#inscricao-oficina-roberto-navegantes">
                                                <img src="img/btn-escreva-se.png" alt="" srcset="">
                                            </a>

                                        </div>
                                        <p class="text-left">Data: 24, 25 e 26/11 das  9:30h às 12:00h.
                                        <br>
                                            Local: <strong>Icoaraci</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div id="rodape" class="rodape-desktop">
            <img src="img/SECULT_horz_preferencial.png" alt="">
        </div>
        <footer>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div id="patrocinador" class="row">
                            <div class="col-12">
                                <img src="img/LOGOS/LOGO - lei de incentivo a cultura.png" alt="" srcset="">

                                <p>PATROCINADOR:</p>
                                <img src="img/LOGOS/LOGO - Atacadao.png" alt="" srcset="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <p>PRODUÇÃO:</p>
                        <img src="img/LOGOS/LOGO - OMF.png" alt="" srcset="">
                    </div>
                    <div class="col-md-2">
                        <p>COMERCIALIZAÇÃO:</p>
                        <img id="comercializacao" src="img/LOGOS/Parlare 2.png" alt="" srcset="">
                    </div>
                    <div class="col-md-6">
                        <p>REALIZAÇÃO:</p>
                        <img id="realizacao" src="img/LOGOS/Logo-Secretaria-Especial-da-Cultura-500x248.png" alt=""
                            srcset="">
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="plugin/jquery/jquery.js"></script>
    <script src="plugin/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="plugin/mask/jquery.mask.js"></script>
    <script src="plugin/slick/slick.min.js"></script>    
    <script src="js/functions.js"></script>
</body>
<script>
    var nome = false;
    $('input[name=nome]').keyup(function(){
        if($(this).val().length > 4){
            nome = true;
            $(this).css('border-color', 'green');
        }else{
            nome = false;
            $(this).css('border-color', 'red');
        }
        style();
    })

    var email = false;
    $('input[name=email]').keyup(function(){
        if($(this).val().length > 4){
            email = true;
            $(this).css('border-color', 'green');
        }else{
            email = false;
            $(this).css('border-color', 'red');
        }
        style();
    })

    var celular = false;
    $('input[name=celular]').keyup(function(){
        if($(this).val().length > 9){
            celular = true;
            $(this).css('border-color', 'green');
        }else{
            celular = false;
            $(this).css('border-color', 'red');
        }
        style();
    })

    function style() {
        if(nome && email &&celular){
            $('input[name=acao]').removeClass('btn-secondary');
            $('input[name=acao]').css('background-color','#F5821F').css('color','white');
        }
    }
    
    $('form[name=inscricao-oficina]').submit(function(){
        if(nome && email && celular){
        }else{
            return false;
        }
    })
</script>

</html>