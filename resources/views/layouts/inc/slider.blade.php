<div id="carousel-container" class="carousel slide banner-carousel" data-bs-ride="carousel" style="background-color: #030303;">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carousel-container" data-bs-slide-to="0" aria-current="true" class="active"></button>
        <button type="button" data-bs-target="#carousel-container" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carousel-container" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" style="position:relative ;">
        <img src="{{ asset('assets/images/home_banner/banner_1.png') }}"
        class="d-block" style="width: 100%;"/>         
      </div>
      <div class="carousel-item">
        <img src="{{ asset('assets/images/home_banner/banner_2.png') }}"
        class="d-block" style="width: 100%;">
      </div>
      <div class="carousel-item">
        <div style="padding:50% 0 0 0;position:relative;">
          <iframe src="https://player.vimeo.com/video/790248684?h=9cc78bca9f&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"  allow="autoplay" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;"
            height="100%" 
          ></iframe>
          </div>
          <script src="https://player.vimeo.com/api/player.js"></script>
      </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carousel-container" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carousel-container" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
</div>

