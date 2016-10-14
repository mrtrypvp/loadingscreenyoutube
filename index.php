<?php
// Go to http://steamcommunity.com/dev/apikey to get Web API Key
// Created by Victor.R
// Thanks to CaptainMcMarcus for base :D
$webapisteam = "";
$urlwebsite = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$linkurl = $urlwebsite . "?steamid=%s";
$steamid64 = $_GET["steamid"];
$url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . $webapisteam . "&steamids=" . $steamid64;
$json = file_get_contents($url);
$tbd = json_decode($json, true);
$tb = $tbd["response"]["players"][0];
if (!isset($_GET["steamid"])) {
	echo "Sorry there is a problem with you steamID or the page URL.";
    echo "<br />";
    echo "Please click on this link to get to the page";
    echo "<br />";
    echo '<a href='.$linkurl.'>Link</a>';
}
?>
<!DOCTYPE HTML>
<html>
	<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Loading screen" /> 
	<title>MateMac</title> 
	<link href="style.css" rel="stylesheet" type="text/css" />	
<script
              src="https://code.jquery.com/jquery-3.1.0.min.js"
              integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="
              crossorigin="anonymous"></script>
	<script type="text/javascript" src="scripts/main.js"></script>

    </head>
	<body>

 <?php
$get = file_get_contents("param.xml");
$arr = simplexml_load_string($get);

$servername_dis = $arr->servername_dis->cnt;
$gamemode_dis = $arr->gamemode_dis->cnt;
$map_dis = $arr->map_dis->cnt;
$slots_dis = $arr->slots_dis->cnt;
$addons_dis = $arr->addons_dis->cnt;
$addons_text = $arr->addon_edit->cnttex;
$rule1 = $arr->rule_1->cnttex;
$rule2 = $arr->rule_2->cnttex;
$rule3 = $arr->rule_3->cnttex;
$rule4 = $arr->rule_4->cnttex;
$rule5 = $arr->rule_5->cnttex;
$rule6 = $arr->rule_6->cnttex;
$rule7 = $arr->rule_7->cnttex;

$bgimg = $arr->pgcol->cnt;
$cardcol = $arr->cardcol->cnttex;
$icons = $arr->icons->cnt;
$cardcol = preg_replace( "/\r|\n/", "", $cardcol );

if ($servername_dis == "1") {
    ?>
<script type="text/javascript">
$( document ).ready(function() {

$('#srvdis').css('display', 'none');

});
</script>
    <?php
}
if ($gamemode_dis == "1") {
    ?>
<script type="text/javascript">
$( document ).ready(function() {

$('#gmdis').css('display', 'none');

});
</script>
    <?php
}
if ($map_dis == "1") {
    ?>
<script type="text/javascript">
$( document ).ready(function() {

$('#mapdis').css('display', 'none');

});
</script>
    <?php
}
if ($slots_dis == "1") {
    ?>
<script type="text/javascript">
$( document ).ready(function() {

$('#sldis').css('display', 'none');

});
</script>
    <?php
}
if ($addons_dis == "1") {
    ?>
<script type="text/javascript">
$( document ).ready(function() {

$('#addis').css('display', 'none');

});
</script>
    <?php
}
//COLORS
if ($bgimg != "img") {
    ?>
<script type="text/javascript">
$( document ).ready(function() {

$('.background img').css('display', 'none');
$('.background').attr('style', "<?php echo 'background:'.$bgimg.';'; ?>");

});
</script>
    <?php
}
    ?>
