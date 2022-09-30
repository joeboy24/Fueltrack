
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
            <div class="welcome_box">
                <p><i class="fa fa-unlock"></i>&nbsp;&nbsp; Welcome! <span>{{auth()->user()->name}}</span></p>
            </div>
            <!--button class="check_btn"><i class='fa fa-power-off'></i></button-->
            @include('inc.messages')
            
            <div class="col_100">
                <div class="col_50">

                    <div class="pump_notice">
                        <h4><i class='fa fa-file'></i>&nbsp;&nbsp;Manage Expenses</h4>
                        <form class="my_form" action="{{action('FuelController@store')}}" method="POST">
                            @csrf
                            <input name="title" type="text" class="form-control" placeholder="Title" required>
                            <textarea name="reason" id="" cols="15" rows="5" placeholder="Purpose / Reason"></textarea>
                            <input name="amt" type="number" min="0" step="any" class="form-control" placeholder="Amount" required>
                                
                            <div class="btn_grp">
                                <button type="submit" class="submit_btn" name="store_action" value="add_expense"><i class="fa fa-save"></i>&nbsp;&nbsp;Save</button>
                                <button type="reset" class="reset_btn">Reset</button>
                            </div>
                            
                        </form>
                    </div>

                    {{-- <div class="pump_notice">
                        <table class="expense_tbl">
                            <tbody>
                                <tr> 
                                    <td><i class="fa fa-flask ivisa"></i></td>
                                    <td class="small_p fr">Super / Diesel</td>
                                </tr>
                                <tr>
                                    <td class="ex_name">Current Stock</td>
                                    <td class="small_p fr status_danger">
                                        @if ($stock){{number_format($stock->amt, 2).'  /  '}}@else @endif
                                        @if ($stock2){{number_format($stock2->amt, 2)}}@else -  @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td class="small_p">Updated At - 
                                        @if ($stock) 
                                            {{date('d M, Y', strtotime($stock->updated_at))}}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="small_p fr">Litres: 
                                        @if ($stock){{$stock->litres.' / '}}@else - / @endif
                                        @if ($stock2){{$stock2->litres}}@else - @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div> --}}

                </div>



                <div class="col_50">
                    <div class="data_view">
                        <h6><i class="fa fa-file-text color1"></i>&nbsp;&nbsp;History</h6>
                        
                        <table class="sales_history_tbl">
                            <thead>
                                <th class="fl tbl_count">#</th>
                                <th class="fl">Title & Purpose</th>
                                {{-- <th class="fl">Amt. Due</th>
                                <th class="fl">Amt. Paid</th> --}}
                                <th class="fr">Status</th>
                            </thead>
                            <tbody>
                                {{-- <tr><td>ghjk</td></tr> --}}
                                @if ($expenses)
                                    @foreach ($expenses as $ex)
                                        @if ($n % 2 == 0)
                                            <tr>
                                        @else
                                            <tr class="tbl_shade">
                                        @endif
                                            <td class="fl tbl_count">{{$n++}}</td>
                                            <td class="fl">{{$ex->title}}<br>
                                                <span class="small_p">{{$ex->reason}} {{$ex->reason}} {{$ex->reason}}</span><br>
                                                <span class="small_p">By:&nbsp;{{$ex->user->name}}</span><br>
                                                <span class="small_p">GhC&nbsp;</span><span class="color6">{{$ex->amt}}</span>&nbsp;
                                            </td>
                                            {{-- <td class="fl">{{$ex->user->name}}<br>
                                                <span class="small_p">Amt. Due:&nbsp;</span><span class="color6">1,200</span>&nbsp;<span class="small_p">/&nbsp;Amt. Paid:&nbsp;</span>1,000 &nbsp;
                                            </td> --}}
                                            @if ($ex->status == 'active')
                                                <td class="fr"><br><p class="small_p status_inact"><i class="fa fa-warning"></i>&nbsp;Incomplete</p>
                                                    <span class="small_p">&nbsp;{{date('D, d-M-y', strtotime($ex->created_at)) }}&nbsp;</span><br>
                                                </td>
                                            @else
                                                <td class="fr"><br><p class="small_p status_act"><i class="fa fa-check"></i>&nbsp;Complete</p>
                                                    <span class="small_p">&nbsp;{{date('D, d-M-y', strtotime($ex->created_at)) }}&nbsp;</span><br>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                        <tr class="tbl_shade">
                                            <td class="fl tbl_count">#</td>
                                            <td class="fl">Total: GhC <span class="color6">{{number_format($expenses->sum('amt'), 2)}}</span></td>
                                        </tr>
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



