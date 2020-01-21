 <?php
    $doctor_id  = $_GET['id'];
    include('config/connection.php'); 
        $doctor_info=mysqli_query($con,"SELECT doctor_info.*,specialist_type.* FROM doctor_info INNER JOIN specialist_type on doctor_info.doctor_id=specialist_type.doctor_id WHERE doctor_info.doctor_id=".$doctor_id); 

if(isset($_POST['submit_appointment'])){

        $date=$_POST['appintment_date']; 
        $time=$_POST['time'];
        $name=$_POST['appoinmenter_name'];
        $email=$_POST['appoinmenter_email'];
        $phone=$_POST['appoinmenter_phone'];
        date_default_timezone_set('Asia/Dhaka');
        $current_date=date("Y-m-d");
        $current_time=date("h:i:sa");

    $sql="INSERT INTO booking(doctor_id,name,email,phone,date,time,submit_date,submit_time)VALUES('$doctor_id','$name','$email','$phone','$date','$time','$current_date','$current_time')";
    $result=mysqli_query($con,$sql);
       if($result){
           echo "<script>alert(\"successful\");</script>";
       } else{
           //echo"error:" .$sql . "br" . $conn-error;
       }    
    }
?>





<!DOCTYPE html>
<html lang="en">

<head>
   <link rel="icon" type="image/jpg" href="image/khab.png">
   <?php include('php/header.php');  ?>
</head>

<!-- upper side-->

