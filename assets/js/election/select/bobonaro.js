
var ctx5 = document.getElementById('bobonaroselected').getContext('2d');
var selected_bobonaro = [];
var selected_femalebobonaro = [];
var selected_malebobonaro = [];
$.post("election_selected/selectedbobonaro",
    function (selectedbobonaro) {
        var obj = JSON.parse(selectedbobonaro);
        $.each(obj, function (test, item) {
            selected_bobonaro.push(item.bobonaro);
            selected_femalebobonaro.push(item.femalebobonaro);
            selected_malebobonaro.push(item.malebobonaro);
        });
        var bobonaro = new Chart(ctx5, {
            type: 'bar',
            data: {
                labels: selected_bobonaro,
                datasets: [{
                    label: 'Female',
                    data: selected_femalebobonaro,
                    backgroundColor: 'rgba(255, 138, 89, 1)',
                    borderColor: 'rgba(255, 138, 89, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: selected_malebobonaro,
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

    var ctz5 = document.getElementById('bobonaroselectedPie').getContext('2d');
    var selected_femalebobonaroall = [];
    var selected_malebobonaroall = [];
    $.post("election_selected/selectedbobonaroall",
        function(selectedbobonaroall) {
            var obj = JSON.parse(selectedbobonaroall);
            $.each(obj, function(test, item) {
                selected_femalebobonaroall.push(item.femalebobonaroall);
                selected_malebobonaroall.push(item.malebobonaroall);
            });
            var bobonaroPie = new Chart(ctz5, {
                type: 'pie',
                data: {
                    labels: ["Female", "Male"],
                    datasets: [{
                        data: [selected_femalebobonaroall, selected_malebobonaroall], // Specify the data values array

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