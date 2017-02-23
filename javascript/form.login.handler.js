$(document).ready(function(){

  $.validator.addMethod("alphanumeric", function(value, element){
    return this.optional(element) || /^[a-z0-9]+$/i.test(value);
  }, "Hanya boleh huruf atau angka saja");

  $(function(){
    $('[data-toggle="tooltip"]').tooltip()
  });

  $("#form-login").validate({
    rules:{
      username:{required: true, alphanumeric: true},
      password:{required: true, alphanumeric: true}
    },
    messages:{
      username:{required:'Username tidak boleh kosong'},
      password:{required:'Password tidak boleh kosong'}
    },
    tooltip_options:{
      username:{placement:'right'},
      password:{placement:'right'}
    }
  });
});
