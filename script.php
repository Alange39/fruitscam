<script>
    // JavaScript pour le menu mobile
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('navbar-menu');
        if (menu.classList.contains('hidden')) {
            menu.classList.remove('hidden');
        } else {
            menu.classList.add('hidden');
        }
    });

    // Pour le dropdown sur mobile
    document.getElementById('about-dropdown-button').addEventListener('click', function(e) {
        if (window.innerWidth < 768) {
            e.preventDefault();
            const dropdown = this.nextElementSibling;
            dropdown.classList.toggle('hidden');
        }
    });
</script>