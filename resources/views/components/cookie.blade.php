<div id="cookie-banner" class="hidden">
    <div class="container cookie__container">
        <div class="cookie__description">
            <span data-text="cookie_policy_text">
                @lang("components.cookie_modal.policy_text")
            </span>
            <a href="/cookie" data-text="cookies_policy_link_text">
                @lang("components.cookie_modal.policy_text_link")
            </a>
        </div>
        <form id="cookieForm">
            <div class="cookie__form">
                <div class="cookie__form--container">
                    <label>
                        <input type="checkbox" disabled checked>
                        <span data-text="essential_cookies_text">
                            @lang("components.cookie_modal.essential_cookies_text")
                        </span>
                        <p data-text="essential_cookies_description">
                            @lang("components.cookie_modal.essential_cookies_description")
                        </p>
                    </label>
                    <label>
                        <input type="checkbox" name="analytics">
                        <span data-text="analytical_cookies_text">
                            @lang("components.cookie_modal.analytical_cookies_text")
                        </span>
                        <p data-text="analytical_cookies_description">
                            @lang("components.cookie_modal.analytical_cookies_description")
                        </p>
                    </label>
                    <label>
                        <input type="checkbox" name="marketing">
                        <span data-text="marketing_cookies_text">
                            @lang("components.cookie_modal.marketing_cookies_text")
                        </span>
                        <p data-text="marketing_cookies_description">
                            @lang("components.cookie_modal.marketing_cookies_description")
                        </p>
                    </label>
                </div>
            </div>
            <div class="cookie-btns">
                <button id="accept-btn" class="button" data-text="accept_button_text">
                    @lang("components.cookie_modal.accept_button_text")
                </button>
                <button id="advanced-settings" class="button" type="button" data-text="advanced_button_text">
                    @lang("components.cookie_modal.advanced_button_text")
                </button>
                <a href="/cookie" id="decline-btn" class="button" data-text="decline_button_text">
                    @lang("components.cookie_modal.decline_button_text")
                </a>
            </div>
        </form>
    </div>
</div>
