<x-header :title='__("web.pageTitle") . " | Eztem Corp"' :metadescription='__("web.metadescription")' :canonical="url('/web')" />

<main>
    <div class="container">
        <div class="product">
            <div class="product__text">
                <div class="breadcrums">
                    <a href="{{ URL::localized('/') }}" _target="_blank">
                        @lang("components.breadcrums.Home")
                    </a>
                    <span> > </span>
                    <a href="{{ URL::localized('/web') }}" _target="_blank">
                        @lang("components.breadcrums.Web")
                    </a>
                </div>
                <div class="product__title">
                    <img src="/img/web.webp" alt="web">
                    <h1>
                        @lang("web.title")
                    </h1>
                </div>
            </div>
            <p>
                @lang("web.description1")
            </p>
            <h3>
                @lang("web.description2")
            </h3>
            <div class="product__list">
                <article class="product__item">
                    <img src="/img/illustrations/front-end.webp" alt="front-end">
                    <div class="product__item--text">
                        <ul>
                            <li>
                                <h3>
                                    @lang("web.product_list.item1.title")
                                </h3>
                            </li>
                            <li>
                                <p>
                                    <strong>@lang("web.product_list.item1.description1.bold") </strong>
                                    @lang("web.product_list.item1.description1.text")
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>
                                        @lang("web.product_list.item1.description2.bold")
                                    </strong>
                                    @lang("web.product_list.item1.description2.text")
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>
                                        @lang("web.product_list.item1.description3.bold")
                                    </strong>
                                    @lang("web.product_list.item1.description3.text")
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>
                                        @lang("web.product_list.item1.description4.bold")
                                    </strong>
                                    @lang("web.product_list.item1.description4.text")
                                </p>
                            </li>
                            <li>
                                <a href="{{ URL::localized('web/frontend') }}" class="button" _target="_blank">
                                    @lang("web.product_list.button")
                                </a>
                            </li>
                        </ul>
                    </div>
                </article>
                <article class="product__item">
                    <img src="/img/illustrations/back-end.webp" alt="back-end">
                    <div class="product__item--text">
                        <ul>
                            <li>
                                <h3>
                                    @lang("web.product_list.item2.title")
                                </h3>
                            </li>
                            <li>
                                <p>
                                    <strong>@lang("web.product_list.item2.description1.bold") </strong>
                                    @lang("web.product_list.item2.description1.text")
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>
                                        @lang("web.product_list.item2.description2.bold")
                                    </strong>
                                    @lang("web.product_list.item2.description2.text")
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>
                                        @lang("web.product_list.item2.description3.bold")
                                    </strong>
                                    @lang("web.product_list.item2.description3.text")
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>
                                        @lang("web.product_list.item2.description4.bold")
                                    </strong>
                                    @lang("web.product_list.item2.description4.text")
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>
                                        @lang("web.product_list.item2.description5.bold")
                                    </strong>
                                    @lang("web.product_list.item2.description5.text")
                                </p>
                            </li>
                            <li>
                                <a href="{{ URL::localized('web/backend') }}" class="button" _target="_blank">
                                    @lang("web.product_list.button")
                                </a>
                            </li>
                        </ul>
                    </div>
                </article>
                <article class="product__item">
                    <img src="/img/icons/salesforce.svg" alt="webdesign" style="scale: .8;">
                    <div class="product__item--text">
                        <ul>
                            <li>
                                <h3>
                                    @lang("web.product_list.item3.title")
                                </h3>
                            </li>
                            <li>
                                <p>
                                    <strong>@lang("web.product_list.item3.description1.bold")</strong>
                                    @lang("web.product_list.item3.description1.text")
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>@lang("web.product_list.item3.description2.bold")</strong>
                                    @lang("web.product_list.item3.description2.text")
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>@lang("web.product_list.item3.description3.bold")</strong>
                                    @lang("web.product_list.item3.description3.text")
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>@lang("web.product_list.item3.description4.bold")</strong>
                                    @lang("web.product_list.item3.description4.text")
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>@lang("web.product_list.item3.description5.bold")</strong>
                                    @lang("web.product_list.item3.description5.text")
                                </p>
                            </li>
                            <li>
                                <a href="{{ URL::localized('/web/salesforce') }}" class="button" _target="_blank">
                                    @lang("web.product_list.button")
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
