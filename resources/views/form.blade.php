@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">

<div class="container prototype-class">

    <div class="row">
        
        <div class="col logo-container">
            <img style="max-width:80%;height:auto;margin:10px 0 10px 0;" src="{{url('images/courier.png')}}" alt="logo">
            <p>www.courriersubitopresto.com - 450-586-2253</p>
            <p>150 Rue Chérie, Lavaltrie, Quebec, J5T 3B6</p>
        </div>

        <div class="col form-container">
        <form method="POST" action="/request">
            @csrf
            <div class="form-group row">
                <label for="inputSender" class="col-sm-4 col-form-label">Sender</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="inputSender" placeholder="" name="sender">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputRecipient" class="col-sm-4 col-form-label">Recipient</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="inputRecipient" placeholder="" name="recipient">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputClientNumber" class="col-sm-4 col-form-label">Client Number</label>
                <div class="col-sm-5">
                  <input type="number" class="form-control" id="inputClientNumber" placeholder="" name="clientnumber">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputDate" class="col-sm-4 col-form-label">Date</label>
                <div class="col-sm-5">
                  <input type="date" class="form-control" id="inputDate" placeholder="" name="date">
                </div>
              </div>
                <div class="col text-center">
                    <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
              </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
@endsection
