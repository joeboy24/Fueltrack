<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Tank;
use App\Models\Pump;
use App\Models\Stock;
use App\Models\Pricing;
use App\Models\Company;
use App\Models\Reading;
use App\Models\Expense;
use App\Models\Attendance;
use Auth;
use Session;

class FuelController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        switch ($request->input('store_action')) {


            case 'create_user':

                // $user = new User;
                $ps1 = $request->input('password');
                $ps2 = $request->input('password_confirmation');
                $username = $request->input('name');
                $email = $request->input('email');
                $status = $request->input('status');
                $contact = $request->input('contact');
                // $pass_photo = $request->input('pass_photo');

                if ($ps1 == $ps2){

                    // try {
                    //     $this->validate($request, [
                    //         'pass_photo'  => 'max:5000|mimes:jpeg,jpg,png'
                    //     ]);
                    //     // if($request->hasFile('pass_photo')){
                    //         //get filename with ext
                    //         $filenameWithExt = $request->file('pass_photo')->getClientOriginalName();
                    //         //get filename
                    //         $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    //         //get file ext
                    //         $fileExt = $request->file('pass_photo')->getClientOriginalExtension();
                    //         //filename to store
                    //         $filenameToStore = $username.substr( $contact, -4).'.'.$fileExt;
                    //         //upload path
                    //         $path = $request->file('pass_photo')->storeAs('public/classified/users', $filenameToStore);
                    //     // }else{
                    //     //     return 171819;
                    //     //     $filenameToStore = $company->logo;
                    //     // }
            
                    // } catch (Exception $ex) {
                    //     return redirect('/companysetup')->with('error', 'Ooops..! File Error');
                    // }

                    try {

                        $create_user = User::firstOrCreate([
                            'name' => $username,
                            'email' => $email,
                            'contact' => $contact,
                            'status' => $status,
                            'password' => Hash::make($ps1),
                            'pass_photo' => 'noimage.png',
                            // 'pass_photo' => $filenameToStore
                        ]);

                        // $backup = User::firstOrCreate(
                        //     ['name' => 'Code80',
                        //     'email' => 'code80@pivoapps.net', 
                        //     'contact' => '-', 
                        //     'status' => 'Administrator', 
                        //     'password' => Hash::make('code.8080')]
                        // );
                        return redirect(url()->previous())->with('success', 'User '.$username.' successfully added!');
                        
                    }catch(\Throwable $th){
                        throw $th;
                        return redirect(url()->previous())->with('error', 'Oops..! Something is wrong! Could be duplicate entry.');
                    }
                }else{
                    return redirect(url()->previous())->with('error', 'Oops..! Passwords do not match');
                }

            break;

            case 'admi_config':
    
                $name = $request->input('name');
                $abrv = $request->input('abrv');
                $loc = $request->input('loc');

                $results = Company::find(1);

