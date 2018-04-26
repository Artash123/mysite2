@extends('index1')


@section('content')

<div class="container">
    <div class="modal fade" id="myModalBig">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="row" style="margin: 0;padding:0px; border-width:1px;border-color: dimgrey;border-bottom-style: solid">
                    <div class="col-xs-12">
                        <h3 style="padding-left: 20px; padding:10px 0px 10px 0px; float: left"><b>Новая заявка</b></h3>
                        <button style="margin-right: -7px; font-size: 40px" type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                </div>
                <div class="row" style="padding: 12px 0px 0px 0px; margin: 0px">
                    <div class="col-sm-12 col-md-4 col-mg-4" style="text-align: left">
                        <label>
                            Фамилия
                        </label><br>
                        <input placeholder="Фамилия" style="border-radius: 3px; border-width: 1px; width: 100%">
                    </div>
                    <div class="col-sm-12 col-md-4 col-mg-4" style="text-align: left">
                        <label>
                            Имя
                        </label><br>
                        <input placeholder="Имя" style="border-radius: 3px; border-width: 1px; width: 100%">
                    </div>
                    <div class="col-sm-12 col-md-4 col-mg-4" style="text-align: left">
                        <label>
                            Oтчество
                        </label><br>
                        <input placeholder="Oтчество" style="border-radius: 3px; border-width: 1px; width: 100%">
                    </div>
                </div>

                <div class="row" style="padding: 12px 0px 0px 0px; margin: 0px">
                    <div class="col-sm-12 col-md-4 col-mg-4" style="text-align: left">
                        <label>
                            Страна
                        </label><br>
                        <select style="border-radius: 3px; border-width: 1px; width: 100%;padding-bottom: 5px"></select>
                    </div>
                    <div class="col-sm-12 col-md-8 col-mg-8" style="text-align: left">
                        <label>
                            Населенный пункт
                        </label><br>
                        <input placeholder="Населенный пункт" style="border-radius: 3px; border-width: 1px; width: 100%">
                    </div>
                </div>

                <div class="row" style="padding: 12px 0px 0px 0px; margin: 0px">
                    <div class="col-sm-12 col-md-2 col-mg-2" style="text-align: left">
                        <label>
                            Индекс
                        </label><br>
                        <input placeholder="Индекс" style="border-radius: 3px; border-width: 1px; width: 100%">
                    </div>
                    <div class="col-sm-12 col-md-4 col-mg-4" style="text-align: left">
                        <label>
                            Область
                        </label><br>
                        <input placeholder="Область" style="border-radius: 3px; border-width: 1px; width: 100%">
                    </div>
                    <div class="col-sm-12 col-md-3 col-mg-3" style="text-align: left">
                        <label>
                            Район
                        </label><br>
                        <input placeholder="Район" style="border-radius: 3px; border-width: 1px; width: 100%">
                    </div>
                    <div class="col-sm-12 col-md-3 col-mg-3" style="text-align: left">
                        <label>
                            Улица
                        </label><br>
                        <input placeholder="Улица" style="border-radius: 3px; border-width: 1px; width: 100%">
                    </div>
                </div>

                <div class="row" style="padding: 12px 0px 0px 0px; margin: 0px">
                    <div class="col-sm-12 col-md-2 col-mg-2" style="text-align: left">
                        <label>
                            Дом
                        </label><br>
                        <input placeholder="Дом" style="border-radius: 3px; border-width: 1px; width: 100%">
                    </div>
                    <div class="col-sm-12 col-md-2 col-mg-2" style="text-align: left">
                        <label>
                            Корпус
                        </label><br>
                        <input placeholder="Корпус" style="border-radius: 3px; border-width: 1px; width: 70%">
                    </div>
                    <div class="col-sm-12 col-md-2 col-mg-2" style="text-align: left">
                        <label>
                            Квартира
                        </label><br>
                        <input placeholder="Квартира" style="border-radius: 3px; border-width: 1px; width: 100%">
                    </div>
                    <div class="col-sm-12 col-md-6 col-mg-6" style="text-align: left">
                        <label>
                            Телефон
                        </label><br>
                        <input placeholder="Телефон" style="border-radius: 3px; border-width: 1px; width: 100%">
                    </div>
                </div>

                <div class="row" style="text-align: left; padding: 12px 0px 0px 0px; margin:0px">
                    <div class="col-xs-12"><p>120018 Казахстан, Наурыз 27/10</p></div>
                </div>

                <div class="row" style="text-align: left; padding: 12px 0px 0px 0px; margin:0px">
                    <div class="col-sm-12 col-md-4 col-lg-4 checkboxRow">
                        <p style="text-align: left;border-bottom-style: solid;border-width: 1px;border-color: #5e5e5e">Продолжительность курса</p>
                        <br>
                        <div class="round">
                            <input type="checkbox" id="checkbox" />
                            <label for="checkbox"></label>
                            <span style="margin-left: 30px">   72 Часа (2000 руб)</span>
                        </div>

                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <p style="text-align: left;border-bottom-style: solid;border-width: 1px;border-color: #5e5e5e">Продолжительность курса</p>
                        <br>
                        <div class="round">
                            <input type="checkbox" id="checkbox" />
                            <label for="checkbox"></label>
                            <span style="margin-left: 30px">Среднее профессиональное образование</span>
                        </div>
                        <div class="round">
                            <input type="checkbox" id="checkbox" />
                            <label for="checkbox"></label>
                            <span style="margin-left: 30px">Высшее образование</span>
                        </div>
                    </div>
                </div>

                <div class="row" style="text-align: left; padding: 12px 0px 0px 0px; margin:0px;border-bottom-style: solid;border-width: 1px; border-color: darkgrey">
                    <div class="col-sm-12 col-xs-12">
                        <p style="color:red">
                            * Указанные данные будут использованы при изготовлении документа об образовании
                        </p>
                        <p>Нажимая на кнопку вы даете Согласие на обработку своих персональных данных и соглашаетесь с нашей политикой конфиденциальности</p>
                    </div>
                </div>

                <div class="row" style=" padding: 12px 0px 12px 0px; margin:0px;">
                    <div class="col-sm-12 col-md-5 col-lg-5">
                        <button type="button" class="btn btn-default" style="float: left; background: transparent;color: darkgrey;margin: 6px 10px;">Купить</button>
                        <button type="button" class="btn btn-default" style="float: left; background: transparent;color: darkgrey;margin: 6px 10px;">Применить</button>
                    </div>
                    <div class="col-sm-12 col-md-7 col-lg-7">
                        <button type="button" class="btn btn-default" style="float: right; width: 200px; background: transparent;color: darkgrey;margin: 6px 10px;"> Подтверждают данные > </button>
                        <button type="button" class="btn btn-default" data-dismiss="modal" style="float: right; background: transparent;color: darkgrey;margin: 6px 10px;">Отменить</button>
                    </div>
                </div>


            </div>
        </div>
    </div>

