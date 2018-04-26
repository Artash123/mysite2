<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title>Intelurok</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/animation.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <style>
        #registerModal label,#loginModal label{
            float: left;
            font-weight: 100;
        }
        .register-form-input{
            width: 100%;
            height: 38px;
            font-size: 15px;
            padding: 10px;
        }
        .register-type-block div{
            display: inline-block;
        }
        .register-type-div{
            position: relative;
            height: 80px;
            width: 80px;
            border-style: solid;
            border-width: 1px;
            border-color: darkgrey;
            margin-right: 8px;
            margin-left: 8px;
        }
        .user-1{
            background-image: url("images/user-1.png");
            background-position-y: 5px;
            background-position-x: center;
            background-size: auto;
            background-repeat: no-repeat;
        }
        .user-2{
            background-image: url("images/user-2.png");
            background-position-y: 5px;
            background-position-x: center;
            background-size: auto;
            background-repeat: no-repeat;
        }
        .user-3{
            background-image: url("images/user-3.png");
            background-position-y: 5px;
            background-position-x: center;
            background-size: auto;
            background-repeat: no-repeat;
        }
        .register-type-div span{
            position: absolute;
            color: grey;
            font-weight: 500;
            bottom: 0px;
            left: 0px;
        }
        .register-type-div:hover{
            border: 1px solid #0083d6;
            cursor: pointer;
            color: #0083d6;
        }
        .register-type-div:hover *{
            cursor: pointer;
            color: #0083d6;
        }
        .next-butt{
            width: 100%;
        }
        .shear-div{
            cursor: pointer;
            height: 45px;
            width: 45px;
            background-color: grey;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            margin: 10px;
        }
        .register-type-block i{
            font-size: 26px;
            margin-top: 9px;
            color: white;
        }
        .regist-eye{
            position: absolute;
            right: 24px;
            top:34px;
            font-size: 20px;
            cursor: pointer;
        }
        .save-pass{

        }
        .login-type-div{
            padding:10px;
            background-color: #f2f2f2;
            /*margin-left: -10px;*/
            /*width: calc(100% + 20px);*/
            text-align: center;
            width: 100%;
        }
        .loginModal>input{
            padding: 8px;
        }
        #forgotModal>h4.modal-title, p.forgot-modal-text{
            float: left;
        }
        #forgotModal h4{
            font-weight: 600;
        }
        #forgotModal input[type=email]{
            width: 100%;
            height: 38px;
        }
        .forgot-submit-but{
            width: 100%;
            height: 40px;
            margin-bottom: 27px;
        }
        .login-to-registr{
            background-color: black;
            padding: 19px;
            opacity: 0.75;
        }
        .login-to-registr:hover{
            opacity: 0.6;
            transition: .2s;
        }
        .shear-one:hover{
            background-color: #0044cc;
        }
        .shear-two:hover{
            background-color: #eb722e;
        }
        .shear-tre:hover{
            background-color: red;
        }
    </style>

</head>
<body  id="home">
<!--register modal-->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 470px; padding: 0px 10px">
            <button type="button" style="margin-right: 10px" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="col-xs-12" style="height: 35px;">
                <h4 class="modal-title" style="float: left; margin-bottom: 25px"><b>Зарегистрироваться</b></h4>
            </div>
            <div class="col-xs-12">
                <label>Электронная почта</label><br>
                <input class="register-form-input" placeholder="Введите ваш e-mail" type="text"><br><br>
            </div>
            <div class="col-xs-12" style="position: relative">
                <label>Пароль</label><br>
                <i class="fa fa-eye-slash regist-eye"></i>
                <input class="register-form-input" placeholder="Введите ваш пароль" type="password"><br><br>
            </div>
            <div class="col-xs-12" style="position: relative">
                <label>Повторите пароль</label><br>
                <i class="fa fa-eye-slash regist-eye" ></i>
                <input class="register-form-input" placeholder="Повторите пароль" type="password"><br><br>
            </div>
            <div class="col-xs-12 register-type-block">
                <div class="register-type-div user-1">
                    <span style="left: 9px">Я ученик</span>
                </div>
                <div class="register-type-div user-2">
                    <span style="left: 6px">Я учитель</span>
                </div>
                <div class="register-type-div user-3">
                    <span>Я родитель</span>
                </div>
            </div>
            <div class="col-xs-12" style="text-align: left;">
                <p>Регистрируясь Вы соглашаетесь с <a href="#">пользовательским соглашением</a> и <a href="#">политикой конфиденциальности,</a> а также даёте согласие на получение информационных и рекламных писем от ООО “Мультиурок” на указанный Вами e-mail. Отказаться от рассылки Вы сможете в любой момент, кликнув на ссылку "отказаться от рассылки", которая будет в каждом письме.</p>
            </div>
            <div class="col-xs-12" style="text-align: center">
                <br>
                <button type="button" class="btn btn-success next-butt">Продолжить</button><br><br>
                <p>Или войти с помощью аккаунта в соцсети</p>
            </div>
            <div class="col-xs-12 register-type-block">
                <div class="shear-div shear-one"><i class="fa fa-vk" aria-hidden="true"></i></div>
                <div class="shear-div shear-two"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></div>
                <div class="shear-div shear-tre"><i class="fa fa-odnoklassniki" aria-hidden="true"></i>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<!--end register modal-->

