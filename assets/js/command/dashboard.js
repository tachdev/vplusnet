$(document).ready(function () {

    var green = document.querySelector('.js-switch');
    var switchery = new Switchery(green, {
        color: '#2dcb73'
    });

    window.onload = function () {
        date();
    },
    setInterval(function () {
        date();
    }, 1000);

    function date() {
        var now = moment().format('hh:mm');
        $('.timer').html('<b>' + now + '</b>');
    }

    var today = moment();

    $('.date').text(today.format('ddd, D MMMM YYYY'));
  

    /*var phases = [
            [5, 'offline-ui offline-ui-down offline-ui-down-5s', '', ''],
            [3, 'offline-ui offline-ui-down offline-ui-connecting offline-ui-waiting', '5 seconds', '5s'],
            [1, 'offline-ui offline-ui-down offline-ui-connecting offline-ui-waiting', '4 seconds', '4s'],
            [1, 'offline-ui offline-ui-down offline-ui-connecting offline-ui-waiting', '3 seconds', '3s'],
            [1, 'offline-ui offline-ui-down offline-ui-connecting offline-ui-waiting', '2 seconds', '2s'],
            [1, 'offline-ui offline-ui-down offline-ui-connecting offline-ui-waiting', '1 seconds', '1s'],
            [1, 'offline-ui offline-ui-up offline-ui-up-5s', '', '']
        ];

    var nextPhase = function () {
        var phase;


        var offline = $('.offline-ui'),
            content = offline.find('.offline-ui-content');

        phase = parseInt(offline.attr('data-phase'), 10);

        offline.get(0).className = phases[phase][1];
        content.attr('data-retry-in', phases[phase][2]);
        content.attr('data-retry-in-abbr', phases[phase][3]);

        phase = (phase + 1) % phases.length;
        offline.attr('data-phase', phase);

        if (phase === 0) {
            return false;
        }


        setTimeout(function () {
            nextPhase();
        }, phases[phase][0] * 1000);
    };

    nextPhase();*/
});
