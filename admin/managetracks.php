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
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
        <!--CSS File Ends Here-->
    </head>

    <body>
        <!--Header Starts Here-->
        <header class="header">
            <div class="wrapper clearfix">
                <div class="logo">
                    <img src="../images/logo.png" alt="GABAY" title="STUDENT ASSESSMENT" />
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
                    <a href="managetracks.php"><li>Manage Tracks</li></a>
                    <a href="manage-exam.php"><li>Manage Exam</li></a>
                    <a href="student.php"><li>Manage Students</li></a>
                    <a href="../index.php" onclick="return confirm('Are you sure?')"><li>Log Out</li></a>
                    
                </ul>
            </div>
        </nav>
        <!--Navigation Ends Here-->
      
      <!--Body Starts Here-->
        <div class="main">
            <div class="content">
                <div class="report">
             
                        <a href="<?php echo SITEURL; ?>admin/index.php?page=add_question">
                            <button type="button" class="btn-add">Add Track</button>
                        </a>
                        <?php 
                            if(isset($_SESSION['add']))
                            {
                                echo $_SESSION['add'];
                                unset($_SESSION['add']);
                            }
                            if(isset($_SESSION['update']))
                            {
                                echo $_SESSION['update'];
                                unset($_SESSION['update']);
                            }
                            if(isset($_SESSION['delete']))
                            {
                                echo $_SESSION['delete'];
                                unset($_SESSION['delete']);
                            }
                        ?>
                
                    <table>
                        <tr>
                            <th>Track List</th>
                            <th>Actions</th>
                        </tr>
                        
                        <!-- <?php 
                            //Getting Data From Database
                            $tbl_name="tbl_question ORDER BY question_id DESC";
                            $query=$obj->select_data($tbl_name);
                            $res=$obj->execute_query($conn,$query);
                            $count_rows=$obj->num_rows($res);
                            $sn=1;
                            if($count_rows>0)
                            {
                                while($row=$obj->fetch_data($res))
                                {
                                    $question_id=$row['question_id'];
                                    $question=$row['question'];
                                    $answer=$row['answer'];
                                    $faculty=$row['faculty'];
                                    $is_active=$row['is_active'];
                                    ?> -->
                                    <tr> 
                                        <td style="width: 650px;"><!--<?php echo $question; ?>--> Web Dev </td>
                                        <td>
                                            <a href="<?php echo SITEURL; ?>admin/index.php?page=update_question&id=<?php echo $question_id; ?>"><button type="button" class="btn-update">UPDATE</button></a> 
                                            <a href="<?php echo SITEURL; ?>admin/pages/delete.php?id=<?php echo $question_id; ?>&page=questions"><button type="button" class="btn-delete" onclick="return confirm('Are you sure?')">DELETE</button></a>
                                        </td>
                                    </tr>
                                       
                                    

                                    <tr> 
                             <td style="width: 650px;"><!--<?php echo $question; ?>--> Network Admin</td>
                                        <td>
                                            <a href="<?php echo SITEURL; ?>admin/index.php?page=update_question&id=<?php echo $question_id; ?>"><button type="button" class="btn-update">UPDATE</button></a> 
                                            <a href="<?php echo SITEURL; ?>admin/pages/delete.php?id=<?php echo $question_id; ?>&page=questions"><button type="button" class="btn-delete" onclick="return confirm('Are you sure?')">DELETE</button></a>
                                        </td>
                                    </tr>
                        
                        
                                    <tr> 
                                        <td style="width: 650px;"><!--<?php echo $question; ?>--> Database</td>
                                        <td>
                                            <a href="<?php echo SITEURL; ?>admin/index.php?page=update_question&id=<?php echo $question_id; ?>"><button type="button" class="btn-update">UPDATE</button></a> 
                                            <a href="<?php echo SITEURL; ?>admin/pages/delete.php?id=<?php echo $question_id; ?>&page=questions"><button type="button" class="btn-delete" onclick="return confirm('Are you sure?')">DELETE</button></a>
                                        </td>
                                    </tr>

                                    <!--<?php
                                }
                            }
                            else
                            {
                                echo "<tr><td colspan='6'><div class='error'></div></td></tr>";
                            }
                        ?> -->
                        
                    </table>
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
