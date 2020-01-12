
var ctx5 = document.getElementById('covalima').getContext('2d');
var data_covalima = [];
var data_registercovalima = [];
var data_selectedcovalima = [];
var data_candidatecovalima = [];
$.post("election/getcovalima",
    function(datacovalima) {
        var obj = JSON.parse(datacovalima);
        $.each(obj, function(test, item) {
            data_covalima.push(item.covalima);
            data_registercovalima.push(item.registercovalima);
            data_selectedcovalima.push(item.selectedcovalima);
            data_candidatecovalima.push(item.candidatecovalima);
        });
        var covalima = new Chart(ctx5, {
            type: 'bar',
            data: {
                labels: data_covalima,
                datasets: [{
                        label: 'Register',
                        data: data_registercovalima,
                        backgroundColor:'rgba(255, 87, 101, 1)',
                        borderColor:'rgba(203, 69, 82, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Selected',
                        data: data_selectedcovalima,
                        backgroundColor: 'rgba(92, 193, 224, 1)',
                        borderColor: 'rgba(69, 154, 179, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Candidate',
                        data: data_candidatecovalima,
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