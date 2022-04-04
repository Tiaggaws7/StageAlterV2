<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220404160226 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE contrat (id INT AUTO_INCREMENT NOT NULL, type_contrat VARCHAR(255) NOT NULL, date_debut VARCHAR(255) NOT NULL, date_fin VARCHAR(255) NOT NULL, duree_hebdomadaire INT NOT NULL, danger_ou_risques TINYINT(1) NOT NULL, mission VARCHAR(500) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE entreprise (id INT AUTO_INCREMENT NOT NULL, num_siret INT NOT NULL, code_naf VARCHAR(255) NOT NULL, code_idcc VARCHAR(255) NOT NULL, adresse_dexecution_contrat VARCHAR(255) NOT NULL, code_postal INT NOT NULL, ville VARCHAR(255) NOT NULL, telephone INT DEFAULT NULL, email VARCHAR(255) NOT NULL, type_employeur VARCHAR(255) NOT NULL, nombre_salaries INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE representant_entreprise (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, code_postal INT NOT NULL, ville VARCHAR(255) NOT NULL, telephone INT DEFAULT NULL, email VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE resp_alternant_entreprise (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, date_naiss VARCHAR(255) NOT NULL, emploi VARCHAR(255) NOT NULL, telephone INT DEFAULT NULL, email VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE resp_suivi_administratif (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, telephone INT DEFAULT NULL, email VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE etudiants ADD adresse VARCHAR(255) NOT NULL, ADD code_postal INT NOT NULL, ADD ville VARCHAR(255) NOT NULL, ADD telephone INT DEFAULT NULL, ADD email VARCHAR(255) NOT NULL, ADD nationalite VARCHAR(255) NOT NULL, ADD lieu_naiss VARCHAR(255) NOT NULL, ADD num_departement_naiss INT NOT NULL, ADD num_secu INT NOT NULL, ADD regime_social VARCHAR(255) NOT NULL, ADD dernier_diplome VARCHAR(255) NOT NULL, ADD handicape TINYINT(1) NOT NULL, ADD contrat_apprentissage VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE contrat');
        $this->addSql('DROP TABLE entreprise');
        $this->addSql('DROP TABLE representant_entreprise');
        $this->addSql('DROP TABLE resp_alternant_entreprise');
        $this->addSql('DROP TABLE resp_suivi_administratif');
        $this->addSql('ALTER TABLE etudiants DROP adresse, DROP code_postal, DROP ville, DROP telephone, DROP email, DROP nationalite, DROP lieu_naiss, DROP num_departement_naiss, DROP num_secu, DROP regime_social, DROP dernier_diplome, DROP handicape, DROP contrat_apprentissage');
    }
}
