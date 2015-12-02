//var ctx = $("#passingGraph").get(0).getContext("2d");

var ctx = document.getElementById("resultGraph").getContext("2d");

Chart.defaults.global = {
    // Boolean - Whether to animate the chart
    animation: true,

    // Number - Number of animation steps
    animationSteps: 80,

    // String - Animation easing effect
    // Possible effects are:
    // [easeInOutQuart, linear, easeOutBounce, easeInBack, easeInOutQuad,
    //  easeOutQuart, easeOutQuad, easeInOutBounce, easeOutSine, easeInOutCubic,
    //  easeInExpo, easeInOutBack, easeInCirc, easeInOutElastic, easeOutBack,
    //  easeInQuad, easeInOutExpo, easeInQuart, easeOutQuint, easeInOutCirc,
    //  easeInSine, easeOutExpo, easeOutCirc, easeOutCubic, easeInQuint,
    //  easeInElastic, easeInOutSine, easeInOutQuint, easeInBounce,
    //  easeOutElastic, easeInCubic]
    animationEasing: "easeInOutSine",

    // Boolean - If we should show the scale at all
    showScale: true,

    // Boolean - If we want to override with a hard coded scale
    scaleOverride: false,

    // ** Required if scaleOverride is true **
    // Number - The number of steps in a hard coded scale
    scaleSteps: null,
    // Number - The value jump in the hard coded scale
    scaleStepWidth: null,
    // Number - The scale starting value
    scaleStartValue: null,

    // String - Colour of the scale line
    scaleLineColor: "rgba(0,0,0,.1)",

    // Number - Pixel width of the scale line
    scaleLineWidth: 1,

    // Boolean - Whether to show labels on the scale
    scaleShowLabels: true,

    // Interpolated JS string - can access value
    scaleLabel: "<%=value%>",

    // Boolean - Whether the scale should stick to integers, not floats even if drawing space is there
    scaleIntegersOnly: true,

    // Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
    scaleBeginAtZero: false,

    // String - Scale label font declaration for the scale label
    scaleFontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",

    // Number - Scale label font size in pixels
    scaleFontSize: 12,

    // String - Scale label font weight style
    scaleFontStyle: "normal",

    // String - Scale label font colour
    scaleFontColor: "#666",

    // Boolean - whether or not the chart should be responsive and resize when the browser does.
    responsive: true,

    // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
    maintainAspectRatio: true,

    // Boolean - Determines whether to draw tooltips on the canvas or not
    showTooltips: true,

    // Function - Determines whether to execute the customTooltips function instead of drawing the built in tooltips (See [Advanced - External Tooltips](#advanced-usage-custom-tooltips))
    customTooltips: false,

    // Array - Array of string names to attach tooltip events
    tooltipEvents: ["mousemove", "touchstart", "touchmove"],

    // String - Tooltip background colour
    tooltipFillColor: "rgba(0,0,0,0.8)",

    // String - Tooltip label font declaration for the scale label
    tooltipFontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",

    // Number - Tooltip label font size in pixels
    tooltipFontSize: 14,

    // String - Tooltip font weight style
    tooltipFontStyle: "normal",

    // String - Tooltip label font colour
    tooltipFontColor: "#fff",

    // String - Tooltip title font declaration for the scale label
    tooltipTitleFontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",

    // Number - Tooltip title font size in pixels
    tooltipTitleFontSize: 14,

    // String - Tooltip title font weight style
    tooltipTitleFontStyle: "bold",

    // String - Tooltip title font colour
    tooltipTitleFontColor: "#fff",

    // Number - pixel width of padding around tooltip text
    tooltipYPadding: 6,

    // Number - pixel width of padding around tooltip text
    tooltipXPadding: 6,

    // Number - Size of the caret on the tooltip
    tooltipCaretSize: 8,

    // Number - Pixel radius of the tooltip border
    tooltipCornerRadius: 6,

    // Number - Pixel offset from point x to tooltip edge
    tooltipXOffset: 10,

    // String - Template string for single tooltips
    tooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",

    // String - Template string for multiple tooltips
    multiTooltipTemplate: "<%= value %>",

    // Function - Will fire on animation progression.
    onAnimationProgress: function () {},

    // Function - Will fire on animation completion.
    onAnimationComplete: function () {}
}

