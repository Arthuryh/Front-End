var regNome = new RegExp("[A-z ]{6,100}");
var regEmail = new RegExp("[a-z0-9]+@[a-z]+\.[a-z]{2,3}");
var regSenha = new RegExp("^(?=.*[A-Z])(?=.*[!#@$%&-+_(){}])(?=.*[0-9])(?=.*[a-z]).{6,25}$");
var regCPF = new RegExp("[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}");
var regTel = new RegExp("[0-9]{4,5}-[0-9]{4}");
var nomeProd;

function validarCad(){
    document.getElementById("txtNomeCad").classList.remove("errotxt");
    document.getElementById("txtEmailCad").classList.remove("errotxt");
    document.getElementById("txtSenhaCad").classList.remove("errotxt");
    document.getElementById("txtConfirmaCad").classList.remove("errotxt");
    document.getElementById("txtCpfCad").classList.remove("errotxt");
    document.getElementById("txtTelCad").classList.remove("errotxt");
    erroNome.innerHTML = "";
    erroEmail.innerHTML = "";
    erroSenha.innerHTML = "";
    erroConfirma.innerHTML = "";
    erroCpf.innerHTML = "";
    erroTelefone.innerHTML = "";
    var tudoOk = true;
    if(!regNome.test(txtNomeCad.value)){
        erroNome.innerHTML = "Informe um nome completo !";
        document.getElementById("erroNome").classList.add("errolbl");
        document.getElementById("txtNomeCad").classList.add("errotxt");
        document.getElementById("txtNomeCad").focus();
        tudoOk = false;
    }
    if(!regEmail.test(txtEmailCad.value)){
        erroEmail.innerHTML = "Informe um email válido !";
        document.getElementById("erroEmail").classList.add("errolbl");
        document.getElementById("txtEmailCad").classList.add("errotxt");
        document.getElementById("txtEmailCad").focus();
        tudoOk = false;
    }
    if(!regSenha.test(txtSenhaCad.value)){
        erroSenha.innerHTML = "Informe uma senha forte!<br>De 6 dígitos, com Letra Maiúscula, Caracter especial e Número!";
        document.getElementById("erroSenha").classList.add("errolbl");
        document.getElementById("txtSenhaCad").classList.add("errotxt");
        document.getElementById("txtConfirmaCad").classList.add("errotxt");
        document.getElementById("txtSenhaCad").focus();
        tudoOk = false;      
    }
    if(txtConfirmaCad.value !== txtSenhaCad.value){
        erroConfirma.innerHTML = "As senhas não são iguais !";
        document.getElementById("erroConfirma").classList.add("errolbl");
        document.getElementById("txtConfirmaCad").classList.add("erro");
        document.getElementById("txtConfirmaCad").focus();
        tudoOk = false;      
    }
    if(!regCPF.test(txtCpfCad.value)){
        erroCpf.innerHTML = "Informe um CPF válido !";
        document.getElementById("erroCpf").classList.add("errolbl");
        document.getElementById("txtCpfCad").classList.add("errotxt");
        document.getElementById("txtCpfCad").focus();
        tudoOk = false;      
    }
    if(!regTel.test(txtTelCad.value)){
        erroTelefone.innerHTML = "Informe um telefone valido !";
        document.getElementById("erroTelefone").classList.add("errolbl");
        document.getElementById("txtTelCad").classList.add("errotxt");
        document.getElementById("txtTelCad").focus();
        tudoOk = false;
    }
    if(tudoOk == true) {
        frm2.submit();
    }
}

function validarLogin() {
    document.getElementById("txtEmailLog").classList.remove("errotxt");
    document.getElementById("txtSenhaLog").classList.remove("errotxt");
    lblEmailLog.innerHTML = "";
    lblSenhaLog.innerHTML = "";
    var tudoOk = true;

    if(!regEmail.test(txtEmailLog.value)){
        lblEmailLog.innerHTML = "Email incorreto ou não cadastrado !";
        document.getElementById("lblEmailLog").classList.add("errolbl");
        document.getElementById("txtEmailLog").classList.add("errotxt");
        document.getElementById("txtEmailLog").focus();
        tudoOk = false;
    }
    if(!regSenha.test(txtSenhaLog.value)){
        lblSenhaLog.innerHTML = "Senha incorreta !";
        document.getElementById("lblSenhaLog").classList.add("errolbl");
        document.getElementById("txtSenhaLog").classList.add("errotxt");
        document.getElementById("txtSenhaLog").focus();
        tudoOk = false;
    }

    if(tudoOk == true) {
        frm1.submit();
    }
}

function validarEsq() {
    document.getElementById("txtEmailEsq").classList.remove("errotxt");
    lblEmailEsq.innerHTML = "";
    var tudoOk = true;

    if(!regEmail.test(txtEmailEsq.value)){
        lblEmailEsq.innerHTML = "Email incorreto ou não cadastrado !";
        document.getElementById("lblEmailEsq").classList.add("errolbl");
        document.getElementById("txtEmailEsq").classList.add("errotxt");
        document.getElementById("txtEmailEsq").focus();
        tudoOk = false;
    }

    if(tudoOk == true) {
        frm3.submit();
    }
}



function abrirProd() {
    nomeProd = document.getElementById("prod").innerHTML;
    if(nomeProd == "Cypher") {
        console.log("Entrou Cypher");
        location.href="product_detail.html";
    }

    if(nomeProd == "Cypher") {
        console.log("Entrou Cypher");
        //location.href="product_detail.html";
    }

    if(nomeProd == "Cypher") {
        console.log("Entrou Cypher");
        //location.href="product_detail.html";
    }

    if(nomeProd == "Cypher") {
        console.log("Entrou Cypher");
        //location.href="product_detail.html";
    }
    
}