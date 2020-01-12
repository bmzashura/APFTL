
var ctx10 = document.getElementById('liquicacandidate').getContext('2d');
var candidate_liquica = [];
var candidate_femaleliquica = [];
var candidate_maleliquica = [];
$.post("election_candidate/candidateliquica",
    function (candidateliquica) {
        var obj = JSON.parse(candidateliquica);
        $.each(obj, function (test, item) {
            candidate_liquica.push(item.liquica);
            candidate_femaleliquica.push(item.femaleliquica);
            candidate_maleliquica.push(item.maleliquica);
        });
        var liquica = new Chart(ctx10, {
            type: 'bar',
            data: {
                labels: candidate_liquica,
                datasets: [{
                    label: 'Female',
                    data: candidate_femaleliquica,
                    backgroundColor: 'rgba(255, 87, 101, 1)',
                    borderColor: 'rgba(203, 69, 82, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: candidate_maleliquica,
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

var ctz10 = document.getElementById('liquicacandidatePie').getContext('2d');
var candidate_femaleliquicaall = [];
var candidate_maleliquicaall = [];
$.post("election_candidate/candidateliquicaall",
    function (candidateliquicaall) {
        var obj = JSON.parse(candidateliquicaall);
        $.each(obj, function (test, item) {
            candidate_femaleliquicaall.push(item.femaleliquicaall);
            candidate_maleliquicaall.push(item.maleliquicaall);
        });
        var liquicaPie = new Chart(ctz10, {
            type: 'pie',
            data: {
                labels: ["Female", "Male"],
                datasets: [{
                    data: [candidate_femaleliquicaall, candidate_maleliquicaall], // Specify the data values array

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