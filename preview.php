<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Dentistry Brno — Preview</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- NAVIGATION -->
<nav class="site-nav" id="site-nav">
    <div class="container">
        <div class="nav-inner">
            <a href="#" class="nav-logo">
                <svg viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14 3C14 3 7 7.5 7 14.5C7 19.5 10.134 24.5 14 24.5C17.866 24.5 21 19.5 21 14.5C21 7.5 14 3 14 3Z" stroke="currentColor" stroke-width="1.5" fill="none"/>
                    <path d="M11 14.5C11 14.5 12.5 17 14 17C15.5 17 17 14.5 17 14.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
                Smart Dentistry
            </a>
            <ul class="nav-links">
                <li><a href="#zubar">Zubař</a></li>
                <li><a href="#hygiena">Dentální hygiena</a></li>
                <li><a href="#beleni">Bělení zubů</a></li>
                <li><a href="#cenik">Ceník</a></li>
                <li><a href="#tym">Tým</a></li>
                <li><a href="#kontakt">Kontakt</a></li>
            </ul>
            <div class="nav-cta">
                <a href="tel:+420725345704" class="nav-phone">+420 725 345 704</a>
                <a href="#kontakt" class="btn btn--gold btn--sm">Objednat se</a>
                <div class="nav-hamburger" id="nav-hamburger">
                    <span></span><span></span><span></span>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- MOBILE MENU -->
<div class="mobile-menu" id="mobile-menu">
    <button class="mobile-close" id="mobile-close">✕</button>
    <a href="#zubar">Zubař</a>
    <a href="#hygiena">Dentální hygiena</a>
    <a href="#beleni">Bělení zubů</a>
    <a href="#cenik">Ceník</a>
    <a href="#tym">Tým</a>
    <a href="#kontakt">Kontakt</a>
    <a href="tel:+420725345704" class="btn btn--gold btn--lg" style="margin-top:1rem; justify-content:center;">Zavolat: +420 725 345 704</a>
</div>

<!-- ============================================================
     HERO
     ============================================================ -->
<section class="hero">
    <div class="hero-bg">
        <div class="hero-bg-placeholder">📷 Foto: Interiér kliniky / pacientka s úsměvem</div>
    </div>
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <div class="container">
            <div class="hero-tag">
                <span class="hero-tag-dot"></span>
                Přijímáme nové pacienty · Termín do 48 h
            </div>
            <h1 class="hero-headline">
                Váš zubař<br>v centru<br><em>Brna.</em>
            </h1>
            <p class="hero-sub">
                Moderní stomatologie, dentální hygiena a profesionální bělení zubů.
                Flexibilní ordinační hodiny, parkování u dveří a bezbolestné ošetření.
            </p>
            <div class="hero-ctas">
                <a href="tel:+420725345704" class="btn btn--gold btn--lg">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 11a19.79 19.79 0 01-3.07-8.67A2 2 0 012 .18h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 14.92z"/></svg>
                    +420 725 345 704
                </a>
                <a href="#kontakt" class="btn btn--outline-white btn--lg">Objednat se online</a>
            </div>
            <div class="hero-badges">
                <div class="hero-badge">
                    <div class="hero-badge-icon">🕐</div>
                    <span>Flexibilní hodiny<br><strong style="color:rgba(255,255,255,.85)">Po–Pá 8:00–20:00</strong></span>
                </div>
                <div class="hero-badge">
                    <div class="hero-badge-icon">🅿️</div>
                    <span>Parkování<br><strong style="color:rgba(255,255,255,.85)">U dveří zdarma</strong></span>
                </div>
                <div class="hero-badge">
                    <div class="hero-badge-icon">📅</div>
                    <span>Termín<br><strong style="color:rgba(255,255,255,.85)">Do 48 hodin</strong></span>
                </div>
                <div class="hero-badge">
                    <div class="hero-badge-icon">🏥</div>
                    <span>Pojišťovny<br><strong style="color:rgba(255,255,255,.85)">90 % hradí</strong></span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TRUST BAR -->
<div class="trust-bar">
    <div class="container">
        <div class="trust-bar-inner">
            <div class="trust-item"><span class="trust-item-icon">⭐</span><span><strong style="color:white">4.9/5</strong> &nbsp;Google recenze</span></div>
            <div class="trust-divider"></div>
            <div class="trust-item"><span class="trust-item-icon">🦷</span><span>Zubař + Hygiena + Bělení <strong style="color:white">na jednom místě</strong></span></div>
            <div class="trust-divider"></div>
            <div class="trust-item"><span class="trust-item-icon">💉</span><span><strong style="color:white">Bezbolestné</strong> ošetření</span></div>
            <div class="trust-divider"></div>
            <div class="trust-item"><span class="trust-item-icon">🔬</span><span>CBCT <strong style="color:white">3D sken</strong> — nejpřesnější diagnóza</span></div>
            <div class="trust-divider"></div>
            <div class="trust-item"><span class="trust-item-icon">📍</span><span><strong style="color:white">Centrum Brna</strong> — Dominikánská</span></div>
        </div>
    </div>
