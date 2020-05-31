<?php


namespace DanAbrey\ESPNCollegeFootballStats\Extractor;

use DanAbrey\ESPNCollegeFootballStats\PlayerSeason;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class PlayerStatsExtractor
{
    /**
     * @var array
     */
    private $data;

    private const MAP = [
        'Rushing' => [
            0 => 'rushingAttempts',
            1 => 'rushingYards',
            3 => 'rushingTouchdowns',
        ],
        'Receiving' => [
            0 => 'receptions',
            1 => 'receivingYards',
            3 => 'receivingTouchdowns',
        ],
        'Passing' => [
            0 => 'passingCompletions',
            1 => 'passingAttempts',
            3 => 'passingYards',
            5 => 'passingTouchdowns',
            6 => 'passingInterceptions',
            8 => 'sacked',
            9 => 'passerRating',
        ]
    ];

    public function __construct(string $json)
    {
        $this->data = json_decode($json, true);
    }

    /**
     * @return PlayerSeason[]|array
     */
    public function extractSeasonData(): array
    {
        $seasons = [];

        foreach ($this->data['categories'] as $category) {
            $categoryName = $category['displayName'];

            if (!array_key_exists($categoryName, self::MAP)) {
                continue;
            }

            foreach ($category['statistics'] as $statYear) {

                $season = $seasons[$statYear['season']['year']] ?? [
                        'year' => $statYear['season']['year'],
                        'teamId' => $statYear['teamId'],
                        'teamSlug' => $statYear['teamSlug'],
                    ];

                foreach ($statYear['stats'] as $i => $stat) {
                    if (!array_key_exists($i, self::MAP[$categoryName])) {
                        continue;
                    }

                    $season[self::MAP[$categoryName][$i]] = str_replace(',', '', $stat);
                }

                $seasons[$statYear['season']['year']] = $season;
            }
        }

        $normalizers = [new ArrayDenormalizer(), new ObjectNormalizer()];
        $serializer = new Serializer($normalizers);

        foreach ($seasons as &$season) {
            $season = $serializer->denormalize($season, PlayerSeason::class);
        }

        return $seasons;
    }
}
