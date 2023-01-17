@extends('layouts.front')

@section('title')
    Welcome to Seafarm Fresh
@endsection

@section('content')
    @include('layouts.inc.slider')
    <div class="home_component_title">
        <h2 class="h1">Suki's Favorites <i class="fa fa-star-fish"></i></h2>
    </div>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Seafood & Meat</h2>
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($favorite_seafood_meat as $prod)
                    <a href="{{ url('category/seafood/'.$prod->slug) }}">
                        <div class="item d-flex category_card">
                            <div class="card favorite_card_body">
                                <img src="{{ asset('assets/uploads/products/'.$prod->image) }}" alt="Product Image">
                                <div class="card-body">
                                    <h5>{{ $prod->name }}</h5>
                                    <span class="float-start before_price">₱{{ $prod->original_price }} .00</span>
                                    <span class="float-end orig_price">₱{{ $prod->selling_price }}.00</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
                <h2>Fruits & Vegies</h2>
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($favorite_vegetable_fruit as $prod)
                    <a href="{{ url('category/seafood/'.$prod->slug) }}">
                    <div class="item d-flex category_card">
                        <div class="card favorite_card_body">
                            <img src="{{ asset('assets/uploads/products/'.$prod->image) }}" alt="Product Image">
                            <div class="card-body">
                                <h5>{{ $prod->name }}</h5>
                                <span class="float-start before_price">₱{{ $prod->original_price }}.00</span>
                                <span class="float-end orig_price">₱{{ $prod->selling_price }}.00</span>
                            </div>
                        </div>
                    </div>
                  </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="home_component_title home_component_title_category">
        <h2 class="h1">Categories<i class=""></i></h2>
    </div>
    <div class="py-5">
        <div class="container">
            <div id="carousel-contain" class="carousel carousel_category_main" data-interval="carousel">
                <div class="carousel-indicators carousel-indicators-category">
                    <img type="button" src="{{ asset('assets/uploads/category/1673347653.png')}}" class="carousel_category_indicator active" tabindex="0" alt="Fish Category" data-bs-target="#carousel-contain" data-bs-slide-to="0" aria-current="true">
                    <img type="button" src="{{ asset('assets/uploads/category/1673957811.png')}}" class="carousel_category_indicator" tabindex="1" alt="Fish Category" width="50px" height="100px" data-bs-target="#carousel-contain" data-bs-slide-to="1">
                    <img type="button" src="{{ asset('assets/uploads/category/1673359117.png')}}" class="carousel_category_indicator" tabindex="2" alt="Fish Category" width="50px" height="100px" data-bs-target="#carousel-contain" data-bs-slide-to="2">
                    <img type="button" src="{{ asset('assets/uploads/category/1673957825.png')}}" class="carousel_category_indicator" tabindex="3" alt="Fish Category" width="50px" height="100px" data-bs-target="#carousel-contain" data-bs-slide-to="3">
                </div>
                <br><br><br><br>
                <div class="carousel-inner carousel_category_inner ">
                    <div class="carousel-item carousel_category active m-2" style="position:relative; transition: none;">
                        <div>
                            <h3 class="text-center station-title">Seafood Station</h3>
                        </div>
                        
                        <div class="d-flex with-direction">
                            @foreach ($seafood as $prod)                      
                                <div class="d-inline">
                                  <a href="{{ url('category/seafood/'.$prod->slug) }}">
                                    <div class="item category_card">
                                        <div class="card favorite_card_body">
                                            <img src="{{ asset('assets/uploads/products/'.$prod->image) }}" alt="Product Image">
                                            <div class="card-body">
                                                <h5>{{ $prod->name }}</h5>
                                                <span class="float-start before_price">₱{{ $prod->original_price }}.00</span>
                                                <span class="float-end orig_price">₱{{ $prod->selling_price }}.00</span>
                                            </div>
                                        </div>
                                    </div>
                                  </a>
                                </div>
                            @endforeach  
                        </div>
                    </div>
                    <div class="carousel-item carousel_category carousel_category_inner m-2" style="transition: none;">
                        <h3 class="text-center station-title">Meat Station</h3>
                        <div class="d-flex with-direction">
                            @foreach ($meat as $prod)
                                <div class="d-inline">
                                  <a href="{{ url('category/meat/'.$prod->slug) }}">
                                    <div class="item category_card">
                                        <div class="card favorite_card_body">
                                            <img src="{{ asset('assets/uploads/products/'.$prod->image) }}" alt="Product Image">
                                            <div class="card-body">
                                                <h5>{{ $prod->name }}</h5>
                                                <span class="float-start before_price">₱{{ $prod->original_price }}.00</span>
                                                <span class="float-end orig_price">₱{{ $prod->selling_price }}.00</span>
                                            </div>
                                        </div>
                                    </div>
                                  </a>
                                </div>
                            @endforeach  
                        </div>
                    </div>
                    <div class="carousel-item carousel_category carousel-item-category m-2" style="transition: none;">
                        <h3 class="text-center station-title">Vegies Station</h3>
                        <div class="d-flex with-direction">
                            @foreach ($vegies as $prod)
                            <div class="d-inline">
                              <a href="{{ url('category/vegetable/'.$prod->slug) }}">
                                <div class="item category_card">
                                    <div class="card favorite_card_body">
                                        <img src="{{ asset('assets/uploads/products/'.$prod->image) }}" alt="Product Image">
                                        <div class="card-body">
                                            <h5>{{ $prod->name }}</h5>
                                            <span class="float-start before_price">₱{{ $prod->original_price }}.00</span>
                                            <span class="float-end orig_price">₱{{ $prod->selling_price }}.00</span>
                                        </div>
                                    </div>
                                </div>
                              </a>
                            </div>
                            @endforeach  
                        </div>
                    </div>
                    <div class="carousel-item carousel_category carousel-item-category m-2" style="transition: none;">
                        <h3 class="text-center station-title">Fruits Station</h3>
                        <div class="d-flex with-direction">
                            @foreach ($fruits as $prod)
                                <div class="d-inline">
                                  <a href="{{ url('category/fruits/'.$prod->slug) }}">
                                    <div class="item category_card">
                                        <div class="card favorite_card_body">
                                            <img src="{{ asset('assets/uploads/products/'.$prod->image) }}" alt="Product Image">
                                            <div class="card-body">
                                                <h5>{{ $prod->name }}</h5>
                                                <span class="float-start before_price">₱{{ $prod->original_price }}.00</span>
                                                <span class="float-end orig_price">₱{{ $prod->selling_price }}.00</span>
                                            </div>
                                        </div>
                                    </div>
                                  </a>
                                </div>
                            @endforeach  
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-contain" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel-containers" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="see-link" >
              <i class="fa-solid fa-magnifying-glass text-black"></i><a href="{{ url('category') }}">See all products</a>
            </div>
        </div>
    </div>
