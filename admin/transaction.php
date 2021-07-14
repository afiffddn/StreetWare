<?php
	include("../function/session.php");
	include("../db/dbconn.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title> StreetWare</title>
	<link rel = "stylesheet" type = "text/css" href="../css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
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
		<img src="../img/logo.jpg">
		<label> StreetWare</label>
		
			<?php
				$id = (int) $_SESSION['id'];
			
					$query = mysqli_query ($conn, "SELECT * FROM admin WHERE adminid = '$id' ") or die (mysqli_error());
					$fetch = mysqli_fetch_array ($query);
			?>
				
			<ul>
				<li><a href="../function/admin_logout.php"><i class="icon-off icon-white"></i>logout</a></li>
				<li>Welcome:&nbsp;&nbsp;&nbsp;<i class="icon-user icon-white"></i><?php echo $fetch['username']; ?></a></li>
			</ul>
	</div>
	
	<br>
			
	<div id="leftnav">
		<ul>
			<li><a href="">Products</a>
				<ul>
					<li><a href="admin_feature.php "style="font-size:15px; margin-left:15px;">Features</a></li>
					<li><a href="admin_promo.php "style="font-size:15px; margin-left:15px;">Promotions</a></li>
					<li><a href="admin_product.php "style="font-size:15px; margin-left:15px;">Basketball</a></li>
					<li><a href="admin_football.php" style="font-size:15px; margin-left:15px;">Football</a></li>
					<li><a href="admin_running.php"style="font-size:15px; margin-left:15px;">Running</a></li>
				</ul>
			</li>
			<li><a href="transaction.php">Transactions</a></li>
			<li><a href="customer.php">Customers</a></li>
			<li><a href="message.php">Messages</a></li>
		</ul>
	</div>
	
	<div id="rightcontent" style="position:absolute; top:10%;">
			<div class="alert alert-info"><center><h2> Transactions</h2></center></div>
			<br />
				<label  style="padding:5px; float:right;"><input type="text" name="filter" placeholder="Search Transactions here..." id="filter"></label>
			<br />
			
			<div class="alert alert-info">
			<table class="table table-hover" style="background-color:;">
				<thead>
				<tr style="font-size:16px;">
					<th>ID</th>
					<th>Date</th>
					<th>Customer Name</th>
					<th>Total Amount</th>
					<th>Order Status</th>
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
						$o_stat = $fetch['order_stat'];
						$o_date = $fetch['order_date'];
						
						$name = $fetch['firstname'].' '.$fetch['lastname'];
				?>
				<tr>
					<td><?php echo $id; ?></td>
					<td><?php echo $o_date; ?></td>
					<td><?php echo $name; ?></td>
					<td><?php echo $amnt; ?></td>
					<td><?php echo $o_stat; ?></td>
					<td><a href="receipt.php?tid=<?php echo $id; ?>">View</a>
					<?php 
					if($o_stat == 'Confirmed'){
					
					}elseif($o_stat == 'Cancelled'){
					
					}else{
					echo '| <a class="btn btn-mini btn-info" href="confirm.php?id='.$id.'">Confirm</a> ';
					echo '| <a class="btn btn-mini btn-danger" href="cancel.php?id='.$id.'">Cancel</a></td>';
					}					
					?>
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