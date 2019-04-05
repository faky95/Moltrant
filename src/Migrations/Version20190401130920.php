<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190401130920 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE texte ADD images_id INT NOT NULL');
        $this->addSql('ALTER TABLE texte ADD CONSTRAINT FK_EAE1A6EED44F05E5 FOREIGN KEY (images_id) REFERENCES images (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_EAE1A6EED44F05E5 ON texte (images_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE texte DROP FOREIGN KEY FK_EAE1A6EED44F05E5');
        $this->addSql('DROP INDEX UNIQ_EAE1A6EED44F05E5 ON texte');
        $this->addSql('ALTER TABLE texte DROP images_id');
    }
}
