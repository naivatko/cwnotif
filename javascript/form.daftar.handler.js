$(document).ready(function() {

  $.validator.addMethod("alphanumeric", function(value, element) {
            return this.optional(element) || /^[a-z0-9]+$/i.test(value);
        }, "Username hanya boleh huruf atau angka saja");

  $.validator.addMethod("ignRule", function(value, element) {
            return this.optional(element) || /^[a-z0-9_]+$/i.test(value);
        }, "Gunakan format IGN sesuai aturan WG");

  $(function(){
    $('[data-toggle="tooltip"]').tooltip()
  });

  $.validator.setDefaults({
    errorClass: 'help-block',
    highlight: function(element){
        $(element)
          .closest('.form-group')
          .addClass('has-error');
        },
    unhighlight: function(element){
        $(element)
          .closest('.form-group')
          .removeClass('has-error');
        }
    });

  $("#form-daftar").validate({
      rules:{
              username:{required: true, alphanumeric: true, minlength: 5},
              password:{required: true, alphanumeric: true, minlength: 5},
              repassword:{required: true, alphanumeric: true, equalTo:"#password", minlength: 5},
              ign:{required: true, ignRule: true, minlength: 3}
            },
      messages:{
              username: {
                  required:'Username tidak boleh kosong',
                  minlength:'Username minimal 5 karakter'},
              password: {
                  required :'Password tidak boleh kosong',
                  minlength:'Password minimal 5 karakter'},
              repassword: {
                  required:'Isikan sesuai password',
                  minlength:'Isikan sesuai password',
                  equalTo :'Isikan sesuai password'},
              ign: {
                  required:'Masukkan nick WoT kamu',
                  minlength:'Masukkan minimal 3 karakter'}
              },
      tooltip_options:{
              username:{placement:'top'},
              password:{placement:'top'},
              repassword:{placement:'top'},
              ign:{placement:'top'}
              }

  //    success: function(label) {
  //        label.text('OK!').addClass('valid');}
  });
});
