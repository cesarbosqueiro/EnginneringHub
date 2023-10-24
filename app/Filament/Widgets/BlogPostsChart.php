<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class BlogPostsChart extends ChartWidget
{
    protected static ?string $heading = 'Projetos concluídos.';
    protected int | string | array $columnSpan = 'full';
    protected function getData(): array
    {
        return [
            'md' => 10,
            'xl' => 10,
            'datasets' => [
                [
                    'label' => 'Projetos',
                    'data' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
                ],
            ],
            'labels' => ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
