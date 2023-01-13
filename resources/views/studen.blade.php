@extends('app')
@section('main')
    <!-- main -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Name</th>
                            <th>Gender</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $value)
                        <tr>
                            <td scope="row">{{$loop->iteration}}</td>
                            <td>{{$value['name']}}</td>
 
                            <!-- cách 1 <td>{{$value['gender'] ? "Nam" : "Nữ"}}</td> -->
 
                            <!-- cách 2 -->
                            @if($value['gender'])
                            <td>Nam</td>
                            @else 
                            <td>Nữ</td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop

