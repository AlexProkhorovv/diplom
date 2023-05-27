<?php session_start();
    if($_SESSION['login'] or $_COOKIE['id-user'] and $_COOKIE['hash']){
        header('Location:profile.php');
    }
 ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>4GКалькулятор</title>
</head>

<body>
    <div class="webp">
        <header>
            <div class="container">
                <nav class="header__nav">
                    <ul class="header__nav__ul">
                        <li class="header__nav__ul__lists"><picture><source srcset="img/logo.webp" type="image/webp"><img src="img/logo.jpg" alt=""></picture></li>
                        <li class="header__nav__ul__lists"><a href="#" class="header__nav__ul__lists__link">Главаная
                                страница</a>
                        </li>
                        <li class="header__nav__ul__lists"><a href="#calculator"
                                class="header__nav__ul__lists__link">Калькулятор</a>
                        </li>
                        <li class="header__nav__ul__lists"><a href="base.php"
                                class="header__nav__ul__lists__link">База
                                знаний</a>
                        </li>
                        <li class="header__nav__ul__lists"><a href="login.php"
                                class="header__nav__ul__lists__link">Личный
                                кабинет</a>

                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <section class="login__main">
            <div class="login__main__wrapper">
                <div class="login__main__form-box login">
                    <h2>Авторизация</h2>
                    <form action="" id='form-login'>
                        <div class="login__main__input-box">
                            <div class="login__main__icon"><picture><source srcset="img/login__ic_log.webp" type="image/webp"><img src="img/login__ic_log.png" alt=""></picture></div>
                            <input type="email" name='email' required>
                            <label>Email</label>
                        </div>
                        <div class="login__main__input-box">
                            <div class="login__main__icon"><picture><source srcset="img/login__ic_pass.webp" type="image/webp"><img src="img/login__ic_pass.png" alt=""></picture></div>
                            <input type="password" name='password' required>
                            <label>Пароль</label>
                        </div>
                        <div class="login__main__remember">
                            <label><input type="checkbox" name='checkbox'>Запомнить меня</label>
                            <!-- <a href="#">Забыли пароль?</a> -->
                        </div>
                        <button type="submit" class="login__main__btn">Войти</button>
                        <div class="login__main__register">
                            <p>Хотите создать аккаунт? <a href="#"
                                    class="login__main__register__link">Зарегестрироваться</a>
                            </p>
                        </div>
                    </form>
                </div>
                <div class="login__main__form-box registration">
                    <h2>Регистрация</h2>
                    <form action="#" id='form-register'>
                        <div class="login__main__input-box">
                            <div class="login__main__icon"><picture><source srcset="img/login__ic_user.webp" type="image/webp"><img src="img/login__ic_user.png" alt=""></picture></div>
                            <input type="text" name='name' required>
                            <label>Имя</label>
                        </div>
                        <div class="login__main__input-box">
                            <div class="login__main__icon"><picture><source srcset="img/login__ic_log.webp" type="image/webp"><img src="img/login__ic_log.png" alt=""></picture></div>
                            <input type="email" name='email' required>
                            <label>Email</label>
                        </div>
                        <div class="login__main__input-box">
                            <div class="login__main__icon"><picture><source srcset="img/login__ic_pass.webp" type="image/webp"><img src="img/login__ic_pass.png" alt=""></picture></div>
                            <input type="password" name='password' required>
                            <label>Пароль</label>
                        </div>
                        <div class="login__main__remember">
                            <label><input type="checkbox" required>Я согласен на обработку данных</label>
                        </div>
                        <button type="submit" class="login__main__btn">Зарегестрироваться</button>
                        <div class="login__main__register">
                            <p>Уже есть аккаунт? <a href="#" class="login__main__login__link">Авторизироваться</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <script src="js/jquery.min.js"></script>
        <script src="js/app.js"></script>
        <script>
            $('#form-register').submit(function(e){
                e.preventDefault();
                let form = $(this).serializeArray();
                console.log(form);
                $.ajax({
                    method:'POST',
                    url:'ajax/create-user.php',
                    data:form,
                    success:function(data){
                        if(data == 'Success'){
                            alert("Вы успешно зарегестрировались!")
                            document.location.reload();
                        }
                        if(data == 'Error-1')
                            alert("Пользователь с такой почтой уже существует!")
                        if(data == 'Error-2')
                            alert('Произошла ошибка, повторите позже!')
                    }
                })
            });
            $('#form-login').submit(function(e){
                e.preventDefault();
                let form = $(this).serializeArray();
                console.log(form);
                $.ajax({
                    method:'POST',
                    url:'ajax/login-user.php',
                    data:form,
                    success:function(data){
                        if(data == 'Success'){
                            alert("Вы успешно авторизовались!")
                            document.location.href = 'profile.php';
                        }
                        if(data == 'Error-1')
                            alert("Неверный логин или пароль!")
                    }
                })
            })
        </script>
</body>

</html>