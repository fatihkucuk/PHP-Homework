// This global variables works with date of birth dropdown loader functions.
var days = document.getElementById("days").value;
var months = document.getElementById("months").value;
var years = document.getElementById("years").value;

// This function called on page load
$(function() {
    loadDatePicker();
});

// this function called when submit Button is clicked in participantEntry.php
function validateFields() {
    console.log("HI!");
    var firstName = document.getElementById("firstName").value;    
    var lastName = document.getElementById("lastName").value;
    var city = document.getElementById("city").value;
    var zip = document.getElementById("zip").value;
    var address = document.getElementById("address").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;      
    var onlyLetters =/^[a-zA-Z\s]*$/;
    var noLetters = /^[0-9-+()]*$/;
    // Zip format: 55555 OR 55555-5555
    var zipRegex = /(^\d{5}$)|(^\d{5}-\d{4}$)/;
    var noSpecialChars = /^[\s0-9A-Za-z]+$/;
    var emailRegex = /(.+)@(.+){2,}\.(.+){2,}$/;
    
    var customerNo = document.getElementById("customerNo").value;  

    //first name validation
    if (firstName == "" || firstName == null) {
        window.alert("First name is required.");
        return false;
    }
    if (firstName.trim() == "" || firstName.trim()==null) {
        window.alert("First name should not be only spaces.");
        return false;
    }      
    if (!firstName.match(onlyLetters)) {
        window.alert("First name should have only letters.");
        return false;
    }
    if (firstName.length < 3) {
        window.alert("First name should be longer.");
        return false;
    }
    //last name validation
    if (lastName == "" || lastName == null) {
        window.alert("Last name is required.");
        return false;
    }
    if (lastName.trim() == "" || lastName.trim()==null) {
        window.alert("Last name should not be only spaces.");
        return false;
    }
    if (!lastName.match(onlyLetters)) {
        window.alert("Last name should have only letters.");
        return false;
    }
    if (lastName.length < 3) {
        window.alert("Last name should be longer.");
        return false;
    }
    //gender validation
    if (!($("input[type=radio]:checked")).length) {
        window.alert("Select the gender.");
        return false;
    }   
    //city validation
    if (city == "" || city == null) {
        window.alert("City is required.");
        return false;
    }
    if (city.trim() == "" || city.trim()==null) {
        window.alert("City should not be only spaces.");
        return false;
    }      
    if (!city.match(onlyLetters)) {
        window.alert("City should have only letters.");
        return false;
    }
    if (city.length < 3) {
        window.alert("City should be longer.");
        return false;
    }
    //zip code validation
    if (!zip.match(zipRegex)) {
        window.alert("Zip should be with 12345 OR 12345-1234 format.");
        return false;
    }
    //address validation
    if (!address.match(noSpecialChars)) {
        window.alert("Address is required and it should not have special characters.");
        return false;
    }
    //phone validation
    if (phone == "" || phone == null) {
        window.alert("Phone is required.");
        return false;
    }
    if (phone.trim() == "" || phone.trim()==null) {
        window.alert("Phone should not be only spaces.");
        return false;
    }
    if (phone.length < 10) {
        window.alert("Phone number should be longer.");
        return false;
    }
    if (!phone.match(noLetters)) {
        window.alert("Phone number should not have letters.");
        return false;
    }    
    //email validation
    if (!email.match(emailRegex)) {
        window.alert("Wrong email format.");
        return false;
    }
    //Customer number validation
    if (validateCustomerNo(customerNo) == false) {
        return false;
    }
}

function loadDatePicker() {
// populate our years select box
    for (i = new Date().getFullYear()-1; i > 1900; i--){
        $('#years').append($('<option />').val(i).html(i));
    }
// populate our months select box
    for (i = 1; i < 13; i++){
        $('#months').append($('<option />').val(i).html(i));
    }
// populate our Days select box
    updateNumberOfDays(); 

// "listen" for change events
    $('#years, #months').change(function(){
        updateNumberOfDays(); 
    });
}

// function to update the days based on the current values of month and year
function updateNumberOfDays(){
    //$('#days').html('');
    month = $('#months').val();
    year = $('#years').val();
    days = daysInMonth(month, year);

    $('#days').children().remove();
    
    for(i=1; i < days+1 ; i++){
            
        $('#days').append($('<option />').val(i).html(i));
        
    }
}

// find the max days in specified month and year
function daysInMonth(month, year) {
    return new Date(year, month, 0).getDate();
}

// validate the Customer number
function validateCustomerNo(customerNo) {
    var regex = /^[0-9]*$/;

    if (customerNo == "" || customerNo == null) {
        window.alert("Customer number is required.");
        return false;
    }
    if (customerNo.trim() == "" || customerNo.trim()==null) {
        window.alert("Customer number should not be only spaces.");
        return false;
    }   
    if (!customerNo.match(regex)) {
        window.alert("Customer number should have only digits.");
        return false;
    }
}