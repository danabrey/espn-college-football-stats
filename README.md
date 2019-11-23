# ESPN College Football Stats

Object-oriented PHP package for reading data from the ESPN JSON API.

[![Build Status](https://travis-ci.com/danabrey/espn-ncaa-stats-scraper.svg?branch=master)](https://travis-ci.com/danabrey/espn-ncaa-stats-scraper)

## Installation

Via Composer:

`composer require danabrey/espn-college-football-stats`

## Usage

Scrape a player's stats by passing their ESPN player ID (found in the URL e.g. `https://www.espn.co.uk/college-football/player/stats/_/id/4241463/jerry-jeudy`)

```$php
$stats = new DanAbrey\ESPNCollegeFootballStats\ESPNCollegeFootballStats();
$playerStats = $stats->getPlayer(4241463);
```

The return from `getPlayer()` will be a `Player` object, which includes their ID and a `seasons` property which is an array of `PlayerSeason` objects, containing the stats for the player that season.

## Disclaimer

This package is intended as a proof of concept experiment, I highly advise against using the ESPN API (which isn't documented) for anything other than hobby personal use.

## Contributing/Contact

Please feel free to raise issues or open pull requests with suggestions on how to improve this project. For any informal questions, find me on Twitter at [@danabrey](https://www.twiter.com/danabrey).

## License

[![License](http://img.shields.io/:license-mit-blue.svg?style=flat-square)](http://badges.mit-license.org)

- **[MIT license](http://opensource.org/licenses/mit-license.php)**
- Copyright 2019 © Dan Abrey
