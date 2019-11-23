<?php
namespace DanAbrey\ESPNCollegeFootballStats;

class Player
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var array
     */
    private $seasons = [];

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return array
     */
    public function getSeasons(): array
    {
        return $this->seasons;
    }

    /**
     * @param array $seasons
     */
    public function setSeasons(array $seasons): void
    {
        $this->seasons = $seasons;
    }
}
