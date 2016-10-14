<script
              src="https://code.jquery.com/jquery-3.1.0.min.js"
              integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="
              crossorigin="anonymous"></script>
<?php
// Icons from https://icons8.com/license/ :D
if (isset($_GET['key'])) {

if ($_GET['key'] == "0000") {




$get = file_get_contents("param.xml");
$arr = simplexml_load_string($get);

$servername_dis = $arr->servername_dis->cnt;
$gamemode_dis = $arr->gamemode_dis->cnt;
$map_dis = $arr->map_dis->cnt;
$slots_dis = $arr->slots_dis->cnt;
$addons_dis = $arr->addons_dis->cnt;
$rule1 = $arr->rule_1->cnttex;
$rule2 = $arr->rule_2->cnttex;
$rule3 = $arr->rule_3->cnttex;
$rule4 = $arr->rule_4->cnttex;
$rule5 = $arr->rule_5->cnttex;
$rule6 = $arr->rule_6->cnttex;
$rule7 = $arr->rule_7->cnttex;


if ($servername_dis == "1") {
    ?>
<script type="text/javascript">
$( document ).ready(function() {

$('#adissrv').attr('href', 'edit.php?act_servername');
$('#dis_servername').html("ENABLE");
$('#dis_servername').css('color', 'green');

});
</script>
    <?php
}
if ($gamemode_dis == "1") {
    ?>
<script type="text/javascript">
$( document ).ready(function() {

$('#adisgm').attr('href', 'edit.php?act_gamemode');
$('#dis_gamemode').html("ENABLE");
$('#dis_gamemode').css('color', 'green');

});
</script>
    <?php
}
if ($map_dis == "1") {
    ?>
<script type="text/javascript">
$( document ).ready(function() {

$('#adismap').attr('href', 'edit.php?act_map');
$('#dis_mapname').html("ENABLE");
$('#dis_mapname').css('color', 'green');

});
</script>
    <?php
}
if ($slots_dis == "1") {
    ?>
<script type="text/javascript">
$( document ).ready(function() {

$('#adislot').attr('href', 'edit.php?act_slot');
$('#dis_slots').html("ENABLE");
$('#dis_slots').css('color', 'green');

});
</script>
    <?php
}
if ($addons_dis == "1") {
    ?>
<script type="text/javascript">
$( document ).ready(function() {

$('#adisad').attr('href', 'edit.php?act_addon');
$('#dis_addons').html("ENABLE");
$('#dis_addons').css('color', 'green');

});
</script>
    <?php
}




?>

<!DOCTYPE HTML>
<!-- Icons from https://icons8.com/license/ :D-->
<html>
	<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Loading screen" /> 
	<title>MateMac - Admin</title> 
	<link href="admin.css" rel="stylesheet" type="text/css" />	
	<script type="text/javascript" src="scripts/main.js"></script>
    </head>
	<body>

 
<div class="card" >
<!--Change your background url here (image located in assets folder)-->
    <div class="content_card">
        <div class="infos">
            <h1>Infos</h1>
            <li><img src="assets/servername.png"> <span id="servername">Server Name</span><a id="adissrv" href="edit.php?dis_servername"><button id="dis_servername">DISABLE</button></a></li>
            <li><img src="assets/games.png"> <span id="gamemode">GameMode</span><a id="adisgm" href="edit.php?dis_gamemode"><button id="dis_gamemode">DISABLE</button></a></li>
            <li><img src="assets/maps.png"> <span id="mapname">Map</span><a id="adismap" href="edit.php?dis_mapname"><button id="dis_mapname">DISABLE</button></a></li>
            <li><img src="assets/slots.png"> <span>Slots</span><a id="adislot" href="edit.php?dis_slots"><button id="dis_slots">DISABLE</button></a></li>
            <li><img src="assets/extensions.png"> <span>Addons</span><a id="adisad" href="edit.php?dis_addons"><button id="dis_addons">DISABLE</button></a></li><!--PUT HERE ADDONS-->
<form name="modeditad" method="GET" action="edit.php">
<input style="left: 30px;top: 0px;" name="addontext" type="text" placeholder="Car Dealer...">
<input for="modeditad" type="submit" value="EDIT">
</form>
        </div>
        <div class="rules"><!--RULES-->
        <h1>Rules</h1>
        <form method="GET" action="edit.php">
        <li><h1>1</h1><input type="text" name="rule1" value="<?php echo $rule1; ?>" placeholder="Type a rule"></li>
        <li><h1>2</h1><input type="text" name="rule2" value="<?php echo $rule2; ?>" placeholder="Type a rule"></li>
        <li><h1>3</h1><input type="text" name="rule3" value="<?php echo $rule3; ?>" placeholder="Type a rule"></li>
        <li><h1>4</h1><input type="text" name="rule4" value="<?php echo $rule4; ?>" placeholder="Type a rule"></li>
        <li><h1>5</h1><input type="text" name="rule5" value="<?php echo $rule5; ?>" placeholder="Type a rule"></li>
        <li><h1>6</h1><input type="text" name="rule6" value="<?php echo $rule6; ?>" placeholder="Type a rule"></li>
        <li><h1>7</h1><input type="text" name="rule7" value="<?php echo $rule7; ?>" placeholder="Type a rule"></li>
        <input type="submit" value="MODIFY" style="top: 0px;left: -17px;position: relative;">
       </form>


        </div>
        <div class="colors">
            <h1>Colors</h1>

<li>
<h1>Page background</h1>
<a href="edit.php?img_pb">
<div class="bubble">
	<img src="assets/demo_background.jpg">
	<ul style="top:-105px;">IMAGE</ul>
</div>
</a>

<form method="GET" action="edit.php">
<input name="customColor_pg" style="left: 15px;top: 40px;" type="text" placeholder="#fff">
<input style="
top: 40px;
left: 15px;
background: rgba(255, 255, 255, 0.21) none repeat scroll 0% 0%;
font-family: 'Roboto',sans-serif;
color: rgb(255, 255, 255);
border-radius: 4px;
-moz-border-radius: 4px;
-webkit-border-radius: 4px;"  type="submit" value="CHANGE" />
</form>

</li>

<li style="height: 380px;">
<h1>Card background</h1>
<a href="edit.php?randCol2">
<div class="bubble" id="randCol2">
</div>
</a>
<a href="edit.php?randCol3">
<div class="bubble" id="randCol3">
</div>
</a>
<a href="edit.php?randCol4">
<div class="bubble" id="randCol4">
</div>
</a>
<a href="edit.php?randCol5">
<div class="bubble" id="randCol5">
</div>
</a>
<a href="edit.php?randCol6">
<div class="bubble" id="randCol6">
</div>
</a>
<a href="edit.php?randCol7">
<div class="bubble" id="randCol7">
</div>
</a>
<a href="edit.php?randCol8">
<div class="bubble" id="randCol8">
</div>
</a>
<a href="edit.php?randCol9">
<div class="bubble" id="randCol9">
</div>
</a>
<h2>Or a custom color ?</h2>

<form method="GET" action="edit.php">
<input name="ctsmcolor_cardl" style="left: 15px;top: -15px;" type="text" placeholder="#fff">
<input  style="
top: -15px;
left: 15px;
background: rgba(255, 255, 255, 0.21) none repeat scroll 0% 0%;
font-family: 'Roboto',sans-serif;
color: rgb(255, 255, 255);
border-radius: 4px;
-moz-border-radius: 4px;
-webkit-border-radius: 4px;" type="submit" value="CHANGE">
</form>

</div>

        <div class="Icons">
        <h1>Icons</h1>

<li>
	<h1>Material (default)</h1>
	<img src="assets/servername.png"> <img src="assets/games.png"> <img src="assets/maps.png"> <img src="assets/slots.png"> <img src="assets/extensions.png"> 
        <a href="edit.php?icn_mat"><button type="submit" style="float:right;">
        	CHOOSE
        </button></a>
</li>
<li>
	<h1>Classic</h1>
	<img src="assets/classic_name.png"> <img src="assets/classic_game.png"> <img src="assets/classic_map.png"> <img src="assets/classic_slots.png"> <img src="assets/classic_addons.png"> 
        <a href="edit.php?icn_clas"><button type="submit" style="float:right;">
        	CHOOSE
        </button></a>
</li>


        </div>






        <div class="Slideshow">
        <h1>Background Slideshow</h1>

<li>
<button id="dis_addons">DISABLE</button>
</li>


        </div>









</li>


        </div>
    </div>


        <div id="loader">
            <div id="loaderwidth" style="width: 0%;"></div>
        </div>
        
</div>


	</body>

</html>

<?php
}

}

