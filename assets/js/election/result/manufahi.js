
var ctx11 = document.getElementById('manufahi').getContext('2d');
var data_manufahi = [];
var data_registermanufahi = [];
var data_selectedmanufahi = [];
var data_candidatemanufahi = [];
$.post("election/getmanufahi",
    function(datamanufahi) {
        var obj = JSON.parse(datamanufahi);
        $.each(obj, function(test, item) {
            data_manufahi.push(item.manufahi);
            data_registermanufahi.push(item.registermanufahi);
            data_registermanufahi.push(item.registermanufahi);
            data_selectedmanufahi.push(item.selectedmanufahi);
            data_candidatemanufahi.push(item.candidatemanufahi);
        });
        var manufahi = new Chart(ctx11, {
            type: 'bar',
            data: {
                labels: data_manufahi,
                datasets: [{
                        label: 'Register',
                        data: data_registermanufahi,
                        backgroundColor:'rgba(255, 87, 101, 1)',
                        backgroundColor:'rgba(255, 87, 101, 1)',
                        borderColor:'rgba(203, 69, 82, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Selected',
                        data: data_selectedmanufahi,
                        backgroundColor: 'rgba(92, 193, 224, 1)',
                        borderColor: 'rgba(69, 154, 179, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Candidate',
                        data: data_candidatemanufahi,
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