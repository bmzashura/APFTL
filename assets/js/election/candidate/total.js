var ctx1 = document.getElementById('totalcandidate').getContext('2d');
var candidate_total = [];
var candidate_femaletotal = [];
var candidate_maletotal = [];
$.post("election_candidate/candidatetotal",
    function (candidatetotal) {
        var obj = JSON.parse(candidatetotal);
        $.each(obj, function (test, item) {
            candidate_total.push(item.total);
            candidate_femaletotal.push(item.femaletotal);
            candidate_maletotal.push(item.maletotal);
        });
        var total = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: candidate_total,
                datasets: [{
                    label: 'Female',
                    data: candidate_femaletotal,
                    backgroundColor: 'rgba(255, 87, 101, 1)',
                    borderColor: 'rgba(203, 69, 82, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: candidate_maletotal,
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

var ctz1 = document.getElementById('totalcandidatePie').getContext('2d');
var candidate_femaleall = [];
var candidate_maleall = [];
$.post("election_candidate/candidateall",
    function (candidateall) {
        var obj = JSON.parse(candidateall);
        $.each(obj, function (test, item) {
            candidate_femaleall.push(item.femaleall);
            candidate_maleall.push(item.maleall);
        });
        var totalPie = new Chart(ctz1, {
            type: 'pie',
            data: {
                labels: ["Female", "Male"],
                datasets: [{
                    data: [candidate_femaleall, candidate_maleall], // Specify the data values array

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