</div>

<!-- ============================================================
     ZUBAŘ
     ============================================================ -->
<section class="section zubar-story" id="zubar">
    <div class="container">
        <div class="grid-2">
            <div class="reveal">
                <span class="label">Zubař Brno</span>
                <h2 class="display-lg" style="margin-block:.75rem 1.25rem;">
                    Víme o vašich zubech víc,<br>než vidíte v zrcadle.
                </h2>
                <p class="body-lg">Moderní zubní péče není jen o léčbě toho, co bolí. Jde o zachycení problémů dřív, než vůbec začnou. Proto kombinujeme tradiční péči s nejmodernější technologií.</p>
                <div class="story-callout">
                    <strong>Skutečný příběh pacienta:</strong> „Zub mě nebolel. Vypadal perfektně. Ale pod povrchem byl problém, který by ho zničil do roka. Díky 3D skenu jsme ho zachránili včas."
                    <br><small style="color:var(--gray-label);font-style:normal;font-size:.8rem;margin-top:.5rem;display:block;">— Jan K., pacient Smart Dentistry</small>
                </div>
                <ul class="feature-list">
                    <li class="feature-item"><span class="feature-check">✓</span><span><strong>Vstupní prohlídka</strong> — kompletní vyšetření chrupu, RTG snímky, plán léčby</span></li>
                    <li class="feature-item"><span class="feature-check">✓</span><span><strong>CBCT 3D sken</strong> — odhalí záněty, skryté kořenové problémy i nádory, které rentgen přehlédne</span></li>
                    <li class="feature-item"><span class="feature-check">✓</span><span><strong>Bezbolestné ošetření</strong> — moderní anestetika, žádný zbytečný diskomfort</span></li>
                    <li class="feature-item"><span class="feature-check">✓</span><span><strong>Kontrola uzlin a sliznic</strong> — včasná detekce karcinomu dutiny ústní</span></li>
                    <li class="feature-item"><span class="feature-check">✓</span><span><strong>Hrazeno pojišťovnou</strong> — 90 % zdravotních pojišťoven hradí preventivní prohlídky</span></li>
                </ul>
                <div class="cbct-card">
                    <span class="label">Technologie</span>
                    <h4>CBCT — 3D sken zubů</h4>
                    <p>Běžný rentgen ukazuje 2D obrázek. CBCT sken vytvoří přesný 3D model vaší čelisti — vidíme každý kořen, každý záhyb, každý skrytý problém.</p>
                </div>
                <div class="insurance-badge">🏥 Hrazeno 90 % zdravotních pojišťoven</div>
                <div style="margin-top:2rem;">
                    <a href="tel:+420725345704" class="btn btn--primary btn--lg">Objednat se — termín do 48 h</a>
                </div>
            </div>
            <div class="reveal reveal-delay-2">
                <div class="photo-placeholder photo-placeholder--3-4" style="border-radius:2px; box-shadow:var(--shadow-lg);">
                    <span class="photo-placeholder-icon">👨‍⚕️</span>
                    <span>Foto: Zubař při vyšetření</span>
                </div>
                <div style="background:var(--white); border:1px solid var(--gray-mid); border-radius:var(--radius); padding:1.5rem; margin-top:1.5rem; box-shadow:var(--shadow-sm); display:flex; align-items:center; gap:1rem;">
                    <div style="width:48px; height:48px; background:var(--gold-bg); border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:1.3rem; flex-shrink:0;">📅</div>
                    <div>
                        <div style="font-weight:700; font-size:.95rem; margin-bottom:.2rem;">Termín do 48 hodin</div>
                        <div style="font-size:.82rem; color:var(--gray-text);">Přijímáme nové pacienty. Zavolejte nebo se objednejte online.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     CTA BAND 1
     ============================================================ -->
<section class="cta-band">
    <div class="container container--narrow">
        <div class="reveal">
            <span class="label" style="color:var(--gold-light);">Přijímáme nové pacienty</span>
            <h2 style="margin-block:1rem 1rem;">Váš úsměv je první,<br>co si lidé <em>všimnou.</em></h2>
            <p>Termín do 48 hodin. Parkování u dveří. Flexibilní hodiny.<br>Zubař v centru Brna, na kterého se můžete spolehnout.</p>
            <div class="cta-band-btns">
                <a href="tel:+420725345704" class="btn btn--gold btn--lg">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 11a19.79 19.79 0 01-3.07-8.67A2 2 0 012 .18h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 14.92z"/></svg>
                    Zavolat — +420 725 345 704
                </a>
                <a href="#hygiena" class="btn btn--outline-white btn--lg">Dentální hygiena 1 490 Kč</a>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     DENTÁLNÍ HYGIENA
     ============================================================ -->
