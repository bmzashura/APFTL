
var ctx4 = document.getElementById('bobonaro').getContext('2d');
var data_bobonaro = [];
var data_registerbobonaro = [];
var data_selectedbobonaro = [];
var data_candidatebobonaro = [];
$.post("election/getbobonaro",
    function(databobonaro) {
        var obj = JSON.parse(databobonaro);
        $.each(obj, function(test, item) {
            data_bobonaro.push(item.bobonaro);
            data_registerbobonaro.push(item.registerbobonaro);
            data_selectedbobonaro.push(item.selectedbobonaro);
            data_candidatebobonaro.push(item.candidatebobonaro);
        });
        var bobonaro = new Chart(ctx4, {
            type: 'bar',
            data: {
                labels: data_bobonaro,
                datasets: [{
                        label: 'Register',
                        data: data_registerbobonaro,
                        backgroundColor:'rgba(255, 87, 101, 1)',
                        borderColor:'rgba(203, 69, 82, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Selected',
                        data: data_selectedbobonaro,
                        backgroundColor: 'rgba(92, 193, 224, 1)',
                        borderColor: 'rgba(69, 154, 179, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Candidate',
                        data: data_candidatebobonaro,
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