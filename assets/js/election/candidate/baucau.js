
var ctx4 = document.getElementById('baucaucandidate').getContext('2d');
var candidate_baucau = [];
var candidate_femalebaucau = [];
var candidate_malebaucau = [];
$.post("election_candidate/candidatebaucau",
    function (candidatebaucau) {
        var obj = JSON.parse(candidatebaucau);
        $.each(obj, function (test, item) {
            candidate_baucau.push(item.baucau);
            candidate_femalebaucau.push(item.femalebaucau);
            candidate_malebaucau.push(item.malebaucau);
        });
        var baucau = new Chart(ctx4, {
            type: 'bar',
            data: {
                labels: candidate_baucau,
                datasets: [{
                    label: 'Female',
                    data: candidate_femalebaucau,
                    backgroundColor: 'rgba(255, 87, 101, 1)',
                    borderColor: 'rgba(203, 69, 82, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: candidate_malebaucau,
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

var ctz4 = document.getElementById('baucaucandidatePie').getContext('2d');
var candidate_femalebaucauall = [];
var candidate_malebaucauall = [];
$.post("election_candidate/candidatebaucauall",
    function (candidatebaucauall) {
        var obj = JSON.parse(candidatebaucauall);
        $.each(obj, function (test, item) {
            candidate_femalebaucauall.push(item.femalebaucauall);
            candidate_malebaucauall.push(item.malebaucauall);
        });
        var baucauPie = new Chart(ctz4, {
            type: 'pie',
            data: {
                labels: ["Female", "Male"],
                datasets: [{
                    data: [candidate_femalebaucauall, candidate_malebaucauall], // Specify the data values array

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