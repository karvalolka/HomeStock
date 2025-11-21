<html>
    <body>
        <h1>Hello</h1>
        @if($types->isEmpty())
            <p>нет типов</p>
        @else
            <ul>
            @foreach($types as $type)
                <li>{{ $type->name }}</li>
            @endforeach
            </ul>
        @endif
    </body>
</html>
