(function($){
$(window).load(function (){
    $('body').css('background', 'inherit');
    $('.prel-wrap').fadeIn(3000);
    $('.prel-vrl').fadeOut(3000);
    $('.prel-cont').addClass('prel-cont-flip');
    $(".clrpckr1").iris({controls:{horiz:"s",vert:"l",strip:"h"},toggle:!0,border:!0,target:!1,width:200,palettes:!0}),
    $(".clrpckr2").click(function(){$(".clrpckr2").iris('toggle');});
    $(".clrpckr2").iris({controls:{horiz:"s",vert:"l",strip:"h"},toggle:!0,border:!0,target:!1,width:200,palettes:!0}),
    $(".clrpckr1").click(function(){$(".clrpckr1").iris('toggle');});
});
})(jQuery);
