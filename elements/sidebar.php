<nav id="sidebar">
    <div class="sidebar_title">
        <img src="./assets/logo2.svg" />
        <h4>Company</h4>
    </div>
    <div class="sidebar_content">
        <a href="./" <?php if (basename($_SERVER['PHP_SELF']) == 'index.php'){echo 'class="active"';} ?>><img src="./assets/icons/home.svg" />Dashboard</a>
        <hr/>
        <a href="./invoices" <?php if (basename($_SERVER['PHP_SELF']) == 'invoices.php'){echo 'class="active"';} ?>><img src="./assets/icons/invoice.svg" />Invoices</a>
        <a href="./clients" <?php if (basename($_SERVER['PHP_SELF']) == 'clients.php'){echo 'class="active"';} ?>><img src="./assets/icons/clients.svg" />Clients</a>
        <a href="./transactions" <?php if (basename($_SERVER['PHP_SELF']) == 'transactions.php'){echo 'class="active"';} ?>><img src="./assets/icons/wallet.svg" />Transactions</a>
</div>
</nav>
