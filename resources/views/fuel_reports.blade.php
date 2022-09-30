
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
                    <li class="nav-link">
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

                    <li class="nav-link active_link">
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
            <p style="clear: both"></p>
            
            <div class="col_70">
                <div class="checkin">
                    <form class="filter_form" action="">
                        <p class="small_p"><i class="fa fa-filter color1"></i> Filter</p>
                        <select name="fuel_type" id="">
                            <option value="0">Report Type</option>
                            <option value="1">Sales</option>
                            <option value="2">Stock</option>
                            <option value="3">Expenses</option>
                            <option value="4">Attendance</option>
                        </select>
                        <input type="date" name="from">
                        <input class="fromTo" type="text" placeholder="From - To" readonly>
                        <input type="date" name="to">
                        {{-- <select name="checkin" id="checkin">
                            <option value="">Pump 1 - 2017431</option>
                            <option value="">Pump 3 - 3189272</option>
                        </select> --}}
                        <button>Load&nbsp;<i class='bx bx-refresh icon'></i></button>
                    </form>
                </div>
            </div>

            <div class="col_100">

                <div class="data_view">
                    <h6><i class="fa fa-file-text color1"></i>&nbsp;&nbsp;Sales History</h6>
                    
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
                                        <td class="fl">{{$atd->user->name}}<br>
                                            <span class="small_p">Face 1:&nbsp;{{$atd->opening1.' - '.$atd->closing1}}</span>&nbsp;&nbsp;
                                            <span class="small_p">Face 2:&nbsp;{{$atd->opening2.' - '.$atd->closing2}}</span><br>
                                            <span class="small_p">Sales:&nbsp;</span><span class="color6">{{$atd->sales}}</span>&nbsp;
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
    </section>
    
@endsection



