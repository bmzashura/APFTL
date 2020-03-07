
var ctx8 = document.getElementById('lautem').getContext('2d');
var data_lautem = [];
var data_registerlautem = [];
var data_selectedlautem = [];
var data_candidatelautem = [];
$.post("election/getlautem",
    function(datalautem) {
        var obj = JSON.parse(datalautem);
        $.each(obj, function(test, item) {
            data_lautem.push(item.lautem);
            data_registerlautem.push(item.registerlautem);
            data_registerlautem.push(item.registerlautem);
            data_selectedlautem.push(item.selectedlautem);
            data_candidatelautem.push(item.candidatelautem);
        });
        var lautem = new Chart(ctx8, {
            type: 'bar',
            data: {
                labels: data_lautem,
                datasets: [{
                        label: 'Register',
                        data: data_registerlautem,
                        backgroundColor:'rgba(255, 87, 101, 1)',
                        borderColor:'rgba(203, 69, 82, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Selected',
                        data: data_selectedlautem,
                        backgroundColor: 'rgba(92, 193, 224, 1)',
                        borderColor: 'rgba(69, 154, 179, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Candidate',
                        data: data_candidatelautem,
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