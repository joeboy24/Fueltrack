<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tank;
use App\Models\Pump;
use App\Models\Stock;
use App\Models\Pricing;
use App\Models\Company;
use App\Models\Reading;
use App\Models\Expense;
use App\Models\Attendance;

class FuelPagesController extends Controller
{
    //

    public function __construct(){
        $this->middleware(['auth',]);
    } 

    public function index(){
        // Check if tank and pump exist before open index
        $where = [
            // 'day' => date('d-m-Y'),
            // 'status' => 'inactive',
            'del' => 'no',
        ];
        $tanks = Tank::all();
        $pumps = Pump::all();
        $openings = Reading::where('day', date('d-m-Y'))->latest()->first();
        $x = Attendance::where($where)->where('status', 'active')->get();
        // return $x;
        $patch = [
            'n' => 1,
            'tanks' => $tanks,
            'pumps' => $pumps,
            'attendants' => $x,
            'openings' => $openings,
            'xtotal' => Expense::all()->sum('amt'),
            'attendants2' => Attendance::where($where)->limit(7)->orderBy('id', 'DESC')->get(),
            // 'stock' => Stock::where('del', 'no')->where('fuel_type', 'Super')->latest()->first(),
            // 'stock2' => Stock::where('del', 'no')->where('fuel_type', 'Diesel')->latest()->first(),
            // 'price' => Pricing::where('del', 'no')->where('fuel_type', 'Super')->latest()->first(),
            // 'price2' => Pricing::where('del', 'no')->where('fuel_type', 'Diesel')->latest()->first(),
            // 'pricing' => Pricing::where('del', 'no')->latest()->first(),
        ];
        return view('fuel_index')->with($patch);
    }

    public function stock(){
        // $stock = Stock::all();
        // $pricing = Pricing::all();
        $tanks = Tank::where('del', '!=', 'null')->paginate(10);
        $pumps = Pump::where('del', '!=', 'null')->paginate(10);
        if (count($tanks) == 0 || count($pumps) == 0) {
            return redirect('/fuel_settings')->with('error', 'Oops..! Add Pumps & Tanks in order to proceed to reedings page');
        }
        // if (count($stock) == 0 || count($pricing) == 0) {
        //     return redirect('/fuel_stock')->with('error', 'Oops..! Update Stock and Pricing in order to proceed to reedings page');
        // }
        $patch = [
            'tanks' => Tank::all(),
            'pumps' => Pump::all(),
            'stock' => Stock::where('del', 'no')->where('fuel_type', 'Super')->latest()->first(),
            'stock2' => Stock::where('del', 'no')->where('fuel_type', 'Diesel')->latest()->first(),
            'price' => Pricing::where('del', 'no')->where('fuel_type', 'Super')->latest()->first(),
            'price2' => Pricing::where('del', 'no')->where('fuel_type', 'Diesel')->latest()->first(),
            'pricing' => Pricing::where('del', 'no')->latest()->first(),
        ];
        return view('fuel_stock')->with($patch);
    }

    public function fuel_readings(){
        $day = date('d-m-Y');
        $tanks = Tank::all();
        $pumps = Pump::all();
        $stock = Stock::all();
        $pricing = Pricing::all();

        if (count($tanks) == 0 || count($pumps) == 0) {
            return redirect('/fuel_settings')->with('error', 'Oops..! Add Pumps & Tanks in order to proceed to reedings page');
        }
        if (count($stock) == 0 || count($pricing) == 0) {
            return redirect('/fuel_stock')->with('error', 'Oops..! Update Stock and Pricing in order to proceed to reedings page');
        }

        $openings = Reading::where('day', $day)->latest()->first();
        // return $openings->day;
        if ($openings == '') {
            $openings = Reading::latest()->first();
        }
        
        $patch = [
            'tanks' => $tanks,
            'pumps' => $pumps,
            'openings' => $openings,
            'stock' => Stock::where('del', 'no')->where('fuel_type', 'Super')->latest()->first(),
            'stock2' => Stock::where('del', 'no')->where('fuel_type', 'Diesel')->latest()->first(),
            'price' => Pricing::where('del', 'no')->where('fuel_type', 'Super')->latest()->first(),
            'price2' => Pricing::where('del', 'no')->where('fuel_type', 'Diesel')->latest()->first(),
            'pricing' => Pricing::where('del', 'no')->latest()->first(),
        ];
        $read_count = Reading::all()->count();
        if ($read_count > 0) {
            return view('fuel_reading')->with($patch);
        } else {
            return view('fuel_redefine_reading')->with($patch);
        }
        
    }

