<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div>
        <header>
            Menú de opciones
        </header>
        <main>
            <h1>EDICIÓN DE CARGO</h1>
            <form action="{{ route('cargo.update', $cargo->id ) }}" method="POST">
                @csrf
                @method('PUT')


                <label for="">Id: <br>
                    <input type="text" name="id" value="{{ $cargo->id }}">
                </label><br>

                <label for="">Cargo:  <br>
                    <input type="text" name="cargo" placeholder="Ingrese cargo" value="{{ $cargo->cargo }}">
                </label><br>

                <label for="">Descripción: <br>
                    <textarea name="descripcion" placeholder="Ingrese descripción de cargo">{{ $cargo->descripcion }}</textarea>
                </label><br>
                
                <input type="submit" value="GUARDAR">
            </form>
        </main>
        <footer>
            <p>Todos los Derechos Reservados &COPY; 2022 </p>
        </footer>

    
    </div>

</body>
</html>