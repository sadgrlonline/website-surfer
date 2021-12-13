<div class="navbar">
    <?php if (!isset($_SESSION['username'])): ?>
    <div class="item"><a href="/">Home</a></div>
    <?php else: ?>
    <div class="item"><a href="/website-surfer/dashboard/">Home</a></div>
    <?php endif?>
    <?php if (!isset($_SESSION['username'])): ?>
    <?php else: ?>
    <div class="item"><a href="/website-surfer/dashboard/view/">View</a></div>
    <?php endif?>
    <?php if (!isset($_SESSION['username'])): ?>
    <?php else: ?>
    <div class="item"><a href="/website-surfer/dashboard/submit/">Submit</a></div>
    <?php endif?>
    <?php if (!isset($_SESSION['username'])): ?>
    <div class="item"><a href="/website-surfer/login/">Login</a></div>
    <?php else: ?>
    <div class="item"><a href="/website-surfer/logout.php">Logout</a></div>
    <?php endif?>
</div>