    public function fuel_redef_readings(){
        $day = date('d-m-Y');
        $tanks = Tank::all();
        $pumps = Pump::all();
        $openings = Reading::where('day', $day)->latest()->first();
        // return $openings->day;
        if ($openings == '') {
            $openings = Reading::latest()->first();
        }
        
        $patch = [
            'tanks' => $tanks,
            'pumps' => $pumps,
            'openings' => $openings,
            'stock' => Stock::where('del', 'no')->where('fuel_type', 'Super')->latest()->first(),
            'stock2' => Stock::where('del', 'no')->where('fuel_type', 'Diesel')->latest()->first(),
            'price' => Pricing::where('del', 'no')->where('fuel_type', 'Super')->latest()->first(),
            'price2' => Pricing::where('del', 'no')->where('fuel_type', 'Diesel')->latest()->first(),
            'pricing' => Pricing::where('del', 'no')->latest()->first(),
        ];
        
        return view('fuel_redefine_reading')->with($patch);
        
    }

    public function fuel_checkin(){
        $day = date('d-m-Y');
        $tanks = Tank::all();
        $pumps = Pump::all();
        $openings = Reading::where('day', $day)->latest()->first();
        // return $openings->day;
        $patch = [
            'tanks' => $tanks,
            'pumps' => $pumps,
            'openings' => $openings,
            'stock' => Stock::where('del', 'no')->where('fuel_type', 'Super')->latest()->first(),
            'stock2' => Stock::where('del', 'no')->where('fuel_type', 'Diesel')->latest()->first(),
            'price' => Pricing::where('del', 'no')->where('fuel_type', 'Super')->latest()->first(),
            'price2' => Pricing::where('del', 'no')->where('fuel_type', 'Diesel')->latest()->first(),
            'pricing' => Pricing::where('del', 'no')->latest()->first(),
        ];
        return view('fuel_checkin')->with($patch);
    }

    public function reports(){
        $where = [
            // 'day' => date('d-m-Y'),
            // 'status' => 'inactive',
            'del' => 'no',
        ];
        $patch = [
            'n' => 1,
            'attendants2' => Attendance::where($where)->limit(7)->orderBy('id', 'DESC')->get(),
        ];
        return view('fuel_reports')->with($patch);
    }

    public function fuel_expenses(){
        $where = [
            // 'day' => date('d-m-Y'),
            // 'status' => 'inactive',
            'del' => 'no',
        ];
        $patch = [
            'n' => 1,
            'xtotal' => Expense::all()->sum('amt'),
            'expenses' => Expense::where($where)->limit(7)->orderBy('id', 'DESC')->get(),
            'attendants2' => Attendance::where($where)->limit(7)->orderBy('id', 'DESC')->get(),
        ];
        return view('fuel_expense')->with($patch);
    }

    public function notes(){
        return view('fuel_notification');
    }

    public function settings(){
        $tanks = Tank::where('del', '!=', 'null')->paginate(10);
        $pumps = Pump::where('del', '!=', 'null')->paginate(10);
        $patch = [
            'a' => 1,
            'b' => 1,
            'c' => 1,
            'users' => User::where('del', '!=', 'null')->paginate(10),
            'company' => Company::all(),
            'tanks' => $tanks,
            'pumps' => $pumps,
        ];
        return view('fuel_settings')->with($patch);
    }
}
