<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Dentistry Brno — Zubař, Hygiena, Bělení</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- NAV -->
<nav class="site-nav" id="site-nav">
    <div class="container">
        <div class="nav-inner">
            <a href="#" class="nav-logo">
                <svg viewBox="0 0 28 28" fill="none"><path d="M14 3C14 3 7 7.5 7 14.5C7 19.5 10.134 24.5 14 24.5C17.866 24.5 21 19.5 21 14.5C21 7.5 14 3 14 3Z" stroke="currentColor" stroke-width="1.5" fill="none"/><path d="M11 14.5C11 14.5 12.5 17 14 17C15.5 17 17 14.5 17 14.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                Smart Dentistry
            </a>
            <ul class="nav-links">
                <li><a href="#sluzby">Služby</a></li>
                <li><a href="#proc-s-nami">Proč s námi</a></li>
                <li><a href="#tym">Tým</a></li>
                <li><a href="#cenik">Ceník</a></li>
                <li><a href="#kontakt">Kontakt</a></li>
            </ul>
            <div class="nav-cta">
                <a href="tel:+420725345704" class="nav-phone">+420 725 345 704</a>
                <a href="#kontakt" class="btn btn--gold btn--sm">Objednat se</a>
                <div class="nav-hamburger" id="nav-hamburger"><span></span><span></span><span></span></div>
            </div>
        </div>
    </div>
</nav>

<!-- MOBILE MENU -->
<div class="mobile-menu" id="mobile-menu">
    <button class="mobile-close" id="mobile-close">✕</button>
    <a href="#sluzby">Služby</a>
    <a href="#proc-s-nami">Proč s námi</a>
    <a href="#tym">Tým</a>
    <a href="#cenik">Ceník</a>
    <a href="#kontakt">Kontakt</a>
    <a href="tel:+420725345704" class="btn btn--gold btn--lg" style="margin-top:1rem;justify-content:center;">+420 725 345 704</a>
</div>

<!-- ============================================================
     1. HERO
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
                Vaše Dual Smile<br>Centrum<br><em>v Brně.</em>
            </h1>
            <p class="hero-sub">
                Klinika celostní zubní a estetické dentální péče.<br>
                Zubař, dentální hygiena a profesionální bělení — vše na jednom místě.
            </p>
            <div class="hero-ctas">
                <a href="tel:+420725345704" class="btn btn--gold btn--lg">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 11a19.79 19.79 0 01-3.07-8.67A2 2 0 012 .18h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 14.92z"/></svg>
                    +420 725 345 704
                </a>
                <a href="#kontakt" class="btn btn--outline-white btn--lg">Objednat se online</a>
            </div>
            <div class="hero-badges">
                <div class="hero-badge"><div class="hero-badge-icon">🕐</div><span>Flexibilní hodiny<br><strong style="color:rgba(255,255,255,.85)">Po–Pá 8:00–20:00</strong></span></div>
                <div class="hero-badge"><div class="hero-badge-icon">🅿️</div><span>Parkování<br><strong style="color:rgba(255,255,255,.85)">U dveří zdarma</strong></span></div>
                <div class="hero-badge"><div class="hero-badge-icon">📅</div><span>Termín<br><strong style="color:rgba(255,255,255,.85)">Do 48 hodin</strong></span></div>
                <div class="hero-badge"><div class="hero-badge-icon">🏥</div><span>Pojišťovny<br><strong style="color:rgba(255,255,255,.85)">90 % hradí</strong></span></div>
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
            <div class="trust-item"><span class="trust-item-icon">🔬</span><span>CBCT <strong style="color:white">3D sken</strong> zubů</span></div>
            <div class="trust-divider"></div>
            <div class="trust-item"><span class="trust-item-icon">📍</span><span><strong style="color:white">Centrum Brna</strong> — Dominikánská</span></div>
        </div>
    </div>
</div>

<!-- ============================================================
     2. SLUŽBY — kompaktní karty
     ============================================================ -->
