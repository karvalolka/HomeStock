<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить предмет</title>
    <style>
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input, select, textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .btn {
            background: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn:hover {
            background: #0056b3;
        }
        .error {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Добавить новый предмет</h1>

        <form action="{{ route('items.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Название *</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                @error('name') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="type_item_id">Тип предмета *</label>
                <select id="type_item_id" name="type_item_id" required>
                    <option value="">Выберите тип</option>
                    @foreach($typeItems as $typeItem)
                        <option value="{{ $typeItem->id }}" {{ old('type_item_id') == $typeItem->id ? 'selected' : '' }}>
                            {{ $typeItem->name }}
                        </option>
                    @endforeach
                </select>
                @error('type_item_id') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="season">Сезон *</label>
                <select id="season" name="season" required>
                    <option value="">Выберите сезон</option>
                    <option value="winter" {{ old('season') == 'winter' ? 'selected' : '' }}>Зима</option>
                    <option value="summer" {{ old('season') == 'summer' ? 'selected' : '' }}>Лето</option>
                    <option value="off-season" {{ old('season') == 'off-season' ? 'selected' : '' }}>Внесезонье</option>
                    <option value="demi-season" {{ old('season') == 'demi-season' ? 'selected' : '' }}>Демисезон</option>
                </select>
                @error('season') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="type">Тип *</label>
                <select id="type" name="type" required>
                    <option value="">Выберите тип</option>
                    <option value="object" {{ old('type') == 'object' ? 'selected' : '' }}>Объект</option>
                    <option value="component" {{ old('type') == 'component' ? 'selected' : '' }}>Компонент</option>
                </select>
                @error('type') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="price">Цена</label>
                <input type="number" id="price" name="price" step="0.01" value="{{ old('price') }}">
                @error('price') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="setting">Параметр (сеттинг/автор)</label>
                <input type="text" id="setting" name="setting" value="{{ old('setting') }}">
                @error('setting') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="description">Описание</label>
                <textarea id="description" name="description" rows="4">{{ old('description') }}</textarea>
                @error('description') <div class="error">{{ $message }}</div> @enderror
            </div>

            <button type="submit" class="btn">Создать предмет</button>
            <a href="{{ route('items.index') }}" style="margin-left: 10px;">Отмена</a>
        </form>
    </div>
</body>
</html>
