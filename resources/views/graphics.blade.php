<x-header />
<main>
    <div class="container">
        <div class="product">
            <div class="product__text">
                <div class="product__title">
                    <img src="/img/graphics.webp" alt="graphics">
                    <h1>
                        @lang('graphics.title')
                    </h1>
                </div>
            </div>
            <p>
                @lang('graphics.description1')
            </p>
            <h3>
                @lang('graphics.description2')
            </h3>
            <article class="product__item">
                <img src="/img/front-end.webp" alt="front-end">
                <div class="product__item--text">
                    <ul>
                        <li>
                            <h3>
                                @lang('graphics.product_list.item1.title')
                            </h3>
                        </li>
                        <li>
                            <p>
                                @lang('graphics.product_list.item1.description1')
                            </p>
                        </li>
                        <li>
                            <p>
                                @lang('graphics.product_list.item1.description2')
                            </p>
                        </li>
                        <li>
                            <p>
                                @lang('graphics.product_list.item1.description3')
                            </p>
                        </li>
                        <li>
                            <a href="/graphics/design" class="button" _target="_blank">
                                @lang('graphics.product_list.button')
                            </a>
                        </li>
                    </ul>
                </div>
            </article>
            <article class="product__item">
                <img src="/img/front-end.webp" alt="front-end">
                <div class="product__item--text">
                    <ul>
                        <li>
                            <h3>
                                @lang('graphics.product_list.item2.title')
                            </h3>
                        </li>
                        <li>
                            <p>
                                @lang('graphics.product_list.item2.description1')
                            </p>
                        </li>
                        <li>
                            <p>
                                @lang('graphics.product_list.item2.description2')
                            </p>
                        </li>
                        <li>
                            <p>
                                @lang('graphics.product_list.item2.description3')
                            </p>
                        </li>
                        <li>
                            <a href="/graphics/design" class="button" _target="_blank">
                                @lang('graphics.product_list.button')
                            </a>
                        </li>
                    </ul>
                </div>
            </article>
        </div>
    </div>
</main>
<x-cookie />
<x-footer />