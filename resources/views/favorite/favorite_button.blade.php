    @if (Auth::user()->is_favoriting($micropost->id))
        {!! Form::open(['route' => ['micropost.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('unfavorite', ['class' => "btn btn-primary btn-xs"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['micropost.favorite', $micropost->id]])!!}
            {!! Form::submit('favorite', ['class' => "btn btn-success btn-xs"]) !!}
        {!! Form::close() !!}
    @endif
