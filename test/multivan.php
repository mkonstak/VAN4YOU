<?php 
    $pageTitle = 'VW Multivan T6.1';
    include 'includes/header.php'; 
?>

<main style="padding-top: 120px;">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: var(--space-l); align-items: start;">
            
            <div class="animate-up">
                <h1 style="font-size: 3.5rem; margin-bottom: var(--space-s);">VW Multivan <span class="text-accent">T6.1</span></h1>
                <p style="font-size: 1.1rem; margin-bottom: var(--space-m);">
                    Legenda mezi dodávkami. Maximální komfort, variabilita interiéru a jistota na cestách. 
                    Ideální pro 7 osob se zavazadly.
                </p>
                
                <div class="glass" style="padding: var(--space-m); margin-bottom: var(--space-m);">                    
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem;">
                        <div>
                            <h4 style="color: var(--accent); margin-bottom: 0.5rem; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Pohon a výkon</h4>
                            <ul style="color: var(--text-muted); padding-left: 1rem; line-height: 1.4; font-size: 0.95rem;">
                                <li>7st. DSG automat</li>
                                <li>výkon 110 kW (2.0 TDI)</li>
                                <li>asistent rozjezdu do kopce</li>
                            </ul>
                        </div>

                        <div>
                            <h4 style="color: var(--accent); margin-bottom: 0.5rem; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Komfort a interiér</h4>
                            <ul style="color: var(--text-muted); padding-left: 1rem; line-height: 1.4; font-size: 0.95rem;">
                                <li>7 míst k sezení (2-2-3)</li>
                                <li>kapitánská sedadla s dětskými sedačkami</li>
                                <li>3-zónová klimatizace Climatronic</li>
                                <li>multifunkční kožený volant</li>
                                <li>tónovaná skla vč. roletek</li>
                                <li>lůžková úprava zadní lavice</li>
                            </ul>
                        </div>

                        <div>
                            <h4 style="color: var(--accent); margin-bottom: 0.5rem; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Bezpečnost a asistenti</h4>
                            <ul style="color: var(--text-muted); padding-left: 1rem; line-height: 1.4; font-size: 0.95rem;">
                                <li>8 x airbag</li>
                                <li>adaptivní tempomat</li>
                                <li>přední a zadní park. senzory</li>
                                <li>zadní parkovací kamera</li>
                                <li>2 x ISOFIX</li>
                            </ul>
                        </div>

                        <div>
                            <h4 style="color: var(--accent); margin-bottom: 0.5rem; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Technologie</h4>
                            <ul style="color: var(--text-muted); padding-left: 1rem; line-height: 1.4; font-size: 0.95rem;">
                                <li>Navigace Discover Media Plus</li>
                                <li>Android Auto / Apple CarPlay</li>
                                <li>Bluetooth handsfree, 2x USB-C</li>
                                <li>kontrola tlaku v pneu</li>
                            </ul>
                        </div>

                        <div>
                            <h4 style="color: var(--accent); margin-bottom: 0.5rem; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Praktičnost a výbava</h4>
                            <ul style="color: var(--text-muted); padding-left: 1rem; line-height: 1.4; font-size: 0.95rem;">
                                <li>nosič 4 jízdních kol Thule</li>
                                <li>kempingový stolek (venkovní/vnitřní)</li>
                                <li>gumová podlaha, 18″ ALU kola</li>
                                <li>elektrická sklopná zrcátka</li>
                                <li>dálniční známka ČR, pojištění</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="glass" style="padding: var(--space-m);">
                    <h3 style="margin-bottom: var(--space-s);">CENÍK</h3>
                    <table style="width: 100%; border-collapse: collapse; color: var(--text-muted);">
                        <tr style="border-bottom: 1px solid var(--glass-border);">
                            <td style="padding: 10px 0;">minimálně 3 dny</td>
                            <td style="text-align: right; color: white;">2.200 Kč / den</td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--glass-border);">
                            <td style="padding: 10px 0;">7 a více dní</td>
                            <td style="text-align: right; color: white;">2.000 Kč / den</td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--glass-border);">
                            <td style="padding: 10px 0;">celý měsíc</td>
                            <td style="text-align: right; color: white; font-weight: bold;">29.000 Kč</td>
                        </tr>
                        <tr>
                            <td style="padding: 10px 0;">nosič 4 jízdních kol</td>
                            <td style="text-align: right; color: white;">300 Kč / den</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="animate-up" style="animation-delay: 0.2s;">

                <h3 style="margin-top: var(--space-m); margin-bottom: var(--space-s);">Galerie vozu</h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(140px, 1fr)); gap: 1rem;">
                    <?php
                        $dir = 'assets/Multivan/';
                        $images = glob($dir . "*.{jpg,jpeg,png,webp}", GLOB_BRACE);
                        
                        if ($images && count($images) > 0) {
                            // Přirozené abecední seřazení (1.jpg, 2.jpg, 10.jpg místo 1, 10, 2)
                            natsort($images);
                            
                            foreach ($images as $image) {
                                echo '<div class="gallery-item" style="aspect-ratio: 1; border-radius: 12px; overflow: hidden; border: 1px solid var(--glass-border); cursor: pointer; transition: transform 0.3s ease;" onclick="openModal(\'' . $image . '\')">';
                                echo '<img src="' . $image . '" alt="VW Multivan" style="width: 100%; height: 100%; object-fit: cover;">';
                                echo '</div>';
                            }
                        } else {
                            // Placeholdery pokud je složka prázdná
                            for ($i = 1; $i <= 4; $i++) {
                                echo '<div style="aspect-ratio: 1; background: var(--bg-card); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: var(--text-muted); border: 1px solid var(--glass-border);">Foto ' . $i . '</div>';
                            }
                        }
                    ?>
                </div>
            </div>

        </div>
    </div>
</main>

<!-- Modal pro zvětšení fotek -->
<div id="imageModal" style="display: none; position: fixed; z-index: 1000; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.9); align-items: center; justify-content: center; cursor: pointer;" onclick="closeModal()">
    <span style="position: absolute; top: 20px; right: 30px; color: white; font-size: 40px; font-weight: bold;">&times;</span>
    <img id="modalImg" style="max-width: 90%; max-height: 90%; border-radius: 8px; box-shadow: 0 0 20px rgba(0,0,0,0.5);">
</div>

<style>
    .gallery-item:hover {
        transform: scale(1.03);
        border-color: var(--accent) !important;
    }
</style>

<script>
    function openModal(src) {
        const modal = document.getElementById('imageModal');
        const modalImg = document.getElementById('modalImg');
        modalImg.src = src;
        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden'; // Zamezí scrollování pozadí
    }

    function closeModal() {
        const modal = document.getElementById('imageModal');
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
    }

    // Zavření klávesou ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closeModal();
    });
</script>

<?php include 'includes/footer.php'; ?>
