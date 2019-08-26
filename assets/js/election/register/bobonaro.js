
var ctx5 = document.getElementById('bobonaro').getContext('2d');
var register_bobonaro = [];
var register_femalebobonaro = [];
var register_malebobonaro = [];
$.post("election_register/registerbobonaro",
    function (registerbobonaro) {
        var obj = JSON.parse(registerbobonaro);
        $.each(obj, function (test, item) {
            register_bobonaro.push(item.bobonaro);
            register_femalebobonaro.push(item.femalebobonaro);
            register_malebobonaro.push(item.malebobonaro);
        });
        var bobonaro = new Chart(ctx5, {
            type: 'bar',
            data: {
                labels: register_bobonaro,
                datasets: [{
                    label: 'Female',
                    data: register_femalebobonaro,
                    backgroundColor: 'rgba(255, 138, 89, 1)',
                    borderColor: 'rgba(255, 138, 89, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: register_malebobonaro,
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

    var ctz5 = document.getElementById('bobonaroPie').getContext('2d');
    var register_femalebobonaroall = [];
    var register_malebobonaroall = [];
    $.post("election_register/registerbobonaroall",
        function(registerbobonaroall) {
            var obj = JSON.parse(registerbobonaroall);
            $.each(obj, function(test, item) {
                register_femalebobonaroall.push(item.femalebobonaroall);
                register_malebobonaroall.push(item.malebobonaroall);
            });
            var bobonaroPie = new Chart(ctz5, {
                type: 'pie',
                data: {
                    labels: ["Female", "Male"],
                    datasets: [{
                        data: [register_femalebobonaroall, register_malebobonaroall], // Specify the data values array

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