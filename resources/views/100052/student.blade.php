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

    <title>Register Student</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>

  <body class="text-center">
    <div>
    <form class="form-signin" method="post" action=" {{ action('StudentController@createStudent') }}">
      {{ csrf_field() }}

     <div class="text-center mb-4">
        <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <p> <a href="/"> Home </a><a href="/fees"> Register </a><a href="/search"> Search </a></p>
      </div>
      <h1 class="h3 mb-3 font-weight-normal">Register Student</h1>
      <label for="inputName" class="sr-only">Full Name</label>
      <input type="text" id="inputName" class="form-control" placeholder="Full Name" name="FullName" required autofocus>

      <label for="inputDob" class="sr-only">Date of Birth</label>
      <input type="date" id="inputDob" class="form-control" placeholder="Date of Birth" name="date_of_birth" required autofocus>

      <label for="inputAddress" class="sr-only">Address</label>
      <input type="text" id="inputAddress" class="form-control" placeholder="Address" name="Address" required>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
     </div>
    </form>
  </body>
</html>
