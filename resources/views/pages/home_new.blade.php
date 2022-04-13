<x-layouts.base :seo="$seo">
    <x-section name="scripts-hedaer">
        <!-- Some JS and styles -->
    </x-section>
    <div class="home-boxes-wrapper  d-md-block d-none d-md-block">
        <div class="container mb-2 home-box-wrapper">
            <div class="row g-md-0 g-3">
                <div id="showcase" class="noselect">
                    <div class="col-lg-6 card-home-new">
                        <div class="box box-1 p-5 white  position-relative">
                            <img src="{{ asset('images/icons/icon-3.png') }}" class="mb-4 mt-1">
                            <h2 class="raleway fs-24 fw-bold mb-3">Safety Management Systems (SMS)</h2>
                            <p class="cabin fs-16 pb-4">From Large Hub to smaller Regional airports, Futron Aviation
                                has
                                assisted Part 139 Airport
                                Management in the Safety Management System development process. Current and recent
                                past
                                clients for a gap analysis, Safety Risk Assessments (SRA), SMS Implementation, and
                                Safety
                                Training include Denver, Indianapolis, Peoria, San Antonio, San Francisco,
                                Seattle-Tacoma
                                International and South Bend Regional Airports.</p>
                            <div class="read-more-wrapper"><a
                                    href="{{ route('pageRoute', ['page_slug' => 'safety-management-systems']) }}"
                                    class="read-more-home white raleway fs-16 medium">READ
                                    MORE <span></span></a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 card-home-new">
                        <div class="box box-1 p-5 white  position-relative">
                            <img src="{{ asset('images/icons/icon-1.png') }}" class="mb-4 mt-1">
                            <h2 class="raleway fs-24 fw-bold mb-3">Aviation Safety / Research</h2>
                            <p class="cabin fs-16 pb-4">From aviation safety gap analyses for the Commander of Naval
                                Air Forces to multiple Transportation Research Board, Airport Cooperative Research
                                Board (ACRP) Research Projects to include ACRP 04-16, Safety Risk Management for
                                Airport, ACRP 03-30, Unmanned Aircraft Systems (UAS) at Airports: A Primer, and ACRP
                                10-22, Improving Stakeholder Engagement in Aircraft Accident Planning, Futron
                                Aviation has provided in-depth research and analysis for aviation safety projects
                                that provide insight and guidance to a large aviation audience.</p>
                            <div class="read-more-wrapper"><a
                                    href="{{ route('pageRoute', ['page_slug' => 'research-studies']) }}"
                                    class="read-more-home white raleway fs-16 medium">READ MORE <span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 card-home-new">
                        <div class="box box-1 p-5 white border-start position-relative">
                            <img src="{{ asset('images/icons/icon-2.png') }}" class="mb-4 mt-1">
                            <h2 class="raleway fs-24 fw-bold mb-3">Risk Management</h2>
                            <p class="cabin fs-16 pb-4">Futron Aviation has a long history of supporting the NASA
                                Continuous Risk Management process for both NASA Johnson Space Center’s Space
                                Shuttle Program and NASA Langley Research Center’s Flight Projects Division and
                                implementing Enterprise Risk Management in multiple government agencies.
                                Additionally, Futron Aviation’s risk management experts have an extensive background
                                in Operational Risk Management and Crew Resource Management used in the Department
                                of Defense.</p>
                            <div class="read-more-wrapper"><a
                                    href="{{ route('pageRoute', ['page_slug' => 'risk-management']) }}"
                                    class="read-more-home white raleway fs-16 medium">READ MORE <span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 card-home-new white border-md-start">
                        <div class="box box-1 p-5 white border-start  position-relative">
                            <img src="{{ asset('images/icons/icon-4.png') }}" class="mb-4 mt-1">
                            <h2 class="raleway fs-24 fw-bold mb-3">Unmanned Aircraft Systems (UAS)</h2>
                            <p class="cabin fs-16 pb-4">Futron Aviation is providing Aviation and Airport
                                stakeholders new insights into the consistently evolving UAS environment. Futron
                                Aviation led a Transportation Research Board, Airport Cooperative Research Program
                                (ACRP) report 03-30 titled “UAS at Airports-A Primer”. Additionally, with its
                                extensive background in Aviation and Safety Risk Management, Futron Aviation has the
                                expertise needed to advise Airports, Commercial and Military Operators, and
                                Manufacturers on all UAS considerations.</p>
                            <div class="read-more-wrapper"><a
                                    href="{{ route('pageRoute', ['page_slug' => 'unmanned-aircraft-systems-uas']) }}"
                                    class="read-more-home white raleway fs-16 medium">READ MORE <span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 card-home-new">
                        <div class="box box-1  p-5 white border-start position-relative">
                            <img src="{{ asset('images/Safety-Culture.png') }}" class="mb-4 mt-1">
                            <h2 class="raleway fs-24 fw-bold mb-3">Safety Culture/Risk Assessments</h2>
                            <p class="cabin fs-16 pb-4">Effective implementation of a Safety Management System is
                                enabled by a strong safety culture. Using Futron Aviation’s Vector Process, the
                                proper assessment and shaping of organizational safety culture improves the both the
                                safety and operational performance of your organization.</p>
                            <div class="read-more-wrapper"><a
                                    href="{{ route('pageRoute', ['page_slug' => 'safety-culture']) }}"
                                    class="read-more-home white raleway fs-16 medium">READ MORE <span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 white card-home-new border-md-start">
                        <div class="box box-1  p-5 white border-start  position-relative">
                            <img src="{{ asset('images/RTM-white.png') }}" class="mb-4 mt-1">
                            <h2 class="raleway fs-24 fw-bold mb-3">RTMs / Conferences</h2>
                            <p class="cabin fs-16 pb-4">From Large Hub to smaller Regional airports, Futron Aviation
                                has assisted Part 139 Airport Management in the Safety Management System development
                                process. Current and recent past clients for a gap analysis, Safety Risk Assessments
                                (SRA), SMS Implementation, and Safety Training include Denver, Indianapolis, Peoria,
                                San Antonio, San Francisco, Seattle-Tacoma International and South Bend Regional
                                Airports.
                            </p>
                            <div class="read-more-wrapper"><a
                                    href="{{ route('pageRoute', ['page_slug' => 'rtms-and-conferences']) }}"
                                    class="read-more-home white raleway fs-16 medium">READ MORE <span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="nav-home noselect left">
                    &lt;
                </button>
                <button class="nav-home noselect right">
                    &gt;
                </button>
            </div>
        </div>
    </div>
    <div class="home-boxes-wrapper  d-sm-block d-md-none">
        <div class="container mt-4 home-box-wrapper">
            <div class="row g-md-0 g-3">
                <div class="col-lg-6 mb-1" data-aos="fade-down-right" data-aos-offset="0"
                    data-aos-easing="ease-in-sine">
                    <div class="box box-1 p-5 white  position-relative">
                        <img src="{{ asset('images/icons/icon-3.png') }}" class="mb-4 mt-1">
                        <h2 class="raleway fs-24 fw-bold mb-3">Safety Management Systems (SMS)</h2>
                        <p class="cabin fs-16 pb-4">From Large Hub to smaller Regional airports, Futron Aviation has
                            assisted Part 139 Airport
                            Management in the Safety Management System development process. Current and recent past
                            clients for a gap analysis, Safety Risk Assessments (SRA), SMS Implementation, and Safety
                            Training include Denver, Indianapolis, Peoria, San Antonio, San Francisco, Seattle-Tacoma
                            International and South Bend Regional Airports.</p>
                        <div class="read-more-wrapper"><a href="{{route('pageRoute',['page_slug'=>'safety-management-systems'])}}" class="read-more-home white raleway fs-16 medium">READ
                                MORE <span></span></a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 mb-1" data-aos="fade-down-left" data-aos-offset="0"
                    data-aos-easing="ease-in-sine">
                    <div class="box box-2 p-5 white  position-relative">
                        <img src="{{ asset('images/icons/icon-1.png') }}" class="mb-4 mt-1">
                        <h2 class="raleway fs-24 fw-bold mb-3">Aviation Safety / Research</h2>
                        <p class="cabin fs-16 pb-4">From aviation safety gap analyses for the Commander of Naval Air Forces to multiple Transportation Research Board, Airport Cooperative Research Board (ACRP) Research Projects to include ACRP 04-16, Safety Risk Management for Airport, ACRP 03-30, Unmanned Aircraft Systems (UAS) at Airports: A Primer, and ACRP 10-22, Improving Stakeholder Engagement in Aircraft Accident Planning, Futron Aviation has provided in-depth research and analysis for aviation safety projects that provide insight and guidance to a large aviation audience.</p>
                        <div class="read-more-wrapper"><a href="{{route('pageRoute',['page_slug'=>'research-studies'])}}"
                                class="read-more-home white raleway fs-16 medium">READ MORE <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container home-box-wrapper mt-md-1 mt-3">
            <div class="row g-md-0 g-3">
                <div class="col-lg-6 mb-1" data-aos="fade-up-right" data-aos-offset="0" data-aos-easing="ease-in-sine">
                    <div class="box box-3 p-5 white border-start position-relative">
                        <img src="{{ asset('images/icons/icon-2.png') }}" class="mb-4 mt-1">
                        <h2 class="raleway fs-24 fw-bold mb-3">Risk Management</h2>
                        <p class="cabin fs-16 pb-4">Futron Aviation has a long history of supporting the NASA Continuous Risk Management process for both NASA Johnson Space Center’s Space Shuttle Program and NASA Langley Research Center’s Flight Projects Division and implementing Enterprise Risk Management in multiple government agencies. Additionally, Futron Aviation’s risk management experts have an extensive background in Operational Risk Management and Crew Resource Management used in the Department of Defense.</p>
                        <div class="read-more-wrapper"><a href="{{route('pageRoute',['page_slug'=>'risk-management'])}}"
                                class="read-more-home white raleway fs-16 medium">READ MORE <span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-1 white border-md-start" data-aos="fade-up-left" data-aos-offset="0"
                    data-aos-easing="ease-in-sine">
                    <div class="box box-4 p-5 white border-start  position-relative">
                        <img src="{{ asset('images/icons/icon-4.png') }}" class="mb-4 mt-1">
                        <h2 class="raleway fs-24 fw-bold mb-3">Unmanned Aircraft Systems (UAS)</h2>
                        <p class="cabin fs-16 pb-4">Futron Aviation is providing Aviation and Airport stakeholders new insights into the consistently evolving UAS environment.  Futron Aviation led a Transportation Research Board, Airport Cooperative Research Program (ACRP) report 03-30 titled “UAS at Airports-A Primer”.  Additionally, with its extensive background in Aviation and Safety Risk Management, Futron Aviation has the expertise needed to advise Airports, Commercial and Military Operators, and Manufacturers on all UAS considerations.</p>
                        <div class="read-more-wrapper"><a href="{{route('pageRoute',['page_slug'=>'unmanned-aircraft-systems-uas'])}}"
                                class="read-more-home white raleway fs-16 medium">READ MORE <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container home-box-wrapper mt-md-1 mt-3 mb-5">
            <div class="row g-md-0 g-3">
                <div class="col-lg-6 mb-1" data-aos="fade-up-right" data-aos-offset="0" data-aos-easing="ease-in-sine">
                    <div class="box  p-5 white border-start position-relative">
                        <img src="{{ asset('images/Safety-Culture.png') }}" class="mb-4 mt-1">
                        <h2 class="raleway fs-24 fw-bold mb-3">Safety Culture/Risk Assessments</h2>
                        <p class="cabin fs-16 pb-4">Effective implementation of a Safety Management System is enabled by a strong safety culture. Using Futron Aviation’s Vector Process, the proper assessment and shaping of organizational safety culture improves the both the safety and operational performance of your organization.</p>
                        <div class="read-more-wrapper"><a href="{{route('pageRoute',['page_slug'=>'safety-culture'])}}"
                                class="read-more-home white raleway fs-16 medium">READ MORE <span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-1 white border-md-start" data-aos="fade-up-left" data-aos-offset="0"
                    data-aos-easing="ease-in-sine">
                    <div class="box  p-5 white border-start  position-relative">
                        <img src="{{ asset('images/RTM-white.png') }}" class="mb-4 mt-1">
                        <h2 class="raleway fs-24 fw-bold mb-3">RTMs / Conferences</h2>
                        <p class="cabin fs-16 pb-4">From Large Hub to smaller Regional airports, Futron Aviation has assisted Part 139 Airport Management in the Safety Management System development process. Current and recent past clients for a gap analysis, Safety Risk Assessments (SRA), SMS Implementation, and Safety Training include Denver, Indianapolis, Peoria, San Antonio, San Francisco, Seattle-Tacoma International and South Bend Regional Airports.
                        </p>
                        <div class="read-more-wrapper"><a href="{{route('pageRoute',['page_slug'=>'rtms-and-conferences'])}}"
                                class="read-more-home white raleway fs-16 medium">READ MORE <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-4 d-none d-sm-block ">
        <div class="container position-relative ">
            <div class="row ">
                <div class="col-12 col-md-3 text-center">
                    <img src="{{ asset('images/logos/35Logo.png') }}">
                </div>
                <div class="col-12 col-md-6 text-center">
                    <h1 class="text-center fs-36 raleway extra-bold lh-70">FUTRON AVIATION <br>
                        CELEBRATING 35 YEARS</h1>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-8 col-12">
                    <p class="mt-5">Futron’s aviation experts bring decades of experience in critical aspects
                        of safety, operations, hazard analysis, research, and risk management. We view safety as an
                        inseparable and critical component of operational excellence. We strive to integrate safety
                        practices into the daily operational mindset of airports and flying operations, building a
                        culture that views safety as just the way business is done.</p>
                </div>
            </div>
        </div>
    </div>
    <x-section name="scripts-footer">

        <!-- Some JS and styles -->
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/jquery.cloud9carousel.js') }}"></script>
        <script type="text/javascript">
            $(function() {
                var showcase = $("#showcase")

                showcase.Cloud9Carousel({
                    yRadius: 110,
                    itemClass: "card-home-new",
                    buttonLeft: $(".nav-home.left"),
                    buttonRight: $(".nav-home.right"),
                    bringToFront: true,
                    onLoaded: function() {
                        showcase.css('visibility', 'visible')
                        showcase.css('display', 'none')
                        showcase.fadeIn(1500)
                    }
                })

                //
                // Simulate physical button click effect
                //
                $('.nav-home').click(function(e) {
                    var b = $(e.target).addClass('down')
                    setTimeout(function() {
                        b.removeClass('down')
                    }, 80)
                })

                $(document).keydown(function(e) {
                    //
                    // More codes: http://www.javascripter.net/faq/keycodes.htm
                    //
                    switch (e.keyCode) {
                        /* left arrow */
                        case 37:
                            $('.nav-home.left').click()
                            break

                            /* right arrow */
                        case 39:
                            $('.nav-home.right').click()
                    }
                })
            })
        </script>
    </x-section>
</x-layouts.base>
