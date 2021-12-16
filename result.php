<!DOCTYPE html> 
<html lang="en-US">
    <head>
        <!--Meta Tags Starts Here-->
        <meta charset="UTF-8" />
        <meta name="author" content="STUDENT ASSESSMENT" />
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


 <!--Navigation Starts Here-->
        <nav class="menu">
            <div class="wrapper">
                
                <ul>
                    <a href="welcome.php"><li>Home</li></a>
                    <a href="developers.php"><li>Developers</li></a>
                    <a href="contacts.php"><li>Contacts</li></a>
                  <!--  <a href="student.php"><li>Students</li></a>
                    <a href="question.php"><li>Questions</li></a>
                    <a href="result.php"><li>Result</li></a> -->
                    
                    
                    <!--<a href="<?php echo SITEURL; ?>admin/index.php?page=students"><li>Students</li></a>
                    <a href="<?php echo SITEURL; ?>admin/index.php?page=faculties"><li>Faculties</li></a>
                    <a href="<?php echo SITEURL; ?>admin/index.php?page=questions"><li>Questions</li></a>
                    <a href="<?php echo SITEURL; ?>admin/index.php?page=results"><li>Results</li></a>
                    <a href="<?php echo SITEURL; ?>admin/index.php?page=settings"><li>Settings</li></a>
                    <a href="../index.php" onclick="return confirm('Are you sure?')"><li>Log Out</li></a> -->
                </ul>
            </div>
        </nav>
        <!--Navigation Ends Here-->
        
        

<!--Body Starts Here-->
        <div class="main">
            <div class="content">
                <div class="welcome">
                  <!--  <?php 
                        if(isset($_SESSION['time_complete']))
                        {
                            echo $_SESSION['time_complete'];
                        }
                    ?> -->
                     You have successfully completed the test. Thank You.<br />
                    <!-- <?php 
                        $tbl_name='tbl_student';
                        $username=$_SESSION['student'];
                        //Get Student ID from username
                        $userid=$obj->get_userid($tbl_name,$username,$conn);
                        //Getting Summary Result from the database
                        $tbl_name3="tbl_result_summary";
                        $where3="student_id=$userid ORDER BY summary_id DESC LIMIT 1";
                        $query=$obj->select_data($tbl_name3,$where3);
                        $res=$obj->execute_query($conn,$query);
                        $row=$obj->fetch_data($res);
                        $marks=$row['marks'];
                        $added_date=date('Y-m-d');
                        
                        //Calculate Marks for different faculties
                        $obtainedMarks=$_SESSION['totalScore'];
                        $full_marks=$_SESSION['full_marks'];
                        $obtainedPercent=($obtainedMarks/$full_marks)*100;
                        //Get Student ID
                        //Get Faculty ID from Student ID then Show full marks based on the faculty and obtained percentage
                        if($_SESSION['facultyName']=='GRE')
                        {
                            $marksShown=260+round($obtainedPercent*0.8);
                        }
                        elseif($_SESSION['facultyName']=='GMAT')
                        {
                            $marksShown=200+round($obtainedPercent*6);
                        }
                        else
                        {
                            $marksShown=$obtainedMarks;
                        }
                        
                        $_SESSION['USERID']= $userid;
                        //Round Off Marks
                        $lastDigit=substr($marksShown,-1);
                        if($lastDigit<5)
                        {
                            $realMark=$marksShown-$lastDigit;
                        }
                        else
                        {
                            $digitToAdd=10-$lastDigit;
                            $realMark=$marksShown+$digitToAdd;
                        }
                     ?> -->
                     You got <h2>100%</h2>
                     
                     <a href="welcome.php">
                        <button type="button" class="btn-exit">
                            Return Home
                        </button>
                     </a>
                    
                   <!-- <a href="<?php echo SITEURL; ?>index.php?page=logout">
                        <button type="button" class="btn-exit">&nbsp; Log Out &nbsp;</button>
                    </a> -->
                </div>
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
