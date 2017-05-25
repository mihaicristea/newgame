<?php

abstract class AbstractCharacterFactory
{
    public abstract function create();
}

class HeroFactory extends AbstractCharacterFactory
{
    public function create()
    {
        return new Hero;
    }
}

class BeastFactory extends AbstractCharacterFactory
{
    public function create()
    {
        return new Beast;
    }
}