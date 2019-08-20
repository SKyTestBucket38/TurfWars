<?php

namespace TurfWars;

use pocketmine\scheduler\Task;
use pocketmine\Server;

class Task extends Task {

	public function __construct(Main $plugin){
		$this->plugin = $plugin;
	}


    public function onRun($currentTick){
    $this->plugin->Second();
}

}
