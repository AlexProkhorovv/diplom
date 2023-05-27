<?php session_start();
require_once('connect.php'); ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Пропускная способность 4G</title>
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
        <section class="main">
            <div class="container">
                <div class="main__wrapper">
                    <div class="main__text">
                        <h1>Автоматизированная система для рассчета пропускной способности сети радиодоступа LTE</h1>
                        <h2>Данная информационная система поможет вам разобраться в теме пропускной способности и
                            позволит
                            рассчитать один из основных параметров в сетях радиодоступа - пропускную способность сети
                            радиодоступа LTE</h2>
                    </div>
                    <div class="main__blocks">
                        <div class="main__blocks__block">
                            <div class="main__blocks__block_front">
                                <h2>Личный кабинет</h2>
                                <p>Возможность сохранять данные ваших вычислений</p>
                            </div>
                            <div class="main__blocks__block_back"> Авторизируйтесь в личном кабинете,чтобы
                                система запоминала результаты ваших исследований и тестирования, в дальнейшем личный
                                кабинет будет дополняться. <a href="login.html">
                                    <button class="main__button">Перейти
                                        в личный
                                        кабинет </button> </a></div>
                        </div>

                        <div class="main__blocks__block">
                            <div class="main__blocks__block_front">
                                <h2>База знаний</h2>
                                <p>Углубите свои знания в данной теме</p>
                            </div>
                            <div class="main__blocks__block_back">Перейдите в раздел "База знаний", чтобы понять, как
                                устроена пропускная способность сети радиодоступа LTE и пройти тестирование на знание
                                данной темы.<a href="base.html"> <button class="main__button">Перейти
                                        в базу знаний </button> </a></div>
                        </div>
                        <div class="main__blocks__block">
                            <div class="main__blocks__block_front">
                                <h2>Сохранение</h2>
                                <p>Выберите как сохранить данные и в каком формате</p>
                            </div>
                            <div class="main__blocks__block_back">Выберите один из предложенных способов сохранение,
                                например, авторизировавшись, вы можете сохранять результаты всех исследований в личном
                                кабинете и просматривать в вашем профиле. <a href="#calculator">
                                    <button class="main__button">Перейти
                                        к калькулятору </button> </a></div>
                        </div>
                        <div class="main__blocks__block">
                            <div class="main__blocks__block_front">
                                <h2>Вычисление</h2>
                                <p>Вычисляйте максимальную пропускную способность</p>
                            </div>
                            <div class="main__blocks__block_back"> Воспользуйтесь встроенным калькулятором на основе
                                данных, полученных из 3GPP таблиц. Скорость вычисляется с точностью до десятых и
                                является точной информацией, основанной на выведенных формулах. <a href="#calculator">
                                    <button class="main__button">Перейти
                                        к калькулятору </button> </a></div>
                        </div>
                    </div>
                </div>
                <div class="main__annotation">Наведите на квадраты, чтобы узнать больше о возможностях </div>
            </div>
        </section>

    </div>
    <section class="annotation">
        <div class="container">
            <h1 class="annotation__title">Данные для рассчетов</h1>
            <h2 class="annotation__subtitle">Для того, чтобы вычислить пропусную способность сети радиодоступа LTE <br>
                необходимо знать значения следующих параметров:</h2>
            <div class="annotation__wrapper">
                <div class="annotation__items">
                    <div class="annotation__item">
                        <div class="annotation__item__front">Направление передачи данных</div>
                        <div class="annotation__item__back">1. Нисходящее (DL) - связь идет от устройства пользователя к
                            базовой станции<br> 2. Восходящее (UL) - связь идет от базовой станции к устройству
                            пользователя </div>
                    </div>
                    <div class="annotation__item">
                        <div class="annotation__item__front">Режим двусторонней связи
                        </div>
                        <div class="annotation__item__back">1. </div>
                    </div>
                    <div class="annotation__item">
                        <div class="annotation__item__front">Число компонентных несущих</div>
                        <div class="annotation__item__back"></div>
                    </div>
                </div>
                <div class="annotation__items">
                    <div class="annotation__item">
                        <div class="annotation__item__front">Число слоев MIMO</div>
                        <div class="annotation__item__back"></div>
                    </div>
                    <div class="annotation__item">
                        <div class="annotation__item__front">Полоса пропускания</div>
                        <div class="annotation__item__back"></div>
                    </div>
                    <div class="annotation__item">
                        <div class="annotation__item__front">Режим модуляции</div>
                        <div class="annotation__item__back"></div>
                    </div>
                </div>
                <div class="annotation__items">
                    <div class="annotation__item">
                        <div class="annotation__item__front">Скорость кодирования</div>
                        <div class="annotation__item__back"></div>
                    </div>
                    <div class="annotation__item">
                        <div class="annotation__item__front">Информация управления</div>
                        <div class="annotation__item__back"></div>
                    </div>
                    <div class="annotation__item">
                        <div class="annotation__item__front">Для режима TDD</div>
                        <div class="annotation__item__back"></div>
                    </div>
                </div>
            </div>
            <h2 class="annotation__underwrapper">Чтобы увидеть доп.информацию наведите на нужный вам прямоугольник</h2>
            <div class="annotation__question__wrapper_up">
                <div class="annotation__question__wrapper">
                    <h1 class="annotation__question">Что-то непонятно?</h1>
                    <h2 class="annotation__underquestion">Рекомендуем изучить информацию, представленную в разделе <a
                            href="base.html">"База знаний"</a> </h2>
                </div>
                <div class="annotation__question__image"><picture><source srcset="img/question.webp" type="image/webp"><img src="img/question.png" alt=""></picture></div>
            </div>
        </div>
    </section>
    <section class="calculator" id="calculator">
        <div class="container">
            <h1 class="calculator__title"><picture><source srcset="img/Calc_main.webp" type="image/webp"><img src="img/Calc_main.png" alt=""></picture>Калькулятор </h1>
            <h2 class="calculator__subtitle">Введите входные данные, для вычисления пропускной способности сети 4G </h2>
            <form action="#" class="calculator__form" id='form-calculator'>
                <div class="calculator__form__items">
                    <div class="calculator__form__item">

                        <label class="calculator__form_main-label">Направление передачи данных</label>
                        <input type="radio" name="direction" checked id="FirstInputUl">
                        <label class="calculator__form_scnd-label">UL(Исходящий)</label><br>
                        <input type="radio" name="direction" id="FirstInputDl">
                        <label class="calculator__form_scnd-label">DL(Нисходящий)</label>

                    </div>
                    <div class="calculator__form__item">

                        <label class="calculator__form_main-label">Режим двусторонней связи</label>
                        <input type="radio" name="mode" id="onlyTddbtn1" value="TDD"> <label
                            class="calculator__form_scnd-label">TDD</label>
                        <br>
                        <input type="radio" name="mode" checked value='FDD' id="onlyTddbtn2"> <label
                            class="calculator__form_scnd-label" >FDD</label>

                    </div>
                </div>
                <div class="calculator__form__items">
                    <div class="calculator__form__item">

                        <label class="calculator__form_main-label">Число компонентных несущих(J)</label>
                        <input type="number" min="1" max="15" name="cariers" value="1" class="input-number"
                            id="SecondInput1">

                    </div>
                    <div class="calculator__form__item">

                        <label class="calculator__form_main-label">Число слоев MIMO</label>
                        <input type="number" min="1" max="15" name="cariers" value="1" class="input-number"
                            id="SecondInput2">

                    </div>

                </div>

                <div class="calculator__form__items">
                    <div class="calculator__form__item calc_special">
                        <label class="calculator__form_main-label">Полоса пропускания</label>
                        <input type="radio" name="BW" checked value="6" class="bw1"><label
                            class="calculator__form_scnd-label">1.4 МГц</label>
                        <input type="radio" name="BW" value="15" class="bw1"><label
                            class="calculator__form_scnd-label">3.0 МГц</label>
                        <input type="radio" name="BW" value="25" class="bw1"><label
                            class="calculator__form_scnd-label">5.0 МГц</label>
                        <br>
                        <input type="radio" name="BW" value="50" class="bw1"><label
                            class="calculator__form_scnd-label">10 МГц </label>
                        <input type="radio" name="BW" value="75" class="bw1"><label class="calculator__form_scnd-label">
                            15 МГц</label>
                        <input type="radio" name="BW" value="100" class="bw1"><label
                            class="calculator__form_scnd-label"> 20 МГц</label>
                    </div>
                    <div class="calculator__form__item ">

                        <label class="calculator__form_main-label">Режим модуляции и кодирования</label>
                        <input type="radio" value="0" name="modulation" id="modulation__btn1">
                        <label class="calculator__form_scnd-label">Вручную</label> <br>
                        <input type="radio" name="modulation" checked id="modulation__btn2">
                        <label class="calculator__form_scnd-label">Исходя от CQI(Таблица 3GPP 36.213 7.2.3-1)</label>

                    </div>
                </div>


                <div class="calculator__form__items show-calc active">
                    <div class="calculator__form__item ">

                        <label class="calculator__form_main-label">Введите значение CQI</label>
                        <div class="input-range__wrapper">
                            <div class="input-range__num">15</div>
                            <input type="range" min="1" max="15" value="15" class="input-range">
                        </div>

                    </div>

                    <div class="calculator__form__item ">

                        <label class="calculator__form_main-label">Значения, исходя из таблицы 7.2.3-1</label>
                        <input type="number" readonly value="0.92578125" class="input-number showForUser"
                            style="background-color: rgb(173, 173, 173);">
                        <label class="calculator__form_scnd-label">Кодирование</label> <br> <br>
                        <input type="text" readonly value="64QAM" class="input-number showForUserModule"
                            style="background-color: rgb(173, 173, 173);">
                        <label class="calculator__form_scnd-label">Модуляция</label>

                    </div>

                </div>
                <div class="calculator__form__items hidden-calc">

                    <div class="calculator__form__item ">

                        <label class="calculator__form_main-label">Режим модуляции</label>
                        <select name="select-modulation" class="input-select" id="select-modulation1">
                            <option value="2">QPSK</option>
                            <option value="4">16QAM</option>
                            <option value="6">64QAM</option>
                            <option value="8">256QAM</option>
                        </select>

                    </div>

                    <div class="calculator__form__item ">

                        <label class="calculator__form_main-label">Cкорость кодирования</label>
                        <input type="number" name="coderate" min="0" max="0.925781" class="input-number"
                            value="0.925781" step="0.115722625" id="select-modulation2">
                    </div>

                </div>
                <div class="calculator__form__items" style="display: block; ">

                    <div class="calculator__form__item " style="margin-left: 45px;">

                        <label class="calculator__form_main-label">Процент информации управления</label>
                        <input type="number" min="0.01" max="0.99" value="0.75" name="controlInfo" step="0.098"
                            class="input-number" id="coderate1">
                        <label class="calculator__form_scnd-label">%</label>


                    </div>

                </div>

                <div class="calculator__form__items hidden-calc_onlyTdd">
                    <div class="calculator__form__item">

                        <label class="calculator__form_main-label">Конфигурация UL/Dl канала <p>( только для TDD )</p>
                        </label>
                        <select name="TDDOnly_confiq" class="input-select" id="TddOnly1">
                            <option value="1">0(DSUUUDSUUU)</option>
                            <option value="2">1(DSUUDDSUUD)</option>
                            <option value="3">2(DSUDDDSUDD)</option>
                            <option value="4">3(DSUUUDDDDD)</option>
                            <option value="5">4(DSUUDDDDDDD)</option>
                            <option value="6">5(DSUDDDDDDD)</option>
                            <option value="7">6(DSUUUDSUUD)</option>
                        </select>


                    </div>
                    <div class="calculator__form__item">

                        <label class="calculator__form_main-label"> Конфигурация подкадра TDD <p>( только для TDD )</p>
                        </label>
                        <select name="TDDOnly" class="input-select" id="TddOnly2">
                            <option value="3">0(3DW 1UP символов)</option>
                            <option value="9">1(9DW 1UP символов)</option>
                            <option value="10">2(10DW 1UP символов )</option>
                            <option value="11">3(11DW 1UP символов)</option>
                            <option value="12">4(12DW 1UP символов)</option>
                            <option value="3">5(3DW 2UP символов)</option>
                            <option value="9">6(9DW 2UP символов)</option>
                            <option value="10">7(10DW 2UP символов)</option>
                            <option value="11">8(11DW 2UP символов)</option>
                            <option value="6">9(6DW 2UP символов)</option>
                        </select>


                    </div>

                </div>
                <h1 class="calculator__title_down">Итоговая пропускная способность:</h1>
                <div class="calculator__end" id='total-000'>4.2 Мб/с</div>
                <input type="submit" id='submit-calculator' style="display: none;">
                <?php if($_SESSION['login']){ ?>
                    <input type="hidden" name='user-id' value="<?php echo $_SESSION['id-user']; ?>">
                <?php } ?>
            </form>
            <div class="buttons">
                <button id='save-calc'>Сохранить в личном кабинете</button>
                <button id='btn-csv'>Скачать в формате .cvs</button>
            </div>
        </div>
    </section>
    <footer></footer>
    <script src="js/app.js"></script>
    <script src="js/jquery.min.js"></script>
    <script>
        $('#save-calc').click(function(){
            $('#submit-calculator').trigger('click');
        });
        $('#btn-csv').click(function(){
            let form = $('#form-calculator').serialize();
            let total = $('#total-000').html();
            form += '&total=' + total;
            document.location.href = 'csv.php?' + form;
        })
        $('#form-calculator').submit(function(e){
            e.preventDefault();
            let form = $(this).serializeArray();
            let total = $('#total-000').html();
            // if($('#modulation__btn2').is(':checked')){
            //     alert('IS');
            // }
            form.push({name:'total',value:total});
            console.log(form);
            $.ajax({
                method:'POST',
                url:'ajax/save-calc.php',
                data:form,
                success:function(data){
                    console.log(data);
                }
            })
        })
    </script>
</body>

</html>