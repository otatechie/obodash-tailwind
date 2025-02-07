<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Jenssegers\Agent\Agent;
use OwenIt\Auditing\Models\Audit;

class AdminAuditController extends Controller
{
    public function index(Request $request)
    {
        return inertia('Admin/IndexAuditPage', [
            'audits' => Audit::query()
                ->with('user')
                ->latest()
                ->paginate($request->input('per_page', 10))
        ]);
    }
}
