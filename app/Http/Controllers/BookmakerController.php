<?php

namespace App\Http\Controllers;

use App\Models\Bookmaker;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookmakerController extends Controller
{
    /**
     * Returns the list of bookmakers in the admin panel and site.
     *
     * @return View The view for displaying the list of bookmakers.
     */
    public function create() : View
    {
        $bookmakers = Bookmaker::selectRaw('bookmakers.*, IF(COUNT(ratings.id) = 0, 0, ROUND(SUM(ratings.rating) / COUNT(ratings.id), 1)) as rating, COUNT(ratings.id) as rating_count')
            ->leftJoin('ratings', 'bookmakers.id', '=', 'ratings.bookmaker_id')
            ->groupBy('bookmakers.id')
            ->orderBy('bookmakers.active', 'desc')
            ->orderBy('bookmakers.order', 'asc')
            ->get();
        return view('admin.bookmakers', ['bookmakers' => $bookmakers]);
    }

}
