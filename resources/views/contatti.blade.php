<x-layout data-page="contatti">
    <div class="container">

        <section class="row vh-100 p-5 justify-content-center">
            <div class="col-12 col-md-5 d-flex flex-column justify-content-center align-items-center contatti">
                <h2 class="display-6">Contatti</h2>
                <div>Via Amerigo Vesdivucci, 9</div>
                <div>20025 Legnano (MI)</div>
                <a class="link fw-semibold" href="tel:+393474960371">+39 347 4960371</a>
                <a class="link fw-semibold" href="mailto:info@podologobragagnolo.it">info@podologobragagnolo.it</a>
                <a class="" href="https://wa.me/393474960371">
                    <img src="{{ Vite::asset('resources/images/WhatsAppButtonWhiteSmall.svg') }}" alt="" class="whatsapp">
                </a>
                <h2 class="mt-3 display-6">Orari di Apertura</h2>
                <div><strong>lun</strong> -> solo appuntamento</div>
                <div><strong>mar</strong> -> solo appuntamento</div>
                <div><strong>mer</strong> -> solo appuntamento</div>
                <div><strong>gio</strong> -> solo appuntamento</div>
                <div><strong>ven</strong> -> solo appuntamento</div>
                <div><strong>sab</strong> -> solo appuntamento</div>
                <div><strong>dom</strong> -> chiuso</div>
            </div>
            <div class="col-12 col-md-5 map justify-content-center align-items-center order-md-first d-none d-md-flex">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5583.436512913839!2d8.921025676112418!3d45.59620827107636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47868d07714ebcd9%3A0x54c1bd7e3c057264!2sDr.%20Bragagnolo%20Andrea%20Podologo!5e0!3m2!1sit!2sit!4v1739311960964!5m2!1sit!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-12 col-md-5 map-mobile d-flex justify-content-center align-items-center order-md-first d-md-none">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5583.436512913839!2d8.921025676112418!3d45.59620827107636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47868d07714ebcd9%3A0x54c1bd7e3c057264!2sDr.%20Bragagnolo%20Andrea%20Podologo!5e0!3m2!1sit!2sit!4v1739311960964!5m2!1sit!2sit" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </div>
</x-layout>
