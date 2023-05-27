<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>База знаний</title>
</head>

<body>
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
    <div class="webp">
        <section class="base">
            <div class="container">
                <h1 class="base__title"> <picture><source srcset="img/book.webp" type="image/webp"><img src="img/book.png" alt="book"></picture>База знаний</h1>
                <h2 class="base__subtitle">Ниже представлена полная информация, чтобы прояснить как
                    работает сеть радиодоступа LTE</h2>
                <div class="base__items">
                    <div class="base__question">
                        <picture><source srcset="img/jumping-man.webp" type="image/webp"><img src="img/jumping-man.png" alt="man"></picture>
                        <h2>Наводясь на картинки можно <br> получить доп.информацию
                        </h2>
                    </div>
                    <div class="base__answer">
                        <h2>Хотите проверить знания? Рекомендуем <a href="#base-test">пройти тестирование</a></h2>
                        <picture><source srcset="img/question.webp" type="image/webp"><img src="img/question.png" alt=""></picture>
                    </div>
                </div>
                <hr>
                <h1 class="base__title_theme">1. Краткие теоретические сведения</h1>
                <div class="base__main"> <span> Терминал пользователя </span> (или оборудование пользователя UE, User
                    Equipment) это устройство, с помощью которого пользователь услуг сотовой
                    связи подключается к сети LTE оператора связи. Название UE осталось у
                    мобильного терминала пользователя начиная с поколения сетей 3G (UMTS), где
                    устройство называлось аналогично (в отличие от поколений 2G/2,5G, где оно
                    называлось мобильной станцией MS). Современные устройства пользователя
                    разнообразны – это могут быть смартфоны, компьютеры, ноутбуки, планшеты,
                    модемы, портативные колонки, телевизоры и др.
                    <div class="base__image__wrap">
                        <div class="base__image">
                            <div class="base__image__front"> <picture><source srcset="img/base_1.webp" type="image/webp"><img src="img/base_1.png" alt="UE"></picture> </div>
                            <div class="base__image__back">Также у каждого пользователя есть уникальный идентификатор
                                телефона (IMEI). В некоторых странах при краже телефона его даже могут внести в черный
                                список, чтобы похититель не мог выйти в сеть.</div>
                        </div>
                    </div>
                    Важным условием работы
                    таких устройств в сетях LTE является наличие модуля связи с поддержкой
                    частотного диапазона LTE и универсального модуля идентификации абонента
                    USIM (Universal Subscriber Identity Module) Наиболее популярным устройством является смартфон.
                    Современные
                    смартфоны имеют достаточно сложное устройство и включают в себя
                    процессор основной полосы частот с поддержкой большого количества
                    диапазонов частот (2G, 3G, 4G, 5G) центральный многоядерный процессор,
                    графический многоядерный процессор, оперативную память, жесткий диск,
                    модули связи других беспроводных технологий (Wi-Fi, Bluetooth, GPS, NFC,
                    IR), сенсорный дисплей высокой четкости, аккумуляторную батарею большой
                    емкости и различные вспомогательные устройства – микрофоны, фото и
                    видеокамеры, слоты для flash-карт, интерфейсы подключения внешних
                    устройств (например, USB), различные сенсоры и управляющие устройства.
                    <br> <br>
                    <span>Базовая станция LTE </span> (развитой узел Би (Evolved Node B, eNodeB, eNB))
                    является одним из самых сложных устройств в сети LTE, и предназначена для
                    перехода с беспроводных средств связи на проводные, и обратно. Современная
                    базовая станция LTE состоит из следующих элементов (наведите на рис.1).
                    <div class="base__image__wrap wrap2">
                        <div class="base__image">
                            <div class="base__image__front"><picture><source srcset="img/base1.webp" type="image/webp"><img src="img/base1.png" alt=""></picture></div>
                            <div class="base__image__back"></div>
                        </div>
                    </div>
                    <span> Компоненты базовой станции:</span> <br>
                    1. Плоская мульти-диапазонная антенна, поддерживающая подключение
                    устройств всех существующих поколений сотовой связи (2G, 3G, 4G). <br>
                    2. Удаленные радио модули RRU (Remote Radio Unit), которые
                    модулируют и демодулируют все сигналы, передаваемые или принимаемые по
                    радио интерфейсу. RRU часто подключают к антеннам коаксиальными
                    кабелями. <br>
                    3. Модули цифровой обработки сигналов BBU (Baseband Unit)
                    обрабатывающие все сигналы, передаваемые и принимаемые по
                    радиоинтерфейсу и действующие как интерфейс к базовой сети через
                    высокоскоростное транспортное соединение. BBU подключаются к сети
                    оператора связи и RRU оптическими кабелями. <br> <br>
                    Передачу информации от устройства пользователя UE к базовой станции
                    eNB называют восходящим направлением связи (uplink), а передачу
                    информации от базовой станции eNB к устройству пользователя называют
                    нисходящим направлением (downlink)
                    <div class="base__image__wrap wrap2">
                        <div class="base__image">
                            <div class="base__image__front"><picture><source srcset="img/base_2.webp" type="image/webp"><img src="img/base_2.png" alt=""></picture></div>
                            <div class="base__image__back"></div>
                        </div>
                    </div>
                    Радиоинтерфейс в LTE может работать в двух режимах двусторонней
                    связи: <span> FDD и TDD. </span> (Наведите на картинку, на верхней стороне изображен режим FDD, на
                    нижней TDD.)
                    <div class="base__image__wrap wrap2">
                        <div class="base__image">
                            <div class="base__image__front" style="height: 270px;"><picture><source srcset="img/base_3.webp" type="image/webp"><img src="img/base_3.png" alt=""></picture>
                            </div>
                            <div class="base__image__back" style="height: 270px;"><picture><source srcset="img/base_4.webp" type="image/webp"><img src="img/base_4.png" alt=""></picture>
                            </div>
                        </div>
                    </div>
                    <span> Режим FDD </span> (Frequency Division Duplexing), дуплекс с частотным
                    разделением, при котором каждому UE на время сеанса связи выделяется одна
                    частота на прием и одна на передачу. <br>
                    Все время на радиоинтерфейсе TDD и FDD организовано во временной
                    кадр, содержащий 10 под-кадров длительностью 1 мс каждый. При этом
                    каждый под-кадр разделен на два слота, длительностью 0,5 мс каждый.
                    Следовательно, в радиокадре 20 временных слотов. В режиме FDD обе частоты
                    используются UE одновременно в один и тот же временной интервал (подкадр). Помимо этого, обе частоты
                    могут быть выделены UE на все время, но на
                    практике обычно совместно с FDD применяется разделение времени
                    использования частот. Так на рисунке 4 для UE выделены частоты f1 и f2 в 5
                    временной интервал. <br> <br>
                    <span>Режим TDD </span> (Time Division Duplex) – дуплекс с временным разделением. В
                    данном режиме абонентскому устройству выделяется одна и та же частота в
                    восходящем и нисходящем направлении, но разное время передачи вниз и
                    вверх. Существует несколько типов организации радиокадра в TDD LTE. На
                    рисунке 5 показан тип радиокадра DSUUUDSUUU, где D – интервал времени
                    для передачи в восходящем направлении, U – интервал времени для передачи в
                    нисходящем направлении, S – специальный интервал. Типы кадров TDD LTE
                    различаются порядком D, S и U интервалов, и их числом при фиксированном
                    размере радиокадра в 10 под-кадров. <br> <br>
                    <h1 class="base__title_theme">2. Физические ресурсные блоки</h1>
                    Весь частотный ресурс, доступный оператору связи, разбивается на
                    физические ресурсные блоки (Physical Resource Block - <span>PRB</span> ). <span>PRB </span>
                    представляет
                    собой матрицу на частотно-временной сетке, состоящую из ресурсных
                    элементов. Один PRB занимает 12 поднесущих (SCS - Subcarrier spacing) в
                    частотной области, что составляет 12 x 15=180кГц, и 7 или 6 OFDMA/SCFDMA символов во временной -
                    0.5мс (для LTE определен только один шаг
                    между поднесущими - 15 кГц; при этом для сетей NB-IoT и 5G-NR допустимы
                    несколько вариантов SCS).
                    <div class="base__image__wrap wrap3">
                        <div class="base__image">
                            <div class="base__image__front"><picture><source srcset="img/base_5.webp" type="image/webp"><img src="img/base_5.png" alt=""></picture>
                            </div>
                            <div class="base__image__back"></div>
                        </div>
                    </div>
                    <h1 class="base__title_theme">3. Агрегированные компонентые несущие</h1>
                    Агрегация несущих используется в LTE-Advanced с целью увеличения
                    пропускной способности, и тем самым увеличения скорости передачи данных.
                    Агрегация носителей (FDD); LTE-Advanced UE может быть выделен ресурсами
                    DL и UL на агрегированном ресурсе, состоящем из двух или более
                    компонентных носителей (CC), R8/R9 UE могут быть выделены ресурсы на
                    любом ОДНОМ из CC. CC могут иметь разную пропускную способность.
                    Поскольку важно поддерживать обратную совместимость с R8 и R9 UE,
                    агрегация основана на носителях R8/R9. Агрегация несущих может
                    использоваться как для FDD, так и для TDD. <br> <br>
                    Каждый агрегированный носитель называется <span> компонентным носителем </span>,
                    CC. Компонентная несущая может иметь полосу пропускания 1,4, 3, 5, 10, 15
                    или 20 МГц, и максимум пять компонентных несущих могут быть
                    агрегированы, следовательно, максимальная агрегированная полоса
                    пропускания составляет 100 МГц. Однако число
                    несущих компонентов UL всегда равно или меньше числа несущих
                    компонентов DL. Отдельные компонентные носители также могут иметь
                    различную пропускную способность. Для TDD количество CC, а также
                    пропускная способность каждого CC обычно будут одинаковыми для DL и UL.
                    Самым простым способом организации агрегации было бы использование
                    смежных компонентных носителей в пределах одной рабочей полосы частот
                    (как определено для LTE), так называемой внутри-полосной непрерывной. Это
                    не всегда возможно из-за сценариев распределения частот оператора. Для
                    несмежного распределения он может быть либо внутри-диапазонным, т.е.
                    компонентные носители принадлежать к одной и той же рабочей полосе частот,
                    но имеют зазор или зазоры между ними, либо он может быть междиапазонным, и в этом случае
                    составляющие носители принадлежат к разным
                    рабочим полосам частот
                    <h1 class="base__title_theme">4. Метод пространственного кодирования сигнала MIMO</h1>
                    Каждый тип антенны имеет предопределенную диаграмму
                    направленности, которая описывает присущую ей направленность, т.е. то, как
                    коэффициент усиления излучаемого сигнала отличается в разных угловых
                    направлениях. Идеальная изотропная антенна не имеет направленности.
                    Реальная антенна всегда имеет определенную направленность, измеряемую в
                    дБи. Например, полуволновая дипольная антенна имеет 2,15 дБи, что означает,
                    что существует одно угловое направление, в котором излучаемый сигнал на
                    2,15 дБ сильнее, чем он был бы с соответствующей изотропной антенной. С
                    другой стороны, есть и другие угловые направления, в которых излучаемый
                    сигнал слабее. Это не проблема до тех пор, пока не будет никаких приемников
                    в этих направлениях. <br>
                    В сотовой сети развертывают большие вертикальные антенные панели,
                    которые покрывают горизонтальный сектор 120 градусов и имеют сильную
                    направленность 15 дБи или более. Такая панель состоит из множества
                    небольших излучающих элементов, каждый из которых имеет направленность
                    в несколько дБи. За счет подачи на них одного и того же входного сигнала
                    достигается более высокий дБи для панели. Например, если панель состоит из 8
                    патч-антенных элементов, каждый из которых имеет 7 дБи, то вы получаете
                    антенну с 7+10·log10(8) = 16 дБи. <br> <br>
                    <span>Система MIMO позволяет задействовать несколько антенн на передачу
                        сигнала и несколько антенн на прием сигнала. </span> Например, в системе 2Х2 MIMO используется 2
                    антенны для приема
                    сигнала и 2 антенны на передачу сигнала. В системе 4Х4 MIMO используется
                    уже 4 антенны для приема сигнала и 4 антенны для передачи сигнала. <br>С большим количеством
                    радиочастотных цепей у вас есть больше свободы
                    для изменения диаграммы направленности передаваемого сигнала в
                    зависимости от того, где расположен приемник. При передаче предварительно
                    закодированного сигнала одному пользователю вы настраиваете фазы входных
                    радиочастотных сигналов, чтобы все они конструктивно объединялись на
                    предполагаемом приемнике. <br>
                    Максимальный коэффициент усиления антенны/решетки одинаков при
                    использовании одной антенны 16 дБи и при использовании 8 антенн с 7 дБи. В
                    первом случае диаграмма направленности излучения обычно статична, и, таким
                    образом, только пользователь прямой видимости, расположенный в центре
                    сектора ячейки, получит это усиление. Однако, если антенна является
                    адаптивной (т.е. поддерживает аналоговое формирование луча), основная доля
                    диаграммы направленности излучения также может быть направлена к
                    пользователям прямой видимости, расположенным в других угловых
                    направлениях. Эта функция может быть достаточной для поддержки
                    предполагаемых однопользовательских вариантов использования технологии
                    mm-wave
                    <h1 class="base__title_theme">5. MU-MIMO</h1>
                    Многопользовательский <span>MIMO (MU-MIMO)</span> не является новой
                    технологией. Базовая концепция использования многоантенных базовых
                    станций для обслуживания множества пользователей существует с конца 1980-
                    х годов.
                    <div class="base__image__wrap wrap4">
                        <div class="base__image">
                            <div class="base__image__front"><picture><source srcset="img/base_6.webp" type="image/webp"><img src="img/base_6.png" alt=""></picture> Иллюстрация концепции
                                MU-MIMO
                            </div>
                            <div class="base__image__back"><picture><source srcset="img/base_7.webp" type="image/webp"><img src="img/base_7.png" alt=""></picture>Ранняя иллюстрация концепции
                                MU-MIMO (до Massive MIMO)</div>
                        </div>
                    </div>
                    Ключевое преимущество Massive MIMO перед обычным MU-MIMO
                    заключается не только в количестве антенн.
                    Шесть ключевых различий между обычными MU-MIMO и Massive MIMO
                    приведены ниже в таблице. <br>
                    <picture><source srcset="img/base8.webp" type="image/webp"><img src="img/base8.png" alt="" style="margin-top: 20px ;"></picture>
                    <h1 class="base__title_theme">6. Технология формирования направленного сигнала (Beamforming)</h1>
                    Современные много-антенные базовые станции сотовой связи оснащены 2-
                    8 антеннами, которые развернуты вдоль горизонтальной линии. Одним из
                    примеров является однородная линейная решетка (ULA), как показано на
                    рисунке 12 ниже, где расстояние между антеннами равномерно.
                    <div class="base__image__wrap">
                        <div class="base__image">
                            <div class="base__image__front"><picture><source srcset="img/base_9.webp" type="image/webp"><img src="img/base_9.png" alt=""></picture>
                            </div>
                            <div class="base__image__back">На рисунке изображено азимутальное двумерное формирование
                                луча с направлением
                                в горизонтальной плоскости</div>
                        </div>
                    </div>
                    Все антенны в ULA имеют одинаковый физический наклон вниз по
                    отношению к земле, а также фиксированную диаграмму направленности
                    излучения и направленность. Посылая один и тот же сигнал со всех антенн, но с
                    разными фазовыми сдвигами, мы можем направлять лучи в разных угловых
                    направлениях и тем самым делать направленность излучаемого сигнала
                    отличной от направленности отдельных антенн. Поскольку антенны развернуты
                    на одномерной горизонтальной линии в этом примере, ULA может управлять
                    лучами только в двумерной (2D) азимутальной плоскости, как показано на
                    рисунке. <br>
                    Угол возвышения одинаков для всех балок, поэтому это называется 2Dформированием луча. Ширина луча в
                    азимутальной области уменьшается по
                    мере развертывания большего количества антенн. Если массив используется
                    для многопользовательского (MU-MIMO), то одновременно создается
                    несколько лучей с разными углами азимута, как показано цветными лучами на
                    рисунке 12.
                    Если бы мы повернули ULA так, чтобы антенны вместо этого были
                    развернуты на разных высотах над землей, то массив мог бы вместо этого
                    управлять лучами под разными углами возвышения.
                    <div class="base__image__wrap">
                        <div class="base__image">
                            <div class="base__image__front"><picture><source srcset="img/base_10.webp" type="image/webp"><img src="img/base_10.png" alt=""></picture>
                            </div>
                            <div class="base__image__back">На рисунке изображено азимутальное двумерное формирование
                                луча с направлением
                                в вертикальной плоскости</div>
                        </div>
                    </div>
                    Обратите внимание, что это все еще форма 2D-формирования луча,
                    поскольку каждый луч будет иметь одинаковую направленность по отношению
                    к плоскости азимута. Эта антенная решетка может использоваться для
                    направления лучей к пользователям на разных этажах здания. Также полезно
                    обслуживать летающие объекты, такие как БПЛА (беспилотные летательные
                    аппараты), совместно с наземными пользователями. Ширина луча в области
                    высоты уменьшается по мере развертывания большего количества антенн. <br>
                    Если вместо этого мы развернем несколько ULA друг на друге, можно
                    будет контролировать как азимут, так и угол возвышения луча. Это называется
                    3D-формированием луча (или полноразмерным MIMO) и проиллюстрировано
                    на рисунке с использованием плоской решетки с «огромным» количеством
                    антенн.
                    <div class="base__image__wrap">
                        <div class="base__image" style="height: 220px;">
                            <div class="base__image__front" style="height: 190px;"><picture><source srcset="img/base11.webp" type="image/webp"><img src="img/base11.png" alt=""></picture>
                            </div>
                            <div class="base__image__back" style="height: 190px;">На рисунке изображено трехмерное
                                формирование луча с направлением
                                в разных плоскостях. Что дает гибкость не только направлять балки к различным зданиям,
                                но и к
                                разным этажам этих зданий, чтобы обеспечить усиление формирования луча,
                                где бы пользователь ни находился в зоне покрытия.</div>
                        </div>
                    </div>
                    Массивный MIMO и 3D-формирование луча — это две разные концепции.
                    3D-формирование луча может быть выполнено с несколькими антеннами, а
                    Massive MIMO может быть развернут только для выполнения 2Dформирования луча. Тем не менее, Massive
                    MIMO и 3D-формирование луча
                    является отличным сочетанием во многих приложениях. Например,
                    пространственное мультиплексирование множества пользователей в городе с
                    высотными зданиями.
                    <h1 class="base__title_theme">7. Цифровая модуляция</h1>
                    <span>Манипуляция (цифровая модуляция) </span> — в теории передачи дискретных
                    сообщений процесс преобразования последовательности кодовых символов в
                    последовательность сигналов (частный случай модуляции — при дискретных
                    уровнях модулирующего сигнала). <br>
                    Существуют следующие типы манипуляций: <br>
                    - частотная манипуляция <br>
                    - фазовая манипуляция <br>
                    - амплитудная манипуляция <br>
                    - квадратурная амплитудная манипуляция <br>
                    При квадратурной фазовой манипуляции (англ. QPSK — quadrature phaseshift keying или 4-PSK)
                    используется созвездие из четырёх точек, размещённых
                    на равных расстояниях на окружности.
                    <div class="base__image__wrap">
                        <div class="base__image" style="height: 220px;">
                            <div class="base__image__front" style="height: 190px;"><picture><source srcset="img/base_12.webp" type="image/webp"><img src="img/base_12.png" alt=""></picture>
                            </div>
                            <div class="base__image__back" style="height: 190px;">Фазовое созвездие для QPSK. Хотя QPSK
                                можно считать квадратурной манипуляцией (QAM-4), иногда
                                её проще рассматривать в виде двух независимых модулированных несущих,
                                сдвинутых на 90°</div>
                        </div>
                    </div>
                    <span> Квадратурная модуляция (квадратурная амплитудная модуляция, КАМ;
                        англ. Quadrature Amplitude Modulation, QAM) </span> — разновидность амплитудной
                    модуляции сигнала, которая представляет собой сумму двух несущих
                    колебаний одной частоты, но сдвинутых по фазе относительно друг друга на
                    90° (π/2 радиан, то есть, четверть полного угла, поэтому «квадратурная»),
                    каждое из которых модулировано по амплитуде своим модулирующим
                    сигналом

                    <div class="base__image__wrap">
                        <div class="base__image" style="height: 290px;">
                            <div class="base__image__front" style="height: 250px;"><picture><source srcset="img/base13.webp" type="image/webp"><img src="img/base13.png" alt=""></picture>
                            </div>
                            <div class="base__image__back" style="height: 250px;"><picture><source srcset="img/base_14.webp" type="image/webp"><img src="img/base_14.png" alt=""></picture>
                            </div>
                        </div>
                    </div>
                    На рисунке выше изображены сигнальные созвездия для модуляции 256QAM и 1024QAM соответственно.
                    <hr>
                    <h1 class="base__title_theme">ТЕСТИРОВАНИЕ</h1>
                    <h2 class="base__subtitle" id="base-test">Для закрепления и проверки полученных знаний рекомендуем
                        пройти
                        тестирование</h2>
                </div>
                <div class="base__testing">
                    <div class="base__testing__items">
                        <h1 class="base__testing__title">1. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nam obcaecati iste at assumenda vitae porro saepe expedita culpa exercitationem, deserunt,
                            sequi praesentium, illo excepturi esse dolorem cupiditate ratione eaque numquam!</h1>
                        <form action="" id='form-test'>
                        <div class="base__testing__item">
                            <input type="radio" name="test1" value="1" class="testingInput" required>
                            <label class="base__testing__items__label">Ответ такой-то</label>
                        </div>
                        <div class="base__testing__item">
                            <input type="radio" name="test1" value="0" class="testingInput" required>
                            <label class="base__testing__items__label">Ответ такой-то</label>
                        </div>
                        <div class="base__testing__item">
                            <input type="radio" name="test1" value="0" class="testingInput" required>
                            <label class="base__testing__items__label">Ответ такой-то</label>
                        </div>
                        <div class="base__testing__item">
                            <input type="radio" name="test1" value="0" class="testingInput" required>
                            <label class="base__testing__items__label">Ответ такой-то</label>
                        </div>
                        <hr>
                    </div>
                    <div class="base__testing__items">
                        <h1 class="base__testing__title">2. Какой-то вопрос</h1>
                        <div class="base__testing__item">
                            <input type="radio" name="test2" value="1" class="testingInput" required>
                            <label class="base__testing__items__label">Ответ такой-то</label>
                        </div>
                        <div class="base__testing__item">
                            <input type="radio" name="test2" value="0" class="testingInput" required>
                            <label class="base__testing__items__label">Ответ такой-то</label>
                        </div>
                        <div class="base__testing__item">
                            <input type="radio" name="test2" value="0" class="testingInput" required>
                            <label class="base__testing__items__label">Ответ такой-то</label>
                        </div>
                        <div class="base__testing__item">
                            <input type="radio" name="test2" value="0" class="testingInput" required>
                            <label class="base__testing__items__label">Ответ такой-то</label>
                        </div>
                        <hr>
                    </div>
                    <div class="base__testing__items">
                        <h1 class="base__testing__title">3. Какой-то вопрос</h1>
                        <div class="base__testing__item">
                            <input type="radio" name="test3" value="1" class="testingInput" required>
                            <label class="base__testing__items__label">Ответ такой-то</label>
                        </div>
                        <div class="base__testing__item">
                            <input type="radio" name="test3" value="0" class="testingInput" required>
                            <label class="base__testing__items__label">Ответ такой-то</label>
                        </div>
                        <div class="base__testing__item">
                            <input type="radio" name="test3" value="0" class="testingInput" required>
                            <label class="base__testing__items__label">Ответ такой-то</label>
                        </div>
                        <div class="base__testing__item">
                            <input type="radio" name="test3" value="0" class="testingInput" required>
                            <label class="base__testing__items__label">Ответ такой-то</label>
                        </div>
                        <hr>
                    </div>
                    <div class="base__testing__items">
                        <h1 class="base__testing__title">4. Какой-то вопрос</h1>
                        <div class="base__testing__item">
                            <input type="radio" name="test4" value="1" class="testingInput" required>
                            <label class="base__testing__items__label">Ответ такой-то</label>
                        </div>
                        <div class="base__testing__item">
                            <input type="radio" name="test4" value="0" class="testingInput" required>
                            <label class="base__testing__items__label">Ответ такой-то</label>
                        </div>
                        <div class="base__testing__item">
                            <input type="radio" name="test4" value="0" class="testingInput" required>
                            <label class="base__testing__items__label">Ответ такой-то</label>
                        </div>
                        <div class="base__testing__item">
                            <input type="radio" name="test4" value="0" class="testingInput" required>
                            <label class="base__testing__items__label">Ответ такой-то</label>
                        </div>
                        <hr>
                    </div>
                    <div class="base__testing__items">
                        <h1 class="base__testing__title">5. Какой-то вопрос</h1>
                        <div class="base__testing__item">
                            <input type="radio" name="test5" value="1" class="testingInput" required>
                            <label class="base__testing__items__label">Ответ такой-то</label>
                        </div>
                        <div class="base__testing__item">
                            <input type="radio" name="test5" value="0" class="testingInput" required>
                            <label class="base__testing__items__label">Ответ такой-то</label>
                        </div>
                        <div class="base__testing__item">
                            <input type="radio" name="test5" value="0" class="testingInput" required>
                            <label class="base__testing__items__label">Ответ такой-то</label>
                        </div>
                        <div class="base__testing__item">
                            <input type="radio" name="test5" value="0" class="testingInput" required>
                            <label class="base__testing__items__label">Ответ такой-то</label>
                        </div>
                    </div>
                    <?php if($_SESSION['login']){ ?>
                        <input type="hidden" name="user-id" value="<?php echo $_SESSION['id-user']; ?>" id='user-id'>
                    <?php } ?>
                    <input type="submit" style="display: none;" id="submit-form">
                    <div class="button__test">Проверить результат</div>
                    <div class="base__testing__answer_right">
                        <div class="base__testing__answer_right_question"></div>
                        <div>Результаты сохранены в вашем личном кабинете</div>
                    </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <script src="js/app.js"></script>
    <script src="js/jquery.min.js"></script>
    <script>
        $('.button__test').click(function(){
            let id = $('#user-id').val();
            if(id > 0){
                $('.base__testing__answer_right').hide();
                $.ajax({
                    method:'POST',
                    url:'ajax/check-last-test.php',
                    data:{id:id},
                    success:function(data){
                        if(data == 'Success'){
                            $('#submit-form').trigger('click');
                            $('.base__testing__answer_right').show();                            
                        }
                        else{

                            alert("Последний раз вы проходили тест меньше часа назад!");
                        }
                    }
                })
            }
        })
        $('#form-test').submit(function(e){
            e.preventDefault();
            let form = $(this).serializeArray();
            console.log(form)
            $.ajax({
                method:'POST',
                url:'ajax/save-test.php',
                data:form,
                success:function(data){
                    console.log(data);
                }
            })
        })
    </script>
</body>

</html>