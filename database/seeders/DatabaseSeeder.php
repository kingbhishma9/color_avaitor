<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use App\Models\AppSetting;
use App\Models\Win1minBet;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Win3minBet;
use App\Models\Win5minBet;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        AppSetting::create([
            'version' => '1.0.0',
            'upi' => '8604602216@ybl',
            'min_recharge' => '100',
            'max_recharge' => '10000',
            'min_withdrawal' => '500',
            'max_withdrawal' => '50000',
            'support_url' => 'https://wa.me/+918604602216',
            'otp_enable' => '0',
            'otp_api' => 'null',
            'agent_percentage' => '1.5',
            'withdrawal_charge_enable' => '0',
            'withdrawal_enable' => '1',
            'withdrawal_charge' => '2',
            'color_prediction_charge' => '1',
            'aviatar_charge' => '1',
            'welcome_node' => 'welcome to delhiking ',
        ]);

        $game = new Win3minBet();
        $game->save();

        $game1 = new Win1minBet();
        $game1->save();

        $game2 = new Win5minBet();
        $game2->save();
    }
}
