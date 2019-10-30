(function() {
    var mainFilter = document.getElementById('main');
    var alcoholFilter = document.getElementById('alcohol');
    var specialFilter = document.getElementById('special');
    var lunchFilter = document.getElementById('lunch');
    var activeFilter = lunchFilter;

    var mainPage = document.getElementById('main-page');
    var lunchPage = document.getElementById('lunch-page');
    var alcoholPage = document.getElementById('alcohol-page');
    var specialPage = document.getElementById('special-page');
    var activePage = lunchPage;


    mainPage.style.display = 'none';
    alcoholPage.style.display = 'none';
    specialPage.style.display = 'none';

    mainFilter.addEventListener('click', function() {
        remove();

        mainFilter.classList.add('active-food-filter');
        mainPage.style.display = 'flex';
        activeFilter = mainFilter;
        activePage = mainPage;
    });

    lunchFilter.addEventListener('click', function() {
        remove();

        lunchFilter.classList.add('active-food-filter');
        lunchPage.style.display = 'flex';
        activeFilter = lunchFilter;
        activePage = lunchPage;
    });

    alcoholFilter.addEventListener('click', function() {
        remove();

        alcoholFilter.classList.add('active-food-filter');
        alcoholPage.style.display = 'flex';
        activeFilter = alcoholFilter;
        activePage = alcoholPage;
    });

    specialFilter.addEventListener('click', function() {
        remove();

        specialFilter.classList.add('active-food-filter');
        specialPage.style.display = 'flex';
        activeFilter = specialFilter;
        activePage = specialPage;
    });

    function remove() {
        activeFilter.classList.remove('active-food-filter');
        activePage.style.display = 'none';
    }
}());