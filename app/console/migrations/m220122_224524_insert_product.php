<?php

use yii\db\Migration;

class m220122_224524_insert_product extends Migration
{
    private const COUNT = 100;
    private const FAKE_NAMES = [
        'NA EU ASIA🌟Genshin Impact Starter Account Itto Hu Tao Baal Zhongli Xiao Shenhe',
        'America/NA Genshin Impact Shenhe Eula Kazuha Baal Ayaka Itto Hu Tao Ganyu Venti',
        'MEGABOL Inh-AR AROMATASE INHIBITOR ESTROGEN BLOCKER PCT INHAR FREE p&p',
        'NOS NEW GENIUNE JOHN DEERE AR28402 Switch fit John Deere  500, 600',
        'Acoustic Research, Inc. AR-3 American Record Guide Review, Reprint, Oct. 1959',
        'AR-4x Bookshelf Speakers PAIR Oiled Walnut cabinets 9+ condition',
        'Peridot Ethnic Handmade Three Stone Ring Jewelry US Size-6 AR 76042',
        'Amethsyt Ethnic Handmade Ring Jewelry US Size-8 AR 76059',
        'Pair of AR Acoustic Research Crossovers, P/N 810136 for two way system',
        'New ListingEmporio armani men\'s tazio chronograph watch two tone ar6088',
        'Pair of AR Acoustic Research Tweeters, P/N 1210096-0A as pictured.',
        'Nwt emporio armani men\'s ar1410 ceramica chronograph watch',
        'PAIR OF ACOUSTIC RESEARCH AR POWERED PARTNER 570 SPEAKERS MONITORS 70 WATTS',
        'Vtg Ham Radio CB Amateur QSL QSO Card Postcard CUBA CO7AR CAMAGUEY 1948',
        'Vtg Ham Radio CB Amateur QSL QSO Card Postcard CUBA CO7AR CAMAGUEY 09/1948',
        'New ListingNOS NEW TRACTOR PARTS John Deere Gauge AR90149  fit 8440',
        'Nwt emporio armani men\'s ar1400 ceramica chronograph watch',
        'AR- XB ACOUSTIC RESEARCH TURNTABLE ',
        'Emporio armani ar5857 stainlees steel chronograph men\'s',
        'Westerly,RI Dixon Square Washington County Rhode Island A.R. Meikle Co. Postcard',
        'Emporio armani men\'s tazio chronograph watch two tone ar6088',
        'New ListingAR500 Armor level 3+',
        'Digimon Card Game 2020 bt5 Battle of Omni bt05 Single Cards Singles English TCG',
        'New ListingEmporio armani ar1452 dial 43mm black ceramic matte men\'s watch',
        '#Z (1) American Racing AR Aluminum Wheel Center Cap Part # 10624',
        'New ListingNwt emporio armani men\'s ar1410 ceramica chronograph watch',
        'New ListingVintage Enicar Star Jewels Ocean Pearl Men\'s Manual wind watch AR-161 1970s',
        'New ListingBrand new emporio armani ar1721 gray classic men\'s watch',
        'Vtg Ham Radio CB Amateur QSL QSO Card Postcard JY5AR HASHEMITE AMMAN JORDAN 1979',
        'Vtg Ham Radio CB Amateur QSL QSO Card Postcard BELGIUM ON7AR BRUSSELS 1979',
        'NA EU ASIA 🌟 Genshin Impact Account Itto Klee Hu Tao Kazuha Shenhe Xiao Zhongli',
        'Genshin Impact [NA] Starter Account Eula KoKomi Xiao Venti Baal HuTao Yoimiya',
        'Acoustic Research, Inc. AR-6 Loudspeaker 2-page Flyer, Original AR Literature',
        'AK Portrait S. A. R. il Duca degli Abruzzi',
        'New ListingNwt emporio armani men\'s ar1400 ceramica chronograph watch',
        'Worlds End Vivienne Westwood \'AR\' Active Resistance to Propaganda T-shirt Size S',
        'Solar Agate Ethnic Handmade Ring Jewelry US Size-7 AR 75916',
        'Near Mint + Konica Autorex Full & Half Frame Camera Hexanon AR 40mm F/1.8 Lens',
        'NA EU ASIA 🌟 Genshin Impact Starter Account Xiao Venti Shenhe Itto Baal Zhongli',
        'NA EU ASIA 🌟Genshin Impact Starter Account Xiao Klee Shenhe Itto Zhongli Hu Tao',
        'Apatite Rough Ethnic Handmade Antique Design Ring Jewelry US Size-8.5 AR 76125',
        '2021 Bowman Chrome Inserts with Rookies and Stars You Pick the Cards',
        'Solar Agate Ethnic Handmade Antique Design Ring Jewelry US Size-8.25 AR 76132',
        'AR500 Target Hanger 2 X 2 Or T POST Topper Hook',
        'High Street Goudhurst Kent Vintage A R Quinton Postcard B18',
        'New ListingNEW Emporio Armani Mens Watch AR1787',
        'Vintage Stoneware Studio Pottery Cup Dish Earthtone Speckled Glaze Signed AR',
        'Natual Citrine Rough Handmade Antique Design Ring Jewelry US Size-9 AR 76152',
        'VW PASSAT 3C B6 SEAT SEAT COVER FABRIC ClassicGrey Rear Left 3C9885805AR',
        'Titanium Druzy Ethnic Handmade Ring Jewelry US Size-7.5 AR 75896',
        '1/2" Thick AR500 Shooting Target 6" Gong',
        'New ListingD.A.R.E. Tee Shirt Short Sleeve Black 100% Cotton L',
        'Solar Quartz Druzy Ethnic Handmade Ring Jewelry US Size-7.75 AR 75593',
        'RPPC Corning,AR Charles and Eliza Hocking Tombstone,Cemetery Clay County Death',
        'Black Agate Druzy Handmade Antique Design Ring Jewelry US Size-8.25 AR 76144',
        'New ListingNEW Emporio Armani Mens Watch Blue AR80010',
        'T2-100GPD 6 Stage Alkaline RO Reverse Osmosis Drinking Water Filter System',
        'Skylanders IMAGINATORS COMPLETE YOUR COLLECTION Buy 4 get 1 Free! $6 Minimum 🎼',
        '1pc Water Filter Ball Valve Reverse Osmosis RO System Fittings 1/4" 3/8" OD Hose',
        '150 GPD GPD RO Membrane Water Filter Reverse Osmosis Membrane Element 12" x 2"',
        'Check Valve 1/4" One Way Push Fit Straight Quick Connect Check Valves for RO',
        '50-400 GPD Home Reverse Osmosis RO Membrane Replacement Water System Filter U L',
        '10pcs 1/4" 3way Union Tee Quick Connect Push Fit RO Water Reverse Osmosis Filter',
        '1pc Reverse Osmosis RO System Water Filter Ball Valve Fittings 1/4" 3/8" OD Hose',
        '5 Stages Reverse Osmosis RO Water Filter System Replacement 4 Cartridges Pack ',
        'Premium SUS304 Stainless Steel Tap RO Drinking Water Filter Ceramic Disc Faucet',
        'Shield 5 Stages Quick Change RO Water Filter System Replacement Cartridges ',
        'Reverse Osmosis Water Filters | Replace PRO 3-4-5 Stage + RO DI Aquarium Filter',
        'Aquarium Tank Reverse Osmosis Water Filters RO DI Resin Filter 100GPD  380LPD',
        '4 Stages WASHABLE Aquarium Tank Reverse Osmosis Water Filters RO DI Resin 100GPD',
        'TFC 2012-100 GPD RO membrane  water filter purifier treatment reverse osmosis.JF',
        '3-Stage SimPure Y7 UV Countertop Water Filter Dispenser Reverse Osmosis System',
        'Puratek 100 GPD RO/DI (Reverse Osmosis / Deionization) Filter System - AquaMaxx ',
        'Ro 4 Stage.Replacement Set Reverse Osmosis 5 Stage.(4 filters)Stage1,2,3,5',
        'Reverse Osmosis Water Filters | NO RO MEMBRANE Filter | Replace RON 5-6-7 Stage',
        'Water Filter Factory Portable Drinking Reverse Osmosis Filters RO HRO-3-G GARDEN',
        'Remineralisation Water Filter Cartridge for Reverse Osmosis (RO) / Water Filters',
        'CARTRIDGE SET FOR THE SYSTEM WATERLOVERS RO6',
        'Aquverse Clover RO SYSTEM Filters SED,CM,RO50,CB',
        'Water Filter, Water Bubbler, RO, Drinking Water Faucet Tap',
        '2 pcs 1/4" Male Elbow Fitting Quick Connector Connection Water Filters/RO System',
        '300CC Flow Restrictor 1/4" Connect For RO Reverse Osmosis Systems Water Purifier',
        '1/4" 1/2"  3/8" Push Fit Pipe Tube straight connectors / Reducers  RO Aquarium',
        '3-Gallon Pressurized Water Storage Tank RO Systems 1/4" Ball Valve',
        'Durable White RO Wrench Spanner Handle for 10" Water Filter Cartridge Housing.ar',
        '6pcs 1/4 Tube OD to 1/2  Male Push in to Connect Quick for RO Reverse Osmosis R1',
        'Plastic Reverse Osmosis RO System Fitting Connection Water Filters Ball Valve',
        '6pcs 1/4 Tube OD to 1/2  Male Push in to Connect Quick for RO Reverse Osmosis~kh',
        '2 pcs 1/4" Male Elbow Fitting Quick Connector Connection Water Filters/RO System',
        '2x 1/4" Push-Fit Straight Pipe Through Connector RO Fridge Drinking water filter',
        'Durable Electric Water Solenoid Valve Reverse Osmosis System RO Controller',
        '50/75/100GPD Reverse Osmosis Membrane Replacement RO Water Filter System Tools',
        'Inline RO Post Fridge Ice Coconut GAC Water Filter 6", 1000 Gal, 1/4" QC Ports',
        '5Pcs 1/4" Ball Valve Inline Tap Quick Connect Push Fit RO Water Reverse Osmosis',
        '5x 1/4" Male Thread - 1/4" OD Tube RO Water Elbow Quick Connector  GYRAP',
        'Post Inline GAC Carbon Reverse Osmosis Water Filter RO Ice maker T/33',
        '50 GPD RO reverse osmosis membrane NSF 58 standard approved',
        'Reverse Osmosis Water Filters | Replace RON 5-6-7 Stage + 50G RO Membrane Filter',
        'RO Feed Water Adapter 1/2\'\' to 1/4\'\' w/ Shut-off Ball Valve Tap Tee Connector',
        'Durable White RO Wrench Spanner Handle for 10" Water Filter Cartridge Housing GF',
        'FILTER STRAINER - 1/4" PUSH FIT RO',
        '5 Stage RO Home Reverse Osmosis Water Filter System 75 GPD + Permeate Pump 1000',
        '1pc 1/4" Female Thread Reverse Osmosis RO System Fitting Water Filter Ball Valve',
        'Check Valve 3/8" One Way Push Fit Straight Quick Connect Check Valves for RO',
        '200 GPD RO Membrane Water Filter Reverse Osmosis System Replacement Housing Kit',
        '300 GPD RO Membrane Reverse Osmosis System Quick-Connect Water Filter Cartridge',
        '75 GPD RO Membrane Whole House Reverse Osmosis System Water Filter Replacements',
        '36 GPD RO Membrane Reverse Osmosis Purification System Water Filter Replacement',
        'Flush Kit For RO Membranes Reverse Osmosis, Drinking Water Filter',
        'New Listing800 GPD Direct Flow RO Reverse Osmosis Water Filter System Plant Water Point 1:1',
        'New ListingBigjake: RO17b, 1 cent Barber Match Company, Match & Medicine',
        'RO182a Wilmington Parlor Co. US Revenue Match & Medicine Private Die CV $175',
        'New Listingnystamps US Revenue Match Medicine Stamp # RO98b     J21y126',
        'New ListingBigjake: RO78b, 1 cent Eichele & Co. - Match & Medicine',
        'New ListingBigjake: RO49d, 1 cent Byam, Carlton, & Co. - Match & Medicine',
        'RO Reverse Osmosis 24 Sediment CTO GAC Inline Coconut Shell Carbon Water Filter',
        '400 GPD RO Membrane Reverse Osmosis System Replacement Water Filter Housing Kits',
    ];

    public function safeUp()
    {
        $currencyIds = $this->getDb()
            ->createCommand('SELECT currency_id FROM currency')
            ->queryColumn();

        for ($i = 0; $i < self::COUNT; $i++) {
            $price1 = rand(99, 1000000) / 10000;
            $price2 = $price1 * (1 + (rand(1,40)/100));
            $currency_id = $currencyIds[array_rand($currencyIds)];
            $name = self::FAKE_NAMES[array_rand(self::FAKE_NAMES)];

            $this->insert('product', [
                'name' => $name,
                'price1' => $price1,
                'price2' => $price2,
                'currency_id' => $currency_id,
            ]);
        }

        return true;
    }

    public function safeDown()
    {
        $this->delete('product');

        return true;
    }
}
