<div class="box-nav">
	<div class="container">
		<ul>
			<li>
				<? if($_SESSION['lang'] == 'en'){ ?>
					<a href="home.php">Home</a>
				<?}else{?>
					<a href="home.php">หน้าแรก</a>
				<?}?>
			</li>
			<?php
				for($i=1;$i<=10;$i++){
					if($Breadcrumb['name'.$i] != null){
						
						echo "<li><i></i>";
						
						if($Breadcrumb['a'.$i] != "" && $Breadcrumb['a'.$i] != "#"){
							echo "<a href='".$Breadcrumb['a'.$i]."'>";
						}
						
						echo $Breadcrumb['name'.$i];
						
						if($Breadcrumb['a'.$i] != "" && $Breadcrumb['a'.$i] != "#"){
							echo "</a>";
						}
						echo "&nbsp;</li>";
					}
				}
			?>
		</ul>
	</div>
</div>
