function exibirAlerta(campo, mensagem) {
    const alert = document.getElementById("alert-wrapper");
    campo.focus();
    alert.innerHTML = mensagem;
    alert.classList.add("open");
    setTimeout(() => {
        alert.classList.remove("open");
    }, 5000);
    campo.style.outline = "2px solid red";
}

function validarEmailLogin(){
    form.email.style.outline = "";
    form.password.style.outline = "";

    if(form.email.value.indexOf('@') == -1 || form.email.value.indexOf('.') == -1 || form.email.value == ""){
        exibirAlerta(form.email, "Preencha o campo email corretamente.\nVerifique se o seu email possui @ e o sufixo do email.");
        return false;
    }
}