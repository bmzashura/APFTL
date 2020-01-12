
var ctx11 = document.getElementById('manufahiselected').getContext('2d');
var selected_manufahi = [];
var selected_femalemanufahi = [];
var selected_malemanufahi = [];
$.post("election_selected/selectedmanufahi",
    function (selectedmanufahi) {
        var obj = JSON.parse(selectedmanufahi);
        $.each(obj, function (test, item) {
            selected_manufahi.push(item.manufahi);
            selected_femalemanufahi.push(item.femalemanufahi);
            selected_malemanufahi.push(item.malemanufahi);
        });
        var manufahi = new Chart(ctx11, {
            type: 'bar',
            data: {
                labels: selected_manufahi,
                datasets: [{
                    label: 'Female',
                    data: selected_femalemanufahi,
                    backgroundColor: 'rgba(255, 87, 101, 1)',
                    borderColor: 'rgba(203, 69, 82, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Male',
                    data: selected_malemanufahi,
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

var ctz11 = document.getElementById('manufahiselectedPie').getContext('2d');
var selected_femalemanufahiall = [];
var selected_malemanufahiall = [];
$.post("election_selected/selectedmanufahiall",
    function (selectedmanufahiall) {
        var obj = JSON.parse(selectedmanufahiall);
        $.each(obj, function (test, item) {
            selected_femalemanufahiall.push(item.femalemanufahiall);
            selected_malemanufahiall.push(item.malemanufahiall);
        });
        var manufahiPie = new Chart(ctz11, {
            type: 'pie',
            data: {
                labels: ["Female", "Male"],
                datasets: [{
                    data: [selected_femalemanufahiall, selected_malemanufahiall], // Specify the data values array

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