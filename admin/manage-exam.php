<!doctype html>
<html lang="en">
 
<!--
<?php 
  include("../../conn.php");
  include("query/countData.php");
 ?> -->


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Student Assessment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
     
    <!-- MAIN CSS NIYA -->
    <link href="css/main.css" rel="stylesheet">
    <link href="css/sweetalert.css" rel="stylesheet">
    <link href="css/facebox.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
 
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

            

<!--
<?php 
session_start();

if(!isset($_SESSION['admin']['adminnakalogin']) == true) header("location:index.php");


 ?>
<?php include("../../conn.php"); ?>
<!-- MAO NI ANG HEADER -->
<!--<?php include("includes/header.php"); ?>   -->   

<!-- UI THEME DIRI -->
<!-- <?php include("includes/ui-theme.php"); ?> -->

<div class="app-main">
<!-- sidebar diri  -->
<!--<-?php include("includes/sidebar.php"); ?>


<?php 
   $exId = $_GET['id'];

   $selExam = $conn->query("SELECT * FROM exam_tbl WHERE ex_id='$exId' ");
   $selExamRow = $selExam->fetch(PDO::FETCH_ASSOC);

   $courseId = $selExamRow['cou_id'];
   $selCourse = $conn->query("SELECT cou_name as courseName FROM course_tbl WHERE cou_id='$courseId' ")->fetch(PDO::FETCH_ASSOC);
 ?> -->


