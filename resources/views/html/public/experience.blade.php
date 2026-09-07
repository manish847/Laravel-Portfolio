<x-layout>
     <section class="hero" id="hero">
        <div class="hero-glow hero-glow-1"></div>
        <div class="hero-glow hero-glow-2"></div>
        <div class="hero-glow hero-glow-3"></div>
        <div class="hero-grid"></div>

        <div class="container hero-content">
            <p class="hero-greeting" data-i18n="hero.greeting">Hello, I'm</p>
            <h1 class="hero-name">Manish Pathak</h1>
            <div class="hero-role-wrapper">
                <span class="hero-role" id="typedRole"></span><span class="cursor">|</span>
            </div>
            <p class="hero-subtitle" data-i18n="hero.subtitle">Building scalable web applications with PHP, Laravel,
                WordPress and modern backend technologies.</p>
            <div class="hero-cta">
                <a href="{{ route('projects') }}" class="btn-primary" data-i18n="hero.viewProjects">View Projects</a>
                <a href="{{ route('contact') }}" class="btn-ghost" data-i18n="hero.letsConnect">Let's Connect</a>
            </div>
            <div class="hero-stats">
                <div class="stat">
                    <div class="stat-value">5+</div>
                    <div class="stat-label" data-i18n="hero.stats.years">Years Experience</div>
                </div>
                <div class="stat">
                    <div class="stat-value">100+</div>
                    <div class="stat-label" data-i18n="hero.stats.plugins">Custom Plugins</div>
                </div>
                <div class="stat">
                    <div class="stat-value">50K+</div>
                    <div class="stat-label" data-i18n="hero.stats.users">Monthly Users</div>
                </div>
                <div class="stat">
                    <div class="stat-value">30%</div>
                    <div class="stat-label" data-i18n="hero.stats.performance">DB Performance</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Experience -->
    @includeIf('html.public.common.sub-experience')
</x-layout>