(function() {
    var window_widht = document.documentElement.clientWidth;
    var sampleInput = document.getElementById('name');
    var dateEl = document.getElementById('date');
    var timeEl = document.getElementById('time');

    var sampleWidth = sampleInput.offsetWidth;
    dateEl.style.width = sampleWidth + 'px';
    timeEl.style.width = sampleWidth + 'px';

    window.addEventListener('resize', function() {
        if (window_widht <= 800) {
            window_widht = document.documentElement.clientWidth;
            var length = window_widht * 0.9;
            dateEl.style.width = length + 'px';
            timeEl.style.width = length + 'px';
            console.log(length);
            console.log(window.orientation);
        } else {
            var sampleWidth = sampleInput.offsetWidth;
            dateEl.style.width = sampleWidth + 'px';
            timeEl.style.width = sampleWidth + 'px';
        }
    });
}());