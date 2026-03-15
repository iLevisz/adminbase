<div class="main-content">
    <header class="topbar">
        <div class="topbar-left">
            <button class="menu-toggle" id="menuToggle">☰</button>
        </div>
        <div class="topbar-right">
            <button class="theme-toggle" id="themeToggle" title="Alternar Tema">
                <span class="icon-light">☀️</span>
                <span class="icon-dark">🌙</span>
            </button>
            <div class="divider"></div>
            <div class="user-profile">
                <span class="user-name">Olá, <?php echo htmlspecialchars($_SESSION['user_name']); ?></span>
                <div class="avatar">
                    <?php echo strtoupper(substr($_SESSION['user_name'], 0, 1)); ?>
                </div>
                <a href="../auth/logout.php" class="btn-logout">Sair</a>
            </div>
        </div>
    </header>
    <main class="content-area">