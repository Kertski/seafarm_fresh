<div id="carousel-container" class="carousel slide" data-bs-ride="carousel" style="background-color: #030303;">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carousel-container" data-bs-slide-to="0" aria-current="true" class="active"></button>
        <button type="button" data-bs-target="#carousel-container" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carousel-container" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" style="position:relative ;">
        <img src="{{ asset('assets/images/slider.png') }}" style="max-width: 500px"
        class="d-block" style="width: 100%;"/>         
      </div>
      <div class="carousel-item">
        <img src="{{ asset('assets/images/slider.png') }}"
        class="d-block" style="width: 100%;">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('assets/images/slider.png') }}"
        class="d-block" style="width: 100%;"/>
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

