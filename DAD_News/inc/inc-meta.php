<?php
if(!isset($seo_data)){
	$seo_data = array();
	$seo_image = true;
}	
$sql_seo = "SELECT * FROM seo_config WHERE seo_config_page = 'dad_page_config'";
$query_seo = mysql_query($sql_seo,$conn);		
while($row_seo = mysql_fetch_assoc($query_seo)){
	$array_key = $row_seo['seo_config_cat'];
	if(!array_key_exists($array_key, $seo_data)){
		$seo_data[$array_key] = $row_seo['seo_config_value'];		
	}	
}		

$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

if($seo_image){
	$data_cat = 'page_fb_image';
	$file_name = 'upload/seo/'.$seo_data[$data_cat];
	if($seo_data[$data_cat] != ''){
		$seo_data[$data_cat] = _DATA_SITE_PATH_.$file_name;
	}else{
		$seo_data[$data_cat] = '';
	}
	$data_cat = 'page_tw_image';
	$file_name = 'upload/seo/'.$seo_data[$data_cat];
	if($seo_data[$data_cat] != ''){
		$seo_data[$data_cat] = _DATA_SITE_PATH_.$file_name;
	}else{
		$seo_data[$data_cat] = '';
	}
}	
unset($sql_seo);
unset($query_seo);
unset($row_seo);
unset($array_key);	
unset($data_cat);
unset($file_name);	
unset($seo_image);	
?>

<meta http-equiv="x-ua-compatible" content="IE=edge">

<meta name="keywords" content="<?=$seo_data['page_keywords']?>">
<meta name="description" content="<?=$seo_data['page_description']?>">
<meta name="author" content="บริษัท ธนารักษ์พัฒนาสินทรัพย์ จำกัด">
<meta name="copyright" content="บริษัท ธนารักษ์พัฒนาสินทรัพย์ จำกัด">
<meta name="robots" content="index,follow">

<meta property="og:title" content="<?=$seo_data['page_fb_title']?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?=$actual_link?>">
<meta property="og:image" content="<?=$seo_data['page_fb_image']?>">
<meta property="og:description" content="<?=$seo_data['page_fb_description']?>">
<meta property="fb:app_id" content="<?=$seo_data['page_fb_title']?>">
<meta name="twitter:card" content="<?=$seo_data['page_tw_card']?>">
<meta name="twitter:site" content="<?=$seo_data['page_tw_site']?>">
<meta name="twitter:creator" content="บริษัท ธนารักษ์พัฒนาสินทรัพย์ จำกัด">
<meta name="twitter:title" content="<?=$seo_data['page_tw_title']?>">
<meta name="twitter:description" content="<?=$seo_data['page_tw_description']?>">
<meta name="twitter:image" content="<?=$seo_data['page_tw_image']?>">
<title><?=$seo_data['page_title']?></title>
<?php
unset($seo_data);
unset($actual_link);	
?>	

<link rel="shortcut icon" href="<?=_FULL_SITE_PATH_?>/images/logo.png">

<meta http-equiv="x-ua-compatible" content="IE=edge">

<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1 ,minimal-ui">

<!-- CSS Main-->
<link rel="stylesheet" type="text/css" href="<?=_FULL_SITE_PATH_?>/css/resetcss.css">
<link href="https://fonts.googleapis.com/css?family=Kanit:300,300i&subset=thai,latin" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?=_FULL_SITE_PATH_?>/css/font.css">

<!-- owl.carousel -->
<link rel="stylesheet" type="text/css" href="<?=_FULL_SITE_PATH_?>/assets/owlcarousel/owl.carousel.min.css">

<!-- Menu Mobile -->
<link rel="stylesheet" href="<?=_FULL_SITE_PATH_?>/css/jquery.fs.shifter.css">
<link rel="stylesheet" href="<?=_FULL_SITE_PATH_?>/css/menu-moble.css">

<!-- CSS Main-->
<link rel="stylesheet" type="text/css" href="<?=_FULL_SITE_PATH_?>/css/style.css">

<!-- fancyBox-->
<link rel="stylesheet" type="text/css" href="<?=_FULL_SITE_PATH_?>/assets/fancyBox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

<!-- Change-display-->
<link rel="stylesheet" type="text/css" href="<?=_FULL_SITE_PATH_?>/js/Change-display/white.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?=_FULL_SITE_PATH_?>/js/Change-display/yellow.css" media="screen">

<?php 
	for($i=1;$i<=10;$i++){
		$Breadcrumb['name'.$i]="";
		$Breadcrumb['a'.$i]="";
	}
?>