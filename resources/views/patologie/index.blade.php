<x-layout
    title="Patologie del Piede - Studio Podologico AB | Podologo a Legnano"
    description="Esplora le principali patologie del piede trattate dal Dr. Bragagnolo Andrea. Informazioni dettagliate su diagnosi e trattamenti podologici specializzati."
    ogTitle="Patologie del Piede - Studio Podologico AB | Podologo a Legnano"
    ogDescription="Scopri le patologie del piede trattate nel nostro studio podologico. Informazioni complete su sintomi, diagnosi e trattamenti disponibili."
    ogImage="{{ Vite::asset('resources/images/logoAB.svg') }}"
    page="patologie">
    <section class="row vh-100 align-items-center justify-content-center">
        <div class="col-12 col-md-6">
            <h1 class="text-grey display-3 text-center title">Patologie</h1>
            <div thumbsSlider="" class="swiper mySwiper mt-4" aria-label="Galleria di immagini delle patologie">
                <div class="swiper-wrapper">
                    @foreach ($patologie as $patologia)
                        <div class="swiper-slide">
                            <img src="{{ Vite::asset('resources/images/' . $patologia['img']) }}" alt="Immagine della patologia {{ $patologia['name'] }}" />
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="swiper mySwiper2 mt-4" aria-label="Dettagli delle patologie">
                <div class="swiper-wrapper d-flex">
                    @foreach ($patologie as $patologia)
                        <div class="swiper-slide">
                            <div class="text text-grey">
                                <h2 class="display-6">{{ $patologia['name'] }}</h2>
                                <p class="px-5 fw-light mb-5">{{ $patologia['desc'] }}</p>
                                <a href="{{ $patologia['url'] }}" class="btn-custom" aria-label="Scopri di più su {{ $patologia['name'] }}">scopri di più</a>
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
