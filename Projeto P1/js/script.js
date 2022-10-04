function validar(){
    if(nome.value.length<3){
        alert("Informe o seu nome completo!");
        nome.focus();
        return false;
    }

    if(senha.value.length<6 || !isNaN(senha.value)) {
        alert("Informe uma senha com almenos 6 caracteres!");
        senha.focus();
        return false;
    }

    if(senha.value != senha2.value){
        alert("Confirmação não bate com a senha!");
        senha2.focus();
    }

    if(email.value.length<6 || email.value.indexOf("@" < 1)) {
        alert("Informe um email válido");
        email.value = "";
        email.focus();
        return false;
    }

    alert("Tudo certo!");
    frm1.subtmit();
}