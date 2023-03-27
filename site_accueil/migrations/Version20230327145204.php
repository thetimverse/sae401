<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230327145204 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE mot (id INT AUTO_INCREMENT NOT NULL, fr VARCHAR(80) NOT NULL, en VARCHAR(80) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mot_partie (id INT AUTO_INCREMENT NOT NULL, mot_id INT DEFAULT NULL, partie_id INT DEFAULT NULL, position INT NOT NULL, couleur_j1 VARCHAR(10) NOT NULL, couleur_j2 VARCHAR(10) NOT NULL, jeton_j1 TINYINT(1) NOT NULL, jeton_j2 TINYINT(1) NOT NULL, trouvÃe TINYINT(1) NOT NULL, INDEX IDX_D97116963977652 (mot_id), INDEX IDX_D971169E075F7A4 (partie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE partie (id INT AUTO_INCREMENT NOT NULL, joueur1_id INT DEFAULT NULL, joueur2_id INT DEFAULT NULL, tour_id INT DEFAULT NULL, etat VARCHAR(255) NOT NULL, date_debut DATETIME NOT NULL, resultat VARCHAR(255) NOT NULL, INDEX IDX_59B1F3D92C1E237 (joueur1_id), INDEX IDX_59B1F3D80744DD9 (joueur2_id), INDEX IDX_59B1F3D15ED8D43 (tour_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE mot_partie ADD CONSTRAINT FK_D97116963977652 FOREIGN KEY (mot_id) REFERENCES mot (id)');
        $this->addSql('ALTER TABLE mot_partie ADD CONSTRAINT FK_D971169E075F7A4 FOREIGN KEY (partie_id) REFERENCES partie (id)');
        $this->addSql('ALTER TABLE partie ADD CONSTRAINT FK_59B1F3D92C1E237 FOREIGN KEY (joueur1_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE partie ADD CONSTRAINT FK_59B1F3D80744DD9 FOREIGN KEY (joueur2_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE partie ADD CONSTRAINT FK_59B1F3D15ED8D43 FOREIGN KEY (tour_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mot_partie DROP FOREIGN KEY FK_D97116963977652');
        $this->addSql('ALTER TABLE mot_partie DROP FOREIGN KEY FK_D971169E075F7A4');
        $this->addSql('ALTER TABLE partie DROP FOREIGN KEY FK_59B1F3D92C1E237');
        $this->addSql('ALTER TABLE partie DROP FOREIGN KEY FK_59B1F3D80744DD9');
        $this->addSql('ALTER TABLE partie DROP FOREIGN KEY FK_59B1F3D15ED8D43');
        $this->addSql('DROP TABLE mot');
        $this->addSql('DROP TABLE mot_partie');
        $this->addSql('DROP TABLE partie');
    }
}
