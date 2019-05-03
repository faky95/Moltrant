<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190503195336 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE inscription_enabler (id INT AUTO_INCREMENT NOT NULL, heure_id INT DEFAULT NULL, utilisateur_id INT DEFAULT NULL, fonction_actuelle VARCHAR(100) DEFAULT NULL, experience_professionnelle VARCHAR(100) DEFAULT NULL, precisions LONGTEXT DEFAULT NULL, date_inscription DATETIME NOT NULL, INDEX IDX_8DFCF839F2A733EB (heure_id), INDEX IDX_8DFCF839FB88E14F (utilisateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE inscription_enabler_specialite (inscription_enabler_id INT NOT NULL, specialite_id INT NOT NULL, INDEX IDX_6CDD15C82595CE20 (inscription_enabler_id), INDEX IDX_6CDD15C82195E0F0 (specialite_id), PRIMARY KEY(inscription_enabler_id, specialite_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE inscription_enabler_secteur_activite (inscription_enabler_id INT NOT NULL, secteur_activite_id INT NOT NULL, INDEX IDX_647338E72595CE20 (inscription_enabler_id), INDEX IDX_647338E75233A7FC (secteur_activite_id), PRIMARY KEY(inscription_enabler_id, secteur_activite_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE inscription_enabler_stade_developpement (inscription_enabler_id INT NOT NULL, stade_developpement_id INT NOT NULL, INDEX IDX_EDA9803D2595CE20 (inscription_enabler_id), INDEX IDX_EDA9803D34AF2CF (stade_developpement_id), PRIMARY KEY(inscription_enabler_id, stade_developpement_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE heure (id INT AUTO_INCREMENT NOT NULL, nombre_heure VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service (id INT AUTO_INCREMENT NOT NULL, nom_service VARCHAR(100) NOT NULL, description LONGTEXT NOT NULL, details LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE expertise (id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT DEFAULT NULL, specialite_id INT DEFAULT NULL, INDEX IDX_229ADF8BFB88E14F (utilisateur_id), INDEX IDX_229ADF8B2195E0F0 (specialite_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, secteur_id INT DEFAULT NULL, etude_id INT DEFAULT NULL, username VARCHAR(180) NOT NULL, username_canonical VARCHAR(180) NOT NULL, email VARCHAR(180) NOT NULL, email_canonical VARCHAR(180) NOT NULL, enabled TINYINT(1) NOT NULL, salt VARCHAR(255) DEFAULT NULL, password VARCHAR(255) NOT NULL, last_login DATETIME DEFAULT NULL, confirmation_token VARCHAR(180) DEFAULT NULL, password_requested_at DATETIME DEFAULT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', nom VARCHAR(100) NOT NULL, prenom VARCHAR(100) NOT NULL, sexe TINYINT(1) NOT NULL, date_naissance DATE NOT NULL, matricule VARCHAR(100) NOT NULL, telephone INT NOT NULL, nom_entreprise VARCHAR(100) DEFAULT NULL, coach TINYINT(1) DEFAULT NULL, is_admin TINYINT(1) DEFAULT NULL, localite VARCHAR(100) DEFAULT NULL, employes INT DEFAULT NULL, chiffre_affaire VARCHAR(50) DEFAULT NULL, date_adhesion DATETIME DEFAULT NULL, date_fin DATETIME DEFAULT NULL, anne_activite VARCHAR(100) DEFAULT NULL, photo LONGBLOB DEFAULT NULL, enabler TINYINT(1) DEFAULT NULL, UNIQUE INDEX UNIQ_1D1C63B392FC23A8 (username_canonical), UNIQUE INDEX UNIQ_1D1C63B3A0D96FBF (email_canonical), UNIQUE INDEX UNIQ_1D1C63B3C05FB297 (confirmation_token), INDEX IDX_1D1C63B39F7E4405 (secteur_id), INDEX IDX_1D1C63B347ABD362 (etude_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stade_developpement (id INT AUTO_INCREMENT NOT NULL, stade VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etude (id INT AUTO_INCREMENT NOT NULL, niveau_etude VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ville (id INT AUTO_INCREMENT NOT NULL, ville VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE specialite (id INT AUTO_INCREMENT NOT NULL, nom_specialite VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE secteur_activite (id INT AUTO_INCREMENT NOT NULL, nom_secteur VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(100) DEFAULT NULL, description LONGTEXT DEFAULT NULL, image LONGBLOB NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE inscription_enabler ADD CONSTRAINT FK_8DFCF839F2A733EB FOREIGN KEY (heure_id) REFERENCES heure (id)');
        $this->addSql('ALTER TABLE inscription_enabler ADD CONSTRAINT FK_8DFCF839FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE inscription_enabler_specialite ADD CONSTRAINT FK_6CDD15C82595CE20 FOREIGN KEY (inscription_enabler_id) REFERENCES inscription_enabler (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE inscription_enabler_specialite ADD CONSTRAINT FK_6CDD15C82195E0F0 FOREIGN KEY (specialite_id) REFERENCES specialite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE inscription_enabler_secteur_activite ADD CONSTRAINT FK_647338E72595CE20 FOREIGN KEY (inscription_enabler_id) REFERENCES inscription_enabler (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE inscription_enabler_secteur_activite ADD CONSTRAINT FK_647338E75233A7FC FOREIGN KEY (secteur_activite_id) REFERENCES secteur_activite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE inscription_enabler_stade_developpement ADD CONSTRAINT FK_EDA9803D2595CE20 FOREIGN KEY (inscription_enabler_id) REFERENCES inscription_enabler (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE inscription_enabler_stade_developpement ADD CONSTRAINT FK_EDA9803D34AF2CF FOREIGN KEY (stade_developpement_id) REFERENCES stade_developpement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE expertise ADD CONSTRAINT FK_229ADF8BFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE expertise ADD CONSTRAINT FK_229ADF8B2195E0F0 FOREIGN KEY (specialite_id) REFERENCES specialite (id)');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B39F7E4405 FOREIGN KEY (secteur_id) REFERENCES secteur_activite (id)');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B347ABD362 FOREIGN KEY (etude_id) REFERENCES etude (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE inscription_enabler_specialite DROP FOREIGN KEY FK_6CDD15C82595CE20');
        $this->addSql('ALTER TABLE inscription_enabler_secteur_activite DROP FOREIGN KEY FK_647338E72595CE20');
        $this->addSql('ALTER TABLE inscription_enabler_stade_developpement DROP FOREIGN KEY FK_EDA9803D2595CE20');
        $this->addSql('ALTER TABLE inscription_enabler DROP FOREIGN KEY FK_8DFCF839F2A733EB');
        $this->addSql('ALTER TABLE inscription_enabler DROP FOREIGN KEY FK_8DFCF839FB88E14F');
        $this->addSql('ALTER TABLE expertise DROP FOREIGN KEY FK_229ADF8BFB88E14F');
        $this->addSql('ALTER TABLE inscription_enabler_stade_developpement DROP FOREIGN KEY FK_EDA9803D34AF2CF');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B347ABD362');
        $this->addSql('ALTER TABLE inscription_enabler_specialite DROP FOREIGN KEY FK_6CDD15C82195E0F0');
        $this->addSql('ALTER TABLE expertise DROP FOREIGN KEY FK_229ADF8B2195E0F0');
        $this->addSql('ALTER TABLE inscription_enabler_secteur_activite DROP FOREIGN KEY FK_647338E75233A7FC');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B39F7E4405');
        $this->addSql('DROP TABLE inscription_enabler');
        $this->addSql('DROP TABLE inscription_enabler_specialite');
        $this->addSql('DROP TABLE inscription_enabler_secteur_activite');
        $this->addSql('DROP TABLE inscription_enabler_stade_developpement');
        $this->addSql('DROP TABLE heure');
        $this->addSql('DROP TABLE service');
        $this->addSql('DROP TABLE expertise');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP TABLE stade_developpement');
        $this->addSql('DROP TABLE etude');
        $this->addSql('DROP TABLE ville');
        $this->addSql('DROP TABLE specialite');
        $this->addSql('DROP TABLE secteur_activite');
        $this->addSql('DROP TABLE image');
    }
}
