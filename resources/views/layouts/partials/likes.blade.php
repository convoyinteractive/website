@if($show)
    <likes resource="{{$content->get('name')}}">
        <div class="w-20 h-20 flex items-center justify-center border rounded-full">
            LIKE
        </div>
    </likes>
@endif
