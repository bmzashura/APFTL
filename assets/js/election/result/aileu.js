
var ctx1 = document.getElementById('aileu').getContext('2d');
var data_aileu = [];
var data_registeraileu = [];
var data_selectedaileu = [];
var data_candidateaileu = [];
$.post("election/getaileu",
    function(dataaileu) {
        var obj = JSON.parse(dataaileu);
        $.each(obj, function(test, item) {
            data_aileu.push(item.aileu);
            data_registeraileu.push(item.registeraileu);
            data_selectedaileu.push(item.selectedaileu);
            data_candidateaileu.push(item.candidateaileu);
        });
        var aileu = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: data_aileu,
                datasets: [{
                        label: 'Register',
                        data: data_registeraileu,
                        backgroundColor:'rgba(255, 87, 101, 1)',
                        borderColor:'rgba(203, 69, 82, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Selected',
                        data: data_selectedaileu,
                        backgroundColor: 'rgba(92, 193, 224, 1)',
                        borderColor: 'rgba(69, 154, 179, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Candidate',
                        data: data_candidateaileu,
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