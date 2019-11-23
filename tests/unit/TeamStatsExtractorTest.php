<?php

use DanAbrey\ESPNCollegeFootballStats\Extractor\TeamStatsExtractor;
use DanAbrey\ESPNCollegeFootballStats\PlayerSeason;
use DanAbrey\ESPNCollegeFootballStats\TeamSeason;
use PHPUnit\Framework\TestCase;

class TeamStatsExtractorTest extends TestCase
{
    public function test_can_extract_seasons()
    {
        $teamStats = new TeamStatsExtractor(file_get_contents('./tests/fixtures/alabama.json'));

        /** @var TeamSeason[] $crawledSeasons */
        $season = $teamStats->extractSeasonData();

        $this->assertInstanceOf(TeamSeason::class, $season);
    }
}
