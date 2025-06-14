 <!-- start header area -->
 <header class="header-two header--sticky ">
    {{-- <div class="header-top">
        <div class="content">
            <div class="left-header-top">
                <p class="top-details">
                    Are you ready to grow up your business? <a href="#">Contact Us <i class="fal fa-arrow-right"></i></a>
                </p>
            </div>
            <div class="right-header-top">
                <div class="working-time">
                    <i class="far fa-clock"></i>
                    <span>Working: 8.00am - 5.00pm</span>
                </div>
                <div class="ht-social">
                    <span>Visit Us:</span>
                    <ul>
                        <li>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="main-header px-xl-5">
        <div class="content">
            <div class="header-left">
                <a class="thumbnail py-0" href="{{url('/')}}">
                                    <img src="{{url('frontend/images/logo/ameriken-logo.png')}}" alt="" class="logo-size pt-md-4 pt-2">

                    {{-- <img src="frontend/images/fav.png" alt="" class="logo-size pt-md-4 pt-2">
                    <span class="text-primary f-14-for-mobile">AmeriKen Consulting, LLC</span> --}}
                </a>
                <nav class="nav-main mainmenu-nav d-none d-xl-block ">
                    <ul class="mainmenu mx-5 px-5">
                        <li><a class="nav-item {{ URL::current() == url('/') ? 'active' : '' }}" href="{{url('/')}}">Home</a></li>
                        <li><a class="nav-item {{ URL::current() == url('/accounting-assurance') ? 'active' : '' }}" href="{{url('/accounting-assurance')}}">Accounting & Assurance</a></li>
                        <li><a class="nav-item {{ URL::current() == url('/advisory') ? 'active' : '' }}" href="{{url('/advisory')}}"> Advisory</a></li>
                        <li><a class="nav-item {{ URL::current() == url('/tax') ? 'active' : '' }}" href="{{url('/tax')}}">Tax</a></li>
                        <li><a class="nav-item {{ URL::current() == url('/technology-cybersecurity') ? 'active' : '' }}" href="{{url('/technology-cybersecurity')}}">Technology & Cybersecurity</a></li>

                        <li class="has-droupdown">
                            <a class="nav-item main-clr {{ URL::current() == url('/who-we-are') || URL::current() == url('/equity-inclusion') || URL::current() == url('/affiliate-offices') || URL::current() == url('/contact-us')  ? 'active' : ''}}" href="#" >About</a>
                            <ul class="submenu">
                                <li><a class="{{ URL::current() == url('/who-we-are') ? 'active' : '' }} sub-link-clr" href="{{url('/who-we-are')}}">Who We Are</a></li>
                            <li><a class="{{ URL::current() == url('/equity-inclusion') ? 'active' : '' }} sub-link-clr" href="{{url('/equity-inclusion')}}">Diversity, Equity & Inclusion</a></li>
                            <li><a class="{{ URL::current() == url('/affiliate-offices') ? 'active' : '' }} sub-link-clr" href="{{url('/affiliate-offices')}}">Affiliate Offices</a></li>

                            <li>
                                <a class="{{ URL::current() == url('/contact-us') ? 'active' : '' }} sub-link-clr" href="{{url('/contact-us')}}">Contact Us</a>
                            </li>

                                {{-- <li>
                                    <a class="{{ URL::current() == url('/services-non-residents') ? 'active' : '' }} sub-link-clr" href="{{url('/services-non-residents')}}">Services For Non-Residents</a>
                                </li>
                                <li>
                                    <a class="{{ URL::current() == url('/outsourcing-international-co') ? 'active' : '' }} sub-link-clr" href="{{url('/outsourcing-international-co')}}">Outsourcing for International Corporates</a>
                                </li>
                                <li>
                                    <a class="{{ URL::current() == url('/us-outsourcing-work') ? 'active' : '' }} sub-link-clr" href="{{url('/us-outsourcing-work')}}">US Outsourcing Work</a>
                                </li> --}}
                            </ul>
                        </li>
                        {{-- <li class="has-droupdown">
                            <a class="nav-link" href="#">Services</a>
                            <ul class="submenu menu-link d-block">
                      <div class="overflow-div">
                        <div class="row">
                            <div class="col-6">
                             <li class="menu-item">
                                 <a class="tag" href="#">Accounting</a>
                                 <ul>
                                     <li><a href="{{url('/audit-assurance')}}">Audit & Assurance</a></li>
                                     <li><a href="about-us.html">Employee Benefit Plan Audit</a></li>
                                     <li><a href="price-plan.html">Outsourced Finance & Accounting</a></li>
                                     <li><a href="our-service.html">Royalty Exams & Contract Compliance</a></li>
                                     <li><a href="testimonial-style-1.html">SOC | System & Organization Controls</a></li>

                                 </ul>
                             </li>
                            </div>
                            <div class="col-6">
                             <li class="menu-item">
                                 <a class="tag" href="#">Tax</a>
                                 <ul>
                                     <li><a href="project.html">Federal Tax</a></li>
                                     <li><a href="portfolio-style-2.html">International Tax</a></li>
                                     <li><a href="portfolio-style-3.html">Private Client</a></li>
                                     <li><a href="portfolio-style-4.html">State & Local Tax</a></li>
                                     <li><a href="portfolio-style-5.html">Tax Controversy & Dispute Resolution</a></li>

                                 </ul>
                             </li>
                            </div>
                              </div>

                                <div class="row">
                                 <div class="col-2">
                                     <li class="menu-item">
                                         <a class="tag" href="#">Payroll</a>
                                         <ul>
                                             <li><a href="team.html">------------</a></li>
                                             <li><a href="team-style-2.html">------------</a></li>
                                             <li><a href="team-style-3.html">------------</a></li>
                                             <li><a href="team-style-4.html">------------</a></li>
                                             <li><a href="team-style-5.html">------------</a></li>
                                             <li><a href="team-details.html">------------</a></li>
                                         </ul>
                                     </li>
                                 </div>
                                 <div class="col-4">

                                     <li class="menu-item">
                                         <a class="tag" href="#">Audit & Advisory</a>
                                         <ul>
                                             <li><a href="team.html">Audit</a></li>
                                             <li><a href="team-style-2.html">Employee Benefit Plans</a></li>
                                             <li><a href="team-style-3.html">Single Audits</a></li>
                                             <li><a href="team-style-4.html">System and Organization<br> Controls (SOC) Audits</a></li>

                                         </ul>
                                     </li>
                                 </div>


                                 <div class="col-4">

                                     <li class="menu-item">
                                         <a class="tag" href="#">Internal Audit</a>
                                         <ul>
                                             <li><a href="team.html">Public Company SEC Compliance<br> & Reporting</a></li>
                                             <li><a href="team-style-2.html">Sarbanes Oxley (SOX) Compliance</a></li>
                                             <li><a href="team-style-3.html">The Remote Auditing Experience</a></li>
                                             <li><a href="team-style-4.html">System and Organization Controls<br> (SOC) Audits</a></li>

                                         </ul>
                                     </li>
                                 </div>


                                 <div class="row">

                                    <div class="col-6">

                                        <li class="menu-item">
                                            <a class="tag" href="#">Management Consulting</a>
                                            <ul>
                                                <li><a href="team.html">Business and Management Consulting</a></li>
                                                <li><a href="team-style-2.html">Change Management</a></li>
                                                <li><a href="team-style-3.html">CIO Advisory</a></li>
                                                <li><a href="team-style-4.html">Entrepreneur Advisory</a></li>
                                                <li><a href='#'>Strategy and Operational Transformation</a></li>

                                            </ul>
                                        </li>
                                    </div>


                                    <div class="col-6">

                                        <li class="menu-item">
                                            <a class="tag" href="#">Accounting & ERP Software<br> Implementation and Outsourcing<br> Services</a>
                                            <ul>
                                                <li><a href="team.html">CRM and ERP Consulting Services</a></li>
                                                <li><a href="team-style-2.html">Digital and Technology Transformation</a></li>
                                                <li><a href="team-style-3.html">Employee Experience with Microsoft Viva </a></li>
                                                <li><a href="team-style-4.html">Innovative Digital Solutions</a></li>
                                                <li><a href="#">Technologies and Capabilities</a></li>

                                            </ul>
                                        </li>
                                    </div>


                                </div>
                      </div>

                            </ul>
                        </li> --}}

                        {{-- <li><a class="nav-item {{ URL::current() == url('/industries') ? 'active' : '' }}" href="{{url('/industries')}}">Industries</a></li>
                        <li><a class="nav-item {{ URL::current() == url('/our-clients') ? 'active' : '' }}" href="{{url('/our-clients')}}">Our Clients</a></li> --}}


                        {{-- <li class="has-droupdown">
                            <a class="nav-link" href="#">Pages</a>
                            <ul class="submenu menu-link">
                                <li class="menu-item">
                                    <a class="tag" href="#">Pages</a>
                                    <ul>
                                        <li><a href="appoinment.html">Appoinment</a></li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="price-plan.html">Price Plans</a></li>
                                        <li><a href="our-service.html">Our Services</a></li>
                                        <li><a href="testimonial-style-1.html">Testimonial</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a class="tag" href="#">Portfolio</a>
                                    <ul>
                                        <li><a href="project.html">Portfolio Style 1</a></li>
                                        <li><a href="portfolio-style-2.html">Portfolio Style 2</a></li>
                                        <li><a href="portfolio-style-3.html">Portfolio Style 3</a></li>
                                        <li><a href="portfolio-style-4.html">Portfolio Style 4</a></li>
                                        <li><a href="portfolio-style-5.html">Portfolio Style 5</a></li>
                                        <li><a href="project-details.html">Portfolio Details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a class="tag" href="#">Our Teams</a>
                                    <ul>
                                        <li><a href="team.html">Team Style 1</a></li>
                                        <li><a href="team-style-2.html">Team Style 2</a></li>
                                        <li><a href="team-style-3.html">Team Style 3</a></li>
                                        <li><a href="team-style-4.html">Team Style 4</a></li>
                                        <li><a href="team-style-5.html">Team Style 5</a></li>
                                        <li><a href="team-details.html">Team Details</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-droupdown">
                            <a class="nav-link" href="#">Blog</a>
                            <ul class="submenu">
                                <li><a href="blog-list.html">Blog List</a></li>
                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="has-droupdown">
                            <a class="nav-link" href="#">Elements</a>
                            <ul class="submenu menu-link2">
                                <li class="menu-item">
                                    <ul>
                                        <li><a href="accordion.html">Accordion</a></li>
                                        <li><a href="address-box.html">Address Box</a></li>
                                        <li><a href="button.html">Button</a></li>
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="blog-slider.html">Blog Slider</a></li>
                                        <li><a href="blog-quote.html">Blog Quote</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <ul>
                                        <li><a href="heading.html">Heading</a></li>
                                        <li><a href="cta.html">Call To Action</a></li>
                                        <li><a href="contact-form.html">Contact Form</a></li>
                                        <li><a href="counter.html">Counter Up</a></li>
                                        <li><a href="brand.html">Brand Logo</a></li>
                                        <li><a href="video.html">Video Addon</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <ul>
                                        <li><a href="pricing.html">Pricing Table</a></li>
                                        <li><a href="typography.html">Typography</a></li>
                                        <li><a href="tab-addon.html">Tab Addon</a></li>
                                        <li><a href="progress-bar.html">Progress Bar</a></li>
                                        <li><a href="testimonial.html">Testimonial</a></li>
                                        <li><a href="working-process.html">Working Process</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li> --}}

                        {{-- <li><a class="nav-item" href="contactus.html">Contact Us</a></li> --}}
                    </ul>
                </nav>
            </div>
            <div class="header-right">
                {{-- <div class="call-area">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                            <path d="M14.2251 11.5362C13.7279 11.5914 13.3688 12.061 13.3965 12.5858C13.4517 13.083 13.8936 13.4697 14.4461 13.4144C14.9985 13.3592 15.5509 13.5249 15.9376 13.9116C16.352 14.3259 16.5177 14.8784 16.4624 15.4308C16.4072 15.9832 16.7939 16.4252 17.2911 16.4804C17.5949 16.508 17.8711 16.3975 18.0645 16.2042C18.2026 16.0661 18.3131 15.8451 18.3407 15.6518C18.4512 14.4917 18.0645 13.3868 17.2635 12.5858C16.4901 11.8124 15.3852 11.4257 14.2251 11.5362ZM13.866 7.80729C13.3136 7.86253 12.9545 8.3321 13.0098 8.82928C13.0374 9.35409 13.507 9.71317 14.0318 9.68554C15.7443 9.51982 17.3739 10.0999 18.5617 11.2876C19.7218 12.4477 20.3294 14.105 20.1637 15.8175C20.1085 16.3147 20.4675 16.7842 20.9923 16.8119C21.2962 16.8395 21.5448 16.7566 21.7381 16.5633C21.9038 16.3975 21.9867 16.2042 22.042 15.9832C22.2905 13.7459 21.5171 11.5362 19.9151 9.93414C18.3131 8.3321 16.131 7.58632 13.866 7.80729ZM13.507 4.07841C12.9821 4.10603 12.6231 4.57559 12.6507 5.1004C12.7059 5.59758 13.1479 5.98428 13.6727 5.95666C16.4901 5.68045 19.2522 6.61957 21.2409 8.60831C23.202 10.5694 24.1688 13.3592 23.8926 16.1766C23.865 16.7014 24.2517 17.1433 24.7488 17.1986C25.0527 17.2262 25.3289 17.1157 25.5222 16.9223C25.6603 16.7842 25.7432 16.5909 25.7708 16.3423C26.1299 13.0001 24.9698 9.68554 22.5668 7.28249C20.1361 4.85181 16.8768 3.74695 13.507 4.07841ZM10.3581 15.0165C10.662 14.7679 10.8001 14.2983 10.6343 13.9116L9.22564 10.6799C9.05991 10.238 8.56273 10.017 8.14841 10.0999L5.11006 10.818C4.69574 10.9009 4.3919 11.3152 4.3919 11.7571C4.3919 19.3254 10.5515 25.485 18.1197 25.485C18.5617 25.485 18.976 25.1811 19.0588 24.7668L19.777 21.7285C19.8599 21.3141 19.6389 20.817 19.197 20.6512L15.9653 19.2425C15.5786 19.0768 15.109 19.2149 14.8604 19.5187L13.5346 21.1208C11.4353 20.1264 9.75045 18.4415 8.75608 16.3423L10.3581 15.0165Z" fill="#0B4DF5" />
                        </svg>
                    </div>
                     <div class="number-area">
                        <span>Call us anytime</span>
                        <a href="tel:123-456-7890">
                            <h6 class="call">+256 21458.2146</h6>
                        </a>
                    </div>
                </div> --}}
                {{-- <a class="rts-btn banner-btn menu-block-none d-xl-block d-none" href="{{url('/contact-us')}}">Contact Us</a> --}}
                <button id="menu-btn" class="menu rts-btn btn-primary-alta ml--20 d-xl-none d-block">
                    {{-- <img class="menu-dark" src="frontend/images/icon/menu.png" alt="Menu-icon"> --}}
                    <img class="menu-light" src="frontend/images/icon/menu-light.png" alt="Menu-icon">
                </button>
            </div>
        </div>
    </div>
</header>

<div id="anywhere-home"></div>
<div id="side-bar" class="side-bar">
    <button class="close-icon-menu"><i class="fas fa-times"></i></button>
    <!-- inner menu area desktop start -->
    <div class="rts-sidebar-menu-desktop text-center">
        <a class="logo-1" href="{{url('/')}}"><img class="logo" src="{{url('frontend/images/logo/ameriken-logo.png')}}" alt="Ameriken Consulting LLc" class="logo-size-mobi"></a>
        <a class="logo-2" href="{{url('/')}}"><img class="logo" src="{{url('frontend/images/logo/ameriken-logo.png')}}" alt="Ameriken Consulting LLc" class="logo-size-mobi"></a>
        <a class="logo-3" href="{{url('/')}}"><img class="logo" src="{{url('frontend/images/logo/ameriken-logo.png')}}" alt="Ameriken Consulting LLc" class="logo-size-mobi"></a>
        <a class="logo-4" href="{{url('/')}}"><img class="logo" src="{{url('frontend/images/logo/ameriken-logo.png')}}" alt="Ameriken Consulting LLc" class="logo-size-mobi"></a>
        <div class="body d-none d-xl-block">
            <p class="disc">
                AmeriKen Consulting is a Certified Public Accountant firm providing Accounting, Assurance, Advisory & Tax Services.
            </p>
            <div class="get-in-touch">
                <!-- title -->
                <div class="h6 title mb-3 pb-0">Get In Touch</div>
                <!-- title End -->
                <div class="wrapper">
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-phone text-primary"></i>
                        <a href="tel:918136003510">+91-8136003510</a>
                    </div>

                    <div class="single">
                        <i class="fas fa-phone text-primary"></i>
                        <a href="tel:918135147187">+91-8135147187</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-envelope text-primary"></i>
                        <a href="#">example@gmail.com</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    {{-- <div class="single">
                        <i class="fas fa-globe"></i>
                        <a href="#">www.webexample.com</a>
                    </div> --}}
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-map-marker-alt text-primary"></i>
                        <span> Tampa, Florida & Atlanta, Georgia</span>
                    </div>
                    <!-- single ENd -->
                </div>
                {{-- <div class="social-wrapper-two menu">
                    <a href="#" class="text-white" ><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-whatsapp"></i></a>
                    <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
                </div> --}}
            </div>
        </div>
        <div class="body-mobile d-block d-xl-none">
            <nav class="nav-main mainmenu-nav">
                <ul class="mainmenu">
                    {{-- <li class="has-droupdown menu-item">
                        <a class="menu-link" href="#">Home</a>
                        <ul class="submenu">
                            <li>
                                <ul>
                                    <a href="#0" class="tag">Homepages</a>
                                    <li class="mobile-menu-link"><a href="index.html">Main Home</a></li>
                                    <li class="mobile-menu-link"><a href="index-two.html">Consulting Home</a></li>
                                    <li class="mobile-menu-link"><a href="index-three.html">Corporate Home</a></li>
                                    <li class="mobile-menu-link"><a href="index-four.html">Insurance Home</a></li>
                                    <li class="mobile-menu-link"><a href="index-five.html">Marketing Home</a></li>
                                    <li class="mobile-menu-link"><a href="index-six.html">Finance Home</a></li>
                                    <li class="mobile-menu-link"><a href="index-seven.html">Human Resources</a></li>
                                    <li class="mobile-menu-link"><a href="index-eight.html">IT Solutions</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <a href="#0" class="tag">Onepages</a>
                                    <li class="mobile-menu-link"><a href="onepage-one.html">Main Home Onepage</a></li>
                                    <li class="mobile-menu-link"><a href="onepage-two.html">Consulting Home Onepage</a></li>
                                    <li class="mobile-menu-link"><a href="onepage-three.html">Corporate Home Onepage</a></li>
                                    <li class="mobile-menu-link"><a href="onepage-four.html">Insurance Home Onepage</a></li>
                                    <li class="mobile-menu-link"><a href="onepage-five.html">Marketing Home Onepage</a></li>
                                    <li class="mobile-menu-link"><a href="onepage-six.html">Finance Home Onepage</a></li>
                                    <li class="mobile-menu-link"><a href="onepage-seven.html">Human Resources Onepage</a></li>
                                    <li class="mobile-menu-link"><a href="onepage-eight.html">IT Solutions Onepage</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> --}}
                    <li><a class="nav-item {{ URL::current() == url('/') ? 'active' : '' }}" href="{{url('/')}}">Home</a></li>
                    <li><a class="nav-item {{ URL::current() == url('/accounting-assurance') ? 'active' : '' }}" href="{{url('/accounting-assurance')}}">Accounting & Assurance</a></li>
                    <li><a class="nav-item {{ URL::current() == url('/advisory') ? 'active' : '' }}" href="{{url('/advisory')}}"> Advisory</a></li>
                    <li><a class="nav-item {{ URL::current() == url('/tax') ? 'active' : '' }}" href="{{url('/tax')}}">Tax</a></li>
                    <li><a class="nav-item {{ URL::current() == url('/technology-cybersecurity') ? 'active' : '' }}" href="{{url('/technology-cybersecurity')}}">Technology & Cybersecurity</a></li>

                    <li class="has-droupdown">
                        <a class="nav-item main-clr {{ URL::current() == url('/who-we-are') || URL::current() == url('/equity-inclusion') || URL::current() == url('/affiliate-offices') || URL::current() == url('/contact-us')  ? 'active' : ''}}" href="#" >About</a>
                        <ul class="submenu text-center">
                            <li><a class="{{ URL::current() == url('/who-we-are') ? 'active' : '' }} sub-link-clr" href="{{url('/who-we-are')}}">Who We Are</a></li>
                            <li><a class="{{ URL::current() == url('/equity-inclusion') ? 'active' : '' }} sub-link-clr" href="{{url('/equity-inclusion')}}">Diversity, Equity & Inclusion</a></li>
                            <li><a class="{{ URL::current() == url('/affiliate-offices') ? 'active' : '' }} sub-link-clr" href="{{url('/affiliate-offices')}}">Affiliate Offices</a></li>

                            <li>
                                <a class="{{ URL::current() == url('/contact-us') ? 'active' : '' }} sub-link-clr" href="{{url('/contact-us')}}">Contact Us</a>
                            </li>
                            {{-- <li>
                                <a class="{{ URL::current() == url('/services-non-residents') ? 'active' : '' }} sub-link-clr" href="{{url('/services-non-residents')}}">Services For Non-Residents</a>
                            </li>
                            <li>
                                <a class="{{ URL::current() == url('/outsourcing-international-co') ? 'active' : '' }} sub-link-clr" href="{{url('/outsourcing-international-co')}}">Outsourcing for International Corporates</a>
                            </li>
                            <li>
                                <a class="{{ URL::current() == url('/us-outsourcing-work') ? 'active' : '' }} sub-link-clr" href="{{url('/us-outsourcing-work')}}">US Outsourcing Work</a>
                            </li> --}}
                        </ul>
                    </li>
                    {{-- <li class="has-droupdown menu-item">
                        <a class="menu-link" href="#">Services</a>
                        <ul class="submenu">
                            <li class="has-droupdown sub-droupdown">
                                <a href="#">Our Service</a>
                                <ul class="submenu third-lvl mobile-menu">
                                    <li><a href="our-service.html">Service 1</a></li>
                                    <li><a href="service-2.html">Service 2</a></li>
                                    <li><a href="service-3.html">Service 3</a></li>
                                </ul>
                            </li>
                            <li class="mobile-menu-link"><a href="service-details.html">Service Details</a></li>
                        </ul>
                    </li> --}}

                    {{-- <li class="has-droupdown not-hover">
                        <a class="nav-link main-clr {{ URL::current() == url('/us-outsourcing-work') || URL::current() == url('/services-non-residents') || URL::current() == url('/outsourcing-international-co') || URL::current() == url('/goods-service-tax') || URL::current() == url('/risk-advisory-services') || URL::current() == url('/audit-assurance') || URL::current() == url('/income-tax') ? 'active' : ''}}" href="#">Services</a>
                        <ul class="submenu">
                            <li><a href="{{url('/audit-assurance')}}" class="sub-link-clr  {{ URL::current() == url('/audit-assurance') ? 'active' : '' }}">Audit & Assurance</a></li>
                            <li><a href="{{url('/income-tax')}}" class="sub-link-clr  {{ URL::current() == url('/income-tax') ? 'active' : '' }}">Income Tax</a></li>
                            <li><a href="{{url('/goods-service-tax')}}" class="sub-link-clr  {{ URL::current() == url('/goods-service-tax') ? 'active' : '' }}">Goods And Service Tax</a></li>

                            <li>
                                <a href="{{url('/risk-advisory-services')}}" class="sub-link-clr  {{ URL::current() == url('/risk-advisory-services') ? 'active' : '' }}">Risk Advisory Services</a>
                            </li>
                            <li>
                                <a href="{{url('/services-non-residents')}}" class="sub-link-clr  {{ URL::current() == url('/services-non-residents') ? 'active' : '' }}">Services For Non-Residents</a>
                            </li>
                            <li>
                                <a href="{{url('/outsourcing-international-co')}}" class="sub-link-clr  {{ URL::current() == url('/outsourcing-international-co') ? 'active' : '' }}">Outsourcing for International Corporates</a>
                            </li>
                            <li>
                                <a href="{{url('/us-outsourcing-work')}}" class="sub-link-clr  {{ URL::current() == url('/us-outsourcing-work') ? 'active' : '' }}">US Outsourcing Work</a>
                            </li>
                        </ul>
                    </li> --}}
                    {{-- <li class="has-droupdown menu-item">
                        <a class="menu-link" href="#">Pages</a>
                        <ul class="submenu">
                            <li class="mobile-menu-link"><a href="project.html">Project</a></li>
                            <li class="mobile-menu-link"><a href="project-details.html">Project Details</a></li>
                            <li class="mobile-menu-link"><a href="team.html">Team</a></li>
                            <li class="mobile-menu-link"><a href="team-details.html">Team Details</a></li>
                            <li class="mobile-menu-link"><a href="appoinment.html">appoinment</a></li>
                            <li class="mobile-menu-link"><a href="price-plan.html">Price Plan</a></li>
                            <li class="mobile-menu-link"><a href="404.html">404 Page</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown menu-item">
                        <a class="menu-link" href="#">Blog</a>
                        <ul class="submenu">
                            <li class="mobile-menu-link"><a href="blog-list.html">Blog List</a></li>
                            <li class="mobile-menu-link"><a href="blog-grid.html">Blog Grid</a></li>
                            <li class="mobile-menu-link"><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li> --}}

                    {{-- <li class="menu-item menu-item"><a class="menu-link {{ URL::current() == url('/industries') ? 'active' : '' }}" href="{{url('/industries')}}" >Industries</a></li>
                    <li class="menu-item menu-item"><a class="menu-link {{ URL::current() == url('/our-clients') ? 'active' : '' }}" href="{{url('/our-clients')}}"  >Our Clients</a></li>
                    <li class="menu-item menu-item"><a class="menu-link {{ URL::current() == url('/contact-us') ? 'active' : '' }}" href="{{url('/contact-us')}}">Contact Us</a></li> --}}
                </ul>
            </nav>
            {{-- <div class="social-wrapper-two menu mobile-menu">
                <a href="#" class="mobile-sidebar"><i class="fab fa-facebook-f "  ></i></a>
                <a href="#" class="mobile-sidebar"><i class="fab fa-twitter"></i></a>
                <a href="#" class="mobile-sidebar"><i class="fab fa-instagram"></i></a>
                <a href="#" class="mobile-sidebar"><i class="fab fa-whatsapp"></i></a>
                <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
            </div> --}}
            {{-- <a href="{{url('/contact-us')}}" class="rts-btn banner-btn ml--20 ml_sm--5 quote-btnmenu">Get Quote</a> --}}
        </div>
    </div>
    <!-- inner menu area desktop End -->
</div>
<!-- ENd Header Area -->
