<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Admin Toko</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
	</head>
	<body>
<!-- header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div style="background-color: #2ecc71;" class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="color: #FFF;" href="#"><strong>TOKONYADIA</strong></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a style="color: #FFF;" href="#"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
            </ul>
        </div>
    </div>
    <!-- /container -->
</div>
<!-- /Header -->

<!-- Main -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <!-- Left column -->
            <h4><strong>Cattegory</strong></h4>
            <hr>
            <ul class="nav nav-stacked">
                <li class="nav-header">
                    <a class="kategori" href="#" data-toggle="collapse" data-target="#userMenu"><i class="fa fa-motorcycle"></i> Motor <i class="glyphicon glyphicon-chevron-down"></i></a>
                    <ul class="nav nav-stacked collapse" id="userMenu">
                        <li><a href="#">Honda</a></li>
                        <li><a href="#"></i>Yamaha</a></li>
                        <li><a href="#"></i> Suzuki</a></li>
                    </ul>
                </li>
                <li class="nav-header"> 
                    <a href="#" data-toggle="collapse" data-target="#menu2"><i class="fa fa-car"></i>  Mobil <i class="glyphicon glyphicon-chevron-down"></i></a>
                    <ul class="nav nav-stacked collapse" id="menu2">
                        <li><a href="#">Honda</a></li>
                        <li><a href="#">Hyundai</a></li>
                        <li><a href="#">Toyota</a></li>         
                    </ul>
                </li>
                <li class="nav-header">
                    <a href="#" data-toggle="collapse" data-target="#menu3"> <i class="fa fa-male"></i> Pakaian <i class="glyphicon glyphicon-chevron-down"></i></a>
                    <ul class="nav nav-stacked collapse" id="menu3">
                        <li><a href=""> Jeans</a></li>
                        <li><a href=""> Tshirt</a></li>
                        <li><a href=""> Shirt</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /col-sm-3 -->
        <div class="col-sm-9">
            <h4><strong> Dashboard</strong></h4>
            <hr>
            <div class="row">
                <!-- center left-->
                <div class="col-md-6">
                    <!--tabs-->
                    <div class="panel">
                        <div class="panel-heading">
                            <h5>Add Cattegory</h5></div>
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#cattegory" data-toggle="tab">kategori</a></li>
                            <li><a href="#messages" data-toggle="tab">Sub Kategori</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active well" id="cattegory">
                                <form class="form form-vertical">
                                <div class="control-group">
                                    <label>Name</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label></label>
                                    <div class="controls">
                                        <button type="submit" class="btn btn-primary">
                                            Post
                                        </button>
                                    </div>
                                </div>
                            </form>
                            </div>
                            <div class="tab-pane well" id="messages">
                                <form class="form form-vertical">
                                <div class="control-group">
                                    <label>Category</label>
                                    <div class="controls">
                                        <select class="form-control">
                                            <option>options</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label>Name</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label></label>
                                    <div class="controls">
                                        <button type="submit" class="btn btn-primary">
                                            Post
                                        </button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <!--/tabs-->
                </div>
                <!--/col-->
            </div>
            <!--/row-->
        </div>
        <!--/col-sm-9-->
</div>
<!-- /Main -->

		<script src="js/jquery-3.1.1.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>