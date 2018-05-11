<div class="header">
	<div class="row">
		<div class="container">
			<div class="box-logo">
				<a href="home.php">
					<div class="logo"></div>
				</a>
				<div class="text-logo">
					<h4>บริษัท ธนารักษ์พัฒนาสินทรัพย์ จำกัด</h4>
					<h5>Dhanarak Asset Development Co,Ltd.</h5>
				</div>
				<span class="shifter-handle"><span>MENU</span></span>
			</div>
			<div class="menu-right">
				<div class="menu-top">
					<a href="http://www.govcomplexmobileapp.com/share-app.php" target="_blank"><img src="images/I-qr.png" alt="I-qr"></a>
<!-- 					<a href="https://www.youtube.com/channel/UCGJ5teHoMn5B8BmwYFfGr5w"><img src="images/I-yt.png" alt="I-yt"></a> -->
					<a href="#"><img src="images/I-ig.png" alt="I-ig"></a>
					<a href="https://www.facebook.com/governmentcomplex"><img src="images/I-face.png" alt="I-face"></a>
					<form action="search.php" method="get" accept-charset="utf-8">
						<input type="search" name="search" placeholder="<?php echo $language['header_search']; ?>">
						<button type="submit"></button>
					</form>
				</div>
				<div class="menu-bottom">
					<div class="a-menu">
						<a href="https://www.dad-singlesignon.com/" target="_blank"><?php echo $language['intranet']; ?></a>
						<a href="http://ors.governmentcomplex.com/"><?php echo $language['repair']; ?></a>
						<a href="siteMap.php"><?php echo $language['sitemap_txt']; ?></a>
					</div>
					<div class="wrapper">
						<div class="Change-display">
						    <a class="mediumFont textsizer" href="javascript:void(0)" title="ตัวอักษรขนาดเล็ก"></a>
						    <a class="defaultFont textsizer textresizer-active" href="javascript:void(0)" title="ตัวอักษรขนาดปกติ"></a>
						    <a class="largeFont textsizer" href="javascript:void(0)" title="ตัวอักษรขนาดใหญ่"></a>
						</div>
						<div class="Change-display">
						    <a class="white-style styleswitch" href="javascript:void(0)" title="แสดงผลพื้นหลังสีดำตัวหนังสือสีขาว" data-toggle="white"></a>
						    <a class="default-style styleswitch active" href="javascript:void(0)" title="แสดงผลแบบปกติ" data-toggle="style"></a>
						    <a class="yellow-style styleswitch" href="javascript:void(0)" title="แสดงผลพื้นหลังสีดำตัวหนังสือสีเหลือง" data-toggle="yellow"></a>
						</div>
						<div class="Language">
							<?php
								$lang_select = array('','');
								if($_SESSION['lang'] == 'en'){
									echo '<a href="#" title="ภาษาอังกฤษ"><i class="en"></i></a>';
									$lang_select[1] = " selected";
								}else{
									echo '<a href="#" title="ภาษาไทย"><i class="th"></i></a>';
									$lang_select[0] = " selected";
								}
							?>
						    <select name="lang" class="change_lang">
								<option value="TH" <?php echo $lang_select[0];?> >TH</option>
								<option value="EN" <?php echo $lang_select[1];?> >EN</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="box-menu">
			<div class="container">
				<ul class="menu-main">
					<li id="menu1"><a href="home.php"><?php echo $language['menu_txt']; ?><!-- หน้าแรก --></a></li>
					<li id="menu2" class="sub big"><a href="javascript:void(0)"><?php echo $language['menu_txt1']; ?><!-- เกี่ยวกับ ธพส. --></a>
						<ul>
							<li class="sub"><a href="javascript:void(0)"><?php echo $language['menu_txt2']; ?></a>
								<ul>
				                    <li><a href="About-us1.php"><?php echo $language['menu_txt3']; ?></a></li><!-- ประวัติความเป็นมาและลักษณะของธุรกิจ -->
									<li><a href="About-us2.php"><?php echo $language['menu_txt4']; ?></a></li><!-- วิสัยทัศน์ พันธกิจ ค่านิยม -->
									<li><a href="About-us3.php"><?php echo $language['menu_txt5']; ?></a></li><!-- แผนยุทธศาสตร์รัฐวิสาหกิจสาขาสาธารณูปการและแนวนโยบายผู้ถือหุ้น -->
								</ul>
							</li>	                    
		                    <li class="sub"><a href="javascript:void(0)"><?php echo $language['menu_txt6']; ?></a>
								<ul>
				                    <li><a href="About-us4.php"><?php echo $language['menu_txt7']; ?></a></li>
									<li><a href="About-us5.php"><?php echo $language['menu_txt8']; ?></a></li>
									<li><a href="About-us6.php"><?php echo $language['menu_txt9']; ?></a></li>
									<li><a href="About-us7.php"><?php echo $language['menu_txt10']; ?></a></li>
									<li><a href="About-us8.php"><?php echo $language['menu_txt11']; ?></a></li>
									<li><a href="About-us9.php"><?php echo $language['menu_txt12']; ?></a></li>
									<li><a href="About-us10.php"><?php echo $language['menu_txt13']; ?></a></li>
									<li><a href="About-us11.php"><?php echo $language['menu_txt14']; ?></a></li>
									<li><a href="About-us12.php"><?php echo $language['menu_txt15']; ?></a></li>
									<li><a href="About-us13.php"><?php echo $language['menu_txt16']; ?></a></li>
