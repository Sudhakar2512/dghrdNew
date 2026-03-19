@extends('Dghrd.website.layouts.main')
@section('main-section')<!--SECTION FOR MENU NAV-->
<section>
  <div class="container-fluid bg-menu-open">
    <div class="container">
      <div class="py-2">
        <h5 class="my-auto"><a href="{{url('/')}}" class="aa txt-clr"><i class="fa fa-home"></i> Home </a> >> <span>
            Photo Gallery</span> >> <span> {{ $gallery->title }}</span></h5>
      </div>
    </div>
  </div>
</section>
<div class="container-fluid">
  <div class="row mx-2 px-0">

    <div class="col-xl-11 col-lg-12 col-md-12 mg-box-top px-0 mx-auto">
      <!--<div class="container-fluid">-->
      <div class="col-auto mb-2 pb-2 ms-auto  text-end">
          <a href="{{url('/gallery_album')}}" class="btn thm-btn"><i class="fa fa-arrow-left me-2"></i>Go Back to Album</a>
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
                  <img src="{{asset('Admin/Images').'/'.$item ?? ''}}" title="">
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
<!--<div class="modal-layer position-fixed justify-content-center align-items-center">-->

<!--  <div class="slide-img w-75 h-75 d-flex align-items-center justify-content-between px-4 position-relative">-->

<!--    <i id="closeBtn" class="far fa-times-circle fa-2x position-absolute end-0 top-0 m-4"></i>-->

<!--    <div class="box-circle d-flex align-item-center text-center">-->
<!--      <i id="prev" class="fas fa-chevron-left fa-2x "></i>-->
<!--    </div>-->
<!--    <div class="box-circle d-flex align-item-center text-center">-->
<!--      <i id="next" class="fas fa-chevron-right fa-2x"></i>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
</div>

<script>
  // variables
  // items & images
  let itemsImgs = document.querySelectorAll(".img-item img");
  itemsImgsArr = Array.from(itemsImgs);

  // pop slider
  let popSlider = document.querySelector("section .modal-layer");
  let bgSlide = document.querySelector(".modal-layer .slide-img");

  // icons/buttons
  // close
  let closeBtn = document.querySelector("#closeBtn");
  closeBtn.style.cssText = cursor : pointer;;
  // left
  let prevBtn = document.querySelector("#prev");
  prevBtn.style.cssText = cursor : pointer;;
  // right
  let nextBtn = document.querySelector("#next");
  nextBtn.style.cssText = cursor : pointer;;

  // index of item
  let activeIndex;

  for (let i = 0; i < itemsImgs.length; i++) {
    itemsImgs[i].addEventListener("click", function (e) {
      popSlider.style.display = "flex";
      let activeSrc = e.target.src;
      bgSlide.style.backgroundImage = url(${ activeSrc });
      activeIndex = itemsImgsArr.indexOf(e.target);
    });
  }

  closeBtn.addEventListener("click", removeSlider);

  function removeSlider() {
    popSlider.style.display = "none";
  }

  nextBtn.addEventListener("click", nextSlider);

  function nextSlider() {
    activeIndex++;
    if (activeIndex == itemsImgs.length) {
      activeIndex = 0;
    }
    let imgSrc = itemsImgsArr[activeIndex].src;
    bgSlide.style.backgroundImage = url(${ imgSrc });
  }

  prevBtn.addEventListener("click", prevSlider);

  function prevSlider() {
    activeIndex--;
    if (activeIndex < 0) {
      activeIndex = itemsImgs.length - 1;
    }
    let imgSrc = itemsImgsArr[activeIndex].src;
    bgSlide.style.backgroundImage = url(${ imgSrc });
  }

  // keyboard events
  document.addEventListener("keydown", function (e) {
    if (e.key == "Escape") {
      removeSlider();
    } else if (e.key == "ArrowRight") {
      nextSlider();
    } else if (e.key == "ArrowLeft") {
      prevSlider();
    }
  });
</script>
<!--Gallery Script-->
<script src="{{asset('public/website/js/dist/simple-lightbox.js?v2.14.0')}}"></script>
<script>
  (function () {
    var $gallery = new SimpleLightbox('.gallery a', {});
  })();
</script>
@endsection