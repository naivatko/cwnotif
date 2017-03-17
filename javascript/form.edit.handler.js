$.validator.addMethod("numeric", function(value, element) {
          return this.optional(element) || /^[0-9]+$/i.test(value);
      }, "Isikan nomor HP anda dengan benar");

$(document).ready(function(){
  
  $('#form-edit').change(function(){
    $(this).validate({
      rules:{
        no_hp:{numeric: true}
      },
      messages:{
        no_hp:{
          minlength:"Isikan nomor HP anda dengan benar",
          maxlength:"Isikan nomor HP anda dengan benar"}
      },
      tooltip_options:{
        no_hp:{placement: 'top'}
      }

    });
  });
});
