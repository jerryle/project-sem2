<?php

use Illuminate\Database\Seeder;

class StoriesTableSeeder extends Seeder
{
    /**php
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('stories')->truncate();
        DB::table('stories')->insert([
            [
                'id'=>1,
                'title'=>'Trùng Sinh Chi Ma Giáo Giáo Chủ',
                'author'=>'Phong Thất Nguyệt',
                'image'=>'https://www.nae.vn/ttv/ttv/public/images/story/9b046fce4bdfb219b877ab6dcec0b78e6994b179e411188edbc048155d2a054f.jpg',
                'created_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'status'=>1,
                'user_id'=>1,
            ],
            [
                'id'=>2,
                'title'=>'Thâu Hương Cao Thủ',
                'author'=>'Lục Như Hòa Thượng',
                'image'=>'https://www.nae.vn/ttv/ttv/public/images/story/59.jpg',
                'created_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'status'=>1,
                'user_id'=>1,
            ],
            [
                'id'=>3,
                'title'=>'Xuyên Việt Tầm Tiên Đạo Nhân',
                'author'=>'Ly Trần Đạo Nhân',
                'image'=>'https://www.nae.vn/ttv/ttv/public/images/story/eafbd49fee9d89c5d5674f5bc11fcb3088542e22ddfe9ed7897ddfc3e6d8237f.jpg',
                'created_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'status'=>1,
                'user_id'=>1,
            ],
            [
                'id'=>4,
                'title'=>'Thánh Vũ Tinh Thần',
                'author'=>'Loạn Thế Cuồng Đao',
                'image'=>'https://www.nae.vn/ttv/ttv/public/images/story/434ce0b0be87a92900b8ac55287e2bbf883cdc1a021079126db710a3465aecae.jpg',
                'created_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'status'=>1,
                'user_id'=>1,
            ],
            [
                'id'=>5,
                'title'=>'Chí Tôn Trùng Sinh',
                'author'=>'Thảo Căn',
                'image'=>'https://www.nae.vn/ttv/ttv/public/images/story/2b79af97e65c40cee08ee569741a6a80aca5ccd9cafb7a763b2fe11087ccfe0e.jpg',
                'created_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'status'=>1,
                'user_id'=>1,
            ],
            [
                'id'=>6,
                'title'=>'Nhất Kiếm Phá Đạo',
                'author'=>'Liền Thiên Hồng',
                'image'=>'https://www.nae.vn/ttv/ttv/public/images/story/7536fa9e1a1321ff8433d6dc8a6bf38bfce5706aca9033611189bde97173aa6c.jpg',
                'created_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'status'=>1,
                'user_id'=>1,
            ],
            [
                'id'=>7,
                'title'=>'Bạch Ngân Bá Chủ',
                'author'=>'Túy Hổ',
                'image'=>'https://www.nae.vn/ttv/ttv/public/images/story/31ac1ead43d823dd3a37f18c2e27f82ed35c225114771a0412cfb7057d241b87.jpg',
                'created_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'status'=>1,
                'user_id'=>1,
            ],
            [
                'id'=>8,
                'title'=>'Đao Trấn Tinh Hà',
                'author'=>'Khai Hoang',
                'image'=>'https://www.nae.vn/ttv/ttv/public/images/story/4515452a6182fbd17e54822ee2e43a1ab5d9c13fa6e882fd449e1dd2062be07c.jpg',
                'created_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'status'=>1,
                'user_id'=>1,
            ],
            [
                'id'=>9,
                'title'=>'Siêu Cấp Thần Lược Đoạt',
                'author'=>'Kỳ Nhiên',
                'image'=>'https://www.nae.vn/ttv/ttv/public/images/story/d46823ffd8eba0cac20f6b7f7421160296b2f6d17d81d7986cc39e5a3c60e76f.jpg',
                'created_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'status'=>1,
                'user_id'=>1,
            ],
            [
                'id'=>10,
                'title'=>'Thôn Thiên Ký',
                'author'=>'Phong Thanh Dương',
                'image'=>'https://www.nae.vn/ttv/ttv/public/images/story/163.jpg',
                'created_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'status'=>1,
                'user_id'=>1,
            ],
            [
                'id'=>11,
                'title'=>'Thần Cấp Đại Ma Đầu',
                'author'=>'Lạp Mỗ',
                'image'=>'https://www.nae.vn/ttv/ttv/public/images/story/16475.jpg',
                'created_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'status'=>1,
                'user_id'=>1,
            ],
            [
                'id'=>12,
                'title'=>'Vĩnh Hằng Chí Tôn',
                'author'=>'Kiếm Du Thái Hư',
                'image'=>'https://www.nae.vn/ttv/ttv/public/images/story/6567f152229a03110d0dea4b82ed0d22147427f89f0397343efcd7169d43b6b4.jpg',
                'created_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'status'=>1,
                'user_id'=>1,
            ],
            [
                'id'=>13,
                'title'=>'Đại Hạ Kỷ',
                'author'=>'Bác Diệu',
                'image'=>'https://www.nae.vn/ttv/ttv/public/images/story/ebb7c0a7a5b067adfa25e5fdaddd48ecda8c369b243a11a061062912e1455aba.jpg',
                'created_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'status'=>1,
                'user_id'=>1,
            ],
            [
                'id'=>14,
                'title'=>'Ngũ Hành Ngự Thiên',
                'author'=>'Binh Sĩ Ất',
                'image'=>'https://www.nae.vn/ttv/ttv/public/images/story/3531ebe452c957062c3d1a409c5a16a3e18ca57ecd572d36db2823ecbd6e183e.jpg',
                'created_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'status'=>1,
                'user_id'=>1,
            ],
            [
                'id'=>15,
                'title'=>'Ngã Tu Đích Khả Năng Thị Giả Tiên',
                'author'=>'Minh Nguyệt Địa Thượng Sương',
                'image'=>'https://www.nae.vn/ttv/ttv/public/images/story/10ee075f8769c7c0d0eea0d6e35398b2928a8080419b448b276bb0a3d56db6a2.jpg',
                'created_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'status'=>1,
                'user_id'=>1,
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
