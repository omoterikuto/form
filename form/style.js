$(function() {
  for (var i=1; i<=5; i++) {
    $(`.form__item:nth-child(${i})`).hide().fadeIn(i*500);
  }
  $('.contact-title').slideDown(1000);
});