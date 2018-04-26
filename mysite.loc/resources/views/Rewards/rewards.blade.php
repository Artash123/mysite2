@extends('index1')

@section('content')
    <div class="archive_desc">
        <h1 class="desc_title">Резултаты и награды</h1>
        <p>
            На этой странице вы можете посмотреть свои результаты участия в наших мероприятиях, ошибки,
            которые вы совершили, скачать готовые решения, а также все свои наградные материалы.
        </p>
    </div>
    <div class="rewards_div">
        <h2>Серия олимпиад "Весна 2018"</h2>
        <a href="#">Посмотреть резултаты по олимпиаде</a>
    </div>
    <div class="rewards_div">
        <h2>Серия олимпиад "Весна 2018"</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
            eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
            deserunt mollit anim id est laborum.
        </p>
        <div class="documents">
            <h3>Материалы для скачивания</h3>
            <p>
                <a href="/201803/201803pologru.zip"><img src="images/zip.png" alt=""> Положение о проведении серии олимпиад «Школьное многоборье. Март 2018»</a>
            </p>
        </div>

    </div>
    <div class="success application">
        <div class="col-md-1">
            <input type="checkbox" name="checkboxNew"  class="all-new_checkbox">
        </div>
        <div class="col-md-9">
            <div>
                <span class="cod">36549</span>
                <span>Подано:01.03.2018</span>
                <span>Подано:02.04.2018</span>
            </div>
            <h3>Матемтика 1-11 класс</h3>
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
        <div class="col-md-2">
            <p class="price">50руб.</p>
            <p class="new_price">25руб.</p>
            <p><a href="#">Скачать задания</a></p>
            <p><a href="#">Внести ответы</a></p>
            <p class="date_p">Оплачено 07.02.2018</p>
        </div>

        <div class="clear"></div>
    </div>
    <div class="rewards_div">
        <h3>Документы и инструкции</h3>

        <div class="documents">
            <p>
                <a href="/201803/201803pologru.zip"><img src="images/zip.png" alt=""> Положение о проведении серии олимпиад «Школьное многоборье. Март 2018»</a>
            </p>
            <p>
                <a href="/201803/201803prikazru.zip"><img src="images/zip.png" alt=""> Приказ о проведении серии
                    олимпиад «Школьное многоборье. Март 2018»</a>
            </p>
            <p>
                <a href="/201803/201803publdogru.zip"><img src="images/zip.png" alt=""> Договор на оказание услуг
                    по организации проведения олимпиад</a>
            </p>

            <p class="all">
                <a target="_blank" href="/201612/vu_olympiads_instruction.pdf"><img src="images/pdf.png" alt="">
                    Инструкции по участию в олимпиадах videouroki.net</a>
            </p>
        </div>
    </div>
@endsection