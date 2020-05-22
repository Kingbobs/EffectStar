<?php

namespace TTqco\Main;
# i didnt know what to use so i just keeps stacking em on
use pocketmine\plugin\PluginBase as PB;
use pocketmine\event\Listener as L;
use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\entity\Effect;
use pocketmine\plugin\PluginBase;
use pocketmine\item\Item;
use pocketmine\utils\TextFormat as TF;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\utils\Config;

class Main extends PluginBase implements Listener {

public function onEnable() {
$this->getServer()->getPluginManager()->registerEvents($this,$this);
$this->getLogger()->info(TextFormat::GREEN . "EffectStar Is Online");
}


public function onTouch(PlayerInteractEvent $event){
        $player = $event->getPlayer();
        $item = $event->getItem();
        $item->setCustomName("Mega Boost");

#Effects
$effect = Effect::getEffect($effectid); //Effect Id 
$effect->setDuration($effectduration); //duration
$effect->setAmplifier($effectamp); //Amp
$effect->setVisible($effectvisible);

     switch($item->getId()){

   case $idofitem: //Now can be changed on config as of build #10
  $player->sendMessage(TF::GREEN . "Your wish has been granted");
  $player->addEffect($effect); //adds effect stated in config
  $effectid = $this->getConfig()->get("Effect ID");
  $effectduration = $this->getConfig()->get("Effect Duration");
  $effectamp = $this->getConfig()->get("Effect Amp");
  $effectvisible = $this->getConfig()->get("Effect Visible");
  $idofitem = $this->getConfig()->get("Item ID");
break;
     }
}
}
