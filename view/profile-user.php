<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profil utilisateur</title>
    <link rel="stylesheet" href="../build/styles/profile-user.css" />
  </head>
  <body>
    <header class="sticky top-0 z-50 bg-white drop-shadow-md">
      <nav>
        <ul>
          <li>
            <a href="index.html">
              <!-- <img src="../assest/images/logo-colok.svg" alt="logo du site pour aller à l'accueil" class="w-32 m-auto h-20"> -->
            </a>
          </li>
        </ul>
      </nav>
    </header>
<div class="background">
    <div class="circle circle-green"></div>
    <div class="circle circle-purple"></div>
    <div class="circle circle-blue"></div>
</div>
    <main class="">
      <h1 class="page-title">Mon profil</h1>
      <div class="profile-picture">
        <img src="../assets/images/profile_img.png" alt="" />
      </div>
      <div class="profile">
        <p>Information personnelle</p>
        <form class="profile-form" action="">
          <div class="name-container">
            <div class="input-container">
              <label htmlFor="last-name">Nom <span>*</span> </label>
              <input
                type="text"
                class="form-input"
                id="last-name"
                autocomplete="off"
                required
              />
            </div>
            <div class="input-container">
              <label htmlFor="last-name">Prénom <span>*</span> </label>
              <input
                type="text"
                class="form-input"
                id="first-name"
                autocomplete="off"
                required
              />
            </div>
          </div>
          <div class="input-container">
            <label htmlFor="email">Adresse mail<span>*</span> </label>
            <input
              type="email"
              class="form-input"
              autocomplete="off"
              id="email"
              required
            />
          </div>
          <div class="input-container">
            <label htmlFor="job">Profession</label>
            <input
              type="text"
              class="form-input"
              autocomplete="off"
              id="job"
              required
            />
          </div>
          <div class="input-container">
            <label htmlFor="schedule">Horaire<span>*</span> </label>
            <input
              type="text"
              class="form-input"
              autocomplete="off"
              id="schedule"
              required
            />
          </div>
          <div class="input-container">
            <label htmlFor="allergy">Allergies</label>
            <input
              type="text"
              class="form-input"
              autocomplete="off"
              id="allergy"
              required
            />
          </div>
          <div class="input-container">
            <label htmlFor="animals">Animaux</label>
            <input
              type="text"
              class="form-input"
              autocomplete="off"
              id="animals"
              required
            />
          </div>
          <div class="input-container">
            <label htmlFor="event">Evènements à venir?</label>
            <input
              type="text"
              class="form-input"
              autocomplete="off"
              id="event"
              required
            />
          </div>
          <button class="form-btn">Valider</button>
        </form>
      </div>
    </main>
    <!-- <div class="house">
      <img src="../assets/images/house_footer.svg" alt="">
  </div> -->
    <footer></footer>
  </body>
</html>
