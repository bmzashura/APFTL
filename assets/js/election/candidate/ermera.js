
var ctx8 = document.getElementById('ermeracandidate').getContext('2d');
var candidate_ermera = [];
var candidate_femaleermera = [];
var candidate_maleermera = [];
$.post("election_candidate/candidateermera",
    function (candidateermera) {
        var obj = JSON.parse(candidateermera);
        $.each(obj, function (test, item) {
            candidate_ermera.push(item.ermera);
            candidate_femaleermera.push(item.femaleermera);
            candidate_maleermera.push(item.maleermera);
        });
        var ermera = new Chart(ctx8, {
            type: 'bar',
            data: {
                labels: candidate_ermera,
                datasets: [{
                    label: 'Female',
                    data: candidate_femaleermera,
                    backgroundColor: 'rgba(255, 87, 101, 1)',
                    borderColor: 'rgba(203, 69, 82, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: candidate_maleermera,
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

var ctz8 = document.getElementById('ermeracandidatePie').getContext('2d');
var candidate_femaleermeraall = [];
var candidate_maleermeraall = [];
$.post("election_candidate/candidateermeraall",
    function (candidateermeraall) {
        var obj = JSON.parse(candidateermeraall);
        $.each(obj, function (test, item) {
            candidate_femaleermeraall.push(item.femaleermeraall);
            candidate_maleermeraall.push(item.maleermeraall);
        });
        var ermeraPie = new Chart(ctz8, {
            type: 'pie',
            data: {
                labels: ["Female", "Male"],
                datasets: [{
                    data: [candidate_femaleermeraall, candidate_maleermeraall], // Specify the data values array

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