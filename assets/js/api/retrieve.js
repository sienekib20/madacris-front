class retrieve {

  static get(url, suc, erro, param = {}) {

    $.ajax({
       url: api_endpoint.value + url,
       type: 'GET',
       data: param,
       processData: false,
       contentType: false,
       beforeSend: function () {

       },
       success: function (data) {
            suc(data);
       },
       error: function (error) {
          erro(error)
       }
    });

  }

  static post(url, suc, erro, body = {}) {

    $.ajax({
       url: api_endpoint.value + url,
       type: 'POST',
       data: body,
       processData: false,
       contentType: false,
       beforeSend: function () {

       },
       success: function (data) {
          suc(data);
       },
       error: function (error) {
          erro(error)
       }
    });

  }


}
