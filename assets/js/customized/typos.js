document.addEventListener('DOMContentLoaded', () => {
    const daysContainer = document.querySelector('.days');
    const monthPicker = document.querySelector('.current-month');
    const prevMonthBtn = document.querySelector('.prev-month');
    const nextMonthBtn = document.querySelector('.next-month');
    
    let date = new Date();
    let month = date.getMonth();
    let year = date.getFullYear();

    const months = [
        'January', 'February', 'March', 'April', 'May', 'June', 
        'July', 'August', 'September', 'October', 'November', 'December'
    ];

    const weekdays = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

    function renderCalendar() {
        monthPicker.textContent = `${months[month]} ${year}`;
        daysContainer.innerHTML = '';

        const firstDay = new Date(year, month, 1).getDay();
        const lastDate = new Date(year, month + 1, 0).getDate();
        const prevLastDate = new Date(year, month, 0).getDate();

        // Preencher dias do mês anterior
        for (let i = firstDay; i > 0; i--) {
            daysContainer.innerHTML += `<div class="prev-date">${prevLastDate - i + 1}</div>`;
        }

        // Preencher dias do mês atual
        for (let i = 1; i <= lastDate; i++) {
            daysContainer.innerHTML += `<div>${i}</div>`;
        }

        // Preencher dias do próximo mês
        const totalCells = firstDay + lastDate;
        const nextDays = 7 - (totalCells % 7);
        if (nextDays < 7) {
            for (let i = 1; i <= nextDays; i++) {
                daysContainer.innerHTML += `<div class="next-date">${i}</div>`;
            }
        }
    }

    prevMonthBtn.addEventListener('click', () => {
        if (month === 0) {
            month = 11;
            year--;
        } else {
            month--;
        }
        renderCalendar();
    });

    nextMonthBtn.addEventListener('click', () => {
        if (month === 11) {
            month = 0;
            year++;
        } else {
            month++;
        }
        renderCalendar();
    });

    daysContainer.addEventListener('click', (e) => {
        if (e.target.matches('.days div') && e.target.textContent) {
            document.querySelectorAll('.days div').forEach(day => {
                day.classList.remove('selected');
            });
            e.target.classList.add('selected');
        }
    });

    renderCalendar();
});