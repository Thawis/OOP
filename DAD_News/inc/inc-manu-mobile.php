	<div class="box-row-left fl">
		
	<!--level 1 -->
		<div>
			<ul>
				<li ><a href="home.php"><?php echo $language['menu_txt']; ?></a></li>
				<li class="sub"><a href="#" data-manuid="manuMB0001"><?php echo $language['menu_txt1']; ?></a></li>
				<li class="sub"><a href="#" data-manuid="manuMB0005"><?php echo $language['menu_txt94']; ?></a></li><!-- วีดีโอ -->
				<li class="sub"><a href="#" data-manuid="manuMB0002"><?php echo $language['menu_txt39']; ?></a></li><!-- จัดซื้อ -->
				<li class="sub"><a href="#" data-manuid="manuMB0003"><?php echo $language['menu_txt43']; ?></a></li><!-- ดาวน์โหลด -->
				<li class="sub"><a href="#" data-manuid="manuMB00015"><?php echo $language['menu_txt48']; ?></a></li><!-- อัลบั้ม -->
				<li><a href="faq.php"><?php echo $language['menu_txt49']; ?></a></li>
				<li class="sub"><a href="#" data-manuid="manuMB00016"><?php echo $language['menu_txt50']; ?></a></li><!-- สมัครงาน -->
				<li><a href="download.php?hire"><?php echo $language['menu_txt95']; ?><!-- เช่าพื้นที่ --></a></li>
				<li class="sub"><a href="#" data-manuid="manuMB0004"><?php echo $language['menu_txt51']; ?></a></li>
			</ul>
		</div>
			
	<!--level 2 -->
		<div id="manuMB0001">
			<h3 data-manuidX="manuMB0001"><?php echo $language['menu_txt1']; ?></h3>
			<ul>
				<li class="sub"><a href="#" data-manuid="manuMB00011"><?php echo $language['menu_txt2']; ?></a></li>
				<li class="sub"><a href="#" data-manuid="manuMB00012"><?php echo $language['menu_txt6']; ?></a></li>
				<li class="sub"><a href="#" data-manuid="manuMB00013"><?php echo $language['menu_txt18']; ?></a></li>
				<li class="sub"><a href="#" data-manuid="manuMB00014"><?php echo $language['menu_txt27']; ?></a></li>
			</ul>
		</div>		
		<div id="manuMB0002">
			<h3 data-manuidX="manuMB0002"><?php echo $language['menu_txt39']; ?></h3>
			<ul>
				<li><a href="http://itaform.dad.co.th/" target="_blank"><?php echo $language['menu_txt96']; ?></a></li><!-- จัดซื้อ -->
				<li><a href="announce.php?g=15"><?php echo $language['menu_txt40']; ?></a></li>
				<li><a href="announce.php?g=25"><?php echo $language['menu_txt41']; ?></a></li>
				<li><a href="announce.php?g=26"><?php echo $language['menu_txt42']; ?></a></li>
				<li><a href="announce.php"><?php echo $language['menu_txt40']; ?> (<?=$language['menu_old']?>)</a></li>
				<li><a href="announce.php"><?php echo $language['menu_txt41']; ?> (<?=$language['menu_old']?>)</a></li>
				<li><a href="announce.php"><?php echo $language['menu_txt42']; ?> (<?=$language['menu_old']?>)</a></li>
			</ul>
		</div>		
		<div id="manuMB0003">
			<h3 data-manuidX="manuMB0003"><?php echo $language['menu_txt43']; ?></h3><!-- ดาวน์โหลด -->
			<ul>
				<li><a href="download.php?p=38"><?php echo $language['menu_txt45']; ?></a></li><!-- เอกสาร ธพส. -->
				<li><a href="download.php?p=21"><?php echo $language['menu_txt46']; ?></a></li><!-- คู่มือ -->
				<li><a href="download.php?p=22"><?php echo $language['menu_txt47']; ?></a></li><!-- เอกสารอื่นๆ -->
			</ul>
		</div>		
		<div id="manuMB0004">
			<h3 data-manuidX="manuMB0004"><?php echo $language['menu_txt51']; ?></h3>
			<ul>
				<li><a href="contactus.php?contact_group=9"><?php echo $language['menu_txt52']; ?></a></li>
				<li><a href="contactus.php?contact_group=8" data-manuid="manuMB00044"><?php echo $language['menu_txt53']; ?></a></li>
				<li><a href="contactus.php?contact_group=7"><?php echo $language['menu_txt58']; ?></a></li>
				<li><a href="http://www.governmentcomplex.com/" target="_blank"><?php echo $language['menu_txt59']; ?></a></li>
			</ul>
		</div>		
		<div id="manuMB0005">
			<h3 data-manuidX="manuMB0007"><?php echo $language['menu_txt94']; ?></h3><!-- วีดีโอ -->
			<ul>
