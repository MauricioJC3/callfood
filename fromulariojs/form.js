document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("formulario").addEventListener('submit', validarFormulario); 
  });
  
  function validarFormulario(evento) {
    evento.preventDefault();
    var usuario = document.getElementById('tamaño1').value;
    if(usuario.length == 0) {
      alert('No has escrito nada en el usuario');
      return;
    }
    var apellido = document.getElementById('tamaño2').value;
    if(apellido.length == 0) {
      alert('No has escrito nada en el apellido');
      return;
    }
    var telefono = document.getElementById('tamaño3').value;
    if(telefono.length < 10) {
      alert('el telfono debe tener 10 caracteres');
      return;
    }
    var correo = document.getElementById('tamaño4').value;
    if(correo.length == 0) {
      alert('No has escrito nada en el correo');
      return;
    }
    var clave = document.getElementById('tamaño5').value;
    if (clave.length < 6) {
      alert('La clave debe tener 6 caracteres');
      return;
    }
   

    this.submit();
  }