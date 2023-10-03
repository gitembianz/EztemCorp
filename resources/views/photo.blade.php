<x-header :title='__("photo.pageTitle") . " | " . __("retouch.pageTitle") . " | Eztem Corp"' :metadescription='__("photo.metadescription")' :canonical="url('/photo')" />

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
            <a href="/retouch/photo" _target="_blank">
                @lang("components.breadcrums.Correction")
            </a>
        </div>
        <div class="job__title">
            <h1>
                @lang("photo.title")
            </h1>
        </div>
        <p>
            @lang("photo.description")
        </p>
        <div class="job__cards">
            <div class="job__section">
                <img src="/img/card-images/correction-1.webp" alt="only code">
                <ul class="job__list">
                    <li>
                        <p>
                            @lang("photo.card_list.item1.description1")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("photo.card_list.item1.description2")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("photo.card_list.item1.description3")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("photo.card_list.item1.description4")
                        </p>
                    </li>
                </ul>
            </div>
            <div class="job__section">
                <img src="/img/card-images/correction-2.webp" alt="only code">
                <ul class="job__list">
                    <li>
                        <p>
                            @lang("photo.card_list.item2.description1")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("photo.card_list.item2.description2")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("photo.card_list.item2.description3")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("photo.card_list.item2.description4")
                        </p>
                    </li>
                </ul>
            </div>
            <div class="job__section">
                <img src="/img/card-images/correction-3.webp" alt="only code">
                <ul class="job__list">
                    <li>
                        <p>
                            @lang("photo.card_list.item3.description1")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("photo.card_list.item3.description2")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("photo.card_list.item3.description3")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("photo.card_list.item3.description4")
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <span>
            @lang("photo.quote")
        </span>
        <a href="/retouch" class="button">
            @lang("photo.button")
        </a>
    </div>
    <x-contact />
</main>
<x-cookie />
<x-footer />
