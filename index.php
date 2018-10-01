<!DOCTYPE HTML>
<?php
// header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
// header('Cache-Control: no-store, no-cache, must-revalidate');
// header('Cache-Control: post-check=0, pre-check=0', FALSE);
// header('Pragma: no-cache');
?> 

<html>
    <head>
        <title>Soyuz IoT</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="Demo project with jQuery">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap.min.css">
       
</script>
        <style type="text/css">
          </style>
    </head>
    <body  style="background:rgb(0,0,0)">

<svg xmlns="http://www.w3.org/2000/svg" id="schematicSVG" width="320" height="420" viewBox="0 0 320 420" style="background:rgb(0,0,0)">
    <style type="text/css">
.grid line {
stroke: lightgrey;
stroke-opacity: 0.7;
shape-rendering: crispEdges;
}
.grid path {
stroke-width: 0;
}
.gridVFD line {
stroke: black;
stroke-opacity: 0.5;
}
.gridVFD path {
stroke-width: 0;
}
.gaugeLine {
fill: none;
stroke: black;
stroke-width: 1;
}
.axisRed line{
stroke: red;
}
.axisRed path{
troke: red;
}
.axisBlue line{
stroke: blue;
}
.axisBlue path{
stroke: blue;
}
.axisPurple line{
stroke: purple;
}
.axisPurple path{
stroke: purple;
}
.chartLineLeft {
fill: none;
stroke: DarkViolet;
stroke-width: 3;
}
.chartLineRight2 {
fill: none;
stroke: red;
stroke-width: 3;
}
.chartLineRight1 {
fill: none;
stroke: blue;
stroke-width: 3;
}
.chartLineCI {
fill: none;
stroke: purple;
stroke-width: 3;
}
.chartLineVAC {
fill: none;
stroke: red;
stroke-width: 3;
}
.chartLineHZ {
fill: none;
stroke: blue;
stroke-width: 3;
}
.axisred line{
stroke: red;
}
.axisred path{
stroke: red;
}
.axisBlue line{
stroke: blue;
}
.axisBlue path{
stroke: blue;
}
.axisDarkViolet line{
stroke: DarkViolet;
}
.axisDarkViolet path{
stroke: DarkViolet;
}

.ticks-automanual {
  font: 10px sans-serif;
}

.track,
.track-inset,
.track-overlay {
  stroke-linecap: round;
}

.track {
  stroke: #000;
  stroke-opacity: 0.3;
  stroke-width: 12px;
}

.track-inset {
  stroke: #ddd;
  stroke-width: 8px;
}

.track-overlay {
  pointer-events: stroke;
  stroke-width: 50px;
  stroke: transparent;

}

.handle {

  stroke: #000;
  stroke-opacity: 0.5;
  stroke-width: 1.25px;
}


</style>


