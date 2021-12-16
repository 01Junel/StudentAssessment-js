<!DOCTYPE html> 
<html lang="en-US">
    <head>
        <!--Meta Tags Starts Here-->
        <meta charset="UTF-8" />
        <meta name="author" content="STUDENT ASSESSMENT" />
        <meta name="description" content="Test Preparation Portal by Vijay Thapa." />
        <meta name="keywords" content="Test Preaparation, Online Portal, Online Exam System" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!--Meta Tags Ends Here-->
        <title>STUDENT ASSESSMENT</title>
        
        <!--COUNT DOWN TIMER STARTS HERE-->
        <script src="assets/js/countdown/jquery.js"></script>
        <script src="assets/js/countdown/jquery.simple.timer.js"></script>
        <script>
          $(function(){
            $('.timer').startTimer();
          });
        </script>
        <!--COUNT DOWN TIMER ENDS HERE-->
        
        <!--ADDING CKEDITOR HERE-->
        <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
        
        <!--CSS File Starts Here-->
        <!-- <link rel="stylesheet" type="text/css" href="<?php echo SITEURL; ?>/assets/css/style.css" /> -->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
        <!--CSS File Ends Here-->
    </head>

    <body>
        <!--Header Starts Here-->
        <header class="header">
            <div class="wrapper clearfix">
                <div class="logo">
                    <img src="images/logo.png" alt="GABAY" title="STUDENT ASSESSMENT" />
                </div>
                
                <div class="head-title">
                    <h1>Student Assessment </h1>
                </div>
            </div>
        </header>
        <!--Header Ends Here-->

<!--Body Starts Here-->
        <div class="main">
            <div class="login">
                <form method="" action="welcome.php">
                    <h2>Log In</h2>
                <!--    <?php 
                        if(isset($_SESSION['invalid']))
                        {
                            echo $_SESSION['invalid'];
                            unset($_SESSION['invalid']);
                        }
                    ?> -->
                    <input type="text" name="username" placeholder="Username" required="true" />
                    <input type="password" name="password" placeholder="Password" required="true" />
                    <input type="submit" name="submit" value="Log In" class="btn-go" /> 
                    <!-- <input type="reset" name="reset" value="Reset" class="btn-exit" /> -->
                </form>
               <!-- <?php 
                    if(isset($_POST['submit']))
                    {
                        //echo "CLicked";
                        //Get Values from forms
                        $username=$obj->sanitize($conn,$_POST['username']);
                        $password=$obj->sanitize($conn,$_POST['password']);
                        $_SESSION['login']="<div class='success'>Login Successful.</div>";
                     header('location:'.SITEURL.'index.php?page=welcome');


                        //Check Login   



                     //   $tbl_name="tbl_student";
                    //    $where="username='$username' && password='$password' && is_active='yes'";
                     //   $query=$obj->select_data($tbl_name,$where);
                    //    $res=$obj->execute_query($conn,$query);
                   //     $count_rows=$obj->num_rows($res);
                    //    if($count_rows>0)
                      //  {
                        //    $_SESSION['student']=$username;
                      //      $_SESSION['login']="<div class='success'>Login Successful.</div>";
                     //       header('location:'.SITEURL.'index.php?page=welcome');
                   //     }
                   //     else
                  //      {
                   //         $_SESSION['invalid']="<div class='error'>Username or Password is invalid.</div>";
                    //        header('location:'.SITEURL.'index.php?page=login');
                    //    }
                   // }
                ?> -->
            </div>
        </div>
        <!--Body Ends Here-->
    
    <!--Footer Starts Here-->
        <footer class="footer">
            <div class="wrapper">
                <p>
                    All Rights Reserved.    
                    By The Developer.
                </p>
            </div>
        </footer>
        <!--Footer Ends Here-->
</html>

    
