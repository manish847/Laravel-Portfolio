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
        </div>
    </section>
    <!-- ===== GLASS CARDS ===== -->
    <section class="section" id="glass">
        <div class="container">
        <div class="section-heading" data-aos="fade-up">
            <span class="section-tag tag-blue">/ GLASSMORPHISM SYSTEM</span>
            <h2 class="section-title">Layered. Translucent. Alive.</h2>
        </div>
        <div class="cards-grid">
            <div class="glass-card gc-1" data-aos="fade-up">
            <div class="glass-card-glow"></div>
            <div class="glass-card-inner">
                <div class="glass-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 3-1.9 5.8a2 2 0 0 1-1.3 1.3L3 12l5.8 1.9a2 2 0 0 1 1.3 1.3L12 21l1.9-5.8a2 2 0 0 1 1.3-1.3L21 12l-5.8-1.9a2 2 0 0 1-1.3-1.3Z"/></svg>
                </div>
                <h3>Glassmorphism</h3>
                <p>Frosted glass aesthetics with backdrop blur and layered transparency.</p>
            </div>
            <div class="glass-card-line"></div>
            </div>
            <div class="glass-card gc-2" data-aos="fade-up" data-aos-delay="100">
            <div class="glass-card-glow"></div>
            <div class="glass-card-inner">
                <div class="glass-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"/></svg>
                </div>
                <h3>Micro-interactions</h3>
                <p>Every element responds — hover states, ripples, spring physics.</p>
            </div>
            <div class="glass-card-line"></div>
            </div>
            <div class="glass-card gc-3" data-aos="fade-up" data-aos-delay="200">
            <div class="glass-card-glow"></div>
            <div class="glass-card-inner">
                <div class="glass-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"/><path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"/><path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"/></svg>
                </div>
                <h3>Depth & Layering</h3>
                <p>Multiple z-index planes with parallax and perspective transforms.</p>
            </div>
            <div class="glass-card-line"></div>
            </div>
            <div class="glass-card gc-4" data-aos="fade-up" data-aos-delay="300">
            <div class="glass-card-glow"></div>
            <div class="glass-card-inner">
                <div class="glass-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="16" height="16" x="4" y="4" rx="2"/><path d="M9 9h6v6H9z"/><path d="M9 2v2"/><path d="M15 2v2"/><path d="M9 20v2"/><path d="M15 20v2"/><path d="M2 9h2"/><path d="M2 15h2"/><path d="M20 9h2"/><path d="M20 15h2"/></svg>
                </div>
                <h3>Performance-first</h3>
                <p>GPU-accelerated transforms, no layout thrashing, 60fps animations.</p>
            </div>
            <div class="glass-card-line"></div>
            </div>
        </div>
        </div>
    </section>

    <!-- ===== INTERACTION LAB ===== -->
    <section class="section section-alt" id="interactions">
        <div class="container">
        <div class="section-heading" data-aos="fade-up">
            <span class="section-tag tag-violet">/ INTERACTION LAB</span>
            <h2 class="section-title">Feel the Response</h2>
        </div>

        <div class="tabs" data-aos="fade-up" data-aos-delay="100">
            <button class="tab active" data-tab="hover">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 11V6a2 2 0 0 0-2-2a2 2 0 0 0-2 2"/><path d="M14 10V4a2 2 0 0 0-2-2a2 2 0 0 0-2 2v2"/><path d="M10 10.5V6a2 2 0 0 0-2-2a2 2 0 0 0-2 2v8"/><path d="M18 8a2 2 0 1 1 4 0v6a8 8 0 0 1-8 8h-2c-2.8 0-4.5-.86-5.99-2.34l-3.6-3.6a2 2 0 0 1 2.83-2.82L7 15"/></svg>
            <span>Hover States</span>
            </button>
            <button class="tab" data-tab="click">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 9h.01"/><path d="M14 9h.01"/><path d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20Z"/></svg>
            <span>Click Ripple</span>
            </button>
            <button class="tab" data-tab="toggle">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.376 3.622a1 1 0 0 1 3.002 3.002L7.368 18.635a4 4 0 0 1-2.082 1.082l-3.116.74 4-4a4 4 0 0 1 1.082-2.082z"/></svg>
            <span>Toggle Switch</span>
            </button>
            <button class="tab" data-tab="drag">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 9V7a2 2 0 0 1 2-2h2"/><path d="M15 5h2a2 2 0 0 1 2 2v2"/><path d="M19 15v2a2 2 0 0 1-2 2h-2"/><path d="M9 19H7a2 2 0 0 1-2-2v-2"/></svg>
            <span>Drag Card</span>
            </button>
        </div>

        <div class="lab-canvas" data-aos="fade-up" data-aos-delay="200">
            <!-- Hover Panel -->
            <div class="lab-panel active" id="panel-hover">
            <div class="hover-grid">
                <div class="hover-tile">01</div>
                <div class="hover-tile">02</div>
                <div class="hover-tile">03</div>
                <div class="hover-tile">04</div>
                <div class="hover-tile">05</div>
                <div class="hover-tile">06</div>
            </div>
            </div>

            <!-- Click Ripple Panel -->
            <div class="lab-panel" id="panel-click">
            <div class="ripple-btn" id="rippleBtn">
                <span>Click Anywhere</span>
            </div>
            </div>

            <!-- Toggle Panel -->
            <div class="lab-panel" id="panel-toggle">
            <div class="toggle-wrap">
                <div class="toggle-switch" id="toggleSwitch">
                <div class="toggle-knob"></div>
                </div>
                <span class="toggle-label" id="toggleLabel">DORMANT</span>
            </div>
            </div>

            <!-- Drag Panel -->
            <div class="lab-panel" id="panel-drag">
            <div class="drag-area" id="dragArea">
                <div class="drag-card" id="dragCard" draggable="true">Drag Me</div>
                <span class="drag-hint">Drag the card around</span>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- ===== TYPOGRAPHY & COLOR ===== -->
    <section class="section" id="typography">
        <div class="container">
        <div class="section-heading" data-aos="fade-up">
            <span class="section-tag tag-cyan">/ DESIGN TOKENS</span>
            <h2 class="section-title">Typography & Color</h2>
        </div>

        <div class="type-scale">
            <div class="type-row" data-aos="fade-right">
            <span class="type-sample type-display">Aa</span>
            <div class="type-info">
                <div class="type-name">Display</div>
                <div class="type-detail">Space Grotesk / 700</div>
            </div>
            </div>
            <div class="type-row" data-aos="fade-right" data-aos-delay="80">
            <span class="type-sample type-heading">Aa</span>
            <div class="type-info">
                <div class="type-name">Heading</div>
                <div class="type-detail">Space Grotesk / 600</div>
            </div>
            </div>
            <div class="type-row" data-aos="fade-right" data-aos-delay="160">
            <span class="type-sample type-sub">Aa</span>
            <div class="type-info">
                <div class="type-name">Subheading</div>
                <div class="type-detail">Space Grotesk / 500</div>
            </div>
            </div>
            <div class="type-row" data-aos="fade-right" data-aos-delay="240">
            <span class="type-sample type-body">Aa</span>
            <div class="type-info">
                <div class="type-name">Body</div>
                <div class="type-detail">Inter / 400</div>
            </div>
            </div>
            <div class="type-row" data-aos="fade-right" data-aos-delay="320">
            <span class="type-sample type-mono">Aa</span>
            <div class="type-info">
                <div class="type-name">Mono</div>
                <div class="type-detail">JetBrains / 400</div>
            </div>
            </div>
        </div>

        <div class="palette-grid" data-aos="fade-up">
            <div class="palette-card"><div class="palette-swatch sw-1"></div><div class="palette-name">Deep Space</div><div class="palette-hex">#050816</div></div>
            <div class="palette-card"><div class="palette-swatch sw-2"></div><div class="palette-name">Electric Blue</div><div class="palette-hex">#3B82F6</div></div>
            <div class="palette-card"><div class="palette-swatch sw-3"></div><div class="palette-name">Royal Violet</div><div class="palette-hex">#8B5CF6</div></div>
            <div class="palette-card"><div class="palette-swatch sw-4"></div><div class="palette-name">Cyber Cyan</div><div class="palette-hex">#06B6D4</div></div>
            <div class="palette-card"><div class="palette-swatch sw-5"></div><div class="palette-name">Mint Pulse</div><div class="palette-hex">#34D399</div></div>
            <div class="palette-card"><div class="palette-swatch sw-6"></div><div class="palette-name">Solar Amber</div><div class="palette-hex">#F59E0B</div></div>
        </div>
        </div>
    </section>

    <!-- ===== CTA ===== -->
    <section class="section section-alt cta-section">
        <div class="cta-glow"></div>
        <div class="container cta-content">
        <h2 class="cta-title" data-aos="fade-up">This is what I build.</h2>
        <p class="cta-sub" data-aos="fade-up" data-aos-delay="100">Every pixel purposeful. Every interaction intentional. Every animation smooth at 60fps.</p>
        <a href="/" class="btn-grad btn-glow" data-aos="fade-up" data-aos-delay="200">
            Back to Portfolio
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
        </a>
        </div>
    </section>
</x-layout>