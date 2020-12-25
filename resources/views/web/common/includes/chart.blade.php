@section('page_js')
    <script type="text/javascript">
        $(function() {
            "use strict";
            // ------------------------------
            // Basic bar chart
            // ------------------------------
            // based on prepared DOM, initialize echarts instance
                var myChart = echarts.init(document.getElementById('basic-bar'));

                // specify chart configuration item and data
                var option = {
                        // Setup grid
                        grid: {
                            left: '1%',
                            right: '2%',
                            bottom: '3%',
                            containLabel: true
                        },

                        // Add Tooltip
                        tooltip : {
                            trigger: 'axis'
                        },

                        legend: {
                            data:['Site A','Site B']
                        },
                        toolbox: {
                            show : true,
                            feature : {

                                magicType : {show: true, type: ['line', 'bar']},
                                restore : {show: true},
                                saveAsImage : {show: true}
                            }
                        },
                        color: ["#2962FF", "#4fc3f7"],
                        calculable : true,
                        xAxis : [
                            {
                                type : 'category',
                                data : ['Jan','Feb','Mar','Apr','May','Jun','July','Aug','Sept','Oct','Nov','Dec']
                            }
                        ],
                        yAxis : [
                            {
                                type : 'value'
                            }
                        ],
                        series : [
                            {
                                name:'Site A',
                                type:'bar',
                                data:[2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3],
                                markPoint : {
                                    data : [
                                        {type : 'max', name: 'Max'},
                                        {type : 'min', name: 'Min'}
                                    ]
                                },
                                markLine : {
                                    data : [
                                        {type : 'average', name: 'Average'}
                                    ]
                                }
                            },
                            {
                                name:'Site B',
                                type:'bar',
                                data:[2.6, 5.9, 9.0, 26.4, 28.7, 70.7, 175.6, 182.2, 48.7, 18.8, 6.0, 2.3],
                                markPoint : {
                                    data : [
                                        {name : 'The highest year', value : 182.2, xAxis: 7, yAxis: 183, symbolSize:18},
                                        {name : 'Year minimum', value : 2.3, xAxis: 11, yAxis: 3}
                                    ]
                                },
                                markLine : {
                                    data : [
                                        {type : 'average', name : 'Average'}
                                    ]
                                }
                            }
                        ]
                    };
                // use configuration item and data specified to show chart
                myChart.setOption(option);
            
            
            // ------------------------------
            // Stacked bar chart
            // ------------------------------
            // based on prepared DOM, initialize echarts instance
                var stackedChart = echarts.init(document.getElementById('stacked-bar'));

                // specify chart configuration item and data
                var option = {
                        // Setup grid
                        grid: {
                            x: 40,
                            x2: 40,
                            y: 45,
                            y2: 25
                        },

                        // Add tooltip
                        tooltip : {
                            trigger: 'axis',
                            axisPointer : {            // Axis indicator axis trigger effective
                                type : 'shadow'        // The default is a straight line, optionally: 'line' | 'shadow'
                            }
                        },

                        // Add legend
                        legend: {
                            data: [
                            @foreach($symptoms as $key => $symptom)
                            @if($key <= 4)
                            '{{ $symptom->name }}'@if($key != 4), @endif
                            @endif
                            @endforeach
                            ]
                        },

                        // Add custom colors
                        color: ['#2962FF', '#4fc3f7', '#212529', '#f62d51', '#dadada'],

                        // Horizontal axis
                        xAxis: [{
                            type: 'value',
                        }],

                        // Vertical axis
                        yAxis: [{
                            type: 'category',
                            data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
                        }],

                        // Add series
                        series : [

                        	@foreach($symptoms as $key => $symptom)
                            @if($key <= 4)
                            {
                                name:'{{ $symptom->name }}',
                                type:'bar',
                                stack: 'Total',
                                itemStyle : { normal: {label : {show: true, position: 'insideRight'}}},
                                data:[320, 302, 301, 334, 390, 330, 320]
                            }@if($key != 4), @endif
                            @endif
                            @endforeach
                        ]
                    };
                // use configuration item and data specified to show chart
                stackedChart.setOption(option);
               
            
                //***************************
               // Stacked chart
               //***************************
                
                
                //***************************
               // Stacked Area chart
               //***************************
                var stackedbarcolumnChart = echarts.init(document.getElementById('stacked-column'));
                var option = {
                    
                     // Setup grid
                        grid: {
                            x: 40,
                            x2: 40,
                            y: 45,
                            y2: 25
                        },

                        // Add tooltip
                        tooltip : {
                            trigger: 'axis',
                            axisPointer : {            // Axis indicator axis trigger effective
                                type : 'shadow'        // The default is a straight line, optionally: 'line' | 'shadow'
                            }
                        },

                        // Add legend
                        legend: {
                            data: [  'Video', 'Search engine', 'Google', 'Safari', 'Opera', 'Firefox']
                        },

                        // Add custom colors
                        color: ['#2962FF', '#4fc3f7', '#212529', '#f62d51', '#dadada'],

                        // Enable drag recalculate
                        calculable: true,

                        // Horizontal axis
                        xAxis: [{
                            type: 'category',
                            data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
                        }],

                        // Vertical axis
                        yAxis: [{
                            type: 'value',
                        }],

                        // Add series
                        series : [
                            
                            {
                                name:'Video',
                                type:'bar',
                                stack: 'advertising',
                                data:[150, 232, 201, 154, 190, 330, 410]
                            },
                            {
                                name:'Search engine',
                                type:'bar',
                                data:[862, 1018, 964, 1026, 1679, 1600, 1570],
                                markLine : {
                                    itemStyle:{
                                        normal:{
                                            lineStyle:{
                                                type: 'dashed'
                                            }
                                        }
                                    },
                                    data : [
                                        [{type : 'min'}, {type : 'max'}]
                                    ]
                                }
                            },
                            {
                                name:'Google',
                                type:'bar',
                                barWidth : 12,
                                stack: 'search engine',
                                data:[620, 732, 701, 734, 1090, 1130, 1120]
                            },
                            {
                                name:'Safari',
                                type:'bar',
                                stack: 'search engine',
                                data:[120, 132, 101, 134, 290, 230, 220]
                            },
                            {
                                name:'Opera',
                                type:'bar',
                                stack: 'search engine',
                                data:[60, 72, 71, 74, 190, 130, 110]
                            },
                            {
                                name:'Firefox',
                                type:'bar',
                                stack: 'search engine',
                                data:[62, 82, 91, 84, 109, 110, 120]
                            }
                        ]
                        // Add series
                        
                };
                stackedbarcolumnChart.setOption(option);
                
            // ------------------------------
            // Basic line chart
            // ------------------------------
            // based on prepared DOM, initialize echarts instance
                var barbasicChart = echarts.init(document.getElementById('bar-basic'));

                var option = {

                     // Setup grid
                        grid: {
                            x: 60,
                            x2: 40,
                            y: 45,
                            y2: 25
                        },

                        // Add tooltip
                        tooltip: {
                            trigger: 'axis'
                        },

                        // Add legend
                        legend: {
                            data: ['2017', '2018']
                        },

                        // Add custom colors
                        color: ['#2962FF', '#4fc3f7'],

                        // Horizontal axis
                        xAxis: [{
                            type: 'value',
                            boundaryGap: [0, 0.01]
                        }],

                        // Vertical axis
                        yAxis: [{
                            type: 'category',
                            data: ['Apple', 'Samsung', 'HTC', 'Nokia', 'Sony', 'LG']
                        }],

                        // Add series
                        series : [
                            {
                                name:'2017',
                                type:'bar',
                                data:[600, 450, 350, 268, 474, 315]
                            },
                            {
                                name:'2018',
                                type:'bar',
                                data:[780, 689, 468, 174, 436, 482]
                            }
                        ]
                };
                // use configuration item and data specified to show chart
                barbasicChart.setOption(option);
            
            
               //------------------------------------------------------
               // Resize chart on menu width change and window resize
               //------------------------------------------------------
                $(function () {

                        // Resize chart on menu width change and window resize
                        $(window).on('resize', resize);
                        $(".sidebartoggler").on('click', resize);

                        // Resize function
                        function resize() {
                            setTimeout(function() {

                                // Resize chart
                                myChart.resize();
                                stackedChart.resize();
                                stackedbarcolumnChart.resize();
                                barbasicChart.resize();
                            }, 200);
                        }
                    });
        });










		/*
		Template Name: Elite Admin
		Author: Wrappixel

		File: js
		*/
		$(function(){
		    // Real Time chart
		    var data = [],
		        totalPoints = 300;

		    function getRandomData() {
		        if (data.length > 0) data = data.slice(1);
		        // Do a random walk
		        while (data.length < totalPoints) {
		            var prev = data.length > 0 ? data[data.length - 1] : 50,
		                y = prev + Math.random() * 10 - 5;
		            if (y < 0) {
		                y = 0;
		            } else if (y > 100) {
		                y = 100;
		            }
		            data.push(y);
		        }
		        // Zip the generated y values with the x values
		        var res = [];
		        for (var i = 0; i < data.length; ++i) {
		            res.push([i, data[i]])
		        }
		        return res;
		    }
		    // Set up the control widget
		    var updateInterval = 30;
		    $("#updateInterval").val(updateInterval).on('change', function() {
		        var v = $(this).val();
		        if (v && !isNaN(+v)) {
		            updateInterval = +v;
		            if (updateInterval < 1) {
		                updateInterval = 1;
		            } else if (updateInterval > 3000) {
		                updateInterval = 3000;
		            }
		            $(this).val("" + updateInterval);
		        }
		    });
		    var plot = $.plot("#placeholder", [getRandomData()], {
		        series: {
		            shadowSize: 0 // Drawing is faster without shadows
		        },
		        yaxis: {
		            min: 0,
		            max: 100
		        },
		        xaxis: {
		            show: false
		        },
		        colors: ["#26c6da"],
		        grid: {
		            color: "#AFAFAF",
		            hoverable: true,
		            borderWidth: 0,
		            backgroundColor: '#FFF'
		        },
		        tooltip: true,
		        tooltipOpts: {
		            content: "Y: %y",
		            defaultTheme: false
		        }
		    });

		    function update() {
		        plot.setData([getRandomData()]);
		        // Since the axes don't change, we don't need to call plot.setupGrid()
		        plot.draw();
		        setTimeout(update, updateInterval);
		    }
		    update();
		});
		//Flot Line Chart
		$(function() {
		    console.log("document ready");
		    var offset = 0;
		    plot();

		    function plot() {
		        var sin = [],
		            cos = [];
		        for (var i = 0; i < 12; i += 0.2) {
		            sin.push([i, Math.sin(i + offset)]);
		            cos.push([i, Math.cos(i + offset)]);
		        }
		        var options = {
		            series: {
		                lines: {
		                    show: true
		                },
		                points: {
		                    show: true
		                }
		            },
		            grid: {
		                hoverable: true //IMPORTANT! this is needed for tooltip to work
		            },
		            yaxis: {
		                min: -1.2,
		                max: 1.2
		            },
		            colors: ["#009efb", "#26c6da"],
		            grid: {
		                color: "#AFAFAF",
		                hoverable: true,
		                borderWidth: 0,
		                backgroundColor: '#FFF'
		            },
		            legend: false,
		            tooltip: true,
		            tooltipOpts: {
		                content: "'%s' of %x.1 is %y.4",
		                shifts: {
		                    x: -60,
		                    y: 25
		                }
		            }
		        };
		        var plotObj = $.plot($("#flot-line-chart"), [{
		            data: sin,
		            label: "sin(x)",
		        }, {
		            data: cos,
		            label: "cos(x)"
		        }], options);
		    }
		});


		@php
            $male_percent = round(100 / $total_patients) * $total_male;
            $female_percent = round(100 / $total_patients) * $total_female;
        @endphp
		//Gender Chart
		$(function() {
		    var data = [{
		        label: "Male",
		        data: {{ $male_percent }},
		        color: "#4f5467",
		    }, {
		        label: "Female",
		        data: {{ $female_percent }},
		        color: "#26c6da",
		    }];
		    var plotObj = $.plot($("#gender-chart"), data, {
		        series: {
		            pie: {
		                innerRadius: 0.5,
		                show: true
		            }
		        },
		        grid: {
		            hoverable: true
		        },
		        color: null,
		        legend: {
		            show: false
		        },
		        tooltip: true,
		        tooltipOpts: {
		            content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
		            shifts: {
		                x: 20,
		                y: 0
		            },
		            defaultTheme: false
		        }
		    });
		});


		@php
            $age1_percent = round(100 / $total_patients) * $total_age1;
            $age2_percent = round(100 / $total_patients) * $total_age2;
            $age3_percent = round(100 / $total_patients) * $total_age3;
            $age4_percent = round(100 / $total_patients) * $total_age4;
            $age5_percent = round(100 / $total_patients) * $total_age5;
            $age6_percent = round(100 / $total_patients) * $total_age6;
            $age7_percent = round(100 / $total_patients) * $total_age7;
            $age8_percent = round(100 / $total_patients) * $total_age8;
            $age9_percent = round(100 / $total_patients) * $total_age9;
        @endphp
		//Age Chart
		$(function() {
		    var data2 = [{
		        label: "1 - 10 Years",
		        data: {{ $age1_percent }},
		        color: "#4f5467",
		    }, {
		        label: "11 - 20 Years",
		        data: {{ $age2_percent }},
		        color: "#26c6da",
		    }, {
		        label: "21 - 30 Years",
		        data: {{ $age3_percent }},
		        color: "#009efb",
		    }, {
		        label: "31 - 40 Years",
		        data: {{ $age4_percent }},
		        color: "#7460ee",
		    }, {
		        label: "41 - 50 Years",
		        data: {{ $age5_percent }},
		        color: "#2962FF",
		    }, {
		        label: "51 - 60 Years",
		        data: {{ $age6_percent }},
		        color: "#8ebed4",
		    }, {
		        label: "61 - 70 Years",
		        data: {{ $age7_percent }},
		        color: "#212529",
		    }, {
		        label: "71 - 80 Years",
		        data: {{ $age8_percent }},
		        color: "#f62d51",
		    }, {
		        label: "80+ Years",
		        data: {{ $age9_percent }},
		        color: "#dadada",
		    }];
		    var plotObj = $.plot($("#age-chart"), data2, {
		        series: {
		            pie: {
		                innerRadius: 0.5,
		                show: true
		            }
		        },
		        grid: {
		            hoverable: true
		        },
		        color: null,
		        legend: {
		            show: false
		        },
		        tooltip: true,
		        tooltipOpts: {
		            content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
		            shifts: {
		                x: 20,
		                y: 0
		            },
		            defaultTheme: false
		        }
		    });
		});

		//Flot Moving Line Chart
		$(function() {
		    var container = $("#flot-line-chart-moving");
		    // Determine how many data points to keep based on the placeholder's initial size;
		    // this gives us a nice high-res plot while avoiding more than one point per pixel.
		    var maximum = container.outerWidth() / 2 || 300;
		    //
		    var data = [];

		    function getRandomData() {
		        if (data.length) {
		            data = data.slice(1);
		        }
		        while (data.length < maximum) {
		            var previous = data.length ? data[data.length - 1] : 50;
		            var y = previous + Math.random() * 10 - 5;
		            data.push(y < 0 ? 0 : y > 100 ? 100 : y);
		        }
		        // zip the generated y values with the x values
		        var res = [];
		        for (var i = 0; i < data.length; ++i) {
		            res.push([i, data[i]])
		        }
		        return res;
		    }
		    //
		    series = [{
		        data: getRandomData(),
		        lines: {
		            fill: true
		        }
		    }];
		    //
		    var plot = $.plot(container, series, {
		        colors: ["#26c6da"],
		        grid: {
		            borderWidth: 0,
		            minBorderMargin: 20,
		            labelMargin: 10,
		            backgroundColor: {
		                colors: ["#fff", "#fff"]
		            },
		            margin: {
		                top: 8,
		                bottom: 20,
		                left: 20
		            },
		            markings: function(axes) {
		                var markings = [];
		                var xaxis = axes.xaxis;
		                for (var x = Math.floor(xaxis.min); x < xaxis.max; x += xaxis.tickSize * 1) {
		                    markings.push({
		                        xaxis: {
		                            from: x,
		                            to: x + xaxis.tickSize
		                        },
		                        color: "#fff"
		                    });
		                }
		                return markings;
		            }
		        },
		        xaxis: {
		            tickFormatter: function() {
		                return "";
		            }
		        },
		        yaxis: {
		            min: 0,
		            max: 110
		        },
		        legend: {
		            show: false
		        }
		    });
		    // Update the random dataset at 25FPS for a smoothly-animating chart
		    setInterval(function updateRandom() {
		        series[0].data = getRandomData();
		        plot.setData(series);
		        plot.draw();
		    }, 40);
		});
		//Flot Bar Chart
		$(function() {
		    var barOptions = {
		        series: {
		            bars: {
		                show: true,
		                barWidth: 43200000
		            }
		        },
		        xaxis: {
		            mode: "time",
		            timeformat: "%m/%d",
		            minTickSize: [2, "day"]
		        },
		        grid: {
		            hoverable: true
		        },
		        legend: {
		            show: false
		        },
		        grid: {
		            color: "#AFAFAF",
		            hoverable: true,
		            borderWidth: 0,
		            backgroundColor: '#FFF'
		        },
		        tooltip: true,
		        tooltipOpts: {
		            content: "x: %x, y: %y"
		        }
		    };
		    var barData = {
		        label: "bar",
		        color: "#009efb",
		        data: [
		            [1354521600000, 1000],
		            [1355040000000, 2000],
		            [1355223600000, 3000],
		            [1355306400000, 4000],
		            [1355487300000, 5000],
		            [1355571900000, 6000]
		        ]
		    };
		    $.plot($("#flot-bar-chart"), [barData], barOptions);
		});
		// sales bar chart
		$(function() {
		    //some data
		    var d1 = [];
		    for (var i = 0; i <= 10; i += 1) d1.push([i, parseInt(Math.random() * 60)]);
		    var d2 = [];
		    for (var i = 0; i <= 10; i += 1) d2.push([i, parseInt(Math.random() * 40)]);
		    var d3 = [];
		    for (var i = 0; i <= 10; i += 1) d3.push([i, parseInt(Math.random() * 25)]);
		    var ds = new Array();
		    ds.push({
		        label: "Data One",
		        data: d1,
		        bars: {
		            order: 1
		        }
		    });
		    ds.push({
		        label: "Data Two",
		        data: d2,
		        bars: {
		            order: 2
		        }
		    });
		    ds.push({
		        label: "Data Three",
		        data: d3,
		        bars: {
		            order: 3
		        }
		    });
		    var stack = 0,
		        bars = true,
		        lines = true,
		        steps = true;
		    var options = {
		        bars: {
		            show: true,
		            barWidth: 0.2,
		            fill: 1
		        },
		        grid: {
		            show: true,
		            aboveData: false,
		            labelMargin: 5,
		            axisMargin: 0,
		            borderWidth: 1,
		            minBorderMargin: 5,
		            clickable: true,
		            hoverable: true,
		            autoHighlight: false,
		            mouseActiveRadius: 20,
		            borderColor: '#f5f5f5'
		        },
		        series: {
		            stack: stack
		        },
		        legend: {
		            show: false
		        },
		        yaxis: {
		            tickColor: '#f5f5f5',
		            font: {
		                color: '#bdbdbd'
		            }
		        },
		        xaxis: {
		            tickColor: '#f5f5f5',
		            font: {
		                color: '#bdbdbd'
		            }
		        },
		        colors: ["#4F5467", "#009efb", "#26c6da"],
		        tooltip: true, //activate tooltip
		        tooltipOpts: {
		            content: "%s : %y.0",
		            shifts: {
		                x: -30,
		                y: -50
		            }
		        }
		    };
		    $.plot($(".sales-bars-chart"), ds, options);
		});
    </script>
@endsection