<defs id="pilotLightDefs">
<radialGradient id="blueGradient" cx="50%" cy="50%" r="75%">
<stop offset="0%" stop-color="rgb(0,0,255)" stop-opacity="1"/>
<stop offset="100%" stop-color="rgb(0,0,0)" stop-opacity="1"/>
</radialGradient>
<radialGradient id="greenGradient" cx="50%" cy="50%" r="75%">
<stop offset="0%" stop-color="rgb(0,191,0)" stop-opacity="1"/>
<stop offset="100%" stop-color="rgb(0,0,0)" stop-opacity="1"/>
</radialGradient>
<radialGradient id="greyGradient" cx="50%" cy="50%" r="75%">
<stop offset="0%" stop-color="rgb(255,255,255)" stop-opacity="1"/>
<stop offset="100%" stop-color="rgb(0,0,0)" stop-opacity="1"/>
</radialGradient>
<radialGradient id="redGradient" cx="50%" cy="50%" r="75%">
<stop offset="0%" stop-color="rgb(255,0,0)" stop-opacity="1"/>
<stop offset="100%" stop-color="rgb(0,0,0)" stop-opacity="1"/>
</radialGradient>
<radialGradient id="violetGradient" cx="50%" cy="50%" r="75%">
<stop offset="0%" stop-color="rgb(219,0,219)" stop-opacity="1"/>
<stop offset="100%" stop-color="rgb(0,0,0)" stop-opacity="1"/>
</radialGradient>
<radialGradient id="aquaGradient" cx="50%" cy="50%" r="75%">
<stop offset="0%" stop-color="aqua" stop-opacity="1"/>
<stop offset="100%" stop-color="rgb(0,0,0)" stop-opacity="1"/>
</radialGradient>
</defs>
<defs id="arrowDefs"/>
<defs id="defsPattern"/>
<defs id="defsGradient"/>
<defs id="defsShadow"/>
<filter id="drop-shadow" height="150%" width="150%">
<feGaussianBlur in="SourceAlpha" stdDeviation="5" result="blur"/>
<feOffset in="blur" dx="5" dy="5" result="offsetBlur"/>
<feMerge>
<feMergeNode in="offsetBlur"/>
<feMergeNode in="SourceGraphic"/>
</feMerge>
</filter>
</defs>
<defs id="pipe3dDefs">
<filter id="pipe3D">
<feFlood flood-color="black"/>
<feComposite operator="out" in2="SourceGraphic"/>
<feGaussianBlur stdDeviation="6"/>
<feComposite operator="atop" in2="SourceGraphic"/>
</filter>
</defs>
<defs id="alarmWarningTrendDefs">
<linearGradient id="warningMaxTrend" x1="84%" y1="24%" x2="82%" y2="72%">
<stop offset="0%" stop-color="#FF0000" stop-opacity="1"/>
<stop offset="100%" stop-color="#FFA500" stop-opacity="1" stop-offset="100%"/>
</linearGradient>
<linearGradient id="warningMinTrend" x1="84%" y1="24%" x2="82%" y2="72%">
<stop offset="0%" stop-color="#FFA500" stop-opacity="1" stop-offset="0%"/>
<stop offset="100%" stop-color="#FF0000" stop-opacity="1"/>
</linearGradient>
</defs>
<defs id="alarmWarningBarDefs">
<linearGradient id="warningMaxBar" y1="84%" x1="24%" y2="82%" x2="72%">
<stop offset="0" stop-color="#FFA500" stop-opacity="1"/>
<stop offset="100%" stop-color="#FF0000" stop-opacity="1" stop-offset="100%"/>
</linearGradient>
<linearGradient id="warningMinBar" y2="84%" x2="24%" y1="82%" x1="72%">
<stop offset="0" stop-color="#FFA500" stop-opacity="1"/>
<stop offset="100%" stop-color="#FF0000" stop-opacity="1" stop-offset="100%"/>
</linearGradient>
</defs>
<defs id="alarmWarningTankLevelDefs">
<linearGradient id="warningMaxTankLevel" x1="84%" y1="24%" x2="82%" y2="72%">
<stop offset="0%" stop-color="#FF0000" stop-opacity="1"/>
<stop offset="100%" stop-color="#FFA500" stop-opacity="1" stop-offset="100%"/>
</linearGradient>
<linearGradient id="warningMinTankLevel" x1="84%" y1="24%" x2="82%" y2="72%">
<stop offset="0%" stop-color="#FFA500" stop-opacity="1" stop-offset="0%"/>
<stop offset="100%" stop-color="#FF0000" stop-opacity="1"/>
</linearGradient>
</defs>
<g id="zoomG">
<g id="domElemG" shape-rendering="geometricPrecision" text-rendering="geometricPrecision">
<g id="tankLevel" transform="translate(10, 10)scale(1)" type="tankLevel" title="Level" unit="L" max="9000" minAlert="1000" maxAlert="8000" barTankColor="#87CEEB" faceColor="#FDF5E6" setPoint="5000" initialValue="4500" scale="1" class="hmiElem">
<rect width="300" height="400" fill="#FDF5E6" rx="55" ry="55" stroke="black" stroke-width="1"/>
<text x="150" dy="1.5em" font-family="arial" font-size="25" font-weight="bold" text-anchor="middle" class="noselect">
H20</text>
<g id="water">
<text id="unitsText" x="150" y="400" dy="-.75em" font-family="arial" font-size="25" text-anchor="middle" class="units"></text>
<rect id="air" width="230" height="300" fill="#FDF5E6" x="51" y="50"></rect>

<rect id="water_level" width="230" height="0" x="51" y="50" fill="#0000FF"></rect>

</g>
<defs/>

<line id="lineSP" x1="50" y1="183.33333333333331" x2="280" y2="183.33333333333331" stroke="gray" stroke-width="2" stroke-dasharray="15.333333333333334,15.333333333333334"/>
<line id="lineTop" x1="50" y1="73.33333333333331" x2="280" y2="73.33333333333331" stroke="red" stroke-width="2" stroke-dasharray="15.333333333333334,15.333333333333334"/>
<line id="lineB" x1="50" y1="333.33333333333331" x2="280" y2="333.33333333333331" stroke="red" stroke-width="2" stroke-dasharray="15.333333333333334,15.333333333333334"/>