                if ($results){

                    $company = Company::find(1);
                    try {
                        $this->validate($request, [
                            'company_logo'  => 'max:5000|mimes:jpeg,jpg,png'
                        ]);
                        if($request->hasFile('company_logo')){
                            //get filename with ext
                            $filenameWithExt = $request->file('company_logo')->getClientOriginalName();
                            //get filename
                            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                            //get file ext
                            $fileExt = $request->file('company_logo')->getClientOriginalExtension();
                            //filename to store
                            $filenameToStore = $company->logo;
                            //upload path
                            $path = $request->file('company_logo')->storeAs('public/classified/company', $filenameToStore);
                        }else{
                            $filenameToStore = $company->logo;
                        }
            
                    } catch (Exception $ex) {
                        return redirect(url()->previous())->with('error', 'Ooops..! File Error');
                    }

                    try {
                        // $company = Company::find(1);
                        $company->user_id = auth()->user()->id;
                        $company->name = $name;
                        $company->abrv = $abrv;
                        $company->comp_add = $request->input('company_add');

                        $company->location = $loc;
                        $company->contact = $request->input('contact');

                        $company->email = $request->input('email');
                        $company->website = $request->input('company_web');
                        $company->reg_date = Date('d-m-Y');
                        $company->logo = $filenameToStore;

                        $company->save();
                        return redirect(url()->previous())->with('success', 'Company`s details successfully updated');
                    } catch(Exception $ex){
                        return redirect(url()->previous())->with('error', 'Oops..! Something went wrong');
                    }

                }else{

                    try {
                        $this->validate($request, [
                            'company_logo'   => 'required|max:5000|mimes:jpeg,jpg,png'
                        ]);
                        if($request->hasFile('company_logo')){
                            //get filename with ext
                            $filenameWithExt = $request->file('company_logo')->getClientOriginalName();
                            //get filename
                            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                            //get file ext
                            $fileExt = $request->file('company_logo')->getClientOriginalExtension();
                            //filename to store
                            $filenameToStore = 'company_logo.'.$fileExt;
                            //upload path
                            $path = $request->file('company_logo')->storeAs('public/classified/company', $filenameToStore);
                        }else{
                            $filenameToStore = '';
                        }
            
                    } catch (Exception $ex) {
                        return redirect(url()->previous())->with('error', 'Ooops..! Something went wrong');
                    }
                    

                    try {
                        $company = new Company;
                        $company->user_id = auth()->user()->id;
                        $company->name = $name;
                        $company->abrv = $abrv;
                        $company->comp_add = $request->input('company_add');

                        $company->location = $loc;
                        $company->contact = $request->input('contact');

                        $company->email = $request->input('email');
                        $company->website = $request->input('company_web');
                        $company->reg_date = Date('d-m-Y');
                        $company->logo = $filenameToStore;

                        $company->save();
                        return redirect(url()->previous())->with('success', 'Company`s details successfully added');
                    } catch(Exception $ex){
                        return redirect(url()->previous())->with('error', 'Ooops..! Something went wrong');
                    }
                    
                }
                
            break;

            case 'add_tank':
                if ($request->input('fuel_type') == 0) {
                    return redirect(url()->previous())->with('error', 'Oops..! Select Fuel Type to Proceed');
                }

                try {
                    $add_tank = Tank::firstOrCreate([
                        'user_id' => auth()->user()->id,
                        'fuel_type' => $request->input('fuel_type'),
                        'tank_name' => $request->input('tank_name'),
                        // 'pump_name' => $request->input('pump_name'),
                    ]);
                    return redirect(url()->previous())->with('success', $request->input('tank_name').' successfully created');
                } catch (\Throwable $th) {
                    throw $th;
                }
            break;

            case 'add_pump':
                $pump_count = Pump::all()->count();
                $tank_count = Tank::all()->count();
                $t1 = Tank::where('fuel_type', 'Diesel')->count();
                $t2 = Tank::where('fuel_type', 'Super')->count();
                $fuel_type = $request->input('fuel_type');
                $tank_id = $request->input('tank_id');
                $tfind = Tank::find($request->input('tank_id'));
                // return $fuel_type.' - '.$tfind->fuel_type;