<section class="section" id="sluzby" style="background:var(--white);">
    <div class="container">

        <div class="section-header section-header--center reveal">
            <span class="label">Nejčastěji řešíme</span>
            <h2 class="display-md" style="margin-block:.75rem 1rem;">Tři služby. Jeden tým. Jedno místo.</h2>
            <p>Vyberte si, co potřebujete — nebo přijďte na vstupní prohlídku a poradíme.</p>
        </div>

        <div class="services-cards">

            <!-- Zubař -->
            <div class="service-card reveal reveal-delay-1">
                <div class="service-card-img">
                    <span class="service-card-img-icon">🦷</span>
                    <span>Foto: Zubař při ošetření</span>
                </div>
                <div class="service-card-body">
                    <div class="service-card-label">Stomatologie</div>
                    <div class="service-card-title">Zubař Brno</div>
                    <ul class="service-card-bullets">
                        <li class="service-card-bullet">Vstupní prohlídka + RTG zdarma</li>
                        <li class="service-card-bullet">CBCT 3D sken — nejpřesnější diagnóza</li>
                        <li class="service-card-bullet">Bezbolestné ošetření, moderní anestetika</li>
                        <li class="service-card-bullet">Hrazeno 90 % pojišťoven</li>
                    </ul>
                    <div class="service-card-ctas">
                        <a href="tel:+420725345704" class="btn btn--primary btn--sm">Objednat se</a>
                        <a href="#" class="link-more">Více o zubní péči →</a>
                    </div>
                </div>
            </div>

            <!-- Dentální hygiena -->
            <div class="service-card reveal reveal-delay-2">
                <div class="service-card-img">
                    <span class="service-card-img-icon">✨</span>
                    <span>Foto: Dentální hygienistka</span>
                </div>
                <div class="service-card-body">
                    <div class="service-card-label">Prevence</div>
                    <div class="service-card-title">Dentální hygiena</div>
                    <ul class="service-card-bullets">
                        <li class="service-card-bullet">Odstranění kamene a plaku ultrazvukem</li>
                        <li class="service-card-bullet">Airflow pískování — okamžitý výsledek</li>
                        <li class="service-card-bullet">Instrukce správného čištění</li>
                        <li class="service-card-bullet">Termín do 48 hodin</li>
                    </ul>
                    <div class="service-card-price">1 490 Kč <small>/ návštěva</small></div>
                    <div class="service-card-ctas">
                        <a href="tel:+420725345704" class="btn btn--primary btn--sm">Objednat se</a>
                        <a href="#" class="link-more">Více o hygieně →</a>
                    </div>
                </div>
            </div>

            <!-- Bělení -->
            <div class="service-card reveal reveal-delay-3">
                <div class="service-card-img">
                    <span class="service-card-img-icon">😁</span>
                    <span>Foto: Před / Po bělení</span>
                </div>
                <div class="service-card-body">
                    <div class="service-card-label">Estetika</div>
                    <div class="service-card-title">Bělení zubů</div>
                    <ul class="service-card-bullets">
                        <li class="service-card-bullet">Pure Whitening — certifikovaná metoda</li>
                        <li class="service-card-bullet">Profesionální bělení: celoživotní garance</li>
                        <li class="service-card-bullet">Domácí sada: výsledek za 2–3 týdny</li>
                        <li class="service-card-bullet">Konzultace zdarma</li>
                    </ul>
                    <div class="service-card-price">od 5 500 Kč <small>konzultace zdarma</small></div>
                    <div class="service-card-ctas">
                        <a href="tel:+420725345704" class="btn btn--gold btn--sm">Konzultace zdarma</a>
                        <a href="#" class="link-more">Více o bělení →</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ============================================================
     3. PROČ S NÁMI
     ============================================================ -->
