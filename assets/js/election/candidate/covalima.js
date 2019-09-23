
var ctx6 = document.getElementById('covalimacandidate').getContext('2d');
var candidate_covalima = [];
var candidate_femalecovalima = [];
var candidate_malecovalima = [];
$.post("election_candidate/candidatecovalima",
    function (candidatecovalima) {
        var obj = JSON.parse(candidatecovalima);
        $.each(obj, function (test, item) {
            candidate_covalima.push(item.covalima);
            candidate_femalecovalima.push(item.femalecovalima);
            candidate_malecovalima.push(item.malecovalima);
        });
        var covalima = new Chart(ctx6, {
            type: 'bar',
            data: {
                labels: candidate_covalima,
                datasets: [{
                    label: 'Female',
                    data: candidate_femalecovalima,
                    backgroundColor: 'rgba(255, 87, 101, 1)',
                    borderColor: 'rgba(203, 69, 82, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: candidate_malecovalima,
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


var ctz6 = document.getElementById('covalimacandidatePie').getContext('2d');
var candidate_femalecovalimaall = [];
var candidate_malecovalimaall = [];
$.post("election_candidate/candidatecovalimaall",
    function (candidatecovalimaall) {
        var obj = JSON.parse(candidatecovalimaall);
        $.each(obj, function (test, item) {
            candidate_femalecovalimaall.push(item.femalecovalimaall);
            candidate_malecovalimaall.push(item.malecovalimaall);
        });
        var covalimaPie = new Chart(ctz6, {
            type: 'pie',
            data: {
                labels: ["Female", "Male"],
                datasets: [{
                    data: [candidate_femalecovalimaall, candidate_malecovalimaall], // Specify the data values array

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