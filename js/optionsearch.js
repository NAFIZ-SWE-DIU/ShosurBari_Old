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


