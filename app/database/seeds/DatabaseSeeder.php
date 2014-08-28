<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
        
        $this->command->info('User table seeded');
	}

}


class UserTableSeeder extends Seeder {
    
    
    public function run(){
        
        DB::table('users')->delete();
        $x = 1;
        
        
        User::create([
            
            'name' => 'user'.$x,
            
            'email' => 'email'.$x.'@whatever.com',
        
            'password' => Hash::make('testtest'),
            
        ]);
        
        $x++;
        
         
        User::create([
            
            'name' => 'user'.$x,
            
            'email' => 'email'.$x.'@whatever.com',
        
            'password' => Hash::make('testtest'),
            
        ]);
        
        $x++;
        
         
        User::create([
            
            'name' => 'user'.$x,
            
            'email' => 'email'.$x.'@whatever.com',
        
            'password' => Hash::make('testtest'),
            
        ]);
        
        $x++;
    }
    
    
    
    
}