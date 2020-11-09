<!DOCTYPE html>
<html>
	<head>
		<title> Human to Animal Years Converter Tool </title>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">MEDIA PRODUCTION II</a>
		    </div>
		  </div>
		</nav>

        <h2> Human Years to Animal Years Conversions</h2>
        <img width="28%" src="images/animals.jpg"/>
        <p><em>Randomly Generated Algorithms</em></p>
        <form method="post">
            <input type="number" min="15" max="110" name="human_years" required>
            Human Years
            <select name="choose">
                <option> Convert To </option>
                <option value="dog" id="dog"> Dog Years </option>
                <option value="cat" id="cat"> Cat Years </option>
                <option value="turtle" id="turtle"> Turtle Years </option>
                <option value="bird" id="bird"> Birds Years </option>
            <input type="submit" value="Convert!">
        </form>
        <?php
            $number = $_POST['human_years'];
            $choose = $POST['choose'];

            // 1 human year == 19 cat years, else calculate cat years if input is > 1
            $number == 15 ? $cat_years = 1 : $cat_years = (($number-15)*4 - 3);

            $number == 15 ? $dog_years = 1 : $dog_years = (($number-15)*3 - 1);

            $number == 15 ? $turtle_years = 1 : $turtle_years = (($number-15)*2 + 1);

            $number == 15 ? $bird_years = 1 : $bird_years = (($number-15)*2);

            echo "Cat years: $cat_years <br/>";
            echo "Dog years: $dog_years <br/>";
            echo "Turtle years: $turtle_years <br/>";
            echo "Bird years: $bird_years <br/>";
        ?>
    </body>
</html>
