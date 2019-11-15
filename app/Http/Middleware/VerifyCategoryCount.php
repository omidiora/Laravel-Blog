<?php 

namespace App\Http\Middleware;

use Closure;
use App\category;

class VerifyCategoryCount
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
        if(Category::all()->count()==0){
            
            session()->flash('success','You have to create a category before you can create a post');
            return redirect()->back();
        }


        return $next($request);
    }
}
