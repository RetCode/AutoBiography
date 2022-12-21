<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli("localhost", "root", "root", "carinfo");

    $result = $mysqli->query("SELECT * FROM namecar WHERE name='BMW'");
    $nameCar = $result->fetch_all(MYSQLI_ASSOC);

    $result = $mysqli->query("SELECT * FROM modelcar WHERE model='Series 5 E39'");
    $modelCar = $result->fetch_all(MYSQLI_ASSOC);

    $result = $mysqli->query("SELECT * FROM engonetype");
    $engineType = $result->fetch_all(MYSQLI_ASSOC);

    $result = $mysqli->query("SELECT * FROM bodyname");
    $bodyCar = $result->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoBiography</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;1,100;1,200;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/CarPage.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="public/js/CarPage.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <div class="content_block">
        <div class="container maincont">
            <div class="button-block">
                    <a href="index.php"><button class="button_back">Назад</button></a>                
            </div>
            <div class="technical_specifications-block">
                <p class="technical_specifications-text">Технические характеристики BMW 530i E60    </p> 
                    <?php

                        foreach($nameCar as $car)
                        {
                           // echo '<p class="technical_specifications-text">'.$car["name"].'</p>';
                        }
                    ?>
                    <?php
                        foreach($modelCar as $model)
                        {
                            //echo '<p class="technical_specifications-text">'.$model["model"].'</p>';
                        }

                    ?>                                
            </div>
            <div class="about-car">
                <div class="bd-example">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" style="width: 550px;">
                        <div class="carousel-inner">                            
                            <div class="carousel-item active">
                                <img src="./public/img/BMWE60-5.png" class="d-block w-100 image-carousel" alt="3">
                            </div>
                            <div class="carousel-item">
                                <img src="./public/img/BMWE60-4.png" class="d-block w-100 image-carousel" alt="4">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Предыдущий</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Следующий</span>
                        </button>
                    </div>
                </div>
                <div class="history-car">
                    <p> 
                        <span class="bold-text">BMW E60</span> — модификация кузова BMW «пятой» серии, который выпускался с 2003 года по 2009 год 
                        (до 2010 года выпускался в кузове универсал). Предшественником данного кузова был BMW E39. 
                        В 2007 году произошёл рестайлинг, появился электронный селектор автомата, новые фары, светодиодные фонари, бампера, кнопка старта двигателя, 
                        c марта 2008 года появилась возможность добавление в опции расширенной мультимедиа CIC (Car Information Computer). 
                        Максимальная скорость ограничивается электроникой на уровне 250 км/ч. Без ограничителя машина способна разогнаться до 320 км/ч.
                        Последняя машина сошла с конвейера в 2009 году. В декабре 2009 года цех производства E60 был закрыт на переоборудование для производства новой модели F10.

                        За период с 2003 по 2009 годы компанией было реализовано 1 096 444 седана и 263 426 универсалов.

                        <br>
                        <span class="bold-text">Кузов</span>
                        <br>
                        Особенностью E60 является облегченная алюминиевая передняя часть кузова. Передняя часть сделана из алюминия, а пассажирский отсек и задняя часть - из стали.
                        Благодаря уменьшению веса передней части автомобиля достигается распределение нагрузки на оси 50:50.
                        <br>
                        <span class="bold-text">Системы помощи водителю</span>
                        <br>
                        Проекционный дисплей информация (HUD) проецируется на лобовое стекло с отображением скорость, оборотов двигателя и маршрута. 
                        В качестве специального оборудования также был доступен BMW Night Vision ( Night View Assist ). 
                        В отличие от Mercedes-Benz S-Class (где используется система ближнего инфракрасного диапазона от Bosch с активным инфракрасным освещением), 
                        BMW использует технологию пассивного тепловидения. 
                        Тепловое излучение от предметов и людей регистрируется камерой в решётке переднего бампера и отображается на дисплее iDrive.

                        Контроль полосы (на скорости выше 70 км/ч) - эта система предупреждает водителя, если он собирается покинуть полосу движения, вибрируя рулевое колесо.
                        Камера во лобовом стекле обнаруживает существующую и четко видимую разметку полосы движения. 
                        Если дорожная разметка распознается, система сигнализирует о готовности предупредить. 
                        Систему можно включить или выключить с помощью кнопки на рулевом колесе. 
                        В ситуациях где маркировка полос движения бывает неразборчивой, система автоматически переключается в неактивное состояние, 
                        а затем автоматически активируется.
                        <br>
                        <span class="bold-text">Светотехника</span>
                        <br>
                        BMW E60 имеет автоматический дальний свет и адаптивные фары поворотов. 
                        С осени 2007 года - светодиодные фонари поворотов и задние фонари. 
                        Ассистент дальнего света, как дополнительная опция, автоматически включает или выключает дальний свет, предотвращая ослепление встречных автомобилей. 
                        С марта 2005 года ксеноновые фары были заменены с D2S на D1S.
                        <br>
                        <span class="bold-text">Мультимедиа</span>
                        <br>
                        Для E60 есть различные варианты развлечений, например, профессиональная навигационная система с 8,8-дюймовым экраном и DVD приводом. 
                        Тюнер для цифрового радио приема и DVB-T - тюнер для телевизионного приема также доступны. 
                        Были доступны 4 вида аудиосистем Stereo, Hi-Fi, Logic7 и Individual.

                        Аудио может воспроизводиться через опциональную аудиосистему LOGIC7 от harman/kardon с 13 динамиками, включая два сабвуфера под передними сиденьями, 
                        он обеспечивает воспроизведение без искажений до 110 дБ. Система использует звуковую сцену на 360 °, а также поддерживает MP3. 
                        К усилителю (девять каналов, 420Ватт ) сигнал передается через интерфейс оптической шины MOST. 
                        Кроме того, с 2007 года появилась возможность заказа опции аудиосистемы Individual с 16 динамиками и мощностью 825 Вт.
                        <br>
                        <span class="bold-text">Рестайлинг 2007 - 2010 г. в.</span>
                        <br>
                        24 марта 2007 года была представлена доработанная версия 5-й серии. Внешний вид немного переработан. 
                        Наиболее заметными внешними изменениями являются новые бамперы, задние фонари со светодиодной технологией, переработанные противотуманные фары, 
                        измененная рамка номерного знака в задней двери.

                        В интерьере были переработаны дверные панели и выбраны другие материалы. 
                        Органы управления имеют перламутровый хромированный дизайн, а обновленный iDrive теперь имеет восемь свободно программируемых любимых кнопок. 
                        Самым ярким сигналом к ​​новому стилю оформления интерьера являются двухцветные дверные панели. 
                        Кнопки стеклоподъемников и регулировки зеркал теперь встроены в подлокотник.

                        Технические нововведения включали дополнительное предупреждение о выезде с полосы движения, дневные ходовые огни через коронирующие кольца, 
                        огни поворота и 6-ступенчатую спортивную автоматическую коробку передач, которая может переключать до четырех передач одновременно. 
                        Это включало новый рычаг селектора и подрулевые переключатели на рулевом колесе. Также существует доработанная гамма двигателей. 
                        Помимо изменений в характеристиках, все бензиновые двигатели, кроме версии V8, были переведены на прямой впрыск.

                        Как опция предлагалась с марта 2008 года (с октября 2008 ставилась как замена ССС) система навигации с жестким диском CIC была поставлена 
                        ​​с новой системой управления iDrive и может воспроизводить фильмы DVD, когда она неподвижна. Монитор имеет разрешение 1280х480. 
                        Данные могут быть перенесены на внутренний жесткий диск через порт USB в перчаточном ящике; 12 ГБ из 80 ГБ зарезервированы для музыки. 
                        В сентябре 2009 года 5-я серия получила модифицированные наружные зеркала заднего вида для соответствия новым директивам ЕС.
                    </p>     
                </div>
                <div class="tech-info">
                    <div class="row">
                        <p class="bold-text">Общая информация</p>
                        <div class="col-12 disp-flx">                            
                            <div class="col-6">
                                <ul class="info-car-first">
                                    <li class="style-li-first">Тип кузова</li>
                                    <li class="style-li-first">Количество дверей</li>
                                    <li class="style-li-first">Количество мест</li>
                                    <li class="style-li-first">Класс автомобиля</li>
                                    <li class="style-li-first">Расположение руля</li>
                                    <li class="style-li-first">Страна производства</li>
                                    <li class="style-li-first">Года выпуска</li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="info-car-second">
                                    <li class="style-li-second">Седан</li>
                                    <li class="style-li-second">4</li>
                                    <li class="style-li-second">5</li>
                                    <li class="style-li-second">E</li>
                                    <li class="style-li-second">Слево</li>
                                    <li class="style-li-second">Германия</li>
                                    <li class="style-li-second">Июль 2003 по Март 2005</li>
                                </ul>
                            </div>
                        </div>
                        <p class="bold-text">Двигатель</p>
                        <div class="col-12 disp-flx">
                            <div class="col-6">
                                <ul class="info-car-first">
                                    <li class="style-li-first">Объем двигателя, куб.см</li>
                                    <li class="style-li-first">Мощность, л.с/кВт/об.мин</li>
                                    <li class="style-li-first">Крутящий момент, Нм/об.мин</li>
                                    <li class="style-li-first">Тип наддува</li>
                                    <li class="style-li-first">Расположение двигателя</li>
                                    <li class="style-li-first">Расположение цилиндров</li>
                                    <li class="style-li-first">Система подачи топлива</li>
                                    <li class="style-li-first">Клапанов на цилиндр</li>
                                    <li class="style-li-first">Тип топлива</li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="info-car-second">
                                    <li class="style-li-second">2979</li>
                                    <li class="style-li-second">231/170/5900</li>
                                    <li class="style-li-second">300/3500</li>
                                    <li class="style-li-second">Нет</li>
                                    <li class="style-li-second">Спереди, продольно</li>
                                    <li class="style-li-second">L6</li>
                                    <li class="style-li-second">инжектор, распереленный впрыск топлива</li>
                                    <li class="style-li-second">4</li>
                                    <li class="style-li-second">Бензин</li>
                                </ul>
                            </div>
                        </div>
                        <p class="bold-text">Трансмиссия</p>
                        <div class="col-12 disp-flx">
                            <div class="col-6">
                                <ul class="info-car-first">
                                    <li class="style-li-first">Тип КПП</li>
                                    <li class="style-li-first">Тип привода</li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="info-car-second">
                                    <li class="style-li-second">Механика 6 ст., автоматическая 6 ст.</li>
                                    <li class="style-li-second">Задний</li>
                                </ul>
                            </div>
                        </div>
                        <p class="bold-text">Подвеска</p>
                        <div class="col-12 disp-flx">
                            <div class="col-6">
                                <ul class="info-car-first">
                                    <li class="style-li-first">Передняя</li>
                                    <li class="style-li-first"> </li>
                                    <li class="style-li-first">Задняя</li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="info-car-second">
                                    <li class="style-li-second">Армотизационная стойка, двухшаровая подвеска с тяговыми растяжками, поперечный стабилизатор</li>
                                    <li class="style-li-second">Многорычажная на продольных, поперечных, диагональных рычагах, поперечный стабилизатор, винтовая пружина, телескопический амортизатор</li>
                                </ul>
                            </div>
                        </div>
                        <p class="bold-text">Тормозная система</p>
                        <div class="col-12 disp-flx">
                            <div class="col-6">
                                <ul class="info-car-first">
                                    <li class="style-li-first">Передние тормоза</li>
                                    <li class="style-li-first">Задние тормоза</li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="info-car-second">
                                    <li class="style-li-second">Дисковые вентелируемые</li>
                                    <li class="style-li-second">Дисковые</li>
                                </ul>
                            </div>
                        </div>
                        <p class="bold-text">Эксплуатационные показатели</p>
                        <div class="col-12 disp-flx">
                            <div class="col-6">
                                <ul class="info-car-first">
                                    <li class="style-li-first">Разгон до 100 км/ч, с</li>
                                    <li class="style-li-first">Максимальная скорость, км/ч</li>
                                    <li class="style-li-first">Расход, л на 100 км в городском цикле</li>
                                    <li class="style-li-first">Расход, л на 100 км в загородном цикле</li>
                                    <li class="style-li-first">Расход, л на 100 км в смешанном цикле</li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="info-car-second">
                                    <li class="style-li-second">6,9</li>
                                    <li class="style-li-second">250</li>
                                    <li class="style-li-second">14,1</li>
                                    <li class="style-li-second">7,0</li>
                                    <li class="style-li-second">9,5</li>
                                </ul>
                            </div>
                        </div>
                        <p class="bold-text">Прочая информация</p>
                        <div class="col-12 disp-flx">
                            <div class="col-6">
                                <ul class="info-car-first">
                                    <li class="style-li-first">Длинна, мм</li>
                                    <li class="style-li-first">Ширина, мм</li>
                                    <li class="style-li-first">Высота, мм</li>
                                    <li class="style-li-first">Клиренс, мм</li>
                                    <li class="style-li-first">Колесная база, мм</li>
                                    <li class="style-li-first">Колея передних колес, мм</li>
                                    <li class="style-li-first">Колея задний колес, мм</li>
                                    <li class="style-li-first">Рамер шин</li>
                                    <li class="style-li-first">Снаряженная масса, кг</li>
                                    <li class="style-li-first">Полная масса, кг</li>
                                    <li class="style-li-first">Объем багажника, л</li>
                                    <li class="style-li-first">Объем топливного бака, л</li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="info-car-second">
                                    <li class="style-li-second">4841</li>
                                    <li class="style-li-second">1846</li>
                                    <li class="style-li-second">1468</li>
                                    <li class="style-li-second">120</li>
                                    <li class="style-li-second">2888</li>
                                    <li class="style-li-second">1558</li>
                                    <li class="style-li-second">1582</li>
                                    <li class="style-li-second">225/55 R16</li>
                                    <li class="style-li-second">1570</li>
                                    <li class="style-li-second">2055</li>
                                    <li class="style-li-second">560</li>
                                    <li class="style-li-second">70</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">        
        <div class="container footercont">
            <div class="row footerrow">
                <div class="col-lg-3 mb-3 mt-1 footercol">
                    <div class="logo">AutoBiography</div>
                </div>
                <div class="col-6 col-lg-2 mb-3 mt-2 footercol">
                    <ul class="list-unstyled">
                        <li class="mb-2"><a class="footer_link" href="index.php">Главная</a></li>                         
                    </ul>
                </div>
                <div class="col-6 col-lg-3 mb-3 mt-2 footercol">
                    <ul class="list-unstyled">
                        <li class="mb-2"><a class="footer_link" href="#">Политика конфедициальности</a></li>                          
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3 mt-2 footercol">
                    <ul class="list-unstyled">
                        <li class="mb-2"><a class="footer_link" href="#">О нас</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>