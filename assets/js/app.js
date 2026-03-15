// criado com <3 por Levi
// github.com/ilevisz

document.addEventListener('DOMContentLoaded', function() {
    
    const themeToggles = document.querySelectorAll('.theme-toggle');
    
    themeToggles.forEach(toggle => {
        toggle.addEventListener('click', () => {
            const currentTheme = document.documentElement.getAttribute('data-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            
            document.documentElement.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
        })
    });

    const loginForm = document.getElementById('loginForm');
    
    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            let hasError = false;
            
            const loginInput = document.getElementById('login');
            const passwordInput = document.getElementById('password');
            const loginError = document.getElementById('loginError');
            const passwordError = document.getElementById('passwordError');
            
            loginError.textContent = '';
            passwordError.textContent = '';
            loginInput.style.borderColor = '';
            passwordInput.style.borderColor = '';
            
            if (loginInput.value.trim() === '') {
                loginError.textContent = 'O campo de usuário ou e-mail é obrigatório.';
                loginInput.style.borderColor = 'var(--danger-border)';
                hasError = true;
            }
            
            if (passwordInput.value.trim() === '') {
                passwordError.textContent = 'O campo de senha é obrigatório.';
                passwordInput.style.borderColor = 'var(--danger-border)';
                hasError = true;
            }
            
            if (hasError) {
                e.preventDefault();
            }
        });
    }

    const menuToggle = document.getElementById('menuToggle');
    const sidebar = document.getElementById('sidebar');

    if (menuToggle && sidebar) {
        menuToggle.addEventListener('click', function() {
            sidebar.classList.toggle('active');
        });

        document.addEventListener('click', function(e) {
            if (window.innerWidth <= 768) {
                if (!sidebar.contains(e.target) && !menuToggle.contains(e.target) && sidebar.classList.contains('active')) {
                    sidebar.classList.remove('active');
                }
            }
        });
    }
});