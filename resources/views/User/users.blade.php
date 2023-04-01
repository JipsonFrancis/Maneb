@extends('components.layout')
@section('addCss')

@section('title', 'Maneb')
@section('content')



@endsection

<body>
    <div class="full-app-container">
        <x-nav />

        <div class="container-main-area-dashboad">
            <x-search />

            <div class="table-container">
                <table>
                    <thead>
                        <tr class="table-head">
                            <th class="column1">Fullname</th>
                            <th class="column2">Role</th>
                            <th class="column3">Email</th>
                            <th class="column5"></th>
                            <th class="column4"></th>
                            <th class="column6">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td class="column1">{{$user->name}}</td>
                                <td class="column2 column-role"> <p>{{$user->role->name}}</p></td>
                                <td class="column3">{{$user->email}}</td>
                                <td class="column5"></td>
                                <td class="column4"></td>
                                <td class="column6">
                                    <div class="action-column-buttons">
                                        <button><img src="{{asset('asset/images/edit.png')}}" alt=""></button>
                                        <button><img src="{{asset('asset/images/delete.png')}}" alt=""></button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        <!-- <tr>
                            <td class="column1">Jane Doe</td>
                            <td class="column2 column-role"> <p>Adminstrator</p></td>
                            <td class="column3">janedoe@gmail.com</td>
                            <td class="column5"></td>
                            <td class="column4"></td>
                            <td class="column6">
                                <div class="action-column-buttons">
                                    <button><img src="../assets/images/edit.png" alt=""></button>
                                    <button><img src="../assets/images/delete.png" alt=""></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="column1">Jane Doe</td>
                            <td class="column2 column-role">p</td>
                            <td class="column3">janedoe@gmail.com</td>
                            <td class="column5"></td>
                            <td class="column4"></td>
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
            <img src="../assets/images/plus (1).png" alt="">
        </button>
        
    </div>
</body>