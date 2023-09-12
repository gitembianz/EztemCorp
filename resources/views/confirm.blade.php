<x-header />
{{-- Pagina "Despre noi" --}}{{-- Page "About Us" --}}
<main>
    <div class="container succes__container">
        <h1>
            Vă mulțumim mult pentru trimiterea formularului.
        </h1>
        <h3>
            Veți fi redirecționat la pagina de start în 5 secunde.
        </h3>
        <div class="loadingio-spinner-dual-ball-8eksdpgpyip">
            <div class="ldio-sl0v29xbypi">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>

    </div>
    <script>
        // Așteaptă 5 secunde (5000 milisecunde) și apoi face redirect către o altă pagină
        setTimeout(function() {
            window.location.href =
                "/"; // Schimbă "pagina_de_redirect.html" cu adresa URL către care vrei să faci redirect
        }, 5000);
    </script>
</main>
<x-cookie />
<x-footer />
