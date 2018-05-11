	<div class="shifter-navigation">
		
		<div class="box-top">
			<div class="box-lang">
				<?php
					if(trim($_SESSION['lang']) == 'en'){
						echo '<a href="#" title="change language" class="EN" id="change_lang_m"></a>';
					}else{
						echo '<a href="#" title="เปลี่ยนภาษา" class="TH" id="change_lang_m"></a>';
					}
				?>
			</div>
			<div class="box-wrapper">
				<div>
				    <a class="mediumFont textsizer" href="javascript:void(0)" title="ตัวอักษรขนาดเล็ก" ></a>
				    <a class="defaultFont textsizer textresizer-active" href="javascript:void(0)" title="ตัวอักษรขนาดปกติ"></a>
				    <a class="largeFont textsizer" href="javascript:void(0)" title="ตัวอักษรขนาดใหญ่" ></a>
				</div>
				<div>
				    <a class="white-style styleswitch" href="javascript:void(0)" title="แสดงผลพื้นหลังสีดำตัวหนังสือสีขาว" data-toggle="white"></a>
				    <a class="default-style styleswitch active" href="javascript:void(0)" title="แสดงผลแบบปกติ" data-toggle="style"></a>
				    <a class="yellow-style styleswitch" href="javascript:void(0)" title="แสดงผลพื้นหลังสีดำตัวหนังสือสีเหลือง" data-toggle="yellow"></a>
				</div>
			</div>
			<div class="box-social">
				<a href="#"><img src="images/I-ig-m.png" alt="I-ig"></a>
				<a href="https://www.facebook.com/governmentcomplex"><img src="images/I-face-m.png" alt="I-face"></a>
			</div>
			<div class="a-menu">
				<a href="https://www.dad-singlesignon.com/" target="_blank"><?php echo $language['intranet']; ?></a>
				<a href="http://ors.governmentcomplex.com/"><?php echo $language['repair']; ?></a>
				<a href="siteMap.php"><?php echo $language['sitemap_txt']; ?></a>
			</div>
		</div>
		<div class="box-search">
			<form action="#" method="post">
<? if($_SESSION['lang'] == 'en'){ ?>				
					<input type="text" name="search" placeholder="Search All">
<? }else{ ?>
					<input type="text" name="search" placeholder="ค้นหาทั้งหมด">
<? } ?>								
				<button type="submit"></button>
			</form>
		</div>
		
		<div class="box-row list-manu">
			<?php include('inc-manu-mobile.php'); ?>
		</div>
				
	</div>
	<a class="btn-top transit-open" style="display: none;"><img src="images/btn-top.svg" alt=""></a>
