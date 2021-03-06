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
                    <a href="index.php"><li>Home</li></a>
                    <a href="developers.php"><li>Developers</li></a>
                    <a href="contacts.php"><li>Contacts</li></a>
                    <a href="student.php"><li>Students</li></a>
                    <a href="question.php"><li>Questions</li></a>
                    <a href="result.php"><li>Result</li></a>
                    
                    
                    <!--<a href="<?php echo SITEURL; ?>admin/index.php?page=students"><li>Students</li></a>
                    <a href="<?php echo SITEURL; ?>admin/index.php?page=faculties"><li>Faculties</li></a>
                    <a href="<?php echo SITEURL; ?>admin/index.php?page=questions"><li>Questions</li></a>
                    <a href="<?php echo SITEURL; ?>admin/index.php?page=results"><li>Results</li></a>
                    <a href="<?php echo SITEURL; ?>admin/index.php?page=settings"><li>Settings</li></a>-->
                    <a href="../index.php" onclick="return confirm('Are you sure?')"><li>Log Out</li></a>
                </ul>
            </div>
        </nav>
        <!--Navigation Ends Here-->



<!--Body Starts Here-->
        <div class="main">
            <div class="content">
                <div class="report">
                    <h2>Result Manager</h2>
                    <!--<button type="button" class="btn-add">Add User</button>-->
                  <!--  <?php 
                        if(isset($_SESSION['delete']))
                        {
                            echo $_SESSION['delete'];
                            unset($_SESSION['delete']);
                        }
                    ?> -->
                    <table>
                        <tr>
                            <th>S.N.</th>
                            <th>Full Name</th>
                            <th>Date</th>
                            <th>Mark</th>
                            <th>Faculty</th>
                            <th>Actions</th>
                        </tr>
                        
                       <!-- <?php 
                            $tbl_name="tbl_result_summary ORDER BY added_date DESC";
                            $query=$obj->select_data($tbl_name);
                            $res=$obj->execute_query($conn,$query);
                            $count_rows=$obj->num_rows($res);
                            $sn=1;
                            if($count_rows>0)
                            {
                                while($row=$obj->fetch_data($res))
                                {
                                    $summary_id=$row['summary_id'];
                                    $student_id=$row['student_id'];
                                    $marks=$row['marks'];
                                    $added_date=$row['added_date'];
                                    ?> -->
                                    <tr>
                                        <td><!--<?php echo $sn++; ?> --> </td>
                                        <td>
                                            <!--<?php 
                                                $tbl_name="tbl_student";
                                                $full_name=$obj->get_fullname($tbl_name,$student_id,$conn);
                                                echo $full_name;
                                            ?>-->
                                        </td>
                                        <td><!--<?php echo $added_date; ?>--></td>
                                        <td><!--<?php echo $marks; ?> --></td>
                                        <td>
                                           <!-- <?php 
                                                //Get FAculty from STudent ID
                                                $tbl="tbl_student";
                                                $tbl2="tbl_faculty";
                                                $faculty=$obj->get_faculty($tbl,$student_id,$conn);
                                                echo $faculty_name=$obj->get_facultyname($tbl2,$faculty,$conn);
                                            ?>-->
                                        </td>
                                        <td>
                                           <!-- <a href="<?php echo SITEURL; ?>admin/index.php?page=view_result&student_id=<?php echo $student_id; ?>&added_date=<?php echo $added_date; ?>"><button type="button" class="btn-update">VIEW</button></a> 
                                            <a href="<?php echo SITEURL; ?>admin/pages/delete_result.php?summary_id=<?php echo $summary_id; ?>&student_id=<?php echo $student_id; ?>&added_date=<?php echo $added_date; ?>"><button type="button" class="btn-delete">DELETE</button></a>-->
                                        </td>
                                    </tr> 
                                    
                              
                                <tr><td colspan='7'><span class='error'>No Results Found Yet.</span></td></tr>
                            
                        
                        
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
