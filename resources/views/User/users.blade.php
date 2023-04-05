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
                                        <form method="POST" action="{{ route('users.update', $user->id) }}">
                                            <input type="hidden" name="_method" value="PUT">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button><img src="{{asset('asset/images/edit.png')}}" alt=""></button>
                                        </form>
                                        <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit"><img src="{{asset('asset/images/delete.png')}}" alt=""></button>
                                        </form>
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

        <button class="add-item-action users-moddal">
            <img src="{{asset('asset/images/plus (1).png')}}">
        </button>

        <div class="modal-users-overlay">
            <div class="users-modal">
                <div class="top-section-modal">
                    <p class="add-user">Add User</p>
                    <img class="close-users-modal" src="{{asset('asset/images/plus (1).png')}}" alt="">
                </div>
                <form method="POST" action="{{ route('exams.store') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="textboxcontainer">
                    <label for="name">Firstname</label>
                    <input type="text" name="name" id="name" placeholder="firstname">
                </div>
                <div class="textboxcontainer">
                    <label for="name">Lastname</label>
                    <input type="text" name="" id="" placeholder="LastName">
                </div>
                <div class="textboxcontainer">
                    <label for="name">Role</label>
                    <select name="role" id="role">
                        <option value="1">Adminstrator</option>
                        <option value="2">User</option>
                    </select>
                </div>
                <div class="textboxcontainer">
                    <label for="name">Email</label>
                    <input type="email" name="email" id="email" placeholder="email">
                </div>
                <button type="submit">User</button>
                </form>
            </div>
        </div>

        <script src="{{asset('js/main.js')}}"></script>
        
    </div>
</body>