<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JACC Application</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/jj.css" rel="stylesheet">


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>
<?
include("db_open.php");
include("validate.php");
include("functions/functions.php");
//include("header.php");
?> 
  <body>
	<div class="container">
	
	<div class="row">
    <div class="col-sm-12">&nbsp;</div>
    </div>	
    
		<div class="row">
	       <div class="col-sm-8">
		   <h3> JAAC - Janssen Accenture Analytics CollaborationMarket </h3>
			</div>
	       <div class="col-sm-4"><? echo (date ('m-d-Y H:i:s T')); ?>
		   <button type="button" class="btn btn-default btn-sm btn-link"><a href="logout.php"><h6>LOGOUT</h6></a></button>
		</div>
		</div>
  <div class="row">
    <div class="col-sm-12"><img src="images/HeaderHome-JessicaRiley_Shells.png" alt="Brand" width="100000000000" class="img img-responsive" id="brand6"></div>
    </div>
    
    <div class="row">
    <div class="col-sm-12">&nbsp;</div>
    </div>


	<div class="row">
		<div class="col-sm-2">
			<a class="navbar-brand" href="#">
			<img alt="Brand" id="brand1" src="images/TableauIcon.png" class="img img-responsive">Tableau Home
			</a>
		</div>
		<div class="col-sm-2">
			<a class="navbar-brand" href="#">
			<img alt="Brand" id="brand2" src="images/DefinitionIcon.png" class="img img-responsive">Market Defenitions
			</a>
		</div>
		<div class="col-sm-2">
			<a class="navbar-brand" href="#">
			<img alt="Brand" id="brand3" src="images/PhoneIcon.png" class="img img-responsive">Call Activity
			</a>
		</div>
		<div class="col-sm-2">
			<a class="navbar-brand" href="#">
			<img alt="Brand" id="brand4" src="images/RetailIcon.png" class="img img-responsive">Market Share and Volume
			</a>
		</div>
		<div class="col-sm-2">
			<a class="navbar-brand" href="#">
			<img alt="Brand" id="brand5" src="images/Non-RetailIcon.png" class="img img-responsive">Productivity, Persistency, and Penetration
			</a>
		</div>
		<div class="col-sm-2">
			<a class="navbar-brand" href="#">
			<img alt="Brand" id="brand6" src="images/APLDIcon.png" class="img img-responsive">APLD
			</a>
		</div>
	</div>
	<div class="row">
	  <div class="col-lg-6">&nbsp;</div>
	  <div class="col-lg-6">&nbsp;</div>
  </div>
		<h3>National Reports Immunology</h2>
	<div class="row">
		<div class="col-sm-2">
			<a class="navbar-brand" href="#">
			<img alt="Brand" id="brand2" src="images/FolderIcon.png" class="img img-responsive">WIP
			</a>
		</div>
		<div class="col-sm-2 clearfix">
			<a class="navbar-brand" href="#">
			<img alt="Brand" id="brand1" class="img img-responsive" src="images/FolderIcon.png">Boisimilar
			</a>
		</div>
		<div class="col-sm-2">
			<a class="navbar-brand" href="#">
			<img alt="Brand" id="brand2" src="images/DataIcon.png" class="img img-responsive">Adhoc
			</a>
		</div>
	</div>
	<div class="row">
	  <div class="col-lg-6">&nbsp;</div>
	  <div class="col-lg-6">&nbsp;</div>
  </div>
		<h3>National Reports Oncology</h2>
	<div class="row">
		<div class="col-sm-2">
			<a class="navbar-brand" href="#">
			<img alt="Brand" id="brand2" src="images/FolderIcon.png" class="img img-responsive">Weekly
			</a>
		</div>
		<div class="col-sm-2">
			<a class="navbar-brand" href="#">
			<img alt="Brand" id="brand1" class="img img-responsive" src="images/FolderIcon.png">Monthly
			</a>
		</div>
		<div class="col-sm-2">
			<a class="navbar-brand" href="#">
			<img alt="Brand" id="brand2" src="images/DataIcon.png" class="img img-responsive">Review
			</a>
		</div>
	</div>
	<div class="row">
	  <div class="col-lg-6">&nbsp;</div>
	  <div class="col-lg-6">&nbsp;</div>
  </div>