<section class="section" id="hygiena" style="background:var(--white);">
    <div class="container">
        <div class="section-header reveal">
            <span class="label">Dentální hygiena</span>
            <h2 class="display-lg" style="margin-block:.75rem 1rem;">2× ročně hygiena.<br>Žádné překvapení<br>u zubaře.</h2>
            <p>Dentální hygiena je nejlepší prevence. Odstraní zubní kámen, plak a pigmentaci, které běžný kartáček nedostane.</p>
        </div>
        <div class="grid-2" style="gap:5rem;">
            <div class="reveal">
                <div style="background:var(--cream); border-radius:var(--radius); padding:1.75rem; margin-bottom:2rem; border:1px solid var(--gray-mid);">
                    <span class="label">Cena za návštěvu</span>
                    <div class="price-highlight">
                        <span class="price-amount">1 490</span>
                        <span class="price-currency">Kč</span>
                        <span class="price-note">· termín do 48 h</span>
                    </div>
                    <p style="font-size:.875rem; color:var(--gray-text); margin-top:.5rem;">Komplexní hygiena včetně leštění a fluoridace. Délka: 60–90 minut.</p>
                    <div style="display:flex; gap:.75rem; margin-top:1.25rem; flex-wrap:wrap;">
                        <a href="tel:+420725345704" class="btn btn--primary">Objednat se</a>
                        <span style="display:inline-flex; align-items:center; gap:.4rem; font-size:.8rem; color:var(--gray-label); font-weight:500;">📅 Nejbližší termín do 48 h</span>
                    </div>
                </div>
                <h3 class="display-sm" style="margin-bottom:1.5rem;">Co se při hygieně děje?</h3>
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-dot">1</div>
                        <div class="timeline-text"><h5>Vyšetření chrupu a dásní</h5><p>Posoudíme stav vašich zubů, dásní a odhalíme záněty nebo počínající kaz.</p></div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot">2</div>
                        <div class="timeline-text"><h5>Odstranění zubního kamene</h5><p>Ultrazvukem a ručními nástroji odstraníme veškerý plak a zubní kámen.</p></div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot">3</div>
                        <div class="timeline-text"><h5>Pískování a leštění</h5><p>Airflow technologie odstraní pigmentaci od kávy, čaje a vína. Zuby jsou okamžitě hladší a světlejší.</p></div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot">4</div>
                        <div class="timeline-text"><h5>Fluoridace a instrukce</h5><p>Zpevníme sklovinu fluoridem a naučíme vás, jak správně čistit doma.</p></div>
                    </div>
                </div>
                <div style="background:var(--dark); border-radius:var(--radius); padding:1.5rem; margin-top:1rem; display:flex; align-items:center; gap:1.25rem;">
                    <div style="font-size:2rem; flex-shrink:0;">🦷</div>
                    <div>
                        <div style="font-weight:700; color:white; margin-bottom:.3rem; font-size:1rem;">Dentální hygiena 1 490 Kč</div>
                        <div style="font-size:.85rem; color:rgba(255,255,255,.6);">Přijímáme nové pacienty · Brno centrum</div>
                    </div>
                    <a href="tel:+420725345704" class="btn btn--gold btn--sm" style="margin-left:auto; flex-shrink:0;">Objednat</a>
                </div>
            </div>
            <div class="reveal reveal-delay-2" style="display:flex; flex-direction:column; gap:1.5rem;">
                <div>
                    <span class="label" style="display:block; margin-bottom:.75rem;">Výsledky — Před a Po</span>
                    <div class="before-after-container">
                        <div class="before-after-pair">
                            <div class="before-after-half before-after-half--before">
                                <span style="font-size:1.5rem; opacity:.3;">🦷</span>
                                <span style="font-size:.7rem; color:var(--gray-label); font-weight:600; letter-spacing:.08em; text-transform:uppercase;">Foto: Před hygienou</span>
                                <div class="before-after-label">PŘED</div>
                            </div>
                            <div class="before-after-half before-after-half--after">
                                <span style="font-size:1.5rem; opacity:.3;">✨</span>
                                <span style="font-size:.7rem; color:var(--gray-label); font-weight:600; letter-spacing:.08em; text-transform:uppercase;">Foto: Po hygieně</span>
                                <div class="before-after-label">PO</div>
                            </div>
                        </div>
                        <div class="before-after-divider"></div>
                    </div>
                    <p style="font-size:.8rem; color:var(--gray-label); margin-top:.75rem; text-align:center;">Výsledek po 60minutové hygieně.</p>
                </div>
                <div class="photo-placeholder photo-placeholder--4-3" style="border-radius:2px; box-shadow:var(--shadow-sm);">
                    <span class="photo-placeholder-icon">👩‍⚕️</span>
                    <span>Foto: Dentální hygienistka při práci</span>
                </div>
                <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                    <div style="background:var(--cream); border-radius:var(--radius); padding:1.25rem; text-align:center; border:1px solid var(--gray-mid);">
                        <div style="font-family:var(--font-serif); font-size:2rem; font-weight:600; color:var(--charcoal); line-height:1;">60'</div>
                        <div style="font-size:.78rem; color:var(--gray-text); margin-top:.25rem; font-weight:500;">průměrná délka</div>
                    </div>
                    <div style="background:var(--cream); border-radius:var(--radius); padding:1.25rem; text-align:center; border:1px solid var(--gray-mid);">
                        <div style="font-family:var(--font-serif); font-size:2rem; font-weight:600; color:var(--charcoal); line-height:1;">2×</div>
                        <div style="font-size:.78rem; color:var(--gray-text); margin-top:.25rem; font-weight:500;">doporučení ročně</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     BĚLENÍ
     ============================================================ -->
