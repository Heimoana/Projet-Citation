<?php

use Illuminate\Database\Seeder;

class KaamelotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kaamelots')->insert(
            [
                [
                    'citation'=> '"Au bout d`un moment, il est vraiment druide, c`mec-là, ou ça fait quinze ans qu`il me prend pour un con ?"
                    Le roi Arthur'
                ],
                [
                    'citation'=>'"C`que j`dis, tout l`monde s`en tamponne ! Je gueule je gueule, j`pourrai gueuler dans l`cul d`un poney qu`ce s`rait pareil !"
                    Guethenoc'
                ]
            ]
        );
    }
}
