function validarDadosCliente() {
    if (form.name.value.length < 3 || form.name.value == "") {
        form.name.focus()
        alert("Preencha o campo nome corretamente.\nVerifique se o nome possui mais de 3 caracteres.")
        form.name.style.outline = "2px solid red";
        return false;
    }

    if (form.email.value.indexOf('@') == -1 || form.email.value.indexOf('.') == -1 || form.email.value == "") {
        form.email.focus()
        alert("Preencha o campo de email corretamente.\nVerifique se o email possui '@' e o '.'.")
        form.email.style.outline = "2px solid red";
        return false;
    }

    if(form.obs.value.length > 1000){
        form.obs.focus()
        alert("Você excedeu a capacidade de caracteres...\n" +form.obs.value.length + " caracteres digitados.")
        return false
    }
}