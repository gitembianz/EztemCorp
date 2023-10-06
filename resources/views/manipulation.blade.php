<x-header :title='__("manipulation.pageTitle") . " | " . __("retouch.pageTitle") . " | Eztem Corp"' :metadescription='__("manipulation.metadescription")' :canonical="url('/retouch/manipulation')" />

<main>
    <div class="container job__container">
        <div class="breadcrums">
            <a href="/" _target="_blank">
                @lang("components.breadcrums.Home")
            </a>
            <span> > </span>
            <a href="/retouch" _target="_blank">
                @lang("components.breadcrums.Retouch")
            </a>
            <span> > </span>
            <a href="/retouch/manipulation" _target="_blank">
                @lang("components.breadcrums.Manipulation")
            </a>
        </div>
        <div class="job__title">
            <h1>
                @lang("manipulation.title")
            </h1>
        </div>
        <p>
            @lang("manipulation.description")
        </p>
        <div class="job__cards">
            <div class="job__section">
                <img src="/img/card-images/manipulation-1.webp" alt="only code">
                <ul class="job__list">
                    <li>
                        <p>
                            @lang("manipulation.card_list.item1.description1")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("manipulation.card_list.item1.description2")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("manipulation.card_list.item1.description3")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("manipulation.card_list.item1.description4")
                        </p>
                    </li>
                </ul>
            </div>
            <div class="job__section">
                <img src="/img/card-images/manipulation-2.webp" alt="only code">
                <ul class="job__list">
                    <li>
                        <p>
                            @lang("manipulation.card_list.item2.description1")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("manipulation.card_list.item2.description2")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("manipulation.card_list.item2.description3")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("manipulation.card_list.item2.description4")
                        </p>
                    </li>
                </ul>
            </div>
            <div class="job__section">
                <img src="/img/card-images/manipulation-3.webp" alt="only code">
                <ul class="job__list">
                    <li>
                        <p>
                            @lang("manipulation.card_list.item3.description1")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("manipulation.card_list.item3.description2")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("manipulation.card_list.item3.description3")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("manipulation.card_list.item3.description4")
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <span>
            @lang("manipulation.quote")
        </span>
        <a href="/retouch" class="button">
            @lang("manipulation.button")
        </a>
    </div>
    <x-contact />
</main>
<x-cookie />
<x-footer />
