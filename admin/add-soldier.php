<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{ 

if(isset($_POST['add']))
{
$sid=$_POST['sid'];
$sname=$_POST['sname'];
$sage=$_POST['sage'];
$ssalary=$_POST['ssalary'];
$srank=$_POST['srank'];
$sql="INSERT INTO  tblsoldier(sid,sname,sage,ssalary,srank) VALUES(:sid,:sname,:sage,:ssalary,:srank)";
$query = $dbh->prepare($sql);
$query->bindParam(':sid',$sid,PDO::PARAM_STR);
$query->bindParam(':sname',$sname,PDO::PARAM_STR);
$query->bindParam(':sage',$sage,PDO::PARAM_STR);
$query->bindParam(':ssalary',$ssalary,PDO::PARAM_STR);
$query->bindParam(':srank',$srank,PDO::PARAM_STR);

$query->execute();
//$lastInsertId = $dbh->lastInsertId();
//if($lastInsertId)
//{
//$_SESSION['msg']=" Listed successfully";
header('location:manage-soldiers.php');
//}
//else 
//{
//$_SESSION['error']="Something went wrong. Please try again";
//header('location:manage-weapons.php');
//}

}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Military Management System | </title>
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
    <div class="content-wra
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Add Soldiers</h4>
                
                            </div>

</div>
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3"">
<div class="panel panel-info">
<div class="panel-heading">
Soldier Info
</div>
<div class="panel-body">
<form role="form" method="post">
<div class="form-group">
<label>SID<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="sid" autocomplete="off"  required />
</div>

<div class="form-group">
<label>Name<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="sname" autocomplete="off"  required />
</div>

<div class="form-group">
<label>Age<span style="color:red;">*</span></label>
<input class="form-control" type="number" name="sage"  required="required" autocomplete="off"  />
</div>

 <div class="form-group">
 <label>Salary<span style="color:red;">*</span></label>
 <input class="form-control" type="number" name="ssalary" autocomplete="off"   required="required" />
 </div>

 <div class="form-group">
 <label>Rank<span style="color:red;">*</span></label>
 <input class="form-control" type="text" name="srank" autocomplete="off"   required="required" />
 </div>

<button type="submit" name="add" class="btn btn-info">Add </button>

                                    </form>
                            </div>
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
