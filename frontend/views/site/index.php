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
            <?php foreach ([1,2,3,4,5,6] as $article) { ?>
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

    <div class="promo">
        <div style="z-index: 5;">
            <h2>А угадайте, куда мы поедем в следующий раз?</h2>
        </div>
        <div class="mask"></div>
    </div>
</div>

<!--START MODAL-->

<div class="modal fade" id="banner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Добро пожаловать!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Подпишитесь на нашу рассылку, чтобы быть в курсе всех последних путешествий!
            </div>
        </div>
    </div>
</div>

<!--END MODAL-->



<script>
    $('.carousel').slick({
        slidesToShow: 1,
        dots:true,
        centerMode: true,
        autoplay: true,
        autoplaySpeed: 3000,
    });

    $(function() {
        setTimeout(function() {
            $('#banner').modal('show');
        }, 3000);
    });
</script>
<style>
    .modal-dialog {
        height: 100%;
        margin-top: 20%;
    }
    .mask {
        background: linear-gradient(#73737300, #0000005e);
        background-color: rgba(0, 0, 0, 0);
        position: absolute;
        width: 1140px;
        height: 300px;
        background-color: #48484833;
        overflow: hidden;
        margin: 0 !important;
    }
.article {
    margin-bottom: 40px;
    padding: 20px;
}

.article-image {
    width: 100%;
    margin-bottom: 25px;
    margin-top: 30px;
}
.carousel {
    margin-top: 50px;
}
.promo > div > h2 {
    font-weight: bold;
}
</style>