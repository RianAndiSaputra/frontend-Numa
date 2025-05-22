<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran - SkyBooking</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f8f9fa;
            min-height: 100vh;
            color: #333;
        }

        .container {
            max-width: 375px;
            margin: 0 auto;
            background: white;
            min-height: 100vh;
            position: relative;
            box-shadow: 0 0 20px rgba(0,0,0,0.05);
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
            background: white;
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
            width: 75%;
            background: #8B0000;
            transition: all 0.3s ease;
        }

        /* Payment Content */
        .payment-content {
            padding: 20px;
            padding-bottom: 120px;
        }

        /* Order Summary */
        .order-summary {
            background: white;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.03);
            border: 1px solid #f1f1f1;
        }

        .summary-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .summary-title {
            font-size: 16px;
            font-weight: 600;
            color: #2c3e50;
        }

        .order-details {
            margin-top: 10px;
        }

        .detail-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
        }

        .detail-label {
            font-size: 13px;
            color: #6c757d;
        }

        .detail-value {
            font-size: 13px;
            font-weight: 500;
        }

        .divider {
            height: 1px;
            background: #f1f1f1;
            margin: 15px 0;
        }

        .total-row {
            display: flex;
            justify-content: space-between;
            font-weight: 600;
            margin-top: 10px;
        }

        .total-label {
            font-size: 15px;
        }

        .total-value {
            font-size: 18px;
            color: #8B0000;
        }

        /* Payment Methods */
        .payment-methods {
            margin-top: 25px;
        }

        .section-title {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 15px;
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

        .method-tabs {
            display: flex;
            border-bottom: 1px solid #e9ecef;
            margin-bottom: 15px;
        }

        .method-tab {
            padding: 10px 15px;
            font-size: 13px;
            font-weight: 500;
            color: #6c757d;
            cursor: pointer;
            position: relative;
        }

        .method-tab.active {
            color: #8B0000;
        }

        .method-tab.active::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            right: 0;
            height: 2px;
            background: #8B0000;
        }

        .method-options {
            display: none;
        }

        .method-options.active {
            display: block;
        }

        .payment-card {
            display: flex;
            align-items: center;
            padding: 15px;
            border: 1px solid #e9ecef;
            border-radius: 12px;
            margin-bottom: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .payment-card:hover {
            border-color: #8B0000;
        }

        .payment-card.selected {
            border-color: #8B0000;
            background: rgba(139, 0, 0, 0.03);
        }

        .payment-icon {
            width: 40px;
            height: 40px;
            background: #f8f9fa;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: #8B0000;
        }

        .payment-details {
            flex: 1;
        }

        .payment-name {
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 3px;
        }

        .payment-desc {
            font-size: 12px;
            color: #6c757d;
        }

        .payment-radio {
            margin-left: 15px;
            accent-color: #8B0000;
        }

        /* Virtual Account */
        .va-banks {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            margin-top: 15px;
        }

        .va-bank {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 15px 10px;
            border: 1px solid #e9ecef;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .va-bank:hover {
            border-color: #8B0000;
        }

        .va-bank.selected {
            border-color: #8B0000;
            background: rgba(139, 0, 0, 0.03);
        }

        .va-icon {
            width: 30px;
            height: 30px;
            margin-bottom: 8px;
        }

        .va-name {
            font-size: 11px;
            text-align: center;
            color: #495057;
        }

        /* Payment Form */
        .payment-form {
            margin-top: 20px;
            display: none;
        }

        .payment-form.active {
            display: block;
        }

        .form-group {
            margin-bottom: 15px;
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

        .input-with-icon {
            position: relative;
        }

        .input-icon {
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            color: #6c757d;
        }

        /* Promo Code */
        .promo-section {
            margin-top: 20px;
            background: #f8f9fa;
            border-radius: 12px;
            padding: 15px;
        }

        .promo-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
            cursor: pointer;
        }

        .promo-title {
            font-size: 14px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .promo-icon {
            color: #8B0000;
        }

        .promo-content {
            display: none;
            margin-top: 10px;
        }

        .promo-content.active {
            display: block;
        }

        .promo-input-group {
            display: flex;
            gap: 10px;
        }

        .promo-input {
            flex: 1;
            padding: 10px 15px;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            font-size: 13px;
        }

        .apply-btn {
            background: #8B0000;
            color: white;
            border: none;
            padding: 0 15px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
        }

        /* Payment Summary */
        .payment-summary {
            background: white;
            border-radius: 15px;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.03);
            border: 1px solid #f1f1f1;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
        }

        .summary-label {
            font-size: 13px;
            color: #6c757d;
        }

        .summary-value {
            font-size: 13px;
            font-weight: 500;
        }

        .summary-total {
            margin-top: 10px;
            padding-top: 10px;
            border-top: 1px dashed #e9ecef;
            font-weight: 600;
        }

        .summary-total .summary-value {
            font-size: 16px;
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

        .action-text {
            font-size: 12px;
            color: #6c757d;
            margin-bottom: 3px;
        }

        .action-price {
            font-size: 18px;
            font-weight: 700;
            color: #8B0000;
        }

        .confirm-btn {
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

        .confirm-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(139,0,0,0.3);
        }

        .confirm-btn:disabled {
            background: #6c757d;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        /* Payment Success Modal */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .modal-content {
            background: white;
            width: 90%;
            max-width: 350px;
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            transform: translateY(20px);
            transition: all 0.3s ease;
        }

        .modal-overlay.active .modal-content {
            transform: translateY(0);
        }

        .modal-icon {
            width: 80px;
            height: 80px;
            background: #d4edda;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: #28a745;
            font-size: 40px;
        }

        .modal-title {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #2c3e50;
        }

        .modal-text {
            font-size: 14px;
            color: #6c757d;
            margin-bottom: 20px;
            line-height: 1.5;
        }

        .modal-btn {
            background: #8B0000;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            width: 100%;
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
                    <h1>Pembayaran</h1>
                    <p>Selesaikan pembayaran dalam 23:59</p>
                </div>
            </div>
        </div>

        <!-- Progress Steps -->
        <div class="progress-steps">
            <div class="step completed">
                <div class="step-number">1</div>
                <div class="step-text">Penerbangan</div>
            </div>
            <div class="step completed">
                <div class="step-number">2</div>
                <div class="step-text">Data Diri</div>
            </div>
            <div class="step active">
                <div class="step-number">3</div>
                <div class="step-text">Pembayaran</div>
            </div>
            <div class="progress-line">
                <div class="progress-fill"></div>
            </div>
        </div>

        <!-- Payment Content -->
        <div class="payment-content">
            <!-- Order Summary -->
            <div class="order-summary">
                <div class="summary-header">
                    <div class="summary-title">Ringkasan Pesanan</div>
                </div>
                <div class="order-details">
                    <div class="detail-row">
                        <div class="detail-label">Penerbangan</div>
                        <div class="detail-value">CGK → DPS</div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-label">Maskapai</div>
                        <div class="detail-value">Garuda Indonesia</div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-label">Tanggal</div>
                        <div class="detail-value">25 Des 2024</div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-label">Penumpang</div>
                        <div class="detail-value">1 Dewasa</div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-label">Bagasi</div>
                        <div class="detail-value">20kg</div>
                    </div>
                    <div class="divider"></div>
                    <div class="total-row">
                        <div class="total-label">Total Pembayaran</div>
                        <div class="total-value">Rp1.350.000</div>
                    </div>
                </div>
            </div>

            <!-- Payment Methods -->
            <div class="payment-methods">
                <div class="section-title">
                    <div class="icon">1</div>
                    <span>Metode Pembayaran</span>
                </div>

                <div class="method-tabs">
                    <div class="method-tab active" data-tab="ewallet">E-Wallet</div>
                    <div class="method-tab" data-tab="va">Virtual Account</div>
                    <div class="method-tab" data-tab="cc">Kartu Kredit</div>
                </div>

                <!-- E-Wallet Options -->
                <div class="method-options active" id="ewallet-options">
                    <div class="payment-card selected" onclick="selectPayment(this)">
                        <div class="payment-icon">
                            <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z"/>
                            </svg>
                        </div>
                        <div class="payment-details">
                            <div class="payment-name">Gopay</div>
                            <div class="payment-desc">Bayar menggunakan saldo Gopay</div>
                        </div>
                        <input type="radio" name="payment" class="payment-radio" checked>
                    </div>

                    <div class="payment-card" onclick="selectPayment(this)">
                        <div class="payment-icon">
                            <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z"/>
                            </svg>
                        </div>
                        <div class="payment-details">
                            <div class="payment-name">OVO</div>
                            <div class="payment-desc">Bayar menggunakan saldo OVO</div>
                        </div>
                        <input type="radio" name="payment" class="payment-radio">
                    </div>

                    <div class="payment-card" onclick="selectPayment(this)">
                        <div class="payment-icon">
                            <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z"/>
                            </svg>
                        </div>
                        <div class="payment-details">
                            <div class="payment-name">Dana</div>
                            <div class="payment-desc">Bayar menggunakan saldo Dana</div>
                        </div>
                        <input type="radio" name="payment" class="payment-radio">
                    </div>
                </div>

                <!-- Virtual Account Options -->
                <div class="method-options" id="va-options">
                    <div class="va-banks">
                        <div class="va-bank selected" onclick="selectBank(this)">
                            <div class="va-icon">
                                <svg width="24" height="24" fill="#8B0000" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z"/>
                                </svg>
                            </div>
                            <div class="va-name">BCA</div>
                            <input type="radio" name="bank" class="payment-radio" checked>
                        </div>
                        <div class="va-bank" onclick="selectBank(this)">
                            <div class="va-icon">
                                <svg width="24" height="24" fill="#8B0000" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z"/>
                                </svg>
                            </div>
                            <div class="va-name">Mandiri</div>
                            <input type="radio" name="bank" class="payment-radio">
                        </div>
                        <div class="va-bank" onclick="selectBank(this)">
                            <div class="va-icon">
                                <svg width="24" height="24" fill="#8B0000" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z"/>
                                </svg>
                            </div>
                            <div class="va-name">BNI</div>
                            <input type="radio" name="bank" class="payment-radio">
                        </div>
                        <div class="va-bank" onclick="selectBank(this)">
                            <div class="va-icon">
                                <svg width="24" height="24" fill="#8B0000" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z"/>
                                </svg>
                            </div>
                            <div class="va-name">BRI</div>
                            <input type="radio" name="bank" class="payment-radio">
                        </div>
                                                <div class="va-bank" onclick="selectBank(this)">
                            <div class="va-icon">
                                <svg width="24" height="24" fill="#8B0000" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z"/>
                                </svg>
                            </div>
                            <div class="va-name">CIMB</div>
                            <input type="radio" name="bank" class="payment-radio">
                        </div>
                        <div class="va-bank" onclick="selectBank(this)">
                            <div class="va-icon">
                                <svg width="24" height="24" fill="#8B0000" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z"/>
                                </svg>
                            </div>
                            <div class="va-name">Permata</div>
                            <input type="radio" name="bank" class="payment-radio">
                        </div>
                    </div>
                </div>

                <!-- Credit Card Options -->
                <div class="method-options" id="cc-options">
                    <div class="payment-form active">
                        <div class="form-group">
                            <label class="form-label">Nomor Kartu</label>
                            <input type="text" class="form-control" placeholder="1234 5678 9012 3456">
                        </div>
                        <div class="form-row">
                            <div class="form-col">
                                <div class="form-group">
                                    <label class="form-label">Masa Berlaku</label>
                                    <input type="text" class="form-control" placeholder="MM/YY">
                                </div>
                            </div>
                            <div class="form-col">
                                <div class="form-group">
                                    <label class="form-label">CVV</label>
                                    <div class="input-with-icon">
                                        <input type="text" class="form-control" placeholder="123">
                                        <svg class="input-icon" width="18" height="18" fill="#6c757d" viewBox="0 0 24 24">
                                            <path d="M12 17c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm6-9h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM8.9 6c0-1.71 1.39-3.1 3.1-3.1s3.1 1.39 3.1 3.1v2H8.9V6z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Nama Pemilik Kartu</label>
                            <input type="text" class="form-control" placeholder="Nama sesuai kartu">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Promo Code -->
            <div class="promo-section">
                <div class="promo-header" onclick="togglePromo()">
                    <div class="promo-title">
                        <svg class="promo-icon" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20 12c0-1.1.9-2 2-2V6c0-1.1-.9-2-2-2H4c-1.1 0-1.99.9-1.99 2v4c1.1 0 1.99.9 1.99 2s-.89 2-2 2v4c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2v-4c-1.1 0-2-.9-2-2zm-4.42 4.8L12 14.5l-3.58 2.3 1.08-4.12-3.29-2.69 4.24-.25L12 5.8l1.54 3.95 4.24.25-3.29 2.69 1.09 4.11z"/>
                        </svg>
                        <span>Kode Promo</span>
                    </div>
                    <svg width="18" height="18" fill="#6c757d" viewBox="0 0 24 24">
                        <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/>
                    </svg>
                </div>
                <div class="promo-content" id="promo-content">
                    <div class="promo-input-group">
                        <input type="text" class="promo-input" placeholder="Masukkan kode promo">
                        <button class="apply-btn">Terapkan</button>
                    </div>
                </div>
            </div>

            <!-- Payment Summary -->
            <div class="payment-summary">
                <div class="section-title">
                    <div class="icon">2</div>
                    <span>Ringkasan Pembayaran</span>
                </div>
                <div class="summary-row">
                    <div class="summary-label">Harga Tiket</div>
                    <div class="summary-value">Rp1.200.000</div>
                </div>
                <div class="summary-row">
                    <div class="summary-label">Pajak & Biaya</div>
                    <div class="summary-value">Rp150.000</div>
                </div>
                <div class="summary-row">
                    <div class="summary-label">Biaya Admin</div>
                    <div class="summary-value">Rp0</div>
                </div>
                <div class="summary-row summary-total">
                    <div class="summary-label">Total Pembayaran</div>
                    <div class="summary-value">Rp1.350.000</div>
                </div>
            </div>
        </div>

        <!-- Bottom Action -->
        <div class="bottom-action">
            <div class="action-left">
                <div class="action-text">Total Pembayaran</div>
                <div class="action-price">Rp1.350.000</div>
            </div>
            <button class="confirm-btn" onclick="showSuccessModal()">Bayar Sekarang</button>
        </div>

        <!-- Payment Success Modal -->
        <div class="modal-overlay" id="success-modal">
            <div class="modal-content">
                <div class="modal-icon">
                    <svg width="40" height="40" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                    </svg>
                </div>
                <h3 class="modal-title">Pembayaran Berhasil!</h3>
                <p class="modal-text">Pembayaran Anda telah berhasil diproses. Tiket penerbangan akan dikirimkan ke email Anda dalam waktu 5 menit.</p>
                <button class="modal-btn" onclick="hideSuccessModal()">Lihat Tiket</button>
            </div>
        </div>
    </div>

    <script>
        // Function to go back
        function goBack() {
            window.history.back();
        }

        // Function to select payment method
        function selectPayment(element) {
            const cards = document.querySelectorAll('.payment-card');
            cards.forEach(card => card.classList.remove('selected'));
            element.classList.add('selected');
            const radio = element.querySelector('.payment-radio');
            radio.checked = true;
        }

        // Function to select bank
        function selectBank(element) {
            const banks = document.querySelectorAll('.va-bank');
            banks.forEach(bank => bank.classList.remove('selected'));
            element.classList.add('selected');
            const radio = element.querySelector('.payment-radio');
            radio.checked = true;
        }

        // Function to toggle promo code section
        function togglePromo() {
            const promoContent = document.getElementById('promo-content');
            promoContent.classList.toggle('active');
        }

        // Function to switch payment tabs
        document.querySelectorAll('.method-tab').forEach(tab => {
            tab.addEventListener('click', function() {
                // Remove active class from all tabs
                document.querySelectorAll('.method-tab').forEach(t => t.classList.remove('active'));
                // Add active class to clicked tab
                this.classList.add('active');
                
                // Hide all method options
                document.querySelectorAll('.method-options').forEach(option => {
                    option.classList.remove('active');
                });
                
                // Show selected method options
                const tabId = this.getAttribute('data-tab');
                document.getElementById(`${tabId}-options`).classList.add('active');
            });
        });

        // Function to show success modal
        function showSuccessModal() {
            document.getElementById('success-modal').classList.add('active');
        }

        // Function to hide success modal
        function hideSuccessModal() {
            document.getElementById('success-modal').classList.remove('active');
            // Redirect to ticket page
            window.location.href = 'ticket.html';
        }
    </script>
</body>
</html>