
var ctx7 = document.getElementById('diliselected').getContext('2d');
var selected_dili = [];
var selected_femaledili = [];
var selected_maledili = [];
$.post("election_selected/selecteddili",
    function (selecteddili) {
        var obj = JSON.parse(selecteddili);
        $.each(obj, function (test, item) {
            selected_dili.push(item.dili);
            selected_femaledili.push(item.femaledili);
            selected_maledili.push(item.maledili);
        });
        var dili = new Chart(ctx7, {
            type: 'bar',
            data: {
                labels: selected_dili,
                datasets: [{
                    label: 'Female',
                    data: selected_femaledili,
                    backgroundColor: 'rgba(255, 138, 89, 1)',
                    borderColor: 'rgba(255, 138, 89, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: selected_maledili,
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

var ctz7 = document.getElementById('diliselectedPie').getContext('2d');
var selected_femalediliall = [];
var selected_malediliall = [];
$.post("election_selected/selecteddiliall",
    function (selecteddiliall) {
        var obj = JSON.parse(selecteddiliall);
        $.each(obj, function (test, item) {
            selected_femalediliall.push(item.femalediliall);
            selected_malediliall.push(item.malediliall);
        });
        var diliPie = new Chart(ctz7, {
            type: 'pie',
            data: {
                labels: ["Female", "Male"],
                datasets: [{
                    data: [selected_femalediliall, selected_malediliall], // Specify the data values array

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