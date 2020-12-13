$(document).ready(function(){
    $('.carregamento-page').fadeOut();

    $('#kenny-nogueira').mouseenter(function(){
        $('#overlap-kenny-nogueira').show();
    });
    $('#kenny-nogueira').mouseout(function(){
        $('#overlap-kenny-nogueira').hide();
    });
    $('#roberto-navegantes').mouseenter(function(){
        $('#overlap-roberto-navegantes').show();
    });
    $('#roberto-navegantes').mouseout(function(){
        $('#overlap-roberto-navegantes').hide();
    });

    setInterval(() => {
        $('.success').fadeOut();
        $('.danger').fadeOut();
    }, 3000);

    $('.imgs-galeria').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        arrows: false,
        centerMode: true,
        responsive: [
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 450,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
    $('.img-galeria img').on('click', function(){
       image = $(this).attr('src');
       $('.container-single-container').fadeIn();
       $('body').css('overflow','hidden');
       $('.img-single').css('background-image','url('+image+')');
       $
    //    style="background-image: url(img/galeria/FOTOS-2.png);"
    });   

    $('.btn-close-img').on('click',function(){
        $('.container-single-container').fadeOut();
        $('body').css('overflow','auto');
    });

    $('.celular').mask('(00) 00000-0000');
}); 