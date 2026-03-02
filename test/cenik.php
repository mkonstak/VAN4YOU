<?php 
    $pageTitle = 'Ceník pronájmu';
    include 'includes/header.php'; 
?>

<main style="padding-top: 120px; overflow: hidden;">
    <div class="container">
        <h1 style="text-align: center; margin-bottom: var(--space-l);">Ceník <span class="text-accent">Pronájmu</span></h1>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: var(--space-l); margin-bottom: var(--space-l);">
            
            <!-- Multivan Pricing -->
            <div class="glass animate-up" style="padding: var(--space-m); display: flex; flex-direction: column;">
                <div style="height: 200px; border-radius: 12px; overflow: hidden; margin-bottom: var(--space-m); border: 1px solid var(--glass-border);">
                    <img src="assets/Index/VWmultivan.png" alt="VW Multivan" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <h2 style="margin-bottom: var(--space-s);">VW Multivan <span class="text-accent">T6.1</span></h2>
                <table style="width: 100%; border-collapse: collapse; color: var(--text-muted); margin-bottom: var(--space-m);">
                    <tr style="border-bottom: 1px solid var(--glass-border);">
                        <td style="padding: 12px 0;">Minimálně 3 dny</td>
                        <td style="text-align: right; color: white;">2.200 Kč / den</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--glass-border);">
                        <td style="padding: 12px 0;">7 a více dní</td>
                        <td style="text-align: right; color: white;">2.000 Kč / den</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--glass-border);">
                        <td style="padding: 12px 0;">Celý měsíc</td>
                        <td style="text-align: right; color: white; font-weight: bold;">29.000 Kč</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px 0;">Nosič 4 jízdních kol</td>
                        <td style="text-align: right; color: white;">300 Kč / den</td>
                    </tr>
                </table>
                <div style="margin-top: auto; padding-top: var(--space-s); border-top: 1px solid var(--glass-border);">
                    <p style="font-weight: 600; color: var(--accent);">Vratná kauce: 20.000 Kč</p>
                </div>
            </div>

            <!-- Karavan Pricing -->
            <div class="glass animate-up" style="padding: var(--space-m); display: flex; flex-direction: column; animation-delay: 0.1s;">
                <div style="height: 200px; border-radius: 12px; overflow: hidden; margin-bottom: var(--space-m); border: 1px solid var(--glass-border);">
                    <img src="assets/Index/Karavan.png" alt="Karavan Hobby" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <h2 style="margin-bottom: var(--space-s);">Karavan <span class="text-accent">Hobby Premium 495 UL</span></h2>
                <table style="width: 100%; border-collapse: collapse; color: var(--text-muted); margin-bottom: var(--space-m);">
                    <tr style="border-bottom: 1px solid var(--glass-border);">
                        <td style="padding: 12px 0;">Říjen – květen</td>
                        <td style="text-align: right; color: white;">1.600 Kč / den</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--glass-border);">
                        <td style="padding: 12px 0;">Červen a září</td>
                        <td style="text-align: right; color: white;">2.000 Kč / den</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--glass-border);">
                        <td style="padding: 12px 0;">Červenec – srpen</td>
                        <td style="text-align: right; color: white;">2.200 Kč / den</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding: 12px 0; font-size: 0.85rem; font-style: italic;">Minimální délka zapůjčení jsou 3 dny.</td>
                    </tr>
                </table>
                <div style="margin-top: auto; padding-top: var(--space-s); border-top: 1px solid var(--glass-border);">
                    <p style="font-weight: 600; color: var(--accent);">Vratná kauce: 20.000 Kč</p>
                </div>
            </div>

        </div>

        <!-- Info Section -->
        <div class="glass animate-up" style="padding: var(--space-m); max-width: 800px; margin: 0 auto var(--space-l) auto; text-align: center; border-left: 4px solid var(--accent);">
            <p style="font-size: 1.1rem; font-weight: 600;">
                Pokud si zapůjčíte multivan i karavan zároveň, rádi vám nabídneme slevu.
            </p>
            <div style="color: var(--text-muted); line-height: 1.6;">
                <p>Kalendář slouží pouze pro přehled dostupnosti.</p>
                <p>Rezervaci je nutné potvrdit telefonicky nebo e-mailem.</p>
            </div>
        </div>

        <!-- Calendar Section -->
        <section class="section">
            <h2 style="text-align: center; margin-bottom: var(--space-m);"><span class="text-accent">Obsazenost</span> vozidel</h2>
            <div class="glass" style="padding: 10px; overflow: hidden; border-radius: 16px;">
                <iframe src="https://calendar.google.com/calendar/embed?height=500&wkst=2&ctz=Europe%2FPrague&showPrint=0&showTz=0&showCalendars=0&showTabs=0&showTitle=0&src=N2I0Nzg4NTJmNjA4YzAzZGM1ZTMwM2Y5ZmEyZjgwZGRjMWEzNTEyZTM2YmVkYTA0YmU5YjI2YmRjZjQwMmYwZkBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%23616161" style="border-width:0" width="100%" height="500" frameborder="0" scrolling="auto" class="dark-calendar"></iframe>
            </div>
        </section>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
