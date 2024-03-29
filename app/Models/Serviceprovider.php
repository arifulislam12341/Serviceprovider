<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serviceprovider extends Model
{
    use HasFactory;

    public function serviceProviderDetail(){
        $details= Serviceprovider::where("id",$this->id)->get();
       
        return view('pages.service.serviceProviderInfo')->with('details', $details);
    }
}
