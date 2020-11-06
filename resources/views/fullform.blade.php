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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container body-container">  
    <form method="POST" action="/fullform">
        @csrf
<div class="row">

            {{-- Start Column 1 --}}
        <div class="col">

            <div class="container site-container">
                <img class="image-parcel" src="{{url('images/courier.png')}}" alt="logo">
                <div class="text-details">
                    <p>www.courriersubitopresto.com - 450-586-2253</p>
                    <p>150 Rue Chérie, Lavaltrie, Quebec, J5T 3B6</p>
                </div>
            </div>
            {{-- Sender Form --}}
            <div class="container sender-form border border-success">
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
                        </div>
            </div>
            <br/> 
            {{-- End of Sender Form --}}
            {{-- Recipient Form --}}
            <div class="container recipient-form border border-success">
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
           </div><br/>
        {{-- End of Recipient Form --}}
        {{-- QTY Textarea --}}
            <div class="text-area-container">
                <p id="qty-text">Qty.Details:</p>
                <textarea  class="form-control" name="quantityDetails" id="quantityDetails" cols="80" rows="5"></textarea>
            </div>
        {{-- End QTY Textarea --}}
            <br/>
        </div>
        {{-- End of Column 1 --}}


        {{-- Start Column 2 --}}
        <div class="col">
        {{-- Start Date Form --}}
           <div class="container">
                <div class="container border border-success date-form-container">
                    <div class="row">
                        <div class="col">
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
                        </div> 
                        <div class="col">
                            <div class="container payed-by-container">
                                <p id="head-text">PAYED BY</p>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="paybySender" name="payby" class="custom-control-input" value="Sender">
                                        <label class="custom-control-label" for="paybySender">Sender</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="paybyRecipient" name="payby" class="custom-control-input" value="Recipient">
                                        <label class="custom-control-label" for="paybyRecipient">Recipient</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="paybyOther" name="payby" class="custom-control-input" value="Other">
                                        <label class="custom-control-label" for="paybyOther">Other</label>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br/>
        {{-- End Date Form --}}
        {{-- Start Cost Form --}}
        <div class="container">
            <div class="container border border-success">
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
        {{-- Danger Materials --}}
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
                {{-- End Danger Materials --}}
                {{-- Start Weight --}}
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
                {{-- End Start Weight --}}
                {{-- Start Cubage --}}
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
                {{-- End Start Cubage --}}
                {{-- Start Waiting Time --}}
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
                {{-- End Waiting Time --}}
                {{-- Start Road Trip --}}
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
                {{-- End Road Trip --}}
                {{-- Start Truck --}}
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
                {{-- End Truck --}}
                {{-- Start Total --}}
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
                {{-- End Total --}}
                {{-- Start Mail --}}
                <div class="row top-spacing">
                    <div class="col">
                        <p>Mail:_________________</p>
                    </div>

                    <div class="col">  
                        <p>No.</p>
                    </div> 
                </div>
                {{-- End Mail --}}
                {{-- Start Mail 2 --}}
                <div class="row">
                    <div class="col">
                        <p>Mail:_________________</p>
                    </div>
                    <div class="col-6">  
                        <div class="form-group">
                            <input id="lastMail" type="text" name="lastMail" class="form-control" placeholder="">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div> 
                </div>
                {{-- End Mail 2 --}}
            </div>
        </div>
        {{-- End Cost Form --}}
        </div>
        {{-- End of Column 2 --}}
</div><br/>
                    {{-- Start Delivery Option --}}
        <div class="container delivery-time">
            <div class="row">
                <div class="col deliver-col">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="specialEvent" name="deliveryType" class="custom-control-input" value="Special Event">
                        <label class="custom-control-label" for="specialEvent">Special Event</label>
                    </div>
                </div>
                <div class="col deliver-col">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="codeRed" name="deliveryType" class="custom-control-input" value="Code Red">
                        <label class="custom-control-label" for="codeRed">Code Red</label>
                    </div>
                </div>
                <div class="col deliver-col">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="veryUrgent" name="deliveryType" class="custom-control-input" value="Very Urgent">
                        <label class="custom-control-label" for="veryUrgent">Very Urgent</label>
                    </div>
                </div>
                <div class="col deliver-col">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="urgent" name="deliveryType" class="custom-control-input" value="Urgent">
                        <label class="custom-control-label" for="urgent">Urgent</label>
                    </div>
                </div>
                <div class="col deliver-col">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="sameDay" name="deliveryType" class="custom-control-input" value="Same Day">
                        <label class="custom-control-label" for="sameDay">Same Day</label>
                    </div>
                </div>
                <div class="col deliver-col">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nextDay" name="deliveryType" class="custom-control-input" value="Next Day">
                        <label class="custom-control-label" for="nextDay">Next Day</label>
                    </div>
                </div>
                <div class="col deliver-col">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nextDay48" name="deliveryType" class="custom-control-input" value="NextDay (48h)">
                        <label class="custom-control-label" for="nextDay48">NextDay (48h)</label>
                    </div>
                </div>
            </div>
        </div>
        {{-- End of Delivery Option --}}
        {{-- Submit Button Here --}}
        <div class="container btn-group d-flex justify-content-center">
            <div class="button-align">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="submit" class="btn btn-success" disabled>Print</button>
            </div>
        </div>
        {{-- End Submit Button Here --}}
</form>
</div>   
</body>
</html>
@endsection