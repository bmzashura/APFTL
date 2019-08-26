
var ctx2 = document.getElementById('aileu').getContext('2d');
var register_aileu = [];
var register_femaleaileu = [];
var register_maleaileu = [];
$.post("election_register/registeraileu",
    function (registeraileu) {
        var obj = JSON.parse(registeraileu);
        $.each(obj, function (test, item) {
            register_aileu.push(item.aileu);
            register_femaleaileu.push(item.femaleaileu);
            register_maleaileu.push(item.maleaileu);
        });
        var aileu = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: register_aileu,
                datasets: [{
                    label: 'Female',
                    data: register_femaleaileu,
                    backgroundColor: 'rgba(255, 138, 89, 1)',
                    borderColor: 'rgba(255, 138, 89, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: register_maleaileu,
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

var ctz2 = document.getElementById('aileuPie').getContext('2d');
var register_femaleaileuall = [];
var register_maleaileuall = [];
$.post("election_register/registeraileuall",
    function (registeraileuall) {
        var obj = JSON.parse(registeraileuall);
        $.each(obj, function (test, item) {
            register_femaleaileuall.push(item.femaleaileuall);
            register_maleaileuall.push(item.maleaileuall);
        });
        var aileuPie = new Chart(ctz2, {
            type: 'pie',
            data: {
                labels: ["Female", "Male"],
                datasets: [{
                    data: [register_femaleaileuall, register_maleaileuall], // Specify the data values array

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