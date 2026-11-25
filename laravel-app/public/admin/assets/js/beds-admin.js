(function () {
    'use strict';

    var toggleButton = document.getElementById('admin-theme-toggle');
    var root = document.documentElement;
    var sidebarToggle = document.getElementById('topnav-hamburger-icon');
    var verticalOverlay = document.querySelector('.vertical-overlay');
    var sidebarScroll = document.getElementById('scrollbar');

    function recalculateSidebarScroll() {
        if (!sidebarScroll) return;

        var topbar = document.getElementById('page-topbar');
        var topbarHeight = topbar ? topbar.offsetHeight : 70;
        var targetHeight = 'calc(100vh - ' + topbarHeight + 'px)';

        sidebarScroll.style.height = targetHeight;
        sidebarScroll.style.maxHeight = targetHeight;

        if (window.SimpleBar && typeof window.SimpleBar.instances !== 'undefined') {
            var instance = window.SimpleBar.instances.get(sidebarScroll);
            if (instance && typeof instance.recalculate === 'function') {
                instance.recalculate();
            }
        }
    }

    function toggleSidebarMenu() {
        var isDesktop = window.innerWidth >= 1024;

        if (isDesktop) {
            var currentSize = root.getAttribute('data-sidebar-size') || 'lg';
            root.setAttribute('data-sidebar-size', currentSize === 'lg' ? 'sm' : 'lg');
            sessionStorage.setItem('data-sidebar-size', root.getAttribute('data-sidebar-size'));
            return;
        }

        document.body.classList.toggle('vertical-sidebar-enable');
    }

    function applyTheme(theme) {
        var isDark = theme === 'dark';

        root.setAttribute('data-bs-theme', theme);
        root.setAttribute('data-topbar', isDark ? 'dark' : 'light');
        root.setAttribute('data-sidebar', isDark ? 'dark' : 'light');

        localStorage.setItem('beds_admin_theme', theme);

        if (toggleButton) {
            toggleButton.innerHTML = isDark
                ? '<i class="bx bx-sun fs-22"></i>'
                : '<i class="bx bx-moon fs-22"></i>';
            toggleButton.setAttribute('aria-label', isDark ? 'Switch to light mode' : 'Switch to dark mode');
        }

        // Sync Velzon preference store for compatibility.
        sessionStorage.setItem('data-bs-theme', theme);
        sessionStorage.setItem('data-topbar', isDark ? 'dark' : 'light');
        sessionStorage.setItem('data-sidebar', isDark ? 'dark' : 'light');
    }

    var initialTheme = localStorage.getItem('beds_admin_theme') || root.getAttribute('data-bs-theme') || 'light';
    applyTheme(initialTheme);

    if (window.innerWidth >= 1024) {
        root.setAttribute('data-sidebar-size', 'lg');
        sessionStorage.setItem('data-sidebar-size', 'lg');
    }

    if (toggleButton) {
        toggleButton.addEventListener('click', function () {
            var current = root.getAttribute('data-bs-theme') || 'light';
            applyTheme(current === 'dark' ? 'light' : 'dark');
        });
    }

    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', function (event) {
            event.preventDefault();
            toggleSidebarMenu();
            recalculateSidebarScroll();
        });
    }

    if (verticalOverlay) {
        verticalOverlay.addEventListener('click', function () {
            document.body.classList.remove('vertical-sidebar-enable');
        });
    }

    window.addEventListener('resize', recalculateSidebarScroll);
    window.addEventListener('orientationchange', recalculateSidebarScroll);

    recalculateSidebarScroll();
})();
