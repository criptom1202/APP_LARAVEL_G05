<x-layout>
    <x-slot name="principal">
        <div class="div-container">

        <h1 class="titulo-formulario">NUEVO CARGO</h1>


            <form action="{{ route('cargo.store') }}" method="POST">
                @csrf
                <label for="">Cargo:<br>
                    <input type="text" name="cargo" placeholder="Ingrese cargo" value="{{ old('cargo') }}" class="inputs w-1/4">
                    @error('cargo')
                        <li>{{ $message }}</li>
                    @enderror

                </label><br>

                <label for="">Descripción: <br>
                    <textarea name="descripcion" placeholder="Ingrese descripción de cargo" class="inputs w-1/2 h-40">{{ old('descripcion') }}</textarea>
                    @error('descripcion')
                        <li>{{ $message }}</li>
                    @enderror
                </label><br>
                
                <div class="flex flex-row w-1/2">
                    <a href="{{ route('cargo.index') }}" class="boton-gris">Atrás</a>
                    <input type="submit" value="GUARDAR" class="boton-azul">
                  
                </div>
                
            </form>
        
        </div>
    
    </x-slot>

</x-layout>