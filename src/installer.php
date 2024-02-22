<?php

namespace Obcato\TravelPlanner;

use Obcato\Core\admin\modules\components\installer\ModuleInstaller;

class CustomModuleInstaller extends ModuleInstaller {

    public function isPopup(): bool {
        return false;
    }

    public function getModuleGroup(): string {
        return "maintain";
    }

    public function getActivatorClassName(): string {
        return "TravelPlannerModuleVisual";
    }

    public function getIdentifier(): string {
        return "travel_planner";
    }

    public function getInstallQueries(): array {
        return array();
    }

    public function getUninstallQueries(): array {
        return array();
    }

    public function getPackageStaticDir(): string {
        return "static";
    }

    public function getPackageTemplateDir(): string {
        return "templates";
    }

    public function getPackageTextResourceDir(): string {
        return "text_resources";
    }

}