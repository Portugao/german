ZWECK
-----------------
Das Modul "menutree" hat keine Funktionalität - es dient nur als ein "Container" für den Block. Die folgende Beschreibung betrifft daher nur die Funktionalität des Blockes.

MENUTREE BLOCK
-----------------
Der Menutree Block erlaubt die Erstellung hierarchischer Menüs mit mehreren Ebenen. Der Block kann mit Drag & Drop verwaltet werden.

VERWENDUNG
-----------------
Um einen Block hinzuzufügen folgt man der Standard-Prozedur: im Administrationsbereich wählt man unter dem Reiter "Layout" die Blockverwaltung aus und dort "Neuer Block" -> menutree/Treelike menu (menutree).
Solange bis das erste Element im Menü erstellt wurde, hat man die Möglichkeit ein bestehendes Menü zu importieren ("menu", "extmenu" und "menutree"). Falls in dem zu importierenden Menü die Option "Module anzeigen" aktiviert war, werden auch Links zu allen Modulen importiert.
Die Verwaltung dieses Blocks geschieht über Drag & Drop.
Der "Menutree" Block erlaubt die Benutzung der bekannten Kurzformen für Modul-Links: [Modul] oder {Module}.

Ein Menü, das von diesem Block generiert wird, ist eine ungeordnete Liste (mit "ul" und "li" Tags gebaut), welche die in der Blockverwaltung aufgebaute Struktur beachtet.
Das Paket enthält auch zwei Beispiel-Templates:
    "menutree/blocks_block_menutreeext.htm" - zeigt wie ein vertikales Dropdown-Menü formatiert wird.
    "menutree/blocks_block_vertical.htm" - Beispiel eines vertikalen Dropdown-Menüs.
    "menutree/blocks_block_tree.htm" - Beispiel eines "Baum-artigen" Menüs (ähnlich dem im Adminbereich, mit der Möglichkeit zum Auf- und Einklappen); dieses Template nutzt JavaScript.

Weitere interessante Templates für den MenuTree-Block gibt es auf der Seite des BlankTheme-Projektes (http://code.zikula.org/blanktheme/).

ZUGRIFFSRECHTE
-----------------
Das vom MenuTree-Block verwendete Permission-Schema ist das gleiche wie im Standard-Menü vom Core: man kann Permissions für den kompletten Block (über dessen Titel) oder nur für einzelne Elemente (über deren Link-Namen) definieren. Die für Elemente definierten Rechte werden an Unterelemente vererbt.

Das Permission-Schema sieht so aus
    Komponente: menutree:menutreeblock:
    Instanz:  Block Titel:Link name:

Die folgenden relevanten Rechte können gesetzt werden
NONE        Block oder Element wird nicht angezeigt
READ        Block oder Element wird angezeigt

Beispiel:

Gruppe         Komponente                 Instanz                  Recht
-------------------------------------------------------------------------------------
Unregistrierte menutree:menutreeblock:    Menu::                   NONE
Alle Gruppen   menutree:menutreeblock:    Menu:Administration:     NONE

Die erste Regel versteckt den Block mit dem Titel "Menu" für unregistrierte Benutzer.
Die zweite Regel versteckt das Element "Administration" (und alle eventuell existierenden Unterelemente) für alle Gruppen.
