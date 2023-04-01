@extends('components.layout')
@section('addCss')

@section('title', 'Maneb')
@section('content')

<body>
    <div class="full-app-container">
        <x-nav />

        <div class="container-main-area-dashboad">
            <div class="notification-seal">
                <x-toast />

                <!-- <div class="notification-pannel warning">
                    <img src="../assets/images/warning.png" alt="">
                    <div class="split-notification">
                        <div class="alret-details">
                        <p class="warning-type">Success</p>
                        <p class="warning-type-details">Box has been delivered sucessfuly.</p>
                    </div>
                    <img src="../assets/images/close.png" alt="">
                    </div>
                </div> -->

                    <!-- <div class="notification-pannel caution">
                        <img src="../assets/images/exclamation-mark-in-a-circle.png" alt="">
                        <div class="split-notification">
                            <div class="alret-details">
                            <p class="warning-type">Success</p>
                            <p class="warning-type-details">Box has been delivered sucessfuly.</p>
                        </div>
                        <img src="../assets/images/close.png" alt="">
                        </div>
                    </div> -->
            </div>
        </div>
        
    </div>
</body>

@endsection