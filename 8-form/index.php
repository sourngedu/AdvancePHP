<!DOCTYPE html>
<html lang="en">
<head>
  <title>Example using form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-6">
        <img style="padding:15px;" src="./img/1.png" alt="">
    </div>

    <div class="col-md-6">
    <h2>Enter Student Information</h2>
      <form action="./display.php" method="get" class="needs-validation" novalidate>

      <div class="form-group">
          <label for="sid">Student ID:</label>
          <input type="text" class="form-control" id="sid" placeholder="Enter ID" name="sid" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out student id.</div>
        </div>

        <div class="form-group">
          <label for="sName">Name:</label>
          <input type="text" class="form-control" id="sName" placeholder="Enter Student Name" name="sName" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out student Full Name.</div>
        </div>

        <div class="form-group">
          <label for="sGender">Gender:</label>
          <select class="form-control" id="sGender" name="sGender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out student Gender</div>
        </div>

        <div class="form-group">
          <label for="sBOD">Bird of Date:</label>
          <input type="date" class="form-control" id="sBOD" placeholder="Enter Student Name" name="sBOD" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this.</div>
        </div>
        <div class="form-group">
          <label for="sPOB">Place of Birth:</label>
          <input type="text" class="form-control" id="sPOB" placeholder="Enter Student Name" name="sPOB" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>


        <div class="form-group form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember" required> I agree on this information.
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Check this checkbox to continue.</div>
          </label>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>



      </form>
      <!-- Close form tag -->    
    </div>
  </div>
</div>

<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

</body>
</html>
