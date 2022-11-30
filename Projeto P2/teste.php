<!DOCTYPE html>
<html lang="pt-br">

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
    <section class="colecao">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-lg-5 m-auto text-center">
                    <h1 id="titulo">VALORANT</h1>
                    <h6 style="color: red;">Adquira já seu agente favorito!</h6>
                </div>
            </div>
            <div class="row">
                <?php listar2(); ?>
            </div>
        </div>
    </section>
</html>
<?php
function listar(){
    $con = new mysqli("localhost","root","123456","p2_mitsuki_db");
    if(isset($_POST["bt1"])){
        $busca = $_POST["busca"];
        $sql = "select * from produto where titulo like '%$busca%' order by titulo";
    } else {
        $sql = "select * from produto order by titulo";
    }
    $retorno = mysqli_query($con,$sql);
    while($reg = mysqli_fetch_array($retorno)){
        /*echo "<tr><td>". $reg["codigo"] . "</td>";
        echo "<td>".$reg["titulo"]."</td>";
        echo "<td>".$reg["valor"]."</td>";
        echo "<td><a href='produto.php?codigo=" . $reg['codigo'] . "'>editar</a></td></tr>";*/

        echo "<div class='col-lg-3 text-center'>";
        echo "<div class='card border-0 bg-light mb-2' id='prod-card'>";
        echo "<div class='card-body'>";
        echo "<img src='img/produtos/p" .$reg["codigo"].".webp' id='prod1' class='img-fluid' alt='' onclick='store_prod(this.id);'></div></div>";
        echo "<h6>".$reg["titulo"]."</h6>";
        echo "<p>R$".$reg["valor"]."</p></div>";
    }
    mysqli_close($con);
}

function listar2(){
    $con = new mysqli("localhost","root","123456","p2_mitsuki_db");
    if(isset($_POST["bt1"])){
        $busca = $_POST["busca"];
        $sql = "select * from produto where titulo like '%$busca%' order by titulo";
    } else {
        $sql = "select * from produto where categoria like 'valorant' order by titulo";
    }
    $retorno = mysqli_query($con,$sql);
    while($reg = mysqli_fetch_array($retorno)){
        /*echo "<tr><td>". $reg["codigo"] . "</td>";
        echo "<td>".$reg["titulo"]."</td>";
        echo "<td>".$reg["valor"]."</td>";
        echo "<td><a href='produto.php?codigo=" . $reg['codigo'] . "'>editar</a></td></tr>";*/

        echo "<div class='col-lg-3 text-center'>";
        echo "<div class='card border-0 bg-light mb-2' id='prod-card'>";
        echo "<div class='card-body'>";
        echo "<img src='" .$reg["destaque"].$reg["categoria"]."/".$reg["codigo"].".webp' id='prod1' class='img-fluid' alt='' onclick='store_prod(this.id);'></div></div>";
        echo "<h6>".$reg["titulo"]."</h6>";
        echo "<p>R$".$reg["valor"]."</p></div>";
    }
    mysqli_close($con);
}
?>