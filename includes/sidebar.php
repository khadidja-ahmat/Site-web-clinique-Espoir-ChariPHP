<?php
// /includes/sidebar.php - Menu de navigation latéral
// Généré par ChariPHP

$modules = require __DIR__ . '/../config/modules.php';
$userRole = $_SESSION['role'] ?? '';

?>

<!-- Sidebar -->
<div id="sidebar-wrapper">

    <div class="sidebar-heading">

        <a href="index.php" class="text-white text-decoration-none d-flex align-items-center">

            <!-- <img src="../assets/images/logo-white.png" alt="Logo" height="40" class="me-2"> -->

            <i class="fas fa-shield-alt fa-2x me-3"></i>

            <span>Clinique Espoir</span>

        </a>

    </div>


    <div class="list-group list-group-flush mt-3">

        <?php foreach ($modules as $moduleName => $module): ?>

            <?php
            $roles = $module['roles'] ?? [];

            // Ne pas afficher le module si le rôle n'est pas autorisé.
            if (
                !empty($roles)
                && !in_array($userRole, $roles, true)
            ) {
                continue;
            }

            $label = $module['label'] ?? $moduleName;
            $icon = $module['icon'] ?? 'fas fa-question-circle';
            ?>

            <a
                href="#"
                class="list-group-item"
                data-module="<?= htmlspecialchars($moduleName, ENT_QUOTES, 'UTF-8') ?>"
            >

                <i class="<?= htmlspecialchars($icon, ENT_QUOTES, 'UTF-8') ?> fa-fw me-3"></i>

                <?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?>

            </a>

        <?php endforeach; ?>

        <a href="../index.php" target="_blank" class="list-group-item mt-3">
            <i class="fas fa-globe fa-fw me-3"></i>
            Voir le site
        </a>

    </div>

</div>
<!-- /#sidebar-wrapper -->