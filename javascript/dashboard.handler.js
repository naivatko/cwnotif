$(document).ready(function(){

  function checkThis(){
    if($('#svc-check').prop('checked')){
      $('#svc-status-off').hide();
      $('#svc-status-on').show();
      svc_status = 1;
    } else {
      $('#svc-status-on').hide();
      $('#svc-status-off').show();
      svc_status = 0;
    }
  };

  if(svc_status == 1){
    $('#svc-check').prop('checked', true);
  }

  checkThis();

  $('#svc-check').change(function(){
    checkThis();
  });
});
