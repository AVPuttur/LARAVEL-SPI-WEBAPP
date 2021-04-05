@extends('layouts.app')

@section('content')
<div class="container"><br><br><br><br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Namaskar {{ Auth::user()->name }}!</div>
            </div>
        </div>
        <div class="col-md-12"><br><br>
        <h2>|| Lists of articles ||</h2>
        <hr style="width: 100%;">
        </div>
        
        <div class="col-md-12"><br>
        <table class="table table-striped table-dark">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Article</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr class="bg-primary">
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->article}}</td>
                    </tr>
                @endforeach    
                </tbody>
            </table>
        </div>
        <div class="col-md-12"><br><br>
        <h2>|| Lists of users ||</h2>
        <hr style="width: 100%;">
        </div>
        
        <div class="col-md-12"><br>
        <table class="table table-striped table-dark">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr class="bg-primary">
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    </tr>
                @endforeach    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
