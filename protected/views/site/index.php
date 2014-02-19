<section class="index">
<article class="in_scrollspy action" id="main">
    <div class="centrator">
        <p class="action-title">
            <span class="big-tit">Уютные коттеджи</span>
            <span class="mini-tit"> на заповедном берегу Волги</span>
        </p>

        <div class="act-price">
            <div>
                <span class="active">2000 р</span>
                <span class="no-price">вместо</span>

                <div class="no-price hr">
                    <hr>
                    4000p
                </div>
                <span class="no-price">в будни</span>
            </div>
            <div>
                <span class="active">3000 р</span>
                <span class="no-price">вместо</span>
                <span class="no-price hr"><hr>6000p</span>
                <span class="no-price">в выходные!</span>
            </div>
        </div>
        <div class="action-bg">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/i/action-bg.jpg"/>
        </div>
        <div class="window">
            <div class="w_info">
                <p>Подайте заявку прямо</p>

                <p>сейчас и получите скидку</p>

                <p>50% на вторые сутки!</p>
            </div>
            <div class="error-field">
                <p class="error-text">Поле обязательно для заполнения!</p>
                <input type="text" class="default-field" placeholder="*Ваше имя"/>
            </div>
            <div>
                <p class="error-text hidden">Поле обязательно для заполнения!</p>
                <input type="text" class="default-field" placeholder="*Ваш телефон"/>
            </div>

            <p class="inp_descr">*Ваши данные в безопасности</p>

            <button class="button reservd"></button>
        </div>
        <div class="anchor"></div>

        <!-- Modal -->
        <div id="reservd-modal" class="modal fade" tabindex="1" data-width="360">
            <div class="modal-content">
                <button type="button" class="close btn-close" data-dismiss="modal" aria-hidden="true"></button>
                <div class="anchor"></div>
                <div class="modal-body">
                    <h4>Заявка отправлена!</h4>

                    <p class="">Наш менеджер свяжется с вами
                        в течении 15ти минут и ответит
                        на все ваши вопросы</p>
                </div>
            </div>
        </div>
        <div class="anchor"></div>
    </div>
</article>
<article class="in_scrollspy about" id="about">
    <div class="centrator">
        <div class="container-block">
            <h1>О базе отдыха Илеть</h1>
            <ul class="abt-ul">
                <li>
                    <div class="abt-icon abt-icon-1"></div>
                    <p>На нашей базе есть
                        волейбольная площадка и футбольное поле!</p>
                </li>
                <li>
                    <div class="abt-icon abt-icon-4"></div>
                    <p>Дома полностью отапливаемы и в них тепло!</p>
                </li>
                <li>
                    <div class="abt-icon abt-icon-2"></div>
                    <p>На территории базы имеется детская игровая зона.</p>
                </li>
                <li>
                    <div class="abt-icon abt-icon-5"></div>
                    <p>В каждом домике есть большой зал для застолья, кухня, бытовые кухонные приборы, душевая
                        кабина</p>
                </li>
                <li>
                    <div class="abt-icon abt-icon-3"></div>
                    <p>А также на нашей базе соверешенно бесплатная охраняемая стоянка.</p>
                </li>
                <li>
                    <div class="abt-icon abt-icon-6"></div>
                    <p>На территории базы имеется баня и переносные мангалы!</p>
                </li>
            </ul>
        </div>
    </div>
    <div class="anchor"></div>
