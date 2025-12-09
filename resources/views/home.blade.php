@extends('layouts.app')

@section('content')
<div class="min-vh-100 bg-light py-5">
    <div class="container">
        <!-- Welcome Header -->
        <div class="text-center mb-5">
            <div class="d-flex justify-content-center mb-4">
                <div class="rounded-circle bg-primary bg-gradient d-flex align-items-center justify-content-center shadow" style="width: 80px; height: 80px;">
                    <i class="fas fa-user-check text-white fa-2x"></i>
                </div>
            </div>
            <h1 class="display-5 fw-bold text-dark mb-3">
                Добро пожаловать, <span class="text-primary">{{ Auth::user()->name ?? 'Пользователь' }}</span>! 👋
            </h1>
            <p class="lead text-muted">
                Рады видеть вас снова в нашей системе
            </p>
        </div>

        @if (session('status'))
            <div class="row justify-content-center mb-4">
                <div class="col-md-8">
                    <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                        <i class="fas fa-check-circle me-2"></i>
                        {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        @endif

        <!-- Stats Cards -->
        <div class="row g-4 mb-5 justify-content-center">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 hover-shadow">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="p-3 rounded bg-primary bg-opacity-10">
                                <i class="fas fa-users text-primary fa-lg"></i>
                            </div>
                            <span class="display-6 fw-bold text-dark">0</span>
                        </div>
                        <h5 class="card-title fw-semibold text-dark mb-2">Активных пользователей</h5>
                        <p class="card-text text-muted small">Сегодня в системе</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 hover-shadow">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="p-3 rounded bg-success bg-opacity-10">
                                <i class="fas fa-file-alt text-success fa-lg"></i>
                            </div>
                            <span class="display-6 fw-bold text-dark">0</span>
                        </div>
                        <h5 class="card-title fw-semibold text-dark mb-2">Новых записей</h5>
                        <p class="card-text text-muted small">За последнюю неделю</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 hover-shadow">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="p-3 rounded bg-info bg-opacity-10">
                                <i class="fas fa-calendar text-info fa-lg"></i>
                            </div>
                            <span class="display-6 fw-bold text-dark">0</span>
                        </div>
                        <h5 class="card-title fw-semibold text-dark mb-2">Предстоящих событий</h5>
                        <p class="card-text text-muted small">На этой неделе</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="card border-0 shadow-lg mb-5">
            <div class="card-body p-4">
                <h2 class="card-title fw-bold text-dark mb-4">
                    <i class="fas fa-bolt text-primary me-2"></i>
                    Быстрые действия
                </h2>
                <div class="row g-3">
                    <div class="col-md-6">
                        <a href="#" class="text-decoration-none">
                            <div class="card border h-100 hover-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="p-3 rounded bg-primary bg-opacity-10 me-3">
                                            <i class="fas fa-plus-circle text-primary fa-lg"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-1 text-dark">Создать новый проект</h5>
                                            <p class="text-muted small mb-0">Начните новый проект с нуля</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6">
                        <a href="#" class="text-decoration-none">
                            <div class="card border h-100 hover-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="p-3 rounded bg-success bg-opacity-10 me-3">
                                            <i class="fas fa-chart-bar text-success fa-lg"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-1 text-dark">Просмотреть отчеты</h5>
                                            <p class="text-muted small mb-0">Аналитика и статистика</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6">
                        <a href="#" class="text-decoration-none">
                            <div class="card border h-100 hover-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="p-3 rounded bg-info bg-opacity-10 me-3">
                                            <i class="fas fa-user-cog text-info fa-lg"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-1 text-dark">Настройки профиля</h5>
                                            <p class="text-muted small mb-0">Изменить личные данные</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6">
                        <a href="#" class="text-decoration-none">
                            <div class="card border h-100 hover-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="p-3 rounded bg-warning bg-opacity-10 me-3">
                                            <i class="fas fa-cogs text-warning fa-lg"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-1 text-dark">Настройки системы</h5>
                                            <p class="text-muted small mb-0">Конфигурация приложения</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="card border-0 shadow-lg mb-5">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="card-title fw-bold text-dark mb-0">
                        <i class="fas fa-history text-dark me-2"></i>
                        Последние действия
                    </h2>
                    <span class="text-muted">{{ now()->format('d F Y') }}</span>
                </div>

                <div class="mb-3">
                    <div class="d-flex align-items-center p-3 bg-light rounded">
                        <div class="bg-primary rounded-circle me-3" style="width: 8px; height: 8px;"></div>
                        <div class="flex-grow-1">
                            <p class="mb-1">Вы успешно вошли в систему</p>
                            <small class="text-muted">Только что</small>
                        </div>
                    </div>
                </div>

                <div class="text-center py-4">
                    <i class="fas fa-file-alt fa-3x text-muted mb-3"></i>
                    <p class="text-muted">Здесь будут отображаться ваши последние действия</p>
                    <p class="text-muted small">Начните работу с системой, чтобы увидеть активность</p>
                </div>
            </div>
        </div>

        <!-- Footer Message -->
        <div class="text-center mt-5">
            <p class="text-muted">
                Нужна помощь?
                <a href="#" class="text-primary text-decoration-none fw-medium">Ознакомьтесь с документацией</a>
                или
                <a href="#" class="text-primary text-decoration-none fw-medium">свяжитесь с поддержкой</a>
            </p>
            <div class="mt-4">
                <a href="#" class="text-muted me-3">
                    <i class="fab fa-facebook fa-lg"></i>
                </a>
                <a href="#" class="text-muted me-3">
                    <i class="fab fa-twitter fa-lg"></i>
                </a>
                <a href="#" class="text-muted">
                    <i class="fab fa-linkedin fa-lg"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<style>
.hover-shadow {
    transition: all 0.3s ease;
    border: 1px solid rgba(0,0,0,0.05) !important;
}

.hover-shadow:hover {
    transform: translateY(-5px);
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
}

.hover-card {
    transition: all 0.3s ease;
    border-color: #dee2e6 !important;
}

.hover-card:hover {
    border-color: #0d6efd !important;
    background-color: rgba(13, 110, 253, 0.05);
}

.bg-light {
    background-color: #f8f9fa !important;
}

.card {
    border-radius: 0.75rem !important;
}

.bg-gradient {
    background: linear-gradient(135deg, #0d6efd 0%, #6f42c1 100%) !important;
}
</style>

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
@endpush

@endsection
