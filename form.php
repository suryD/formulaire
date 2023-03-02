
 

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>My test page</title>
  </head>
  <body>
    <p>This is my page</p>
  </body>
</html>

<form  action="thanks.php"  method="POST">
  
    <label for="name">Nom</label>
    <div>
    <input type="text" id="name" name="name" placeholder="votre nom ">
    </div> 
    <div>
    <label for="prenom">prenom</label>
    <input type="text" id="prenom" name="prenom" placeholder="votre prenom">
    </div>
    <div>
    <label for="emailAddress">Email</label>
    <input id="emailAddress" type="email" name="email" placeholder="Votre email">
    </div>

    <div>
    <label for="phone">votre telephone:</label>
    <input type="tel" id="phone" name="phone" pattern="^[0-9]{10}]$">
    </div>

    <div>
    <label for="sujet">choix sujet</label>
    <select name="choix"> 
      <option value="jardinage" >jardinage</option>
      <option value= "decoration" >decoration</option>
      <option value="diy" >diy</option>
      <select>
    </div>

    <div>
    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Votre message" ></textarea>
    </div>

    <input type="submit" value="Envoyer">


    
  </form>
</div>


  
  
