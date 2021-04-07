@extends('layouts.success')

@section('title','success')

@section('content')

<main>
    <div class="section-success d-flex align-items-center">
        <div class="col text-center">
            <img src="{{asset('frontend/images/ic_mail.png')}}" alt="">
            <h1>Yeah.. success</h1>
            <p>
                we've sent you email for trip instuction
                <br>
                please read it as well
            </p>
            <a href="index.html" class="btn btn-home-page mt-3 px-5">
                Home Page
            </a>
        </div>
    </div>
</main
    
@endsection

