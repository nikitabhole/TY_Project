var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}

function agefinding()
    {
        var birthDay = document.getElementById("dob").value;
        var DOB = new Date(birthDay);
        var today = new Date();
        var age = today.getTime() - DOB.getTime();
        age = Math.floor(age / (1000 * 60 * 60 * 24 * 365.25));
       
	 document.getElementById('Age').innerHTML = age;
    }
function agefinding1()
    {
        var birthDay = document.getElementById("cdob").value;
        var DOB = new Date(birthDay);
        var today = new Date();
        var age = today.getTime() - DOB.getTime();
        age = Math.floor(age / (1000 * 60 * 60 * 24 * 365.25));
       
	 document.getElementById('CAge').innerHTML = age;
    }



/*function radioEvent(form) 
{
// for (var i = 0; i < form.radioButton.length; i++) 
 
    if (form.radioButton[0].checked)
    {
        alert("You chose " + form.radioButton[0].value + " Time is 8.00am-12.00am.")
    }
	else if (form.radioButton[1].checked)
    {
        alert("You chose " + form.radioButton[1].value + " Time is 8.00am-12.00am (based on days).")
    }
	else  if (form.radioButton[2].checked)
    {
        alert("You chose " + form.radioButton[2].value + ".....Age should be 15-20years.")
    }

 }*/

function call()
{
var x=document.getElementById("type").value;
if(x=="fullday")
{
document.getElementById("fees").value="2000";
document.getElementById("time").value="8am-5pm";
}
if(x=="temporary")
{
document.getElementById("fees").value="3000";
document.getElementById("time").value="Based on days";
}
if(x=="residential")
{
document.getElementById("fees").value="5000";
document.getElementById("time").value="-";
}
}
