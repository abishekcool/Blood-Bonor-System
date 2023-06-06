<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BDMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../icofont/icofont.min.css">

</head>

<body>

    <div id="wrapper">

    <?php include 'includes/donornav.php'?>

        <div id="page-wrapper">
            <div class="row">
                <div class=".col-lg-12">
                    <h1 class="page-header">How can I donate my Blood ? </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Please fill up the form below:
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="useraddedblood.php" method="POST">
                                    
                                            <div class="form-group">
                                              <input type = "checkbox"> <b> have hemoglobin above 12 gm/dl </b> <br>
                                              <input type = "checkbox"> <b> have blood pressure 100-130 / 70-90 mmHg <b> <br>
                                              <input type = "checkbox"> <b> not to be pregnant <br>
                                              <input type = "checkbox"> <b> not in the time of menstruation <br>
                                              <input type = "checkbox"> <b> not to be  breastfeeding woman  <br>
                                              <input type = "checkbox"> <b> not to had a medical surgery for 2 years <b> <br>
                                              <input type = "checkbox"> <b> not having recent use of strong medicines <b> <br>
                                              <input type = "checkbox"> <b> had donate blood  since 90 days ago <b> <br>


                                              <input type="checkbox" id="accept" name="accept" value="yes">  
                                            <label for="accept"> be 18 to 60 years old </label>
                                        </div class>

                                        <div class="form-group">
                                            <label>Enter Full Name</label>
                                            <input class="form-control" placeholder="Please mention your name" type="text" name="name" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Gender </label>
                                            <input class="form-control" placeholder="M for Male & F for Female" type="text" name="gender" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter D.O.B</label>
                                            <input class="form-control" type="date" name="dob" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Weight </label>
                                            <input class="form-control" type="number" placeholder="Must be more that 55 kg" name="weight" required>
                                        </div>

                                        <div class="form-group">
                                        <label>Enter Blood Group</label>
                                        <input class="form-control" type="text" placeholder="A+, A-, AB+, AB-, B+, B-, O-, O+" name="bloodgroup" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Address</label>
                                            <input class="form-control" type="text" placeholder="Full Address" name="address" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Contact Number</label>
                                            <input class="form-control" type="number" name="contact" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Blood Quantity</label>
                                            <input class="form-control" type="number" name="bloodqty" required>
                                        </div>

                                        <div class="form-group">
                                                <label>Collection Date</label>
                                                <input class="form-control" type="date" name="collection" required>
                                            </div>
                                       
                                            <div class="form-group">
                                                <label>Previous hemoglobin </label>
                                                <input class="form-control" type="text" placeholder=" For male=12-16 and for female = 11 to 17 " name="hemoglobin" required>
                                            </div>
                                           




                                
                                        <button type="submit"  class="btn btn-success">Submit</button>
                
                                    </form>
                                </div>
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

<footer>
        <p>&copy; <?php echo date("Y"); ?>: Developed By SWSC </p>
    </footer>
	
	<style>
	footer{
   background-color: #424558;
    bottom: 0;
    left: 0;
    right: 0;
    height: 35px;
    text-align: center;
    color: #CCC;
}

footer p {
    padding: 10.5px;
    margin: 0px;
    line-height: 100%;
}
	</style>

</html>
