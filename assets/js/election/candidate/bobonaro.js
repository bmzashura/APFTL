
var ctx5 = document.getElementById('bobonarocandidate').getContext('2d');
var candidate_bobonaro = [];
var candidate_femalebobonaro = [];
var candidate_malebobonaro = [];
$.post("election_candidate/candidatebobonaro",
    function (candidatebobonaro) {
        var obj = JSON.parse(candidatebobonaro);
        $.each(obj, function (test, item) {
            candidate_bobonaro.push(item.bobonaro);
            candidate_femalebobonaro.push(item.femalebobonaro);
            candidate_malebobonaro.push(item.malebobonaro);
        });
        var bobonaro = new Chart(ctx5, {
            type: 'bar',
            data: {
                labels: candidate_bobonaro,
                datasets: [{
                    label: 'Female',
                    data: candidate_femalebobonaro,
                    backgroundColor: 'rgba(255, 87, 101, 1)',
                    borderColor: 'rgba(203, 69, 82, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: candidate_malebobonaro,
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

var ctz5 = document.getElementById('bobonarocandidatePie').getContext('2d');
var candidate_femalebobonaroall = [];
var candidate_malebobonaroall = [];
$.post("election_candidate/candidatebobonaroall",
    function (candidatebobonaroall) {
        var obj = JSON.parse(candidatebobonaroall);
        $.each(obj, function (test, item) {
            candidate_femalebobonaroall.push(item.femalebobonaroall);
            candidate_malebobonaroall.push(item.malebobonaroall);
        });
        var bobonaroPie = new Chart(ctz5, {
            type: 'pie',
            data: {
                labels: ["Female", "Male"],
                datasets: [{
                    data: [candidate_femalebobonaroall, candidate_malebobonaroall], // Specify the data values array

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