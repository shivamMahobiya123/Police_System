<?php
session_start();
if (isset($_POST['submit'])) 
{  //then we include the database connection  
    include_once("dbinc.php");
    
    $mobile=$_POST['mobile'];
    $password=$_POST['pwd'];
        if(empty($mobile)|| empty($password))
        {
            header("location:./login.php?login=empty");
        }
        // } elseif {
        //     if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        //         header("location:../index.html?login=invalidemail");
        //     } else{
        //          echo ("Login to the user!");
        //       }
        //        }
        else{
              if(preg_match("/^[0-9]{10}+$/", $mobile)===false)
              {
                 header("location:./login.php?login=invalidmobile");
                } 
                else
                {
                
                $sql = "SELECT umobile , upassword FROM user_sign_table where umobile='$mobile' && upassword='$password'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        $dbname= $row["userName"];
                        $dbmobile= $row["umobile"];
                        $dbpassword= $row["upassword"];
                        if($dbmobile==$mobile && $dbpassword==$password)
                        {
                            $_SESSION['uname']==$dbname;
                            $_SESSION['mobile']==$dbmobile;
                            header("location:./dashboard.php");  
                        }
                    }
                  } else {
                    echo "Incorrect Password";
                  } 
  
               }
            }
} else
        {
            header("location:./login.html?sign=error");
        }
?>