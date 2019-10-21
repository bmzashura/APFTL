
var ctx10 = document.getElementById('manatuto').getContext('2d');
var data_manatuto = [];
var data_registermanatuto = [];
var data_selectedmanatuto = [];
var data_candidatemanatuto = [];
$.post("election/getmanatuto",
    function(datamanatuto) {
        var obj = JSON.parse(datamanatuto);
        $.each(obj, function(test, item) {
            data_manatuto.push(item.manatuto);
            data_registermanatuto.push(item.registermanatuto);
            data_registermanatuto.push(item.registermanatuto);
            data_selectedmanatuto.push(item.selectedmanatuto);
            data_candidatemanatuto.push(item.candidatemanatuto);
        });
        var manatuto = new Chart(ctx10, {
            type: 'bar',
            data: {
                labels: data_manatuto,
                datasets: [{
                        label: 'Register',
                        data: data_registermanatuto,
                        backgroundColor:'rgba(255, 87, 101, 1)',
                        borderColor:'rgba(203, 69, 82, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Selected',
                        data: data_selectedmanatuto,
                        backgroundColor: 'rgba(92, 193, 224, 1)',
                        borderColor: 'rgba(69, 154, 179, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Candidate',
                        data: data_candidatemanatuto,
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