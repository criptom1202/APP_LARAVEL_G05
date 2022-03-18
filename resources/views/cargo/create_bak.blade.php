<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <x-alerta/>
     <!--notación: kebab-case-->


    <div>
        <header>
            Menú de opciones
        </header>

        <main>
            <h1>NUEVO CARGO</h1>
            <form action="{{ route('cargo.store') }}" method="POST">
                @csrf
                <label for="">Cargo:  <br>
                    <input type="text" name="cargo" placeholder="Ingrese cargo" value="{{ old('cargo') }}">
                    @error('cargo')
                        <li>{{ $message }}</li>
                    @enderror

                </label><br>

                <label for="">Descripción: <br>
                    <textarea name="descripcion" placeholder="Ingrese descripción de cargo">{{ old('descripcion') }}</textarea>
                    @error('descripcion')
                        <li>{{ $message }}</li>
                    @enderror
                </label><br>
                
                <input type="submit" value="GUARDAR">
            </form>
        </main>
        <footer>
            <p>Todos los Derechos Reservados &COPY; 2022 </p>
        </footer>

    
    </div>

   
    {{-- dd(old()) --}}
</body>
</html>