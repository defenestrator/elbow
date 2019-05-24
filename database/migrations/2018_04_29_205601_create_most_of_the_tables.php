<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMostOfTheTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function ($table) {
            $table->bigIncrements('id');
            $table->string('uuid')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('stripe_id')->nullable();
            $table->string('card_brand')->nullable();
            $table->string('card_last_four')->nullable();
            $table->timestamp('trial_ends_at')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('subscriptions', function ($table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('stripe_id');
            $table->string('stripe_plan');
            $table->integer('quantity');
            $table->timestamp('trial_ends_at')->nullable();
            $table->timestamp('ends_at')->nullable();
            $table->timestamps();
        });

        Schema::create('cannabis_strains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('lineage')->nullable();
            $table->string('genetics')->nullable();
            $table->string('seed_company')->nullable();
            $table->text('description')->nullable();
            $table->string('url')->nullable();
            $table->string('qr')->nullable();
            $table->string('cannabis_reports_link')->nullable();
            $table->integer('flowering_time_min')->unsigned()->nullable();
            $table->integer('flowering_time_max')->unsigned()->nullable();
            $table->string('ucpc')->nullable()->unique();
            $table->softDeletes();
            $table->timestamps();
        });


        Schema::create('cannabis_seed_companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('ucpc')->nullable()->unique();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('url')->nullable();
            $table->string('cannabis_reports_link')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('crops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('growstuff_id')->nullable()->unique();
            $table->string('name')->nullable();
            $table->string('species')->nullable();
            $table->string('genus')->nullable();
            $table->string('description')->nullable();
            $table->string('seed_company')->nullable();
            $table->string('time_to_harvest')->nullable();
            $table->string('varietal')->nullable();
            $table->string('image')->nullable();
            $table->string('wiki_url')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('farms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->unique();
            $table->string('name')->default('My Secret Garden');
            $table->longText('description')->nullable();
            $table->string('address')->default('1234 Null pl.');
            $table->string('city')->default('Fort Collins');
            $table->string('state')->default('CO');
            $table->string('country')->default('United States');
            $table->string('postcode')->default('80521');
            $table->string('area_m2')->default(40);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('cycles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->unique();
            $table->string('name')->default('Default Crop Cycle');
            $table->unsignedBigInteger('medium_id')->nullable();
            $table->unsignedBigInteger('harvest_id')->nullable();
            $table->string('layout')->default('Horizontal');
            $table->string('method')->default('Organic Soil');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('cycle_stages', function (Blueprint $table) {
            $table->unsignedBigInteger('cycle_id');
            $table->unsignedBigInteger('stage_id');
        });

        Schema::create('stages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->unique();
            $table->string('name')->default('default stage');
            $table->unsignedBigInteger('photoperiod')->default(24);
            $table->unsignedBigInteger('area_id')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('light_fixture_stages', function (Blueprint $table) {
            $table->unsignedBigInteger('stage_id');
            $table->unsignedBigInteger('light_fixture_id');
        });

        Schema::create('reservoir_stages', function (Blueprint $table) {
            $table->unsignedBigInteger('stage_id');
            $table->unsignedBigInteger('reservoir_id');
        });
        Schema::create('light_fixtures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->unique();
            $table->unsignedBigInteger('manufacturer_id')->default(1);
            $table->string('model')->default('custom');
            $table->string('type')->default('HID');
            $table->unsignedBigInteger('watts')->default(1000);
            $table->unsignedBigInteger('ppf')->default(1100);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('ballast_light_fixtures', function (Blueprint $table) {
            $table->unsignedBigInteger('ballast_id');
            $table->unsignedBigInteger('light_fixture_id');
        });
        Schema::create('driver_light_fixtures', function (Blueprint $table) {
            $table->unsignedBigInteger('driver_id');
            $table->unsignedBigInteger('light_fixture_id');
        });
        Schema::create('lamp_light_fixtures', function (Blueprint $table) {
            $table->unsignedBigInteger('lamp_id');
            $table->unsignedBigInteger('light_fixture_id');
        });

        Schema::create('reservoirs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->unique();
            $table->string('name')->default('null reservoir');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('capacity')->default(0);
            $table->boolean('auto_dosing')->default(false);
            $table->unsignedBigInteger('manufacturer_id')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('areas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->unique();
            $table->string('name');
            $table->unsignedBigInteger('floorspace_cm2')->default(1);
            $table->unsignedBigInteger('growspace_cm2')->default(1);
            $table->string('area_type_id')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('sensors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->unique();
            $table->string('name')->default('default sensor');
            $table->unsignedBigInteger('manufacturer_id')->default(1);
            $table->unsignedBigInteger('sensor_type_id')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->unique();
            $table->unsignedBigInteger('user_id')->unique();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('avatar')->default('/img/bot.png');            
            $table->string('facebook')->default('elbow');
            $table->string('instagram')->default('elbow');
            $table->string('youtube')->default('elbow');
            $table->string('whatsapp')->default('elbow');
            $table->string('snapchat')->default('elbow');
            $table->string('cashtag')->default('elbow');
            $table->longText('bio')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->unique();
            $table->string('name')->unique();
            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->unique();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('deposit_requested')->default(0);
            $table->integer('total')->default(0);
            $table->integer('paid')->default(0);
            $table->integer('remaining')->default(0);
            $table->boolean('paid_in_full')->default(false);
            $table->date('due_date')->default( now('America/Boise') );
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('fertilizers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->unique();
            $table->string('name')->default('default');
            $table->unsignedBigInteger('manufacturer_id')->default(1);
            $table->float('nitrogen', 6, 3)->default(5);
            $table->float('phosphorus', 6, 3)->default(10);
            $table->float('potassium', 6, 3)->default(9);
            $table->float('calcium', 6, 3)->default(4);
            $table->float('magnesium', 6, 3)->default(2);
            $table->float('sulfur', 6, 3)->default(2);
            $table->float('iron', 6, 3)->default(0.1);
            $table->float('boron', 6, 3)->default(0.016);
            $table->float('copper', 6, 3)->default(0.009);
            $table->float('manganese', 6, 3)->default(0.05);
            $table->float('molybdenum', 6, 3)->default(0.008);
            $table->float('zinc', 6, 3)->default(0.04);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('hvac_appliances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->unique();
            $table->unsignedBigInteger('manufacturer_id')->default(1);
            $table->unsignedBigInteger('btus')->default(0);
            $table->unsignedBigInteger('watts')->default(0);
            $table->unsignedBigInteger('cfm')->default(0);
            $table->string('name')->default(0);
            $table->string('appliance_type')->default('Air Conditioner');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('fans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->unique();
            $table->unsignedBigInteger('manufacturer_id')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('chillers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->unique();
            $table->unsignedBigInteger('manufacturer_id')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('lamps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->unique();
            $table->unsignedBigInteger('manufacturer_id')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('drivers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->unique();
            $table->unsignedBigInteger('manufacturer_id')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('ballasts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->unique();
            $table->unsignedBigInteger('manufacturer_id')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('reflector_hoods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->unique();
            $table->unsignedBigInteger('manufacturer_id')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('media', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->unique();
            $table->string('name');
            $table->unsignedBigInteger('manufacturer_id')->default(1);
            $table->string('material')->default('¡Pura vida, baby!');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('manufacturers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->unique();
            $table->string('name')->unique();
            $table->string('phone')->default('555-867-5309');
            $table->longText('description')->nullable();
            $table->string('address')->default('1234 Null pl.');
            $table->string('city')->default('Fort Collins');
            $table->string('state')->default('CO');
            $table->string('country')->default('United States');
            $table->string('postcode')->default('80521');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('harvests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_of')->nullable();
            $table->unsignedBigInteger('initial_yield_g');
            $table->unsignedBigInteger('loss_g')->default(0);
            $table->unsignedBigInteger('dry_weight_g')->default(0);
            $table->string('notes')->default('great harvest!');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('api_keys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('key');
            $table->string('name');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('sensor_id');
            $table->timestamps();
        });

        Schema::create('area_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description')->default('');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('solutions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('sensor_id')->nullable();
            $table->float('ph', 4, 2)->nullable();
            $table->float('ec')->nullable();
            $table->unsignedBigInteger('tds')->nullable();
            $table->unsignedBigInteger('level')->nullable();
            $table->unsignedBigInteger('temperature_c')->nullable();
            $table->unsignedBigInteger('dissolved_oxygen')->nullable();
            $table->float('barometric_pressure', 4, 2)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('environments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('sensor_id')->nullable();
            $table->unsignedBigInteger('temperature_c')->nullable();
            $table->unsignedBigInteger('c02_ppm')->nullable();
            $table->unsignedBigInteger('oxygen_ppm')->nullable();
            $table->unsignedBigInteger('relative_humidity')->nullable();
            $table->float('barometric_pressure', 4, 2)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('sensor_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type')->unique();
            $table->string('format')->default('');
            // float ^[+-]?(\d*\.)?(\d+)?\b$
            //pH format ^((?![2-9])(1 {0,1})(\d){0,1})(\.)(\d{1,2})\b$
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('features', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description')->default('super useful new feature!');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('plans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('stripe_plan');
            $table->boolean('archived')->default(false);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('feature_plan', function (Blueprint $table) {
            $table->unsignedBigInteger('plan_id');
            $table->unsignedBigInteger('feature_id');
            $table->timestamps();
        });

        Schema::create('team_user', function (Blueprint $table) {
            $table->unsignedBigInteger('team_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });

        Schema::create('giveaways', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid');
            $table->string('title');
            $table->longText('description');
            $table->string('image');
            $table->dateTime('ends_at')->nullable()->change();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('contest_entries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid');
            $table->integer('giveaway_id')->unsigned()->default(0);
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('contact_form_messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email_address');
            $table->string('message');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('large');
            $table->text('small');
            $table->text('thumb');
            $table->morphs('imageable');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();
        });

        Schema::create('content', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->morphs('contentable');
            $table->text('title');
            $table->longText('body');
            $table->longText('fields')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('raffles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cannabis_strain_id');
            $table->unsignedBigInteger('ticket_limit')->default(0);
            $table->string('title');
            $table->string('description');
            $table->timestamp('ends_at');
            $table->softDeletes();
            $table->timestamps();
        });

        $tableNames = config('permission.table_names');
        $columnNames = config('permission.column_names');

        Schema::create($tableNames['permissions'], function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('guard_name');
            $table->timestamps();
        });

        Schema::create($tableNames['roles'], function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('guard_name');
            $table->timestamps();
        });

        Schema::create($tableNames['model_has_permissions'], function (Blueprint $table) use ($tableNames, $columnNames) {
            $table->unsignedBigInteger('permission_id');

            $table->string('model_type');
            $table->unsignedBigInteger($columnNames['model_morph_key']);
            $table->index([$columnNames['model_morph_key'], 'model_type', ]);

            $table->foreign('permission_id')
                ->references('id')
                ->on($tableNames['permissions'])
                ->onDelete('cascade');

            $table->primary(['permission_id', $columnNames['model_morph_key'], 'model_type'],
                    'model_has_permissions_permission_model_type_primary');
        });

        Schema::create($tableNames['model_has_roles'], function (Blueprint $table) use ($tableNames, $columnNames) {
            $table->unsignedBigInteger('role_id');

            $table->string('model_type');
            $table->unsignedBigInteger($columnNames['model_morph_key']);
            $table->index([$columnNames['model_morph_key'], 'model_type', ]);

            $table->foreign('role_id')
                ->references('id')
                ->on($tableNames['roles'])
                ->onDelete('cascade');

            $table->primary(['role_id', $columnNames['model_morph_key'], 'model_type'],
                    'model_has_roles_role_model_type_primary');
        });

        Schema::create($tableNames['role_has_permissions'], function (Blueprint $table) use ($tableNames) {
            $table->unsignedBigInteger('permission_id');
            $table->unsignedBigInteger('role_id');

            $table->foreign('permission_id')
                ->references('id')
                ->on($tableNames['permissions'])
                ->onDelete('cascade');

            $table->foreign('role_id')
                ->references('id')
                ->on($tableNames['roles'])
                ->onDelete('cascade');

            $table->primary(['permission_id', 'role_id']);

            app('cache')->forget('spatie.permission.cache');
        });

        Schema::create('seeds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cannabis_strain_id');
            $table->foreign('cannabis_strain_id')
                ->references('id')
                ->on('cannabis_strains')
                ->onDelete('cascade');
            $table->unsignedBigInteger('cannabis_seed_company_id');
            $table->foreign('cannabis_seed_company_id')
                ->references('id')
                ->on('cannabis_seed_companies')
                ->onDelete('cascade');
            $table->unsignedBigInteger('qty_per_pack')->default(12);
            $table->unsignedBigInteger('price')->default(100);
            $table->unsignedBigInteger('inventory')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
        
        Schema::create('plants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('shops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('shop_name');
            $table->softDeletes();
            $table->timestamps();
        });   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        foreach ( $this->tables as $table ) {
            Schema::dropIfExists($table);
        }

        $tableNames = config('permission.table_names');

        Schema::drop($tableNames['role_has_permissions']);
        Schema::drop($tableNames['model_has_roles']);
        Schema::drop($tableNames['model_has_permissions']);
        Schema::drop($tableNames['roles']);
        Schema::drop($tableNames['permissions']);
    }

    protected $tables = [
        'user',
        'password_resets',
        'subscriptions',
        'cannabis_strains',
        'cannabis_seed_companies',
        'crops',
        'farms',
        'cycles',
        'cycle_stages',
        'stages',
        'light_fixture_stages',
        'reservoir_stages',
        'light_fixtures',
        'ballast_light_fixtures',
        'driver_light_fixtures',
        'lamp_light_fixtures',
        'reservoirs',
        'areas',
        'sensors',
        'profiles',
        'teams',
        'invoices',
        'fertilizers',
        'hvac_appliances',
        'fans',
        'chillers',
        'lamps',
        'drivers',
        'ballasts',
        'reflector_hoods',
        'media',
        'manufacturers',
        'harvests',
        'roles',
        'api_keys',
        'solutions',
        'environments',
        'area_types',
        'sensor_types',
        'features',
        'plans',
        'feature_plans',
        'giveaways',
        'contest_entries',
        'contact_form_messages',
        'images',
        'failed_jobs',
        'content_types',
        'raffles'

    ];
}
