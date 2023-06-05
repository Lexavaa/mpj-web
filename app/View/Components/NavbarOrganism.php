<?php

namespace App\View\Components;

use App\Models\Profile;
use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavbarOrganism extends Component
{
    public function render(): View|Closure|string
    {
        $profile = Profile::where('users_id', auth()->user()->id)->with('regional')->get();
        $online = User::where('online_status',true)->count();
        $notif = User::where('isActive', 0)->count();

        return view('admin.components.organisms.navbar',compact(
            ['online','profile','notif']
        ));
    }
}
