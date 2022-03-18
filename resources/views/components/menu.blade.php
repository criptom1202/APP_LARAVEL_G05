


{{ $var }}
{{ $type }}
<div {{ $attributes->merge(['class' => 'w-full']) }}>
    <nav>
        <ul>
            <li class="pl-10 py-3 hover:bg-red-800 font-bold flex flex-row"><div class="px-5"><i class="fa-solid fa-house"></i></div><div><a href="#">Inicio</a></div></li>
            <li class="pl-10 py-3 hover:bg-red-800 font-bold flex flex-row"><div class="px-5"><i class="fa-solid fa-address-card"></i></div><div><a href="{{ route('cargo.index') }}">Cargo</a></div></li>
            <li class="pl-10 py-3 hover:bg-red-800 font-bold flex flex-row"><div class="px-5"><i class="fa-solid fa-user-gear"></i></div><div><a href="{{ route('empleado.index') }}">Empleado</a></div></li>
            <li class="pl-10 py-3 hover:bg-red-800 font-bold flex flex-row"><div class="px-5"><i class="fa-solid fa-diagram-project"></i></div><div><a href="#">Proyecto</a></div></li>
        </ul>

    </nav>          
</div>
