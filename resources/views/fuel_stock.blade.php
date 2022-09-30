
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

                    <li class="nav-link active_link">
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
                <div class="col_50">

                    <div class="pump_notice">
                        <h4><i class='bx bx-bar-chart-alt-2'></i>&nbsp;&nbsp;Update Stock</h4>
                        <form class="my_form" action="{{action('FuelController@store')}}" method="POST">
                            @csrf
                            <select name="tank_id" id="">
                                <option value="0">Select Tank</option>
                                @foreach ($tanks as $tank)
                                    <option value="{{$tank->id}}">{{$tank->tank_name.' - '.$tank->fuel_type}}</option>
                                @endforeach
                            </select>
                            <input name="litres" type="number" min="0" step="any" class="form-control" placeholder="Litres" required>
                            <input name="amt" type="number" min="0" step="any" class="form-control" placeholder="Amount" required>
                                
                            <div class="btn_grp">
                                <button type="submit" class="submit_btn" name="store_action" value="add_stock"><i class="fa fa-save"></i>&nbsp;&nbsp;Update</button>
                                <button type="reset" class="reset_btn">Reset</button>
                            </div>
                            
                        </form>
                    </div>

                    <div class="pump_notice">
                        {{-- <i class="fa fa-flask ivisa"></i> --}}
                        <table class="expense_tbl">
                            <tbody>
                                <tr> 
                                    <td><i class="fa fa-flask ivisa"></i></td>
                                    <td class="small_p fr">Super / Diesel</td>
                                </tr>
                                <tr>
                                    <td class="atd_name">Current Stock</td>
                                    <td class="small_p fr status_danger">
                                        @if ($stock){{number_format($stock->amt, 2).'  /  '}}@else @endif
                                        @if ($stock2){{number_format($stock2->amt, 2)}}@else -  @endif
                                    </td>
                                </tr>
                                {{-- <tr><td class="small_p">&nbsp;</td></tr> --}}

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
                    </div>

                </div>



                <div class="col_50">

                    <div class="pump_notice">
                        <h4><i class='bx bx-cog'></i>&nbsp;&nbsp;Update Pricing</h4>
                        <form class="my_form" action="{{action('FuelController@store')}}" method="POST">
                            @csrf
                            @if ($price)
                                <select name="fuel_type" id="fuel_type" onchange="show_old({{number_format($price->new_price, 2)}}, {{number_format($price2->new_price, 2)}})">
                                    <option value="0">Fuel Type</option>
                                    <option>Super</option>
                                    <option>Diesel</option>
                                </select>
                            @else
                                <select name="fuel_type" id="fuel_type" onchange="show_old(0, 0)">
                                    <option value="0">Fuel Type</option>
                                    <option>Super</option>
                                    <option>Diesel</option>
                                </select>
                            @endif
                            <script>
                                function show_old(x, y) {
                                    if (document.getElementById("fuel_type").value == 'Super') {
                                        document.getElementById("old_price").value = x;
                                        $('#old_price').text('98uyh34jrfkj');
                                        // $('#total').text('Product price: $1000');
                                    } else {
                                        document.getElementById("old_price").value = y;
                                    }
                                }
                            </script>
                            <input name="old_price" type="number" step="any" min="0" class="form-control" placeholder="Old Price" id="old_price" readonly> 
                                
                            <input name="new_price" type="number" step="any" min="0" class="form-control" placeholder="New Price" id="first-name-icon" required>
                                
                            <div class="btn_grp">
                                <button type="submit" class="submit_btn" name="store_action" value="add_pricing"><i class="fa fa-save"></i>&nbsp;&nbsp;Update</button>
                                <button type="reset" class="reset_btn">Reset</button>
                            </div>
                            
                        </form>
                    </div>

                    <div class="pump_notice">
                        {{-- <i class="fa fa-cc-visa ivisa"></i> --}}
                        <table>
                            <tbody>
                                <tr>
                                    <td><i class="fa fa-cc-visa ivisa"></i></td>
                                    <td class="small_p fr">Super / Diesel</td>
                                </tr>
                                <tr>
                                    <td class="atd_name">Current Pricing</td>
                                    <td class="small_p fr status_danger">
                                        @if ($price){{number_format($price->new_price, 2).'  /  '}}@else @endif
                                        @if ($price2){{number_format($price2->new_price, 2)}}@else -  @endif
                                    </td>
                                </tr>
                                {{-- <tr><td class="small_p">&nbsp;</td></tr> --}}

                                <tr>
                                    <td class="small_p">Updated At</td>
                                    <td class="small_p fr">
                                        @if ($price) 
                                            {{date('d M, Y', strtotime($price->updated_at))}}
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            {{-- <div class="col_100">

                <div class="data_view">
                    <h6><i class="fa fa-group color1"></i>&nbsp;&nbsp;All Users</h6>
                    <table class="sales_history_tbl">
                        <thead>
                            <th class="fl tbl_count">#</th>
                            <th class="fl">Attendant</th>
                            <th class="fr">Status</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fl tbl_count">1</td>
                                <td class="fl">John Doe<br>
                                    <span class="small_p">Attendant&nbsp;</span>
                                </td>
                                <td class="fr"><br><p class="small_p status_inact"><i class="fa fa-warning"></i>&nbsp;Inactive</p></td>
                            </tr>
                            <tr class="tbl_shade">
                                <td class="fl tbl_count">2</td>
                                <td class="fl">John Doe<br>
                                    <span class="small_p">Administrator&nbsp;</span>
                                </td>
                                <td class="fr"><br><p class="small_p status_inact"><i class="fa fa-warning"></i>&nbsp;Inactive</p></td>
                            </tr>
                            <tr>
                                <td class="fl tbl_count">3</td>
                                <td class="fl">John Doe<br>
                                    <span class="small_p">Administrator&nbsp;</span>
                                </td>
                                <td class="fr"><br><p class="small_p status_act"><i class="fa fa-check"></i>&nbsp;Active</p></td>
                            </tr>
                            <tr>
                                <td class="fl tbl_count">4</td>
                                <td class="fl">John Doe<br>
                                    <span class="small_p">Administrator&nbsp;</span>
                                </td>
                                <td class="fr"><br><p class="small_p status_act"><i class="fa fa-check"></i>&nbsp;Active</p></td>
                            </tr>
                            <tr class="tbl_shade">
                                <td class="fl tbl_count">5</td>
                                <td class="fl">John Doe<br>
                                    <span class="small_p">Administrator&nbsp;</span>
                                </td>
                                <td class="fr"><br><p class="small_p status_inact"><i class="fa fa-warning"></i>&nbsp;Inactive</p></td>
                            </tr>
                        </tbody>
                    </table>

                    <p>&nbsp;</p>
                    <h6><i class="fa fa-beer color1"></i>&nbsp;&nbsp;Pumps</h6>
                    <table class="sales_history_tbl">
                        <thead>
                            <th class="fl tbl_count">#</th>
                            <th class="fl">Pump Desc.</th>
                            <th class="fr">Status</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fl tbl_count">1</td>
                                <td class="fl">Pump1<br>
                                    <span class="small_p">Diesel&nbsp;</span>
                                </td>
                                <td class="fr"><br><p class="small_p status_act"><i class="fa fa-check"></i>&nbsp;Active</p></td>
                            </tr>
                            <tr>
                                <td class="fl tbl_count">2</td>
                                <td class="fl">Pump2<br>
                                    <span class="small_p">Super&nbsp;</span>
                                </td>
                                <td class="fr"><br><p class="small_p status_act"><i class="fa fa-check"></i>&nbsp;Active</p></td>
                            </tr>
                            <tr class="tbl_shade">
                                <td class="fl tbl_count">3</td>
                                <td class="fl">Pump3<br>
                                    <span class="small_p">Super&nbsp;</span>
                                </td>
                                <td class="fr"><br><p class="small_p status_inact"><i class="fa fa-warning"></i>&nbsp;Inactive</p></td>
                            </tr>
                        </tbody>
                    </table>

                    <p>&nbsp;</p>
                    <h6><i class="fa fa-flask color1"></i>&nbsp;&nbsp;Tanks</h6>
                    <table class="sales_history_tbl">
                        <thead>
                            <th class="fl tbl_count">#</th>
                            <th class="fl">Tank Desc.</th>
                            <th class="fr">Status</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fl tbl_count">1</td>
                                <td class="fl">Tank1<br>
                                    <span class="small_p">Diesel&nbsp;</span>
                                </td>
                                <td class="fr"><br><p class="small_p status_act"><i class="fa fa-check"></i>&nbsp;Active</p></td>
                            </tr>
                            <tr>
                                <td class="fl tbl_count">2</td>
                                <td class="fl">Tank2<br>
                                    <span class="small_p">Super&nbsp;</span>
                                </td>
                                <td class="fr"><br><p class="small_p status_act"><i class="fa fa-check"></i>&nbsp;Active</p></td>
                            </tr>
                    </table>
                </div>
            </div> --}}

        </div>
    </section>
    
@endsection



