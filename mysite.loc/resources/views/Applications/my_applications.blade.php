@extends('index1')

@section('content')

    <div class="application_content">
        <div class="my_application_desc">
            <h1 class="desc_title">Мои заявки</h1>
            <p>
                Все заявки с загруженными квитанциями находятся во вкладке «на проверке»,
                все оплаченные заявки во вкладке «оплаченные». Оплата по квитанции проходит в течение 1-5
                банковских дней.
            </p>
        </div>
        <div class="select_div">
            <table>
                <tr>
                    <td><p>Показывать</p></td>
                    <td>
                        <select class="form-control items" id="exampleFormControlSelect1">
                            <option>все заявки </option>
                            <option>новые</option>
                            <option>на проверке</option>
                            <option>оплаченные </option>
                            <option>отмененные</option>
                        </select>
                    </td>
                    <td>
                        <input type="checkbox" name="checkboxNew" id="checkboxNew" class="all-new_checkbox">
                        <label for="checkboxNew" class="css-label">Отметить все новые заявки</label>
                    </td>
                </tr>
            </table>


            <!--<p>Показывать</p>-->
            <!--<div class="select-wrp " data-num="true">-->
                <!--<div class="custom_select">-->
                    <!--<div id="current_option_category" class="current_option" data-value="">-->
                        <!--<span>все заявки <span> </span></span>-->
                        <!--<b><img src="/videouroki/images/ar_down.svg"></b>-->
                    <!--</div>-->
                    <!--<ul id="custom_options_category" class="perfect-scroll custom_options ps-container ps-theme-default" data-isotope-key="filter" data-ps-id="a45120e4-92a4-b5d9-c196-84eb18b9db07">-->
                        <!--<li class="active" data-filter="">все заявки <span> </span></li>-->
                        <!--<li data-value="1" data-filter="new">новые <span> </span></li>-->
                        <!--<li data-value="2" data-filter="checkup">на проверке <span> </span></li>-->
                        <!--<li data-value="3" data-filter="paid">оплаченные <span> </span></li>-->
                        <!--<li data-value="4" data-filter="canceled">отмененные <span> </span></li>-->
                        <!--<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></ul>-->
                <!--</div>-->
        </div>
    </div>


    <div class="wrp color pay" style="display: none">
        <div class="v-center">
            <div>
                <input type="checkbox" name="checkboxG1" id="checkboxG1" class="css-checkbox">
                <label for="checkboxG1" class="css-label">Заявок: <span class="kolichestvo">0</span>. На сумму: <span class="k-oplate">0</span> рублей</label>
            </div>

            <form class="ajax_load top-form__pay" action="/olymp/request/pay/" method="post" data-remote="true" data-disable-with="Загрузка..." data-method="post">
                <input type="hidden" name="requests" value="">
                <input type="submit" class="btn green top-buttons__pay" data-disable-with="Загрузка..." value="Оплатить">
            </form>
        </div>
    </div>


    <div class="clear"></div>


    <div class="wrp color pay" style="display: none">
        <div class="v-center">
            <div>
                <input type="checkbox" name="checkboxG99" id="checkboxG99" class="css-checkbox">
                <label for="checkboxG99" class="css-label">Заявок: <span class="kolichestvo">0</span>. На сумму: <span class="k-oplate">0</span> рублей</label>
            </div>
            <form class="ajax_load top-form__pay" action="/olymp/request/pay/" method="post" data-remote="true" data-disable-with="Загрузка..." data-method="post">
                <input type="hidden" name="requests" value="">
                <input type="submit" class="btn green top-buttons__pay" data-disable-with="Загрузка..." value="Оплатить">
            </form>
        </div>
    </div>

    <div class="pending application">
        <div class="col-md-1">
            <input type="checkbox" name="checkboxNew"  class="all-new_checkbox">
        </div>
        <div class="col-md-8">
            <div>
                <span class="cod">36549</span>
                <span>Подано:01.03.2018</span>
                <span>Подано:02.04.2018</span>
            </div>
            <a href="application.php"><h3>Матемтика 1-11 класс</h3></a>
            <table class="application_info">
                <tr>
                    <td>Участников</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td>Учитель</td>
                    <td>Игорь Анатольевич</td>
                </tr>
                <tr>
                    <td>ОУ</td>
                    <td> "Жанатурмысе" СОШ  Nº22 </td>
                </tr>
            </table>
            <a href="">Редактировать данные</a>
        </div>
        <div class="col-md-3">
            <p class="price">50руб.</p>
            <p class="new_price">25руб.</p>
            <a href="#" class="btn green">Оплатить</a>
            <p><a href="#">Скачать задания</a></p>
            <p><a href="#">Отменить заявку</a></p>
        </div>

        <div class="clear"></div>

    </div>
    <div class="success application">
        <div class="col-md-1">
            <input type="checkbox" name="checkboxNew"  class="all-new_checkbox">
        </div>
        <div class="col-md-8">
            <div>
                <span class="cod">36549</span>
                <span>Подано:01.03.2018</span>
                <span>Подано:02.04.2018</span>
            </div>
            <a href="#"><h3>Матемтика 1-11 класс</h3></a>
            <table class="application_info">
                <tr>
                    <td>Участников</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td>Учитель</td>
                    <td>Игорь Анатольевич</td>
                </tr>
                <tr>
                    <td>ОУ</td>
                    <td> "Жанатурмысе" СОШ  Nº22 </td>
                </tr>
            </table>
            <a href="">Редактировать данные</a>
        </div>
        <div class="col-md-3">
            <p class="price">50руб.</p>
            <p class="new_price">25руб.</p>
            <p><a href="#">Скачать задания</a></p>
            <p><a href="#">Внести ответы</a></p>
            <p class="date_p">Оплачено 07.02.2018</p>
        </div>

        <div class="clear"></div>
    </div>
    <div class="canceled application">
        <div class="col-md-1">
            <input type="checkbox" name="checkboxNew"  class="all-new_checkbox">
        </div>
        <div class="col-md-8">
            <div>
                <span class="cod">36549</span>
                <span>Подано:01.03.2018</span>
                <span>Подано:02.04.2018</span>
            </div>
            <a href="#"><h3>Матемтика 1-11 класс</h3></a>
            <table class="application_info">
                <tr>
                    <td>Участников</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td>Учитель</td>
                    <td>Игорь Анатольевич</td>
                </tr>
                <tr>
                    <td>ОУ</td>
                    <td> "Жанатурмысе" СОШ  Nº22 </td>
                </tr>
            </table>
            <a href="">Редактировать данные</a>
        </div>
        <div class="col-md-3">
            <p class="price">50руб.</p>
            <p class="new_price">25руб.</p>
            <p class="cancel_p">Отменено</p>
            <p><a href="#">Восстановить заявку</a></p>
        </div>

        <div class="clear"></div>
    </div>

    <div class="wrp color none" style="display: none">
        <p>У вас пока нет таких заявок.</p>
    </div>
    <!--<div class=" col-md-6">-->
        <!--<div class="apply_links"><a href="#" class="all-new_link">Отметить все новые заявки</a></div>-->
    <!--</div>-->
    <div class="">
        <div class="pull-right apply_links"><a href="#">+ Подать ещё заявку</a></div>
    </div>
@endsection