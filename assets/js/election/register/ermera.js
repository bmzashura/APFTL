
var ctx8 = document.getElementById('ermera').getContext('2d');
var register_ermera = [];
var register_femaleermera = [];
var register_maleermera = [];
$.post("election_register/registerermera",
    function (registerermera) {
        var obj = JSON.parse(registerermera);
        $.each(obj, function (test, item) {
            register_ermera.push(item.ermera);
            register_femaleermera.push(item.femaleermera);
            register_maleermera.push(item.maleermera);
        });
        var ermera = new Chart(ctx8, {
            type: 'bar',
            data: {
                labels: register_ermera,
                datasets: [{
                    label: 'Female',
                    data: register_femaleermera,
                    backgroundColor: 'rgba(255, 87, 101, 1)',
                    borderColor: 'rgba(203, 69, 82, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: register_maleermera,
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

var ctz8 = document.getElementById('ermeraPie').getContext('2d');
var register_femaleermeraall = [];
var register_maleermeraall = [];
$.post("election_register/registerermeraall",
    function (registerermeraall) {
        var obj = JSON.parse(registerermeraall);
        $.each(obj, function (test, item) {
            register_femaleermeraall.push(item.femaleermeraall);
            register_maleermeraall.push(item.maleermeraall);
        });
        var ermeraPie = new Chart(ctz8, {
            type: 'pie',
            data: {
                labels: ["Female", "Male"],
                datasets: [{
                    data: [register_femaleermeraall, register_maleermeraall], // Specify the data values array

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