<section class="section section--cream" id="proc-s-nami">
    <div class="container">

        <div class="section-header section-header--center reveal">
            <span class="label">Proč s námi?</span>
            <h2 class="display-md" style="margin-block:.75rem 1rem;">Jiný přístup ke zubní péči.</h2>
            <p>To, co pacienti nejčastěji ocení hned po první návštěvě.</p>
        </div>

        <div class="why-us-grid">

            <div class="why-us-card reveal reveal-delay-1">
                <span class="why-us-icon">🕐</span>
                <div class="why-us-title">Flexibilní ordinační hodiny</div>
                <p class="why-us-text">Otevřeno Po–Čt 8–20 h, Pá 8–18 h. Nejsme ordinace jen ráno — objednáte se, kdy vám to opravdu sedí.</p>
            </div>

            <div class="why-us-card reveal reveal-delay-2">
                <span class="why-us-icon">🅿️</span>
                <div class="why-us-title">Parkování u dveří</div>
                <p class="why-us-text">Žádné bloudění po Brně. Šilingrovo náměstí je 2 minuty pěšky. Centrum města bez stresu z parkování.</p>
            </div>

            <div class="why-us-card reveal reveal-delay-3">
                <span class="why-us-icon">🔬</span>
                <div class="why-us-title">CBCT 3D diagnostika</div>
                <p class="why-us-text">Vidíme, co rentgen přehlédne. 3D sken odhalí záněty, skryté problémy i počínající karcinom dutiny ústní.</p>
            </div>

            <div class="why-us-card reveal reveal-delay-4">
                <span class="why-us-icon">💉</span>
                <div class="why-us-title">Bezbolestné ošetření</div>
                <p class="why-us-text">Moderní anestetika a šetrná technika. Ošetření bez zbytečného diskomfortu — i pro ty, kteří se zubaře bojí.</p>
            </div>

        </div>

        <div class="reveal" style="text-align:center;margin-top:3rem;">
            <a href="tel:+420725345704" class="btn btn--primary btn--lg">Objednat se — termín do 48 h</a>
        </div>

    </div>
</section>

<!-- ============================================================
     4. PŘÍBĚHY PACIENTŮ
     ============================================================ -->
<section class="section" style="background:var(--white);" id="pribehy">
    <div class="container">

        <div class="section-header section-header--center reveal">
            <span class="label">Příběhy pacientů</span>
            <h2 class="display-md" style="margin-block:.75rem 1rem;">Lidé, kteří to zažili.</h2>
            <p>Každý přišel s jiným problémem. Všichni odešli spokojeni.</p>
        </div>

        <div class="stories-grid">

            <div class="story-card reveal reveal-delay-1">
                <div class="story-card-img" style="background:#2a2420;">
                    <div class="story-card-img-placeholder">
                        <span>👩</span>
                        <span style="font-size:.7rem;color:rgba(255,255,255,.3);font-weight:500;letter-spacing:.06em;text-transform:uppercase;">Foto: Jana</span>
                    </div>
                    <div class="story-card-overlay"></div>
                    <div class="story-card-content">
                        <span class="story-card-service">Dentální hygiena</span>
                        <div class="story-card-name">Jana K., 34 let</div>
                        <p class="story-card-quote">„Konečně jsem pochopila, jak správně čistit zuby. Hygienistka mi to vysvětlila na konkrétním příkladu — ne jen teorii. Výsledek byl okamžitý."</p>
                    </div>
                </div>
            </div>

            <div class="story-card reveal reveal-delay-2">
                <div class="story-card-img" style="background:#1e1c18;">
                    <div class="story-card-img-placeholder">
                        <span>👨</span>
                        <span style="font-size:.7rem;color:rgba(255,255,255,.3);font-weight:500;letter-spacing:.06em;text-transform:uppercase;">Foto: Tomáš</span>
                    </div>
                    <div class="story-card-overlay"></div>
                    <div class="story-card-content">
                        <span class="story-card-service">Zubní ošetření + CBCT</span>
                        <div class="story-card-name">Tomáš O., 41 let</div>
                        <p class="story-card-quote">„Zub mě nebolel. Vypadal perfektně. Ale 3D sken odhalil zápal pod korunkou — díky tomu jsme ho zachránili. Bez CBCT by to do roka prasklo."</p>
                    </div>
                </div>
            </div>

            <div class="story-card reveal reveal-delay-3">
                <div class="story-card-img" style="background:#231f1a;">
                    <div class="story-card-img-placeholder">
                        <span>👩</span>
                        <span style="font-size:.7rem;color:rgba(255,255,255,.3);font-weight:500;letter-spacing:.06em;text-transform:uppercase;">Foto: Renata</span>
                    </div>
                    <div class="story-card-overlay"></div>
                    <div class="story-card-content">
                        <span class="story-card-service">Pure Whitening — bělení</span>
                        <div class="story-card-name">Renata V., 28 let</div>
                        <p class="story-card-quote">„Přišla jsem na konzultaci zdarma a odešla jsem se smluvním termínem. Výsledek bělení předčil moje očekávání. Teď se konečně usmívám na fotkách."</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ============================================================
     5. POJIŠŤOVNY
     ============================================================ -->
