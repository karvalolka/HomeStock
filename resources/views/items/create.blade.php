<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить предмет</title>
    <link rel="stylesheet" href="{{ asset('css/items.css') }}">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>✨ Добавить новый предмет</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('items.store') }}" method="POST">
                    @csrf

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                        <div class="form-group">
                            <label for="name">📝 Название *</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                   placeholder="Введите название предмета">
                            @error('name') <div class="error">⚠️ {{ $message }}</div> @enderror
                        </div>

                        <div class="form-group">
                            <label for="type_item_id">📁 Тип предмета *</label>
                            <select id="type_item_id" name="type_item_id" required>
                                <option value="">Выберите тип</option>
                                @foreach($typeItems as $typeItem)
                                    <option value="{{ $typeItem->id }}" {{ old('type_item_id') == $typeItem->id ? 'selected' : '' }}>
                                        {{ $typeItem->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('type_item_id') <div class="error">⚠️ {{ $message }}</div> @enderror
                        </div>

                        <div class="form-group">
                            <label for="season">🎯 Сезон *</label>
                            <select id="season" name="season" required>
                                <option value="">Выберите сезон</option>
                                <option value="winter" {{ old('season') == 'winter' ? 'selected' : '' }}>❄️ Зима</option>
                                <option value="summer" {{ old('season') == 'summer' ? 'selected' : '' }}>☀️ Лето</option>
                                <option value="off-season" {{ old('season') == 'off-season' ? 'selected' : '' }}>🔄 Внесезонье</option>
                                <option value="demi-season" {{ old('season') == 'demi-season' ? 'selected' : '' }}>🌤️ Демисезон</option>
                            </select>
                            @error('season') <div class="error">⚠️ {{ $message }}</div> @enderror
                        </div>

                        <div class="form-group">
                            <label for="type">🏷️ Тип *</label>
                            <select id="type" name="type" required>
                                <option value="">Выберите тип</option>
                                <option value="object" {{ old('type') == 'object' ? 'selected' : '' }}>📦 Объект</option>
                                <option value="component" {{ old('type') == 'component' ? 'selected' : '' }}>🔧 Компонент</option>
                            </select>
                            @error('type') <div class="error">⚠️ {{ $message }}</div> @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="price">💰 Цена</label>
                        <input type="number" id="price" name="price" step="0.01" value="{{ old('price') }}"
                               placeholder="0.00">
                        @error('price') <div class="error">⚠️ {{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="setting">⚙️ Параметр (сеттинг/автор)</label>
                        <input type="text" id="setting" name="setting" value="{{ old('setting') }}"
                               placeholder="Например: автор произведения или сеттинг">
                        @error('setting') <div class="error">⚠️ {{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="description">📝 Описание</label>
                        <textarea id="description" name="description" rows="4"
                                  placeholder="Подробное описание предмета...">{{ old('description') }}</textarea>
                        @error('description') <div class="error">⚠️ {{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="image_path">🖼️ Путь к изображению</label>
                        <input type="text" id="image_path" name="image_path" value="{{ old('image_path') }}"
                               placeholder="URL или путь к изображению">
                        @error('image_path') <div class="error">⚠️ {{ $message }}</div> @enderror
                    </div>

                    <div class="action-buttons">
                        <button type="submit" class="btn btn-primary">
                            ✅ Создать предмет
                        </button>
                        <a href="{{ route('items.index') }}" class="btn btn-secondary">
                            ❌ Отмена
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
