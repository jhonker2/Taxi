$(document).ready(function(){
  $("#usuario").focus();
})

  $("#clave").keypress(function(tecla) {
    if (tecla.which == 13) {
        login();
    }
});

  $("#btn_login").click(function(){
    login();
  })

 function login(){
     //loader_login('on');
      var usuario   = $('#usuario').val();
      var clave  = $('#clave').val();
      var token     = $('#token').val();
      debugger
      if(usuario=="" && clave==""){
        alert("usuario y contraseña esta vacio");
         //loader_login('off');        
      }else{
          ////loader_login('on');
        $.ajax({url:'/logeo', type:'POST', headers :{'X-CSRF-TOKEN': token}, dataType:'json',
            data:{usuario:usuario,clave:clave},
            success:function(response){ 
                //loader_login('off');
                   if(response.sms=="login"){
                 ////loader_login('off');
                  alert("Bienvenido");
                  redirect('/app');
                  }else{
                  ////loader_login('off');
                  alert("Usuario Incorrectos");
                 }
              }
          });
      }
    }
  function redirect(url){
    window.location=url;
  }
  function loader_login(v){
    if(v== 'on'){
      $('.form-signin').css({
        opacity: 0.4
      });
        $('#lod').show();
    }else{
      $('.form-signin').css({
        opacity: 1
      });
      $('#lod').hide();
    }
  }