
var ctx9 = document.getElementById('lautem').getContext('2d');
var register_lautem = [];
var register_femalelautem = [];
var register_malelautem = [];
$.post("election_register/registerlautem",
    function (registerlautem) {
        var obj = JSON.parse(registerlautem);
        $.each(obj, function (test, item) {
            register_lautem.push(item.lautem);
            register_femalelautem.push(item.femalelautem);
            register_malelautem.push(item.malelautem);
        });
        var lautem = new Chart(ctx9, {
            type: 'bar',
            data: {
                labels: register_lautem,
                datasets: [{
                    label: 'Female',
                    data: register_femalelautem,
                    backgroundColor: 'rgba(255, 138, 89, 1)',
                    borderColor: 'rgba(255, 138, 89, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: register_malelautem,
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

var ctz9 = document.getElementById('lautemPie').getContext('2d');
var register_femalelautemall = [];
var register_malelautemall = [];
$.post("election_register/registerlautemall",
    function (registerlautemall) {
        var obj = JSON.parse(registerlautemall);
        $.each(obj, function (test, item) {
            register_femalelautemall.push(item.femalelautemall);
            register_malelautemall.push(item.malelautemall);
        });
        var lautemPie = new Chart(ctz9, {
            type: 'pie',
            data: {
                labels: ["Female", "Male"],
                datasets: [{
                    data: [register_femalelautemall, register_malelautemall], // Specify the data values array

                    borderColor: ['#2196f38c', '#f443368c', '#3f51b570', '#00968896'], // Add custom color border 
                    backgroundColor: ['#2196f38c', '#f443368c', '#3f51b570', '#00968896'], // Add custom color background (Points and Fill)
                    borderWidth: 1 // Specify bar border width
                }]
            },
            options: {                   plugins: {
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