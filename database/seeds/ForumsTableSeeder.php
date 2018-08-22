<?php

use Illuminate\Database\Seeder;

class ForumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Forum::class, 20)->create()
        // ->each(function ($u) {
        //   $u->posts()->save(factory(App\Post::class)->make());
        // })
        ;
    }
}
