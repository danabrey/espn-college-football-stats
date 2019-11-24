<?php
namespace DanAbrey\ESPNCollegeFootballStats;

use DanAbrey\ESPNCollegeFootballStats\Extractor\PlayerStatsExtractor;
use DanAbrey\ESPNCollegeFootballStats\Extractor\TeamStatsExtractor;
use DanAbrey\ESPNNCAAStatsScraper\Exception\PlayerNotFoundException;

class ESPNCollegeFootballStats
{
    private $seasons = [];

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

    public function getTeam(string $id): Team
    {
        if (count($this->seasons) < 1) {
            throw new \Exception('Must set seasons parameter');
        }

        $team = new Team();
        $team->setId($id);

        $seasons = [];

        foreach ($this->seasons as $season) {
            $json = file_get_contents(
                sprintf(
                    'https://site.web.api.espn.com/apis/site/v2/sports/football/college-football/teams/%s/athletes/statistics?region=us&lang=en&contentorigin=espn&season=%s',
                    $id,
                    $season
                )
            );

            $seasons[] = (new TeamStatsExtractor($json))->extractSeasonData();
        }

        $team->setSeasons($seasons);

        return $team;
    }

    public function setSeasons(array $seasons)
    {
        $this->seasons = $seasons;
    }
}
