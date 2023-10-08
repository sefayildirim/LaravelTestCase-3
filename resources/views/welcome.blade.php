@extends('app')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <a href="{{ route('palindrome.index') }}"><button class="btn btn-primary mx-2">1. Soru</button></a>
    <button class="btn btn-danger mx-2">2. Soru</button>
</div>
@endsection()

