
var ctx4 = document.getElementById('baucauselected').getContext('2d');
var selected_baucau = [];
var selected_femalebaucau = [];
var selected_malebaucau = [];
$.post("election_selected/selectedbaucau",
    function (selectedbaucau) {
        var obj = JSON.parse(selectedbaucau);
        $.each(obj, function (test, item) {
            selected_baucau.push(item.baucau);
            selected_femalebaucau.push(item.femalebaucau);
            selected_malebaucau.push(item.malebaucau);
        });
        var baucau = new Chart(ctx4, {
            type: 'bar',
            data: {
                labels: selected_baucau,
                datasets: [{
                    label: 'Female',
                    data: selected_femalebaucau,
                    backgroundColor: 'rgba(255, 138, 89, 1)',
                    borderColor: 'rgba(255, 138, 89, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: selected_malebaucau,
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

    var ctz4 = document.getElementById('baucauselectedPie').getContext('2d');
    var selected_femalebaucauall = [];
    var selected_malebaucauall = [];
    $.post("election_selected/selectedbaucauall",
        function(selectedbaucauall) {
            var obj = JSON.parse(selectedbaucauall);
            $.each(obj, function(test, item) {
                selected_femalebaucauall.push(item.femalebaucauall);
                selected_malebaucauall.push(item.malebaucauall);
            });
            var baucauPie = new Chart(ctz4, {
                type: 'pie',
                data: {
                    labels: ["Female", "Male"],
                    datasets: [{
                        data: [selected_femalebaucauall, selected_malebaucauall], // Specify the data values array

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