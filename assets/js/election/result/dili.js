
var ctx6 = document.getElementById('dili').getContext('2d');
var data_dili = [];
var data_registerdili = [];
var data_selecteddili = [];
var data_candidatedili = [];
$.post("election/getdili",
    function(datadili) {
        var obj = JSON.parse(datadili);
        $.each(obj, function(test, item) {
            data_dili.push(item.dili);
            data_registerdili.push(item.registerdili);
            data_registerdili.push(item.registerdili);
            data_selecteddili.push(item.selecteddili);
            data_candidatedili.push(item.candidatedili);
        });
        var dili = new Chart(ctx6, {
            type: 'bar',
            data: {
                labels: data_dili,
                datasets: [{
                        label: 'Register',
                        data: data_registerdili,
                        backgroundColor:'rgba(255, 87, 101, 1)',
                        borderColor:'rgba(203, 69, 82, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Selected',
                        data: data_selecteddili,
                        backgroundColor: 'rgba(92, 193, 224, 1)',
                        borderColor: 'rgba(69, 154, 179, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Candidate',
                        data: data_candidatedili,
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