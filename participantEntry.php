<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Customer Entry</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta name="description" content=
    "Customer entry page">
<meta name="author" content="Fatıh Kucuk & Eren Sogut">
<!-- for securıty -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

<?php
// ımport 
require 'Db.php';
//
$CustomerNo = Db::getMaxCustomerNo();

?>

<form style="margin-top:20px;" method="POST" action="submitParticipant.php">
<div class="container">
  <div class="form-group row">
    <label for="txtFirstName" class="col-sm-3 col-form-label">First Name:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First name">
    </div>
  </div>
  <div class="form-group row">
    <label for="txtLastName" class="col-sm-3 col-form-label">Last Name:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last name">
    </div>
  </div>

  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-3 pt-0">Gender:</legend>
      <div class="col-sm-9">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="radMale" value="male">
          <label class="form-check-label" for="radMale">
            Male
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="radFemale" value="female">
          <label class="form-check-label" for="radFemale">
            Female
          </label>
        </div>
      </div>
    </div>
  </fieldset>

  <div class="form-group row">
  <div class="col-sm-3 col-form-label">
  <label >Date of Birth:</label> 
  </div>
    <div class="col-sm-3">
    <select class=" form-control" id="days" name="day"></select>

    </div>
    <div class="col-sm-3">
    <select class="form-control" id="months" name="month"></select>

    </div>
    <div class="col-sm-3">
          <select class=" form-control" id="years" name="year"></select>

    </div>
  </div>

  <div class="form-group row">
  <div class="col-sm-3 col-form-label">
  <label >State:</label> 

  </div>
    <div class="col-sm-9">
    
      <select class="form-control" id="state" name="state">
        <option value="Alabama">Alabama</option>
        <option value="Alaska">Alaska</option>
        <option value="Arizona">Arizona</option>
        <option value="California">California</option>
        <option value="Colorado">Colorado</option>
        <option value="Connecticut">Connecticut</option>
        <option value="Delaware">Delaware</option>
        <option value="Florida">Florida</option>
        <option value="Georgia">Georgia</option>
        <option value="Hawaii">Hawaii</option>
        <option value="Idaho">Idaho</option>
        <option value="Illinois">Illinois</option>
        <option value="Indiana">Indiana</option>
        <option value="Iowa">Iowa</option>
        <option value="Kansas">Kansas</option>
        <option value="Kentucky">Kentucky</option>
        <option value="Louisiana">Louisiana</option>
        <option value="Maine">Maine</option>
        <option value="Maryland">Maryland</option>
        <option value="Massachusetts">Massachusetts</option>
        <option value="Michigan">Michigan</option>
        <option value="Minnesota">Minnesota</option>
        <option value="Mississippi">Mississippi</option>
        <option value="Missouri">Missouri</option>
        <option value="Montana">Montana</option>
        <option value="Nebraska">Nebraska</option>
        <option value="Nevada">Nevada</option>
        <option value="New Hampshire">New Hampshire</option>
        <option value="New Jersey">New Jersey</option>
        <option value="New Mexico">New Mexico</option>
        <option value="New York">New York</option>
        <option value="North Carolina">North Carolina</option>
        <option value="North Dakota">North Dakota</option>
        <option value="Ohio">Ohio</option>
        <option value="Oklahoma">Oklahoma</option>
        <option value="Oregon">Oregon</option>
        <option value="Pennsylvania">Pennsylvania</option>
        <option value="Rhode Island">Rhode Island</option>
        <option value="South Carolina">South Carolina</option>
        <option value="South Dakota">South Dakota</option>
        <option value="Tennessee">Tennessee</option>
        <option value="Texas">Texas</option>
        <option value="Utah">Utah</option>
        <option value="Vermont">Vermont</option>
        <option value="Virginia">Virginia</option>
        <option value="Washington">Washington</option>
        <option value="West Virginia">West Virginia</option>
        <option value="Wisconsin">Wisconsin</option>
        <option value="Wyoming">Wyoming</option>
      </select>
      </div>
  </div>

  <div class="form-group row">
        <label for="city" class="col-sm-3 col-form-label">City:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="city" name="city" placeholder="City">
        </div>
  </div>

  <div class="form-group row">
        <label for="zip" class="col-sm-3 col-form-label">Zip Code:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip Code Example: 52556 OR 52556-6525">
        </div>
  </div>

  <div class="form-group row">
        <label for="address" class="col-sm-3 col-form-label">Address:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="address" name="address" placeholder="Address Example : 205 E Broadway Avenue">
        </div>
  </div>

  <div class="form-group row">
        <label for="phone" class="col-sm-3 col-form-label">Phone Number:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
        </div>
  </div>

  <div class="form-group row">
        <label for="email" class="col-sm-3 col-form-label">Email:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="email" name="email" placeholder="Email">
        </div>
  </div>

  <div class="form-group row">
        <label for="bib" class="col-sm-3 col-form-label">Customer Number:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="customerNo"  name="customerNo" disabled>
        </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button id="submitButton" type="submit" class="btn btn-primary" onclick="return validateFields()">Submit Participant</button>
    </div>
  </div>

</form>
<br>


</div>

<script>
var customerNo = <?php echo json_encode($CustomerNo); ?>;
document.getElementById("customerNo").value = customerNo;
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="participantEntry.js"></script>
</body>
</html>