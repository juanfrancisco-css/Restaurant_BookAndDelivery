//////////////// funciones que se van a cargar al body \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
function cargar(){

ObtenerPromocion();
ObtenerDiaPizza();
setCalendar() ;
}

////////////// obtener el dia y la promocion \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\º
function obtenerDiaActual() {
    const diasSemana = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
    const fecha = new Date();
    const diaActual = diasSemana[fecha.getDay()];
    return diaActual;
  }
  function Promocion(dia) {
    dia=dia.toLowerCase()
    let offer="";
    let btn="";
    switch (dia) {
        case 'martes':
           
        case 'miércoles':
          offer="10% de descuento ";
          btn="Pedir Ahora";
        break;
        case 'jueves':
          offer="20% de descuento ";
          btn="Pedir Ahora";
        break;
      
      default:
       offer=" de disfrutar";
       btn="Ver el Menu";
    }
    document.getElementById('btn-dia').innerHTML=btn;

    return offer;
  }

  function ObtenerPromocion(){

    var dia = obtenerDiaActual();
    document.getElementById('dia').innerHTML=dia;
    console.log(dia);

var offer=  Promocion(dia) 
console.log(offer);

if(offer != ""){
document.getElementById('oferta').innerHTML=offer;

}
  }/////////////////// fin \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ºº

  ///////////////////////////////   Obtener dia de la pizza \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ºº
  function DiaPizza(dia){

    dia=dia.toLowerCase()
    let offer="";
    let btn="";
    switch (dia) {
       
        case 'miércoles':
         
       
        case 'jueves':
          offer=" Dia de la Pizza ";
          btn="Pedir Ahora";
        break;
      
      default:
       offer=" Miercoles y Jueves dia de la Pizza ";
       btn="Ver el Menu";
    }
    document.getElementById('btn-pizza').innerHTML=btn;
    return offer;
  }

  function ObtenerDiaPizza(){

    var dia = obtenerDiaActual();
    var offer=  DiaPizza(dia);
console.log(offer);

if(offer != ""){
document.getElementById('DiaPizza').innerHTML=offer;
}
  }//////////////////////// fin \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
 
  
  ///////////////////////////////// Calendario \\\\\\\\\\\\\\\\\\\\\\\\\\\

  function setCalendar() {
    // Obtener la fecha actual
    var today = new Date();
  
    // Obtener el mes y el día actual
    var currentMonth = today.getMonth();
    var currentDay = today.getDate();
  
    // Obtener todos los elementos de día en el calendario
    var days = document.querySelectorAll(".calendar__day");
  
    // Recorrer cada elemento de día y verificar si es el día actual
    for (var i = 0; i < days.length; i++) {
      var day = days[i];
      var dayNumber = parseInt(day.textContent);
  
      if (dayNumber === currentDay && currentMonth === 3) {
        day.classList.add("current"); // Agregar clase "current" para resaltar el día actual
        break;
      }
    }
  }