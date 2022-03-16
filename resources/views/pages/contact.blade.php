<x-layouts.inner-page :seo="$seo" :background="$page->hero_background">
    <x-section name="scripts-hedaer">
        <!-- Some JS and styles -->
    </x-section>
    <x-section name="hero-background"></x-section>
    <x-section name="hero-title">
        {{ $page->title }}
    </x-section>
    <x-section name="hero-short-content">
        {!! $page->short_content !!}
    </x-section>
    <div class="section-page">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-md-12 col-12 mt-5 text-center">
                    <h3>{{ $page->sub_title }}</h3>
                    {!! $page->content !!}

                    <!-- Wrapper container -->
                    <div class="container py-4">
                        <div class="row justify-content-md-center">
                            <div class="col col-lg-8">
                                <!-- Bootstrap 5 starter form -->
                                <form id="contactForm">
                                    <!-- Name input -->
                                    <div class="mb-3">
                                        <input class="form-control" id="name" type="text" placeholder="Name" />
                                    </div>
                                    <!-- Name input -->
                                    <div class="mb-3">
                                        <input class="form-control" id="company" type="text" placeholder="Company" />
                                    </div>

                                    <!-- Email address input -->
                                    <div class="mb-3">
                                        <input class="form-control" id="emailAddress" type="email"
                                            placeholder="Email Address" />
                                    </div>
                                    <!-- Name input -->
                                    <div class="mb-3">
                                        <input class="form-control" id="phone" type="text" placeholder="phone" />
                                    </div>
                                    <!-- Name input -->
                                    <div class="mb-3">
                                        <input class="form-control" id="subject" type="text" placeholder="subject" />
                                    </div>
                                    <!-- Message input -->
                                    <div class="mb-3">
                                        <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;"></textarea>
                                    </div>

                                    <!-- Form submit button -->
                                    <div class="d-grid">
                                        <input class="btn btn-sm send white pe-5 ps-5 pt-2 pb-2 mt-1" type="submit"
                                            value="Send">
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-section name="scripts-footer">
        <!-- Some JS and styles -->
        <script type="text/javascript">
        </script>
    </x-section>
</x-layouts.inner-page>
