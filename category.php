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
                    <a href="../index.html" onclick="return confirm('Are you sure?')"><li>Log Out</li></a> -->
                </ul>
            </div>
        </nav>
        <!--Navigation Ends Here-->
      
      <!--Body Starts Here-->
        <div class="main">
            <div class="content">
                <div class="welcome">
                    <?php 
                        if(isset($_SESSION['login']))
                        {
                            echo $_SESSION['login'];
                            unset($_SESSION['login']);
                        }
                        //Setting Time Limit Here
                        if(!isset($_SESSION['start_time']))
                        {
                            //$_SESSION['start_time']=
                        }
                    ?>
           Hello <span class="heavy"><?php echo $_SESSION['student']; ?></span>. Please Choose a Category.<br />
                    
                    <div class="success">
                        
                            <div class="logo">
                    <img src="images/webdev.png" alt="GABAY" title="STUDENT ASSESSMENT" />
                </div>
                            <a href="question.html">
                        <button type="button" class="btn-go">Web Developer</button>
                    </a>
                        
                    </div>
                  
                   <div class="success">
                       <div class="logo">
                    <img src="images/networking.png" alt="GABAY" title="STUDENT ASSESSMENT" />
                </div>
                     <a href="question.html">
                        <button type="button" class="btn-go">Networkingt</button>
                    </a>
                        
                    </div>
                  
                    <div class="success">
                        
                        <div class="logo">
                    <img src="images/DataAdmin.png" alt="GABAY" title="STUDENT ASSESSMENT" />
                </div>
                      <a href="question.html">
                        <button type="button" class="btn-go">Data Administrator</button>
                    </a>
                    </div>
                    
                    
                    <a href="index.php">
                        <button type="button" class="btn-exit">&nbsp; Quit &nbsp;</button>
                    </a>
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
