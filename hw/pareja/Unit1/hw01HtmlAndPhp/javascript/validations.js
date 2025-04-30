var validName=false;
var validMail=false;
var validPhone=false;
var validCheckin=false;
var validCheckout=false;

//Name validations
function validateName()
{
    let name=document.getElementById("name").value;
    let format=/[a-zA-Z\s]{3,64}/g;
    if(format.test(name))
    {
        validName=true;
    }
    else
    {
        alert("Use letters and spaces only!");
        validName=false;
    }
}
function validateMail()
{
    let mail=document.getElementById("email").value;
    let format=/(?=.+\@)(?=.+\.)[a-zA-Z0-9]{2,}\@{1}[a-z]{5,}\.{1}[a-z]{2,}/;
    if(format.test(mail))
    {
        validMail=true;
    }
    else
    {
        alert("Make sure you use a valid mail that contains a @, and an extension with a dot(.)");
        validMail=false;
    }
}
function validatePhone()
{
    let phoneNumber=document.getElementById("phone").value;
    let format=/09{1}[0-9]{8}/;
    if(format.test(phoneNumber))
    {
        validPhone=true;
    }
    else
    {
        alert("Use a valid phone number. Only 10 digits.");
        validPhone=false;
    }
}
function validateCheckin()
{
    document.getElementById("checkout").value='';
    let checkIn_Date=document.getElementById("checkin").value;
    let today=new Date();
    let currentDate=today.toISOString().substring(0,10);
    if(checkIn_Date>currentDate)
    {
        validCheckin=true;
    }
    else
    {
        alert("You have to select a valid date, after today."+currentDate);
        document.getElementById("checkin").value='';
        validCheckin=false;
    }
}
function validateCheckout()
{
    let checkOut_Date=document.getElementById("checkout").value;
    let checkIn_Date=document.getElementById("checkin").value;
    if(checkOut_Date>checkIn_Date)
    {
        validCheckout=true;
    }
    else
    {
        alert("You have to select a check-out date after the check-in");
        document.getElementById("checkout").value='';
        validCheckout=false;
    }
}

//Enabling checkout
function enableCheckout()
{
    let checkin=document.getElementById("checkin").value;
    if(checkin != '')
    {
        document.getElementById('checkout').removeAttribute("disabled");
    }
    else
    {
        document.getElementById("checkout").value='';
        document.getElementById('checkout').setAttribute("disabled","true");
    }
}

//Validating the form submission
const reservation_form=document.forms["reservationForm"];

function validateSubmission()
{
    if(!validName || !validMail || !validPhone || !validCheckin || !validCheckout)
    {
        event.preventDefault();
        alert("All field data must be correct in order to submit");
    }
    else
    {
        reservation_form.submit();
    }
}

