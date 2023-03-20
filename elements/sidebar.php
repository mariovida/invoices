<nav id="sidebar">
    <div class="sidebar_title">
        <img src="./assets/logo2.svg" />
        <h4>Company</h4>
    </div>
    <div class="sidebar_content">
        <a href="./" <?php if (basename($_SERVER['PHP_SELF']) == 'index.php'){echo 'class="active"';} ?>>Dashboard</a>
        <hr/>
        <a href="./invoices" <?php if (basename($_SERVER['PHP_SELF']) == 'invoices.php'){echo 'class="active"';} ?>>Invoices</a>
        <a href="./clients" <?php if (basename($_SERVER['PHP_SELF']) == 'clients.php'){echo 'class="active"';} ?>>Clients</a>
</div>
</nav>
