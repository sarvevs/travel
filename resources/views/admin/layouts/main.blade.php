<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Админ Кабинет</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
</head>
<style>
    .input-wrapper {
        position: relative;
        display: inline-block;
    }

    .currency {
        position: absolute;
        top: 50%;
        left: 10px;
        transform: translateY(-50%);
    }

    .price-input {
        padding-left: 30px; /* Учитываем место для иконки валюты */
        border: 2px solid #ccc;
        border-radius: 8px;
        font-size: 16px;
        transition: border-color 0.3s;
    }

    .price-input:focus {
        border-color: #007bff; /* Изменение цвета границы при фокусе */
    }
    .rating {
        display: inline-block;
    }

    .star {
        font-size: 24px;
        cursor: pointer;
        color: #ccc;
        transition: color 0.3s;
    }

    input[type="radio"]:checked + .star {
        color: #ffcc00; /* Изменение цвета при выборе */
    }
</style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
    </div>

    <nav class="main-header navbar navbar-expand navbar-white navbar-light d-flex justify-content-between">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>

            <li class="nav-item">
{{--                <a class="btn btn-outline-primary"  href="{{ route('post.index') }}" >Блог</a>--}}
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <input type="submit" value="Вийти" class="btn btn-outline-primary">
                </form>
            </li>
        </ul>
    </nav>

    @include('admin.include.sidebar')
    @yield('content')

{{--    <footer class="main-footer">--}}

{{--    </footer>--}}

    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
</div>

<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script src="{{ asset ('plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{ asset('dist/js/adminlte.js') }}"></script>

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ]
            }
        );
    });
</script>

<script>
    $(function () {
        bsCustomFileInput.init();
    });
</script>
<script>
    $(function () {
        $('.select2').select2({
            placeholder: 'Выберите элемент', // Текст заполнителя
            maximumSelectionLength: 1, // Максимальное количество выбранных элементов (1 для выбора одного элемента)
            width: '100%', // Ширина Select2


        })
    });

</script>
<script>
    const priceInput = document.getElementById('priceInput');

    priceInput.addEventListener('input', (event) => {
        let value = event.target.value.replace(/\D/g, ''); // Удаляем все, кроме цифр
        value = value.replace(/^0+/, ''); // Убираем ведущие нули

        // Форматируем значение с разделителями разрядов
        event.target.value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    });
</script>
{{--<script>--}}
{{--    const stars = document.querySelectorAll('.star');--}}

{{--    stars.forEach(star => {--}}
{{--        star.addEventListener('click', () => {--}}
{{--            const ratingValue = star.previousElementSibling.value;--}}
{{--            console.log(`You rated: ${ratingValue}`);--}}
{{--            // Здесь вы можете отправить оценку на сервер или выполнить другие действия--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
</body>
</html>