                if ($pump_count == 12) {
                    return redirect(url()->previous())->with('error', 'Oops..! Maximum Pump Slot Reached... Contact PivoApps for Extension');
                }
                if ($tank_count < 1) {
                    return redirect(url()->previous())->with('error', 'Oops..! Create Tanks first in order to assign pumps');
                }
                if ($t1 < 1) {
                    return redirect(url()->previous())->with('error', 'Oops..! Create Tank for Diesel in order to assign Diesel Pumps');
                }
                if ($t2 < 1) {
                    return redirect(url()->previous())->with('error', 'Oops..! Create Tank for Super in order to assign Super Pumps');
                }
                if ($fuel_type == 0 || $tank_id == 0) {
                    return redirect(url()->previous())->with('error', 'Oops..! Select Fuel Type & Tank to Proceed');
                }
                if ($fuel_type == 'Super' && ($tfind->fuel_type == 'Diesel' || $tfind->fuel_type == 'Gas')) {
                    return redirect(url()->previous())->with('error', 'Oops..! Super cannot be assigned to Diesel/Gas tank');
                }
                if ($fuel_type == 'Diesel' && ($tfind->fuel_type == 'Super' || $tfind->fuel_type == 'Gas')) {
                    return redirect(url()->previous())->with('error', 'Oops..! Diesel cannot be assigned to Super/Gas tank');
                }
                if ($fuel_type == 'Gas' && ($tfind->fuel_type == 'Super' || $tfind->fuel_type == 'Diesel')) {
                    return $fuel_type.' - '.$tfind->fuel_type;
                    return redirect(url()->previous())->with('error', 'Oops..! Gas cannot be assigned to Super/Diesel tank');
                }

                try {
                    $add_pump = Pump::firstOrCreate([
                        'user_id' => auth()->user()->id,
                        'fuel_type' => $fuel_type,
                        'tank_id' => $tank_id,
                        'pump_name' => $request->input('pump_name'),
                    ]);
                    return redirect(url()->previous())->with('success', $request->input('pump_name').' successfully created');
                } catch (\Throwable $th) {
                    throw $th;
                }
            break;

            case 'add_stock':
                $amt = $request->input('amt');
                $litres = $request->input('litres');
                $tank_id = $request->input('tank_id');
                $tank = Tank::find($tank_id);

                if ($request->input('tank_id') == 0) {
                    return redirect(url()->previous())->with('error', 'Oops..! Select Tank to Proceed');
                }

                $sp = Stock::where('del', 'no')->where('fuel_type', 'Super')->latest()->first();
                $ds = Stock::where('del', 'no')->where('fuel_type', 'Diesel')->latest()->first();

                if ($tank->fuel_type == 'Super') {
                    if ($sp) {
                        $litres = $litres + $sp->litres;
                        $amt = $amt + $sp->amt;
                    }
                }
                
                if ($tank->fuel_type == 'Diesel') {
                    if ($ds) {
                        $litres = $litres + $sp->litres;
                        $amt = $amt + $sp->amt;
                    }
                }
                
                // return $litres;

                try {
                    $add_Stock = Stock::firstOrCreate([
                        'user_id' => auth()->user()->id,
                        'fuel_type' => $tank->fuel_type,
                        'tank_id' => $tank_id,
                        'litres' => $litres,
                        'amt' => $amt,
                    ]);
                    return redirect(url()->previous())->with('success', 'Stock Update Successful');
                } catch (\Throwable $th) {
                    throw $th;
                }
            break;

            case 'add_pricing':
                $op = 0;
                $np = $request->input('new_price');
                $fuel_type = $request->input('fuel_type');

                if ($fuel_type == 0) {
                    return redirect(url()->previous())->with('error', 'Oops..! Select Fuel Type to Proceed');
                }

                $sp = Pricing::where('del', 'no')->where('fuel_type', 'Super')->latest()->first();
                $ds = Pricing::where('del', 'no')->where('fuel_type', 'Diesel')->latest()->first();

                if ($fuel_type == 'Super') {
                    if ($sp) {
                        $op = $sp->new_price;
                    }
                }
                
                if ($fuel_type == 'Diesel') {
                    if ($ds) {
                        $op = $ds->new_price;
                    }
                }
                
                try {
                    $add_Stock = Pricing::firstOrCreate([
                        'user_id' => auth()->user()->id,
                        'fuel_type' => $fuel_type,
                        'old_price' => $op,
                        'new_price' => $np,
                    ]);
                    return redirect(url()->previous())->with('success', 'Price Update Successful');
                } catch (\Throwable $th) {
                    throw $th;
                }
            break;

