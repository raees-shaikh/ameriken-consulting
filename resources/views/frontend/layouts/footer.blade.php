  <!-- footer area start -->
  <div class="rts-footer-area rts-section-gap footer-two footer-bg-two mt--120 mt_md--80 mt_sm--60 py-lg-5  {{ URL::current() == url('/') ? 'add-class-mt-0' : '' }}">
      <div class="container">
        <div class="footer-two-single-wized left">
            <div class="d-block text-center"> <a class="thumbnail " href="{{ url('/') }}" class="text-center mx-auto justify-content-center">
                <img src="{{url('frontend/images/logo/ameriken-logo.png')}}" alt="" class="mx-auto text-center logo-footer-size">
                {{-- <img src="frontend/images/fav.png" alt="" class="mx-auto text-center logo-footer-size">
                    <span class="text-primary c-name footer-logo-text">AmeriKen Consulting, LLC</span> --}}
                </a>
            </div>
          <div class="justify-content-center">
            <p class="disc mb-2 text-md-center">
                AmeriKen Consulting is a Certified Public Accountant firm providing Accounting, Assurance, Advisory & Tax Services. AmeriKen Consulting has established itself as a reputable and dependable firm with over 50 years of experience, working with companies and individuals globally.
            </p>
            <p class="disc m-0 p-0 text-center">

            </p>
          </div>
        </div>
          <div class="row px-0 mt-md-5 pt-md-5 justify-content-xl-center">
              <!-- single wized -->

              <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 mt_sm--50">
                  <div class="footer-two-single-wized two">
                      <div class="wized-title-area">
                          <h5 class="wized-title text-primary">Useful Links</h5>
                          <img src="frontend/images/footer/under-title.png" alt="finbiz_footer" class="">
                      </div>
                      <div class="wized-2-body">
                          <ul>
                              <li><a href="{{ url('/') }}"> <i class="fal fa-chevron-double-right"></i>Home</a>
                              </li>

                              <li><a  href="{{url('/who-we-are')}}"> <i class="fal fa-chevron-double-right"></i>Who We Are</a></li>
                              <li><a href="{{url('/equity-inclusion')}}"> <i class="fal fa-chevron-double-right"></i>Diversity, Equity & Inclusion</a></li>
                              <li><a href="{{url('/affiliate-offices')}}"> <i class="fal fa-chevron-double-right"></i>Affiliate Offices</a></li>

                              <li>
                                  <a href="{{ url('/contact-us') }}"><i class="fal fa-chevron-double-right"></i>Contact
                                      Us</a>
                              </li>

                              {{--
                            <li><a href="service-details.html"><i class="fal fa-chevron-double-right"></i>Business planning</a></li>
                            <li><a href="service-details.html"><i class="fal fa-chevron-double-right"></i>Tax strategy</a></li>
                            <li><a href="service-details.html"><i class="fal fa-chevron-double-right"></i>Financial advices</a></li>
                            <li><a href="service-details.html"><i class="fal fa-chevron-double-right"></i>Insurance strategy</a></li>
                            <li><a href="service-details.html"><i class="fal fa-chevron-double-right"></i>Manage investment</a></li> --}}
                          </ul>
                      </div>
                  </div>
              </div>

              <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 mt_sm--50 mt_md--30 service-mt">
                  <div class="footer-two-single-wized two">
                      <div class="wized-title-area">
                          <h5 class="wized-title text-primary">Our Services</h5>
                          <img src="frontend/images/footer/under-title.png" alt="finbiz_footer" >
                      </div>
                      <div class="wized-2-body">
                          <ul>

                            <li><a  href="{{url('/accounting-assurance')}}"><i class="fal fa-chevron-double-right"></i> Accounting & Assurance</a></li>
                            <li><a  href="{{url('/advisory')}}"><i class="fal fa-chevron-double-right"></i> Advisory</a></li>
                            <li><a  href="{{url('/tax')}}"><i class="fal fa-chevron-double-right"></i> Tax</a></li>
                            <li><a  href="{{url('/technology-cybersecurity')}}"> <i class="fal fa-chevron-double-right"></i> Technology & Cybersecurity</a></li>

                              {{--
                            <li><a href="service-details.html"><i class="fal fa-chevron-double-right"></i>Business planning</a></li>
                            <li><a href="service-details.html"><i class="fal fa-chevron-double-right"></i>Tax strategy</a></li>
                            <li><a href="service-details.html"><i class="fal fa-chevron-double-right"></i>Financial advices</a></li>
                            <li><a href="service-details.html"><i class="fal fa-chevron-double-right"></i>Insurance strategy</a></li>
                            <li><a href="service-details.html"><i class="fal fa-chevron-double-right"></i>Manage investment</a></li> --}}
                          </ul>
                      </div>
                  </div>
              </div>
              <!-- single wized -->

              <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 mt_sm--30 mt_md--30">
                  <div class="footer-two-single-wized">
                      <div class="wized-title-area">
                          <h5 class="wized-title text-primary">Contact Us</h5>
                          <img src="frontend/images/footer/under-title.png" alt="finbiz_footer">
                      </div>
                      <div class="wized-2-body">
                          <div class="contact-info-1">
                              <div class="icon">
                                  <i class="fas fa-phone text-cream"></i>
                              </div>
                              <div class="disc">
                                  <span class="sub-head">Call Us 24/7</span>
                                  <a href="tel:+18136003510">+1 (813)-600-3510</a>
                                  <a href="tel:+18135147187">+1 (813)-514-7187</a>
                              </div>
                          </div>

                          <div class="contact-info-1">
                            <div class="icon">
                                <i class="fas fa-fax text-cream"></i>
                            </div>
                            <div class="disc">
                                <span class="sub-head">Fax</span>
                                <a href="fax:+12078884749">+1 (207)-888-4749</a>
                                <a href="fax:+18134066005">+1 (813)-406-6005</a>
                            </div>
                        </div>
                          <div class="contact-info-1">
                              <div class="icon">
                                  <i class="fas fa-envelope text-cream"></i>
                              </div>
                              <div class="disc">
                                  <span class="sub-head">E-Mail Address</span>
                                  <a href="mailto:info@amerikenconsulting.com" class="text-lowercase">info@amerikenconsulting.com</a>
                              </div>
                          </div>

                          <div class="contact-info-1">
                              <div class="icon">
                                  <i class="fas fa-map-marker-alt text-cream"></i>
                              </div>
                              <div class="disc">
                                  <span class="sub-head">Our Locations</span>
                                  <span href="#" class="hover-off w-100">Tampa, Florida & Atlanta, Georgia, Mumbai, India, Nairobi, & Kenya</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- single wized -->
              {{-- <!-- single wized -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="footer-two-single-wized right">
                    <div class="wized-2-body">
                        <div class="contact-info-1">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="disc">
                                <span>Our Location</span>
                                <a href="#">Tampa, Florida & Atlanta, Georgia</a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- single wized --> --}}
          </div>

      </div>

  </div>
  <!-- footer area end -->
  <!-- copyright-area start -->
  <div class="rts-copy-right py-4">
      <div class="container">
          <div class="row justify-content-md-center ">
              <div class="col-lg-12">
                  <div class="copyright-h-2-wrapper">
                      <p class="disc text-md-center mx-auto hover-off">
                          Ameriken Consulting, LLC - &copy; {{ date('Y') }} All rights reserved | Designed &
                          Developed By
                          <a href="https://www.acetrot.com/" target="_blank" class="">Acetrot.</a>
                      </p>
                      {{-- <div class="right">
                        <ul>
                            <li><a href="{{url('/about-us')}}">Company Profile </a></li>
                            {{-- <li><a href="#">Faq</a></li> --}}
                      {{-- <li><a href="{{url('/contact-us')}}">Contact</a></li>
                        </ul>
                    </div>  --}}
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- copyright-area end -->
  <!-- ENd Header Area -->


  <!-- start loader -->
  <div class="loader-wrapper">
      <div class="loader">
      </div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End loader -->

  <!-- progress Back to top -->
  {{-- <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>

    </div> --}}
  <a id="button"></a>
  <!-- progress Back to top End -->




  <script>
      var btn = $('#button');

      $(window).scroll(function() {
          if ($(window).scrollTop() > 300) {
              btn.addClass('show');
          } else {
              btn.removeClass('show');
          }
      });

      btn.on('click', function(e) {
          e.preventDefault();
          $('html, body').animate({
              scrollTop: 0
          }, '300');
      });
  </script>



