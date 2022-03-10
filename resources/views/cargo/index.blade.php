<x-layout>

    <x-slot name="principal">
    
        <x-sesion-estado/>

        <div class="div-container">
            <div class="flex flex-row justify-between py-10">
                <h1 class="text-3xl font-bold">PÁGINA PRINCIPAL DE CARGO</h1>
                <a href="{{ route('cargo.create') }}" class="btn-azul">Nuevo</a>
            </div>

            <div>
     
                <table border="1" class="w-full">
                    <thead>
                        <tr>
                            <th class="th-tabla rounded-tl-lg">ID</th>
                            <th class="th-tabla ">CARGO</th>
                            <th class="th-tabla ">DESCRIPCIÓN</th>
                            <th class="th-tabla rounded-tr-lg" colspan="3">MANTENIMIENTO</th>
                        </tr>
                    </thead>
                    <tbody class="tbody-tabla">
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
            </div>

        </div>
       
    </x-slot>
</x-layout>    
    