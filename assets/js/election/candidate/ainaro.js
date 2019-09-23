
var ctx3 = document.getElementById('ainarocandidate').getContext('2d');
var candidate_ainaro = [];
var candidate_femaleainaro = [];
var candidate_maleainaro = [];
$.post("election_candidate/candidateainaro",
    function (candidateainaro) {
        var obj = JSON.parse(candidateainaro);
        $.each(obj, function (test, item) {
            candidate_ainaro.push(item.ainaro);
            candidate_femaleainaro.push(item.femaleainaro);
            candidate_maleainaro.push(item.maleainaro);
        });
        var ainaro = new Chart(ctx3, {
            type: 'bar',
            data: {
                labels: candidate_ainaro,
                datasets: [{
                    label: 'Female',
                    data: candidate_femaleainaro,
                    backgroundColor: 'rgba(255, 87, 101, 1)',
                    borderColor: 'rgba(203, 69, 82, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: candidate_maleainaro,
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


var ctz3 = document.getElementById('ainarocandidatePie').getContext('2d');
var candidate_femaleainaroall = [];
var candidate_maleainaroall = [];
$.post("election_candidate/candidateainaroall",
    function (candidateainaroall) {
        var obj = JSON.parse(candidateainaroall);
        $.each(obj, function (test, item) {
            candidate_femaleainaroall.push(item.femaleainaroall);
            candidate_maleainaroall.push(item.maleainaroall);
        });
        var ainaroPie = new Chart(ctz3, {
            type: 'pie',
            data: {
                labels: ["Female", "Male"],
                datasets: [{
                    data: [candidate_femaleainaroall, candidate_maleainaroall], // Specify the data values array

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
