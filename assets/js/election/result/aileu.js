
var ctx1 = document.getElementById('aileu').getContext('2d');
var data_aileu = [];
var data_registeraileu = [];
var data_selectedaileu = [];
var data_candidateaileu = [];
$.post("election/getaileu",
    function(dataaileu) {
        var obj = JSON.parse(dataaileu);
        $.each(obj, function(test, item) {
            data_aileu.push(item.aileu);
            data_registeraileu.push(item.registeraileu);
            data_selectedaileu.push(item.selectedaileu);
            data_candidateaileu.push(item.candidateaileu);
        });
        var aileu = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: data_aileu,
                datasets: [{
                        label: 'Register',
                        data: data_registeraileu,
                        backgroundColor: 'rgba(6, 166, 10, 0.2)',
                        borderColor: 'rgba(6, 166, 10, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Selected',
                        data: data_selectedaileu,
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Candidate',
                        data: data_candidateaileu,
                        backgroundColor: 'rgba(7, 98, 150, 0.2)',
                        borderColor: 'rgba(7, 98, 150, 1)',
                        borderWidth: 1
                    }
                ]
            },
            options: {
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