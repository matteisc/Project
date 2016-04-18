<?php

use Illuminate\Database\Seeder;
use App\Skill;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::create(['name' => 'HTML']);
        Skill::create(['name' => 'HTML5']);
        Skill::create(['name' => 'CSS']);
        Skill::create(['name' => 'CSS3']);
        Skill::create(['name' => 'JavaScript']);
        Skill::create(['name' => 'CoffeeScript']);
        Skill::create(['name' => 'AngularJS']);
        Skill::create(['name' => 'ReactJS']);
        Skill::create(['name' => 'PHP']);
        Skill::create(['name' => 'Doctrine']);
        Skill::create(['name' => 'Doctrine2']);
        Skill::create(['name' => 'Laravel']);
        Skill::create(['name' => 'Symfony2']);
        Skill::create(['name' => 'Java']);
        Skill::create(['name' => 'Scala']);
        Skill::create(['name' => 'Play Framework']);
        Skill::create(['name' => 'Akka']);
        Skill::create(['name' => 'Java']);
        Skill::create(['name' => 'Hibernate ORM']);
        Skill::create(['name' => 'C']);
        Skill::create(['name' => 'C++']);
        Skill::create(['name' => 'C#']);
        Skill::create(['name' => 'Python']);
        Skill::create(['name' => 'Ruby']);
        Skill::create(['name' => 'Ruby On Rails']);
        Skill::create(['name' => 'Visual Basic']);
        Skill::create(['name' => 'Matlab']);
        Skill::create(['name' => 'Rust']);
        Skill::create(['name' => 'Go']);
        Skill::create(['name' => 'SQL']);
    }
}
