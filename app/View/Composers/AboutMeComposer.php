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
            'assets/img/profile-picture-2.jpg',
            'assets/img/profile-picture-3.jpg',
            'assets/img/profile-picture-4.jpg',
            'assets/img/profile-picture-5.jpg',
            'assets/img/profile-picture-6.jpg',
            'assets/img/profile-picture-7.jpg',
            'assets/img/profile-picture-8.jpg',
            'assets/img/profile-picture-9.jpg',
            'assets/img/profile-picture-10.jpg',
            'assets/img/profile-picture-11.jpg',
            'assets/img/profile-picture-12.jpg',
            'assets/img/profile-picture-13.jpg',
            'assets/img/profile-picture-14.jpg',
            'assets/img/profile-picture-15.jpg',
            'assets/img/profile-picture-16.jpg',
            'assets/img/profile-picture-17.jpg',
            'assets/img/profile-picture-18.jpg',
            'assets/img/profile-picture-19.jpg',
            'assets/img/profile-picture-20.jpg',
            'assets/img/profile-picture-21.jpg',
            'assets/img/profile-picture-22.jpg',
            'assets/img/profile-picture-23.jpg',
            'assets/img/profile-picture-24.jpg',
            'assets/img/profile-picture-25.jpg',
        ];

        for($i = 0; $i < count($profilePictures); $i++) {
            $profilePictures[$i] = asset($profilePictures[$i]);
        }

        $view->with('profilePictures', $profilePictures);
    }
}
