@extends('layouts.front')

@section('title', "About Us")

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

        <div class="about-title pb-3">
            <h2 class="h1"> About Us </h2>
        </div>     
        <div class="mb-3">
            <img src="{{ asset('assets/images/about/aboutus.jpg') }}" alt="About Us Image" class="float-start me-4 mb-2 mt-2" width="400px">
        </div>
        <div class="text-justify text-indent">
            <p class="content-text text-justify text-indent">We are online based market vendor! We have been providing fresh, locally-sourced produce 
                and organic goods to our community for over 5 years. With our experience in developing growth methods, property agri-businesses, operational potency, 
                and integration of stakeholders in price chains we'vecreated custom-made solutions to bridge the gap between real challengesacross the provision chain. 
                Our agriculture strategies and practices square measure supported protecting our earth's natural resources through technology and innovation and with efficiency 
                exploitation the land, material, and water, in our overall oprations.
            </p>
            <p>
                Neque vitae tempus quam pellentesque. Mattis rhoncus urna neque viverra justo. Interdum posuere lorem ipsum dolor sit amet consectetur adipiscing elit. 
                Sit amet dictum sit amet justo donec enim diam vulputate. Turpis massa sed elementum tempus. Diam quis enim lobortis scelerisque fermentum dui. 
                Vitae et leo duis ut. Dignissim sodales ut eu sem integer vitae justo eget magna. Tincidunt praesent semper feugiat nibh sed pulvinar proin gravida hendrerit. 
                Vehicula ipsum a arcu cursus vitae congue. Eros in cursus turpis massa. Nibh cras pulvinar mattis nunc. Amet purus gravida quis blandit turpis cursus in hac habitasse. 
                Arcu cursus vitae congue mauris rhoncus aenean vel. Pulvinar sapien et ligula ullamcorper malesuada. Leo a diam sollicitudin tempor id eu nisl. Eget gravida cum sociis natoque. 
                Senectus et netus et malesuada fames ac turpis.
            </p>

            <div class="mb-3">
                <img src="{{ asset('assets/images/about/farmer.jpeg') }}" alt="About Us Image" class="float-end ms-4 mb-2" width="400px">
            </div>

            <p>
                Ligula ullamcorper malesuada proin libero nunc consequat. Suspendisse potenti nullam ac tortor vitae purus faucibus. Consectetur lorem donec massa sapien faucibus et. 
                Rutrum tellus pellentesque eu tincidunt tortor aliquam nulla facilisi cras. Enim nec dui nunc mattis enim ut tellus elementum sagittis. 
                Elementum tempus egestas sed sed risus pretium quam. Tincidunt lobortis feugiat vivamus at. Vulputate enim nulla aliquet porttitor lacus luctus accumsan tortor posuere. 
                Quam quisque id diam vel. Id aliquet lectus proin nibh nisl condimentum id venenatis.
            </p>

            <p>
                Feugiat in ante metus dictum at tempor commodo ullamcorper a. Integer vitae justo eget magna fermentum. 
                acilisi cras fermentum odio eu feugiat pretium nibh ipsum consequat. Purus ut faucibus pulvinar elementum. Augue lacus viverra vitae congue eu consequat ac felis donec. 
                Sit amet aliquam id diam maecenas ultricies mi. Velit aliquet sagittis id consectetur purus ut faucibus pulvinar. Convallis tellus id interdum velit laoreet id donec ultrices. 
                Velit scelerisque in dictum non consectetur a erat nam at. Ut sem viverra aliquet eget sit amet. Nibh praesent tristique magna sit amet purus gravida quis blandit. 
                Vestibulum morbi blandit cursus risus at ultrices mi. Enim sit amet venenatis urna cursus eget nunc scelerisque. Ipsum a arcu cursus vitae. 
                Id venenatis a condimentum vitae sapien pellentesque.</p>        
            </p>
        </div>
       </p>

       <p>  "Tellus mauris a diam maecenas sed enim ut. Ac turpis egestas maecenas pharetra convallis posuere morbi leo. Leo a diam sollicitudin tempor."
        <br>
       </p>
       <p class="float-end">
        - Anonymous
       </p>
       <div class="me-4 mb-4" >
        <h2>Visit Our Store</h2>
        <p>Located @ 123 Eskinita Street, Brgy. Subdivision, <br>
            Navotas City, PH 1234</p>
            <div >
                <iframe width="500" height="400" frameborder="0" src="https://www.bing.com/maps/embed?h=400&w=500&cp=14.654766431863294~120.94993465350274&lvl=16.34683015669139&typ=d&sty=r&src=SHELL&FORM=MBEDV8" scrolling="no">
                </iframe>
            <div style="white-space: nowrap; text-align: center; width: 00px; padding: 6px 0;">
                <a id="largeMapLink" target="_blank" href="https://www.bing.com/maps?cp=14.654766431863294~120.94993465350274&amp;sty=r&amp;lvl=16.34683015669139&amp;FORM=MBEDLD">View Larger Map</a> &nbsp; | &nbsp;
                <a id="dirMapLink" target="_blank" href="https://www.bing.com/maps/directions?cp=14.654766431863294~120.94993465350274&amp;sty=r&amp;lvl=16.34683015669139&amp;rtp=~pos.14.654766431863294_120.94993465350274____&amp;FORM=MBEDLD">Get Directions</a>
            </div>
        </div>
        </div>


        </div>
    </div>
</div>

@endsection