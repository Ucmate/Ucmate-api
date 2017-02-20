<?php
if(isset($_REQUEST['get-q'])) {
	$my_s =  $_REQUEST['get-q'];
} else {
	$my_s = '';
}
?>

<?php
$search=urlencode($my_s);
$grab=file_get_contents('http://vevovilla.com/inc/ytw.js.php?q='.$search.'&get-page=:get-page:');
$grab=str_replace('sc_online_i', '', $grab);
$grab=str_replace('title', 'ucmate_ttl', $grab);
$grab=str_replace('/site_download3gpmp4flv.xhtml', 'http://ucmate.in/api/download.php', $grab);
$grab=str_replace('dj', 'get', $grab);

echo ''.$grab.'';
?>
