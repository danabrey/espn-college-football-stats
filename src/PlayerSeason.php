<?php

namespace DanAbrey\ESPNCollegeFootballStats;

class PlayerSeason
{
    /**
     * @var int
     */
    private $year;

    /**
     * @var string
     */
    private $teamId;

    /**
     * @var string
     */
    private $teamSlug;

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
    private $passingCompletions = 0;

    /**
     * @var int
     */
    private $passingYards = 0;

    /**
     * @var int
     */
    private $passingInterceptions = 0;

    /**
     * @var int
     */
    private $passingTouchdowns = 0;

    /**
     * @var int
     */
    private $sacked = 0;

    /**
     * @var string
     */
    private $passerRating = '0.0';

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
     * @return string
     */
    public function getTeamId(): string
    {
        return $this->teamId;
    }

    /**
     * @param string $teamId
     */
    public function setTeamId(string $teamId): void
    {
        $this->teamId = $teamId;
    }

    /**
     * @return string
     */
    public function getTeamSlug(): string
    {
        return $this->teamSlug;
    }

    /**
     * @param string $teamSlug
     */
    public function setTeamSlug(string $teamSlug): void
    {
        $this->teamSlug = $teamSlug;
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
    public function getPassingCompletions(): int
    {
        return $this->passingCompletions;
    }

    /**
     * @param int $passingCompletions
     */
    public function setPassingCompletions(int $passingCompletions): void
    {
        $this->passingCompletions = $passingCompletions;
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
    public function getPassingInterceptions(): int
    {
        return $this->passingInterceptions;
    }

    /**
     * @param int $passingInterceptions
     */
    public function setPassingInterceptions(int $passingInterceptions): void
    {
        $this->passingInterceptions = $passingInterceptions;
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
    public function getSacked(): int
    {
        return $this->sacked;
    }

    /**
     * @param int $sacked
     */
    public function setSacked(int $sacked): void
    {
        $this->sacked = $sacked;
    }

    /**
     * @return string
     */
    public function getPasserRating(): string
    {
        return $this->passerRating;
    }

    /**
     * @param string $passerRating
     */
    public function setPasserRating(string $passerRating): void
    {
        $this->passerRating = $passerRating;
    }

}
