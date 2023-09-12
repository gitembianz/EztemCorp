<x-header />
{{-- Pagina "Despre noi" --}}{{-- Page "About Us" --}}
<main>
    {{-- Sectiunea de about --}}{{-- Section of about --}}
    <section class="about">
        <div class=" container about__container">
            <div class="about__title">
                <h1>
                    @lang("about.about.heading")
                </h1>
                <p>
                    @lang("about.about.description")
                </p>
                <img src="../img/about.webp" alt="about our company">
            </div>
            <span class="hero__subtext">
                @lang("about.about.qoute")
            </span>
    </section>
    {{-- Sectiunea de team --}}{{-- Section of team --}}
    <section class="Team">
        <div class="container about__contianer">
            <div class="about__title">
                <h1>@lang("about.team.heading")</h1>
                <div class="about__grid">
                    <div class="about__personalities">
                        <img src="/img/personalities/Mihai.jpg" alt="about our company">
                        <div class="about__personalities--text">
                            <h2>
                                @lang("about.team.card_list.card1.name")
                            </h2>
                            <h3>
                                @lang("about.team.card_list.card1.role")
                            </h3>
                            <p>
                                @lang("about.team.card_list.card1.description")
                            </p>
                        </div>
                    </div>
                    <div class="about__personalities">
                        <img src="/img/personalities/Iosif.jpg" alt="about our company">
                        <div class="about__personalities--text">
                            <h2>
                                @lang("about.team.card_list.card2.name")
                            </h2>
                            <h3>
                                @lang("about.team.card_list.card2.role")
                            </h3>
                            <p>
                                @lang("about.team.card_list.card2.description")
                            </p>
                        </div>
                    </div>
                    <div class="about__personalities">
                        <img src="/img/personalities/Stanislav.jpeg" alt="about our company">
                        <div class="about__personalities--text">
                            <h2>
                                @lang("about.team.card_list.card3.name")
                            </h2>
                            <h3>
                                @lang("about.team.card_list.card3.role")
                            </h3>
                            <p>
                                @lang("about.team.card_list.card3.description")
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span class="hero__subtext">
            @lang("about.team.qoute")
        </span>
    </section>

    {{-- Sectiunea de misiune --}}{{-- Section of mission --}}
    <section class="Mission">
        <div class="container">
            <div class="about__title">
                <h1>
                    @lang("about.mission.heading")
                </h1>
                <p>
                    @lang("about.mission.description")
                </p>
            </div>
            <span class="hero__subtext">
                @lang("about.mission.qoute")
            </span>
        </div>
    </section>

    {{-- Sectiunea de contact --}}{{-- Section of contact --}}
    <x-contact />
</main>
<x-cookie />
<x-footer />
