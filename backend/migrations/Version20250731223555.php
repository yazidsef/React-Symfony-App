<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250731223555 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE participationlist (id INT AUTO_INCREMENT NOT NULL, uuid_vainkeur VARCHAR(50) DEFAULT NULL, email_p VARCHAR(55) NOT NULL, phone_p INT DEFAULT NULL, chance_p INT NOT NULL, trigger_chance LONGTEXT DEFAULT NULL, date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tiragelist (id INT AUTO_INCREMENT NOT NULL, id_top VARCHAR(50) NOT NULL, uuid_vainkeur VARCHAR(255) NOT NULL, type VARCHAR(50) DEFAULT NULL, numero_colis VARCHAR(100) NOT NULL, comments LONGTEXT DEFAULT NULL, date DATETIME NOT NULL, status VARCHAR(255) DEFAULT NULL, is_new TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE toplist (id INT AUTO_INCREMENT NOT NULL, idvainkeur INT DEFAULT NULL, id_user INT DEFAULT NULL, uuid_user VARCHAR(50) DEFAULT NULL, id_top_rank INT NOT NULL, date_rank DATETIME NOT NULL, ranking LONGTEXT DEFAULT NULL, id_resume_rank INT DEFAULT NULL, nb_votes INT DEFAULT NULL, timeline_main INT NOT NULL, banner VARCHAR(60) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commandes ADD uuid_vainkeur VARCHAR(50) DEFAULT NULL, ADD stacking_number LONGTEXT DEFAULT NULL, ADD game VARCHAR(50) NOT NULL, ADD comment LONGTEXT DEFAULT NULL, ADD email_sent VARCHAR(5) DEFAULT NULL, ADD is_new INT DEFAULT NULL, CHANGE idProduit id_produit INT NOT NULL');
        $this->addSql('ALTER TABLE user ADD uuid_user VARCHAR(50) NOT NULL, ADD date_register_user DATETIME NOT NULL, ADD emailuser VARCHAR(90) NOT NULL, ADD pays_user VARCHAR(50) NOT NULL, ADD avatar_user VARCHAR(255) NOT NULL, ADD pseudo_user VARCHAR(255) NOT NULL, ADD pseudo_slug_user VARCHAR(255) NOT NULL, ADD role_user INT NOT NULL, ADD code_parrain_user VARCHAR(255) NOT NULL, ADD parrained_by VARCHAR(255) DEFAULT NULL, ADD instagram_user VARCHAR(255) DEFAULT NULL, ADD twitch_user VARCHAR(255) DEFAULT NULL, ADD youtube_user VARCHAR(255) DEFAULT NULL, ADD tiktokuser VARCHAR(255) NOT NULL, ADD description_user VARCHAR(255) DEFAULT NULL, ADD is_new TINYINT(1) NOT NULL, ADD snapchat_user VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE participationlist');
        $this->addSql('DROP TABLE tiragelist');
        $this->addSql('DROP TABLE toplist');
        $this->addSql('ALTER TABLE commandes DROP uuid_vainkeur, DROP stacking_number, DROP game, DROP comment, DROP email_sent, DROP is_new, CHANGE id_produit idProduit INT NOT NULL');
        $this->addSql('ALTER TABLE user DROP uuid_user, DROP date_register_user, DROP emailuser, DROP pays_user, DROP avatar_user, DROP pseudo_user, DROP pseudo_slug_user, DROP role_user, DROP code_parrain_user, DROP parrained_by, DROP instagram_user, DROP twitch_user, DROP youtube_user, DROP tiktokuser, DROP description_user, DROP is_new, DROP snapchat_user');
    }
}
