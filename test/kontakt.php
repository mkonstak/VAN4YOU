<?php 
    $pageTitle = 'Kontakt';
    $preselected = $_GET['auto'] ?? '';
    include 'includes/header.php'; 
?>

<main style="padding-top: 120px; overflow: hidden; position: relative;">
    <img src="assets/Index/VWmultivan.png" alt="" class="bg-visual bg-multivan">
    <img src="assets/Index/Karavan.png" alt="" class="bg-visual bg-karavan">
    <div class="container animate-up">
        <div style="max-width: 1000px; margin: 0 auto;">
            
            <div style="text-align: center; margin-bottom: var(--space-l);">
                <h1 style="font-size: 3rem; margin-bottom: var(--space-s);">Kontaktujte <span class="text-accent">Nás</span></h1>
                <p style="color: var(--text-muted); font-size: 1.2rem;">
                    Jsme tu pro Vás. Zavolejte nám nebo napište e-mail pro rezervaci.
                </p>
            </div>

            <!-- Contact Info Card -->
            <div class="glass" style="padding: var(--space-l); display: flex; flex-wrap: wrap; justify-content: center; gap: var(--space-xl); margin-bottom: var(--space-l);">
                
                <div style="display: flex; align-items: center; gap: var(--space-m); min-width: 250px;">
                    <div style="font-size: 2.5rem; width: 60px; height: 60px; background: rgba(255,107,53,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center;">📞</div>
                    <div>
                        <h3 style="color: var(--accent); margin-bottom: 0.2rem; font-size: 1rem; text-transform: uppercase;">Zavolejte nám</h3>
                        <div id="p-container" style="display: flex; flex-direction: column; gap: 4px;">
                            <span class="text-muted" style="font-size: 0.9rem;">Načítání...</span>
                        </div>
                    </div>
                </div>

                <div style="display: flex; align-items: center; gap: var(--space-m); min-width: 250px;">
                    <div style="font-size: 2.5rem; width: 60px; height: 60px; background: rgba(255,107,53,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center;">✉️</div>
                    <div>
                        <h3 style="color: var(--accent); margin-bottom: 0.2rem; font-size: 1rem; text-transform: uppercase;">E-mail</h3>
                        <div id="e-container">
                            <span class="text-muted" style="font-size: 0.9rem;">Načítání...</span>
                        </div>
                    </div>
                </div>

                <div style="display: flex; align-items: center; gap: var(--space-m); min-width: 250px;">
                    <div style="font-size: 2.5rem; width: 60px; height: 60px; background: rgba(255,107,53,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                    </div>
                    <div>
                        <h3 style="color: var(--accent); margin-bottom: 0.2rem; font-size: 1rem; text-transform: uppercase;">Sledujte nás</h3>
                        <a href="https://www.instagram.com/van4you.cz/" target="_blank" rel="noopener" style="font-size: 1.4rem; font-weight: bold; color: white; text-decoration: none;">@van4you.cz</a>
                    </div>
                </div>

                <div style="display: flex; align-items: center; gap: var(--space-m); min-width: 250px;">
                    <div style="font-size: 2.5rem; width: 60px; height: 60px; background: rgba(255,107,53,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center;">📍</div>
                    <div>
                        <h3 style="color: var(--accent); margin-bottom: 0.2rem; font-size: 1rem; text-transform: uppercase;">Lokalita</h3>
                        <p style="font-size: 1.2rem; font-weight: 600; color: white;">Trnová, Plzeň-sever</p>
                    </div>
                </div>

            </div>

            <!-- Map Card -->
            <div class="glass animate-up" style="padding: 10px; border-radius: 16px; display: flex; margin-bottom: var(--space-l);">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10288.200994175606!2d13.320512851011804!3d49.860300743767745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470af4d062d2878d%3A0x42e7c7f67a729020!2zVHJub3bDoQ!5e0!3m2!1sen!2scz!4v1772481366659!5m2!1sen!2scz" width="100%" height="450" style="border:0; border-radius: 8px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="glass animate-up" style="padding: var(--space-m); text-align: center; border-bottom: 4px solid var(--accent); max-width: 600px; margin: 0 auto var(--space-l);">
                <p style="color: var(--text-muted);">
                    Ozvěte se nám kdykoliv prostřednictvím telefonu nebo e-mailu. <br>
                    Vaše sny o svobodném cestování začínají zde.
                </p>
            </div>
        </div>
    </div>
</main>

<script>
    // Simple spam protection for email and phone numbers
    (function() {
        const data = {
            e: ['info', 'van4you.cz'],
            p1: ['+420', '724', '751', '420'],
            p2: ['+420', '777', '686', '873']
        };

        const eMail = data.e[0] + '@' + data.e[1];
        const ph1 = data.p1[0] + ' ' + data.p1[1] + ' ' + data.p1[2] + ' ' + data.p1[3];
        const ph2 = data.p2[0] + ' ' + data.p2[1] + ' ' + data.p2[2] + ' ' + data.p2[3];

        document.getElementById('e-container').innerHTML = `<a href="mailto:${eMail}" style="font-size: 1.4rem; font-weight: bold; color: white; text-decoration: none; white-space: nowrap;">${eMail}</a>`;
        
        document.getElementById('p-container').innerHTML = `
            <a href="tel:${ph1.replace(/\s/g, '')}" style="font-size: 1.4rem; font-weight: bold; color: white; text-decoration: none; white-space: nowrap;">${ph1}</a>
            <a href="tel:${ph2.replace(/\s/g, '')}" style="font-size: 1.4rem; font-weight: bold; color: white; text-decoration: none; white-space: nowrap;">${ph2}</a>
        `;
    })();
</script>

<?php include 'includes/footer.php'; ?>
