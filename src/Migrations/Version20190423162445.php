<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190423162445 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE secteur_activite DROP FOREIGN KEY FK_5CD9BFE12595CE20');
        $this->addSql('DROP INDEX IDX_5CD9BFE12595CE20 ON secteur_activite');
        $this->addSql('ALTER TABLE secteur_activite DROP inscription_enabler_id');
        $this->addSql('ALTER TABLE specialite DROP FOREIGN KEY FK_E7D6FCC12595CE20');
        $this->addSql('DROP INDEX IDX_E7D6FCC12595CE20 ON specialite');
        $this->addSql('ALTER TABLE specialite DROP inscription_enabler_id');
        $this->addSql('ALTER TABLE stade_developpement DROP FOREIGN KEY FK_ABE5B8CD2595CE20');
        $this->addSql('DROP INDEX IDX_ABE5B8CD2595CE20 ON stade_developpement');
        $this->addSql('ALTER TABLE stade_developpement DROP inscription_enabler_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE secteur_activite ADD inscription_enabler_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE secteur_activite ADD CONSTRAINT FK_5CD9BFE12595CE20 FOREIGN KEY (inscription_enabler_id) REFERENCES inscription_enabler (id)');
        $this->addSql('CREATE INDEX IDX_5CD9BFE12595CE20 ON secteur_activite (inscription_enabler_id)');
        $this->addSql('ALTER TABLE specialite ADD inscription_enabler_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE specialite ADD CONSTRAINT FK_E7D6FCC12595CE20 FOREIGN KEY (inscription_enabler_id) REFERENCES inscription_enabler (id)');
        $this->addSql('CREATE INDEX IDX_E7D6FCC12595CE20 ON specialite (inscription_enabler_id)');
        $this->addSql('ALTER TABLE stade_developpement ADD inscription_enabler_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE stade_developpement ADD CONSTRAINT FK_ABE5B8CD2595CE20 FOREIGN KEY (inscription_enabler_id) REFERENCES inscription_enabler (id)');
        $this->addSql('CREATE INDEX IDX_ABE5B8CD2595CE20 ON stade_developpement (inscription_enabler_id)');
    }
}
