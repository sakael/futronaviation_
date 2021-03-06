<x-layouts.leadership :seo="$seo" :background="$page->hero_background">
    <x-section name="scripts-hedaer">
        <!-- Some JS and styles -->
    </x-section>
    <x-section name="hero-background"></x-section>
    <x-section name="hero-title">
        {{ $page->title }}
    </x-section>
    <x-section name="hero-short-content">
    </x-section>
    <div class="section-page mt-1">
        <div class="container position-relative">
            <div class="row justify-content-center gx-5">
                @foreach ($leaderships as $leadership)
                    <div class="col-lg-6 col-12 text-center">
                        <div class="p-5 pt-2" >
                            <p class="text-start">
                            <img src="http://cms.futronaviation.com{{ $leadership->photo }}" class="text-start"
                                alt="">
                            </p>
                            <div class="person-author mt-1">
                                <div class="person-author-wrapper"><span class="person-name">
                                        {{ $leadership->title }}</span><span
                                        class="person-title">{{ $leadership->position }} </span></div>
                                <div class="fusion-social-networks boxed-icons">
                                    <a class="fusion-social-network-icon fusion-tooltip icon-facebook2"
                                        href="{{ $leadership->facebook }}" target="_blank"
                                        style="color:#FFFFFF;background-color:#9c9b9b;border-color:#9c9b9b;border-radius:4px;"
                                        data-placement="bottom" data-title="Facebook" title="Facebook"
                                        data-toggle="tooltip" data-original-title="Facebook"></a>
                                    <a class="fusion-social-network-icon fusion-tooltip icon-twitter2"
                                        href="{{ $leadership->twiiter }}" target="_blank"
                                        style="color:#FFFFFF;background-color:#9c9b9b;border-color:#9c9b9b;border-radius:4px;"
                                        data-placement="bottom" data-title="Twitter" title="Twitter"
                                        data-toggle="tooltip" data-original-title="Twitter"></a>
                                    <a class="fusion-social-network-icon fusion-tooltip icon-linkedin2"
                                        href="{{ $leadership->linkedin }}" target="_blank"
                                        style="color:#FFFFFF;background-color:#9c9b9b;border-color:#9c9b9b;border-radius:4px;"
                                        data-placement="bottom" data-title="Linkedin" title="Linkedin"
                                        data-toggle="tooltip" data-original-title="Linkedin"></a>
                                    <a class="fusion-social-network-icon fusion-tooltip icon-mail"
                                        href="mailto:{{ $leadership->mail }}" target="_self"
                                        style="color:#FFFFFF;background-color:#9c9b9b;border-color:#9c9b9b;border-radius:4px;"
                                        data-placement="bottom" data-title="Mail" title="Mail" data-toggle="tooltip"
                                        data-original-title="Mail"></a>
                                </div>
                            </div>
                            <div class="person-content" style="text-align: left">
                                {!! $leadership->text !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <x-section name="scripts-footer">
        <!-- Some JS and styles -->
        <script type="text/javascript">
        </script>
    </x-section>
</x-layouts.leadership>
