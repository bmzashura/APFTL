
var ctx12 = document.getElementById('manatuto').getContext('2d');
var register_manatuto = [];
var register_femalemanatuto = [];
var register_malemanatuto = [];
$.post("election_register/registermanatuto",
    function (registermanatuto) {
        var obj = JSON.parse(registermanatuto);
        $.each(obj, function (test, item) {
            register_manatuto.push(item.manatuto);
            register_femalemanatuto.push(item.femalemanatuto);
            register_malemanatuto.push(item.malemanatuto);
        });
        var manatuto = new Chart(ctx12, {
            type: 'bar',
            data: {
                labels: register_manatuto,
                datasets: [{
                    label: 'Female',
                    data: register_femalemanatuto,
                    backgroundColor: 'rgba(255, 138, 89, 1)',
                    borderColor: 'rgba(255, 138, 89, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: register_malemanatuto,
                    backgroundColor: 'rgba(182, 232, 81, 1)',
                    borderColor: 'rgba(182, 232, 81, 1)',
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

var ctz12 = document.getElementById('manatutoPie').getContext('2d');
var register_femalemanatutoall = [];
var register_malemanatutoall = [];
$.post("election_register/registermanatutoall",
    function (registermanatutoall) {
        var obj = JSON.parse(registermanatutoall);
        $.each(obj, function (test, item) {
            register_femalemanatutoall.push(item.femalemanatutoall);
            register_malemanatutoall.push(item.malemanatutoall);
        });
        var manatutoPie = new Chart(ctz12, {
            type: 'pie',
            data: {
                labels: ["Female", "Male"],
                datasets: [{
                    data: [register_femalemanatutoall, register_malemanatutoall], // Specify the data values array

                    borderColor: ['#2196f38c', '#f443368c', '#3f51b570', '#00968896'], // Add custom color border 
                    backgroundColor: ['#2196f38c', '#f443368c', '#3f51b570', '#00968896'], // Add custom color background (Points and Fill)
                    borderWidth: 1 // Specify bar border width
                }]
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
                        color: '#FFECD9',
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
                maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
            }
        });
    });