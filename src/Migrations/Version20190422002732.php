<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190422002732 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE ponderator (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, coefficient INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ponderator_task (ponderator_id INT NOT NULL, task_id INT NOT NULL, INDEX IDX_96D7CABA334F1E62 (ponderator_id), INDEX IDX_96D7CABA8DB60186 (task_id), PRIMARY KEY(ponderator_id, task_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ponderator_task ADD CONSTRAINT FK_96D7CABA334F1E62 FOREIGN KEY (ponderator_id) REFERENCES ponderator (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ponderator_task ADD CONSTRAINT FK_96D7CABA8DB60186 FOREIGN KEY (task_id) REFERENCES task (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE ponderator_task DROP FOREIGN KEY FK_96D7CABA334F1E62');
        $this->addSql('DROP TABLE ponderator');
        $this->addSql('DROP TABLE ponderator_task');
    }
}
