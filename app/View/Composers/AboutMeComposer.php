<?php

namespace App\View\Composers;

use Illuminate\View\View;

class AboutMeComposer
{
    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {

        $profilePictures = [
            'assets/img/profile-picture-1.jpeg',
            'assets/img/profile-picture-26.jpg',
            'assets/img/profile-picture-2.jpg'
        ];

        for($i = 0; $i < count($profilePictures); $i++) {
            $profilePictures[$i] = asset($profilePictures[$i]);
        }

        $view->with('profilePictures', $profilePictures);
    }
}
