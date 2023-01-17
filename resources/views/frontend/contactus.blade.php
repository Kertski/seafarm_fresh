@extends('layouts.front')

@section('title', "About Us")

@section('content')

<section id="contact">
    <h1 class="section-header">Contact</h1>
        <div class="contact-wrapper">
            <form id="contact-form" class="form-horizontal" role="form">
                <div class="form-group mb-2">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                    </div>
                </div>
                <div class="form-group mb-2">
                    <div class="col-sm-12">
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                    </div>
                </div>
                    <textarea class="form-control" rows="10" placeholder="Message" name="message" required></textarea>
                    <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
                        <div class="alt-send-button">
                            <i class="fa fa-paper-plane"></i><span class="send-text">Send</span>
                        </div>
                </button>
            </form>

            <div>
  
          <ul class="contact-list ms-5">
            <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">Navotas City, Metro Manila</span></i></li>
            <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="tel:1-212-555-5555" title="Give me a call">(+63) 99123456789</a></span></i></li>  
            <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:#" title="Send me an email">contact@seafarmfresh.com</a></span></i></li>   
          </ul>
          <hr>
          <ul class="social-media-list">
            <li><a href="#" target="_blank" class="contact-icon">
              <i class="fa fa-facebook" aria-hidden="true"></i></a>
            </li>
            <li><a href="#" target="_blank" class="contact-icon">
              <i class="fa fa-instagram" aria-hidden="true"></i></a>
            </li>
            <li><a href="#" target="_blank" class="contact-icon">
              <i class="fa fa-twitter" aria-hidden="true"></i></a>
            </li>
            <li><a href="#" target="_blank" class="contact-icon">
              <i class="fa fa-pinterest" aria-hidden="true"></i></a>
            </li>       
          </ul>
        </div>
    </div>   
</section>  

@endsection
    
    