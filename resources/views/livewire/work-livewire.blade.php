<div class="work-box" id="work-box">
@if($works)
    @foreach($works as $work)
        <div class="card-box">
            <img src="{{ asset('images/work/'.$work->image) }}" alt="1">
            <h2 class="work-description">{{ $work->title }} <a target="_blank" class="work-description__link" href="{{ $work->link }}">{{ $work->link_title }}</a></h2>
        </div>
    @endforeach
@endif
</div>
