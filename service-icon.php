<!DOCTYPE html>
<html dir="rtl"  lang="ar">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="تُعتبر عيادة الدكتور أسامة مدحت إحدى أكبر العيادات الرائدة والمختصة بالتغذية العلاجية وعلاج السمنة في العراق، والتي تفتح آفاقا جديدة للوقاية والمساهمة في علاج العديد من الأمراض">
   
    <title>عيادة الدكتور اسامة مدحت للتغذية العلاجية وعلاج السمنة</title>
    <?php
        include('headerScripts.php');
    ?>
</head>

<body>
         <!-- header-wrapper -->
<?php include('header.php'); ?>
    <!-- /.header-wrapper -->


    <div class="page-header">
        <!-- page-header -->
        <div class="container">
            <div class="page-section">
                <div class="row">
                    <!-- page section -->
                    <div class="col-md-6 col-sm-8 col-xs-12">
                        <div class="page-description">
                            <!-- page description -->
                            <h1 class="page-title"></h1>
                        </div>
                        <!-- /.page description -->
                    </div>
                    <!-- /.page section -->
                </div>
            </div>
        </div>
    </div>
    <div class="page-breadcrumb">
        <!-- page-breadcrumb -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="home">الرئيسية</a></li>
                        <li class="active">العلاجات</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="space-medium">
        <!-- space-medium -->
        <div class="container">
            <div class="">
                <div class="col-lg-offset-2 col-lg-8 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-xs-12">
                    <div class="section-title text-center">
                        <h1>الأمراض التي تساهم التغذية العلاجية  في علاجها:</h1>
                        <p>تساعد التغذية العلاجية في علاج بعض الأمراض الشائعة والمزمنة ومن هذه الأمراض:</p>
                    </div>
                </div>
            </div>
            <div class="">
            <?php
            $q=mysqli_query($connection,"SELECT * FROM services where is_active=1 ORDER BY display_order ASC");

            while($service = mysqli_fetch_assoc($q)){
               echo '
               <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
               <div class="treatment-block">
                   <div class="">
                       <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                           <div class="treatment-circle" style="background-image: url(\'./images/'.$service['photo'].'\');
                                                                background-size: 260px;
                                                                background-position: center;
                           "> 
                           <a href="#"><i class=""></i></a></div>
                       </div>
                       <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                           <div class="treatment-content">
                               <h2 class="treatment-title"><a href="#" class="title">'.$service['ar_name'].'</a></h2>
                               <p>'.$service['ar_description'].'</p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

               ';
            }
               ?>

                
            </div>
        </div>
    </div>
    <!-- /.space-medium -->


    <!-- Footer -->
    <?php 
    include('footer.php');
?>
    <!-- ./Footer -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- navigation scripts -->
    <script src="js/menumaker.min.js"></script>
    <script type="text/javascript" src="js/navigation.js"></script>
    <!-- Slider scripts -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/slider.js"></script>
    <!-- Calender date scripts -->
    <script src="js/jquery-ui.js"></script> 
     <script src="js/date.js"></script> 
    <!-- Carousel Slider scripts -->
    <script src="js/testimonial.js"></script>
    <!-- Back to top script -->
    <script src="js/back-to-top.js" type="text/javascript"></script>
</body>

</html>
