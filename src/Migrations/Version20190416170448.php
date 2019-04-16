<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190416170448 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE enabler_specialite (id INT AUTO_INCREMENT NOT NULL, specialite_id INT DEFAULT NULL, inscription_enabler_id INT DEFAULT NULL, INDEX IDX_B9E5F4712195E0F0 (specialite_id), INDEX IDX_B9E5F4712595CE20 (inscription_enabler_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE enabler_specialite ADD CONSTRAINT FK_B9E5F4712195E0F0 FOREIGN KEY (specialite_id) REFERENCES specialite (id)');
        $this->addSql('ALTER TABLE enabler_specialite ADD CONSTRAINT FK_B9E5F4712595CE20 FOREIGN KEY (inscription_enabler_id) REFERENCES inscription_enabler (id)');
        $this->addSql('ALTER TABLE inscription_enabler ADD specialite_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE inscription_enabler ADD CONSTRAINT FK_8DFCF8392195E0F0 FOREIGN KEY (specialite_id) REFERENCES specialite (id)');
        $this->addSql('CREATE INDEX IDX_8DFCF8392195E0F0 ON inscription_enabler (specialite_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE enabler_specialite');
        $this->addSql('ALTER TABLE inscription_enabler DROP FOREIGN KEY FK_8DFCF8392195E0F0');
        $this->addSql('DROP INDEX IDX_8DFCF8392195E0F0 ON inscription_enabler');
        $this->addSql('ALTER TABLE inscription_enabler DROP specialite_id');
    }
}
