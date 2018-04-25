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
<h3>Müşteri Kayıt Formu</h3>
<hr>


  <div class="form-group row" style="margin-top: 25px"  >
    <label for="txtFirstName" class="col-sm-3 col-form-label">Ad:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Ad">
    </div>
  </div>


  <div class="form-group row">
    <label for="txtLastName" class="col-sm-3 col-form-label">Soyad:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Soyad">
    </div>
  </div>

  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-3 pt-0">Cinsiyet:</legend>
      <div class="col-sm-9">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="radMale" value="male">
          <label class="form-check-label" for="radMale">
            Bay
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="radFemale" value="female">
          <label class="form-check-label" for="radFemale">
            Bayan
          </label>
        </div>
      </div>
    </div>
  </fieldset>

  <div class="form-group row">
  <div class="col-sm-3 col-form-label">
  <label >Doğum Tarihi:</label> 
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
        <label for="city" class="col-sm-3 col-form-label">Şehir:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="city" name="city" placeholder="Şehir">
        </div>
  </div>

  <div class="form-group row">
        <label for="zip" class="col-sm-3 col-form-label">Posta Kodu:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="zip" name="zip" placeholder="Posta Kodu Örn: 52556 veya 52556-6525">
        </div>
  </div>

  <div class="form-group row">
        <label for="address" class="col-sm-3 col-form-label">Adres:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="address" name="address" placeholder="Adres Örn: Barbaros Cad. No:25">
        </div>
  </div>

  <div class="form-group row">
        <label for="phone" class="col-sm-3 col-form-label">Telefon No:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefon No">
        </div>
  </div>

  <div class="form-group row">
        <label for="email" class="col-sm-3 col-form-label">Email:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="email" name="email" placeholder="Email">
        </div>
  </div>

  <div class="form-group row">
        <label for="bib" class="col-sm-3 col-form-label">Müşteri No:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="customerNo"  name="customerNo" disabled>
        </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button id="submitButton" type="submit" class="btn btn-primary" onclick="return validateFields()">Kaydet</button>
    </div>
  </div>
  </div>

</form>
<br>



<script>
var customerNo = <?php echo json_encode($CustomerNo); ?>;
document.getElementById("customerNo").value = customerNo;
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="participantEntry.js"></script>
</body>
</html>