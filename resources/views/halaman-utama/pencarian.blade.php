<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian - SkyBooking</title>
    <link href="https://unpkg.com/lucide@latest/dist/lucide.min.css" rel="stylesheet">
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
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
        .main-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: var(--white);
            padding: 60px 20px 30px;
            position: relative;
            z-index: 10;
            border-bottom-left-radius: 24px;
            border-bottom-right-radius: 24px;
            box-shadow: var(--shadow-md);
        }

        .main-header::after {
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

        .header-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            position: relative;
            z-index: 2;
        }

        .back-btn {
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
        }

        .back-btn:hover {
            background: rgba(255,255,255,0.3);
        }

        .header-title {
            font-size: 20px;
            font-weight: 600;
            flex: 1;
            text-align: center;
        }

        .route-info {
            font-size: 12px;
            opacity: 0.9;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            margin-top: 8px;
        }

        .filter-btn {
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
        }

        .filter-btn:hover {
            background: rgba(255,255,255,0.3);
        }

        /* Flight Categories */
        .flight-categories {
            background: var(--white);
            padding: 20px 15px;
            border-bottom: 1px solid #e9ecef;
            position: sticky;
            top: 0;
            z-index: 99;
        }

        .category-tabs {
            display: flex;
            gap: 10px;
            overflow-x: auto;
            scrollbar-width: none;
            -ms-overflow-style: none;
            padding-bottom: 5px;
        }

        .category-tabs::-webkit-scrollbar {
            display: none;
        }

        .category-tab {
            min-width: 100px;
            padding: 10px 15px;
            border: 2px solid #e9ecef;
            border-radius: 25px;
            text-align: center;
            cursor: pointer;
            transition: var(--transition);
            font-size: 14px;
            font-weight: 500;
            white-space: nowrap;
            position: relative;
            margin-top: 10px
        }

        .category-tab.active {
            border-color: var(--primary-color);
            background: var(--primary-color);
            color: white;
        }

        .category-tab .badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background: var(--accent-color);
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            font-size: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
        }

        /* Sort Bar */
        .sort-bar {
            background: var(--white);
            padding: 15px;
            border-bottom: 1px solid #e9ecef;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
        }

        .results-count {
            font-size: 14px;
            color: var(--text-light);
        }

        .sort-options {
            display: flex;
            gap: 8px;
        }

        .sort-btn {
            padding: 8px 12px;
            border: 1px solid #e9ecef;
            border-radius: 20px;
            background: white;
            cursor: pointer;
            font-size: 12px;
            transition: var(--transition);
            white-space: nowrap;
        }

        .sort-btn.active {
            background: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }

        /* Flight Results */
        .flight-results {
            padding: 15px;
            padding-bottom: 100px;
        }

        .flight-card {
            background: var(--white);
            border-radius: 15px;
            padding: 16px;
            margin-bottom: 15px;
            box-shadow: var(--shadow-sm);
            border: 1px solid rgba(0,0,0,0.05);
            transition: var(--transition);
            cursor: pointer;
        }

        .flight-card:hover {
            box-shadow: var(--shadow-md);
            transform: translateY(-2px);
        }

        .flight-card.selected {
            border: 2px solid var(--primary-color);
            background: rgba(139, 0, 0, 0.03);
        }

        .flight-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .airline-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .airline-logo {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 14px;
        }

        .airline-details h3 {
            font-size: 16px;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 2px;
        }

        .flight-number {
            font-size: 12px;
            color: var(--text-light);
        }

        .flight-type {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .dedicated {
            background: #d4edda;
            color: #155724;
        }

        .shared {
            background: #fff3cd;
            color: #856404;
        }

        .share-flight {
            background: #cce5ff;
            color: #004085;
        }

        .flight-route {
            display: flex;
            align-items: center;
            margin: 15px 0;
        }

        .departure, .arrival {
            flex: 1;
        }

        .time {
            font-size: 18px;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 4px;
        }

        .city {
            font-size: 14px;
            color: var(--text-light);
            margin-bottom: 2px;
        }

        .airport {
            font-size: 12px;
            color: #adb5bd;
        }

        .flight-path {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 10px;
        }

        .duration {
            font-size: 12px;
            color: var(--text-light);
            margin-bottom: 8px;
        }

        .path-line {
            width: 100%;
            height: 2px;
            background: #e9ecef;
            position: relative;
            border-radius: 1px;
        }

        .stops {
            font-size: 11px;
            color: var(--primary-color);
            margin-top: 4px;
            font-weight: 500;
        }

        .flight-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 15px;
            border-top: 1px solid #f8f9fa;
        }

        .facilities {
            display: flex;
            gap: 8px;
        }

        .facility-icon {
            width: 24px;
            height: 24px;
            background: #f8f9fa;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
        }

        .available {
            background: #d4edda;
            color: #155724;
        }

        .unavailable {
            background: #f8d7da;
            color: #721c24;
        }

        .price-info {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }

        .price {
            font-size: 18px;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 2px;
        }

        .price-per {
            font-size: 11px;
            color: var(--text-light);
        }

        .price-calculation {
            font-size: 11px;
            color: var(--text-light);
            margin-top: 5px;
            text-align: right;
        }

        /* Bottom Action */
        .bottom-action {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            background: var(--white);
            padding: 15px;
            border-top: 1px solid #e9ecef;
            box-shadow: 0 -5px 15px rgba(0,0,0,0.1);
            z-index: 100;
            box-sizing: border-box;
        }

        .selected-flight {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .selected-info {
            font-size: 14px;
            color: var(--text-light);
        }

        .selected-price {
            font-size: 18px;
            font-weight: 700;
            color: var(--primary-color);
        }

        .continue-btn {
            width: calc(100% - 30px);
            max-width: 500px;
            display: block;
            margin: 0 auto;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            padding: 15px;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .continue-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(139,0,0,0.3);
        }

        .continue-btn:disabled {
            background: #6c757d;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        /* Loading Animation */
        .loading-card {
            background: var(--white);
            border-radius: 15px;
            padding: 16px;
            margin-bottom: 15px;
            box-shadow: var(--shadow-sm);
        }

        .skeleton {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
            border-radius: 4px;
        }

        @keyframes loading {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }

        .skeleton-line {
            height: 12px;
            margin-bottom: 8px;
        }

        .skeleton-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        /* Responsive Adjustments */
        @media (min-width: 500px) {
        .container {
            max-width: 500px;
            margin: 0 auto;
            box-shadow: var(--shadow-lg);
            position: relative;
        }
        
        .flight-results {
            padding: 20px;
            padding-bottom: 100px;
        }
        
        .flight-card {
            padding: 18px;
        }
        
        .bottom-action {
            left: 50%;
            transform: translateX(-50%);
            max-width: 500px;
            border-radius: 25px 25px 0 0;
        }
    }

    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="main-header">
            <div class="header-top">
                <button class="back-btn" onclick="goBack()">
                    <i data-lucide="arrow-left"></i>
                </button>
                <div class="header-title">
                    Pilih Penerbangan
                    <div class="route-info">
                        <span>Jakarta (CGK)</span>
                        <i data-lucide="arrow-right-left" width="12" height="12"></i>
                        <span>Bali (DPS)</span>
                        <span>• 25 Des 2024</span>
                    </div>
                </div>
                <button class="filter-btn" onclick="toggleFilter()">
                    <i data-lucide="filter"></i>
                </button>
            </div>
        </div>

        <!-- Flight Categories -->
        <div class="flight-categories">
            <div class="category-tabs">
                <div class="category-tab active" data-category="all">
                    Semua
                    <span class="badge">24</span>
                </div>
                <div class="category-tab" data-category="dedicated">
                    Dedicated
                    <span class="badge">8</span>
                </div>
                <div class="category-tab" data-category="shared">
                    Shared
                    <span class="badge">12</span>
                </div>
            </div>
        </div>

        <!-- Sort Bar -->
        <div class="sort-bar">
            <div class="results-count">24 penerbangan ditemukan</div>
            <div class="sort-options">
                <button class="sort-btn active" data-sort="price">Harga</button>
                <button class="sort-btn" data-sort="duration">Durasi</button>
                <button class="sort-btn" data-sort="departure">Keberangkatan</button>
            </div>
        </div>

        <!-- Flight Results -->
        <div class="flight-results" id="flightResults">
            <!-- Flight Card 1 - Dedicated -->
            <div class="flight-card" data-category="dedicated" data-base-price="12500000" data-passengers="10" onclick="selectFlight(this)">
                <div class="flight-header">
                    <div class="airline-info">
                        <div class="airline-logo">GA</div>
                        <div class="airline-details">
                            <h3>Garuda Indonesia</h3>
                            <div class="flight-number">GA 410</div>
                        </div>
                    </div>
                    <div class="flight-type dedicated">Dedicated</div>
                </div>

                <div class="flight-route">
                    <div class="departure">
                        <div class="time">07:30</div>
                        <div class="city">Jakarta</div>
                        <div class="airport">CGK Terminal 3</div>
                    </div>
                    <div class="flight-path">
                        <div class="duration">2j 15m</div>
                        <div class="path-line"></div>
                        <div class="stops">Langsung</div>
                    </div>
                    <div class="arrival">
                        <div class="time">10:45</div>
                        <div class="city">Bali</div>
                        <div class="airport">DPS Terminal 1</div>
                    </div>
                </div>

                <div class="flight-footer">
                    <div class="facilities">
                        <div class="facility-icon available" title="Bagasi 20kg">
                            <i data-lucide="luggage" width="12" height="12"></i>
                        </div>
                        <div class="facility-icon available" title="Makanan">
                            <i data-lucide="utensils" width="12" height="12"></i>
                        </div>
                        <div class="facility-icon available" title="WiFi">
                            <i data-lucide="wifi" width="12" height="12"></i>
                        </div>
                    </div>
                    <div class="price-info">
                        <div class="price">Rp 1.250.000</div>
                        <div class="price-per">/orang</div>
                        <div class="price-calculation">Dedicated: Harga input Ron cost</div>
                    </div>
                </div>
            </div>

            <!-- Flight Card 2 - Shared -->
            <div class="flight-card" data-category="shared" data-base-price="9800000" data-passengers="10" onclick="selectFlight(this)">
                <div class="flight-header">
                    <div class="airline-info">
                        <div class="airline-logo">LN</div>
                        <div class="airline-details">
                            <h3>Lion Air</h3>
                            <div class="flight-number">JT 930</div>
                        </div>
                    </div>
                    <div class="flight-type shared">Shared</div>
                </div>

                <div class="flight-route">
                    <div class="departure">
                        <div class="time">09:15</div>
                        <div class="city">Jakarta</div>
                        <div class="airport">CGK Terminal 1</div>
                    </div>
                    <div class="flight-path">
                        <div class="duration">2j 20m</div>
                        <div class="path-line"></div>
                        <div class="stops">Langsung</div>
                    </div>
                    <div class="arrival">
                        <div class="time">12:35</div>
                        <div class="city">Bali</div>
                        <div class="airport">DPS Terminal 1</div>
                    </div>
                </div>

                <div class="flight-footer">
                    <div class="facilities">
                        <div class="facility-icon available" title="Bagasi 15kg">
                            <i data-lucide="luggage" width="12" height="12"></i>
                        </div>
                        <div class="facility-icon unavailable" title="Tidak ada makanan">
                            <i data-lucide="utensils-crossed" width="12" height="12"></i>
                        </div>
                        <div class="facility-icon unavailable" title="Tidak ada WiFi">
                            <i data-lucide="wifi-off" width="12" height="12"></i>
                        </div>
                    </div>
                    <div class="price-info">
                        <div class="price">Rp 980.000</div>
                        <div class="price-per">/orang</div>
                        <div class="price-calculation">Shared: Ron cost / 10 penumpang</div>
                    </div>
                </div>
            </div>

            <!-- More flight cards would be added here dynamically -->
        </div>

        <!-- Bottom Action -->
        <div class="bottom-action">
            <div class="selected-flight" id="selectedInfo" style="display: none;">
                <div class="selected-info">1 penerbangan dipilih</div>
                <div class="selected-price" id="selectedPrice">Rp 0</div>
            </div>
            <button class="continue-btn" id="continueBtn" disabled>Lanjutkan</button>
        </div>
    </div>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        // Initialize Lucide icons
        lucide.createIcons();
        
        // Fungsi untuk kembali ke halaman sebelumnya
        function goBack() {
            window.history.back();
        }

        // Fungsi untuk toggle filter (placeholder)
        function toggleFilter() {
            alert('Fitur filter akan segera hadir!');
        }

        // Fungsi untuk memilih penerbangan
        let selectedFlight = null;
        
        function selectFlight(flightCard) {
            // Hapus seleksi sebelumnya
            document.querySelectorAll('.flight-card').forEach(card => {
                card.classList.remove('selected');
            });
            
            // Tambahkan seleksi baru
            flightCard.classList.add('selected');
            selectedFlight = flightCard;
            
            // Update informasi yang dipilih
            const selectedInfo = document.getElementById('selectedInfo');
            const selectedPrice = document.getElementById('selectedPrice');
            const continueBtn = document.getElementById('continueBtn');
            
            selectedInfo.style.display = 'flex';
            selectedPrice.textContent = flightCard.querySelector('.price').textContent;
            continueBtn.disabled = false;
            
            // Scroll ke bawah untuk melihat tombol lanjutkan
            document.querySelector('.bottom-action').scrollIntoView({ behavior: 'smooth' });
        }

        // Fungsi untuk sorting penerbangan
        document.querySelectorAll('.sort-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                // Hapus active class dari semua tombol
                document.querySelectorAll('.sort-btn').forEach(b => b.classList.remove('active'));
                // Tambahkan active class ke tombol yang diklik
                this.classList.add('active');
                
                const sortBy = this.dataset.sort;
                const flightResults = document.getElementById('flightResults');
                const flights = Array.from(flightResults.querySelectorAll('.flight-card'));
                
                flights.sort((a, b) => {
                    if (sortBy === 'price') {
                        const priceA = parseInt(a.querySelector('.price').textContent.replace(/\D/g, ''));
                        const priceB = parseInt(b.querySelector('.price').textContent.replace(/\D/g, ''));
                        return priceA - priceB;
                    } else if (sortBy === 'duration') {
                        // Logika sorting berdasarkan durasi (dalam menit)
                        const durationA = getDurationInMinutes(a.querySelector('.duration').textContent);
                        const durationB = getDurationInMinutes(b.querySelector('.duration').textContent);
                        return durationA - durationB;
                    } else if (sortBy === 'departure') {
                        // Logika sorting berdasarkan waktu keberangkatan
                        const timeA = getTimeInMinutes(a.querySelector('.departure .time').textContent);
                        const timeB = getTimeInMinutes(b.querySelector('.departure .time').textContent);
                        return timeA - timeB;
                    }
                    return 0;
                });
                
                // Hapus semua penerbangan dan tambahkan kembali yang sudah diurutkan
                flightResults.innerHTML = '';
                flights.forEach(flight => flightResults.appendChild(flight));
            });
        });

        // Fungsi bantu untuk konversi durasi ke menit
        function getDurationInMinutes(durationText) {
            const [hours, minutes] = durationText.split('j').map(part => 
                parseInt(part.replace('m', '').trim())
            );
            return hours * 60 + (minutes || 0);
        }

        // Fungsi bantu untuk konversi waktu ke menit
        function getTimeInMinutes(timeText) {
            const [hours, minutes] = timeText.split(':').map(Number);
            return hours * 60 + minutes;
        }

        // Filter berdasarkan kategori
        document.querySelectorAll('.category-tab').forEach(tab => {
            tab.addEventListener('click', function() {
                // Hapus active class dari semua tab
                document.querySelectorAll('.category-tab').forEach(t => t.classList.remove('active'));
                // Tambahkan active class ke tab yang diklik
                this.classList.add('active');
                
                const category = this.dataset.category;
                const flights = document.querySelectorAll('.flight-card');
                
                flights.forEach(flight => {
                    if (category === 'all' || flight.dataset.category === category) {
                        flight.style.display = 'block';
                    } else {
                        flight.style.display = 'none';
                    }
                });
                
                // Update jumlah hasil pencarian
                const visibleCount = document.querySelectorAll('.flight-card[style="display: block"]').length;
                document.querySelector('.results-count').textContent = `${visibleCount} penerbangan ditemukan`;
            });
        });

        // Event listener untuk tombol lanjutkan
        document.getElementById('continueBtn').addEventListener('click', function() {
            if (selectedFlight) {
                // Redirect ke halaman booking
                window.location.href = '/booking';
            }
        });

        // Simulasikan scroll untuk memuat lebih banyak penerbangan
        window.addEventListener('scroll', function() {
            if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight - 500) {
                // Cegah multiple loading
                if (!document.querySelector('.loading-card')) {
                    showLoadingAnimation();
                }
            }
        });

        // Animasi loading untuk penerbangan tambahan
        function showLoadingAnimation() {
            const loadingCard = document.createElement('div');
            loadingCard.className = 'loading-card';
            
            // Buat elemen skeleton loading
            loadingCard.innerHTML = `
                <div class="skeleton skeleton-line" style="width: 60%; margin-bottom: 15px;"></div>
                <div class="skeleton skeleton-line" style="width: 80%;"></div>
                <div class="skeleton skeleton-line" style="width: 70%; margin-top: 20px;"></div>
                <div style="display: flex; justify-content: space-between; margin-top: 20px;">
                    <div class="skeleton skeleton-line" style="width: 30%;"></div>
                    <div class="skeleton skeleton-circle"></div>
                    <div class="skeleton skeleton-line" style="width: 30%;"></div>
                </div>
                <div class="skeleton skeleton-line" style="width: 50%; margin-top: 20px;"></div>
            `;
            
            // Tambahkan ke container flight results
            document.getElementById('flightResults').appendChild(loadingCard);
            
            // Simulasikan loading data
            setTimeout(() => {
                loadingCard.remove();
                // Tambahkan flight card baru setelah loading selesai
                addAdditionalFlights();
            }, 1500);
        }

        // Fungsi untuk menambahkan penerbangan tambahan (simulasi)
        function addAdditionalFlights() {
            const flightResults = document.getElementById('flightResults');
            
            // Flight Card 3 - Dedicated
            const newFlight1 = document.createElement('div');
            newFlight1.className = 'flight-card';
            newFlight1.setAttribute('data-category', 'dedicated');
            newFlight1.setAttribute('data-base-price', '15000000');
            newFlight1.setAttribute('data-passengers', '8');
            newFlight1.onclick = function() { selectFlight(this); };
            
            newFlight1.innerHTML = `
                <div class="flight-header">
                    <div class="airline-info">
                        <div class="airline-logo">CA</div>
                        <div class="airline-details">
                            <h3>Citilink</h3>
                            <div class="flight-number">QG 812</div>
                        </div>
                    </div>
                    <div class="flight-type dedicated">Dedicated</div>
                </div>

                <div class="flight-route">
                    <div class="departure">
                        <div class="time">11:00</div>
                        <div class="city">Jakarta</div>
                        <div class="airport">CGK Terminal 2</div>
                    </div>
                    <div class="flight-path">
                        <div class="duration">2j 10m</div>
                        <div class="path-line"></div>
                        <div class="stops">Langsung</div>
                    </div>
                    <div class="arrival">
                        <div class="time">13:10</div>
                        <div class="city">Bali</div>
                        <div class="airport">DPS Terminal 1</div>
                    </div>
                </div>

                <div class="flight-footer">
                    <div class="facilities">
                        <div class="facility-icon available" title="Bagasi 25kg">
                            <i data-lucide="luggage" width="12" height="12"></i>
                        </div>
                        <div class="facility-icon available" title="Makanan">
                            <i data-lucide="utensils" width="12" height="12"></i>
                        </div>
                        <div class="facility-icon available" title="WiFi">
                            <i data-lucide="wifi" width="12" height="12"></i>
                        </div>
                    </div>
                    <div class="price-info">
                        <div class="price">Rp 1.500.000</div>
                        <div class="price-per">/orang</div>
                        <div class="price-calculation">Dedicated: Harga input Ron cost</div>
                    </div>
                </div>
            `;
            
            flightResults.appendChild(newFlight1);
            
            // Initialize Lucide icons for the new elements
            lucide.createIcons();
            
            // Update jumlah hasil pencarian
            const visibleCount = document.querySelectorAll('.flight-card').length;
            document.querySelector('.results-count').textContent = `${visibleCount} penerbangan ditemukan`;
        }
    </script>
</body>
</html>