<section class="section section--cream" id="beleni">
    <div class="container">
        <div class="section-header reveal">
            <span class="label">Bělení zubů — Pure Whitening</span>
            <h2 class="display-lg" style="margin-block:.75rem 1rem;">Zářivý úsměv.<br>Konzultace zdarma.</h2>
            <p>Profesionální bělení, které opravdu funguje. S garancí výsledku a odborným dohledem od první konzultace.</p>
        </div>
        <div class="reveal" style="margin-bottom:3.5rem;">
            <div style="max-width:700px; margin-inline:auto;">
                <div class="before-after-container" style="border-radius:var(--radius);">
                    <div class="before-after-pair">
                        <div class="before-after-half before-after-half--before" style="aspect-ratio:3/2;">
                            <span style="font-size:2rem; opacity:.3;">😬</span>
                            <span style="font-size:.75rem; color:var(--gray-label); font-weight:600; letter-spacing:.08em; text-transform:uppercase;">Foto: Před bělením</span>
                            <div class="before-after-label">PŘED</div>
                        </div>
                        <div class="before-after-half before-after-half--after" style="aspect-ratio:3/2;">
                            <span style="font-size:2rem; opacity:.3;">😁</span>
                            <span style="font-size:.75rem; color:var(--gray-label); font-weight:600; letter-spacing:.08em; text-transform:uppercase;">Foto: Po bělení</span>
                            <div class="before-after-label">PO</div>
                        </div>
                    </div>
                    <div class="before-after-divider"></div>
                </div>
                <p style="font-size:.82rem; color:var(--gray-label); margin-top:.75rem; text-align:center;">Reálné výsledky pacientů Smart Dentistry · Brno</p>
            </div>
        </div>
        <div class="beleni-packages reveal">
            <div class="package-card package-card--featured">
                <div class="package-badge">Nejoblíbenější</div>
                <div class="package-name">Profesionální bělení</div>
                <div class="package-title">Pure Whitening<br>Ambulantní</div>
                <div class="package-price">12 500 Kč</div>
                <div class="package-duration">Jednorázové · výsledek hned po návštěvě</div>
                <ul class="package-features">
                    <li class="package-feature"><span class="package-feature-icon">✓</span><span>Celoživotní garance výsledku (dodavatel)</span></li>
                    <li class="package-feature"><span class="package-feature-icon">✓</span><span>Provedeno přímo v ordinaci pod dohledem zubaře</span></li>
                    <li class="package-feature"><span class="package-feature-icon">✓</span><span>Pure Whitening certifikovaná metoda</span></li>
                    <li class="package-feature"><span class="package-feature-icon">✓</span><span>Konzultace a kontrola zahrnuta</span></li>
                    <li class="package-feature"><span class="package-feature-icon">✓</span><span>Výsledek vydrží navždy s lehkou údržbou</span></li>
                </ul>
                <a href="tel:+420725345704" class="btn btn--gold" style="width:100%; justify-content:center;">Konzultace zdarma</a>
            </div>
            <div class="package-card">
                <div class="package-name">Domácí bělení</div>
                <div class="package-title">Pure Whitening<br>Home Kit</div>
                <div class="package-price">5 500 Kč</div>
                <div class="package-duration">Sada na domácí použití · výsledek za 2–3 týdny</div>
                <ul class="package-features">
                    <li class="package-feature"><span class="package-feature-icon">✓</span><span>Individuální dlaha zhotovená na míru</span></li>
                    <li class="package-feature"><span class="package-feature-icon">✓</span><span>Bělicí gel Pure Whitening na 6 měsíců</span></li>
                    <li class="package-feature"><span class="package-feature-icon">✓</span><span>Instrukce a kontrolní návštěva</span></li>
                    <li class="package-feature"><span class="package-feature-icon">✓</span><span>Pohodlí domova, vlastní tempo</span></li>
                    <li class="package-feature" style="color:var(--gray-label);"><span class="package-feature-icon" style="color:var(--gray-label);">↻</span><span>Výsledek vydrží cca 6 měsíců</span></li>
                </ul>
                <a href="tel:+420725345704" class="btn btn--outline" style="width:100%; justify-content:center;">Konzultace zdarma</a>
            </div>
        </div>
        <div class="whitening-guarantee reveal">
            <span class="guarantee-icon">🛡️</span>
            <div class="guarantee-text">
                <h5>Garance výsledku — u profesionálního bělení</h5>
                <p>Spolupracujeme s certifikovanou firmou Pure Whitening. Jejich protokol garantuje, že zuby budou opravdu bílé.</p>
            </div>
        </div>
        <div class="reveal" style="margin-top:3rem; background:var(--dark); border-radius:var(--radius); padding:clamp(2rem,5vw,3.5rem); text-align:center;">
            <p style="font-family:var(--font-serif); font-size:clamp(1.4rem,3vw,2.2rem); color:white; font-weight:400; font-style:italic; line-height:1.3; margin-bottom:.75rem;" id="whitening-headline">
                Pamatujete si, kdy jste se naposledy usmáli naplno?
            </p>
            <p style="font-size:.875rem; color:rgba(255,255,255,.5); margin-bottom:2rem;">Profesionální bělení zubů · Smart Dentistry Brno</p>
            <a href="tel:+420725345704" class="btn btn--gold btn--lg">Konzultace zdarma — zavolejte</a>
        </div>
    </div>