<!-- 									<li><a href="About-us14.php"><?php echo $language['menu_txt17']; ?></a></li> -->
								</ul>
							</li>	                    
		                    <li class="sub"><a href="javascript:void(0)"><?php echo $language['menu_txt18']; ?></a>
								<ul>
				                    <li><a href="About-us15.php"><?php echo $language['menu_txt19']; ?></a></li>
									<li><a href="About-us16.php"><?php echo $language['menu_txt20']; ?></a></li>
									<li><a href="About-us17.php"><?php echo $language['menu_txt21']; ?></a></li>
									<li><a href="About-us18.php"><?php echo $language['menu_txt22']; ?></a></li>
									<li><a href="About-us19.php"><?php echo $language['menu_txt23']; ?></a></li>
									<li><a href="About-us20.php"><?php echo $language['menu_txt24']; ?></a></li>
									<li><a href="About-us21.php"><?php echo $language['menu_txt25']; ?></a></li>
									<li><a href="About-us22.php"><?php echo $language['menu_txt26']; ?></a></li>
								</ul>
							</li>	                    
		                    <li class="sub"><a href="javascript:void(0)"><?php echo $language['menu_txt27']; ?></a>
								<ul>
				                    <li><a href="About-us23.php"><?php echo $language['menu_txt28']; ?></a></li>
									<li><a href="About-us24.php"><?php echo $language['menu_txt29']; ?></a></li>
									<li><a href="About-us25.php"><?php echo $language['menu_txt30']; ?></a></li>
									<li><a href="About-us26.php"><?php echo $language['menu_txt31']; ?></a></li>
									<li><a href="About-us34.php"><?php echo $language['menu_txt98']; ?></a></li><!-- นโยบายและแนวปฏิบัติความมั่นคงปลอดภัยสารสนเทศ -->
									<li><a href="About-us27.php"><?php echo $language['menu_txt32']; ?></a></li>
									<li><a href="About-us28.php"><?php echo $language['menu_txt33']; ?></a></li>
									<li><a href="About-us29.php"><?php echo $language['menu_txt34']; ?></a></li>
									<li><a href="About-us30.php"><?php echo $language['menu_txt35']; ?></a></li>
									<li><a href="About-us31.php"><?php echo $language['menu_txt36']; ?></a></li>
									<li><a href="About-us32.php"><?php echo $language['menu_txt37']; ?></a></li>
									<li><a href="About-us33.php"><?php echo $language['menu_txt38']; ?></a></li>
								</ul>
							</li>	                    
						</ul>
					</li>           
					<li id="menu3" class="sub"><a href="javascript:void(0)"><?php echo $language['menu_txt94']; ?><!-- วีดีโอ --></a>
						<ul>
						<?php //album
						if($_SESSION['lang'] == 'en'){
							$group_lang = 'mod_cms_group_desc_eng';
						}else{
							$group_lang = 'mod_cms_group_desc_loc';
						}
						$Group_modulekey = 'dad_vdo';
						$sql_group = "SELECT mod_cms_group_id , ".$group_lang." AS group_desc_loc FROM mod_cms_group WHERE mod_cms_group_staus = 1 AND mod_cms_group_modulekey = '".$Group_modulekey."' ORDER BY mod_cms_group_order DESC";
						$query_group = mysql_query($sql_group, $conn);
						while($row_group = mysql_fetch_array($query_group)){	
							echo '<li><a href="vdo.php?c='.$row_group['mod_cms_group_id'].'">'.$row_group['group_desc_loc'].'</a></li>';
						} ?>
						</ul>
					</li>
					<li id="menu4" class="sub"><a href="javascript:void(0)"><?php echo $language['menu_txt39']; ?><!-- จัดซื้อจัดจ้าง --></a>
						<ul>
				                    <li><a href="http://itaform.dad.co.th/" target="_blank"><?php echo $language['menu_txt96']; ?></a></li>
						<?php //procurement
						$Group_modulekey = 'dad_procurement';
						$sql_group = "SELECT mod_cms_group_id , ".$group_lang." AS group_desc_loc FROM mod_cms_group WHERE mod_cms_group_staus = 1 AND mod_cms_group_modulekey = '".$Group_modulekey."' ORDER BY mod_cms_group_order DESC";
						$query_group = mysql_query($sql_group, $conn);
						while($row_group = mysql_fetch_array($query_group)){	
							echo '<li><a href="announce.php?g='.$row_group['mod_cms_group_id'].'">'.$row_group['group_desc_loc'].'</a></li>';
						} ?>
						</ul>
					</li>
					<li id="menu5" class="sub"><a href="javascript:void(0)"><?php echo $language['menu_txt43']; ?><!-- ดาวน์โหลด --></a>
						<ul>
						<?php //download
						$Group_modulekey = 'dad_download';
						$sql_group = "SELECT mod_cms_group_id , ".$group_lang." AS group_desc_loc FROM mod_cms_group WHERE mod_cms_group_staus = 1 AND mod_cms_group_modulekey = '".$Group_modulekey."' ORDER BY mod_cms_group_order DESC";
						$query_group = mysql_query($sql_group, $conn);
						while($row_group = mysql_fetch_array($query_group)){	
							echo '<li><a href="download.php?p='.$row_group['mod_cms_group_id'].'">'.$row_group['group_desc_loc'].'</a></li>';
						} ?>					
						</ul>
					</li> 				
					<li id="menu6" class="sub"><a href="javascript:void(0)"><?php echo $language['menu_txt48']; ?><!-- อัลบั้ม --></a>  
						<ul>
						<?php //album
						$Group_modulekey = 'dad_photo_album';
						$sql_group = "SELECT mod_cms_group_id , ".$group_lang." AS group_desc_loc FROM mod_cms_group WHERE mod_cms_group_staus = 1 AND mod_cms_group_modulekey = '".$Group_modulekey."' ORDER BY mod_cms_group_order DESC";
						$query_group = mysql_query($sql_group, $conn);
						while($row_group = mysql_fetch_array($query_group)){	
							echo '<li><a href="album-all.php?p='.$row_group['mod_cms_group_id'].'">'.$row_group['group_desc_loc'].'</a></li>';
						} ?>	
						</ul>
					</li>    
					<li id="menu7"><a href="faq.php"><?php echo $language['menu_txt49']; ?><!-- ถาม-ตอบ --></a></li>           
					<li id="menu8" class="sub"><a href="javascript:void(0)"><?php echo $language['menu_txt50']; ?><!-- สมัครงาน --></a>
						<ul>
							<li><a href="career.php"><?php echo $language['menu_txt50']; ?></a></li>	
							<li><a href="career2.php"><?php echo $language['menu_txt50']; ?> (<?=$language['menu_old']?>)</a></li>	
						</ul>
					</li>           
					<li id="menu10"><a href="download.php?hire"><?php echo $language['menu_txt95']; ?><!-- เช่าพื้นที่ --></a></li>           
					<li id="menu9" class="sub"><a href="javascript:void(0)"><?php echo $language['menu_txt51']; ?><!-- ติดต่อเรา --></a>
						<ul>
							<li><a href="contactus.php?contact_group=9"><?php echo $language['menu_txt52']; ?></a></li>
							<li><a href="contactus.php?contact_group=8"><?php echo $language['menu_txt53']; ?></a>
<!--
								<ul>
									<li><a href="#"><?php echo $language['menu_txt54']; ?></a></li>
									<li><a href="#"><?php echo $language['menu_txt55']; ?></a></li>
									<li><a href="#"><?php echo $language['menu_txt56']; ?></a></li>
									<li><a href="#"><?php echo $language['menu_txt57']; ?></a></li>
								</ul>
-->
							</li>
							<li><a href="contactus.php?contact_group=7"><?php echo $language['menu_txt58']; ?></a></li>
							<li><a href="http://www.governmentcomplex.com/" target="_blank"><?php echo $language['menu_txt59']; ?></a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div> 
</div>
<div id="firstbox"></div>
                  