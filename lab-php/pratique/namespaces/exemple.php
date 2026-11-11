<?php

declare(strict_types=1);

namespace App\Models {
    final class Game
    {
        public function label(): string
        {
            return 'Jeu du catalogue';
        }
    }
}

namespace App\Reports {
    final class Game
    {
        public function label(): string
        {
            return 'Rapport des jeux';
        }
    }
}

namespace {
    $game = new \App\Models\Game();
    $report = new \App\Reports\Game();

    echo $game->label() . PHP_EOL;
    echo $report->label() . PHP_EOL;
}
