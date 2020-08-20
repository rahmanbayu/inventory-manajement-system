<?php

namespace App\Http\Middleware;

use App\Category;
use App\Suplier;
use Closure;

class hasCategoryAndSuplier
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Category::get()->count()) {
            session()->flash('failed', 'Please create category first!');
            return redirect()->route('categories.create');
        } elseif (!Suplier::get()->count()) {
            session()->flash('failed', 'Please add suplier first!');
            return redirect()->route('supliers.create');
        } else {
            return $next($request);
        }
    }
}