</div>
<div class="home_component_title home_component_title_category">
    <h2 class="h1">Reviews<i class=""></i></h2>
</div>
<section>
    <div id="reviewscontainer" class="carousel slide reviews-container" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#reviewscontainer" data-bs-slide-to="0" aria-current="true" class="active" style="height: 15px ; width:15px; border:1px; border-radius: 15px;"></button>
        <button type="button" data-bs-target="#reviewscontainer" data-bs-slide-to="1" style="height: 15px ; width:15px; border:1px; border-radius: 15px;"></button>
        <button type="button" data-bs-target="#reviewscontainer" data-bs-slide-to="2" style="height: 15px ; width:15px; border:1px; border-radius: 15px;"></button>
      </div>

      <!-- SLIDE 1 -->

      <div class="container py-5 carousel-inner justify-content-center mb-5">
        <div class="carousel-item active">
          <div class="row justify-content-center g-3 d-flex">
            <div class="col-md-6 col-lg-4 col-xl-3 d-flex pt-5">
              <div class="card text-black reviewcard">
                  <div class="card-body position: relative">
                    <div class="text-center">
                      <img src="{{ asset('assets/uploads/users/user_1.png') }}" class="card-img-top" alt="..." style="position: absolute; left: 33%; top: -50px; max-width: 100px;"/>
                      <div class="pb-3 pt-5">
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>
                      </div> 
                      <h5 class="card-title text-white">"Fresh Talaga"</h5>
                      <p class="text-white">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                         Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      <p class="text-white">Juan dela Cruz</p>
                      <p class="text-white">5 hours ago</p>
                    </div>
                  </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3 d-flex pt-5">
              <div class="card text-black reviewcard">
                  <div class="card-body position: relative">
                    <div class="text-center">
                      <img src="{{ asset('assets/uploads/users/user_2.png') }}" class="card-img-top" alt="..." style="position: absolute; left: 33%; top: -50px; max-width: 100px;"/>
                      <div class="pb-3 pt-5">
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>
                      </div> 
                      <h5 class="card-title text-white">"Fresh Talaga"</h5>
                      <p class="text-white">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                         Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      <p class="text-white">Juan dela Cruz</p>
                      <p class="text-white">5 hours ago</p>
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 d-flex pt-5">
              <div class="card text-black reviewcard">
                  <div class="card-body position: relative">
                    <div class="text-center">
                      <img src="{{ asset('assets/uploads/users/user_3.png') }}" class="card-img-top" alt="..." style="position: absolute; left: 33%; top: -50px; max-width: 100px;"/>
                      <div class="pb-3 pt-5">
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>
                      </div> 
                      <h5 class="card-title text-white">"Fresh Talaga"</h5>
                      <p class="text-white">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                         Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      <p class="text-white">Juan dela Cruz</p>
                      <p class="text-white">5 hours ago</p>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>

        <!-- SLIDE 2 -->

        <div class="carousel-item">
          <div class="row justify-content-center g-3 d-flex">
            <div class="col-md-6 col-lg-4 col-xl-3 d-flex pt-5">
              <div class="card text-black reviewcard">
                  <div class="card-body position: relative">
                    <div class="text-center">
                      <img src="{{ asset('assets/uploads/users/user_1.png') }}" class="card-img-top" alt="..." style="position: absolute; left: 33%; top: -50px; max-width: 100px;"/>
                      <div class="pb-3 pt-5">
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>
                      </div> 
                      <h5 class="card-title text-white">"Fresh Talaga"</h5>
                      <p class="text-white">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                         Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      <p class="text-white">Juan dela Cruz</p>
                      <p class="text-white">5 hours ago</p>
                    </div>
                  </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3 d-flex pt-5">
              <div class="card text-black reviewcard">
                  <div class="card-body position: relative">
                    <div class="text-center">
                      <img src="{{ asset('assets/uploads/users/user_2.png') }}" class="card-img-top" alt="..." style="position: absolute; left: 33%; top: -50px; max-width: 100px;"/>
                      <div class="pb-3 pt-5">
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>
                      </div> 
                      <h5 class="card-title text-white">"Fresh Talaga"</h5>
                      <p class="text-white">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                         Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      <p class="text-white">Juan dela Cruz</p>
                      <p class="text-white">5 hours ago</p>
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 d-flex pt-5">
              <div class="card text-black reviewcard">
                  <div class="card-body position: relative">
                    <div class="text-center">
                      <img src="{{ asset('assets/uploads/users/user_3.png') }}" class="card-img-top" alt="..." style="position: absolute; left: 33%; top: -50px; max-width: 100px;"/>
                      <div class="pb-3 pt-5">
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>
                      </div> 
                      <h5 class="card-title text-white">"Fresh Talaga"</h5>
                      <p class="text-white">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                         Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      <p class="text-white">Juan dela Cruz</p>
                      <p class="text-white">5 hours ago</p>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row justify-content-center g-3 d-flex">
            <div class="col-md-6 col-lg-4 col-xl-3 d-flex pt-5">
              <div class="card text-black reviewcard">
                  <div class="card-body position: relative">
                    <div class="text-center">
                      <img src="{{ asset('assets/uploads/users/user_1.png') }}" class="card-img-top" alt="..." style="position: absolute; left: 33%; top: -50px; max-width: 100px;"/>
                      <div class="pb-3 pt-5">
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>
                      </div> 
                      <h5 class="card-title text-white">"Fresh Talaga"</h5>
                      <p class="text-white">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                         Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      <p class="text-white">Juan dela Cruz</p>
                      <p class="text-white">5 hours ago</p>
                    </div>
                  </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3 d-flex pt-5">
              <div class="card text-black reviewcard" style="max-width: 400px;">
                  <div class="card-body position: relative">
                    <div class="text-center">
                      <img src="{{ asset('assets/uploads/users/user_2.png') }}" class="card-img-top" alt="..." style="position: absolute; left: 33%; top: -50px; max-width: 100px;"/>
                      <div class="pb-3 pt-5">
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>
                      </div> 
                      <h5 class="card-title text-white">"Fresh Talaga"</h5>
                      <p class="text-white">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                         Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      <p class="text-white">Juan dela Cruz</p>
                      <p class="text-white">5 hours ago</p>
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 d-flex pt-5">
              <div class="card text-black reviewcard">
                  <div class="card-body position: relative">
                    <div class="text-center">
                      <img src="{{ asset('assets/uploads/users/user_3.png') }}" class="card-img-top" alt="..." style="position: absolute; left: 33%; top: -50px; max-width: 100px;"/>
                      <div class="pb-3 pt-5">
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>  
                        <span class ="fa fa-star checked"></span>
                      </div> 
                      <h5 class="card-title text-white">"Fresh Talaga"</h5>
                      <p class="text-white">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                         Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      <p class="text-white">Juan dela Cruz</p>
                      <p class="text-white">5 hours ago</p>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>       
              </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#reviewscontainer" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
          </button>
  
          <button class="carousel-control-next" type="button" data-bs-target="#reviewscontainer" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
          </button>
          <div class="see-link mb-5" >
            <a href="#">See all reviews</a>
        </div>
      </div>
      <div class="home_component_title home_component_title_category">
        <h2 class="h1">Blogs<i class=""></i></h2>
    </div>
  
      <section>
        <div class="py-5">
          <div class="container">
              <div class="row pt-3">
                  <h2 class="categories_page_name">LATEST BLOGS</h2>
                      @foreach ($blog as $blogs)
                          <div class="col-md-3 mb-3">
                              <a href="{{ url('blog/'.$blogs->slug) }}">
                                  <div class="card h-100 blog-card">
                                      <img src="{{ asset('assets/uploads/blog/'.$blogs->image) }}" alt="Product Image" class="home_blog_image">
                                      <div class="card-body">
                                          <h5>"{{ $blogs->title }}"</h5>
                                      <p class="blog-description">
                                          {{ $blogs->small_description}}
                                      </p>
                                      
                                      </div>
                                      <div class="card-footer blog-footer">
                                        <a href="{{ url('blog/'.$blogs->slug) }}" class="text-center">Continue Reading ></a>
                                      </div>
                                  </div>
                              </a>
                           </div>
                      @endforeach
              </div>
          </div>
      </div>
      <div class="see-link mb-5" >
        <a href="{{ url('blog') }}">See all blogs</a>
      </div>
      </section>
  
</section>
@endsection

@section('scripts')


<script>

jQuery.noConflict()(function ($) { 
    $('.featured-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});
});

</script>

@endsection

