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
            --text-dark: #2c3e50;
            --text-light: #6c757d;
            --bg-light: #f8f9fa;
            --bg-gray: #e9ecef;
            --white: #ffffff;
            --shadow: 0 5px 15px rgba(0,0,0,0.1);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, var(--bg-light) 0%, var(--bg-gray) 100%);
            min-height: 100vh;
            color: var(--text-dark);
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
            font-size: clamp(20px, 5vw, 24px);
            font-weight: 700;
            margin-bottom: 5px;
        }

        .greeting p {
            font-size: clamp(12px, 3vw, 14px);
            opacity: 0.9;
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
            font-size: clamp(12px, 3vw, 14px);
            font-weight: 500;
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
        }

        .location-field {
            flex: 1;
            background: var(--bg-light);
            border: none;
            padding: 15px;
            border-radius: 12px;
            font-size: clamp(14px, 3.5vw, 16px);
            outline: none;
            min-width: 0;
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
        }

        .swap-btn:hover {
            transform: rotate(180deg);
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
            font-size: clamp(13px, 3vw, 14px);
            outline: none;
            min-width: 0;
        }

        .search-btn {
            width: 100%;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: var(--white);
            border: none;
            padding: 15px;
            border-radius: 15px;
            font-size: clamp(14px, 3.5vw, 16px);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .search-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(139,0,0,0.3);
        }

        /* Quick Actions */
        .quick-actions {
            padding: 0 20px 30px;
        }

        .section-title {
            font-size: clamp(16px, 4vw, 18px);
            font-weight: 700;
            margin-bottom: 15px;
            color: var(--text-dark);
        }

        .action-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
        }

        .action-card {
            background: var(--white);
            padding: 15px;
            border-radius: 15px;
            text-align: center;
            box-shadow: var(--shadow);
            cursor: pointer;
            transition: var(--transition);
        }

        .action-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .action-icon {
            width: 45px;
            height: 45px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 50%;
            margin: 0 auto 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
        }

        .action-title {
            font-size: clamp(12px, 3vw, 14px);
            font-weight: 600;
            color: var(--text-dark);
        }

        /* Promotions */
        .promotions {
            padding: 0 20px 30px;
        }

        .promo-card {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: var(--white);
            padding: 15px;
            border-radius: 15px;
            margin-bottom: 15px;
            position: relative;
            overflow: hidden;
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

        .promo-title {
            font-size: clamp(14px, 3.5vw, 16px);
            font-weight: 700;
            margin-bottom: 5px;
            z-index: 1;
            position: relative;
        }

        .promo-desc {
            font-size: clamp(11px, 2.5vw, 12px);
            opacity: 0.9;
            z-index: 1;
            position: relative;
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
        }

        .nav-item.active .nav-icon {
            background: var(--primary-color);
            color: var(--white);
        }

        .nav-item.active .nav-label {
            color: var(--primary-color);
        }

        .nav-icon {
            width: 35px;
            height: 35px;
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
            font-weight: 500;
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
                gap: 15px;
            }
            
            .action-card {
                padding: 20px;
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

        .search-card, .quick-actions, .promotions {
            animation: fadeIn 0.5s ease-out;
        }

        .quick-actions {
            animation-delay: 0.1s;
        }

        .promotions {
            animation-delay: 0.2s;
        }
    </style>
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
                    <div class="trip-option active">Sekali Jalan</div>
                    <div class="trip-option">Pulang Pergi</div>
                </div>

                <div class="location-input">
                    <input type="text" class="location-field" placeholder="Dari (Jakarta)" value="Jakarta (CGK)">
                    <button class="swap-btn" aria-label="Swap locations">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M7.5 21L3 16.5l4.5-4.5 1.42 1.42L6.34 16H21v2H6.34l2.58 2.58L7.5 21zM16.5 3l4.5 4.5-4.5 4.5-1.42-1.42L17.66 8H3V6h14.66l-2.58-2.58L16.5 3z"/>
                        </svg>
                    </button>
                    <input type="text" class="location-field" placeholder="Ke (Bali)" value="Bali (DPS)">
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

            <!-- Quick Actions -->
            <div class="quick-actions">
                <h2 class="section-title">Layanan Cepat</h2>
                <div class="action-grid">
                    <div class="action-card" role="button" tabindex="0">
                        <div class="action-icon">
                            <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M21 9V7l-4-4H3c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h4v-2h8v2h4c1.1 0 2-.9 2-2v-6z"/>
                            </svg>
                        </div>
                        <div class="action-title">Check-in Online</div>
                    </div>
                    <div class="action-card" role="button" tabindex="0">
                        <div class="action-icon">
                            <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                        <div class="action-title">Status Penerbangan</div>
                    </div>
                    <div class="action-card" role="button" tabindex="0">
                        <div class="action-icon">
                            <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20 6h-2.18c.11-.31.18-.65.18-1a2.996 2.996 0 0 0-5.5-1.65l-.5.67-.5-.68C10.96 2.54 10.05 2 9 2 7.34 2 6 3.34 6 5c0 .35.07.69.18 1H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2z"/>
                            </svg>
                        </div>
                        <div class="action-title">Kelola Booking</div>
                    </div>
                    <div class="action-card" role="button" tabindex="0">
                        <div class="action-icon">
                            <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                        </div>
                        <div class="action-title">Bantuan</div>
                    </div>
                </div>
            </div>

            <!-- Promotions -->
            <div class="promotions">
                <h2 class="section-title">Promo Spesial</h2>
                <div class="promo-card">
                    <div class="promo-title">✈️ Diskon 25% ke Bali</div>
                    <div class="promo-desc">Nikmati liburan impian dengan penawaran terbatas hingga akhir bulan!</div>
                </div>
                <div class="promo-card">
                    <div class="promo-title">🎯 Flash Sale Domestik</div>
                    <div class="promo-desc">Tiket mulai dari Rp 299.000 untuk destinasi favorit di Indonesia</div>
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
                            <path d="M21 9V7l-4-4H3c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h4v-2h8v2h4c1.1 0 2-.9 2-2v-6z"/>
                        </svg>
                    </div>
                    <div class="nav-label">Tiket Saya</div>
                </div>
                <div class="nav-item" role="button" tabindex="0">
                    <div class="nav-icon">
                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    </div>
                    <div class="nav-label">Reward</div>
                </div>
                <div class="nav-item" role="button" tabindex="0">
                    <div class="nav-icon">
                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                        </svg>
                    </div>
                    <div class="nav-label">Profil</div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Trip type toggle
        const tripOptions = document.querySelectorAll('.trip-option');
        tripOptions.forEach(option => {
            option.addEventListener('click', () => {
                tripOptions.forEach(opt => opt.classList.remove('active'));
                option.classList.add('active');
            });
            
            // Add keyboard support
            option.addEventListener('keydown', (e) => {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    tripOptions.forEach(opt => opt.classList.remove('active'));
                    option.classList.add('active');
                }
            });
        });

        // Swap locations
        const swapBtn = document.querySelector('.swap-btn');
        const locationFields = document.querySelectorAll('.location-field');
        
        swapBtn.addEventListener('click', () => {
            const temp = locationFields[0].value;
            locationFields[0].value = locationFields[1].value;
            locationFields[1].value = temp;
        });

        // Bottom navigation
        const navItems = document.querySelectorAll('.nav-item');
        navItems.forEach(item => {
            item.addEventListener('click', () => {
                navItems.forEach(nav => nav.classList.remove('active'));
                item.classList.add('active');
            });
            
            // Add keyboard support
            item.addEventListener('keydown', (e) => {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    navItems.forEach(nav => nav.classList.remove('active'));
                    item.classList.add('active');
                }
            });
        });

        // Search button animation
        const searchBtn = document.querySelector('.search-btn');
        searchBtn.addEventListener('click', () => {
            searchBtn.style.transform = 'scale(0.98)';
            setTimeout(() => {
                searchBtn.style.transform = 'scale(1)';
            }, 150);
        });

        // Action cards hover effect
        const actionCards = document.querySelectorAll('.action-card');
        actionCards.forEach(card => {
            card.addEventListener('click', () => {
                card.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    card.style.transform = 'translateY(-3px)';
                }, 150);
            });
            
            // Add keyboard support
            card.addEventListener('keydown', (e) => {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    card.style.transform = 'scale(0.95)';
                    setTimeout(() => {
                        card.style.transform = 'translateY(-3px)';
                    }, 150);
                }
            });
        });

        // Better touch feedback for mobile
        document.querySelectorAll('button, [role="button"]').forEach(button => {
            button.style.webkitTapHighlightColor = 'transparent';
            button.addEventListener('touchstart', () => {
                button.style.opacity = '0.8';
            });
            button.addEventListener('touchend', () => {
                button.style.opacity = '1';
            });
        });
    </script>
</body>
</html>