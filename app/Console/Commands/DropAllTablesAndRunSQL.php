<?php

namespace App\Console\Commands;

use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DropAllTablesAndRunSQL extends Command
{
    protected $signature = 'db:drop-and-run';

    protected $description = 'Drop all tables in the database and run SQL file';

    public function handle()
    {
        try {
            $sqlFilePath = public_path('sql/db-starter.sql');

            if (file_exists($sqlFilePath)) {
                $databaseName = DB::connection()->getDatabaseName();
                $tables = DB::select("SHOW TABLES");

                foreach ($tables as $table) {
                    $tableName = reset($table);
                    DB::statement("DROP TABLE IF EXISTS $tableName");
                    $this->info("Dropped table: $tableName");
                }
            }


            if (file_exists($sqlFilePath)) {
                $sql = file_get_contents($sqlFilePath);
                DB::unprepared($sql);
                $this->info("SQL file executed successfully.");
            } else {
                $this->error("SQL file not found: $sqlFilePath");
            }
        } catch (Exception $ex) {
            throw $ex;
        }
    }
}
