function validarDadosCliente() {
    form.name.style.outline = "";
    form.email.style.outline = "";
    form.obs.style.outline = "";

    if (form.name.value.length < 3 || form.name.value == "") {
        var alert = document.getElementById("alert-wrapper");
        form.name.focus()
        alert.innerHTML = "Preencha o campo nome corretamente.\nVerifique se o nome possui mais de 3 caracteres.";
        alert.classList.add("open");
        setTimeout(() => {
            alert.classList.remove("open")
        }, 5000)
        form.name.style.outline = "2px solid red";

        return false;
    }

    if (form.email.value.indexOf('@') == -1 || form.email.value.indexOf('.') == -1 || form.email.value == "") {
        var alert = document.getElementById("alert-wrapper");
        form.email.focus()
        alert.innerHTML = "Preencha o campo email corretamente.\nVerifique se o seu email possui @ e o sufixo do email.";
        alert.classList.add("open");
        setTimeout(() => {
            alert.classList.remove("open")
        }, 5000)
        form.email.style.outline = "2px solid red";
        
        return false;
    }

    if(form.obs.value.length > 1000){
        var alert = document.getElementById("alert-wrapper");
        form.obs.focus()
        alert.innerHTML = `O campo observação excedeu o limite de caracteres (1000): ${form.obs.value.length}.`;
        alert.classList.add("open");
        setTimeout(() => {
            alert.classList.remove("open")
        }, 5000)
        form.obs.style.outline = "2px solid red";
        
        return false
    }
}