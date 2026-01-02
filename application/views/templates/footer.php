<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/apps.js') ?>"></script>

    <script>
    $(document).ready(function() {
        const modeSwitcher = $('#modeSwitcher');

        function forceApplyTheme(mode) {
            const lightLink = document.getElementById('lightTheme');
            const darkLink = document.getElementById('darkTheme');
            const body = document.getElementById('main-body');

            if (!lightLink || !darkLink) return;

            if (mode === 'light') {
                darkLink.disabled = true;
                lightLink.disabled = false;
                if(body) body.className = 'vertical light';
                localStorage.setItem('mode', 'light');
                document.cookie = "mode=light; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
            } else {
                lightLink.disabled = true;
                darkLink.disabled = false;
                if(body) body.className = 'vertical dark';
                localStorage.setItem('mode', 'dark');
                document.cookie = "mode=dark; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
            }
        }

        modeSwitcher.on('click', function(e) {
            e.preventDefault();
            const currentMode = $('body').hasClass('dark') ? 'light' : 'dark';
            forceApplyTheme(currentMode);
            
            // PAKSA REFRESH HALAMAN (Hanya satu kali saat klik)
            // Ini akan membuat PHP langsung membaca cookie baru tanpa login ulang
            location.reload(); 
        });
    });
    </script>