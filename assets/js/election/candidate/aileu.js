
var ctx2 = document.getElementById('aileucandidate').getContext('2d');
var candidate_aileu = [];
var candidate_femaleaileu = [];
var candidate_maleaileu = [];
$.post("election_candidate/candidateaileu",
    function (candidateaileu) {
        var obj = JSON.parse(candidateaileu);
        $.each(obj, function (test, item) {
            candidate_aileu.push(item.aileu);
            candidate_femaleaileu.push(item.femaleaileu);
            candidate_maleaileu.push(item.maleaileu);
        });
        var aileu = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: candidate_aileu,
                datasets: [{
                    label: 'Female',
                    data: candidate_femaleaileu,
                    backgroundColor: 'rgba(255, 87, 101, 1)',
                    borderColor: 'rgba(203, 69, 82, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: candidate_maleaileu,
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

var ctz2 = document.getElementById('aileucandidatePie').getContext('2d');
var candidate_femaleaileuall = [];
var candidate_maleaileuall = [];
$.post("election_candidate/candidateaileuall",
    function (candidateaileuall) {
        var obj = JSON.parse(candidateaileuall);
        $.each(obj, function (test, item) {
            candidate_femaleaileuall.push(item.femaleaileuall);
            candidate_maleaileuall.push(item.maleaileuall);
        });
        var aileuPie = new Chart(ctz2, {
            type: 'pie',
            data: {
                labels: ["Female", "Male"],
                datasets: [{
                    data: [candidate_femaleaileuall, candidate_maleaileuall], // Specify the data values array

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