<?php

namespace App\Http\Controllers\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
  
    public function index()
    {
        $AllNFTSUpdate = array(
            ['public/customer/img/nft-table-img1.png','Mullican Computer Joy',' Xoeyam','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',1],
            ['public/customer/img/nft-table-img1.png','View Card by Jeff Davis',' John Cartl','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',0],
            ['public/customer/img/nft-table-img1.png','Mullican Computer Joy',' Twillor swift','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',1],
            ['public/customer/img/nft-table-img1.png','View Card by Jeff Davis',' Mr Bradman','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',0],
            ['public/customer/img/nft-table-img1.png','Mullican Computer Joy',' John wick','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',1]
        );

        $AllNFTSUpdateV2 = array(
            ['public/customer/img/nft-table-img1.png','Mullican Computer Joy',' Xoeyam','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',1],
            ['public/customer/img/nft-table-img1.png','View Card by Jeff Davis',' John Cartl','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',0],
            ['public/customer/img/nft-table-img1.png','Mullican Computer Joy',' Twillor swift','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',1],
            ['public/customer/img/nft-table-img1.png','View Card by Jeff Davis',' Mr Bradman','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',0],
        );

        $AllNFTSUpdateV3 = array(
            ['public/customer/img/nft-table-img1.png','Mullican Computer Joy',' Xoeyam','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',1],
            ['public/customer/img/nft-table-img1.png','View Card by Jeff Davis',' John Cartl','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',0],
            ['public/customer/img/nft-table-img1.png','Mullican Computer Joy',' Twillor swift','7473 ETH',6392.99,'-24.75 (11.5%)',343,'2 Hours 1 min 30s',1],
        );

        $TopSeller = array(
            ['public/customer/img/verfify-sign.png','public/customer/img/seller-1.png','Brokln Simons','@broklinslam_75','public/customer/img/diamond-icon.png',8435],
            ['public/customer/img/verfify-sign.png','public/customer/img/seller-2.png','Brokln Simons','@broklinslam_75','public/customer/img/diamond-icon.png',7435],
            ['public/customer/img/verfify-sign.png','public/customer/img/seller-3.png','Brokln Simons','@broklinslam_75','public/customer/img/diamond-icon.png',5435],
            ['public/customer/img/verfify-sign.png','public/customer/img/seller-4.png','Brokln Simons','@broklinslam_75','public/customer/img/diamond-icon.png',3435],
            ['public/customer/img/verfify-sign.png','public/customer/img/seller-2.png','Brokln Simons','@broklinslam_75','public/customer/img/diamond-icon.png',5735],
            ['public/customer/img/verfify-sign.png','public/customer/img/seller-4.png','Brokln Simons','@broklinslam_75','public/customer/img/diamond-icon.png',3935],
            ['public/customer/img/verfify-sign.png','public/customer/img/seller-2.png','Brokln Simons','@broklinslam_75','public/customer/img/diamond-icon.png',3335],
            ['public/customer/img/verfify-sign.png','public/customer/img/seller-3.png','Brokln Simons','@broklinslam_75','public/customer/img/diamond-icon.png',3435],
            ['public/customer/img/verfify-sign.png','public/customer/img/seller-1.png','Brokln Simons','@broklinslam_75','public/customer/img/diamond-icon.png',7435],
            ['public/customer/img/verfify-sign.png','public/customer/img/seller-2.png','Brokln Simons','@broklinslam_75','public/customer/img/diamond-icon.png',3435]
            
        );

        $TopBuyer = array(
            ['public/customer/img/verfify-sign.png','public/customer/img/seller-4.png','Brokln Simons','@broklinslam_75','public/customer/img/diamond-icon.png',78],
            ['public/customer/img/verfify-sign.png','public/customer/img/seller-1.png','Brokln Simons','@broklinslam_75','public/customer/img/diamond-icon.png',80],
            ['public/customer/img/verfify-sign.png','public/customer/img/seller-3.png','Brokln Simons','@broklinslam_75','public/customer/img/diamond-icon.png',81],
            ['public/customer/img/verfify-sign.png','public/customer/img/seller-4.png','Brokln Simons','@broklinslam_75','public/customer/img/diamond-icon.png',74],
            ['public/customer/img/verfify-sign.png','public/customer/img/seller-2.png','Brokln Simons','@broklinslam_75','public/customer/img/diamond-icon.png',71],
            ['public/customer/img/verfify-sign.png','public/customer/img/seller-1.png','Brokln Simons','@broklinslam_75','public/customer/img/diamond-icon.png',65],
            ['public/customer/img/verfify-sign.png','public/customer/img/seller-2.png','Brokln Simons','@broklinslam_75','public/customer/img/diamond-icon.png',49],
            ['public/customer/img/verfify-sign.png','public/customer/img/seller-2.png','Brokln Simons','@broklinslam_75','public/customer/img/diamond-icon.png',39],
            ['public/customer/img/verfify-sign.png','public/customer/img/seller-1.png','Brokln Simons','@broklinslam_75','public/customer/img/diamond-icon.png',35],
            ['public/customer/img/verfify-sign.png','public/customer/img/seller-2.png','Brokln Simons','@broklinslam_75','public/customer/img/diamond-icon.png',35]
            
        );

        $SellHistory = array(
            ['Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
            [90, 55, 80, 25, 65, 40, 95],
            [85, 80, 50, 75, 45, 55, 80]
        );
        $MarketVisitor = array(
            ['Jan 1', 'Jan 2', 'Jan 3', 'Jan 4', 'Jan 5', 'Jan 6', 'Jan 7','Jan 8','Jan 9','Jan 10','Jan 11','Jan 12','Jan 13','Jan 14','Jan 15'],
            [50, 20, 45, 15, 55, 20,60, 20,70,45,64,20,72,22,66]
        );
        $MarketVisitorWeekly = array(
            ['Jan 1', 'Jan 2', 'Jan 3', 'Jan 4', 'Jan 5', 'Jan 6', 'Jan 7'],
            [50, 20, 45, 15, 55, 20,60]
        );
        $MarketVisitorMonthly = array(
            ['Jan 1', 'Jan 2', 'Jan 3', 'Jan 4', 'Jan 5', 'Jan 6', 'Jan 7','Jan 8','Jan 9','Jan 10','Jan 11','Jan 12','Jan 13','Jan 14','Jan 15','Jan 16', 'Jan 17', 'Jan 18', 'Jan 19', 'Jan 20', 'Jan 21', 'Jan 22','Jan 23','Jan 24','Jan 25','Jan 26','Jan 27','Jan 28','Jan 29','Jan 30'],
            [10, 20, 35, 15, 55, 20,60, 20,70,45,64,20,72,22,66,50, 20, 45, 15, 55, 20,60, 20,70,45,64,20,72,22,66]
        );

        $sliderBanner = array(
            'public/customer/img/dashboard-slider-1.png','public/customer/img/slide_2.jpg','public/customer/img/slide_3.jpg','public/customer/img/slide_2.jpg'
        );

        $TrendingAction = array(
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
        $CurrentBid = array(
            'name' => 'Lock and Lob x Fiesta Spurs',
            'image' => 'public/customer/img/profile-pic-2.png',
            'id' => 2320382,
            'user' => 'Brokln Simons',
            'user_name' => 'broklinslam@75',
            'bids' => 75320,
            'usd' => 773.69,
            'count_down_from' => '2023/12/26'
        );


     

        return view('customer.Dashboard',['AllNFTSUpdate'=>$AllNFTSUpdate,'AllNFTSUpdateV2'=>$AllNFTSUpdateV2,'AllNFTSUpdateV3'=>$AllNFTSUpdateV3,'TopSeller'=>$TopSeller,'TopBuyer'=>$TopBuyer,'SellHistory'=>$SellHistory,'MarketVisitor'=>$MarketVisitor,'sliderBanner'=>$sliderBanner,'TrendingAction'=>$TrendingAction,'CurrentBid'=>$CurrentBid,'MarketVisitorMonthly'=>$MarketVisitorMonthly,'MarketVisitorWeekly'=>$MarketVisitorWeekly]);
    }
}
