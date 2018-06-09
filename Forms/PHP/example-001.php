<?php
    // Check for submit button
    if (filter_has_var(INPUT_POST, 'submit')) {
        
        // Get form data
        echo "Entered";
        $first_name = htmlentities($_POST['firstname']);
        $last_name = htmlentities($_POST['lastname']);

    } else {
        echo "No name entered";
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Forms | PHP</title>
  </head>
  <body>
      <div class="container">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <div class="form-group">
              <label for="exampleInputFirstName">First Name</label>
              <input type="text" class="form-control" name="firstname" id="exampleInputFirstName" aria-describedby="firstNameHelp" placeholder="Enter First Name">
              <small id="firstNameHelp" class="form-text text-muted">We'll never share your firstname with anyone else.</small>
            </div>

            <div class="form-group">
              <label for="exampleInputLastName">First Name</label>
              <input type="text" class="form-control" name="lastname" id="exampleInputLastName" aria-describedby="lastNameHelp" placeholder="Enter Last Name">
              <small id="lastNameHelp" class="form-text text-muted">We'll never share your lastname with anyone else.</small>
            </div>

            <div class="form-group">
              <input type="submit" class="btn btn-primary" id="submitButton">
            </div>

          </form>
      </div>
    <?php
    	echo $_POST['firstname'];
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
