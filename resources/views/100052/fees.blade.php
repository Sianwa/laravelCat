@extends('inc.messages')
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
@include('inc.messages')
  <div>
    <form class="form" method="post" action=" {{ action('FeesController@pay') }}">
        {{ csrf_field() }}
      <div class="text-center mb-4">
        <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <p> <a href="/"> Home </a><a href="/student"> Register </a><a href="/search"> Search </a></p>
      </div>
           <h1 class="h3 mb-3 font-weight-normal">Fee Payment</h1>
           
      <label for="inputNumber" class="sr-only">Student Number</label>
      <input type="text" id="inputNumber" class="form-control" placeholder="Student Number" required  name='id' autofocus>

      <label for="dop" class="sr-only">Date of Payment</label>
      <input type="date" id="dop" class="form-control" placeholder="Date of Payment" name="date_of_payment" required autofocus>

       <label for="Poptions" class="sr-only">Payment Options</label>
          <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" >
                <option selected>Options...</option>
                <option value="1">Pay in full</option>
                <option value="2">Pay in bits</option>
          </select>
      <label for="inputAmount" class="sr-only">Amount</label>
      <input type="text" id="inputAmount" class="form-control" placeholder="Amount" name="amount" required autofocus>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Pay</button>

      <br>
      <br>
    </form>  
</div>
  </body>
</html>