</section>

<!-- ============================================================
     RECENZE
     ============================================================ -->
<section class="section" id="recenze" style="background:var(--white);">
    <div class="container">
        <div class="section-header section-header--center reveal">
            <span class="label">Co říkají pacienti</span>
            <h2 class="display-md" style="margin-block:.75rem 1rem;">Konečně zubař, kterého doporučím každému.</h2>
        </div>
        <div class="reviews-grid">
            <div class="review-card reveal reveal-delay-1">
                <div class="review-stars">★★★★★</div>
                <p class="review-text">Konečně jsem našla zubaře, kde se nebojím. Celý tým je milý, profesionální a vše mi vždy vysvětlili. Bělení proběhlo bez problémů a výsledek předčil očekávání.</p>
                <div class="review-author"><div class="review-avatar">JK</div><div><div class="review-author-name">Jana K.</div><div class="review-author-service">Bělení zubů</div></div></div>
            </div>
            <div class="review-card reveal reveal-delay-2">
                <div class="review-stars">★★★★★</div>
                <p class="review-text">Dentální hygiena na úplně jiné úrovni. Hygienistka mi ukázala, kde dělám chyby při čištění, a teď to konečně dělám správně. Zuby vypadají skvěle.</p>
                <div class="review-author"><div class="review-avatar">MN</div><div><div class="review-author-name">Martin N.</div><div class="review-author-service">Dentální hygiena</div></div></div>
            </div>
            <div class="review-card reveal reveal-delay-3">
                <div class="review-stars">★★★★★</div>
                <p class="review-text">CBCT sken zachránil můj zub. Rentgen nic neukázal, ale 3D sken odhalil zápal pod korunkou. Jsem rád, že jsem to neodkládal. Tady se pacient cítí v dobrých rukou.</p>
                <div class="review-author"><div class="review-avatar">TO</div><div><div class="review-author-name">Tomáš O.</div><div class="review-author-service">Zubní ošetření + CBCT</div></div></div>
            </div>
            <div class="review-card reveal reveal-delay-1">
                <div class="review-stars">★★★★★</div>
                <p class="review-text">Parkování u dveří a pružné ordinační hodiny jsou záchrana. Objednala jsem se v pondělí, ve středu jsem tam byla.</p>
                <div class="review-author"><div class="review-avatar">LP</div><div><div class="review-author-name">Lucie P.</div><div class="review-author-service">Zubní prohlídka</div></div></div>
            </div>
            <div class="review-card reveal reveal-delay-2">
                <div class="review-stars">★★★★★</div>
                <p class="review-text">Přišla jsem na konzultaci bělení zdarma, odešla jsem se smluvním termínem. Žádný tlak, jen upřímné informace a před/po fotky.</p>
                <div class="review-author"><div class="review-avatar">RV</div><div><div class="review-author-name">Renata V.</div><div class="review-author-service">Pure Whitening</div></div></div>
            </div>
            <div class="review-card reveal reveal-delay-3">
                <div class="review-stars">★★★★★</div>
                <p class="review-text">Chodil jsem k jinému zubaři 10 let. Přišel jsem sem na doporučení a zjistil jsem, co to je moderní zubní péče. Víc se nevrátím jinam.</p>
                <div class="review-author"><div class="review-avatar">PH</div><div><div class="review-author-name">Pavel H.</div><div class="review-author-service">Nový pacient</div></div></div>
            </div>
        </div>
        <div class="reviews-cta-row reveal">
            <div class="google-rating">
                <div class="google-rating-score">4.9</div>
                <div class="google-rating-info">
                    <div class="google-rating-stars">★★★★★</div>
                    <div class="google-rating-count">Hodnocení na Google</div>
                </div>
            </div>
            <div>
                <p style="font-size:.9rem; color:var(--gray-text); max-width:40ch; margin-bottom:.75rem;">Byli jste u nás? Ohodnoťte nás na Google.</p>
                <a href="#" class="btn btn--outline">Napsat recenzi na Google</a>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     TÝM
     ============================================================ -->
