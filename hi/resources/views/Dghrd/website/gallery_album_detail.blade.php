@extends('Dghrd.website.layouts.main')
@section('main-section')<!--SECTION FOR MENU NAV-->
<section>
  <div class="container-fluid bg-menu-open">
    <div class="container">
      <div class="py-2">
        <h5 class="my-auto">
          <a href="{{url('/')}}" class="aa txt-clr">
            <i class="fa fa-home"></i> होम
          </a> >> <span> फोटो गैलरी</span> >> <span> {{ $gallery->title }}</span>
        </h5>
      </div>
    </div>
  </div>
</section>
<div class="container-fluid">
  <div class="row mx-2 px-0">

    <div class="col-xl-11 col-lg-12 col-md-12 mg-box-top px-0 mx-auto">
      <!--<div class="container-fluid">-->
      <div class="col-auto mb-2 pb-2 ms-auto  text-end">
        <a href="{{url('/gallery_album')}}" class="btn thm-btn"><i class="fa fa-arrow-left me-2"></i>एल्बम पर वापस जाएं</a>
      </div>
      <div class="gallery ">
        <div class="row col-12 mx-auto">
          @php
          $image= json_decode($gallery->image,true);
          @endphp

          @foreach($image as $item)
          <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mt-2 px-2">
            <div class="card gallery-img ">
              <div class="card-body p-2 h-100">
                <a href="{{asset('Admin/Images').'/'.$item ?? ''}}" class="h-100">
                  <img src="{{asset('Admin/Images').'/'.$item ?? ''}}" alt="gallery image" loading="lazy" title="">
                </a>
              </div>
              <!--<div class="card-footer  gallery-title d-flex align-items-center justify-content-center p-1"-->
              <!--  style="overflow-y:auto;">-->
              <!--  <div class="text-center">-->
              <!--    <h6 class="my-auto ">{{ $gallery->title }}</h6>-->
              <!--  </div>-->
              <!--</div>-->
            </div>
          </div>
          @endforeach
        </div><!--Div  close For Row -->


        <!--<div class="clear"></div>-->
      </div><!--Div close gallery-->

      <br>
      <!--</div>-->
      <!--Div close for the container--->
    </div>


  </div>
</div>
</div>

<script>
  // Variables
let itemsImgs = document.querySelectorAll(".gallery img");
let itemsImgsArr = Array.from(itemsImgs);

// Modal elements
let popSlider = document.querySelector("section .modal-layer");
let bgSlide = document.querySelector(".modal-layer .slide-img");

// Buttons
let closeBtn = document.querySelector("#closeBtn");
let prevBtn = document.querySelector("#prev");
let nextBtn = document.querySelector("#next");

// Add cursor pointer
closeBtn.style.cursor = "pointer";
prevBtn.style.cursor = "pointer";
nextBtn.style.cursor = "pointer";

// Active index
let activeIndex;

// Event Listeners
itemsImgs.forEach((img, i) => {
  img.addEventListener("click", function (e) {
    popSlider.style.display = "flex";
    let activeSrc = e.target.src;
    bgSlide.style.backgroundImage = `url(${activeSrc})`;
    activeIndex = i;
  });
});

// Close modal
closeBtn.addEventListener("click", removeSlider);
function removeSlider() {
  popSlider.style.display = "none";
}

// Next image
nextBtn.addEventListener("click", nextSlider);
function nextSlider() {
  activeIndex = (activeIndex + 1) % itemsImgs.length;
  let imgSrc = itemsImgsArr[activeIndex].src;
  bgSlide.style.backgroundImage = `url(${imgSrc})`;
}

// Previous image
prevBtn.addEventListener("click", prevSlider);
function prevSlider() {
  activeIndex = (activeIndex - 1 + itemsImgs.length) % itemsImgs.length;
  let imgSrc = itemsImgsArr[activeIndex].src;
  bgSlide.style.backgroundImage = `url(${imgSrc})`;
}

// Keyboard controls
document.addEventListener("keydown", function (e) {
  if (e.key === "Escape") removeSlider();
  if (e.key === "ArrowRight") nextSlider();
  if (e.key === "ArrowLeft") prevSlider();
});

</script>
<!--Gallery Script-->
<script src="{{asset('website/js/dist/simple-lightbox.js?v2.14.0')}}"></script>
<script>
  (function() {
    var $gallery = new SimpleLightbox('.gallery a', {});
  })();
</script>
@endsection