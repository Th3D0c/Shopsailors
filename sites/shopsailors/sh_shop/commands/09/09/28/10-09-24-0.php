<?php
if(!defined('SH_MARKER')){
    header('location: directCallForbidden.php');
}

$command = array (
  'titles' => 
  array (
    0 => 'Référence',
    1 => 'Produit',
    2 => 'PU TTC',
    3 => 'Qté',
    4 => 'Total TTC',
  ),
  'elements' => 
  array (
    0 => 
    array (
      0 => 'P218-02-15',
      1 => 'Barracuda 120',
      2 => '34,00',
      3 => '1',
      4 => '34,00',
    ),
    1 => 
    array (
      0 => 'Livraison',
      1 => 'UPS',
      2 => '21,55',
      3 => 1,
      4 => '21,55',
    ),
  ),
  'customerService' => 
  array (
    0 => 'Service Client :',
    1 => '04 92 81 42 32',
    2 => 'service-client@maboutique.com',
  ),
  'billingAddressIntro' => 'Adresse de facturation :',
  'billingAddress' => 
  array (
    0 => 'Brice Parent',
    1 => 'dfghfdh fghfd',
    2 => '13290 Les Milles',
  ),
  'shippingAddressIntro' => 'Adresse de livraison :',
  'shippingAddress' => 
  array (
    0 => 'Brice Parent',
    1 => 'ghtrhr htrhvh',
    2 => 'fgh fg hfg',
    3 => '13540 Puricard',
  ),
  'totalHT' => '46,45€',
  'totalTTC' => '55,55€',
  'client' => 
  array (
    'id' => '9040100001',
    'name' => 'Pascal VAN DOERSOELLAER',
    'address' => 'N° client : 9040100001
0442921737
briceparent@free.fr',
  ),
  'seller' => 
  array (
    'name' => 'Websailors',
    'address' => '62, av Joannon
Les Palombes
13540 Puyricard',
  ),
  'author' => 'Websailors pour Websailors',
  'totalHTName' => 'Total HT : ',
  'totalTTCName' => 'Total TTC : ',
  'logo' => '/sites/websailors/sh_images/site/banner.jpg',
  'footer' => 'Websailors - SARL SCOP au capital variable de 1000€ - Siège : 62 av. Joannon - Les Palombes - 13540 Puyricard
Tel: +33 6 81 21 05 56 - facturation@websailors.fr - Siren : 512310814 - RCS d\'Aix-en-Provence',
  'headLine' => 'Madame, Monsieur,
par la présente nous vous joignons la facture réalisée conformément à nos conditions générales de vente:',
  'fillColor' => 
  array (
    0 => 153,
    1 => 204,
    2 => 204,
  ),
  'billId' => 1069,
  'title' => 'Facture n°1069',
  'subject' => 'Facture du 28/09/2009 pour Pascal VAN DOERSOELLAER',
);