<? if($_SESSION['lang'] == 'en'){ ?>				
				<li><a href="vdo.php?c=43">Events 2018</a></li>
				<li><a href="vdo.php?c=42">Events 2017</a></li>
				<li><a href="vdo.php?c=44">Events 2016</a></li>
				<li><a href="vdo.php?c=47">Events 2015</a></li>
<? }else{ ?>
				<li><a href="vdo.php?c=43">กิจกรรมปี 2561</a></li>
				<li><a href="vdo.php?c=42">กิจกรรมปี 2560</a></li>
				<li><a href="vdo.php?c=44">กิจกรรมปี 2559</a></li>
				<li><a href="vdo.php?c=47">กิจกรรมปี 2558</a></li>
<? } ?>								
			</ul>
		</div>		
				
	<!--level 3 -->
		<div id="manuMB00011">
			<h3 data-manuidX="manuMB00011"><?php echo $language['menu_txt2']; ?></h3>
			<ul>
                <li><a href="About-us1.php"><?php echo $language['menu_txt3']; ?></a></li>
				<li><a href="About-us2.php"><?php echo $language['menu_txt4']; ?></a></li>
				<li><a href="About-us3.php"><?php echo $language['menu_txt5']; ?></a></li>
			</ul>
		</div>
		<div id="manuMB00012">
			<h3 data-manuidX="manuMB00012"><?php echo $language['menu_txt6']; ?></h3>
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
<!-- 				<li><a href="About-us14.php"><?php echo $language['menu_txt17']; ?></a></li> -->
			</ul>
		</div>
		<div id="manuMB00013">
			<h3 data-manuidX="manuMB00013"><?php echo $language['menu_txt18']; ?></h3>
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
		</div>
		<div id="manuMB00014">
			<h3 data-manuidX="manuMB00014"><?php echo $language['menu_txt27']; ?></h3>
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
		</div>
		<div id="manuMB00015"><!-- อัลบั้ม -->
			<h3 data-manuidX="manuMB00015"><?php echo $language['menu_txt48']; ?></h3>
			<ul>
<? if($_SESSION['lang'] == 'en'){ ?>				
				<li><a href="album-all.php?p=39">Events 2017</a></li>
<!-- 				<li><a href="album-all.php?p=48">Events 2016</a></li> -->
<? }else{ ?>
				<li><a href="album-all.php?p=39">กิจกรรมปี 2560</a></li>
<!-- 				<li><a href="album-all.php?p=48">กิจกรรมปี 2559</a></li> -->
<? } ?>								
			</ul>
		</div>
		<div id="manuMB00016">
			<h3 data-manuidX="manuMB00016"><?php echo $language['menu_txt50']; ?></h3>
			<ul>
				<li><a href="career.php"><?php echo $language['menu_txt50']; ?></a></li>
				<li><a href="career2.php"><?php echo $language['menu_txt50']; ?> (<?=$language['menu_old']?>)</a></li>
			</ul>
		</div>
<!--
		<div id="manuMB00044">
			<h3 data-manuidX="manuMB00044"><?php echo $language['menu_txt53']; ?></h3>
			<ul>
				<li><a href="#"><?php echo $language['menu_txt54']; ?></a></li>
				<li><a href="#"><?php echo $language['menu_txt55']; ?></a></li>
				<li><a href="#"><?php echo $language['menu_txt56']; ?></a></li>
				<li><a href="#"><?php echo $language['menu_txt57']; ?></a></li>
			</ul>
		</div>
					
-->
	</div>
