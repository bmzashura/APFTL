
var ctx2 = document.getElementById('aileuselected').getContext('2d');
var selected_aileu = [];
var selected_femaleaileu = [];
var selected_maleaileu = [];
$.post("election_selected/selectedaileu",
    function (selectedaileu) {
        var obj = JSON.parse(selectedaileu);
        $.each(obj, function (test, item) {
            selected_aileu.push(item.aileu);
            selected_femaleaileu.push(item.femaleaileu);
            selected_maleaileu.push(item.maleaileu);
        });
        var aileu = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: selected_aileu,
                datasets: [{
                    label: 'Female',
                    data: selected_femaleaileu,
                    backgroundColor: 'rgba(255, 138, 89, 1)',
                    borderColor: 'rgba(255, 138, 89, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: selected_maleaileu,
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

var ctz2 = document.getElementById('aileuselectedPie').getContext('2d');
var selected_femaleaileuall = [];
var selected_maleaileuall = [];
$.post("election_selected/selectedaileuall",
    function (selectedaileuall) {
        var obj = JSON.parse(selectedaileuall);
        $.each(obj, function (test, item) {
            selected_femaleaileuall.push(item.femaleaileuall);
            selected_maleaileuall.push(item.maleaileuall);
        });
        var aileuPie = new Chart(ctz2, {
            type: 'pie',
            data: {
                labels: ["Female", "Male"],
                datasets: [{
                    data: [selected_femaleaileuall, selected_maleaileuall], // Specify the data values array

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