<body class="doc_body" style="background-color: #E9EBEE;">
    <div class="container">
       <?php
        while ($row=mysqli_fetch_array($doctor_info,MYSQLI_ASSOC)) { ?>
        <div class="row bg-info bg-doctor-profile-home" data-spy="affix" data-offset-top="197">
            <div class="col-md-4 col-sm-12">
                <div class="doctor_pic ">
                   <?php 
                  if($row['image']) {
                      echo '<img  class="doc_image px-auto" src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
                  }
                  else{
                      echo '<img class="doc_image px-auto" src="image/doctkamal.jpg" alt="ow no">'; 
                  }                                             
                   ?>

                </div>
            </div>
            <div class="col-md-8 col-sm-12">
                <div class="doc_info mb-3">
                    
                     
                   <?php  
                    echo '<h2 class="wow slideInRight title headtack" style="color:#FFFFFF;">'.$row['name'].' </h2>';
                    echo '<hr>';
                    echo '<b> <i class="fas fa-hand-point-right"></i> '.$row['degree'].'</b> <br>';
                    echo '<b><i class="fas fa-hand-point-right"></i>  '.$row['specialist_type_name'].'</b><br>';
                    echo '<b><i class="fas fa-hand-point-right"></i>  '.$row['hospital_name'].'</b><br>';
                    echo '<b><i class="fas fa-hand-point-right"></i> Phone:0'.$row['tell_number'].'</b>';
                     ?>
                   

            

                </div>
            </div>
        </div>
    </div>

    <!-- midle  side-->
  <form method="post" action="">
   <?php include('apponment.php'); ?>
</form>



                        </div>
                        <button type="button" class="btn btn-success  btn_margin" data-toggle="modal" data-target="#exampleModal">ONLINE APPOINMENT</button>


                    </div>
                    <div class="col-md-4 col-sm-12">
                        <button type="button" class="btn btn-light pull-right mt-space-remove" style="font-size:15px">  <i class="fa fa-phone"></i>  <strong> 3425(24 service)</strong> </button>

                    </div>
                </div>
            </div>


        </div>
    </div>





    <!-- last side-->

    <div class="container container-prefix">
        <div class="row bg-info">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li  class="nav-item active">
                                <button  type="button" class="btn  btn-light"><a class="nav-link mr-5" onclick="personal_info('personal_info')"><h5 style="color:#1975C5; text-shadow: 0px 1px 1px;">Personal Information</h5> </a></button>


                            </li>
                            <li class="nav-item">
                                <button type="button" class="btn  btn-light"><a class="nav-link mr-5"  onclick="personal_info('personal_qualification')"><h5 style="color:#1975C5; text-shadow: 0px 1px 1px;">Personal Qualification</h5> </a></button>


                            </li>
                            <!--
                                <li class="nav-item">
                                    <a class="nav-link mr-5" href="#">Experience</a>
                                </li>
                             -->
                            <li class="nav-item">
                                <button type="button" class="btn  btn-light"><a class="nav-link mr-5" onclick="personal_info('camber_info')"><h5 style="color:#1975C5; text-shadow: 0px 1px 1px;">Chamber Details</h5> </a></button>

                            </li>
                            <!--
                                <li class="nav-item">
                                    <a class="nav-link mr-5" href="#">Publication </a>
                                </li>
                               -->
                            <li class="nav-item">
                                <button type="button" class="btn  btn-light"><a class="nav-link mr-5" onclick="personal_info('service_info')"><h5 style="color:#1975C5; text-shadow: 0px 1px 1px;">Service Information</h5> </a></button>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>
        </div>
    </div>

    <div class="container personal_in">
        <div class="row">
            <div  class="col-12 p-5 ">
               
               <div id="personal_info">
                <h4 class="d-inline"><strong style="color:#1D1F21;">Doctor Name :</strong> </h4>
                    <h5 class="d-inline"> <?php echo $row['name'];?></h5>
                <br><br>

                <h4 class="d-inline"><strong style="color:#1D1F21;">Hospital Name :</strong></h4>
                    <h5 class="d-inline"> <?php echo $row['hospital_name'];?></h5>
                 <br><br>

                <h4 class="d-inline"> <strong style="color:#1D1F21;">Degree :</strong></h4> 
                    <h5 class="d-inline"> <?php echo $row['degree'];?></h5>
                <br><br>

                <h4 class="d-inline"> <strong style="color:#1D1F21;">Experience : </strong> </h4>
                    <h5 class="d-inline">8 years experience .</h5>
                <br><br>
                <h4 class="d-inline"> <strong style="color:#1D1F21;">Fee for New Patient : </strong></h4>
                   <h5 class="d-inline"> 600 Taka Only </h5>
                 <br><br>
                <h4 class="d-inline"> <strong style="color:#1D1F21;">Fee for old Patient : </strong>  </h4>
                    <h5 class="d-inline">  400 Taka Only</h5>
               <br><br>


                <h4 class="d-inline"> <strong style="color:#1D1F21;">Location:</strong></h4>
                      <h5 class="d-inline"> <?php echo $row['doctor_location'];?></h5>
                <br><br>

                <h4 class="d-inline"> <strong style="color:#1D1F21;"> Working Address/Chamber-1 :</strong></h4>
                     <h5 class="d-inline"><?php echo $row['address'];?> </h5>
                <br><br>
                


                <!--                    <h4>Specialty :</h4><br><br>-->
                <!--
                    <h4>Gender: </h4><br><br>
                    <h4>Date of Birth:</h4><br><br>
-->

                <h4><strong style="color:#1D1F21;"> Doctor Short Summery :</strong> <br>
                    <h5 class="text-justify">He is one of the best doctors in Bangladesh. He has been working efficiently for many years for the people of Bangladesh. He has some great achievement, which is why he is a familiar face to everyone, to all. He is a man of very soft nature.He has many love for patients.</h5>
                </h4><br><br>

                <!--
                    <h4><strong style="color:blue;"> Doctor Short Summery :</strong>
                          <?php echo $row['doctor_summery'];?>
                    </h4><br><br>
-->

               


                <?php } ?>
                </div>
                
                 <!--Personal Qualification-->
                    <div id="personal_qualification" style="display:none;">
                    <h4 class="d-inline"> <strong style="color:#1D1F21;">Highest Degree : </strong></h4>
                     <h5 class="d-inline">  M.B.B.S, F.C.P.S, F.R.CP (Edin),FRCSI</h5>
                    <br><br>                                                                                 
                
                
                <h4 class="d-inline"> <strong style="color:#1D1F21;">Name of Institution: </strong></h4>
                     <h5 class="d-inline"> Dhaka Medical College</h5>
                 <br><br>
                
                <h4 class="d-inline"> <strong style="color:#1D1F21;">Passing year: </strong></h4>
                      <h5 class="d-inline"> 2-Jan-1999</h5>
                 <br><br>
                
                <h4 class="d-inline"> <strong style="color:#1D1F21;">Location: </strong></h4>
                   <h5 class="d-inline"> Dhaka</h5>
                 <br><br>
                 <hr>
                 <h4 class="d-inline"> <strong style="color:#1D1F21;">Name Of Degree: </strong></h4>
                   <h5 class="d-inline"> Assistant Registrar in Cardiovascular Surgery</h5>
                 <br><br>
                  <h4 class="d-inline"> <strong style="color:#1D1F21;">Name of Institution: </strong></h4>
                     <h5 class="d-inline"> Institute of cardiovascular Diseases Dhaka</h5>
                 <br><br>
                
                <h4 class="d-inline"> <strong style="color:#1D1F21;">Study Since: </strong></h4>
                      <h5 class="d-inline"> 1982</h5>
                 <br><br>
                 <h4 class="d-inline"> <strong style="color:#1D1F21;">Passing Year: </strong></h4>
                      <h5 class="d-inline"> 1984</h5>
                 <br><br>
                
                <h4 class="d-inline"> <strong style="color:#1D1F21;">Location: </strong></h4>
                   <h5 class="d-inline"> Dhaka</h5>
                 <br><br>
                 <hr>
                 <h4 class="d-inline"> <strong style="color:#1D1F21;">Name Of Degree: </strong></h4>
                   <h5 class="d-inline"> FRCSI</h5>
                 <br><br>
                  <h4 class="d-inline"> <strong style="color:#1D1F21;">Name of Institution: </strong></h4>
                     <h5 class="d-inline"> Royal College of Surgeons in Ireland</h5>
                 <br><br>
                
                <h4 class="d-inline"> <strong style="color:#1D1F21;">Study Since: </strong></h4>
                      <h5 class="d-inline"> 1992</h5>
                 <br><br>
                 <h4 class="d-inline"> <strong style="color:#1D1F21;">Passing Year: </strong></h4>
                      <h5 class="d-inline"> 1993</h5>
                 <br><br>
                
                <h4 class="d-inline"> <strong style="color:#1D1F21;">Location: </strong></h4>
                   <h5 class="d-inline"> 123, Saint Stephens Green, Dublin-2, Republic of Ireland</h5>
                 <br><br>
                </div>
                
                                                
                                 <!--Personal Qualification-->
                <div id="camber_info" style="display:none;">
                <h4 class="d-inline"> <strong style="color:#1D1F21;">Chember Name: </strong></h4>
                    <h5 class="d-inline"> Speciality Chamber Complex BIRDEM Hospital</h5>
                 <br><br> 
                <h4 class="d-inline"> <strong style="color:#1D1F21;">Fee for New Patient: </strong> </h4>
                     <h5 class="d-inline">600 Taka only</h5>
                <br><br>
                <h4 class="d-inline"> <strong style="color:#1D1F21;">Fee for old Patient: </strong></h4> 
                     <h5 class="d-inline">400 Taka only</h5>
                <br><br>
                <h4 class="d-inline"> <strong style="color:#1D1F21;"> Working Address/Chamber-2 :</strong></h4>
                    <h5 class="d-inline"> 122 Kazi Nazrul Islam Avenue, Shahabag, Dhaka 1000.</h5>
                <br><br> 
                <hr>
                <h4 class="d-inline"> <strong style="color:#1D1F21;">Chember Name: </strong></h4>
                    <h5 class="d-inline"> Euro Bangla Heart Hospital</h5>
                 <br><br> 
                <h4 class="d-inline"> <strong style="color:#1D1F21;">Fee for New Patient: </strong> </h4>
                     <h5 class="d-inline">800Taka only</h5>
                <br><br>
                <h4 class="d-inline"> <strong style="color:#1D1F21;">Fee for old Patient: </strong></h4> 
                     <h5 class="d-inline">600 Taka only</h5>
                <br><br>
                <h4 class="d-inline"> <strong style="color:#1D1F21;"> Working Address/Chamber-3 :</strong></h4>
                    <h5 class="d-inline"> 5/7, Block-D Lalmatia Mohammadpur, Dhaka 1207.</h5>
                <br><br> 
                </div>
                               
                                              <!--Experience/Service Information :--> 
                <div id="service_info" style="display:none;">              
                <h4 class="d-inline"> <strong style="color:#1D1F21;">Service at: </strong></h4>
                   
                   <h5 class="d-inline">Hospital</h5> 
                 <br><br> 
                <h4 class="d-inline"> <strong style="color:#1D1F21;">Name of Institution: </strong></h4>
                     <h5 class="d-inline">Dhaka Shishu Hospital (DSH)</h5> 
                 <br><br> 
                <h4 class="d-inline"> <strong style="color:#1D1F21;">Designation: </strong></h4>
                   <h5 class="d-inline"> Professor and Head Department of Nephrology</h5>
                 <br><br> 
                <h4 class="d-inline"> <strong style="color:#1D1F21;">Department: </strong></h4> 
                     <h5 class="d-inline">  Paediatric Nephrology Professor</h5>
                <br><br> 
                <h4 class="d-inline"> <strong style="color:#1D1F21;">Address: </strong></h4> 
                   <h5 class="d-inline"> Shishu Mela, Sher-e Bangla Nagar, DHaka</h5>
                <br><br>
                
                 <h4><strong style="color:#1D1F21;">Advice For Pation :</strong> <br>
                    <h5>
                        1.Don't Drink Sugar Calories. <br> 2.Eat Nuts. <br> 3.Avoid Processed Junk Food (Eat Real Food Instead) <br> 4.Don't Fear Coffee. <br> 5.Eat Fatty Fish.<br> 6.Get Enough Sleep.<br> 7.Take Care of Your Gut Health With Probiotics and Fiber.<br> 8.Drink Some Water, Especially Before Meals.<br>
                    </h5>
                </h4><br>
                </div>
                
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 p-5">

            </div>
        </div>
    </div>




    <!-- footer-->

    <section id="contact_us">
        <div class="container">
            <div class="contact ">
                <div class="row">
                    <div class="col-md-4 text-center text-success ">
                        <p> <i class="fas fa-copyright"></i>2018 E-Health by SDM, Made in Bangladesh.</p>
                        <div class="topnav">
                            <a href="about.php" target="_blank">About Us</a>
                            <a href="#news">Blog</a>
                            <a href="contact.php" target="_blank">Contact Us</a>
                            <a href="privacy.php" target="_blank">Privacy Policy</a>
                        </div>
                    </div>
                    <div class="col-md-4 text-center foterimage text-white">
                        <p>Dowenlode Our Free Mobaile App</p>
                        <a href="https://play.google.com/store/search?q=doctor%20app%20bd">
                    <img src="./image/Google.png" alt="..." class=""> </a>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="footer_icon">
                            <a href="#"><i class="fab fa-facebook-square"></i></a> &nbsp; &nbsp;
                            <a href="#"><i class="fab fa-twitter"></i></a> &nbsp; &nbsp;
                            <a href="#"><i class="fab fa-google-plus-g"></i></a> &nbsp; &nbsp;
                            <a href="#"> <i class="fab fa-linkedin"></i></a> &nbsp; &nbsp;
                            <!--                        <a href="#"> <i class="fab fa-youtube"></i></a> &nbsp; &nbsp;-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

<script>
  function personal_info(id){
      document.getElementById('personal_info').style.display='none';
      document.getElementById('personal_qualification').style.display='none';
      document.getElementById('camber_info').style.display='none';
      document.getElementById('service_info').style.display='none';
      document.getElementById(id).style.display='block';
     
  }

</script>






