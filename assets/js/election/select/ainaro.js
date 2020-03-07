
var ctx3 = document.getElementById('ainaroselected').getContext('2d');
var selected_ainaro = [];
var selected_femaleainaro = [];
var selected_maleainaro = [];
$.post("election_selected/selectedainaro",
    function (selectedainaro) {
        var obj = JSON.parse(selectedainaro);
        $.each(obj, function (test, item) {
            selected_ainaro.push(item.ainaro);
            selected_femaleainaro.push(item.femaleainaro);
            selected_maleainaro.push(item.maleainaro);
        });
        var ainaro = new Chart(ctx3, {
            type: 'bar',
            data: {
                labels: selected_ainaro,
                datasets: [{
                    label: 'Female',
                    data: selected_femaleainaro,
                    backgroundColor: 'rgba(255, 87, 101, 1)',
                    borderColor: 'rgba(203, 69, 82, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: selected_maleainaro,
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


var ctz3 = document.getElementById('ainaroselectedPie').getContext('2d');
var selected_femaleainaroall = [];
var selected_maleainaroall = [];
$.post("election_selected/selectedainaroall",
    function (selectedainaroall) {
        var obj = JSON.parse(selectedainaroall);
        $.each(obj, function (test, item) {
            selected_femaleainaroall.push(item.femaleainaroall);
            selected_maleainaroall.push(item.maleainaroall);
        });
        var ainaroPie = new Chart(ctz3, {
            type: 'pie',
            data: {
                labels: ["Female", "Male"],
                datasets: [{
                    data: [selected_femaleainaroall, selected_maleainaroall], // Specify the data values array

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
