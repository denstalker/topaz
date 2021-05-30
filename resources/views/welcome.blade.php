<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="{{asset('/app.css')}}">
    <title>Tille</title>
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="header__logo"><img src="{{asset('/img/topaz.png')}}" alt=""></div>
        <div class="header__links">
            <a href="#">Создать</a>
            <a href="#">Редактировать</a>
            <a href="#">Обновить</a>
            <a href="#">Удалить</a>
        </div>
        <form class="header__form-search" action="#">
            <div class="header__form-text">Поиск</div>
            <input class="header__form-input" type="text">
        </form>
        <div class="header__login">
            <a href="#">Login</a>
        </div>
    </header>
    <div class="content">
    @yield('content')
    </div>
    <footer class="footer"><a href="#">Ссылка</a></footer>
</body>
</html>
