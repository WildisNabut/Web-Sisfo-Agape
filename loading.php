<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMP Agape Indah</title>
    <style>
        /* Gaya umum untuk halaman */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        /* Overlay loading */
        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.9);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        /* Spinner loading */
        .spinner {
            width: 50px;
            height: 50px;
            border: 5px solid #ddd;
            border-top: 5px solid #3498db;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        /* Animasi berputar */
        @keyframes spin {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        /* Konten disembunyikan saat loading */
        .content {
            display: none;
        }
    </style>
</head>
<body>
    <!-- Overlay loading -->
    <div class="loading-overlay">
        <div class="spinner"></div>
    </div>
    <script>
        // Script untuk menghilangkan animasi loading
        document.addEventListener('DOMContentLoaded', () => {
            const loadingOverlay = document.querySelector('.loading-overlay');
            const content = document.querySelector('.content');

            // Simulasi proses loading
            setTimeout(() => {
                loadingOverlay.style.display = 'none'; // Hilangkan overlay
                content.style.display = 'block'; // Tampilkan konten
            }, 3000); // Durasi loading (3 detik)
        });
    </script>
</body>
</html>
