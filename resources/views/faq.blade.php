<x-header :title='__("faq.pageTitle") . " | Eztem Corp"' :metadescription='__("faq.metadescription")' :canonical="url('/faq')" />

<main>
    <div class="container faq__container">
        <div class="breadcrums">
            <a href="{{ URL::localized('/') }}" _target="_blank">
                @lang("components.breadcrums.Home")
            </a>
            <span> > </span>
            <a href="{{ URL::localized('/web') }}" _target="_blank">
                @lang("components.breadcrums.Faq")
            </a>
        </div>
        <div class="faq__text">
            <h1>
                @lang("faq.heading")
            </h1>
            <p>
                @lang("faq.description1")
            </p>
            <p>
                @lang("faq.description2")
            </p>
            <p>
                @lang("faq.description3")
            </p>
            <p>
                @lang("faq.description4")
            </p>
            <h3>
                @lang("faq.description5")
            </h3>
        </div>
        <div class="faq__accordions">
            <div class="accordion">
                <button class="accordion-button">
                    @lang("faq.accordion_list.accordion_1.question")
                </button>
                <div class="accordion-wrapper">
                    <div class="accordion-content">
                        <p>
                            @lang("faq.accordion_list.accordion_1.answer")
                        </p>
                    </div>
                </div>
            </div>

            <div class="accordion">
                <button class="accordion-button">
                    @lang("faq.accordion_list.accordion_2.question")
                </button>
                <div class="accordion-wrapper">
                    <div class="accordion-content">
                        <p class="accordion-content">
                            @lang("faq.accordion_list.accordion_2.answer")
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion">
                <button class="accordion-button">
                    @lang("faq.accordion_list.accordion_3.question")
                </button>
                <div class="accordion-wrapper">
                    <div class="accordion-content">
                        <p>
                            @lang("faq.accordion_list.accordion_3.answer")
                        </p>
                    </div>
                </div>
            </div>

            <div class="accordion">
                <button class="accordion-button">
                    @lang("faq.accordion_list.accordion_4.question")
                </button>
                <div class="accordion-wrapper">
                    <div class="accordion-content">
                        <p>
                            @lang("faq.accordion_list.accordion_4.answer")
                        </p>
                    </div>
                </div>
            </div>

            <div class="accordion">
                <button class="accordion-button">
                    @lang("faq.accordion_list.accordion_5.question")
                </button>
                <div class="accordion-wrapper">
                    <div class="accordion-content">
                        <p>
                            @lang("faq.accordion_list.accordion_5.answer")
                        </p>
                    </div>
                </div>
            </div>

            <div class="accordion">
                <button class="accordion-button">
                    @lang("faq.accordion_list.accordion_6.question")
                </button>
                <div class="accordion-wrapper">
                    <div class="accordion-content">
                        <p>
                            @lang("faq.accordion_list.accordion_6.answer")
                        </p>
                    </div>
                </div>
            </div>

            <div class="accordion">
                <button class="accordion-button">
                    @lang("faq.accordion_list.accordion_7.question")
                </button>
                <div class="accordion-wrapper">
                    <div class="accordion-content">
                        <p>
                            @lang("faq.accordion_list.accordion_7.answer")
                        </p>
                    </div>
                </div>
            </div>

            <div class="accordion">
                <button class="accordion-button">
                    @lang("faq.accordion_list.accordion_8.question")
                </button>
                <div class="accordion-wrapper">
                    <div class="accordion-content">
                        <p>
                            @lang("faq.accordion_list.accordion_8.answer")
                        </p>
                    </div>
                </div>
            </div>

            <div class="accordion">
                <button class="accordion-button">
                    @lang("faq.accordion_list.accordion_9.question")
                </button>
                <div class="accordion-wrapper">
                    <div class="accordion-content">
                        <p>
                            @lang("faq.accordion_list.accordion_9.answer")
                        </p>
                    </div>
                </div>
            </div>

            <div class="accordion">
                <button class="accordion-button">
                    @lang("faq.accordion_list.accordion_10.question")
                </button>
                <div class="accordion-wrapper">
                    <div class="accordion-content">
                        <p>
                            @lang("faq.accordion_list.accordion_10.answer")
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<x-cookie />
<x-footer />
