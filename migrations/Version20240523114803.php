<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240523114803 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(
            'ALTER TABLE radio DROP country, CHANGE description description VARCHAR(255) DEFAULT NULL, CHANGE last_date_playing last_date_playing VARCHAR(255) DEFAULT NULL, CHANGE url_web_site url_web_site VARCHAR(255) DEFAULT NULL'
        );
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(
            'ALTER TABLE radio ADD country VARCHAR(255) DEFAULT NULL, CHANGE description description VARCHAR(255) NOT NULL, CHANGE last_date_playing last_date_playing VARCHAR(255) NOT NULL, CHANGE url_web_site url_web_site VARCHAR(255) NOT NULL'
        );
    }
}
