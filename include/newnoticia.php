<a href="#" id="openForm">Abrir Formulario</a>

<div id="formPopup">
    <form action="procesar.php" method="post" enctype="multipart/form-data">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" required>

        <label for="encabezado">Encabezado:</label>
        <textarea name="encabezado" required></textarea>

        <label for="imagen">Imagen:</label>
        <input type="file" name="imagen" accept="image/*">

        <input type="submit" value="Guardar">
    </form>
    <a href="#" id="closeForm">Cerrar Formulario</a>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="script.js"></script>

<STYLE>
    #formPopup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ccc;
    z-index: 1000;
}

#formPopup label,
#formPopup input,
#formPopup textarea {
    display: block;
    margin-bottom: 10px;
}

#formPopup a {
    display: block;
    margin-top: 10px;
    text-align: right;
    color: #007BFF;
    cursor: pointer;
}

</STYLE>