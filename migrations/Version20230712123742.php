<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230712123742 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blague ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE blague ADD CONSTRAINT FK_9AEC019A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_9AEC019A76ED395 ON blague (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blague DROP FOREIGN KEY FK_9AEC019A76ED395');
        $this->addSql('DROP INDEX IDX_9AEC019A76ED395 ON blague');
        $this->addSql('ALTER TABLE blague DROP user_id');
    }
}
