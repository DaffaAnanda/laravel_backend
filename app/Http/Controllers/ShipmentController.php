<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{
    public function index()
    {
        $shipments = Shipment::all();
        return view('shipment.index', compact('shipments'));
    }
}
