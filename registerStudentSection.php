		<form class="form" method="POST" action="postStudent.php">
				<h2> Jesteś na tej stronie pierwszy raz? <span class="pointer" onClick="document.getElementById('ukryty').style.display='block';">Zarejestruj się.</span></h2>
				<fieldset id="ukryty" class="studentForm form" style="display: none" >
				<legend>Wypełnij formularz</legend>
					<div class="row">
						<div class="input-50">
							<label>Login:
								<input type="text" name="login" required />
							</label><br>
							<label>
								Hasło:
								<input type="password" name="password1" required />
							</label>
														<label>
								Powtórz Hasło:
								<input type="password" name="password2" required />
							</label>
						</div>
						<div class="input-50">
							<label>Imię:
								<input type="text" name="name" required />
							</label><br>
							<label>
								Nazwisko:
								<input type="text" name="surname" required />
							</label>
						</div>
						<div class="input-50">
							<label>Tryb studiów:</label><br>
							<select name="studia1">
								<option></option>
								<option>Studia stacjonarne</option>
								<option>Studia niestacjonarne</option>
								<option>Studia podyplomowe</option>
							</select>
						</div>
						<div class="input-50">
							<label>Rok studiów:</label><br>
							<select name="studia2">
								<option></option>
								<option>I</option>
								<option>II</option>
								<option>III</option>
								<option>Studia podyplomowe</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="input-50">
							<label>
								Adres e-mail:
								<input type="email" name="mail" required />
							</label>
						</div>
					</div>

					<div class="row">
						<div class="input-100">
							<label>
								Telefon:
								<input type="text" name="phone" required />
							</label>
						</div>
					</div>
					<div class="row">
						<div class="input-100">
							<label>
								<input type="checkbox" name="zgoda" value="1" required /> Wyrażam zgodę na przetwarzanie moich danych osobowych przez uczelnię Akademii Górniczo-Hutniczej, zgodnie z Ustawą z dnia 29.08.1997 r. o Ochronie Danych Osobowych, Dz. U. nr 133 poz. 883).
							</label>
						</div>
					</div>
					<div class="row">
						<div class="input-25">
							<label>
								<button type="submit" name="submit" value="">wyślij</button>
							</label>
						</div>
					</div>
			</fieldset>
		</form>