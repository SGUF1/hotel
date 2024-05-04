<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class HotelRevenue extends Chart
{
    public function __construct()
    {
        parent::__construct();

        $this->type('bar');
        $this->labels(['One', 'Two', 'Three']);
        $this->dataset('Sample Data', 'bar', [100, 200, 300])->options([
            'borderWidth' => 1
        ]);

        $this->options([
            'scales' => [
                'y' => [
                    'beginAtZero' => true
                ]
            ]
        ]);
    }
}
