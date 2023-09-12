<x-header />
{{-- Pagina "Despre noi" --}}{{-- Page "About Us" --}}
<main>
    <h1>
        Mersi mult de confirmare
    </h1>
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
