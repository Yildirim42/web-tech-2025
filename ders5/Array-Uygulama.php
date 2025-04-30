<?php

$okul = array(
    "fakülteler" => [
    "Meslek Yüksekokulu" => [
        "Bilgisayar Programcılığı" => [
            "dersler" => [
                "Veritabanı", "Görsel Programlama", "Web Teknolojileri"
            ],
            "öğrenciler" => [
                "Mehmet Yıldırım", "Ayşe Yıldız", "Hatice Netice"
            ]
        ],
        "İşletme" => [
            "dersler" => [
                "Matematik", "Girişimcilik", "İşletmenin Temelleri"
            ],
            "öğrenciler" => [
                "Ali Veli", "Fatma Turgut", "Kaan Muşmuş"
            ]
        ]

            ],
    "Mühendislik Fakültesi" => [
        "Bilgisayar Mühendisliği" => [
            "dersler" => [
                "Mühendis Matematiği", "İleri Seviye Programlama", "Yapay Zeka"
            ],
            "öğrenciler" => [
                "Ali Yılmaz", "Ahmet Trafo", "İsa Musa"
            ]
        ],
        "Endüstri Mühendisliği" => [
            "dersler" => [
                "Beton", "Altyapı Tasarım", "Mühendis Matematiği"
            ],
            "öğrenciler" => [
                "Selin Ay", "Cevdet Sarıkamış", "Yüksek Akın"
            ]
        ]

    ]
    ]

            );


echo "<pre>";
print_r($okul);
echo "</pre>";
?>