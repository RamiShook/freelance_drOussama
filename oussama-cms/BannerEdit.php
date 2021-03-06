<?php
require_once('./config.php');
require('./AdminAuthCheck.php');

?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Banner Edit</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="Mosaddek" name="author" />
   
   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
   <link href="css/style-responsive.css" rel="stylesheet" />
   <link href="css/style-default.css" rel="stylesheet" id="style_color" />
   <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>

   <style>
       td textarea {
   resize:vertical;
   columns: 80;
}
   </style>
   <!-- <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
   <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/> -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <?php
        require('header.php');
   ?>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div class="sidebar-scroll">
        <div id="sidebar" class="nav-collapse collapse">

         <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
         <div class="navbar-inverse">
            <form class="navbar-search visible-phone">
               <input type="text" class="search-query" placeholder="Search" />
            </form>
         </div>
         <!-- END RESPONSIVE QUICK SEARCH FORM -->
         <!-- BEGIN SIDEBAR MENU -->
         <?php
         include('menu.php');
            ?>
         <!-- END SIDEBAR MENU -->
      </div>
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">

                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     Banner Edit
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="#">CMS </a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Banner EDit
                       </li>
                      
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <?php
            $banner_id =mysqli_real_escape_string($connection,  $_GET['banner_id']);
            
            $q=mysqli_query($connection,"SELECT * FROM banner WHERE banner_id = '$banner_id'");
            if(mysqli_num_rows($q)>0){
                $banner = mysqli_fetch_row($q);		 
                
            }else{
                echo'<div style="color:red;" align="center"> <h1>Banner Not Found</h1></div>';
                exit;
            }
        
            ?>


<form class="form-vertical" method="get" action="#" id="banner_form">
<div align="center" id ="result"></div>
    <table style="width:100%; height=100%" border="1">
<tr>
    <td colspan=2>
    <div class="control-group">
                                    <label class="control-label">Display Order</label>
                                    <div class="controls">
                                        <input type="number" placeholder=".input-mini" class="input-mini"
                                                value="<?php echo $banner[6];?>"
                                                name="display_order"
                                                id="display_order">
                                        <span class="help-inline">(Display Order Must Be Unique, if you put an order that already exist than system will automatically set after the last one)</span>
                                    </div>
                                </div>

    </td>
</tr>
<tr >
    <td>
            <div class="row-fluid">
                                    <div class="span6">
                                        <div class="control-group">
                                            <label class="control-label" >Banner Title</label>
                                            <div class="controls controls-row">
                                                        <textarea class="input-xlarge" rows="3"   style="width:100%"
                                                        placeholder="En Banner Title" 
                                                        name="en_banner_title"
                                                        id="en_banner_title"><?php echo $banner[1];?></textarea>
                                            </div>
                                       </div>
                                    </div>
    </td>
    <td>
                                    <div class="span6">
                                        <div class="control-group">
                                                <label class="control-label" > Ar Banner Title</label>
                                            <div class="controls controls-row" >
                                                        <textarea  class="input-xlarge" rows="3" style="width:100%"
                                                         placeholder="En Banner Title"
                                                         name="ar_banner_title"
                                                         id="ar_banner_title"><?php echo $banner[9];?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                        </div>

                                       
            </div>
    </td>
</tr>
<tr>

<td>
    <div class="row-fluid">

                            <div class="control-group">
                            <label class="control-label">En Value</label>
                            <div class="controls">
                                <textarea class="span12 ckeditor" 
                                name="en_banner_description"
                                rows="20"
                                id="en_banner_description" >
                                <?php echo htmlspecialchars($banner[2])?>
                                </textarea>
                            </div>
                        </div>
    </td>
    <td>
    <div class="row-fluid">

                            <div class="control-group">
                            <label class="control-label">ar Value</label>
                            <div class="controls">
                                <textarea class="span12 ckeditor" 
                                name="ar_banner_description"
                                rows="20"
                                id="ar_banner_description" >
                              <?php echo htmlspecialchars($banner[10])?>
                                </textarea>
                            </div>
                        </div>
    </td>

       
</tr>
<tr>
        <td>
            <div class="row-fluid">
                                    <div class="span6">
                                        <div class="control-group">
                                            <label class="control-label">Button Label</label>
                                            <div class="controls controls-row">
                                                        <textarea class="input-block-level" rows="3" 
                                                        placeholder="En Button Label"
                                                        name="en_button_label"
                                                        id="en_button_label"><?php echo $banner[5];?></textarea>
                                            </div>
                                       </div>
                                    </div>
        </td>
        <td>
                                    <div class="span6">
                                        <div class="control-group" >
                                                <label class="control-label" > Ar Button Label</label>
                                            <div class="controls controls-row" >
                                                        <textarea class="input-block-level" rows="3"
                                                         placeholder="ar button label"
                                                         name="ar_button_label"
                                                         id="ar_button_label"><?php echo $banner[11];?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                        </div>


             </div>
        </td>