</div>

<div class="content">
        <div class="row" style="border-bottom-style: solid;padding-bottom: 16px; border-width: 1px; border-color: darkgrey;">
            <div class="col-sm-12 col-md-3 col-lg-3" style="padding:0;text-align: center">
                <p>Показывать</p>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3" style="padding: 5px; 5px" >
                <select style="width: 100%;">
                    <option>Все заявки</option>
                </select>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3" style="padding: 5px; 5px">
                <select style="width: 100%;">
                    <option>Все заявки</option>
                </select>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3" style="padding: 5px; 5px">
                <select style="width: 100%;">
                    <option>Все заявки</option>
                </select>
            </div>
        </div>
    <div class="row" style="padding-top: 16px">
        <div class="col-sm-12 col-md-2 col-lg-2">
            <p>Поиск по курсам</p>
        </div>
        <div class="col-sm-12 col-md-8 col-lg-8">
            <input style="width: 100%">
        </div>
        <div class="col-sm-12 col-md-1 col-lg-1">
            <button type="button" class="btn btn-success">Искать</button>
        </div>
    </div>
    <div class="row">
	<div class='col-xs-12'>
    	    <h2><b>Онлайн обучение, курсы ПК и ППК</b></h2>
    	</div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            Желание здесь одно. Киевляне искренне и трогательно хотят в Европу. Прочее может быть показным, но это – правда. Утверждение «мы – украино-европейская нация» расхожее даже в устах образованных горожан. В Киеве много заезжих иностранцев, которые прекрасно себя чувствуют в условиях стремительного роста доллара и евро (валюту разом сметают в обменниках). Местная молодёжь на улицах предпринимает попытки говорить по-английски даже друг с другом. В прессе – исполненные надежд рассуждения «о наших европейских партнёрах». Видны небезуспешные старания сделать город удобным для туристов. Пусть пока они сопровождаются нелепицами (так, по мнению авторов новёхонького сине-жёлтого указателя на Майдане Незалежности, «вулиця Прорiзна» переводится на английский как «vul. Prorizna») – это пройдёт: старые чёрно-белые указатели говорят, что здесь умели переводить и правильно. Но специфическое желание нравиться Европе – останется. К примеру, в Киеве много красивых девушек. И это имеет своё объяснение.
        </div>
    </div>
</div>
    <div class="content">
        <div class="row">
            <div class="col-sm-12 col-md-2 col-lg-2">
                <img src="images/cloun.png">
            </div>
            <div class="col-sm-12 col-md-7 col-lg-7">
                <a href='single-course.php'><b>Исследование межличностных отношений в коллективе методом социометрии</b></a>
                <p>Повышение квалификации</p>
                <p>обучение с 27 марта (дистанционно)</p>
                <p>продолжительность 27 часа</p>
                <p>Документ:Удостоверение и повышения квалификации</p>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3">
                <div style="text-align: center; margin-top: 14px; margin-bottom: 18px">
                    <span href="#" data-scroll style="border-radius:4px;background: red; padding: 5px;color: white"><b>Скидка -50%</b></span>
                    <br>
                    <br>
                    <p style="color: darkgray;font-size:11px;text-decoration: line-through;">4000 руб.</p>
                    <p><b>2000 руб.</b></p>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalBig">Подать заявку</button>
                </div>
            </div>
        </div>
    </div>

@endsection