
var ctx12 = document.getElementById('manatutoselected').getContext('2d');
var selected_manatuto = [];
var selected_femalemanatuto = [];
var selected_malemanatuto = [];
$.post("election_selected/selectedmanatuto",
    function (selectedmanatuto) {
        var obj = JSON.parse(selectedmanatuto);
        $.each(obj, function (test, item) {
            selected_manatuto.push(item.manatuto);
            selected_femalemanatuto.push(item.femalemanatuto);
            selected_malemanatuto.push(item.malemanatuto);
        });
        var manatuto = new Chart(ctx12, {
            type: 'bar',
            data: {
                labels: selected_manatuto,
                datasets: [{
                    label: 'Female',
                    data: selected_femalemanatuto,
                    backgroundColor: 'rgba(255, 87, 101, 1)',
                    borderColor: 'rgba(203, 69, 82, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: selected_malemanatuto,
                    backgroundColor: 'rgba(92, 193, 224, 1)',
                    borderColor: 'rgba(69, 154, 179, 1)',
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

var ctz12 = document.getElementById('manatutoselectedPie').getContext('2d');
var selected_femalemanatutoall = [];
var selected_malemanatutoall = [];
$.post("election_selected/selectedmanatutoall",
    function (selectedmanatutoall) {
        var obj = JSON.parse(selectedmanatutoall);
        $.each(obj, function (test, item) {
            selected_femalemanatutoall.push(item.femalemanatutoall);
            selected_malemanatutoall.push(item.malemanatutoall);
        });
        var manatutoPie = new Chart(ctz12, {
            type: 'pie',
            data: {
                labels: ["Female", "Male"],
                datasets: [{
                    data: [selected_femalemanatutoall, selected_malemanatutoall], // Specify the data values array

                    borderColor: ['#eeeeee', '#eeeeee'],
                    backgroundColor: ['#ff5765', '#52b6ec'],
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