<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormData;
use PDF;
class FullFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('fullform');
        // return FormData::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = ['senderName' => 'Laravel 7'];
        $pdf = PDF::loadView('fullform',$data);
        return $pdf->download('invoice.pdf');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $receipt = new FormData;
        $receipt->senderName = $request->input('senderlastName');
        $receipt->senderAddress = $request->input('senderphoneNumber');
        $receipt->senderPhone = $request->input('senderAddress');
        $receipt->senderCity = $request->input('senderCity');
        $receipt->senderProvince = $request->input('senderProvince');
        $receipt->senderZipCode = $request->input('senderzipCode');
        $receipt->recipientName = $request->input('recipientlastName');
        $receipt->recipientAddress = $request->input('recipientphoneNumber');
        $receipt->recipientPhone = $request->input('recipientAddress');
        $receipt->recipientCity = $request->input('recipientCity');
        $receipt->recipientProvince = $request->input('recipientProvince');
        $receipt->recipientZipCode = $request->input('recipientzipCode');
        $receipt->quantityDetails = $request->input('quantityDetails');
        $receipt->dateProcessed = $request->input('dateProcessed');
        $receipt->clientNumber = $request->input('clientNumber');
        $receipt->descriptionPackage = $request->input('descriptionPackage');
        $receipt->payby = $request->input('payby');
        $receipt->rate1 = $request->input('firstRate');
        $receipt->rate2 = $request->input('secondRate');
        $receipt->dangermaterial1 = $request->input('firstDanger');
        $receipt->dangermaterial2 = $request->input('secondDanger');
        $receipt->weight1 = $request->input('firstWeight');
        $receipt->weight2 = $request->input('secondWeight');
        $receipt->cubage1 = $request->input('firstCubage');
        $receipt->cubage2 = $request->input('secondCubage');
        $receipt->waitingTime1 = $request->input('firstWaiting');
        $receipt->waitingTime2 = $request->input('secondWaiting');
        $receipt->roundTrip = $request->input('roundTrip');
        $receipt->roundTripDetail = $request->input('secondroundTrip');
        $receipt->truck1 = $request->input('firstTruck');
        $receipt->truck2 = $request->input('secondTruck');
        $receipt->totalCost = $request->input('totalCost');
        $receipt->lastMail = $request->input('lastMail');
        $receipt->deliveryType = $request->input('deliveryType');
        $receipt->save();

        return view('fullform');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
