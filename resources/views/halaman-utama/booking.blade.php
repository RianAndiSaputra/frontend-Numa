<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pemesanan - SkyBooking</title>
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

        .header-title p {
            font-size: 12px;
            opacity: 0.9;
        }

        /* Progress Steps */
        .progress-steps {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            position: relative;
        }

        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .step-number {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #e9ecef;
            color: #6c757d;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            margin-bottom: 5px;
            border: 2px solid #e9ecef;
        }

        .step.active .step-number {
            background: #8B0000;
            color: white;
            border-color: #8B0000;
        }

        .step.completed .step-number {
            background: #28a745;
            color: white;
            border-color: #28a745;
        }

        .step-text {
            font-size: 10px;
            color: #6c757d;
            text-align: center;
        }

        .step.active .step-text {
            color: #8B0000;
            font-weight: 500;
        }

        .progress-line {
            position: absolute;
            top: 35px;
            left: 20%;
            right: 20%;
            height: 2px;
            background: #e9ecef;
            z-index: 1;
        }

        .progress-fill {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 50%;
            background: #8B0000;
            transition: all 0.3s ease;
        }

        /* Flight Summary */
        .flight-summary {
            background: white;
            border-radius: 15px;
            margin: 15px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            border: 1px solid #f1f1f1;
        }

        .summary-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px dashed #e9ecef;
        }

        .summary-title {
            font-size: 16px;
            font-weight: 600;
            color: #2c3e50;
        }

        .edit-btn {
            background: none;
            border: none;
            color: #8B0000;
            font-size: 12px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 5px;
            cursor: pointer;
        }

        .flight-detail {
            display: flex;
            margin-bottom: 15px;
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
            margin-right: 15px;
        }

        .flight-info {
            flex: 1;
        }

        .airline-name {
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 3px;
        }

        .flight-number {
            font-size: 12px;
            color: #6c757d;
            margin-bottom: 10px;
        }

        .flight-route {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .route-segment {
            flex: 1;
        }

        .time {
            font-size: 16px;
            font-weight: 700;
            color: #2c3e50;
        }

        .date {
            font-size: 12px;
            color: #6c757d;
            margin: 3px 0;
        }

        .airport {
            font-size: 12px;
            color: #adb5bd;
        }

        .flight-duration {
            text-align: center;
            padding: 0 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .duration {
            font-size: 12px;
            color: #6c757d;
            white-space: nowrap;
        }

        .path-line {
            width: 100%;
            height: 2px;
            background: #e9ecef;
            position: relative;
            margin: 5px 0;
        }

        .path-line::after {
            content: '✈️';
            position: absolute;
            top: -8px;
            right: -8px;
            font-size: 12px;
        }

        /* Passenger Form */
        .form-section {
            padding: 20px;
        }

        .section-title {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 15px;
            color: #2c3e50;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .section-title .icon {
            width: 25px;
            height: 25px;
            background: #8B0000;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 12px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            font-size: 13px;
            margin-bottom: 8px;
            color: #495057;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #e9ecef;
            border-radius: 10px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #8B0000;
            outline: none;
            box-shadow: 0 0 0 3px rgba(139, 0, 0, 0.1);
        }

        .form-row {
            display: flex;
            gap: 15px;
        }

        .form-col {
            flex: 1;
        }

        .select-wrapper {
            position: relative;
        }

        .select-wrapper::after {
            content: '⌄';
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            color: #6c757d;
            pointer-events: none;
        }

        .form-select {
            appearance: none;
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #e9ecef;
            border-radius: 10px;
            font-size: 14px;
            background-color: white;
        }

        /* Contact Info */
        .contact-info {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 20px;
            margin: 15px;
        }

        .info-note {
            font-size: 12px;
            color: #6c757d;
            margin-top: 10px;
            line-height: 1.5;
        }

        /* Baggage Selection */
        .baggage-options {
            margin-top: 15px;
        }

        .option-card {
            display: flex;
            align-items: center;
            padding: 15px;
            border: 1px solid #e9ecef;
            border-radius: 10px;
            margin-bottom: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .option-card:hover {
            border-color: #8B0000;
        }

        .option-card.selected {
            border-color: #8B0000;
            background: rgba(139, 0, 0, 0.05);
        }

        .option-radio {
            margin-right: 15px;
            accent-color: #8B0000;
        }

        .option-details {
            flex: 1;
        }

        .option-title {
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 3px;
        }

        .option-desc {
            font-size: 12px;
            color: #6c757d;
        }

        .option-price {
            font-size: 14px;
            font-weight: 600;
            color: #8B0000;
            margin-left: 15px;
        }

        /* Insurance Toggle */
        .insurance-toggle {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 10px;
            margin-top: 20px;
        }

        .toggle-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .toggle-icon {
            width: 30px;
            height: 30px;
            background: #e9ecef;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6c757d;
        }

        .toggle-text h4 {
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 2px;
        }

        .toggle-text p {
            font-size: 12px;
            color: #6c757d;
        }

        .toggle-switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 24px;
        }

        .toggle-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 24px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked + .slider {
            background-color: #8B0000;
        }

        input:checked + .slider:before {
            transform: translateX(26px);
        }

        /* Price Summary */
        .price-summary {
            background: white;
            border-radius: 15px;
            margin: 15px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .price-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .price-label {
            font-size: 14px;
            color: #6c757d;
        }

        .price-value {
            font-size: 14px;
            font-weight: 500;
        }

        .price-total {
            border-top: 1px dashed #e9ecef;
            margin-top: 10px;
            padding-top: 10px;
            font-weight: 700;
        }

        .price-total .price-value {
            font-size: 18px;
            color: #8B0000;
        }

        /* Bottom Action */
        .bottom-action {
            position: fixed;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 375px;
            background: white;
            padding: 15px 20px;
            border-top: 1px solid #e9ecef;
            box-shadow: 0 -5px 15px rgba(0,0,0,0.05);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .total-price {
            display: flex;
            flex-direction: column;
        }

        .total-label {
            font-size: 12px;
            color: #6c757d;
        }

        .total-value {
            font-size: 18px;
            font-weight: 700;
            color: #8B0000;
        }

        .pay-btn {
            background: linear-gradient(135deg, #8B0000, #A0001C);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .pay-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(139,0,0,0.3);
        }

        /* Passenger List */
        .passenger-list {
            margin-bottom: 20px;
        }

        .passenger-item {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 10px;
            position: relative;
        }

        .passenger-name {
            font-weight: 600;
            margin-bottom: 5px;
        }

        .passenger-details {
            font-size: 12px;
            color: #6c757d;
        }

        .remove-passenger {
            position: absolute;
            top: 10px;
            right: 10px;
            background: none;
            border: none;
            color: #dc3545;
            font-size: 14px;
            cursor: pointer;
        }

        .add-passenger-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            width: 100%;
            padding: 12px;
            background: #f8f9fa;
            border: 1px dashed #adb5bd;
            border-radius: 10px;
            color: #8B0000;
            font-weight: 500;
            cursor: pointer;
            margin-top: 10px;
        }

        .add-passenger-btn:hover {
            background: #e9ecef;
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background: white;
            width: 90%;
            max-width: 400px;
            border-radius: 15px;
            padding: 20px;
            max-height: 90vh;
            overflow-y: auto;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #e9ecef;
        }

        .modal-title {
            font-size: 18px;
            font-weight: 600;
        }

        .close-modal {
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
            color: #6c757d;
        }

        .modal-footer {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px solid #e9ecef;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-secondary {
            background: #f8f9fa;
            border: 1px solid #e9ecef;
            color: #495057;
        }

        .btn-primary {
            background: #8B0000;
            border: none;
            color: white;
        }

        .btn-primary:hover {
            background: #A0001C;
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
                    <h1>Detail Pemesanan</h1>
                    <p>Isi data penumpang dan pembayaran</p>
                </div>
            </div>
        </div>

        <!-- Progress Steps -->
        <div class="progress-steps">
            <div class="step completed">
                <div class="step-number">1</div>
                <div class="step-text">Penerbangan</div>
            </div>
            <div class="step active">
                <div class="step-number">2</div>
                <div class="step-text">Data Diri</div>
            </div>
            <div class="step">
                <div class="step-number">3</div>
                <div class="step-text">Pembayaran</div>
            </div>
            <div class="progress-line">
                <div class="progress-fill"></div>
            </div>
        </div>

        <!-- Flight Summary -->
        <div class="flight-summary">
            <div class="summary-header">
                <div class="summary-title">Penerbangan Anda</div>
                <button class="edit-btn" onclick="editFlight()">
                    <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/>
                    </svg>
                    Ubah
                </button>
            </div>
            <div class="flight-detail">
                <div class="airline-logo">GA</div>
                <div class="flight-info">
                    <div class="airline-name">Garuda Indonesia</div>
                    <div class="flight-number">GA 410 • Ekonomi</div>
                    <div class="flight-route">
                        <div class="route-segment">
                            <div class="time">07:30</div>
                            <div class="date">Rab, 25 Des 2024</div>
                            <div class="airport">CGK - Jakarta</div>
                        </div>
                        <div class="flight-duration">
                            <div class="duration">2j 15m</div>
                            <div class="path-line"></div>
                            <div class="stops">Langsung</div>
                        </div>
                        <div class="route-segment" style="text-align: right;">
                            <div class="time">10:45</div>
                            <div class="date">Rab, 25 Des 2024</div>
                            <div class="airport">DPS - Bali</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Passenger Form -->
        <div class="form-section">
            <div class="section-title">
                <div class="icon">1</div>
                <span>Data Penumpang</span>
            </div>
            
            <div class="passenger-list" id="passengerList">
                <!-- Passenger items will be added here dynamically -->
            </div>
            
            <button class="add-passenger-btn" onclick="openAddPassengerModal()">
                <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/>
                </svg>
                Tambah Penumpang
            </button>
        </div>

        <!-- Contact Info -->
        <div class="contact-info">
            <div class="section-title">
                <div class="icon">2</div>
                <span>Kontak Informasi</span>
            </div>
            
            <div class="form-group">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="email@contoh.com">
            </div>
            
            <div class="form-group">
                <label class="form-label">Nomor Telepon</label>
                <input type="tel" class="form-control" id="phone" placeholder="+62 812-3456-7890">
            </div>
            
            <p class="info-note">
                Tiket elektronik dan detail pemesanan akan dikirim ke alamat email dan nomor telepon ini.
                Pastikan data yang dimasukkan benar.
            </p>
        </div>

        <!-- Baggage Selection -->
        <div class="form-section">
            <div class="section-title">
                <div class="icon">3</div>
                <span>Tambahan Bagasi</span>
            </div>
            
            <div class="baggage-options">
                <div class="option-card selected">
                    <input type="radio" name="baggage" class="option-radio" checked>
                    <div class="option-details">
                        <div class="option-title">Bagasi Standar</div>
                        <div class="option-desc">Termasuk 20kg bagasi kabin + 7kg bagasi tangan</div>
                    </div>
                    <div class="option-price">Gratis</div>
                </div>
                
                <div class="option-card">
                    <input type="radio" name="baggage" class="option-radio">
                    <div class="option-details">
                        <div class="option-title">Ekstra 10kg</div>
                        <div class="option-desc">Tambahan 10kg bagasi kabin</div>
                    </div>
                    <div class="option-price">Rp150.000</div>
                </div>
                
                <div class="option-card">
                    <input type="radio" name="baggage" class="option-radio">
                    <div class="option-details">
                        <div class="option-title">Ekstra 20kg</div>
                        <div class="option-desc">Tambahan 20kg bagasi kabin</div>
                    </div>
                    <div class="option-price">Rp250.000</div>
                </div>
            </div>
        </div>

        <!-- Travel Insurance -->
        <div class="form-section">
            <div class="section-title">
                <div class="icon">4</div>
                <span>Asuransi Perjalanan</span>
            </div>
            
            <div class="insurance-toggle">
                <div class="toggle-info">
                    <div class="toggle-icon">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/>
                        </svg>
                    </div>
                    <div class="toggle-text">
                        <h4>Asuransi Perjalanan</h4>
                        <p>Proteksi selama perjalanan Anda</p>
                    </div>
                </div>
                <label class="toggle-switch">
                    <input type="checkbox" id="insuranceToggle">
                    <span class="slider"></span>
                </label>
            </div>
        </div>

        <!-- Price Summary -->
        <div class="price-summary">
            <div class="section-title">
                <div class="icon">5</div>
                <span>Ringkasan Harga</span>
            </div>
            
            <div class="price-row">
                <div class="price-label">Harga Tiket (1 orang)</div>
                <div class="price-value">Rp1.250.000</div>
            </div>
            
            <div class="price-row">
                <div class="price-label">Biaya Layanan</div>
                <div class="price-value">Rp25.000</div>
            </div>
            
            <div class="price-row">
                <div class="price-label">Pajak Bandara</div>
                <div class="price-value">Rp75.000</div>
            </div>
            
            <div class="price-row price-total">
                <div class="price-label">Total Pembayaran</div>
                <div class="price-value">Rp1.350.000</div>
            </div>
        </div>

        <!-- Bottom Action -->
        <div class="bottom-action">
            <div class="total-price">
                <div class="total-label">Total Pembayaran</div>
                <div class="total-value">Rp1.350.000</div>
            </div>
            <button class="pay-btn" onclick="proceedToPayment()">Bayar Sekarang</button>
        </div>
    </div>

    <!-- Add Passenger Modal -->
    <div class="modal" id="addPassengerModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Penumpang</h3>
                <button class="close-modal" onclick="closeModal()">&times;</button>
            </div>
            
            <div class="form-group">
                <label class="form-label">Titel</label>
                <div class="select-wrapper">
                    <select class="form-select" id="passengerTitle">
                        <option value="">Pilih titel</option>
                        <option value="Tn">Tn.</option>
                        <option value="Ny">Ny.</option>
                        <option value="Nn">Nn.</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="passengerName" placeholder="Nama lengkap">
            </div>
            
            <div class="form-group">
                <label class="form-label">Jenis Kelamin</label>
                <div class="select-wrapper">
                    <select class="form-select" id="passengerGender">
                        <option value="">Pilih jenis kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <label class="form-label">Nomor Paspor/KTP</label>
                <input type="text" class="form-control" id="passengerId" placeholder="Masukkan nomor ID">
            </div>
            
            <div class="form-group">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="passengerDob">
            </div>
            
            <div class="modal-footer">
                <button class="btn btn-secondary" onclick="closeModal()">Batal</button>
                <button class="btn btn-primary" onclick="addPassenger()">Simpan</button>
            </div>
        </div>
    </div>

    <script>
        // Fungsi untuk kembali ke halaman sebelumnya
        function goBack() {
            window.history.back();
        }

        // Fungsi untuk mengubah penerbangan
        function editFlight() {
            if(confirm('Anda yakin ingin mengubah penerbangan?')) {
                window.location.href = 'flight-results.html';
            }
        }

        // Fungsi untuk melanjutkan ke pembayaran
        function proceedToPayment() {
            // Validasi form sebelum melanjutkan
            if(validateForm()) {
                window.location.href = '/payment';
            }
        }

        // Fungsi validasi form
        function validateForm() {
            const passengerList = document.getElementById('passengerList').children;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            
            if(passengerList.length === 0) {
                alert('Harap tambahkan minimal 1 penumpang!');
                return false;
            }
            
            if(!email || !phone) {
                alert('Harap lengkapi semua data yang diperlukan!');
                return false;
            }
            
            if(!validateEmail(email)) {
                alert('Format email tidak valid!');
                return false;
            }
            
            return true;
        }

        // Fungsi validasi email
        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        // Toggle untuk pilihan bagasi
        document.querySelectorAll('.option-card').forEach(card => {
            card.addEventListener('click', function() {
                document.querySelectorAll('.option-card').forEach(c => c.classList.remove('selected'));
                this.classList.add('selected');
                this.querySelector('input').checked = true;
                updatePriceSummary();
            });
        });

        // Toggle untuk asuransi
        document.getElementById('insuranceToggle').addEventListener('change', function() {
            updatePriceSummary();
        });

        // Fungsi untuk update ringkasan harga
        function updatePriceSummary() {
            // Implementasi update harga berdasarkan pilihan
        }

        // Fungsi untuk modal penumpang
        function openAddPassengerModal() {
            document.getElementById('addPassengerModal').style.display = 'flex';
        }

        function closeModal() {
            document.getElementById('addPassengerModal').style.display = 'none';
            // Reset form
            document.getElementById('passengerTitle').value = '';
            document.getElementById('passengerName').value = '';
            document.getElementById('passengerGender').value = '';
            document.getElementById('passengerId').value = '';
            document.getElementById('passengerDob').value = '';
        }

        function addPassenger() {
            const title = document.getElementById('passengerTitle').value;
            const name = document.getElementById('passengerName').value;
            const gender = document.getElementById('passengerGender').value;
            const id = document.getElementById('passengerId').value;
            const dob = document.getElementById('passengerDob').value;
            
            if(!title || !name || !gender || !id || !dob) {
                alert('Harap lengkapi semua data penumpang!');
                return;
            }
            
            // Format tanggal lahir untuk tampilan
            const dobDate = new Date(dob);
            const formattedDob = dobDate.toLocaleDateString('id-ID', {
                day: 'numeric',
                month: 'long',
                year: 'numeric'
            });
            
            // Buat elemen penumpang baru
            const passengerItem = document.createElement('div');
            passengerItem.className = 'passenger-item';
            passengerItem.innerHTML = `
                <button class="remove-passenger" onclick="removePassenger(this)">&times;</button>
                <div class="passenger-name">${title} ${name}</div>
                <div class="passenger-details">
                    <div>${gender} • ${formattedDob}</div>
                    <div>ID: ${id}</div>
                </div>
            `;
            
            // Tambahkan ke daftar penumpang
            document.getElementById('passengerList').appendChild(passengerItem);
            
            // Tutup modal
            closeModal();
            
            // Update ringkasan harga
            updatePriceSummary();
        }

        function removePassenger(button) {
            if(confirm('Hapus penumpang ini?')) {
                button.parentElement.remove();
                updatePriceSummary();
            }
        }

        // Tutup modal saat klik di luar konten modal
        window.onclick = function(event) {
            const modal = document.getElementById('addPassengerModal');
            if(event.target === modal) {
                closeModal();
            }
        }
    </script>
</body>
</html>