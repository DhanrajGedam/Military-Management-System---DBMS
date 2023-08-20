<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:index.php');
}
else{?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Military Management System | Admin Dash Board</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
      <!------MENU SECTION START-->
<?php include('includes/header.php');?>
<!-- MENU SECTION END-->
<div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">ADMIN DASHBOARD</h4>
                
                            </div>

        </div>
             
             <div class="row">



            
                 <div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-info back-widget-set text-center">
                            <i class="fa fa-users fa-5x"></i>
<?php 
$sid=$_SESSION['stdid'];
$sql1 ="SELECT sid from tblsoldier";
$query1 = $dbh -> prepare($sql1);
$query1->bindParam(':sid',$sid,PDO::PARAM_STR);
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$soldiers=$query1->rowCount();
?>

                            <h3><?php echo htmlentities($soldiers);?> </h3>
                            Total Soldiers
                        </div>
                    </div>




                    <div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-info back-widget-set text-center">
                            <i class="fa fa-male fa-5x"></i>
<?php 
$eid=$_SESSION['stdid'];
$sql2 ="SELECT eid from tblemployees";
$query2 = $dbh -> prepare($sql2);
$query2->bindParam(':eid',$eid,PDO::PARAM_STR);
$query2->execute();
$results2=$query2->fetchAll(PDO::FETCH_OBJ);
$employees=$query2->rowCount();
?>

                            <h3><?php echo htmlentities($employees);?> </h3>
                            Total Employees
                        </div>
                    </div>



                    <div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-info back-widget-set text-center">
                            <i class="fa fa-wrench fa-5x"></i>
<?php 
$wid=$_SESSION['stdid'];
$sql3 ="SELECT wid from tblweapons";
$query3 = $dbh -> prepare($sql3);
$query3->bindParam(':wid',$wid,PDO::PARAM_STR);
$query3->execute();
$results3=$query3->fetchAll(PDO::FETCH_OBJ);
$weapon=$query3->rowCount();
?>

                            <h3><?php echo htmlentities($weapon);?> </h3>
                            Total Weapons
                        </div>
                    </div>
             


                    <div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-info back-widget-set text-center">
                            <i class="fa fa-truck fa-5x"></i>
<?php 
$tid=$_SESSION['stdid'];
$sql4 ="SELECT tid from tbltransport";
$query4 = $dbh -> prepare($sql4);
$query4->bindParam(':tid',$tid,PDO::PARAM_STR);
$query4->execute();
$results4=$query4->fetchAll(PDO::FETCH_OBJ);
$transport=$query4->rowCount();
?>

                            <h3><?php echo htmlentities($transport);?> </h3>
                            Total Transportation
                        </div>
                    </div>




                    <div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-info back-widget-set text-center">
                            <i class="fa fa-user-md fa-5x"></i>
<?php 
$did=$_SESSION['stdid'];
$sql5 ="SELECT did from tbldoctor";
$query5 = $dbh -> prepare($sql5);
$query5->bindParam(':did',$did,PDO::PARAM_STR);
$query5->execute();
$results5=$query5->fetchAll(PDO::FETCH_OBJ);
$doctor=$query5->rowCount();
?>

                            <h3><?php echo htmlentities($doctor);?> </h3>
                            Total Doctors
                        </div>
                    </div>
             
             
               






        </div>


            
    </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
<?php include('includes/footer.php');?>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
<?php } ?>
