<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ImportMsmeData extends Command
{
    protected $signature = 'msme:export-seeder';
    protected $description = 'Export data from World Grexpo database into a Laravel seeder file';

    protected $tables = [
        'site_settings',
        'sectors',
        'sector_sections',
        'events',
        'articles',
        'team_pages',
        'team_members',
        'home_sliders',
        'forms',
        'form_fields',
    ];

    public function handle()
    {
        $this->info('Starting World Grexpo Data Extraction...');

        $seederContent = "<?php\n\nnamespace Database\Seeders;\n\nuse Illuminate\Database\Seeder;\nuse Illuminate\Support\Facades\DB;\n\nclass MsmeLegacySeeder extends Seeder\n{\n    public function run()\n    {\n        DB::statement('SET FOREIGN_KEY_CHECKS=0;');\n";

        foreach ($this->tables as $table) {
            $this->comment("Processing table: {$table}");
            
            try {
                $data = DB::connection('mysql_legacy')->table($table)->get();
                
                if ($data->isEmpty()) {
                    $this->warn("Table {$table} is empty. Skipping.");
                    continue;
                }

                $seederContent .= "        // Data for {$table}\n";
                $seederContent .= "        DB::table('{$table}')->truncate();\n";
                $seederContent .= "        DB::table('{$table}')->insert([\n";

                foreach ($data as $row) {
                    $rowData = (array) $row;
                    $export = var_export($rowData, true);
                    // Convert array() to []
                    $export = preg_replace('/array\s*\(/', '[', $export);
                    $export = preg_replace('/\)$/', ']', $export);
                    
                    $seederContent .= "            " . $export . ",\n";
                }

                $seederContent .= "        ]);\n\n";
            } catch (\Exception $e) {
                $this->error("Error processing {$table}: " . $e->getMessage());
            }
        }

        $seederContent .= "        DB::statement('SET FOREIGN_KEY_CHECKS=1;');\n    }\n}\n";

        $path = database_path('seeders/MsmeLegacySeeder.php');
        File::put($path, $seederContent);

        $this->info("Seeder generated successfully at: {$path}");
    }
}
