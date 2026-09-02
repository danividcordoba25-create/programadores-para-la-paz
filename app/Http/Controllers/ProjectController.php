<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $projects = Project::when($search, function ($query, $search) {
            return $query->where('title', 'like', "%{$search}%")
                         ->orWhere('degree', 'like', "%{$search}%");
        })->get();

        // Agrupar proyectos por carrera/programa
        $projectsGrouped = $projects->groupBy(function($item) {
            return $item->degree ?? 'Sin Carrera Asignada';
        });

        return view('projects.index', compact('projectsGrouped', 'search'));
    }
}