<div class="app-main__outer">
        <div class="app-main__inner">
          <!--  <div class="app-page-title">
                <div class="page-title-wrapper">
                     <div class="page-title-heading">
                        <div> MANAGE EXAM
                            <div class="page-title-subheading">
                              Add Question for <?php echo $selExamRow['ex_title']; ?>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>        
            
            <div class="col-md-12">
            <div id="refreshData">
            <div class="row">
                  <div class="col-md-6">
                      <div class="main-card mb-3 card">
                          <div class="card-header">
                            <i class="header-icon lnr-license icon-gradient bg-plum-plate"> </i>Exam Information
                          </div>
                          <div class="card-body">
                           <form method="post" id="updateExamFrm">
                               <div class="form-group">
                                <label>Track</label>
                                <select class="form-control" name="courseId" required="">
                                  <option value="BSIT">Web Dev</option>
                                 <!-- <?php 
                                    $selAllCourse = $conn->query("SELECT * FROM course_tbl ORDER BY cou_id DESC");
                                    while ($selAllCourseRow = $selAllCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                                      <option value="BSIT'>BSIT</option>
                                    <?php }
                                   ?> -->
                                </select>
                              </div>

                              <div class="form-group">
                                <label>Exam Title</label>
                                <input type="hidden" name="examId" value="Web App Exam">
                                <input type="" name="examTitle" class="form-control" required="" value="Web App Exam">
                              </div>  

                              <div class="form-group">
                                <label>Exam Description</label>
                                <input type="" name="examDesc" class="form-control" required="" value="Read Every Questions CAREFULLY. GOODLUCK!!!">
                              </div>  

                              <div class="form-group">
                                <label>Exam Time limit</label>
                                <select class="form-control" name="examLimit" required="">
                                  <option value="10">10 Minutes</option> 
                                  <option value="20">20 Minutes</option> 
                                  <option value="30">30 Minutes</option> 
                                  <option value="40">40 Minutes</option> 
                                  <option value="50">50 Minutes</option> 
                                  <option value="60">60 Minutes</option> 
                                </select>
                              </div>

                              <div class="form-group">
                                <label>Display limit</label>
                                <input type="number" name="examQuestDipLimit" class="form-control" value="5"> 
                              </div>

                              <div class="form-group" align="right">
                                <button type="submit" class="btn btn-primary btn-lg">Update</button>
                              </div> 
                           </form>                           
                          </div>
                      </div>
                   
                  </div>
                  <div class="col-md-6">
                   
                   
                   
                     <div class="main-card mb-3 card">
                          <div class="card-header"><i class="header-icon lnr-license icon-gradient bg-plum-plate"> </i>Exam Question's 
                            <span class="badge badge-pill badge-primary ml-2">
                              <!--<?php echo $selQuest->rowCount(); ?> --! --> 7
                            </span>
                             <div class="btn-actions-pane-right">
                                <button class="btn btn-sm btn-primary " data-toggle="modal" data-target="#modalForAddQuestion">Add Question</button>
                              </div>
                          </div>
                          <div class="card-body" >
                            <div class="scroll-area-sm" style="min-height: 400px;">
                               <div class="scrollbar-container">

                          <!--  <?php 
                               
                               if($selQuest->rowCount() > 0)
                               {  ?>-->
                                 <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                                        <thead>
                                        <tr>
                                            <th class="text-left pl-1">Course Name</th>
                                            <th class="text-center" width="20%">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <!---->
                                                <tr>
                                                        <td >
                                                            <b>Question 1 </b><br>
                                                           <!-- <?php
                                                              // Choice A
                                                              if($selQuestionRow['exam_ch1'] == $selQuestionRow['exam_answer'])
                                                              { ?> -->
                                                                <span class="pl-4 text-success">A - Choice A</span><br>
                                                            <!--?php }
                                                              else
                                                              { ?> 
                                                                <span class="pl-4">A - Choice A</span><br>
                                                              <?php } 

                                                              // Choice B
                                                              if($selQuestionRow['exam_ch2'] == $selQuestionRow['exam_answer'])
                                                              { ?> 
                                                                <span class="pl-4 text-success">B - Choice B</span><br>
                                                             <?php }
                                                              else
                                                              { ?> -->
                                                                <span class="pl-4">B - Choice B </span><br>
                                                              <!--<?php }

                                                              // Choice C
                                                              if($selQuestionRow['exam_ch3'] == $selQuestionRow['exam_answer'])
                                                              { ?> 
                                                                <span class="pl-4 text-success">C - Choice C</span><br>
                                                              <?php }
                                                              else
                                                              { ?> -->
                                                                <span class="pl-4">C - Choice C</span><br>
                                                             <!-- <?php } 

                                                              // Choice D
                                                              if($selQuestionRow['exam_ch4'] == $selQuestionRow['exam_answer'])
                                                              { ?>
                                                                <span class="pl-4 text-success">D - Choice D</span><br>
                                                              <?php }
                                                              else
                                                              { ?>-->
                                                                <span class="pl-4">D - Choice D</span><br>
                                                             <!-- <?php }

                                                             ?> -->
                                                            
                                                        </td>
                                                        <td class="text-center">
                                                         <a rel="facebox" href="facebox_modal/updateQuestion.php?id=<?php echo $selQuestionRow['eqt_id']; ?>" class="btn btn-sm btn-primary">Update</a>
                                                         <button type="button" id="deleteQuestion" data-id="5"  class="btn btn-danger btn-sm">Delete</button>
                                                        </td>
                                                    </tr>
                                         
                                               
                                                <tr>
                                                        <td >
                                                            <b>Question 2 </b><br>
                                                           <!-- <?php
                                                              // Choice A
                                                              if($selQuestionRow['exam_ch1'] == $selQuestionRow['exam_answer'])
                                                              { ?> -->
                                                                <span class="pl-4 text-success">A - Choice A</span><br>
                                                            <!--?php }
                                                              else
                                                              { ?> 
                                                                <span class="pl-4">A - Choice A</span><br>
                                                              <?php } 
                                                              // Choice B
                                                              if($selQuestionRow['exam_ch2'] == $selQuestionRow['exam_answer'])
                                                              { ?> 
                                                                <span class="pl-4 text-success">B - Choice B</span><br>
                                                            <!-- <?php }
                                                              else
                                                              { ?> -->
                                                                <span class="pl-4">B - Choice B </span><br>
                                                              <!--<?php }
                                                              // Choice C
                                                              if($selQuestionRow['exam_ch3'] == $selQuestionRow['exam_answer'])
                                                              { ?> 
                                                                <span class="pl-4 text-success">C - Choice C</span><br>
                                                              <?php }
                                                              else
                                                              { ?> -->
                                                                <span class="pl-4">C - Choice C</span><br>
                                                             <!-- <?php } 
                                                              // Choice D
                                                              if($selQuestionRow['exam_ch4'] == $selQuestionRow['exam_answer'])
                                                              { ?>
                                                                <span class="pl-4 text-success">D - Choice D</span><br>
                                                              <?php }
                                                              else
                                                              { ?>-->
                                                                <span class="pl-4">D - Choice D</span><br>
                                                             <!-- <?php }
                                                             ?> -->
                                                            
                                                        </td>
                                                        <td class="text-center">
                                                         <a rel="facebox" href="facebox_modal/updateQuestion.php?id=<?php echo $selQuestionRow['eqt_id']; ?>" class="btn btn-sm btn-primary">Update</a>
                                                         <button type="button" id="deleteQuestion" data-id="5"  class="btn btn-danger btn-sm">Delete</button>
                                                        </td>
                                                    </tr>
                                         
                                         
                                         
                                                   
                                                <tr>
                                                        <td >
                                                            <b>Question 3 </b><br>
                                                           <!-- <?php
                                                              // Choice A
                                                              if($selQuestionRow['exam_ch1'] == $selQuestionRow['exam_answer'])
                                                              { ?> -->
                                                                <span class="pl-4 text-success">A - Choice A</span><br>
                                                            <!--?php }
                                                              else
                                                              { ?> 
                                                                <span class="pl-4">A - Choice A</span><br>
                                                              <?php } 
                                                              // Choice B
                                                              if($selQuestionRow['exam_ch2'] == $selQuestionRow['exam_answer'])
                                                              { ?> 
                                                                <span class="pl-4 text-success">B - Choice B</span><br>
                                                            <!-- <?php }
                                                              else
                                                              { ?> -->
                                                                <span class="pl-4">B - Choice B </span><br>
                                                              <!--<?php }
                                                              // Choice C
                                                              if($selQuestionRow['exam_ch3'] == $selQuestionRow['exam_answer'])
                                                              { ?> 
                                                                <span class="pl-4 text-success">C - Choice C</span><br>
                                                              <?php }
                                                              else
                                                              { ?> -->
                                                                <span class="pl-4">C - Choice C</span><br>
                                                             <!-- <?php } 
                                                              // Choice D
                                                              if($selQuestionRow['exam_ch4'] == $selQuestionRow['exam_answer'])
                                                              { ?>
                                                                <span class="pl-4 text-success">D - Choice D</span><br>
                                                              <?php }
                                                              else
                                                              { ?>-->
                                                                <span class="pl-4">D - Choice D</span><br>
                                                             <!-- <?php }
                                                             ?> -->
                                                            
                                                        </td>
                                                        <td class="text-center">
                                                         <a rel="facebox" href="facebox_modal/updateQuestion.php?id=<?php echo $selQuestionRow['eqt_id']; ?>" class="btn btn-sm btn-primary">Update</a>
                                                         <button type="button" id="deleteQuestion" data-id="5"  class="btn btn-danger btn-sm">Delete</button>
                                                        </td>
                                                    </tr>
                                         
                                             <!--  <?php }
                                            }
                                            else
                                            { ?> 
                                                <tr>
                                                  <td colspan="2">
                                                    <h3 class="p-3">No Course Found</h3>
                                                  </td>
                                                </tr>
                                            <?php }
                                           ?> -->
                                        </tbody>
                                    </table>
                                </div>
                             <!-- <?php }
                               else
                               { ?>
                                  <h4 class="text-primary">No question found...</h4>
                                 <?php
                               }
                             ?> -->
                               </div>
                            </div>


                          </div>
                        
                      </div>
                  </div>
              </div>  
            </div> 
            </div>
               
            </div>

      </div>

        
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
