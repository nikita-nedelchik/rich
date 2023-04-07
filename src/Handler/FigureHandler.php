<?php

namespace App\Handler;

class FigureHandler
{
    private const CIRCLE_CORNERS = 0;
    private const SQUARE_CORNERS = 4;

    public function getShapeCornersCount(string ... $shapeName): string
    {
        if (empty($shapeName)) {
            throw new \InvalidArgumentException('You should enter a figure/figures');
        }

        return $this->getCornersByFigure($shapeName);
    }

    private function getCornersByFigure(array $figures): string
    {
        $result = '';

        foreach ($figures as $figure) {

            $result .= match ($figure) {
                'square' => $figure . ' - ' . self::SQUARE_CORNERS . PHP_EOL,
                'circle' => $figure . ' - ' . self::CIRCLE_CORNERS . PHP_EOL,
                default => $figure . ' - not defined' . PHP_EOL,
            };

        }

        return $result;
    }
}
