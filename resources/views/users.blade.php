@extends('templates.main')

@section('title')
    My Profile
@stop

@section('content')
			<h2>My Profile</h2>
			
			<h5>First Name:</h5>
			<h4 data-field="First Name">{{$user->firstname}}</h4>
			
			<h5>Last Name:</h5>
			<h4 data-field="Last Name">{{$user->lastname}}</h4>
			
			<h5>E-mail</h5>
			<h4 data-field="Email">{{$user->email}}</h4>
			
			<h5>User Name</h5>
			<h4 data-field="User Name">{{$user->username}}</h4>
			
			<div id="editPro">
                <a href="{{url('users/'.Auth::user()->id.'/edit')}}">Edit Profile</a>
			</div>
			
			
@stop