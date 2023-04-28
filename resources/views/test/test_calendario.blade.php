<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>

    <style>
        .calendar {
  font-family: Arial, sans-serif;
  max-width: 350px;
  margin: 0 auto;
  border-collapse: collapse;
}

.month {
  padding: 20px 25px;
  background: #1abc9c;
  text-align: center;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.month ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

.month li {
  color: white;
  font-size: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
}

.weekdays {
  margin: 0;
  padding: 10px 0;
  background-color: #ddd;
  display: flex;
}

.weekdays li {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: calc(100% / 7);
  height: 50px;
  font-size: 14px;
  text-transform: uppercase;
}

.days {
  margin: 0;
  padding: 0;
  background-color: #fff;
  display: flex;
  flex-wrap: wrap;
}

.days li {
  display: flex;
  justify-content: center;
  align-items: center;
  width: calc(100% / 7);
  height: 50px;
  font-size: 14px;
}

.days li.inactive {
  background-color: #f5f5f5;
  color: #999;
}

.days li.active {
  background-color: #1abc9c;
  color: white;
}
    </style>
    <script>
        
  const date = new Date();

const renderCalendar = () => {
  const monthDays = document.querySelector(".days");
  const currentMonth = document.querySelector("#currentMonth");

  // Obtener el mes y año actual
  const monthIndex = date.getMonth();
  const year = date.getFullYear();

  // Obtener el número de días del mes actual
  const daysInMonth = new Date(year, monthIndex + 1, 0).getDate();

  // Obtener el primer día del mes actual
  const firstDayOfMonth = new Date(year, monthIndex, 1).getDay();

  // Definir un arreglo con los nombres de los meses
  const monthNames = [
    "Enero",
    "Febrero",
    "Marzo",
    "Abril",
    "Mayo",
    "Junio",
    "Julio",
    "Agosto",
    "Septiembre",
    "Octubre",
    "Noviembre",
    "Diciembre"
  ];

  // Actualizar el mes actual en la página
  currentMonth.innerHTML = `${monthNames[monthIndex]} ${year}`;

  // Limpiar el contenido de la sección "days"
  monthDays.innerHTML = "";

  // Agregar los días del mes actual al calendario
  let day = 1;

  for (let i = 0; i < 6; i++) {
    const week = document.createElement("ul");
    week.classList.add("week");

    for (let j = 0; j < 7; j++) {
      const dayOfMonth = document.createElement("li");
      dayOfMonth.classList.add("day");

      if (i === 0 && j < firstDayOfMonth) {
        // Días del mes anterior
        dayOfMonth.classList.add("inactive");
        const lastMonth = new Date(year, monthIndex, 0).getDate();
        dayOfMonth.innerHTML = `<span class="number">${lastMonth - (firstDayOfMonth - j - 1)}</span>`;
      } else if (day > daysInMonth) {
        // Días del mes siguiente
        dayOfMonth.classList.add("inactive");
        dayOfMonth.innerHTML = `<span class="number">${day - daysInMonth}</span>`;
        day++;
      } else {
        // Días del mes actual
        dayOfMonth.innerHTML = `<span class="number">${day}</span>`;
        if (day === date.getDate() && year === date.getFullYear() && monthIndex === date.getMonth()) {
          dayOfMonth.classList.add("active");
        }
        day++;
      }

      week.appendChild(dayOfMonth);
    }

    monthDays.appendChild(week);
  }
};

renderCalendar();
    </script>
</head>

<body>
<div class="calendar">
  <div class="month"> 
    <ul>
      <li class="prev">&#10094;</li>
      <li class="next">&#10095;</li>
      <li>
        <span id="currentMonth"></span>
      </li>
    </ul>
  </div>

  <ul class="weekdays">
    <li>Domingo</li>
    <li>Lunes</li>
    <li>Martes</li>
    <li>Miércoles</li>
    <li>Jueves</li>
    <li>Viernes</li>
    <li>Sábado</li>
  </ul>

  <ul class="days">  
  </ul>
</div>
</body>
</html>
