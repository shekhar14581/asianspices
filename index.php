
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- login screen code from https://codepen.io/login-->
     <link href="css/loginPage.css" rel="stylesheet">
	 
<title>Asian Spice</title>
</head>
<body>



<div class="login-wrapper">
  <div class="login-left">
     <img src="img/wood.jpg" alt="Login">
    <div class="h1">Enter the world of spices
	
	</div>
	
</div>
  <div class="login-right">

            <form class="form-signin" action="signin.php" method="POST" onsubmit="return validateForm()" name="myForm">
		    <h8 class="#" style="color:red;">Last Updated </h8>
		    <h8 class="#"  style="color:red;" id="date" color="red"></h8>
			<br>
        <h2 class="form-signin-heading">Sign In</h2>
	
        <input type="text" class="input-block-level"  name="email" placeholder="Email address" type="email">
		 <p id="demo" style="color:red;"></p>
           
           
        <input type="password" class="input-block-level" placeholder="Password" name="password">
		<br>
		<br> <!-- using arrays to get the dropdown value--> 
		
		<select id="selectNumber" name="type" class="form-control" required>
        
        <script> 
        var myArray = new Array("admin", "generaluser");
        for(i=0; i<myArray.length; i++) {  
            document.write('<option value="' + myArray[i] +'">' + myArray[i] + '</option>');
        }
        </script>
		 <p id="demo5" style="color:red;"></p>
        </select>  
		<!-- <select name="type" class="form-control">
		<p id="demo5" style="color:red;"></p>
		
             <option value="admin">Admin</option>
             <option value="generaluser">General User</option>
        </select> -->
		<p id="demo1" style="color:red;"></p>
        <br>
      

        <button class="btn btn-large btn-primary" style="margin-top: 5%; float: center;" type="submit" name="login_user">Sign in</button>
		 <!-- <a href="register.jsp"><button class="btn btn-large btn-primary" style="margin-top: -25.5%; float: left;">Sign up</button></a> -->




<br>

<a href="display.html" tabindex="5" class="forgot-password" style="float: center;">Continue as Guest</a>
      </form>
     
       
  </div>
</div>
         <script type="text/javascript">
     var openLoginRight = document.querySelector('.h1');
     var loginWrapper = document.querySelector('.login-wrapper');
     openLoginRight.addEventListener('click', function(){
     loginWrapper.classList.toggle('open'); 
     });
      </script>
	  
	  <script>
	  // Validating form using javascript
function validateForm() {


  var x = document.forms["myForm"]["email"].value;
  var y=document.forms["myForm"]["password"].value;
 

  if (x == "") {
    text = "*enter email";
    document.getElementById("demo").innerHTML = text;
    return false;
  }
    if (!x.match(/@/gi)) {
    text = "*Please input proper email format";
    document.getElementById("demo").innerHTML = text;
    return false;
  }
  

     if (y == "") {
    texty = "enter correct password";
    document.getElementById("demo1").innerHTML = texty;
	text = "";
    document.getElementById("demo").innerHTML = text;
    return false;
  
  }


set_name(this.myForm);

// Creating Customer Object starts
var emailAddress = document.forms["myForm"]["email"].value;
var password= document.forms["myForm"]["password"].value;

var Customer = {
	email:emailAddress,
	password:password};
    alert("Customer Object EmailAddress is "+Customer.email  + " and pass" + Customer.password);
}
// Creating Customer Object end
</script>


<script>
 // Creating Date Object and displaying on Screen
newDate =  new Date();
fullYear =newDate.getFullYear();
m = newDate.getMonth() + 1;
d = newDate.getDate();
document.getElementById("date").innerHTML = m + "/" + d + "/" + fullYear;
</script>

<SCRIPT LANGUAGE="JavaScript">
<!-- Original:  Bill Dortch, Idaho Design (bdortch@netw.com)



<!-- Begin
function getCookieVal (offset) {
var endstr = document.cookie.indexOf (";", offset);
if (endstr == -1)
endstr = document.cookie.length;
return unescape(document.cookie.substring(offset, endstr));
}
function GetCookie (name) {
var arg = name + "=";
var alen = arg.length;
var clen = document.cookie.length;
var i = 0;
while (i < clen) {
var j = i + alen;
if (document.cookie.substring(i, j) == arg)
return getCookieVal (j);
i = document.cookie.indexOf(" ", i) + 1;
if (i == 0) break;
}
return null;
}
function SetCookie (name, value) {
var argv = SetCookie.arguments;
var argc = SetCookie.arguments.length;
var expires = (argc > 2) ? argv[2] : null;
var path = (argc > 3) ? argv[3] : null;
var domain = (argc > 4) ? argv[4] : null;
var secure = (argc > 5) ? argv[5] : false;
document.cookie = name + "=" + escape (value) +
((expires == null) ? "" : ("; expires=" + expires.toGMTString())) +
((path == null) ? "" : ("; path=" + path)) +
((domain == null) ? "" : ("; domain=" + domain)) +
((secure == true) ? "; secure" : "");
}
function show_count() {
var expdate = new Date();
var num;
expdate.setTime(expdate.getTime() +  (24 * 60 * 60 * 1000 * 31));
if(!(num = GetCookie("jtotwcount")))
num = 0;
num++;
SetCookie ("user", num, expdate);
if (num == 1) document.write("Since this is the first time you have been here, please take a moment to look around.");
else document.write("You have been here " + num + " times.");
}
function auto_show_name() {
if(GetCookie("user") != null)
document.write("Welcome back to this week\'s tip " + GetCookie('user') + ". ");
else {
document.write("<FORM>Please enter your name: <INPUT TYPE = \"text\" NAME = \"nameinput\">" + "<BR><BR><INPUT TYPE = \"button\" VALUE = \"Save to Cookie\" onClick = \"set_name(this.form)\"></FORM>");
document.write("Please enter your first name in the input" + " box and press the \"Save to Cookie\" button, then the page will automatically reload. ");
   }
}
function set_name(myForm) {
alert("setting cookies");

var expdate = new Date ();
expdate.setTime (expdate.getTime() + (24 * 60 * 60 * 1000 * 31));
var username = myForm.email.value
alert(username);
if (username != "") {
if (confirm("Are you sure you want this saved as your name?")) {
SetCookie ("user", username, expdate);
window.history.go(0);
   }
}
else alert("Geez, at least enter something, entering nothing will cause an error.");
}
// End   cookie code from  http://www.jsmadeeasy.com/javascripts/Cookies/User%20Name/index.htm -->
</SCRIPT>


<script type="text/javascript" id="cookieinfo"
	src="js/banner.js"
	data-bg="#645862"
	data-fg="#FFFFFF"
	data-link="#F1D600"
	data-cookie="CookieInfoScript"
	data-text-align="left"
       data-close-text="Got it!">
</script>


</body>
</html>