var y1, y2, y3, y4, y5, y6;
var p1, p2, p3, p4, p5, p6;
var pa1, pa2, pa3, pa4, pa5, pa6;
var ga1, ga2, ga3, ga4, ga5, ga6;
y1 = parseInt(document.getElementById("yr0").innerHTML);
y2 = parseInt(document.getElementById("yr1").innerHTML);
y3 = parseInt(document.getElementById("yr2").innerHTML);
y4 = parseInt(document.getElementById("yr3").innerHTML);
y5 = parseInt(document.getElementById("yr4").innerHTML);
y6 = parseInt(document.getElementById("yr5").innerHTML);


p1 = parseFloat(document.getElementById("p0").innerHTML);
p2 = parseFloat(document.getElementById("p1").innerHTML);
p3 = parseFloat(document.getElementById("p2").innerHTML);
p4 = parseFloat(document.getElementById("p3").innerHTML);
p5 = parseFloat(document.getElementById("p4").innerHTML);
p6 = parseFloat(document.getElementById("p5").innerHTML);


pa1 = parseInt(document.getElementById("ap0").innerHTML);
pa2 = parseInt(document.getElementById("ap1").innerHTML);
pa3 = parseInt(document.getElementById("ap2").innerHTML);
pa4 = parseInt(document.getElementById("ap3").innerHTML);
pa5 = parseInt(document.getElementById("ap4").innerHTML);
pa6 = parseInt(document.getElementById("ap5").innerHTML);


ga1 = parseInt(document.getElementById("gp0").innerHTML);
ga2 = parseInt(document.getElementById("gp1").innerHTML);
ga3 = parseInt(document.getElementById("gp2").innerHTML);
ga4 = parseInt(document.getElementById("gp3").innerHTML);
ga5 = parseInt(document.getElementById("gp4").innerHTML);
ga6 = parseInt(document.getElementById("gp5").innerHTML);
/*p1 = document.getElementById("p0").innerHTML;
p2 = document.getElementById("p1").innerHTML;
p3 = document.getElementById("p2").innerHTML;
p4 = document.getElementById("p3").innerHTML;
p5 = document.getElementById("p4").innerHTML;
p6 = document.getElementById("p5").innerHTML;*/




var data = {
    labels: [y6, y5, y4, y3, y2, y1],
    //labels: [2009, 2010, 2011, 2012, 2013, y2],
    datasets: [
        {
            label: "Annual result curve",
            fillColor: "rgba(140, 35, 117, 0.3)",
            strokeColor: "#8c2375",
            pointColor: "blue",
            pointStrokeColor: "#8c2375",
            pointHighlightFill: "#8c2375",
            pointHighlightStroke: "#8c2375",
            //data: [p1,p2,p3,p4,p5,p6]
            data: [p6, p5, p4, p3, p2, p1]
                //data: [10, 20, 30, 40, 50, 60]
        }
        ,
        {
            label: "Annual result curve for A+",
            fillColor: "rgba(255, 215, 0, 0.3)",
            strokeColor: "#FFD700",
            pointColor: "red",
            pointStrokeColor: "#8c2375",
            pointHighlightFill: "#8c2375",
            pointHighlightStroke: "#8c2375",
            //data: [pa1,pa2,pa3,pa4,pa5,pa6]
            data: [pa6, pa5, pa4, pa3, pa2, pa1]
                },
        {
            label: "Annual result curve for A+",
            fillColor: "rgba(0, 255, 0, 0.3)",
            strokeColor: "#006400",
            pointColor: "yellow",
            pointStrokeColor: "#8c2375",
            pointHighlightFill: "#8c2375",
            pointHighlightStroke: "#8c2375",
            //data: [ga1,ga2,ga3,ga4,ga5,ga6]
            data: [ga6, ga5, ga4, ga3, ga2, ga1]
                }
    ]
};
var myLineChart = new Chart(ctx).Line(data, {
    bezierCurve: false,
    scaleGridLineWidth: 3,
    scaleShowVerticalLines: true,
    bezierCurveTension: 0.4,
    scaleShowGridLines: true,
    pointDotRadius: 10,
    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
    datasetStrokeWidth: 5,
    scaleGridLineColor: "rgba(255,0,0,.05)",
});

Chart.defaults.global.responsive = true;
//Chart.defaults.Line.scaleGridLineWidth = 1;
//Chart.defaults.Line.bezierCurve = false;
