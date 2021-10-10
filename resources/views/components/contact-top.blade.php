<!-- Contact Area Starts -->
<section class="contact-area padding-120">
    <div class="contact-shape-1"><img src="{{ asset('assets/images/award-shape.png') }}" alt="shape"></div>
    <div class="contact-shape-2"><img src="{{ asset('assets/images/award-shape.png') }}" alt="shape"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="contact-left-content">
                    <span class="top-span">contact us</span>
                    <h2 class="title">don't hesitate to contact us if you need more help.</h2>
                    <div class="info-top">
                        <div class="info-envelope-icon">
                            <i class="fa fa-envelope-open"></i>
                        </div>
                        <div class="info-name">
                            <h4 class="title">contact us</h4>
                        </div>
                    </div>
                    <div class="info-bottom">
                        <div class="info-content">
                            <span>Phone : 123-456789</span>
                            <span>Email : yourmail@gmail.com</span>
                        </div>
                    </div>
                    <div class="info-top">
                        <div class="info-address-icon">
                            <i class="fa fa-building"></i>
                        </div>
                        <div class="info-name">
                            <h4 class="title">address</h4>
                        </div>
                    </div>
                    <div class="info-bottom">
                        <div class="info-content">
                            <span>London : 47-463 Broadway, L 100013</span>
                            <span>Canada : 12-463 Mainroad, C 209016</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 offset-xl-1 col-lg-6">
                <span class="top-span">write to us</span>
                @include('components.contact-form')
            </div>
        </div>
    </div>
</section>