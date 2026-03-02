<?php 
    $pageTitle = 'Prémiová půjčovna vozů';
    include 'includes/header.php'; 
?>

<main style="position: relative; overflow: hidden;">
    <img src="assets/Index/VWmultivan.png" alt="" class="bg-visual bg-multivan">
    <img src="assets/Index/Karavan.png" alt="" class="bg-visual bg-karavan">

    <!-- Hero Section -->
    <section class="hero section" style="min-height: 25vh; display: flex; align-items: center; position: relative; overflow: hidden; padding-top: 100px;">
        <div class="container animate-up" style="position: relative; z-index: 2;">
            <div style="max-width: 700px;">
                <h1 style="font-size: clamp(2.5rem, 8vw, 4.5rem); line-height: 1.1; margin-bottom: var(--space-s);">
                    Zažijte <span class="text-accent">Svobodu</span><br>na čtyřech kolech
                </h1>
            </div><br>
            <div style="display: flex; gap: var(--space-s); justify-content: center; flex-wrap: wrap;">
                <a href="multivan.php" class="btn btn-outline">VW Multivan T6.1</a>
                <a href="karavan.php" class="btn btn-outline">Karavan Hobby Premium 495 UL</a>
                <a href="cenik.php" class="btn btn-outline">Ceník</a>
                <a href="kontakt.php" class="btn btn-outline">Kontakt</a>
            </div>
            <br>
            <div class="glass animate-up" style="padding: var(--space-m); max-width: 900px; margin: 0 auto; text-align: center;">
                <h2 style="margin-bottom: var(--space-s);">Náš <span class="text-accent">Příběh</span></h2>
                <div style="font-size: 1.1rem; line-height: 1.8; color: var(--text-muted); margin-bottom: var(--space-m); text-align: left;">
                    <p style="margin-bottom: 1rem;">
                        Jsme mladá rodina, která si splnila sen o svobodném cestování. O ránech s kávou u jezera, o večerech pod hvězdami, i cestách bez pevného plánu. Pořídili jsme si <strong>KARAVAN</strong> a <strong>MULTIVAN</strong>, protože věříme, že nejkrásnější zážitky vznikají právě tehdy, když máte možnost vyrazit kamkoliv a kdykoliv bez obav.
                    </p>
                    <p style="margin-bottom: 1rem;">
                        Cestování na čtyřech kolech nám dává smysl – je to svoboda, klid i dobrodružství v jednom. Když karavan zrovna neplní naše sny, může plnit ty vaše - ranní kávička před karavanem s výhledem na vrcholky Alp, nebo rovnou z karavanu vyskočte na pláž a hurá do teplého moře.
                    </p>
                    <p>
                        Pronajímáme karaVAN i multiVAN tak, jak je sami používáme – opečovávané, plně vybavené, spolehlivé a připravené vyrazit za dalším příběhem. Stačí nasednout a jet.
                    </p>
                </div>
            </div>
        </div>
        </section>
    <section class="section" style="background: linear-gradient(to bottom, transparent, rgba(255,107,53,0.05));">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: var(--space-m);"><span class="text-accent">Obsazenost</span> vozidel</h2>
            <div class="glass" style="padding: 10px; overflow: hidden; border-radius: 16px;">
                <iframe src="https://calendar.google.com/calendar/embed?height=500&wkst=2&ctz=Europe%2FPrague&showPrint=0&showTz=0&showCalendars=0&showTabs=0&showTitle=0&title&hl=cs&src=N2I0Nzg4NTJmNjA4YzAzZGM1ZTMwM2Y5ZmEyZjgwZGRjMWEzNTEyZTM2YmVkYTA0YmU5YjI2YmRjZjQwMmYwZkBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%23616161" style="border-width:0" width="100%" height="500" frameborder="0" scrolling="auto" class="dark-calendar"></iframe>
            </div>
        </div>
<br><br>
        <div class="container" style="text-align: center;">
            <h2 style="margin-bottom: var(--space-m);">Proč si půjčit u <span class="text-accent">Nás</span>?</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: var(--space-m); margin-top: var(--space-m);">
                <div>
                    <div style="font-size: 2.5rem; color: var(--accent); margin-bottom: 0.5rem;">⭐</div>
                    <h4>Prvotřídní Stav</h4>
                    <p style="color: var(--text-muted);">Vozidla jsou pravidelně servisována a v perfektní kondici.</p>
                </div>
                <div>
                    <div style="font-size: 2.5rem; color: var(--accent); margin-bottom: 0.5rem;">🛡️</div>
                    <h4>Plné Pojištění</h4>
                    <p style="color: var(--text-muted);">Cestujte v klidu s havarijním pojištěním v ceně.</p>
                </div>
                <div>
                    <div style="font-size: 2.5rem; color: var(--accent); margin-bottom: 0.5rem;">📞</div>
                    <h4>Podpora 24/7</h4>
                    <p style="color: var(--text-muted);">Jsme Vám k dispozici na telefonu po celou dobu zapůjčení.</p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
