
var ctx3 = document.getElementById('baucau').getContext('2d');
var data_baucau = [];
var data_registerbaucau = [];
var data_selectedbaucau = [];
var data_candidatebaucau = [];
$.post("election/getbaucau",
    function(databaucau) {
        var obj = JSON.parse(databaucau);
        $.each(obj, function(test, item) {
            data_baucau.push(item.baucau);
            data_registerbaucau.push(item.registerbaucau);
            data_selectedbaucau.push(item.selectedbaucau);
            data_candidatebaucau.push(item.candidatebaucau);
        });
        var baucau = new Chart(ctx3, {
            type: 'bar',
            data: {
                labels: data_baucau,
                datasets: [{
                        label: 'Register',
                        data: data_registerbaucau,
                        backgroundColor:'rgba(255, 87, 101, 1)',
                        borderColor:'rgba(203, 69, 82, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Selected',
                        data: data_selectedbaucau,
                        backgroundColor: 'rgba(92, 193, 224, 1)',
                        borderColor: 'rgba(69, 154, 179, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Candidate',
                        data: data_candidatebaucau,
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