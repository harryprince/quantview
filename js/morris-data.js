$(function() {

    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2013 Q1',
            梦龙: 2666,
            和路雪: null,
            可爱多: 2647
        }, {
            period: '2013 Q2',
            梦龙: 2778,
            和路雪: 2294,
            可爱多: 2441
        }, {
            period: '2013 Q3',
            梦龙: 4912,
            和路雪: 1969,
            可爱多: 2501
        }, {
            period: '2013 Q4',
            梦龙: 3767,
            和路雪: 3597,
            可爱多: 5689
        }, {
            period: '2014 Q1',
            梦龙: 6810,
            和路雪: 1914,
            可爱多: 2293
        }, {
            period: '2014 Q2',
            梦龙: 5670,
            和路雪: 4293,
            可爱多: 1881
        }, {
            period: '2014 Q3',
            梦龙: 4820,
            和路雪: 3795,
            可爱多: 1588
        }, {
            period: '2014 Q4',
            梦龙: 15073,
            和路雪: 5967,
            可爱多: 5175
        }, {
            period: '2015 Q1',
            梦龙: 10687,
            和路雪: 4460,
            可爱多: 2028
        }, {
            period: '2015 Q2',
            梦龙: 8432,
            和路雪: 5713,
            可爱多: 1791
        }],
        xkey: 'period',
        ykeys: ['梦龙', '和路雪', '可爱多'],
        labels: ['梦龙', '和路雪', '可爱多'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });

    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Download Sales",
            value: 12
        }, {
            label: "In-Store Sales",
            value: 30
        }, {
            label: "Mail-Order Sales",
            value: 20
        }],
        resize: true
    });

    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: '2006',
            a: 100,
            b: 90
        }, {
            y: '2007',
            a: 75,
            b: 65
        }, {
            y: '2008',
            a: 50,
            b: 40
        }, {
            y: '2009',
            a: 75,
            b: 65
        }, {
            y: '2010',
            a: 50,
            b: 40
        }, {
            y: '2014',
            a: 75,
            b: 65
        }, {
            y: '2015',
            a: 100,
            b: 90
        }],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        hideHover: 'auto',
        resize: true
    });

});
