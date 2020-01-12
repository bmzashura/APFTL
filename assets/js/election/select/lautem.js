
var ctx9 = document.getElementById('lautemselected').getContext('2d');
var selected_lautem = [];
var selected_femalelautem = [];
var selected_malelautem = [];
$.post("election_selected/selectedlautem",
    function (selectedlautem) {
        var obj = JSON.parse(selectedlautem);
        $.each(obj, function (test, item) {
            selected_lautem.push(item.lautem);
            selected_femalelautem.push(item.femalelautem);
            selected_malelautem.push(item.malelautem);
        });
        var lautem = new Chart(ctx9, {
            type: 'bar',
            data: {
                labels: selected_lautem,
                datasets: [{
                    label: 'Female',
                    data: selected_femalelautem,
                    backgroundColor: 'rgba(255, 87, 101, 1)',
                    borderColor: 'rgba(203, 69, 82, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: selected_malelautem,
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

var ctz9 = document.getElementById('lautemselectedPie').getContext('2d');
var selected_femalelautemall = [];
var selected_malelautemall = [];
$.post("election_selected/selectedlautemall",
    function (selectedlautemall) {
        var obj = JSON.parse(selectedlautemall);
        $.each(obj, function (test, item) {
            selected_femalelautemall.push(item.femalelautemall);
            selected_malelautemall.push(item.malelautemall);
        });
        var lautemPie = new Chart(ctz9, {
            type: 'pie',
            data: {
                labels: ["Female", "Male"],
                datasets: [{
                    data: [selected_femalelautemall, selected_malelautemall], // Specify the data values array

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