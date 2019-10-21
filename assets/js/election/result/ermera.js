
var ctx7 = document.getElementById('ermera').getContext('2d');
var data_ermera = [];
var data_registerermera = [];
var data_selectedermera = [];
var data_candidateermera = [];
$.post("election/getermera",
    function(dataermera) {
        var obj = JSON.parse(dataermera);
        $.each(obj, function(test, item) {
            data_ermera.push(item.ermera);
            data_registerermera.push(item.registerermera);
            data_registerermera.push(item.registerermera);
            data_selectedermera.push(item.selectedermera);
            data_candidateermera.push(item.candidateermera);
        });
        var ermera = new Chart(ctx7, {
            type: 'bar',
            data: {
                labels: data_ermera,
                datasets: [{
                        label: 'Register',
                        data: data_registerermera,
                        backgroundColor:'rgba(255, 87, 101, 1)',
                        borderColor:'rgba(203, 69, 82, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Selected',
                        data: data_selectedermera,
                        backgroundColor: 'rgba(92, 193, 224, 1)',
                        borderColor: 'rgba(69, 154, 179, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Candidate',
                        data: data_candidateermera,
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