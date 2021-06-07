<footer class="footer">
    <div class="footer-nav">
        <?php 
            if($current=='index') echo '<a class="footer-link" href="notions.php">Suivant</a>';
            if($current=='notions') echo '<a class="footer-link" href="index.php">Accueil</a> <a class="footer-link" href="deficiences-visuelles.php">Suivant</a>';
            if($current=='deficiences-visuelles') echo '<a class="footer-link" href="notions.php">Précédent</a> <a class="footer-link" href="outils.php">Suivant</a>'; 
            if($current=='outils') echo '<a class="footer-link" href="deficiences-visuelles.php">Précédent</a> <a class="footer-link" href="bonnes-pratiques.php">Suivant</a>'; 
            if($current=='bonnes-pratiques') echo '<a class="footer-link" href="outils.php">Précédent</a> <a class="footer-link" href="statistiques.php">Suivant</a>'; 
            if($current=='statistiques') echo '<a class="footer-link" href="bonnes-pratiques.php">Précédent</a> <a class="footer-link" href="index.php">Accueil</a>';
            if($current=='mentions') echo '<a class="footer-link" href="index.php">Accueil</a>';
        ?>
        <a href="#" id="nav" class="footer-link">Navigation</a> 
        <div class="footer-nav-mentions-center"><a href="mentions.php" class="footer-link">Mentions légales</a></div>
    </div>
    
</footer>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.1/dist/chart.min.js"></script>
<script src="../scripts/main.js"></script>
</body>

</html>