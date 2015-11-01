$(function() {

    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2015-10-23',
            高温: 6,
            低温: 0,
            GPS: 7,
            离线: 2
        }, {
            period: '2015-10-24',
            高温: 8,
            低温: 4,
            GPS: 1,
            离线: 0
        }, {
            period: '2015-10-25',
            高温: 2,
            低温: 9,
            GPS: 1,
            离线: 2
        }, {
            period: '2015-10-26',
            高温: 7,
            低温: 7,
            GPS: 9,
            离线: 6
        }, {
            period: '2015-10-27',
            高温: 0,
            低温: 4,
            GPS: 3,
            离线: 2
        }, {
            period: '2015-10-28',
            高温: 0,
            低温: 3,
            GPS: 1,
            离线: 2
        }, {
            period: '2015-10-29',
            高温: 0,
            低温: 5,
            GPS: 8,
            离线: 7
        }, {
            period: '2015-10-30',
            高温: 3,
            低温: 7,
            GPS: 5,
            离线: 2
        }, {
            period: '2015-10-31',
            高温: 7,
            低温: 0,
            GPS: 8,
            离线: 2
        }, {
            period: '2015-11-01',
            高温: 2,
            低温: 3,
            GPS: 1,
            离线: 2
        }],
        xkey: 'period',
        ykeys: ['高温', '低温', 'GPS', '离线'],
        labels: ['高温', '低温', 'GPS', '离线'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });


});
