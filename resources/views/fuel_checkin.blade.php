
@extends('layouts.fuellayout')

@section('navs')

    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="/maindir/images/pivo.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="small_p">PivoApps</span>
                    <p>Fuel<span class="name">Track</span></p>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link active_link">
                        <a href="/fuel">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/fuel_stock">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
                            <span class="text nav-text">Stock</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/readings">
                            <i class='bx bx-file icon' ></i>
                            <span class="text nav-text">Readings</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/fuel_report">
                            <i class='bx bx-pie-chart-alt icon' ></i>
                            <span class="text nav-text">Analytics</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/fuel_notification">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Notifications</span>
                        </a>
                    </li>

                    {{-- <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-heart icon' ></i>
                            <span class="text nav-text">Likes</span>
                        </a>
                    </li> --}}

                    <li class="nav-link">
                        <a href="/fuel_settings">
                            <i class='bx bx-cog icon' ></i>
                            <span class="text nav-text">Settings</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="/logout">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>

@endsection

@section('content')
    
    <section class="fuel_dash">
        <div class="row">
            @include('inc.messages')
            <div class="welcome_box">
                <p><i class="fa fa-unlock"></i>&nbsp;&nbsp; Welcome! <span>{{auth()->user()->name}}</span></p>
            </div>
            <!--button class="check_btn"><i class='fa fa-power-off'></i></button-->
            
            <div class="col_100">

                <div class="col_60">

                    <div class="pump_notice">
                        <h4><i class='fa fa-fax'></i>&nbsp;&nbsp;Pump {{$cur_pump.$cur_atd}}</h4>
                        <form class="my_form" action="{{action('FuelController@store')}}" method="POST">
                            @csrf
                            {{-- <div class="checkin"> --}}
                                <input type="hidden" name="cur_pump" value="{{$cur_pump}}">
                                @if ($attendance)
                                    {{-- {{$attendance->user->name}} --}}
                                    {{-- <input type="hidden" value="{{$ps = 'ps'.$cur_pump.'open'}}">  
                                    <input type="hidden" value="{{$pd = 'pd'.$cur_pump.'open'}}"> 
                                    <input type="hidden" value="{{$psc = 'ps'.$cur_pump.'close'}}">  
                                    <input type="hidden" value="{{$pdc = 'pd'.$cur_pump.'close'}}">   --}}
                                    <input type="hidden" name="user" value="{{$attendance->user_id}}"> 

                                    <p class="small_p">Meter Opening Readings (Face1 / Face2)</p>

                                    <input class="opn" name="op1" @if ($openings != '') value="{{$op1}}" @endif 
                                    type="number" min="0" step="any" class="form-control" placeholder="Face1 Opening #" readonly>   

                                    <input class="opn" name="op2" @if ($openings != '') value="{{$op2}}" @endif 
                                    type="number" min="0" step="any" class="form-control" placeholder="Face2 Opening #" readonly>

                                    <p class="small_p">Meter Closing Readings (Face1 / Face2)</p>

                                    <input class="cls" name="xp1" 
                                    type="number" min="0" step="any" class="form-control" placeholder="Face1 Closing #" required>   

                                    <input class="cls" name="xp2" 
                                    type="number" min="0" step="any" class="form-control" placeholder="Face2 Closing #" required>

                                    <input name="sale1" type="number" min="0" step="any" class="form-control" placeholder="Face 1 Sales Amt." required>
                                    <input name="sale2" type="number" min="0" step="any" class="form-control" placeholder="Face 2 Sales Amt." required>
                                    <input name="remark" type="text" min="0" step="any" class="form-control" placeholder="Comment / Remark" required>

                                    <button class="checkin_btn bg1 color8 fr" name="store_action" value="signin" type="submit">Sign&nbsp;Out&nbsp;<i class='bx bx-log-in icon'></i></button>
                                
                                @else

                                    <p class="small_p">Meter Opening Readings (Face1 / Face2)</p>

                                    <input class="opn" name="op1" @if ($openings != '') value="{{$op1}}" @endif 
                                    type="number" min="0" step="any" class="form-control" placeholder="Face1 Opening #" readonly>   

                                    <input class="opn" name="op2" @if ($openings != '') value="{{$op2}}" @endif 
                                    type="number" min="0" step="any" class="form-control" placeholder="Face2 Opening #" readonly>

                                    <select name="user" id="">
                                        <option value="0">Select User</option>
                                        @foreach ($users as $user)
                                            <option value="{{$user->id}}">{{$user->name.' - '.$user->contact}}</option>
                                        @endforeach
                                    </select>

                                    <button class="checkin_btn bg10 color8 fr" name="store_action" value="signin" type="submit">Sign&nbsp;In&nbsp;<i class='bx bx-log-in icon'></i></button>
                                @endif
                                {{-- <a href="/checkin"><button class="bg1 color8" name="store_action" value="checkout"><i class='bx bx-log-out icon'></i>&nbsp;Checkout</button></a> --}}
                            {{-- </div> --}}
                        
                            {{-- @foreach ($tanks as $item)
                                <p class="small_p">{{$item->tank_name}} Opening</p>
                                <input name="tank{{$item->id}}" type="number" min="0" step="any" class="form-control" placeholder="Input {{$item->tank_name}} opening value" required>
                            @endforeach 

                            <div class="btn_grp">
                                <button type="submit" class="submit_btn" name="store_action" value="add_pricing"><i class="fa fa-save"></i>&nbsp;&nbsp;Update Tanks</button>
                                <button type="reset" class="reset_btn">Reset</button>
                            </div>--}}
                            
                        </form>
                    </div>

                </div>

            </div>

        </div>
    </section>
    
@endsection



