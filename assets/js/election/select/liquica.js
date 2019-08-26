
var ctx10 = document.getElementById('liquicaselected').getContext('2d');
var selected_liquica = [];
var selected_femaleliquica = [];
var selected_maleliquica = [];
$.post("election_selected/selectedliquica",
    function (selectedliquica) {
        var obj = JSON.parse(selectedliquica);
        $.each(obj, function (test, item) {
            selected_liquica.push(item.liquica);
            selected_femaleliquica.push(item.femaleliquica);
            selected_maleliquica.push(item.maleliquica);
        });
        var liquica = new Chart(ctx10, {
            type: 'bar',
            data: {
                labels: selected_liquica,
                datasets: [{
                    label: 'Female',
                    data: selected_femaleliquica,
                    backgroundColor: 'rgba(255, 138, 89, 1)',
                    borderColor: 'rgba(255, 138, 89, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: selected_maleliquica,
                    backgroundColor: 'rgba(182, 232, 81, 1)',
                    borderColor: 'rgba(182, 232, 81, 1)',
                    borderWidth: 1
                }
                ]
            },
            options: {
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

var ctz10 = document.getElementById('liquicaselectedPie').getContext('2d');
var selected_femaleliquicaall = [];
var selected_maleliquicaall = [];
$.post("election_selected/selectedliquicaall",
    function (selectedliquicaall) {
        var obj = JSON.parse(selectedliquicaall);
        $.each(obj, function (test, item) {
            selected_femaleliquicaall.push(item.femaleliquicaall);
            selected_maleliquicaall.push(item.maleliquicaall);
        });
        var liquicaPie = new Chart(ctz10, {
            type: 'pie',
            data: {
                labels: ["Female", "Male"],
                datasets: [{
                    data: [selected_femaleliquicaall, selected_maleliquicaall], // Specify the data values array

                    borderColor: ['#2196f38c', '#f443368c', '#3f51b570', '#00968896'], // Add custom color border 
                    backgroundColor: ['#2196f38c', '#f443368c', '#3f51b570', '#00968896'], // Add custom color background (Points and Fill)
                    borderWidth: 1 // Specify bar border width
                }]
            },
            options: {
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