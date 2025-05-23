<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>SkyBooking - Pesan Tiket Pesawat</title>
    <style>
        :root {
            --primary-color: #8B0000;
            --secondary-color: #A0001C;
            --accent-color: #FF6B6B;
            --text-dark: #2c3e50;
            --text-light: #6c757d;
            --bg-light: #f8f9fa;
            --bg-gray: #e9ecef;
            --white: #ffffff;
            --shadow: 0 5px 15px rgba(0,0,0,0.1);
            --shadow-hover: 0 8px 25px rgba(0,0,0,0.15);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, var(--bg-light) 0%, var(--bg-gray) 100%);
            min-height: 100vh;
            color: var(--text-dark);
            -webkit-font-smoothing: antialiased;
        }

        .container {
            max-width: 100%;
            width: 100%;
            margin: 0 auto;
            background: var(--white);
            min-height: 100vh;
            position: relative;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            overflow-x: hidden;
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: var(--white);
            padding: 50px 20px 30px;
            border-radius: 0 0 25px 25px;
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 200px;
            height: 200px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
        }

        .header-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .greeting {
            z-index: 1;
            position: relative;
        }

        .greeting h1 {
            font-size: clamp(22px, 5vw, 26px);
            font-weight: 800;
            margin-bottom: 5px;
            letter-spacing: -0.5px;
        }

        .greeting p {
            font-size: clamp(13px, 3vw, 15px);
            opacity: 0.9;
            font-weight: 500;
        }

        .profile-icon {
            width: 45px;
            height: 45px;
            background: rgba(255,255,255,0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(10px);
        }

        /* Search Form */
        .search-card {
            background: var(--white);
            margin: -20px 20px 30px;
            border-radius: 20px;
            padding: 20px;
            box-shadow: var(--shadow);
            z-index: 2;
            position: relative;
        }

        .trip-type {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .trip-option {
            flex: 1;
            padding: 12px;
            border: 2px solid var(--bg-gray);
            border-radius: 12px;
            text-align: center;
            cursor: pointer;
            transition: var(--transition);
            font-size: clamp(13px, 3vw, 15px);
            font-weight: 600;
        }

        .trip-option.active {
            border-color: var(--primary-color);
            background: var(--primary-color);
            color: var(--white);
        }

        .location-input {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
            position: relative;
        }

        .location-field {
            flex: 1;
            background: var(--bg-light);
            border: none;
            padding: 15px 15px 15px 40px;
            border-radius: 12px;
            font-size: clamp(14px, 3.5vw, 16px);
            outline: none;
            min-width: 0;
            font-weight: 500;
            position: relative;
        }

        .location-icon {
            position: absolute;
            left: 15px;
            color: var(--primary-color);
            z-index: 2;
        }

        .swap-btn {
            width: 40px;
            height: 40px;
            background: var(--primary-color);
            border: none;
            border-radius: 50%;
            color: var(--white);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
            flex-shrink: 0;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            z-index: 3;
        }

        .swap-btn:hover {
            transform: translateX(-50%) rotate(180deg);
        }

        .date-passenger {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .date-field, .passenger-field {
            flex: 1;
            background: var(--bg-light);
            border: none;
            padding: 15px;
            border-radius: 12px;
            font-size: clamp(14px, 3vw, 15px);
            outline: none;
            min-width: 0;
            font-weight: 500;
        }

        .search-btn {
            width: 100%;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: var(--white);
            border: none;
            padding: 16px;
            border-radius: 15px;
            font-size: clamp(15px, 3.5vw, 17px);
            font-weight: 700;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 15px rgba(139, 0, 0, 0.2);
        }

        .search-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(139,0,0,0.3);
        }

        /* Popular Routes */
        .popular-routes {
            padding: 0 20px 20px;
        }

        .section-title {
            font-size: clamp(17px, 4vw, 19px);
            font-weight: 800;
            margin-bottom: 15px;
            color: var(--text-dark);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .section-title svg {
            color: var(--primary-color);
        }

        .routes-container {
            display: flex;
            gap: 12px;
            overflow-x: auto;
            padding-bottom: 10px;
            scrollbar-width: none;
        }

        .routes-container::-webkit-scrollbar {
            display: none;
        }

        .route-card {
            background: var(--white);
            padding: 15px;
            border-radius: 12px;
            box-shadow: var(--shadow);
            cursor: pointer;
            transition: var(--transition);
            flex: 0 0 auto;
            width: 150px;
            border: 1px solid rgba(0,0,0,0.05);
        }

        .route-card:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-hover);
        }

        .route-title {
            font-size: clamp(13px, 3vw, 14px);
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 5px;
            white-space: nowrap;
        }

        .route-price {
            font-size: clamp(11px, 2.5vw, 12px);
            color: var(--text-light);
            font-weight: 600;
        }

        .route-price span {
            color: var(--accent-color);
            font-weight: 700;
        }

        /* Quick Actions */
        .quick-actions {
            padding: 0 20px 20px;
        }

        .action-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }

        .action-card {
            background: var(--white);
            padding: 12px;
            border-radius: 12px;
            text-align: center;
            box-shadow: var(--shadow);
            cursor: pointer;
            transition: var(--transition);
            border: 1px solid rgba(0,0,0,0.05);
        }

        .action-card:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-hover);
        }

        .action-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 50%;
            margin: 0 auto 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
        }

        .action-title {
            font-size: clamp(11px, 3vw, 12px);
            font-weight: 700;
            color: var(--text-dark);
        }

        /* Promotions */
        .promotions {
            padding: 0 20px 20px;
        }

        .promo-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
        }

        .promo-card {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: var(--white);
            padding: 15px;
            border-radius: 15px;
            position: relative;
            overflow: hidden;
            min-height: 120px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .promo-card:nth-child(3n+1) {
            background: linear-gradient(135deg, #2c3e50, #4a6491);
        }

        .promo-card:nth-child(3n+2) {
            background: linear-gradient(135deg, #8B0000, #A0001C);
        }

        .promo-card:nth-child(3n+3) {
            background: linear-gradient(135deg, #006400, #228B22);
        }

        .promo-card::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 150px;
            height: 150px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
        }

        .promo-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: rgba(0,0,0,0.2);
            padding: 3px 8px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: 700;
        }

        .promo-title {
            font-size: clamp(14px, 3.5vw, 16px);
            font-weight: 800;
            margin-bottom: 5px;
            z-index: 1;
            position: relative;
            line-height: 1.3;
        }

        .promo-desc {
            font-size: clamp(11px, 2.5vw, 12px);
            opacity: 0.9;
            z-index: 1;
            position: relative;
            font-weight: 500;
        }

        .promo-cta {
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            margin-top: 10px;
            display: inline-block;
            background: rgba(255,255,255,0.2);
            padding: 4px 10px;
            border-radius: 20px;
            z-index: 1;
        }

        /* Airline Partners */
        .airline-partners {
            padding: 0 20px 30px;
        }

        .airline-scroll {
            display: flex;
            gap: 15px;
            overflow-x: auto;
            padding-bottom: 10px;
            scrollbar-width: none;
        }

        .airline-scroll::-webkit-scrollbar {
            display: none;
        }

        .airline-card {
            background: var(--white);
            padding: 15px;
            border-radius: 12px;
            box-shadow: var(--shadow);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-width: 100px;
        }

        .airline-logo {
            width: 50px;
            height: 50px;
            object-fit: contain;
            margin-bottom: 8px;
        }

        .airline-name {
            font-size: 12px;
            font-weight: 700;
            text-align: center;
        }

        /* Bottom Navigation */
        .bottom-nav {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
            background: var(--white);
            padding: 12px 20px 20px;
            border-top: 1px solid var(--bg-gray);
            border-radius: 25px 25px 0 0;
            box-shadow: 0 -5px 15px rgba(0,0,0,0.1);
            z-index: 10;
        }

        .nav-items {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .nav-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            cursor: pointer;
            transition: var(--transition);
            position: relative;
        }

        .nav-item.active .nav-icon {
            background: var(--primary-color);
            color: var(--white);
        }

        .nav-item.active .nav-label {
            color: var(--primary-color);
            font-weight: 700;
        }

        .nav-icon {
            width: 38px;
            height: 38px;
            background: var(--bg-light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 5px;
            transition: var(--transition);
        }

        .nav-label {
            font-size: clamp(10px, 2.5vw, 11px);
            color: var(--text-light);
            font-weight: 600;
            transition: var(--transition);
        }

        .nav-badge {
            position: absolute;
            top: -2px;
            right: 5px;
            background: var(--accent-color);
            color: white;
            border-radius: 50%;
            width: 16px;
            height: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            font-weight: 700;
        }

        .content-wrapper {
            padding-bottom: 90px;
        }

        /* Responsive adjustments */
        @media (min-width: 500px) {
            .container {
                max-width: 500px;
                margin: 0 auto;
            }
            
            .search-card {
                padding: 25px;
            }
            
            .trip-type {
                gap: 15px;
            }
            
            .location-input {
                gap: 15px;
            }
            
            .date-passenger {
                gap: 15px;
            }
            
            .action-grid {
                gap: 12px;
            }
            
            .promo-grid {
                gap: 15px;
            }
        }

        /* Accessibility improvements */
        button, input {
            font-family: inherit;
        }

        input[type="date"]::-webkit-calendar-picker-indicator {
            opacity: 0.6;
            cursor: pointer;
        }

        /* Animation for better interactivity */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .search-card, .popular-routes, .quick-actions, .promotions, .airline-partners {
            animation: fadeIn 0.5s ease-out;
        }

        .popular-routes {
            animation-delay: 0.1s;
        }

        .quick-actions {
            animation-delay: 0.15s;
        }

        .promotions {
            animation-delay: 0.2s;
        }

        .airline-partners {
            animation-delay: 0.25s;
        }

        /* Custom select dropdown */
        .custom-select {
            position: relative;
            width: 100%;
        }

        .custom-select select {
            display: none;
        }

        .select-selected {
            background-color: var(--bg-light);
            border-radius: 12px;
            padding: 15px;
            cursor: pointer;
            font-size: clamp(14px, 3.5vw, 16px);
            font-weight: 500;
            position: relative;
        }

        .select-selected:after {
            position: absolute;
            content: "";
            top: 50%;
            right: 15px;
            width: 0;
            height: 0;
            border: 6px solid transparent;
            border-color: var(--text-light) transparent transparent transparent;
            transform: translateY(-50%);
        }

        .select-selected.select-arrow-active:after {
            border-color: transparent transparent var(--text-light) transparent;
            top: 40%;
        }

        .select-items {
            position: absolute;
            background-color: var(--white);
            top: 100%;
            left: 0;
            right: 0;
            z-index: 99;
            border-radius: 0 0 12px 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            max-height: 200px;
            overflow-y: auto;
        }

        .select-items div {
            padding: 12px 15px;
            cursor: pointer;
            font-size: clamp(14px, 3.5vw, 16px);
            border-bottom: 1px solid var(--bg-gray);
        }

        .select-items div:hover {
            background-color: var(--bg-light);
        }

        .select-hide {
            display: none;
        }

        .same-as-selected {
            background-color: rgba(139, 0, 0, 0.1);
            color: var(--primary-color);
            font-weight: 600;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="content-wrapper">
            <!-- Header -->
            <div class="header">
                <div class="header-top">
                    <div class="greeting">
                        <h1>Selamat Datang!</h1>
                        <p>Mau terbang kemana hari ini?</p>
                    </div>
                    <div class="profile-icon">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Search Form -->
            <div class="search-card">
                <div class="trip-type">
                    <div class="trip-option active">One Way</div>
                    <div class="trip-option">Return</div>
                </div>

                <div class="location-input">
                    <div class="custom-select" style="width:100%;">
                        <div class="select-selected">Ternate (TTE)</div>
                        <div class="select-items select-hide">
                            <div>Ternate (TTE)</div>
                            <div>Jember (JBB)</div>
                            <div>Surabaya (SUB)</div>
                            <div>Ngloram (NGL)</div>
                        </div>
                    </div>
                    
                    <button class="swap-btn" aria-label="Swap locations">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M7.5 21L3 16.5l4.5-4.5 1.42 1.42L6.34 16H21v2H6.34l2.58 2.58L7.5 21zM16.5 3l4.5 4.5-4.5 4.5-1.42-1.42L17.66 8H3V6h14.66l-2.58-2.58L16.5 3z"/>
                        </svg>
                    </button>
                    
                    <div class="custom-select" style="width:100%;">
                        <div class="select-selected">Labuha (LAH)</div>
                        <div class="select-items select-hide">
                            <div>Labuha (LAH)</div>
                            <div>Weda (WEA)</div>
                            <div>Kuabangkao (KBK)</div>
                            <div>Morotai (OTI)</div>
                            <div>Galela (GLX)</div>
                            <div>Buli (BUL)</div>
                            <div>Surabaya (SUB)</div>
                            <div>Bawean (BXN)</div>
                            <div>Karimun Jawa (KJM)</div>
                            <div>Sumenep (SUM)</div>
                        </div>
                    </div>
                </div>

                <div class="date-passenger">
                    <input type="date" class="date-field" value="2024-12-25">
                    <input type="text" class="passenger-field" placeholder="1 Penumpang" readonly>
                </div>

                <a href="/pencarian" class="search-btn" role="button">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24" style="margin-right: 8px;">
                        <path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                    </svg>
                    Cari Penerbangan
                </a>
            </div>

            <!-- Popular Routes -->
            <div class="popular-routes">
                <h2 class="section-title">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                    </svg>
                    Rute Populer
                </h2>
                <div class="routes-container">
                    <div class="route-card">
                        <div class="route-title">Ternate → Labuha</div>
                        <div class="route-price">Mulai dari <span>Rp 499K</span></div>
                    </div>
                    <div class="route-card">
                        <div class="route-title">Ternate → Weda</div>
                        <div class="route-price">Mulai dari <span>Rp 550K</span></div>
                    </div>
                    <div class="route-card">
                        <div class="route-title">Jember → Surabaya</div>
                        <div class="route-price">Mulai dari <span>Rp 299K</span></div>
                    </div>
                    <div class="route-card">
                        <div class="route-title">Surabaya → Karimun</div>
                        <div class="route-price">Mulai dari <span>Rp 799K</span></div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="quick-actions">
                <h2 class="section-title">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M13 3c-4.97 0-9 4.03-9 9H1l3.89 3.89.07.14L9 12H6c0-3.87 3.13-7 7-7s7 3.13 7 7-3.13 7-7 7c-1.93 0-3.68-.79-4.94-2.06l-1.42 1.42C8.27 19.99 10.51 21 13 21c4.97 0 9-4.03 9-9s-4.03-9-9-9zm-1 5v5l4.28 2.54.72-1.21-3.5-2.08V8H12z"/>
                    </svg>
                    Layanan Cepat
                </h2>
                <div class="action-grid">
                    <div class="action-card" role="button" tabindex="0">
                        <div class="action-icon">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M21 9V7l-4-4H3c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h4v-2h8v2h4c1.1 0 2-.9 2-2v-6z"/>
                            </svg>
                        </div>
                        <div class="action-title">Check-in</div>
                    </div>
                    <div class="action-card" role="button" tabindex="0">
                        <div class="action-icon">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                        <div class="action-title">Status</div>
                    </div>
                    <div class="action-card" role="button" tabindex="0">
                        <div class="action-icon">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20 6h-2.18c.11-.31.18-.65.18-1a2.996 2.996 0 0 0-5.5-1.65l-.5.67-.5-.68C10.96 2.54 10.05 2 9 2 7.34 2 6 3.34 6 5c0 .35.07.69.18 1H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2z"/>
                            </svg>
                        </div>
                        <div class="action-title">Booking</div>
                    </div>
                    <div class="action-card" role="button" tabindex="0">
                        <div class="action-icon">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                        </div>
                        <div class="action-title">Bantuan</div>
                    </div>
                </div>
            </div>

            <!-- Promotions -->
            <div class="promotions">
                <h2 class="section-title">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm1-13h-2v6h2V7zm0 8h-2v2h2v-2z"/>
                    </svg>
                    Promo Spesial
                </h2>
                <div class="promo-grid">
                    <div class="promo-card">
                        <div class="promo-badge">TERBATAS</div>
                        <div class="promo-title">Diskon 30% Ternate → Labuha</div>
                        <div class="promo-desc">Pesan sekarang untuk penerbangan hingga 30 Desember</div>
                        <div class="promo-cta">PESAN SEKARANG</div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-badge">BARU</div>
                        <div class="promo-title">Cashback 50K Semua Rute</div>
                        <div class="promo-desc">Min. transaksi Rp 1.000.000 dengan kode SKY50</div>
                        <div class="promo-cta">KLIK DISINI</div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-badge">FLASH SALE</div>
                        <div class="promo-title">Jember → Surabaya Rp 199K</div>
                        <div class="promo-desc">Hanya hari ini! Kuota terbatas</div>
                        <div class="promo-cta">AMBIL PROMO</div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-badge">BUNDLING</div>
                        <div class="promo-title">Tiket + Hotel Diskon 40%</div>
                        <div class="promo-desc">Paket liburan ke Bali, Labuha & Morotai</div>
                        <div class="promo-cta">LIHAT PAKET</div>
                    </div>
                </div>
            </div>

            <!-- Airline Partners -->
            <div class="airline-partners">
                <h2 class="section-title">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22 16v-2l-8.5-5V3.5c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5V9L2 14v2l8.5-2.5V19L8 20.5V22l4-1 4 1v-1.5L13.5 19v-5.5L22 16z"/>
                    </svg>
                    Maskapai Partner
                </h2>
                <div class="airline-scroll">
                    <div class="airline-card">
                        <img src="https://via.placeholder.com/50x30/8B0000/FFFFFF?text=GA" alt="Garuda" class="airline-logo">
                        <div class="airline-name">Garuda</div>
                    </div>
                    <div class="airline-card">
                        <img src="https://via.placeholder.com/50x30/003580/FFFFFF?text=LION" alt="Lion Air" class="airline-logo">
                        <div class="airline-name">Lion Air</div>
                    </div>
                    <div class="airline-card">
                        <img src="https://via.placeholder.com/50x30/FF0000/FFFFFF?text=SJ" alt="Sriwijaya" class="airline-logo">
                        <div class="airline-name">Sriwijaya</div>
                    </div>
                    <div class="airline-card">
                        <img src="https://via.placeholder.com/50x30/0066CC/FFFFFF?text=CA" alt="Citilink" class="airline-logo">
                        <div class="airline-name">Citilink</div>
                    </div>
                    <div class="airline-card">
                        <img src="https://via.placeholder.com/50x30/FF9900/FFFFFF?text=XA" alt="Xpress Air" class="airline-logo">
                        <div class="airline-name">Xpress Air</div>
                    </div>
                    <div class="airline-card">
                        <img src="https://via.placeholder.com/50x30/005BAC/FFFFFF?text=WA" alt="Wings Air" class="airline-logo">
                        <div class="airline-name">Wings Air</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Navigation -->
        <div class="bottom-nav">
            <div class="nav-items">
                <div class="nav-item active" role="button" tabindex="0">
                    <div class="nav-icon">
                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                                                        <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
                        </svg>
                    </div>
                    <div class="nav-label">Beranda</div>
                </div>
                <div class="nav-item" role="button" tabindex="0">
                    <div class="nav-icon">
                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17 3H7c-1.1 0-2 .9-2 2v16l7-3 7 3V5c0-1.1-.9-2-2-2z"/>
                        </svg>
                    </div>
                    <div class="nav-label">Pesanan</div>
                </div>
                <div class="nav-item" role="button" tabindex="0">
                    <div class="nav-icon">
                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z"/>
                        </svg>
                    </div>
                    <div class="nav-label">Promo</div>
                </div>
                <div class="nav-item" role="button" tabindex="0">
                    <div class="nav-icon">
                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                        </svg>
                    </div>
                    <div class="nav-label">Profil</div>
                    <div class="nav-badge">3</div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Custom select dropdown functionality
        document.addEventListener('DOMContentLoaded', function() {
            const selects = document.querySelectorAll('.custom-select');
            
            selects.forEach(select => {
                const selected = select.querySelector('.select-selected');
                const items = select.querySelector('.select-items');
                const options = items.querySelectorAll('div');
                
                selected.addEventListener('click', function(e) {
                    e.stopPropagation();
                    closeAllSelect(this);
                    items.classList.toggle('select-hide');
                    this.classList.toggle('select-arrow-active');
                });
                
                options.forEach(option => {
                    option.addEventListener('click', function() {
                        selected.textContent = this.textContent;
                        items.classList.add('select-hide');
                        selected.classList.remove('select-arrow-active');
                        
                        // Remove same-as-selected class from all options
                        options.forEach(opt => {
                            opt.classList.remove('same-as-selected');
                        });
                        
                        // Add same-as-selected class to clicked option
                        this.classList.add('same-as-selected');
                    });
                });
            });
            
            function closeAllSelect(elmnt) {
                const selects = document.querySelectorAll('.custom-select');
                const items = document.querySelectorAll('.select-items');
                const selected = document.querySelectorAll('.select-selected');
                
                selects.forEach(select => {
                    if (select.querySelector('.select-selected') !== elmnt) {
                        select.querySelector('.select-items').classList.add('select-hide');
                        select.querySelector('.select-selected').classList.remove('select-arrow-active');
                    }
                });
            }
            
            // Close dropdown when clicking outside
            document.addEventListener('click', function() {
                const items = document.querySelectorAll('.select-items');
                const selected = document.querySelectorAll('.select-selected');
                
                items.forEach(item => {
                    item.classList.add('select-hide');
                });
                
                selected.forEach(sel => {
                    sel.classList.remove('select-arrow-active');
                });
            });
            
            // Trip type selection
            const tripOptions = document.querySelectorAll('.trip-option');
            tripOptions.forEach(option => {
                option.addEventListener('click', function() {
                    tripOptions.forEach(opt => opt.classList.remove('active'));
                    this.classList.add('active');
                });
            });
            
            // Navigation active state
            const navItems = document.querySelectorAll('.nav-item');
            navItems.forEach(item => {
                item.addEventListener('click', function() {
                    navItems.forEach(nav => nav.classList.remove('active'));
                    this.classList.add('active');
                });
            });
            
            // Set today's date as default if not set
            const dateField = document.querySelector('.date-field');
            if (!dateField.value) {
                const today = new Date();
                const dd = String(today.getDate()).padStart(2, '0');
                const mm = String(today.getMonth() + 1).padStart(2, '0');
                const yyyy = today.getFullYear();
                dateField.value = `${yyyy}-${mm}-${dd}`;
            }
        });
    </script>
</body>
</html>