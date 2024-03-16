@extends('layouts.app')

@section('content')

@include('layouts.nav')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tìm với từ khóa: {{$tukhoa}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <!-- card -->
                <!-- 1 -->
                <div class="row">
                    @php
                        $count = count($truyen);
                    @endphp
                    @if($count==0)
                        <div class="col-md-12">
                            <div class = "card mb-12 box-shadow">
                                <div class = "card-body">
                                    <p>Không tìm thấy truyện!</p>
                                </div>
                            </div>
                        </div>
                    @else
                        @foreach($truyen as $key => $value)
                            <div class="card" style="width: 18rem;">
                                <img src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}" class="card-img-top" alt="...">
                                <style>
                                    .card-img-top{
                                        object-fit: cover;
                                        width: 200px;
                                        height: 150px;
                                    }
                                </style>
                                <div class="card-body">
                                    <h5 class="card-title">{{$value->tentruyen}}</h5>
                                    <p class="card-text">{{$value->tomtat}}</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">{{$value->tacgia}}</li>
                                    <li class="list-group-item">{{$value->danhmuctruyen->tendanhmuc}}</li>
                                    <li class="list-group-item">{{$value->slug_truyen}}</li>
                                    <li class="list-group-item">{{$value->giatien}}</li>
                                </ul>
                                <div class="card-body">
                                    <a href="" class="card-link">Chỉnh sửa</a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div aria-label="Page navigation example" style="text-align: center;">
                        <ul class="pagination" style="display: flex; justify-content: center;">
                        {{ $truyen->links() }}</li>
                    </div>
                </div><br>
            </div>
        </div>
    </div>
</div>
@endsection
