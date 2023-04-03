@extends('components.layout')
@section('addCss')

@section('title', 'Maneb')
@section('content')

<body>
    <div class="full-app-container">
        <x-nav />

        <div class="container-main-area-dashboad">
            
            <div class="report-boxes-top">
                <div class="report-box">
                    <div class="report-words-top-img">
                        <p class="report-top">Boxes scanned</p>
                    <p class="report-number">55</p>
                    </div>
                    <div class="report-img">
                        <img src="../assets/images/box.png" alt="">
                    </div>
                </div>
                <div class="report-box">
                    <div class="report-words-top-img">
                        <p class="report-top">Shipments complited</p>
                    <p class="report-number">55 <span class="of">of</span> 128</p>
                    </div>
                    <div class="report-img">
                        <img src="../assets/images/box.png" alt="">
                    </div>
                </div>
                <div class="report-box">
                    <div class="report-words-top-img">
                        <p class="report-top">Boxes scanned</p>
                    <p class="report-number">55</p>
                    </div>
                    <div class="report-img">
                        <img src="../assets/images/box.png" alt="">
                    </div>
                </div>
                <div class="report-box">
                    <div class="report-words-top-img">
                        <p class="report-top"></p>
                    <p class="report-number">55</p>
                    </div>
                    <div class="report-img">
                        <img src="../assets/images/box.png" alt="">
                    </div>
                </div>
            </div>

            <div class="middle-sector-report">
                <div class="main-box-reports">
                    <p class="header-in-reports">Deliveries completed</p>
                    <table class="report-table">
                        <thead>
                            <tr class="rp-table-head">
                                <th class="table-th">Destination</th>
                                <th class="table-th">Truck</th>
                                <th class="table-th">Box #</th>
                                <th class="table-th">Delivery Date</th>
                                <th class="table-th">Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-trr">
                                <td class="table-tr">Ntcheu</td>
                                <td class="table-tr">BW 2324</td>
                                <td class="table-tr">3434</td>
                                <td class="table-tr">23/02/2022</td>
                                <td class="table-tr">12:30</td>
                            </tr>
                            <tr class="table-trr">
                                <td class="table-tr">Ntcheu</td>
                                <td class="table-tr">BW 2324</td>
                                <td class="table-tr">3434</td>
                                <td class="table-tr">23/02/2022</td>
                                <td class="table-tr">12:30</td>
                            </tr>
                            <tr class="table-trr">
                                <td class="table-tr">Ntcheu</td>
                                <td class="table-tr">BW 2324</td>
                                <td class="table-tr">3434</td>
                                <td class="table-tr">23/02/2022</td>
                                <td class="table-tr">12:30</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="progress-report">
                    <p class="header-in-reports">Delivery status</p>
                    <div class="div-circle">
                        <div class="circle">
                            <p class="percent">60%</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
    </div>
</body>

@endsection