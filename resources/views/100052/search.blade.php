<!DOCTYPE html>
<html lang="en">
  <head>
  	<style type="text/css">
  		
html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: -webkit-box;
  display: flex;
  -ms-flex-align: center;
  -ms-flex-pack: center;
  -webkit-box-align: center;
  align-items: center;
  -webkit-box-pack: center;
  justify-content: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

  	</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Fee payment</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>

  <body class="text-center">

    <div>  
    <form method="post" action="/search">
      {{ csrf_field() }}
       <p class="font-weight-bold">Search Student Account info</p>
        <div class="text-center mb-4">
        <p> <a href="/"> Home </a><a href="/student"> Register </a><a href="/search"> Search </a></p>
      </div>
       <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="studentID"><br>
       <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
     </form>

     <div class="container">
    @if(isset($details))
    <br>
        <p> The Search results for are :</p>
    <h2>Student Details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Amount</th>
                <th>Date of Payment</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->amount}}</td>
                <td>{{$student->date_of_payment}}</td>
            </tr>
            @endforeach
             <tr>
        <td>Total: </td>
        <td>
            {{$message}}
        </td>
        <td></td>
    </tr>
        </tbody>
    </table>
    @endif
</div>
    
</div>

  </body>
</html>
