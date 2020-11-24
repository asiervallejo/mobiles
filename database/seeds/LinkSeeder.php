<?php

use Illuminate\Database\Seeder;
use App\Link;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Link::create([
        'mobile_id' => 1,
        'n_opinion' => 6,
        'opinion_web' => 'Phonehouse',
        'opinion_url' => 'https://www.phonehouse.es/movil/samsung/galaxy-s9/opiniones.html'
    	]);
        Link::create([
        'mobile_id' => 2,
        'n_opinion' => 48,
        'opinion_web' => 'Phonehouse',
        'opinion_url' => 'https://www.phonehouse.es/movil/sony/xperia-z3/opiniones.html'
        ]);
        Link::create([
        'mobile_id' => 2,
        'n_opinion' => 35,
        'opinion_web' => 'Amazon',
        'opinion_url' => 'https://www.amazon.es/Sony-Xperia-Smartphone-Snapdragon-importado/product-reviews/B00N9O8C2M/ref=dpx_acr_txt?showViewpoints=1'
        ]);
        Link::create([
        'mobile_id' => 3,
        'n_opinion' => 94,
        'opinion_web' => 'Amazon',
        'opinion_url' => 'https://www.amazon.es/Xiaomi-Pro-Smartphone-Snapdragon-Transparente/product-reviews/B07KMFZCQT/ref=dpx_acr_txt?showViewpoints=1'
        ]);
    }
}
