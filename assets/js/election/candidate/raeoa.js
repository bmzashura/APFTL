
var ctx13 = document.getElementById('raeoacandidate').getContext('2d');
var candidate_raeoa = [];
var candidate_femaleraeoa = [];
var candidate_maleraeoa = [];
$.post("election_candidate/candidateraeoa",
    function (candidateraeoa) {
        var obj = JSON.parse(candidateraeoa);
        $.each(obj, function (test, item) {
            candidate_raeoa.push(item.raeoa);
            candidate_femaleraeoa.push(item.femaleraeoa);
            candidate_maleraeoa.push(item.maleraeoa);
        });
        var raeoa = new Chart(ctx13, {
            type: 'bar',
            data: {
                labels: candidate_raeoa,
                datasets: [{
                    label: 'Female',
                    data: candidate_femaleraeoa,
                    backgroundColor: 'rgba(255, 87, 101, 1)',
                    borderColor: 'rgba(203, 69, 82, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: candidate_maleraeoa,
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

var ctz13 = document.getElementById('raeoacandidatePie').getContext('2d');
var candidate_femaleraeoaall = [];
var candidate_maleraeoaall = [];
$.post("election_candidate/candidateraeoaall",
    function (candidateraeoaall) {
        var obj = JSON.parse(candidateraeoaall);
        $.each(obj, function (test, item) {
            candidate_femaleraeoaall.push(item.femaleraeoaall);
            candidate_maleraeoaall.push(item.maleraeoaall);
        });
        var raeoaPie = new Chart(ctz13, {
            type: 'pie',
            data: {
                labels: ["Female", "Male"],
                datasets: [{
                    data: [candidate_femaleraeoaall, candidate_maleraeoaall], // Specify the data values array

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