<g style="" transform="translate(50,50)" class="noselect" fill="none" font-size="10" font-family="sans-serif" text-anchor="end">
<path class="domain" stroke="#000" d="M-6,0.5H0.5V300.5H-6"/>
<g class="tick" opacity="1" transform="translate(0,0.5)">
<line stroke="#000" x2="-6"/>
<text fill="#000" x="-9" dy="0.32em">
9000</text>
</g>
<g class="tick" opacity="1" transform="translate(0,33.83333333333337)">
<line stroke="#000" x2="-6"/>
<text fill="#000" x="-9" dy="0.32em">
8000</text>
</g>
<g class="tick" opacity="1" transform="translate(0,67.16666666666666)">
<line stroke="#000" x2="-6"/>
<text fill="#000" x="-9" dy="0.32em">
7000</text>
</g>
<g class="tick" opacity="1" transform="translate(0,100.5)">
<line stroke="#000" x2="-6"/>
<text fill="#000" x="-9" dy="0.32em">
6000</text>
</g>
<g class="tick" opacity="1" transform="translate(0,133.83333333333331)">
<line stroke="#000" x2="-6"/>
<text fill="#000" x="-9" dy="0.32em">
5000</text>
</g>
<g class="tick" opacity="1" transform="translate(0,167.16666666666669)">
<line stroke="#000" x2="-6"/>
<text fill="#000" x="-9" dy="0.32em">
4000</text>
</g>
<g class="tick" opacity="1" transform="translate(0,200.5)">
<line stroke="#000" x2="-6"/>
<text fill="#000" x="-9" dy="0.32em">
3000</text>
</g>
<g class="tick" opacity="1" transform="translate(0,233.83333333333334)">
<line stroke="#000" x2="-6"/>
<text fill="#000" x="-9" dy="0.32em">
2000</text>
</g>
<g class="tick" opacity="1" transform="translate(0,267.1666666666667)">
<line stroke="#000" x2="-6"/>
<text fill="#000" x="-9" dy="0.32em">
1000</text>
</g>
<g class="tick" opacity="1" transform="translate(0,300.5)">
<line stroke="#000" x2="-6"/>
<text fill="#000" x="-9" dy="0.32em">
0</text>
</g>
</g>
</g>
</g>
</g>
</svg>
    </body>
    <script src="svg.min.js"></script>
      <script src="jquery-latest.min.js"></script>
<script type="text/javascript">
var old_value=0;
var new_value;

 function getRandomIntInclusive(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min + 1)) + min; 
}

function getdata(){
$.get("/api/soyuz/read_all.php", function(data, status){
  drawrect(data);
}
);
}
var wh;
function drawrect(val){
 var top=0;
 var bottom=78;
 var t = SVG.get("air");
 t.attr('width', 230);
 t.attr('height', 300);
 t.attr('x', 51);
 t.attr('y', 50);
 
// var rect1 = t.rect(230,300).move(51,50).fill('#FDF5E6');

console.log(val);
new_value = ((320 - 20 - val)*100)/(320-20);
var h = 3*new_value;
var nx = 50+3*(100-new_value);
var ox = 50+3*(100-old_value);
var wl = SVG.get("water_level")
wh = nx;
 wl.attr('width', 230);
 wl.attr('height', h);
 wl.attr('x', 51);
 wl.attr('y', nx);
//var rect2 = wl.rect(230,h).move(51,nx).fill('#0000FF');
//rect2.setAttribute("class", "wave");

var delta = new_value-old_value;
var dh = 3*Math.abs(delta);
var delta_rect;

// if (delta>0){
// delta_rect = t.rect(230, dh).move(51,nx).fill('#00FF00');
// delta_rect.animate(40000).attr("height",dh).attr("y",nx).fill('#0000FF');//.loop(10);

// }
// else
// {
// delta_rect = t.rect(230, dh).move(51,ox).fill('#FF0000');
// delta_rect.animate(4000).attr("height",dh).attr("y",nx).fill('#0000FF');//op(10);
// //delta_rect.finish();
// }
//rect2.animate(4000, "<>", 1000).attr("height", 3*new_value).attr("y",50+3*(100-new_value)).loop();
old_value=new_value;
//rect2.stop();
//rect2.stop(true);
//delta_rect.stop().fill('#0000FF');
var water_y_cm = (320 - 20 - val);
var water_y_m = water_y_cm / 100;
var water_vol_cm = water_y_cm * 300 * 300;
var water_vol_l = water_vol_cm * 0.001;
SVG.get("unitsText").move(150,370).text(water_vol_l+" L");
    
  //  $('#water_level').drawWaves({

  // defaults
//  // container: '0000FF',
//   color: '#00FF00',
//   //height: 200,
//   waveDelta: 100,
//   wavePoints: 3,
//   speed: .15
  
// });
    
}

setInterval(getdata, 500);

  

   </script>
  <script type="text/javascript">
        jQuery(function(){

        });
    </script>

</html>

