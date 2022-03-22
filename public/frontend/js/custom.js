$('.navTrigger').click(function(){
  $('html').toggleClass('actNav');
})

$('.backDrop').click(function(){
  $('html').removeClass('actNav actNavD activeSearch');
})

$('.dbSearch_icon').click(function(){
  $('html').addClass('activeSearch');
})

$('.navTrigger2').click(function(){
  $('html').toggleClass('actNavD');
})
$('.sMenuLink > a').click(function(){
  $(this).parents('.sMenuLink').siblings().removeClass('activeSMenu');
  $(this).parents('.sMenuLink').siblings().find('ul.subMenuCol').slideUp();
  $(this).parents('.sMenuLink').toggleClass('activeSMenu');
  $(this).parents('.sMenuLink').find('ul.subMenuCol').slideToggle();
});
