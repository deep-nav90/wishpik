<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Gate::define('view_payment', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;
            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'view_payment') {
                    return true;
                }
            }
        });


        Gate::define('view_order', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;
            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'view_order') {
                    return true;
                }
            }
        });

        Gate::define('accept_order', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;
            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'accept_order') {
                    return true;
                }
            }
        });

        Gate::define('reject_order', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;
            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'reject_order') {
                    return true;
                }
            }
        });

        Gate::define('complete_order', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;
            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'complete_order') {
                    return true;
                }
            }
        });


        Gate::define('payment_received', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;
            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'payment_received') {
                    return true;
                }
            }
        });



        Gate::define('view_user', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;
            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'view_user') {
                    return true;
                }
            }
        });

        Gate::define('add_admin', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;
            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'add_admin') {
                    return true;
                }
            }
        });

        Gate::define('edit_admin', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;
            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'edit_admin') {
                    return true;
                }
            }
        });

        Gate::define('delete_admin', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;
            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'delete_admin') {
                    return true;
                }
            }
        });


        Gate::define('view_admin', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;
            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'view_admin') {
                    return true;
                }
            }
        });

        Gate::define('view_mobile_page', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;

            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'view_mobile_page') {
                    return true;
                }
            }
        });


        Gate::define('restore_user', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;

            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'restore_user') {
                    return true;
                }
            }
        });

        Gate::define('restore_admin', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;

            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'restore_admin') {
                    return true;
                }
            }
        });

        Gate::define('restore_roles', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;

            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'restore_roles') {
                    return true;
                }
            }
        });
        
        Gate::define('view_role', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;

            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'view_role') {
                    return true;
                }
            }
        });

        Gate::define('add_role', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;

            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'add_role') {
                    return true;
                }
            }
        });

        Gate::define('edit_role', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;

            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'edit_role') {
                    return true;
                }
            }
        });

        Gate::define('delete_role', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;

            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'delete_role') {
                    return true;
                }
            }
        });

        Gate::define('delete_category', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;

            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'delete_category') {
                    return true;
                }
            }
        });

        Gate::define('view_category', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;

            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'view_category') {
                    return true;
                }
            }
        });

        Gate::define('add_category', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;

            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'add_category') {
                    return true;
                }
            }
        });

        Gate::define('edit_category', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;

            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'edit_category') {
                    return true;
                }
            }
        });



        Gate::define('delete_coupon', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;

            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'delete_coupon') {
                    return true;
                }
            }
        });

        Gate::define('view_coupon', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;

            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'view_coupon') {
                    return true;
                }
            }
        });

        Gate::define('add_coupon', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;

            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'add_coupon') {
                    return true;
                }
            }
        });

        Gate::define('edit_coupon', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;

            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'edit_coupon') {
                    return true;
                }
            }
        });


        Gate::define('delete_attribute', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;

            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'delete_attribute') {
                    return true;
                }
            }
        });

        Gate::define('view_attribute', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;

            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'view_attribute') {
                    return true;
                }
            }
        });

        Gate::define('add_attribute', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;

            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'add_attribute') {
                    return true;
                }
            }
        });

        Gate::define('edit_attribute', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;

            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'edit_attribute') {
                    return true;
                }
            }
        });



        Gate::define('delete_sub_category', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;

            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'delete_sub_category') {
                    return true;
                }
            }
        });

        Gate::define('view_sub_category', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;

            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'view_sub_category') {
                    return true;
                }
            }
        });

        Gate::define('add_sub_category', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;

            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'add_sub_category') {
                    return true;
                }
            }
        });

        Gate::define('edit_sub_category', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;

            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'edit_sub_category') {
                    return true;
                }
            }
        });


        Gate::define('delete_product', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;

            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'delete_product') {
                    return true;
                }
            }
        });

        Gate::define('view_product', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;

            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'view_product') {
                    return true;
                }
            }
        });

        Gate::define('add_product', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;

            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'add_product') {
                    return true;
                }
            }
        });

        Gate::define('edit_product', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;

            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'edit_product') {
                    return true;
                }
            }
        });

        Gate::define('edit_user', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;

            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'edit_user') {
                    return true;
                }
            }
        });

        Gate::define('delete_user', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;

            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'delete_user') {
                    return true;
                }
            }
        });

        Gate::define('add_permissions', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;
            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'add_permissions') {
                    return true;
                }
            }
        });


        Gate::define('delete_user_permanent', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;
            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'delete_user_permanent') {
                    return true;
                }
            }
        });

        Gate::define('delete_admin_permanent', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;
            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'delete_admin_permanent') {
                    return true;
                }
            }
        });



        //Recycle bin role
        Gate::define('permanent_delete_roles', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;
            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'permanent_delete_roles') {
                    return true;
                }
            }
        });
       

        Gate::define('view_configuration', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;
            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'view_configuration') {
                    return true;
                }
            }
        });


        Gate::define('edit_configuration', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;
            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'edit_configuration') {
                    return true;
                }
            }
        });

       

        Gate::define('view_contact_us', function ($user) {
            $user = Auth::user();
            $permissions = $user->role->permissions;
            for ($i=0; $i < count($permissions); $i++) { 
                if($permissions[$i]->slug == 'view_contact_us') {
                    return true;
                }
            }
        });

        //customer
        $TopCreators = array(
            ['public/customer/img/creator-1.png','Albert Flores','broklinslam_445'],
            ['public/customer/img/creator-2.png','Albert Flores','broklinslam_56'],
            ['public/customer/img/creator-3.png','Albert Flores','broklinslam_77'],
            ['public/customer/img/creator-4.png','Albert Flores','broklinslam_72']
        );
        $TopCreatorsWeekly = array(
            ['public/customer/img/creator-1.png','Albert Flores','broklinslam_445'],
            ['public/customer/img/creator-2.png','Albert Flores','broklinslam_56'],
            ['public/customer/img/creator-3.png','Albert Flores','broklinslam_77'],
            ['public/customer/img/creator-4.png','Albert Flores','broklinslam_72'],
            ['public/customer/img/creator-1.png','Albert Flores','broklinslam_72']
        );
        $TopCreatorsMonthly = array(
            ['public/customer/img/creator-1.png','Albert Flores','broklinslam_445'],
            ['public/customer/img/creator-2.png','Albert Flores','broklinslam_56'],
            ['public/customer/img/creator-3.png','Albert Flores','broklinslam_77'],
            ['public/customer/img/creator-4.png','Albert Flores','broklinslam_72'],
            ['public/customer/img/creator-1.png','Albert Flores','broklinslam_72'],
            ['public/customer/img/creator-2.png','Albert Flores','broklinslam_72']
        );

        $TopPlatform = array(
            ['public/customer/img/platform-1.png','OpenSea'],
            ['public/customer/img/platform-2.png','Rarible'],
            ['public/customer/img/platform-3.png','Myth'],
            ['public/customer/img/platform-4.png','KnownOrigin']

        );
        $User_info_for_header = array(
            'name' => 'Mr John Wick',
            'user_name' => 'JohnWick@75',
            'image' => 'public/customer/img/profile-pic.png',
            'balance' => 234435.34,
        );

        $Statistics = array(
            'TotalSold' => 140,
            'TotalCancel' => 12,
            'TotalPanding' => 60
        );

        $Statistics_weekly = array(
            'TotalSold' => 340,
            'TotalCancel' => 52,
            'TotalPanding' => 90
        );

        $Statistics_monthly = array(
            'TotalSold' => 640,
            'TotalCancel' => 152,
            'TotalPanding' => 290
        );

        $RecentNotification = array(
            ['public/customer/img/notify-1.png','Your Account has been created','successfully done','2 min ago'],
            ['public/customer/img/notify-2.png','Thank you !','you made your frast sell','2 min ago'],
            ['public/customer/img/notify-3.png','Broklan Simons','Start Following you','5 hours ago'],
            ['public/customer/img/notify-4.png','Thank you !','you made your frast sell','6 day ago'],
            ['public/customer/img/notify-2.png','Your Account has been created','successfully done','7 min ago']
        );
        $Balance = array(
            ['public/customer/img/wallet-1.png','MetaMask',75320,773.69],
            ['public/customer/img/wallet-2.png','Coinbase Wallet',75320,773.69],
            ['public/customer/img/wallet-3.png','Bitski',75320,773.69],
            ['public/customer/img/wallet-4.png','WalletConnect',75320,773.69]
        );
        $Addmoney = array(
            ['public/customer/img/wallet-1.png','MetaMask',1],
            ['public/customer/img/wallet-2.png','Coinbase Wallet',0],
            ['public/customer/img/wallet-3.png','Bitski',1],
            ['public/customer/img/wallet-4.png','WalletConnect',0]
        );

        $transectionRate = array(
            ['12:00 AM', '04:00 AM', '08:00 AM'],
            [40, 90, 10]
        );
        $transectionRateData = array(
            'usd' => 7473.67,
            'growth' => 324.75,
            'growth_percentage' => 11.5 
        );
        $transectionRateBTCData = array(
            'usd' => 5473.67,
            'growth' => 224.75,
            'growth_percentage' => 10.0 
        );
        $transectionRateBTC = array(
            ['12:00 AM', '04:00 AM', '08:00 AM'],
            [30, 80, 20]
        );

        $SidebarInf = array(
            'active_bids' => 19,
            'market_place' => 9,
            'sell' => 4,
            'saved' => 32,
            'message' => 19
        );

        View::share(['transectionRateData'=>$transectionRateData,'transectionRateBTCData'=>$transectionRateBTCData,'transectionRateBTC'=>$transectionRateBTC,'TopCreators'=>$TopCreators,'TopCreatorsWeekly'=>$TopCreatorsWeekly,'TopPlatform'=>$TopPlatform,'User_info_for_header'=>$User_info_for_header,'Statistics'=>$Statistics,'RecentNotification'=>$RecentNotification,'Balance'=>$Balance,'Addmoney'=>$Addmoney,'TopCreatorsMonthly'=>$TopCreatorsMonthly,'transectionRate'=>$transectionRate,'SidebarInf'=>$SidebarInf,'Statistics_weekly'=>$Statistics_weekly,'Statistics_monthly'=>$Statistics_monthly]);
        //end customer
    }
}
