<?php session_start();
    require_once('connect.php');
    if(!$_SESSION['login']){
        if($_COOKIE['id-user'] and $_COOKIE['hash']){
            $user = mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM users WHERE id = " .$_COOKIE['id-user'] ." AND hash = '" . $_COOKIE['hash'] ."'"));
            $_SESSION['login'] = 1;
            $_SESSION['email-user'] = $user['email'];
            $_SESSION['id-user'] = $user['id'];
            header('Location:profile.php');
        }
        header('Location:login.php');
    }

    if(isset($_GET['delete-calc-id'])){
        $idDelete = $_GET['delete-calc-id'];
        mysqli_query($connect,"DELETE FROM `save-calculator` WHERE `id` = $idDelete ");
    }

    $rowUser = mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM users WHERE id = " .$_SESSION['id-user']));
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Личный кабинет</title>
</head>
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
    <section class="profile">
        <h1 class="profile__title">Личный кабинет</h1>
        <div class="profile__items">
            <div class="profile__blocks">
                <div class="profile__blocks__block">
                    <div class="profile__blocks__block_front">
                        <h2>Информация о профиле</h2>
                        <p>Наведите, чтобы посмотреть информацию о вашем профиле</p>
                    </div>
                    <div class="profile__blocks__block_back">
                        Имя: <?php echo $rowUser['name']; ?> <br> <br>
                        E-mail: <?php echo $rowUser['email']; ?> <br> <br>
                        Пароль: * тут пароль * и рядом должна быть кнопка, чтобы сменить пароль.
                        <a href="logout.php" style="color: white;">Выйти</a>
                    </div>
                </div>
            </div>
            <div class="profile__blocks">
                <div class="profile__blocks__block" style="margin-right: 30px;">
                    <div class="profile__blocks__block_front">
                        <h2>Информация о пройденных тестах</h2>
                        <p>Наведите, чтобы посмотреть информацию о пройденных тестах</p>
                    </div>
                    <div class="profile__blocks__block_back"> 
                        <?php $query = mysqli_query($connect,"SELECT * FROM `save-test` WHERE `user-id` = " .$rowUser['id'] ." ORDER BY id DESC LIMIT 10");
                            $cnt = 1;
                            while($rowSave = mysqli_fetch_assoc($query)){ 
                               $result = $rowSave['value1'] + $rowSave['value2'] + $rowSave['value3'] + $rowSave['value4'] + $rowSave['value5']  ; ?>
                               <div style="margin-bottom: 15px;" >
                                    <h2 style="font-size: 2rem!important"><?php echo $cnt; ?></h2>
                                    <p>Вопрос 1: <?php if($rowSave['value1']) echo 'Правильно'; else echo 'Неверно'; ?></p>
                                    <p>Вопрос 2: <?php if($rowSave['value2']) echo 'Правильно'; else echo 'Неверно';?></p>
                                    <p>Вопрос 3: <?php if($rowSave['value3']) echo 'Правильно'; else echo 'Неверно';?></p>
                                    <p>Вопрос 4: <?php if($rowSave['value4']) echo 'Правильно'; else echo 'Неверно';?></p>
                                    <p>Вопрос 5: <?php if($rowSave['value5']) echo 'Правильно'; else echo 'Неверно';?></p>
                                    <p>Итого: <?php echo $result;?> из 5</p>                       
                                    <p>Дата: <?php echo $rowSave['date'];?></p>
                                </div>                          
                            <?php $cnt++; }
                         ?>
                    </div>
                </div>
                <div class="profile__blocks__block">
                    <div class="profile__blocks__block_front">
                        <h2>Информация о вычислениях</h2>
                        <p>Наведите, чтобы посмотреть информацию о вычислениях</p>
                    </div>
                    <div class="profile__blocks__block_back"> 
                        <?php $query = mysqli_query($connect,"SELECT * FROM `save-calculator` WHERE `id-user` = " .$rowUser['id'] ." ORDER BY id DESC");
                            $cnt = 1;
                            while($rowCalc = mysqli_fetch_assoc($query)){ ?>
                                <div style="margin-bottom: 10px;">
                                    <h2 style="font-size: 2rem!important"><?php echo $cnt; ?></h2>
                                    <p>Итоговая пропускная способность: <?php echo $rowCalc['total'];?></p>
                                    <p>Режим двусторонней связи: <?php echo $rowCalc['mode'];?></p>
                                    <p>Режим модуляции: <?php echo $rowCalc['modulation'];?></p>
                                    <p>Полоса пропускания: <?php echo $rowCalc['bw'];?></p>
                                    <p>Дата: <?php echo $rowCalc['date'];?></p>
                                    <a href="?delete-calc-id=<?php echo $rowCalc['id']; ?>">Очистить результат</a>
                                </div>                                
                            <?php $cnt++; }
                         ?>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <script src="js/app.js"></script>
