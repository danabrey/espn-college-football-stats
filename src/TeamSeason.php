<?php

namespace DanAbrey\ESPNCollegeFootballStats;

class TeamSeason
{
    /**
     * @var int
     */
    private $year;

    /**
     * @var int
     */
    private $rushingAttempts = 0;

    /**
     * @var int
     */
    private $rushingYards = 0;

    /**
     * @var int
     */
    private $rushingTouchdowns = 0;

    /**
     * @var int
     */
    private $receptions = 0;

    /**
     * @var int
     */
    private $receivingYards = 0;

    /**
     * @var int
     */
    private $receivingTouchdowns = 0;

    /**
     * @var int
     */
    private $passingAttempts = 0;

    /**
     * @var int
     */
    private $completions = 0;

    /**
     * @var int
     */
    private $passingYards = 0;

    /**
     * @var int
     */
    private $interceptions = 0;

    /**
     * @var int
     */
    private $passingTouchdowns = 0;

    /**
     * @var int
     */
    private $sacks = 0;

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * @param int $year
     */
    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    /**
     * @return int
     */
    public function getRushingAttempts(): int
    {
        return $this->rushingAttempts;
    }

    /**
     * @param int $rushingAttempts
     */
    public function setRushingAttempts(int $rushingAttempts): void
    {
        $this->rushingAttempts = $rushingAttempts;
    }

    /**
     * @return int
     */
    public function getRushingYards(): int
    {
        return $this->rushingYards;
    }

    /**
     * @param int $rushingYards
     */
    public function setRushingYards(int $rushingYards): void
    {
        $this->rushingYards = $rushingYards;
    }

    /**
     * @return int
     */
    public function getRushingTouchdowns(): int
    {
        return $this->rushingTouchdowns;
    }

    /**
     * @param int $rushingTouchdowns
     */
    public function setRushingTouchdowns(int $rushingTouchdowns): void
    {
        $this->rushingTouchdowns = $rushingTouchdowns;
    }

    /**
     * @return int
     */
    public function getReceptions(): int
    {
        return $this->receptions;
    }

    /**
     * @param int $receptions
     */
    public function setReceptions(int $receptions): void
    {
        $this->receptions = $receptions;
    }

    /**
     * @return int
     */
    public function getReceivingYards(): int
    {
        return $this->receivingYards;
    }

    /**
     * @param int $receivingYards
     */
    public function setReceivingYards(int $receivingYards): void
    {
        $this->receivingYards = $receivingYards;
    }

    /**
     * @return int
     */
    public function getReceivingTouchdowns(): int
    {
        return $this->receivingTouchdowns;
    }

    /**
     * @param int $receivingTouchdowns
     */
    public function setReceivingTouchdowns(int $receivingTouchdowns): void
    {
        $this->receivingTouchdowns = $receivingTouchdowns;
    }

    /**
     * @return int
     */
    public function getPassingAttempts(): int
    {
        return $this->passingAttempts;
    }

    /**
     * @param int $passingAttempts
     */
    public function setPassingAttempts(int $passingAttempts): void
    {
        $this->passingAttempts = $passingAttempts;
    }

    /**
     * @return int
     */
    public function getCompletions(): int
    {
        return $this->completions;
    }

    /**
     * @param int $completions
     */
    public function setCompletions(int $completions): void
    {
        $this->completions = $completions;
    }

    /**
     * @return int
     */
    public function getPassingYards(): int
    {
        return $this->passingYards;
    }

    /**
     * @param int $passingYards
     */
    public function setPassingYards(int $passingYards): void
    {
        $this->passingYards = $passingYards;
    }

    /**
     * @return int
     */
    public function getInterceptions(): int
    {
        return $this->interceptions;
    }

    /**
     * @param int $interceptions
     */
    public function setInterceptions(int $interceptions): void
    {
        $this->interceptions = $interceptions;
    }

    /**
     * @return int
     */
    public function getPassingTouchdowns(): int
    {
        return $this->passingTouchdowns;
    }

    /**
     * @param int $passingTouchdowns
     */
    public function setPassingTouchdowns(int $passingTouchdowns): void
    {
        $this->passingTouchdowns = $passingTouchdowns;
    }

    /**
     * @return int
     */
    public function getSacks(): int
    {
        return $this->sacks;
    }

    /**
     * @param int $sacks
     */
    public function setSacks(int $sacks): void
    {
        $this->sacks = $sacks;
    }
}
