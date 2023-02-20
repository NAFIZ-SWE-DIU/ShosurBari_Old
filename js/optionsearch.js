// START CLOCK SCRIPT

Number.prototype.pad = function(n) {
  for (var r = this.toString(); r.length < n; r = 0 + r);
  return r;
};

function updateClock() {
  var now = new Date();
  var milli = now.getMilliseconds(),
    sec = now.getSeconds(),
    min = now.getMinutes(),
    hou = now.getHours(),
    mo = now.getMonth(),
    dy = now.getDate(),
    yr = now.getFullYear();
  var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
  var tags = ["mon", "d", "y", "h", "m", "s", "mi"],
    corr = [months[mo], dy, yr, hou.pad(2), min.pad(2), sec.pad(2), milli];
  for (var i = 0; i < tags.length; i++)
    document.getElementById(tags[i]).firstChild.nodeValue = corr[i];
}

function initClock() {
  updateClock();
  window.setInterval("updateClock()", 1);
}
// END CLOCK SCRIPT


/*
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!-- eye icon password show -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

		      <input type="password" id="edit-pass" placeholder="Enter Confirm Password" name="pass_2" size="60" maxlength="128" class="form-text required" required>
			  <span class="show-password"><i id="show-pass" class="fa fa-eye" aria-hidden="true"></i></span>

        
		<script>
      let showPass = document.getElementById('show-pass');
      let editPass = document.getElementById('edit-pass');
      showPass.addEventListener('click', function(){
        if (editPass.type === 'password') {
          editPass.type = 'text';
          showPass.className = 'fa fa-eye-slash';
        } else {
          editPass.type = 'password';
          showPass.className = 'fa fa-eye';
        }
      });
    </script>
 */




    function validateForm(){
      var fname = document.forms["myForm"]["fname"].value;
      var uname = document.forms["myForm"]["uname"].value;
      var genderfm = document.forms["myForm"]["genderfm"].value;
      var email = document.forms["myForm"]["email"].value;
      var pnumber = document.forms["myForm"]["pnumber"].value;
      var pass_1 = document.forms["myForm"]["pass_1"].value;
      var pass_2 = document.forms["myForm"]["pass_2"].value;

    
      //Full Name validation
      if (fname == "") {
        document.getElementById('fname').style.borderColor = "red";
        document.getElementById('fname').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });
        document.getElementById('fname_error').innerHTML = "Please enter your Full Name";
        return false;
      }else{
        document.getElementById('fname').style.borderColor = "green";
        document.getElementById('fname_error').innerHTML = "";
      }
      

      //Username validation
      if (uname == "") {
        document.getElementById('uname').style.borderColor = "red";
        document.getElementById('uname').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });
        document.getElementById('uname_error').innerHTML = "Please enter your Username";
        return false;
      }else if (! /^[A-Za-z0-9]+$/.test(uname)){
        document.getElementById('uname').style.borderColor = "red";
        document.getElementById('uname_error').innerHTML = "Please enter only characters and numbers";
        document.getElementById('uname').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });
        return false;
      }else{
        document.getElementById('uname').style.borderColor = "green";
        document.getElementById('uname_error').innerHTML = "";
      }


      //Gender validation
      if (genderfm == "") {
        document.getElementById('genderfm').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        }); 
        document.getElementById('genderfm_error').innerHTML = "Warning: Please Select Gender!";
        return false;
    }else{
      document.getElementById('genderfm').style.borderColor = "green";
      document.getElementById('genderfm_error').innerHTML = "";
    }

      
      //Email validation
      if (email == "") {
        document.getElementById('email').style.borderColor = "red";
        document.getElementById('email').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });
        document.getElementById('email_error').innerHTML = "Please enter your Email";
        return false;
      }else if(! /^[a-zA-Z0-9._-]+@(gmail|outlook|hotmail|yahoo).com$/.test(email)){
        document.getElementById('email').style.borderColor = "red";
        document.getElementById('email_error').innerHTML = "Please enter a valid Email";
        document.getElementById('email').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });
        return false;
      }else{
        document.getElementById('email').style.borderColor = "green";
        document.getElementById('email_error').innerHTML = "";
      }
      

      //Phone number validation
      if (pnumber == "") {
        document.getElementById('pnumber').style.borderColor = "red";
        document.getElementById('pnumber').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });
        document.getElementById('pnumber_error').innerHTML = "Please enter your Phone Number";
        return false;
      }else if(pnumber.length < 10 || pnumber.length > 14){
        document.getElementById('pnumber').style.borderColor = "red";
        document.getElementById('pnumber_error').innerHTML = "Phone number must be between 10 and 14 characters";
        document.getElementById('pnumber').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });
        return false;
      }else{
        document.getElementById('pnumber').style.borderColor = "green";
        document.getElementById('pnumber_error').innerHTML = "";
      }

      
      //Password validation
      if (pass_1 == "") {
        document.getElementById('pass_1').style.borderColor = "red";
        document.getElementById('pass_1').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });
        document.getElementById('pass_1_error').innerHTML = "Please enter your Password";
        return false;
      }else{
        document.getElementById('pass_1').style.borderColor = "green";
        document.getElementById('pass_1_error').innerHTML = "";
      }

      
      //Confirm Password validation
      if (pass_2 == "") {
        document.getElementById('pass_2').style.borderColor = "red";
        document.getElementById('pass_2').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });
        document.getElementById('pass_2_error').innerHTML = "Please enter your Confirm Password";
        return false;
      }else if(pass_2 != pass_1){
        document.getElementById('pass_2').style.borderColor = "red";
        document.getElementById('pass_2_error').innerHTML = "Password do not match";
        document.getElementById('pass_2').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });
        return false;
      }else{
        document.getElementById('pass_2').style.borderColor = "green";
        document.getElementById('pass_2_error').innerHTML = "";
      }
    }
