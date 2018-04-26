@extends('index1')


@section('content')
<div class="content">
    <div class="row">
        <div class="col-xs-12">
            <h2>Коучинговый подход в школьном образовании</h2>
            <p class="webinar_author">
                2 академических часа. Кагукина Татьяна Владимировна
            </p>
            <p>
                Федеральный государственный образовательный стандарт задаёт качественно
                новое представление о том, какими должны быть содержание образования и
                его образовательный результат.
            </p>
            <p>
                Это предполагает использование новых педагогических технологий в обучении, изменение структуры предмета и урока,
            </p>
            <i><a href="#">Показать полностью</a></i>
            <iframe id="youtube-player-1" frameborder="0" allowfullscreen="1" allow="autoplay; encrypted-media" title="YouTube video player" width="100%" height="400px" src="https://www.youtube.com/embed/vz9TFR35hrw?rel=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fvideouroki.net&amp;widgetid=1"></iframe>
            <br><br>
        </div>
    </div>

        <div class="row" style="min-height: 320px; position: relative;">
                <div style="height: 170px; width: 220px;text-align: center; position: absolute; left: calc(50% - 110px)">
                    <img src="images/diplom.png" style="height:100% width:100%">
                    <p>Вы можете скачать свидетельство об участии в вебинаре для учителей</p>
                    <br>    
                   <button type="button" class="btn btn-success">Получить свидетельство</button>
                   <br><br>
                   <a href="#">Скачать материалы вебинара</a>
               </div>
        </div>
</div>
@endsection