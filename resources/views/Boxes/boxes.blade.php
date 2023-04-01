@extends('components.layout')
@section('addCss')

@section('title', 'MANEB')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"
    integrity="sha512-CNgIRecGo7nphbeZ04Sc13ka07paqdeTu0WR1IM4kNcpmBAUSHSQX0FslNhTDadL4O5SAGapGt4FodqL8My0mA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    ></script>
<body>

    <div class="full-app-container">
        <x-nav />

        <div class="container-main-area-dashboad">
            <x-search />

            <div class="table-container">
                <table>
                    <thead>
                        <tr class="table-head">
                            <th class="column1">Box Id</th>
                            <th class="column2">Origin</th>
                            <th class="column3">Location</th>
                            <th class="column5">Destination</th>
                            <th class="column4">QR Code</th>
                            <th class="column6">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $boxes as $box)
                            <tr>
                                <td class="column1">{{$box->id}}</td>
                                <td class="column2">{{$box->origin->name}}</td>
                                <td class="column3">{{$box->current->name}}</td>
                                <td class="column5">{{$box->endLocation->name}}</td>
                                <td class="column4">
                                    <div class="qr-picture-column">
                                        <img class="QR-code" src="{{asset('asset/images/qr-code.png')}}">
                                    </div>
                                    <x-QR_Code />
                                </td>
                                <td class="column6">
                                    <div class="action-column-buttons">
                                        <button><img src="{{asset('asset/images/edit.png')}}" alt=""></button>
                                        <button><img src="{{asset('asset/images/delete.png')}}" alt=""></button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        <!-- <tr>
                            <td class="column1">EG/02/02</td>
                            <td class="column2">Zomba</td>
                            <td class="column3">Machinga</td>
                            <td class="column5">
                                Lilongwe
                            </td>
                            <td class="column4">
                                <div class="qr-picture-column">
                                    <img src="../assets/images/qr-code.png" alt="">
                                </div>
                            </td>
                            <td class="column6">
                                <div class="action-column-buttons">
                                    <button><img src="../assets/images/edit.png" alt=""></button>
                                    <button><img src="../assets/images/delete.png" alt=""></button>
                                </div>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>

        </div>

        <button class="add-item-action">
            <img src="{{asset('asset/images/plus (1).png')}}" alt="">
        </button>
        
    </div>
</body>
<script src="{{asset('js/qrGen.js')}}"></script>
@endsection