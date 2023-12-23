<?php

namespace App\Http\Controllers\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index()
    {
        $User = array(
            'cover_image' => 'public/customer/img/profile-cover.png',
            'profile_image' => 'public/customer/img/profile-thumb.png',
            'name' => "Mr John Wick",
            'bio' => 'Autoglyphs are fitting the first “on-chain” to the find generative art on the Ethereum blockchain',
            'followers' => 100,
            'following' => 56,
            'favorite' => 940
        );
        $OnSale = array(
            ['public/customer/img/market-author-1.png','Rrayak John','Yuaisn Kha','public/customer/img/market-author-2.png',1,'public/customer/img/marketplace-1.png','Interconnected Planes','public/customer/img/eth-icon.png',75320],
            ['public/customer/img/market-author-1.png','Rrayak John','Yuaisn Kha','public/customer/img/market-author-2.png',0,'public/customer/img/marketplace-2.png','Interconnected Planes','public/customer/img/eth-icon.png',75320],
            ['public/customer/img/market-author-1.png','Rrayak John','Yuaisn Kha','public/customer/img/market-author-2.png',1,'public/customer/img/marketplace-3.png','Interconnected Planes','public/customer/img/eth-icon.png',75320],
            ['public/customer/img/market-author-1.png','Rrayak John','Yuaisn Kha','public/customer/img/market-author-2.png',1,'public/customer/img/marketplace-4.png','Interconnected Planes','public/customer/img/eth-icon.png',75320],
            ['public/customer/img/market-author-1.png','Rrayak John','Yuaisn Kha','public/customer/img/market-author-2.png',1,'public/customer/img/marketplace-5.png','Interconnected Planes','public/customer/img/eth-icon.png',75320],
            ['public/customer/img/market-author-1.png','Rrayak John','Yuaisn Kha','public/customer/img/market-author-2.png',0,'public/customer/img/marketplace-6.png','Interconnected Planes','public/customer/img/eth-icon.png',75320],
            ['public/customer/img/market-author-1.png','Rrayak John','Yuaisn Kha','public/customer/img/market-author-2.png',1,'public/customer/img/marketplace-7.png','Interconnected Planes','public/customer/img/eth-icon.png',75320],
            ['public/customer/img/market-author-1.png','Rrayak John','Yuaisn Kha','public/customer/img/market-author-2.png',1,'public/customer/img/marketplace-8.png','Interconnected Planes','public/customer/img/eth-icon.png',75320],
            ['public/customer/img/market-author-1.png','Rrayak John','Yuaisn Kha','public/customer/img/market-author-2.png',1,'public/customer/img/marketplace-9.png','Interconnected Planes','public/customer/img/eth-icon.png',75320],
            ['public/customer/img/market-author-1.png','Rrayak John','Yuaisn Kha','public/customer/img/market-author-2.png',0,'public/customer/img/marketplace-5.png','Interconnected Planes','public/customer/img/eth-icon.png',75320],
            ['public/customer/img/market-author-1.png','Rrayak John','Yuaisn Kha','public/customer/img/market-author-2.png',1,'public/customer/img/marketplace-3.png','Interconnected Planes','public/customer/img/eth-icon.png',75320]
        );
        $Owned = array(
            ['public/customer/img/trending-img-1.png','public/customer/img/author-pic.png','Bilout jesmin','Lock and Lob x Fiesta ',2320382,'@broklinslam_75',75320,773.69,'2023/12/26'],
            ['public/customer/img/trending-img-2.png','public/customer/img/author-pic.png','Brokln Simons','Interconnected Planes',2320382,'@broklinslam_75',75320,773.69,'2023/12/26'],
            ['public/customer/img/trending-img-3.png','public/customer/img/author-pic.png','Bilout jesmin','Lock and Lob x Fiesta ',2320382,'@broklinslam_75',75320,773.69,'2023/12/26'],
            ['public/customer/img/trending-img-4.png','public/customer/img/author-pic.png','Brokln Simons','Interconnected Planes',2320382,'@broklinslam_75',75320,773.69,'2023/12/26'],
            ['public/customer/img/trending-img-1.png','public/customer/img/author-pic.png','Bilout jesmin','Lock and Lob x Fiesta ',2320382,'@broklinslam_75',75320,773.69,'2023/12/26'],
            ['public/customer/img/trending-img-2.png','public/customer/img/author-pic.png','Brokln Simons','Interconnected Planes',2320382,'@broklinslam_75',75320,773.69,'2023/12/26'],
            ['public/customer/img/trending-img-3.png','public/customer/img/author-pic.png','Bilout jesmin','Lock and Lob x Fiesta ',2320382,'@broklinslam_75',75320,773.69,'2023/12/26'],
            ['public/customer/img/trending-img-4.png','public/customer/img/author-pic.png','Brokln Simons','Interconnected Planes',2320382,'@broklinslam_75',75320,773.69,'2023/12/26'],
            ['public/customer/img/trending-img-1.png','public/customer/img/author-pic.png','Bilout jesmin','Lock and Lob x Fiesta ',2320382,'@broklinslam_75',75320,773.69,'2023/12/26'],
            ['public/customer/img/trending-img-2.png','public/customer/img/author-pic.png','Brokln Simons','Interconnected Planes',2320382,'@broklinslam_75',75320,773.69,'2023/12/26'],
        );
        $collection = array(
            ['public/customer/img/col-1.png','public/customer/img/col-2.png','public/customer/img/col-3.png','public/customer/img/market-author-1.png','Photography',32],
            ['public/customer/img/col-4.png','public/customer/img/col-5.png','public/customer/img/col-6.png','public/customer/img/market-author-2.png','Photography',32],
            ['public/customer/img/col-7.png','public/customer/img/col-8.png','public/customer/img/col-3.png','public/customer/img/market-author-1.png','Photography',32],
            ['public/customer/img/col-1.png','public/customer/img/col-2.png','public/customer/img/col-3.png','public/customer/img/market-author-2.png','Photography',32],
            ['public/customer/img/col-4.png','public/customer/img/col-5.png','public/customer/img/col-6.png','public/customer/img/market-author-1.png','Photography',32],
            ['public/customer/img/col-7.png','public/customer/img/col-8.png','public/customer/img/col-9.png','public/customer/img/market-author-2.png','Photography',32],
            ['public/customer/img/col-1.png','public/customer/img/col-2.png','public/customer/img/col-3.png','public/customer/img/market-author-2.png','Photography',32],
            ['public/customer/img/col-4.png','public/customer/img/col-5.png','public/customer/img/col-6.png','public/customer/img/market-author-2.png','Photography',32],
            ['public/customer/img/col-7.png','public/customer/img/col-8.png','public/customer/img/col-9.png','public/customer/img/market-author-1.png','Photography',32],
            ['public/customer/img/col-1.png','public/customer/img/col-2.png','public/customer/img/col-3.png','public/customer/img/market-author-2.png','Photography',32],
        );

        $Created = array(
            ['public/customer/img/market-author-1.png','Rrayak John','Yuaisn Kha','public/customer/img/market-author-2.png',1,'public/customer/img/marketplace-8.png','Interconnected Planes','public/customer/img/eth-icon.png',75320],
            ['public/customer/img/market-author-2.png','Rrayak John','Yuaisn Kha','public/customer/img/market-author-2.png',0,'public/customer/img/marketplace-7.png','Interconnected Planes','public/customer/img/eth-icon.png',75320],
            ['public/customer/img/market-author-1.png','Rrayak John','Yuaisn Kha','public/customer/img/market-author-2.png',1,'public/customer/img/marketplace-9.png','Interconnected Planes','public/customer/img/eth-icon.png',75320],
            ['public/customer/img/market-author-2.png','Rrayak John','Yuaisn Kha','public/customer/img/market-author-2.png',1,'public/customer/img/marketplace-4.png','Interconnected Planes','public/customer/img/eth-icon.png',75320],
            ['public/customer/img/market-author-1.png','Rrayak John','Yuaisn Kha','public/customer/img/market-author-2.png',1,'public/customer/img/marketplace-1.png','Interconnected Planes','public/customer/img/eth-icon.png',75320],
            ['public/customer/img/market-author-2.png','Rrayak John','Yuaisn Kha','public/customer/img/market-author-2.png',0,'public/customer/img/marketplace-6.png','Interconnected Planes','public/customer/img/eth-icon.png',75320],
            ['public/customer/img/market-author-1.png','Rrayak John','Yuaisn Kha','public/customer/img/market-author-2.png',1,'public/customer/img/marketplace-4.png','Interconnected Planes','public/customer/img/eth-icon.png',75320],
            ['public/customer/img/market-author-1.png','Rrayak John','Yuaisn Kha','public/customer/img/market-author-2.png',1,'public/customer/img/marketplace-8.png','Interconnected Planes','public/customer/img/eth-icon.png',75320],
            ['public/customer/img/market-author-1.png','Rrayak John','Yuaisn Kha','public/customer/img/market-author-2.png',1,'public/customer/img/marketplace-1.png','Interconnected Planes','public/customer/img/eth-icon.png',75320],
            ['public/customer/img/market-author-1.png','Rrayak John','Yuaisn Kha','public/customer/img/market-author-2.png',0,'public/customer/img/marketplace-2.png','Interconnected Planes','public/customer/img/eth-icon.png',75320],
            ['public/customer/img/market-author-1.png','Rrayak John','Yuaisn Kha','public/customer/img/market-author-2.png',1,'public/customer/img/marketplace-3.png','Interconnected Planes','public/customer/img/eth-icon.png',75320],
        );
        $CreateforBits = array(
            ['public/customer/img/market-author-1.png','Rrayak John','Yuaisn Kha','public/customer/img/market-author-2.png',1,'public/customer/img/marketplace-1.png','Interconnected Planes','public/customer/img/eth-icon.png',75320,4543.33,'2023/12/26'],
            ['public/customer/img/market-author-1.png','Rrayak John','Yuaisn Kha','public/customer/img/market-author-2.png',0,'public/customer/img/marketplace-2.png','Interconnected Planes','public/customer/img/eth-icon.png',75320,4543.33,'2023/12/26'],
            ['public/customer/img/market-author-1.png','Rrayak John','Yuaisn Kha','public/customer/img/market-author-2.png',1,'public/customer/img/marketplace-3.png','Interconnected Planes','public/customer/img/eth-icon.png',75320,4543.33,'2023/12/26'],
            ['public/customer/img/market-author-1.png','Rrayak John','Yuaisn Kha','public/customer/img/market-author-2.png',1,'public/customer/img/marketplace-4.png','Interconnected Planes','public/customer/img/eth-icon.png',75320,4543.33,'2023/12/26'],
            ['public/customer/img/market-author-1.png','Rrayak John','Yuaisn Kha','public/customer/img/market-author-2.png',1,'public/customer/img/marketplace-5.png','Interconnected Planes','public/customer/img/eth-icon.png',75320,4543.33,'2023/12/26'],
            ['public/customer/img/market-author-1.png','Rrayak John','Yuaisn Kha','public/customer/img/market-author-2.png',0,'public/customer/img/marketplace-6.png','Interconnected Planes','public/customer/img/eth-icon.png',75320,4543.33,'2023/12/26'],
        );
        $CreateforSell = array(
            ['public/customer/img/trending-img-1.png','public/customer/img/author-pic.png','Bilout jesmin','Lock and Lob x Fiesta ',2320382,'@broklinslam_75',75320,773.69],
            ['public/customer/img/trending-img-2.png','public/customer/img/author-pic.png','Brokln Simons','Interconnected Planes',2320382,'@broklinslam_75',75320,773.69],
            ['public/customer/img/trending-img-3.png','public/customer/img/author-pic.png','Bilout jesmin','Lock and Lob x Fiesta ',2320382,'@broklinslam_75',75320,773.69],
            ['public/customer/img/trending-img-4.png','public/customer/img/author-pic.png','Brokln Simons','Interconnected Planes',2320382,'@broklinslam_75',75320,773.69],
            ['public/customer/img/trending-img-1.png','public/customer/img/author-pic.png','Bilout jesmin','Lock and Lob x Fiesta ',2320382,'@broklinslam_75',75320,773.69],
            ['public/customer/img/trending-img-2.png','public/customer/img/author-pic.png','Brokln Simons','Interconnected Planes',2320382,'@broklinslam_75',75320,773.69],
            ['public/customer/img/trending-img-3.png','public/customer/img/author-pic.png','Bilout jesmin','Lock and Lob x Fiesta ',2320382,'@broklinslam_75',75320,773.69]
        );
        $CreateforBitsHidden = array(

            ['public/customer/img/market-author-1.png','Rrayak John','Yuaisn Kha','public/customer/img/market-author-2.png',1,'public/customer/img/marketplace-1.png','Interconnected Planes','public/customer/img/eth-icon.png',75320,4543.33,'2023/12/26'],
            ['public/customer/img/market-author-1.png','Rrayak John','Yuaisn Kha','public/customer/img/market-author-2.png',0,'public/customer/img/marketplace-2.png','Interconnected Planes','public/customer/img/eth-icon.png',75320,4543.33,'2023/12/26'],
            ['public/customer/img/market-author-1.png','Rrayak John','Yuaisn Kha','public/customer/img/market-author-2.png',1,'public/customer/img/marketplace-3.png','Interconnected Planes','public/customer/img/eth-icon.png',75320,4543.33,'2023/12/26'],
            ['public/customer/img/market-author-1.png','Rrayak John','Yuaisn Kha','public/customer/img/market-author-2.png',1,'public/customer/img/marketplace-4.png','Interconnected Planes','public/customer/img/eth-icon.png',75320,4543.33,'2023/12/26']
        );
        $CreateforSellHidden = array(

            ['public/customer/img/trending-img-1.png','public/customer/img/author-pic.png','Bilout jesmin','Lock and Lob x Fiesta ',2320382,'@broklinslam_75',75320,773.69],
            ['public/customer/img/trending-img-2.png','public/customer/img/author-pic.png','Brokln Simons','Interconnected Planes',2320382,'@broklinslam_75',75320,773.69],
            ['public/customer/img/trending-img-3.png','public/customer/img/author-pic.png','Bilout jesmin','Lock and Lob x Fiesta ',2320382,'@broklinslam_75',75320,773.69],
            ['public/customer/img/trending-img-4.png','public/customer/img/author-pic.png','Brokln Simons','Interconnected Planes',2320382,'@broklinslam_75',75320,773.69]

            

           
        );

        $Activity = array(
            ['public/customer/img/nft-table-img1.png','Mullican Computer Joy','Xoeyam','public/customer/img/usd-icon.png',6392.99,343,'Marvin McKinney','1 days ago'],
            ['public/customer/img/nft-table-img2.png','Mullican Computer Joy','Xoeyam','public/customer/img/usd-icon.png',6392.99,343,'Marvin McKinney','1 days ago'],
            ['public/customer/img/nft-table-img3.png','Mullican Computer Joy','Xoeyam','public/customer/img/usd-icon.png',6392.99,343,'Marvin McKinney','1 days ago'],
            ['public/customer/img/nft-table-img4.png','Mullican Computer Joy','Xoeyam','public/customer/img/usd-icon.png',6392.99,343,'Marvin McKinney','1 days ago'],
            ['public/customer/img/nft-table-img1.png','Mullican Computer Joy','Xoeyam','public/customer/img/usd-icon.png',6392.99,343,'Marvin McKinney','1 days ago'],
            ['public/customer/img/nft-table-img2.png','Mullican Computer Joy','Xoeyam','public/customer/img/usd-icon.png',6392.99,343,'Marvin McKinney','1 days ago'],
            ['public/customer/img/nft-table-img3.png','Mullican Computer Joy','Xoeyam','public/customer/img/usd-icon.png',6392.99,343,'Marvin McKinney','1 days ago'],
            ['public/customer/img/nft-table-img4.png','Mullican Computer Joy','Xoeyam','public/customer/img/usd-icon.png',6392.99,343,'Marvin McKinney','1 days ago'],
            ['public/customer/img/nft-table-img1.png','Mullican Computer Joy','Xoeyam','public/customer/img/usd-icon.png',6392.99,343,'Marvin McKinney','1 days ago'],
            ['public/customer/img/nft-table-img2.png','Mullican Computer Joy','Xoeyam','public/customer/img/usd-icon.png',6392.99,343,'Marvin McKinney','1 days ago'],

        );

        return view('customer.Profile',['User'=>$User,'Activity'=>$Activity,'collection'=>$collection,'OnSale'=>$OnSale,'Created'=>$Created,'CreateforBits'=>$CreateforBits,'CreateforSell'=>$CreateforSell,'Owned'=>$Owned,'CreateforBitsHidden'=>$CreateforBitsHidden,'CreateforSellHidden'=>$CreateforSellHidden]);
    }
}
