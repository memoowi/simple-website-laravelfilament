<?php

use App\Models\Setting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->text('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        Setting::create([
            'key' => '_site_name',
            'label' => 'Site Name',
            'value' => 'Kintaro',
            'type' => 'text',
        ]);
        Setting::create([
            'key' => '_location',
            'label' => 'Address',
            'value' => 'Bogor, Jawa Barat, Indonesia',
            'type' => 'text',
        ]);
        Setting::create([
            'key' => '_youtube',
            'label' => 'Youtube',
            'value' => 'https://youtube.com',
            'type' => 'text',
        ]);
        Setting::create([
            'key' => '_instagram',
            'label' => 'Instagram',
            'value' => 'https://instagram.com',
            'type' => 'text',
        ]);
        Setting::create([
            'key' => '_x',
            'label' => 'X',
            'value' => 'https://x.com',
            'type' => 'text',
        ]);
        Setting::create([
            'key' => '_facebook',
            'label' => 'Facebook',
            'value' => 'https://facebook.com',
            'type' => 'text',
        ]);
        Setting::create([
            'key' => '_site_description',
            'label' => 'Site Description',
            'value' => 'We Provide Best Services to Make Your Life Easier',
            'type' => 'text',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
