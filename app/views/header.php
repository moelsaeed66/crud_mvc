<!DOCTYPE html>
<html>
<head>
    <title>Product Store</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo a {
            color: #fff;
            text-decoration: none;
            font-size: 24px;
        }

        .nav-links {
            list-style: none;
            display: flex;
        }

        .nav-links li {
            margin-left: 20px;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .product {
            width: 300px;
            padding: 20px;
            margin: 20px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .product img {
            width: 200px;
            height: auto;
            margin-bottom: 10px;
        }

        .product h2 {
            margin-bottom: 10px;
        }

        .product p {
            color: #666;
        }

        button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        /* Responsive Styles */

        @media screen and (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .nav-links {
                display: none;
            }

            .nav-links.active {
                display: flex;
                flex-direction: column;
            }

            .nav-links li {
                margin: 10px 0;
            }

            .menu-icon {
                width: 30px;
                height: auto;
                cursor: pointer;
            }
        }
    </style>
    <script>
        function toggleMenu() {
            var navLinks = document.getElementById("navLinks");
            navLinks.classList.toggle("active");
        }
    </script>

</head>
<body>
<header>
    <nav class="navbar">
        <div class="logo">
            <a href="#">Product Store</a>
        </div>
        <ul class="nav-links" id="navLinks">
            <li><a href="<?=BURL;?>product/index">Home</a></li>
            <li><a href="<?=BURL;?>product/show">Products</a></li>
            <li><a href="<?=BURL;?>product/add">Add product</a></li>
        </ul>
        <img src="https://th.bing.com/th/id/R.d9c17b5b5d569584203b7b1bd5766fec?rik=GtgJgWG8Ie40jg&riu=http%3a%2f%2fcreativeworldschool.com%2fwp-content%2fuploads%2f2014%2f10%2ftothegrocerystore_icon.png&ehk=bRobj06WxPF0iE6epW7jxkrFuRtYsTlCkwWlabDbedc%3d&risl=&pid=ImgRaw&r=0" class="menu-icon" onclick="toggleMenu()" width="3%">
    </nav>
</header>