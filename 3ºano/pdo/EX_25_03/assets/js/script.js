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

function validarDadosCliente() {
    form.name.style.outline = "";
    form.email.style.outline = "";
    form.obs.style.outline = "";

    if (form.name.value.length < 3 || form.name.value == "") {
        exibirAlerta(form.name, "Preencha o campo nome corretamente.\nVerifique se o nome possui mais de 3 caracteres.");
        return false;
    }

    if (form.email.value.indexOf('@') == -1 || form.email.value.indexOf('.') == -1 || form.email.value == "") {
        exibirAlerta(form.email, "Preencha o campo email corretamente.\nVerifique se o seu email possui @ e o sufixo do email.");
        return false;
    }

    if (form.obs.value.length > 1000) {
        exibirAlerta(form.obs, `O campo observação excedeu o limite de caracteres (1000): ${form.obs.value.length}.`);
        return false;
    }

    return true;
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
function validarDadosProduto() {
    form.name.style.outline = "";
    form.code.style.outline = "";
    form.stock.style.outline = "";
    form.price.style.outline = "";

    let valorFormatado = form.price.value;
    form.price.value = limparValorEnviado(valorFormatado);

    if (form.name.value.length < 3 || form.name.value == "") {
        exibirAlerta(form.name, "Fill in the name field correctly.\nCheck if the name has more than 3 characters.");
        return false;
    }

    let codeNum = form.code.value;
    let codeBar = [];
    let soma = 0;

    if (codeNum.length !== 13) {
        exibirAlerta(form.code, "Invalid barcode! Make sure it has 13 digits and only contains numbers.");
        return false;
    } else {
        for (let i = 0; i < 13; i++) {
            let newIndex = Number(codeNum[i]);
            if (i % 2 == 0) {
                codeBar.push(newIndex);
            } else {
                codeBar.push(newIndex * 3);
            }
            soma += codeBar[i];
        }

        if (soma % 10 !== 0) {
            const alert = document.getElementById("alert-wrapper");
            alert.innerHTML = "Invalid barcode!";
            alert.classList.add("open");
            setTimeout(() => {
                alert.classList.remove("open");
            }, 5000);
            form.code.style.outline = "2px solid red";
            return false;
        }
    }

    if (form.stock.value == "" || isNaN(form.stock.value)) {
        exibirAlerta(form.stock, "Fill in the product stock field correctly.\nCheck if its content contains only numbers.");
        return false;
    }

    return true;
}