</article>
<article class="in_scrollspy" id="wherewe">
    <div class="centerator">
        <div class="container-block">
            <div class="picterform">
                <form class="ask-form">
                    <h2 class="d-green">Появился вопрос? Задай!</h2>
                    <input class="input-name" placeholder="Введите ваше имя и вопрос" type="text"/>

                    <div class="input-phone">
                        <div>
                            <input placeholder="Телефон" type="text"/>
                        </div>
                    </div>
                    <div class="input-mail">
                        <div>
                            <input placeholder="E-mail" type="text"/>
                        </div>
                    </div>
                    <button type="button" class="ask-btn"></button>
                </form>
            </div>
        </div>

        <!-- Modal -->
        <div id="ask-modal" class="modal fade" tabindex="1" data-width="360">
            <div class="modal-content">
                <button type="button" class="close btn-close" data-dismiss="modal" aria-hidden="true"></button>
                <div class="anchor"></div>
                <div class="modal-body">
                    <h4>Вопрос отправлен!</h4>

                    <p class="">Наш менеджер свяжется с вами
                        в течении 15ти минут.</p>
                </div>
            </div>
        </div>
        <div class="anchor"></div>
    </div>
    <div class="anchor"></div>
    <div class="reviews">
        <div class="centrator">
            <div class="container-block">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/i/dashed.png"/>

                <div class="city">
                    <div class="city-title">
                        <div></div>
                        <h2>Близлежащие города</h2>
                    </div>
                    <div class="city-descr">
                    <span class="d-gray">Близкое расстояние от таких городов как:<br>
                    Казань</span><span class="gray">(70км),</span> <span class="d-gray">Волжск</span>
                        <span class="gray">(25км),</span> <span class="d-gray">Йошкар-Ола и Чебоксары</span><span
                            class="gray"> (80 км)</span>
                    </div>
                    <div class="city-map">
                        <a href="#">подробная карта</a>
                    </div>
                </div>
                <div class="reviews-box">
                    <h2>Отзывы <span>отдохнувших у нас</span></h2>

                    <div id="myCarousel" class="carousel comment_wrapp">
                        <div class="carousel-inner">
                            <div class="active item">
                                <div class="comment">
                                    Если честно, это единственные курсы которые я прошла до конца, раньше я ходила в
                                    художественную
                                    школу, но не закончила ее, так как мне было не интересно заниматься одним и тем же
                                    делом
                                    все
                                    время,
                                    училась на курсах дизайнера, тоже ничего не вышло. А фото — это то, что меня
                                    вдохновило
                                    по
                                    полной
                                    программе! Галия, огромное спасибо тебе за такие чудесные курсы, за такое здоровское
                                    время,
                                    которое
                                    мы с тобой провели. Спасибо!
                                </div>
                                <div class="avatar"></div>
                                <div class="reviews-info">
                                    <p class="reviews-name">Понтелеймон Третьяковскийийий,</p>

                                    <p class="reviews-city">Казань</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="comment">
                                    1
                                </div>
                                <div class="avatar"></div>
                                <div class="reviews-info">
                                    <p class="reviews-name">Asdsd asdasd,</p>

                                    <p class="reviews-city">Казань</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="comment">
                                    2
                                </div>
                                <div class="avatar"></div>
                                <div class="reviews-info">
                                    <p class="reviews-name">sdfsd sdfsdf,</p>

                                    <p class="reviews-city">dfsdf</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control left arrow-left" href="#myCarousel" data-slide="prev"></a>
                        <a class="carousel-control right arrow-right" href="#myCarousel" data-slide="next"></a>
                    </div>
                    <button class="add_review"></button>
                    <div class="anchor"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="review-modal" class="modal fade modal-zakaz" tabindex="1" data-width="auto">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <div class="anchor"></div>
            <div class="modal-body review-modal">
                <h3 class="modal-title">Добавить отзыв</h3>

                <dl class="dl-horizontal">
                    <dt>ФИО<span class="required">*</span></dt>
                    <dd><input class="input-fio" type="text"/></dd>
                    <dt>Отзыв</dt>
                    <dd><textarea></textarea></dd>
                </dl>
                <button class="add-btn"></button>
            </div>
        </div>
    </div>
    <div class="anchor"></div>
