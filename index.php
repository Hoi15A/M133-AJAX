<!DOCTYPE html>
<html>
	<head>
		<title>M133 - AJAX demo</title>

		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>

<div class="content-c">


		<h1>Persoenliche Daten</h1>
	</br>
		<form>

					<div class="group">
						<input id="vorname" name="vorname">
							<span class="highlight"></span>
							<span class="bar"></span>
						<label for="vorname">Ihr Vorname:</label>
					</div>

				<div class="group">
					<input id="nachname" name="nachname">
						<span class="highlight"></span>
						<span class="bar"></span>
					<label for="nachname">Ihr Nachname:</label>
				</div>

				<div class="group">
					<input id="ort" name="ort">
						<span class="highlight"></span>
						<span class="bar"></span>
					<label for="ort">Ihr Wohnort:</label>
					<span id="result"></span>
				</div>

				<div class="group">
				<button class="buttonf" type="button" onclick="alert('Hello World!')">Send</button>
				</div>

		</form>

</div>

	</body>
</html>
