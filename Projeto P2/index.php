<!DOCTYPE html>
<php lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/7db0b3eb0c.js" crossorigin="anonymous"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Emilys+Candy&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="css.css">
    <script lang="javascript" src="js/script.js"></script>


    <title>Mitsuki Store | Seu amigurumi te espera aqui</title>
</head>

<body id="corpo">
    <header id="cabecario">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php" id="menu-logo">Mitsuki Store</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class=""></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav m-auto my-2 my-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="vitrine.php" id="menu-opcao">Produtos</a>
                        </li>
                        <li class="nav-item active dropdown" id="menu-drop">
                            <a class="nav-link dropdown-toggle" id="menu-drop" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Usuário
                            </a>
                            <ul class="dropdown-menu text-center" aria-labelledby="menu-drop">
                                <li><a href="" type="button" class="btn w-auto dropdown-item" id="menu-drop-opcao" data-bs-toggle="modal" data-bs-target="#myModal">Conta</a>
                                <li><a href="" type="button" class="btn w-auto dropdown-item" id="menu-drop-opcao" data-bs-toggle="modal" data-bs-target="#myModal4">Carrinho</a>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="px-2 search" type="search" placeholder="Produto" aria-label="Search" id="txtBuscaProduto">
                        <button class="btn0" type="button" id="botao-busca" onclick="store_busca(document.getElementById('txtBuscaProduto').value);">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <div class="modal" id="myModal">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content" id="corpoModal1">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Área do Usuário</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
    
                <!-- Modal body -->
                <div class="modal-body" id="modal">
                    <div class="row py-5" id="caixa-1">
                        <div class="col py-5" id="caixa-cadastro">
                            <h1 class="text-center py-5" id="titulo_do_cadastrar">Ainda não tenho cadastro</h1>
                            <div class="row-cols-1">
                                <div class="text-center">
                                    <button type="button" class="btn w-100" data-bs-toggle="modal" data-bs-target="#myModal2" id="botao-cadastrar">
                                        Clique aqui para cadastrar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col text-center py-5">
                            <form id="frm1" class="form-control py-5">
                                <div class="col-lg-5 m-auto text-center">
                                    <h1>Login</h1>
                                </div>
                                <div class="row-cols-2 py-2">
                                    Email: <input type="text" id="txtEmailLog" placeholder="Digite seu email"><br>
                                </div>
                                <ul id="lblEmailLog" class="errolbl"></ul>

                                <div class="row-cols-2 py-2">
                                    Senha: <input type="password" id="txtSenhaLog" placeholder="Digite sua senha"><br>
                                </div>
                                <ul id="lblSenhaLog" class="errolbl"></ul>

                                <div class="row-1 cols-2 py-2">
                                    <button type="button" onclick="validarLogin();" id="botao-modal">Entrar</button>
                                    <button type="button" onclick="" data-bs-toggle="modal" data-bs-target="#myModal3" id="botao-modal">Esqueci a senha</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="myModal2">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content" id="corpoModal2">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Área do Usuário</h4>
                    <button type="button" class="btn-close" data-bs-toggle="modal" data-bs-target="#myModal"></button>
                </div>
    
                <!-- Modal body -->
                <div class="modal-body" id="modal">
                    <div class="row py-5" id="caixa-1">
                        <form id="frm2" class="form-control">
                            <h1 class="text-center py-3">Cadastrar-se</h1>
                            <div class="row-cols-2 py-2">
                                Nome: <input type="text" id="txtNomeCad" placeholder="Digite seu nome">
                            </div>
                            <ul id="erroNome" class="errolbl"></ul>

                            <div class="row-cols-2 py-2">
                                Email: <input type="text" id="txtEmailCad" placeholder="Digite seu email">
                            </div>
                            <ul id="erroEmail" class="errolbl"></ul>

                            <div class="row-cols-2 py-2">
                                Senha: <input type="password" id="txtSenhaCad" placeholder="Digite uma senha valida">
                            </div>
                            <ul id="erroSenha" class="errolbl"></ul>

                            <div class="row-cols-2 py-2">
                                Confirma: <input type="password" id="txtConfirmaCad" placeholder="Confirme sua senha">
                            </div>
                            <ul id="erroConfirma" class="errolbl"></ul>

                            <div class="row-cols-2 py-2">
                                CPF: <input type="text" id="txtCpfCad" placeholder="Digite seu CPF"><br>
                            </div>
                            <ul id="erroCpf" class="errolbl"></ul>

                            <div class="row-cols-2 py-2">
                                Telefone: <input type="text" id="txtTelCad" placeholder="Digite seu telefone"><br>
                            </div>
                            <ul id="erroTelefone" class="errolbl"></ul>

                            <div class="row-cols-2 py-2">
                                Endereço: <input type="text" id="txtEndCad" placeholder="Digite seu endereço"><br>
                            </div>
                            <ul id="erroEnd" class="errolbl"></ul>


                            <div class="row-cols-1 py-2">
                                <button type="button" class="w-100" onclick="validarCad();" id="botao-modal">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="myModal3">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content" id="corpoModal3">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Área do Usuário</h4>
                    <button type="button" class="btn-close" data-bs-toggle="modal" data-bs-target="#myModal"></button>
                </div>
                
                
                <!-- Modal body -->
                <div class="modal-body" id="modal">
                    <div class="row py-5" id="caixa-1">
                        <form id="frm3" class="text-center form-control">
                            <h1 class="py-3">Esqueci a Senha</h1>
                            <div class="row-cols-2 py-2">
                                Email: <input type="text" id="txtEmailEsq" placeholder="Digite o email cadastrado">
                            </div>
                            <ul id="lblEmailEsq" class="errolbl"></ul>
                            <div class="row-cols-1 py-2">
                                <button type="button" class="w-100" onclick="validarEsq();" id="botao-modal">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="myModal4">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content" id="corpoModal4">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Carrinho</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
    
                <!-- Modal body -->
                <div class="modal-body" id="modal">
                    <div class="row py-5" id="caixa-1">
                        <form id="frm4" class="form-control text-center">
                            <div id="conteudo">
                                <div class="row">
                                    <div class="col-lg-2 pt-2">
                                        <img src="img/produtos/p1.webp" id="prod1" class="img-fluid" alt="" onclick="store(this.id);">
                                    </div>
                                    <div class="col-lg-2">
                                        PRODUTO <br>
                                        Cypher
                                    </div>
                                    <div class="col-lg-2">
                                        QUANTIDADE <br>
                                        1x
                                    </div>
                                    <div class="col-lg-2">
                                        PREÇO <br>
                                        R$111,00
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-2 pt-2">
                                        <img src="img/produtos/p2.webp" id="prod1" class="img-fluid" alt="" onclick="store(this.id);">
                                    </div>
                                    <div class="col-lg-2">
                                        PRODUTO <br>
                                        Sage
                                    </div>
                                    <div class="col-lg-2">
                                        QUANTIDADE <br>
                                        1x
                                    </div>
                                    <div class="col-lg-2">
                                        PREÇO <br>
                                        R$111,00
                                    </div>   
                                </div>
                                <div class="row">
                                    <hr>
                                    <p class="text-center">VALOR TOTAL: </p>
                                </div>
                            </div>
                        </form>
                        <button class="btn w-50" id="botao-vitrine" onclick="limparCarrinho();">Limpar Cesta</button>
                        <button class="btn w-50" id="botao-vitrine" onclick="document.getElementById('frm4').submit();">Finalizar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="principal" id="quadro-inicial">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-lg-7 pt-5 text-center" id="espaco-texto">
                    <h1 class="pt-5" id="titulo">AMIGURUMI É AQUI<br>ADQUIRA JÁ O SEU!</h1>
                    <button class="btn1 mt-3" onclick="location.href='vitrine.php'" id="botao-vitrine">VEM CONFERIR!</button>
                </div>
            </div>
        </div>
    </section>

    <section class="colecao">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-lg-5 m-auto text-center">
                    <h1 id="titulo">VALORANT</h1>
                    <h6 style="color: red;">Adquira já seu agente favorito!</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light mb-2" id="prod-card">
                        <div class="card-body">
                            <img src="img/produtos/p1.webp" id="prod1" class="img-fluid" alt="" onclick="store_prod(this.id);">
                        </div>
                    </div>
                    <h6>Cypher</h6>
                    <p>R$110,00</p>
                </div>
                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light mb-2" id="prod-card">
                        <div class="card-body">
                            <img src="img/produtos/p2.webp" id="prod2" class="img-fluid" alt="" onclick="store_prod(this.id);">
                        </div>
                    </div>
                    <h6>Killjoy</h6>
                    <p>R$125,00</p>
                </div>
                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light mb-2" id="prod-card" >
                        <div class="card-body">
                            <img src="img/produtos/p3.webp" id="prod3" class="img-fluid" alt="" onclick="store_prod(this.id);">
                        </div>
                    </div>
                    <h6>Sage</h6>
                    <p>R$130,00</p>
                </div>
                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light mb-2" id="prod-card" >
                        <div class="card-body">
                            <img src="img/produtos/p4.webp" id="prod4" class="img-fluid" alt="" onclick="store_prod(this.id);">
                        </div>
                    </div>
                    <h6>Jett</h6>
                    <p>R$115,00</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 text-center m-auto">
                    <button class="btn1" onclick="location.href='vitrine.php'" id="botao-vitrine">Ver mais agentes!</button>
                </div>
            </div>
        </div>
    </section>

    <section class="sobre" id="sobre-produtos">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-lg-8 m-auto text-center">
                    <h1 id="titulo">PRODUTOS DE QUALIDADE!</h1>
                    <h6 style="color: red;">Feitos com carinho para você!</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <img src="img/qualidade1.webp" class="img-fluid mb-3" alt="" id="prod-imagem">
                    <h5>Agulhas precisas</h5>
                    <p>Garantindo que o crochê seja bordado com a maior precisão possível</p>
                </div>
                <div class="col-lg-4">
                    <img src="img/qualidade2.webp" class="img-fluid mb-3" alt="" id="prod-imagem">
                    <h5>Linhas de qualidade</h5>
                    <p>Garantindo maior qualidade e proximidade de cor de seu personagem</p>
                </div>
                <div class="col-lg-4">
                    <img src="img/qualidade3.webp" class="img-fluid mb-3" alt=""id="prod-imagem">
                    <h5>Feitos com calma e sem pressa</h5>
                    <p>Garantindo a qualidade final de seu produto, com todos os detalhes possíveis</p>
                </div>

            </div>
            <div class="row pt-3">
                <div class="col-lg-6 text-center m-auto">
                    <button class="btn1" onclick="location.href='vitrine.php'" id="botao-vitrine">Ver Produtos</button>
                </div>
            </div>
        </div>
    </section>


    <section class="contato py-5" id="contato">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5 m-auto text-center">
                    <h1 id="titulo">Quer um amigurumi personalizado?</h1>
                    <h6 style="color: red;">Entre em contato e peça já o seu!</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-4 m-auto">
                            <h6 id="titulo-superior">Localização</h6>
                            <p>Ipiranga - São Paulo</p>
                            
                            <h6>Telefone</h6>
                            <p>(11)97658-0893</p>
                            
                            <h6>EMAIL</h6>
                            <p>miiamigurumi99@gmail.com</p>
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <section class="novidades py-5" id="pre-rodape">
            <div class="containter py-5">
                <div class="row align-self-center">
                    <div class="col-lg-11 m-auto">
                        <div class="row">
                            <div class="col-lg-3 py-3">
                                <h5 class="pb-3" id="titulo-pre-rodape">FORMAS DE PAGAMENTO</h5>
                                <span class="fa-stack fa-lg">
                                    <i class=" fa-brands fa-cc-mastercard fa-stack-2x"></i>
                                </span>
                                <span class="fa-stack fa-lg">
                                    <i class="fa-brands fa-cc-visa fa-stack-2x"></i>
                                </span>
                                <span class="fa-stack fa-lg">
                                    <i class=" fa-brands fa-pix fa-stack-2x"></i>
                                </span>
                                <span class="fa-stack fa-lg">
                                    <i class="fa-sharp fa-solid fa-file-invoice-dollar fa-stack-2x"></i>
                                </span>
                            </div>
                            <div class="col-lg-3 py-3">
                                <h5 class="pb-3" id="titulo-pre-rodape">INSTITUCIONAL</h5>
                                <p>Quem sou</p>
                                <p>Política de Privacidade</p>
                                <p>Programa de Fidelidade</p>
                            </div>
                            <div class="col-lg-3 py-3">
                                <h5 class="pb-3" id="titulo-pre-rodape">DÚVIDAS</h5>
                                <p>FAQ</p>
                                <p>Trocas e devoluções</p>
                            </div>
                            <div class="col-lg-3 py-3">
                                <h5 class="pb-3" id="titulo-pre-rodape">MIDIAS SOCIAIS</h5>
                                <span class="fa-stack fa-lg" onclick="location.href='https://br.pinterest.com/MitsukiCrochetStore'">
                                    <i class="fa fa-circle-thin fa-stack-2x" id="redes-sociais"></i>
                                    <i class=" fa fa-pinterest fa-stack-1x fa" id="redes-sociais"></i>
                                </span>
                                <span class="fa-stack fa-lg" onclick="location.href='https://www.instagram.com/mitsukicrochetstore/'">
                                    <i class="fa fa-circle-thin fa-stack-2x" id="redes-sociais"></i>
                                    <i class=" fa fa-instagram fa-stack-1x fa" id="redes-sociais"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <p class="text-center" id="direitos">Direitos Autorais ©2022 Todos os direitos reservados | Esse site foi desenvolvido por Arthur Hayakawa</p>
                </div>
            </div>
        </section>
    </footer>
</html>
<?php

?>