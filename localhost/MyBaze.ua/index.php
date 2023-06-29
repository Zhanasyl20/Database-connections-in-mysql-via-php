<?php 

include "databases.php";

$result = mysqli_query($link,"SELECT * FROM `massage`");


 ?>


<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <title>База!</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    
<header>
<nav>
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="menu">
                      <ul>
                          <?php 
                             while($Movie = mysqli_fetch_assoc($result))
                             {
                                 ?>
                                 <li><a href="#"> <?php echo $Movie['titel']; ?></a></li>
                                 <?php
                             }
                           ?>
                      </ul>
                 </div>
             </div>
         </div>
     </div>
</nav>    

</header>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="mail-block"></div>
                <div class="row">
                    <div class="col">
                        <div class="image">
                            <img src="img/img_01.jpg" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="titel">
                            <h3>Ходячие мертвецы: Мертвый город (сериал 2023)</h3>
                        </div>
                        <div class="text">
                            <h3>Мэгги и Ниган отправляются в постапокалиптический Манхэттен, давным-давно отрезанный от материка. Разрушающийся город наполнен мертвецами и жителями, которые сделали Нью-Йорк своим собственным миром, полным анархии, опасности, красоты и ужаса.</h3>
                        </div>
                    </div>
                </div>
            </div>
            <h3>-------------------------------------------------------------------------------------------------------------------</h3>
            <div class="col-md-6">
                <div class="mail-block"></div>
                <div class="row">
                    <div class="col">
                        <div class="image">
                            <img src="img/img_02.jpg" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="titel">
                            <h3>Колесо времени</h3>
                        </div>
                        <div class="text">
                            <h3>События фэнтезийного сериала «Колесо времени» разворачиваются в маленьком американском городке Эмондов Луг. Спокойная жизнь в провинции заканчивается, когда туда приезжают трое странных чужестранцев: седой менестрель Том Меррилин, прекрасная леди Морейн и ее страж Лан. Все они служат в секретной организации «Айз Седай», которая тщательно следит за событиями в параллельном мире. Том Меррилин уверен, что силы тьмы уже в этом городе и охотятся за тремя местными подростками, один из которых — реинкарнация одного древнего могущественного божества. Согласно пророчеству, вернувшись в мир, это божество попытается его спасти, но из-за вмешательства злых сил наоборот полностью уничтожит.</h3>
                        </div>
            <h3>-------------------------------------------------------------------------------------------------------------------</h3>
                        <div class="col-md-6">
                <div class="mail-block"></div>
                <div class="row">
                    <div class="col">
                        <div class="image">
                            <img src="img/img_03.jpg" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="titel">
                            <h3>Падение Ордена</h3>
                        </div>
                        <div class="text">
                            <h3>«Паде́ние О́рдена», или «Падение ры́царей» — американо-чешский исторический телесериал в жанре остросюжетной драмы, премьера которого состоялась 6 декабря 2017 года на телеканале History. 7 мая 2020 года сериал был закрыт после двух сезонов.</h3>
                        </div>
                    </div>
                </div>
            </div>
            <h3>-------------------------------------------------------------------------------------------------------------------</h3>
                    <div class="col-md-6">
                <div class="mail-block"></div>
                <div class="row">
                    <div class="col">
                        <div class="image">
                            <img src="img/img_04.jpg" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="titel">
                            <h3>Тёмный кристалл: Эпоха сопротивления</h3>
                        </div>
                        <div class="text">
                            <h3>«Тёмный кристалл: Эпоха сопротивления» — американский кукольный веб-сериал жанра приключения и тёмное фэнтези, основанный на фильме Джима Хенсона 1982 года — «Тёмный кристалл». Сериал подробнее исследует вселенную данного фильма, выступая одновременно его приквелом.</h3>
                        </div>
                    </div>
                </div>
            </div>         
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<Movie>
    

</Movie>

    <script>
    var userLang = navigator.language || navigator.userLanguage;
    var userLang_detected = userLang.toLowerCase();
    if (userLang_detected != 'ru-ru' && userLang_detected != 'ru') {
        document.title = 'Welcome!';
        document.getElementById('t1').innerHTML = 'Welcome!';
        document.getElementById('t2').innerHTML = 'Open Server Panel is running ;-)';
        document.getElementById('t3').innerHTML = 'User\'s manual <i class="right"></i>';
    }
    </script>
</body>

</html>
