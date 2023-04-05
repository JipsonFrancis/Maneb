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
                    <!-- FILTER OUT TRANSITS THAT ARE NOT IN TRANSIT -->
                    @if ($Transit)
                        <div class="tracked-car tracked-car-actived">
                            <p class="plate-number">{{$Transit['licence']}}</p>
                            <p class="plate-number">{{$Transit['driver']}}</p>
                            <p class="status-car">in transit</p>
                            <input type="hidden" name="transit" value="{{$Transit['transit_id']}}">
                            <!-- <input type="hidden" name="truck" value="{{$Transit}}"> -->
                        </div>
                    @else
                        @foreach ( $transits as $transit )
                            <div class="tracked-car tracked-car-actived">
                                <p class="plate-number">{{$transit->truck->licence}}</p>
                                <p class="plate-number">{{$transit->driver->name}}</p>
                                <p class="status-car">in transit</p>
                                <input type="hidden" name="transit" value="{{$transit->id}}">
                                <input type="hidden" name="truck" value="{{$transit->truck->id}}">
                            </div>
                        @endforeach
                    @endif
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
            <div id="location" class="map-section-map">
                @if ($Transit)
                    <iframe src="{{$Transit['center']['iframe']}}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                @else
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3871.737321312045!2d33.74013261416684!3d-13.97423489020379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1921d3f84285d089%3A0x58cc2a46db548781!2sNxtGen%20Labs!5e0!3m2!1sen!2smw!4v1679989200453!5m2!1sen!2smw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                @endif
            </div>

            <div class="details-section">
                <p class="main-p">Main details</p>

                <div class="details-nav">
                    <input type="button" data-id="vehicle-details" value="Vehicle" class="nav-btn btn-tab nav-btn-activated">
                    <input type="button" data-id="paper-details" value="Paper Information" class="nav-btn btn-tab">
                    <input type="button" data-id="driver-details" value="Driver" class="nav-btn btn-tab">
                </div>

                <div class="main-details-display">
                    <div class="vehicle-details tabs-map  driver-details-hidden" id="vehicle-details">
                        <div class="icon">
                            <img src="{{asset('asset/images/delivery-van.png')}}" alt="">
                        </div>
                        <div class="vehicle-items vehicle" id="vehicle">
                            @if ($Transit)
                                <div class="items-list">
                                    <p>Registration:</p>
                                    <p class="item-below">{{$Transit['licence']}}</p>
                                </div>
                              
                                <div class="items-list">
                                    <p>Model:</p>
                                    <p class="item-below">{{$Transit['Model']}}</p>
                                </div>
                            
                                <div class="items-list">
                                    <p>Name:</p>
                                    <p class="item-below">{{$Transit['name']}}</p>
                                </div>
                             
                            @endif    
                        </div>
                    </div>

                    <div class="paper-details tabs-map" id="paper-details">
                        <div class="icon">
                            <img src="{{asset('asset/images/paper.png')}}" alt="">
                        </div>
                        <div class="paper-items" id="paper">
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

                    <div class="driver-details tabs-map" id="driver-details">
                        <div class="icon">
                            <img src="{{asset('asset/images/user.png')}}" alt="">
                        </div>
                        <div class="driver-items" id="driver">
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
<script src="{{asset('js/transit.js')}}"></script>
@endsection
