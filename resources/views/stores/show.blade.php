<link rel="stylesheet" href="{{asset('welcome/store.css')}}">
<link rel="stylesheet" href="{{asset('welcome/theme.css')}}">

<link rel="stylesheet" href="{{asset('owlcarousel/assets/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('owlcarousel/assets/owl.theme.green.min.css')}}">

<title>Store</title>
<div class="container">
    <div id="content" class="content p-0">
        <div class="profile-header">
            <div class="profile-header-cover"></div>
            
            <div class="profile-header-content" style="background: url({{asset('storage/uploads/stores/logo/'.$store->first()->store_images[0]->logo) }}) center no-repeat;">
                <div class="profile-header-img">
                    <img src="{{asset('storage/uploads/stores/logo/'.$store->first()->store_images[0]->logo) }}" alt="" />
                </div>
            </div>
    
            <ul class="profile-header-tab nav nav-tabs">
                <li class="nav-item"><a href="#profile-post" class="nav-link" data-toggle="tab">POSTS</a></li>
                <li class="nav-item"><a href="#profile-about" class="nav-link" data-toggle="tab">ABOUT</a></li>
                <li class="nav-item"><a href="#profile-photos" class="nav-link" data-toggle="tab">PHOTOS</a></li>
                <li class="nav-item"><a href="#profile-videos" class="nav-link active show" data-toggle="tab">VIDEOS</a></li>
                <li class="nav-item"><a href="#profile-friends" class="nav-link" data-toggle="tab">FRIENDS</a></li>
            </ul>
        </div>
    
        <div class="profile-container">
            <div class="row row-space-20">
                <div class="col-md-12">
                    <section>
                        <h3>{{$store->first()->services->first()->category->cat_name}}</h3>
                            <div class="owl-carousel owl-theme mt-5" id="srvGall">
                                @foreach($store as $stor)
                                <div class="item">
                                    <a href="{{route('storeHome', $stor->id)}}" class="link-light nounderline">{{$stor->store_name}}</a>
                                </div>                                   
                                @endforeach
                            </div>
                    </section>
                </div>
    
            </div>
        </div>
    </div>
</div>

<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('owlcarousel/owl.carousel.min.js')}}"></script>

<script>
        $(document).ready(function(){
            $('#srvGall').owlCarousel({
                loop:true,
                margin:10,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:true
                    },
                    600:{
                        items:3,
                        nav:false
                    },
                    1000:{
                        items:5,
                        nav:true,
                        loop:false
                    }
                }
            });

            $('#prdGall').owlCarousel({
                loop:true,
                margin:10,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:true
                    },
                    600:{
                        items:3,
                        nav:false
                    },
                    1000:{
                        items:5,
                        nav:true,
                        loop:false
                    }
                }
            });
        });
    </script>