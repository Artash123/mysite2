@extends('index1')

@section('content')
<div class="content">
    <div class="selection">
        <table>
            <tr>
                <td>Показывать</td>
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
                    <select class="form-control items" id="exampleFormControlSelect1">
                        <option>все заявки </option>
                        <option>новые</option>
                        <option>на проверке</option>
                        <option>оплаченные </option>
                        <option>отмененные</option>
                    </select>
                </td>
                <td>
                    <select class="form-control items" id="exampleFormControlSelect1">
                        <option>все заявки </option>
                        <option>новые</option>
                        <option>на проверке</option>
                        <option>оплаченные </option>
                        <option>отмененные</option>
                    </select>
                </td>
            </tr>
        </table>
    </div>
    <h1 class="desc_title">Разработки уроков для учителей</h1>
    <p>
        Добро пожаловать на сайт, который помогает учителям и школьникам в учебе и работе!
        Здесь вы найдете уроки, конспекты, тесты, презентации, планы, мероприятия и прочие полезные
        материалы для работы учителя и обучения школьника.
    </p>
</div>
<div class="col-md-12 elaboration">
    <div class="elaboration_header">
        <i class="fa fa-graduation-cap" aria-hidden="true"></i><span> Математика</span>
        <button class="pull-right docx">DOCX</button>
    </div>
    <div class="elaboration_content">
        <h3>Математический праздник «Для чего изучают математику?»</h3>
        <i class="fa fa-user" aria-hidden="true"></i>   <span class="author"> Султанбеков Багдат Казыбекович</span>
    </div>
    <div class="elaboration_footer">
        <div class="left_div">
            <i class="fa fa-calendar-check-o" aria-hidden="true"></i><span> Самостоятельная работа</span>
            <i class="fa fa-id-badge" aria-hidden="true"></i><span> 5 класс</span>
            <i class="fa fa-calendar" aria-hidden="true"></i><span> 16.01.2018</span>
        </div>
        <div class="right_div">
            <a href=""><span class="fa fa-heart-o"> 0</span></a>
            <a href=""><span class="fa fa-eye"> 0</span></a>
            <a href=""><span class="fa fa-commenting-o"> 0</span></a>
            <a href=""><span class="fa fa-arrow-down"> 0</span></a>
        </div>
    </div>
</div>
@endsection
