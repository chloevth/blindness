<?php $current="statistiques";
include "../includes/header.php";?>

    <div class="main">
        <div class="main__title">
            <h1 tabindex="0">V. Statistiques</h1>
        </div>
<!-- graphiques -->
        <div id="charts">
            
            <h2 class="charts__title" tabindex="0">Navigateurs</h2>
            <div class="charts__container">
                <div class="charts__item">
                    <canvas id="browser">Graphique des navigateurs les plus utilisés par les personnes aveugles pour naviguer sur internet.</canvas>
                </div>
                <p class="charts__item charts__item--paragraph" tabindex="0">Les navigateurs les plus utilisés par les personnes aveugles pour naviguer sur internet sont Firefox, Internet Explorer et Safari.</p>
            </div>

            <h2 class="charts__title" tabindex="0">Lecteurs d'écrans</h2>
            <div class="charts__container">
            <p class="charts__item charts__item--paragraph charts__item--inverse" tabindex="0">Les personnes aveugles utilisent majoirtairement un lecteur d'écran pour naviguer sur internet.</p>
                <div class="charts__item">
                    <canvas id="screen-reader">Graphique représentant l'usage des lecteurs d'écrans par les personnes aveugles pour naviguer sur internet.</canvas>
                </div>
               
            </div>


            <h2 class="charts__title" tabindex="0">Lecteurs d'écrans différents</h2>
            <div class="charts__container">
                <div class="charts__item">
                    <canvas id="switch-tools">Graphique représentant les usages de différents lecteurs d'écrans au travail et à domicile.</canvas>
                </div>
                <p class="charts__item charts__item--paragraph" tabindex="0">Les personnes aveugles utilisent majoirtairement un lecteur d'écran pour naviguer sur internet.
                </p>
            </div>

            <h2 class="charts__title" tabindex="0">Types d'écran</h2>
            <div class="charts__container">
                <p class="charts__item charts__item--paragraph charts__item--inverse" tabindex="0">Les 3 types d'écrans utilisés par les personnes aveugles sont NVDA, JAWS et autres.
                </p>
                <div class="charts__item">
                    <canvas id="type-screen">Graphique représentant les types de lecteurs d'écrans préférés des utilisateurs aveugles.</canvas>
                </div>
               
            </div>


            <h2 class="charts__title">Smartphones</h2>
            <div class="charts__container">
                <div class="charts__item">
                    <canvas id="phone-tools">Graphique des marques de téléphones mobiles utilisés pour naviguer sur internet.</canvas>
                </div>
                <p class="charts__item charts__item--paragraph" tabindex="0">Les iphones Apple sont les appareils mobiles préférés utilisés par les aveugles en terme d'accessibilité visuelle pour naviguer sur internet. 
                </p>
            </div>

         
        </div>
    
    </div>
    <?php include "../includes/footer.php";?>

  