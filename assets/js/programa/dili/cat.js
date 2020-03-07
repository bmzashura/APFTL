var randomColorGenerator = function () { 
    return '#' + (Math.random().toString(16) + '0000000').slice(2, 8); 
};
var ctx3 = document.getElementById('totalcat').getContext('2d');
var data_tinan1 = [];
var data_satu = [];
var data_dua = [];
var data_tiga = [];
var data_empat = [];
$.post("getcatdili",
    function (totalcat) {
        var obj = JSON.parse(totalcat);
        $.each(obj, function (test, item) {
            data_tinan1.push(item.tinan1);
            data_satu.push(item.satu);
            data_dua.push(item.dua);
            data_tiga.push(item.tiga);
            data_empat.push(item.empat);
        });
        var totalcat = new Chart(ctx3, {
            type: 'bar',
            data: {
                labels: data_tinan1,
                datasets: [{
                    fill:false,
                    label: 'Joven iha kunesementu konaba moris saudavel',
                    data: data_satu,
                    backgroundColor: 'rgba(123, 255, 86, 0.5)',
                    borderColor: 'rgba(123, 255, 86, 1)',
                    borderWidth: 1
                },
                {
                    fill:false,
                    label: 'Joven iha kunesementu konaba meu ambiente inklui saude ambiental',
                    data: data_dua,
                    backgroundColor: 'rgba(255, 99, 132, 0.5)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                },
                {
                    fill:false,
                    label: 'Joven iha kunesementu siviku no sidadania',
                    data: data_tiga,
                    backgroundColor: 'rgba(7, 98, 150, 0.5)',
                    borderColor: 'rgba(7, 98, 150, 1)',
                    borderWidth: 1
                },
                {
                    fill:false,
                    label: 'inisiativa no kreatividade joventude dezenvolvidu',
                    data: data_empat,
                    backgroundColor: 'rgba(217, 111, 232, 0.5)',
                    borderColor: 'rgba(217, 111, 232, 1)',
                    borderWidth: 1
                }
                ]
            },
            options: {
                legend:{
                    position: 'bottom'},
                plugins: {
                    datalabels: {
                        align: function (context) {
                            var index = context.dataIndex;
                            var value = context.dataset.data[index];
                            var invert = Math.abs(value) <= 1;
                            return value < 1 ? 'end' : 'start'
                        },
                        anchor: 'end',
                        backgroundColor: null,
                        borderColor: null,
                        borderRadius: 4,
                        borderWidth: 1,
                        color: '#00000C',
                        font: {
                            size: 10,
                            weight: 700
                        },
                        offset: 4,
                        padding: 0,
                        formatter: function (value) {
                            return Math.round(value * 10) / 10
                        }
                    }
                },
                responsive: true, // Instruct chart js to respond nicely.
                maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    });

    var ctx4 = document.getElementById('totalpersen').getContext('2d');
var data_category = [];
var data_totalpersen = [];
$.post("getpersendili",
    function (totalpersen) {
        var obj = JSON.parse(totalpersen);
        $.each(obj, function (test, item) {
            data_category.push(item.category);
            data_totalpersen.push(item.totalpersen);
        });
        var totalpersen = new Chart(ctx4, {
            type: 'pie',
            data: {
                labels: data_category,
                datasets: [{
                    data: data_totalpersen, // Specify the data values array

                    borderColor: ['#eeeeee', '#eeeeee', '#eeeeee', '#eeeeee'],
                    backgroundColor: ['#7BFF56','#ff5765', '#52b6ec','#D96FE8'],
                    borderWidth: 1 // Specify bar border width
                }]
            },
            options: {
                legend:{
                    position: 'bottom',
                align:'left'
                },
                plugins: {
                    datalabels: {
                        align: function (context) {
                            var index = context.dataIndex;
                            var value = context.dataset.data[index];
                            var invert = Math.abs(value) <= 1;
                            return value < 1 ? 'end' : 'start'
                        },
                        anchor: 'end',
                        backgroundColor: null,
                        borderColor: null,
                        borderRadius: 4,
                        borderWidth: 1,
                        color: '#FFECD9',
                        font: {
                            size: 10,
                            weight: 700
                        },
                        offset: 4,
                        padding: 0,
                        formatter: function (value) {
                            return Math.round(value * 10) / 10
                        }
                    }
                },
                responsive: true, // Instruct chart js to respond nicely.
                maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
            }
        });
    });