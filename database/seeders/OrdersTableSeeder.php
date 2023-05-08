<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::get();
        $services = Service::get();

        foreach ($users as $userKey => $user) {
            foreach ($services as $serviceKey => $service) {
                if ($serviceKey % 3 == 0) {
                    Order::createOrder('created', $user->id, $service->id);
                } elseif ($serviceKey % 2 == 1) {
                    Order::createOrder('inProgress', $user->id, $service->id);
                } else {
                    Order::createOrder('done', $user->id, $service->id);
                }
            }
        }
    }
}
