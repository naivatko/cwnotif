$(document).ready(function() {

$.validator.addMethod("alphanumeric", function(value, element) {
        return this.optional(element) || /^[a-z0-9]+$/i.test(value);
    }, "Username hanya boleh huruf atau angka saja");

$.validator.addMethod("ignRule", function(value, element) {
        return this.optional(element) || /^[a-z0-9_]+$/i.test(value);
    }, "Gunakan format IGN sesuai aturan WG");

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

     success: function(label) {
        label.text('OK!').addClass('valid');}
    });
});