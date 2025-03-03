<x-layout data-page="patologie">
    <section class="row vh-100 align-items-center justify-content-center">
        <div class="col-12 col-md-6">
            <h1 class="text-grey display-2 text-center title">PATOLOGIE</h1>
            <div thumbsSlider="" class="swiper mySwiper mt-4">
                <div class="swiper-wrapper">
                    @foreach ($patologie as $patologia)
                        <div class="swiper-slide">
                            <img src="{{ Vite::asset('resources/images/' . $patologia['img']) }}" />
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="swiper mySwiper2 mt-4">
                <div class="swiper-wrapper d-flex">
                    @foreach ($patologie as $patologia)
                        <div class="swiper-slide">
                            <div class="text text-grey">
                                <h2 class="display-6">{{ $patologia['name'] }}</h2>
                                <p class="px-5 fw-light mb-5">{{ $patologia['desc'] }}</p>
                                <a href="{{ $patologia['url'] }}" class="btn-custom">scopri di piu</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
</x-layout>
