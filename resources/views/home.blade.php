@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Country</th>
                            <th scope="col">Subject</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($kontak as $ktk)                         
                          <tr>
                            <th scope="row">{{$ktk->id}}</th>
                            <td>{{$ktk->firstname}}</td>
                            <td>{{$ktk->lastname}}</td>
                            <td>{{$ktk->country}}</td>
                            <td>{{$ktk->subject}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