<section class="section section--cream" id="tym">
    <div class="container">
        <div class="section-header section-header--center reveal">
            <span class="label">Náš tým</span>
            <h2 class="display-md" style="margin-block:.75rem 1rem;">Lidé za vaším úsměvem.</h2>
            <p>Znáte svého lékaře jménem. U nás to tak funguje od první návštěvy.</p>
        </div>
        <div class="team-grid">
            <div class="team-card reveal reveal-delay-1">
                <div class="team-photo"><span class="team-photo-icon">👨‍⚕️</span><span>Foto: Zubař</span></div>
                <div class="team-role">Zubní lékař</div>
                <div class="team-name">MUDr. [Jméno]</div>
                <p class="team-bio">Specialista na protetiku a implantologii. Jemný přístup a moderní techniky — ošetření bez zbytečného diskomfortu.</p>
            </div>
            <div class="team-card reveal reveal-delay-2">
                <div class="team-photo"><span class="team-photo-icon">👩‍⚕️</span><span>Foto: Zubařka</span></div>
                <div class="team-role">Zubní lékařka</div>
                <div class="team-name">MUDr. [Jméno]</div>
                <p class="team-bio">Zaměřuje se na estetickou stomatologii a konzervativní léčbu. Věří, že správná diagnóza je základem dobré péče.</p>
            </div>
            <div class="team-card reveal reveal-delay-3">
                <div class="team-photo"><span class="team-photo-icon">👩‍⚕️</span><span>Foto: Hygienistka</span></div>
                <div class="team-role">Dentální hygienistka</div>
                <div class="team-name">[Jméno]</div>
                <p class="team-bio">Certifikovaná dentální hygienistka a poradkyně pro bělení Pure Whitening. Každý pacient odchází s jasnějším úsměvem.</p>
            </div>
            <div class="team-card reveal reveal-delay-4">
                <div class="team-photo"><span class="team-photo-icon">👩‍⚕️</span><span>Foto: Hygienistka</span></div>
                <div class="team-role">Dentální hygienistka</div>
                <div class="team-name">[Jméno]</div>
                <p class="team-bio">Specialistka na parodontologii a péči o citlivé dásně. Trpělivá, přesná a vždy s úsměvem.</p>
            </div>
        </div>
        <div class="reveal" style="text-align:center; margin-top:3rem; padding-top:3rem; border-top:1px solid var(--gray-mid);">
            <p style="font-size:.95rem; color:var(--gray-text); margin-bottom:1.25rem;">Přijímáme nové pacienty. Objednejte se a poznejte náš tým osobně.</p>
            <a href="tel:+420725345704" class="btn btn--primary btn--lg">Objednat se — termín do 48 h</a>
        </div>
    </div>
</section>

<!-- ============================================================
     CENÍK
     ============================================================ -->
