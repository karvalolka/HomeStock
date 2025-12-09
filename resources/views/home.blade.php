@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <!-- Простое приветствие -->
            <div class="alert alert-primary mb-4">
                <h4 class="alert-heading mb-2">Добро пожаловать, {{ Auth::user()->name }}!</h4>
                <p class="mb-0">Дата входа: {{ now()->format('d.m.Y H:i') }}</p>
            </div>

            @if (session('status'))
                <div class="alert alert-success mb-4">
                    {{ session('status') }}
                </div>
            @endif

            <!-- Простая статистика -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="card text-center mb-3">
                        <div class="card-body">
                            <h5><i class="fas fa-users text-primary"></i></h5>
                            <h3>0</h3>
                            <p class="text-muted mb-0">Пользователи</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center mb-3">
                        <div class="card-body">
                            <h5><i class="fas fa-file-alt text-success"></i></h5>
                            <h3>0</h3>
                            <p class="text-muted mb-0">Записи</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center mb-3">
                        <div class="card-body">
                            <h5><i class="fas fa-calendar text-info"></i></h5>
                            <h3>0</h3>
                            <p class="text-muted mb-0">События</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Простые ссылки -->
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title mb-3">Быстрый доступ</h5>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a href="#" class="btn btn-outline-primary me-2 mb-2">
                            <i class="fas fa-plus me-1"></i> Создать
                        </a>
                        <a href="#" class="btn btn-outline-success me-2 mb-2">
                            <i class="fas fa-chart-bar me-1"></i> Отчеты
                        </a>
                        <a href="#" class="btn btn-outline-info me-2 mb-2">
                            <i class="fas fa-user me-1"></i> Профиль
                        </a>
                        <a href="#" class="btn btn-outline-warning mb-2">
                            <i class="fas fa-cog me-1"></i> Настройки
                        </a>
                    </div>
                </div>
            </div>

            <!-- Простая информация -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">О системе</h5>
                    <p class="card-text">Это ваша панель управления. Здесь вы можете управлять всеми функциями системы.</p>
                    <div class="alert alert-light border mt-3 mb-0">
                        <small>
                            <i class="fas fa-lightbulb text-warning me-1"></i>
                            <strong>Совет:</strong> Используйте меню слева для навигации по системе.
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
