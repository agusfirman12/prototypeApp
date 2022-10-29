<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([
            [
                'nama_barang' => 'beras pulen',
                'harga' => 'Rp.12.000',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam sequi vitae maiores repudiandae. Earum unde minus cumque neque libero deleniti ad voluptate, architecto officiis non nihil corporis quasi, tempora aspernatur. Debitis, sunt dicta consequatur corrupti quam id cupiditate distinctio officia saepe hic ex vero quia nisi commodi minima repellendus, rerum animi aliquid consectetur? Optio rerum sint provident quos nisi in excepturi veritatis aliquam qui, rem libero, porro nesciunt voluptatibus quibusdam nemo quae a. Quod tenetur sint consequatur officia quasi nesciunt, reiciendis alias velit officiis suscipit accusamus tempora labore, voluptatum doloremque voluptates, aspernatur numquam molestiae? Hic consequuntur tempora maxime temporibus.',
                'foto' => 'beras.jpg',
                'stok' => '20',
                'toko_id' => 1
            ],
            [
                'nama_barang' => 'telur bebek',
                'harga' => 'Rp.25.000',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam sequi vitae maiores repudiandae. Earum unde minus cumque neque libero deleniti ad voluptate, architecto officiis non nihil corporis quasi, tempora aspernatur. Debitis, sunt dicta consequatur corrupti quam id cupiditate distinctio officia saepe hic ex vero quia nisi commodi minima repellendus, rerum animi aliquid consectetur? Optio rerum sint provident quos nisi in excepturi veritatis aliquam qui, rem libero, porro nesciunt voluptatibus quibusdam nemo quae a. Quod tenetur sint consequatur officia quasi nesciunt, reiciendis alias velit officiis suscipit accusamus tempora labore, voluptatum doloremque voluptates, aspernatur numquam molestiae? Hic consequuntur tempora maxime temporibus.',
                'foto' => 'telur.jpeg',
                'stok' => '50',
                'toko_id' => 1
            ],
            [
                'nama_barang' => 'tepung trigu',
                'harga' => 'Rp.15.000',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam sequi vitae maiores repudiandae. Earum unde minus cumque neque libero deleniti ad voluptate, architecto officiis non nihil corporis quasi, tempora aspernatur. Debitis, sunt dicta consequatur corrupti quam id cupiditate distinctio officia saepe hic ex vero quia nisi commodi minima repellendus, rerum animi aliquid consectetur? Optio rerum sint provident quos nisi in excepturi veritatis aliquam qui, rem libero, porro nesciunt voluptatibus quibusdam nemo quae a. Quod tenetur sint consequatur officia quasi nesciunt, reiciendis alias velit officiis suscipit accusamus tempora labore, voluptatum doloremque voluptates, aspernatur numquam molestiae? Hic consequuntur tempora maxime temporibus.',
                'foto' => 'tepung.jpg',
                'stok' => '30',
                'toko_id' => 1
            ],
            [
                'nama_barang' => 'teh celup',
                'harga' => 'Rp.5.000',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam sequi vitae maiores repudiandae. Earum unde minus cumque neque libero deleniti ad voluptate, architecto officiis non nihil corporis quasi, tempora aspernatur. Debitis, sunt dicta consequatur corrupti quam id cupiditate distinctio officia saepe hic ex vero quia nisi commodi minima repellendus, rerum animi aliquid consectetur? Optio rerum sint provident quos nisi in excepturi veritatis aliquam qui, rem libero, porro nesciunt voluptatibus quibusdam nemo quae a. Quod tenetur sint consequatur officia quasi nesciunt, reiciendis alias velit officiis suscipit accusamus tempora labore, voluptatum doloremque voluptates, aspernatur numquam molestiae? Hic consequuntur tempora maxime temporibus.',
                'foto' => 'teh.jpeg',
                'stok' => '50',
                'toko_id' => 1
            ],
            [
                'nama_barang' => 'minyak goreng',
                'harga' => 'Rp.20.000',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam sequi vitae maiores repudiandae. Earum unde minus cumque neque libero deleniti ad voluptate, architecto officiis non nihil corporis quasi, tempora aspernatur. Debitis, sunt dicta consequatur corrupti quam id cupiditate distinctio officia saepe hic ex vero quia nisi commodi minima repellendus, rerum animi aliquid consectetur? Optio rerum sint provident quos nisi in excepturi veritatis aliquam qui, rem libero, porro nesciunt voluptatibus quibusdam nemo quae a. Quod tenetur sint consequatur officia quasi nesciunt, reiciendis alias velit officiis suscipit accusamus tempora labore, voluptatum doloremque voluptates, aspernatur numquam molestiae? Hic consequuntur tempora maxime temporibus.',
                'foto' => 'minyak.jpeg',
                'stok' => '30',
                'toko_id' => 2
            ],
            [
                'nama_barang' => 'Kecap Manis',
                'harga' => 'Rp.17.000',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam sequi vitae maiores repudiandae. Earum unde minus cumque neque libero deleniti ad voluptate, architecto officiis non nihil corporis quasi, tempora aspernatur. Debitis, sunt dicta consequatur corrupti quam id cupiditate distinctio officia saepe hic ex vero quia nisi commodi minima repellendus, rerum animi aliquid consectetur? Optio rerum sint provident quos nisi in excepturi veritatis aliquam qui, rem libero, porro nesciunt voluptatibus quibusdam nemo quae a. Quod tenetur sint consequatur officia quasi nesciunt, reiciendis alias velit officiis suscipit accusamus tempora labore, voluptatum doloremque voluptates, aspernatur numquam molestiae? Hic consequuntur tempora maxime temporibus.',
                'foto' => 'kecap.jpg',
                'stok' => '15',
                'toko_id' => 2
            ],
            [
                'nama_barang' => 'gula pasir',
                'harga' => 'Rp.20.000',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam sequi vitae maiores repudiandae. Earum unde minus cumque neque libero deleniti ad voluptate, architecto officiis non nihil corporis quasi, tempora aspernatur. Debitis, sunt dicta consequatur corrupti quam id cupiditate distinctio officia saepe hic ex vero quia nisi commodi minima repellendus, rerum animi aliquid consectetur? Optio rerum sint provident quos nisi in excepturi veritatis aliquam qui, rem libero, porro nesciunt voluptatibus quibusdam nemo quae a. Quod tenetur sint consequatur officia quasi nesciunt, reiciendis alias velit officiis suscipit accusamus tempora labore, voluptatum doloremque voluptates, aspernatur numquam molestiae? Hic consequuntur tempora maxime temporibus.',
                'foto' => 'gula.jpg',
                'stok' => '20',
                'toko_id' => 2
            ],
            [
                'nama_barang' => 'kopi sachet',
                'harga' => 'Rp.3.000',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam sequi vitae maiores repudiandae. Earum unde minus cumque neque libero deleniti ad voluptate, architecto officiis non nihil corporis quasi, tempora aspernatur. Debitis, sunt dicta consequatur corrupti quam id cupiditate distinctio officia saepe hic ex vero quia nisi commodi minima repellendus, rerum animi aliquid consectetur? Optio rerum sint provident quos nisi in excepturi veritatis aliquam qui, rem libero, porro nesciunt voluptatibus quibusdam nemo quae a. Quod tenetur sint consequatur officia quasi nesciunt, reiciendis alias velit officiis suscipit accusamus tempora labore, voluptatum doloremque voluptates, aspernatur numquam molestiae? Hic consequuntur tempora maxime temporibus.',
                'foto' => 'kopi.jpg',
                'stok' => '15',
                'toko_id' => 2
            ]
        ]);
    }
}
