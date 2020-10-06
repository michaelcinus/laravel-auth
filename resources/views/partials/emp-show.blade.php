@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                <ul>

                    <li>Name : {{ $emp -> firstname }}</li>
                    <li>Lastname : {{ $emp -> lastname }}</li>
                    <li>Date of birth : {{ $emp -> date_of_birth }}</li>
                    <li>Private code : {{ $emp -> private_code }}</li>
                    <li>Location : {{ $emp -> location -> name }} ({{ $emp -> location -> state }})</li>

                    <br><br>

                    @auth 
                        <a class="btn btn-danger" href="{{route('emp-delete', $emp -> id)}}">DELETE</a>
                    @else
                        PLEASE LOGIN IF YOU WANT DELETE EMPLOYEE
                    @endauth

                </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection