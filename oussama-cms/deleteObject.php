<?php
include('config.php');
require('./AdminAuthCheck.php');

/* Banner Delete */
if(isset($_POST['type']) && ($_POST['type']) =='banner'){
    if(isset($_POST['objectId']) && $_POST['objectId'] != ''){
        $banner_id = $_POST['objectId'];
        $q = mysqli_query($connection,"DELETE FROM banner 
                                    WHERE banner_id = '$banner_id'");
        if($q){
            echo 'Banner '.$_POST['objectId'].' Deleted!';
        }else{
            echo 'Banner Not Deleted!';
        }
        // echo 'Banner '.$_POST['objectId'].' Deleted!';
    }
}

/* Blog Post Delete */
if(isset($_POST['type']) && ($_POST['type']) =='blogPost'){
    if(isset($_POST['objectId']) && $_POST['objectId'] != ''){
        $blogPost_id = $_POST['objectId'];
        $q = mysqli_query($connection,"DELETE FROM blog_posts	 
                                    WHERE post_id = '$blogPost_id'");
        if($q){
            echo 'blog Post '.$_POST['objectId'].' Deleted!';
        }else{
            echo 'blog Post Not Deleted!';
        }
        // echo 'blogPost '.$_POST['objectId'].' Deleted!';
    }
}



/* Service Delete */
if(isset($_POST['type']) && ($_POST['type']) =='service'){
    if(isset($_POST['objectId']) && $_POST['objectId'] != ''){
        $service_id = $_POST['objectId'];
        $q = mysqli_query($connection,"DELETE FROM services	 
                                    WHERE service_id = '$service_id'");
        if($q){
            echo 'Service '.$_POST['objectId'].' Deleted!';
        }else{
            echo 'Service Not Deleted!';
        }
        // echo 'service '.$_POST['objectId'].' Deleted!';
    }
}

/* Feature Delete */
if(isset($_POST['type']) && ($_POST['type']) =='feature'){
    if(isset($_POST['objectId']) && $_POST['objectId'] != ''){
        $feature_id = $_POST['objectId'];
        $q = mysqli_query($connection,"DELETE FROM features	 
                                    WHERE feature_id = '$feature_id'");
        if($q){
            echo 'feature '.$_POST['objectId'].' Deleted!';
        }else{
            echo 'Feature Not Deleted!';
        }
        // echo 'feature '.$_POST['objectId'].' Deleted!';
    }
}

/* Pricing Plan Delete */


if(isset($_POST['type']) && ($_POST['type']) =='Package'){
    if(isset($_POST['objectId']) && $_POST['objectId'] != ''){
        $package_id = $_POST['objectId'];
        $q = mysqli_query($connection,"DELETE FROM package_item	 
                                    WHERE package_id = '$package_id'");
        if($q){
            echo 'Package '.$_POST['objectId'].' Deleted!';
            $q1 = mysqli_query($connection,"DELETE FROM package_item_details
                                            WHERE package_id = '$package_id'");
        }else{
            echo 'Package Not Deleted!';
        }
        // echo 'Package '.$_POST['objectId'].' Deleted!';
    }
}


?>