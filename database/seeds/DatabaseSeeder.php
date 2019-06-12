<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    protected $tables = [
        // Humans
        'users',
        'teams',        

        // Growing
        'farms',
        'area_types',
        'areas',
        'seed_companies',
        'strains',
        'seeds',
        'clones',
        'cycles',
        'stages',
        'plants',
        'manufacturers',
        'solutions',
        'environments',       
        'sensor_types',
        'sensors',
        'light_fixtures',
        'reservoirs',
        'fertilizers',
        'hvac_appliances',
        'fans',
        'chillers',
        'lamps',
        'drivers',
        'ballasts',
        'reflector_hoods',
        'media',
        'harvests',

        // Content
        'images',
        'contents',
        'raffles',
        'giveaways',
        'contest_entries',
        'contact_form_messages',

        // Application
        'password_resets',
        'subscriptions',
        'api_keys',
        'features',
        'plans',
        'profiles',
        'invoices',
        'failed_jobs',        

        // Pivot Tables
            // Humans
            'team_user',
            // Growing
            'cycle_stage',
            'light_fixture_stage',
            'ballast_light_fixture',
            'driver_light_fixture',
            'lamp_light_fixture',
            'reservoir_stage',
            'harvest_plant',
            // Content
            'content_image',
            'content_comment',
            'content_edit',
            // Application
            'feature_plan',
    ];
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach ( $this->tables as $table ) {
            factory('Elbow\\'. Str::studly(Str::singular($table)), 10)->create();
        }
    }
}
