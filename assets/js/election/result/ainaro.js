
var ctx2 = document.getElementById('ainaro').getContext('2d');
var data_ainaro = [];
var data_registerainaro = [];
var data_selectedainaro = [];
var data_candidateainaro = [];
$.post("election/getainaro",
    function(dataainaro) {
        var obj = JSON.parse(dataainaro);
        $.each(obj, function(test, item) {
            data_ainaro.push(item.ainaro);
            data_registerainaro.push(item.registerainaro);
            data_selectedainaro.push(item.selectedainaro);
            data_candidateainaro.push(item.candidateainaro);
        });
        var ainaro = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: data_ainaro,
                datasets: [{
                        label: 'Register',
                        data: data_registerainaro,
                        backgroundColor:'rgba(255, 87, 101, 1)',
                        borderColor:'rgba(203, 69, 82, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Selected',
                        data: data_selectedainaro,
                        backgroundColor: 'rgba(92, 193, 224, 1)',
                        borderColor: 'rgba(69, 154, 179, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Candidate',
                        data: data_candidateainaro,
                        backgroundColor: 'rgba(255, 255, 47, 1)',
                        borderColor: 'rgba(255, 172, 46, 1)',
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
                maintainAspectRatio: false,
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