</article>
<article id="ourhome" class="in_scrollspy">
<div class="centrator cottage">
    <div class="container-block">
        <h2>Наши коттеджи</h2>
        <ul class="cottages-ul">
            <li>
                <div class="cottages-wrapp">
                    <div>
                        <h3>Коттедж № 1</h3>

                        <p>Просторный коттедж для шумных компаний.</p>
                        <ul class="cott-descr cott-descr-marg">
                            <li>Большой зал для застолья.</li>
                            <li>12 спальных мест</li>
                            <li>Кухонные приборы, бытовая техника</li>
                        </ul>
                        <div class="cot-gallery">
                            <div class="fg-template">
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/i/gallery/full-gallery1.png"
                                   rel="prettyPhoto[gallery2]">
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/i/gallery/gallery1.png"/>
                                </a>
                            </div>
                            <div class="fg-template">
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/i/gallery/full-gallery1.png"
                                   rel="prettyPhoto[gallery2]">
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/i/gallery/gallery2.png"/>
                                </a>
                            </div>
                            <div class="fg-template">
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/i/gallery/full-gallery1.png"
                                   rel="prettyPhoto[gallery2]">
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/i/gallery/gallery3.png"/>
                                </a>
                            </div>
                        </div>
                        <div class="pagination"></div>


                        <button class="cot-reservd-btn cot-reservd-pos home-btn" type="button"></button>
                    </div>
                </div>
            </li>
            <li>
                <div class="cottages-wrapp">
                    <div>
                        <h3>Коттедж № 2</h3>

                        <div>Идеально подходит для влюбленной пары или небольшой компании.</div>
                        <div>В доме есть:</div>
                        <ul class="cott-descr">
                            <li>душевая кабина</li>
                            <li>оборудованная кухня</li>
                            <li>9 спальных мест</li>
                        </ul>
                        <div class="cot-gallery">
                            <div class="fg-template">
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/i/gallery/full-gallery1.png"
                                   rel="prettyPhoto[gallery2]">
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/i/gallery/gallery1.png"/>
                                </a>
                            </div>
                            <div class="fg-template">
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/i/gallery/full-gallery1.png"
                                   rel="prettyPhoto[gallery2]">
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/i/gallery/gallery2.png"/>
                                </a>
                            </div>
                            <div class="fg-template">
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/i/gallery/full-gallery1.png"
                                   rel="prettyPhoto[gallery2]">
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/i/gallery/gallery3.png"/>
                                </a>
                            </div>
                        </div>
                        <div class="pagination"></div>


                        <button class="cot-reservd-btn cot-reservd-pos home-btn" type="button"></button>
                    </div>
                </div>
            </li>
            <li>
                <div class="cottages-wrapp">
                    <div>
                        <h3>Коттедж № 3</h3>

                        <p>Просторный коттедж для шумных компаний.</p>
                        <ul class="cott-descr  cott-descr-marg">
                            <li>Большой зал для застолья.</li>
                            <li>12 спальных мест</li>
                            <li>Кухонные приборы, бытовая техника</li>
                        </ul>
                        <div class="cot-gallery">
                            <div class="fg-template">
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/i/gallery/full-gallery1.png"
                                   rel="prettyPhoto[gallery2]">
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/i/gallery/gallery1.png"/>
                                </a>
                            </div>
                            <div class="fg-template">
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/i/gallery/full-gallery1.png"
                                   rel="prettyPhoto[gallery2]">
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/i/gallery/gallery2.png"/>
                                </a>
                            </div>
                            <div class="fg-template">
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/i/gallery/full-gallery1.png"
                                   rel="prettyPhoto[gallery2]">
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/i/gallery/gallery3.png"/>
                                </a>
                            </div>
                        </div>
                        <div class="pagination"></div>

                        <button class="cot-reservd-btn cot-reservd-pos home-btn" type="button"></button>
                    </div>
                </div>
            </li>
            <li>
                <div class="cottages-wrapp">
                    <div>
                        <h3>Коттедж № 4</h3>

                        <p>Просторный коттедж для шумных компаний.</p>
                        <ul class="cott-descr cott-descr-marg">
                            <li>Большой зал для застолья.</li>
                            <li>12 спальных мест</li>
                            <li>Кухонные приборы, бытовая техника</li>
                        </ul>
                        <div class="cot-gallery">
                            <div class="fg-template">
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/i/gallery/full-gallery1.png"

                                <div class="fg-template">
                                    <a href="<?php echo Yii::app()->request->baseUrl; ?>/i/gallery/full-gallery1.png"
                                       rel="prettyPhoto[gallery2]">
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/i/gallery/gallery2.png"/>
                                    </a>
                                </div>
                                <div class="fg-template">
                                    <a href="<?php echo Yii::app()->request->baseUrl; ?>/i/gallery/full-gallery1.png"
                                       rel="prettyPhoto[gallery2]">
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/i/gallery/gallery3.png"/>
                                    </a>
                                </div>
                            </div>
                            <div class="pagination"></div>

                            <button class="cot-reservd-btn cot-reservd-pos home-btn" type="button"></button>
                        </div>
                    </div>
            </li>
            <li>
                <div class="cottages-wrapp">
                    <div>
                        <h3>Коттедж № 5</h3>

                        <p>Просторный коттедж для шумных компаний.</p>
                        <ul class="cott-descr  cott-descr-marg">
                            <li>Большой зал для застолья.</li>
                            <li>12 спальных мест</li>
                            <li>Кухонные приборы, бытовая техника</li>
                        </ul>
                        <div class="cot-gallery">
                            <div class="fg-template">
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/i/gallery/full-gallery1.png"
                                   rel="prettyPhoto[gallery2]">
                                    <img
                                        src="<?php echo Yii::app()->request->baseUrl; ?>/i/gallery/gallery1.png"/>
                                </a>
                            </div>
                            <div class="fg-template">
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/i/gallery/full-gallery1.png"
                                   rel="prettyPhoto[gallery2]">
                                    <img
                                        src="<?php echo Yii::app()->request->baseUrl; ?>/i/gallery/gallery2.png"/>
                                </a>
                            </div>
                            <div class="fg-template">
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/i/gallery/full-gallery1.png"
                                   rel="prettyPhoto[gallery2]">
                                    <img
                                        src="<?php echo Yii::app()->request->baseUrl; ?>/i/gallery/gallery3.png"/>
                                </a>
                            </div>
                        </div>
                        <div class="pagination"></div>

                        <button class="cot-reservd-btn cot-reservd-pos home-btn" type="button"></button>
                    </div>
                </div>
            </li>


        </ul>
    </div>
