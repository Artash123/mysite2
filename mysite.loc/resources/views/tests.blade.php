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
            </tr>
        </table>
    </div>
    <h1 class="desc_title">Вебинары для учителей</h1>
    <p>
        На этой странице вы можете посмотреть свои результаты участия в наших мероприятиях, ошибки,
        которые вы совершили, скачать готовые решения, а также все свои наградные материалы.
    </p>
</div>
<div class="row">
    <div class="col-sm-12 col-md-6 right_test left_test tests">
        <div class="test text-center">
            <div class="text-left">
                <h3>Международные олимпиады как ИКТ-инструмент мотивации учащихся</h3>
                <p>Вопросов:10</p>
            </div>
            <a href="#" class="btn green ">Пройти тест</a>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 right_test left_test tests">
        <div class="test text-center">
            <div class="text-left">
                <h3>Международные олимпиады как ИКТ-инструмент мотивации учащихся</h3>
                <p>Вопросов:10</p>
            </div>
            <a href="#" class="btn green ">Пройти тест</a>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 right_test left_test tests">
        <div class="test text-center">
            <div class="text-left">
                <h3>Тест. Language & Grammar Review</h3>
                <p>Вопросов:10</p>
            </div>
            <a href="test.php" class="btn green ">Пройти тест</a>
        </div>
    </div>
</div>

@endsection