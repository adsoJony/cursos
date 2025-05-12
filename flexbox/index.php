<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Flexbox</title>
</head>

<body>

    <div class="title">
        <h1>Flexbox</h1>
    </div>
    <div class="container">
        <div class="title">
            <h2>Flex-Wrap</h2>
        </div>
        <h4>Lineas (renglones)</h4>
        <p>los elementos flexibles pueden disponerse en una sola linea o variass lineas (renglones) de acuerdo con la propiedad <strong>flex-wrap</strong> que controlan la dirección del eje secundario y la dirección en la que las nuevas lineas se apilan.</p>
    </div>

    <div class="container">
        <div class="title">
        <h3>No-Wrap</h3>
        </div>
        <div class="contenedor">
            <div class="item">Item 1</div>
            <div class="item">Item 1</div>
            <div class="item">Item 2</div>
            <div class="item">Item 4</div>
        </div>
    </div>
<hr>
    <div class="container">
        <div class="title">
        <h3>Wrap</h3>
        </div>
        <div class="contenedor wrap">
            <div class="item">Item 1</div>
            <div class="item">Item 2</div>
            <div class="item">Item 3</div>
            <div class="item">Item 4</div>
        </div>
    </div>

    <hr>
    <div class="container">
        <div class="title">
        <h3>Wrap-Reverse</h3>
        </div>
        <div class="contenedor wrap-reverse">
            <div class="item">Item 1</div>
            <div class="item">Item 2</div>
            <div class="item">Item 3</div>
            <div class="item">Item 4</div>
        </div>
    </div>


</body>

</html>