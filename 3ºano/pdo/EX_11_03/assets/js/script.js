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

function aplicarMascaraDolar(event) {
    let valor = event.target.value;
    
    valor = valor.replace(/[^0-9.]/g, '');
   
    const partes = valor.split('.');
    if (partes.length > 2) {
        valor = partes[0] + '.' + partes[1].slice(0, 2);
    }

    valor = valor.replace(/\B(?=(\d{3})+(?!\d))/g, ',');

    if (valor) {
        valor = '$' + valor;
    }

    event.target.value = valor;
}

const inputPreco = document.getElementById('price');
inputPreco.addEventListener('input', aplicarMascaraDolar);

function limparValorEnviado(valorFormatado) {
    let valorLimpo = valorFormatado.replace(/[^0-9.]/g, '');
    return valorLimpo;
}

function validarDadosProduto(event) {
    form.name.style.outline = "";
    form.code.style.outline = "";
    form.stock.style.outline = "";
    form.price.style.outline = "";

    let valorFormatado = form.price.value;
    form.price.value = limparValorEnviado(valorFormatado);
    console.log("Valor limpo para envio:", valorLimpo);

    if (form.name.value.length < 3 || form.name.value == "") {
        var alert = document.getElementById("alert-wrapper");
        form.name.focus()
        alert.innerHTML = "Fill in the name field correctly.\nCheck if the name has more than 3 characters.";
        alert.classList.add("open");
        setTimeout(() => {
            alert.classList.remove("open")
        }, 5000)
        form.name.style.outline = "2px solid red";

        return false;
    }

    if (form.code.value.length < 13 || form.code.value == "" || typeof(form.code.value) != number) {
        var alert = document.getElementById("alert-wrapper");
        form.name.focus()
        alert.innerHTML = "Fill in the product code field correctly.\nCheck if the code has more than 4 characters and if its content contains only numbers.";
        alert.classList.add("open");
        setTimeout(() => {
            alert.classList.remove("open")
        }, 5000)
        form.code.style.outline = "2px solid red";

        return false;
    }

    if (form.stock.value == "" || typeof(form.stock.value) != number) {
        var alert = document.getElementById("alert-wrapper");
        form.name.focus()
        alert.innerHTML = "Fill in the product code field correctly.\nCheck if its content contains only numbers.";
        alert.classList.add("open");
        setTimeout(() => {
            alert.classList.remove("open")
        }, 5000)
        form.stock.style.outline = "2px solid red";

        return false;
    }

    event.preventDefault();
}
