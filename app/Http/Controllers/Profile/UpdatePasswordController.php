<?php

namespace App\Http\Controllers\Profile;

use App\Actions\Fortify\UpdateUserPassword;
use App\Http\Controllers\Controller;

class UpdatePasswordController extends UpdateUserPassword
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('Profile/update-password');
    }
    public function updatePassword()
    {
        $this->update(request()->user(), request()->all());
        return back()->with('status', 'Password telah terupdate');
    }
}
