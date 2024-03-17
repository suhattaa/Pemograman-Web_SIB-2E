<?php
$menu = [
[
    "nama" => "Beranda"
],
[
    "nama" => "Berita",
    "subMenu" => [
        [
            "nama" => "Wisata",
            "subMenu" => [
                [
                    "nama" => "Pantai"
                ],
                [
                    "nama" => "Gunung"
                ]
            ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ],
];

function tampilkanMenuBertingkat(array $menu) {
    echo "<ul>";
    foreach ($menu as $item) {
      echo "<li>";
      echo $item['nama'];
      if (isset($item['subMenu']) && is_array($item['subMenu'])) {
        tampilkanMenuBertingkat($item['subMenu']);
      }
      echo "</li>";
    }
    echo "</ul>";
  }

tampilkanMenuBertingkat($menu);
?>