<div class="insurance-section">
    <div class="container">
        <div class="insurance-inner reveal">

            <div class="insurance-label-block">
                <span class="label">Pojišťovny</span>
                <h3>Spolupracujeme se zdravotními pojišťovnami</h3>
                <p class="insurance-note" style="margin-top:.75rem; max-width:28ch;">90 % běžných ošetření hradí vaše pojišťovna. Nejste si jistí? Zavolejte — ověříme za vás.</p>
                <a href="tel:+420725345704" class="btn btn--primary btn--sm" style="margin-top:1.25rem;">Ověřit nárok zdarma</a>
            </div>

            <div class="insurance-logos-grid">
                <div class="insurance-logo-box">
                    <div class="insurance-logo-placeholder">VZP</div>
                    <span>111</span>
                </div>
                <div class="insurance-logo-box">
                    <div class="insurance-logo-placeholder">OZP</div>
                    <span>207</span>
                </div>
                <div class="insurance-logo-box">
                    <div class="insurance-logo-placeholder">VoZP</div>
                    <span>201</span>
                </div>
                <div class="insurance-logo-box">
                    <div class="insurance-logo-placeholder">ČPZP</div>
                    <span>205</span>
                </div>
                <div class="insurance-logo-box">
                    <div class="insurance-logo-placeholder">ZPŠ</div>
                    <span>209</span>
                </div>
                <div class="insurance-logo-box">
                    <div class="insurance-logo-placeholder">RBP</div>
                    <span>213</span>
                </div>
                <div class="insurance-logo-box">
                    <div class="insurance-logo-placeholder" style="font-size:.75rem;">ZPMV</div>
                    <span>211</span>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- ============================================================
     6. GALERIE — jak to u nás vypadá
     ============================================================ -->
<section class="section section--cream" id="galerie">
    <div class="container">

        <div class="section-header reveal">
            <span class="label">Prostředí kliniky</span>
            <h2 class="display-md" style="margin-block:.75rem 1rem;">Jak to u nás vypadá.</h2>
            <p>Moderní vybavení, příjemné prostředí. Přijďte se přesvědčit osobně.</p>
        </div>

        <div class="gallery-grid reveal">
            <div class="gallery-item"><span class="gallery-item-icon">🏥</span><span style="font-size:.7rem;text-transform:uppercase;letter-spacing:.08em;">Foto: Recepce</span><div class="gallery-item-overlay">🔍</div></div>
            <div class="gallery-item"><span class="gallery-item-icon">🦷</span><span style="font-size:.7rem;text-transform:uppercase;letter-spacing:.08em;">Foto: Ordinace</span><div class="gallery-item-overlay">🔍</div></div>
            <div class="gallery-item"><span class="gallery-item-icon">🔬</span><span style="font-size:.7rem;text-transform:uppercase;letter-spacing:.08em;">Foto: RTG / CBCT</span><div class="gallery-item-overlay">🔍</div></div>
            <div class="gallery-item"><span class="gallery-item-icon">✨</span><span style="font-size:.7rem;text-transform:uppercase;letter-spacing:.08em;">Foto: Hygiena</span><div class="gallery-item-overlay">🔍</div></div>
            <div class="gallery-item"><span class="gallery-item-icon">😁</span><span style="font-size:.7rem;text-transform:uppercase;letter-spacing:.08em;">Foto: Výsledek bělení</span><div class="gallery-item-overlay">🔍</div></div>
        </div>

    </div>
