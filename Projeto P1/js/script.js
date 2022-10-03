function botao_cadastrar() {
    var form1 = document.getElementById("caixa-1");
    var form2 = document.getElementById("caixa-2");
    
    form1.style.display = "none";
    form1.style.visibility = "hidden";

    form2.style.display = "flex"
    form2.style.display = "visible"
}

function botao_cadastro_reexibir() {
    var form1 = document.getElementById("caixa-1");
    var form2 = document.getElementById("caixa-2");


    form1.style.display = "flex";
    form1.style.visibility = "visible";

    form2.style.display = "none"
    form2.style.display = "hidden"
}