
var ctx9 = document.getElementById('liquica').getContext('2d');
var data_liquica = [];
var data_registerliquica = [];
var data_selectedliquica = [];
var data_candidateliquica = [];
$.post("election/getliquica",
    function(dataliquica) {
        var obj = JSON.parse(dataliquica);
        $.each(obj, function(test, item) {
            data_liquica.push(item.liquica);
            data_registerliquica.push(item.registerliquica);
            data_registerliquica.push(item.registerliquica);
            data_selectedliquica.push(item.selectedliquica);
            data_candidateliquica.push(item.candidateliquica);
        });
        var liquica = new Chart(ctx9, {
            type: 'bar',
            data: {
                labels: data_liquica,
                datasets: [{
                        label: 'Register',
                        data: data_registerliquica,
                        backgroundColor:'rgba(255, 87, 101, 1)',
                        borderColor:'rgba(203, 69, 82, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Selected',
                        data: data_selectedliquica,
                        backgroundColor: 'rgba(92, 193, 224, 1)',
                        borderColor: 'rgba(69, 154, 179, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Candidate',
                        data: data_candidateliquica,
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