@import url("https://fonts.googleapis.com/css2?family=Bruno+Ace&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
  text-decoration: none;
  text-transform: none;
}

html {
  scroll-behavior: smooth;
}

/*=======================
    ROOT VARIABLES
========================*/
:root {
  --primary-color: #efd6a7;
  --secondary-color: #fff;
  --header-text-color: #31610d;
  --button-color: #407c12;
  --hover-color: #45c445;
  --text-color: #000;
  --text-color-light: #e4e4e4;
  --bg-color: #fff;
  --header-height: 200px;
  --footer-height: 60px;
  --style-font: "Bruno Ace", sans-serif;
}

/*=======================
    HEADER STYLES
========================*/
header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: var(--secondary-color);
  color: var(--header-text-color);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  position: fixed;
  width: 100%;
  top: 0;
  z-index: 999;
  padding: 1rem 2rem;
  height: var(--header-height);
}

nav {
  display: flex;
  align-items: center;
  justify-content: space-around;
  width: 100%;
}

.logo {
  width: 200px;
  height: auto;
  padding: 0.6rem 0;
}

.logo a img {
  width: 100%;
  height: auto;
  object-fit: cover;
}

ul {
  display: flex;
  align-items: center;
  list-style: none;
}

ul li {
  margin: 0 1.2rem;
}

ul li a {
  color: var(--header-text-color);
  font-size: 1.1rem;
  font-weight: 600;
  padding: 0.7rem 1rem;
  border-radius: 6px;
  transition: color 0.3s ease;
  text-transform: uppercase;
  position: relative;
}

ul li a:hover {
  color: var(--hover-color);
}

ul li a::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -2px;
  width: 100%;
  height: 2px;
  background-color: var(--primary-color);
  transition: transform 0.3s ease;
  transform: scaleX(0);
  transform-origin: left;
}

ul li a:hover::after,
ul li a:focus::after,
ul li a.active::after {
  transform: scaleX(1);
}

ul li a:hover,
ul li a:focus,
ul li a.active {
  color: var(--hover-color);
}

/*=======================
    MOBILE NAVIGATION
========================*/
.menu-toggle {
  display: none;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 40px;
  height: 40px;
  cursor: pointer;
  z-index: 1001;
}

.menu-toggle span {
  display: block;
  width: 30px;
  height: 4px;
  background: var(--header-text-color);
  margin: 5px 0;
  border-radius: 2px;
  transition: all 0.3s;
}

.menu-toggle.active span:nth-child(1) {
  transform: rotate(45deg) translate(6px, 6px);
}

.menu-toggle.active span:nth-child(2) {
  opacity: 0;
}

.menu-toggle.active span:nth-child(3) {
  transform: rotate(-45deg) translate(7px, -7px);
}

@media (max-width: 1024px) {
  .menu-toggle {
    display: flex;
  }

  .nav-menu {
    display: none;
    flex-direction: column;
    width: 100vw;
    position: absolute;
    top: 100%;
    left: 0;
    background: var(--secondary-color);
    padding: 1rem 2rem;
    z-index: 1000;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
  }

  .nav-menu.show {
    display: flex;
  }

  .nav-menu li {
    width: 100%;
    margin: 0.5rem 0;
    border-bottom: 1px solid #eee;
    text-align: left;
    padding: 0.5rem 0;
  }
}

@media (max-width: 600px) {
  .nav-menu {
    padding: 1rem;
  }

  .logo {
    width: 140px;
  }
}

/*=======================
    HERO SECTION
========================*/
.hero {
  width: 100%;
  min-height: 400px;
  height: 65vh;
  margin: 100px 0 40px 0;
  border-radius: 20px;
  position: relative;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  align-items: stretch;
  background: #f8f8f8;
}

.hero-image {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
}

.hero-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

.overlay {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.3);
  z-index: 2;
  border-radius: 20px;
}

.hero-welcome {
  position: absolute;
  top: 2vw;
  left: 2vw;
  z-index: 3;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 0.5rem;
  background: rgba(255, 255, 255, 0.7);
  padding: 0.7rem 1.2rem;
  border-radius: 12px;
}

.hero-welcome img {
  width: 60px;
  height: auto;
  margin-bottom: 0.3rem;
}

.hero-welcome h3 {
  font-size: 1.2rem;
  color: var(--header-text-color);
  margin: 0;
  font-weight: 700;
}

.hero-content {
  position: relative;
  z-index: 4;
  text-align: center;
  color: #fff;
  padding: 2.5vw 4vw 3vw 4vw;
  margin: 0 auto 0 auto;
  max-width: 700px;
  background: rgba(0, 0, 0, 0.35);
  border-radius: 16px 16px 0 0;
  box-shadow: 0 2px 12px rgba(0, 0, 0, 0.12);
}

.hero-content h2 {
  font-size: 2.7rem;
  margin-bottom: 0.7rem;
  font-weight: 800;
  line-height: 1.1;
}

.hero-content p {
  font-size: 1.2rem;
  font-weight: 400;
  margin-bottom: 1.5rem;
}

.hero-content a.ctaBtn {
  font-size: 1.1rem;
  padding: 0.8rem 2rem;
  border-radius: 8px;
  background: var(--button-color);
  color: #fff;
  border: none;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.09);
}

@media (max-width: 900px) {
  .hero {
    height: 45vh;
    min-height: 320px;
  }

  .hero-content {
    padding: 4vw 2vw 2vw 2vw;
    max-width: 95vw;
  }

  .hero-content h2 {
    font-size: 2rem;
  }

  .hero-welcome {
    top: 1vw;
    left: 1vw;
    padding: 0.5rem 0.7rem;
  }

  .hero-welcome img {
    width: 40px;
  }
}

@media (max-width: 768px) {
  header {
    flex-direction: column;
    align-items: flex-start;
    padding: 1rem;
    position: relative;
  }

  nav {
    flex-direction: column;
    width: 100%;
  }

  .logo {
    margin-bottom: 1rem;
    text-align: left;
  }

  nav ul {
    flex-direction: column;
    width: 100%;
    display: none;
  }

  nav ul.show {
    display: flex;
  }

  nav ul li {
    width: 100%;
    text-align: center;
    margin: 0.5rem 0;
    padding: 0.5rem;
    border-bottom: 1px solid #eee;
  }

  .hero {
    margin-top: 10px;
    height: 600px;
  }

  .menu-toggle {
    display: block;
    position: absolute;
    top: 1rem;
    right: 1.5rem;
    cursor: pointer;
    z-index: 1000;
  }

  .menu-toggle span {
    display: block;
    width: 25px;
    height: 3px;
    background-color: #333;
    margin: 5px 0;
    transition: 0.3s;
  }

  .hero-content h2 {
    font-size: 2rem;
  }

  .hero-content p {
    font-size: 1.1rem;
  }
}

@media (max-width: 600px) {
  .hero {
    height: 300px;
    min-height: 200px;
    margin: 70px 0 20px 0;
    border-radius: 10px;
  }

  .hero-content {
    padding: 1rem 0.5rem 1rem 0.5rem;
    border-radius: 10px 10px 0 0;
  }

  .hero-content h2 {
    font-size: 1.2rem;
  }

  .hero-content p {
    font-size: 0.9rem;
  }

  .hero-welcome {
    top: 0.6vw;
    left: 0.6vw;
    border-radius: 8px;
    padding: 0.3rem 0.6rem;
  }

  .hero-welcome img {
    width: 28px;
  }

  .logo {
    width: 120px;
  }
}
