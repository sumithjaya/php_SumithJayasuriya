<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SalesRoutes;

class SalesRouteController extends Controller
{
    public function manageSalesRoutes()
    {
        $routeData = SalesRoutes::all();

        $data = [
            'route_data' => $routeData,
        ];
        return view('sales_route_view',$data);
    }

    public function addNewRoute()
    {
        return view('sales_route_add');
    }

    public function saveNewRoute(Request $request)
    {
        $salesRoute = new SalesRoutes();

        $salesRoute->sales_route = $request->input('route_name');
        $salesRoute->created_at = NOW();
        $salesRoute->updated_at = NOW();
        $salesRoute->save();

        return redirect('/manageroutes');
    }
}
