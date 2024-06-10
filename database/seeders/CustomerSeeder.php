<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fekar = Faker::create();
        $customer = new Customer;
        $customer->name = "Abhishek";
        $customer->email = "Abhishek12@gmail.com";
        $customer->gender ="fsdg";
        $customer->address = "sdhgfughd";
        $customer->state = "gyutrryewrh";
        $customer->country = "dgwgedw";
        $customer->dob = "euifhyueiruei";
        $customer->save();
    }
}