?>
<style type="text/css">
.infos form input[type="submit"] {
background: rgba(255, 255, 255, 0.21) none repeat scroll 0% 0%;
font-family: "Roboto",sans-serif;
color: rgb(255, 255, 255);
border-radius: 4px;
height: 40px;
width: auto;
padding: 0px 8px;
border: medium none;
font-weight: 400;
font-size: 18px;
position: relative;
float: right;
cursor: pointer;
border-radius: 4px;
-moz-border-radius: 4px;
-webkit-border-radius: 4px;
right: 195px;
position: absolute;
top: 375px;
left: auto;
}
a{
	text-decoration: none;
	color: inherit;
}
#randCol9{
  background-image: -moz-linear-gradient( -90deg, rgb(255,219,76) 0%, rgb(255,205,2) 100%);
  background-image: -webkit-linear-gradient( -90deg, rgb(255,219,76) 0%, rgb(255,205,2) 100%);
  background-image: -ms-linear-gradient( -90deg, rgb(255,219,76) 0%, rgb(255,205,2) 100%);
}
#randCol8{
  background-image: -moz-linear-gradient( 90deg, rgb(108,68,252) 0%, rgb(197,68,252) 100%);
  background-image: -webkit-linear-gradient( 90deg, rgb(108,68,252) 0%, rgb(197,68,252) 100%);
  background-image: -ms-linear-gradient( 90deg, rgb(108,68,252) 0%, rgb(197,68,252) 100%);
}
#randCol7{
  background-image: -moz-linear-gradient( -90deg, rgb(74,74,74) 0%, rgb(43,43,43) 100%);
  background-image: -webkit-linear-gradient( -90deg, rgb(74,74,74) 0%, rgb(43,43,43) 100%);
  background-image: -ms-linear-gradient( -90deg, rgb(74,74,74) 0%, rgb(43,43,43) 100%);
}
#randCol6{
  background-image: -moz-linear-gradient( -90deg, rgb(255,149,0) 0%, rgb(255,94,58) 100%);
  background-image: -webkit-linear-gradient( -90deg, rgb(255,149,0) 0%, rgb(255,94,58) 100%);
  background-image: -ms-linear-gradient( -90deg, rgb(255,149,0) 0%, rgb(255,94,58) 100%);
}
#randCol5{
background: rgba(58,62,96,1);
background: -moz-linear-gradient(45deg, rgba(58,62,96,1) 0%, rgba(69,73,107,1) 100%);
background: -webkit-gradient(left bottom, right top, color-stop(0%, rgba(58,62,96,1)), color-stop(100%, rgba(69,73,107,1)));
background: -webkit-linear-gradient(45deg, rgba(58,62,96,1) 0%, rgba(69,73,107,1) 100%);
background: -o-linear-gradient(45deg, rgba(58,62,96,1) 0%, rgba(69,73,107,1) 100%);
background: -ms-linear-gradient(45deg, rgba(58,62,96,1) 0%, rgba(69,73,107,1) 100%);
background: linear-gradient(45deg, rgba(58,62,96,1) 0%, rgba(69,73,107,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3a3e60', endColorstr='#45496b', GradientType=1 );
}
#randCol4{
  background-image: -moz-linear-gradient( -45deg, rgb(26,214,253) 0%, rgb(29,98,240) 100%);
  background-image: -webkit-linear-gradient( -45deg, rgb(26,214,253) 0%, rgb(29,98,240) 100%);
  background-image: -ms-linear-gradient( -45deg, rgb(26,214,253) 0%, rgb(29,98,240) 100%);
}
#randCol3{
  background-image: -moz-linear-gradient( -45deg, rgb(219,221,222) 0%, rgb(137,140,144) 100%);
  background-image: -webkit-linear-gradient( -45deg, rgb(219,221,222) 0%, rgb(137,140,144) 100%);
  background-image: -ms-linear-gradient( -45deg, rgb(219,221,222) 0%, rgb(137,140,144) 100%);
}
#randCol2{
  background-image: -moz-linear-gradient( -45deg, rgb(255,94,58) 0%, rgb(255,42,104) 100%);
  background-image: -webkit-linear-gradient( -45deg, rgb(255,94,58) 0%, rgb(255,42,104) 100%);
  background-image: -ms-linear-gradient( -45deg, rgb(255,94,58) 0%, rgb(255,42,104) 100%);
}
h2 {
    font-family: 'Roboto', sans-serif;
    color: white;
    font-size: 19px;
    font-weight: 300;
    margin: 20px 20px;
    width: 80%
}
h1 {
	font-family: 'Roboto', sans-serif;
    color: white;
    font-size: 20px;
    font-weight: 300;
    margin: 20px 20px;
}
.Icons li h1 {
    margin: 0 0 0 6px;
    font-weight: 500;
}
.Icons li {
    position: relative;
    float: left;
    width: 90%;
    margin: 5%;
    height: 80px;
    border-bottom: solid 1px rgba(255,255,255,0.3);
}
.Icons{
width: 38%;
background: rgb(89, 182, 139) none repeat scroll 0% 0%;
height: auto;
border-radius: 5px;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
-webkit-box-shadow: 0px 10px 24px 0px rgba(0,0,0,0.38);
-moz-box-shadow: 0px 10px 24px 0px rgba(0,0,0,0.38);
box-shadow: 0px 10px 24px 0px rgba(0,0,0,0.38);
margin: 2%;
margin-left: 0%;
position: relative;
float: left;
padding-bottom: 20px;
top: -30px;
}
.colors li {
    width: 90%;
    position: relative;
    float: left;
    height: 150px;
}
ul {
    position: relative;
    width: 100px;
    font-size: 15px;
    text-align: center;
    line-height: 100px;
    vertical-align: middle;
}
.bubble img {
    margin: 0;
    height: 100px;
}
.bubble:hover{
	opacity: 0.5;
}
.bubble {
    width: 100px;
    height: 100px;
    background: rgba(236, 236, 236, 0.22);
    position: relative;
    float: left;
    margin: 8px;
    border-radius: 50%;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    overflow: hidden;
    cursor: pointer;
    opacity: 1;
    transition:all 0.3s;
}
.colors {
    width: 56%;
    background: #2c3e50;
    height: auto;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-box-shadow: 0px 10px 24px 0px rgba(0,0,0,0.38);
    -moz-box-shadow: 0px 10px 24px 0px rgba(0,0,0,0.38);
    box-shadow: 0px 10px 24px 0px rgba(0,0,0,0.38);
    margin: 2%;
    position: relative;
    float: left;
    padding-bottom: 20px;
    top: -150px;
    background: rgb(210, 178, 113) none repeat scroll 0% 0%;
}
	.rules input[type="submit"], .Icons button  {
    position: absolute;
    right: 20px;
    height: 40px;
    width: auto;
    padding: 0 8px 0 8px;
    border: none;
    background: rgba(255, 255, 255, 0.21);
    font-family: 'Roboto', sans-serif;
    color: #fff;
    font-weight: 400;
    font-size: 18px;
    position: relative;
    float: right;
    cursor: pointer;
    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
}
	*{
		padding: 0;
		margin: 0;
	}
    html{
    	background: #E0E0E0;
    }
    .content_card {
    width: 1000px;
    height: auto;
    margin: auto;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    position: absolute;
}
.rules li h1 {
    width: 40px;
    height: 40px;
    margin: 0;
    margin-bottom: 20px;
    background: rgba(0,0,0,0.2);
    border-radius: 50%;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    text-align: center;
}
.rules h3 {
    font-family: 'Roboto', sans-serif;
    color: white;
    font-size: 20px;
    font-weight: 300;
    position: relative;
    top: -55px;
    left: 50px;
}
.infos {
width: 56%;
background: #2c3e50;
height: auto;
border-radius: 5px;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
-webkit-box-shadow: 0px 10px 24px 0px rgba(0,0,0,0.38);
-moz-box-shadow: 0px 10px 24px 0px rgba(0,0,0,0.38);
box-shadow: 0px 10px 24px 0px rgba(0,0,0,0.38);
margin: 2%;
position: relative;
float: left;
padding-bottom: 20px;
}
input {
    font-family: 'Roboto', sans-serif;
    color: white;
    font-size: 20px;
    font-weight: 300;
    position: relative;
    top: -60px;
    left: 50px;
    height: 40px;
    border: none;
    background: rgba(255,255,255,0.1);
    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    padding: 0px 12px 0px 12px;
}
.rules {
    width: 38%;
    background: #2980b9;
    height: auto;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-box-shadow: 0px 10px 24px 0px rgba(0,0,0,0.38);
-moz-box-shadow: 0px 10px 24px 0px rgba(0,0,0,0.38);
box-shadow: 0px 10px 24px 0px rgba(0,0,0,0.38);
    margin: 2%;
    margin-left: 0%;
    position: relative;
    float: left;
    padding-bottom: 20px;

}
h1 {
    font-family: 'Roboto', sans-serif;
    color: white;
    font-size: 25px;
    font-weight: 300;
    margin: 20px 20px;
}
li {
    font-family: 'Roboto', sans-serif;
    color: white;
    font-size: 25px;
    font-weight: 300;
    margin: 8px 20px;
    height: 40px;
        list-style-type: none;
        margin-bottom: 20px;

}
li img {
    height: 30px;
    margin: 5px;
}
li span {
    line-height: 40px;
    vertical-align: middle;
    font-size: 20px;
    position: relative;
    top: -10px;
}
li button {
    position: absolute;
    right: 20px;
    height: 40px;
    width: auto;
    padding: 0 8px 0 8px;
    border: none;
    background: transparent;
    font-family: 'Roboto', sans-serif;
    color: #ea3f3f;
    font-weight: 400;
    font-size: 18px;
    position: relative;
    float: right;
    cursor: pointer;
}
</style>