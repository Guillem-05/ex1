<?php
class Character {
    protected $name;
    protected $health;
    protected $attack;

    public function __construct($name, $health, $attack) {
        $this->name = $name;
        $this->health = $health;
        $this->attack = $attack;
    }

    public function attack($target) {
        $damage = rand(0, $this->attack);
        $target->receiveDamage($damage);
        return $damage;
    }

    public function receiveDamage($damage) {
        $this->health -= $damage;
        if ($this->health < 0) {
            $this->health = 0;
        }
    }

    public function isAlive() {
        return $this->health > 0;
    }

    public function getName() {
        return $this->name;
    }

    public function getHealth() {
        return $this->health;
    }
}
?>
