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
        Schema::table('users', function ($table) {
            $table->string('stripe_id')->nullable();
            $table->string('card_brand')->nullable();
            $table->string('card_last_four')->nullable();
            $table->timestamp('trial_ends_at')->nullable();
        });

        Schema::create('subscriptions', function ($table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('name');
            $table->string('stripe_id');
            $table->string('stripe_plan');
            $table->integer('quantity');
            $table->timestamp('trial_ends_at')->nullable();
            $table->timestamp('ends_at')->nullable();
            $table->timestamps();
        });

        Schema::create('cannabis_strains', function (Blueprint $table) {
            $table->increments('id');
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
            $table->timestamps();
        });


        Schema::create('cannabis_seed_companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('ucpc')->nullable()->unique();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('url')->nullable();
            $table->string('cannabis_reports_link')->nullable();
            $table->timestamps();
        });

        Schema::create('crops', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('growstuff_id')->nullable()->unique();
            $table->string('name')->nullable();
            $table->string('species')->nullable();
            $table->string('genus')->nullable();
            $table->string('description')->nullable();
            $table->string('seed_company')->nullable();
            $table->string('time_to_harvest')->nullable();
            $table->string('varietal')->nullable();
            $table->string('image')->nullable();
            $table->string('wiki_url')->nullable();
            $table->timestamps();
        });

        Schema::create('farms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid')->unique();
            $table->string('name')->default('My Secret Garden');
            $table->longText('description')->nullable();
            $table->string('address')->default('1234 Null pl.');
            $table->string('city')->default('Fort Collins');
            $table->string('state')->default('CO');
            $table->string('country')->default('United States');
            $table->string('postcode')->default('80521');
            $table->string('area_m2')->default(40);
            $table->timestamps();
        });

        Schema::create('cycles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid')->unique();
            $table->string('name')->default('Default Crop Cycle');
            $table->unsignedInteger('medium_id')->nullable();
            $table->unsignedInteger('harvest_id')->nullable();
            $table->string('layout')->default('Horizontal');
            $table->string('method')->default('Organic Soil');
            $table->timestamps();
        });

        Schema::create('cycle_stages', function (Blueprint $table) {
            $table->unsignedInteger('cycle_id');
            $table->unsignedInteger('stage_id');
        });

        Schema::create('stages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid')->unique();
            $table->string('name')->default('default stage');
            $table->unsignedInteger('photoperiod')->default(24);
            $table->unsignedInteger('area_id')->nullable();
            $table->timestamps();
        });

        Schema::create('light_fixture_stages', function (Blueprint $table) {
            $table->unsignedInteger('stage_id');
            $table->unsignedInteger('light_fixture_id');
        });

        Schema::create('reservoir_stages', function (Blueprint $table) {
            $table->unsignedInteger('stage_id');
            $table->unsignedInteger('reservoir_id');
        });
        Schema::create('light_fixtures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid')->unique();
            $table->unsignedInteger('manufacturer_id')->default(1);
            $table->string('model')->default('custom');
            $table->string('type')->default('HID');
            $table->unsignedInteger('watts')->default(1000);
            $table->unsignedInteger('ppf')->default(1100);
            $table->timestamps();
        });

        Schema::create('ballast_light_fixtures', function (Blueprint $table) {
            $table->unsignedInteger('ballast_id');
            $table->unsignedInteger('light_fixture_id');
        });
        Schema::create('driver_light_fixtures', function (Blueprint $table) {
            $table->unsignedInteger('driver_id');
            $table->unsignedInteger('light_fixture_id');
        });
        Schema::create('lamp_light_fixtures', function (Blueprint $table) {
            $table->unsignedInteger('lamp_id');
            $table->unsignedInteger('light_fixture_id');
        });

        Schema::create('reservoirs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid')->unique();
            $table->string('name')->default('null reservoir');
            $table->text('description')->nullable();
            $table->unsignedInteger('capacity')->default(0);
            $table->boolean('auto_dosing')->default(false);
            $table->unsignedInteger('manufacturer_id')->default(1);
            $table->timestamps();
        });

        Schema::create('areas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid')->unique();
            $table->string('name');
            $table->unsignedInteger('floorspace_cm2')->default(1);
            $table->unsignedInteger('growspace_cm2')->default(1);
            $table->string('area_type_id')->default(1);
            $table->timestamps();
        });

        Schema::create('sensors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid')->unique();
            $table->string('name')->default('default sensor');
            $table->unsignedInteger('manufacturer_id')->default(1);
            $table->unsignedInteger('sensor_type_id')->default(1);
            $table->timestamps();
        });

        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid')->unique();
            $table->string('avatar')->default('/img/bot.png');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('facebook')->default('elbow');
            $table->string('instagram')->default('elbow');
            $table->string('youtube')->default('elbow');
            $table->string('whatsapp')->default('elbow');
            $table->string('snapchat')->default('elbow');
            $table->string('cashtag')->default('elbow');
            $table->longText('bio')->nullable();
            $table->timestamps();
        });

        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid')->unique();
            $table->string('name')->unique();
            $table->unsignedInteger('owner_id');
            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid')->unique();
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('deposit_requested')->default(0);
            $table->integer('total')->default(0);
            $table->integer('paid')->default(0);
            $table->integer('remaining')->default(0);
            $table->boolean('paid_in_full')->default(false);
            $table->date('due_date')->default( now('America/Boise') );
            $table->timestamps();
        });

        Schema::create('fertilizers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid')->unique();
            $table->string('name')->default('default');
            $table->unsignedInteger('manufacturer_id')->default(1);
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
            $table->timestamps();
        });

        Schema::create('hvac_appliances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid')->unique();
            $table->unsignedInteger('manufacturer_id')->default(1);
            $table->unsignedInteger('btus')->default(0);
            $table->unsignedInteger('watts')->default(0);
            $table->unsignedInteger('cfm')->default(0);
            $table->string('name')->default(0);
            $table->string('appliance_type')->default('Air Conditioner');
            $table->timestamps();
        });

        Schema::create('fans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid')->unique();
            $table->unsignedInteger('manufacturer_id')->default(1);
            $table->timestamps();
        });

        Schema::create('chillers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid')->unique();
            $table->unsignedInteger('manufacturer_id')->default(1);
            $table->timestamps();
        });

        Schema::create('lamps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid')->unique();
            $table->unsignedInteger('manufacturer_id')->default(1);
            $table->timestamps();
        });

        Schema::create('drivers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid')->unique();
            $table->unsignedInteger('manufacturer_id')->default(1);
            $table->timestamps();
        });

        Schema::create('ballasts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid')->unique();
            $table->unsignedInteger('manufacturer_id')->default(1);
            $table->timestamps();
        });

        Schema::create('reflector_hoods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid')->unique();
            $table->unsignedInteger('manufacturer_id')->default(1);
            $table->timestamps();
        });

        Schema::create('media', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid')->unique();
            $table->string('name');
            $table->unsignedInteger('manufacturer_id')->default(1);
            $table->string('material')->default('¡Pura vida, baby!');
            $table->timestamps();
        });

        Schema::create('manufacturers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid')->unique();
            $table->string('name')->unique();
            $table->string('phone')->default('555-867-5309');
            $table->longText('description')->nullable();
            $table->string('address')->default('1234 Null pl.');
            $table->string('city')->default('Fort Collins');
            $table->string('state')->default('CO');
            $table->string('country')->default('United States');
            $table->string('postcode')->default('80521');
            $table->timestamps();
        });

        Schema::create('harvests', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_of')->nullable();
            $table->unsignedInteger('initial_yield_g');
            $table->unsignedInteger('loss_g')->default(0);
            $table->unsignedInteger('dry_weight_g')->default(0);
            $table->string('notes')->default('great harvest!');
            $table->timestamps();
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('role');
            $table->timestamps();
        });

        Schema::create('api_keys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key');
            $table->string('name');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('sensor_id');
            $table->timestamps();
        });

        Schema::create('area_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description')->default('');
            $table->timestamps();
        });

        Schema::create('solutions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('sensor_id')->nullable();
            $table->float('ph', 4, 2)->nullable();
            $table->float('ec')->nullable();
            $table->unsignedInteger('tds')->nullable();
            $table->unsignedInteger('level')->nullable();
            $table->unsignedInteger('temperature_c')->nullable();
            $table->unsignedInteger('dissolved_oxygen')->nullable();
            $table->float('barometric_pressure', 4, 2)->nullable();
            $table->timestamps();
        });

        Schema::create('environments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('sensor_id')->nullable();
            $table->unsignedInteger('temperature_c')->nullable();
            $table->unsignedInteger('c02_ppm')->nullable();
            $table->unsignedInteger('oxygen_ppm')->nullable();
            $table->unsignedInteger('relative_humidity')->nullable();
            $table->float('barometric_pressure', 4, 2)->nullable();
            $table->timestamps();
        });

        Schema::create('sensor_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type')->unique();
            $table->string('format')->default('');
            // float ^[+-]?(\d*\.)?(\d+)?\b$
            //pH format ^((?![2-9])(1 {0,1})(\d){0,1})(\.)(\d{1,2})\b$
            $table->timestamps();
        });

        Schema::create('features', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description')->default('super useful new feature!');
            $table->timestamps();
        });

        Schema::create('plans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('stripe_plan');
            $table->timestamps();
        });

        Schema::create('feature_plans', function (Blueprint $table) {
            $table->unsignedInteger('plan_id');
            $table->unsignedInteger('feature_id');
            $table->timestamps();
        });

        Schema::create('team_users', function (Blueprint $table) {
            $table->unsignedInteger('team_id');
            $table->unsignedInteger('user_id');
            $table->timestamps();
        });

        Schema::create('team_roles', function (Blueprint $table) {
            $table->unsignedInteger('plan_id');
            $table->unsignedInteger('feature_id');
            $table->timestamps();
        });

        Schema::create('team_role_users', function (Blueprint $table) {
            $table->unsignedInteger('plan_id');
            $table->unsignedInteger('feature_id');
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
        'feature_plans'
    ];
}