            case 'update_opening':
                $pumps = Pump::all();
                $tanks = Tank::all();
                // $pump_s1 = 0; $pump_s2 = 0;
                $pump1s1 = 0; $pump1s2 = 0; $pump1d1 = 0; $pump1d2 = 0;
                $pump2s1 = 0; $pump2s2 = 0; $pump2d1 = 0; $pump2d2 = 0;
                $pump3s1 = 0; $pump3s2 = 0; $pump3d1 = 0; $pump3d2 = 0;
                $pump4s1 = 0; $pump4s2 = 0; $pump4d1 = 0; $pump4d2 = 0;
                $pump5s1 = 0; $pump5s2 = 0; $pump5d1 = 0; $pump5d2 = 0;
                // $pump1 = 0; $pump2 = 0; $pump3 = 0; $pump4 = 0; $pump5 = 0; $pump6 = 0;
                // $pump7 = 0; $pump8 = 0; $pump9 = 0; $pump10 = 0; $pump11 = 0; $pump12 = 0;
                // $tank1 = 0; $tank2 = 0; $tank3 = 0; $tank4 = 0; $tank5 = 0; $tank6 = 0;

                // All Pumps
                if ($request->input('pump1s1')) {
                    $pump1s1 = $request->input('pump1s1');
                }
                if ($request->input('pump1s2')) {
                    $pump1s2 = $request->input('pump1s2');
                }
                if ($request->input('pump1d1')) {
                    $pump1d1 = $request->input('pump1d1');
                }
                if ($request->input('pump1d2')) {
                    $pump1d2 = $request->input('pump1d2');
                }


                if ($request->input('pump2s1')) {
                    $pump2s1 = $request->input('pump2s1');
                }
                if ($request->input('pump2s2')) {
                    $pump2s2 = $request->input('pump2s2');
                }
                if ($request->input('pump2d1')) {
                    $pump2d1 = $request->input('pump2d1');
                }
                if ($request->input('pump2d2')) {
                    $pump2d2 = $request->input('pump2d2');
                }


                if ($request->input('pump3s1')) {
                    $pump3s1 = $request->input('pump3s1');
                }
                if ($request->input('pump3s2')) {
                    $pump3s2 = $request->input('pump3s2');
                }
                if ($request->input('pump3d1')) {
                    $pump3d1 = $request->input('pump3d1');
                }
                if ($request->input('pump3d2')) {
                    $pump3d2 = $request->input('pump3d2');
                }


                if ($request->input('pump4s1')) {
                    $pump4s1 = $request->input('pump4s1');
                }
                if ($request->input('pump4s2')) {
                    $pump4s2 = $request->input('pump4s2');
                }
                if ($request->input('pump4d1')) {
                    $pump4d1 = $request->input('pump4d1');
                }
                if ($request->input('pump4d2')) {
                    $pump4d2 = $request->input('pump4d2');
                }


                if ($request->input('pump5s1')) {
                    $pump5s1 = $request->input('pump5s1');
                }
                if ($request->input('pump5s2')) {
                    $pump5s2 = $request->input('pump5s2');
                }
                if ($request->input('pump5d1')) {
                    $pump5d1 = $request->input('pump5d1');
                }
                if ($request->input('pump5d2')) {
                    $pump5d2 = $request->input('pump5d2');
                }

                // if ($request->input('pump2')) {
                //     $pump2 = $request->input('pump2');
                // }
                // return $pump1s1.' '.$pump1s2.' '.$pump2d1.' '.$pump2d2.' '.$pump3s1.' '.$pump3d1.' ';

                $day = date('d-m-Y');
                $check_read = Reading::where('day', $day)->latest()->first();
                // return $check_read->del;

