<x-header :title='"Eztem Corp - " . __("logo.pageTitle")' :metadescription='__("logo.metadescription")' />

<main>
    <div class="container job__container">
        <div class="breadcrums">
            <a href="/" _target="_blank">
                @lang("components.breadcrums.Home")
            </a>
            <span> > </span>
            <a href="/graphics" _target="_blank">
                @lang("components.breadcrums.Graphics")
            </a>
            <span> > </span>
            <a href="/graphics/logo" _target="_blank">
                @lang("components.breadcrums.Logo")
            </a>
        </div>
        <div class="job__title">
            <img src="/img/icons/logo.svg" alt="Figma Icon">
            <h1>
                @lang("logo.title")
            </h1>
        </div>
        <p>
            @lang("logo.description")
        </p>
        <div class="job__cards">
            <div class="job__section">
                <img src="/img/card-images/logo_maker-1.webp" alt="only code">
                <ul class="job__list">
                    <li>
                        <p>
                            @lang("logo.card_list.item1.description1")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("logo.card_list.item1.description2")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("logo.card_list.item1.description3")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("logo.card_list.item1.description4")
                        </p>
                    </li>
                </ul>
            </div>
            <div class="job__section">
                <img src="/img/card-images/logo_maker-2.webp" alt="only code">
                <ul class="job__list">
                    <li>
                        <p>
                            @lang("logo.card_list.item2.description1")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("logo.card_list.item2.description2")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("logo.card_list.item2.description3")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("logo.card_list.item2.description4")
                        </p>
                    </li>
                </ul>
            </div>
            <div class="job__section">
                <img src="/img/card-images/logo_maker-3.webp" alt="only code">
                <ul class="job__list">
                    <li>
                        <p>
                            @lang("logo.card_list.item3.description1")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("logo.card_list.item3.description2")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("logo.card_list.item3.description3")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("logo.card_list.item3.description4")
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <span>
            @lang("logo.quote")
        </span>
        <a href="/graphics" class="button">
            @lang("logo.button")
        </a>
    </div>
    <x-contact />
</main>
<x-cookie />
<x-footer />
