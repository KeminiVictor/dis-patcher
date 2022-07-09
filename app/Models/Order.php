<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

      public function user()
    {

         return $this->belongsTo(User::class,"user_id");
    }

    function stops(){
      return DeliveryPoint::where("order_id",$this->id)->where("type","STOP")->get();
    }

    function from(){
      return DeliveryPoint::where("order_id",$this->id)->where("type","FROM")->get()->first();
    }
    function to(){
      return DeliveryPoint::where("order_id",$this->id)->where("type","TO")->get()->first();
    }


    
}
