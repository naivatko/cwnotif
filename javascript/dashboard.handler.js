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

  function getSvc(){
    $.post("modules/select_svc_status.php", function(data){
      svc_status = data;
    });
  };

  function updateSvc(currentSvc){
    $.post(
      "modules/update_svc_status.php",
      {svc_status:currentSvc},
      function(data){
        console.log("jawaban server = "+data);
      }
    );
  };

  $(function(){
    $('[data-toggle="tooltip"]').tooltip()
  });

  if(svc_status == 1){
    $('#svc-check').prop('checked', true);
  }

  $(function(){
    if(no_hp == ''){
      $('#svc-check').prop('disabled', true);
      $('#toggle-button').tooltip({
        placement:'top',
        title:'Anda belum memasukkan nomor HP anda, silakan ke halaman edit'
      });
    }
  });

  checkThis();
  $('#svc-check').change(function(){
    console.log("sebelum update = "+svc_status);
    checkThis();
    updateSvc(svc_status);
    });
});
