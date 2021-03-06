
var ctx12 = document.getElementById('raeoa').getContext('2d');
var data_raeoa = [];
var data_registerraeoa = [];
var data_selectedraeoa = [];
var data_candidateraeoa = [];
$.post("election/getraeoa",
    function(dataraeoa) {
        var obj = JSON.parse(dataraeoa);
        $.each(obj, function(test, item) {
            data_raeoa.push(item.raeoa);
            data_registerraeoa.push(item.registerraeoa);
            data_registerraeoa.push(item.registerraeoa);
            data_selectedraeoa.push(item.selectedraeoa);
            data_candidateraeoa.push(item.candidateraeoa);
        });
        var raeoa = new Chart(ctx12, {
            type: 'bar',
            data: {
                labels: data_raeoa,
                datasets: [{
                        label: 'Register',
                        data: data_registerraeoa,
                        backgroundColor:'rgba(255, 87, 101, 1)',
                        backgroundColor:'rgba(255, 87, 101, 1)',
                        borderColor:'rgba(203, 69, 82, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Selected',
                        data: data_selectedraeoa,
                        backgroundColor: 'rgba(92, 193, 224, 1)',
                        borderColor: 'rgba(69, 154, 179, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Candidate',
                        data: data_candidateraeoa,
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