<?php require_once "./php/link.php"?>

<!DOCTYPE html>
<html lang="ru">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>База отдыха "Гостевой дом "ШАЛЕ-БЕЛЁ"</title>

      <link rel="stylesheet" href="./css/normalize.css">
      <link rel="stylesheet" href="./css/style.css">
  </head>

  <body>
    <section class="container">
      <header>
        <a href="index.php" style="margin: 0; padding: 0;">
          <img src="./image/logo.png" alt="Логотип" class="image_logo">
        </a>

        <div class="title_logo">БАЗА ОТДЫХА <span class="title_logo_text">"ГОСТЕВОЙ ДОМ "ШАЛЕ-БЕЛЁ"</span></div>

        <button class="openbtn" onclick="openNav()">&#9776;</button>
        <ul class="point-ul-navigate">         
          <li class="point-navigate"><a href="#Main">О НАС</a></li>
          <li class="point-navigate"><a href="#galleri">ГАЛЕРЕЯ</a></li>
          <li class="point-navigate"><a href="price.html">ПРАЙС-ЛИСТ</a></li>
          <li class="point-navigate"><a href="#users">ОТЗЫВЫ</a></li>
          <li class="point-navigate"><a href="#contact">КОНТАКТЫ</a></li>
          <li class="point-navigate"><a href="#">ДОГОВОР АРЕНДЫ</a></li>
        </ul>

          <div id="myLinks">
            <a href="#Main" onclick="openNav()">О НАС</a>
            <a href="#galleri" onclick="openNav()">ГАЛЕРЕЯ</a>
            <a href="price.html" onclick="openNav()">ПРАЙС-ЛИСТ</a>
            <a href="#users" onclick="openNav()">ОТЗЫВЫ</a>
            <a href="#contact" onclick="openNav()">КОНТАКТЫ</a>
            <a href="#" onclick="openNav()">ДОГОВОР АРЕНДЫ</a>
          </div>
      </header>

      <section id="Main" class="container-info">

        <div class="text-type-title">
          <h1>
            <span class="type-anime">Н</span><span class="type-anime">А</span> <span class="type-anime">Ш</span><span class="type-anime">А</span><span class="type-anime">Л</span><span class="type-anime">Е</span><span class="type-anime">-</span><span class="type-anime">Б</span><span class="type-anime">Е</span><span class="type-anime">Л</span><span class="type-anime">Ё</span>
            <br>
            <span class="type"></span>
            <span class="typed-cursor">|</span>
          </h1>
        </div>

        <div>
          <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
          viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
            <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
            </g>
          </svg>
        </div>
      </section>

      <main>
        <section class="info">
          <div class="content-info">
            <div class="col1">
              <h2 style="text-align: center;">ОТДЫХ</h2>

              <p class="text-content-info-sut">
                Шале на озере Белё — это 4 благоустроенные квартиры,<br>
                соответствующие современным стандартам с открытой террасой.<br>
                2 отдельно стоящих домика — Мини шале,<br> 
                состоящие из 2-х номеров с открытой террасой. <br>
                Гостям предлагается:<br>
                — баня;<br>
                — закрытая для посторонних территория базы;<br>
                — детский игровой комплекс;<br>
                — спортплощадка для волейбола и бадминтона;<br>
                — настольные игры, спортинвентарь;<br>
                — закрытая мангальная зона (в любую погоду);<br>
                — летний душ;<br>
                — горячий душ (платный);<br>
                — террасная мебель для отдыха;<br>
                — охраняемая стоянка.<br>
                Гостевой дом ШАЛЕ-БЕЛЁ – Ваше спокойствие охраняет ЧОП «Форт — Енисей».<br>
                Экскурсии по Ширинскому району и по всей Хакасии.<br>
              </p>
            </div>

            <div class="col2">
              <h2 style="text-align: center;">ОЗДОРОВЛЕНИЕ</h2>

              <p class="text-content-info-hp">
                Наш Гостевой дом раположен на берегу озера Белё,<br>
                 уникального своим минеральным составом, сходным с<br>
                  источниками знаменитого курорта Карловы Вары<br>
                   (Чехия), эффективным в лечении нарушения обмена<br>
                    веществ (ожирение, подагра), заболевания суставов и<br>
                     позвоночника (артрозы, артриты, остеохондроз,<br>
                      остеопороз и др.), щитовидной железы. Благодаря<br>
                       расположению лиственных и хвойных пород деревьев по<br>
                        береговой линии озера, создаются уникальные<br>
                         природные условия для ингаляций, очень эффективных<br>
                          в лечении часто болеющих детей и взрослых.
              </p>
            </div>
          </div>

          <a href="price.html">
            <img class="img_price" src="./image/famely.gif" alt="скидка" >
          </a>
        </section>

        <section id="galleri" class="galleri">
          <h2 style="text-align: center;">ГАЛЕРЕЯ</h2>

          <!-- Расширяющийся контейнер изображений -->
          <div class="show">
            <!-- Закрытое изображение -->
            <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>

            <!-- Развернутое изображение -->
            <img id="expandedImg">
          </div>

          <div class="galleri-slider-reverse">
            <button type="button" class="collapsible">Квартира №1, 30 кв. м
              спальня — 4 сп. места и 2 доп., кухня, сан. узел</button>
            <div class="content-galleri">
              <div class="photo-result">
                <img class="img_photo" src="./image/roms/1/1.jpg" alt="" onclick="photoOpen(0)">
                <img class="img_photo" src="./image/roms/1/2.jpg" alt="" onclick="photoOpen(1)">
                <img class="img_photo" src="./image/roms/1/3.jpg" alt="" onclick="photoOpen(2)">
                <img class="img_photo" src="./image/roms/1/4.jpg" alt="" onclick="photoOpen(3)">
                <img class="img_photo" src="./image/roms/1/5.jpg" alt="" onclick="photoOpen(4)">
                <img class="img_photo" src="./image/roms/1/6.jpg" alt="" onclick="photoOpen(5)">
                <img class="img_photo" src="./image/roms/1/7.jpg" alt="" onclick="photoOpen(6)">
                <img class="img_photo" src="./image/roms/1/8.jpg" alt="" onclick="photoOpen(7)">
                <img class="img_photo" src="./image/roms/1/9.jpg" alt="" onclick="photoOpen(8)">
                <img class="img_photo" src="./image/roms/1/10.jpg" alt="" onclick="photoOpen(9)">
                <img class="img_photo" src="./image/roms/1/11.jpg" alt="" onclick="photoOpen(10)">
                <img class="img_photo" src="./image/roms/1/12.jpg" alt="" onclick="photoOpen(11)">
              </div>
            </div>

            <button type="button" class="collapsible">Квартира №2, 30 кв. м
              спальня — 4 сп. места и 2 доп., кухня, сан. узел</button>
            <div class="content-galleri">
              <div class="photo-result">
                <img class="img_photo" src="./image/roms/2/1.jpg" alt="" onclick="photoOpen(12)">
                <img class="img_photo" src="./image/roms/2/2.jpg" alt="" onclick="photoOpen(13)">
                <img class="img_photo" src="./image/roms/2/3.jpg" alt="" onclick="photoOpen(14)">
                <img class="img_photo" src="./image/roms/2/4.jpg" alt="" onclick="photoOpen(15)">
                <img class="img_photo" src="./image/roms/2/5.jpg" alt="" onclick="photoOpen(16)">
                <img class="img_photo" src="./image/roms/2/6.jpg" alt="" onclick="photoOpen(17)">
                <img class="img_photo" src="./image/roms/2/7.jpg" alt="" onclick="photoOpen(18)">
                <img class="img_photo" src="./image/roms/2/8.jpg" alt="" onclick="photoOpen(19)">
              </div>
            </div>

            <button type="button" class="collapsible">Квартира №3, 45 кв. м
              2 спальни по 4 сп. места и 1 доп., кухня, сан. узел</button>
            <div class="content-galleri">
              <div class="photo-result">
                <img class="img_photo" src="./image/roms/3/1.jpg" alt="" onclick="photoOpen(20)">
                <img class="img_photo" src="./image/roms/3/2.jpg" alt="" onclick="photoOpen(21)">
                <img class="img_photo" src="./image/roms/3/3.jpg" alt="" onclick="photoOpen(22)">
                <img class="img_photo" src="./image/roms/3/4.jpg" alt="" onclick="photoOpen(23)">
                <img class="img_photo" src="./image/roms/3/5.jpg" alt="" onclick="photoOpen(24)">
                <img class="img_photo" src="./image/roms/3/6.jpg" alt="" onclick="photoOpen(25)">
                <img class="img_photo" src="./image/roms/3/7.jpg" alt="" onclick="photoOpen(26)">
                <img class="img_photo" src="./image/roms/3/8.jpg" alt="" onclick="photoOpen(27)">
                <img class="img_photo" src="./image/roms/3/9.jpg" alt="" onclick="photoOpen(28)"> 
                <img class="img_photo" src="./image/roms/3/10.jpg" alt="" onclick="photoOpen(29)">
                <img class="img_photo" src="./image/roms/3/11.jpg" alt="" onclick="photoOpen(30)">
              </div>
            </div>

            <button type="button" class="collapsible">Квартира №3-1, 30 кв. м
              спальня — 4 сп. места, кухня, совмещённая с соседней комнатой, сан. узел</button>
            <div class="content-galleri">
              <div class="photo-result">
                <img class="img_photo" src="./image/roms/4/1.jpg" alt="" onclick="photoOpen(31)">
                <img class="img_photo" src="./image/roms/4/2.jpg" alt="" onclick="photoOpen(32)">
                <img class="img_photo" src="./image/roms/4/3.jpg" alt="" onclick="photoOpen(33)">
                <img class="img_photo" src="./image/roms/4/4.jpg" alt="" onclick="photoOpen(34)">
                <img class="img_photo" src="./image/roms/4/5.jpg" alt="" onclick="photoOpen(35)">
                <img class="img_photo" src="./image/roms/4/6.jpg" alt="" onclick="photoOpen(36)">
                <img class="img_photo" src="./image/roms/4/7.jpg" alt="" onclick="photoOpen(37)">
                <img class="img_photo" src="./image/roms/4/8.jpg" alt="" onclick="photoOpen(38)">
              </div>
            </div>

            <button type="button" class="collapsible">Квартира №3-2, 30 кв. м
              спальня — 4 сп. места, кухня, совмещённая с соседней комнатой, сан. узел</button>
            <div class="content-galleri">
              <div class="photo-result">
                <img class="img_photo" src="./image/roms/5/1.jpg" alt="" onclick="photoOpen(39)">
                <img class="img_photo" src="./image/roms/5/2.jpg" alt="" onclick="photoOpen(40)">
                <img class="img_photo" src="./image/roms/5/3.jpg" alt="" onclick="photoOpen(41)">
                <img class="img_photo" src="./image/roms/5/4.jpg" alt="" onclick="photoOpen(42)">
                <img class="img_photo" src="./image/roms/5/5.jpg" alt="" onclick="photoOpen(43)">
                <img class="img_photo" src="./image/roms/5/6.jpg" alt="" onclick="photoOpen(44)">
                <img class="img_photo" src="./image/roms/5/7.jpg" alt="" onclick="photoOpen(45)">
                <img class="img_photo" src="./image/roms/5/8.jpg" alt="" onclick="photoOpen(46)">
              </div>
            </div>

            <button type="button" class="collapsible">Мини-шале
              Новые домики Мини-шале из 2-х номеров, каждый номер по 9 м кв, рассчитан на 2 сп. места и 1 доп. детское.</button>
            <div class="content-galleri">
              <div class="photo-result">
                <img class="img_photo" src="./image/roms/6/1.jpg" alt="" onclick="photoOpen(47)">
                <img class="img_photo" src="./image/roms/6/2.jpg" alt="" onclick="photoOpen(48)">
                <img class="img_photo" src="./image/roms/6/3.jpg" alt="" onclick="photoOpen(49)">
                <img class="img_photo" src="./image/roms/6/4.jpg" alt="" onclick="photoOpen(50)">
                <img class="img_photo" src="./image/roms/6/5.jpg" alt="" onclick="photoOpen(51)">
                <img class="img_photo" src="./image/roms/6/6.jpg" alt="" onclick="photoOpen(52)">
                <img class="img_photo" src="./image/roms/6/7.jpg" alt="" onclick="photoOpen(53)">
                <img class="img_photo" src="./image/roms/6/8.jpg" alt="" onclick="photoOpen(54)">
                <img class="img_photo" src="./image/roms/6/9.jpg" alt="" onclick="photoOpen(55)">
                <img class="img_photo" src="./image/roms/6/10.jpg" alt="" onclick="photoOpen(56)">
              </div>
            </div>

            <button type="button" class="collapsible">С лёгким паром!</button>
            <div class="content-galleri">
              <div class="photo-result">
                <img class="img_photo" src="./image/smoge/1.jpg" alt="" onclick="photoOpen(57)">
                <img class="img_photo" src="./image/smoge/2.jpg" alt="" onclick="photoOpen(58)">
                <img class="img_photo" src="./image/smoge/3.jpg" alt="" onclick="photoOpen(59)">
              </div>
            </div>

            <button type="button" class="collapsible">Инфраструктура
              Приятный досуг на нашей территории</button>
            <div class="content-galleri">
              <div class="photo-result">
                <img class="img_photo" src="./image/info/1.jpg" alt="" onclick="photoOpen(60)">
                <img class="img_photo" src="./image/info/2.jpg" alt="" onclick="photoOpen(61)">
                <img class="img_photo" src="./image/info/3.jpg" alt="" onclick="photoOpen(62)">
                <img class="img_photo" src="./image/info/4.jpg" alt="" onclick="photoOpen(63)">
                <img class="img_photo" src="./image/info/5.jpg" alt="" onclick="photoOpen(64)">
                <img class="img_photo" src="./image/info/6.jpg" alt="" onclick="photoOpen(65)">
                <img class="img_photo" src="./image/info/7.jpg" alt="" onclick="photoOpen(66)">
                <img class="img_photo" src="./image/info/8.jpg" alt="" onclick="photoOpen(67)">
                <img class="img_photo" src="./image/info/9.jpg" alt="" onclick="photoOpen(68)">
                <img class="img_photo" src="./image/info/10.jpg" alt="" onclick="photoOpen(69)">
                <img class="img_photo" src="./image/info/11.jpg" alt="" onclick="photoOpen(70)">
                <img class="img_photo" src="./image/info/12.jpg" alt="" onclick="photoOpen(71)">
                <img class="img_photo" src="./image/info/13.jpg" alt="" onclick="photoOpen(72)">
                <img class="img_photo" src="./image/info/14.jpg" alt="" onclick="photoOpen(73)">
                <img class="img_photo" src="./image/info/15.jpg" alt="" onclick="photoOpen(74)">
                <img class="img_photo" src="./image/info/16.jpg" alt="" onclick="photoOpen(75)">
                <img class="img_photo" src="./image/info/17.jpg" alt="" onclick="photoOpen(76)">
                <img class="img_photo" src="./image/info/18.jpg" alt="" onclick="photoOpen(77)">
                <img class="img_photo" src="./image/info/19.jpg" alt="" onclick="photoOpen(78)">
                <img class="img_photo" src="./image/info/20.jpg" alt="" onclick="photoOpen(79)">
                <img class="img_photo" src="./image/info/21.jpg" alt="" onclick="photoOpen(80)">
                <img class="img_photo" src="./image/info/22.jpg" alt="" onclick="photoOpen(81)">
              </div>
            </div>

            <button type="button" class="collapsible">Наши виды
              Красивая природа, свежий воздух, теплое озеро и многое другое ждет вас на нашем озере Белё</button>
            <div class="content-galleri">
              <div class="photo-result">
                <img class="img_photo" src="./image/viewIMG/1.jpg" alt="" onclick="photoOpen(82)">
                <img class="img_photo" src="./image/viewIMG/2.jpg" alt="" onclick="photoOpen(83)">
                <img class="img_photo" src="./image/viewIMG/3.jpg" alt="" onclick="photoOpen(84)">
                <img class="img_photo" src="./image/viewIMG/4.jpg" alt="" onclick="photoOpen(85)">
                <img class="img_photo" src="./image/viewIMG/5.jpg" alt="" onclick="photoOpen(86)">
                <img class="img_photo" src="./image/viewIMG/6.jpg" alt="" onclick="photoOpen(87)">
                <img class="img_photo" src="./image/viewIMG/7.jpg" alt="" onclick="photoOpen(88)">
                <img class="img_photo" src="./image/viewIMG/8.jpg" alt="" onclick="photoOpen(89)">
                <img class="img_photo" src="./image/viewIMG/9.jpg" alt="" onclick="photoOpen(90)">
                <img class="img_photo" src="./image/viewIMG/10.jpg" alt="" onclick="photoOpen(91)">
                <img class="img_photo" src="./image/viewIMG/11.jpg" alt="" onclick="photoOpen(92)">
                <img class="img_photo" src="./image/viewIMG/12.jpg" alt="" onclick="photoOpen(93)">
                <img class="img_photo" src="./image/viewIMG/13.jpg" alt="" onclick="photoOpen(94)">
                <img class="img_photo" src="./image/viewIMG/14.jpg" alt="" onclick="photoOpen(95)">
                <img class="img_photo" src="./image/viewIMG/15.jpg" alt="" onclick="photoOpen(96)">
                <img class="img_photo" src="./image/viewIMG/16.jpg" alt="" onclick="photoOpen(97)">
                <img class="img_photo" src="./image/viewIMG/17.jpg" alt="" onclick="photoOpen(98)">
                <img class="img_photo" src="./image/viewIMG/18.jpg" alt="" onclick="photoOpen(99)">
                <img class="img_photo" src="./image/viewIMG/19.jpg" alt="" onclick="photoOpen(100)">
                <img class="img_photo" src="./image/viewIMG/20.jpg" alt="" onclick="photoOpen(101)">
                <img class="img_photo" src="./image/viewIMG/21.jpg" alt="" onclick="photoOpen(102)">
              </div>
          </div>
        </section>

        <section id="contact" class="contact">
          <h2 style="text-align: center;">КОНТАКТЫ</h2>

          <div class="map">
            <div class="map-yandex">
              <div style="position:relative; overflow:hidden; width: 60%; margin-right: 10px;">
                <a href="https://yandex.ru/maps/org/belyo_kholl/97848100865/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">
                  Белё-Холл
                </a>
                <a href="https://yandex.ru/maps/11340/republic-of-khakassia/category/resort/184106400/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">База, дом отдыха в Республике Хакасия</a>
                <iframe src="https://yandex.ru/map-widget/v1/?l=sat&ll=90.189350%2C54.699320&mode=search&oid=97848100865&ol=biz&sctx=ZAAAAAgBEAAaKAoSCZW4jnHFu1RAEdap8j0jhUtAEhIJfEYiNIKNzz8R0xbX%2BEz2sz8iBgABAgMEBSgKOABAsI8GSAFqAnJ1nQHNzEw9oAEAqAEAvQFZODEiwgEGgZDOwewCggIR0YjQsNC70LUt0LHQtdC70LWKAgCSAgYxMDA4MzWaAgxkZXNrdG9wLW1hcHM%3D&sll=90.189350%2C54.699320&sspn=0.015407%2C0.004915&text=%D1%88%D0%B0%D0%BB%D0%B5-%D0%B1%D0%B5%D0%BB%D0%B5&z=17" width="100%" height="600px" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
              </div>

              <div style="width:560px; height:800px; overflow:hidden; position:relative;">
                <iframe 
                  style="width:100%; height:100%; border:1px solid #e6e6e6; border-radius:8px; box-sizing:border-box" 
                  src="https://yandex.ru/maps-reviews-widget/97848100865?comments">
                </iframe>
                  <a href="https://yandex.ru/maps/org/belyo_kholl/97848100865/" target="_blank" style="box-sizing:border-box; text-decoration:none; color:#b3b3b3; font-size:10px; font-family:YS Text,sans-serif; padding:0 20px; position:absolute; bottom:8px; width:100%; text-align:center; left:0; overflow:hidden; text-overflow:ellipsis; display:block; max-height:14px; white-space:nowrap; padding:0 16px; box-sizing:border-box">
                    Белё-Холл на карте Республики Хакасия — Яндекс Карты
                  </a>
              </div>
            </div>

            <p class="map-text">
              Автомобилем: по трассе М-54, по дороге Красноярск - Новосёлово, а также по трассе М-53, по дороге Красноярск - Ачинск - Ужур - Шира - оз. БЕЛЁ. Гостевой дом ШАЛЕ - БЕЛЁ, распологается в 6 км. от съезда трассы М-53.
              Очень удобное расположение Шале-Белё предоставляет возможность посетить соседние озёра
              Тел. для справок и бронирования номеров: <span style="font-weight: 700; color: black;">89503053564, 89831976626</span>
            </p>
          </div>

          <div class="user" id="users">
            <h2 style="text-align: center;">ОТЗЫВЫ</h2>

            <form class="user-form" method="post" action="./php/server.php">
              <div class="row">
                <div class="col-25">
                  <label for="fname" style="font-weight: 700;">Имя</label>
                </div>
                <div class="col-75">
                  <input type="text" id="firstname" name="user" placeholder="Ваше имя!!!" required>
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="email" style="font-weight: 700;">Почта</label>
                </div>
                <div class="col-75">
                  <input type="text" id="email" name="email" placeholder="Ваша почта!!!" required>
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="title_user" style="font-weight: 700;">Загаловок</label>
                </div>
                <div class="col-75">
                  <input type="text" id="title_user" name="title" placeholder="Загаловок отзыва!!!" required>
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="subject" style="font-weight: 700;">Отзыв</label>
                </div>
                <div class="col-75">
                  <textarea id="subject" name="text" placeholder="Написать отзыв" style="height:200px" required></textarea>
                </div>
              </div>
              <div class="row">
                <input type="submit" value="Отправить">
              </div>
            </form>
            
            <?php
                    $data = connect();
                    $sql = "SELECT * FROM user";
                    $result = $data -> query($sql);
            ?>
              <table>
                <tr style="padding: 15px;">
                  <th>Имя</th>
                  <th>Отзыв</th>
                  <th>Дата</th>
                </tr>
                <?php foreach($result as $key):?>
                  <tr>
                    <th style="padding: 15px;"><?=$key["name"]?></th>
                    <th style="padding: 15px;"><?=$key["text"]?></th>
                    <th style="padding: 15px;"><?=$key["data"]?></th>
                  </tr>
                <?php endforeach?>
              </table>
          </div>
        </section>
      </main>
      
      <footer class="footer">
        <a href="#Main" style="margin: 0; padding: 0;">
          <img src="./image/logo.png" alt="Логотип" class="image_logo">
        </a>

        <div class="title_logo_header title_logo">БАЗА ОТДЫХА <span class="title_logo_text">"ГОСТЕВОЙ ДОМ "ШАЛЕ-БЕЛЁ"</span></div>

        <a href="#Main" class="footer-point">В НАЧАЛО</a>
      </footer>
    </section> 

    <script src="./js/burger.js"></script>
    <script src="./js/galleri-content.js"></script>
    <script src="./js/photo.js"></script>
    <script src="./js/text-title.js"></script>
    <script src="./js/script.js"></script>
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LcwWP0pAAAAAL8VaryuFi8jUjq4Q3-pT5GFnBmI"></script>  
  </body>
</html>