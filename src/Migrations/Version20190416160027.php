<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190416160027 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE inscription_enabler ADD heure_id INT DEFAULT NULL, ADD utilisateur_id INT DEFAULT NULL, ADD stade_developpement VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE inscription_enabler ADD CONSTRAINT FK_8DFCF839F2A733EB FOREIGN KEY (heure_id) REFERENCES heure (id)');
        $this->addSql('ALTER TABLE inscription_enabler ADD CONSTRAINT FK_8DFCF839FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('CREATE INDEX IDX_8DFCF839F2A733EB ON inscription_enabler (heure_id)');
        $this->addSql('CREATE INDEX IDX_8DFCF839FB88E14F ON inscription_enabler (utilisateur_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE inscription_enabler DROP FOREIGN KEY FK_8DFCF839F2A733EB');
        $this->addSql('ALTER TABLE inscription_enabler DROP FOREIGN KEY FK_8DFCF839FB88E14F');
        $this->addSql('DROP INDEX IDX_8DFCF839F2A733EB ON inscription_enabler');
        $this->addSql('DROP INDEX IDX_8DFCF839FB88E14F ON inscription_enabler');
        $this->addSql('ALTER TABLE inscription_enabler DROP heure_id, DROP utilisateur_id, DROP stade_developpement');
    }
}
