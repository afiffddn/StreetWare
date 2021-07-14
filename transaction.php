<?php
	include("function/session.php");
	include("db/dbconn.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title> StreetWare</title>
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
</head>
<body>
	<div id="header" style="position:fixed;">
		<img src="img/logo.jpg">
		<label> StreetWare</label>
		
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

	<br>
	
	<div id="rightcontent" style="position:absolute; top:10%;">
		<br><br>
			<div class="alert alert-info"><center><h2> Transactions History </h2></center></div>
			
			<div class="alert alert-info">
			<table class="table table-hover" style="background-color:;">
				<thead>
				<tr style="font-size:16px;">
					<th>Date</th>
					<th>Customer Name</th>
					<th>Total Amount</th>
					<th>Action</th>
				</tr>
				</thead>
				<tbody>
				<?php
					
					$query = mysqli_query($conn, "SELECT * FROM transaction LEFT JOIN customer ON customer.customerid = transaction.customerid") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query))
						{
						$id = $fetch['transaction_id'];
						$amnt = $fetch['amount'];
						$o_date = $fetch['order_date'];
						
						$name = $fetch['firstname'].' '.$fetch['lastname'];
				?>
				<tr>
					
					<td><?php echo $o_date; ?></td>
					<td><?php echo $name; ?></td>
					<td><?php echo $amnt; ?></td>
					<td><a href="receipt.php?tid=<?php echo $id; ?>">View</a>
				</tr>		
				<?php
					}
				?>
				</tbody>
			</table>
			</div>
			</div>				
			
</body>
</html>