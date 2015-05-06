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
            <div class="col-md-4 form-group add-customer">
                <h2>Add Customer:</h2>
                <?php echo form_open('site/create', 'class="form-horizontal"'); ?>

                <div class="form-group">
                    <label for="firstName" class="col-sm-4 control-label">First Name:</label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" name="firstName" id="firstName" placeholder="First Name"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="lastName" class="col-sm-4 control-label">Last Name:</label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" name="lastName" id="lastName" placeholder="Last Name"/>
                    </div>
                </div>       

                
                <div class="form-group">
                    <label for="address" class="col-sm-4 control-label">Address:</label>                    
                    <div class="col-sm-8">
                        <input class="form-control" type="text" name="address" id="address" placeholder="Address"/>
                    </div>
                </div>  


                <p>
                    <input type="submit" value="Submit" class="btn btn-default"/>
                </p>

                <?php echo form_close(); ?>
            
            </div>
            <div class="col-md-6 customers">
                <h2>Customers</h2>
                <hr>
                <?php if(isset($records)) : foreach($records as $row) :  ?>
                <div class="row">
                    <div class="col-md-6">
                        <h2><?php echo $row->firstName ; ?> <?php echo $row->lastName; ?></h2>
                        <p><?php echo $row->address; ?></p>
                    
                    </div>
                    <div class="record col-md-6">
                        
                       <?php echo anchor("site/edit/$row->id", "<i></i>", 'class="glyphicon glyphicon-pencil"') ; ?>     
                       <?php echo anchor("site/delete/$row->id", "<i></i>", 'class="glyphicon glyphicon-trash"') ; ?>    
                    </div>
                </div>
                
                
                <hr>
                <?php endforeach; ?>

                <?php else : ?>
                <h2>No records found.</h2>
                <?php endif; ?>                
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