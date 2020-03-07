
var ctx10 = document.getElementById('liquica').getContext('2d');
var register_liquica = [];
var register_femaleliquica = [];
var register_maleliquica = [];
$.post("election_register/registerliquica",
    function (registerliquica) {
        var obj = JSON.parse(registerliquica);
        $.each(obj, function (test, item) {
            register_liquica.push(item.liquica);
            register_femaleliquica.push(item.femaleliquica);
            register_maleliquica.push(item.maleliquica);
        });
        var liquica = new Chart(ctx10, {
            type: 'bar',
            data: {
                labels: register_liquica,
                datasets: [{
                    label: 'Female',
                    data: register_femaleliquica,
                    backgroundColor: 'rgba(255, 87, 101, 1)',
                    borderColor: 'rgba(203, 69, 82, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: register_maleliquica,
                    backgroundColor: 'rgba(92, 193, 224, 1)',
                    borderColor: 'rgba(69, 154, 179, 1)',
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

var ctz10 = document.getElementById('liquicaPie').getContext('2d');
var register_femaleliquicaall = [];
var register_maleliquicaall = [];
$.post("election_register/registerliquicaall",
    function (registerliquicaall) {
        var obj = JSON.parse(registerliquicaall);
        $.each(obj, function (test, item) {
            register_femaleliquicaall.push(item.femaleliquicaall);
            register_maleliquicaall.push(item.maleliquicaall);
        });
        var liquicaPie = new Chart(ctz10, {
            type: 'pie',
            data: {
                labels: ["Female", "Male"],
                datasets: [{
                    data: [register_femaleliquicaall, register_maleliquicaall], // Specify the data values array

                    borderColor: ['#eeeeee', '#eeeeee'],
                    backgroundColor: ['#ff5765', '#52b6ec'],
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