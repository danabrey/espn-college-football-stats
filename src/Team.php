<?php
namespace DanAbrey\ESPNCollegeFootballStats;

class Team
{
    public string $id;

    /**
     * @var TeamSeason[]|array
     */
    public array $seasons = [];
}
