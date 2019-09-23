
var ctx6 = document.getElementById('covalimaselected').getContext('2d');
var selected_covalima = [];
var selected_femalecovalima = [];
var selected_malecovalima = [];
$.post("election_selected/selectedcovalima",
    function (selectedcovalima) {
        var obj = JSON.parse(selectedcovalima);
        $.each(obj, function (test, item) {
            selected_covalima.push(item.covalima);
            selected_femalecovalima.push(item.femalecovalima);
            selected_malecovalima.push(item.malecovalima);
        });
        var covalima = new Chart(ctx6, {
            type: 'bar',
            data: {
                labels: selected_covalima,
                datasets: [{
                    label: 'Female',
                    data: selected_femalecovalima,
                    backgroundColor: 'rgba(255, 87, 101, 1)',
                    borderColor: 'rgba(203, 69, 82, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: selected_malecovalima,
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


var ctz6 = document.getElementById('covalimaselectedPie').getContext('2d');
var selected_femalecovalimaall = [];
var selected_malecovalimaall = [];
$.post("election_selected/selectedcovalimaall",
    function (selectedcovalimaall) {
        var obj = JSON.parse(selectedcovalimaall);
        $.each(obj, function (test, item) {
            selected_femalecovalimaall.push(item.femalecovalimaall);
            selected_malecovalimaall.push(item.malecovalimaall);
        });
        var covalimaPie = new Chart(ctz6, {
            type: 'pie',
            data: {
                labels: ["Female", "Male"],
                datasets: [{
                    data: [selected_femalecovalimaall, selected_malecovalimaall], // Specify the data values array

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