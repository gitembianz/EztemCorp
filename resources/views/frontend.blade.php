<x-header :title='"Eztem Corp - " . __("frontend.pageTitle")' :metadescription='__("frontend.metadescription")' />

<main>
    <div class="container job__container">
        <div class="job__title">
            <img src="/img/icons/front-end.svg" alt="Front-end-Icon">
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
