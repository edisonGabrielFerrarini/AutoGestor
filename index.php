<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Optional theme -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container col-md-5">
        <div>
            <div class="form-group">
                <label for="nomePesquisa">Nome para pesquisa</label>
                <input type="email" class="form-control" id="nomePesquisa" placeholder="ex: edison" required>
            </div>
            <div class="form-group">
                <label for="categoriaSelector">Categoria</label>
                <select class="form-control" id="categoriaSelector">
                    <option>Ouro</option>
                    <option>Prata</option>
                    <option>Bronze</option>
                </select>
            </div>
            <button class="btn btn-outline-success btn-lg btn-block" id="btn-buscar">Enviar</button>
        </div>
    </div>
    <div class="container col-md-5">
        <div id="div-users"></div>
    </div>


    <script src="assets/js/buscar.js"></script>
</body>

</html>