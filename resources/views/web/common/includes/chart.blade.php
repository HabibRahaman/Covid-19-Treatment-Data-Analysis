@section('page_js')
    <script type="text/javascript">
        $(function() {
            "use strict";
            
            @php
            	$total_conditions = count($conditions);
            @endphp
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
	                    data:['Health Conditions']
	                },
	                toolbox: {
	                    show : true,
	                    feature : {

	                        magicType : {show: true, type: ['line', 'bar']},
	                        restore : {show: true},
	                        saveAsImage : {show: true}
	                    }
	                },
	                color: ["#2962FF"],
	                calculable : true,
	                xAxis : [
	                    {
	                        type : 'category',
	                        data : [
	                        	@foreach($conditions as $key => $condition)
	                            	'{{ $condition->name }}' @if($total_conditions != $key + 1), @endif 
	                            @endforeach
	                        ]
	                    }
	                ],
	                yAxis : [
	                    {
	                        type : 'value'
	                    }
	                ],
	                series : [
	                    {
	                        name:'Health Conditions',
	                        type:'bar',
	                        data:[
	                        	@foreach($conditions as $key => $condition)
	                            	'{{ $condition->patients->count() }}' @if($total_conditions != $key + 1), @endif  
	                            @endforeach
	                        ],
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
    </script>
@endsection