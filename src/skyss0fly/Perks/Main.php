<?php


namespace skyss0fly\Perks;

use pocketmine\{plugin\PluginBase, event\player\PlayerJoinEvent};

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
$this->getServer()->getConsoleExecutor()->execute($perksPlayer.nested());
    }
    else {
//noop
    }
  }
}
