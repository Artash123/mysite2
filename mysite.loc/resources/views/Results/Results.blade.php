@extends('index1')

@section('content')

    <div class="application_content">
        <div class="results_desc">
            <h1>Матемтика 1-11 класс</h1>

            <div class="answers">
                <div class="col-md-1">
                    <img src="images/man.png" class="img-responsive" alt="">
                </div>
                <div class="col-md-10">
                    <p class="top_p">Вашы ученики могут вводить ответы сами!</p>
                    <p class="bottom_p">Перейти к самостоятельному вводу ответов участниками</p>
                </div>
                <div class="col-md-1">
                    <img src="images/strelka.png" class="img-responsive pull-right" alt="">
                </div>
                <div class="clear"></div>
            </div>

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

            <h3>Материалы для скачивания и подарки</h3>

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

            <h3>Результаты участников</h3>
            <table class="results">
                <tr>
                    <td>Участник</td>
                    <td>Класс</td>
                    <td>Результат</td>
                    <td>Выполнено</td>
                    <td>Место в заявке</td>
                    <td>Место в мероприятии</td>
                    <td>Выполнено</td>
                </tr>
                <tr>
                    <td>Султанбеков Багдат Казыбекович</td>
                    <td>5 класс</td>
                    <td>
                        <span>9 и 10</span>
                        <p><a href="#" class="change_link">Ошибки</a></p>
                    </td>
                    <td>100,00%</td>
                    <td>1/5</td>
                    <td>1</td>
                    <td>
                        <div class="dots">
                            <img src="images/dots.png" alt="" class="img-responsive ">
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection