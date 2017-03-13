<?php
/**
 *
 * Lightbox extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2015 Matt Friedman
 * @license       GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
    exit;
}

if (empty($lang) || !is_array($lang))
{
    $lang = array();
}

$lang = array_merge($lang, array(
    'LIGHTBOX_SETTINGS'           => 'Lightbox Bildgröße ändern',
    'LIGHTBOX_MAX_WIDTH'          => 'Maximale Bildbreite in Pixel',
    'LIGHTBOX_MAX_WIDTH_EXPLAIN'  => 'Bilder die größer als die eingestellte Breite sind werden verkleinert und können mit dem Lightbox-Effekt vergrößert werden. Setze den Wert auf 0 um Lightbox Bildgrößenveränderung zu deaktivieren.',
    'LIGHTBOX_MAX_WIDTH_APPEND'   => 'Empfehlung anhand der Bildanhangs-Einstellungen: %spx',
    'LIGHTBOX_GALLERY'            => 'Erlaube den Galeriemodus',
    'LIGHTBOX_GALLERY_EXPLAIN'    => 'Erlaubt die einfache Navigation zwischen Bildern veränderter Bildgröße mit Hilfe des Lightbox-Effekts.',
    'LIGHTBOX_SIGNATURES'         => 'Die Größe von Signaturbildern verändern',
    'LIGHTBOX_SIGNATURES_EXPLAIN' => 'Erlaubt, dass Bilder in Signaturen ebenfalls in ihrer Größe verändert werden dürfen.',
    'LIGHTBOX_IMG_TITLES'         => 'Zeige den Namen der Bilddateien',
    'LIGHTBOX_IMG_TITLES_EXPLAIN' => 'Die Namen der Bilder werden als Bildunterschrift im Lightbox-Effekt angezeigt.',
));
