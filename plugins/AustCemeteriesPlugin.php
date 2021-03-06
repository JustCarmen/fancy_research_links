<?php

declare(strict_types=1);

namespace JustCarmen\Webtrees\Module\FancyResearchLinks\Plugin;

use Fisharebest\Webtrees\I18N;
use JustCarmen\Webtrees\Module\FancyResearchLinks\FancyResearchLinksModule;

class AustCemeteriesPlugin extends FancyResearchLinksModule
{
    public static function pluginLabel(): string
    {
        return 'Australian Cemeteries';
    }

    public static function pluginName(): string
	{
		return strtolower(basename(__FILE__, 'Plugin.php'));
	}

    public static function researchArea(): string
    {
        return I18N::translate('Australia');
    }

    public static function researchLink($name): string
    {
        return 'http://www.austcemindex.com/?given_names=' . $name['givn'] . '&family_name=' . $name['surn'];
    }
}
