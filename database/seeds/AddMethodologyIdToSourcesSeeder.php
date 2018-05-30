<?php

use Illuminate\Database\Seeder;
use App\Source;

class AddMethodologyIdToSourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Source::find(1)->update([
            'methodology_id' => 4
        ]);

        Source::find(2)->update([
            'methodology_id' => 3
        ]);

        Source::find(3)->update([
            'methodology_id' => 2
        ]);

        Source::find(4)->update([
            'methodology_id' => 1
        ]);

        Source::find(6)->update([
            'methodology_id' => 5
        ]);
    }
}
