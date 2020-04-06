<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Delivery;
use Illuminate\Support\Facades\Redirect;

class DeliveryController extends Controller
{
    /**
     * Admin functionalities
     * */ 
    public function CreateDelivery(Request $request){
        $validate = Validator::make($request->all(),[
            'trackingNum' => ['required', 'string', 'max:255'],
            'origin' => ['required', 'string'],
            'destination' => ['required', 'string'],
            'daysIntransit' => ['required', 'string'],
            'deliveredWithin' => ['required', 'string'],
            'lng' => ['required'],
            'lat' => ['required'],
            'currentLocation' => ['required', 'string'],
        ]);   

        if($validate->fails()){
            return response()->json($validate->errors()->toJson());
        }

        // insert into db
        $deliveryDetails = Delivery::create([
            'tracking_num' => $request->get('trackingNum'),
            'origin' => $request->get('origin'),
            'destination' => $request->get('destination'),
            'daysIntransit' => $request->get('daysIntransit'),
            'DeliveredWith' => $request->get('deliveredWithin'),
            'Lng' => $request->get('lng'),
            'Lat' => $request->get('lat'),
            'CurrentLocation' => $request->get('currentLocation'),
            'OrderStatus' => 0
        ]);

        return Redirect::back()->with('success','Order added!');
    }

    public function EditDelivery(Request $request){
        $id = $request->id;
        $content = Delivery::find($id);
        return view('admin/editOrder', compact('content'));
    }

    public function EditDeliverySave(Request $request){
        $validate = Validator::make($request->all(), [
            'trackingNum' => ['required', 'string', 'max:255'],
            'origin' => ['required', 'string'],
            'destination' => ['required', 'string'],
            'daysIntransit' => ['required', 'string'],
            'deliveredWithin' => ['required', 'string'],
            'currentLocation' => ['required', 'string'],
        ]);

        // save
        $order = Delivery::find($request->id);
        $order->tracking_num = $request->get('trackingNum');
        $order->origin = $request->get('origin');
        $order->destination = $request->get('destination');
        $order->daysIntransit = $request->get('daysIntransit');
        $order->DeliveredWith = $request->get('deliveredWithin');
        $order->CurrentLocation = $request->get('currentLocation');
        $order->Lng = $request->get('lng');
        $order->Lat = $request->get('lat');
        $order->save();

        return redirect('/admin/show/delivery')->with('message', 'edited');
    }

    public function ShowAllDelivery(){
        $allDelivery = Delivery::all();
        return view('admin/showOrder', compact('allDelivery'));
    }

    /**
     * client functionalities
     * */ 

    public function SearchOrder(Request $request){
        
        $trackCode = $request->search;
        if($trackCode == ""){
            return response()->json([
                'message' => 'this field is required'
            ], 403);
        }

        $data = Delivery::where('tracking_num', $trackCode)->get();
        if($data->count() < 1){
            return response()->json([
                'message' => 'data Not found'
            ], 404);
        }else{
            return response()->json($data);
        }
    }

    public function CreateTrackingCode(){
        // Available alpha caracters
        $string = str_random(15);
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        // generate a pin based on 2 * 7 digits + a random character
        $pin = mt_rand(1000000, 9999999)
            . mt_rand(1000000, 9988765)
            . $characters[rand(0, strlen($characters) - 1)];

        // shuffle the result
        $string = str_shuffle($pin);
        return $string;
    }
    
}
