<!DOCTYPE html>
<html lang="en">
<head>
    
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .navbar-custom {
  background-color: #ff3333;
  border-color: #ff1212;
  background-image: -webkit-gradient(linear, left 0%, left 100%, from(#ff6666), to(#ff3333));
  background-image: -webkit-linear-gradient(top, #ff6666, 0%, #ff3333, 100%);
  background-image: -moz-linear-gradient(top, #ff6666 0%, #ff3333 100%);
  background-image: linear-gradient(to bottom, #ff6666 0%, #ff3333 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffff6666', endColorstr='#ffff3333', GradientType=0);
            padding: 10px 0px;
}
.navbar-custom .navbar-brand {
  color: #ffffff;
}
.navbar-custom .navbar-brand:hover,
.navbar-custom .navbar-brand:focus {
  color: #e6e6e6;
  background-color: transparent;
}
.navbar-custom .navbar-text {
  color: #ffffff;
}
.navbar-custom .navbar-nav > li:last-child > a {
  border-right: 1px solid #ff1212;
}
.navbar-custom .navbar-nav > li > a {
  color: #ffffff;
  border-left: 1px solid #ff1212;
}
.navbar-custom .navbar-nav > li > a:hover,
.navbar-custom .navbar-nav > li > a:focus {
  color: #c0c0c0;
  background-color: transparent;
}
.navbar-custom .navbar-nav > .active > a,
.navbar-custom .navbar-nav > .active > a:hover,
.navbar-custom .navbar-nav > .active > a:focus {
  color: #c0c0c0;
  background-color: #ff1212;
  background-image: -webkit-gradient(linear, left 0%, left 100%, from(#ff1212), to(#ff4545));
  background-image: -webkit-linear-gradient(top, #ff1212, 0%, #ff4545, 100%);
  background-image: -moz-linear-gradient(top, #ff1212 0%, #ff4545 100%);
  background-image: linear-gradient(to bottom, #ff1212 0%, #ff4545 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffff1212', endColorstr='#ffff4545', GradientType=0);
}
.navbar-custom .navbar-nav > .disabled > a,
.navbar-custom .navbar-nav > .disabled > a:hover,
.navbar-custom .navbar-nav > .disabled > a:focus {
  color: #cccccc;
  background-color: transparent;
}
.navbar-custom .navbar-toggle {
  border-color: #dddddd;
}
.navbar-custom .navbar-toggle:hover,
.navbar-custom .navbar-toggle:focus {
  background-color: #dddddd;
}
.navbar-custom .navbar-toggle .icon-bar {
  background-color: #cccccc;
}
.navbar-custom .navbar-collapse,
.navbar-custom .navbar-form {
  border-color: #ff0f0f;
}
.navbar-custom .navbar-nav > .dropdown > a:hover .caret,
.navbar-custom .navbar-nav > .dropdown > a:focus .caret {
  border-top-color: #c0c0c0;
  border-bottom-color: #c0c0c0;
}
.navbar-custom .navbar-nav > .open > a,
.navbar-custom .navbar-nav > .open > a:hover,
.navbar-custom .navbar-nav > .open > a:focus {
  background-color: #ff1212;
  color: #c0c0c0;
}
.navbar-custom .navbar-nav > .open > a .caret,
.navbar-custom .navbar-nav > .open > a:hover .caret,
.navbar-custom .navbar-nav > .open > a:focus .caret {
  border-top-color: #c0c0c0;
  border-bottom-color: #c0c0c0;
}
.navbar-custom .navbar-nav > .dropdown > a .caret {
  border-top-color: #ffffff;
  border-bottom-color: #ffffff;
}
@media (max-width: 767) {
  .navbar-custom .navbar-nav .open .dropdown-menu > li > a {
    color: #ffffff;
  }
  .navbar-custom .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-custom .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #c0c0c0;
    background-color: transparent;
  }
  .navbar-custom .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-custom .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-custom .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #c0c0c0;
    background-color: #ff1212;
  }
  .navbar-custom .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-custom .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-custom .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #cccccc;
    background-color: transparent;
  }
}
.navbar-custom .navbar-link {
  color: #ffffff;
}
.navbar-custom .navbar-link:hover {
  color: #c0c0c0;
}
        
        .field{
            border-radius: 5px;
            border: 1px solid #ccc;
            -webkit-border-radius: 5px;
        }
        
        .foot{
            background-color: #d9d9d9;
        }
        
        
    </style>
    
    
    
    
    <script>
    
    
      function checkPassword(){
            var pwd = document.getElementById("pwd").value;
            var confirmpwd = document.getElementById("confirmpwd").value;
          
            if(pwd != confirmpwd){
                
                document.getElementById("confirmpwd").style.borderColor = "red";
                
            }
          else
              document.getElementById("confirmpwd").style.borderColor = "";
        }
        
        function checkPassword1(){
            
            var pwd = document.getElementById("pwd");
            var confirmpwd = document.getElementById("confirmpwd");
          
            if(pwd.value != confirmpwd.value){
                
                document.getElementById('errfn').innerHTML="Password do not match";
                confirmpwd.value = "";
            }
            else{
                document.getElementById('errfn').innerHTML="";
            }
        }
        
    </script>
    
    
</head>
    
<body>

    <nav class="navbar navbar-custom navbar-fixed-top">
    
        <div class="container">
        
            <div class="navbar-header">
            
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navCollapse">
                
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<img src="logo1.JPG" style="padding: 0;" class="img-rounded img-responsive navbar">-->
                <a class="navbar-brand" href="Page.php"><span style="color: #FFFFFF;">Red Drop</span></a>
            </div>
            
            
        </div>
    </nav>
    <div class="container" style="margin-top:100px;;">
        <h2>Register as a Blood Donor</h2> 
    </div>
    
    <div class="container">
        <ul class="breadcrumb">
        
            <li><a href="Page.php">Home</a></li>
            <li class="active">Become a Donor</li>
        </ul>
    </div>
    <br>
    
    <!-- Login Information -->
    <form class="form-horizontal" action="Donor_Register_Php-1.php" method="POST">
    <div class="container">
                          <legend>Login Information</legend>
                                <br><br>
                          
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="Username">Username:</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="Username" placeholder="Enter username" name="Username" required maxlength="20" autofocus>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="FullName">Full Name:</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="FullName" placeholder="Enter your name" name="FullName" required maxlength="20">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="Email">Email:</label>
                              <div class="col-sm-10">
                                <input type="email" class="form-control" id="Email" placeholder="Enter email" name="Email" required maxlength="30">
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="pwd">Password:</label>
                              <div class="col-sm-10">          
                                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required maxlength="30"><div id="errfn"></div>
                              </div>
                            </div>
                            <div id="checkpwd"></div>
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="confirmpwd">Confirm Password:</label>
                              <div class="col-sm-10">          
                                <input type="password" class="form-control" id="confirmpwd" placeholder="Confirm password" name="confirmpwd" required maxlength="30" onkeyup="checkPassword()" onchange="checkPassword1()">
                              </div>
                            </div>
<!--  </form>-->
    </div>
     <br><br><br> 
    <!-- Donor Information -->
    
    <div class="container">
        <legend>Donor Information</legend>
       <br><br>
   <!-- <form class="form-horizontal">-->
    <div class="form-group">
      <label class="control-label col-sm-2" for="Age">Age:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="Age" placeholder="Enter age" name="Age" required>
      </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="Gender">Gender:</label>
        <div class="col-sm-10">
        <select class="form-control" name="Gender" id="Gender">
        
            <option value="Male" required>Male</option>
            <option value="Female" required>Female</option>
            <option value="Gender" selected="selected" required>Select</option>
        </select>
            </div>
      
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="BloodGroup">Blood Group:</label>
      <div class="col-sm-10">          
        <select class="form-control" name="BloodGroup" id="BloodGroup">
          
            <option value="A+">A+</option>
            <option value="A+">AB+</option>
            <option value="A+">O+</option>
            <option value="A+">A-</option>
            <option value="A+">AB-</option>
            <option value="A+">O-</option>
            <option value="BloodGroup" selected="selected" required>Select</option>
          </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Weight">Weight(in Kg):</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="pwd" placeholder="Enter weight" name="Weight" required>
      </div>
    </div>
        
        <div class="form-group">
        <label class="control-label col-sm-2" for="HowOften">How often you donate blood?</label>
        <div class="col-sm-10">
        <select class="form-control " name="HowOften" id="HowOften">
        
            <option value="YetToDonate">Yet to Donate</option>
            <option value="RegularDonor">Regular donor</option>
            <option value="OnNeedBasis">On need basis</option>
            <option value="HowOften" selected="selected" required>Select</option>
        </select>
            </div>
      
    </div>
<!--  </form>-->
</div>
    <br><br><br>

    <!-- Contact Information -->
    
    <div class="container">
  <legend>Contact Information</legend>
        <br><br>
  <!--<form class="form-horizontal">-->
    <div class="form-group">
      <label class="control-label col-sm-2" for="DonorPhone">Residence Phone:</label>
      <div class="col-sm-10">
        <input type="tel" class="form-control" id="DonorPhone" placeholder="Enter your phone number" name="DonorPhone" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="DonorMobile">Mobile Number:</label>
      <div class="col-sm-10">
        <input type="tel" class="form-control" id="DonorMobile" placeholder="Enter your mobile number" name="DonorMobile" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="DonorAddress">Address:</label>
      <div class="col-sm-10">          
        <input type="textarea" class="form-control" id="DonorAddress" placeholder="Enter your address" name="DonorAddress" required>
      </div>
    </div>
    <div class="form-group">
      <div class="city-wrap">
          <label class="control-label col-sm-2" for="City">City(lowercase):</label>
          <div class="col-sm-10">
        <input type="text" class="form-control" name="City" id="City" placeholder="Enter your city" required>
          </div>
        
    </div>
      </div>
 <!-- </form>-->
    </div>
    <br><br><br>
    <center>
    <input type="submit" name="DRegister" data-toggle="modal" data-target="#DonorRegister" class="btn-primary btn-lg" value="Register" required>
    </center></form>
    <br><br><br>
    
    <!--<div class="container field" style="background-color: #4d4d4d; height:100px">
    
        <center>
        <h5>Copyright © BloodBank Database System 2017</h5>
            </center>
    </div>-->
    
    
    
    
    
    <br><br><br>
<!-- FOOTER -->
            
      <div class="divider"></div>
      <div class="foot">
        <footer class="page-footer center-on-small-only">
          <!--Footer Links-->
          
            <div class="container-fluid">
                <div class="row">
                    <!--First column-->
                    <div class="col-md-3"></div>
                    
                    <div class="col-md-4">
                        <h3 class="title">Red Drop</h3>
                        <p>A life may depend on a gesture from you, a bottle of Blood.</p>
                    </div><br>
                    <div class="col-md">
                        
                    </div>
                </div>
            </div>
            <br>
            <div class="footer-copyright">
                <div class="container-fluid text-center">
                    © 2016 Copyright: <a href="Page.php"> RedDrop </a>

                </div>
            </div>
            <br><br>
        </footer>
      
      </div>


</body>
</html>