</div>

<!-- Modal -->
<div id="home-modal" class="modal fade modal-zakaz" tabindex="1" data-width="auto">
    <div class="modal-content">
        <button type="button" class="close review_close" data-dismiss="modal" aria-hidden="true"></button>
        <div class="anchor"></div>
        <div class="modal-body review-modal">
            <h3 class="modal-title">Форма заказа</h3>

            <dl class="dl-horizontal">
                <dt>Коттедж №<span class="required">*</span></dt>
                <dd>
                    <select>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </dd>
                <dt>ФИО<span class="required">*</span></dt>
                <dd><input class="input-fio" type="text"/></dd>
                <dt>Телефон<span class="required">*</span></dt>
                <dd><input type="text"/></dd>
                <dt>E-mail</dt>
                <dd><input type="text"/></dd>
                <dt>Дата бронирования<span class="required">*</span></dt>
                <dd><input type="text"/></dd>

            </dl>
            <button class="cot-reservd-btn cot-reservd-pos-2"></button>
        </div>
    </div>
</div>
<div class="anchor"></div>
</article>

<article class="in_scrollspy centrator calendar" id="reservation">
    <div class="nadstroika">
        <div class="container-block">
            <h2>Узнай свободен ли домик?</h2>
            <h4>Календарь бронирования</h4>

            <div class="custom-calendar-wrap custom-calendar-full">
                <div class="custom-header clearfix">
                    <h3 class="custom-month-year">
                        <span id="custom-month" class="custom-month"></span>
                        <span id="custom-year" class="custom-year"></span>
                        <nav>
                            <span id="custom-prev" class="custom-prev"></span>
                            <span id="custom-next" class="custom-next"></span>
                        </nav>
                    </h3>
                    <div class="clips clips-left"></div>
                    <div class="clips clips-right"></div>
                </div>
                <div id="calendar" class="fc-calendar-container"></div>
                <div class="house-comment">
                    <div class="house-img-free"></div>
                    <span>коттедж свободен</span>
                    <div class="house-img-full"></div>
                    <span>коттедж занят</span>
                </div>
                <div class="calendar-shawdow"><span></span></div>
            </div>
        </div>
    </div>
    <div class="anchor"></div>
