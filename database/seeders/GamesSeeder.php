<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Game::create([
            'name' => 'BAMBOO RUSH',
            'game_url' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=806&lang=es',
            'description' => 'Brush aside the bamboo stems, take the mountain path, and discover a secret garden filled with endless opportunities in BAMBOO RUSH – the new 5X4 slot game from Betsoft Gaming.',
            'image_url' => 'https://winchiletragamonedas.com/public/images/games/bamboo_rush.jpeg',
            'status' => 'running'
        ]);

        Game::create([
            'name' => 'REELS OF WEALTH',
            'game_url' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=795&lang=es',
            'description' => 'Cash in on one of the most exciting new BIG WIN games of 2018 with Reels of Wealth. In this jewel toned, multi-feature new gem from Betsoft Gaming, players try their luck to earn the payday of a lifetime with the innovative new Megastar Jackpot mini game.',
            'image_url' => 'https://winchiletragamonedas.com/public/images/games/reels_of_wealth.jpeg',
            'status' => 'running'
        ]);

        Game::create([
            'name' => 'DRAGON & PHOENIX',
            'game_url' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=814&lang=es',
            'description' => 'Welcome to the court of DRAGON & PHOENIX, a lucrative realm filled to the brim with riches. Seek out the ROYAL COUPLE and MONEY TREE SCATTERS to win big in this rich 5X3 video slot game.',
            'image_url' => 'https://winchiletragamonedas.com/public/images/games/dragon_phoenix.jpeg',
            'status' => 'running'
        ]);

        Game::create([
            'name' => 'TAKE THE BANK',
            'game_url' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=813&lang=es',
            'description' => 'Are you ready for the heist of a lifetime? Welcome to TAKE THE BANK, a fast-paced slot with big, big payouts. Rob the bank and run away with the goods in an exciting adventure with sticky wilds bonus rounds and superb potential!',
            'image_url' => 'https://winchiletragamonedas.com/public/images/games/take_the_bank.jpeg',
            'status' => 'running'
        ]);

        Game::create([
            'name' => 'CAISHEN’S ARRIVAL',
            'game_url' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=812&lang=es',
            'description' => 'Discover boundless wealth in the newest slots game by Betsoft Gaming — CAISHEN’S ARRIVAL! With the amazing blessings of Caishen, prepare to delve into a world of riches!',
            'image_url' => 'https://winchiletragamonedas.com/public/images/games/caishens_arrival.jpeg',
            'status' => 'running'
        ]);

        Game::create([
            'name' => 'GEMMED!',
            'game_url' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=811&lang=es',
            'description' => 'Win with gems of ALL shapes and sizes in GEMMED!, the latest slots game by Betsoft. Featuring 40503 ways to win and an innovative reel system, hunting for wins has never been this fun.',
            'image_url' => 'https://winchiletragamonedas.com/public/images/games/gemmed.jpeg',
            'status' => 'running'
        ]);
    }
}
