<?php
namespace DanAbrey\ESPNCollegeFootballStats;

use DanAbrey\ESPNCollegeFootballStats\Extractor\PlayerStatsExtractor;
use DanAbrey\ESPNNCAAStatsScraper\Exception\PlayerNotFoundException;

class ESPNCollegeFootballStats
{
    /**
     * @param string $id
     * @return Player
     * @throws PlayerNotFoundException
     */
    public function getPlayer(string $id): Player
    {
        $json = file_get_contents(
            sprintf(
                'https://site.web.api.espn.com/apis/common/v3/sports/football/college-football/athletes/%s/stats?region=gb&lang=en&contentorigin=espn',
                $id
        ));

        if (!$json) {
            throw new PlayerNotFoundException();
        }

        $player = new Player();
        $player->setId($id);

        $seasons = (new PlayerStatsExtractor($json))->extractSeasonData();
        $player->setSeasons($seasons);

        return $player;
    }
}
