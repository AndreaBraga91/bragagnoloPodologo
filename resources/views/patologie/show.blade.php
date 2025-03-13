<x-layout
    title="{{ $patologie[$name]['name'] }} - Studio Podologico AB | Podologo a Legnano"
    description="{{ $patologie[$name]['name'] }}, Scopri sintomi, cause e trattamenti disponibili presso lo Studio Podologico AB."
    ogTitle="{{ $patologie[$name]['name'] }} - Studio Podologico AB"
    ogDescription="{{ $patologie[$name]['name'] }}, Consulta il Dr. Bragagnolo Andrea per diagnosi e trattamenti professionali."
    ogImage="{{ Vite::asset('resources/images/' . $patologie[$name]['img']) }}"
    page="patologie-show">
    <div class="row vh-100 align-items-center justify-content-center">
        <div class="col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center align-items-md-start mt-5 mt-md-0">
            <a class="back" href="/patologie" aria-label="Torna alla pagina delle patologie">
                < torna alle patologie</a>
                    <img src="{{ Vite::asset('resources/images/' . $patologie[$name]['img']) }}" alt="{{ $name }}"
                        class="img-fluid img-patologia mt-2">
        </div>
        <div class="col-12 col-md-8 col-lg-5 p-5">
            <h1 class="display-6">{{$patologie[$name]['name']}}</h1>
            <div class="accordion1">
                <div class="accordion1-item">
                    <button id="accordion1-button-1" aria-expanded="false" aria-label="Mostra le cause di {{$patologie[$name]['name']}}"><span class="accordion1-title">Cause</span><span class="icon" aria-hidden="true"></span></button>
                    <div class="accordion1-content">
                        <p>{{$patologie[$name]["cause"]}}</p>
                    </div>
                </div>
                <div class="accordion1-item">
                    <button id="accordion1-button-2" aria-expanded="false" aria-label="Mostra i sintomi di {{$patologie[$name]['name']}}"><span class="accordion1-title">Sintomi</span><span class="icon" aria-hidden="true"></span></button>
                    <div class="accordion1-content">
                        <p>{{$patologie[$name]["sintomi"]}}</p>
                    </div>
                </div>
                <div class="accordion1-item">
                    <button id="accordion1-button-3" aria-expanded="false" aria-label="Mostra le terapie per {{$patologie[$name]['name']}}"><span class="accordion1-title">Terapie</span><span class="icon" aria-hidden="true"></span></button>
                    <div class="accordion1-content">
                        <p>{{$patologie[$name]["cura"]}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
