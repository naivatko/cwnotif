$(document).ready(function() {

$.validator.addMethod("alphanumeric", function(value, element) {
          return this.optional(element) || /^[a-z0-9]+$/i.test(value);
      }, "Username hanya boleh huruf atau angka saja");

$.validator.addMethod("ignRule", function(value, element) {
          return this.optional(element) || /^[a-z0-9_]+$/i.test(value);
      }, "Gunakan format IGN sesuai aturan WG");

/*$.validator.setDefaults({
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
  });*/

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
                required:'Password tidak boleh kosong',
                minlength:'Password minimal 5 karakter',
                equalTo :'Isikan sesuai password'},
            ign: {
                required:'IGN tidak boleh kosong',
                minlength:'Masukkan minimal 3 karakter'}
            },
    tootlip_options:{
            username: {trigger:'focus', placement:'right'},
            password: {trigger:'focus', placement:'right'},
            repassword: {trigger: 'focus', placement:'right'},
            ign: {trigger: 'focus', placement:'right'}
            }

//    success: function(label) {
//        label.text('OK!').addClass('valid');}
    });
});
