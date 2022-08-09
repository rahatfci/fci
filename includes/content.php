<?php
	$url = $_SERVER["REQUEST_URI"];

	$url_mid = explode("?", $url);

	$url_segment = explode("/", $url_mid[0]);
		
if(strpos($url_mid[0], '.php')){?>
	<div style="margin-top: 2%;"></div>
		<?php include("includes/default.php");?>
		<div style="margin-top: 2%;"></div>
	<?php }elseif (!empty($url_segment[2])) {?>
		
		<?php if($url_segment[2]=="admin"){?>
			<?php if(!empty($url_segment[3])){
				include("includes/$url_segment[3].php");
			}else{
				include("includes/dashboard.php");
			}
		}else{?>
			<div style="margin: 2%">
			<?php include("includes/$url_segment[2].php");?>
			</div>
		<?php }
	}else{
		include("includes/home.php");
	}
?>