                try {

                    if ($check_read) {
                        // return 1;
                        // 1

                        foreach ($pumps as $item) {
                            $ps = 'ps'.$item->id.'open';
                            $pd = 'pd'.$item->id.'open';
                            $xs = 'ps'.$item->id.'close';
                            $xd = 'pd'.$item->id.'close';
                            $s1 = 'pump'.$item->id.'s1';
                            $s2 = 'pump'.$item->id.'s2';
                            $d1 = 'pump'.$item->id.'d1';
                            $d2 = 'pump'.$item->id.'d2';
                            $x1 = 'xpump'.$item->id.'s1';
                            $x2 = 'xpump'.$item->id.'d1';
                            if ($item->fuel_type == 'Super') {
                                $check_read->$ps = $request->input($s1);
                                $check_read->$pd = $request->input($s2);
                            }elseif ($item->fuel_type == 'Diesel') {
                                $check_read->$ps = $request->input($d1);
                                $check_read->$pd = $request->input($d2);
                            } else {
                                $check_read->$ps = $request->input($s1);
                                $check_read->$pd = $request->input($d1);
                            }
                            // $check_read->t1 = $request->input($x1);
                            // $check_read->t2 = $request->input($x1);
                            // $check_read->t3 = $request->input($x1);
                            $check_read->$xs = $request->input($x1);
                            $check_read->$xd = $request->input($x2);
                            $check_read->save();
                        }

                        foreach ($tanks as $item) {
                            $t = 't'.$item->id.'open';
                            $tk = 'tank'.$item->id;
                            $check_read->$t = $request->input($tk);

                            $xt = 't'.$item->id.'close';
                            $xtk = 'xtank'.$item->id;
                            $check_read->$xt = $request->input($xtk);
                            $check_read->save();
                        }
                        return redirect(url()->previous())->with('success', 'Readings successfully Updated');
                    } else {
                        // return 2;
                        $add_reading = Reading::firstOrCreate([
                            'user_id' => auth()->user()->id,
                            'day' => $day,
                        ]);
                        foreach ($pumps as $item) { 
                            $ps = 'ps'.$item->id.'open';
                            $pd = 'pd'.$item->id.'open';
                            $s1 = 'pump'.$item->id.'s1';
                            $s2 = 'pump'.$item->id.'s2';
                            $d1 = 'pump'.$item->id.'d1';
                            $d2 = 'pump'.$item->id.'d2';
                            if ($item->fuel_type == 'Super') {
                                $add_reading->$ps = $request->input($s1);
                                $add_reading->$pd = $request->input($s2);
                            }elseif ($item->fuel_type == 'Diesel') {
                                $add_reading->$ps = $request->input($d1);
                                $add_reading->$pd = $request->input($d2);
                            } else {
                                $add_reading->$ps = $request->input($s1);
                                $add_reading->$pd = $request->input($d1);
                            }
                            $add_reading->save();
                        }
                        // // 1
                        // $add_reading->ps1close = 0;
                        // $add_reading->ps1open = $pump1s1;
                        // $add_reading->ps1diff = 0;
                        // $add_reading->ps1profit = 0;
                        // $add_reading->ps1sales = 0;
            
                        // $add_reading->pd1close = 0;
                        // $add_reading->pd1open = $pump1s2;
                        // $add_reading->pd1diff = 0;
                        // $add_reading->pd1profit = 0;
                        // $add_reading->pd1sales = 0;
                        // // 2
                        // $add_reading->ps2close = 0;
                        // $add_reading->ps2open = $pump2s1;
                        // $add_reading->ps2diff = 0;
                        // $add_reading->ps2profit = 0;
                        // $add_reading->ps2sales = 0;
            
                        // $add_reading->pd2close = 0;
                        // $add_reading->pd2open = $pump2s2;
                        // $add_reading->pd2diff = 0;
                        // $add_reading->pd2profit = 0;
                        // $add_reading->pd2sales = 0;
                        // // 3
                        // $add_reading->ps3close = 0;
                        // $add_reading->ps3open = $pump3s1;
                        // $add_reading->ps3diff = 0;
                        // $add_reading->ps3profit = 0;
                        // $add_reading->ps3sales = 0;
            
                        // $add_reading->pd3close = 0;
                        // $add_reading->pd3open = $pump3s2;
                        // $add_reading->pd3diff = 0;
                        // $add_reading->pd3profit = 0;
                        // $add_reading->pd3sales = 0;
                        // // 4
                        // $add_reading->ps4close = 0;
                        // $add_reading->ps4open = $pump4s1;
                        // $add_reading->ps4diff = 0;
                        // $add_reading->ps4profit = 0;
                        // $add_reading->ps4sales = 0;
            
                        // $add_reading->pd4close = 0;
                        // $add_reading->pd4open = $pump4s2;
                        // $add_reading->pd4diff = 0;
                        // $add_reading->pd4profit = 0;
                        // $add_reading->pd4sales = 0;
                        // // 5
                        // $add_reading->ps5close = 0;
                        // $add_reading->ps5open = $pump5s1;
                        // $add_reading->ps5diff = 0;
                        // $add_reading->ps5profit = 0;
                        // $add_reading->ps5sales = 0;
            
                        // $add_reading->pd5close = 0;
                        // $add_reading->pd5open = $pump5s2;
                        // $add_reading->pd5diff = 0;
                        // $add_reading->pd5profit = 0;
                        // $add_reading->pd5sales = 0;
                        // $add_reading->save();

                        foreach ($tanks as $item) {
                            $t = 't'.$item->id.'open';
                            $tk = 'tank'.$item->id;
                            $add_reading->$t = $request->input($tk);
                            $add_reading->save();
                        }
                        return redirect('/readings')->with('success', 'Readings successfully created for '.date('D, d-m-Y'));
                    }
                
                    // $add_tank = Tank::firstOrCreate([
                    //     'user_id' => auth()->user()->id,
                    //     'fuel_type' => $request->input('fuel_type'),
                    //     'tank_name' => $request->input('tank_name'),
                    // ]);
                    // return redirect(url()->previous())->with('success', $request->input('tank_name').' successfully created');
                
                } catch (\Throwable $th) {
                    throw $th;
                }
            break;

