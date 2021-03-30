<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210327143927 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE livres DROP FOREIGN KEY livres_ibfk_2');
        $this->addSql('ALTER TABLE livres DROP FOREIGN KEY livres_ibfk_1');
        $this->addSql('DROP TABLE auteurs');
        $this->addSql('DROP TABLE bibliotheque');
        $this->addSql('DROP TABLE livres');
        $this->addSql('ALTER TABLE user MODIFY id_user INT NOT NULL');
        $this->addSql('ALTER TABLE user DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE user ADD email VARCHAR(180) NOT NULL, ADD roles JSON NOT NULL, ADD password VARCHAR(255) NOT NULL, DROP nom_user, DROP prenom_user, DROP id_biblio, CHANGE id_user id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)');
        $this->addSql('ALTER TABLE user ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE auteurs (id_auth INT AUTO_INCREMENT NOT NULL, nom_auth VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, INDEX nom_auth (nom_auth), PRIMARY KEY(id_auth)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE bibliotheque (id_bibli INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, nom_bibli VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, date DATE NOT NULL, INDEX id_user (id_user), PRIMARY KEY(id_bibli)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE livres (id_bibli INT NOT NULL, idLivre INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, anneeParution INT NOT NULL, maisonEdition VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, Auteur VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, synopsis TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, genreLitteraire VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, premiereDeCouverture VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, INDEX Auteur (Auteur), INDEX id_bibli (id_bibli), PRIMARY KEY(idLivre)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE bibliotheque ADD CONSTRAINT bibliotheque_ibfk_1 FOREIGN KEY (id_user) REFERENCES user (id_user) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE livres ADD CONSTRAINT livres_ibfk_1 FOREIGN KEY (id_bibli) REFERENCES bibliotheque (id_bibli) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE livres ADD CONSTRAINT livres_ibfk_2 FOREIGN KEY (Auteur) REFERENCES auteurs (nom_auth) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX UNIQ_8D93D649E7927C74 ON user');
        $this->addSql('ALTER TABLE user DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE user ADD prenom_user VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ADD id_biblio INT NOT NULL, DROP email, DROP roles, CHANGE id id_user INT AUTO_INCREMENT NOT NULL, CHANGE password nom_user VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`');
        $this->addSql('ALTER TABLE user ADD PRIMARY KEY (id_user)');
    }
}
