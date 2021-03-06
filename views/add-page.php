<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
  <?php wp_enqueue_media(); ?>
</head>
<body>
<div class="container">
  <h2>Form</h2>
  <div class="row">
  	<div class="col-md-2"></div>
  	<div class="col-md-8">
	  <form class="form" action="#" id="frmPost">
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="pwd">Name:</label>
	      <div class="col-sm-10">          
	        <input type="text" class="form-control" id="txtName" placeholder="Enter Name" name="txtName" required>
	      </div>
	    </div>
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="email">Email:</label>
	      <div class="col-sm-10">
	        <input type="email" class="form-control" id="txtEmail" placeholder="Enter email" name="txtEmail" required>
	      </div>
	    </div>
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="phone">Phone:</label>
	      <div class="col-sm-10">
	        <input type="tel" class="form-control" id="txtPhone" placeholder="Enter phone" name="txtPhone" required>
	      </div>
	    </div>
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="phone">Phone:</label>
	      <div class="col-sm-10">
	        <input type="button" class="form-control" id="btnImage" name="txtImage" value="Upload Image">
	        <img src="" id="getImage" style="width: 100px;height: 100px;" />
	      </div>
	    </div>
	    <div class="form-group">        
	      <div class="col-sm-offset-2 col-sm-10">
	        <button type="submit" class="btn btn-default">Submit</button>
	      </div>
	    </div>
	  </form>
  	</div>
  	<div class="col-md-2"></div>
  </div>
</div>
</body>
</html>