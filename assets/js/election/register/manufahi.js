
var ctx11 = document.getElementById('manufahi').getContext('2d');
var register_manufahi = [];
var register_femalemanufahi = [];
var register_malemanufahi = [];
$.post("election_register/registermanufahi",
    function (registermanufahi) {
        var obj = JSON.parse(registermanufahi);
        $.each(obj, function (test, item) {
            register_manufahi.push(item.manufahi);
            register_femalemanufahi.push(item.femalemanufahi);
            register_malemanufahi.push(item.malemanufahi);
        });
        var manufahi = new Chart(ctx11, {
            type: 'bar',
            data: {
                labels: register_manufahi,
                datasets: [{
                    label: 'Female',
                    data: register_femalemanufahi,
                    backgroundColor: 'rgba(255, 138, 89, 1)',
                    borderColor: 'rgba(255, 138, 89, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: register_malemanufahi,
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

var ctz11 = document.getElementById('manufahiPie').getContext('2d');
var register_femalemanufahiall = [];
var register_malemanufahiall = [];
$.post("election_register/registermanufahiall",
    function (registermanufahiall) {
        var obj = JSON.parse(registermanufahiall);
        $.each(obj, function (test, item) {
            register_femalemanufahiall.push(item.femalemanufahiall);
            register_malemanufahiall.push(item.malemanufahiall);
        });
        var manufahiPie = new Chart(ctz11, {
            type: 'pie',
            data: {
                labels: ["Female", "Male"],
                datasets: [{
                    data: [register_femalemanufahiall, register_malemanufahiall], // Specify the data values array

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