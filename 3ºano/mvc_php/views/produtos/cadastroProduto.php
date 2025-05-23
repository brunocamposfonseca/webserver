
<div class="div-product">
    <p>Imagem do produto</p>
        <img id="previewImagem" src="/mvc_php/fotos/<?=!empty($fotoProduto) ? $fotoProduto : "semProduto.png";?>" class="photo-product">
        </div>
<div>
    <form action="cadastro" method="post" enctype="multipart/form-data">
        <label>Nome do Produto:</label>
        <input type="text" name="nomeProduto">
        <br>
        <label>Foto do Produto:</label>
        <input type="file" name="fotoProduto"  onchange="alteraImagem(this)"> 
        <br>
        <label>Preço:</label>
        <input type="number" step="0.01" name="precoProduto">
        <br>
        <label>Estoque:</label>
        <input type="number" name="estoqueProduto">
        <br>
        <input type="submit" value="Enviar">
    </form>
</div>

<script>
    var verificador = 1
    function habilitarEdicao(){
        var campos = document.querySelectorAll("input")
        if(verificador == 1){
            verificador = 0
            var texto ="Desabilitar Edição"
        }else{
            verificador = 1
            var texto ="Habilitar Edição"
        }
        document.getElementsByClassName("button-edit")[0].innerHTML = texto
        campos.forEach(campo => {
            campo.disabled = verificador;
        });
    }

    function alteraImagem(imagem){
            console.log(imagem);
            const img = document.getElementById('previewImagem');
            const file = imagem.files[0];
            if (file) img.src = URL.createObjectURL(file);
        }
</script>