<section class="section section--cream" id="cenik" style="background:var(--white);">
    <div class="container container--narrow">
        <div class="section-header section-header--center reveal">
            <span class="label">Ceník</span>
            <h2 class="display-md" style="margin-block:.75rem 1rem;">Transparentní ceny.<br>Žádná překvapení.</h2>
        </div>
        <div class="pricing-table reveal">
            <div class="pricing-category open">
                <div class="pricing-category-header"><span class="pricing-category-icon">🦷</span>Zubní ošetření<span class="pricing-category-arrow">▼</span></div>
                <div class="pricing-rows">
                    <div class="pricing-row"><div><div class="pricing-service">Vstupní prohlídka</div><div class="pricing-note">Komplexní vyšetření + plán léčby</div></div><div class="pricing-price">zdarma</div></div>
                    <div class="pricing-row"><div><div class="pricing-service">Panoramatický RTG</div></div><div class="pricing-price"><span class="from">od</span>350 Kč</div></div>
                    <div class="pricing-row"><div><div class="pricing-service">CBCT — 3D sken</div><div class="pricing-note">Nejpřesnější 3D diagnóza</div></div><div class="pricing-price"><span class="from">od</span>1 200 Kč</div></div>
                    <div class="pricing-row"><div><div class="pricing-service">Plomba (kompozit)</div></div><div class="pricing-price"><span class="from">od</span>1 500 Kč</div></div>
                    <div class="pricing-row"><div><div class="pricing-service">Ošetření kořenových kanálků</div></div><div class="pricing-price"><span class="from">od</span>3 500 Kč</div></div>
                </div>
            </div>
            <div class="pricing-category open">
                <div class="pricing-category-header"><span class="pricing-category-icon">✨</span>Dentální hygiena<span class="pricing-category-arrow">▼</span></div>
                <div class="pricing-rows">
                    <div class="pricing-row"><div><div class="pricing-service">Dentální hygiena — standard</div><div class="pricing-note">Odstranění kamene, leštění, fluoridace · 60 min</div></div><div class="pricing-price">1 490 Kč</div></div>
                    <div class="pricing-row"><div><div class="pricing-service">Dentální hygiena — komplex</div><div class="pricing-note">+ Airflow pískování · 90 min</div></div><div class="pricing-price">1 890 Kč</div></div>
                </div>
            </div>
            <div class="pricing-category open">
                <div class="pricing-category-header"><span class="pricing-category-icon">⭐</span>Bělení zubů<span class="pricing-category-arrow">▼</span></div>
                <div class="pricing-rows">
                    <div class="pricing-row"><div><div class="pricing-service">Konzultace bělení</div></div><div class="pricing-price">zdarma</div></div>
                    <div class="pricing-row"><div><div class="pricing-service">Pure Whitening — ambulantní</div><div class="pricing-note">Celoživotní garance</div></div><div class="pricing-price">12 500 Kč</div></div>
                    <div class="pricing-row"><div><div class="pricing-service">Pure Whitening — domácí sada</div></div><div class="pricing-price">5 500 Kč</div></div>
                </div>
            </div>
        </div>
        <div class="reveal" style="text-align:center; margin-top:2rem;">
            <a href="tel:+420725345704" class="btn btn--primary">Objednat vstupní prohlídku</a>
        </div>
    </div>
</section>

<!-- ============================================================
     PRVNÍ NÁVŠTĚVA
     ============================================================ -->
<section class="section" id="prvni" style="background:var(--cream);">
    <div class="container">
        <div class="grid-2" style="gap:5rem; align-items:start;">
            <div class="reveal">
                <span class="label">První návštěva</span>
                <h2 class="display-md" style="margin-block:.75rem 1.5rem;">Nevíte, co vás čeká?<br>Žádné překvapení.</h2>
                <p class="body-lg">Mnoho lidí odkládá návštěvu zubaře z nejistoty nebo strachu. Říkáme vám předem přesně, co se stane.</p>
                <div style="background:var(--white); border-radius:var(--radius); padding:1.5rem; margin-top:2rem; border:1px solid var(--gray-mid);">
                    <div style="display:flex; gap:1.5rem; flex-wrap:wrap;">
                        <div><div style="font-size:.72rem; font-weight:700; letter-spacing:.1em; text-transform:uppercase; color:var(--gold); margin-bottom:.35rem;">Délka první návštěvy</div><div style="font-family:var(--font-serif); font-size:1.6rem; font-weight:500; color:var(--charcoal);">45–60 min</div></div>
                        <div style="width:1px; background:var(--gray-mid);"></div>
                        <div><div style="font-size:.72rem; font-weight:700; letter-spacing:.1em; text-transform:uppercase; color:var(--gold); margin-bottom:.35rem;">Termín</div><div style="font-family:var(--font-serif); font-size:1.6rem; font-weight:500; color:var(--charcoal);">do 48 h</div></div>
                        <div style="width:1px; background:var(--gray-mid);"></div>
                        <div><div style="font-size:.72rem; font-weight:700; letter-spacing:.1em; text-transform:uppercase; color:var(--gold); margin-bottom:.35rem;">Přijímáme</div><div style="font-family:var(--font-serif); font-size:1.6rem; font-weight:500; color:var(--charcoal);">Nové pacienty</div></div>
                    </div>
                </div>
                <div style="margin-top:2rem;"><a href="tel:+420725345704" class="btn btn--primary btn--lg">Zavolat a objednat se</a></div>
            </div>
            <div class="reveal reveal-delay-2">
                <div style="display:flex; flex-direction:column; gap:1rem;">
                    <div class="step-card"><div class="step-number">01</div><h4>Vyšetření chrupu</h4><p>Kompletní prohlídka všech zubů, dásní a sliznic. Zaznamenáme aktuální stav.</p></div>
                    <div class="step-card"><div class="step-number">02</div><h4>RTG snímky</h4><p>Lokální i panoramatické rentgenové snímky. Vidíme vše pod povrchem.</p></div>
                    <div class="step-card"><div class="step-number">03</div><h4>Plán léčby a ceny</h4><p>Lékař vysvětlí nálezy, navrhne postup léčby a sdělí přesné ceny. Žádné skryté poplatky.</p></div>
                    <div class="step-card"><div class="step-number">04</div><h4>Doporučení pro domácí péči</h4><p>Tipy na správné čištění specifické pro váš chrup.</p></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     LOKACE
     ============================================================ -->
