<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210719104248 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE agent (id INT AUTO_INCREMENT NOT NULL, full_name VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, phone VARCHAR(255) DEFAULT NULL, email VARCHAR(255) NOT NULL, skype VARCHAR(255) DEFAULT NULL, facebook VARCHAR(255) DEFAULT NULL, twitter VARCHAR(255) DEFAULT NULL, instagram VARCHAR(255) DEFAULT NULL, pinterest VARCHAR(255) DEFAULT NULL, dribbble VARCHAR(255) DEFAULT NULL, password VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, avatar VARCHAR(255) NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, property_id INT NOT NULL, image_name VARCHAR(255) NOT NULL, updated_at DATETIME NOT NULL, INDEX IDX_C53D045F549213EC (property_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE property (id INT AUTO_INCREMENT NOT NULL, types_id INT NOT NULL, agent_id INT NOT NULL, title VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, cover_image VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, area VARCHAR(255) NOT NULL, bedrooms INT NOT NULL, bathrooms INT NOT NULL, garage INT NOT NULL, city VARCHAR(255) NOT NULL, price DOUBLE PRECISION NOT NULL, updated_at DATETIME NOT NULL, INDEX IDX_8BF21CDE8EB23357 (types_id), INDEX IDX_8BF21CDE3414710B (agent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role_agent (role_id INT NOT NULL, agent_id INT NOT NULL, INDEX IDX_D15774B2D60322AC (role_id), INDEX IDX_D15774B23414710B (agent_id), PRIMARY KEY(role_id, agent_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE types (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F549213EC FOREIGN KEY (property_id) REFERENCES property (id)');
        $this->addSql('ALTER TABLE property ADD CONSTRAINT FK_8BF21CDE8EB23357 FOREIGN KEY (types_id) REFERENCES types (id)');
        $this->addSql('ALTER TABLE property ADD CONSTRAINT FK_8BF21CDE3414710B FOREIGN KEY (agent_id) REFERENCES agent (id)');
        $this->addSql('ALTER TABLE role_agent ADD CONSTRAINT FK_D15774B2D60322AC FOREIGN KEY (role_id) REFERENCES role (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE role_agent ADD CONSTRAINT FK_D15774B23414710B FOREIGN KEY (agent_id) REFERENCES agent (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE property DROP FOREIGN KEY FK_8BF21CDE3414710B');
        $this->addSql('ALTER TABLE role_agent DROP FOREIGN KEY FK_D15774B23414710B');
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045F549213EC');
        $this->addSql('ALTER TABLE role_agent DROP FOREIGN KEY FK_D15774B2D60322AC');
        $this->addSql('ALTER TABLE property DROP FOREIGN KEY FK_8BF21CDE8EB23357');
        $this->addSql('DROP TABLE agent');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE property');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE role_agent');
        $this->addSql('DROP TABLE types');
    }
}