            case 'signin':

                $cur_pump = $request->input('cur_pump');
                // return $cur_pump;
                $user = $request->input('user');
                $ps = 'ps'.$cur_pump.'open';
                $pd = 'pd'.$cur_pump.'open';
                $xs = 'ps'.$cur_pump.'close';
                $xd = 'pd'.$cur_pump.'close';
                $diff1 = 'ps'.$cur_pump.'diff';
                $prof1 = 'ps'.$cur_pump.'profit';
                $sales1 = 'ps'.$cur_pump.'sales';
                $diff2 = 'pd'.$cur_pump.'diff';
                $prof2 = 'pd'.$cur_pump.'profit';
                $sales2 = 'pd'.$cur_pump.'sales';
                $day = date('d-m-Y');
                // $openings = Attendance::where('day', $day)->latest()->first();
                // if ($openings) {
                //     $op1 = $openings->opening1;
                //     $op2 = $openings->opening2;
                // } else {
                //     $openings = Reading::where('day', $day)->latest()->first();
                //     $op1 = $openings->$ps;
                //     $op2 = $openings->$pd;
                // }
                $op1 = $request->input('op1');
                $op2 = $request->input('op2');
                $xp1 = $request->input('xp1');
                $xp2 = $request->input('xp2');
                $sale1 = $request->input('sale1');
                $sale2 = $request->input('sale2');
                
                if ($op1 == '' || $op1 == 0) {
                    return redirect(url()->previous())->with('error', 'Oops..! Add opening readings for today at `Readings Page / View Openings` to proceed checkin');
                }
                if ($user == 0) {
                    return redirect(url()->previous())->with('error', 'Oops..! Select User to Proceed');
                }

                $count_readings = Reading::all()->count();
                // return $count_readings;
                $readings = Reading::where('day', $day)->latest()->first();
                $whereAT = [
                    'pump_id' => $cur_pump,
                    'user_id' => $user,
                    'day' => $day
                ];
                
