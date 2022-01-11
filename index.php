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
    <div class="slider owl-carousel" style="direction:ltr !important">
    <div class="slider-img">
            <!-- slider-img -->
            <a href="#"><img src="<?php getBanner(1,'photo');?>" alt="oussam medhat" class="img-responsive"></a>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9">
                        <div class="slider-captions">
                            <!-- slider-captions -->
                            <h1 class="slider-title"><?php getBanner(1,'ar_heading');?></h1>
                            <p class="slider-text hidden-sm hidden-xs"> <?php getBanner(1,'ar_description');?> </p>
                            <a href="<?php getBanner(1,'ar_cta_link');?>" class="btn btn-default hidden-xs"><?php getBanner(1,'ar_button_lable');?></a> </div>
                        <!-- /.slider-captions -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.slider-img -->

        <div class="slider-img">
            <!-- slider-img -->
            <a href="#"><img src="<?php getBanner(2,'photo');?>" alt="oussam medhat" class="img-responsive"></a>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9">
                        <div class="slider-captions">
                            <!-- slider-captions -->
                            <h1 class="slider-title"><?php getBanner(2,'ar_heading');?></h1>
                            <p class="slider-text hidden-sm hidden-xs"> <?php getBanner(2,'ar_description');?> </p>
                            <a href="<?php getBanner(2,'ar_cta_link');?>" class="btn btn-default hidden-xs"><?php getBanner(2,'ar_button_lable');?></a> </div>
                        <!-- /.slider-captions -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.slider-img -->

        <div class="slider-img">
            <!-- slider-img -->
            <a href="#"><img src="<?php getBanner(3,'photo');?>" alt="oussam medhat" class="img-responsive"></a>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9">
                        <div class="slider-captions">
                            <!-- slider-captions -->
                            <h1 class="slider-title"><?php getBanner(3,'ar_heading');?></h1>
                            <p class="slider-text hidden-sm hidden-xs"> <?php getBanner(3,'ar_description');?> </p>
                            <a href="<?php getBanner(3,'ar_cta_link');?>" class="btn btn-default hidden-xs"><?php getBanner(3,'ar_button_lable');?></a> </div>
                        <!-- /.slider-captions -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.slider-img -->

		  
     
    </div>
    <!-- /.slider -->
    <div class="space-medium">
        <!-- space-medium -->
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-2 col-lg-8 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-xs-12">
                    <div class="section-title text-center">
                            <?php getLang(1) ?>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php
            $q=mysqli_query($connection,"SELECT * FROM services where is_active=1 ORDER BY display_order ASC");

            while($service = mysqli_fetch_assoc($q)){
               echo '
               <div class="col-lg-2 col-sm-4 col-md-4 col-xs-12">
               <div class="treatment-icon-block">
                   <div class="treatment-circle"  style="background-image: url(\'./images/'.$service['photo'].'\');
                   background-size: 260px;
                   background-position: center;
                   "> <a href="#"><i class=""></i></a></div>
                   <div class="treatment-caption">
                       <h2 class="treatment-title"><a href="#" class="title">'.$service['ar_name'].'</a></h2>
                   </div>
               </div>
                 </div>
               ';
            }
            ?>

                
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                    <div class="text-center"> <a href="services" class="btn btn-primary">خدماتنا</a> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.space-medium -->
    <div class="space-medium bg-default">
        <!-- space-medium -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="doctor-profile-img">
                                <a href="#" class="imghover"><img src="images/Dr-usama-profile.jpg" alt="oussam medhat" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="doctor-profile-info">
                               <?php getLang(2); ?>
                                <a href="#" class="btn btn-primary mb30">تعرف على د.اسامة</a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="well bg-primary">
                        <?php getLang(3); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.space-medium -->
    <div class="space-medium">
        <!-- space-medium -->
        <?php getLang(4); ?>
    </div>
    <!-- /.space-medium -->
    <div class="space-medium bg-primary">
        <!-- space-medium -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"  style="direction:ltr !important">
                    <?php getLang(5); ?>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <?php getLang(6); ?>

                </div>
            </div>
        </div>
    </div>
    <!-- /.space-medium -->
    <div class="space-medium">
        <!-- space-medium -->
        <div class="container">
            <div class="row ">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="location-block">
                        <div class="section-title">
                            <h1>الموقع الجغرافي</h1>
                        </div>
                        <div class="location-area ">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d53350.79869268615!2d44.33172228394438!3d33.30770502147691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x15577f41456d114b%3A0x122e3b6ebd173bc2!2z2LnZhdin2LHYqSDYp9mE2YPYsdmI2KfZhiwgS2luZGkgU3RyZWV0LCBCYWdoZGFkLCBJcmFx!3m2!1d33.307627499999995!2d44.3666415!5e0!3m2!1sen!2slb!4v1630484733276!5m2!1sen!2slb" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="resources-block">
                            <?php getLang(7); ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="appointment-block">
                        <div class="section-title">
                            <h1>تواصل معنا</h1>
                        </div>
                        <div class="bg-default widget-appointments">
                            <form class="form-horizontal" method="post" action="" id="contactForm">
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="control-label" for="patient_name"> </label>
                                    <div class="col-md-12">
                                        <input id="patient_name" name="patient_name" type="text" placeholder="الأسم" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="control-label" for="textarea"> </label>
                                    <div class="col-md-12">
                                        <textarea id="message" name="message"  placeholder="الرسالة" class="form-control" rows="6" placeholder="الرسالة"></textarea>
                                    </div>
                                </div>

                                <!-- Button -->
                                <div class="form-group">
                                    <div class="col-md-12">
                                    <span class="btn btn-primary pull-right" onclick="SendFromMessage()">ارسل</span>                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.space-medium -->


    <!-- Footer -->
<?php 
    include('footer.php');
?>
    <!-- ./Footer -->


    <!-- video modal box -->
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-body">
                    <iframe width="100%" height="600" src="https://www.youtube.com/embed/YOUTUBEVIDEOLINK" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <script language="javascript">
function SendFromMessage(){
   const form = document.getElementById('contactForm');
   // preparing message
   let name = form.patient_name.value;
    let patient_message = form.message.value;
   let message = " -الأسم:";
   message +="%0a";
   message +=name;
   message +="%0a";


   message +=" -الرسالة:";
   message +="%0a";
   message +=patient_message;
   
   window.open("https://wa.me/9647704446343?text="+message,'blank');

   

}
         </script>

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
