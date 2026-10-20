-- Clinique Espoir (version ChariPHP) : tables métier.
-- La table `users` (administrateurs) est créée par config/install.php.
-- Importer dans une base vide :  mysql -u root -p clinique < schema.sql

CREATE TABLE IF NOT EXISTS `patient` (
  `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nom` VARCHAR(255) NOT NULL,
  `date_naissance` DATE NOT NULL,
  `genre` VARCHAR(255) NOT NULL,
  `adresse` VARCHAR(255) NOT NULL,
  `tel` VARCHAR(255) NOT NULL,
  `ACO` VARCHAR(255) NOT NULL,
  `AFTO` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `medecin` (
  `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `noms` VARCHAR(255) NOT NULL,
  `genre` VARCHAR(255) NOT NULL,
  `specialité` VARCHAR(255) NOT NULL,
  `adresse` VARCHAR(255) NOT NULL,
  `tel` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `image` VARCHAR(255) NULL DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `employe` (
  `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `noms` VARCHAR(255) NOT NULL,
  `genre` VARCHAR(255) NOT NULL,
  `poste` VARCHAR(255) NOT NULL,
  `adresse` VARCHAR(255) NOT NULL,
  `tel` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `image` VARCHAR(255) NULL DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `rendezvous` (
  `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `dates` DATE NOT NULL,
  `patient_id` BIGINT UNSIGNED NOT NULL,
  `medecin_id` BIGINT UNSIGNED NOT NULL,
  `type` VARCHAR(255) NOT NULL,
  `statut` VARCHAR(255) NOT NULL DEFAULT 'planifié',
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  FOREIGN KEY (`patient_id`) REFERENCES `patient`(`id`) ON DELETE CASCADE,
  FOREIGN KEY (`medecin_id`) REFERENCES `medecin`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `consultation` (
  `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `date` DATE NOT NULL,
  `patient_id` BIGINT UNSIGNED NOT NULL,
  `medecin_id` BIGINT UNSIGNED NOT NULL,
  `type` VARCHAR(255) NOT NULL,
  `resultat` TEXT NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  FOREIGN KEY (`patient_id`) REFERENCES `patient`(`id`) ON DELETE CASCADE,
  FOREIGN KEY (`medecin_id`) REFERENCES `medecin`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `ordonnance` (
  `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `patient_id` BIGINT UNSIGNED NOT NULL,
  `nom_medicament` VARCHAR(255) NOT NULL,
  `dosage` VARCHAR(255) NOT NULL,
  `frequence_utilisation` VARCHAR(255) NOT NULL,
  `date_prescription` DATE NOT NULL,
  `duree_prescription` DATE NOT NULL,
  `date_expiration` DATE NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  FOREIGN KEY (`patient_id`) REFERENCES `patient`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `historique` (
  `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `patient_id` BIGINT UNSIGNED NOT NULL,
  `resultat` TEXT NOT NULL,
  `prescription` TEXT NOT NULL,
  `antecedant` TEXT NOT NULL,
  `resultat_test` TEXT NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  FOREIGN KEY (`patient_id`) REFERENCES `patient`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
