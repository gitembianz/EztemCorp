<x-header :title='"Eztem Corp - " . __("strategies.pageTitle")' :metadescription='__("strategies.metadescription")' />

<main>
    <div class="container job__container">
        <div class="breadcrums">
            <a href="/" _target="_blank">
                @lang("components.breadcrums.Home")
            </a>
            <span> > </span>
            <a href="/marketing" _target="_blank">
                @lang("components.breadcrums.Marketing")
            </a>
            <span> > </span>
            <a href="/marketing/strategies" _target="_blank">
                @lang("components.breadcrums.Strategies")
            </a>
        </div>
        <div class="job__title">
            <img src="/img/icons/marketing.svg" alt="Figma Icon">
            <h1>
                @lang("strategies.title")
            </h1>
        </div>
        <p>
            @lang("strategies.description")
        </p>
        <div class="job__cards">
            <div class="job__section">
                <img src="/img/card-images/market-1.webp" alt="only code">
                <ul class="job__list">
                    <li>
                        <p>
                            @lang("strategies.card_list.item1.description1")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("strategies.card_list.item1.description2")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("strategies.card_list.item1.description3")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("strategies.card_list.item1.description4")
                        </p>
                    </li>
                </ul>
            </div>
            <div class="job__section">
                <img src="/img/card-images/market-2.webp" alt="only code">
                <ul class="job__list">
                    <li>
                        <p>
                            @lang("strategies.card_list.item2.description1")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("strategies.card_list.item2.description2")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("strategies.card_list.item2.description3")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("strategies.card_list.item2.description4")
                        </p>
                    </li>
                </ul>
            </div>
            <div class="job__section">
                <img src="/img/card-images/market-3.webp" alt="only code">
                <ul class="job__list">
                    <li>
                        <p>
                            @lang("strategies.card_list.item3.description1")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("strategies.card_list.item3.description2")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("strategies.card_list.item3.description3")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("strategies.card_list.item3.description4")
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <span>
            @lang("strategies.quote")
        </span>
        <a href="/marketing" class="button">
            @lang("strategies.button")
        </a>
    </div>
    <x-contact />
</main>
<x-cookie />
<x-footer />
