<?php

namespace App\Models;

class Post {
    public static function data()
    {
        return [
            [
                'id' => 1,
                'title' => 'Universitas Bumigora',
                'subtitle' => 'Terkenal Akan Jurusan Komputernya yang tiada duanya, selalu memenangkan kejuaraan komputer di daerah NTB 🏅',
                'content' => 'Universitas Bumigora adalah perguruan tinggi yang unggul di bidang teknologi dan informatika.',
                'image' => asset('img/ubgg.jpg')
            ],
            [
                'id' => 2,
                'title' => 'Universitas Mataram',
                'subtitle' => 'Unram saat ini menjadi salah satu perguruan tinggi negeri unggul dengan peningkatan kualitas penyelenggaraan pendidikan yang signifikan. 🎓',
                'content' => 'Universitas Mataram memiliki banyak fakultas unggulan di berbagai bidang akademik.',
                'image' => asset('img/unram.jpeg')
            ],
            [
                'id' => 3,
                'title' => 'UIN (State Islamic University of Mataram)',
                'subtitle' => 'Perguruan tinggi Islam negeri di Indonesia yang menyelenggarakan pendidikan akademik pada sejumlah disiplin ilmu pengetahuan, termasuk diluar studi keislaman.',
                'content' => 'UIN Mataram berkomitmen pada pengembangan ilmu keislaman dan sains secara terpadu.',
                'image' => asset('img/UIN.jpg')
            ],
            [
                'id' => 4,
                'title' => 'Undikma (Universitas Pendidikan Mandalika)',
                'subtitle' => 'Institut Keguruan dan Ilmu Pendidikan Mataram yang kini menjadi Universitas Pendidikan Mandalika sejak 2019.',
                'content' => 'Pada tanggal 2 Agustus 2019 Institut Keguruan dan Ilmu Pendidikan (IKIP) Mataram bergabung dengan Universitas Nusa Tenggara Barat (UNTB) dengan nama Universitas Pendidikan Mandalika. Undikma berfokus pada pengembangan pendidikan dan ilmu sosial untuk kemajuan daerah.',
                'image' => asset('img/undikma.jpg')
            ],
            [
                'id' => 5,
                'title' => 'Universitas Nahdlatul Wathan Mataram',
                'subtitle' => 'Perguruan tinggi swasta terbesar di NTB di bawah organisasi Nahdlatul Wathan.',
                'content' => 'Sebuah perguruan tinggi swasta yang terletak di Kota Mataram, Nusa Tenggara Barat. Universitas ini berada di bawah organisasi kemasyarakatan terbesar di NTB, Nahdlatul Wathan. UNW Mataram berperan besar dalam pengembangan pendidikan dan dakwah Islam di NTB.',
                'image' => asset('img/unw.jpg')
            ],
            [
                'id' => 6,
                'title' => 'Unizar (Universitas Islam Al-Azhar)',
                'subtitle' => 'Salah satu perguruan tinggi Islam swasta unggulan di Nusa Tenggara Barat yang mencetak pemimpin berlandaskan Pancasila dan UUD 1945.',
                'content' => 'Unizar merupakan salah satu perguruan tinggi Islam swasta di Nusa Tenggara Barat. Unizar sendiri merupakan universitas yang terbaik di kawasan Turida dan sekitarnya. Unizar juga menjadi universitas yang melahirkan para pemimpin dan pejuang yang berlandaskan Pancasila dan UUD 1945. Unizar memiliki banyak program studi unggulan dalam bidang sosial, hukum, dan keislaman.',
                'image' => asset('img/unizar.webp')
            ],
        ];
    }

    public static function caridata($id)
    {
        foreach (self::data() as $post) {
            if ($post['id'] == $id) {
                return $post;
            }
        }
        return null;
    }

    public static function count()
    {
        return count(self::data());
    }
}