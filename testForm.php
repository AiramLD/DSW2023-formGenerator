<?php 
    require_once 'Form.php';
    $form1 = new Form();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pruebas con formulario</h1>
    <?php $form1 -> render(); ?>
</body>
</html>