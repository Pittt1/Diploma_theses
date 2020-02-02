	<div class="container">
		<form action="addTopic.php" method="post">
    <p>
        <label for="topic">Temat</label>
        <input type="text" name="topic" id="topic">
    </p>
    <p>
        <label for="description">Opis</label>
        <input type="text" name="description" id="description">
    </p>
	<p>
        <label for="description">Który rok</label>
							<select name="year">
								<option></option>
								<option value="1">I</option>
								<option value="2">II</option>
								<option value="3">III</option>
								<option value="4">IV</option>
								<option value="5">V</option>
								<option value="6">Studia podyplomowe</option>
							</select>
    </p>
		<p>
        <label for="description">Rodzaj studiów</label>
							<select name="studies">
								<option></option>
								<option value="1">Stacjonarne</option>
								<option value="2">Niestacjonarne</option>
								<option value="3">Podyplomowe</option>
							</select>
    </p>
    <input type="submit" name="add" value="Dodaj">
		</form></h3>
				<p></p>
	</div>