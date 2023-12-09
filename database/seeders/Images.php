<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Images extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::unprepared("INSERT INTO `images` (`id`, `imageable_id`, `imageable_type`, `url`, `created_at`, `updated_at`) VALUES
        (1, 1, 'Category', 'images/lYkr0ORrszHZxQ0XhcZ5LckfJ3cQ4K4MbpbRPFXk.jpg', '2023-12-04 20:58:14', '2023-12-04 21:39:04'),
        (2, 2, 'Category', 'images/phBgoisze50nBDlJpCj11kxmy1qFYdUPNMS25QSk.jpg', '2023-12-04 20:58:14', '2023-12-04 21:38:51'),
        (3, 3, 'Category', 'images/OD9soj5gFUAYQf46WCMM2n4fGQfRvO8tNnTo8dbq.jpg', '2023-12-04 20:58:14', '2023-12-04 21:38:40'),
        (4, 4, 'Category', 'images/lWr4Pr15kn1J7amM5zvLhJ9w3imq4QlWf4Ji1ox8.jpg', '2023-12-04 20:58:14', '2023-12-04 21:38:26'),
        (5, 5, 'Category', 'images/hN4PVEKlQVpiZqq1Nyp6ZdhhbPWq7F7w0wUM1xB7.jpg', '2023-12-04 20:58:14', '2023-12-04 21:38:13'),
        (6, 6, 'Category', 'images/XuACB3Prk794r6OxkuySf2UG0C5UeRGV8Z0u9u00.jpg', '2023-12-04 20:58:14', '2023-12-08 21:26:56'),
        (8, 8, 'Category', 'images/xXrOneSfUIByTCOHSR8aOqA9z7ut1BOe0wzLwl8V.jpg', '2023-12-04 20:58:14', '2023-12-08 21:25:14'),
        (9, 1, 'Author', 'images/L5A1DFeX2Uy6xUlWmRxGX0ZZ8q8l1swfazdv83Ih.jpg', '2023-12-04 20:58:14', '2023-12-04 21:36:35'),
        (10, 2, 'Author', 'images/TEutiUPIhUjJSrmmtCACmvXEx9ifGMHTKAR9SGo2.jpg', '2023-12-04 20:58:14', '2023-12-04 21:36:28'),
        (11, 3, 'Author', 'images/wDIfGJSHUB2HWmhAGQyYz2aR4dAreKYjR34etZb9.jpg', '2023-12-04 20:58:14', '2023-12-04 21:36:19'),
        (12, 4, 'Author', 'images/aYilsZwqKMSdm65Qzdx2AGEn1iUpe1ClD3yOYiJE.jpg', '2023-12-04 20:58:14', '2023-12-04 21:36:11'),
        (13, 5, 'Author', 'images/X6FJA0bgwAmY92hcaeJaPzFTmBaRpUAPywLGwZID.jpg', '2023-12-04 20:58:14', '2023-12-04 21:36:05'),
        (14, 6, 'Author', 'images/P2q3ABpQTbDKzBdw8AGBaqLxRZ0mrsvwa7s3bWDu.jpg', '2023-12-04 20:58:14', '2023-12-04 21:35:58'),
        (15, 7, 'Author', 'images/QWJ4JrhrjeTG3nntq0bSME07Yh6rTLqAmVzjh4nt.jpg', '2023-12-04 20:58:14', '2023-12-04 21:35:52'),
        (16, 8, 'Author', 'images/7wshdBDYHqygzc6FhsgntHp4RntKZUdipBiAlxY6.jpg', '2023-12-04 20:58:14', '2023-12-04 21:35:46'),
        (21, 4, 'Book', 'images/mDSgpUmVGiJNeBQhNpdO95H10CZYnLbsCO6ycjIV.jpg', '2023-12-04 21:26:11', '2023-12-04 21:26:11'),
        (36, 14, 'Author', 'images/K6qDHUyj6Cm76WWZggrZBZc9FCL61gPYHTvATB70.jpg', '2023-12-06 10:56:58', '2023-12-06 10:56:58'),
        (37, 15, 'Author', 'images/xo26WEWB2nu2jy2ldtKKOMEwiAv3luTgGuMU8C4M.jpg', '2023-12-06 10:57:14', '2023-12-06 10:57:14'),
        (40, 16, 'Category', 'images/UcP08vXyshYxdK8p5GyfOeYuucqnABWbja17koU0.jpg', '2023-12-06 12:53:04', '2023-12-08 21:16:28'),
        (42, 16, 'Author', 'images/aeKyCu1AUTAZCU3aA9k0yIMWqx6BZsq8nbG4b5qS.jpg', '2023-12-07 16:49:50', '2023-12-07 16:49:50'),
        (43, 17, 'Author', 'images/kNcuUZGURj3iSWQOWKuJrOk7kRxGcPhGY8Yoyw6m.jpg', '2023-12-07 16:50:04', '2023-12-07 16:50:04'),
        (44, 18, 'Author', 'images/AsWNVXpmrPl2wQNxHClaCDsGhvPsOq13cz3H1sMq.jpg', '2023-12-07 16:50:14', '2023-12-07 16:50:14'),
        (45, 19, 'Author', 'images/lX8Fqyk5agN7lzM06PR148mttW8cEoX4OYFAgdIp.jpg', '2023-12-07 16:50:26', '2023-12-07 16:50:26'),
        (46, 20, 'Author', 'images/ktEODSL3n963dknzFyqmeHXaAOw1Y72LT5qU9ZM6.jpg', '2023-12-07 16:50:41', '2023-12-07 16:50:41'),
        (47, 8, 'Book', 'images/aZMdhKOnwHwYXGRCDOcguwAE1Kyl054VPcMvu59W.jpg', '2023-12-07 16:52:51', '2023-12-07 16:52:51'),
        (49, 6, 'Book', 'images/7k2uGKwsfVYnPS4dKnQlEEAm2xO4ziTVGdnvoxrS.jpg', '2023-12-07 16:53:21', '2023-12-07 16:53:21'),
        (54, 11, 'Book', 'images/Wmo6OKO3ZtUrhGzbcr6teRZwhTsUgC8r4X9kdsrT.jpg', '2023-12-07 16:56:44', '2023-12-07 16:56:44'),
        (60, 16, 'Book', 'images/yZVP9FwUaSzoWs8X99zRIXaQxbADzdoSnyVlpcBV.jpg', '2023-12-08 15:24:44', '2023-12-08 15:24:44'),
        (63, 17, 'Category', 'images/TVo6jo7LgmolprIaTapbifBK2S4BXzaL0bgwc4Y4.jpg', '2023-12-08 21:13:44', '2023-12-08 21:13:44'),
        (64, 18, 'Category', 'images/lkluS1JWZ2xiyZR8vVH5WxSjCV173RfGzer4GRll.jpg', '2023-12-08 21:14:28', '2023-12-08 21:14:28'),
        (65, 19, 'Category', 'images/NSujKcRF1WoL1vMDzN9MYShGOXhjswBAxyGfJCBX.jpg', '2023-12-08 21:16:50', '2023-12-08 21:16:50'),
        (66, 20, 'Category', 'images/pUZy1Q1uUB9R1Fp2DvJVvNpPVqsIsQBXZt42siix.jpg', '2023-12-08 21:18:19', '2023-12-08 21:18:19'),
        (67, 21, 'Category', 'images/nQi4maHwJVbpqEI8URRrZTYgJUBVS4y5Qtq000s9.jpg', '2023-12-08 21:20:57', '2023-12-08 21:20:57'),
        (68, 22, 'Category', 'images/fKTNEGbo78FOJcUfJKXxiC9hdN5X8y2WP13l3FA1.jpg', '2023-12-08 21:22:11', '2023-12-08 21:22:11'),
        (69, 23, 'Category', 'images/2RQ1ABP3r4h5hwJqfwx0637k60DbKII2OUbVTOdr.jpg', '2023-12-08 21:23:29', '2023-12-08 21:23:29'),
        (70, 24, 'Category', 'images/qyuuFDD7g98jYnxT2FxwECKoodIwvv8viGN0Donf.jpg', '2023-12-08 21:28:11', '2023-12-08 21:28:11'),
        (72, 17, 'Book', 'images/GidWHv5mdNgJt8N8BiN5J65mI4korXAtgH8sBPDP.jpg', '2023-12-08 21:28:39', '2023-12-08 21:28:39'),
        (73, 15, 'Book', 'images/xK00FAkp5PnWdz2EA4NOJBZp5iqFkwrv2bHu8jsl.jpg', '2023-12-08 21:28:48', '2023-12-08 21:28:48'),
        (74, 14, 'Book', 'images/P6joxsTPrDTs44E2u3OkPfROuHHULBAWiSx2fCP6.jpg', '2023-12-08 21:28:54', '2023-12-08 21:28:54'),
        (75, 13, 'Book', 'images/LZjWKRASAnp6k0yXw84PUbVismRpQnsDkfGRKHp5.jpg', '2023-12-08 21:29:03', '2023-12-08 21:29:03'),
        (76, 12, 'Book', 'images/Ct7U1Ap2TtEKkJKLJo0oAj5XhpanBSaIZxy7ydPP.jpg', '2023-12-08 21:29:11', '2023-12-08 21:29:11'),
        (77, 10, 'Book', 'images/CBG2LDdaWG6TpBQ7TVSOrG928GXnQUqaA6G3IvNh.jpg', '2023-12-08 21:29:20', '2023-12-08 21:29:20'),
        (78, 9, 'Book', 'images/WH3haFWdrWUcFk8zEIdNXGjhengr7Pwpo1wxwqVM.jpg', '2023-12-08 21:29:32', '2023-12-08 21:29:32'),
        (81, 7, 'Book', 'images/hWhCBKmuR4Dz6rk1IE05Fkhz7AiRajTXyrOb8p0d.jpg', '2023-12-08 21:30:02', '2023-12-08 21:30:02'),
        (82, 5, 'Book', 'images/TLgrozxVvFUBO4XQEkoz6AD0BAxVzp2ollL6vKIg.jpg', '2023-12-08 21:30:16', '2023-12-08 21:30:16'),
        (83, 3, 'Book', 'images/h1oxKLnX8cbPMM8yEheB7595j3KUpbCsLu4y8ppL.jpg', '2023-12-08 21:30:29', '2023-12-08 21:30:29'),
        (84, 2, 'Book', 'images/0EffQCeZ9eyUwi6IAh9x0L0fe87p142Pp6e1MXM2.jpg', '2023-12-08 21:30:38', '2023-12-08 21:30:38'),
        (85, 1, 'Book', 'images/cM5ScuYCn6MDKQiknslTiSTDIOciuZZAXmXOnSKD.jpg', '2023-12-08 21:30:44', '2023-12-08 21:30:44');");
    }
}
