<? require_once 'template_components/modals.php'; ?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="js/jquery-1.6.2.js"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="css/materialize.css">

    <!-- Compiled and minified JavaScript -->
    <script src="js/materialize.js"></script>


    <link rel="stylesheet" href="css/style.css?a=<?php echo time();?>">

    <script src="js/main.js?a=<?php echo time();?>"></script>

	<title>XLFormat</title>
</head>
<body>
    <? echo $modal_request_call; ?>

    <div id="mini-head-menu" class="fixed-action-btn" style="display: none">
        <a class="btn-floating btn-large white black-text">
            <i class="large material-icons black-text">menu</i>
        </a>
        <ul>
            <li><a href="tel:+74955046837" class="btn-floating white "><i class="material-icons black-text">call</i></a></li>
            <li><a href="mailto:info@xlformat.ru" class="btn-floating white "><i class="material-icons black-text">email</i></a></li>
            <li><a href="#modal1" class="btn-floating white  modal-trigger"><i class="material-icons black-text">shopping_cart</i></a></li>
        </ul>
    </div>
    <header class="navbar-fixed">

        <nav>
            <div class="nav-wrapper grey lighten-2 text-black">
                <a href="#" class="brand-logo black-text">XL</a>
                <ul id="nav-mobile" style="margin-left: 130px" class="hide-on-med-and-down">
                    <li><a href="#" class="black-text">О КОМПАНИИ</a></li>
                    <li><a href="#" class="black-text">ПРОДУКЦИЯ</a></li>
                    <li><a href="#footer" class="black-text">КОНТАКТЫ</a></li>
                </ul>
                <ul class="right hide-on-med-and-down">
                    <li><a href="tel:+74955046837" class="black-text"><i class="material-icons left">call</i>+7&nbsp;495&nbsp;504&nbsp;68&nbsp;37</a></li>
                    <li><a href="mailto:info@xlformat.ru" class="black-text"><i class="material-icons left">email</i>info@xlformat.ru</a></li>
                    <li><a href="#modal1" class="black-text modal-trigger" ><i class="material-icons left">shopping_cart</i>СДЕЛАТЬ ЗАКАЗ</a></li>
                </ul>
            </div>
        </nav>
    </header>
	<?php include 'application/views/'.$content_view; ?>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2240.9228758610407!2d37.4083420329226!3d55.829297937142734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b547c887f038a1%3A0xcf122511c9952ec8!2z0KjQuNGA0L7QutC-0YTQvtGA0LzQsNGC0L3QsNGPINC_0LXRh9Cw0YLRjCBYTGZvcm1hdA!5e0!3m2!1sru!2sru!4v1572271477679!5m2!1sru!2sru" width="100%"  height="512px" frameborder="0" style="border:0; min-height:512px " allowfullscreen=""></iframe>
<footer id="footer" class="page-footer section scrollspy">
    <div class="row">

        <div class="col s3">
            <ul>
                <li>Печать</li>
                <li>Резка</li>
                <li>Вывески</li>
                <li>Оформление</li>
            </ul>
        </div>
        <div class="col s3">
            <ul>
                <li>О компании</li>
                <li>Продукция</li>
                <li>Контакты</li>
                <li>Вакансии</li>
            </ul>
        </div>
        <div class="col s3">
            <div style="line-height: 25px;">Москва<div>Волоколамское шоссе, дом 95, стр. 3</div>
                <i class="material-icons">
                    access_time
                </i>
                <span style="vertical-align: top;">10:00 - 19:00<br>
        <span style="margin-left: 30px">ПН - ПТ</span></span>
            </div>
        </div>
        <div class="col s3">
            <div class="footer-contacts">
                <i class="material-icons"> call </i>  <a style="vertical-align: top;" href="tel:+74955046837">+7&nbsp;495&nbsp;504&nbsp;68&nbsp;37</><br><a style="margin-left: 28px" href="tel:+79268253256">+7 926 825 32 56</a>
            </div>
            <div class="footer-contacts" style="margin-top: 30px">
                <i class="material-icons">
                    email
                </i>
                <a style="vertical-align: top;" href="mailto:info@xlformat.ru">info@xlformat.ru</a>
            </div>
        </div>
        
    </div>
</footer>
</body>
</html>
