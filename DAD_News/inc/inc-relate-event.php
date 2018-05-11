<div class="box-relate event-item">
	<div class="container">
		<div class="slide owl-carousel owl-theme">
			<?php
			$Breadcrumb['name1'] = $breadcrumb;
			// include('inc/inc-nav.php'); 

			$DisplayDetail_today = array();
			$DisplayAll = array();
			$js_array = array();
			$today = date('Y-m-d');
			$today = date('Y-m-d', strtotime($today));
			$displayDate = ShowShortthYear($today);


			$sql = "SELECT mod_cms_id , mod_cms_file , mod_cms_create_date 
			FROM mod_cms LEFT JOIN mod_cms_public ON mod_cms_id = mod_cms_public_id 
			WHERE mod_cms_modulekey =  '".$modulekey."' 
			AND mod_cms_staus = '1' 
			AND mod_cms_id <> '".$pid."'
			AND ((mod_cms_start_date='0000-00-00 00:00:00' AND mod_cms_finish_date='0000-00-00 00:00:00')  OR (mod_cms_start_date='0000-00-00 00:00:00' AND   TO_DAYS(mod_cms_finish_date)>=TO_DAYS(NOW()) ) OR (TO_DAYS(mod_cms_start_date)<=TO_DAYS(NOW()) AND mod_cms_finish_date='0000-00-00 00:00:00' ) OR (TO_DAYS(mod_cms_start_date)<=TO_DAYS(NOW()) AND  TO_DAYS(mod_cms_finish_date)>=TO_DAYS(NOW())  )) 
			ORDER BY DATE(mod_cms_finish_date)  DESC,mod_cms_id DESC
			LIMIT 0,12"; 

			$query = mysql_query($sql, $conn);

			while($row = mysql_fetch_array($query)){		
				$xml = simplexml_load_file(_DATA_SITE_PATH_.'upload/cms/'.$row['mod_cms_file']) or die($row['mod_cms_file']);

				foreach($xml->children() as $child){
					foreach($child->children() as $child2){
						$varName = $child2->getName();
						$$varName = $child2;
					}
				}	

				if($modulekey == 'activity'){	
					$date1 = new DateTime(trim($date1_th));
					$date2 = new DateTime(trim($date2_th));
				}else if($modulekey == 'dad_news'){	
					$public_date = trim($public_date_th);
					if($public_date != ''){
						$create_date = $public_date;
						$create_date = date('Y-m-d H:i:s',strtotime($create_date));
					}else{
						$create_date = $row['mod_cms_create_date'];
					}
					$date1 = new DateTime($create_date);
					$date2 = $date1;
				}
				$contractDateBegin = $date1->format('Y-m-d');
				$contractDateEnd = $date2->format('Y-m-d');


				$image = '';
				$sql_gallery = "SELECT mod_media_filename FROM mod_media WHERE mod_media_cid = ". $row['mod_cms_id']." AND mod_media_staus = 1 ORDER BY mod_media_order ASC LIMIT 0 , 1";
				$query_gallery = mysql_query($sql_gallery,$conn);
				if(mysql_num_rows($query_gallery) > 0){
					$row_gallery = mysql_fetch_assoc($query_gallery);
					$image = _DATA_SITE_PATH_.'upload/cms_file/'.$row_gallery['mod_media_filename'];
				}	

				if($_SESSION["lang"] == 'en'){
					$name = trim($name2_th);
					$detail = trim($detail2_th);

					$date1 = $date1->format('j M y');
					$date2 = $date2->format('j M y');

				}else{
					$name = trim($name_th);
					$detail = trim($detail1_th);

					$date1 = ShowDateShort($date1->format('Y-m-d'));
					$date2 = ShowDateShort($date2->format('Y-m-d'));

				}
				$detail = htmlspecialchars_decode($detail);
				$detail = strip_tags($detail);
				$detail = mb_substr($detail,0,150,'UTF-8');

				if (($today >= $contractDateBegin) && ($today <= $contractDateEnd)){

					$DisplayDetail_today[] = array(
						'id' => $row['mod_cms_id'],
						'name' => $name,
						'image' => $image,
						'detail' => $detail
					);
				}else if(($today == $contractDateBegin) && ($modulekey == 'news')){

					$DisplayDetail_today[] = array(
						'id' => $row['mod_cms_id'],
						'name' => $name,
						'image' => $image,
						'detail' => $detail
					);
				}

				$DisplayAll[] = array(
					'id' => $row['mod_cms_id'],
					'name' => $name,
					'image' => $image,
					'detail' => $detail,
					'startDate' => $date1,
					'endDate' => $date2
				);

				$js_array[] = "{ startDate: '".$contractDateBegin."', endDate: '".$contractDateEnd."', title: '".$name."' }";

			}	
			foreach($DisplayAll as $key => $value) { 

				$data_src = 'style="background-image: url(\''.$value['image'].'\')"';
				$hide = "";

				$startDate = explode(' ',$value['startDate']);
				$endDate = explode(' ',$value['endDate']);
				?>
				<div class="item" <?php echo $hide;?>>
					<a href="detail.php?p=<?php echo $value['id']?>">
						<div class="img" <?php echo $data_src;?>>
							<img src="images/defaultB.png" alt="">
						</div>
						<div class="box-date">
							<div class="B-date"><b><?php echo $startDate[0]?></b><?php echo $startDate[1].' '.$startDate[2]?></div>
							<?php if($modulekey == 'activity'){ ?>
							<div class="B-date"><b><?php echo $endDate[0]?></b><?php echo $endDate[1].' '.$endDate[2]?></div>
							<?php } ?>	
						</div>
						<h4><?php echo $value['name']?></h4>
					</a>
					<a href="detail.php?p=<?php echo $value['id']?>">
						<div class="Add-Event"><?php echo $language['view']; ?></div>
					</a>
				</div>
				<?php } ?>	

			</div>
		</div>
	</div>
