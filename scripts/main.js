

$(document).ready(function() {
    // Seleccionamos los dos divs
    var login = $("#login");
    var register = $("#register");
    var formlog = $("#formlog")
    var formreg = $("#formreg")
    
    // Evento para cambiar la clase activa
    login.click(function() {
      // Quitamos la clase activa al otro div
      register.removeClass("active");
      // Agregamos la clase activa al div actual
      login.addClass("active");
  
      // Cambiamos el atributo display
      formlog.css("display", "block");
      formreg.css("display", "none");
      
    });
  
    // Evento para cambiar la clase activa
    register.click(function() {
      // Quitamos la clase activa al otro div
      login.removeClass("active");
      // Agregamos la clase activa al div actual
      register.addClass("active");
  
      // Cambiamos el atributo display
      formlog.css("display", "none");
      formreg.css("display", "block");
    });
  });
  
  