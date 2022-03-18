<x-layout>
    
    <x-slot name="principal">
    
        <x-sesion-estado/>

        <div class="div-container">

            <div class="flex flex-row justify-between py-10">
                <h1 class="text-3xl font-bold">PÁGINA PRINCIPAL DE EMPLEADOS</h1>
                <a href="{{ route('empleado.create') }}" class="btn-azul">Nuevo</a>
            </div>

            <div>
     
                <table border="1" class="w-full">
                    <thead>
                        <tr>
                            <th class="th-tabla rounded-tl-lg">ID</th>
                            <th class="th-tabla">NOMBRES</th>
                            <th class="th-tabla">APELLIDOS</th>
                            <th class="th-tabla">DNI</th>
                            <th class="th-tabla">SEXO</th>
                            <th class="th-tabla">FECHA_CONT</th>
                            <th class="th-tabla">SALARIO</th>
                            <th class="th-tabla">CARGO</th>
                            <th class="th-tabla" colspan="2">MANTENIMIENTO</th>

                            <th class="th-tabla rounded-tr-lg"><a href="#" class="px-4 py-2 rounded border hover:bg-red-700"><i class="fa-solid fa-trash"></i></a></th>
                        </tr>
                    </thead>
                    <tbody class="tbody-tabla">
                        @foreach($empleados as $empleado)
                            <tr>
                                <td class="py-2 text-center">{{ $empleado->id }}</td>
                                <td class="py-2 text-center">{{ $empleado->nombre }}</td>
                                <td class="py-2 text-center">{{ $empleado->apellidos }}</td>
                                <td class="py-2 text-center">{{ $empleado->dni }}</td>
                                <td class="py-2 text-center">{{ $empleado->sexo }}</td>
                                <td class="py-2 text-center">{{ $empleado->fecha_cont }}</td>
                                <td class="py-2 text-center">{{ $empleado->salario }}</td>
                                <td class="py-2 text-center">{{ $empleado->cargo }}</td>

                                <td class="py-2 text-center"><a href="{{ route('empleado.show', $empleado->id ) }}" class="text-yellow-500 hover:text-yellow-800 text-2xl"><i class="fa-solid fa-circle-info"></i></a></td>
                                <td class="py-2 text-center"><a href="{{ route('empleado.edit', $empleado->id ) }}" class="text-red-700 text-3xl hover:text-red-900"><i class="fa-solid fa-square-pen"></i></a></td>
                                <td class="py-2 text-center">
                                    <!-- <form action="{{ route('empleado.destroy',$empleado->id ) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="ELIMINAR">
                                    </form> -->
                                    <input type="checkbox">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
       
    </x-slot>
</x-layout>    
    