<x-header :title='__("marketing.pageTitle") . " | Eztem Corp"' :metadescription='__("marketing.metadescription")' :canonical="url('/marketing')" />

<main>
    <div class="container">
        <div class="product">
            <div class="product__text">
                <div class="breadcrums">
                    <a href="/" _target="_blank">
                        @lang("components.breadcrums.Home")
                    </a>
                    <span> > </span>
                    <a href="/marketing" _target="_blank">
                        @lang("components.breadcrums.Marketing")
                    </a>
                </div>
                <div class="product__title">
                    <img src="/img/marketing.webp" alt="Marketing">
                    <h1>
                        @lang("marketing.title")
                    </h1>
                </div>
            </div>
            <p>
                @lang("marketing.description1")
            </p>
            <h3>
                @lang("marketing.description2")
            </h3>
            <div class="product__list">
                <article class="product__item">
                    <img src="/img/illustrations/ad.webp" alt="front-end">
                    <div class="product__item--text">
                        <ul>
                            <li>
                                <h3>
                                    <strong>
                                        @lang("marketing.product_list.item1.title")
                                    </strong>
                                </h3>
                            </li>
                            <li>
                                <p>
                                    <strong>
                                        @lang("marketing.product_list.item1.description1.bold")
                                    </strong>
                                    @lang("marketing.product_list.item1.description1.text")
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>
                                        @lang("marketing.product_list.item1.description2.bold")
                                    </strong>
                                    @lang("marketing.product_list.item1.description2.text")
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>
                                        @lang("marketing.product_list.item1.description3.bold")
                                    </strong>
                                    @lang("marketing.product_list.item1.description3.text")
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>
                                        @lang("marketing.product_list.item1.description4.bold")
                                    </strong>
                                    @lang("marketing.product_list.item1.description4.text")
                                </p>
                            </li>
                            <li>
                                <a href="/marketing/advertising" class="button">
                                    @lang("marketing.product_list.button")
                                </a>
                            </li>
                        </ul>
                    </div>
                </article>
                <article class="product__item">
                    <img src="/img/illustrations/marketing.webp" alt="front-end">
                    <div class="product__item--text">
                        <ul>
                            <li>
                                <h3>
                                    <strong>
                                        @lang("marketing.product_list.item2.title")
                                    </strong>
                                </h3>
                            </li>
                            <li>
                                <p>
                                    <strong>
                                        @lang("marketing.product_list.item2.description1.bold")
                                    </strong>
                                    @lang("marketing.product_list.item2.description1.text")
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>
                                        @lang("marketing.product_list.item2.description2.bold")
                                    </strong>
                                    @lang("marketing.product_list.item2.description2.text")
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>
                                        @lang("marketing.product_list.item2.description3.bold")
                                    </strong>
                                    @lang("marketing.product_list.item2.description3.text")
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>
                                        @lang("marketing.product_list.item2.description4.bold")
                                    </strong>
                                    @lang("marketing.product_list.item2.description4.text")
                                </p>
                            </li>
                            <li>
                                <a href="/marketing/strategies" class="button">
                                    @lang("marketing.product_list.button")
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
