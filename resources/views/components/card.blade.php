<div>
    <h5>{{$title}}</h5>
    @if($slot->isEmpty())
        <p>There are no items to display.</p>
    @else
        {{$slot}}
    @endif
    <button>{{$button}}</button>
</div>
