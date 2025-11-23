{{--@extends('layouts.app')--}}

{{--@section('title', 'Предметы')--}}

{{--@section('content')--}}
{{--<div class="card">--}}
{{--    <div class="card-header">--}}
{{--        <div class="flex items-center justify-between">--}}
{{--            <h1>Предметы</h1>--}}
{{--            <a href="{{ route('items.create') }}" class="btn btn-primary">--}}
{{--                + Добавить--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="card-body">--}}
{{--        @if($items->isEmpty())--}}
{{--            <div class="empty-state">--}}
{{--                <h3>Нет предметов</h3>--}}
{{--                <p class="text-gray">Добавьте первый предмет в коллекцию</p>--}}
{{--                <a href="{{ route('items.create') }}" class="btn btn-primary mt-4">--}}
{{--                    Создать предмет--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        @else--}}
{{--            <ul class="item-list">--}}
{{--                @foreach($items as $item)--}}
{{--                    <li class="item-card">--}}
{{--                        <div class="item-header">--}}
{{--                            <a href="{{ route('items.show', $item->id) }}" class="item-title">--}}
{{--                                {{ $item->name }}--}}
{{--                            </a>--}}
{{--                            <div class="flex gap-2">--}}
{{--                                <span class="tag">{{ $item->season }}</span>--}}
{{--                                <span class="tag">{{ $item->type }}</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="item-meta">--}}
{{--                            <span>{{ $item->typeItem->name ?? 'Без типа' }}</span>--}}
{{--                            @if($item->price)--}}
{{--                                <span>{{ number_format($item->price, 2) }} руб.</span>--}}
{{--                            @endif--}}
{{--                        </div>--}}

{{--                        @if($item->description)--}}
{{--                            <p class="text-sm text-gray mb-4">--}}
{{--                                {{ Str::limit($item->description, 100) }}--}}
{{--                            </p>--}}
{{--                        @endif--}}

{{--                        <div class="action-buttons">--}}
{{--                            <a href="{{ route('items.show', $item->id) }}" class="btn">--}}
{{--                                Просмотр--}}
{{--                            </a>--}}
{{--                            <a href="{{ route('items.edit', $item->id) }}" class="btn">--}}
{{--                                Редактировать--}}
{{--                            </a>--}}
{{--                            <form action="{{ route('items.destroy', $item->id) }}" method="POST">--}}
{{--                                @csrf--}}
{{--                                @method('DELETE')--}}
{{--                                <button type="submit" onclick="return confirm('Удалить?')"--}}
{{--                                        class="btn btn-danger">--}}
{{--                                    Удалить--}}
{{--                                </button>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        @endif--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
