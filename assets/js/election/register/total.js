var ctx1 = document.getElementById('total').getContext('2d');
var register_total = [];
var register_femaletotal = [];
var register_maletotal = [];
$.post("election_register/registertotal",
    function (registertotal) {
        var obj = JSON.parse(registertotal);
        $.each(obj, function (test, item) {
            register_total.push(item.total);
            register_femaletotal.push(item.femaletotal);
            register_maletotal.push(item.maletotal);
        });
        var total = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: register_total,
                datasets: [{
                    label: 'Female',
                    data: register_femaletotal,
                    backgroundColor: 'rgba(255, 138, 89, 1)',
                    borderColor: 'rgba(255, 138, 89, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: register_maletotal,
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

var ctz1 = document.getElementById('totalPie').getContext('2d');
var register_femaleall = [];
var register_maleall = [];
$.post("election_register/registerall",
    function (registerall) {
        var obj = JSON.parse(registerall);
        $.each(obj, function (test, item) {
            register_femaleall.push(item.femaleall);
            register_maleall.push(item.maleall);
        });
        var totalPie = new Chart(ctz1, {
            type: 'pie',
            data: {
                labels: ["Female", "Male"],
                datasets: [{
                    data: [register_femaleall, register_maleall], // Specify the data values array

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