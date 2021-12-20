<?php

/* @var $this yii\web\View */

?>
<div class="site-index">
    <div class="carousel">
        <?php foreach ([1,2,3,4,5,6] as $slide) { ?>
            <div>
                <img class="slider-image" src="https://picsum.photos/1000/420?random=<?=$slide?>">
            </div>
        <?php } ?>
    </div>

    <div class="articles">

        <div class="row">
            <?php foreach ([1,2,3] as $article) { ?>
                <div class="article col-lg-4">
                <h2>Heading</h2>

                    <img class="article-image" src="https://picsum.photos/200/70?random=<?=$article?>">

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <?php } ?>
        </div>
    </div>



    <div class="fact">
        <div class="fact-text">
            <h2 class="fact-header">Факт недели:</h2>
            <h3 class="fact-sub-header">Чем серные бани в Тбилиси отличаются от обычных?</h3>
            <button class="fact-button">Узнать подробнее</button>
        </div>
        <div class="fact-mask"></div>
    </div>

    <div>
        <h1 class="before-countries" style="margin-left: 30px;margin-right: 30px;">
            Выберите страну или регион, в которой вы бы хотели побывать!
            Вы найдёте много интересного в наших статьях про путешествия!
        </h1>
    </div>

    <table class="countries">
        <tr>
            <td class="big-btn-turkey">
                <div class="countries-mask">
                    <h3>Турция</h3>
                </div>
            </td>
            <td class="big-btn-iran" rowspan="2">
                <div class="countries-mask">
                    <h1>Иран</h1>
                </div>
            </td>
        </tr>
        <tr>
            <td class="big-btn-egypt">
                <div class="countries-mask">
                    <h2>Египет</h2>
                </div>
            </td>
        </tr>
    </table>

    <table class="countries">
        <tr>
            <td class="big-btn-iran" rowspan="2"
                style="background-image: url('/img/georgia.jpg');background-position: inherit;">
                <div class="countries-mask">
                    <h1>Грузия</h1>
                </div>
            </td>
            <td class="big-btn-turkey" style="background-image: url('/img/erevan.jpeg')">
                <div class="countries-mask">
                    <h3>Армения</h3>
                </div>
            </td>
        </tr>
        <tr>
            <td class="big-btn-egypt"
                style="background-image: url('/img/osetia.jpg');background-position: inherit;">
                <div class="countries-mask">
                    <h2>Кавказ</h2>
                </div>
            </td>
        </tr>
    </table>

    <div class="articles">

        <div class="row">
            <?php foreach ([4,5,6] as $article) { ?>
                <div class="article col-lg-4">
                    <h2>Heading</h2>

                    <img class="article-image" src="https://picsum.photos/200/70?random=<?=$article?>">

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.</p>

                    <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
                </div>
            <?php } ?>
        </div>
    </div>

</div>

<script>
    $('.carousel').slick({
        slidesToShow: 1,
        dots:true,
        centerMode: true,
        autoplay: true,
        autoplaySpeed: 4000,
    });
</script>