</article>

<article class="in_scrollspy" id="footer">
    <div class="footer-contacts">
        <div class="centrator">

            <ul class="head-ul">
                <li class="logo">
                    <a href="/#main" id="linklogo">
                        <div class="logo-img"></div>
                        <div class="logo-text">
                            <h3 class="turquoise">База отдыха <b>Илеть</b></h3>

                            <h3 class="d-turquoise">в Марий Эл</h3>
                        </div>
                    </a>
                </li>
                <li>
                </li>
                <li class="contacts">
                    <h2>+7 (962) 561-67-39</h2>

                    <button class="button callback-bottom"></button>
                </li>
                <li class="helper"></li>
            </ul>

            <!-- Modal -->
            <div id="callback-modal-bottom" class="modal callback-modal" tabindex="1" data-width="300">
                <div class="modal-content">
                    <button type="button" class="close btn-close" data-dismiss="modal" aria-hidden="true"></button>
                    <div class="anchor"></div>
                    <div class="modal-body">
                        <h4>Оставьте номер,</h4>

                        <p class="callback-title">мы перезвоним Вам сами</p>

                        <div class="error-field">
                            <p class="error-text">Поле обязательно для заполнения!</p>
                            <input type="text" placeholder="*Ваше имя" class=""/>
                        </div>
                        <div class="error-text">
                            <p class="hidden">Поле обязательно для заполнения!</p>
                            <input type="text" placeholder="*Ваш телефон" class=""/>
                        </div>
                        <button class="callback-modal-btn"></button>
                    </div>
                    <div class="bottom-link"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-partners">
        <div class="centrator">
            <div class="partners-left">
                <span>Наши партнеры:</span>

                <div class="sport_academy"></div>
                <div class="volg_travel"></div>
                <div class="pingvin"></div>
            </div>
            <div class="partners-right">
                <a class="vk" href="#">
                    <div></div>
                </a>
                <a class="inst" href="#">
                    <div></div>
                </a>

                <p>Сайт разработан “Там то там то”</p>

                <p>&copy; 2014</p>

            </div>
            <div class="anchor"></div>
        </div>
    </div>

</article>

</section>


<script type="text/javascript">
    //    $('.carousel').carousel();

    var codropsEvents = <?php echo $datapicks; ?>;

    $(function () {

        var cal = $('#calendar').calendario({
                onDayClick: function ($el, $contentEl, dateProperties) {
                    onDayClickUser($el, dateProperties);
                },
                caldata: codropsEvents
            }),
            $month = $('#custom-month').html(cal.getMonthName()),
            $year = $('#custom-year').html(cal.getYear());

        $('#custom-next').on('click', function () {
            cal.gotoNextMonth(updateMonthYear);
        });
        $('#custom-prev').on('click', function () {
            cal.gotoPreviousMonth(updateMonthYear);
        });

        function updateMonthYear() {
            $month.html(cal.getMonthName());
            $year.html(cal.getYear());
        }


    });


    $('#myModal').modal('hide');


</script>