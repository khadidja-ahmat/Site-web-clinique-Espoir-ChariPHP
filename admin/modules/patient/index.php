<?php
require_once __DIR__ . '/../../../config/auth.php';
require_once __DIR__ . '/../../../config/database.php';
?>
<?php
// /admin/modules/patient/index.php
// Vue principale pour le module Patient.
// Généré intelligemment par ChariPHP
?>
<div class="container-fluid">
    <!-- Carte Principale du Module -->
    <div class="card shadow mb-4">
    
        <!-- En-tête de la Carte -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Gestion : Patients</h6>
            <button id="add-btn" class="btn btn-primary btn-icon-split btn-sm">
                <span class="icon text-white-50"><i class="fas fa-plus"></i></span>
                <span class="text">Ajouter un patient</span>
            </button>
        </div>
        
        <!-- Corps de la Carte -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover" id="dataTablePatient" width="100%" cellspacing="0">
                    <thead class="bg-primary text-white">
                        <tr>
                            <!-- colonnes générées dynamiquement -->
                            <th>Id</th>
<th>Nom</th>
<th>Date Naissance</th>
<th>Genre</th>
<th>Adresse</th>
<th>Tel</th>
<th>ACO</th>
<th>AFTO</th>
<th>Type</th>
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
                <h5 class="modal-title" id="mainModalLabel">Ajouter un patient</h5>
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
                        for="nom"
                        class="form-label"
                    >
                        Nom
                    </label>

                    <input
                        type="text"
                        id="nom"
                        name="nom"
                        class="form-control"
                        
                        required
                    >
                </div>
            
                <div class="mb-3">
                    <label
                        for="date_naissance"
                        class="form-label"
                    >
                        Date Naissance
                    </label>

                    <input
                        type="date"
                        id="date_naissance"
                        name="date_naissance"
                        class="form-control"
                        
                        required
                    >
                </div>
            
                <div class="mb-3">
                    <label
                        for="genre"
                        class="form-label"
                    >
                        Genre
                    </label>

                    <select id="genre" name="genre" class="form-select" required>
<option value="">-- Choisir --</option>
                        <option value="homme">Homme</option>
                        <option value="femme">Femme</option>
                    </select>
                </div>
            
                <div class="mb-3">
                    <label
                        for="adresse"
                        class="form-label"
                    >
                        Adresse
                    </label>

                    <input
                        type="text"
                        id="adresse"
                        name="adresse"
                        class="form-control"
                        
                        required
                    >
                </div>
            
                <div class="mb-3">
                    <label
                        for="tel"
                        class="form-label"
                    >
                        Tel
                    </label>

                    <input
                        type="text"
                        id="tel"
                        name="tel"
                        class="form-control"
                        
                        required
                    >
                </div>
            
                <div class="mb-3">
                    <label
                        for="ACO"
                        class="form-label"
                    >
                        ACO
                    </label>

                    <input
                        type="text"
                        id="ACO"
                        name="ACO"
                        class="form-control"
                        
                        required
                    >
                </div>
            
                <div class="mb-3">
                    <label
                        for="AFTO"
                        class="form-label"
                    >
                        AFTO
                    </label>

                    <input
                        type="text"
                        id="AFTO"
                        name="AFTO"
                        class="form-control"
                        
                        required
                    >
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
                        
                        
                    >
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