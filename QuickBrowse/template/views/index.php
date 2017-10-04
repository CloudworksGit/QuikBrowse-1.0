<div class="container">

<center><h1>Do something with the display class - Example:</h1></center>
<hr>
<table class="col-md-6 col-md-push-3">
	<tr>
		<th style="width: 25%;">Row</th>
		<th style="width: 25%;">Title</th>
		<th style="width: 25%;">Description</th>
		<th style="width: 25%;">Author</th>
	</tr>
	<?php
		
		//Get data packet from database row "row"
		$rows = $DISPLAY->get_data_array('row');
		
		//PRINT THE PACKET
		//echo '<pre>';
		//print_r($rows);
		//echo '</pre>';
		
		foreach($rows as $row){
			
			//Read the data packet and echo them in a visual html table
			?>
			<tr>
				<td><?=$row['id']; ?></td>
				<td><?=$row['Title']; ?></td>
				<td><?=$row['Description']; ?></td>
				<td><?=$row['Author']; ?></td>
			</tr>
			<?php
			
		}
		
	?>
</table>

</div>