<!--login modal-->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 469px;">
            <button type="button" style="margin-right: 10px" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="col-xs-12" style="height: 35px;">
                <h4 class="modal-title" style="float: left; margin-bottom: 25px"><b>Войти в профиль</b></h4>
            </div>
            <div class="col-xs-12">
                <label>Электронная почта</label><br>
                <input class="register-form-input" placeholder="Введите ваш e-mail" type="text"><br><br>
            </div>
            <div class="col-xs-12" style="position: relative">
                <label>Пароль</label><br>
                <i class="fa fa-eye-slash regist-eye"></i>
                <input class="register-form-input" placeholder="Введите ваш пароль" type="password"><br><br>
            </div>
            <div class="col-xs-12 save-pass">
                <label><input type="checkbox"> Оставаться в системе</label>
            </div>
            <div class="col-xs-12" style="text-align: center">
                <br>
                <button type="button" class="btn btn-success next-butt">Войти</button><br><br>
            </div>
            <div class="col-xs-12" style="text-align: left">
                <a href="#" class="forgotPassword" data-toggle="modal" data-target="#forgotModal">Вспомнить пароль</a>
            </div>
            <div class="col-xs-12 register-type-block login-type-div">
                <p>Или войти с помощью аккаунта в соцсети</p>
                <div class="shear-div shear-one"><i class="fa fa-vk" aria-hidden="true"></i></div>
                <div class="shear-div shear-two"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></div>
                <div class="shear-div shear-tre"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></div>
            </div>
            <div class="col-xs-12 register-type-block login-type-div login-to-registr" >
                <a href="#" style=" color:white">Зарегистрироваться</a>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<!--end login modal-->

<!--forgot pass modal-->
<div class="modal fade" id="forgotModal" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content" style="width: 470px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Восстановление пароля</h4>
            </div>
            <div class="modal-body">
                <p class="forgot-modal-text">Введите вашу электронную почту, чтобы восстановить пароль!</p><br><br>
                <input type='email' placeholder='Введите ваш e-mail'><br><br>
                <input type="submit" data-disable-with="Отправить..." class="btn green forgot-submit-but" value="Отправить">
            </div>
        </div>

    </div>
</div>
<!--end forgot pass modal-->
<!--Header_section-->
<header class="header_wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-3">
                <a href="/intelurok/">
                    <img src="images/intelurok1.png" class="img-responsive logo">
                </a>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="input-group search">
                    <input type="text" class="form-control"  placeholder="Введите текст для поиска..." >
                    <span class="input-group-addon">
                        <button type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="pull-right buttons">
                    <a class="btn yellow"><i class="fa fa-file-text-o"></i> Получите свидетельство</a>
                    <a class="btn green"  data-toggle="modal" data-target="#loginModal"><i class="fa fa-key"></i> Войти</a>
                    <a class="registration" data-toggle="modal" data-target="#registerModal" href="#">Регистрация</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="header_box">
                <nav class="navbar bottom_menu" role="navigation">
                    <div class="navbar-header">
                        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="main-nav" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar_ul" id="mainNav">
                            <li><a href="course.php" class="scroll-link">КУРСЫ</a></li>
                            <li><a href="olympics.php" class="scroll-link">ОЛИМПИАДЫ</a></li>
                            <li><a href="webinars.php" class="scroll-link">ВЕБИНАРЫ</a></li>
                            <li><a href="tests.php" class="scroll-link">ПЕДТЕСТЫ</a></li>
                            <li><a href="quiz.php" class="scroll-link">ВИКТОРИНЫ</a></li>
                            <li><a href="elaboration.php" class="scroll-link">ПУБЛИКАЦИИ</a></li>
                        </ul>

                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>


