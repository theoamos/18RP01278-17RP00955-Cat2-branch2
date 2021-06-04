<html>
</style>
</head>

<body>
@if(Session::has('post_delete'))
<span>{{Session::get('post_delete')}}</span>
@endif


<div id = "login" >

<div id = "head">

</div>
<div id = "form">

<p id = "error" ></p>

<form action ="{{route('save.post')}}"  method = "post">

  @csrf
    

  <div class="group">      
    <input autocomplete="off" type="text" name="name" value="{{$post->name}}"required>
    <span class="highlight"></span>
    <span class="bar"></span>
    <label>Fullname</label>
  </div>
  <div class="group">      
    <input autocomplete="off" type="text" name="phone"value="{{$post->phone}}" required>
    <span class="highlight"></span>
    <span class="bar"></span>
    <label>Contact_Nmuber</label>
  </div>
    
  <div class="group">      
    <input autocomplete="off" type="text" name="purpose" value="{{$post->purpose}}" required>
    <span class="highlight"></span>
    <span class="bar"></span>
    <label>Purpose</label>
  </div>
    
    <div class="group">      
    <input autocomplete="off" type="text" name="meeting" value="{{$post->meeting}}" required>
    <span class="highlight"></span>
    <span class="bar"></span>
    <label>Meeting to</label>
  </div>
  <div class="group">      
    <input autocomplete="off" type="date" name="date" value="{{$post->date}}"required>
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

