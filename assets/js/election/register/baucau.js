
var ctx4 = document.getElementById('baucau').getContext('2d');
var register_baucau = [];
var register_femalebaucau = [];
var register_malebaucau = [];
$.post("election_register/registerbaucau",
    function (registerbaucau) {
        var obj = JSON.parse(registerbaucau);
        $.each(obj, function (test, item) {
            register_baucau.push(item.baucau);
            register_femalebaucau.push(item.femalebaucau);
            register_malebaucau.push(item.malebaucau);
        });
        var baucau = new Chart(ctx4, {
            type: 'bar',
            data: {
                labels: register_baucau,
                datasets: [{
                    label: 'Female',
                    data: register_femalebaucau,
                    backgroundColor: 'rgba(255, 87, 101, 1)',
                    borderColor: 'rgba(203, 69, 82, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: register_malebaucau,
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

var ctz4 = document.getElementById('baucauPie').getContext('2d');
var register_femalebaucauall = [];
var register_malebaucauall = [];
$.post("election_register/registerbaucauall",
    function (registerbaucauall) {
        var obj = JSON.parse(registerbaucauall);
        $.each(obj, function (test, item) {
            register_femalebaucauall.push(item.femalebaucauall);
            register_malebaucauall.push(item.malebaucauall);
        });
        var baucauPie = new Chart(ctz4, {
            type: 'pie',
            data: {
                labels: ["Female", "Male"],
                datasets: [{
                    data: [register_femalebaucauall, register_malebaucauall], // Specify the data values array

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