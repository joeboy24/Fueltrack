
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

                    <li class="nav-link active_link">
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
                <div class="col_70">

                    <div class="pump_notice">
                        {{-- <h4><i class='fa fa-calculator'></i>&nbsp;&nbsp;All Pumps</h4> --}}
                        <form class="my_form" action="{{action('FuelController@store')}}" method="POST">
                            @csrf

                            <h4><i class='fa fa-calculator'></i>&nbsp;&nbsp;All Pumps</h4>
                            @foreach ($pumps as $item)
                                <p class="small_p">{{$item->pump_name}} - 
                                    @if ($item->fuel_type == 'both')
                                        Super & Diesel
                                    @else
                                        {{$item->fuel_type}}
                                    @endif
                                </p>
                                @if ($item->fuel_type == 'both') 
                                    <input type="hidden" value="{{$ps = 'ps'.$item->id.'open'}}">  
                                    <input type="hidden" value="{{$pd = 'pd'.$item->id.'open'}}"> 
                                    <input type="hidden" value="{{$psc = 'ps'.$item->id.'close'}}">  
                                    <input type="hidden" value="{{$pdc = 'pd'.$item->id.'close'}}">  

                                    <input class="opn" name="pump{{$item->id}}s1" 
                                    @if ($openings != '')
                                        @if ($openings->$psc == 0)value="{{$openings->$ps}}" @else value="{{$openings->$psc}}" @endif
                                    @endif 
                                    type="number" min="0" step="any" class="form-control" placeholder="Face1 Opening #" required>   

                                    <input class="opn" name="pump{{$item->id}}d1" 
                                    @if ($openings != '')
                                        @if ($openings->$pdc == 0)value="{{$openings->$pd}}" @else value="{{$openings->$pdc}}" @endif
                                    @endif 
                                    type="number" min="0" step="any" class="form-control" placeholder="Face2 Opening #" required>
                                
                                @elseif ($item->fuel_type == 'Super')   
                                    <input type="hidden" value="{{$ps = 'ps'.$item->id.'open'}}">
                                    <input type="hidden" value="{{$pd = 'pd'.$item->id.'open'}}">
                                    <input type="hidden" value="{{$psc = 'ps'.$item->id.'close'}}">  
                                    <input type="hidden" value="{{$pdc = 'pd'.$item->id.'close'}}">  

                                    <input class="opn" name="pump{{$item->id}}s1"
                                    @if ($openings != '')
                                        @if ($openings->$psc == 0)value="{{$openings->$ps}}" @else value="{{$openings->$psc}}" @endif
                                    @endif 
                                    type="number" min="0" step="any" class="form-control" placeholder="Face1 Opening #" required>

                                    <input class="opn" name="pump{{$item->id}}s2"
                                    @if ($openings != '')
                                        @if ($openings->$pdc == 0)value="{{$openings->$pd}}" @else value="{{$openings->$pdc}}" @endif
                                    @endif 
                                    type="number" min="0" step="any" class="form-control" placeholder="Face2 Opening #" required>
                                
                                @elseif ($item->fuel_type == 'Diesel')  
                                    <input type="hidden" value="{{$ps = 'ps'.$item->id.'open'}}">
                                    <input type="hidden" value="{{$pd = 'pd'.$item->id.'open'}}">
                                    <input type="hidden" value="{{$psc = 'ps'.$item->id.'close'}}">  
                                    <input type="hidden" value="{{$pdc = 'pd'.$item->id.'close'}}">  

                                    <input class="opn" name="pump{{$item->id}}d1"
                                    @if ($openings != '')
                                        @if ($openings->$psc == 0)value="{{$openings->$ps}}" @else value="{{$openings->$psc}}" @endif
                                    @endif 
                                    type="number" min="0" step="any" class="form-control" placeholder="Face1 Opening #" required>
                                    
                                    <input class="opn" name="pump{{$item->id}}d2"
                                    @if ($openings != '')
                                        @if ($openings->$pdc == 0)value="{{$openings->$pd}}" @else value="{{$openings->$pdc}}" @endif
                                    @endif 
                                    type="number" min="0" step="any" class="form-control" placeholder="Face2 Opening #" required>
                                
                                @endif
                            @endforeach
                            <p>&nbsp;</p>

                            <h4><i class='fa fa-flask'></i>&nbsp;&nbsp;All Tanks</h4>
                            @foreach ($tanks as $item)

                                <p class="small_p">{{$item->tank_name}} - {{$item->fuel_type}}</p>
                                <input type="hidden" value="{{$tk = 't'.$item->id.'open'}}">
                                <input type="hidden" value="{{$xtk = 't'.$item->id.'close'}}">

                                <input class="opn" name="tank{{$item->id}}" 
                                @if ($openings != '') value="{{$openings->$tk}}" @endif 
                                type="number" min="0" step="any" class="form-control" 
                                placeholder="Input {{$item->tank_name}} opening value" required>

                                {{-- <input class="cls" name="xtank{{$item->id}}" 
                                @if ($openings != '') value="{{$openings->$tk}}" @endif 
                                type="number" min="0" step="any" class="form-control" 
                                placeholder="Input {{$item->tank_name}} closing value" required> --}}

                            @endforeach
                            
                            <div class="btn_grp">
                                <button type="submit" class="submit_btn" name="store_action" value="update_opening"><i class="fa fa-save"></i>&nbsp;&nbsp;Save Opening Readings</button>
                                <button type="reset" class="reset_btn">Reset</button>
                            </div>

                        </form>
                    </div>

                </div>



                <div class="col_50">

                    {{-- <div class="pump_notice">
                        <h4><i class='fa fa-flask'></i>&nbsp;&nbsp;All Tanks</h4>
                        <form class="my_form" action="{{action('FuelController@store')}}" method="POST">
                            @csrf

                            @foreach ($tanks as $item)
                                <p class="small_p">{{$item->tank_name}} Opening</p>
                                <input name="tank{{$item->id}}" type="number" min="0" step="any" class="form-control" placeholder="Input {{$item->tank_name}} opening value" required>
                            @endforeach

                            <div class="btn_grp">
                                <button type="submit" class="submit_btn" name="store_action" value="add_pricing"><i class="fa fa-save"></i>&nbsp;&nbsp;Update Tanks</button>
                                <button type="reset" class="reset_btn">Reset</button>
                            </div>
                            
                        </form>
                    </div> --}}

                </div>

            </div>

        </div>
    </section>
    
@endsection



