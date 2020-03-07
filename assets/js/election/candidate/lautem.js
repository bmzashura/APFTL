
var ctx9 = document.getElementById('lautemcandidate').getContext('2d');
var candidate_lautem = [];
var candidate_femalelautem = [];
var candidate_malelautem = [];
$.post("election_candidate/candidatelautem",
    function (candidatelautem) {
        var obj = JSON.parse(candidatelautem);
        $.each(obj, function (test, item) {
            candidate_lautem.push(item.lautem);
            candidate_femalelautem.push(item.femalelautem);
            candidate_malelautem.push(item.malelautem);
        });
        var lautem = new Chart(ctx9, {
            type: 'bar',
            data: {
                labels: candidate_lautem,
                datasets: [{
                    label: 'Female',
                    data: candidate_femalelautem,
                    backgroundColor: 'rgba(255, 87, 101, 1)',
                    borderColor: 'rgba(203, 69, 82, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: candidate_malelautem,
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

var ctz9 = document.getElementById('lautemcandidatePie').getContext('2d');
var candidate_femalelautemall = [];
var candidate_malelautemall = [];
$.post("election_candidate/candidatelautemall",
    function (candidatelautemall) {
        var obj = JSON.parse(candidatelautemall);
        $.each(obj, function (test, item) {
            candidate_femalelautemall.push(item.femalelautemall);
            candidate_malelautemall.push(item.malelautemall);
        });
        var lautemPie = new Chart(ctz9, {
            type: 'pie',
            data: {
                labels: ["Female", "Male"],
                datasets: [{
                    data: [candidate_femalelautemall, candidate_malelautemall], // Specify the data values array

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