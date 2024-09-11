
document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    themeSystem: 'bootstrap5',

     // height: 650,
     initialDate: '2024-07-05',

    headerToolbar: { 
      center: 'dayGridMonth,timeGridWeek',
      
        start: 'title', // will normally be on the left. if RTL, will be on the right
        center: '',
        end: 'today prev,next' // will normally be on the right. if RTL, will be on the left
       
    },

    titleFormat: {
      year: 'numeric', 
      month: 'short', 
      day: 'numeric',                 // like 'September 2009', for month view
      // { year: 'numeric', month: 'short', day: 'numeric' } // like 'Sep 13 2009', for week views
      // { year: 'numeric', month: 'long', day: 'numeric' }  // like 'September 8 2009', for day views
    },
    customButtons: {
      myCustomButton: {
        text: 'custom!',
        click: function() {
          alert('clicked the custom button!');
        }
      }
    },

    buttonText: {
        today:   'Hoje',
        month:   'mês',
        week:    'semana',
        day:     'dia',
        list:    'lista'
      
    },

    buttonIcons: {
      prev: 'chevron-left',
      next: 'chevron-right',
      prevYear: 'chevrons-left', // double chevron
      nextYear: 'chevrons-right' // double chevron
    },
    events: [
      { 
        id: 1,
        startEditable: true,
        title: 'Época de provas', 
        allDay: false,
        start: '2024-07-05T09:45:00', 
        end: '2024-07-05T12:45:00', // Término no mesmo dia para evitar ambiguidade
        color: 'red'
      },
      { 
        id: 2,
        startEditable: true,
        title: 'Época de provas',
        allDay: false,
        start: '2024-07-06T09:45:00',
        end: '2024-07-06T12:45:00',
        color: 'red'
      },
      // Continue definindo eventos para cada dia de prova e recuperação
      { 
        id: 3,
        startEditable: true,
        title: 'Recuperação',
        allDay: false,
        start: '2024-07-13T09:45:00',
        end: '2024-07-13T12:45:00',
        color: 'orange'
      },
      { 
        id: 4,
        startEditable: true,
        title: 'Recuperação',
        allDay: false,
        start: '2024-07-14T09:45:00',
        end: '2024-07-14T12:45:00',
        color: 'orange'
      }
    ]
,


    // initialView: 'dayGridMonth',
    initialView: 'listWeek',
    // initialView: 'timeGridFourDay',
    // initialView: 'timeGridWeek',

    // events: [
    //   {
    //     title: 'Meeting',
    //     start: '2019-08-12T14:30:00',
    //     extendedProps: {
    //       status: 'done'
    //     }
    //   },
    //   {
    //     title: 'Birthday Party',
    //     start: '2019-08-13T07:00:00',
    //     backgroundColor: 'green',
    //     borderColor: 'green'
    //   }
    // ],

    // eventDidMount: function(info) {
    //   if (info.event.extendedProps.status === 'done') {

    //     // Change background color of row
    //     info.el.style.backgroundColor = 'red';

    //     // Change color of dot marker
    //     var dotEl = info.el.getElementsByClassName('fc-event-dot')[0];
    //     if (dotEl) {
    //       dotEl.style.backgroundColor = 'white';
    //     }
    //   }
    // },

    views: {
      dayGridMonth: { // name of view
        titleFormat: { year: 'numeric', month: '2-digit', day: '2-digit' }
        // other view-specific options here
      }
    }

  });

  // calendar.setOption('height', 700);
  calendar.setOption('aspectRatio', 1.8);
  calendar.setOption('contentHeight', 350);
  calendar.setOption('locale', 'pt');

  // calendar.getEvents();


  calendar.render();


  document.getElementById('prev-calendar').addEventListener('click', function(e) {
    e.preventDefault();
    calendar.prev();
  });

  document.getElementById('next-calendar').addEventListener('click', function(e) {
    e.preventDefault();
    calendar.next();
  });

  document.getElementById('today-calendar').addEventListener('click', function(e) {
    e.preventDefault();
    calendar.today();
  });

  document.getElementById('get-calendar').addEventListener('click', function() {
    var date = calendar.getDate();
    alert("The current date of the calendar is " + date.toISOString());
  });

});


// var calendar = new Calendar(calendarEl, {
//   timeZone: 'UTC',
//   events: [
//     {
//       id: 'a',
//       title: 'my event',
//       start: '2018-09-01'
//     }
//   ]
// })

// var event = calendar.getEventById('a') // an event object!
// var start = event.start // a property (a Date object)
// event.setStart('2018-06-01');
// event.setEnd('2018-06-01');
// event.setAllDay(false);
// // event.setDates(start, end, opt);

// // event.remove();
// console.log(start.toISOString()) // "2018-09-01T00:00:00.000Z"