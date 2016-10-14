<style type="text/css">
	*{
		padding: 0;
		margin: 0;
	}
	html{
		background: #E0E0E0;
	}
	img{
		position: fixed;
		left: 0;right: 0;top: 0;bottom: 0;
		margin: auto;
		border-radius: 50%;
		-moz-		border-radius: 50%;
        -webkit-		border-radius: 50%;
	}
</style>
<img src="assets/load.gif">
<?php

$addons_dis = $arr->addons_dis->cnt;
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

if (isset($_GET['dis_servername'])) {
$xml = simplexml_load_file('param.xml');
$xml->servername_dis->cnt = "1";
$xml->asXML('param.xml');
}

if (isset($_GET['dis_gamemode'])) {
$xml = simplexml_load_file('param.xml');
$xml->gamemode_dis->cnt = "1";
$xml->asXML('param.xml');
}

if (isset($_GET['dis_mapname'])) {
$xml = simplexml_load_file('param.xml');
$xml->map_dis->cnt = "1";
$xml->asXML('param.xml');
}

if (isset($_GET['dis_slots'])) {
$xml = simplexml_load_file('param.xml');
$xml->slots_dis->cnt = "1";
$xml->asXML('param.xml');
}

if (isset($_GET['dis_addons'])) {
$xml = simplexml_load_file('param.xml');
$xml->addons_dis->cnt = "1";
$xml->asXML('param.xml');
}



if (isset($_GET['act_servername'])) {
$xml = simplexml_load_file('param.xml');
$xml->servername_dis->cnt = "0";
$xml->asXML('param.xml');
}

if (isset($_GET['act_gamemode'])) {
$xml = simplexml_load_file('param.xml');
$xml->gamemode_dis->cnt = "0";
$xml->asXML('param.xml');
}

if (isset($_GET['act_map'])) {
$xml = simplexml_load_file('param.xml');
$xml->map_dis->cnt = "0";
$xml->asXML('param.xml');
}

if (isset($_GET['act_slot'])) {
$xml = simplexml_load_file('param.xml');
$xml->slots_dis->cnt = "0";
$xml->asXML('param.xml');
}

if (isset($_GET['act_addon'])) {
$xml = simplexml_load_file('param.xml');
$xml->addons_dis->cnt = "0";
$xml->asXML('param.xml');
}

if (isset($_GET['addontext'])) {
$xml = simplexml_load_file('param.xml');
$xml->addon_edit->cnttex = $_GET['addontext'];
$xml->asXML('param.xml');
}
// Rules

if (isset($_GET['rule1']) AND isset($_GET['rule2']) AND isset($_GET['rule3']) AND isset($_GET['rule4']) AND isset($_GET['rule5']) AND isset($_GET['rule6']) AND isset($_GET['rule7'])) {
$xml = simplexml_load_file('param.xml');
$xml->rule_1->cnttex = $_GET['rule1'];
$xml->rule_2->cnttex = $_GET['rule2'];
$xml->rule_3->cnttex = $_GET['rule3'];
$xml->rule_4->cnttex = $_GET['rule4'];
$xml->rule_5->cnttex = $_GET['rule5'];
$xml->rule_6->cnttex = $_GET['rule6'];
$xml->rule_7->cnttex = $_GET['rule7'];
$xml->asXML('param.xml');
}

//Colors

if (isset($_GET['img_pb'])) {
$xml = simplexml_load_file('param.xml');
$xml->pgcol->cnt = "img";
$xml->asXML('param.xml');
}

if (isset($_GET['customColor_pg'])) {
$xml = simplexml_load_file('param.xml');

$customColor_pg=$_GET['customColor_pg'];

if ($customColor_pg[0] != '#') {
$customColor_pg="#".$customColor_pg;
}
$xml->pgcol->cnt = $customColor_pg;
$xml->asXML('param.xml');
}