<div class="container-fluid">
    <div class="col-md-12 img">
        <img src="images/mar18_header_top.png" class="img-responsive">
    </div>


    <div class="col-md-2  sidebar">

        <div class="profile_inf ?>">
            <div class="my_cabinet">
                <ul class="sidebar-nav nav">
                    <h3 class="text-center">Мой кабинет</h3>
                    <li>
                        <a href="#" data-scroll>Достижение</a>
                    </li>
                    <li>
                        <a href="#" data-scroll>Кошелек</a>
                    </li>
                    <li>
                        <a href="my_publications.php" data-scroll>Публикации</a>
                    </li>
                    <li>
                        <a href="#" data-scroll>Профиль</a>
                    </li>

                </ul>
            </div>
            <div class="applications">

                <ul class="sidebar-nav nav">
                    <h3 class="text-center">Мои заявки</h3>
                    <li>
                        <a href="#" data-scroll>Олимпиады</a>
                    </li>
                    <li>
                        <a href="#" data-scroll>Викторины</a>
                    </li>
                    <li>
                        <a href="#" data-scroll>Курсы</a>
                    </li>
                    <li>
                        <a href="#" data-scroll>Педтесты</a>
                    </li>

                </ul>

            </div>
            <div class="sign_out">
                <ul class="sidebar-nav nav">
                    <li>
                        <a href="#">Выйти</a>
                    </li>
                </ul>
            </div>
        </div>


        <div id="sticky_bar">
            <div id="sidebar-wrapper">
                <nav id="spy">
                    <ul class="sidebar-nav nav">
                        <li>
                            <a href="#anch1" data-scroll>
                                <span class="fa fa-star-o solo">О мероприятии</span>
                            </a>
                        </li>
                        <li>
                            <a href="#anch2" data-scroll>
                                <span class="fa fa-gift solo">Поощрение учителям</span>
                            </a>
                        </li>
                        <li>
                            <a href="#anch3" data-scroll>
                                <span class="fa fa-trophy solo">Подарки ученикам</span>
                            </a>
                        </li>
                        <li>
                            <a href="#anch4" data-scroll>
                                <span class="fa fa-lightbulb-o solo">Интересные задания</span>
                            </a>
                        </li>
                        <li>
                            <a href="#anch5" data-scroll>
                                <span class="fa fa-coffee solo">Удобное участие</span>
                            </a>
                        </li>
                        <li>
                            <a href="#anch5" data-scroll>
                                <span class="fa fa-comment-o solo">Отзывы</span>
                            </a>
                        </li>
                        <li>
                            <a href="#anch5" data-scroll>
                                <span class="fa fa-question-circle-o solo">Ответы на вопросы</span>
                            </a>
                        </li>
                        <li>
                            <a href="#anch5" data-scroll>
                                <span class="fa fa-handshake-o solo">Зачем участвовать</span>
                            </a>

                        </li>
                    </ul>

                </nav>
            </div>
            <div class="apply_btn">
                <a class="btn yellow"> Подать заявку</a>
            </div>
        </div>


        <div class="teachers">
            <h3>Рейтинг учителей</h3>
            <ul class="teachers_ul">
                <li>Игорь Анатольевич</li>
                <li>Игорь Анатольевич</li>
                <li>Игорь Анатольевич</li>
                <li>Игорь Анатольевич</li>
                <li>Игорь Анатольевич</li>
                <li>Игорь Анатольевич</li>
                <li>Игорь Анатольевич</li>
                <li>Игорь Анатольевич</li>
                <li>Игорь Анатольевич</li>
            </ul>
        </div>


    </div>
    <div class="col-md-7 col-sm-9 " id="anch1">


    @yield('content')





    </div>

    <div class="col-md-3 blocks">
        <div class="block">
            <img src="images/vu_shop_mar18_vert-3.png" alt="" class="img-responsive">
        </div>
        <div class="block"></div>
        <div class="block"></div>
    </div>

    <div class="col-md-3 col-sm-3 blocks">
        <div class="block_menu">
            <ul class="sidebar-nav nav">
                <li>
                    <a href="/" data-scroll>Главная</a>
                </li>
                <li>
                    <a href="" data-scroll>Подать заявку</a>
                </li>
                <li>
                    <a href="my_applications.php" data-scroll>Мои заявки</a>
                </li>
                <li>
                    <a href="results.php" data-scroll>Результаты и награды</a>
                </li>
                <li>
                    <a href="rewards.php" data-scroll>

                    </a>
                </li>

            </ul>
        </div>

        <div class="block stage_block">
            <h3>Этап викторины</h3>
            <table>
                <tr>
                    <td>
                        <div class="stage text-center green_stage">
                            <span>Сентябрь</span>
                        </div>
                    </td>
                    <td>
                        <div class="stage text-center green_stage">
                            <span>Октябрь</span>
                        </div>
                    </td>
                    <td>
                        <div class="stage text-center green_stage">
                            <span>Ноябрь</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="stage text-center green_stage">
                            <span>Декабрь</span>
                        </div>
                    </td>
                    <td>
                        <div class="stage text-center green_stage">
                            <span>Январь</span>
                        </div>
                    </td>
                    <td>
                        <div class="stage text-center green_stage">
                            <span>Февраль</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="stage text-center green_stage">
                            <span>Март</span>
                        </div>
                    </td>
                    <td>
                        <div class="stage text-center">
                            <span>Апрель</span>
                        </div>
                    </td>
                    <td>
                        <div class="stage text-center">
                            <span>Май</span>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <div class="block">

            <h3>Листовки</h3>
            <div class="lists">
                <div class="col-md-6">
                    <a target="_blank" href="#">
                        <img src="images/mar18_listovka-mini.png" alt="Листовка для учеников">
                        <p>Для учеников</p>
                    </a>
                </div>
                <div class="col-md-6">
                    <a target="_blank" href="#">
                        <img src="images/mar18_listovka_teacher-mini.png" alt="Листовка для учителей">
                        <p>Для учителей</p>
                    </a>
                </div>

            </div>

        </div>
        <div class="block">
            <div class="wrp instructions">
                <h3>Документы и инструкции</h3>

                <p>
                    <a href="/201803/201803pologru.zip"><img src="images/zip.png" alt=""> Положение о проведении серии олимпиад «Школьное многоборье. Март 2018»</a>
                </p>
                <p>
                    <a href="/201803/201803prikazru.zip"><img src="images/zip.png" alt="">Приказ о проведении серии олимпиад «Школьное многоборье. Март 2018»</a>
                </p>
                <p>
                    <a href="/201803/201803publdogru.zip"><img src="images/zip.png" alt="">Договор на оказание услуг по организации проведения олимпиад</a>
                </p>

                <p class="all">
                    <a target="_blank" href="/201612/vu_olympiads_instruction.pdf"><img src="images/pdf.png" alt="">Инструкции по участию в олимпиадах videouroki.net</a>
                </p>
            </div>
        </div>
        <div class="block_demands">
            <div class="wrp">
                <h3>Чтобы принять участие</h3>

                <div class="v-center">
                    <div class="circle">1</div>
                    <span>Подайте заявку </span>
                </div>
                <div class="v-center">
                    <div class="circle">2</div>
                    <span>Получите задания </span>
                </div>
                <div class="v-center">
                    <div class="circle">3</div>
                    <span>Внесите ответы </span>
                </div>
                <div class="v-center">
                    <div class="circle">4</div>
                    <span>Получите награды </span>
                </div>
            </div>
        </div>
    </div >


</div>


<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.nav.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/jquery.sticky.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script>
    $(document).ready(function(){
        $("#sticky_bar").sticky({topSpacing:15});
    });
</script>


</body>
</html>