


<!DOCTYPE HTML5>
<hlml><head>
<link rel = "stylesheet" href= "BootStrap/css/bootstrap.min.css">
<style>
    
    #img{ 
      position: relative;
      left: 25%;
      height: 30%;

        

  }
  #login{     

      position: relative;
      left: 35%;
      text-align: center; 
      width: 40%;
      height: 50%;
      padding-top: 25px;
      background: unset;
        

      }

  #submitBtn{

        width: 100px;
  } 
  #head{
    position: relative;
    
    text-align: left;
  } 
  #form{
      position: absolute;
      padding-top: 40px;
      padding-bottom: 40px;
      padding-left: 45px;
      padding-right: 45px;
border: 5px solid #747474;
  border-radius: 10px;
  } 

  #error{
    font-size: 14px;
    color : #FF0000;
    padding-bottom: 2px;

  }

.group        { 
  position:relative; 
  margin-bottom:35px; 
}
input         {
  font-size:18px;
  padding:10px 10px 10px 5px;
  display:block;
  width:300px;
  border:none;
  border-bottom:solid 2.5px #757575;
}
input:focus     { outline:none; }

label          {
  color:#999; 
  padding-top:5px;
  font-size:18px;
  font-weight:normal;
  position:absolute;
  pointer-events:none;
  left:5px;
  top:10px;
  transition:0.2s ease all; 
}

input:focus ~ label, input:valid ~ label     {
  top:-25px;
  font-size:14px;
  color:#5264AE;
}

.bar  { position:relative; display:block; width:300px; }
.bar:before, .bar:after   {
  content:'';
  height:2px; 
  width:0;
  bottom:1px; 
  position:absolute;
  background:#5264AE; 
  transition:0.2s ease all; 
}
.bar:before {
  left:50%;
}
.bar:after {
  right:50%; 
}

/* active state */
input:focus ~ .bar:before, input:focus ~ .bar:after {
  width:50%;
}

<html>
</style>
</head>

<body>
@if(Session::has('addform'))
<span>{{Session::get('addform')}}</span>
@endif


<div id = "login" >

<div id = "head">

</div>
<div id = "form">

<p id = "error" ></p>

<form action ="{{route('save.post')}}"  method = "post">

  @csrf
    

  <div class="group">      
    <input autocomplete="off" type="text" name="name" required>
    <span class="highlight"></span>
    <span class="bar"></span>
    <label>Fullname</label>
  </div>
  <div class="group">      
    <input autocomplete="off" type="text" name="phone" required>
    <span class="highlight"></span>
    <span class="bar"></span>
    <label>Contact_Nmuber</label>
  </div>
    
  <div class="group">      
    <input autocomplete="off" type="text" name="purpose" required>
    <span class="highlight"></span>
    <span class="bar"></span>
    <label>Purpose</label>
  </div>
    
    <div class="group">      
    <input autocomplete="off" type="text" name="meeting" required>
    <span class="highlight"></span>
    <span class="bar"></span>
    <label>Meeting to</label>
  </div>
  <div class="group">      
    <input autocomplete="off" type="date" name="date" required>
    <span class="highlight"></span>
    <span class="bar"></span>
    <label>Entry Date</label>
  </div>
    <button style="float:left; width:90px" class= "btn btn-large btn-success" type = "submit">Login</button>
    <button style="float:left; width:90px" class= "btn btn-large btn-success" type = "reset">Clear</button>
  
  </form>
  </div>
</div>  
</body>
  
  </html>


























<style>
.header {
position: fixed;
top: 0;
width: 100%;
height: 55px;
background-color: #DFDFDF;
}
</style>

<header class="header">
<div class="container">
<p> <a href="front"><font size="3%" color="white"><b>Home</b></a></font> | <a href=""><font size="3%" color="white"><b>Addvistors</b></a></font>|<a href=""><font size="3%" color="white"><b>Check out vistor</b></a></font>|<a href="bothview"><font size="3%" color="white"><b>ViewData</b></a></font> |<a href=""><font size="3%" color="white"><b>Logout</b></a></font>  </p>
</div>
</footer>
<style>
.header
{
position
:
fixed
;
height
:
55px
;
top
:
0
;
color
:
#fff
;
padding-top
:
20px
;
width
:
100%
;
background
:
#00003E
;
background
:
-webkit-linear-gradient
(
to
right,
#31BDE6,
#00003E
)
;
background
:
linear-gradient
(
to
right,
#31BDE6,
#00003E
)
;
text-align
:
right
;
}
</style>







<style>
.footer {
position: fixed;
bottom: 0;
width: 100%;
height: 55px;
background-color: #DFDFDF;
}
</style>

<footer class="footer">
<div class="container">
<p>&copy; 2021 | Theo & Amos| Visitors Management System </p>
</div>
</footer>
<style>
.footer
{
position
:
fixed
;
height
:
55px
;
bottom
:
0
;
color
:
#fff
;
padding-top
:
20px
;
width
:
100%
;
background
:
#00003E
;
background
:
-webkit-linear-gradient
(
to
right,
#31BDE6,
#00003E
)
;
background
:
linear-gradient
(
to
right,
#31BDE6,
#00003E
)
;
text-align
:
center
;
}
</style>