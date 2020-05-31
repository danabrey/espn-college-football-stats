<?php


namespace DanAbrey\ESPNCollegeFootballStats\Extractor;

use DanAbrey\ESPNCollegeFootballStats\PlayerSeason;
use DanAbrey\ESPNCollegeFootballStats\TeamSeason;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class TeamStatsExtractor
{
    /**
     * @var array
     */
    private $data;

    private const MAP = [
        'Rushing' => [
            'rushingAttempts',
            'rushingYards',
            'rushingTouchdowns',
        ],
        'Receiving' => [
            'receptions',
            'receivingYards',
            'receivingTouchdowns',
        ],
        'Passing' => [
            'passingTouchdowns',
            'passingYards',
            'passingAttempts',
            'completions',
            'interceptions',
            'sacks',
        ]
    ];

    public function __construct(string $json)
    {
        $this->data = json_decode($json, true);
    }

    public function extractSeasonData(): TeamSeason
    {
        $teamSeason = [];
        $teamSeason['year'] = $this->data['requestedSeason']['year'];

        foreach ($this->data['teamTotals'] as $category) {
            $categoryName = $category['displayName'];

            if (!array_key_exists($categoryName, self::MAP)) {
                continue;
            }

            foreach ($category['stats'] as $stat) {
                if (!in_array($stat['name'], self::MAP[$categoryName])) {
                    continue;
                }

                $teamSeason[$stat['name']] = str_replace(',', '', $stat['value']);
            }
        }

        $normalizers = [new ArrayDenormalizer(), new ObjectNormalizer()];
        $serializer = new Serializer($normalizers);

        return $serializer->denormalize($teamSeason, TeamSeason::class);
    }
}
