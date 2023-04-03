@extends('components.layout')
@section('addCss')

@section('title', 'MANEB')
@section('content')
<body>
    <div class="full-app-container">
        <!-- <div class="navigation-dashboard">
            <div class="img-logo">
                <img src="../assets/images/maneB.jpg" alt="">
                <p>MANEB</p>
            </div>
            <div class="nav-collection">
                <div class="nav-right">
                    <ul>
                        <li><a href="./dashboard.html" class="active-nav"><img class="icon-link" src="../assets/images/dashboard.png" alt=""> Dashboard</a></li>
                        <li><a href="./tracking.html"><img class="icon-link" src="../assets/images/location.png" alt=""> Tracking</a></li>
                        <li><a href="./box.html"><img class="icon-link" src="../assets/images/box.png" alt=""> Box</a></li>
                        <li><a href="./papers.html"><img class="icon-link" src="../assets/images/paper.png" alt=""> Papers</a></li>
                        <li><a href="./notification.html"><img class="icon-link" src="../assets/images/notification.png" alt=""> Notifications</a></li>
                        <li><a href="./users.html"><img class="icon-link" src="../assets/images/group.png" alt=""> Users</a></li>
                        <li><a href="./reports.html"><img class="icon-link" src="../assets/images/report.png" alt=""> Reports</a></li>
                    </ul>
                </div>
    
                <div class="nav-bottom">
                    <ul>
                        <li><a href="#"><img class="icon-link" src="../assets/images/user.png" alt=""> Admin</a></li>
                        <li><a href="#"><img class="icon-link" src="../assets/images/logout.png" alt=""> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div> -->
        <x-nav />

        <div class="container-main-area-dashboad">
            <div class="quick-dashboard-stats">
                <div class="top-quick-stats">
                    <!-- <div class="stat-box">
                        <img src="../assets/images/delivery-van.png" alt="">
                        <p class="words-quick-stats">TOTAL TRUCKS</p>
                        <p class="stats-of-items">23</p>
                        <p class="small-stats">Compared to (26 last year)</p>
                    </div>
                    <div class="stat-box">
                        <img src="../assets/images/delivery-van.png" alt="">
                        <p class="words-quick-stats">BOXES DELIVERED</p>
                        <p class="stats-of-items">4 of 23</p>
                    </div>
                    <div class="stat-box">
                        <img src="../assets/images/delivery-van.png" alt="">
                        <p class="words-quick-stats">USERS</p>
                        <p class="stats-of-items">48</p>
                    </div>
                    <div class="stat-box">
                        <img src="../assets/images/delivery-van.png" alt="">
                        <p class="words-quick-stats">ANOMALIES</p>
                        <p class="stats-of-items">2</p>
                        <p class="small-stats">Compared to (18 last year)</p>
                    </div> -->
                    <x-stat_box />
                    <x-stat_box />
                    <x-stat_box />
                    <x-stat_box />
                </div>

                <div class="list-of-trucks">
                    <p class="intro-section">Exams In Transit</p>
                    <table class="home-table">
                        <thead>
                            <tr class="table-head">
                                <th class="column1 table-left"># Plate</th>
                                <th class="column2 table-left">Driver</th>
                                <th class="column3 table-left">Inital Location</th>
                                <th class="column5 table-left">Destination</th>
                                <th class="column4 table-left">Status</th>
                                <th class="column6 table-left"># Boxes</th>
                            </tr>
                        </thead>
                        <tbody class="scroll-table">
                            @foreach ($transits as $transit)
                                <tr class="table-rows">
                                    <td class="column1 table-left">{{$transit->truck->licence}}</td>
                                    <td class="column2 table-left">{{$transit->driver->name}}</td>
                                    <td class="column3 table-left">{{$transit->origin->name}}</td>
                                    <td class="column5 table-left">{{$transit->endLocation->name}}</td>
                                    @if ($transit->origin->name != $transit->endLocation->name)
                                        <td class="column4"><p class="status-items-box">transit</p></td>
                                    @else
                                        <td class="column4"><p class="status-items-box">Arrived</p></td>
                                    @endif
                                    <td class="column6">{{$transit->boxes->count()}}</td>
                                </tr>
                            @endforeach
                            <!-- <tr class="table-rows">
                                <td class="column1 table-left">BW 2323</td>
                                <td class="column2 table-left">Jane Doe</td>
                                <td class="column3 table-left">Zomba</td>
                                <td class="column5 table-left">Lilongwe</td>
                                <td class="column4"><p class="status-items-box">transit</p></td>
                                <td class="column6">23</td>
                            </tr>
                            <tr class="table-rows">
                                <td class="column1 table-left">BW 2323</td>
                                <td class="column2 table-left">Jane Doe</td>
                                <td class="column3 table-left">Zomba</td>
                                <td class="column5 table-left">Lilongwe</td>
                                <td class="column4"><p class="status-items-box">transit</p></td>
                                <td class="column6">23</td>
                            </tr>
                            <tr class="table-rows">
                                <td class="column1 table-left">BW 2323</td>
                                <td class="column2 table-left">Jane Doe</td>
                                <td class="column3 table-left">Zomba</td>
                                <td class="column5 table-left">Lilongwe</td>
                                <td class="column4"><p class="status-items-box">transit</p></td>
                                <td class="column6">23</td>
                            </tr>
                            <tr class="table-rows">
                                <td class="column1 table-left">BW 2323</td>
                                <td class="column2 table-left">Jane Doe</td>
                                <td class="column3 table-left">Zomba</td>
                                <td class="column5 table-left">Lilongwe</td>
                                <td class="column4"><p class="status-items-box">transit</p></td>
                                <td class="column6">23</td>
                            </tr>
                            <tr class="table-rows">
                                <td class="column1 table-left">BW 2323</td>
                                <td class="column2 table-left">Jane Doe</td>
                                <td class="column3 table-left">Zomba</td>
                                <td class="column5 table-left">Lilongwe</td>
                                <td class="column4"><p class="status-items-box">transit</p></td>
                                <td class="column6">23</td>
                            </tr> -->
                            
                        </tbody>
                    </table>
                </div>
            
            </div>
        </div>
        
    </div>
</body>
@endsection

