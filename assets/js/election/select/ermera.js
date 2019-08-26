
var ctx8 = document.getElementById('ermeraselected').getContext('2d');
var selected_ermera = [];
var selected_femaleermera = [];
var selected_maleermera = [];
$.post("election_selected/selectedermera",
    function (selectedermera) {
        var obj = JSON.parse(selectedermera);
        $.each(obj, function (test, item) {
            selected_ermera.push(item.ermera);
            selected_femaleermera.push(item.femaleermera);
            selected_maleermera.push(item.maleermera);
        });
        var ermera = new Chart(ctx8, {
            type: 'bar',
            data: {
                labels: selected_ermera,
                datasets: [{
                    label: 'Female',
                    data: selected_femaleermera,
                    backgroundColor: 'rgba(255, 138, 89, 1)',
                    borderColor: 'rgba(255, 138, 89, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: selected_maleermera,
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

var ctz8 = document.getElementById('ermeraselectedPie').getContext('2d');
var selected_femaleermeraall = [];
var selected_maleermeraall = [];
$.post("election_selected/selectedermeraall",
    function (selectedermeraall) {
        var obj = JSON.parse(selectedermeraall);
        $.each(obj, function (test, item) {
            selected_femaleermeraall.push(item.femaleermeraall);
            selected_maleermeraall.push(item.maleermeraall);
        });
        var ermeraPie = new Chart(ctz8, {
            type: 'pie',
            data: {
                labels: ["Female", "Male"],
                datasets: [{
                    data: [selected_femaleermeraall, selected_maleermeraall], // Specify the data values array

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