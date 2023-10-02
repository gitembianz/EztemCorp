<x-header :title='__("components.contact.pageTitle") . " | Eztem Corp"' :metadescription='__("components.contact.metadescription")' :canonical='__("components.contact.canonical")' />
<main>
    {{-- Sectiunea de contact --}}
    <div class="container job__container">
        <div class="breadcrums">
            <a href="/" _target="_blank">
                @lang("components.breadcrums.Home")
            </a>
            <span> > </span>
            <a href="/contact" _target="_blank">
                @lang("components.breadcrums.Contact")
            </a>
        </div>
    </div>
    {{-- Section of contact --}}
    <x-contact />
</main>
<x-cookie />
<x-footer />
