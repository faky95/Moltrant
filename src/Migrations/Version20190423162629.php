<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190423162629 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE inscription_enabler_specialite (inscription_enabler_id INT NOT NULL, specialite_id INT NOT NULL, INDEX IDX_6CDD15C82595CE20 (inscription_enabler_id), INDEX IDX_6CDD15C82195E0F0 (specialite_id), PRIMARY KEY(inscription_enabler_id, specialite_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE inscription_enabler_secteur_activite (inscription_enabler_id INT NOT NULL, secteur_activite_id INT NOT NULL, INDEX IDX_647338E72595CE20 (inscription_enabler_id), INDEX IDX_647338E75233A7FC (secteur_activite_id), PRIMARY KEY(inscription_enabler_id, secteur_activite_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE inscription_enabler_stade_developpement (inscription_enabler_id INT NOT NULL, stade_developpement_id INT NOT NULL, INDEX IDX_EDA9803D2595CE20 (inscription_enabler_id), INDEX IDX_EDA9803D34AF2CF (stade_developpement_id), PRIMARY KEY(inscription_enabler_id, stade_developpement_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE inscription_enabler_specialite ADD CONSTRAINT FK_6CDD15C82595CE20 FOREIGN KEY (inscription_enabler_id) REFERENCES inscription_enabler (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE inscription_enabler_specialite ADD CONSTRAINT FK_6CDD15C82195E0F0 FOREIGN KEY (specialite_id) REFERENCES specialite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE inscription_enabler_secteur_activite ADD CONSTRAINT FK_647338E72595CE20 FOREIGN KEY (inscription_enabler_id) REFERENCES inscription_enabler (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE inscription_enabler_secteur_activite ADD CONSTRAINT FK_647338E75233A7FC FOREIGN KEY (secteur_activite_id) REFERENCES secteur_activite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE inscription_enabler_stade_developpement ADD CONSTRAINT FK_EDA9803D2595CE20 FOREIGN KEY (inscription_enabler_id) REFERENCES inscription_enabler (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE inscription_enabler_stade_developpement ADD CONSTRAINT FK_EDA9803D34AF2CF FOREIGN KEY (stade_developpement_id) REFERENCES stade_developpement (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE inscription_enabler_specialite');
        $this->addSql('DROP TABLE inscription_enabler_secteur_activite');
        $this->addSql('DROP TABLE inscription_enabler_stade_developpement');
    }
}
