<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190416171415 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE enabler_secteur (id INT AUTO_INCREMENT NOT NULL, secteur_activite_id INT DEFAULT NULL, inscription_enabler_id INT DEFAULT NULL, INDEX IDX_D45AE8F95233A7FC (secteur_activite_id), INDEX IDX_D45AE8F92595CE20 (inscription_enabler_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE enabler_secteur ADD CONSTRAINT FK_D45AE8F95233A7FC FOREIGN KEY (secteur_activite_id) REFERENCES secteur_activite (id)');
        $this->addSql('ALTER TABLE enabler_secteur ADD CONSTRAINT FK_D45AE8F92595CE20 FOREIGN KEY (inscription_enabler_id) REFERENCES inscription_enabler (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE enabler_secteur');
    }
}
