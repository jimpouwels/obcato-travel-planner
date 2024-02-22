<?php

namespace Jqtravel\TravelPlannerModule;

use Obcato\Core\admin\core\model\Module;
use Obcato\Core\admin\view\views\ModuleVisual;
use Obcato\Core\admin\view\views\TabMenu;

class TravelPlannerModuleVisual extends ModuleVisual {

    public function __construct(Module $module) {
        parent::__construct($module);
    }

    function loadTabMenu(TabMenu $tabMenu): int {
        return "";
    }

    function load(): void {}

    function getTemplateFilename(): string {
        return "";
    }
}