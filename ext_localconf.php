<?php

# $Id: ext_localconf.php 896 2009-02-06 01:48:28Z macmade $

// Security check
if( !defined( 'TYPO3_MODE' ) ) {
    
    // TYPO3 is not running
    trigger_error(
        'This script cannot be used outside TYPO3',
        E_USER_ERROR
    );
}

// Adds the frontend plugin
t3lib_extMgm::addPItoST43(
    $_EXTKEY,
    'pi1/class.tx_httpsmacmade_pi1.php',
    '_pi1',
    '',
    0
);
