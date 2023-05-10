<div class="container-fluid fs-banner"></div>
    <div class="container-fluid bg-dark">
      <div class="container">
        <div class="stack-wrapper">
            <div class="heading-wrapper">
                <h2 class="text-white text-uppercase m-0">CURRENT SERIES</h2>
            </div>
        
            <div class="stack">
                <CardItem v-for="(items, index) in shopThumbs" :key="index" :cardname="items.series" :link="items.thumb" />
            </div>
        
            <div class="btn-wrapper d-flex justify-content-center">
                <a href="#" class="btn btn-primary rounded-0 text-white border-3 border border-primary fw-bold px-5">LOAD
                    MORE</a>
            </div>
        
        </div>
    >
      </div>
    </div>


    