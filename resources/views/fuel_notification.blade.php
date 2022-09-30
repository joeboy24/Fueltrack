
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

                    <li class="nav-link">
                        <a href="/fuel_report">
                            <i class='bx bx-pie-chart-alt icon' ></i>
                            <span class="text nav-text">Analytics</span>
                        </a>
                    </li>

                    <li class="nav-link active_link">
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

            
            {{-- @include('inc.notification') --}}

            <div class="col_100">

                <div class="col_80">

                    <div class="pump_notice">
                        <h4><i class='bx bx-bell'></i>&nbsp;&nbsp;Notifications</h4>

                        <div class="note_div">
                            <h6><img src="/maindir/images/user2.png" alt="">PivoApps</h6>
                            <h5><i class="fa fa-envelope-open-o"></i>&nbsp;&nbsp; Subscription Notice</h5>
                            <p>This is an urgent message to all PivoApps FuelTrack Subscribers to adhear to all rules with regards to 
                                aggreement as no exemptions will be made to any actions caused.
                            </p>
                            <p class="note_date"><i class="fa fa-calendar"></i>&nbsp; Mon. Dec, 12th 2022</p>
                        </div>

                        {{-- <div class="note_div">
                            <h6><img src="/maindir/images/user2.png" alt="">PivoApps</h6>
                            <h5><i class="fa fa-envelope-open-o"></i>&nbsp;&nbsp; Subscription Notice</h5>
                            <p>This is an urgent message to all PivoApps FuelTrack Subscribers to adhear to all rules with regards to 
                                aggreement as no exemptions will be made to any actions caused.
                            </p>
                            <p class="note_date"><i class="fa fa-calendar"></i>&nbsp; Mon. Dec, 12th 2022</p>
                        </div> --}}

                    </div>

                </div>

            </div>
            
        </div>
    </section>
    
@endsection



