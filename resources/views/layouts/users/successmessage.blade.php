@extends('layouts.users.master')

@section('title', "Registration Success")

@section('custom-css')
<link rel="stylesheet" href="css/registration-form.css">
@endsection

@section('body-content')
<div class="container mt-5 mb-5">
        <div class="card shadow form-card pr-3 pl-3 pb-4">
            <div class="h4 mt-5 mb-3 text-center card-title">Registration Successful.</div>
            <div class="card-body text-center">Your registraton has been successfully submitted. Please wait untill the authority response to your application.</div>
        </div>
    </div>
@endsection