</section>

<!-- ============================================================
     7. RECENZE
     ============================================================ -->
<section class="section" style="background:var(--white);" id="recenze">
    <div class="container">

        <div class="section-header section-header--center reveal">
            <span class="label">Vaše zkušenosti</span>
            <h2 class="display-md" style="margin-block:.75rem 1rem;">Co říkají pacienti.</h2>
        </div>

        <div class="reviews-grid">
            <div class="review-card reveal reveal-delay-1">
                <div class="review-stars">★★★★★</div>
                <p class="review-text">Konečně jsem našla zubaře, kde se nebojím. Celý tým je milý, profesionální a vše mi vždy vysvětlili. Bělení předčilo očekávání.</p>
                <div class="review-author"><div class="review-avatar">JK</div><div><div class="review-author-name">Jana K.</div><div class="review-author-service">Bělení zubů</div></div></div>
            </div>
            <div class="review-card reveal reveal-delay-2">
                <div class="review-stars">★★★★★</div>
                <p class="review-text">CBCT sken zachránil můj zub. Rentgen nic neukázal, ale 3D sken odhalil zápal. Jsem rád, že jsem to neodkládal.</p>
                <div class="review-author"><div class="review-avatar">TO</div><div><div class="review-author-name">Tomáš O.</div><div class="review-author-service">Zubní ošetření + CBCT</div></div></div>
            </div>
            <div class="review-card reveal reveal-delay-3">
                <div class="review-stars">★★★★★</div>
                <p class="review-text">Parkování u dveří a pružné hodiny jsou záchrana. Objednala jsem se v pondělí, ve středu jsem tam byla. To jinde nezažijete.</p>
                <div class="review-author"><div class="review-avatar">LP</div><div><div class="review-author-name">Lucie P.</div><div class="review-author-service">Dentální hygiena</div></div></div>
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
            <a href="#" class="btn btn--outline">Napsat recenzi na Google</a>
        </div>

    </div>
</section>

<!-- ============================================================
     8. TÝM
     ============================================================ -->
<section class="section section--cream" id="tym">
    <div class="container">

        <div class="section-header section-header--center reveal">
            <span class="label">Náš tým</span>
            <h2 class="display-md" style="margin-block:.75rem 1rem;">Znáte svého lékaře jménem.</h2>
            <p>Lidský přístup od první návštěvy. U nás vás vždy ošetří ten samý lékař.</p>
        </div>

        <div class="team-grid">
            <div class="team-card reveal reveal-delay-1">
                <div class="team-photo"><span class="team-photo-icon">👨‍⚕️</span><span>Foto: Zubař</span></div>
                <div class="team-role">Zubní lékař</div>
                <div class="team-name">MUDr. [Jméno]</div>
                <p class="team-bio">Specialista na protetiku a implantologii. Jemný přístup, moderní techniky — ošetření bez zbytečného diskomfortu.</p>
            </div>
            <div class="team-card reveal reveal-delay-2">
                <div class="team-photo"><span class="team-photo-icon">👩‍⚕️</span><span>Foto: Zubařka</span></div>
                <div class="team-role">Zubní lékařka</div>
                <div class="team-name">MUDr. [Jméno]</div>
                <p class="team-bio">Estetická stomatologie a konzervativní léčba. Věří, že správná diagnóza je základ dobré péče.</p>
            </div>
            <div class="team-card reveal reveal-delay-3">
                <div class="team-photo"><span class="team-photo-icon">👩‍⚕️</span><span>Foto: Hygienistka</span></div>
                <div class="team-role">Dentální hygienistka</div>
                <div class="team-name">[Jméno]</div>
                <p class="team-bio">Certifikovaná hygienistka a poradkyně Pure Whitening. Každý pacient odchází s jasnějším úsměvem i lepšími návyky.</p>
            </div>
            <div class="team-card reveal reveal-delay-4">
                <div class="team-photo"><span class="team-photo-icon">👩‍⚕️</span><span>Foto: Hygienistka</span></div>
                <div class="team-role">Dentální hygienistka</div>
                <div class="team-name">[Jméno]</div>
                <p class="team-bio">Specialistka na parodontologii a citlivé dásně. Trpělivá, přesná, vždy s úsměvem.</p>
            </div>
        </div>

    </div>
