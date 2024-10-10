document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('criar_product').addEventListener('click', (event) => {
    event.preventDefault();

        var nome = document.getElementById('nome_product').value;
        var categoria = document.getElementById('categoria_product').value;
        var tipo = document.getElementById('tipo_product').value;
        var descricao = document.getElementById('descrica_product').value;
        var file = document.getElementById('img_product').files[0]; // Correção: Usar .files[0] para o arquivo
        var tamanho = document.getElementById('tamanho_product').value;
        var moeda = document.getElementById('moeda_product').value;
        var preco = document.getElementById('valor_product').value;
        var desconto = document.getElementById('desconto_product').value;
        var tipo_desconto = document.getElementById('desc_product').value;

        var route_create = document.getElementById('create_products').value;

        // Usando FormData para enviar os dados e o arquivo
        let formData = new FormData();
        formData.append('nome', nome);
        formData.append('categoria', 1);
        formData.append('tipo', 1);
        formData.append('descricao', descricao);
        formData.append('file', file);  // Enviar o arquivo de imagem
        formData.append('tamanho', tamanho);
        formData.append('moeda', moeda);
        formData.append('preco', preco);
        formData.append('desconto', desconto);
        formData.append('tipo_desconto', tipo_desconto);

        console.log(file);

        $.ajax({
            url: route_create,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function() {
            
            },
            success: function (data) {
                console.log(data);
            },
            error: function (error) {
                console.log(error);
            }
            });

        /*var xhr = new XMLHttpRequest();

        xhr.open('POST', route_create, true);
        xhr.setRequestHeader('Content-Type', 'application/json');

        xhr.onload = function() {
            if (xhr.status === 200) {
                console.log(xhr);
            } else {
                console.error('Erro na requisição');
            }
        };

        xhr.onerror = function() {
            console.error('Erro na conexão');
        };

        // Enviar o FormData com os dados e o arquivo
        xhr.send(JSON.stringify(formData));

        alert('Clicou');*/
    });

});