<div class="container-fluid bg-blue">
    <div class="container py-5">
        <div class="row justify-content-center">
        
            @foreach($banner_list as $item)

            <div class="col-lg">
                <div class="img-wrapper me-2 ">
                    <img src="{{Vite::asset($item['src'])}}" alt="" class="img-small">
                </div>
                <span class="text-uppercase small text-white">{{$item['content']}}</span>
            </div>

            @endforeach
        </div>
    </div>
</div>