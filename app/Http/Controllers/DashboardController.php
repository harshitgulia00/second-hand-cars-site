<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\Car;
use App\Models\BuyRequest;
use App\Models\SellRequest;
use App\Models\ContactMessage;

class DashboardController extends Controller
{
    public function index()
    {

        /* USERS */

        $users = User::count();

        $newUsersToday = User::whereDate('created_at', today())
            ->count();

        $newUsersThisMonth = User::whereMonth('created_at', date('m'))
            ->whereYear('created_at', date('Y'))
            ->count();



        /* CARS */

        $cars = Car::count();

        $carsActive = Car::where('sold', 0)
            ->count();

        $carsSold = Car::where('sold', 1)
            ->count();



        /* BUY REQUESTS */

        $buyRequests = BuyRequest::count();

        $buyRequestsPending = BuyRequest::where('status', 'pending')
            ->count();

        $buyRequestsAccepted = BuyRequest::where('status', 'accepted')
            ->count();

        $buyRequestsRejected = BuyRequest::where('status', 'rejected')
            ->count();



        /* SELL REQUESTS */

        $sellRequests = SellRequest::count();

        $sellRequestsPending = SellRequest::where('status', 'pending')
            ->count();

        $sellRequestsAccepted = SellRequest::where('status', 'accepted')
            ->count();

        $sellRequestsRejected = SellRequest::where('status', 'rejected')
            ->count();



        /* CONTACT MESSAGES */

        $messages = ContactMessage::count();

        $messagesUnread = ContactMessage::where('read', 0)
            ->count();

        $messagesRead = ContactMessage::where('read', 1)
            ->count();



        return view('dashboard', compact(

            'users',
            'newUsersToday',
            'newUsersThisMonth',

            'cars',
            'carsActive',
            'carsSold',

            'buyRequests',
            'buyRequestsPending',
            'buyRequestsAccepted',
            'buyRequestsRejected',

            'sellRequests',
            'sellRequestsPending',
            'sellRequestsAccepted',
            'sellRequestsRejected',

            'messages',
            'messagesUnread',
            'messagesRead'
        ));
    }
}