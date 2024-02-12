<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240212152452 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pillars ADD COLUMN start_date DATE DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__pillars AS SELECT id, name, icon, text FROM pillars');
        $this->addSql('DROP TABLE pillars');
        $this->addSql('CREATE TABLE pillars (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, icon VARCHAR(255) NOT NULL, text VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO pillars (id, name, icon, text) SELECT id, name, icon, text FROM __temp__pillars');
        $this->addSql('DROP TABLE __temp__pillars');
    }
}