                if ($readings) {}else{
                    return redirect('/view_openings')->with('error', 'Oops..! Add opening readings for today to proceed checkin');
                }
                
                $checkAT = Attendance::where($whereAT)->latest()->first();
                // return $op1.' - '.$readings->$xs;
                if ($checkAT) {
                    if ($op1 < $readings->$xs || $op2 < $readings->$xd) {
                        return redirect(url()->previous())->with('error', 'Opening values can`t be greater than previous closing values');
                    }
                    $checkAT->closing1 = $xp1;
                    $checkAT->closing2 = $xp2;
                    $checkAT->sales = $sale1 + $sale2; 
                    $checkAT->remarks = $request->input('remark');
                    $checkAT->status = 'inactive';
                    $checkAT->save();

                    $readings->$xs = $xp1;
                    $readings->$xd = $xp2;
                    $readings->$diff1 = $xp1 - $readings->$ps;
                    $readings->$prof1 = $sale1 - ($xp1 - $readings->$ps);
                    $readings->$sales1 = $sale1;
                    $readings->$diff2 = $xp2 - $readings->$pd;
                    $readings->$prof2 = $sale2 - ($xp2 - $readings->$pd);
                    $readings->$sales2 = $sale2;
                    $readings->save();
                    return redirect(url()->previous())->with('success', 'User '.User::find($user)->name.' successfully signed out at '.date('h:i', strtotime($checkAT->created_at)));
                    
                }else{
                    // return redirect(url()->previous())->with('error', 'Oops..! No data found');
                    try {
                        $add_atd = Attendance::firstOrCreate([
                            'user_id' => $user,
                            'pump_id' => $cur_pump,
                            'day' => $day,
                            'opening1' => $op1,
                            'opening2' => $op2,
                            'status' => 'active',
                            // 'pump_name' => $request->input('pump_name'),
                        ]);
                        return redirect(url()->previous())->with('success', 'User '.User::find($user)->name.' successfully signed in to Pump '.$cur_pump.' at '.date('h:i', strtotime($add_atd->created_at)));
                    } catch (\Throwable $th) {
                        throw $th;
                    }
                }


            break;

            case 'add_expense':
                try {
                    $add_ex = Expense::firstOrCreate([
                        'user_id' => auth()->user()->id,
                        'title' => $request->input('title'),
                        'reason' => $request->input('reason'),
                        'amt' => $request->input('amt'),
                        // 'pump_name' => $request->input('pump_name'),
                    ]);
                    return redirect(url()->previous())->with('success', 'Expense successfully added at '.date('h:i', strtotime($add_ex->created_at)));
                } catch (\Throwable $th) {
                    throw $th;
                }
            break;

            case 'signout2':

                //     $cur_pump = $request->input('cur_pump');
                //     $xs = 'ps'.$cur_pump.'close';
                //     $xd = 'pd'.$cur_pump.'close';
                //     $user = $request->input('user');
                //     $day = date('d-m-Y');
                //     $openings = Reading::where('day', $day)->latest()->first();
                //     $checkAT = Attendance::where('user_id', $user)->where('day', $day)->latest()->first();
                //     if ($openings == '') {
                //         return redirect(url()->previous())->with('error', 'Oops..! Add opening readings at Readings Page to proceed checkin');
                //     }
                //     if ($user == 0) {
                //         return redirect(url()->previous())->with('error', 'Oops..! Select User to Proceed');
                //     }

