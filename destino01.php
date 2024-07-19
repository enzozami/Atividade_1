<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php
            $raio = filter_input(INPUT_POST, "raio", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $altura = filter_input(INPUT_POST, "altura", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

            $v = pow($raio, 2) * $altura * number_format(pi(), 5, ".");
            
            echo"O volume do cilindro será: ". number_format($v, 2, ",", ".");
        ?>
    </div>
</body>
</html>