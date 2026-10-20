<?php
// Page publique : liste des médecins lue depuis la base.
// Seuls le nom et la spécialité sont affichés (pas de téléphone, pas d'email).
require_once __DIR__ . '/../config/database.php';

$medecins = $pdo->query(
    "SELECT noms, `specialité` AS specialite FROM medecin ORDER BY noms"
)->fetchAll();
?>
<div class="container py-5">
    <div class="text-center mb-5">
        <h2>Notre équipe médicale</h2>
    </div>

    <?php if (!$medecins): ?>
        <p class="text-center">Aucun médecin n'est encore enregistré.</p>
    <?php endif; ?>

    <div class="row">
        <?php foreach ($medecins as $m): ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 text-center p-4 shadow-sm">
                    <div class="mb-3"><i class="fas fa-user-md fa-3x"></i></div>
                    <h5><?= htmlspecialchars($m['noms']) ?></h5>
                    <p class="text-muted mb-0"><?= htmlspecialchars($m['specialite']) ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