                //     $ps = 'ps'.$cur_pump.'open';
                //     $pd = 'pd'.$cur_pump.'open';
                //     if ($checkAT) {}else{
                //         // return redirect(url()->previous())->with('error', 'Oops..! No data found');
                //         try {
                //             $add_atd = Attendance::firstOrCreate([
                //                 'user_id' => $user,
                //                 'pump_id' => $cur_pump,
                //                 'day' => $day,
                //                 'opening1' => $openings->$ps,
                //                 'opening2' => $openings->$pd,
                //                 // 'pump_name' => $request->input('pump_name'),
                //             ]);
                //             return redirect(url()->previous())->with('success', 'User '.User::find($user)->name.' successfully checked in at '.date('h:i', strtotime($add_atd->created_at)));
                //         } catch (\Throwable $th) {
                //             throw $th;
                //         }
                //     }


            break;

        }

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
        $count_readings = Reading::all()->count();
        if ($count_readings < 1) {
            return redirect(url()->previous())->with('error', 'Oops..! Add opening readings for today at `Readings Page / View Openings` to proceed checkin..');
        }

        $tanks = Tank::all();
        $pumps = Pump::all();
        // $cur_pump = $request->input('cur_pump');
        // $user = $request->input('user');
        $ps = 'ps'.$id.'open';
        $pd = 'pd'.$id.'open';
        $xs = 'ps'.$id.'close';
        $xd = 'pd'.$id.'close';
        $day = date('d-m-Y');
        $where = [
            // 'day' => date('d-m-Y'),
            'status' => 'inactive',
            'pump_id' => $id,
        ];
        $wh = [
            // 'day' => date('d-m-Y'),
            'status' => 'active', 'pump_id' => $id];
        $cur_atd = Attendance::where($wh)->latest()->first();
        if ($cur_atd) {
            $cur_atd = ' - '.$cur_atd->user->name;
        } else {
            $cur_atd = '';
        }
        
        // return $cur_atd;
        
        // $openings = Attendance::where($where)->latest()->first();
        // if ($openings && $openings->closing1 != '') {
        //     $op1 = $openings->closing1;
        //     $op2 = $openings->closing2;
        // } else {
            $openings = Reading::where('day', $day)->latest()->first();
            if ($openings) {} else {
                $openings = Reading::latest()->first();
            }
            if ($openings->$xs != 0) {
                $op1 = $openings->$xs;
                $op2 = $openings->$xd;
            } else {
                $op1 = $openings->$ps;
                $op2 = $openings->$pd;
            }
            
        // }

        $where2 = [
            'day' => date('d-m-Y'),
            'status' => 'active',
            'pump_id' => $id,
        ];
        $x = Attendance::where($where2)->latest()->first();
        // if ($x) {
        //     return 'True';
        // } else {
        //     return 'False - '.$x;
        // }
        $patch = [
            'op1' => $op1,
            'op2' => $op2,
            'tanks' => $tanks,
            'pumps' => $pumps,
            'cur_pump' => $id,
            'cur_atd' => $cur_atd,
            'openings' => $openings,
            'attendance' => Attendance::where($where2)->latest()->first(),
            'users' => User::where('status', 'attendant')->get(),
            'stock' => Stock::where('del', 'no')->where('fuel_type', 'Super')->latest()->first(),
            'stock2' => Stock::where('del', 'no')->where('fuel_type', 'Diesel')->latest()->first(),
            'price' => Pricing::where('del', 'no')->where('fuel_type', 'Super')->latest()->first(),
            'price2' => Pricing::where('del', 'no')->where('fuel_type', 'Diesel')->latest()->first(),
            'pricing' => Pricing::where('del', 'no')->latest()->first(),
        ];
        return view('fuel_checkin')->with($patch);
        
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
        switch ($request->input('update_action')) {

            case 'update_user':
                $user = User::find($id);
                $user->name = $request->input('name');
                $user->email = $request->input('email');
                $user->contact = $request->input('contact');
                $user->status = $request->input('status');
                $user->save();
                return redirect(url()->previous())->with('Success', $user->name.' Updated Successfully!');
            break;

            case 'update_expense':
                $ex = Expense::find($id);
                $ex->del = 'yes';
                $ex->save();
                return redirect(url()->previous())->with('Success', 'Expense Deletion Successful!');
            break;

        }
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
