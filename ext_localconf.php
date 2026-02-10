<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTypoScript(
    'visual_editor_fluid_styled_content_addon',
    'setup',
    '@import "EXT:visual_editor_fluid_styled_content_addon/Configuration/TypoScript/setup.typoscript"',
    'defaultContentRendering'
);
