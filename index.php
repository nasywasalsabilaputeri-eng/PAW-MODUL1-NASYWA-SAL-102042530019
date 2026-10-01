<?php

$produk = [
    [
        "nama" => "Corball TNT",
        "kategori" => "Gantungan Kunci",
        "harga" => 370000,
        "stok" => 5,
        "gambar" => "foto1.jpg"
    ],
    [
        "nama" => "Corball ACAI",
        "kategori" => "Gantungan Kunci",
        "harga" => 370000,
        "stok" => 0,
        "gambar" => "foto2.jpg"
    ],
    [
        "nama" => "Corball Birthday Blue",
        "kategori" => "Gantungan Kunci",
        "harga" => 465000,
        "stok" => 5,
        "gambar" => "foto3.jpg"
    ],
    [
        "nama" => "Corball Birthday White",
        "kategori" => "Gantungan Kunci",
        "harga" => 465000,
        "stok" => 5,
        "gambar" => "foto4.jpg"
    ],
    [
        "nama" => "Corball Birthday Pink",
        "kategori" => "Gantungan Kunci",
        "harga" => 465000,
        "stok" => 0,
        "gambar" => "foto5.jpg"
    ],
    [
        "nama" => "Corball Birthday Yellow",
        "kategori" => "Gantungan Kunci",
        "harga" => 465000,
        "stok" => 5,
        "gambar" => "foto6.jpg"
    ]
];

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cia Store</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1>Cia Store</h1>
        <p>Katalog Corballi</p>
    </header>

    <section class="hero">
        <h2>Welcome to Cia Store</h2>
        <p>Temukan berbagai koleksi Corball favorit kamu, jangan sampai kehabisan.</p>

        <a href="#produk">Lihat Produk</a>
    </section>

    <section class="jumlah">
        <h2>Jumlah Produk</h2>

        <p>
            Total produk:
            <b><?php echo count($produk); ?> produk</b>
        </p>
    </section>

    <section id="produk">

        <h2>Katalog Produk</h2>

        <div class="produk-container">

            <?php foreach ($produk as $item) { ?>

                <div class="card">

                    <img src="<?php echo $item["gambar"]; ?>"
                         alt="<?php echo $item["nama"]; ?>">

                    <h3>
                        <?php echo $item["nama"]; ?>
                    </h3>

                    <p>
                        Kategori:
                        <?php echo $item["kategori"]; ?>
                    </p>

                    <p>
                        Harga:
                        <b>
                            Rp <?php echo number_format($item["harga"], 0, ',', '.'); ?>
                        </b>
                    </p>

                    <p>
                        Stok:
                        <?php echo $item["stok"]; ?>
                    </p>

                    <?php if ($item["stok"] > 0) { ?>

                        <p class="tersedia">
                            Tersedia
                        </p>

                        <button>
                            Beli Sekarang
                        </button>

                    <?php } else { ?>

                        <p class="habis">
                            Stok Habis
                        </p>

                        <button disabled>
                            Beli Sekarang
                        </button>

                    <?php } ?>

                </div>

            <?php } ?>

        </div>

    </section>

    <footer>
        <p>&copy; Call us at @CiaStore on ig</p>
    </footer>

</body>

</html>