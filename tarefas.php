<html>
<head>
<title>PhotoHub</title>
</head>
<body>
<h1>PhotoHub</h1>

<form>
    <fieldset>
        <legend>Novo Evento</legend>
        <label>
        Evento: 
        <input type="text" name="evento" />
        </label>
    <input type="submit" value="Commit" />
    </fieldset>

</form>

<?php

    $lista_eventos = array();

    if (isset($_GET['evento'])) {
       $lista_eventos[]= $_GET['evento'];
    }
?>

<table>
<tr>
<th>Eventos salvos</th>
</tr>
<?php foreach ($lista_eventos as $evento) : ?>
<tr>
<td><?php echo $evento; ?> </td>
</tr>
<?php endforeach; ?>
</table>


</body>
</html>