<?php

function getBanner($BannerId,$field){
	global $connection;

	if(isset($_SESSION['language']) && $_SESSION['language']=="ar"){
		$q=mysqli_query($connection,"SELECT ar_heading,
										ar_description,
										ar_button_lable,
										ar_cta_link,
										photo
									 FROM banner
									 WHERE banner_id = '$BannerId'
									 AND is_active= 1 ");
	}else{
		$q=mysqli_query($connection,"SELECT ar_heading,
										ar_description,
										ar_button_lable,
										ar_cta_link,
										photo
									 FROM banner
									 WHERE banner_id = '$BannerId'
									 AND is_active= 1 ");
	}
	if(mysqli_num_rows($q)>0){
		$banner_field = mysqli_fetch_row($q);	
		}else{
		echo 'Banner Not Found';
		}
	switch ($field) {
		case 'ar_heading':
			echo $banner_field[0] ;
			break;
				case 'ar_description':
					echo $banner_field[1];
					break;
			            case 'ar_button_lable':
			            	echo $banner_field[2];
			            	break;
				case 'ar_cta_link':
					echo $banner_field[3];
					break;
    	case 'photo':
    		echo $banner_field[4];
    		break;

		

	}

}
function getLang($langId){
	global $connection;
	if(isset($_SESSION['language']) && $_SESSION['language']=="ar"){
		$q=mysqli_query($connection,"SELECT ar_value
									 FROM lang
									 WHERE lang_id = '$langId'
									 AND is_active= 1 ");
	}else{
		$q=mysqli_query($connection,"SELECT en_value
									 FROM lang
									 WHERE lang_id = '$langId'
									 AND is_active= 1 ");
	}

	if(mysqli_num_rows($q)>0){
		$langData = mysqli_fetch_row($q);		 
		echo $langData[0];
	}else{
		echo" ";
	}

	

}


?>