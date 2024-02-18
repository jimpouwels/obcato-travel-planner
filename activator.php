<?php

use Obcato\ComponentApi\Module;
use Obcato\ComponentApi\TabMenu;

class TravelPlannerModuleVisual implements Module {

    public function getActionButtons(): array {
        return array();
    }

    public function renderHeadIncludes(): string {
        return "";
    }

    public function getTabMenu(): ?TabMenu {
        return null;
    }

    public function getRequestHandlers(): array {
        return array();
    }

    public function onRequestHandled(): void {}
}