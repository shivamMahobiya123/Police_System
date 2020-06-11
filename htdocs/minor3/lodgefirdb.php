<?php
session_start();
if (isset($_POST['submit'])) 
{  //then we include the database connection  


  
  $districtname=$_POST['districtname'];
  $policest=$_POST['policest'];

  $complaintype=$_POST['complaintype'];
  $occr_date=$_POST['occr_date'];
  $details=$_POST['details'];
  $Suspectdetails=$_POST['Suspectdetails'];

  $fname=$_SESSION['fname'];
  $gender=$_POST['gender'];
  $faname=$_POST['faname'];
  $identity=$_POST['identity'];
  $id_no=$_POST['id_no'];
  $caste=$_POST['caste'];
  $per_addr=$_POST['paddress'];
  $contact=$_SESSION['mobile'];
  $email=$_POST['emails'];

  /* 
    $districtname=$_SESSION['districtname'];
    $policest=$_SESSION['policest'];

    $complaintype=$_SESSION['complaintype'];
    $occr_date=$_SESSION['occr_date'];
    $details=$_SESSION['details'];
    $Suspectdetails=$_SESSION['Suspectdetails'];

    $fname=$_SESSION['fname'];
    $gender=$_SESSION['gender'];
    $faname=$_SESSION['faname'];
    $identity=$_SESSION['identity'];
    $id_no=$_SESSION['id_no'];
    $caste=$_SESSION['caste'];
    $per_addr=$_SESSION['paddress'];
    $contact=$_SESSION['contact'];
    $email=$_SESSION['emails'];
 */
   
    if(empty($districtname)|| empty($policest) || empty($complaintype) ||empty($occr_date) ||empty($details)|| empty($Suspectdetails)|| empty($fname)||empty($gender)  ||empty($identity) ||empty($id_no) ||empty($caste) ||empty($per_addr) || empty($email))
        {
          
            echo "Do enter everything,something you missed";
            sleep(5);          
            header("Refresh:5; location:./dashboard.php?login=empty");
        }
    else {
    include_once("dbinc.php");  
    $sql = "INSERT INTO  'forms' ('Idn_no','reg_date','dt_name','pl_st','cm_type','ocr_dt','details','Spt_details'
    ,'fname','gender','Fa_name','caste','identitys','per_adder','contact_no','email') VALUES('$id_no','','$districtname','$policest','$complaintype','$occr_date','$details','$Suspectdetails','$fname','$gender','$faname','$caste','$identity','$per_addr','$contact','$email');";
    if( mysqli_query($conn, $sql))
    { 
      echo "your form has been applied ";
      sleep(5);
     header("refresh:5; location:./lodgefir.php");
    }
    else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
}
else
{
  
  echo "Do login then you reach to desktop";
  //header("refresh:5;location:dashboard.php");
  echo "<script>setTimeout(\"location.href='dashboard.php';\",1500);</script>";
  
}
?>