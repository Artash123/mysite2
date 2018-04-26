@extends('index1')

@section('content')
        <div class="application_content">
            <div class="col-md-7">
            <h2>Подать заявку на участие</h2>
            <form action="">
                <div>
                    <table class="add_table">
                        <tr>
                            <td><label for="exampleFormControlSelect1">Предмет</label></td>
                            <td>
                                <select class="form-control items" id="exampleFormControlSelect1">
                                    <option>Выберите предмет</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="exampleFormControlSelect1">Мероприятие</label></td>
                            <td>
                                <select class="form-control items" id="exampleFormControlSelect2">
                                    <option>Выберите мероприятие</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="exampleFormControlSelect1">Учитель</label>
                            </td>
                            <td>
                                <input type="text" class="items">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="exampleFormControlSelect1">ОУ</label>
                            </td>
                            <td>
                                <input type="text" class="items">
                            </td>
                        </tr>
                    </table>

                </div>
            </form>
            <span class="pull-right right_link"><a href="#">Использовать купон</a></span>
        </div>
            <div class="col-md-5">
            <div class="col-grey">
                <div id="animation" class="animation">
                    <img src="/images/add_anim/1.png" alt="" class="anim_img plus minus">
                    <img src="/images/add_anim/2.png" alt="" class="anim_img plus">
                    <img src="/images/add_anim/3.png" alt="" class="anim_img plus">
                    <img src="/images/add_anim/4.png" alt="" class="anim_img plus">
                    <img src="/images/add_anim/5.png" alt="" class="anim_img plus">
                    <img src="/images/add_anim/6.png" alt="" class="anim_img plus">
                    <img src="/images/add_anim/7.png" alt="" class="anim_img plus">
                    <img src="/images/add_anim/8.png" alt="" class="anim_img plus">
                    <img src="/images/add_anim/9.png" alt="" class="anim_img plus">
                    <img src="/images/add_anim/10.png" alt="" class="anim_img plus">
                </div>
                <h6>Количество участников</h6>
                <div class="number-wrp">
                    <div id="minus" class="btn gray">–</div>
                    <input type="text" maxlength="2" min="0" value="10" name="count" id="n-of-members" class="members_num" data-vv-id="4" aria-required="true" aria-invalid="false">
                    <div id="plus" class="btn gray">+</div>
                </div>
                <div class="for-payment">
                    <p>Собрать с участников <span class="r-sum">1650 руб.</span></p>
                    <p>Скидка на расходы <span class="r-skidka">-495 руб.</span></p>
                    <p>К оплате <span class="r-k-oplate"> <span>1155 руб.</span> </span></p>
                </div>
                <input type="submit" value="Подать заявку" class="btn green">
            </div>
        </div>
            <div class="clear"></div>
        </div>
        <div class="info_block">

            <div class="wrp priem">
                <h2>Серия международных олимпиад «Школьное многоборье. Март 2018»</h2>
                <div class="col-md-3 v-center">
                    <img src="/images/5.svg" alt="">
                    <div class="desc">
                        <h3>Подарки</h3>
                        <p>учителям и ученикам</p>

                    </div>
                </div>
                <div class="col-md-3 v-center">
                    <img src="/images/6.svg" alt="">
                    <div class="desc">
                        <h3>Мгновенное </h3>
                        <p>получение результатов</p>

                    </div>
                </div>
                <div class="col-md-3 v-center">
                    <img src="/images/4.svg" alt="">
                    <div class="desc">
                        <h3>Бесплатные</h3>
                        <p>наградные материалы</p>

                    </div>
                </div>
                <div class="col-md-3 v-center">
                    <img src="/images/3.svg" alt="">
                    <div class="desc">
                        <h3>Компенсация</h3>
                        <p>расходов <span>до</span> 50%</p>
                    </div>
                </div>
            </div>
            <div class="clear"></div>

        </div>
@endsection