<?php
$title = 'index';
require_once 'includes/header.php';
?>
<h1 class="text-center"> Registration for IT Conference </h1>
<form class="needs-validation" novalidate>
  <div class="form-column">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">First name</label>
      <input type="text" class="form-control" id="validationCustom01" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Last name</label>
      <input type="text" class="form-control" id="validationCustom02" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Contact Number</label>
      <input type="number" class="form-control" id="validationCustom05" palceholde = 'birthday' required>
      <div class="invalid-feedback">
        Please provide a valid number.
      </div>
    </div>
  </div>
  <div class="col-md-3 mb-3">
      <label for="validationCustom05">Specialty</label>
      <input type="specialty" class="form-control" id="validationCustom05" required>
      <div class="invalid-feedback">
      </div>
    </div>
  </div>
  <div class="col-md-3 mb-3">
      <label for="validationCustom05">Email Address</label>
      <input type="email" class="form-control" id="validationCustom05" required>
      <div class="invalid-feedback">
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>

<?php require_once 'includes/footer.php'?>