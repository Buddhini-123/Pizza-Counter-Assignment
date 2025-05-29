<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{

//     Small Pack - $15 for 10 slices
// ● Medium Pack - $25 for 20 slices
// ● Large Pack - $35 for 30 slices
// ● Extra-Large Pack - $50 for 50 slices

// Calculate and display the cost associated with each package based on the total
// number of slices needed. You can use an array to store package details and perform
// the calculation.

// Identify and highlight the package that offers the best value for money.

    public function index()
    {
        $people = 10;
        $slicesPerPerson = 2;
        $totalSlices = $people * $slicesPerPerson;
        $results = [];
        $packages = [
            'Small Pack' => ['slices'=>10, 'price' => 15],
            'Medium Pack' => ['slices'=>20, 'price' => 25],
            'Large Pack' => ['slices'=>30, 'price' => 35],
            'Extra Pack' => ['slices'=>50, 'price' => 50],
        ];

        foreach ($packages as $key => $details) {
            $totalPacks = $totalSlices / $details['slices'];
            $totalCost = $totalPacks * $details['price'];

            $results[] = [
                'package' => $key,
                'packs' => $totalPacks,
                'total_cost' => $totalCost,
            ];
        }

        $bestPackage = collect($results)->sortBy('total_cost')->first();

        return view('pizza.index', compact('results', 'bestPackage', 'totalSlices', 'people'));
    }
}
