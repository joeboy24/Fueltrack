
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

{{-- <script>
    $.session.set("yoursessioname", "storevalue");
        alert($.session.get("yoursessioname"));
</script> --}}
    
    <section class="fuel_dash">
        @include('inc.messages')
        <div class="row">
            <div class="welcome_box">
                <p><i class="fa fa-unlock"></i>&nbsp;&nbsp; Welcome! <span>{{auth()->user()->name}}</span></p>
            </div>
            <!--button class="check_btn"><i class='fa fa-power-off'></i></button-->
            @include('inc.notification')
            
            <div class="col_100">
                <div class="col_50">

                    {{-- <div class="checkin">
                        <form action="">
                            <p class="small_p">Checkin Here</p>
                            <select name="tank_id" id="">
                                <option value="0">Select Pump</option>
                                @foreach ($pumps as $pump)
                                    <option value="{{$pump->id}}">{{$pump->pump_name.' - '.$pump->fuel_type}}</option>
                                @endforeach
                            </select>

                            <a href="/checkin"><button class="bg10 color8" type="button">Checkin&nbsp;<i class='bx bx-log-in icon'></i></button></a>
                            <a href="/checkin"><button class="bg1 color8" name="store_action" value="checkout"><i class='bx bx-log-out icon'></i>&nbsp;Checkout</button></a>
                        </form>
                    </div> --}}

                    @foreach ($pumps as $pump)
                        <input type="hidden" value="{{$ps = 'ps'.$pump->id.'open'}}">
                        <input type="hidden" value="{{$pd = 'pd'.$pump->id.'open'}}">
                        <input type="hidden" value="{{$psc = 'ps'.$pump->id.'close'}}">  
                        <input type="hidden" value="{{$pdc = 'pd'.$pump->id.'close'}}">  
                        <input type="hidden" value="{{$act = ''}}">
                        <div class="pump_notice">
                            <img src="/maindir/images/fuel/pump2.png" alt="">
                            <a href="/fuelx/{{$pump->id}}" class="pump_link">
                                <table>
                                    <tbody>
                                        {{-- @if ($attendants[$i]->$pump_id == $pump->id)
                                            {{$attendants[$i]->user->name}}
                                        @else
                                            No Attendant
                                        @endif --}}
                                        @if ($attendants)
                                            <tr>
                                                <td class="pump_title"><i class='fa fa-fax'></i>&nbsp;&nbsp;Pump {{$pump->id}}&nbsp;&nbsp;<span>@if ($pump->fuel_type == 'both') Super & Diesel @else {{$pump->fuel_type}} @endif</span></td>
                                                {{-- <td class="small_p fr status_act">Active</td> --}}
                                            </tr>
                                            <tr><td class="small_p">&nbsp;</td></tr>
                                            <tr>
                                                <td class="small_p">Attendant</td>
                                                <td class="small_p fr">Status</td>
                                            </tr>
                                            <tr>
                                                <td class="atd_name">
                                                    {{-- Patric Ola Yawson --}}
                                                    @if ($attendants)
                                                        @for ($i = 0; $i < count($attendants); $i++)
                                                            @if ($attendants[$i]->pump_id == $pump->id)
                                                                {{$attendants[$i]->user->name}}
                                                            {{-- @else
                                                                No Attendant --}}
                                                            @endif
                                                        @endfor
                                                    @else
                                                        No Attendant
                                                    @endif
                                                </td>
                                                @if ($attendants)
                                                    @for ($i = 0; $i < count($attendants); $i++)
                                                        @if ($attendants[$i]->pump_id == $pump->id)
                                                            <input type="hidden" value="{{$act = 'active'}}">
                                                        @endif
                                                    @endfor
                                                @endif
                                                @if ($act == 'active')
                                                    <td class="small_p fr status_act">Active</td>
                                                @else
                                                    <td class="small_p fr status_inact">Inactive</td>
                                                @endif
                                            </tr>
                                            {{-- <tr><td class="small_p">&nbsp;</td></tr> --}}

                                            <tr>
                                                <td class="small_p">Checkin Time</td>
                                                <td class="small_p fr">
                                                    {{-- Today 6:00 Am --}}
                                                    @if ($attendants)
                                                        @for ($i = 0; $i < count($attendants); $i++)
                                                            @if ($attendants[$i]->pump_id == $pump->id)
                                                                {{-- @if ($attendants[$i]->sales != '') --}}
                                                                    Today {{date('@ h:i', strtotime($attendants[$i]->created_at))}}
                                                                {{-- @endif --}}
                                                            @endif
                                                        @endfor
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr><td class="small_p">&nbsp;</td></tr>
                                            
                                            <tr>
                                                <td class="small_p">Opening:&nbsp;&nbsp;
                                                    {{-- @if ($openings != ''){{$openings->$ps}}&nbsp;-&nbsp;{{$openings->$pd}}@endif --}}
                                                    @if ($openings != '')
                                                        @if ($openings->$psc == 0){{$openings->$ps}}&nbsp;-&nbsp;{{$openings->$pd}}@else {{$openings->$psc}}&nbsp;-&nbsp;{{$openings->$pdc}} @endif
                                                    @endif 
                                                </td>
                                                {{-- <td class="small_p fr">Daily Total</td> --}}
                                            </tr>
                                        @else
                                            
                                        @endif
                                        
                                        
                                    </tbody>
                                </table>
                            </a>
                        </div>
                    @endforeach

                    {{-- <div class="pump_notice">
                        <img src="/maindir/images/fuel/pump2.png" alt="">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="pump_title">Pump 1&nbsp;&nbsp;<span>Diesel</span></td>
                                </tr>
                                <tr><td class="small_p">&nbsp;</td></tr>
                                <tr>
                                    <td class="small_p">Attendant</td>
                                    <td class="small_p fr">Status</td>
                                </tr>
                                <tr>
                                    <td class="atd_name">Patric Ola Yawson</td>
                                    <td class="small_p fr status_act">Active</td>
                                </tr>

                                <tr>
                                    <td class="small_p">Checkin Time</td>
                                    <td class="small_p fr">Today 6:00 Am</td>
                                </tr>
                                <tr><td class="small_p">&nbsp;</td></tr>
                                
                                <tr>
                                    <td class="small_p">Total Sales</td>
                                </tr>
                                <tr>
                                    <td class="sales_highlight color6">GhC&nbsp;7,200</td>
                                    <td class="sales_highlight fr"><span>GhC&nbsp;34,500</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div> --}}

                    <a href="/expenses" class="pump_link">
                        <div class="pump_notice">
                            {{-- <i class="fa fa-cc-visa ivisa"></i> --}}
                            <table>
                                <tbody>
                                    <tr>
                                        <td><i class="fa fa-cc-visa ivisa"></i></td>
                                    </tr>
                                    <tr>
                                        <td class="atd_name">Total Expenses</td>
                                        <td class="small_p fr status_danger">GhC&nbsp;{{number_format($xtotal, 2)}}</td>
                                    </tr>
                                    {{-- <tr><td class="small_p">&nbsp;</td></tr> --}}

                                    <tr>
                                        <td class="small_p">Updated At</td>
                                        <td class="small_p fr">Today {{date('h:i')}} Pm</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </a>
                </div>

                <div class="col_50">
                    <div class="data_view">
                        <h6><i class="fa fa-file-text color1"></i>&nbsp;&nbsp;Login History</h6>
                        
                        <table class="sales_history_tbl">
                            <thead>
                                <th class="fl tbl_count">#</th>
                                <th class="fl">Attendant</th>
                                {{-- <th class="fl">Amt. Due</th>
                                <th class="fl">Amt. Paid</th> --}}
                                <th class="fr">Status</th>
                            </thead>
                            <tbody>
                                {{-- <tr><td>ghjk</td></tr> --}}
                                @if ($attendants2)
                                    @foreach ($attendants2 as $atd)
                                        @if ($n % 2 == 0)
                                            <tr>
                                        @else
                                            <tr class="tbl_shade">
                                        @endif
                                            <td class="fl tbl_count">{{$n++}}</td>
                                            <td class="fl">{{$atd->user->name.' - Pump '.$atd->pump_id}}<br>
                                                <span class="small_p">Face 1:&nbsp;{{$atd->opening1.' - '.$atd->closing1}}</span><br>
                                                <span class="small_p">Face 2:&nbsp;{{$atd->opening2.' - '.$atd->closing2}}</span><br>
                                                {{-- <span class="small_p">Sales:&nbsp;</span><span class="color6">{{$atd->sales}}</span>&nbsp; --}}
                                            </td>
                                            {{-- <td class="fl">{{$atd->user->name}}<br>
                                                <span class="small_p">Amt. Due:&nbsp;</span><span class="color6">1,200</span>&nbsp;<span class="small_p">/&nbsp;Amt. Paid:&nbsp;</span>1,000 &nbsp;
                                            </td> --}}
                                            @if ($atd->status == 'active')
                                                <td class="fr"><br><p class="small_p status_inact"><i class="fa fa-warning"></i>&nbsp;Incomplete</p>
                                                    <span class="small_p">&nbsp;{{date('D, d-M-y', strtotime($atd->created_at)) }}&nbsp;</span><br>
                                                </td>
                                            @else
                                                <td class="fr"><br><p class="small_p status_act"><i class="fa fa-check"></i>&nbsp;Complete</p>
                                                    <span class="small_p">&nbsp;{{date('D, d-M-y', strtotime($atd->created_at)) }}&nbsp;</span><br>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                @endif
                                {{-- <tr>
                                    <td class="fl">John Doe</td>
                                    <td class="fl">1,200</td>
                                    <td class="fl">1,000<br><span class="small_p">Bal.: 200</span></td>
                                    <td class="fr">Incomplete</td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection



