$(document).ready(function(){


    $('.cadastro').hide();
    
    $('.criar-conta').click(function(){

        $('.cadastro').show();
        $('.login').hide();

    })

    $('.fazer-login').click(function(){

        $('.cadastro').hide();
        $('.login').show();

    })


});
