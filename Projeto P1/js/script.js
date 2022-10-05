var regNome = new RegExp("[A-z ]{6,100}");
var regEmail = new RegExp("[a-z0-9]+@[a-z]+\.[a-z]{2,3}");
var regSenha = new RegExp("^(?=.*[A-Z])(?=.*[!#@$%&-+_(){}])(?=.*[0-9])(?=.*[a-z]).{6,25}$");
var regCPF = new RegExp("/^\d{3}\.\d{3}\.\d{3}\-\d{2}$/");
var regTel = new RegExp("[0-9]{4,5}-[0-9]{4}");

function validar(){
    console.log("Executei");
    nome-cad.classList.remove("erro");
    email-cad.classList.remove("erro");
    senha-cad.classList.remove("erro");
    confirma-cad.classList.remove("erro");
    cpf-cad.classList.remove("erro");
    telefone-cad.classList.remove("erro");
    var tudoOk = true;
    if(!regNome.test(nome-cad.value)){
        erros.innerHTML = erros.innerHTML + 
            "Informe um nome completo !<br/>";
        nome-cad.classList.add("erro");
        nome-cad.focus();
        tudoOk = false;
    }
    if(!regEmail.test(email-cad.value)){
        erros.innerHTML = erros.innerHTML + 
            "Informe um email válido !<br/>";
        email-cad.classList.add("erro");
        email-cad.focus();
        tudoOk = false;
    }
    if(!regSenha.test(senha-cad.value)){
        erros.innerHTML = erros.innerHTML +  
            "Informe uma senha forte !<br/>";
        senha-cad.classList.add("erro");
        senha-cad.focus(); 
        tudoOk = false;      
    }
    if(confirma-cad.value != senha-cad.value){
        erros.innerHTML = erros.innerHTML +  
            "As senhas não são iguais !<br/>";
        confirma-cad.classList.add("erro");
        confirma-cad.focus(); 
        tudoOk = false;      
    }
    if(!regCPF.test(cpf-cad.value)){
        erros.innerHTML = erros.innerHTML +  
            "Informe um CPF válido !<br/>";
        cpf-cad.classList.add("erro");
        cpf-cad.focus(); 
        tudoOk = false;      
    }
    if(!regTel.test(telefone-cad.value)){
        erros.innerHTML = erros.innerHTML + 
            "Informe um telefone valido !<br/>";
        telefone-cad.focus();
        telefone-cad.classList.add("erro");
        tudoOk = false;
    }
    frm1.submit();
}