<?php
require_once __DIR__ . '/../../../config/auth.php';
require_once __DIR__ . '/../../../config/database.php';
$patients = $pdo->query("SELECT id, nom FROM patient ORDER BY nom")->fetchAll();
$medecins = $pdo->query("SELECT id, noms FROM medecin ORDER BY noms")->fetchAll();
?>
<?php
// /admin/modules/consultation/index.php
// Vue principale pour le module Consultation.
// Généré intelligemment par ChariPHP
?>
<div class="container-fluid">
    <!-- Carte Principale du Module -->
    <div class="card shadow mb-4">
    
        <!-- En-tête de la Carte -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Gestion : Consultations</h6>
            <button id="add-btn" class="btn btn-primary btn-icon-split btn-sm">
                <span class="icon text-white-50"><i class="fas fa-plus"></i></span>
                <span class="text">Ajouter une consultation</span>
            </button>
        </div>
        
        <!-- Corps de la Carte -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover" id="dataTableConsultation" width="100%" cellspacing="0">
                    <thead class="bg-primary text-white">
                        <tr>
                            <!-- colonnes générées dynamiquement -->
                            <th>Id</th>
<th>Date</th>
<th>Patient</th>
<th>Médecin</th>
<th>Type</th>
<th>Resultat</th>
<th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Les données seront chargées ici par DataTables via AJAX -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modale d'ajout/modification -->
<div class="modal fade" id="mainModal" tabindex="-1" role="dialog" aria-labelledby="mainModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document"> <!-- Passage en modal-lg pour plus d'espace -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mainModalLabel">Ajouter une consultation</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="mainForm">
                <div class="modal-body">
                    <!-- Champ caché pour l'ID (pour la modification) -->
                    <input type="hidden" name="id" id="id">
                    <!-- Champ caché pour l'action -->
                    <input type="hidden" name="action" id="form_action" value="save_item">

                    <!-- Champs de formulaire générés dynamiquement -->
                    
                <div class="mb-3">
                    <label
                        for="date"
                        class="form-label"
                    >
                        Date
                    </label>

                    <input
                        type="date"
                        id="date"
                        name="date"
                        class="form-control"
                        
                        required
                    >
                </div>
            
                <div class="mb-3">
                    <label
                        for="patient_id"
                        class="form-label"
                    >
                        Patient
                    </label>

                    <select id="patient_id" name="patient_id" class="form-select" required>
<option value="">-- Choisir un patient --</option>
                        <?php foreach ($patients as $p): ?>
                            <option value="<?= (int) $p['id'] ?>"><?= htmlspecialchars($p['nom']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            
                <div class="mb-3">
                    <label
                        for="medecin_id"
                        class="form-label"
                    >
                        Médecin
                    </label>

                    <select id="medecin_id" name="medecin_id" class="form-select" required>
<option value="">-- Choisir un médecin --</option>
                        <?php foreach ($medecins as $m): ?>
                            <option value="<?= (int) $m['id'] ?>"><?= htmlspecialchars($m['noms']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            
                <div class="mb-3">
                    <label
                        for="type"
                        class="form-label"
                    >
                        Type
                    </label>

                    <input
                        type="text"
                        id="type"
                        name="type"
                        class="form-control"
                        
                        required
                    >
                </div>
            
                    <div class="mb-3">
                        <label
                            for="resultat"
                            class="form-label"
                        >
                            Resultat
                        </label>

                        <textarea
                            id="resultat"
                            name="resultat"
                            class="form-control"
                            required
                        ></textarea>
                    </div>
                

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-2"></i>Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>