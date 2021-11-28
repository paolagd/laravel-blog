@extends('layout')

@section('content')

<body>
    @foreach ($posts as $post)
    <article>
        {!! $post !!}
    </article>
    @endforeach
</body>


@endsection
