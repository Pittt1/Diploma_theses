<?php
$sql = "SELECT * FROM `studies`";
$query = mysql_query($sql);
while ( $results_studies[] = mysql_fetch_object ( $query ) );
array_pop ( $results_studies );

$sql = "SELECT u.id, concat(d. description,' ', u.name, ' ',u.surname) as promotor FROM `users` as u join degree as d on u.degree = d.id WHERE u.type = 3";
$query = mysql_query($sql);
while ( $results_promotor[] = mysql_fetch_object ( $query ) );
array_pop ( $results_promotor );
?>

		<section>		
		<form class="form" method="POST" action="confirmationStudent.php">
			<div class="container">
				<h3>Z poniższej listy wybierz swojego promotora oraz temat pracy dyplomowej.</h3>
				<p></p>
			</div>

				<div class="row">
					<div class="col-3 col-m-3 col-s-12">
						<h3>Tryb studiów</h3>																			<!-- przy wyborze trybu studiów analogicznie zostaje do wyboru rok studiów -->
						<p></p>
						<div class="input-50">
							<label>Tryb studiów:</label><br>
							<select name="tryb">
								<option></option>
	 <?php foreach ( $results_studies as $option ) : ?>
          <option value=" <?php echo $option->id; ?> "> <?php echo $option->name; ?> </option>
     <?php endforeach; ?>
							</select>
						</div>
					</div>
					<div class="col-3 col-m-3 col-s-12">
						<h3>Rok studiów</h3>																			<!-- przy wyborze roku zostają wyświetlone tematy przypisane do danego roku -->
						<p></p>
						<div class="input-50">
							<label>Rok studiów:</label><br>
							<select name="rok">
								<option></option>

							</select>
						</div>
					</div>
					<div class="col-3 col-m-3 col-s-12">
						<h3>Promotor</h3>																	<!-- przy wyborze promotora wyświetlają się tematy które nie zostały przez nikogo wybrane-->
						<p>Wybierz promora następnie z listy umieszczonej po lewej stronie wybierz temat od danego promotora.</p>
						<div class="input-50">
							<label>Promotor:</label><br>
							<select name="promotor">
								<option></option>
	 <?php foreach ( $results_promotor as $option ) : ?>
          <option value=" <?php echo $option->id; ?> "> <?php echo $option->promotor; ?> </option>
     <?php endforeach; ?>
							</select>
						</div>
					</div>
					<div class="col-3 col-m-3 col-s-12">
						<h3>Temat:</h3>											<!-- po wybraniu tematu przekreśla się w widoku wykładowcy, a przy wybieraniu przez kolejnego studenta nie wyświetla się -->
						<p>Wybierz temat pracy dyplomowej.</p>
						<div class="input-50">
							<label>Temat:</label><br>
							<select name="praca">

							</select>
						</div>
					</div>
				</div>
				<div class="btn-us">
					<label>
						<button class="btn" type="submit" name="submit" value="">Zatwierdź swój temat</button>   				<!-- zatwierdza i zapisuje wybór -->
					</label>
				</div>		
				

		</form>		
		</section>