<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230409225220 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(100) NOT NULL, prenom VARCHAR(100) NOT NULL, genre VARCHAR(100) DEFAULT NULL, email VARCHAR(100) NOT NULL, gsm VARCHAR(100) DEFAULT NULL, adresse VARCHAR(100) DEFAULT NULL, type_vehicule VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE entree_sortie (id INT AUTO_INCREMENT NOT NULL, paiement_id INT NOT NULL, reservation_id INT NOT NULL, date_entree DATE NOT NULL, date_sortie DATE NOT NULL, UNIQUE INDEX UNIQ_B71365362A4C4478 (paiement_id), UNIQUE INDEX UNIQ_B7136536B83297E7 (reservation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE paiement (id INT AUTO_INCREMENT NOT NULL, montant_paye DOUBLE PRECISION NOT NULL, date_paiement DATE NOT NULL, mode_paiement VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE parking (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(100) NOT NULL, capacite INT NOT NULL, emplacement_geo VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE parking_type_prix (parking_id INT NOT NULL, type_prix_id INT NOT NULL, INDEX IDX_E851F607F17B2DD (parking_id), INDEX IDX_E851F607BC664D07 (type_prix_id), PRIMARY KEY(parking_id, type_prix_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE place (id INT AUTO_INCREMENT NOT NULL, parking_id INT NOT NULL, type VARCHAR(100) NOT NULL, couverture VARCHAR(100) NOT NULL, INDEX IDX_741D53CDF17B2DD (parking_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, place_id INT NOT NULL, paiement_id INT NOT NULL, client_id INT NOT NULL, date_reservation DATE NOT NULL, INDEX IDX_42C84955DA6A219 (place_id), UNIQUE INDEX UNIQ_42C849552A4C4478 (paiement_id), INDEX IDX_42C8495519EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_prix (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(100) NOT NULL, tarif DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE entree_sortie ADD CONSTRAINT FK_B71365362A4C4478 FOREIGN KEY (paiement_id) REFERENCES paiement (id)');
        $this->addSql('ALTER TABLE entree_sortie ADD CONSTRAINT FK_B7136536B83297E7 FOREIGN KEY (reservation_id) REFERENCES reservation (id)');
        $this->addSql('ALTER TABLE parking_type_prix ADD CONSTRAINT FK_E851F607F17B2DD FOREIGN KEY (parking_id) REFERENCES parking (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE parking_type_prix ADD CONSTRAINT FK_E851F607BC664D07 FOREIGN KEY (type_prix_id) REFERENCES type_prix (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE place ADD CONSTRAINT FK_741D53CDF17B2DD FOREIGN KEY (parking_id) REFERENCES parking (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955DA6A219 FOREIGN KEY (place_id) REFERENCES place (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849552A4C4478 FOREIGN KEY (paiement_id) REFERENCES paiement (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495519EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE entree_sortie DROP FOREIGN KEY FK_B71365362A4C4478');
        $this->addSql('ALTER TABLE entree_sortie DROP FOREIGN KEY FK_B7136536B83297E7');
        $this->addSql('ALTER TABLE parking_type_prix DROP FOREIGN KEY FK_E851F607F17B2DD');
        $this->addSql('ALTER TABLE parking_type_prix DROP FOREIGN KEY FK_E851F607BC664D07');
        $this->addSql('ALTER TABLE place DROP FOREIGN KEY FK_741D53CDF17B2DD');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955DA6A219');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C849552A4C4478');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C8495519EB6921');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE entree_sortie');
        $this->addSql('DROP TABLE paiement');
        $this->addSql('DROP TABLE parking');
        $this->addSql('DROP TABLE parking_type_prix');
        $this->addSql('DROP TABLE place');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE type_prix');
    }
}
