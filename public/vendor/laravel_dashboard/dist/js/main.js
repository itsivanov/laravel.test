$(document).ready(function() {

  $('div').on('focusin', '#pass', function(){
      $(this).attr('type','text');
    });

  $('div').on('focusout', '#pass', function(){
      $(this).attr('type','password');
  });

});
