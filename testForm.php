<?php 
    require_once 'Form.php';
    require_once 'Field.php';
    require_once 'SimpleField.php';
    require_once 'MultipleField.php';
    $form1 = new Form("validate.php","Prueba formulario","post");


    $simpleField1 = new SimpleField('nombre','text', 'Escribe el nombre');
    $form1->add($simpleField1);
    $form1->add(new SimpleField('edad','number', '¿Que edad tienes?' ,'18'));
    $form1->add(new SimpleField('color','color', '¿Cual es tu color favorito', '#0000FF'));
    $form1->add(new SimpleField('Check 4','checkbox', 'Quieres suscribirte?' , 'true'));
    $options = [
        "Desarrollo en entornos servidor" => "DSW",
        "Desarrollo en entornos cliente" => "DWC",
        "Despliegue de aplicaciones" => "DPL"
    ];
    $multipleField1 = new MultipleField('preferido','radio', '¿Cual es tu modulo preferido?' , 'Despliegue de aplicaciones', $options );
    $form1->add($multipleField1);
    $multipleField1->addOption('Diseño de interfaces web', 'DOR');



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            border: 1px solid blue;
        }
    </style>
</head>
<body>
    <h1>Pruebas con formulario</h1>
    <?php $form1 -> render(); ?>
</body>
</html>