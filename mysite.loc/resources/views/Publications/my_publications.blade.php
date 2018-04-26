@extends('index1')

@section('content')

<div class="content">
    <h1 class="desc_title">Мои публикации</h1>
    <p>
        На этой странице вы можете увидеть загруженные вами разработки уроков и
        скачать свидетельства о публикации для каждой из них.
    </p>
    <div class="right_div">
        <a href="add_publication.php">Добавить еще разработку</a>
    </div>
</div>
<div class="col-md-12 elaboration">
    <div class="elaboration_header">
        <i class="fa fa-graduation-cap" aria-hidden="true"></i><span> Математика</span>
        <button class="pull-right docx">DOCX</button>
    </div>
    <div class="elaboration_content">
        <a href="/publications/publication"><h3>Математический праздник «Для чего изучают математику?»</h3></a>
        <i class="fa fa-user" aria-hidden="true"></i><span class="author"> Султанбеков Багдат Казыбекович</span>
    </div>
    <div class="elaboration_footer">
        <div class="left_div">
            <i class="fa fa-calendar-check-o" aria-hidden="true"></i><span> Самостоятельная работа</span>
            <i class="fa fa-id-badge" aria-hidden="true"></i><span> 5 класс</span>
            <i class="fa fa-calendar" aria-hidden="true"></i><span> 16.01.2018</span>
        </div>
        <div class="right_div">
            <a href=""><span>Скачать свидетельство о публикации</span></a>

        </div>
    </div>
</div>
@endsection