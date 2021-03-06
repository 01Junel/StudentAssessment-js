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



<!--Body Starts Here-->
        <div class="main">
            <div class="content">
               <!-- 
                User: <span class="heavy"><?php echo $full_name; ?></span>&nbsp;&nbsp;
                Faculty: <span class="heavy"><?php echo $faculty_name; ?></span>&nbsp;&nbsp;
                Start Time: <span class="heavy"><?php echo $_SESSION['strt_time']; ?></span>&nbsp;&nbsp;
                End Time: <span class="heavy"><?php echo $_SESSION['end_time']; ?></span>&nbsp;&nbsp; -->
               <!-- <?php 
                    //Getting Time Difference
                    $startTime=strtotime($_SESSION['end_time']);
                    $currentTime=strtotime(date('h:i:s A'));
                    $timeDifference=$startTime-$currentTime;
                    
                ?> -->
                <!-- <span class="timer" data-seconds-left=<?php echo $timeDifference; ?>></span>
                <form method="" action=""> -->
                    <div class="welcome">
                        <div class="ques">
                      <!--  <?php 
                            
                            if(!isset($_SESSION['all_qns']))
                            {
                                $_SESSION['all_qns']=0;
                            }
                            
                            if(isset($_SESSION['sn']))
                            {
                                $sn=$_SESSION['sn'];
                            }
                            else
                            {
                                $sn=0;
                            }
                            $tbl_name="tbl_question";
                            
                            //Get English Questions Only
                            if($sn<=$total_english)
                            {
                                //New Query FOR ENGLISH
                                $where="is_active='yes' && category='English' && faculty='".$faculty."' && question_id NOT IN (".$_SESSION['all_qns'].")";
                            }
                            else
                            {
                                //New Query FOR MATHS
                                $where="is_active='yes' && category='Math' && faculty='".$faculty."' && question_id NOT IN (".$_SESSION['all_qns'].")";
                            }
                            //Get Maths Questions Only
                            //New Query
                            //$where="is_active='yes' && faculty='".$faculty."' && question_id NOT IN (".$_SESSION['all_qns'].")";
                            //Old Query
                            //$where="is_active='yes'";
                            $limit=1;
                            $query=$obj->select_random_row($tbl_name,$where,$limit);
                            $res=$obj->execute_query($conn,$query);
                            if($res==true)
                            {
                                $count_rows=$obj->num_rows($res);
                                if($count_rows>0)
                                {
                                    $row=$obj->fetch_data($res);
                                    $question_id=$row['question_id'];
                                    //Check if the question is answered or not
                                    
                                    $question=$row['question'];
                                    $first_answer=$row['first_answer'];
                                    $second_answer=$row['second_answer'];
                                    $third_answer=$row['third_answer'];
                                    $fourth_answer=$row['fourth_answer'];
                                    $fifth_answer=$row['fifth_answer'];
                                    $answer=$row['answer'];
                                    $marks=$row['marks'];
                                    $image_name=$row['image_name'];
                                }
                                else
                                {
                                    //echo "Error";
                                    header('location:'.SITEURL.'index.php?page=endSession');
                                }
                            }
                            //Checking ALl Answered Questions
                            
                        ?> -->
                        <form method="" action="result.php">
                            <!--Question Starts Here-->
                           
             
                            
                           <!--<div class="clearfix"></div> -->
                            
                               <!-- <?php echo $question; ?> --> <!--Question 1<br /><br />
                            <input type="radio" name="answer" value="1" /> <span class="radio-ans">Choice 1</span>  <hr />
                            <input type="radio" name="answer" value="2" /> <span class="radio-ans">Choice 2</span> <hr />
                            <input type="radio" name="answer" value="3" /> <span class="radio-ans">Choice 3 </span>  <hr />
                            <input type="radio" name="answer" value="4" /> <span class="radio-ans">Choice 4 <hr /><br />&nbsp;
                            <input type="hidden" name="question_id" value="<?php echo $question_id; ?>" />
                            <input type="hidden" name="right_answer" value="<?php echo $answer; ?>" /> -->
                                 
                                
                            <div class="clearfix"></div>
                            
                               <!-- <?php echo $question; ?> --> Question 1<br /><br />
                            <input type="radio" name="answer" value="1" /> <span class="radio-ans">Choice 1</span>  <hr />
                            <input type="radio" name="answer" value="2" /> <span class="radio-ans">Choice 2</span> <hr />
                            <input type="radio" name="answer" value="3" /> <span class="radio-ans">Choice 3 </span>  <hr />
                            <input type="radio" name="answer" value="4" /> <span class="radio-ans">Choice 4 <hr /><br />&nbsp;
                            <input type="hidden" name="question_id" value="<?php echo $question_id; ?>" />
                            <input type="hidden" name="right_answer" value="<?php echo $answer; ?>" />
                            
                       
                            
                            <div class="clearfix"></div>
                            
                               <!-- <?php echo $question; ?> --> Question 2<br /><br />
                            <input type="radio" name="answer" value="1" /> <span class="radio-ans">Choice 1</span>  <hr />
                            <input type="radio" name="answer" value="2" /> <span class="radio-ans">Choice 2</span> <hr />
                            <input type="radio" name="answer" value="3" /> <span class="radio-ans">Choice 3 </span>  <hr />
                            <input type="radio" name="answer" value="4" /> <span class="radio-ans">Choice 4 <hr /><br />&nbsp;
                            <input type="hidden" name="question_id" value="<?php echo $question_id; ?>" />
                            <input type="hidden" name="right_answer" value="<?php echo $answer; ?>" />
                            
                             <div class="clearfix"></div>
                            
                            
                               <!-- <?php echo $question; ?> --> Question 3<br /><br />
                            <input type="radio" name="answer" value="1" /> <span class="radio-ans">Choice 1</span>  <hr />
                            <input type="radio" name="answer" value="2" /> <span class="radio-ans">Choice 2</span> <hr />
                            <input type="radio" name="answer" value="3" /> <span class="radio-ans">Choice 3 </span>  <hr />
                            <input type="radio" name="answer" value="4" /> <span class="radio-ans">Choice 4 <hr /><br />&nbsp;
                            <input type="hidden" name="question_id" value="<?php echo $question_id; ?>" />
                            <input type="hidden" name="right_answer" value="<?php echo $answer; ?>" />
                            
                            <div class="clearfix"></div>
                            
                               <!-- <?php echo $question; ?> --> Question 4<br /><br />
                            <input type="radio" name="answer" value="1" /> <span class="radio-ans">Choice 1</span>  <hr />
                            <input type="radio" name="answer" value="2" /> <span class="radio-ans">Choice 2</span> <hr />
                            <input type="radio" name="answer" value="3" /> <span class="radio-ans">Choice 3 </span>  <hr />
                            <input type="radio" name="answer" value="4" /> <span class="radio-ans">Choice 4 <hr /><br />&nbsp;
                            <input type="hidden" name="question_id" value="<?php echo $question_id; ?>" />
                            <input type="hidden" name="right_answer" value="<?php echo $answer; ?>" />
                            
                            <div class="clearfix"></div>
                            
                               <!-- <?php echo $question; ?> --> Question 5<br /><br />
                            <input type="radio" name="answer" value="1" /> <span class="radio-ans">Choice 1</span>  <hr />
                            <input type="radio" name="answer" value="2" /> <span class="radio-ans">Choice 2</span> <hr />
                            <input type="radio" name="answer" value="3" /> <span class="radio-ans">Choice 3 </span>  <hr />
                            <input type="radio" name="answer" value="4" /> <span class="radio-ans">Choice 4 <hr /><br />&nbsp;
                            <input type="hidden" name="question_id" value="<?php echo $question_id; ?>" />
                            <input type="hidden" name="right_answer" value="<?php echo $answer; ?>" />
                            
                             
                              
                                
                                
                               
                            <div class="buttons">
                                <input type="submit" name="submit" value="Submit" class="btn-go" />
                                
                                <a href="index..php">
                                    <button type="button" class="btn-exit">&nbsp; Quit &nbsp;</button>
                                </a>
                            </div>
                        </form>
                            
                        </div>
                    </div>
                </form>
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
