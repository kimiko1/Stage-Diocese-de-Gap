<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240212183033 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__content AS SELECT id, pillar_id_id FROM content');
        $this->addSql('DROP TABLE content');
        $this->addSql('CREATE TABLE content (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, pillar_id_id INTEGER DEFAULT NULL, name_pillar_id INTEGER DEFAULT NULL, CONSTRAINT FK_FEC530A92682CB27 FOREIGN KEY (pillar_id_id) REFERENCES pillars (id) ON UPDATE NO ACTION ON DELETE NO ACTION NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_FEC530A96ABA91D1 FOREIGN KEY (name_pillar_id) REFERENCES pillars (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO content (id, pillar_id_id) SELECT id, pillar_id_id FROM __temp__content');
        $this->addSql('DROP TABLE __temp__content');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_FEC530A92682CB27 ON content (pillar_id_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_FEC530A96ABA91D1 ON content (name_pillar_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__content AS SELECT id, pillar_id_id FROM content');
        $this->addSql('DROP TABLE content');
        $this->addSql('CREATE TABLE content (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, pillar_id_id INTEGER DEFAULT NULL, CONSTRAINT FK_FEC530A92682CB27 FOREIGN KEY (pillar_id_id) REFERENCES pillars (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO content (id, pillar_id_id) SELECT id, pillar_id_id FROM __temp__content');
        $this->addSql('DROP TABLE __temp__content');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_FEC530A92682CB27 ON content (pillar_id_id)');
    }
}
