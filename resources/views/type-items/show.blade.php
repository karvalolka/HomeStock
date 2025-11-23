{{--@extends('layouts.app')--}}

{{--@section('title', $item->name)--}}

{{--@section('content')--}}
{{--<div class="card">--}}
{{--    <div class="card-header">--}}
{{--        <h1>{{ $item->name }}</h1>--}}
{{--    </div>--}}

{{--    <div class="card-body">--}}
{{--        <div class="form-grid mb-6">--}}
{{--            <div class="form-group">--}}
{{--                <label>Тип предмета</label>--}}
{{--                <div class="text-sm">{{ $item->typeItem->name }}</div>--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label>Сезон</label>--}}
{{--                <div class="text-sm">{{ $item->season }}</div>--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label>Категория</label>--}}
{{--                <div class="text-sm">{{ $item->type }}</div>--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label>Цена</label>--}}
{{--                <div class="text-sm">{{ $item->price ? number_format($item->price, 2) . ' руб.' : '—' }}</div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        @if($item->setting)--}}
{{--            <div class="form-group">--}}
{{--                <label>Параметр</label>--}}
{{--                <div class="text-sm">{{ $item->setting }}</div>--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        @if($item->description)--}}
{{--            <div class="form-group">--}}
{{--                <label>Описание</label>--}}
{{--                <div class="text-sm">{{ $item->description }}</div>--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        <div class="action-buttons">--}}
{{--            <a href="{{ route('items.edit', $item->id) }}" class="btn">--}}
{{--                Редактировать--}}
{{--            </a>--}}
{{--            <form action="{{ route('items.destroy', $item->id) }}" method="POST">--}}
{{--                @csrf--}}
{{--                @method('DELETE')--}}
{{--                <button type="submit" onclick="return confirm('Удалить предмет?')"--}}
{{--                        class="btn btn-danger">--}}
{{--                    Удалить--}}
{{--                </button>--}}
{{--            </form>--}}
{{--            <a href="{{ route('items.index') }}" class="btn">--}}
{{--                Назад--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
