<?php

declare(strict_types=1);

final class GameCatalog
{
    /** @param array<int, array{name: string, platform: string}> $games */
    public function __construct(private array $games)
    {
    }

    /** @return array{name: string, platform: string} */
    public function findByName(string $name): array
    {
        foreach ($this->games as $game) {
            if ($game['name'] === $name) {
                return $game;
            }
        }

        throw new RuntimeException("Le jeu « {$name} » est introuvable.");
    }
}

$catalog = new GameCatalog([
    ['name' => 'Rocket League', 'platform' => 'PC'],
]);

try {
    $game = $catalog->findByName('Rocket League');
    echo "Jeu trouvé : {$game['name']} ({$game['platform']})" . PHP_EOL;

    $catalog->findByName('Jeu inconnu');
} catch (RuntimeException $exception) {
    echo "Recherche impossible : {$exception->getMessage()}" . PHP_EOL;
}
