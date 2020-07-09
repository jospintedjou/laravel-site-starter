<?php
/**
 * Created by PhpStorm.
 * User: LE BERANOL
 * Date: 20/03/2018
 * Time: 13:54
 */

namespace App;


/**
 *vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOStatement.php
 *
 * public function errorInfo() {
 * parent::errorInfo();
 * }
 *
 * public function closeCursor() {
 * parent::closeCursor();
 * }
 *
 * public function columnCount() {
 * parent::columnCount();
 * } */
class Constantes
{
    //Constantes booleene, image est dans les favoris
    const   HOMME = 'homme';
    const FEMME = 'femme';

    const ROLE_ADMIN = 'admin';

    const ETAT_INITIAL = 'initial';
    const ETAT_FACTURE_ENVOYE = 'facture envoyee';
    const ETAT_TERMINE = 'termine';

    const TYPE_ACHAT = 'achat';
    const TYPE_TRANSFERT = 'transfert';

    const MAIL_ADMIN = "contact@devpassionacademy.com";
    //const MAIL_ADMIN2 = "tchegnebe@yahoo.fr";
    const MAIL_ADMIN2 = "tedjoujospin@yahoo.fr";
}