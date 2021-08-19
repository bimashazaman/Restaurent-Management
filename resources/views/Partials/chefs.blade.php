
<section class="section" id="chefs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h6>Our Chefs</h6>
                    <h2>We offer the best ingredients for you</h2>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-4">
                @foreach ($data2 as $data2 )
              <div class="chef-item">
                <div class="thumb">
                    <div class="overlay"></div>
                    <img src="chefimage/{{ $data2->image }}" alt=""Chef#1 class="card">
                </div>
                <div class="down-content">
                    <h4>{{ $data2->name }}</h4>
                    <span>{{ $data2->description }}</span>
                </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>


</section>
