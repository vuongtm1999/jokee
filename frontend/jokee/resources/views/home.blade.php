@extends('layout')
@section('content')
    <div class="row bg-joke justify-content-center">
        <div class="col-xxl-8 col-md-10 col-12 separate position-relative">
            <p class="py-5">
                {{ $joke->content }}
            </p>
        </div>
    </div>

    <div class="row px-6 py-5">
        <div class="col-12">
            <form class="d-flex justify-content-center" method="post" action="{{ route('joke.vote') }}">
                @csrf
                <input type="hidden" name="joke_id" value="{{ $joke->id }}">
                <button type="submit" name="vote" value="like" class="btn btn-primary px-md-5 py-2 me-5">
                    This isFunny!
                </button>
                <button type="submit" name="vote" value="dislike" class="btn btn-success px-md-5 py-2">
                    This is not Funny
                </button>
            </form>
        </div>
    </div>



    {{-- <div class="row px-6">
        @if (request()->hasCookie('voted_jokes'))
            <?php $cookieData = json_decode(request()->cookie('voted_jokes'), true); ?>
            @if ($cookieData)
                <ul>
                    @foreach ($cookieData as $key => $value)
                        <li>{{ $key }}: {{ $value }}</li>
                    @endforeach
                </ul>
            @else
                <p>Invalid cookie data.</p>
            @endif
        @else
            <p>No cookie data available.</p>
        @endif
    </div> --}}
@endsection
