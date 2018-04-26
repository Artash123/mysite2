$("#mainNav>li>a").click(function() {
    $("#mainNav>li>a").removeClass("active");
    var $this = $(this);
    $this.addClass("active")
});

$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("active");
});

/*Scroll Spy*/
$('body').scrollspy({ target: '#spy', offset:80});





$( ".trigger_btn" ).on( "click", function() {
    $('#file_input').trigger('click');
});




function getRandomInt(min, max)
{
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

$("#minus").click(function () {

    var minus = $(".members_num").val() ;
    minus--;
    $(".members_num").val(minus);


    $(".plus:last-child").fadeOut(100, function () {
        $(this).remove();
        $(".plus:last-child")
    })

});
$("#plus").click(function () {

    var k = getRandomInt(1, 10)
    var path = "images/add_anim/"+k+".png" ;

    var plus = $(".members_num").val() ;
    plus++;
    $(".members_num").val(plus);

    $(".minus:last-child").fadeIn();
    $(".animation").append("<img src='' alt='' class='anim_img plus new_appended' style='display: none'>");
    $(".new_appended").attr("src",path);
    $(".new_appended").removeClass("new_appended");

    $(".plus:last-child").fadeIn("slow", function () {

    });


});

var width = 0;
$(document).ready(function function_name(argument) {
    width = $(".profile_inf").width();
});
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 200) {
        $(".scrolStatic").addClass("staticHeader");
        $(".scrolStatic").width(width);
    } else {
        $(".profile_inf").removeClass("staticHeader");
    }
});

$('.regist-eye').click(function () {
    if($(this).next().attr('type')=="text"){

        $(this).removeClass('fa fa-eye');
        $(this).addClass('fa fa-eye-slash');
        $(this).next().prop('type', 'password');

    }else{
        $(this).removeClass('fa fa-eye-slash');
        $(this).addClass('fa fa-eye');
        $(this).next().prop('type', 'text');

    }

});
$('#to-top *').click(function () {

    $('html, body').animate({
        scrollTop: $(".logo").offset().top
    }, 1500);
});


$('.forgotPassword').click(function () {
    $('#loginModal').modal('hide');
});

$('.login-to-registr').click(function () {
    $('#loginModal').modal('hide');
    $('#registerModal').modal('show');
});
$('.user-1').mousemove(function () {
    $(this).css('background-image',"url(images/user-1-h.png)");
}).mouseleave(function () {
    $(this).css('background-image',"url(images/user-1.png)");
});
$('.user-2').mousemove(function () {
    $(this).css('background-image',"url(images/user-2-h.png)");
}).mouseleave(function () {
    $(this).css('background-image',"url(images/user-2.png)");
});
$('.user-3').mousemove(function () {
    $(this).css('background-image',"url(images/user-3-h.png)");
}).mouseleave(function () {
    $(this).css('background-image',"url(images/user-3.png)");
});

$("#forgotPasswordMy").click(function(){
    setTimeout(function() {
        $("#forgotModal").modal('toggle');}, 600);
});

