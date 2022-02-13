<?php

/**
 * Page to view list of customers / users
 *
 */

const BASE_URL = "https://jsonplaceholder.typicode.com/users";

$curl = curl_init();
// Set cURL options
curl_setopt_array($curl, array(
 CURLOPT_URL => BASE_URL,
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_TIMEOUT => 30,
 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
 CURLOPT_CUSTOMREQUEST => "GET",
));
// Execute cURL
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
$arr = json_decode($response, TRUE);
?>

<div class="wrap">
	<h1>View Customers</h1>

	<table class="nguyen-table">
		<tr>
			<th>Name</th>
			<th>Username</th>
			<th>Address</th>
			<th>Phone</th>
			<th>Website</th>
			<th>Company</th>
	</tr>
	<?php foreach ($arr as $item) { ?>
		<tr>
			<td><?php echo $item['name'] ?></td>
			<td><?php echo $item['username'] ?></td>
			<td><?php echo $item['address']['street'] ?><br>
				 <?php echo $item['address']['suite'] ?><br>
				 <?php echo $item['address']['city'] ?><br>
				 <?php echo $item['address']['zipcode'] ?>
			</td>
			<td><?php echo $item['phone'] ?></td>
			<td><?php echo $item['website'] ?></td>
			<td><?php echo $item['company']['name'] ?><br>
				 <?php echo $item['company']['catchPhrase'] ?><br>
				 <?php echo $item['company']['bs'] ?>
			</td>
		</tr>
	<?php } ?>
	</table>
</div>
