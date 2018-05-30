<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(QuestionsTableSeeder::class);
         $this->call(AnswersTableSeeder::class);

         $this->call(PMBokSeeder::class);
         $this->call(ISOSeeder::class);
         $this->call(Prince2Seeder::class);
         $this->call(SWEBOKSeeder::class);
         $this->call(ScrumSeeder::class);
         $this->call(XpSeeder::class);
         $this->call(KanbanSeeder::class);

         $this->call(ProcessGroupsSeeder::class);
         $this->call(ProcessSourcesSeeder::class);
         $this->call(ProcessAreasSeeder::class);
         $this->call(ProcessKnowledgeSeeder::class);
         
         $this->call(AddMethodologyIdToSourcesSeeder::class);
    }
}
