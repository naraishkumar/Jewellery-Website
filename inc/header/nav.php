<div class="" id="naresh">
    <div class="nav">
        <?php include 'logo.php';?>
        <div class="center-nav-bar">
            <?php             
            $setting_key = "menu";
            $menu_json = get_Settings($setting_key);
            $menu_items = json_decode($menu_json, true);              
            if (isset($menu_items['top-menu'])) {
                foreach ($menu_items['top-menu'] as $item) { ?>
            <a href="<?php echo $item['link']; ?>"><span><?php echo $item['name']; ?></span>
                <div class="hover-line"></div>
            </a>
            <?php }
            } else {
                echo "Menu items not found.";
            }
            ?>
        </div>
        <div>
            <?php if (isset($_SESSION['username'])): ?>
            <span><?php echo $_SESSION['username']; ?></span>
            <img src="<?php echo $_SESSION['image']; ?>" alt="User Image"
                style="width:50px; height:50px; border-radius:50%; margin-left:15px; display: inline;">
            <?php endif; ?>
        </div>
        <div class="dropdown">
            <button onclick="toggleDropdown()" class="dropbtn"><i class="fa-solid fa-bars"></i></button>
            <div id="myDropdown" class="dropdown-content">
                <?php if (isset($_SESSION['username'])): ?>
                <a href="profile.php">Profile</a>
                <?php endif; ?>
                <a href="#link2">Help</a>
                <a href="#link2">Settings</a>
                <?php if (isset($_SESSION['username'])): ?>
                <a href="logout.php">Log Out</a>
                <?php else: ?>
                <a href="login.php">Log In</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>





<style>
        /* Dropdown container */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Dropdown button */
        .dropbtn {
            font-size: 30px;
            background: none;
            color: #fff;
            border: none;
            cursor: pointer;
            padding-left: 180px;
        }

        /* Dropdown content (hidden by default) */
        .dropdown-content {
            display: none;
            border-radius: 5px;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            border-radius: 5px;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        /* Show the dropdown menu on button click */
        .show {
            display: block;
        }
</style>
<script>
    function toggleDropdown() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn') && !event.target.matches('.dropbtn *')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>