<x-header :title='__("backend.pageTitle") . " | " . __("web.pageTitle") . " | Eztem Corp"' :metadescription='__("backend.metadescription")' :canonical='__("backend.canonical")' />

<main>
    <div class="container job__container">
        <div class="breadcrums">
            <a href="/" _target="_blank">
                @lang("components.breadcrums.Home")
            </a>
            <span> > </span>
            <a href="/web" _target="_blank">
                @lang("components.breadcrums.Web")
            </a>
            <span> > </span>
            <a href="/web/backend" _target="_blank">
                @lang("components.breadcrums.Back-end")
            </a>
        </div>
        <div class="job__title">
            <h1>
                @lang("backend.title")
            </h1>
        </div>
        <p>
            @lang("backend.description")
        </p>
        <div class="job__cards">

            <div class="job__section">
                <img src="/img/card-images/back-1.webp" alt="only code">
                <ul class="job__list">
                    <li>
                        <p>
                            @lang("backend.card_list.item1.description1")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("backend.card_list.item1.description2")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("backend.card_list.item1.description3")
                        </p>
                    </li>
                </ul>
            </div>
            <div class="job__section">
                <img src="/img/card-images/back-2.webp" alt="only code">
                <ul class="job__list">
                    <li>
                        <p>
                            @lang("backend.card_list.item2.description1")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("backend.card_list.item2.description2")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("backend.card_list.item2.description3")
                        </p>
                    </li>
                </ul>
            </div>
            <div class="job__section">
                <img src="/img/card-images/back-3.webp" alt="only code">
                <ul class="job__list">
                    <li>
                        <p>
                            @lang("backend.card_list.item3.description1")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("backend.card_list.item3.description2")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("backend.card_list.item3.description3")
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <span>
            @lang("backend.quote")
        </span>
        <a href="/web" class="button">
            @lang("backend.button")
        </a>
    </div>
    <x-contact />
</main>
<x-cookie />
<x-footer />
