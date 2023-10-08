@extends('app')

@section('content')

<div class="d-flex justify-content-center align-items-center vh-100">
    <form onsubmit="return checkLength()" action="{{ route('palindrome.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <label for="inputPalindromeStatus" class="form-label">Palindrome Status</label>
                <textarea name="text" class="form-control" id="inputPalindromeStatus" rows="10" cols="60"></textarea>
            </div>
            <div class="col">
                <label for="inputResult" class="form-label">Result</label>
                <textarea name="result" class="form-control" id="inputResult" rows="10" cols="60">@foreach($palindromes as $word)@if($loop->index % 2 == 0){{ $word }}@else{{ $word }}@endif @endforeach</textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Check it</button>
    </form>
</div>

<script>
    function checkLength() {
        const textarea = document.getElementById('inputPalindromeStatus');
        const text = textarea.value;
        const characterCount = text.length;

        if (characterCount < 720) {
            alert("Lütfen en az 720 karakter girişi yapın.");
            return false;
        }
        return true;
    }
</script>

@endsection
