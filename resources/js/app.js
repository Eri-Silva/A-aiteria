import './bootstrap';

//função para limitar a checkbox de tamanho
$(function(){
  var MAX_SELECT = 1; // Máximo de 'input' selecionados
  
  $('input.limited').on('change', function(){
    if( $(this).siblings(':checked').length >= MAX_SELECT ){
       this.checked = false;
    }
  });
});