<!DOCTYPE html>
<html>
<body>
	<title>Student ID Registration System</title>
	<h2>Student ID Registration System</h3>
</head>
<body>

	<form action= "method" = "GET">
		Last Name: <input type="text" name="lastname"> <br>
		First Name: <input type="text" name="firstname"> <br>
		Middle Name:<input type="text" name="middlename"> <br>
		Birth Date: <input type="date" name="birthdate"> <br>
		Address: <input type="text" name="address"> <br>
		ID Number: <input type="number" name="idnumber" maxlength="9">(Max 9 Numbers Allowed)
		<br>
		<td>Department: </td>
        <select name="Department[]" id="department">
        	<option value="-1"></option>
        	<option value="CCJE">CCJE</option>
        	<option value="CTE">CTE</option>
			<option value="COA">COA</option>
			<option value="CITCS">CITCS</option>
			<option vlaue="CAS">CAS</option>
			<option value="CON">CON</option>
		</select>
	<br>
		<td>Courses Applied For:</td>
	 
	    <select name="Course[]" id="courses">
	    	<option value="-1"></option>
	    	<option value="ACT">ACT</option>
	    	<option value="BSDA">BSDA</option>
	    	<option value="BSCS">BSCS</option>
	    	<option value="BSIT">BSIT</option>

	    </select>
		<br>
	    <br>
	    <input type="submit" value="Submit">
		</form>
	</body>
</html>
