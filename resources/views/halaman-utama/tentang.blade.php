<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <style>
        :root {
            --primary-color: #8B0000;
            --secondary-color: #A0001C;
            --accent-color: #FF6B6B;
            --text-dark: #2c3e50;
            --text-light: #6c757d;
            --bg-light: #f8f9fa;
            --white: #ffffff;
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.1);
            --shadow-md: 0 4px 6px rgba(0,0,0,0.1);
            --shadow-lg: 0 10px 15px rgba(0,0,0,0.1);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: var(--bg-light);
            color: var(--text-dark);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        .container {
            max-width: 100%;
            width: 100%;
            margin: 0 auto;
            background: var(--white);
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }

        /* Header */
        .about-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: var(--white);
            padding: 60px 20px 30px;
            position: relative;
            z-index: 10;
            border-bottom-left-radius: 24px;
            border-bottom-right-radius: 24px;
            box-shadow: var(--shadow-md);
            text-align: center;
        }

        .about-header::after {
            content: '';
            position: absolute;
            bottom: -24px;
            left: 0;
            right: 0;
            height: 24px;
            background: var(--white);
            border-top-left-radius: 24px;
            border-top-right-radius: 24px;
            z-index: 1;
        }

        .about-header h1 {
            font-size: 20px;
            margin-bottom: 10px;
            font-weight: 600;
            position: relative;
        }

        .about-header p {
            opacity: 0.9;
            font-size: 14px;
            margin: 0 auto;
            position: relative;
        }

        .back-btn {
            position: absolute;
            top: 20px;
            left: 20px;
            background: rgba(255,255,255,0.2);
            border: none;
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(5px);
            transition: var(--transition);
            z-index: 2;
        }

        .back-btn:hover {
            background: rgba(255,255,255,0.3);
        }

        /* Content */
        .about-content {
            padding: 30px 15px 15px;
            position: relative;
            z-index: 1;
            margin-top: -10px;
        }

        .section {
            margin-bottom: 30px;
        }

        .section-title {
            color: var(--primary-color);
            font-size: 18px;
            margin-bottom: 15px;
            padding-bottom: 8px;
            border-bottom: 2px solid var(--bg-light);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .section p {
            margin-bottom: 15px;
            font-size: 14px;
            color: var(--text-dark);
        }

        /* Visi Misi */
        .vision-mission {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 20px;
        }

        .card {
            background: var(--white);
            border-radius: 12px;
            padding: 16px;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            border: 1px solid rgba(0,0,0,0.05);
        }

        .card:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .card h3 {
            color: var(--secondary-color);
            font-size: 16px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .card ul {
            padding-left: 20px;
        }

        .card li {
            margin-bottom: 8px;
            font-size: 13px;
        }

        /* Team */
        .team-grid {
            display: grid;
            gap: 15px;
            grid-template-columns: 1fr;
            margin-top: 20px;
        }

        .team-member {
            text-align: center;
            background: var(--white);
            border-radius: 12px;
            padding: 20px 15px;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            border: 1px solid rgba(0,0,0,0.05);
        }

        .team-member:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .member-photo {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 10px;
            border: 3px solid var(--bg-light);
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            font-weight: bold;
        }

        .member-name {
            font-weight: 600;
            margin-bottom: 5px;
            color: var(--text-dark);
            font-size: 15px;
        }

        .member-position {
            color: var(--secondary-color);
            font-size: 13px;
            margin-bottom: 10px;
        }

        .member-bio {
            font-size: 12px;
            color: var(--text-light);
        }

        /* List */
        ul {
            padding-left: 20px;
            margin-bottom: 15px;
        }

        li {
            font-size: 14px;
            margin-bottom: 8px;
            color: var(--text-dark);
        }

        /* Responsive */
        @media (min-width: 500px) {
            .container {
                max-width: 500px;
                margin: 0 auto;
                box-shadow: var(--shadow-lg);
                min-height: 100vh;
            }
            
            .about-content {
                padding: 30px 20px 20px;
            }
            
            .vision-mission {
                flex-direction: row;
                gap: 15px;
            }
            
            .team-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (min-width: 768px) {
            .team-grid {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="about-header">
            <button class="back-btn" onclick="window.history.back()">
                <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/>
                </svg>
            </button>
            <h1>Tentang Perusahaan Kami</h1>
            <p>Membangun solusi inovatif untuk masa depan yang lebih baik sejak 2010</p>
        </div>

        <!-- Content -->
        <div class="about-content">
            <!-- Tentang Perusahaan -->
            <div class="section">
                <h2 class="section-title">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z"/>
                    </svg>
                    Tentang Kami
                </h2>
                <p>Kami adalah perusahaan teknologi yang berfokus pada pengembangan solusi digital inovatif untuk memecahkan masalah kompleks di berbagai industri. Didirikan pada tahun 2010, kami telah tumbuh dari tim kecil menjadi organisasi dengan lebih dari 100 profesional berbakat yang berdedikasi untuk menciptakan produk berkualitas tinggi.</p>
                <p>Dengan kantor pusat di Jakarta dan cabang di beberapa kota besar di Indonesia, kami melayani klien dari berbagai sektor termasuk keuangan, kesehatan, pendidikan, dan e-commerce. Pendekatan kami yang berpusat pada pengguna dan komitmen terhadap keunggulan teknis telah menghasilkan berbagai penghargaan industri.</p>
            </div>

            <!-- Visi Misi -->
            <div class="section">
                <h2 class="section-title">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4 8-8z"/>
                    </svg>
                    Visi & Misi
                </h2>
                <div class="vision-mission">
                    <div class="card">
                        <h3>
                            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z"/>
                            </svg>
                            Visi
                        </h3>
                        <p>Menjadi pemimpin global dalam inovasi teknologi yang memberdayakan masyarakat dan bisnis untuk mencapai potensi penuh mereka.</p>
                    </div>
                    <div class="card">
                        <h3>
                            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm2 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                            </svg>
                            Misi
                        </h3>
                        <ul>
                            <li>Mengembangkan solusi teknologi yang mudah digunakan dan berdampak besar</li>
                            <li>Memberikan layanan terbaik dengan standar kualitas tertinggi</li>
                            <li>Menciptakan lingkungan kerja yang mendorong inovasi dan kolaborasi</li>
                            <li>Berkontribusi positif bagi masyarakat melalui teknologi</li>
                            <li>Membangun kemitraan jangka panjang dengan klien dan mitra</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Tim Kami -->
            <div class="section">
                <h2 class="section-title">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                    </svg>
                    Tim Kami
                </h2>
                <p>Kekuatan kami terletak pada tim yang beragam dan berbakat yang terdiri dari para ahli di bidangnya masing-masing. Berikut beberapa anggota kunci tim kami:</p>
                
                <div class="team-grid">
                    <div class="team-member">
                        <div class="member-photo">JD</div>
                        <h3 class="member-name">John Doe</h3>
                        <p class="member-position">CEO & Pendiri</p>
                        <p class="member-bio">Memimpin strategi perusahaan dengan pengalaman 15 tahun di industri teknologi.</p>
                    </div>
                    <div class="team-member">
                        <div class="member-photo">AS</div>
                        <h3 class="member-name">Alice Smith</h3>
                        <p class="member-position">CTO</p>
                        <p class="member-bio">Ahli arsitektur sistem dengan spesialisasi dalam solusi skalabel.</p>
                    </div>
                    <div class="team-member">
                        <div class="member-photo">BW</div>
                        <h3 class="member-name">Bob Wilson</h3>
                        <p class="member-position">Kepala Produk</p>
                        <p class="member-bio">Fokus pada pengalaman pengguna dan nilai bisnis produk.</p>
                    </div>
                    <div class="team-member">
                        <div class="member-photo">CJ</div>
                        <h3 class="member-name">Clara Johnson</h3>
                        <p class="member-position">Kepala Pemasaran</p>
                        <p class="member-bio">Membangun merek dan strategi pertumbuhan perusahaan.</p>
                    </div>
                </div>
            </div>

            <!-- Pencapaian -->
            <div class="section">
                <h2 class="section-title">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 5h-2V3H7v2H5c-1.1 0-2 .9-2 2v1c0 2.55 1.92 4.63 4.39 4.94.63 1.5 1.98 2.63 3.61 2.96V19H7v2h10v-2h-4v-3.1c1.63-.33 2.98-1.46 3.61-2.96C19.08 12.63 21 10.55 21 8V7c0-1.1-.9-2-2-2zM5 8V7h2v3.82C5.84 10.4 5 9.3 5 8zm14 0c0 1.3-.84 2.4-2 2.82V7h2v1z"/>
                    </svg>
                    Pencapaian
                </h2>
                <p>Beberapa pencapaian yang membanggakan dari perjalanan kami:</p>
                <ul>
                    <li>Penghargaan "Inovasi Teknologi Terbaik" 2022</li>
                    <li>Diakui sebagai salah satu "Startup Tercepat Berkembang" oleh Forbes Asia</li>
                    <li>Lebih dari 1 juta pengguna aktif produk kami</li>
                    <li>Partner resmi dari 5 perusahaan Fortune 500</li>
                    <li>Program CSR yang telah menjangkau 50+ sekolah di seluruh Indonesia</li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        // Fungsi untuk kembali ke halaman sebelumnya
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>