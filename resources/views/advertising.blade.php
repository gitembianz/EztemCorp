<x-header />
<main>
    <div class="container job__container">
        <div class="job__title">
            <img src="/img/ads.svg" alt="Figma Icon">
            <h1>
                @lang('advertising.title')
            </h1>
        </div>
        <p>
            @lang('advertising.description')
        </p>
        <div class="job__cards">
            <div class="job__section">
                <img src="/img/code.webp" alt="only code">
                <ul class="job__list">
                    <li>
                        <p>
                            @lang('advertising.card_list.item1.description1')
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang('advertising.card_list.item1.description2')
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang('advertising.card_list.item1.description3')
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang('advertising.card_list.item1.description4')
                        </p>
                    </li>
                </ul>
            </div>
            <div class="job__section">
                <img src="/img/code.webp" alt="only code">
                <ul class="job__list">
                    <li>
                        <p>
                            @lang('advertising.card_list.item2.description1')
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang('advertising.card_list.item2.description2')
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang('advertising.card_list.item2.description3')
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang('advertising.card_list.item2.description4')
                        </p>
                    </li>
                </ul>
            </div>
            <div class="job__section">
                <img src="/img/code.webp" alt="only code">
                <ul class="job__list">
                    <li>
                        <p>
                            @lang('advertising.card_list.item3.description1')
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang('advertising.card_list.item3.description2')
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang('advertising.card_list.item3.description3')
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang('advertising.card_list.item3.description4')
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <span>
            @lang('advertising.quote')
        </span>
        <a href="/marketing" class="button">
            @lang('advertising.button')
        </a>
    </div>
    <x-contact />
</main>
<x-cookie />
<x-footer />
