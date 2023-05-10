<div class="container-fluid fs-banner"></div>
    <div class="container-fluid bg-dark">
      <div class="container">
        <div class="stack-wrapper">
            <div class="heading-wrapper">
                <h2 class="text-white text-uppercase m-0">CURRENT SERIES</h2>
            </div>
        
            <div class="stack">

                @foreach($comics as $item)

                <div class="card bg-transparent border-0 m-3">
                    <div class="card-img-wrapper">
                        <img src="{{$item['thumb']}}" alt="cardname">
                    </div>
                    <div class="card-body p-0 my-3">
                        <span class="card-title small">{{$item['title']}}</span>
                    </div>
                </div>

                @endforeach
            </div>
        
            <div class="btn-wrapper d-flex justify-content-center">
                <a href="#" class="btn btn-primary rounded-0 text-white border-3 border border-primary fw-bold px-5">LOAD
                    MORE</a>
            </div>
        
        </div>
    >
      </div>
    </div>


    