<div class="row">
<div class="table-responsive">
<h3>SSA Customer Segment</h3>
<table class="table table-striped table-condensed table-bordered table-hover">
	<thead>
		<tr>
			<th data-field="state" data-checkbox="true"></th>
			<th data-field="Segment Group Name" data-filter-control="input" data-sortable="true">Segment Group Name</th>
			<th data-field="Effective Date" data-filter-control="select" data-sortable="true">Effective Date</th>
			<th data-field="End Date" data-filter-control="select" data-sortable="true">End Date</th>
			<th data-field="Name" data-sortable="true">Name</th>
			<th data-field="Date Uploaded" data-filter-control="select" data-sortable="true">Date Uploaded</th>
			<th data-field="Update" data-sortable="true">Update</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="bs-checkbox "><input data-index="0" name="btSelectItem" type="checkbox"></td>
			<td>Valérie</td>
			<td>01/09/2015</td>
			<td>01/09/2015</td>
			<td>Français</td>
			<td>12/20</td>
			<td><span class="glyphicon glyphicon-upload" aria-hidden="true" ></span></td>
		</tr>
		<tr>
			<td class="bs-checkbox "><input data-index="1" name="btSelectItem" type="checkbox"></td>
			<td>Eric</td>
			<td>05/09/2015</td>
			<td>01/09/2015</td>
			<td>Philosophie</td>
			<td>8/20</td>
			<td><span class="glyphicon glyphicon-upload" aria-hidden="true"></span></td>
		</tr>
		<tr>
			<td class="bs-checkbox "><input data-index="1" name="btSelectItem" type="checkbox"></td>
			<td>Mat</td>
			<td>05/09/2015</td>
			<td>01/09/2015</td>
			<td>Philosophie</td>
			<td>8/20</td>
			<td><span class="glyphicon glyphicon-upload" aria-hidden="true"></span></td>
		</tr>
	</tbody>
</table>
</div>

<form action="bmresfile_upload.php" method="post" enctype="multipart/form-data" name="btnUpload" id="btnUpload" onSubmit="return valid()">
<div class="text-right">
  <button type="button" id="btnSubmit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;DELETE</button>
  <button type="button" id="btnCancel" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-download" aria-hidden="true"></span>&nbsp;DOWNLOAD</button>
  <button type="button" id="btnUpload" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-upload" aria-hidden="true"></span>&nbsp;UPLOAD</button>
</div>
</form>
</div>

<div class="row">
<div class="table-responsive">
<h3>SSA TA Extracts</h3>
<table id="table" class="table table-striped table-condensed table-bordered table-hover" data-toggle="table">
	<thead>
		<tr>
			<th data-field="state" data-checkbox="true"></th>
			<th data-field="Segment Group Name" data-sortable="true">Segment Group Name</th>
			<th data-field="Effective Date" data-sortable="true">Effective Date</th>
			<th data-field="End Date" data-sortable="true">End Date</th>
			<th data-field="Name" data-sortable="true">Name</th>
			<th data-field="Date Uploaded" data-sortable="true">Date Uploaded</th>
			<th data-field="Update" data-sortable="true" data-sorter="priceSorter">Update</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="bs-checkbox "><input data-index="0" name="btSelectItem" type="checkbox"></td>
			<td>Valérie</td>
			<td>01/09/2015</td>
			<td>01/09/2015</td>
			<td>Français</td>
			<td>12/20</td>
			<td><span class="glyphicon glyphicon-upload" aria-hidden="true"></span></td>
		</tr>
		<tr>
			<td class="bs-checkbox "><input data-index="1" name="btSelectItem" type="checkbox"></td>
			<td>Eric</td>
			<td>05/09/2015</td>
			<td>01/09/2015</td>
			<td>Philosophie</td>
			<td>8/20</td>
			<td><span class="glyphicon glyphicon-upload" aria-hidden="true"></span></td>
		</tr>
	</tbody>
</table>
</div>
</div>
 <script>
    function priceSorter(a, b) {
        a = +a.substring(1); // remove $
        b = +b.substring(1);
        if (a > b) return 1;
        if (a < b) return -1;
        return 0;
    }
</script>


<div class="row">
 <footer id="footer">
      <img alt="Brand" id="brand2" src="images/logo_footer_jj.png" class="img img-responsive img-thumbnail" width="350px" height="150px">
    <div class="col-xs-12 text-center footer_bottom">
      <small>Janssen Global Services, LLC, JGS ©2017</small>
    </div>
</footer>
</div>


</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.js"></script>
	<script src="js/tablesort.js"></script>
  </body>
</html>
