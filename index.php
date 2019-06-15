<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Home Automation</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link  href="bootstrap-datetimepicker.min.css" rel="stylesheet">
	<style type="text/css">
	h1{
		text-align: center;
	}
       </style>

  <script src = "interval.js"></script>

  </head>
  <body>
  <h1>Home Automation QUT</h1>

  <div class="container">

    	<div class="jumbotron">
              <h1>Welcome Home!</h1>
              <p>This is a website that will allow you to control the appliances of your house according to your energy schedule.</p>       
       </div>  
      
  <?php
	if(isset($_SESSION['msg'])){
	echo $_SESSION['msg'];
	unset ($_SESSION['msg']);
	}
  ?>   
  <form method ="post" action= "process.php"> 
	<div class="form-group">
            <h3> Washing machine </h3></br>
		
            <label for ="inputdata" class = "col-sm-1 control-label"> Start:</label>
             <div class="col-sm-3">
                <div class = "input-group date form_datetime" data-date-format = "dd/mm/yyyy hh:ii:ss">
                    <input type="text" class="form-control" name = "startDatentime" required />
                     <span class="input-group-addon">
                     <span class="glyphicon glyphicon-th"></span>
                     </span>
                </div>
            </div>
            <label for ="inputdata" class = "col-sm-1 control-label"> Finish:</label>
             <div class="col-sm-3">
                <div class = "input-group date form_datetime" data-date-format = "dd/mm/yyyy hh:ii:ss">
                    <input type="text" class="form-control" name = "finishDatentime" required />
                     <span class="input-group-addon">
                     <span class="glyphicon glyphicon-th"></span>
                     </span> 
		     
                </div>
            </div>
		
		<input type="Submit" class="btn btn-success">
       </div>
  </form>

  

  <form method ="post" action= "process1.php"> 
	<div class="form-group2">
		<h3> Air conditioner </h3></br>
            	<label for ="inputdata" class = "col-sm-1 control-label"> Start:</label>
             	<div class="col-sm-3">
                  <div class = "input-group date form_datetime" data-date-format = "dd/mm/yyyy hh:ii:ss">
                    	<input type="text" class="form-control" name = "startDatentime2" required />
                     	<span class="input-group-addon">
                     	<span class="glyphicon glyphicon-th"></span>
                     	</span>
                </div>
            </div>
            <label for ="inputdata" class = "col-sm-1 control-label"> Finish:</label>
             <div class="col-sm-3">
                <div class = "input-group date form_datetime" data-date-format = "dd/mm/yyyy hh:ii:ss">
                    <input type="text" class="form-control" name = "finishDatentime2" required />
                     <span class="input-group-addon">
                     <span class="glyphicon glyphicon-th"></span>
                     </span> 
                </div>
            </div>
		<label id="dateNOW" name= "dateNOW"></label>
            	<input type="Submit" class="btn btn-success">
       </div>

  </form> 

      

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       <script src="bootstrap-datetimepicker.min.js"></script>

       <script type="text/javascript">
          $('.form_datetime').datetimepicker({
 
            autoclose: 1,
            startDate: '+0d'
          });

       </script>

  </body>

</html>
