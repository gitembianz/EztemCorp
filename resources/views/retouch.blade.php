<x-header :title='__("retouch.pageTitle") . " | Eztem Corp"' :metadescription='__("retouch.metadescription")' :canonical="url('/retouch')" />

<main>
    <div class="container">
        <div class="product">
            <div class="product__text">
                <div class="breadcrums">
                    <a href="/" _target="_blank">
                        @lang("components.breadcrums.Home")
                    </a>
                    <span> > </span>
                    <a href="/retouch" _target="_blank">
                        @lang("components.breadcrums.Retouch")
                    </a>
                </div>
                <div class="product__title">
                    <img src="/img/retouch.webp" alt="Retouch">
                    <h1>
                        @lang("retouch.title")
                    </h1>
                </div>
            </div>
            <p>
                @lang("retouch.description1")
            </p>
            <h3>
                @lang("retouch.description2")
            </h3>
            <div class="product__list">
                <article class="product__item">
                    <img src="/img/illustrations/photo-correction.webp" alt="front-end">
                    <div class="product__item--text">
                        <ul>
                            <li>
                                <h3>
                                    @lang("retouch.product_list.item1.title")
                                </h3>
                            </li>
                            <li>
                                <p>
                                    <strong>
                                        @lang("retouch.product_list.item1.description1.bold")
                                    </strong>
                                    @lang("retouch.product_list.item1.description1.text")
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>
                                        @lang("retouch.product_list.item1.description2.bold")
                                    </strong>
                                    @lang("retouch.product_list.item1.description2.text")
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>
                                        @lang("retouch.product_list.item1.description3.bold")
                                    </strong>
                                    @lang("retouch.product_list.item1.description3.text")
                                </p>
                            </li>
                            <li>
                                <a href="/retouch/photo" class="button">
                                    @lang("retouch.product_list.button")
                                </a>
                            </li>
                        </ul>
                    </div>
                </article>
                <article class="product__item">
                    <img src="/img/illustrations/photo-manipulation.webp" alt="front-end">
                    <div class="product__item--text">
                        <ul>
                            <li>
                                <h3>
                                    @lang("retouch.product_list.item2.title")
                                </h3>
                            </li>
                            <li>
                                <p>
                                    <strong>
                                        @lang("retouch.product_list.item2.description1.bold")
                                    </strong>
                                    @lang("retouch.product_list.item2.description1.text")
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>
                                        @lang("retouch.product_list.item2.description2.bold")
                                    </strong>
                                    @lang("retouch.product_list.item2.description2.text")
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>
                                        @lang("retouch.product_list.item2.description3.bold")
                                    </strong>
                                    @lang("retouch.product_list.item2.description3.text")
                                </p>
                            </li>
                            <li>
                                <a href="/retouch/manipulation" class="button">
                                    @lang("retouch.product_list.button")
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