</section>

<!-- ============================================================
     9. CENÍK
     ============================================================ -->
<section class="section" style="background:var(--white);" id="cenik">
    <div class="container container--narrow">

        <div class="section-header section-header--center reveal">
            <span class="label">Ceník</span>
            <h2 class="display-md" style="margin-block:.75rem 1rem;">Transparentní ceny.<br>Žádná překvapení.</h2>
            <p>Přesnou kalkulaci dostanete při první prohlídce — zdarma.</p>
        </div>

        <div class="pricing-table reveal">
            <div class="pricing-category open">
                <div class="pricing-category-header"><span class="pricing-category-icon">🦷</span>Zubní ošetření<span class="pricing-category-arrow">▼</span></div>
                <div class="pricing-rows">
                    <div class="pricing-row"><div><div class="pricing-service">Vstupní prohlídka + plán léčby</div></div><div class="pricing-price">zdarma</div></div>
                    <div class="pricing-row"><div><div class="pricing-service">Panoramatický RTG</div></div><div class="pricing-price"><span class="from">od</span>350 Kč</div></div>
                    <div class="pricing-row"><div><div class="pricing-service">CBCT 3D sken</div><div class="pricing-note">Nejpřesnější 3D diagnóza</div></div><div class="pricing-price"><span class="from">od</span>1 200 Kč</div></div>
                    <div class="pricing-row"><div><div class="pricing-service">Plomba — kompozit</div></div><div class="pricing-price"><span class="from">od</span>1 500 Kč</div></div>
                    <div class="pricing-row"><div><div class="pricing-service">Ošetření kořenových kanálků</div></div><div class="pricing-price"><span class="from">od</span>3 500 Kč</div></div>
                </div>
            </div>
            <div class="pricing-category open">
                <div class="pricing-category-header"><span class="pricing-category-icon">✨</span>Dentální hygiena<span class="pricing-category-arrow">▼</span></div>
                <div class="pricing-rows">
                    <div class="pricing-row"><div><div class="pricing-service">Dentální hygiena — standard</div><div class="pricing-note">Kámen, leštění, fluoridace · 60 min</div></div><div class="pricing-price">1 490 Kč</div></div>
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

        <div class="reveal" style="text-align:center;margin-top:2rem;">
            <a href="tel:+420725345704" class="btn btn--primary">Objednat vstupní prohlídku</a>
        </div>

    </div>
</section>

<!-- ============================================================
     10. CTA BAND
     ============================================================ -->
<section class="cta-band">
    <div class="container container--narrow">
        <div class="reveal">
            <span class="label" style="color:var(--gold-light);">Přijímáme nové pacienty</span>
            <h2 style="margin-block:1rem 1rem;">Váš úsměv je první,<br>co si lidé <em>všimnou.</em></h2>
            <p>Termín do 48 hodin. Parkování u dveří. Flexibilní hodiny.<br>Centrum Brna — Dominikánská 2/4.</p>
            <div class="cta-band-btns">
                <a href="tel:+420725345704" class="btn btn--gold btn--lg">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 11a19.79 19.79 0 01-3.07-8.67A2 2 0 012 .18h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 14.92z"/></svg>
                    Zavolat — +420 725 345 704
                </a>
                <a href="#kontakt" class="btn btn--outline-white btn--lg">Objednat se online</a>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     12. LOKACE
     ============================================================ -->
