
var ctx13 = document.getElementById('raeoaselected').getContext('2d');
var selected_raeoa = [];
var selected_femaleraeoa = [];
var selected_maleraeoa = [];
$.post("election_selected/selectedraeoa",
    function (selectedraeoa) {
        var obj = JSON.parse(selectedraeoa);
        $.each(obj, function (test, item) {
            selected_raeoa.push(item.raeoa);
            selected_femaleraeoa.push(item.femaleraeoa);
            selected_maleraeoa.push(item.maleraeoa);
        });
        var raeoa = new Chart(ctx13, {
            type: 'bar',
            data: {
                labels: selected_raeoa,
                datasets: [{
                    label: 'Female',
                    data: selected_femaleraeoa,
                    backgroundColor: 'rgba(255, 87, 101, 1)',
                    borderColor: 'rgba(203, 69, 82, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: selected_maleraeoa,
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

var ctz13 = document.getElementById('raeoaselectedPie').getContext('2d');
var selected_femaleraeoaall = [];
var selected_maleraeoaall = [];
$.post("election_selected/selectedraeoaall",
    function (selectedraeoaall) {
        var obj = JSON.parse(selectedraeoaall);
        $.each(obj, function (test, item) {
            selected_femaleraeoaall.push(item.femaleraeoaall);
            selected_maleraeoaall.push(item.maleraeoaall);
        });
        var raeoaPie = new Chart(ctz13, {
            type: 'pie',
            data: {
                labels: ["Female", "Male"],
                datasets: [{
                    data: [selected_femaleraeoaall, selected_maleraeoaall], // Specify the data values array

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