<section class="section" id="lokace" style="background:var(--white);">
    <div class="container">
        <div class="section-header reveal">
            <span class="label">Kde nás najdete</span>
            <h2 class="display-md" style="margin-block:.75rem 1rem;">Zubař v centru Brna.<br>Parkování u dveří.</h2>
            <p>Žádný stres s hledáním místa. Přijeďte přímo k nám.</p>
        </div>
        <div class="location-grid">
            <div class="reveal">
                <div class="map-container">
                    <div class="map-placeholder">
                        <span style="font-size:2rem;">📍</span>
                        <span>Mapa — Dominikánská 2/4, Brno</span>
                        <span style="font-size:.75rem; opacity:.6;">(Google Maps embed)</span>
                    </div>
                </div>
                <div class="parking-badge" style="margin-top:1rem;">🅿️ &nbsp;Parkování Šilingrovo náměstí — 2 minuty pěšky</div>
            </div>
            <div class="reveal reveal-delay-2">
                <div class="info-block">
                    <h4>Adresa</h4>
                    <div class="info-row"><span class="info-row-icon">📍</span><div><strong>Smart Dentistry s.r.o.</strong><br>Dominikánská 2/4<br>602 00 Brno — centrum</div></div>
                </div>
                <div class="info-block">
                    <h4>Kontakt</h4>
                    <div class="info-row"><span class="info-row-icon">📞</span><a href="tel:+420725345704" style="font-weight:600; color:var(--charcoal);">+420 725 345 704</a></div>
                    <div class="info-row"><span class="info-row-icon">✉️</span><a href="mailto:recepce@smartdentistry.cz" style="color:var(--charcoal);">recepce@smartdentistry.cz</a></div>
                </div>
                <div class="info-block">
                    <h4>Ordinační hodiny</h4>
                    <div class="info-row"><span class="info-row-icon">🕐</span><div style="display:grid; grid-template-columns:auto 1fr; gap:.25rem .75rem; font-size:.9rem;"><span style="color:var(--gray-text);">Po–Čt</span><span style="font-weight:600;">8:00–20:00</span><span style="color:var(--gray-text);">Pátek</span><span style="font-weight:600;">8:00–18:00</span><span style="color:var(--gray-text);">Sobota</span><span style="font-weight:600;">po domluvě</span></div></div>
                </div>
                <a href="tel:+420725345704" class="btn btn--primary btn--lg" style="width:100%; justify-content:center; margin-top:.5rem;">Naplánovat návštěvu — volat</a>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     FOOTER
     ============================================================ -->
<footer class="site-footer" id="kontakt">
    <div class="container">
        <div class="footer-top">
            <div class="footer-brand">
                <span class="footer-logo">Smart Dentistry</span>
                <p class="footer-tagline">Moderní stomatologické centrum v centru Brna. Váš zubař, dentální hygiena a profesionální bělení zubů na jednom místě.</p>
                <div class="footer-social">
                    <a href="#" aria-label="Facebook"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg></a>
                    <a href="#" aria-label="Instagram"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg></a>
                </div>
            </div>
            <div class="footer-col">
                <h5>Služby</h5>
                <ul class="footer-links">
                    <li><a href="#zubar">Zubař Brno</a></li>
                    <li><a href="#hygiena">Dentální hygiena</a></li>
                    <li><a href="#beleni">Bělení zubů</a></li>
                    <li><a href="#cenik">Ceník</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h5>Ordinační hodiny</h5>
                <div class="footer-hours">
                    <div class="footer-hour-row"><span class="footer-hour-day">Po–Čt</span><span class="footer-hour-time">8:00–20:00</span></div>
                    <div class="footer-hour-row"><span class="footer-hour-day">Pátek</span><span class="footer-hour-time">8:00–18:00</span></div>
                    <div class="footer-hour-row"><span class="footer-hour-day">Sobota</span><span class="footer-hour-time">po domluvě</span></div>
                </div>
            </div>
            <div class="footer-col">
                <h5>Kontakt</h5>
                <div class="footer-contact">
                    <div class="footer-contact-item"><span class="footer-contact-icon">📍</span><span>Dominikánská 2/4, Brno 602 00</span></div>
                    <div class="footer-contact-item"><span class="footer-contact-icon">📞</span><a href="tel:+420725345704">+420 725 345 704</a></div>
                    <div class="footer-contact-item"><span class="footer-contact-icon">✉️</span><a href="mailto:recepce@smartdentistry.cz">recepce@smartdentistry.cz</a></div>
                </div>
                <a href="tel:+420725345704" class="btn btn--gold" style="margin-top:1.5rem; width:100%; justify-content:center;">Objednat se online</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p class="footer-copy">© 2026 Smart Dentistry s.r.o. Všechna práva vyhrazena.</p>
            <div class="footer-legal"><a href="#">Ochrana osobních údajů</a><a href="#">Cookies</a></div>
        </div>
    </div>
</footer>

<script src="js/main.js"></script>
</body>
</html>