<?php
if ($cardcol[0] == '#') {
    $cardcol = "background:".$cardcol.";";
}
?>
<script type="text/javascript">
$( document ).ready(function() {
    $('.card').addClass("cardUpd");
    $('.card').removeClass("card");
    $('.cardUpd').attr('style', "<?php echo $cardcol; ?>");
});
</script>
<?php
//icons
if ($icons == "2") {
    ?>
<script type="text/javascript">
$( document ).ready(function() {

$('#icsvn').attr('src', "<?php echo 'assets/classic_name.png'; ?>");
$('#icgm').attr('src', "<?php echo 'assets/classic_game.png'; ?>");
$('#icmap').attr('src', "<?php echo 'assets/classic_map.png'; ?>");
$('#icslo').attr('src', "<?php echo 'assets/classic_slots.png'; ?>");
$('#icext').attr('src', "<?php echo 'assets/classic_addons.png'; ?>");

});
</script>
<?php
}
?>
<script type="text/javascript">
$( document ).ready(function() {


setTimeout(
  function() 
  {

$('#s3').css('opacity', '0');
$('#s1').css('opacity', '1');

setTimeout(
  function() 
  {
$('#s1').css('opacity', '0');
$('#s2').css('opacity', '1');
  }, 2500);

setTimeout(
  function() 
  {
$('#s2').css('opacity', '0');
$('#s3').css('opacity', '1');
  }, 5000);

  }, 1);


setInterval(
  function() 
  {

$('#s3').css('opacity', '0');
$('#s1').css('opacity', '1');

setTimeout(
  function() 
  {
$('#s1').css('opacity', '0');
$('#s2').css('opacity', '1');
  }, 2500);

setTimeout(
  function() 
  {
$('#s2').css('opacity', '0');
$('#s3').css('opacity', '1');
  }, 5000);

  }, 7500);



});
</script>

<div class="background">
    <img src="assets/demo_background.jpg" id="s1" style="opacity:1;transition:all 0.5s;"><!--Change your background url here (image located in assets folder) SLIDE 1-->
    <img src="assets/demo_background_2.jpg" id="s2" style="opacity:0;transition:all 0.5s;"><!--Change your background url here (image located in assets folder) SLIDE 2-->
    <img src="assets/demo_background_3.jpg" id="s3" style="opacity:0;transition:all 0.5s;"><!--Change your background url here (image located in assets folder) SLIDE 3-->
</div>
 
<div class="card">
<!--Change your background url here (image located in assets folder)-->
    <div class="user">
        <div class="profil_image">
            <img src="<?php echo $tb["avatarfull"]; ?>">
        </div>
        <h3 id="connecting">
            <p>Connecting...</p>
        </h3>
        <div id="percentage"><p></p></div>
        <h1 id="username"><?php echo $tb["personaname"]; ?></h1>
    </div>
    <div class="content_card">
        <div class="infos">
            <h1>Infos</h1>
            <li id="srvdis"><img id="icsvn" src="assets/servername.png"> <span id="servername">Server</span></li>
            <li id="gmdis"><img id="icgm" src="assets/games.png"> <span id="gamemode">GameMode</span></li>
            <li id="mapdis"><img id="icmap" src="assets/maps.png"> <span id="mapname">Map</span></li>
            <li id="sldis"><img id="icslo" src="assets/slots.png"> <span><span style="margin-left:0;" id="maxplayers">nbr</span> Slots</span></li>
            <li id="addis" style="max-height: 200px;"><img id="icext" src="assets/extensions.png"> <span style="line-height: 25px;width: 86%;position: relative;float: right;"><?php echo $addons_text; ?></span></li><!--PUT HERE ADDONS-->
        </div>
        <div class="rules"><!--RULES-->
        <h1>Rules</h1>
        <li><h1>1</h1><h3><?php echo $rule1; ?></h3></li>
        <li><h1>2</h1><h3><?php echo $rule2; ?></h3></li>
        <li><h1>3</h1><h3><?php echo $rule3; ?></h3></li>
        <li><h1>4</h1><h3><?php echo $rule4; ?></h3></li>
        <li><h1>5</h1><h3><?php echo $rule5; ?></h3></li>
        <li><h1>6</h1><h3><?php echo $rule6; ?></h3></li>
        <li><h1>7</h1><h3><?php echo $rule7; ?></h3></li>

        </div>
    </div>


        <div id="loader">
            <div id="loaderwidth" style="width: 0%;"></div>
        </div>
        
</div>


    <audio class='audio' autoplay src="songs/song" onloadstart="this.volume=0.1"></audio><!--0.1 = 10%, 0.2 = 20%,... / SONG VOLUME-->

	</body>

</html>

