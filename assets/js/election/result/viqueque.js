
var ctx13 = document.getElementById('viqueque').getContext('2d');
var data_viqueque = [];
var data_registerviqueque = [];
var data_selectedviqueque = [];
var data_candidateviqueque = [];
$.post("election/getviqueque",
    function(dataviqueque) {
        var obj = JSON.parse(dataviqueque);
        $.each(obj, function(test, item) {
            data_viqueque.push(item.viqueque);
            data_registerviqueque.push(item.registerviqueque);
            data_registerviqueque.push(item.registerviqueque);
            data_selectedviqueque.push(item.selectedviqueque);
            data_candidateviqueque.push(item.candidateviqueque);
        });
        var viqueque = new Chart(ctx13, {
            type: 'bar',
            data: {
                labels: data_viqueque,
                datasets: [{
                        label: 'Register',
                        data: data_registerviqueque,
                        backgroundColor:'rgba(255, 87, 101, 1)',
                        backgroundColor:'rgba(255, 87, 101, 1)',
                        borderColor:'rgba(203, 69, 82, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Selected',
                        data: data_selectedviqueque,
                        backgroundColor: 'rgba(92, 193, 224, 1)',
                        borderColor: 'rgba(69, 154, 179, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Candidate',
                        data: data_candidateviqueque,
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