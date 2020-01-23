<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMostOfTheTables extends Migration
{
    protected $tables = [
        'api_keys',
        'area_types',
        'areas',
        'ballast_light_fixture',
        'ballasts',
        'chillers',
        'comments',
        'contact_form_messages',
        'content_edits',
        'contents',
        'contest_entries',
        'cuttings',
        'cycle_stage',
        'cycles',
        'driver_light_fixture',
        'drivers',
        'environments',
        'failed_jobs',
        'fans',
        'farms',
        'feature_plans',
        'features',
        'fertilizers',
        'game_move',
        'game_user',
        'games',
        'giveaways',
        'harvest_plans',
        'harvests',
        'hvac_appliances',
        'images',
        'invoices',
        'lamp_light_fixture',
        'lamps',
        'light_fixture_stage',
        'light_fixtures',
        'manufacturers',
        'media',
        'migrations',
        'model_permissions',
        'model_has_roles',
        'password_resets',
        'permissions',
        'plans',
        'plants',
        'pot_lucks',
        'profiles',
        'raffles',
        'reflector_hoods',
        'reservoir_stage',
        'reservoirs',
        'role_has_permissions',
        'roles',
        'seeds',
        'sensor_types',
        'sensors',
        'solutions',
        'stages',
        'subscriptions',
        'users'        
    ];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // $this->humans();

        // $this->growing();
        
        // $this->content();

        // $this->application();
        
        // $this->pivots();

        $this->populate();

        // Schema::create('games', function(Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('title');
        //     $table->string('slug');
        //     $table->timestamps();
        // });

        // Schema::create('game_user', function(Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->unsignedBigInteger('game_id');
        //     $table->foreign('game_id')
        //         ->references('id')
        //         ->on('games');
        //     $table->realBinary('user_id', 32);            
        //     $table->foreign('user_id')
        //         ->references('uuid')
        //         ->on('users')
        //         ;
        // });
        
        // Schema::create('game_move', function(Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->unsignedBigInteger('game_user_id');
        //     $table->foreign('game_user_id')->references('id')->on('game_user');
        //     $table->json('state'); 
        // });

        // Schema::create('pot_lucks', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->unsignedBigInteger('game_id');
        //     $table->foreign('game_id')->references('id')->on('games');
        //     $table->realBinary('winner_id', 32);
        //     $table->foreign('winner_id')->references('uuid')->on('users');
        //     $table->timestamps();
        // });
    }


    /**
     * 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop();

        foreach ( $this->tables as $table ) {
            if(Schema::hasTable($table)) {
                Schema::dropIfExists($table);    
            }            
        }
        
        // $permissionTableNames = config('permission.table_names');

        // Schema::dropIfExists($permissionTableNames['role_has_permissions']);
        // Schema::dropIfExists($permissionTableNames['model_has_roles']);
        // Schema::dropIfExists($permissionTableNames['model_has_permissions']);
        // Schema::dropIfExists($permissionTableNames['roles']);
        // Schema::dropIfExists($permissionTableNames['permissions']);
    }

    protected function application()
    {
        // Application
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('api_keys', function (Blueprint $table) {
            $table->realBinary('uuid', 32)->unique()->primary();  
            $table->string('key');
            $table->string('name');
            $table->realBinary('user_id', 32);
            $table->foreign('user_id')->references('uuid')->on('users');
            $table->realBinary('sensor_id', 32)->nullable();
            $table->foreign('sensor_id')->references('uuid')->on('sensors');
            $table->timestamps();
        });

        Schema::create('subscriptions', function ($table) {
            $table->realBinary('uuid', 32)->unique()->primary();  
            $table->realBinary('user_id', 32);
            $table->foreign('user_id')->references('uuid')->on('users');
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
            $table->realBinary('uuid', 32)->unique()->primary();  
            $table->string('name');
            $table->string('description')->default('super useful new feature!');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('plans', function (Blueprint $table) {
            $table->realBinary('uuid', 32)->unique()->primary();  
            $table->string('name');
            $table->string('stripe_plan');
            $table->boolean('archived')->default(false);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('profiles', function (Blueprint $table) {
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->realBinary('user_id', 32);
            $table->foreign('user_id')->references('uuid')->on('users');
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
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->realBinary('user_id', 32);
            $table->foreign('user_id')->references('uuid')->on('users');
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
                ;

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
                ;

            $table->primary(['role_id', $permissionColumnNames['model_morph_key'], 'model_type'],
                    'model_has_roles_role_model_type_primary');
        });

        Schema::create($permissionTableNames['role_has_permissions'], function (Blueprint $table) use ($permissionTableNames) {
            $table->unsignedBigInteger('permission_id');
            $table->unsignedBigInteger('role_id');

            $table->foreign('permission_id')
                ->references('id')
                ->on($permissionTableNames['permissions'])
                ;

            $table->foreign('role_id')
                ->references('id')
                ->on($permissionTableNames['roles'])
                ;

            $table->primary(['permission_id', 'role_id']);

            app('cache')->forget('spatie.permission.cache');
        });    
    }


    protected function content()
    {
        // Content
        Schema::create('images', function (Blueprint $table) {
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->text('large')->nullable();
            $table->text('medium')->nullable();
            $table->text('small')->nullable();
            $table->nullableMorphs('imageable');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('contents', function (Blueprint $table) {
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->realBinary('author_id', 32);
            $table->foreign('author_id')->references('uuid')->on('users');
            $table->text('slug');
            $table->nullableMorphs('commentable');
            $table->text('title');
            $table->longText('body');
            $table->json('fields')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('comments', function (Blueprint $table) {
            $table->realBinary('uuid', 32)->unique()->primary();          
            $table->realBinary('author_id', 32);
            $table->foreign('author_id')->references('uuid')->on('users');
            $table->realBinary('content_id', 32);
            $table->foreign('content_id')->references('uuid')->on('contents');
            $table->text('title');
            $table->longText('body');
            $table->timestamps();
        });

        Schema::create('raffles', function (Blueprint $table) {
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->unsignedBigInteger('ticket_limit')->default(0);
            $table->string('title');
            $table->string('description');
            $table->timestamp('ends_at');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('giveaways', function (Blueprint $table) {
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->string('title');
            $table->longText('description');
            $table->string('image');
            $table->dateTime('ends_at');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('contest_entries', function (Blueprint $table) {
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->integer('giveaway_id')->unsigned()->default(0);
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('contact_form_messages', function (Blueprint $table) {
            $table->realBinary('uuid', 32)->unique()->primary();  
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
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->realBinary('user_id', 32)->nullable();
            $table->foreign('user_id')
                ->references('uuid')
                ->on('users');
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
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->realBinary('user_id', 32)->nullable();
            $table->foreign('user_id')
                ->references('uuid')
                ->on('users');
            $table->string('name')->default('generic grow tent');
            $table->string('description')->default('cheap and easy');
            $table->timestamps();
        });

        Schema::create('areas', function (Blueprint $table) {
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->realBinary('farm_id', 32);
            $table->foreign('farm_id')->references('uuid')->on('farms');
            $table->string('name');
            $table->longText('description')->nullable();
            $table->unsignedBigInteger('floorspace_cm2')->nullable();
            $table->unsignedBigInteger('growspace_cm2')->nullable();
            $table->realBinary('area_type_id', 32)->nullable();
            $table->foreign('area_type_id')->references('uuid')->on('area_types');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('seed_companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique()->nullable();
            $table->realBinary('user_id', 32)->nullable();
            $table->foreign('user_id')
                ->references('uuid')
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
            $table->realBinary('user_id', 32)->nullable();
            $table->foreign('user_id')
                ->references('uuid')
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
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->realBinary('user_id', 32)->nullable();
            $table->foreign('user_id')
                ->references('uuid')
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
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->unsignedBigInteger('strain_id');
            $table->foreign('strain_id')
                ->references('id')
                ->on('strains');
            $table->unsignedBigInteger('seed_company_id')->nullable();
            $table->foreign('seed_company_id')
                ->references('id')
                ->on('seed_companies');
            $table->realBinary('user_id', 32)->nullable();
            $table->foreign('user_id')
                ->references('uuid')
                ->on('users');
            $table->longText('description')->nullable();
            $table->unsignedBigInteger('price')->default(100);
            $table->unsignedBigInteger('inventory')->default(0);
            $table->timestamps();
        });

        Schema::create('manufacturers', function (Blueprint $table) {
            $table->realBinary('uuid', 32)->unique()->primary();
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
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->string('name');
            $table->longText('description')->nullable();
            $table->realBinary('manufacturer_id', 32)->nullable();
            $table->foreign('manufacturer_id')
                ->references('uuid')
                ->on('manufacturers');
            $table->json('ingredients')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('cycles', function (Blueprint $table) {
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->realBinary('farm_id', 32);
            $table->foreign('farm_id')->references('uuid')->on('farms');
            $table->string('name')->default('Default Cycle');
            $table->longText('description')->nullable();
            $table->realBinary('medium_id', 32)->nullable();
            $table->foreign('medium_id')
                ->references('uuid')
                ->on('media');
            $table->string('layout')->default('Horizontal');
            $table->string('method')->default('Organic Soil');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('harvests', function (Blueprint $table) {
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->date('date_of')->default(now('America/Denver'));
            $table->realBinary('cycle_id', 32);
            $table->foreign('cycle_id')
                ->references('uuid')
                ->on('cycles');
            $table->unsignedInteger('grams')->default(454);
            $table->text('notes')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('stages', function (Blueprint $table) {
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->realBinary('area_id', 32)->nullable();
            $table->foreign('area_id')->references('uuid')->on('areas');
            $table->string('name')->default('default stage');
            $table->text('description')->nullable();
            $table->unsignedInteger('photoperiod')->default(24);            
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('plants', function (Blueprint $table) {
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->unsignedBigInteger('strain_id');
            $table->foreign('strain_id')
                ->references('id')
                ->on('strains');
            $table->realBinary('cycle_id', 32);
            $table->foreign('cycle_id')
                ->references('uuid')
                ->on('cycles')
                ;
            $table->json('notes')->nullable();
            $table->softDeletes();
            $table->timestamps();
        }); 

        Schema::create('sensor_types', function (Blueprint $table) {
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->realBinary('user_id', 32)->nullable();
            $table->foreign('user_id')
                ->references('uuid')
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
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->realBinary('user_id', 32)->nullable();
            $table->foreign('user_id')
                ->references('uuid')
                ->on('users');
            $table->realBinary('manufacturer_id', 32)->nullable();
            $table->foreign('manufacturer_id')
                ->references('uuid')
                ->on('manufacturers');
            $table->string('name')->default('default sensor');
            $table->realBinary('sensor_type_id', 32)->nullable();
            $table->foreign('sensor_type_id')->references('uuid')->on('sensor_types');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('solutions', function (Blueprint $table) {
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->realBinary('user_id', 32)->nullable();
            $table->foreign('user_id')->references('uuid')->on('users');
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
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->realBinary('user_id', 32)->nullable();
            $table->foreign('user_id')->references('uuid')->on('users');
            $table->realBinary('sensor_id', 32)->nullable();
            $table->foreign('sensor_id')->references('uuid')->on('sensors');
            $table->unsignedBigInteger('temperature_c')->nullable();
            $table->unsignedBigInteger('c02_ppm')->nullable();
            $table->unsignedBigInteger('oxygen_ppm')->nullable();
            $table->unsignedBigInteger('relative_humidity')->nullable();
            $table->float('barometric_pressure', 4, 2)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('light_fixtures', function (Blueprint $table) {
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->realBinary('user_id', 32)->nullable();
            $table->foreign('user_id')
                ->references('uuid')
                ->on('users');
            $table->realBinary('manufacturer_id', 32)->nullable();
            $table->foreign('manufacturer_id')
                ->references('uuid')
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
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->realBinary('user_id', 32)->nullable();
            $table->foreign('user_id')
                ->references('uuid')
                ->on('users');
            $table->realBinary('manufacturer_id', 32)->nullable();
            $table->foreign('manufacturer_id')
                ->references('uuid')
                ->on('manufacturers');
            $table->string('name')->default('null reservoir');
            $table->json('specification')->nullable();
            $table->unsignedBigInteger('capacity')->default(0);
            $table->boolean('auto_dosing')->default(false);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('fertilizers', function (Blueprint $table) {
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->realBinary('user_id', 32)->nullable();
            $table->foreign('user_id')
                ->references('uuid')
                ->on('users');
            $table->string('name')->default('default');
            $table->realBinary('manufacturer_id', 32)->nullable();
            $table->foreign('manufacturer_id')
                ->references('uuid')
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
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->realBinary('manufacturer_id', 32)->nullable();
            $table->foreign('manufacturer_id')
                ->references('uuid')
                ->on('manufacturers');
            $table->realBinary('user_id', 32)->nullable();
            $table->foreign('user_id')
                ->references('uuid')
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
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->realBinary('user_id', 32)->nullable();
            $table->foreign('user_id')
                ->references('uuid')
                ->on('users');
            $table->unsignedInteger('watts')->default(0);
            $table->unsignedBigInteger('cfm')->default(0);
            $table->realBinary('manufacturer_id', 32)->nullable();
            $table->foreign('manufacturer_id', 16)
                ->references('uuid')
                ->on('manufacturers');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('chillers', function (Blueprint $table) {
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->string('model')->nullable();
            $table->unsignedInteger('capacity');
            $table->unsignedBigInteger('btus')->default(0);
            $table->unsignedBigInteger('watts')->default(0);
            $table->unsignedBigInteger('gph')->default(0);
            $table->realBinary('manufacturer_id', 32)->nullable();
            $table->foreign('manufacturer_id')
                ->references('uuid')
                ->on('manufacturers');
            $table->realBinary('user_id', 32)->nullable();
            $table->foreign('user_id')
                ->references('uuid')
                ->on('users');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('lamps', function (Blueprint $table) {
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->realBinary('manufacturer_id', 32)->nullable();
            $table->foreign('manufacturer_id')
                ->references('uuid')
                ->on('manufacturers');
            $table->realBinary('user_id', 32)->nullable();
            $table->foreign('user_id')
                ->references('uuid')
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
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->string('model');
            $table->realBinary('user_id', 32)->nullable();
            $table->foreign('user_id')
                ->references('uuid')
                ->on('users');
            $table->realBinary('manufacturer_id', 32)->nullable();
            $table->foreign('manufacturer_id')
                ->references('uuid')
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
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->string('model');
            $table->realBinary('user_id', 32)->nullable();
            $table->foreign('user_id')
                ->references('uuid')
                ->on('users');
            $table->unsignedBigInteger('watts')->default(0);
            $table->realBinary('manufacturer_id', 32)->nullable();
            $table->foreign('manufacturer_id')
                ->references('uuid')
                ->on('manufacturers');
            $table->unsignedBigInteger('efficiency')->default(895);
            $table->json('specification')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('reflector_hoods', function (Blueprint $table) {
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->realBinary('manufacturer_id', 32)->nullable();
            $table->foreign('manufacturer_id')
                ->references('uuid')
                ->on('manufacturers');
            $table->realBinary('user_id', 32)->nullable();
            $table->foreign('user_id')
                ->references('uuid')
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
            $table->realBinary('uuid', 32)->unique()->primary();
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
    }

    protected function pivots()
    {
        Schema::create('cycle_stage', function (Blueprint $table) {
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->realBinary('cycle_id', 32);
            $table->foreign('cycle_id')
                ->references('uuid')
                ->on('cycles');
            $table->realBinary('stage_id', 32);
            $table->foreign('stage_id')
                ->references('uuid')
                ->on('stages');
        });       

        Schema::create('light_fixture_stage', function (Blueprint $table) {
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->realBinary('light_fixture_id', 32);
            $table->foreign('light_fixture_id')
                ->references('uuid')
                ->on('light_fixtures');
            $table->realBinary('stage_id', 32);
            $table->foreign('stage_id')
                ->references('uuid')
                ->on('stages');
        });

        Schema::create('reservoir_stage', function (Blueprint $table) {
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->realBinary('stage_id', 32);
            $table->foreign('stage_id')
                ->references('uuid')
                ->on('stages');
            $table->realBinary('reservoir_id', 32);
            $table->foreign('reservoir_id')
                ->references('uuid')
                ->on('reservoirs');
        });

        Schema::create('ballast_light_fixture', function (Blueprint $table) {
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->realBinary('ballast_id', 32);
            $table->foreign('ballast_id')
                ->references('uuid')
                ->on('ballasts');
            $table->realBinary('light_fixture_id', 32);
            $table->foreign('light_fixture_id')
                ->references('uuid')
                ->on('light_fixtures');
        });

        Schema::create('driver_light_fixture', function (Blueprint $table) {
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->realBinary('driver_id', 32);
            $table->foreign('driver_id')
                ->references('uuid')
                ->on('drivers');
            $table->realBinary('light_fixture_id', 32);
            $table->foreign('light_fixture_id')
                ->references('uuid')
                ->on('light_fixtures');
        });

        Schema::create('lamp_light_fixture', function (Blueprint $table) {
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->realBinary('lamp_id', 32);
            $table->foreign('lamp_id')
                ->references('uuid')
                ->on('lamps');
            $table->realBinary('light_fixture_id', 32);
            $table->foreign('light_fixture_id')
                ->references('uuid')
                ->on('light_fixtures');
        });       

        Schema::create('feature_plan', function (Blueprint $table) {
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->realBinary('plan_id', 32);
            $table->realBinary('feature_id', 32);
            $table->timestamps();
        });

        Schema::create('harvest_plant', function (Blueprint $table) {
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->realBinary('harvest_id', 32);
            $table->foreign('harvest_id')
                ->references('uuid')
                ->on('harvests');
            $table->realBinary('plant_id', 32);
            $table->foreign('plant_id')
                ->references('uuid')
                ->on('plants')
                ;
        });
        
        Schema::create('content_edits', function (Blueprint $table) {
            $table->realBinary('uuid', 32)->unique()->primary();
            $table->realBinary('content_id', 32);
            $table->foreign('content_id')->references('uuid')->on('contents');
            $table->realBinary('user_id', 32);
            $table->foreign('user_id')->references('uuid')->on('users');
            $table->json('old_content'); // JSON formatted title, body, image_id array and tags, comments, whatever else.
            $table->string('old_hash', 64);
            $table->timestamps();
        });
    }

    public function populate()
    {
        DB::unprepared(file_get_contents('database/seed_companies.sql'));
        DB::unprepared(file_get_contents('database/strains.sql'));    
    }

}
