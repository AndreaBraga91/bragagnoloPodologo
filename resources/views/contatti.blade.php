<x-layout
    title="Contatti - Studio Podologico AB | Podologo a Legnano"
    description="Contatta il Dr. Bragagnolo Andrea, podologo a Legnano. Prenota una visita presso lo studio in Corso Sempione 119. Orari di apertura e informazioni per appuntamenti."
    ogTitle="Contatti - Studio Podologico AB | Podologo a Legnano"
    ogDescription="Prenota una visita con il Dr. Bragagnolo Andrea, podologo a Legnano. Trova orari, indirizzo e contatti dello studio podologico."
    ogImage="{{ Vite::asset('resources/images/logoAB.svg') }}"
    page="contatti">
        <section class="row vh-100 p-5 justify-content-center">
            <div class="col-12 col-md-6 col-lg-3 m-4 d-flex flex-column justify-content-center align-items-center contatti">
                <h2 class="display-6">Contatti</h2>
                <div>Corso Sempione, 119</div>
                <div>20025 Legnano (MI)</div>
                <a class="link fw-semibold" href="tel:+393408490061" aria-label="Chiama il numero di telefono dello studio">+39 340 8490061</a>
                <a class="link fw-semibold" href="mailto:dottbragagnolo@gmail.com" aria-label="Invia una email al Dr. Bragagnolo">dottbragagnolo@gmail.com</a>
                <a class="" href="https://wa.me/393408490061" aria-label="Contatta il Dr. Bragagnolo su WhatsApp">
                    <img src="{{ Vite::asset('resources/images/WhatsAppButtonWhiteSmall.svg') }}" alt="" class="whatsapp">
                </a>
                <h2 class="mt-3 display-6">Orari di Apertura</h2>
                <div><strong>lun</strong> -> 8:00 - 19:00</div>
                <div><strong>mar</strong> -> 8:00 - 19:00</div>
                <div><strong>mer</strong> -> 8:00 - 19:00</div>
                <div><strong>gio</strong> -> 8:00 - 19:00</div>
                <div><strong>ven</strong> -> 8:00 - 19:00</div>
                <div><strong>sab</strong> -> 8:00 - 19:00</div>
                <div><strong>dom</strong> -> chiuso</div>
                <div class="mt-2"><strong>si riceve solo su appuntamento</strong></div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 map justify-content-center align-items-center order-md-first d-none d-md-flex">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5583.436512913839!2d8.921025676112418!3d45.59620827107636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47868d07714ebcd9%3A0x54c1bd7e3c057264!2sDr.%20Bragagnolo%20Andrea%20Podologo!5e0!3m2!1sit!2sit!4v1739311960964!5m2!1sit!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-12 col-md-5 map-mobile d-flex justify-content-center align-items-center order-md-first d-md-none">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5583.436512913839!2d8.921025676112418!3d45.59620827107636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47868d07714ebcd9%3A0x54c1bd7e3c057264!2sDr.%20Bragagnolo%20Andrea%20Podologo!5e0!3m2!1sit!2sit!4v1739311960964!5m2!1sit!2sit" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
</x-layout>
