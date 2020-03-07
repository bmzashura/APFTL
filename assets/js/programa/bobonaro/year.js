var ctx1 = document.getElementById('totalyear').getContext('2d');
var data_tinan = [];
var data_total = [];
var data_feto = [];
var data_mane = [];
$.post("getyearbobonaro",
    function (totalyear) {
        var obj = JSON.parse(totalyear);
        $.each(obj, function (test, item) {
            data_tinan.push(item.tinan);
            data_total.push(item.total);
            data_feto.push(item.feto);
            data_mane.push(item.mane);
        });
        var totalyear = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: data_tinan,
                datasets: [{
                    label: 'Total',
                    data: data_total,
                    backgroundColor: 'rgba(123, 255, 86, 0.5)',
                    borderColor: 'rgba(123, 255, 86, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Feto',
                    data: data_feto,
                    backgroundColor: 'rgba(255, 99, 132, 0.5)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Mane',
                    data: data_mane,
                    backgroundColor: 'rgba(7, 98, 150, 0.5)',
                    borderColor: 'rgba(7, 98, 150, 1)',
                    borderWidth: 1
                }
                ]
            },
            options: {
                responsive: true, // Instruct chart js to respond nicely.
                maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height
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