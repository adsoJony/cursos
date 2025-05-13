<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="node/modules">
    <title>Flexbox</title>
</head>

<body>

    <div class="title">
        <h1>Flexbox</h1>
    </div>
    <hr>
    <!-- Justify Content -->
    <div class="container">
        <div class="title">
            <h2>Justify Content</h2>
        </div>
        <p>Justify content:</p>
        <div class="container">
            <div class="title">
                <h3>Justify-Content center</h3>
            </div>
            <div class="contenedor justify-content-center">
                <div class="item">Item1</div>
                <div class="item">Item2</div>
                <div class="item">Item3</div>
                <div class="item">Item4</div>
            </div>
        </div>

        <div class="container">
            <div class="title">
                <h3>Justify-Content Start</h3>
            </div>
            <div class="contenedor justify-content-start">
                <div class="item">Item1</div>
                <div class="item">Item2</div>
                <div class="item">Item3</div>
                <div class="item">Item4</div>
            </div>
        </div>

        <div class="container">
            <div class="title">
                <h3>Justify-Content End</h3>
            </div>
            <div class="contenedor justify-content-end">
                <div class="item">Item1</div>
                <div class="item">Item2</div>
                <div class="item">Item3</div>
                <div class="item">Item4</div>
            </div>

        </div>
    </div>
    <!-- Fin Justify Content -->
    <hr>
    <!-- Flex-Wrap -->
    <div class="container">
        <div class="title">
            <h2>Flex-Wrap</h2>
        </div>
        <h4>Lineas (renglones)</h4>
        <p>los elementos flexibles pueden disponerse en una sola linea o variass lineas (renglones) de acuerdo con la propiedad <strong>flex-wrap</strong> que controlan la dirección del eje secundario y la dirección en la que las nuevas lineas se apilan.</p>

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
        <!-- Fin de Flex-Wrap -->
        <hr>
        <!-- Align-Content -->

    </div>


    <div class="container">

        <div class="title">
            <h2>Align-Content</h2>
        </div>

        <div class="container">
            <div class="title">
                <h3>Align-Items</h3>
            </div>
            <div class="contenedor contenedor-lg nowrap align-items nowrap">
                <div class="item">Item1</div>
                <div class="item">Item2</div>
                <div class="item">Item3</div>
                <div class="item">Item4</div>
                <div class="item">Item5</div>
                <div class="item">Item6</div>
                <div class="item">Item7</div>
                <div class="item">Item8</div>
            </div>
            <div class="notas">
                <p>*Cuando utilizamos <strong>align-items</strong>, se generan los espacios entre lineas</p>
            </div>
        </div>
        <div class="container">
            <div class="title">
                <h3>Align-Items-Start</h3>
            </div>
            <div class="contenedor contenedor-lg nowrap align-items-start nowrap">
                <div class="item">Item1</div>
                <div class="item">Item2</div>
                <div class="item">Item3</div>
                <div class="item">Item4</div>
                <div class="item">Item5</div>
                <div class="item">Item6</div>
                <div class="item">Item7</div>
                <div class="item">Item8</div>
            </div>

        </div>

        <div class="container">
            <div class="title">
                <h3>Align-Content</h3>
            </div>
            <div class="contenedor contenedor-lg align-content nowrap">
                <div class="item">Item1</div>
                <div class="item">Item2</div>
                <div class="item">Item3</div>
                <div class="item">Item4</div>
                <div class="item">Item5</div>
                <div class="item">Item6</div>
                <div class="item">Item7</div>
                <div class="item">Item8</div>
            </div>
        </div>

        <div class="container">
            <div class="title">
                <h3>Align-Content-Start</h3>
            </div>
            <div class="contenedor contenedor-lg align-content-start nowrap">
                <div class="item">Item1</div>
                <div class="item">Item2</div>
                <div class="item">Item3</div>
                <div class="item">Item4</div>
                <div class="item">Item5</div>
                <div class="item">Item6</div>
                <div class="item">Item7</div>
                <div class="item">Item8</div>
            </div>
        </div>
    </div>
    <!-- Fin Align-Content -->
</body>

</html>