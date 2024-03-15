<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TruncateTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Truncate all tables
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        foreach (DB::select('SHOW TABLES') as $table) {
            $table_array = get_object_vars($table);
            $table_name = $table_array[key($table_array)];
            DB::table($table_name)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
