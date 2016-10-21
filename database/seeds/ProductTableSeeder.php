<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product([
        	'imagePath' => 'https://media.zigcdn.com/media/model/2016/Feb/bajaj_v_600x300.jpg',
        	'title' => 'Bajaj V',
        	'description' => 'The Bajaj V is special because it has parts made from the metal of the indigenous aircraft carrier INS Vikrant. Now, Bajaj has launched the ‘Mission Vikrant 1975’ to trace the life journey of 1,300 officers and sailors that served on the vessel during the 1971 Indo-Pak war. The Mission Vikrant 1971 is a digital initiative to identify and share details of all those who were onboard the aircraft carrier during the 1971 war',
        	'price' =>  63444
        	]);
        $product->save();
        $product = new Product([
        	'imagePath' => 'https://www.zigcdn.com/media/upcomingmodel/2015/May/2015-aprilia-rsv4-m2-720x540_720x540.jpg',
        	'title' => 'Aprilia RSV4',
        	'description' => 'The new Aprilia RSV4 is the facelift to the 2014 machine and has been given cosmetic and mechanical updates to compete with the new generation of litre-class superbikes that were unveiled at the 2014 EICMA motorcycle show.',
        	'price' =>  2200000
        	]);
        $product->save();$product = new Product([
        	'imagePath' => 'https://media.zigcdn.com/media/model/2016/Sep/honda-cbr-300-right_600x300.jpg',
        	'title' => 'Honda CBR 300',
        	'description' => ' India Yamaha Motor Private Limited is an Indian subsidiary of Yamaha Motor Company, Japan. Yamaha started its journey in India with the launch of RD350 in 1985. Yamaha and Escorts Group entered into joint venture in 1996; subsequently Yamaha acquired remaining stakes from Escorts Group in 2001 and became 100% subsidiary of Yamaha Motor Company, Japan. Today, the company is in agreement with Mitsui & Co. Ltd. who became joint-investor in the company in 2008 and the company was renamed to India',
        	'price' =>  200000
        	]);
        $product->save();$product = new Product([
        	'imagePath' => 'https://media.zigcdn.com/media/model/2016/Feb/yamaha_yzfr15_600x300.jpg',
        	'title' => 'Yamaha YZF R15',
        	'description' => 'Overview Many an eyebrows were raised when Yamaha launched the R15 in the Indian two-wheeler market. The full fairing styling was readily accepted but the fact that it was powered by a 150cc engine wasn’t warmly welcomed. But with the Yamaha R15, the Japanese two-wheeler giant made t he Indian consumers understand the value of power-to-weight ratio. The first version of the R15 was a handsome looking motorcycle but the puny tail section and skinny rear tyre didn’t gel well with the overall design. Yamaha designers rectified this in the R15 Version 2.0 with fatter rubber and stepped seats. The Yamaha R6 inspired styling has been a hit among the youngsters and the aggressive lines of the R15 does make it the most handsome looking bike among its rivals and has been among the key factors for its success.',
        	'price' =>  118000
        	]);
        $product->save();$product = new Product([
        	'imagePath' => 'http://imgd1.aeplcdn.com//476x268//bw/models/ktm-duke-200-standard-127.jpg?20151209201610',
        	'title' => 'KTM Duke 200',
        	'description' => 'The KTM Duke 200 is the first KTM to be sold in India by Bajaj and is one of the most affordable performance motorcycles you can buy today. The bike’s overall design and styling is new to India as no other bike had the same design philosophy. It is manufactured at Bajaj’s Chakan plant and is exported to many international markets.',
        	'price' =>  148120
        	]);
        $product->save();$product = new Product([
        	'imagePath' => 'http://imgd1.aeplcdn.com//476x268//bw/models/harley-davidson-v-rod-standard-70.jpg?20151209181047',
        	'title' => 'Harley Davidson V Rod',
        	'description' => 'Designed to make an imposing presence but with modern looks and respectable performance, this bike is stands out in the classis Harley line up. It gets a fastback style tail section, a fat rear tyre , low-rise handle bar, double-barrel exhaust and a blacked out look overall.Power comes courtesy the 1250cc V-Twin engine which puts out around 120bhp and 111Nm of torque, giving the rider plenty of grunt on the road. Weighing nearly 300 kilograms, the V-Rod is quite hefty for its size although Harley-Davidson promises stable and reassuring handling thanks to the log wheelbase and fat rubber tyres both at front and the rear.The V-Rod competes against the recently introduced Triumph Thunderbird Storm and the Rocket 3 Roadster.',
        	'price' =>  2202189,
        	]);
        $product->save();

    }
}
