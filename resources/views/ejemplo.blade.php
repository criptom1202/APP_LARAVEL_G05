<h1>EJEMPLO DE VISTA</h1>
<?php
    echo "El código asignado es: " . $codigo . "<br>";
?>

<a href="{{ route('clientes') }}">Cliente1</a><br>
<a href="{{ route('clientes') }}">Cliente2</a><br>
<a href="{{ route('clientes') }}">Cliente3</a><br>
<a href="{{ route('clientes') }}">Cliente4</a><br>

<a href="{{ route('empleados') }}">Empleados</a>