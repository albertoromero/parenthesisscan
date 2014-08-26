<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Parentesis Scan</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <form role="form" action="scaner.php" method="post">
	  <div class="form-group">
	    <label for="analize">Texto</label>
	    <input type="text" class="form-control" id="analize" name="analize" placeholder="Frase a analizar">
	  </div>
	  <button type="submit" class="btn btn-default">Analizar</button>
	</form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>