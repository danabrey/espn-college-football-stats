<?php

use DanAbrey\ESPNCollegeFootballStats\Extractor\PlayerStatsExtractor;
use DanAbrey\ESPNCollegeFootballStats\PlayerSeason;
use PHPUnit\Framework\TestCase;

class PlayerStatsExtractorTest extends TestCase
{
    public function players()
    {
        return [
            [
                file_get_contents('./tests/fixtures/jerry-jeudy.json'),
                [2017, 2018, 2019],
            ],
            [
                file_get_contents('./tests/fixtures/justin-herbert.json'),
                [2016, 2017, 2018, 2019],
            ],
        ];
    }

    /**
     * @dataProvider players
     * @param $json
     * @param $seasons
     */
    public function test_can_extract_seasons($json, $seasons)
    {
        $playerStats = new PlayerStatsExtractor($json);
        /** @var PlayerSeason[] $crawledSeasons */
        $crawledSeasons = $playerStats->extractSeasonData();
        $this->assertIsArray($crawledSeasons);

        foreach ($seasons as $season) {
            $this->assertArrayHasKey($season, $crawledSeasons);
            $this->assertInstanceOf(PlayerSeason::class, $crawledSeasons[$season]);
        }
    }
}
