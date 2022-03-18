<x-layout>
    <x-slot name="principal">
        <div class="div-container">

        <h1 class="titulo-formulario">ACTUALIZAR CARGO</h1>


            <form action="{{ route('cargo.update', $cargo->id ) }}" method="POST">
                @csrf
                @method('PUT')

                <label for="">Id:<br>
                    <input type="text" name="id" value="{{ $cargo->id }}" class="inputs w-1/4" readonly>
                </label><br>


                <label for="">Cargo:<br>
                    <input type="text" name="cargo" placeholder="Ingrese cargo" value="{{ old('cargo', $cargo->cargo ) }}" class="inputs w-1/4">
                    @error('cargo')
                        <li>{{ $message }}</li>
                    @enderror

                </label><br>

                <label for="">Descripción: <br>
                    <textarea name="descripcion" placeholder="Ingrese descripción de cargo" class="inputs w-1/2 h-40">{{ old('descripcion', $cargo->descripcion ) }}</textarea>
                    @error('descripcion')
                        <li>{{ $message }}</li>
                    @enderror
                </label><br>
                
                <div class="flex flex-row w-1/2">
                    <a href="{{ route('cargo.index') }}" class="boton-gris">Atrás</a>
                    <input type="submit" value="ACTUALIZAR" class="boton-azul">
                  
                </div>
                
            </form>
        
        </div>
    
    </x-slot>

</x-layout>