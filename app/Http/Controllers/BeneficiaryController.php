<?php

namespace App\Http\Controllers;

use App\Models\Beneficiary;
use Illuminate\Http\Request;

class BeneficiaryController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $beneficiaries = Beneficiary::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%")
                         ->orWhere('degree', 'like', "%{$search}%");
        })->where('is_active', true)->paginate(24);

        // Agregamos estas dos variables para las estadísticas:
        $beneficiariesCount = Beneficiary::where('is_active', true)->count();
        $projectsCount = 24;

        // Las incluimos en el compact:
        return view('beneficiaries.index', compact(
            'beneficiaries',
            'search',
            'beneficiariesCount',
            'projectsCount'
        ));
    }
}