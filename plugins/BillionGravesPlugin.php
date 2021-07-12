<?php

declare(strict_types=1);

namespace JustCarmen\Webtrees\Module\FancyResearchLinks\Plugin;

use Fisharebest\Webtrees\I18N;
use JustCarmen\Webtrees\Module\FancyResearchLinks\FancyResearchLinksModule;

class BillionGravesPlugin extends FancyResearchLinksModule
{
	public static function pluginLabel(): string
    {
		return 'Billion Graves';
	}

	public static function pluginName(): string
	{
		return strtolower(basename(__FILE__, 'Plugin.php'));
	}

	public static function researchArea(): string
    {
		return I18N::translate('International');
	}

	public static function researchLink($name): string
    {
		return 'https://billiongraves.com/search/results?given_names=' . $name['first'] . '&family_names=' . $name['surn'] . '&action=search&exact=true#/';
	}
}
