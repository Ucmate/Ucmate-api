<!-- Custom-Stylesheet-Links -->
	<!-- Bootstrap-CSS --> 	<link rel="stylesheet" href="/bootstrap.min.css" type="text/css" media="all">
	<!-- //Custom-Stylesheet-Links -->

<style type="text/css"> 
body {
background:#ECECEC; 
font-weight:bold;
font-family: ;
margin-top:x;
font-size: px;
color: #000000;
margin-top: -50px;
}
{
body {
background:url() repeat;
}
}
#wasu {
margin-top:px;
}
.musikgenre {padding:7px;color:#ffffff;background:#ff5900 ;margin:1px;}
.musikgenre:hover {background:#444444;}
.headlink {solid #ffffff;float:right;color:#f6f6f6;}
.headlink:hover {border-bottom:px solid #ffffff;font-weight:bold;color:#ffffff;}
.content-wrapper {
max-width:1000px;
background:#ffffff;
box-shadow: 0px 13px 13px 0px rgba(0,0,0,0.4);
}
.sd { box-shadow:0px 0px 15px 0px #967A38;
}

.pgn {
 background: #2d2d2d;  text-align: center; border-top: 1px solid #e6e6e6; border-bottom: 1px solid #e6e6e6; margin-top: 10px; padding: 5px; 
color:#000000 ;
}

/* PAGING */
}
.vagination a {
border:1px solid #ff5900 ;
padding:7px;
color:#ff5900 ;
} 
.vagination a:hover {
background:#ff5900 ;
color:#ffffff;
} 
/* Table */

tr {margin:;}

.tableup img:hover {vertical-align:middle;}

.otable tr {word-wrap: break-word;}
/* TITLE AND MENU */
.a:menu, { background-color: #FF5900; }

.menu, .file, .list_b {
 background: #fff url('http://flipmate.mobie.in/images/glossy.ng');   text-align: left; border-top: 0px solid #e6e6e6; border-bottom: 1px solid #e6e6e6; padding-left: 4px; margin-bottom: 5px; padding: 10px; 
color:#000000 ;
}

.ads { opacity: 0.2; }
.ads:hover { opacity: 1.0 }

.thumcircle {
 background: #fff;  text-align: left; border-top: px solid #e6e6e6; border-bottom: 1px solid #e6e6e6; margin-right: 5px; padding: 7px; 
color:#000000 ;
}
 
  </style>

<style type="text/css">  .dk {display: none;}   /* Desktop Portrait and Landscape */   @media only screen   and (min-device-width : 100000px)   and (max-device-width : 2800000px){ .dk { display: inline;}} </style>
<?php
if(isset($_REQUEST['ucmate_ttl'])) {
	$my_t =  $_REQUEST['ucmate_ttl'];
} else {
	$my_t = 'Ucmate';
}
?>
<?php
if(isset($_REQUEST['get-id'])) {
	$my_id =  $_REQUEST['get-id'];
} else {
	$my_id = 'ucmate';
}
?>

<div style="background:#ff0000; text-align:center;padding:9px; color:#fff;"><?php echo ''.$my_t.''; ?></div>
<?php
echo ' <iframe target="_blank" width="100%" height="208" src="https://www.youtube.com/embed/'. $my_id .'?modestbranding=1&rel=0&vq='.$my_q.'&rel=0&html5=1" frameborder="0" scrolling="no" allowfullscreen></iframe>';

$grab=file_get_contents('http://video.genyoutube.net/'. $my_id .'');
$grab=str_replace('navbar-header', 'dk', $grab);
$grab=str_replace('container pseudocont', 'dk', $grab);
$grab=str_replace('navbar navbar-inverse navbar-fixed-top', '', $grab);
$grab=str_replace('navbar-inverse side-collapse in resnav', 'dk', $grab);
$grab=str_replace('script', 'style', $grab);
$grab=str_replace('container content maincontent dlpage
', 'dk', $grab);
$grab=str_replace('row cinemaeffect', 'dk', $grab);
$grab=str_replace('tab-content', 'dk', $grab);
$grab=str_replace('list-inline', 'dk', $grab);
$grab=str_replace('col-md-4', 'dk', $grab);
$grab=str_replace('clearfix', 'dk', $grab);
$grab=str_replace('class="col-md-4', 'class=', $grab);
$grab=str_replace('text-center incontentads lad', 'dk', $grab);
$grab=str_replace('GenYoutube.net', 'Ucmate.In', $grab);
$grab=str_replace('http://www.genyoutube.net/channel.php?id=', '#', $grab);
$grab=str_replace('http://www.genyoutube.net/cat.php?id=', '#', $grab);
$grab=str_replace('bootstrap', '', $grab);
$grab=str_replace('#', '#bottom', $grab);
$grab=str_replace('margin-bottom', '', $grab);


echo ''.$grab.'';
?>
<br/>
<script type="text/javascript" src="http://js.munion.in/phpwap.php?siteid=8746&type=js"></script>
<div style="background:#ff0000; text-align:center;padding:9px; color:#fff;"><?php  $url = htmlspecialchars($_SERVER['HTTP_REFERER']);  echo "<a href='$url' class=''>  Home</a>"; ?></div>
