<x-header :title='__("frontend.pageTitle") . " | " . __("web.pageTitle") . " | Eztem Corp"' :metadescription='__("frontend.metadescription")' :canonical="url('/web/frontend')" />

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
            <a href="/web/frontend" _target="_blank">
                @lang("components.breadcrums.Front-end")
            </a>
        </div>
        <div class="job__title">
            <h1>
                @lang("frontend.title")
            </h1>
        </div>
        <p>
            @lang("frontend.description")
        </p>
        <div class="job__cards">
            <div class="job__section">
                <img src="/img/card-images/front-1.webp" alt="only code">
                <ul class="job__list">
                    <li>
                        <p>
                            @lang("frontend.card_list.item1.description1")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("frontend.card_list.item1.description2")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("frontend.card_list.item1.description3")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("frontend.card_list.item1.description4")
                        </p>
                    </li>
                </ul>
            </div>
            <div class="job__section">
                <img src="/img/card-images/front-2.webp" alt="only code">
                <ul class="job__list">
                    <li>
                        <p>
                            @lang("frontend.card_list.item2.description1")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("frontend.card_list.item2.description2")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("frontend.card_list.item2.description3")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("frontend.card_list.item2.description4")
                        </p>
                    </li>
                </ul>
            </div>
            <div class="job__section">
                <img src="/img/card-images/front-3.webp" alt="only code">
                <ul class="job__list">
                    <li>
                        <p>
                            @lang("frontend.card_list.item3.description1")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("frontend.card_list.item3.description2")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("frontend.card_list.item3.description3")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("frontend.card_list.item3.description4")
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <span>
            @lang("frontend.quote")
        </span>
        <a href="/web" class="button">
            @lang("frontend.button")
        </a>
    </div>
    <x-contact />
</main>
<x-cookie />
<x-footer />
