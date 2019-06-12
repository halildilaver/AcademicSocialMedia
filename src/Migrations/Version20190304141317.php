<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190304141317 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user ADD phone VARCHAR(255) DEFAULT NULL, ADD fax VARCHAR(255) DEFAULT NULL, ADD email2 VARCHAR(255) DEFAULT NULL, ADD workarea LONGTEXT DEFAULT NULL, ADD titleandtasks LONGTEXT DEFAULT NULL, ADD edulis VARCHAR(255) DEFAULT NULL, ADD edumaster VARCHAR(255) DEFAULT NULL, ADD edudoc VARCHAR(255) DEFAULT NULL, ADD thesismaster VARCHAR(255) DEFAULT NULL, ADD thesisdoc VARCHAR(255) DEFAULT NULL, ADD roomno VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user DROP phone, DROP fax, DROP email2, DROP workarea, DROP titleandtasks, DROP edulis, DROP edumaster, DROP edudoc, DROP thesismaster, DROP thesisdoc, DROP roomno');
    }
}
