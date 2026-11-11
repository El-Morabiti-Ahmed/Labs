<?php

declare(strict_types=1);

trait WritesActivity
{
    protected function writeActivity(string $message): void
    {
        echo '[Activité] ' . $message . PHP_EOL;
    }
}

final class GameRegistry
{
    use WritesActivity;

    public function add(string $name): void
    {
        $this->writeActivity("Jeu ajouté : {$name}");
    }
}

final class GameReporter
{
    use WritesActivity;

    public function generate(string $name): void
    {
        $this->writeActivity("Rapport généré pour : {$name}");
    }
}

(new GameRegistry())->add('Rocket League');
(new GameReporter())->generate('Rocket League');
