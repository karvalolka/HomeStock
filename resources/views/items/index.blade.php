<html>
    <body>
        <h1>Hello</h1>
        <div style="margin-bottom: 20px;">
            <a href="{{ route('items.create') }}" class="btn">+ Добавить предмет</a>
        </div>
        @if($items->isEmpty())
            <p>нет вещей</p>
        @else
            <ul>
            @foreach($items as $item)
                <li>{{ $item->name }}</li>
            @endforeach
            </ul>
        @endif
    </body>
</html>
