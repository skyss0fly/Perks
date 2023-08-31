<?php


namespace skyss0fly\Perks;

use pocketmine\{plugin\PluginBase, event\player\PlayerJoinEvent};
use pocketmine\console\ConsoleCommandSender;
class Main extends PluginBase {


public function onLoad(): void {
$this->saveDefaultConfig();
}

  public function onJoin(PlayerJoinEvent $event) {
$player = $event->getPlayer();
    $pname = $player->getName();
$cfg = $this->getConfig();
    $perksPlayer = $cfg->get("Players");
    if (in_array($pname, $perksPlayer)) {
  
foreach ($perksPlayer as $command) {
    $this->getServer()->dispatchCommand(new ConsoleCommandSender($this->getServer(), $this->getServer()->getLanguage()), $command);
}
    }
    else {
//noop
    }
  }
}
