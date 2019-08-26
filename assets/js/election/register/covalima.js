
var ctx6 = document.getElementById('covalima').getContext('2d');
var register_covalima = [];
var register_femalecovalima = [];
var register_malecovalima = [];
$.post("election_register/registercovalima",
    function (registercovalima) {
        var obj = JSON.parse(registercovalima);
        $.each(obj, function (test, item) {
            register_covalima.push(item.covalima);
            register_femalecovalima.push(item.femalecovalima);
            register_malecovalima.push(item.malecovalima);
        });
        var covalima = new Chart(ctx6, {
            type: 'bar',
            data: {
                labels: register_covalima,
                datasets: [{
                    label: 'Female',
                    data: register_femalecovalima,
                    backgroundColor: 'rgba(255, 138, 89, 1)',
                    borderColor: 'rgba(255, 138, 89, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: register_malecovalima,
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


var ctz6 = document.getElementById('covalimaPie').getContext('2d');
var register_femalecovalimaall = [];
var register_malecovalimaall = [];
$.post("election_register/registercovalimaall",
    function (registercovalimaall) {
        var obj = JSON.parse(registercovalimaall);
        $.each(obj, function (test, item) {
            register_femalecovalimaall.push(item.femalecovalimaall);
            register_malecovalimaall.push(item.malecovalimaall);
        });
        var covalimaPie = new Chart(ctz6, {
            type: 'pie',
            data: {
                labels: ["Female", "Male"],
                datasets: [{
                    data: [register_femalecovalimaall, register_malecovalimaall], // Specify the data values array

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