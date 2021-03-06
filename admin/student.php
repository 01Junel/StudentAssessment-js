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
        <!--<script>
          $(function(){
            $('.timer').startTimer();
          });
        </script> -->
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
                    <h2>Student Manager</h2>
                    
                   <a href=""><button type="button" class="btn-add">Add Student</button></a> 
                  
                    <table>
                        <tr>
                            <th>S.N.</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Is Active?</th>
                            <th>Actions</th>
                        </tr>
                    <!--Displaying All Data From Database-->
                     <!--
                        <?php 
                        $tbl_name="tbl_student ORDER BY student_id DESC";
                        $query=$obj->select_data($tbl_name);
                        $sn=1;
                        $res=$obj->execute_query($conn,$query);
                        $count_rows=$obj->num_rows($res);
                        if($count_rows>0)
                        {
                            while($row=$obj->fetch_data($res))
                            {
                                $student_id=$row['student_id'];
                                $first_name=$row['first_name'];
                                $last_name=$row['last_name'];
                                $full_name=$first_name.' '.$last_name;
                                $email=$row['email'];
                                $contact=$row['contact'];
                                $faculty=$row['faculty'];
                                $is_active=$row['is_active'];
                                ?>
                                <tr>
                                    <td><?php echo $sn++; ?> </td>
                                    <td><?php echo $full_name; ?></td>
                                    <td><?php echo $email; ?></td>
                                    <td><?php echo $contact; ?></td>
                                    <td>
                                        <?php 
                                            //Get FAculty Name from faculty_id
                                            $tbl_name2="tbl_faculty";
                                            $faculty_name=$obj->get_facultyname($tbl_name2,$faculty,$conn); 
                                            echo $faculty_name;
                                        ?>
                                    </td>
                                    <td><?php echo $is_active; ?></td>
                                    <td>
                                        <a href="<?php echo SITEURL; ?>admin/index.php?page=update_student&student_id=<?php echo $student_id; ?>"><button type="button" class="btn-update">UPDATE</button></a> 
                                        <a href="<?php echo SITEURL; ?>admin/pages/delete.php?id=<?php echo $student_id; ?>&page=students"><button type="button" class="btn-delete" onclick="return confirm('Are you sure?')">DELETE</button></a>
                                    </td>
                                </tr> -->
                              
                        
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
