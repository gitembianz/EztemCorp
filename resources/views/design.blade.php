<x-header />
<main>
    <div class="container job__container">
        <div class="job__title">
            {{-- <img src="/img/figma.svg" alt="Figma Icon"> --}}
            <h1>
                @lang("design.title")
            </h1>
        </div>
        <p>
            @lang("design.description")
        </p>
        <div class="job__cards">
            <div class="job__section">
                <img src="/img/card-images/logo_maker-1.jpg" alt="only code">
                <ul class="job__list">
                    <li>
                        <p>
                            @lang("design.card_list.item1.description1")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("design.card_list.item1.description2")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("design.card_list.item1.description3")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("design.card_list.item1.description4")
                        </p>
                    </li>
                </ul>
            </div>
            <div class="job__section">
                <img src="/img/card-images/logo_maker-2.jpg" alt="only code">
                <ul class="job__list">
                    <li>
                        <p>
                            @lang("design.card_list.item2.description1")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("design.card_list.item2.description2")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("design.card_list.item2.description3")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("design.card_list.item2.description4")
                        </p>
                    </li>
                </ul>
            </div>
            <div class="job__section">
                <img src="/img/card-images/logo_maker-3.jpg" alt="only code">
                <ul class="job__list">
                    <li>
                        <p>
                            @lang("design.card_list.item3.description1")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("design.card_list.item3.description2")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("design.card_list.item3.description3")
                        </p>
                    </li>
                    <li>
                        <p>
                            @lang("design.card_list.item3.description4")
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <span>
            @lang("design.quote")
        </span>
        <a href="/graphics" class="button">
            @lang("design.button")
        </a>
    </div>
    <x-contact />
</main>
<x-cookie />
<x-footer />
