<!DOCTYPE html>
  <!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    {{-- <link rel="stylesheet" href="style.css"> --}}
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="/maindir/css/fuel.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <!--<title>Dashboard Sidebar Menu</title>--> 
</head>
<body>
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
                        <a href="#">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
                            <span class="text nav-text">Revenue</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Notifications</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-pie-chart-alt icon' ></i>
                            <span class="text nav-text">Analytics</span>
                        </a>
                    </li>

                    {{-- <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-heart icon' ></i>
                            <span class="text nav-text">Likes</span>
                        </a>
                    </li> --}}

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">Wallets</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
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

    {{-- <section class="home">
        <div class="text">Dashboard Sidebar</div>
    </section> --}}

    <section class="fuel_dash">
        <div class="row">
            <div class="welcome_box">
                <p><i class="fa fa-unlock"></i>&nbsp;&nbsp; Welcome! <span>{{auth()->user()->name}}</span></p>
            </div>
            <!--button class="check_btn"><i class='fa fa-power-off'></i></button-->
            
            <div class="col_100">
                <div class="col_50">
                    <div class="checkin">
                        <form action="">
                            <p class="small_p">Checkin Here</p>
                            <select name="checkin" id="checkin">
                                <option value="">Pump 1 - 2017431</option>
                                <option value="">Pump 3 - 3189272</option>
                            </select>

                            <button>Checkin&nbsp;<i class='bx bx-log-in icon'></i></button>
                        </form>
                    </div>

                    <div class="pump_notice">
                        <img src="/maindir/images/fuel/pump2.png" alt="">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="pump_title">Pump 1&nbsp;&nbsp;<span>Diesel</span></td>
                                    {{-- <td class="small_p fr status_act">Active</td> --}}
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
                                {{-- <tr><td class="small_p">&nbsp;</td></tr> --}}

                                <tr>
                                    <td class="small_p">Checkin Time</td>
                                    <td class="small_p fr">Today 6:00 Am</td>
                                </tr>
                                <tr><td class="small_p">&nbsp;</td></tr>
                                
                                <tr>
                                    <td class="small_p">Total</td>
                                    <td class="small_p fr">Daily Total</td>
                                </tr>
                                <tr>
                                    <td class="sales_highlight color6">GhC&nbsp;7,200</td>
                                    <td class="sales_highlight fr"><span>GhC&nbsp;34,500</span></td>
                                    {{-- <td class="small_p fr">Status</td> --}}
                                </tr>
                            </tbody>
                            {{-- <p class="small_p">Attendant</p>
                            <p class="atd_name">Patric Ola Yawson</p> --}}
                        </table>
                    </div>

                    <div class="pump_notice">
                        <img src="/maindir/images/fuel/pump2.png" alt="">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="pump_title">Pump 1&nbsp;&nbsp;<span>Diesel</span></td>
                                    {{-- <td class="small_p fr status_act">Active</td> --}}
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
                                {{-- <tr><td class="small_p">&nbsp;</td></tr> --}}

                                <tr>
                                    <td class="small_p">Checkin Time</td>
                                    <td class="small_p fr">Today 6:00 Am</td>
                                </tr>
                                <tr><td class="small_p">&nbsp;</td></tr>
                                
                                <tr>
                                    <td class="small_p">Total Sales</td>
                                    {{-- <td class="small_p fr">Status</td> --}}
                                </tr>
                                <tr>
                                    <td class="sales_highlight color6">GhC&nbsp;7,200</td>
                                    <td class="sales_highlight fr"><span>GhC&nbsp;34,500</span></td>
                                    {{-- <td class="small_p fr">Status</td> --}}
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="pump_notice">
                        <i class="fa fa-cc-visa"></i>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="atd_name">Total Expenses</td>
                                    <td class="small_p fr status_danger">GhC&nbsp;7,200</td>
                                </tr>
                                {{-- <tr><td class="small_p">&nbsp;</td></tr> --}}

                                <tr>
                                    <td class="small_p">Updated At</td>
                                    <td class="small_p fr">Today {{date('h:i')}} Pm</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col_50">
                    <div class="data_view">
                        <h6><i class="fa fa-file-text color1"></i>&nbsp;&nbsp;Sales History</h6>
                        
                        <table class="sales_history_tbl">
                            <thead>
                                <th class="fl">#</th>
                                <th class="fl">Attendant</th>
                                {{-- <th class="fl">Amt. Due</th>
                                <th class="fl">Amt. Paid</th> --}}
                                <th class="fr">Status</th>
                            </thead>
                            <tbody>
                                {{-- <tr><td>ghjk</td></tr> --}}
                                <tr>
                                    <td class="fl">1</td>
                                    <td class="fl">John Doe<br>
                                        <span class="small_p">Amt. Due:&nbsp;</span><span class="color6">1,200</span>&nbsp;<span class="small_p">/&nbsp;Amt. Paid:&nbsp;</span>1,000 &nbsp;
                                    </td>
                                    <td class="fr"><br><p class="small_p status_inact"><i class="fa fa-warning"></i>&nbsp;Incomplete</p></td>
                                </tr>
                                <tr class="tbl_shade">
                                    <td class="fl">2</td>
                                    <td class="fl">John Doe<br>
                                        <span class="small_p">Amt. Due:&nbsp;</span><span class="color6">1,200</span>&nbsp;<span class="small_p">/&nbsp;Amt. Paid:&nbsp;</span>1,000 &nbsp;
                                    </td>
                                    <td class="fr"><br><p class="small_p status_inact"><i class="fa fa-warning"></i>&nbsp;Incomplete</p></td>
                                </tr>
                                <tr>
                                    <td class="fl">3</td>
                                    <td class="fl">John Doe<br>
                                        <span class="small_p">Amt. Due:&nbsp;</span><span class="color6">1,200</span>&nbsp;<span class="small_p">/&nbsp;Amt. Paid:&nbsp;</span>1,000 &nbsp;
                                    </td>
                                    <td class="fr"><br><p class="small_p status_act"><i class="fa fa-check"></i>&nbsp;Complete</p></td>
                                </tr>
                                <tr class="tbl_shade">
                                    <td class="fl">4</td>
                                    <td class="fl">John Doe<br>
                                        <span class="small_p">Amt. Due:&nbsp;</span><span class="color6">1,200</span>&nbsp;<span class="small_p">/&nbsp;Amt. Paid:&nbsp;</span>1,000 &nbsp;
                                    </td>
                                    <td class="fr"><br><p class="small_p status_inact"><i class="fa fa-warning"></i>&nbsp;Incomplete</p></td>
                                </tr><tr>
                                    <td class="fl">5</td>
                                    <td class="fl">John Doe<br>
                                        <span class="small_p">Amt. Due:&nbsp;</span><span class="color6">1,200</span>&nbsp;<span class="small_p">/&nbsp;Amt. Paid:&nbsp;</span>1,000 &nbsp;
                                    </td>
                                    <td class="fr"><br><p class="small_p status_inact"><i class="fa fa-warning"></i>&nbsp;Incomplete</p></td>
                                </tr>
                                <tr class="tbl_shade">
                                    <td class="fl">6</td>
                                    <td class="fl">John Doe<br>
                                        <span class="small_p">Amt. Due:&nbsp;</span><span class="color6">1,200</span>&nbsp;<span class="small_p">/&nbsp;Amt. Paid:&nbsp;</span>1,000 &nbsp;
                                    </td>
                                    <td class="fr"><br><p class="small_p status_inact"><i class="fa fa-warning"></i>&nbsp;Incomplete</p></td>
                                </tr>
                                <tr>
                                    <td class="fl">7</td>
                                    <td class="fl">John Doe<br>
                                        <span class="small_p">Amt. Due:&nbsp;</span><span class="color6">1,200</span>&nbsp;<span class="small_p">/&nbsp;Amt. Paid:&nbsp;</span>1,000 &nbsp;
                                    </td>
                                    <td class="fr"><br><p class="small_p status_act"><i class="fa fa-check"></i>&nbsp;Complete</p></td>
                                </tr>
                                <tr class="tbl_shade">
                                    <td class="fl">8</td>
                                    <td class="fl">John Doe<br>
                                        <span class="small_p">Amt. Due:&nbsp;</span><span class="color6">1,200</span>&nbsp;<span class="small_p">/&nbsp;Amt. Paid:&nbsp;</span>1,000 &nbsp;
                                    </td>
                                    <td class="fr"><br><p class="small_p status_inact"><i class="fa fa-warning"></i>&nbsp;Incomplete</p></td>
                                </tr>
                                <tr>
                                    <td class="fl">9</td>
                                    <td class="fl">John Doe<br>
                                        <span class="small_p">Amt. Due:&nbsp;</span><span class="color6">1,200</span>&nbsp;<span class="small_p">/&nbsp;Amt. Paid:&nbsp;</span>1,000 &nbsp;
                                    </td>
                                    <td class="fr"><br><p class="small_p status_act"><i class="fa fa-check"></i>&nbsp;Complete</p></td>
                                </tr>
                                <tr class="tbl_shade">
                                    <td class="fl">10</td>
                                    <td class="fl">John Doe<br>
                                        <span class="small_p">Amt. Due:&nbsp;</span><span class="color6">1,200</span>&nbsp;<span class="small_p">/&nbsp;Amt. Paid:&nbsp;</span>1,000 &nbsp;
                                    </td>
                                    <td class="fr"><br><p class="small_p status_inact"><i class="fa fa-warning"></i>&nbsp;Incomplete</p></td>
                                </tr>
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

    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
    </script>


  {{-- <script src="/maindir/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}

</body>
</html>
