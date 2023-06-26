<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //\App\Models\User::factory(5)->create();

        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
            
        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        //Listing::create([
            //'title' => 'Laravel Senior Developer',
            //'tags' => 'laravel, javascript',
            //'company' => 'Acme Corp',
            //'location' => 'Boston, MA',
            //'email' => 'email1@email.com',
            //'website' => 'https://acme.com',
            //'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed ac dolor sit amet purus malesuada congue. Et harum quidem rerum facilis est et expedita distinctio. Sed ac dolor sit amet purus malesuada congue. Mauris dictum facilisis augue. //Suspendisse nisl.'
        //]);

        //Listing::create([
            //'title' => 'Full-Stack Engineer',
            //'tags' => 'laravel, backend, api',
            //'company' => 'Stark Industries',
            //'location' => 'New York, NY',
            //'email' => 'email2@email.com',
            //'website' => 'https://starkindustries.com',
            //'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed ac dolor sit amet purus malesuada congue. Et harum quidem rerum facilis est et expedita distinctio. Sed ac dolor sit amet purus malesuada congue. Mauris dictum facilisis augue. //Suspendisse nisl.'
        //]);
    
    }
}
