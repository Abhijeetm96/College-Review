<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>FORM</title>
  </head>
  <body>
  <div class="container">
  <div class="col-md-6 offset-md-3">
  <h1> Form </h1> <br/>

  <form method="post" action="process.php">
  <div class="form-row">
  <br/>
    <div class="col">
      <input type="text" class="form-control" name="first_name" placeholder="First name">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="last_name" placeholder="Last name">
    </div> <br/>
    </div>

    <div class="form-row">
    <div class="col">
    <br/> <input class="form-control" type="text" name="city_name" placeholder=City>
     </div>
     </div>

     <div class="form-row">
     <div class="col">
     <br/> <input class="form-control" type="number" name="mobile" placeholder="Mobile">
     </div>
     </div>

     <div class="form-row">
     <div class="col">
     <br/> <input class="form-control" type="email" name="email" placeholder="Email">
     </div>
     </div>
  <br/>
  <button type="submit" class="btn btn-primary" name="save" value="submit">Submit</button>

	</form>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<!--
<!DOCTYPE html>
<html>
  <body>
	<form method="post" action="process.php">
		First name:<br>
		<input type="text" name="first_name">
		<br>
		Last name:<br>
		<input type="text" name="last_name">
		<br>
		City name:<br>
		<input type="text" name="city_name">
		<br>
		Email Id:<br>
		<input type="email" name="email">
		<br><br>
		<input type="submit" name="save" value="submit">
	</form>
  </body>
</html>

-->