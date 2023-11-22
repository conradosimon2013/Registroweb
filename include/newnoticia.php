<a href="#" id="openForm" onclick="setFechaActual()">Nueva noticia</a>

<div id="formPopup">
    <form action="include/procesar_noticia.php" method="post">
    <label for="nombre">Titulo:</label>
    <input type="text" name="titulo" required>
    <label for="noticia">Noticia:</label>
    <textarea name="noticia" id="noticia" cols="30" rows="10" required></textarea>
    <label for="autor">Autor:</label>
    <input type="text" name="autor" id="autor">
    <label for="fecha">Fecha:</label>
    <input type="date" name="fecha" id="fecha">
    <input type="submit" name="submit" id="submit">
    </form>
    <a href="#" id="closeForm">Cerrar Formulario</a>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="script.js"></script>
<script>$(document).ready(function () {
    $("#openForm").click(function () {
        $("#formPopup").fadeIn();
    });

    $("#closeForm").click(function () {
        $("#formPopup").fadeOut();
    });
});

function setFechaActual() {
            // Obtener la fecha actual en formato YYYY-MM-DD
            var fechaActual = new Date().toISOString().split('T')[0];

            // Establecer la fecha actual en el campo de entrada
            document.getElementById('fecha').value = fechaActual;
        }

</script>

<STYLE>
    #formPopup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 22px;
    background-color: #fff;
    border: 1px solid #ccc;
    z-index: 1000;
    font-size:10px;
}

#formPopup label,
#formPopup input,
#formPopup textarea {
    display: block;
    margin-bottom: 5px;
    width: 90vw;
}

#formPopup a {
    display: block;
    margin-top: 10px;
    text-align: right;
    color: #007BFF;
    cursor: pointer;
}

</STYLE>