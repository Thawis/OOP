<?php
	// require ("assets/configs/config.inc.php");
	// require ("assets/configs/connectdb.inc.php");
	// require ("assets/configs/function.inc.php");
	
	if(isset($_SESSION['lang'])){
		if($_SESSION['lang'] == 'en'){
			include("inc/lang.en.php");	
		}else{
			include("inc/lang.th.php");	
		}
	}else{
		include("inc/lang.th.php");	
		$_SESSION['lang'] = 'th';
	} 
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="th">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<?php include ('inc/inc-meta.php');?>

		<!-- CSS Main-->
		<link rel="stylesheet" type="text/css" href="<?=_FULL_SITE_PATH_?>/css/announce.css">
		
	</head>

	<body onload="myOnload()">
		<div id="loader"></div>
		
		<?php include ('inc/inc-header-mobile.php');?>

		<div class="shifter-page">

			<?php include ('inc/inc-header.php');?>
		    <div class="box-body">
				
				<div class="box-Cover" style="background-image: url('images/cover/Cover-faq.jpg')"><!-- เปลียนรูปแค่ในนี้ -->
					<img src="https://via.placeholder.com/900x190.jpg" alt="">
				</div>
				<?php
					$Breadcrumb['name1'] = 'สมัครงาน';
					include('inc/inc-nav.php'); 
				?>
				
				<div class="box-Head">
					<div class="container">
						<div class="container-baby">
							<h1>สมัครงาน</h1>
						</div>
					</div>
				</div>
				<div class="box-content">
					<div class="b-announce">
					<?php
	$perpage = 8;
	$page = intval($_GET['p']);
	if($page > 0){
		$page--;
	}
	$page = $page * $perpage;
	

	$sql = "SELECT mod_cms_id , mod_cms_file , mod_cms_create_date , mod_cms_view FROM mod_cms WHERE mod_cms_modulekey =  'dad_career' AND mod_cms_staus = '1' AND ((mod_cms_start_date='0000-00-00 00:00:00' AND mod_cms_finish_date='0000-00-00 00:00:00')  OR (mod_cms_start_date='0000-00-00 00:00:00' AND   TO_DAYS(mod_cms_finish_date)>=TO_DAYS(NOW()) ) OR (TO_DAYS(mod_cms_start_date)<=TO_DAYS(NOW()) AND mod_cms_finish_date='0000-00-00 00:00:00' ) OR (TO_DAYS(mod_cms_start_date)<=TO_DAYS(NOW()) AND  TO_DAYS(mod_cms_finish_date)>=TO_DAYS(NOW())  )) ORDER BY mod_cms_order DESC"; 
					
	$query = mysql_query($sql, $conn);
	$total_num = mysql_num_rows($query);

	$sql.= " LIMIT ".$page.",".$perpage;
	$query = mysql_query($sql, $conn);

	while($row = mysql_fetch_array($query)){		
		$xml = simplexml_load_file(_DATA_SITE_PATH_.'upload/cms/'.$row['mod_cms_file']) or die( $sql );

			foreach($xml->children() as $child){
				foreach($child->children() as $child2){
					$varName = $child2->getName();
					$$varName = $child2;
				}
			}	
			
			$create_date = trim($date1_th);
			$create_date = date('Y-m-d',strtotime($create_date));
			if($_SESSION['lang'] == 'en'){
				$name = trim($name2_th);
				
				$date = new DateTime($create_date);
				$display_create = $date->format('j F Y');
				
			}else{
				$name = trim($name_th);
				
				$findDay = explode(' ',$create_date);
				$findDay = explode('-',$findDay[0]);
				
				$display_create = $findDay[2].' ';
				$display_create .= ShowMonthYear($create_date);
			}
		
			$page_view = number_format($row['mod_cms_view']);	

?>	
						<div class="list">
							<div class="box-list">
								<div class="b-text cf">
									<div class="b-Ttitle">
										<a href="career-detail.php?p=<?php echo $row['mod_cms_id'];?>"><?php echo $name;?></a>
									</div>
									<div class="b-Bview">
										<a class="view" href="career-detail.php?p=<?php echo $row['mod_cms_id'];?>"><?php echo $language['view2']; ?></a>
									</div>
								</div>
								<div class="b-Viewed">
									<span class="Viewed"><?php echo $page_view;?></span>
									<span class="Created"><?php echo $display_create;?></span>
								</div>
								<?php
								//file
								unset($files);
								$j = 1;
								$fileSlot = '';
								for($i=1;$i<=5;$i++){
									$parameter_name = 'file'.$i.'_th';
									$file = trim($$parameter_name);
									if($file != ''){
										if($_SESSION['lang'] == 'en'){
											$parameter_name = 'file_name_en_'.$i.'_th';
											$file_name = trim($$parameter_name);
										}else{
											$parameter_name = 'file_name_th_'.$i.'_th';
											$file_name = trim($$parameter_name);
										}
										$files[$j]['location'] = $file;
										$files[$j]['name'] = $file_name;
										$j++;
									}
								}
								if($j > 1){
															
									foreach ($files as $key => $value) {
										$fileSlot .= '<div class="b-List">';
										$fileSlot .= '<div class="text">';
										$fileSlot .= $value['name'];
										$fileSlot .= '</div>';
										$fileSlot .= '<div class="botton">';
										$fileSlot .= '<a href="'.$value['location'].'" target="_blank">';
										$fileSlot .= 'ดาวน์โหลด';
										$fileSlot .= '</a>';
										$fileSlot .= '</div>';
										$fileSlot .= '</div>';
										$fileSlot .= "\n";
									}
									
						?>
						<div class="box-download">
						<?php echo $fileSlot; ?>
						</div>
						<?php } ?>								
							</div>
						</div>
		<?php } ?>		
						
					</div>
					<?php
					$totalpage = ceil($total_num/$perpage);
					if($totalpage > 0){ 
				?>
							<div class="container">	
								<div class="pagination">
									<?php 
									$curent_page = intval($_GET['p']);
									if($curent_page == 0){
										$curent_page = 1;
									}
		
									for($i = 1;$i <= $totalpage; $i++ ){ 
										if($curent_page == $i){
											echo '<a href="?p='.$i.'" class="active">'.$i.'</a>';
										}else{	
											echo '<a href="?p='.$i.'">'.$i.'</a>';
										}
									} 
									?>
								</div>
							</div>
				<?php } ?>	
				</div>
				
		    </div>

			<?php include ('inc/inc-footer.php'); ?>

		</div>
		
		<?php include ('inc/inc-script.php');?>
		
	<script type="text/javascript">
		$('.box-menu .menu-main > li#menu8').addClass('active');
	</script>
		
		<?php include ('inc/inc-google-analytics.php');?>
		
	</body>
</html>