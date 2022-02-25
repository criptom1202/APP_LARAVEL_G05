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

        <x-sesion-estado/>


        <main>
            <h1>PÁGINA PRINCIPAL DE CARGO</h1>

            <a href="{{ route('cargo.create') }}">Nuevo</a>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>CARGO</th>
                        <th>DESCRIPCIÓN</th>
                        <th colspan="3">MANTENIMIENTO</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cargos as $cargo)
                        <tr>
                            <td>{{ $cargo->id }}</td>
                            <td>{{ $cargo->cargo }}</td>
                            <td>{{ $cargo->descripcion }}</td>
                            <td><a href="{{ route('cargo.show', $cargo ) }}">Ver</a></td>
                            <td><a href="{{ route('cargo.edit', $cargo ) }}">Editar</a></td>
                            <td>
                                <form action="{{ route('cargo.destroy',$cargo ) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="ELIMINAR">
                                </form>
                            </td>
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