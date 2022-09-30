
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

                    <li class="nav-link active_link">
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

            @include('inc.notification')
             
            <div class="col_100">
                <div class="col_50">

                    <div class="pump_notice">
                        <h4><i class='bx bx-cog'></i>&nbsp;&nbsp;Setup Company Details</h4>
                        <form class="my_form" action="{{action('FuelController@store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <input name="name" type="text" class="" placeholder="Company Fullame" id="first-name-icon" @if (count($company) > 0) value="{{$company[0]->name}}" @endif required>
                            <input name="abrv" type="text" class="" placeholder="Abreviation" id="first-name-icon" @if (count($company) > 0) value="{{$company[0]->abrv}}" @endif required>
                            <input name="loc" type="text" class="" placeholder="City" id="first-name-icon" @if (count($company) > 0) value="{{$company[0]->location}}" @endif required>
                            <textarea name="company_add" class="" rows="3" placeholder="Address" required>@if (count($company) > 0) {{$company[0]->comp_add}} @endif</textarea>
                            <input name="contact" type="number" min="0" class="" placeholder="Mobile" @if (count($company) > 0) value="{{$company[0]->contact}}" @endif required>
                            <input name="email" type="email" class="" placeholder="Email" id="first-name-icon" @if (count($company) > 0) value="{{$company[0]->email}}" @endif required>
                            <input name="company_logo" type="file" class="" id="inputGroupFile01" @if (count($company) > 0) value="{{$company[0]->logo}}" @endif>
                            <input name="company_web" type="text" class="" placeholder="Website" id="first-name-icon" @if (count($company) > 0) value="{{$company[0]->website}}" @endif>
                                
                            <div class="btn_grp">
                                <button type="submit" class="submit_btn" name="store_action" value="admi_config"><i class="fa fa-save"></i>&nbsp;&nbsp;Save</button>
                                <button type="reset" class="reset_btn">Reset</button>
                            </div>
                            
                        </form>
                    </div>

                    <div class="pump_notice">
                        <h4><i class='bx bx-user'></i>&nbsp;&nbsp;Add User Here</h4>
                        <form class="my_form" action="{{action('FuelController@store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <input name="name" type="text" class="" placeholder="Username" id="first-name-icon" required>
                            <input name="email" type="email" class="" placeholder="Email" id="first-name-icon">
                            <input name="contact" type="number" class="" placeholder="Mobile" required>
                            <input name="password" type="password" class="" placeholder="Password" id="first-name-icon" required>
                            <input name="password_confirmation" type="password" class="" placeholder="Confirm Password" id="first-name-icon" required>
                            <select name="status" id="">
                                <option value="attendant">Attendant</option>
                                <option value="user">User</option>
                                <option value="admin">Addministrator</option>
                            </select>
                                
                            <div class="btn_grp">
                                <button type="submit" class="submit_btn" name="store_action" value="create_user"><i class="fa fa-save"></i>&nbsp;&nbsp;Save</button>
                                <button type="reset" class="reset_btn">Reset</button>
                            </div>
                            
                        </form>
                    </div>

                </div>



                <div class="col_50">

                    <div class="pump_notice">
                        <h4><i class='bx bx-plus-circle'></i>&nbsp;&nbsp;Add Pump</h4>
                        <form class="my_form" action="{{action('FuelController@store')}}" method="POST">
                            @csrf

                            <select name="fuel_type" id="">
                                <option value="0">Fuel Type</option>
                                <option>Gas</option>
                                <option>Super</option>
                                <option>Diesel</option>
                                <option value="both">Super & Diesel</option>
                            </select>
                            <input name="pump_name" type="text" class="" placeholder="Pump Name" id="first-name-icon" value="Pump_0{{count($pumps)+1}}" readonly required>
                            
                            <select name="tank_id" id="">
                                <option value="0">Select Tank</option>
                                @foreach ($tanks as $tank)
                                    <option value="{{$tank->id}}">{{$tank->tank_name.' - '.$tank->fuel_type}}</option>
                                @endforeach
                            </select>
                                
                            <div class="btn_grp">
                                <button type="submit" class="submit_btn" name="store_action" value="add_pump" onclick="return confirm('Are you sure you want to add new pump?')"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Add Pump</button>
                                {{-- <button type="reset" class="reset_btn">Reset</button> --}}
                            </div>
                            
                        </form>
                    </div>

                    <div class="pump_notice">
                        <h4><i class='bx bx-plus-circle'></i>&nbsp;&nbsp;Add Tank</h4>
                        <form class="my_form" action="{{action('FuelController@store')}}" method="POST">
                            @csrf

                            <select name="fuel_type" id="">
                                <option value="0">Fuel Type</option>
                                <option>Gas</option>
                                <option>Super</option>
                                <option>Diesel</option>
                            </select>
                            <input name="tank_name" type="text" class="" placeholder="Tank Name" id="first-name-icon" value="Tank_0{{count($tanks)+1}}" readonly required>
                            {{-- <select name="" id="">
                                <option value="attendant">Select Tank</option>
                                <option value="attendant">Tank1</option>
                                <option value="admin">Tank2</option>
                            </select> --}}
                                
                            <div class="btn_grp">
                                <button type="submit" class="submit_btn" name="store_action" value="add_tank" onclick="return confirm('Are you sure you want to add new tank?')"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Add Tank</button>
                                {{-- <button type="reset" class="reset_btn">Reset</button> --}}
                            </div>
                            
                        </form>
                    </div>
                </div>

                <div class="col_50">


                    <div class="data_view">
                        <h6><i class="fa fa-group color1"></i>&nbsp;&nbsp;All Users</h6>
                        @if (count($users) > 0)
                            <table class="sales_history_tbl">
                                <thead>
                                    <th class="fl tbl_count">#</th>
                                    <th class="fl">Attendant</th>
                                    <th class="fr">Status</th>
                                    {{-- <th class="fr">Action</th> --}}
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        @if ($user->del != 'null')
                                            @if ($a % 2 == 1)
                                                <tr class="tbl_shade">
                                            @else
                                                <tr>
                                            @endif
                                                <td class="fl tbl_count">{{$a++}}</td>
                                                <td class="fl">{{$user->name}}<br>
                                                    <span class="small_p">{{$user->status}}&nbsp;</span>
                                                </td>
                                                @if ($user->del == 'no')
                                                    <td class="fr"><br><p class="small_p status_act"><i class="fa fa-check"></i>&nbsp;Active</p></td>
                                                @else
                                                    <td class="fr"><br><p class="small_p status_inact"><i class="fa fa-warning"></i>&nbsp;Inactive</p></td>
                                                @endif
                                                {{-- <td class="fr">

                                                    <form action="{{ action('HrdashController@update', $user->id) }}" method="POST">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <input type="hidden" name="_method" value="PUT">
                                                        @csrf
                                                        
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#edit{{$user->id}}" class="my_trash_small"><i class="fa fa-pencil"></i></button>

                                                    </form>

                                                </td> --}}
                                            </tr>



                                            <!-- Update Users -->
                                            <div class="modal fade" id="edit{{$user->id}}" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
                                                    role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                Edit User Here
                                                            </h5>
                                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                                aria-label="Close">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                        </div>
                                                        <form action="{{ action('EmployeeController@update', $user->id) }}" method="POST">
                                                            <input type="hidden" name="_method" value="PUT">
                                                            @csrf
                                                            <div class="modal-body">
                                                                
                                                                <div class="col-md-12">
                                                                    <label>Username</label>
                                                                    <div class="form-group has-icon-left">
                                                                        <div class="position-relative">
                                                                            <input name="name" type="text" class="" placeholder="Title" id="first-name-icon" value="{{ $user->name }}" required>
                                                                            <div class="-icon">
                                                                                <i class="bi bi-person"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-md-12">
                                                                    <label>Email</label>
                                                                    <div class="form-group has-icon-left">
                                                                        <div class="position-relative">
                                                                            <input name="email" type="email" class="" placeholder="Email" id="first-name-icon" value="{{ $user->email }}" required>
                                                                            <div class="-icon">
                                                                                <i class="bi bi-envelope"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-md-12">
                                                                    <label>Contact</label>
                                                                    <div class="form-group has-icon-left">
                                                                        <div class="position-relative">
                                                                            <input name="contact" type="number" min="0" class="" placeholder="Title" id="first-name-icon" value="{{ $user->contact }}" required>
                                                                            <div class="-icon">
                                                                                <i class="fa fa-phone"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-md-12">
                                                                    <div class="filter_div" id="region">
                                                                        <i class="fa fa-clipboard"></i> &nbsp; Status
                                                                        <select name="status">
                                                                            <option value="{{ $user->status }}" selected>Same</option>
                                                                            <option value="hradmin">HR Administrator</option>
                                                                            <option value="financeadmin">Finance Administrator</option>
                                                                            <option value="disabled">Disable Account</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div> 
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                                                    <i class="fa fa-times d-block d-sm-none"></i><span class="d-none d-sm-block">Close</span>
                                                                </button>
                                                                <!--button id="success" class="btn btn-outline-success btn-lg btn-block" type="submit" name="update_action" value="update_user">Update</button-->
                                                                <button type="submit" name="update_action" value="update_user" class="btn btn-primary me-1 mb-1">Update</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $users->links() }}
                        @else
                            <div class="alert alert-danger">
                                No Records Found on Users
                            </div>
                        @endif

                        <p>&nbsp;</p>
                        <h6><i class="fa fa-beer color1"></i>&nbsp;&nbsp;Pumps</h6>
                        @if (count($pumps) > 0)
                            <table class="sales_history_tbl">
                                <thead>
                                    <th class="fl tbl_count">#</th>
                                    <th class="fl">Pupm Desc.</th>
                                    <th class="fr">Status</th>
                                    {{-- <th class="fr">Action</th> --}}
                                </thead>
                                <tbody>
                                    @foreach ($pumps as $pump)
                                        @if ($pump->del != 'null')
                                            @if ($b % 2 == 1)
                                                <tr class="tbl_shade">
                                            @else
                                                <tr>
                                            @endif
                                                <td class="fl tbl_count">{{$b++}}</td>
                                                <td class="fl">{{$pump->pump_name}}<br>
                                                    <span class="small_p">{{$pump->fuel_type}}&nbsp;</span>
                                                </td>
                                                @if ($pump->del == 'no')
                                                    <td class="fr"><br><p class="small_p status_act"><i class="fa fa-check"></i>&nbsp;Active</p></td>
                                                @else
                                                    <td class="fr"><br><p class="small_p status_inact"><i class="fa fa-warning"></i>&nbsp;Inactive</p></td>
                                                @endif
                                            </tr>

                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $pumps->links() }}
                        @else
                            <div class="alert alert-danger">
                                No Records Found on Pumps
                            </div>
                        @endif

                        <p>&nbsp;</p>
                        <h6><i class="fa fa-flask color1"></i>&nbsp;&nbsp;Tanks</h6>
                        @if (count($tanks) > 0)
                            <table class="sales_history_tbl">
                                <thead>
                                    <th class="fl tbl_count">#</th>
                                    <th class="fl">Tank Desc.</th>
                                    <th class="fr">Status</th>
                                    {{-- <th class="fr">Action</th> --}}
                                </thead>
                                <tbody>
                                    @foreach ($tanks as $tank)
                                        @if ($tank->del != 'null')
                                            @if ($c % 2 == 1)
                                                <tr class="tbl_shade">
                                            @else
                                                <tr>
                                            @endif
                                                <td class="fl tbl_count">{{$c++}}</td>
                                                <td class="fl">{{$tank->tank_name}}<br>
                                                    <span class="small_p">{{$tank->fuel_type}}&nbsp;</span>
                                                </td>
                                                @if ($tank->del == 'no')
                                                    <td class="fr"><br><p class="small_p status_act"><i class="fa fa-check"></i>&nbsp;Active</p></td>
                                                @else
                                                    <td class="fr"><br><p class="small_p status_inact"><i class="fa fa-warning"></i>&nbsp;Inactive</p></td>
                                                @endif
                                            </tr>

                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $tanks->links() }}
                        @else
                            <div class="alert alert-danger">
                                No Records Found on Tanks
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </section>
    
@endsection



