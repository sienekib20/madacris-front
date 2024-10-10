document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('create_tipo_item').addEventListener('click', (event) => {
    event.preventDefault();

        var tipo_item = document.getElementById('tipo_item').value;

        var route_create_tipoitem = document.getElementById('route_tipo_item').value;

        // Usando FormData para enviar os dados e o arquivo
        let formData = new FormData();
        formData.append('tipo_item', tipo_item);


        $.ajax({
            url: route_create_tipoitem,
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