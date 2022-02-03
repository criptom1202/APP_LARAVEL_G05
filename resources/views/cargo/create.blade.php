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
            <h1>NUEVO CARGO</h1>
            <form action="{{ route('cargo.store') }}" method="POST">
                <label for="">Cargo:  <br>
                    <input type="text" name="cargo" placeholder="Ingrese cargo">
                </label><br>

                <label for="">Descripción: <br>
                    <textarea name="descripcion" placeholder="Ingrese descripción de cargo"></textarea>
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