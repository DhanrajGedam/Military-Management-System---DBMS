<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{ 

if(isset($_POST['create']))
{
    $did=$_POST['did'];


$sid=$_POST['sid'];
$inj=$_POST['inj'];
$tmt=$_POST['tmt'];
$sql="INSERT INTO  treatment VALUES(:did,:sid,:inj,:tmt)";
$query = $dbh->prepare($sql);
$query->bindParam(':did',$did,PDO::PARAM_STR);
$query->bindParam(':sid',$sid,PDO::PARAM_STR);
$query->bindParam(':inj',$inj,PDO::PARAM_STR);

$query->bindParam(':tmt',$tmt,PDO::PARAM_STR);


$query->execute();
//$lastInsertId = $dbh->lastInsertId();
//if($lastInsertId)
//{
// $_SESSION['msg']=" ";
header('location:manage-doctors1.php');
//}
//else 
//{
//$_SESSION['error']="Something went wrong. Please try again";
//header('location:manage-categories.php');
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
    <title> | Soldier Treatment</title>
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
<?php include('includes/header1.php');?>
<!-- MENU SECTION END-->
    <div class="content-wra
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Soldiers Details</h4>
                
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
<label>Doctor Id</label>
<?php
$id=htmlspecialchars($_SESSION['did'],ENT_QUOTES);
?>
<input class="form-control" type="text" name="did"  value='<?php print $id; ?>' autocomplete="off" required />
</div>


<div class="form-group">
<label>Soldier Id</label>
<input class="form-control" type="text" name="sid" autocomplete="off" required />
</div>
<div class="form-group">
<label>Injured Type</label>
<input class="form-control" type="text" name="inj" autocomplete="off" required />
</div>

<div class="form-group">
<label>Treatment</label>
<input class="form-control" type="text" name="tmt" autocomplete="off" required />
</div>


<button type="submit" name="create" class="btn btn-info">Create </button>

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
