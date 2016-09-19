<?php


function buildMenu($esp, $parent, $menu) {
    $html = "";
    if (isset($menu['parents'][$parent])) {
        if ($esp == 1)
            $html .= "<ul>\n";
        foreach ($menu['parents'][$parent] as $itemId) {
            if (!isset($menu['parents'][$itemId])) {
                $html .= "<li>\n  <a href='index.php?categorie=" . $menu['items'][$itemId]['codeC'] . "'>" . $menu['items'][$itemId]['libelleC'] . "</a>\n</li> \n";
            }
            if (isset($menu['parents'][$itemId])) {
                $html .= "
             <li>\n  <a>" . $menu['items'][$itemId]['libelleC'] . "\n";
                $html .= buildMenu(1, $itemId, $menu);
                $html .= "</li> \n";
            }
        }
        if ($esp == 1)
            $html .= "</ul> \n";
    }
    return $html;
}
