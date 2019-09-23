
var ctx7 = document.getElementById('dilicandidate').getContext('2d');
var candidate_dili = [];
var candidate_femaledili = [];
var candidate_maledili = [];
$.post("election_candidate/candidatedili",
    function (candidatedili) {
        var obj = JSON.parse(candidatedili);
        $.each(obj, function (test, item) {
            candidate_dili.push(item.dili);
            candidate_femaledili.push(item.femaledili);
            candidate_maledili.push(item.maledili);
        });
        var dili = new Chart(ctx7, {
            type: 'bar',
            data: {
                labels: candidate_dili,
                datasets: [{
                    label: 'Female',
                    data: candidate_femaledili,
                    backgroundColor: 'rgba(255, 87, 101, 1)',
                    borderColor: 'rgba(203, 69, 82, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: candidate_maledili,
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

var ctz7 = document.getElementById('dilicandidatePie').getContext('2d');
var candidate_femalediliall = [];
var candidate_malediliall = [];
$.post("election_candidate/candidatediliall",
    function (candidatediliall) {
        var obj = JSON.parse(candidatediliall);
        $.each(obj, function (test, item) {
            candidate_femalediliall.push(item.femalediliall);
            candidate_malediliall.push(item.malediliall);
        });
        var diliPie = new Chart(ctz7, {
            type: 'pie',
            data: {
                labels: ["Female", "Male"],
                datasets: [{
                    data: [candidate_femalediliall, candidate_malediliall], // Specify the data values array

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