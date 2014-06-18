<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>View</title>
    <link type="text/css" rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
    <link type="test/css" rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"/>
</head>
<body>
    <div class="jumbotron">
    <div class="container">
    	<div class="row">
    		<div class="col-md-5 col-md-offset-4">
    			<h3>This is defalt view</h3>
        		<p>So Hello</p><?="{$data['name']} {$data['sername']} "?>
        		<button type="button" class="btn btn-primary">Primary</button>
    		</div>
    	</div>
    </div>
    	
        
    </div>

</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</html>