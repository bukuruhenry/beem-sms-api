<?php include('messaging_process.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<button id="sendMessage">Send Message</button>
<table>
	<thead>
		<tr>
			<th>Fullname</th>
			<th>Phone number</th>
		</tr>
	</thead>
	<tbody>
	<?php while($user = mysqli_fetch_assoc($sql_users) ):
		$fullname = $user['fullname'];
		$phoneNumber = $user['phonenumber'];

		$full_name[] = $fullname;
		$phone_number[] = $phoneNumber;
	?>
		<tr>
			<td><?=$fullname;?></td>
			<td><?=$phoneNumber;?></td>
		</tr>
	<?php endwhile ;?>
	</tbody>
</table>

<?php  $usersArray = ["fullname_item"=>$full_name,"phonenumber_item"=>$phone_number]; ?>                 
<form hidden id="users"><textarea name="users"><?= json_encode($usersArray);?></textarea></form>


<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="assets/js/messaging.js"></script>
</body>
</html>