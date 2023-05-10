<footer>
    <div class="container-fluid footer-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 py-5">
                    <div class="row text-lg-start text-center">
                        <div class="col-lg-3">
                            <h5 class="text-uppercase text-white mb-4">dc comics</h5>
                            <ul class="list-unstyled">
                                @foreach ($navbar as $item)
                                    <li>
                                        <a href="{{$item['href']}}" class="text-decoration-none text-capitalize small footer-link">{{$item['title']}}</a>
                                    </li>
                                @endforeach
                            </ul>
                            <h5 class="text-uppercase text-white mb-4">shop</h5>
                            <ul class="list-unstyled">
                                @foreach ($sectShop as $item)
                                <li>
                                    <a href="{{$item['href']}}" class="text-decoration-none small footer-link">{{$item['title']}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-lg-3">
                            <h5 class="text-uppercase text-white mb-4">dc</h5>
                            <ul class="list-unstyled">
                                @foreach ($sectDc as $item)
                                    <li>
                                        <a href="{{$item['href']}}" class="text-decoration-none small footer-link">{{$item['title']}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-lg-3">
                            <h5 class="text-uppercase text-white mb-4">sites</h5>
                            <ul class="list-unstyled">
                                @foreach ($sectSites as $item)
                                <li>
                                    <a href="{{$item['href']}}" class="text-decoration-none small footer-link">{{$item['title']}}</a>
                                </li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 bg-logo"></div>
            </div>
        </div>
    </div>
    <div class="container py-4">
        <div class="row">
            <div class="col-lg-2 text-lg-start text-center pb-lg-0 pb-4">
                <a href="#"
                    class="btn btn-outline-primary outline-squared rounded-0 text-white border-3 border border-primary fw-bold">SIGN-UP
                    NOW!</a>
            </div>
            <div class="col-lg-10 text-lg-end text-center">
                <span class="text-uppercase fs-4 fw-bold me-5 align-middle follow">follow us</span>
                <ul class="list-inline d-inline">
                    <li v-for="item in social" class="list-inline-item"><a href="item.href" class="btn btn-circular"><i
                                class="item.icon"></i></a>
                    </li>

                    @foreach ($social as $item)
                    <li class="list-inline-item">
                        <a href="{{$item['href']}}" class="btn btn-circular"><i class="{{$item['icon']}}"></i></a>
                   </li>
                 @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>