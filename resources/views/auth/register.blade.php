<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация в системе</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3a0ca3;
            --accent-color: #4cc9f0;
            --success-color: #4ade80;
            --light-color: #f8f9fa;
            --dark-color: #212529;
        }
        
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .register-container {
            max-width: 500px;
            width: 100%;
            padding: 20px;
        }
        
        .register-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        
        .register-card:hover {
            transform: translateY(-5px);
        }
        
        .register-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 30px 20px;
            text-align: center;
            position: relative;
        }
        
        .register-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--accent-color);
        }
        
        .register-logo {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: white;
        }
        
        .register-title {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 5px;
        }
        
        .register-subtitle {
            font-size: 0.9rem;
            opacity: 0.9;
        }
        
        .register-body {
            padding: 30px;
        }
        
        .form-control {
            border-radius: 10px;
            padding: 12px 15px;
            border: 2px solid #e9ecef;
            transition: all 0.3s;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(67, 97, 238, 0.25);
        }
        
        .form-floating > .form-control {
            border-radius: 10px;
        }
        
        .form-floating > label {
            padding-left: 15px;
        }
        
        .password-strength {
            height: 5px;
            border-radius: 5px;
            margin-top: 5px;
            background-color: #e9ecef;
            overflow: hidden;
        }
        
        .password-strength-bar {
            height: 100%;
            width: 0%;
            transition: width 0.3s, background-color 0.3s;
        }
        
        .password-requirements {
            font-size: 0.8rem;
            color: #6c757d;
            margin-top: 5px;
        }
        
        .requirement {
            display: flex;
            align-items: center;
            margin-bottom: 3px;
        }
        
        .requirement i {
            font-size: 0.7rem;
            margin-right: 5px;
        }
        
        .requirement.valid {
            color: var(--success-color);
        }
        
        .requirement.invalid {
            color: #dc3545;
        }
        
        .btn-register {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border: none;
            border-radius: 10px;
            padding: 12px;
            font-weight: 600;
            color: white;
            width: 100%;
            transition: all 0.3s;
            margin-top: 10px;
        }
        
        .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(67, 97, 238, 0.4);
        }
        
        .btn-register:active {
            transform: translateY(0);
        }
        
        .btn-login-link {
            background: transparent;
            border: 2px solid var(--primary-color);
            border-radius: 10px;
            padding: 12px;
            font-weight: 600;
            color: var(--primary-color);
            width: 100%;
            transition: all 0.3s;
            margin-top: 10px;
        }
        
        .btn-login-link:hover {
            background-color: var(--primary-color);
            color: white;
        }
        
        .register-footer {
            text-align: center;
            padding: 20px;
            color: #6c757d;
            font-size: 0.9rem;
            border-top: 1px solid #e9ecef;
            background-color: #f8f9fa;
        }
        
        .alert {
            border-radius: 10px;
            border: none;
        }
        
        .register-divider {
            display: flex;
            align-items: center;
            margin: 25px 0;
            color: #6c757d;
        }
        
        .register-divider::before,
        .register-divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: #e9ecef;
        }
        
        .register-divider span {
            padding: 0 15px;
            font-size: 0.9rem;
        }
        
        @media (max-width: 576px) {
            .register-container {
                padding: 15px;
            }
            
            .register-body {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-card">
            <div class="register-header">
                <div class="register-logo">
                    <i class="fas fa-user-plus"></i>
                </div>
                <h1 class="register-title">Регистрация</h1>
                <p class="register-subtitle">Создайте новый аккаунт в системе</p>
            </div>
            
            <div class="register-body">
                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        <strong>Ошибка!</strong> {{ $errors->first() }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if(session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fas fa-check-circle me-2"></i>
                        {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form method="POST" action="{{ route('register') }}" id="registerForm">
                    @csrf
                    
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" 
                               id="name" name="name" value="{{ old('name') }}" 
                               placeholder="Имя Фамилия" required autocomplete="name" autofocus>
                        <label for="name">
                            <i class="fas fa-user me-2"></i>Полное имя
                        </label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" 
                               id="email" name="email" value="{{ old('email') }}" 
                               placeholder="name@example.com" required autocomplete="email">
                        <label for="email">
                            <i class="fas fa-envelope me-2"></i>Email адрес
                        </label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" 
                               id="password" name="password" 
                               placeholder="Пароль" required autocomplete="new-password"
                               onkeyup="checkPasswordStrength(this.value)">
                        <label for="password">
                            <i class="fas fa-lock me-2"></i>Пароль
                        </label>
                        <div class="password-strength">
                            <div class="password-strength-bar" id="passwordStrengthBar"></div>
                        </div>
                        <div class="password-requirements" id="passwordRequirements">
                            <div class="requirement invalid" id="reqLength">
                                <i class="fas fa-circle"></i>Минимум 8 символов
                            </div>
                            <div class="requirement invalid" id="reqUppercase">
                                <i class="fas fa-circle"></i>Хотя бы одна заглавная буква
                            </div>
                            <div class="requirement invalid" id="reqLowercase">
                                <i class="fas fa-circle"></i>Хотя бы одна строчная буква
                            </div>
                            <div class="requirement invalid" id="reqNumber">
                                <i class="fas fa-circle"></i>Хотя бы одна цифра
                            </div>
                        </div>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" 
                               id="password-confirm" name="password_confirmation" 
                               placeholder="Подтверждение пароля" required autocomplete="new-password"
                               onkeyup="checkPasswordMatch(this.value)">
                        <label for="password-confirm">
                            <i class="fas fa-lock me-2"></i>Подтверждение пароля
                        </label>
                        <div class="password-match mt-2" id="passwordMatch" style="display: none;">
                            <small class="text-danger"><i class="fas fa-times-circle me-1"></i>Пароли не совпадают</small>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-register" id="submitButton">
                        <i class="fas fa-user-plus me-2"></i>Зарегистрироваться
                    </button>
                    
                    <div class="register-divider">
                        <span>Уже есть аккаунт?</span>
                    </div>
                    
                    <a href="{{ route('login') }}" class="btn btn-login-link">
                        <i class="fas fa-sign-in-alt me-2"></i>Войти в систему
                    </a>
                </form>
            </div>
            
            <div class="register-footer">
                <p class="mb-0">&copy; {{ date('Y') }} Патанатомия. Все права защищены.</p>
                <small>Версия 1.0.0</small>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script>
        // Проверка сложности пароля
        function checkPasswordStrength(password) {
            const strengthBar = document.getElementById('passwordStrengthBar');
            const reqLength = document.getElementById('reqLength');
            const reqUppercase = document.getElementById('reqUppercase');
            const reqLowercase = document.getElementById('reqLowercase');
            const reqNumber = document.getElementById('reqNumber');
            
            let strength = 0;
            
            // Проверка длины
            if (password.length >= 8) {
                strength += 25;
                reqLength.classList.remove('invalid');
                reqLength.classList.add('valid');
                reqLength.innerHTML = '<i class="fas fa-check-circle me-1"></i>Минимум 8 символов';
            } else {
                reqLength.classList.remove('valid');
                reqLength.classList.add('invalid');
                reqLength.innerHTML = '<i class="fas fa-circle me-1"></i>Минимум 8 символов';
            }
            
            // Проверка заглавных букв
            if (/[A-Z]/.test(password)) {
                strength += 25;
                reqUppercase.classList.remove('invalid');
                reqUppercase.classList.add('valid');
                reqUppercase.innerHTML = '<i class="fas fa-check-circle me-1"></i>Хотя бы одна заглавная буква';
            } else {
                reqUppercase.classList.remove('valid');
                reqUppercase.classList.add('invalid');
                reqUppercase.innerHTML = '<i class="fas fa-circle me-1"></i>Хотя бы одна заглавная буква';
            }
            
            // Проверка строчных букв
            if (/[a-z]/.test(password)) {
                strength += 25;
                reqLowercase.classList.remove('invalid');
                reqLowercase.classList.add('valid');
                reqLowercase.innerHTML = '<i class="fas fa-check-circle me-1"></i>Хотя бы одна строчная буква';
            } else {
                reqLowercase.classList.remove('valid');
                reqLowercase.classList.add('invalid');
                reqLowercase.innerHTML = '<i class="fas fa-circle me-1"></i>Хотя бы одна строчная буква';
            }
            
            // Проверка цифр
            if (/[0-9]/.test(password)) {
                strength += 25;
                reqNumber.classList.remove('invalid');
                reqNumber.classList.add('valid');
                reqNumber.innerHTML = '<i class="fas fa-check-circle me-1"></i>Хотя бы одна цифра';
            } else {
                reqNumber.classList.remove('valid');
                reqNumber.classList.add('invalid');
                reqNumber.innerHTML = '<i class="fas fa-circle me-1"></i>Хотя бы одна цифра';
            }
            
            // Обновление индикатора
            strengthBar.style.width = strength + '%';
            
            if (strength < 50) {
                strengthBar.style.backgroundColor = '#dc3545'; // Красный
            } else if (strength < 75) {
                strengthBar.style.backgroundColor = '#ffc107'; // Желтый
            } else {
                strengthBar.style.backgroundColor = '#28a745'; // Зеленый
            }
            
            checkFormValidity();
        }
        
        // Проверка совпадения паролей
        function checkPasswordMatch(confirmPassword) {
            const password = document.getElementById('password').value;
            const matchElement = document.getElementById('passwordMatch');
            
            if (confirmPassword && password !== confirmPassword) {
                matchElement.style.display = 'block';
            } else {
                matchElement.style.display = 'none';
            }
            
            checkFormValidity();
        }
        
        // Проверка валидности всей формы
        function checkFormValidity() {
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('password-confirm').value;
            const submitButton = document.getElementById('submitButton');
            
            // Базовые проверки
            let isValid = true;
            
            if (!name || name.length < 2) isValid = false;
            if (!email || !email.includes('@')) isValid = false;
            if (!password || password.length < 8) isValid = false;
            if (!confirmPassword || password !== confirmPassword) isValid = false;
            
            // Проверка требований к паролю
            const allValid = document.querySelectorAll('.requirement.valid').length === 4;
            if (!allValid) isValid = false;
            
            // Обновление состояния кнопки
            if (isValid) {
                submitButton.disabled = false;
                submitButton.style.opacity = '1';
                submitButton.style.cursor = 'pointer';
            } else {
                submitButton.disabled = true;
                submitButton.style.opacity = '0.65';
                submitButton.style.cursor = 'not-allowed';
            }
        }
        
        // Валидация формы при отправке
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            const name = document.getElementById('name');
            const email = document.getElementById('email');
            const password = document.getElementById('password');
            const confirmPassword = document.getElementById('password-confirm');
            
            // Сбрасываем предыдущие ошибки
            name.classList.remove('is-invalid');
            email.classList.remove('is-invalid');
            password.classList.remove('is-invalid');
            confirmPassword.classList.remove('is-invalid');
            
            let isValid = true;
            
            // Проверка имени
            if (!name.value || name.value.length < 2) {
                name.classList.add('is-invalid');
                isValid = false;
            }
            
            // Проверка email
            if (!email.value || !email.value.includes('@')) {
                email.classList.add('is-invalid');
                isValid = false;
            }
            
            // Проверка пароля
            if (!password.value || password.value.length < 8) {
                password.classList.add('is-invalid');
                isValid = false;
            }
            
            // Проверка совпадения паролей
            if (password.value !== confirmPassword.value) {
                confirmPassword.classList.add('is-invalid');
                isValid = false;
            }
            
            if (!isValid) {
                e.preventDefault();
                
                // Показываем ошибку
                const errorAlert = document.createElement('div');
                errorAlert.className = 'alert alert-danger alert-dismissible fade show mt-3';
                errorAlert.innerHTML = `
                    <i class="fas fa-exclamation-circle me-2"></i>
                    <strong>Ошибка!</strong> Пожалуйста, проверьте правильность введенных данных.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                `;
                
                const form = document.getElementById('registerForm');
                const existingAlert = form.querySelector('.alert-danger');
                if (!existingAlert) {
                    form.insertBefore(errorAlert, form.firstChild);
                }
            }
        });
        
        // Проверка формы при загрузке
        document.addEventListener('DOMContentLoaded', function() {
            checkFormValidity();
            
            // Добавляем обработчики для всех полей
            document.querySelectorAll('#registerForm input').forEach(input => {
                input.addEventListener('input', checkFormValidity);
                input.addEventListener('change', checkFormValidity);
            });
        });
        
        // Анимация при фокусе на полях ввода
        document.querySelectorAll('.form-control').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });
            
            input.addEventListener('blur', function() {
                if (!this.value) {
                    this.parentElement.classList.remove('focused');
                }
            });
        });
    </script>
</body>
</html>