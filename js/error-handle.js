/**
 * Created by oktaysahinsadoglu on 1.05.2015.
 */
$(document).ready(function(){

        var errorLoginText=getCookie('login_error_message');

        var errorRegText=getCookie('register_error_message');

        var email = getCookie('login_email_data');

        var regemail = getCookie('register_email_data');

        var isSuccessful = getCookie('register_is_successful');

        //Control of cookies
        if(!are_cookies_enabled()){

            errorLoginText = "Lütfen Cookie Ayarlarınızı Etkinleştiriniz"

            $("#myModal").modal({show: true}).modal({backdrop: "static"});

            $(".modal-body").find("p").text(errorLoginText);

            $(".modal-header").find("h4").text("COOKİE");

            $(".modal-content").css("background-color","#df691a");


        }


        // Errored login
        if(errorLoginText){

            errorLoginText = decodeURIComponent(errorLoginText).replace(/\+/g, ' ');

            if(errorLoginText==="Hatalı Şifre Girdiniz"){

                $("#signin").find("div").first().find("input").val(decodeURIComponent(email));

                $("#signin").find("div").first().next().addClass('has-error');

            }else if(errorLoginText==="Email Adresi Bulunamadı") {

                $("#signin").find("div").first().addClass("has-error");

            }

            $("#myModal").modal({show: true}).modal({backdrop: "static"});

            $(".modal-body").find("p").text(errorLoginText);

            $(".modal-content").css("background-color","#df691a");

            if(errorLoginText==="Database Hatası"){

                $(".modal-body").find("p").text(errorLoginText);

                $(".modal-header").find("h4").text("DATABASE BİLGİ");

            }

           var i = 1;
            setInterval(function () {

                if(i == 0) {

                    $("#myModal").modal('hide');
                }
                i--;
            }, 1000);



        }
        // Errored register
        if(errorRegText){

            errorRegText = decodeURIComponent(errorRegText).replace(/\+/g, ' ');

            $("#myModal").modal({show: true}).modal({backdrop: "static"});

            $(".modal-body").find("p").text(errorRegText);

            $(".modal-content").css("background-color","#df691a");

            if(errorRegText==="Database Hatası"){

                $(".modal-body").find("p").text("Database sorgusunda hata oluştu");

                $(".modal-header").find("h4").text("Database Bilgi");

            }

            if(regemail){

                $('#signup-form[type="email"]').text(regemail);

            }

            var i = 1;
            setInterval(function () {

                if(i == 0) {

                    $("#myModal").modal('hide');
                }
                i--;
            }, 1000);


        }

        if(isSuccessful){

            isSuccessful = decodeURIComponent(isSuccessful).replace(/\+/g, ' ');

            $("#myModal").modal({show: true}).modal({backdrop: "static"});

            $(".modal-header").find("h4").text("KAYIT BİLGİ");

            $(".modal-body").find("p").text(isSuccessful);

            $(".modal-content").css("background-color","#5cb85c");

            var i = 1;
            setInterval(function () {

                if(i == 0) {

                    $("#myModal").modal('hide');
                }
                i--;
            }, 1000);

        }


    $('#signin').one('focusin','div:first-child input',function(){
        $(this).removeClass('has-error');
    });
});





function get(name){
    if(name=(new RegExp('[?&]'+encodeURIComponent(name)+'=([^&]*)')).exec(location.search))
        return decodeURIComponent(name[1]);
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return false;
}

function are_cookies_enabled()
{
    var cookieEnabled = (navigator.cookieEnabled) ? true : false;

    if (typeof navigator.cookieEnabled == "undefined" && !cookieEnabled)
    {
        document.cookie="testcookie";
        cookieEnabled = (document.cookie.indexOf("testcookie") != -1) ? true : false;
    }
    return (cookieEnabled);
}
