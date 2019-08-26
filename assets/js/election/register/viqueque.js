
var ctx14 = document.getElementById('viqueque').getContext('2d');
var register_viqueque = [];
var register_femaleviqueque = [];
var register_maleviqueque = [];
$.post("election_register/registerviqueque",
    function (registerviqueque) {
        var obj = JSON.parse(registerviqueque);
        $.each(obj, function (test, item) {
            register_viqueque.push(item.viqueque);
            register_femaleviqueque.push(item.femaleviqueque);
            register_maleviqueque.push(item.maleviqueque);
        });
        var viqueque = new Chart(ctx14, {
            type: 'bar',
            data: {
                labels: register_viqueque,
                datasets: [{
                    label: 'Female',
                    data: register_femaleviqueque,
                    backgroundColor: 'rgba(255, 138, 89, 1)',
                    borderColor: 'rgba(255, 138, 89, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: register_maleviqueque,
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

var ctz14 = document.getElementById('viquequePie').getContext('2d');
var register_femaleviquequeall = [];
var register_maleviquequeall = [];
$.post("election_register/registerviquequeall",
    function (registerviquequeall) {
        var obj = JSON.parse(registerviquequeall);
        $.each(obj, function (test, item) {
            register_femaleviquequeall.push(item.femaleviquequeall);
            register_maleviquequeall.push(item.maleviquequeall);
        });
        var viquequePie = new Chart(ctz14, {
            type: 'pie',
            data: {
                labels: ["Female", "Male"],
                datasets: [{
                    data: [register_femaleviquequeall, register_maleviquequeall], // Specify the data values array

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