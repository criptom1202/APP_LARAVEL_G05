<x-layout>

    @php
        $tipo = 'activo';
    @endphp


    <x-slot name="navegacion">
        <x-menu var="KB" :type="$tipo"/>
    </x-slot>

    <h3>ENLAZANDO</h3>

</x-layout>