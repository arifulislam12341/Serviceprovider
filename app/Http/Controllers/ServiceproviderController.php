<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Serviceprovider;
use App\Http\Requests\StoreServiceproviderRequest;
use App\Http\Requests\UpdateServiceproviderRequest;
use Session;

use Illuminate\Support\Facades\Cookie;


class ServiceproviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServiceproviderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceproviderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Serviceprovider  $serviceprovider
     * @return \Illuminate\Http\Response
     */
    public function show(Serviceprovider $serviceprovider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Serviceprovider  $serviceprovider
     * @return \Illuminate\Http\Response
     */
    public function edit(Serviceprovider $serviceprovider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceproviderRequest  $request
     * @param  \App\Models\Serviceprovider  $serviceprovider
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServiceproviderRequest $request, Serviceprovider $serviceprovider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Serviceprovider  $serviceprovider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Serviceprovider $serviceprovider)
    {
        //
    }
    public function home(){
        return view('home');

    }

    public function serviceproviderRegistration(){
        return view("pages.service.providerRegistration");


    }
    public function serviceproviderRegistrationSubmit(Request $request)
    {
        $validate=$request->validate(
        [
            'name'=>'required|min:3|max:100',
            'email'=>'required',
            'password'=>'required',
            'phonenu'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
              'servicetype'=>'required',
            'address'=>'required',
    
        ],
        [
            'name.required'=>'Please Enter Your Name',
            'name.min'=>'Name must be greater than 3 charcters',
            'name.max'=>'Name must be less than 100 charcters',
            'password.required'=>'Please Enter Your password',
            'phonenu.required'=>'Please Enter Your Phone Number',
            'email.required'=>'Please Enter Your Email',
            'servicetype.required'=>'Please Enter Your service type',
            'address.required'=>'Please Enter Your address',
        ]
        );
        $service=new Serviceprovider();

        $service->name =$request->name;
        $service->email=$request->email;
        $service->password=$request->password;
        $service->phoneno =$request->phonenu;
        $service->servicetype =$request->servicetype;
        $service->address=$request->address;
 
        
 
        $service->save();
        return redirect()->route('serviceproviderlogin');
    }
    public function serviceproviderlogin(){

        return view('pages.service.providerLogin');

}
public function serviceproviderloginSubmit(Request $request)
{
    $validate=$request->validate(
    [
        
     
        'email'=>'required',
        'password'=>'required',

    ],
    [
        
       
        
        'email.required'=>'Please enter your email',
        'password.required'=>'Please enter your password',
    ]
    );
    $service=Serviceprovider::where("email",$request->email)
    ->where("password",$request->password)

        ->first();

        if ($service){
            $request->session()->put("serviceId",$service->id); 
            if ($request->remember) {
                setcookie('remember',$request->email, time()+36000);
                Cookie::queue('name',$service->email,time()+60);
            }else{
                setcookie('remember',"");
                Cookie::queue('name',"");
            }
            return redirect()->route("serviceproviderInfo");
            
        }

        return back();
       
}
public function serviceDash(){
    return view ("pages.service.providerDash");
}

public function serviceproviderInfo(){
   
    $id=Session::get("serviceId");
    $t =Serviceprovider::where('id',$id)->first();

    return $t->serviceProviderDetail();
   
    
}
public function serviceproviderUpdate(){
    $id=Session::get("serviceId");
    $user =Serviceprovider ::where('id', $id)->first();
    return view('pages.service.providerupdate')->with('user', $user);
   }

   public function serviceproviderUpdateSubmit(Request $request){
   
       $service =Serviceprovider ::where('id', $request->id)->first();
       
   
  
       $service->name =$request->name;
       $service->email=$request->email;
       $service->password=$request->password;
       $service->phoneno =$request->phonenu;
       $service->servicetype =$request->servicetype;
       $service->address=$request->address;
 
     $service->save();
     return redirect()->route("serviceproviderInfo");
 
 }
 public function serviceproviderDelete(Request $request){
    $id=Session::get("serviceId");
    $service =Serviceprovider ::where('id', $id)->delete();
    


//     $service->name =$request->name;
//     $service->email=$request->email;
//     $service->password=$request->password;
//     $service->phoneno =$request->phonenu;
//     $service->servicetype =$request->servicetype;
//     $service->address=$request->address;

//   $service->delete();
     session()->forget('serviceId');

  return view ("pages.service.providerRegistration");

}



 public function serviceproviderLogout(){
     session()->forget('serviceId');
     return redirect()->route('serviceproviderlogin');
 }
}