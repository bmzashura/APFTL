
var ctx14 = document.getElementById('viquequecandidate').getContext('2d');
var candidate_viqueque = [];
var candidate_femaleviqueque = [];
var candidate_maleviqueque = [];
$.post("election_candidate/candidateviqueque",
    function (candidateviqueque) {
        var obj = JSON.parse(candidateviqueque);
        $.each(obj, function (test, item) {
            candidate_viqueque.push(item.viqueque);
            candidate_femaleviqueque.push(item.femaleviqueque);
            candidate_maleviqueque.push(item.maleviqueque);
        });
        var viqueque = new Chart(ctx14, {
            type: 'bar',
            data: {
                labels: candidate_viqueque,
                datasets: [{
                    label: 'Female',
                    data: candidate_femaleviqueque,
                    backgroundColor: 'rgba(255, 87, 101, 1)',
                    borderColor: 'rgba(203, 69, 82, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: candidate_maleviqueque,
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

var ctz14 = document.getElementById('viquequecandidatePie').getContext('2d');
var candidate_femaleviquequeall = [];
var candidate_maleviquequeall = [];
$.post("election_candidate/candidateviquequeall",
    function (candidateviquequeall) {
        var obj = JSON.parse(candidateviquequeall);
        $.each(obj, function (test, item) {
            candidate_femaleviquequeall.push(item.femaleviquequeall);
            candidate_maleviquequeall.push(item.maleviquequeall);
        });
        var viquequePie = new Chart(ctz14, {
            type: 'pie',
            data: {
                labels: ["Female", "Male"],
                datasets: [{
                    data: [candidate_femaleviquequeall, candidate_maleviquequeall], // Specify the data values array

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