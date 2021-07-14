<?php
	include("../function/session.php");
	include("../db/dbconn.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>StreetWare</title>
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
					<li><a href="admin_promo.php "style="font-size:15px; margin-left:15px;">Promos</a></li>
					<li><a href="admin_product.php "style="font-size:15px; margin-left:15px;">Basketball</a></li>
					<li><a href="admin_football.php" style="font-size:15px; margin-left:15px;">Football</a></li>
					<li><a href="admin_running.php"style="font-size:15px; margin-left:15px;">Running</a></li>
				</ul>
			</li>
			<li><a href="transaction.php">Transactions</a></li>
			<li><a href="customer.php">Customers</a></li>
			<li><a href="message.php">Messages</a></li>
			<li><a href="order.php">Orders</a></li>
		</ul>
	</div>
	
	<div id="rightcontent" style="position:absolute; top:10%;">
			<div class="alert alert-info"><center><h2>Transactions	</h2></center></div>
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