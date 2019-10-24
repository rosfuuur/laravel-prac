<?php

namespace App\Repositories;

class DbUserRepository implements UserRepository {
    public function create( $attributes ) {
        dd('creatin the user');
    }
}
