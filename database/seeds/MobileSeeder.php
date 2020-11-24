<?php

use Illuminate\Database\Seeder;
use App\Mobile;

class MobileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mobile::create([
        'name' => 'Samsung S9',
        'valuation' => 8,
        'range_id' => 1,
        'url_photo' => 'https://image.samsung.com/latin/smartphones/galaxy-s9/shop/buyingtool/product/product_galaxys9_lilacpurple_01.png'
    	]);
        Mobile::create([
        'name' => 'Sony Xperia Z23',
        'valuation' => 7,
        'range_id' => 2,
        'url_photo' => 'https://www.androidcentral.com/sites/androidcentral.com/files/styles/xlarge/public/article_images/2018/08/sony-xperia-xz3-render-3.png?itok=uv1pUZ7c'
        ]);
        Mobile::create([
        'name' => 'Xiaomi Mi Pro 8',
        'valuation' => 9,
        'range_id' => 3,
        'url_photo' => 'https://i.ebayimg.com/images/g/u8MAAOSw2jNbquwo/s-l300.png'
        ]);
        Mobile::create([
        'name' => 'Huawei Mate 20',
        'valuation' => 9,
        'range_id' => 3,
        'url_photo' => 'https://www.androidforyou.es/pub/media/catalog/product/cache/e4d64343b1bc593f1c5348fe05efa4a6/t/h/thumb_163010_default_big_1.png'
        ]);
        Mobile::create([
        'name' => 'LeEco Le Pro 3 X722',
        'valuation' => 8,
        'range_id' => 3,
        'url_photo' => 'https://lifesconfession.com/phonitek/wp-content/uploads/leeco-le-max-2-dorado-1.png'
        ]);

    }
}
