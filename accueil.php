<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yoga 2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<header>

    <nav>
            <ul>
                    <li><i class="fa fa-home" style="font-size: x-large;"></i><a>Accueil</a></li>
                    <li><i class="fa fa-calendar" style="font-size: x-large;"></i><a>Agenda</a></li>
                    <li><i class="fa fa-book" style="font-size: x-large;"></i><a>Live d'or</a></li>
                    <li><i class="fa fa-picture-o" style="font-size: x-large;"></i><a>Album photo</a></li>
                    <li><i class="fa fa-envelope" style="font-size: x-large;"></i><a>Nous contacter</a></li>
            </ul>
    </nav>

    <h3>OFFRE PROMO : Votre premier cours d'essai gratuit !</h3>

    <p>Bienvenue sur le site d'ila Yoga</p>

</header>

<h2>Résérver votre place pour le prochaine cours de Yoga du rire !</h2>
<div style="margin-left:120px;">

        <div>

            <table style="border: none;">

                    <thead> 

                        <th style="font-size:18px;text-align: left;padding-left: 30px;"colspan="3">Yoga du rire avec roger (paris) !</th>

                    </thead>

                    <tbody>

                        <tr> 
                            <td>05 janvier 2016</td>
                            <td>15h30</td>
                            <td>Réserver ce créneau</td> 
                        </tr>

                        <tr>
                            <td>10 janvier 2016</td>
                            <td>15h30</td>
                            <td>Réserver ce créneau</td>
                        </tr>
                        
                        <tr>
                            <td>06 janvier 2016</td>
                            <td>15h30</td>
                            <td>Réserver ce créneau</td>
                        </tr>
                        
                        <tr>
                            <td>06 janvier 2016</td>
                            <td>15h30</td>
                            <td>Réserver ce créneau</td>
                        </tr>

                    </tbody>

            </table>

        </div>

        <div style="margin-top:20px;">

            <table style="border: none;">

                    <thead> 

                        <th style="font-size:18px;text-align: left;padding-left: 30px;"colspan="3">Yoga du rire avec roger (marseille) !</th>

                    </thead>

                <tbody>

                    <tr> 
                        <td>05 janvier 2016</td>
                        <td>15h30</td>
                        <td>Réserver ce créneau</td> 
                    </tr>

                    <tr>
                        <td>10 janvier 2016</td>
                        <td>15h30</td>
                        <td>Réserver ce créneau</td>
                    </tr>
                    
                    <tr>
                        <td>06 janvier 2016</td>
                        <td>15h30</td>
                        <td>Réserver ce créneau</td>
                    </tr>
                    
                    <tr>
                        <td>06 janvier 2016</td>
                        <td>15h30</td>
                        <td>Réserver ce créneau</td>
                    </tr>

                </tbody>

            </table>

        </div>
</div>



<h2>Pour valider votre réservation, completer ce formulaire:</h2>


        <form action="./index.php">
                <fieldset>

                    <legend>Vos coordonees</legend>

                    

                            <div class="inline">

                                <label for="">votre prénom</label>
                                    <input type="text" required>
                                
                            </div>



                            <div class="inline">

                                <label for="">votre nom</label>
                                    <input type="text" required>
                                
                            </div>



                            <div class="inline">

                                <label for="email">votre mail</label>

                                    <input type="email" required>
                                
                            </div>


                    

                </fieldset>
        


        
            <fieldset>

                <legend>Quelles sont les raisons de votre venue ?</legend>

                <div class="inline">
                    <label for="checkbox1" >Besoin de me détendre</label>
                    <input type="checkbox" name="checkbox"/>
                </div>

                <div class="inline">
                    <label for="checkbox2">Mon médecin m'a conseillé de devenir</label>
                    <input type="checkbox" name="checkbox"/>
                </div>

                <div class="inline">
                    <label for="checkbox3">Je veux tester avec des amis</label>
                    <input type="checkbox" name="checkbox"/>
                </div>

            </fieldset>
        


        

                <fieldset>

                    <legend>Voulez-vous  souscrire à notre programme de fidélité ?</legend>

                        <div class="inline">
                            <label for="radio">Oui</label>
                            <input type="radio" name="radio" required/>
                        </div>

                        <div class="inline">
                            <label for="radio">Non</label>
                            <input type="radio" name="radio" required/>
                        </div>

                </fieldset>

        


        

            <fieldset>

                <legend>Comment avez-vous connu Ila Yoga</legend>

                    <div>

                    <select name="Par internet" id="" style="width: 100%;">

                        <option value="">Par internet</option>
                        <option value="">Par privé</option>
                        <option value="">par distance</option>
                        <option value="">par tanatan</option>

                    </select>
                    
                    </div>

            </fieldset>


            <div style="text-align: center;">

            <button type="submit"><b>Envoyer</b></button>

            </div>

        </form>




        <footer>
              <div style="background-color:#8B76D2;text-align:center;">
                    <img style="width: 50px;margin: 10px;" src="./img/footer.png" alt="footer">
                    
                <p class="p_footer">
                Cet exercice de <a href="#">3W Academy</a> est mis à disposition <a href="#">pour l'usage personnel des étudiants, Pas de Rediffusion - Attribution - 
                Pas d'Utilisation Commerciale - Pas de Modification - International.</a>Les autorisations au-delà du champ de cette licence peuvent être obtenues 
                auprès de <a href="mailto:contact@3wa.fr"> contact@3wa.fr</a>. Les maquettes ont été réalisées par Justine Muller.</p>

              </div>
        </footer>
</body>
</html>