<section class="section" style="background:var(--white);" id="lokace">
    <div class="container">

        <div class="section-header reveal">
            <span class="label">Kde nás najdete</span>
            <h2 class="display-md" style="margin-block:.75rem 1rem;">Centrum Brna.<br>Parkování u dveří.</h2>
        </div>

        <div class="location-grid">
            <div class="reveal">
                <div class="map-container">
                    <div class="map-placeholder">
                        <span style="font-size:2rem;">📍</span>
                        <span>Dominikánská 2/4, Brno</span>
                        <span style="font-size:.75rem;opacity:.6;">(Google Maps embed)</span>
                    </div>
                </div>
                <div class="parking-badge" style="margin-top:1rem;">🅿️ &nbsp;Šilingrovo náměstí — 2 min pěšky</div>
            </div>
            <div class="reveal reveal-delay-2">
                <div class="info-block">
                    <h4>Adresa</h4>
                    <div class="info-row"><span class="info-row-icon">📍</span><div><strong>Smart Dentistry s.r.o.</strong><br>Dominikánská 2/4, 602 00 Brno</div></div>
                </div>
                <div class="info-block">
                    <h4>Kontakt</h4>
                    <div class="info-row"><span class="info-row-icon">📞</span><a href="tel:+420725345704" style="font-weight:700;color:var(--charcoal);">+420 725 345 704</a></div>
                    <div class="info-row"><span class="info-row-icon">✉️</span><a href="mailto:recepce@smartdentistry.cz" style="color:var(--charcoal);">recepce@smartdentistry.cz</a></div>
                </div>
                <div class="info-block">
                    <h4>Ordinační hodiny</h4>
                    <div class="info-row"><span class="info-row-icon">🕐</span>
                        <div style="display:grid;grid-template-columns:auto 1fr;gap:.25rem .75rem;font-size:.9rem;">
                            <span style="color:var(--gray-text);">Po–Čt</span><span style="font-weight:600;">8:00–20:00</span>
                            <span style="color:var(--gray-text);">Pátek</span><span style="font-weight:600;">8:00–18:00</span>
                            <span style="color:var(--gray-text);">Sobota</span><span style="font-weight:600;">po domluvě</span>
                        </div>
                    </div>
                </div>
                <a href="tel:+420725345704" class="btn btn--primary btn--lg" style="width:100%;justify-content:center;">Naplánovat návštěvu</a>
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
                <p class="footer-tagline">Moderní stomatologické centrum v centru Brna. Zubař, dentální hygiena a profesionální bělení zubů na jednom místě.</p>
                <div class="footer-social">
                    <a href="#" aria-label="Facebook"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg></a>
                    <a href="#" aria-label="Instagram"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg></a>
                    <a href="#" aria-label="Google"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12.48 10.92v3.28h7.84c-.24 1.84-.853 3.187-1.787 4.133-1.147 1.147-2.933 2.4-6.053 2.4-4.827 0-8.6-3.893-8.6-8.72s3.773-8.72 8.6-8.72c2.6 0 4.507 1.027 5.907 2.347l2.307-2.307C18.747 1.44 16.133 0 12.48 0 5.867 0 .307 5.387.307 12s5.56 12 12.173 12c3.573 0 6.267-1.173 8.373-3.36 2.16-2.16 2.84-5.213 2.84-7.667 0-.76-.053-1.467-.173-2.053H12.48z"/></svg></a>
                </div>
            </div>
            <div class="footer-col">
                <h5>Služby</h5>
                <ul class="footer-links">
                    <li><a href="#sluzby">Zubař Brno</a></li>
                    <li><a href="#sluzby">Dentální hygiena</a></li>
                    <li><a href="#sluzby">Bělení zubů</a></li>
                    <li><a href="#cenik">Ceník</a></li>
                    <li><a href="#tym">Náš tým</a></li>
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
                    <div class="footer-contact-item"><span class="footer-contact-icon">🅿️</span><span>Šilingrovo nám. — 2 min pěšky</span></div>
                </div>
                <a href="tel:+420725345704" class="btn btn--gold" style="margin-top:1.5rem;width:100%;justify-content:center;">Objednat se online</a>
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
