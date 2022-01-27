<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargo</title>
</head>
<body>
    

    <div>
        <header>
            Menú de opciones
        </header>
        <main>
            <h1>PÁGINA PRINCIPAL DE CARGO</h1>
            Cuerpo

            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>CARGO</th>
                        <th>DESCRIPCIÓN</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cargo as $c)
                        <tr>
                            <td>{{ $c->id }}</td>
                            <td>{{ $c->cargo }}</td>
                            <td>{{ $c->descripcion }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </main>
        <footer>
            <p>Todos los Derechos Reservados &COPY; 2022 </p>
        </footer>

    
    </div>


</body>
</html>