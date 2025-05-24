<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
</head>
<body>
    <h1>LIBRO DE FINANZAS</h1>
    <ul>
        <?php 
            foreach($datos as $valor){
                print"<li>".$valor["autor"].",".$valor["editorial"].","."<strong>'".$valor["titulo"]."'</strong></li>";
            }
        ?>
    </ul>
</body>
</html>