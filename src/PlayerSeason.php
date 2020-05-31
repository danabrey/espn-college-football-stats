<?php

namespace DanAbrey\ESPNCollegeFootballStats;

class PlayerSeason
{
    public int $year;
    public string $teamId;
    public string $teamSlug;
    public int $rushingAttempts = 0;
    public int $rushingYards = 0;
    public int $rushingTouchdowns = 0;
    public int $receptions = 0;
    public int $receivingYards = 0;
    public int $receivingTouchdowns = 0;
    public int $passingAttempts = 0;
    public int $passingCompletions = 0;
    public int $passingYards = 0;
    public int $passingInterceptions = 0;
    public int $passingTouchdowns = 0;
    public int $sacked = 0;
    public string $passerRating = '0.0';
    }
