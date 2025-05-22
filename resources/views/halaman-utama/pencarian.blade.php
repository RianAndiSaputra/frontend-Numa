<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian - SkyBooking</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            min-height: 100vh;
        }

        .container {
            max-width: 375px;
            margin: 0 auto;
            background: white;
            min-height: 100vh;
            position: relative;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, #8B0000, #A0001C);
            color: white;
            padding: 50px 20px 20px;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-top {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
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
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .back-btn:hover {
            background: rgba(255,255,255,0.3);
        }

        .header-title {
            flex: 1;
        }

        .header-title h1 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 2px;
        }

        .route-info {
            font-size: 12px;
            opacity: 0.9;
            display: flex;
            align-items: center;
            gap: 8px;
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
            backdrop-filter: blur(10px);
        }

        /* Flight Categories */
        .flight-categories {
            background: white;
            padding: 20px;
            border-bottom: 1px solid #e9ecef;
            position: sticky;
            top: 90px;
            z-index: 99;
        }

        .category-tabs {
            display: flex;
            gap: 10px;
            overflow-x: auto;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .category-tabs::-webkit-scrollbar {
            display: none;
        }

        .category-tab {
            min-width: 120px;
            padding: 12px 20px;
            border: 2px solid #e9ecef;
            border-radius: 25px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 14px;
            font-weight: 500;
            white-space: nowrap;
            position: relative;
        }

        .category-tab.active {
            border-color: #8B0000;
            background: #8B0000;
            color: white;
        }

        .category-tab .badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background: #ff4757;
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
            background: white;
            padding: 15px 20px;
            border-bottom: 1px solid #e9ecef;
            display: flex;
            justify-content: between;
            align-items: center;
            gap: 15px;
        }

        .results-count {
            font-size: 14px;
            color: #6c757d;
            flex: 1;
        }

        .sort-options {
            display: flex;
            gap: 10px;
        }

        .sort-btn {
            padding: 8px 16px;
            border: 1px solid #e9ecef;
            border-radius: 20px;
            background: white;
            cursor: pointer;
            font-size: 12px;
            transition: all 0.3s ease;
        }

        .sort-btn.active {
            background: #8B0000;
            color: white;
            border-color: #8B0000;
        }

        /* Flight Results */
        .flight-results {
            padding: 20px;
            padding-bottom: 100px;
        }

        .flight-card {
            background: white;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            border: 2px solid transparent;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .flight-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
            border-color: #8B0000;
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
            width: 45px;
            height: 45px;
            background: linear-gradient(135deg, #8B0000, #A0001C);
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
            color: #2c3e50;
            margin-bottom: 2px;
        }

        .flight-number {
            font-size: 12px;
            color: #6c757d;
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
            margin: 20px 0;
        }

        .departure, .arrival {
            flex: 1;
        }

        .time {
            font-size: 20px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 4px;
        }

        .city {
            font-size: 14px;
            color: #6c757d;
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
            margin: 0 20px;
        }

        .duration {
            font-size: 12px;
            color: #6c757d;
            margin-bottom: 8px;
        }

        .path-line {
            width: 100%;
            height: 2px;
            background: #e9ecef;
            position: relative;
            border-radius: 1px;
        }

        .path-line::after {
            content: '✈️';
            position: absolute;
            top: -8px;
            right: -8px;
            font-size: 12px;
        }

        .stops {
            font-size: 11px;
            color: #8B0000;
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

        .price-info {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }

        .price {
            font-size: 18px;
            font-weight: 700;
            color: #8B0000;
            margin-bottom: 2px;
        }

        .price-per {
            font-size: 11px;
            color: #6c757d;
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

        /* Loading Animation */
        .loading-card {
            background: white;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
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
            width: 45px;
            height: 45px;
            border-radius: 50%;
        }

        /* Bottom Button */
        .bottom-action {
            position: fixed;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 375px;
            background: white;
            padding: 20px;
            border-top: 1px solid #e9ecef;
            border-radius: 25px 25px 0 0;
        }

        .selected-flight {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .selected-info {
            font-size: 14px;
            color: #6c757d;
        }

        .selected-price {
            font-size: 18px;
            font-weight: 700;
            color: #8B0000;
        }

        .continue-btn {
            width: 100%;
            background: linear-gradient(135deg, #8B0000, #A0001C);
            color: white;
            border: none;
            padding: 18px;
            border-radius: 15px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
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

        @media (max-width: 375px) {
            .container {
                max-width: 100%;
            }
            
            .bottom-action {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <div class="header-top">
                <button class="back-btn" onclick="goBack()">
                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/>
                    </svg>
                </button>
                <div class="header-title">
                    <h1>Pilih Penerbangan</h1>
                    <div class="route-info">
                        <span>Jakarta (CGK)</span>
                        <svg width="12" height="12" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13.5 21L12 19.5 10.5 21 7.5 18 6 19.5 4.5 18 7.5 15 6 13.5 7.5 12 10.5 15 12 13.5 13.5 15 16.5 12 18 13.5 16.5 15 19.5 18 18 19.5 16.5 21 13.5 18z"/>
                        </svg>
                        <span>Bali (DPS)</span>
                        <span>• 25 Des 2024</span>
                    </div>
                </div>
                <button class="filter-btn" onclick="toggleFilter()">
                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z"/>
                    </svg>
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
                <div class="category-tab" data-category="share-flight">
                    Share Flight
                    <span class="badge">4</span>
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
            <div class="flight-card" data-category="dedicated" data-price="1250000" onclick="selectFlight(this)">
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
                            <svg width="12" height="12" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zM9.5 18H8V9h1.5v9zm3.25 0h-1.5V9h1.5v9zm3.25 0H14V9h1.5v9zM11 6V4h2v2h-2z"/>
                            </svg>
                        </div>
                        <div class="facility-icon available" title="Makanan">
                            <svg width="12" height="12" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8.1 13.34l2.83-2.83L3.91 3.5c-.78-.78-2.05-.78-2.83 0-.78.78-.78 2.05 0 2.83l6.02 7.01zm6.78-1.81c1.53.71 3.68.21 5.27-1.38 1.91-1.91 2.28-4.65.81-6.12-1.46-1.46-4.2-1.1-6.12.81-1.59 1.59-2.09 3.74-1.38 5.27L3.7 19.87l1.41 1.41L12 14.41l6.88 6.88 1.41-1.41L13.41 13l1.47-1.47z"/>
                            </svg>
                        </div>
                        <div class="facility-icon available" title="WiFi">
                            <svg width="12" height="12" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M1 9l2 2c4.97-4.97 13.03-4.97 18 0l2-2C16.93 2.93 7.07 2.93 1 9zm8 8l3 3 3-3c-1.65-1.66-4.34-1.66-6 0zm-4-4l2 2c2.76-2.76 7.24-2.76 10 0l2-2C15.14 9.14 8.87 9.14 5 13z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="price-info">
                        <div class="price">Rp 1.250.000</div>
                        <div class="price-per">/orang</div>
                    </div>
                </div>
            </div>

            <!-- Flight Card 2 - Shared -->
            <div class="flight-card" data-category="shared" data-price="980000" onclick="selectFlight(this)">
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
                            <svg width="12" height="12" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zM9.5 18H8V9h1.5v9zm3.25 0h-1.5V9h1.5v9zm3.25 0H14V9h1.5v9zM11 6V4h2v2h-2z"/>
                            </svg>
                        </div>
                        <div class="facility-icon unavailable" title="Tidak ada makanan">
                            <svg width="12" height="12" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8.1 13.34l2.83-2.83L3.91 3.5c-.78-.78-2.05-.78-2.83 0-.78.78-.78 2.05 0 2.83l6.02 7.01zm6.78-1.81c1.53.71 3.68.21 5.27-1.38 1.91-1.91 2.28-4.65.81-6.12-1.46-1.46-4.2-1.1-6.12.81-1.59 1.59-2.09 3.74-1.38 5.27L3.7 19.87l1.41 1.41L12 14.41l6.88 6.88 1.41-1.41L13.41 13l1.47-1.47z"/>
                            </svg>
                        </div>
                        <div class="facility-icon unavailable" title="Tidak ada WiFi">
                            <svg width="12" height="12" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M1 9l2 2c4.97-4.97 13.03-4.97 18 0l2-2C16.93 2.93 7.07 2.93 1 9zm8 8l3 3 3-3c-1.65-1.66-4.34-1.66-6 0zm-4-4l2 2c2.76-2.76 7.24-2.76 10 0l2-2C15.14 9.14 8.87 9.14 5 13z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="price-info">
                        <div class="price">Rp 980.000</div>
                        <div class="price-per">/orang</div>
                    </div>
                </div>
            </div>

            <!-- Flight Card 3 - Share Flight -->
            <div class="flight-card" data-category="share-flight" data-price="750000" onclick="selectFlight(this)">
                <div class="flight-header">
                    <div class="airline-info">
                        <div class="airline-logo">AA</div>
                        <div class="airline-details">
                            <h3>AirAsia</h3>
                            <div class="flight-number">QZ 8399</div>
                        </div>
                    </div>
                    <div class="flight-type share-flight">Share Flight</div>
                </div>

                <div class="flight-route">
                    <div class="departure">
                        <div class="time">14:20</div>
                        <div class="city">Jakarta</div>
                        <div class="airport">CGK Terminal 2</div>
                    </div>
                    <div class="flight-path">
                        <div class="duration">2j 25m</div>
                        <div class="path-line"></div>
                        <div class="stops">Langsung</div>
                    </div>
                    <div class="arrival">
                        <div class="time">17:45</div>
                        <div class="city">Bali</div>
                        <div class="airport">DPS Terminal 1</div>
                    </div>
                </div>

                <div class="flight-footer">
                    <div class="facilities">
                        <div class="facility-icon available" title="Bagasi 7kg">
                            <svg width="12" height="12" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zM9.5 18H8V9h1.5v9zm3.25 0h-1.5V9h1.5v9zm3.25 0H14V9h1.5v9zM11 6V4h2v2h-2z"/>
                            </svg>
                        </div>
                        <div class="facility-icon unavailable" title="Tidak ada makanan">
                            <svg width="12" height="12" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8.1 13.34l2.83-2.83L3.91 3.5c-.78-.78-2.05-.78-2.83 0-.78.78-.78 2.05 0 2.83l6.02 7.01zm6.78-1.81c1.53.71 3.68.21 5.27-1.38 1.91-1.91 2.28-4.65.81-6.12-1.46-1.46-4.2-1.1-6.12.81-1.59 1.59-2.09 3.74-1.38 5.27L3.7 19.87l1.41 1.41L12 14.41l6.88 6.88 1.41-1.41L13.41 13l1.47-1.47z"/>
                            </svg>
                        </div>
                        <div class="facility-icon unavailable" title="Tidak ada WiFi">
                            <svg width="12" height="12" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M1 9l2 2c4.97-4.97 13.03-4.97 18 0l2-2C16.93 2.93 7.07 2.93 1 9zm8 8l3 3 3-3c-1.65-1.66-4.34-1.66-6 0zm-4-4l2 2c2.76-2.76 7.24-2.76 10 0l2-2C15.14 9.14 8.87 9.14 5 13z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="price-info">
                        <div class="price">Rp 750.000</div>
                        <div class="price-per">/orang</div>
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

    <script>
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
            if (selectedFlight) {
                selectedFlight.style.borderColor = 'transparent';
            }
            
            // Tambahkan seleksi baru
            flightCard.style.borderColor = '#8B0000';
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
                        const priceA = parseInt(a.dataset.price);
                        const priceB = parseInt(b.dataset.price);
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

        // Animasi loading untuk penerbangan tambahan
        function showLoadingAnimation() {
            const loadingCard = document.createElement('div');
            loadingCard.className = 'loading-card';
            loadingCard.innerHTML = `
                <div class="skeleton skeleton-line" style="width: 60%"></div>
                <div class="skeleton skeleton-line" style="width: 30%"></div>
                <div style="display: flex; margin: 15px 0; justify-content: space-between;">
                    <div style="width: 30%">
                        <div class="skeleton skeleton-line" style="width: 80%; height: 20px; margin-bottom: 8px"></div>
                        <div class="skeleton skeleton-line" style="width: 60%"></div>
                    </div>
                    <div style="width: 30%">
                        <div class="skeleton skeleton-line" style="width: 100%; height: 2px; margin: 10px 0"></div>
                        <div class="skeleton skeleton-line" style="width: 80%; margin: 0 auto"></div>
                    </div>
                    <div style="width: 30%">
                        <div class="skeleton skeleton-line" style="width: 80%; height: 20px; margin-bottom: 8px"></div>
                        <div class="skeleton skeleton-line" style="width: 60%"></div>
                    </div>
                </div>
                <div style="display: flex; justify-content: space-between;">
                    <div style="display: flex; gap: 8px;">
                        <div class="skeleton skeleton-circle"></div>
                        <div class="skeleton skeleton-circle"></div>
                        <div class="skeleton skeleton-circle"></div>
                    </div>
                    <div style="width: 30%">
                        <div class="skeleton skeleton-line" style="width: 100%; height: 20px"></div>
                    </div>
                </div>
            `;
            
            document.getElementById('flightResults').appendChild(loadingCard);
            
            // Simulasikan loading data
            setTimeout(() => {
                loadingCard.remove();
                // Tambahkan penerbangan baru setelah loading selesai
                addMoreFlights();
            }, 1500);
        }

        // Fungsi untuk menambahkan lebih banyak penerbangan (simulasi)
        function addMoreFlights() {
            const flightResults = document.getElementById('flightResults');
            
            // Contoh penerbangan tambahan
            const newFlight = document.createElement('div');
            newFlight.className = 'flight-card';
            newFlight.setAttribute('data-category', 'shared');
            newFlight.setAttribute('data-price', '850000');
            newFlight.onclick = function() { selectFlight(this); };
            
            newFlight.innerHTML = `
                <div class="flight-header">
                    <div class="airline-info">
                        <div class="airline-logo">CA</div>
                        <div class="airline-details">
                            <h3>Citilink</h3>
                            <div class="flight-number">QG 812</div>
                        </div>
                    </div>
                    <div class="flight-type shared">Shared</div>
                </div>

                <div class="flight-route">
                    <div class="departure">
                        <div class="time">11:45</div>
                        <div class="city">Jakarta</div>
                        <div class="airport">CGK Terminal 2</div>
                    </div>
                    <div class="flight-path">
                        <div class="duration">2j 10m</div>
                        <div class="path-line"></div>
                        <div class="stops">Langsung</div>
                    </div>
                    <div class="arrival">
                        <div class="time">14:55</div>
                        <div class="city">Bali</div>
                        <div class="airport">DPS Terminal 1</div>
                    </div>
                </div>

                <div class="flight-footer">
                    <div class="facilities">
                        <div class="facility-icon available" title="Bagasi 15kg">
                            <svg width="12" height="12" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zM9.5 18H8V9h1.5v9zm3.25 0h-1.5V9h1.5v9zm3.25 0H14V9h1.5v9zM11 6V4h2v2h-2z"/>
                            </svg>
                        </div>
                        <div class="facility-icon unavailable" title="Tidak ada makanan">
                            <svg width="12" height="12" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8.1 13.34l2.83-2.83L3.91 3.5c-.78-.78-2.05-.78-2.83 0-.78.78-.78 2.05 0 2.83l6.02 7.01zm6.78-1.81c1.53.71 3.68.21 5.27-1.38 1.91-1.91 2.28-4.65.81-6.12-1.46-1.46-4.2-1.1-6.12.81-1.59 1.59-2.09 3.74-1.38 5.27L3.7 19.87l1.41 1.41L12 14.41l6.88 6.88 1.41-1.41L13.41 13l1.47-1.47z"/>
                            </svg>
                        </div>
                        <div class="facility-icon unavailable" title="Tidak ada WiFi">
                            <svg width="12" height="12" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M1 9l2 2c4.97-4.97 13.03-4.97 18 0l2-2C16.93 2.93 7.07 2.93 1 9zm8 8l3 3 3-3c-1.65-1.66-4.34-1.66-6 0zm-4-4l2 2c2.76-2.76 7.24-2.76 10 0l2-2C15.14 9.14 8.87 9.14 5 13z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="price-info">
                        <div class="price">Rp 850.000</div>
                        <div class="price-per">/orang</div>
                    </div>
                </div>
            `;
            
            flightResults.appendChild(newFlight);
            
            // Update jumlah hasil pencarian
            const visibleCount = document.querySelectorAll('.flight-card').length;
            document.querySelector('.results-count').textContent = `${visibleCount} penerbangan ditemukan`;
        }

        // Event listener untuk infinite scroll
        window.addEventListener('scroll', function() {
            if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight - 100) {
                // Cek apakah sudah ada loading animation untuk menghindari duplikasi
                if (!document.querySelector('.loading-card')) {
                    showLoadingAnimation();
                }
            }
        });

        // Event listener untuk tombol Lanjutkan
        document.getElementById('continueBtn').addEventListener('click', function() {
            if (!this.disabled) {
                window.location.href = '/booking';
            }
        });
    </script>
</body>
</html>
