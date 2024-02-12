<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240212195327 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__pillars AS SELECT id, name, icon, text, start_date FROM pillars');
        $this->addSql('DROP TABLE pillars');
        $this->addSql('CREATE TABLE pillars (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, icon VARCHAR(255) NOT NULL, text VARCHAR(255) DEFAULT NULL, start_date DATE DEFAULT NULL, event_id INTEGER DEFAULT NULL, CONSTRAINT FK_EEDD19D571F7E88B FOREIGN KEY (event_id) REFERENCES event (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO pillars (id, name, icon, text, start_date) SELECT id, name, icon, text, start_date FROM __temp__pillars');
        $this->addSql('DROP TABLE __temp__pillars');
        $this->addSql('CREATE INDEX IDX_EEDD19D571F7E88B ON pillars (event_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__pillars AS SELECT id, name, icon, text, start_date FROM pillars');
        $this->addSql('DROP TABLE pillars');
        $this->addSql('CREATE TABLE pillars (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, icon VARCHAR(255) NOT NULL, text VARCHAR(255) DEFAULT NULL, start_date DATE DEFAULT NULL)');
        $this->addSql('INSERT INTO pillars (id, name, icon, text, start_date) SELECT id, name, icon, text, start_date FROM __temp__pillars');
        $this->addSql('DROP TABLE __temp__pillars');
    }
}
