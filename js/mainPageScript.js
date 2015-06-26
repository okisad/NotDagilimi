/**
 * Created by oktaysahinsadoglu on 24.06.2015.
 */

$(document).ready(function(){

    var emailAdress = getCookie('email_address');

    if(emailAdress) {

        emailAdress = decodeURIComponent(emailAdress);

        $('.modal-body p').text(emailAdress + " Olarak Giriş Yaptınız");

        $("#myModal").modal({show: true}).modal({backdrop: "static"});

        var i = 1;

        setInterval(function () {

            if (i == 0) {

                $("#myModal").modal('hide');
            }
            i--;
        }, 1000);

    }
});

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
