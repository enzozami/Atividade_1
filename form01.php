<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Exercício 01</title>
</head>
<body>
    <div class="container">
        <form action="destino01.php" method="post">
            <h1>FORMULÁRIO PARA CÁLCULO DE VOLUME DE UM CILINDRO</h1>

            <label for="" class="form-label">Digite o valor do raio: </label>
            <input type="number" step="any" name="raio" class="form-control" min="0" required>

            <label for="" class="form-label">Digite o valor da altura: </label>
            <input type="number" step="any" name="altura" class="form-control" min="0" required>

            <button class="btn btn-success my-2 w-25 d-block mx-auto" type="submit">Calcular!</button>
        </form>
    </div>
</body>
</html>