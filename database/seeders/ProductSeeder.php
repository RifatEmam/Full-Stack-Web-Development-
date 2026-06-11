<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Laptops
        Product::create([
            'name' => 'Dell XPS 13',
            'price' => 85000,
            'description' => 'Ultra-portable laptop with 13.3" FHD display, Intel i7, 16GB RAM',
            'image' => 'https://images.pexels.com/photos/7974/pexels-photo.jpg?w=400&h=300&fit=crop'
        ]);

        Product::create([
            'name' => 'HP Pavilion 15',
            'price' => 55000,
            'description' => '15.6" HD display, AMD Ryzen 5, 8GB RAM, 256GB SSD',
            'image' => 'https://images.pexels.com/photos/7014/pexels-photo.jpg?w=400&h=300&fit=crop'
        ]);

        Product::create([
            'name' => 'MacBook Pro M2',
            'price' => 120000,
            'description' => '13-inch Apple M2 chip, 8GB unified memory, 256GB SSD',
            'image' => 'https://images.pexels.com/photos/18105/pexels-photo.jpg?w=400&h=300&fit=crop'
        ]);

        // Smartphones
        Product::create([
            'name' => 'iPhone 15 Pro',
            'price' => 95000,
            'description' => '6.1" Super Retina XDR, A17 Pro chip, 256GB, 5G',
            'image' => 'https://images.pexels.com/photos/699122/pexels-photo-699122.jpeg?w=400&h=300&fit=crop'
        ]);

        Product::create([
            'name' => 'Samsung Galaxy S24',
            'price' => 75000,
            'description' => '6.2" Dynamic AMOLED display, Snapdragon 8 Gen 3, 256GB',
            'image' => 'https://images.pexels.com/photos/699122/pexels-photo-699122.jpeg?w=400&h=300&fit=crop'
        ]);

        Product::create([
            'name' => 'OnePlus 12',
            'price' => 45000,
            'description' => '6.7" AMOLED, Snapdragon 8 Gen 3, 256GB, 5G',
            'image' => 'https://images.pexels.com/photos/788946/pexels-photo-788946.jpeg?w=400&h=300&fit=crop'
        ]);

        Product::create([
            'name' => 'Google Pixel 8',
            'price' => 65000,
            'description' => '6.2" OLED, Google Tensor G3, 128GB, AI Features',
            'image' => 'https://images.pexels.com/photos/788946/pexels-photo-788946.jpeg?w=400&h=300&fit=crop'
        ]);

        // Tablets
        Product::create([
            'name' => 'iPad Air 11',
            'price' => 70000,
            'description' => '11-inch M2 chip, Liquid Retina display, 256GB, WiFi',
            'image' => 'https://images.pexels.com/photos/1229861/pexels-photo-1229861.jpeg?w=400&h=300&fit=crop'
        ]);

        Product::create([
            'name' => 'Samsung Galaxy Tab S9',
            'price' => 55000,
            'description' => '11.0" Dynamic AMOLED, Snapdragon 8 Gen 2, 128GB',
            'image' => 'https://images.pexels.com/photos/1334597/pexels-photo-1334597.jpeg?w=400&h=300&fit=crop'
        ]);

        // Smartwatches
        Product::create([
            'name' => 'Apple Watch Series 9',
            'price' => 32000,
            'description' => '41mm Always-On display, Heart rate monitor, 5G',
            'image' => 'https://images.pexels.com/photos/788946/pexels-photo-788946.jpeg?w=400&h=300&fit=crop'
        ]);

        Product::create([
            'name' => 'Samsung Galaxy Watch6',
            'price' => 18000,
            'description' => '1.3" AMOLED, SpO2 tracking, 50+ workouts',
            'image' => 'https://images.pexels.com/photos/1536619/pexels-photo-1536619.jpeg?w=400&h=300&fit=crop'
        ]);

        // Wireless Earbuds
        Product::create([
            'name' => 'Apple AirPods Pro (2nd Gen)',
            'price' => 28000,
            'description' => 'Noise cancellation, Spatial audio, 6hr battery',
            'image' => 'https://images.pexels.com/photos/3587478/pexels-photo-3587478.jpeg?w=400&h=300&fit=crop'
        ]);

        Product::create([
            'name' => 'Sony WF-1000XM5',
            'price' => 22000,
            'description' => 'Industry-leading ANC, 8hr battery, Premium sound',
            'image' => 'https://images.pexels.com/photos/3394650/pexels-photo-3394650.jpeg?w=400&h=300&fit=crop'
        ]);

        Product::create([
            'name' => 'Samsung Galaxy Buds2 Pro',
            'price' => 14000,
            'description' => 'IPX7 waterproof, Ambient awareness, 5hr battery',
            'image' => 'https://images.pexels.com/photos/3587478/pexels-photo-3587478.jpeg?w=400&h=300&fit=crop'
        ]);

        // Headphones
        Product::create([
            'name' => 'Bose QuietComfort 45',
            'price' => 32000,
            'description' => 'Wireless noise-cancelling, 24hr battery',
            'image' => 'https://images.pexels.com/photos/3394650/pexels-photo-3394650.jpeg?w=400&h=300&fit=crop'
        ]);

        Product::create([
            'name' => 'Sony WH-1000XM5',
            'price' => 35000,
            'description' => 'Premium ANC headphones, 30hr battery life',
            'image' => 'https://images.pexels.com/photos/3394649/pexels-photo-3394649.jpeg?w=400&h=300&fit=crop'
        ]);

        // Cameras
        Product::create([
            'name' => 'Canon EOS R6',
            'price' => 185000,
            'description' => '20MP Full-frame, 4K 60fps video, AI AF',
            'image' => 'https://images.pexels.com/photos/606933/pexels-photo-606933.jpeg?w=400&h=300&fit=crop'
        ]);

        Product::create([
            'name' => 'GoPro Hero 12 Black',
            'price' => 38000,
            'description' => '5.3K video, Waterproof, HyperSmooth stabilization',
            'image' => 'https://images.pexels.com/photos/606933/pexels-photo-606933.jpeg?w=400&h=300&fit=crop'
        ]);

        // Gaming Devices
        Product::create([
            'name' => 'PlayStation 5',
            'price' => 50000,
            'description' => '825GB SSD, 4K gaming, 120fps support',
            'image' => 'https://images.pexels.com/photos/4195325/pexels-photo-4195325.jpeg?w=400&h=300&fit=crop'
        ]);

        Product::create([
            'name' => 'Xbox Series X',
            'price' => 50000,
            'description' => '1TB SSD, 4K/120fps, Game Pass included',
            'image' => 'https://images.pexels.com/photos/4195325/pexels-photo-4195325.jpeg?w=400&h=300&fit=crop'
        ]);

        Product::create([
            'name' => 'Nintendo Switch OLED',
            'price' => 38000,
            'description' => '7" OLED screen, 64GB storage, Dock included',
            'image' => 'https://images.pexels.com/photos/3394650/pexels-photo-3394650.jpeg?w=400&h=300&fit=crop'
        ]);

        // Portable Speakers
        Product::create([
            'name' => 'JBL Flip 6',
            'price' => 12000,
            'description' => 'Waterproof portable speaker, 12hr battery',
            'image' => 'https://images.pexels.com/photos/3587478/pexels-photo-3587478.jpeg?w=400&h=300&fit=crop'
        ]);

        Product::create([
            'name' => 'Bose SoundLink Max',
            'price' => 28000,
            'description' => 'Premium sound, 20hr battery, Waterproof',
            'image' => 'https://images.pexels.com/photos/3394649/pexels-photo-3394649.jpeg?w=400&h=300&fit=crop'
        ]);

        // Smart Home Devices
        Product::create([
            'name' => 'Amazon Echo Dot 5th Gen',
            'price' => 5500,
            'description' => 'Smart speaker with Alexa, Bluetooth connectivity',
            'image' => 'https://images.pexels.com/photos/3394650/pexels-photo-3394650.jpeg?w=400&h=300&fit=crop'
        ]);

        Product::create([
            'name' => 'Google Nest Hub Max',
            'price' => 18000,
            'description' => '10" touchscreen, Google Assistant, Duo calling',
            'image' => 'https://images.pexels.com/photos/3394649/pexels-photo-3394649.jpeg?w=400&h=300&fit=crop'
        ]);

        // Power Banks
        Product::create([
            'name' => 'Anker PowerCore 26800',
            'price' => 4500,
            'description' => '26800mAh, 3-port charging, Fast charge',
            'image' => 'https://images.pexels.com/photos/788946/pexels-photo-788946.jpeg?w=400&h=300&fit=crop'
        ]);

        // Chargers
        Product::create([
            'name' => 'Belkin USB-C GaN Charger 140W',
            'price' => 8000,
            'description' => '140W output, Multiple devices, Compact design',
            'image' => 'https://images.pexels.com/photos/699122/pexels-photo-699122.jpeg?w=400&h=300&fit=crop'
        ]);
    }
}
