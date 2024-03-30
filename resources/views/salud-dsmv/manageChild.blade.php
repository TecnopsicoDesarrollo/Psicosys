<ul>
    @foreach($childs as $child)
        <li>
            {{ $child->nombre }}

            @if(count($child->childs))
                @include('salud-dsmv.manageChild',['childs' => $child->childs])
            @endif
        </li>
    @endforeach
</ul>
