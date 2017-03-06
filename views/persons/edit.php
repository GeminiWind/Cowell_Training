<form method="POST" action="">
<div class="form-group">
	<label>Name</label>
	<input type="text" name="name" required="" value=<?php echo $person->name?>>
</div>
<div class="form-group">
	<label>Telephone</label>
	<input type="text" name="telephone" required="" value=<?php echo $person->telephone?>>
</div>
<div class="form-group">
	<label>Email</label>
	<input type="email" name="email" required="" value=<?php echo $person->email?>>
</div>
<div class="form-group">
	<label>Password</label>
	<input type="password" name="password" required="">
</div>
<div class="form-group">
<label>Gender</label>
	<input type="number" name="gender" required="" value="0">
</div>
<input type="submit" value="Submit">
</form>
