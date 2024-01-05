<?php

defined('TYPO3') || die('Access denied.');

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/form']['afterSubmit'][1704442017]
    = \Passionweb\FormAfterSubmit\Hook\AfterFormSubmit::class;

