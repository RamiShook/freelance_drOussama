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
          <li class="active">تواصل معنا</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="space-medium">
  <div class="container">
    <div class="contact-form">
      <div class="row">
        <div class="col-lg-offset-2 col-lg-8 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-xs-12">
          <div class="section-title text-center">
            <h1>تواصل معنا </h1>
            <p>فريقنا في خدمتكم على مدار الساعة لتقديم المساعدة التي تحتاجها وبالسرعة التي تتمناها.</p>
          </div>
        </div>
      </div>
      <form class="" method="post" action="" id="contactForm">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="form-group">
              <label class="sr-only" for="patient_name"> </label>
              <input id="patient_name" name="patient_name" type="text" placeholder="الأسم" class="form-control col-lg-12 col-md-12">
            </div>
          </div>
         
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
              <label class="sr-only  " for="textarea">الرسالة</label>
              <textarea class="form-control" id="message" name="message" rows="6" placeholder="الرسالة"></textarea>
            </div>
          </div>
          <div class="col-md-12"> <span class="btn btn-primary pull-right" onclick="SendFromMessage()">ارسل</span> </div>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="space-medium">
  <div class="container">
    <?php getLang(11);?>
  </div>
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d53350.79869268615!2d44.33172228394438!3d33.30770502147691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x15577f41456d114b%3A0x122e3b6ebd173bc2!2z2LnZhdin2LHYqSDYp9mE2YPYsdmI2KfZhiwgS2luZGkgU3RyZWV0LCBCYWdoZGFkLCBJcmFx!3m2!1d33.307627499999995!2d44.3666415!5e0!3m2!1sen!2slb!4v1630484733276!5m2!1sen!2slb" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


    
    <!-- Footer -->
    <?php 
    include('footer.php');
?>
    <!-- ./Footer -->

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
<script src="js/menumaker.min.js"></script> 
<script type="text/javascript" src="js/navigation.js"></script> 

<script src="../../../../code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 

<!-- Back to top script --> 
<script src="js/back-to-top.js" type="text/javascript"></script>
</body>


</html>
