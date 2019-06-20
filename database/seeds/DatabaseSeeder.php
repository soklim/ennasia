<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $role = Role::create([
            'name'=>'Admin'
        ]);
        $role = Role::create([
            'name'=>'Editor'
        ]);

        $cat = Category::create([
            'name'=>'សង្គម',
            'color'=>'#00A0B1',
            'isActive'=>'1'
        ]);
        $cat = Category::create([
            'name'=>'សេដ្ឋកិច្ច',
            'color'=>'#2E8DEF',
            'isActive'=>'1'
        ]);
        $cat = Category::create([
            'name'=>'បច្ចេកវិទ្យា',
            'color'=>'#BF1E4B',
            'isActive'=>'1'
        ]);
        $cat = Category::create([
            'name'=>'សុខភាព',
            'color'=>'#643EBF',
            'isActive'=>'1'
        ]);
        $cat = Category::create([
            'name'=>'កីឡា',
            'color'=>'#00A600',
            'isActive'=>'1'
        ]);
        $cat = Category::create([
            'name'=>'នយោបាយ',
            'color'=>'#DC572E',
            'isActive'=>'1'
        ]);

        $this->call([UsersTableSeeder::class]);
    }
}
