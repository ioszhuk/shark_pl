$(document).ready(function () {

    $("#menu-mobile .drop div.expand").click(function (a) {
        a.stopPropagation();
        var e = $(this).parent();
        $(this).next().toggle(300), e.hasClass("collapse") ? e.removeClass("collapse") : e.addClass("collapse")
    })

});

function articleVisabilityHandler() {
    var articleBox = document.getElementById("hidden-string");
    var showButton = document.getElementById("show-article-button");
    if(articleBox.style.display == "none") {
        $("#hidden-string").fadeIn("300");
        showButton.innerHTML = "Скрыть &and;";
    } else {
        $("#hidden-string").fadeOut("300");
        showButton.innerHTML = "Читать далее &or;";
    }
}

function mobileMenuHandler() {
    var mobileMenuObject = document.getElementById("menu-mobile");

    $(".dropdown-menu").removeClass("active");

    if(mobileMenuObject.style.display === "none") {
        mobileMenuObject.style.display = "block";
    } else {
        mobileMenuObject.style.display = "none";
    }
}

$(".btn.dropdown-toggle").click(function(){
    var mobileMenuObject = document.getElementById("menu-mobile");
    $(".dropdown-menu").toggleClass("active");
    mobileMenuObject.style.display = "none";
});

function showPressNews() {
    $(".invisible-press-news").css("display","block");
}

function closethan(){
    $("#thank").fadeOut(200);
}

function formsend(ee){
    console.log("1 " + ee);
    var form_data = ee.serialize(); //собераем все данные из формы
    console.log("2 " + form_data);
    $.ajax({
        type: "POST", //Метод отправки
        url: "https://shark-taxi.ua/wp-content/themes/shark-taxi-ukraine/action.php", //путь до php фаила отправителя
        data: form_data,
        success: function() {
            //код в этом блоке выполняется при успешной отправке сообщения
            dataLayer.push({'eventCategory':'click','eventAction':'form','eventLabel':'form-success','event':'shark-ua-form'});
            $("#thank").fadeIn(200);
            $("#formx")[0].reset();
        }
    });
}