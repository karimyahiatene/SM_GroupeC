    <nav id="navigation_produits">
            <?php
            global $pdo;
            $sql ="SELECT codeC, libelleC, codeC_parent FROM tb_categorie ORDER BY codeC_parent, libelleC";
            try{
                // Tableau qui contient la liste
                $menu = array(
                'items' => array(),
                'parents' => array()
                );
                $pdo_select = $pdo->prepare($sql);
                $pdo_select->execute();
                // Construit la liste depuis les données dans la DB
                while ($items = $pdo_select->fetch())
                {
                    $menu['items'][$items['codeC']] = $items;
                    $menu['parents'][$items['codeC_parent']][] = $items['codeC'];
                }
            } catch (PDOException $e)
            {
                echo 'Erreur SQL : '. $e->getMessage().'<br />'; die();
            }
            echo '<ul id="produits">';
            echo buildMenu(0,'', $menu);
            echo '</ul>';
            ?>
    </nav>