<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Navigation</title>
</head>
<body>
    <header>
        <nav >
            <div class="navbar">
                <div> 
                    <img src="images/logo.png" alt="logo" class="logo-img img-rotate">
                </div>
                <div class="navbar-btn-md">
                    <div>
                        <img src="images/images-removebg-preview (3).png" alt="menu deroulant" class="navbar-md">
                    </div>
                    
                </div>
            </div>
            <div>
                <ul class="navbar__menu">
                    <li><a href="index.html">ACCEUIL</a></li>
                    <li><a href="a propos.html" >A PROPOS</a></li>
                    <li><a href="service.html">SERVICES</a></li>
                    <li><a href="nos_gares.html">NOS GARES</a></li>
                    <li><a href="reservation.html">RESERVATION</a></li>
                    <li><a href="Actualite.html">ACTUALITES</a></li>
                    <li><a href="contacts.html" class="navbar__menu--brdbtm">CONTACTS</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="banner-img">
            <h1>COMMENT NOUS CONTACTER</h1>
        </div>
        <section>
            <div class="card-container">
                  <div class="card">
                      <h3 class="card-titre color-orange">ADRESSE</h3>
                      <p class="card-desc">otchoumou1.kouamelan@uvci.edu.ci</p>
                      <p class="card-desc">aminata11.traore@uvci.edu.ci</p>
                      </div>
                  <div class="card">
                      <h3 class="card-titre color-orange">TELEPHONE</h3>
                      <p class="card-desc">0505633685</p>
                      <p class="card-desc">0709875141</p>
                  </div>
                  <div class="card">
                      <h3 class="card-titre color-orange">LOCALISATION</h3>
                      <p class="card-desc">Abidjan Bp 0254,Koumassi</p>
                  </div>
              </div>
          </section>
      
          <section class="form-position">
              <form action="" class="contact-form">
              <h1 class="color-orange">CONTACTEZ NOUS </h1>
              <input type="text" id="name" placeholder="Name" required>
              <input type="email" id="email" placeholder="E-mail" required>
              <input type="number" id="phone" placeholder="Phone Number" required>
              <input type="text" id="name" placeholder="Sujet" required>
              <textarea name="Message" id="message" placeholder="Message" height="fixed"></textarea>
              <div class="button">
                  <input type="submit" value="Envoyer">
              </div>
              </form>
          </section>
      
    </main>

    <footer class="border-blue">
            <p>Copyright &copy; 2024 - SKAE Transport</p></br>
    </footer>
</body>
</html>