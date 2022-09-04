<nav class="navbar navbar-light navbar-expand-lg navigation-clean-button" style="background: #5e3f67;">
        <div class="container"><a class="navbar-brand" href="index.php" style="color: rgb(255,249,249);">Mantatini University</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active" href="subject.php" style="color: rgb(255,249,249);">ลงทะเบียนเรียน</a></li>
                    <li class="nav-item"><a class="nav-link" href="rule.php" style="color: rgb(255,249,249);">กฎระเบียน</a></li>
                    <li class="nav-item"><a class="nav-link" href="map.php" style="color: rgb(255,249,249);">แผนที่</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="drom.php" style="color: rgb(255,249,249);">หอผัก</a></li> -->
                </ul>
                <?php if(isset($_SESSION['firstname'])) { ?>
                <div class="navbar-text me-4" style="color: rgb(255,249,249);">
                        นิสิต : <?php echo $_SESSION['firstname']; ?> <?php echo $_SESSION['lastname']; ?>
                </div>
                <span class="navbar-text actions">
                    <a class="btn btn-danger" href="index.php?logout='0'" style="color: white;">ออกจากระบบ</a>
                </span>
                <?php } ?>
            </div>
        </div>
    </nav>