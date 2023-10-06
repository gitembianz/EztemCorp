<x-header :title='__("graphics.pageTitle") . " | Eztem Corp"' :metadescription='__("graphics.metadescription")' :canonical="url('/graphics')" />

<main>
    <div class="container">
        <div class="product">
            <div class="product__text">
                <div class="breadcrums">
                    <a href="{{ URL::localized('/') }}" _target="_blank">
                        @lang("components.breadcrums.Home")
                    </a>
                    <span> > </span>
                    <a href="{{ URL::localized('/graphics') }}" _target="_blank">
                        @lang("components.breadcrums.Graphics")
                    </a>
                </div>
                <div class="product__title">
                    <img src="/img/graphics.webp" alt="graphics">
                    <h1>
                        @lang("graphics.title")
                    </h1>
                </div>
            </div>
            <p>
                @lang("graphics.description1")
            </p>
            <h3>
                @lang("graphics.description2")
            </h3>
            <div class="product__list">
                <article class="product__item">
                    <img src="/img/illustrations/logo-design.webp" alt="front-end">
                    <div class="product__item--text">
                        <ul>
                            <li>
                                <h3>
                                    @lang("graphics.product_list.item1.title")
                                </h3>
                            </li>
                            <li>
                                <p>
                                    <strong>
                                        @lang("graphics.product_list.item1.description1.bold")
                                    </strong>
                                    @lang("graphics.product_list.item1.description1.text")
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>
                                        @lang("graphics.product_list.item1.description2.bold")
                                    </strong>
                                    @lang("graphics.product_list.item1.description2.text")
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>
                                        @lang("graphics.product_list.item1.description3.bold")
                                    </strong>
                                    @lang("graphics.product_list.item1.description3.text")
                                </p>
                            </li>
                            <li>
                                <a href="{{ URL::localized('/graphics/logo') }}" class="button" _target="_blank">
                                    @lang("graphics.product_list.button")
                                </a>
                            </li>
                        </ul>
                    </div>
                </article>
                <article class="product__item">
                    <img src="/img/illustrations/banner-design.webp" alt="front-end">
                    <div class="product__item--text">
                        <ul>
                            <li>
                                <h3>
                                    @lang("graphics.product_list.item2.title")
                                </h3>
                            </li>
                            <li>
                                <p>
                                    <strong>
                                        @lang("graphics.product_list.item2.description1.bold")
                                    </strong>
                                    @lang("graphics.product_list.item2.description1.text")
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>
                                        @lang("graphics.product_list.item2.description2.bold")
                                    </strong>
                                    @lang("graphics.product_list.item2.description2.text")
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>
                                        @lang("graphics.product_list.item2.description3.bold")
                                    </strong>
                                    @lang("graphics.product_list.item2.description3.text")
                                </p>
                            </li>
                            <li>
                                <a href="{{ URL::localized('/graphics/banners') }}" class="button" _target="_blank">
                                    @lang("graphics.product_list.button")
                                </a>
                            </li>
                        </ul>
                    </div>
                </article>
            </div>
        </div>
    </div>
</main>
<x-cookie />
<x-footer />
