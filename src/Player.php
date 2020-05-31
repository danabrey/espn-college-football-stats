<?php
namespace DanAbrey\ESPNCollegeFootballStats;

class Player
{
    public string $id;

    /**
     * @var PlayerSeason[]|array
     */
    public array $seasons = [];
}
