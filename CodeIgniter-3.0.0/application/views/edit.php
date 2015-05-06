<!DOCTYPE html>
<html lang="en">
<head>
	<title>CRUD</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="<?php echo(CSS.'style.css'); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
    
<body>
    <div class="header">
        <div class="container">
            <h2>CRUD with CodeIgniter</h2>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 form-group add-customer">
                <h2>Edit Customer Information:</h2>
                <?php echo form_open("site/update/$r->id",'class="form-horizontal"'); ?>

                
                <div class="form-group">
                    <label for="firstName" class="col-sm-4 control-label">First Name:</label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" name="firstName" id="firstName" value="<?php echo $r->firstName ; ?>"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="lastName" class="col-sm-4 control-label">Last Name:</label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" name="lastName" id="lastName" value="<?php echo $r->lastName ; ?>"/>
                    </div>
                </div>       

                
                <div class="form-group">
                    <label for="address" class="col-sm-4 control-label">Address:</label>                    
                    <div class="col-sm-8">
                        <input class="form-control" type="text" name="address" id="address" value="<?php echo $r->address ; ?>"/>
                    </div>
                </div>  



                <p>
                    <input type="submit" value="Save" class="btn btn-default" />
                </p>

                <?php echo form_close(); ?>
            
            </div>
            
        </div>
        
        <hr />
        
    </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>