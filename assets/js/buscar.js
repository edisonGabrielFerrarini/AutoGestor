window.onload = function () {
  var btn_buscar = document.querySelector("#btn-buscar");
  var form_table = document.querySelector("#div-users");

  var categoriaSelector = document.querySelector("#categoriaSelector");
  var nomePesquisa = document.querySelector("#nomePesquisa");

  btn_buscar.onclick = function () {
    var xhtml = new XMLHttpRequest();


    xhtml.onreadystatechange = function () {
      if (xhtml.status == 200 && xhtml.readyState == 4) {
        var user = JSON.parse(this.responseText);

        if ((user != "") && (nomePesquisa.value != "")) {

          var table = `<table class='table table-striped'>`;

          table += `
            <thead>
              <tr>
                <td>ID</td>
                <td>NOME</td>
                <td>EMAIL</td>
                <td>CATEGORIAS</td>
              </tr>
          `;

          table += `<tbody>`;

          for (value in user) {
            table += `<tr>`;

            table += `<td>${user[value].id}</td>`;
            table += `<td>${user[value].nome}</td>`;
            table += `<td>${user[value].email}</td>`;
            table += `<td>${user[value].categoria}</td>`;

            table += `</tr>`;
          }

          table += `</tbody>`;
          table += `</table>`;

          form_table.innerHTML = table;
        }else{
          form_table.innerHTML = table = "Não há valores encontrados"
        }
      }
    };

    parametros = `?nome=${nomePesquisa.value}&categoria=${categoriaSelector.value}`;

    xhtml.open("GET", "./classes/buscar.php" + parametros, true);

    xhtml.send(parametros);
  };
};
