@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FullForm</title>
    <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    {{-- Form Start Here  --}}
    <form method="POST" action="/home">
        @csrf











    <div class="container body-container">  
    {{-- Start Column 1 --}}
    <div class="row">
        <div class="col">
            <div class="container site-container column-left-container">
                <img class="image-parcel" src="{{url('images/courier.png')}}" alt="logo">
                <div class="text-details">
                    <p>www.courriersubitopresto.com - 450-586-2253</p>
                    <p>150 Rue Chérie, Lavaltrie, Quebec, J5T 3B6</p>
                </div>
            </div>
        </div>
    </div>
    </div>         
    {{-- Sender Form --}}
                {{-- <div class="container sender-form border border-success">
                            <div class="col">
                                <p id="head-text">SENDER</p>
                            <div class="row">
                                <div class="col">
                                <div class="form-group">
                                <input id="senderlastName" type="text" name="senderlastName" class="form-control" placeholder="Lastname">        
                                </div>
                                </div>
                                <div class="col">
                                <div class="form-group">
                                <input id="senderphoneNumber" type="text" name="senderphoneNumber" class="form-control" placeholder="Phone">        
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="container">
                                <div class="form-group">
                                    <input id="senderAddress" type="text" name="senderAddress" class="form-control" placeholder="Address">        
                                </div> 
                            </div>

                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input id="senderCity" type="text" name="senderCity" class="form-control" placeholder="City">        
                                        </div>
                                    </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input id="senderProvince" type="text" name="senderProvince" class="form-control" placeholder="Province">        
                                    </div>     
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input id="senderzipCode" type="text" name="senderzipCode" class="form-control" placeholder="Zip Code">        
                                    </div>     
                                </div>
                                </div>
                            </div>
                            <div class="container">
                                <p id="signature-form">Signature:____________________________________ <span>Time:________________</span></p>
                            </div> --}}
        
        {{-- </div> --}}
        {{-- <br/>  --}}
            {{-- Recipient Form --}}
                    {{-- <div class="container recipient-form border border-success">
                        <div class="col">
                            <p id="head-text">RECIPIENT</p>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input id="recipientlastName" type="text" name="recipientlastName" class="form-control" placeholder="Lastname">        
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <input id="recipientphoneNumber" type="text" name="recipientphoneNumber" class="form-control" placeholder="Phone">        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="form-group">
                                <input id="recipientAddress" type="text" name="recipientAddress" class="form-control" placeholder="Address">        
                            </div> 
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input id="recipientCity" type="text" name="recipientCity" class="form-control" placeholder="City">        
                                    </div>
                                </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input id="recipientProvince" type="text" name="recipientProvince" class="form-control" placeholder="Province">        
                                </div>     
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input id="recipientzipCode" type="text" name="recipientzipCode" class="form-control" placeholder="Zip Code">        
                                </div>     
                            </div>
                            </div>
                        </div>
                        <div class="container">
                            <p id="signature-form">Signature:____________________________________ <span>Time:________________</span></p>
                        </div>
                    </div>
                <br/> --}}
            {{-- QTY Textarea --}}
                    {{-- <div class="text-area-container">
                        <p id="qty-text">Qty.Details:</p>
                        <textarea  class="form-control" name="quantityDetails" id="quantityDetails" cols="80" rows="5"></textarea>
                    </div> --}}
                {{-- </div> --}}

            {{-- End of Column 1 --}}
                    

            {{-- Column 2 --}}
            {{-- Date and Payed Form --}}
                    <div class="col">
                        {{-- <div class="container border border-success date-form-container">
                            <div class="row"> --}}
                                {{-- <div class="col">
                                    <p id="head-text">DATE</p>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input id="dateProcessed" type="date" name="dateProcessed" class="form-control">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input id="clientNumber" type="number" name="clientNumber" class="form-control" placeholder="Client Number">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <textarea class="form-control" name="descriptionPackage" id="descriptionPackage" cols="15" rows="2" placeholder="Description/Package"></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                                {{-- <div class="col">
                                    <div class="container payed-by-container">
                                    <p id="head-text">PAYED BY</p>
                                        <div class="custom-control custom-checkbox checkbox-line">
                                            <input type="checkbox" class="custom-control-input" id="paybySender" name="paybySender" value="Sender">
                                            <label class="custom-control-label" for="paybySender">Sender</label>
                                        </div>
                                        <div class="custom-control custom-checkbox checkbox-line">
                                            <input type="checkbox" class="custom-control-input" id="paybyRecipient" name="paybyRecipient" value="Recipient">
                                            <label class="custom-control-label" for="paybyRecipient">Recipient</label>
                                        </div>
                                        <div class="custom-control custom-checkbox checkbox-line">
                                            <input type="checkbox" class="custom-control-input" id="paybyOther" name="paybyOther" value="Other">
                                            <label class="custom-control-label" for="paybyOther">Other</label>
                                        </div>
                                    </div>
                                </div> --}}
                            {{-- </div>
                        </div> --}}
                    {{-- <br/> --}}
            {{-- Cost Form --}}
                                {{-- <div class="container border border-success">
                                    <p id="heads-text">COST</p>
                                    <div class="row custom-border solo-custom-border">
                                        <div class="col-sm-4">
                                            <p>Rate</p>
                                        </div>

                                        <div class="col-sm-4">  
                                            <div class="form-group">
                                                <input id="firstRate" type="text" name="firstRate" class="form-control" placeholder="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div> 

                                        <div class="col-sm-4">  
                                            <div class="form-group">
                                                <input id="secondRate" type="text" name="secondRate" class="form-control" placeholder="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div> 
                                    </div>

                                    <div class="row custom-border">
                                        <div class="col-sm-4">
                                            <p>Dangerous Materials</p>
                                        </div>

                                        <div class="col-sm-4">  
                                            <div class="form-group">
                                                <input id="firstDanger" type="text" name="firstDanger" class="form-control" placeholder="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div> 

                                        <div class="col-sm-4">  
                                            <div class="form-group">
                                                <input id="secondDanger" type="text" name="secondDanger" class="form-control" placeholder="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div> 
                                    </div>

                                    <div class="row custom-border">
                                        <div class="col-sm-4">
                                            <p>Weight</p>
                                        </div>

                                        <div class="col-sm-4">  
                                            <div class="form-group">
                                                <input id="firstWeight" type="text" name="firstWeight" class="form-control" placeholder="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div> 

                                        <div class="col-sm-4">  
                                            <div class="form-group">
                                                <input id="secondWeight" type="text" name="secondWeight" class="form-control" placeholder="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div> 
                                    </div>

                                    <div class="row custom-border">
                                        <div class="col-sm-4">
                                            <p>Cubage</p>
                                        </div>

                                        <div class="col-sm-4">  
                                            <div class="form-group">
                                                <input id="firstCubage" type="text" name="firstCubage" class="form-control" placeholder="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div> 

                                        <div class="col-sm-4">  
                                            <div class="form-group">
                                                <input id="secondCubage" type="text" name="secondCubage" class="form-control" placeholder="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div> 
                                    </div>

                                    <div class="row custom-border">
                                        <div class="col-sm-4">
                                            <p>Waiting Time</p>
                                        </div>

                                        <div class="col-sm-4">  
                                            <div class="form-group">
                                                <input id="firstWaiting" type="text" name="firstWaiting" class="form-control" placeholder="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div> 

                                        <div class="col-sm-4">  
                                            <div class="form-group">
                                                <input id="secondWaiting" type="text" name="secondWaiting" class="form-control" placeholder="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div> 
                                    </div>

                                    <div class="row custom-border">
                                        <div class="col-sm-4">
                                            <p>Round Trip</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="custom-control custom-checkbox checkbox-line">
                                            <input type="checkbox" class="custom-control-input" id="roundTrip" name="roundTrip" value="Round Trip">
                                            <label class="custom-control-label" for="roundTrip"></label>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">  
                                            <div class="form-group">
                                                <input id="secondroundTrip" type="text" name="secondroundTrip" class="form-control" placeholder="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div> 
                                    </div>

                                    <div class="row custom-border">
                                        <div class="col-sm-4">
                                            <p>Truck</p>
                                        </div>

                                        <div class="col-sm-4">  
                                            <div class="form-group">
                                                <input id="firstTruck" type="text" name="firstTruck" class="form-control" placeholder="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div> 

                                        <div class="col-sm-4">  
                                            <div class="form-group">
                                                <input id="secondTruck" type="text" name="secondTruck" class="form-control" placeholder="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div> 
                                    </div>

                                    <div class="row justify-content-end custom-border">
                                        <div class="col-sm-4 justify-content-end">
                                            <p style="text-align:right">TOTAL</p>
                                        </div>


                                        <div class="col-sm-4">  
                                            <div class="form-group">
                                                <input id="totalCost" type="text" name="totalCost" class="form-control" placeholder="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div> 
                                    </div>

                                    <div class="row top-spacing">
                                        <div class="col">
                                            <p>Mail:_________________</p>
                                        </div>

                                        <div class="col">  
                                            <p>No.</p>
                                        </div> 
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <p>Mail:_________________</p>
                                        </div>

                                        <div class="col-4">  
                                            <div class="form-group">
                                                <input id="lastMail" type="text" name="lastMail" class="form-control" placeholder="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
            {{-- End of Column 2 --}}
                {{-- </div>
            </div> --}}

            {{-- Delivery Option --}}
            {{-- <div class="container delivery-time">
                <div class="row">
                    <div class="col deliver-col">
                        <div class="custom-control custom-checkbox checkbox-line">
                            <input type="checkbox" class="custom-control-input" id="specialEvent" name="specialEvent" value="Special Event">
                            <label class="custom-control-label" for="specialEvent">Special Event</label>
                        </div>
                    </div>
                    <div class="col deliver-col">
                        <div class="custom-control custom-checkbox checkbox-line">
                            <input type="checkbox" class="custom-control-input" id="codeRed" name="codeRed" value="Code Red">
                            <label class="custom-control-label" for="codeRed">Code Red</label>
                        </div>
                    </div>
                    <div class="col deliver-col">
                        <div class="custom-control custom-checkbox checkbox-line">
                            <input type="checkbox" class="custom-control-input" id="veryUrgent" name="veryUrgent" value="Very Urgent">
                            <label class="custom-control-label" for="veryUrgent">Very Urgent</label>
                        </div>
                    </div>
                    <div class="col deliver-col">
                        <div class="custom-control custom-checkbox checkbox-line">
                            <input type="checkbox" class="custom-control-input" id="urgent" name="urgent" value="Urgent">
                            <label class="custom-control-label" for="urgent">Urgent</label>
                        </div>
                    </div>
                    <div class="col deliver-col">
                        <div class="custom-control custom-checkbox checkbox-line">
                            <input type="checkbox" class="custom-control-input" id="sameDay" name="sameDay" value="Same Day">
                            <label class="custom-control-label" for="sameDay">Same Day</label>
                        </div>
                    </div>
                    <div class="col deliver-col">
                        <div class="custom-control custom-checkbox checkbox-line">
                            <input type="checkbox" class="custom-control-input" id="nextDay" name="nextDay" value="Next Day">
                            <label class="custom-control-label" for="nextDay">Next Day</label>
                        </div>
                    </div>
                    <div class="col deliver-col">
                        <div class="custom-control custom-checkbox checkbox-line">
                            <input type="checkbox" class="custom-control-input" id="nextDay48" name="nextDay48" value="Next Day 48">
                            <label class="custom-control-label" for="nextDay48">Next Day (48h)</label>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- Buttons Here --}}
            {{-- <div class="container btn-group d-flex justify-content-center">
                <div class="button-align">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" class="btn btn-success">Print</button>
                </div> --}}


    </form>
{{-- Form End Here --}}
    </div> 
</div> 
</div>
{{-- End of Body --}}
</body>
</html>
@endsection