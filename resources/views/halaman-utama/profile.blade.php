<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Numa</title>
    <link href="https://unpkg.com/lucide@latest/dist/lucide.min.css" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
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
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.1);
            --shadow-md: 0 4px 6px rgba(0,0,0,0.1);
            --shadow-lg: 0 10px 15px rgba(0,0,0,0.1);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: var(--bg-light);
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
            transition: var(--transition);
        }

        .back-btn:hover {
            background: rgba(255,255,255,0.3);
        }

        .header-title {
            flex: 1;
            text-align: center;
        }

        .header-title h1 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 2px;
        }

        .menu-btn {
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
            transition: var(--transition);
        }

        .menu-btn:hover {
            background: rgba(255,255,255,0.3);
        }

        /* Sidebar Menu */
        .sidebar {
            position: fixed;
            top: 0;
            right: -100%;
            width: 280px;
            height: 100%;
            background: var(--white);
            box-shadow: var(--shadow-lg);
            z-index: 1000;
            transition: var(--transition);
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        .sidebar.active {
            right: 0;
        }

        .sidebar-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.5);
            z-index: 999;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
        }

        .sidebar-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .sidebar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid var(--bg-gray);
        }

        .sidebar-title {
            font-size: 18px;
            font-weight: 600;
            color: var(--primary-color);
        }

        .close-sidebar {
            background: none;
            border: none;
            font-size: 24px;
            color: var(--text-light);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            transition: var(--transition);
        }

        .close-sidebar:hover {
            background: var(--bg-light);
        }

        .sidebar-menu {
            flex: 1;
            overflow-y: auto;
        }

        .sidebar-item {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            margin-bottom: 5px;
            border-radius: 8px;
            transition: var(--transition);
            cursor: pointer;
        }

        .sidebar-item:hover {
            background: var(--bg-light);
        }

        .sidebar-icon {
            width: 36px;
            height: 36px;
            background: var(--bg-light);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            color: var(--primary-color);
        }

        .sidebar-text {
            font-size: 14px;
            font-weight: 500;
            flex: 1;
        }

        .sidebar-footer {
            padding-top: 15px;
            border-top: 1px solid var(--bg-gray);
        }

        .logout-btn {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            color: #dc3545;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            border-radius: 8px;
        }

        .logout-btn:hover {
            background: rgba(220, 53, 69, 0.1);
        }

        .logout-icon {
            margin-right: 12px;
            color: #dc3545;
        }

        /* Profile Content */
        .profile-content {
            padding: 20px 15px 80px;
        }

        /* Profile Header */
        .profile-header {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 25px;
            position: relative;
        }

        .profile-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid white;
            box-shadow: var(--shadow-md);
            margin-bottom: 15px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 36px;
            font-weight: bold;
        }

        .avatar-edit {
            position: absolute;
            bottom: 20px;
            right: calc(50% - 70px);
            background: var(--primary-color);
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            cursor: pointer;
            border: 2px solid white;
            box-shadow: var(--shadow-sm);
        }

        .profile-name {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 5px;
            color: var(--text-dark);
            margin-left: -20px;
        }

        .profile-email {
            font-size: 14px;
            color: var(--text-light);
        }

        /* Profile Sections */
        .profile-section {
            margin-bottom: 25px;
            animation: fadeIn 0.5s ease-out;
        }

        .section-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding-bottom: 8px;
            border-bottom: 1px solid var(--bg-gray);
        }

        .section-icon {
            width: 30px;
            height: 30px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-right: 12px;
        }

        .section-title {
            font-size: 16px;
            font-weight: 600;
            flex: 1;
            color: var(--text-dark);
        }

        .edit-btn {
            color: var(--primary-color);
            background: none;
            border: none;
            font-weight: 500;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 14px;
        }

        /* Profile Info */
        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .info-item {
            margin-bottom: 12px;
        }

        .info-label {
            font-size: 12px;
            color: var(--text-light);
            margin-bottom: 4px;
        }

        .info-value {
            font-size: 14px;
            font-weight: 500;
            padding: 8px 12px;
            background: var(--bg-light);
            border-radius: 8px;
            min-height: 38px;
            display: flex;
            align-items: center;
        }

        /* Edit Mode */
        .edit-mode .info-value {
            background: var(--white);
            border: 1px solid var(--bg-gray);
            padding: 7px 11px;
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
            padding: 12px 20px;
            border-top: 1px solid var(--bg-gray);
            box-shadow: var(--shadow-md);
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
            padding: 5px 10px;
            border-radius: 8px;
            text-decoration: none;
            color: inherit;
        }

        .nav-item.active {
            color: var(--primary-color);
        }

        .nav-item.active .nav-icon {
            background: var(--primary-color);
            color: var(--white);
        }

        .nav-item.active .nav-label {
            color: var(--primary-color);
            font-weight: 600;
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
            font-size: 11px;
            color: var(--text-light);
            font-weight: 500;
            transition: var(--transition);
        }

        /* Responsive adjustments */
        @media (min-width: 500px) {
            .container {
                max-width: 500px;
                margin: 0 auto;
                box-shadow: var(--shadow-lg);
            }
            
            .profile-content {
                padding: 25px 20px 80px;
            }
        }

        /* Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <div class="header-top">
                <button class="back-btn" onclick="goBack()">
                    <i data-lucide="arrow-left"></i>
                </button>
                <div class="header-title">
                    <h1>Profil Saya</h1>
                </div>
                <button class="menu-btn" onclick="toggleSidebar()">
                    <i data-lucide="menu"></i>
                </button>
            </div>
        </div>

        <!-- Sidebar Overlay -->
        <div class="sidebar-overlay" id="sidebarOverlay" onclick="toggleSidebar()"></div>

        <!-- Sidebar Menu -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <div class="sidebar-title">Menu</div>
                <button class="close-sidebar" onclick="toggleSidebar()">
                    <i data-lucide="x"></i>
                </button>
            </div>
            <div class="sidebar-menu">
                <div class="sidebar-item" onclick="navigateTo('kebijakan')">
                    <div class="sidebar-icon">
                        <i data-lucide="shield"></i>
                    </div>
                    <div class="sidebar-text">Kebijakan Privasi</div>
                </div>
                <div class="sidebar-item" onclick="navigateTo('tentang')">
                    <div class="sidebar-icon">
                        <i data-lucide="info"></i>
                    </div>
                    <div class="sidebar-text">Tentang Kami</div>
                </div>
                <div class="sidebar-item" onclick="window.open('https://wa.me/6281132222500', '_blank')">
                    <div class="sidebar-icon">
                        <i data-lucide="help-circle"></i>
                    </div>
                    <div class="sidebar-text">Bantuan</div>
                </div>
            </div>
            <div class="sidebar-footer">
                <div class="logout-btn" onclick="confirmLogout()">
                    <div class="logout-icon">
                        <i data-lucide="log-out"></i>
                    </div>
                    <div class="sidebar-text">Keluar</div>
                </div>
            </div>
        </div>

        <!-- Profile Content -->
        <div class="profile-content">
            <!-- Profile Header -->
            <div class="profile-header">
                <div class="profile-avatar" id="profile-avatar">JD</div>
                <div class="avatar-edit" onclick="openAvatarModal()">
                    <i data-lucide="edit-2" width="16" height="16"></i>
                </div>
                <h2 class="profile-name">John Doe</h2>
                <p class="profile-email">john.doe@example.com</p>
            </div>

            <!-- Personal Information Section -->
            <div class="profile-section">
                <div class="section-header">
                    <div class="section-icon">
                        <i data-lucide="user"></i>
                    </div>
                    <div class="section-title">Informasi Pribadi</div>
                    <button class="edit-btn" onclick="toggleEditMode('personal-info')">
                        <i data-lucide="edit-2" width="14" height="14"></i>
                        Edit
                    </button>
                </div>

                <div class="info-grid" id="personal-info">
                    <div class="info-item">
                        <div class="info-label">Nama Panggilan</div>
                        <div class="info-value">John</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Nama Depan</div>
                        <div class="info-value">John</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Nama Belakang</div>
                        <div class="info-value">Doe</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Jenis Kelamin</div>
                        <div class="info-value">Laki-laki</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Tanggal Lahir</div>
                        <div class="info-value">15/05/1990</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Kebangsaan</div>
                        <div class="info-value">Indonesia</div>
                    </div>
                </div>
            </div>

            <!-- Contact Information Section -->
            <div class="profile-section">
                <div class="section-header">
                    <div class="section-icon">
                        <i data-lucide="phone"></i>
                    </div>
                    <div class="section-title">Kontak</div>
                    <button class="edit-btn" onclick="toggleEditMode('contact-info')">
                        <i data-lucide="edit-2" width="14" height="14"></i>
                        Edit
                    </button>
                </div>

                <div class="info-grid" id="contact-info">
                    <div class="info-item">
                        <div class="info-label">Email</div>
                        <div class="info-value">john.doe@example.com</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Nomor HP</div>
                        <div class="info-value">+6281234567890</div>
                    </div>
                    <div class="info-item" style="grid-column: span 2;">
                        <div class="info-label">Alamat</div>
                        <div class="info-value">Jl. Sudirman No. 123, Jakarta Selatan</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Navigation -->
        <div class="bottom-nav">
            <div class="nav-items">
                <a href="/home" class="nav-item">
                    <div class="nav-icon">
                        <i data-lucide="home"></i>
                    </div>
                    <div class="nav-label">Beranda</div>
                </a>
                <a href="/tiket" class="nav-item">
                    <div class="nav-icon">
                        <i data-lucide="ticket"></i>
                    </div>
                    <div class="nav-label">Carter</div>
                </a>
                <a href="/profile" class="nav-item active">
                    <div class="nav-icon">
                        <i data-lucide="user"></i>
                    </div>
                    <div class="nav-label">Profil</div>
                </a>
            </div>
        </div>
    </div>

    <!-- SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Initialize Lucide icons
        lucide.createIcons();
        
        // Function to go back
        function goBack() {
            window.history.back();
        }

        // Function to toggle sidebar
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebarOverlay');
            
            sidebar.classList.toggle('active');
            overlay.classList.toggle('active');
            
            // Prevent body scrolling when sidebar is open
            document.body.style.overflow = sidebar.classList.contains('active') ? 'hidden' : '';
        }

        // Function to navigate
        function navigateTo(page) {
            window.location.href = '/' + page;
        }

        // Function to toggle edit mode
        function toggleEditMode(sectionId) {
            const section = document.getElementById(sectionId);
            const isEditing = section.classList.contains('edit-mode');
            
            if (isEditing) {
                // Save changes
                section.classList.remove('edit-mode');
                showSuccessToast('Perubahan berhasil disimpan!');
            } else {
                // Enter edit mode
                section.classList.add('edit-mode');
            }
        }

        // Function to show success toast
        function showSuccessToast(message) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });
            
            Toast.fire({
                icon: 'success',
                title: message
            });
        }

        // Function to confirm logout
        function confirmLogout() {
            Swal.fire({
                title: 'Konfirmasi',
                text: 'Apakah Anda yakin ingin keluar?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#8B0000',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Ya, Keluar',
                cancelButtonText: 'Batal',
                customClass: {
                    popup: 'animated bounceIn'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    // Perform logout
                    logout();
                }
            });
        }

        // Logout function
        function logout() {
            // Show loading
            Swal.fire({
                title: 'Memproses...',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });
            
            // Simulate logout process
            setTimeout(() => {
                window.location.href = '/login';
            }, 1000);
        }

        // Function to open avatar modal
        function openAvatarModal() {
            Swal.fire({
                title: 'Ubah Foto Profil',
                html: `
                    <div style="text-align: center; margin-top: 20px;">
                        <div style="width: 120px; height: 120px; border-radius: 50%; background: #f0f0f0; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                            <i data-lucide="user" width="48" height="48" style="color: #8B0000;"></i>
                        </div>
                        <input type="file" id="avatarUpload" accept="image/*" style="display: none;">
                        <button onclick="document.getElementById('avatarUpload').click()" style="background: #8B0000; color: white; border: none; padding: 10px 20px; border-radius: 8px; cursor: pointer; margin-right: 10px;">
                            <i data-lucide="upload" width="16" height="16"></i> Unggah Foto
                        </button>
                        <button onclick="removeAvatar()" style="background: #f8f9fa; color: #dc3545; border: 1px solid #dc3545; padding: 10px 20px; border-radius: 8px; cursor: pointer;">
                            <i data-lucide="trash-2" width="16" height="16"></i> Hapus
                        </button>
                    </div>
                `,
                showConfirmButton: false,
                showCloseButton: true,
                customClass: {
                    popup: 'animated bounceIn'
                }
            });
            
            // Re-initialize icons in the modal
            setTimeout(() => {
                lucide.createIcons();
            }, 100);
        }

        // Function to remove avatar
        function removeAvatar() {
            Swal.fire({
                title: 'Konfirmasi',
                text: 'Apakah Anda yakin ingin menghapus foto profil?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#8B0000',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Ya, Hapus',
                cancelButtonText: 'Batal',
                customClass: {
                    popup: 'animated bounceIn'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    // Perform avatar removal
                    document.getElementById('profile-avatar').textContent = 'JD';
                    Swal.fire({
                        title: 'Berhasil!',
                        text: 'Foto profil telah dihapus.',
                        icon: 'success',
                        timer: 1500,
                        showConfirmButton: false,
                        customClass: {
                            popup: 'animated bounceIn'
                        }
                    });
                }
            });
        }

        // Close sidebar when clicking outside
        document.addEventListener('click', function(e) {
            const sidebar = document.getElementById('sidebar');
            const menuBtn = document.querySelector('.menu-btn');
            
            if (sidebar.classList.contains('active') && 
                !sidebar.contains(e.target) && 
                e.target !== menuBtn && 
                !menuBtn.contains(e.target)) {
                toggleSidebar();
            }
        });
    </script>
</body>
</html>