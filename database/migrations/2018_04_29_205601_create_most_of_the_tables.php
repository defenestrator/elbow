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
        $this->humans();

        $this->growing();
        
        $this->content();
        
        $this->pivots();

        Schema::create('games', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug');
            $table->timestamps();
        });

        Schema::create('game_user', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('game_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('game_id')
                ->references('id')
                ->on('games')
                ->onDelete('cascade');
            
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
        
        Schema::create('game_move', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('game_user_id');
            $table->foreign('game_user_id')->references('id')->on('game_user')->onDelete('cascade');
            $table->json('state'); 
        });

        Schema::create('pot_lucks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('game_id');
            $table->foreign('game_id')->references('id')->on('games')->onDelete('cascade');
            $table->unsignedBigInteger('winner_id');
            $table->foreign('winner_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        $this->populate();
    }


    /**
     * 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oauth_auth_codes');
        Schema::dropIfExists('oauth_access_tokens');
        Schema::dropIfExists('oauth_refresh_tokens');
        Schema::dropIfExists('oauth_clients');
        Schema::dropIfExists('oauth_personal_access_clients');

        foreach ( $this->tables as $table ) {
            Schema::dropIfExists($table);
        }
        
        Schema::dropIfExists('games');
        Schema::dropIfExists('game_player');
        Schema::dropIfExists('game_move');
        Schema::dropIfExists('pot_lucks');

        $permissionTableNames = config('permission.table_names');

        Schema::dropIfExists($permissionTableNames['role_has_permissions']);
        Schema::dropIfExists($permissionTableNames['model_has_roles']);
        Schema::dropIfExists($permissionTableNames['model_has_permissions']);
        Schema::dropIfExists($permissionTableNames['roles']);
        Schema::dropIfExists($permissionTableNames['permissions']);
    }


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
        'cuttings',
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


    protected function application()
    {
        // Application
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('api_keys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('key');
            $table->string('name');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('sensor_id')->nullable();
            $table->foreign('sensor_id')->references('id')->on('sensors');
            $table->timestamps();
        });

        Schema::create('subscriptions', function ($table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name');
            $table->string('stripe_id');
            $table->string('stripe_plan');
            $table->integer('quantity');
            $table->timestamp('trial_ends_at')->nullable();
            $table->timestamp('ends_at')->nullable();
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

        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->unsignedBigInteger('user_id')->unique();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('avatar')->default('/img/bot.png');            
            $table->string('facebook')->default('elbow');
            $table->string('instagram')->default('elbow');
            $table->string('youtube')->default('elbow');
            $table->string('whatsapp')->default('elbow');
            $table->string('snapchat')->default('elbow');
            $table->string('cashtag')->default('elbow');
            $table->string('user_title')->default('n00b');
            $table->longText('bio')->nullable();
            $table->boolean('public')->default(false);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
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

        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();
        });

        // From Spatie\Permission
        $permissionTableNames = config('permission.table_names');
        $permissionColumnNames = config('permission.column_names');

        Schema::create($permissionTableNames['permissions'], function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('guard_name');
            $table->timestamps();
        });

        Schema::create($permissionTableNames['roles'], function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('guard_name');
            $table->timestamps();
        });

        Schema::create($permissionTableNames['model_has_permissions'], function (Blueprint $table) use ($permissionTableNames, $permissionColumnNames) {
            $table->unsignedBigInteger('permission_id');

            $table->string('model_type');
            $table->unsignedBigInteger($permissionColumnNames['model_morph_key']);
            $table->index([$permissionColumnNames['model_morph_key'], 'model_type', ]);

            $table->foreign('permission_id')
                ->references('id')
                ->on($permissionTableNames['permissions'])
                ->onDelete('cascade');

            $table->primary(['permission_id', $permissionColumnNames['model_morph_key'], 'model_type'],
                    'model_has_permissions_permission_model_type_primary');
        });

        Schema::create($permissionTableNames['model_has_roles'], function (Blueprint $table) use ($permissionTableNames, $permissionColumnNames) {
            $table->unsignedBigInteger('role_id');

            $table->string('model_type');
            $table->unsignedBigInteger($permissionColumnNames['model_morph_key']);
            $table->index([$permissionColumnNames['model_morph_key'], 'model_type', ]);

            $table->foreign('role_id')
                ->references('id')
                ->on($permissionTableNames['roles'])
                ->onDelete('cascade');

            $table->primary(['role_id', $permissionColumnNames['model_morph_key'], 'model_type'],
                    'model_has_roles_role_model_type_primary');
        });

        Schema::create($permissionTableNames['role_has_permissions'], function (Blueprint $table) use ($permissionTableNames) {
            $table->unsignedBigInteger('permission_id');
            $table->unsignedBigInteger('role_id');

            $table->foreign('permission_id')
                ->references('id')
                ->on($permissionTableNames['permissions'])
                ->onDelete('cascade');

            $table->foreign('role_id')
                ->references('id')
                ->on($permissionTableNames['roles'])
                ->onDelete('cascade');

            $table->primary(['permission_id', 'role_id']);

            app('cache')->forget('spatie.permission.cache');
        });    
    }


    protected function content()
    {
        // Content
        Schema::create('images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->text('large')->nullable();
            $table->text('medium')->nullable();
            $table->text('small')->nullable();
            $table->nullableMorphs('imageable');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('contents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
            $table->text('slug');
            $table->nullableMorphs('commentable');
            $table->text('title');
            $table->longText('body');
            $table->json('fields')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();          
            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
            $table->text('title');
            $table->longText('body');
            $table->timestamps();
        });

        Schema::create('raffles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->unsignedBigInteger('ticket_limit')->default(0);
            $table->string('title');
            $table->string('description');
            $table->timestamp('ends_at');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('giveaways', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->string('title');
            $table->longText('description');
            $table->string('image');
            $table->dateTime('ends_at');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('contest_entries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->integer('giveaway_id')->unsigned()->default(0);
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('contact_form_messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();  
            $table->string('name');
            $table->string('email_address');
            $table->string('message');
            $table->softDeletes();
            $table->timestamps();
        });

    }


    protected function growing() 
    {
        // Growing 
        Schema::create('farms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
            $table->string('name')->default('My Secret Garden');
            $table->longText('description')->nullable();
            $table->string('address')->default('1234 Null pl.');
            $table->string('city')->default('Fort Collins');
            $table->string('state')->default('CO');
            $table->string('country')->default('United States');
            $table->string('postcode')->default('80521');
            $table->string('total_area_m2')->default(40);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('area_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->string('name')->default('generic grow tent');
            $table->string('description')->default('cheap and easy');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('areas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->unsignedBigInteger('farm_id');
            $table->foreign('farm_id')->references('id')->on('farms')->onDelete('cascade');
            $table->string('name');
            $table->longText('description')->nullable();
            $table->unsignedBigInteger('floorspace_cm2')->nullable();
            $table->unsignedBigInteger('growspace_cm2')->nullable();
            $table->unsignedBigInteger('area_type_id')->nullable();
            $table->foreign('area_type_id')->references('id')->on('area_types');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('seed_companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique()->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->string('name')->nullable();
            $table->string('ucpc')->nullable()->unique();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('url')->nullable();
            $table->string('cannabis_reports_link')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('strains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique()->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->unsignedBigInteger('seed_company_id')->nullable();
            $table->foreign('seed_company_id')
                ->references('id')
                ->on('seed_companies');
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('lineage')->nullable();
            $table->string('genetics')->nullable();
            $table->string('seed_company')->nullable();
            $table->longText('description')->nullable();
            $table->string('url')->nullable();
            $table->string('qr')->nullable();
            $table->string('cannabis_reports_link')->nullable();
            $table->integer('flowering_time_min')->unsigned()->nullable();
            $table->integer('flowering_time_max')->unsigned()->nullable();
            $table->string('ucpc')->nullable()->unique();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('seeds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->unsignedBigInteger('strain_id');
            $table->foreign('strain_id')
                ->references('id')
                ->on('strains');
            $table->unsignedBigInteger('seed_company_id');
            $table->foreign('seed_company_id')
                ->references('id')
                ->on('seed_companies');
            $table->longText('description')->nullable();
            $table->unsignedBigInteger('qty_per_pack')->default(12);
            $table->unsignedBigInteger('price')->default(100);
            $table->unsignedBigInteger('inventory')->default(0);
            $table->boolean('feminized');
            $table->boolean('autoflower');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('cuttings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->unsignedBigInteger('strain_id');
            $table->foreign('strain_id')
                ->references('id')
                ->on('strains');
            $table->unsignedBigInteger('seed_company_id')->nullable();
            $table->foreign('seed_company_id')
                ->references('id')
                ->on('seed_companies');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->longText('description')->nullable();
            $table->unsignedBigInteger('price')->default(100);
            $table->unsignedBigInteger('inventory')->default(0);
            $table->timestamps();
        });

        Schema::create('manufacturers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
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

        Schema::create('media', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->string('name');
            $table->longText('description')->nullable();
            $table->unsignedBigInteger('manufacturer_id')->nullable();
            $table->foreign('manufacturer_id')
                ->references('id')
                ->on('manufacturers');
            $table->json('ingredients')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('cycles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->unsignedBigInteger('farm_id');
            $table->foreign('farm_id')->references('id')->on('farms')->onDelete('cascade');
            $table->string('name')->default('Default Cycle');
            $table->longText('description')->nullable();
            $table->unsignedBigInteger('medium_id')->nullable();
            $table->foreign('medium_id')
                ->references('id')
                ->on('media');
            $table->string('layout')->default('Horizontal');
            $table->string('method')->default('Organic Soil');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('harvests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->date('date_of')->default(now('America/Denver'));
            $table->unsignedBigInteger('cycle_id');
            $table->foreign('cycle_id')
                ->references('id')
                ->on('cycles')
                ->onDelete('cascade');
            $table->unsignedInteger('grams')->default(454);
            $table->text('notes')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('stages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->unsignedBigInteger('area_id')->nullable();
            $table->foreign('area_id')->references('id')->on('areas');
            $table->string('name')->default('default stage');
            $table->text('description')->nullable();
            $table->unsignedInteger('photoperiod')->default(24);            
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('plants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->unsignedBigInteger('strain_id');
            $table->foreign('strain_id')
                ->references('id')
                ->on('strains');
            $table->unsignedBigInteger('cycle_id');
            $table->foreign('cycle_id')
                ->references('id')
                ->on('cycles')
                ->onDelete('cascade');
            $table->json('notes')->nullable();
            $table->softDeletes();
            $table->timestamps();
        }); 

        Schema::create('sensor_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->string('type');
            $table->string('model')->nullable();
            $table->json('specification')->nullable();
            // float ^[+-]?(\d*\.)?(\d+)?\b$
            //pH format ^((?![2-9])(1 {0,1})(\d){0,1})(\.)(\d{1,2})\b$
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('sensors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->unsignedBigInteger('manufacturer_id')->nullable();
            $table->foreign('manufacturer_id')
                ->references('id')
                ->on('manufacturers');
            $table->string('name')->default('default sensor');
            $table->unsignedBigInteger('sensor_type_id')->nullable();
            $table->foreign('sensor_type_id')->references('id')->on('sensor_types');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('solutions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('sensor_id')->nullable();
            $table->float('ph', 4, 2)->nullable();
            $table->float('ec')->nullable();
            $table->unsignedBigInteger('tds')->nullable();
            $table->unsignedBigInteger('level')->nullable();
            $table->unsignedBigInteger('temperature_c')->nullable();
            $table->unsignedBigInteger('dissolved_oxygen')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('environments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('sensor_id')->nullable();
            $table->foreign('sensor_id')->references('id')->on('sensors');
            $table->unsignedBigInteger('temperature_c')->nullable();
            $table->unsignedBigInteger('c02_ppm')->nullable();
            $table->unsignedBigInteger('oxygen_ppm')->nullable();
            $table->unsignedBigInteger('relative_humidity')->nullable();
            $table->float('barometric_pressure', 4, 2)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('light_fixtures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->unsignedBigInteger('manufacturer_id')->nullable();
            $table->foreign('manufacturer_id')
                ->references('id')
                ->on('manufacturers');
            $table->string('model')->default('custom');
            $table->string('type')->default('HID');
            $table->unsignedBigInteger('watts')->default(1000);
            $table->unsignedBigInteger('ppf')->default(1100);
            $table->json('specification')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('reservoirs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->unsignedBigInteger('manufacturer_id')->nullable();
            $table->foreign('manufacturer_id')
                ->references('id')
                ->on('manufacturers');
            $table->string('name')->default('null reservoir');
            $table->json('specification')->nullable();
            $table->unsignedBigInteger('capacity')->default(0);
            $table->boolean('auto_dosing')->default(false);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('fertilizers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->string('name')->default('default');
            $table->unsignedBigInteger('manufacturer_id')->nullable();
            $table->foreign('manufacturer_id')
                ->references('id')
                ->on('manufacturers');
            $table->float('nitrogen', 6, 3)->default(20);
            $table->float('phosphorus', 6, 3)->default(17);
            $table->float('potassium', 6, 3)->default(24);
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
            $table->uuid('uuid')->unique();
            $table->unsignedBigInteger('manufacturer_id')->nullable();
            $table->foreign('manufacturer_id')
                ->references('id')
                ->on('manufacturers');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
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
            $table->uuid('uuid')->unique();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->unsignedBigInteger('watts')->default(0);
            $table->unsignedBigInteger('cfm')->default(0);
            $table->unsignedBigInteger('manufacturer_id')->nullable();
            $table->foreign('manufacturer_id')
                ->references('id')
                ->on('manufacturers');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('chillers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->string('model')->nullable();
            $table->unsignedInteger('capacity');
            $table->unsignedBigInteger('btus')->default(0);
            $table->unsignedBigInteger('watts')->default(0);
            $table->unsignedBigInteger('gph')->default(0);
            $table->unsignedBigInteger('manufacturer_id')->nullable();
            $table->foreign('manufacturer_id')
                ->references('id')
                ->on('manufacturers');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('lamps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->unsignedBigInteger('manufacturer_id')->nullable();
            $table->foreign('manufacturer_id')
                ->references('id')
                ->on('manufacturers');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->string('model')->nullable();
            $table->string('type')->nullable();
            $table->unsignedBigInteger('watts')->default(400);
            $table->unsignedBigInteger('ppf')->default(90);
            $table->unsignedBigInteger('lumens')->default(36000);
            $table->json('specification')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('drivers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->string('model');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->unsignedBigInteger('manufacturer_id')->nullable();
            $table->foreign('manufacturer_id')
                ->references('id')
                ->on('manufacturers');
            $table->unsignedBigInteger('watts')->default(250);
            $table->unsignedBigInteger('volts_dc_min')->default(10);
            $table->unsignedBigInteger('volts_dc_max')->default(1000);
            $table->unsignedBigInteger('efficiency')->default(989);
            $table->json('specification')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('ballasts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->string('model');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->unsignedBigInteger('watts')->default(0);
            $table->unsignedBigInteger('manufacturer_id')->nullable();
            $table->foreign('manufacturer_id')
                ->references('id')
                ->on('manufacturers');
            $table->unsignedBigInteger('efficiency')->default(895);
            $table->json('specification')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('reflector_hoods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->unsignedBigInteger('manufacturer_id')->nullable();
            $table->foreign('manufacturer_id')
                ->references('id')
                ->on('manufacturers');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->string('model');
            $table->json('specification')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }


    protected function humans()
    {
        // Humans
        Schema::create('users', function ($table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
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

        Schema::create('teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('name');
            $table->longText('biography');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    protected function pivots()
    {
        // Pivot Tables
        Schema::create('team_user', function (Blueprint $table) {
            $table->unsignedBigInteger('team_id');
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });

        Schema::create('cycle_stage', function (Blueprint $table) {
            $table->unsignedBigInteger('cycle_id');
            $table->foreign('cycle_id')
                ->references('id')
                ->on('cycles')->onDelete('cascade');
            $table->unsignedBigInteger('stage_id');
            $table->foreign('stage_id')
                ->references('id')
                ->on('stages');
        });       

        Schema::create('light_fixture_stage', function (Blueprint $table) {
            $table->unsignedBigInteger('light_fixture_id');
            $table->foreign('light_fixture_id')
                ->references('id')
                ->on('light_fixtures');
            $table->unsignedBigInteger('stage_id');
            $table->foreign('stage_id')
                ->references('id')
                ->on('stages');
        });

        Schema::create('reservoir_stage', function (Blueprint $table) {
            $table->unsignedBigInteger('stage_id');
            $table->foreign('stage_id')
                ->references('id')
                ->on('stages');
            $table->unsignedBigInteger('reservoir_id');
            $table->foreign('reservoir_id')
                ->references('id')
                ->on('reservoirs');
        });

        Schema::create('ballast_light_fixture', function (Blueprint $table) {
            $table->unsignedBigInteger('ballast_id');
            $table->foreign('ballast_id')
                ->references('id')
                ->on('ballasts');
            $table->unsignedBigInteger('light_fixture_id');
            $table->foreign('light_fixture_id')
                ->references('id')
                ->on('light_fixtures');
        });

        Schema::create('driver_light_fixture', function (Blueprint $table) {
            $table->unsignedBigInteger('driver_id');
            $table->foreign('driver_id')
                ->references('id')
                ->on('drivers');
            $table->unsignedBigInteger('light_fixture_id');
            $table->foreign('light_fixture_id')
                ->references('id')
                ->on('light_fixtures');
        });

        Schema::create('lamp_light_fixture', function (Blueprint $table) {
            $table->unsignedBigInteger('lamp_id');
            $table->foreign('lamp_id')
                ->references('id')
                ->on('lamps');
            $table->unsignedBigInteger('light_fixture_id');
            $table->foreign('light_fixture_id')
                ->references('id')
                ->on('light_fixtures');
        });       

        Schema::create('feature_plan', function (Blueprint $table) {
            $table->unsignedBigInteger('plan_id');
            $table->unsignedBigInteger('feature_id');
            $table->timestamps();
        });

        Schema::create('harvest_plant', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('harvest_id');
            $table->foreign('harvest_id')
                ->references('id')
                ->on('harvests');
            $table->unsignedBigInteger('plant_id');
            $table->foreign('plant_id')
                ->references('id')
                ->on('plants')
                ->onDelete('cascade');
        });
        
        Schema::create('content_image', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('content_id');
            $table->foreign('content_id')->references('id')->on('contents')->onDelete('cascade');
            $table->unsignedBigInteger('image_id');
            $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
        });

        Schema::create('content_comment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('content_id');
            $table->unsignedBigInteger('comment_id');
        });

        Schema::create('content_edit', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('content_id');
            $table->foreign('content_id')->references('id')->on('contents')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->json('old_content'); // JSON formatted title, body, image_id array and tags, comments, whatever else.
            $table->timestamps();
        });
    }


    public function populate()
    {
        DB::unprepared(file_get_contents('database/seed_companies.sql'));
        DB::unprepared(file_get_contents('database/strains.sql'));    
    }

}