</tr>


<tr>

        </tr>
<tr>
<td>
        <div class="control-group">
                                    <label class="control-label">Button Link</label>
                                    <div class="controls">
                                        <input type="text" placeholder=".input-large" class="input-large"
                                                value="<?php echo $banner[4];?>"
                                                name="button_link"
                                                id="button_link">
                                        
                                    </div>
                                </div>
        </td>
        <td>
        <div class="control-group">
                                    <label class="control-label">AR Button Link</label>
                                    <div class="controls">
                                        <input type="text" placeholder=".input-large" class="input-large"
                                                value="<?php echo $banner[12];?>"
                                                name="ar_button_link"
                                                id="ar_button_link">
                                        
                                    </div>
                                </div>
        </td>


</tr>
<tr>
<td colspan=2>

<div class="control-group">
                                    <label class="control-label">Banner Status</label>
                                    <div class="controls">
                                        <select class="input-medium m-wrap" tabindex="1"
                                                name="banner_status"
                                                id="banner_status">
                                            <?php
                                            if($banner[8]==1){
                                                echo '
                                                <option value="active" name="active" selected>Active</option>
                                                <option value="Unactive" name="Unactive">Unactive</option>
                                                ';
                                            }else{
                                                echo '
                                                <option value="active" name="active">Active</option>
                                                <option value="unactive" name="unactive" selected>Unactive</option>
                                                ';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>


</div>
</td>
</tr>
<tr>
<td colspan ="2" align="center">

<img src="../../<?php echo $banner[3];?>" alt="Image Cannot Viewed Or No Image For This Banner"></img>
<br>
<div class="control-group">
                                    <label class="control-label">Upload Image</label> Perfect Image : Width: 1920px; Height: 670px;
                                    <div class="controls">
                                        <input type="file" class="default"
                                                name="banner_image"
                                                id="banner_image">
                                    </div>
                                </div>

</td>
</tr>
<tr>
<td colspan=2>
 <input type="button" value="Update Data" class="btn btn-success" onclick="updateData()"></input>  &nbsp; &nbsp; 
 <input type="reset" value="reset" class="btn"></input>
</td>

</tr>

    </table>
    <input type="hidden"
           value="<?php echo $banner[0];?>"
           id="banner_id"
           name="banner_id"> </input>

    <input type="hidden"
           value="<?php echo $banner[6];?>"
           id="inital_display_order"
           name ="inital_display_order"> </input>
        </form>


            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->

   <!-- BEGIN FOOTER -->
<?php
        include('footer.php');
?>
   <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="js/jquery-1.8.3.min.js"></script>
   <!-- <script src="js/jquery.nicescroll.js" type="text/javascript"></script> -->
   <script type="text/javascript" src="assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
   <script type="text/javascript" src="assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
   <script src="assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>

   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->

   <!-- <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script> -->
   <script src="js/jquery.sparkline.js" type="text/javascript"></script>
   <!-- <script src="assets/chart-master/Chart.js"></script> -->
   <script src="js/jquery.scrollTo.min.js"></script>


   <!--common script for all pages-->
   <script src="js/common-scripts.js"></script>

   <!--script for this page only-->
<!--  -->
   <!-- <script src="js/easy-pie-chart.js"></script> -->
   <!-- <script src="js/sparkline-chart.js"></script> -->
   <!-- <script src="js/home-page-calender.js"></script> -->
   <!-- <script src="js/home-chartjs.js"></script> -->
<!--  -->
   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
<script>
      // update section body&title
function updateData() {
    const form = document.getElementById('banner_form');
    var input = document.querySelector('input[type="file"]');

    let data = new FormData(form)
    
    data.append('updateBanner',document.getElementById("banner_id").value);
    data.append('en_banner_descriptions',CKEDITOR.instances.en_banner_description.getData());
    data.append('ar_banner_descriptions',CKEDITOR.instances.ar_banner_description.getData());
    // if user select file to upload
    if(input.files[0] != null) {
    data.append('file',input.files[0]);
    data.append('updateImage','true');
    }else{
        data.append('updateImage','false');

    }

    fetch('./editBannerFunctions.php', {
        mode: 'same-origin', 
        credentials: 'include',
        
        method: 'POST',
    
        body: data
    }).then(response => {
        if (!response.ok) {
        throw new Error('Network error!');
        }else{
        return response.text();
        }
    }).then(responseText =>
    document.getElementById("result").innerHTML= responseText)
    .catch(console.error)
}
</script>
</html>