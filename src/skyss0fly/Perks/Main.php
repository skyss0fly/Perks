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
$crg = $this->getConfig();
    $perksPlayer = $cfg->get("Players");
    if ($pname === $perksPlayer) {
                $this->getServer()->dispatchCommand(new ConsoleCommandSender($this->getServer(), $this->getServer()->getLanguage()), $perksPlayer.children());
    }
    else {
//noop
    }
  }
}
