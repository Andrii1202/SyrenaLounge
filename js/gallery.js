(function() {
    var init = document.getElementById('coctails');
    var more = document.getElementById('more');

    var arrCoctails = document.getElementsByClassName('coctails');
    var arrVenue = document.getElementsByClassName('venue');
    var arrEvents = document.getElementsByClassName('events');

    var filterCoctails = document.getElementById('coctails');
    var filterVenue = document.getElementById('venue');
    var filterEvents = document.getElementById('events');

    var flag = false;

    hidden(arrVenue, arrEvents);
    show(arrCoctails);

    console.log(arrCoctails.lenght);

    filterVenue.addEventListener('click', function() {
        flag = false;
        more.style.display = 'flex';
        hidden(arrCoctails, arrEvents);
        show(arrVenue, flag);
        changeFont(this);
    });

    filterCoctails.addEventListener('click', function() {
        flag = false;
        more.style.display = 'flex';
        hidden(arrVenue, arrEvents);
        show(arrCoctails, flag);
        changeFont(this);
    });

    filterEvents.addEventListener('click', function() {
        flag = false;
        more.style.display = 'flex';
        hidden(arrVenue, arrCoctails);
        show(arrEvents, flag);
        changeFont(this);
    });

    more.addEventListener('click', function() {
        if (init.id == 'coctails') {
            flag = true;
            show(arrCoctails, flag);
            more.style.display = 'none';
        }
        if (init.id == 'venue') {
            flag = true;
            show(arrVenue, flag);
            more.style.display = 'none';
        }
        if (init.id == 'events') {
            flag = true;
            show(arrEvents, flag);
            more.style.display = 'none';
        }
    });


    function show(arrShow, flag) {
        for (var i = 0; i < arrShow.length; i++) {
            if (arrShow.length < 9) {
                more.style.display = 'none';
            }
            if (i < 9 || flag) {
                arrShow[i].style.display = 'block';
            } else {
                arrShow[i].style.display = 'none';
            }
        }
    }

    function hidden(arrFirst, arrSecond) {
        for (var i = 0; i < arrFirst.length; i++) {
            arrFirst[i].style.display = 'none';
        }
        for (var i = 0; i < arrSecond.length; i++) {
            arrSecond[i].style.display = 'none';
        }
    }

    function changeFont(el) {
        el.style.fontWeight = 'bold';
        init.style.fontWeight = 'normal';
        init = el;
    }
}());