if (isset($_GET['randCol2'])) {
$xml = simplexml_load_file('param.xml');
$xml->cardcol->cnttex = "background-image: -moz-linear-gradient( -45deg, rgb(255,94,58) 0%, rgb(255,42,104) 100%);background-image: -webkit-linear-gradient( -45deg, rgb(255,94,58) 0%, rgb(255,42,104) 100%);background-image: -ms-linear-gradient( -45deg, rgb(255,94,58) 0%, rgb(255,42,104) 100%);";
$xml->asXML('param.xml');
}
if (isset($_GET['randCol3'])) {
$xml = simplexml_load_file('param.xml');
$xml->cardcol->cnttex = "  background-image: -moz-linear-gradient( -45deg, rgb(219,221,222) 0%, rgb(137,140,144) 100%);background-image: -webkit-linear-gradient( -45deg, rgb(219,221,222) 0%, rgb(137,140,144) 100%);background-image: -ms-linear-gradient( -45deg, rgb(219,221,222) 0%, rgb(137,140,144) 100%);";
$xml->asXML('param.xml');
}
if (isset($_GET['randCol4'])) {
$xml = simplexml_load_file('param.xml');
$xml->cardcol->cnttex = "  background-image: -moz-linear-gradient( -45deg, rgb(26,214,253) 0%, rgb(29,98,240) 100%);background-image: -webkit-linear-gradient( -45deg, rgb(26,214,253) 0%, rgb(29,98,240) 100%);background-image: -ms-linear-gradient( -45deg, rgb(26,214,253) 0%, rgb(29,98,240) 100%);";
$xml->asXML('param.xml');
}
if (isset($_GET['randCol5'])) {
$xml = simplexml_load_file('param.xml');
$xml->cardcol->cnttex = "background: rgba(58,62,96,1);background: -moz-linear-gradient(45deg, rgba(58,62,96,1) 0%, rgba(69,73,107,1) 100%);background: -webkit-gradient(left bottom, right top, color-stop(0%, rgba(58,62,96,1)), color-stop(100%, rgba(69,73,107,1)));background: -webkit-linear-gradient(45deg, rgba(58,62,96,1) 0%, rgba(69,73,107,1) 100%);background: -o-linear-gradient(45deg, rgba(58,62,96,1) 0%, rgba(69,73,107,1) 100%);background: -ms-linear-gradient(45deg, rgba(58,62,96,1) 0%, rgba(69,73,107,1) 100%);background: linear-gradient(45deg, rgba(58,62,96,1) 0%, rgba(69,73,107,1) 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3a3e60', endColorstr='#45496b', GradientType=1 );";
$xml->asXML('param.xml');
} 
if (isset($_GET['randCol6'])) {
$xml = simplexml_load_file('param.xml');
$xml->cardcol->cnttex = "  background-image: -moz-linear-gradient( -90deg, rgb(255,149,0) 0%, rgb(255,94,58) 100%);background-image: -webkit-linear-gradient( -90deg, rgb(255,149,0) 0%, rgb(255,94,58) 100%);background-image: -ms-linear-gradient( -90deg, rgb(255,149,0) 0%, rgb(255,94,58) 100%);";
$xml->asXML('param.xml');
} 
if (isset($_GET['randCol7'])) {
$xml = simplexml_load_file('param.xml');
$xml->cardcol->cnttex = "  background-image: -moz-linear-gradient( -90deg, rgb(74,74,74) 0%, rgb(43,43,43) 100%);background-image: -webkit-linear-gradient( -90deg, rgb(74,74,74) 0%, rgb(43,43,43) 100%);background-image: -ms-linear-gradient( -90deg, rgb(74,74,74) 0%, rgb(43,43,43) 100%);";
$xml->asXML('param.xml');
} 
if (isset($_GET['randCol8'])) {
$xml = simplexml_load_file('param.xml');
$xml->cardcol->cnttex = "  background-image: -moz-linear-gradient( 90deg, rgb(108,68,252) 0%, rgb(197,68,252) 100%);background-image: -webkit-linear-gradient( 90deg, rgb(108,68,252) 0%, rgb(197,68,252) 100%);background-image: -ms-linear-gradient( 90deg, rgb(108,68,252) 0%, rgb(197,68,252) 100%);";
$xml->asXML('param.xml');
} 
if (isset($_GET['randCol9'])) {
$xml = simplexml_load_file('param.xml');
$xml->cardcol->cnttex = "  background-image: -moz-linear-gradient( -90deg, rgb(255,219,76) 0%, rgb(255,205,2) 100%);background-image: -webkit-linear-gradient( -90deg, rgb(255,219,76) 0%, rgb(255,205,2) 100%);background-image: -ms-linear-gradient( -90deg, rgb(255,219,76) 0%, rgb(255,205,2) 100%);";
$xml->asXML('param.xml');
} 


if (isset($_GET['ctsmcolor_cardl'])) {
$xml = simplexml_load_file('param.xml');

$ctsmcolor_cardl=$_GET['ctsmcolor_cardl'];

if ($ctsmcolor_cardl[0] != '#') {
$ctsmcolor_cardl="#".$ctsmcolor_cardl;
}
$xml->cardcol->cnttex = $ctsmcolor_cardl;
$xml->asXML('param.xml');
}

//Icons

if (isset($_GET['icn_mat'])) {
$xml = simplexml_load_file('param.xml');
$xml->icons->cnt = "1";
$xml->asXML('param.xml');
} 

if (isset($_GET['icn_clas'])) {
$xml = simplexml_load_file('param.xml');
$xml->icons->cnt = "2";
$xml->asXML('param.xml');
} 


echo '<script type="text/javascript">
           window.location = "admin.php?key=0000"
      </script>';

?>

