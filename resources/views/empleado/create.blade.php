<x-layout>
    <x-slot name="principal">
        <div class="div-container">

        <h1 class="titulo-formulario">NUEVO EMPLEADO</h1>


            <form action="{{ route('empleado.store') }}" method="POST">
                @csrf
                <label for="">ID:<br>
                    <input type="text" name="id" placeholder="Ingrese id" value="{{ old('id') }}" class="inputs w-1/4">
                </label><br>

                <label for="">NOMBRES:<br>
                    <input type="text" name="nombre" placeholder="Ingrese nombres" value="{{ old('nombre') }}" class="inputs w-1/4">
                </label><br>

                <label for="">APELLIDOS:<br>
                    <input type="text" name="apellidos" placeholder="Ingrese apellidos" value="{{ old('apellidos') }}" class="inputs w-1/4">
                </label><br>

                <label for="">DNI:<br>
                    <input type="text" name="dni" placeholder="Ingrese dni" value="{{ old('dni') }}" class="inputs w-1/4">
                </label><br>

                <label for="">SEXO:<br>
                    <select name="sexo" class="inputs w-1/4">
                        <option value="M" >Masculino</option>
                        <option value="F">Femenino</option>
                    </select>
                </label><br>

                <label for="">FECHA CONTRATO:<br>
                    <input type="date" name="fecha_cont"  value="{{ old('fecha_cont', date('Y-m-d') ) }}" class="inputs w-1/4">
                </label><br>

                <label for="">SALARIO:<br>
                    <input type="number" name="salario" value="{{ old('salario') }}" class="inputs w-1/4">
                </label><br>

                
                <div class="flex flex-row w-1/2">
                    <a href="{{ route('cargo.index') }}" class="boton-gris">Atrás</a>
                    <input type="submit" value="GUARDAR" class="boton-azul">
                  
                </div>
                
            </form>
        
        </div>
    
    </x-slot>

</x-layout>