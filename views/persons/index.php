<p>Here is a list of all person:</p>
<table border="1px solid">
	<thead>
		<th>Id</th>
		<th>Name</th>
		<th>Birthday</th>
		<th>Gender</th>
		<th>Telephone</th>
		<th>Email</th>
	</thead>
	<tbody>
		<?php foreach($persons as $person) { ?>
  		<tr>
  	 <?php echo "<td>$person->id</td>"; ?>
  	 <?php echo "<td>$person->name</td>"; ?>
   	 <?php echo "<td>$person->birthday</td>"; ?>
  	 <?php echo "<td>$person->gender</td>"; ?>
 	 <?php echo "<td>$person->telephone</td>"; ?>
  	 <?php echo "<td>$person->email</td>"; ?>
  	 <?php echo "<td><a href='?controller=persons&action=edit&id=$person->id'>Edit</a></td>"; ?>
  	  <?php echo "<td><a href='?controller=persons&action=destroy&id=$person->id'>Delete</a></td>"; ?>
    	
  	</tr>
	<?php } ?>
	</tbody>
</table>
