<?php
	include("function/session.php");
	include("db/dbconn.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>StreetWare</title>
	<link rel = "stylesheet" type = "text/css" href="css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="../js/bootstrap.js"></script>
	<script src="../js/jquery-1.7.2.min.js"></script>
	<script src="../js/carousel.js"></script>
	<script src="../js/button.js"></script>
	<script src="../js/dropdown.js"></script>
	<script src="../js/tab.js"></script>
	<script src="../js/tooltip.js"></script>
	<script src="../js/popover.js"></script>
	<script src="../js/collapse.js"></script>
	<script src="../js/modal.js"></script>
	<script src="../js/scrollspy.js"></script>
	<script src="../js/alert.js"></script>
	<script src="../js/transition.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../javascripts/filter.js" type="text/javascript" charset="utf-8"></script>
	<script src="../jscript/jquery-1.9.1.js" type="text/javascript"></script>
	
		</script>
		
		<script language="javascript" type="text/javascript">
        function printDiv(divID) {
            
            var divElements = document.getElementById(divID).innerHTML;
            
            var oldPage = document.body.innerHTML;

         
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            
            window.print();

            
            document.body.innerHTML = oldPage;

          
        }
		</script>
</head>
<body>
	<div id="header" style="position:fixed;">
		<img src="img/logo.jpg">
		<label> StreetWare </label>
		
			<?php
				$id = (int) $_SESSION['id'];
			
					$query = mysqli_query ($conn, "SELECT * FROM customer WHERE customerid = '$id' ") or die (mysqli_error());
					$fetch = mysqli_fetch_array ($query);
			?>

			<ul>
				<li><a href="function/logout.php"><i class="icon-off icon-white"></i>logout</a></li>
				<li>Welcome:&nbsp;&nbsp;&nbsp;<a href="#profile"  data-toggle="modal"><i class="icon-user icon-white"></i><?php echo $fetch['firstname']; ?>&nbsp;<?php echo $fetch['lastname'];?></a></li>
			</ul>
	</div>
	
	<br>
	<br>
	<br>

	<div id="container">
	<div class="nav">	
			 <ul>
				<li><a href="home.php">   <i class="icon-home"></i>Home</a></li>
				<li><a href="product1.php"> 			 <i class="icon-th-list"></i>Product</a></li>
				<li><a href="aboutus1.php">   <i class="icon-bookmark"></i>About Us</a></li>
				<li><a href="contactus.php"><i class="icon-inbox"></i> Review/Suggestions </a></li>
				<li><a href="privacy1.php"><i class="icon-info-sign"></i>Privacy Policy</a></li>
				<li><a href="faqs1.php"><i class="icon-question-sign"></i>FAQs</a></li>
			</ul>
	</div>
	
	<div id="rightcontent" style="position:absolute; top:10%;">
		<br> <br>
			<div class="alert alert-info"><center><h2> Receipt </h2></center></div>
			<br />
			
			<div class="alert alert-info">
			<form method="post" class="well"  style="background-color:#fff; overflow:hidden;">
	<div id="printablediv">
	<center> 
	<table class="table" style="width:50%;">
	<label style="font-size:25px;"> StreetWare Inc.</label>
	<label style="font-size:20px;"> Official Receipt </label>
		<tr>
			<th><h5> Quantity </h5></td>
			<th><h5> Product Name </h5></td>
			<th><h5> Size </h5></td>
			<th><h5> Price </h5></td>
		</tr>
		
		<?php
		$t_id = $_GET['tid'];
		$query = mysqli_query($conn, "SELECT * FROM transaction WHERE transaction_id = '$t_id'") or die (mysqli_error());
		$fetch = mysqli_fetch_array($query);
		
		$amnt = $fetch['amount'];
		echo "Date : ". $fetch['order_date']."";
		
		$query2 = mysqli_query($conn, "SELECT * FROM transaction_detail LEFT JOIN product ON product.product_id = transaction_detail.product_id WHERE transaction_detail.transaction_id = '$t_id'") or die (mysqli_error());
		while($row = mysqli_fetch_array($query2)){
		
		$pname = $row['product_name'];
		$psize = $row['product_size'];
		$pprice = $row['product_price'];
		$oqty = $row['order_qty'];
		
		echo "<tr>";
		echo "<td>".$oqty."</td>";
		echo "<td>".$pname."</td>";
		echo "<td>".$psize."</td>";
		echo "<td>".$pprice."</td>";
		echo "</tr>";
		}
		?>

	</table>
	<legend></legend>
	<h4>Total : RM <?php echo $amnt; ?></h4>
	</center>
	</div>
	
	<div class='pull-right'>
	<div class="add"><a onclick="javascript:printDiv('printablediv')" name="print" style="cursor:pointer;" class="btn btn-info"><i class="icon-white icon-print"></i> Print Receipt </a></div>
	</div>
	</form>
			</div>
			</div>
			
				
			
</body>
</html>