@extends('components.layout')
@section('addCss')

@section('title', 'Maneb')
@section('content')

<body>
    <div class="full-app-container">
        <x-nav />

        <div class="cars-tracked">
            <div class="search-box">
                <p>Paper Tracking</p>
                <x-search />

                <div class="cars-tracked-inner">
                    @foreach ( $transits as $transit )
                        <div class="tracked-car tracked-car-actived">
                            <p class="plate-number">{{$transit->truck->licence}}</p>
                            <p class="plate-number">{{$transit->driver->name}}</p>
                            <p class="status-car">in transit</p>
                        </div>
                    @endforeach
                    <!-- <div class="tracked-car tracked-car-actived">
                        <p class="plate-number">BW2324</p>
                        <p class="status-car">in transit</p>
                    </div>
                    <div class="tracked-car">
                        <p class="plate-number">BW2324</p>
                        <p class="status-car">in transit</p>
                    </div>
                    <div class="tracked-car">
                        <p class="plate-number">BW2324</p>
                        <p class="status-car">in transit</p>
                    </div> -->
                </div>
            </div>
        </div>

        <div class="map-section">
            <div class="map-section-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3871.737321312045!2d33.74013261416684!3d-13.97423489020379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1921d3f84285d089%3A0x58cc2a46db548781!2sNxtGen%20Labs!5e0!3m2!1sen!2smw!4v1679989200453!5m2!1sen!2smw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="details-section">
                <p class="main-p">Main details</p>

                <div class="details-nav">
                    <input type="button" value="Vehicle" class="nav-btn nav-btn-activated">
                    <input type="button" value="Paper Information" class="nav-btn">
                    <input type="button" value="Driver" class="nav-btn">
                </div>

                <div class="main-details-display">
                    <div class="vehicle-details">
                        <div class="icon">
                            <img src="{{asset('asset/images/delivery-van.png')}}" alt="">
                        </div>
                        <div class="vehicle-items">
                            <div class="items-list">
                                <p>Registration:</p>
                                <p class="item-below">BW2324</p>
                            </div>
                            <div class="items-list">
                                <p>Model:</p>
                                <p class="item-below">Toyota</p>
                            </div>
                            <div class="items-list">
                                <p>Name:</p>
                                <p class="item-below">Dyna</p>
                            </div>
                        </div>
                    </div>
                    <div class="paper-details driver-details-hidden">
                        <div class="icon">
                            <img src="{{asset('asset/images/delivery-van.png')}}" alt="">
                        </div>
                        <div class="paper-items">
                            <div class="items-list">
                                <p>Paper Name:</p>
                                <p class="item-below">English</p>
                            </div>
                            <div class="items-list">
                                <p>Paper Name:</p>
                                <p class="item-below">English</p>
                            </div>
                            <div class="items-list">
                                <p>Paper Name:</p>
                                <p class="item-below">English</p>
                            </div>
                        </div>
                    </div>
                    <div class="driver-details driver-details-hidden">
                        <div class="icon">
                            <img src="{{asset('asset/images/delivery-van.png')}}" alt="">
                        </div>
                        <div class="driver-items">
                            <div class="items-list">
                                <p>Name:</p>
                                <p class="item-below">Jane Doe</p>
                            </div>
                            <div class="items-list">
                                <p>Email:</p>
                                <p class="item-below">janedoe@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection
