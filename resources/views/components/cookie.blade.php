<div id="cookie-banner" class="hidden">
    <div class="container cookie__container">
        <div class="cookie__description">
            <span>
                @lang("components.cookie_modal.policy_text")
            </span>
            <a href="{{ URL::localized('/cookie') }}">
                @lang("components.cookie_modal.policy_text_link")
            </a>
        </div>
        <form id="cookieForm">
            <div class="cookie__form">
                <div class="cookie__form--container">
                    <label>
                        <input type="checkbox" name="essential" disabled checked>
                        <span>
                            @lang("components.cookie_modal.essential_cookies_text")
                        </span>
                        <p>
                            @lang("components.cookie_modal.essential_cookies_description")
                        </p>
                    </label>
                    <label>
                        <input type="checkbox" name="analytics">
                        <span>
                            @lang("components.cookie_modal.analytical_cookies_text")
                        </span>
                        <p>
                            @lang("components.cookie_modal.analytical_cookies_description")
                        </p>
                    </label>
                    <label>
                        <input type="checkbox" name="marketing">
                        <span>
                            @lang("components.cookie_modal.marketing_cookies_text")
                        </span>
                        <p>
                            @lang("components.cookie_modal.marketing_cookies_description")
                        </p>
                    </label>
                </div>
            </div>
            <div class="cookie-btns">
                <button id="accept-btn" class="button">
                    @lang("components.cookie_modal.accept_button_text")
                </button>
                <button id="advanced-settings" class="button" type="button">
                    @lang("components.cookie_modal.advanced_button_text")
                </button>
                <a href="{{ URL::localized('/cookie') }}" id="decline-btn" class="button">
                    @lang("components.cookie_modal.decline_button_text")
                </a>
            </div>
        </form>
    </div>
</div>
