<?php

namespace TTqco\EffectStar;
# i didnt know what to use so i just keeps stacking em on
use pocketmine\Player;
use pocketmine\Server;

use pocketmine\plugin\PluginBase;
use pocketmine\plugin\PluginBase as PB;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\utils\Config;

use pocketmine\event\Listener;

use pocketmine\event\player\PlayerInteractEvent;

use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener {

public function onEnable() {
$this->getServer()->getPluginManager()->registerEvents($this,$this);
$this->getLogger()->info(TextFormat::GREEN . "EffectStar Is Online");
$this->saveResource("config.yml")
}


public function onTouch(PlayerInteractEvent $event){
        $player = $event->getPlayer();
        $item = $event->getItem();
        $item->setCustomName("Mega boost");

#Effects
$effect = Effect::getEffect($effectid); //Effect Id 
$effect->setDuration($effectduration); //duration
$effect->setAmplifier($effectamp); //Amp
$effect->setVisible($effectvisible);

     switch($item->getId()){

   case 399: //Now can be changed on config as of build #10
  $player->sendMessage(TF::GREEN . "Your wish has been granted");
  $player->addEffect($effect); //adds effect stated in config
  $effectid = $this->getConfig()->get("Effect ID");
  $effectduration = $this->getConfig()->get("Effect Duration");
  $effectamp = $this->getConfig()->get("Effect Amp");
  $effectvisible = $this->getConfig()->get("Effect Visible");
break;
     }
}
}
