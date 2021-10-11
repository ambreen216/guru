<?php
vc_map(array(
    "name" 			=>__("Advanced Banner", "awavcl"),
    "category" 		=> 'Advanced Elements',
    "description"	=> "Interactive banner",
    "base" 			=> "awavc_banner",
    "class" 		=> "",
    "icon" 			=> "awavc-banner-icon",

    "params" 	=> array(

        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Styles", "awavcl"),
            "param_name" => "banner_style",
            "admin_label"        => true,
            "value" => array(
                __("Style 1","awavcl") => 'banner1',   
                __("Style 2","awavcl") => 'banner2',   
                __("Style 3","awavcl") => 'banner3',   
                __("Style 4","awavcl") => 'banner4',   
                __("Style 5","awavcl") => 'banner5',   
                __("Style 6","awavcl") => 'banner6',   
                __("Style 7","awavcl") => 'banner7',   
                __("Style 8","awavcl") => 'banner8',   
                __("Style 9","awavcl") => 'banner9',   
            ),
           ),
        
        array(
            "type" => "checkbox",
            "heading" => __("Banner style 7 was meant to build fullwidth banner so you must take fullwidth section with background image", "awavcl"),
            "param_name" => "worked",
            "value" => array(
                __("Ok","awavcl") => '', 
            ),
            "description" => __("Got it", "awavcl"),
            "dependency"    => array( 'element' => "banner_style", 'value' => array('banner7',) ),
        ), 
        array(
            "type" => "attach_image",
            "heading" => __("Animated Image", "awavcl"),
            "param_name" => "img",
            "value" => "",
            "description" => __("select image", "awavcl"),
        ), 
        array(
            "type" => "textfield",
            "heading" => __("Text", 'awavcl'),
            "param_name" => "text1",
            "description" => __("", 'awavcl'),
            "value" => __("Little simple things.", 'awavcl'),
            ), 
        array(
            "type" => "textfield",
            "heading" => __("Text 2", 'awavcl'),
            "param_name" => "text2",
            "description" => __("", 'awavcl'),
            "value" => __("Live out your life", 'awavcl'),
            ), 
        array(
            "type" => "textfield",
            "heading" => __("Text 3", 'awavcl'),
            "param_name" => "text3",
            "description" => __("", 'awavcl'),
            "value" => __("EVERYTHING WITH CODE:", 'awavcl'),
            "dependency"    => array( 'element' => "banner_style", 'value' => array('banner7',) ),
            ), 
        array(
            "type" => "textfield",
            "heading" => __("Text 3 (Special caracter)", 'awavcl'),
            "param_name" => "text3_span",
            "description" => __("", 'awavcl'),
            "value" => __("NEW 30", 'awavcl'),
            "dependency"    => array( 'element' => "banner_style", 'value' => array('banner7',) ),
            ), 
            
        
        array(
        "type"              => "dropdown",
        "heading"           => __( "Custom Font Family (on offer Text)", "awavc" ),
        "param_name"        => "font_family",
        "value"             => array(
            "Theme Default" => "",
            "ABeeZee" => "ABeeZee",
            "Abel" => "Abel",
            "Abril Fatface" => "Abril+Fatface",
            "Aclonica" => "Aclonica",
            "Acme" => "Acme",
            "Actor" => "Actor",
            "Adamina" => "Adamina",
            "Advent Pro" => "Advent+Pro",
            "Aguafina Script" => "Aguafina+Script",
            "Akronim" => "Akronim",
            "Aladin" => "Aladin",
            "Aldrich" => "Aldrich",
            "Alegreya" => "Alegreya",
            "Alegreya SC" => "Alegreya+SC",
            "Alex Brush" => "Alex+Brush",
            "Alfa Slab One" => "Alfa+Slab+One",
            "Alice" => "Alice",
            "Alike" => "Alike",
            "Alike Angular" => "Alike+Angular",
            "Allan" => "Allan",
            "Allerta" => "Allerta",
            "Allerta Stencil" => "Allerta+Stencil",
            "Allura" => "Allura",
            "Almendra" => "Almendra",
            "Almendra Display" => "Almendra+Display",
            "Almendra SC" => "Almendra+SC",
            "Amarante" => "Amarante",
            "Amaranth" => "Amaranth",
            "Amatic SC" => "Amatic+SC",
            "Amethysta" => "Amethysta",
            "Anaheim" => "Anaheim",
            "Andada" => "Andada",
            "Andika" => "Andika",
            "Angkor" => "Angkor",
            "Annie Use Your Telescope" => "Annie+Use+Your+Telescope",
            "Anonymous Pro" => "Anonymous+Pro",
            "Antic" => "Antic",
            "Antic Didone" => "Antic+Didone",
            "Antic Slab" => "Antic+Slab",
            "Anton" => "Anton",
            "Arapey" => "Arapey",
            "Arbutus" => "Arbutus",
            "Arbutus Slab" => "Arbutus+Slab",
            "Architects Daughter" => "Architects+Daughter",
            "Archivo Black" => "Archivo+Black",
            "Archivo Narrow" => "Archivo+Narrow",
            "Arimo" => "Arimo",
            "Arizonia" => "Arizonia",
            "Armata" => "Armata",
            "Artifika" => "Artifika",
            "Arvo" => "Arvo",
            "Asap" => "Asap",
            "Asset" => "Asset",
            "Astloch" => "Astloch",
            "Asul" => "Asul",
            "Atomic Age" => "Atomic+Age",
            "Aubrey" => "Aubrey",
            "Audiowide" => "Audiowide",
            "Autour One" => "Autour+One",
            "Average" => "Average",
            "Average Sans" => "Average+Sans",
            "Averia Gruesa Libre" => "Averia+Gruesa+Libre",
            "Averia Libre" => "Averia+Libre",
            "Averia Sans Libre" => "Averia+Sans+Libre",
            "Averia Serif Libre" => "Averia+Serif+Libre",
            "Bad Script" => "Bad+Script",
            "Balthazar" => "Balthazar",
            "Bangers" => "Bangers",
            "Basic" => "Basic",
            "Battambang" => "Battambang",
            "Baumans" => "Baumans",
            "Bayon" => "Bayon",
            "Belgrano" => "Belgrano",
            "Belleza" => "Belleza",
            "BenchNine" => "BenchNine",
            "Bentham" => "Bentham",
            "Berkshire Swash" => "Berkshire+Swash",
            "Bevan" => "Bevan",
            "Bigelow Rules" => "Bigelow+Rules",
            "Bigshot One" => "Bigshot+One",
            "Bilbo" => "Bilbo",
            "Bilbo Swash Caps" => "Bilbo+Swash+Caps",
            "Bitter" => "Bitter",
            "Black Ops One" => "Black+Ops+One",
            "Bokor" => "Bokor",
            "Bonbon" => "Bonbon",
            "Boogaloo" => "Boogaloo",
            "Bowlby One" => "Bowlby+One",
            "Bowlby One SC" => "Bowlby+One+SC",
            "Brawler" => "Brawler",
            "Bree Serif" => "Bree+Serif",
            "Bubblegum Sans" => "Bubblegum+Sans",
            "Bubbler One" => "Bubbler+One",
            "Buda" => "Buda",
            "Buenard" => "Buenard",
            "Butcherman" => "Butcherman",
            "Butterfly Kids" => "Butterfly+Kids",
            "Cabin" => "Cabin",
            "Cabin Condensed" => "Cabin+Condensed",
            "Cabin Sketch" => "Cabin+Sketch",
            "Caesar Dressing" => "Caesar+Dressing",
            "Cagliostro" => "Cagliostro",
            "Calligraffitti" => "Calligraffitti",
            "Cambo" => "Cambo",
            "Candal" => "Candal",
            "Cantarell" => "Cantarell",
            "Cantata One" => "Cantata+One",
            "Cantora One" => "Cantora+One",
            "Capriola" => "Capriola",
            "Cardo" => "Cardo",
            "Carme" => "Carme",
            "Carrois Gothic" => "Carrois+Gothic",
            "Carrois Gothic SC" => "Carrois+Gothic+SC",
            "Carter One" => "Carter+One",
            "Caudex" => "Caudex",
            "Cedarville Cursive" => "Cedarville+Cursive",
            "Ceviche One" => "Ceviche+One",
            "Changa One" => "Changa+One",
            "Chango" => "Chango",
            "Chau Philomene One" => "Chau+Philomene+One",
            "Chela One" => "Chela+One",
            "Chelsea Market" => "Chelsea+Market",
            "Chenla" => "Chenla",
            "Cherry Cream Soda" => "Cherry+Cream+Soda",
            "Cherry Swash" => "Cherry+Swash",
            "Chewy" => "Chewy",
            "Chicle" => "Chicle",
            "Chivo" => "Chivo",
            "Cinzel" => "Cinzel",
            "Cinzel Decorative" => "Cinzel+Decorative",
            "Clicker Script" => "Clicker+Script",
            "Coda" => "Coda",
            "Coda Caption" => "Coda+Caption",
            "Codystar" => "Codystar",
            "Combo" => "Combo",
            "Comfortaa" => "Comfortaa",
            "Coming Soon" => "Coming+Soon",
            "Concert One" => "Concert+One",
            "Condiment" => "Condiment",
            "Content" => "Content",
            "Contrail One" => "Contrail+One",
            "Convergence" => "Convergence",
            "Cookie" => "Cookie",
            "Copse" => "Copse",
            "Corben" => "Corben",
            "Courgette" => "Courgette",
            "Cousine" => "Cousine",
            "Coustard" => "Coustard",
            "Covered By Your Grace" => "Covered+By+Your+Grace",
            "Crafty Girls" => "Crafty+Girls",
            "Creepster" => "Creepster",
            "Crete Round" => "Crete+Round",
            "Crimson Text" => "Crimson+Text",
            "Croissant One" => "Croissant+One",
            "Crushed" => "Crushed",
            "Cuprum" => "Cuprum",
            "Cutive" => "Cutive",
            "Cutive Mono" => "Cutive+Mono",
            "Damion" => "Damion",
            "Dancing Script" => "Dancing+Script",
            "Dangrek" => "Dangrek",
            "Dawning of a New Day" => "Dawning+of+a+New+Day",
            "Days One" => "Days+One",
            "Delius" => "Delius",
            "Delius Swash Caps" => "Delius+Swash+Caps",
            "Delius Unicase" => "Delius+Unicase",
            "Della Respira" => "Della+Respira",
            "Denk One" => "Denk+One",
            "Devonshire" => "Devonshire",
            "Didact Gothic" => "Didact+Gothic",
            "Diplomata" => "Diplomata",
            "Diplomata SC" => "Diplomata+SC",
            "Domine" => "Domine",
            "Donegal One" => "Donegal+One",
            "Doppio One" => "Doppio+One",
            "Dorsa" => "Dorsa",
            "Dosis" => "Dosis",
            "Dr Sugiyama" => "Dr+Sugiyama",
            "Droid Sans" => "Droid+Sans",
            "Droid Sans Mono" => "Droid+Sans+Mono",
            "Droid Serif" => "Droid+Serif",
            "Duru Sans" => "Duru+Sans",
            "Dynalight" => "Dynalight",
            "EB Garamond" => "EB+Garamond",
            "Eagle Lake" => "Eagle+Lake",
            "Eater" => "Eater",
            "Economica" => "Economica",
            "Electrolize" => "Electrolize",
            "Elsie" => "Elsie",
            "Elsie Swash Caps" => "Elsie+Swash+Caps",
            "Emblema One" => "Emblema+One",
            "Emilys Candy" => "Emilys+Candy",
            "Engagement" => "Engagement",
            "Englebert" => "Englebert",
            "Enriqueta" => "Enriqueta",
            "Erica One" => "Erica+One",
            "Esteban" => "Esteban",
            "Euphoria Script" => "Euphoria+Script",
            "Ewert" => "Ewert",
            "Exo" => "Exo",
            "Expletus Sans" => "Expletus+Sans",
            "Fanwood Text" => "Fanwood+Text",
            "Fascinate" => "Fascinate",
            "Fascinate Inline" => "Fascinate+Inline",
            "Faster One" => "Faster+One",
            "Fasthand" => "Fasthand",
            "Federant" => "Federant",
            "Federo" => "Federo",
            "Felipa" => "Felipa",
            "Fenix" => "Fenix",
            "Finger Paint" => "Finger+Paint",
            "Fjalla One" => "Fjalla+One",
            "Fjord One" => "Fjord+One",
            "Flamenco" => "Flamenco",
            "Flavors" => "Flavors",
            "Fondamento" => "Fondamento",
            "Fontdiner Swanky" => "Fontdiner+Swanky",
            "Forum" => "Forum",
            "Francois One" => "Francois+One",
            "Freckle Face" => "Freckle+Face",
            "Fredericka the Great" => "Fredericka+the+Great",
            "Fredoka One" => "Fredoka+One",
            "Freehand" => "Freehand",
            "Fresca" => "Fresca",
            "Frijole" => "Frijole",
            "Fruktur" => "Fruktur",
            "Fugaz One" => "Fugaz+One",
            "GFS Didot" => "GFS+Didot",
            "GFS Neohellenic" => "GFS+Neohellenic",
            "Gabriela" => "Gabriela",
            "Gafata" => "Gafata",
            "Galdeano" => "Galdeano",
            "Galindo" => "Galindo",
            "Gentium Basic" => "Gentium+Basic",
            "Gentium Book Basic" => "Gentium+Book+Basic",
            "Geo" => "Geo",
            "Geostar" => "Geostar",
            "Geostar Fill" => "Geostar+Fill",
            "Germania One" => "Germania+One",
            "Gilda Display" => "Gilda+Display",
            "Give You Glory" => "Give+You+Glory",
            "Glass Antiqua" => "Glass+Antiqua",
            "Glegoo" => "Glegoo",
            "Gloria Hallelujah" => "Gloria+Hallelujah",
            "Goblin One" => "Goblin+One",
            "Gochi Hand" => "Gochi+Hand",
            "Gorditas" => "Gorditas",
            "Goudy Bookletter 1911" => "Goudy+Bookletter+1911",
            "Graduate" => "Graduate",
            "Grand Hotel" => "Grand+Hotel",
            "Gravitas One" => "Gravitas+One",
            "Great Vibes" => "Great+Vibes",
            "Griffy" => "Griffy",
            "Gruppo" => "Gruppo",
            "Gudea" => "Gudea",
            "Habibi" => "Habibi",
            "Hammersmith One" => "Hammersmith+One",
            "Hanalei" => "Hanalei",
            "Hanalei Fill" => "Hanalei+Fill",
            "Handlee" => "Handlee",
            "Hanuman" => "Hanuman",
            "Happy Monkey" => "Happy+Monkey",
            "Headland One" => "Headland+One",
            "Henny Penny" => "Henny+Penny",
            "Herr Von Muellerhoff" => "Herr+Von+Muellerhoff",
            "Holtwood One SC" => "Holtwood+One+SC",
            "Homemade Apple" => "Homemade+Apple",
            "Homenaje" => "Homenaje",
            "IM Fell DW Pica" => "IM+Fell+DW+Pica",
            "IM Fell DW Pica SC" => "IM+Fell+DW+Pica+SC",
            "IM Fell Double Pica" => "IM+Fell+Double+Pica",
            "IM Fell Double Pica SC" => "IM+Fell+Double+Pica+SC",
            "IM Fell English" => "IM+Fell+English",
            "IM Fell English SC" => "IM+Fell+English+SC",
            "IM Fell French Canon" => "IM+Fell+French+Canon",
            "IM Fell French Canon SC" => "IM+Fell+French+Canon+SC",
            "IM Fell Great Primer" => "IM+Fell+Great+Primer",
            "IM Fell Great Primer SC" => "IM+Fell+Great+Primer+SC",
            "Iceberg" => "Iceberg",
            "Iceland" => "Iceland",
            "Imprima" => "Imprima",
            "Inconsolata" => "Inconsolata",
            "Inder" => "Inder",
            "Indie Flower" => "Indie+Flower",
            "Inika" => "Inika",
            "Irish Grover" => "Irish+Grover",
            "Istok Web" => "Istok+Web",
            "Italiana" => "Italiana",
            "Italianno" => "Italianno",
            "Jacques Francois" => "Jacques+Francois",
            "Jacques Francois Shadow" => "Jacques+Francois+Shadow",
            "Jim Nightshade" => "Jim+Nightshade",
            "Jockey One" => "Jockey+One",
            "Jolly Lodger" => "Jolly+Lodger",
            "Josefin Sans" => "Josefin+Sans",
            "Josefin Slab" => "Josefin+Slab",
            "Joti One" => "Joti+One",
            "Judson" => "Judson",
            "Julee" => "Julee",
            "Julius Sans One" => "Julius+Sans+One",
            "Junge" => "Junge",
            "Jura" => "Jura",
            "Just Another Hand" => "Just+Another+Hand",
            "Just Me Again Down Here" => "Just+Me+Again+Down+Here",
            "Kameron" => "Kameron",
            "Karla" => "Karla",
            "Kaushan Script" => "Kaushan+Script",
            "Kavoon" => "Kavoon",
            "Keania One" => "Keania+One",
            "Kelly Slab" => "Kelly+Slab",
            "Kenia" => "Kenia",
            "Khmer" => "Khmer",
            "Kite One" => "Kite+One",
            "Knewave" => "Knewave",
            "Kotta One" => "Kotta+One",
            "Koulen" => "Koulen",
            "Kranky" => "Kranky",
            "Kreon" => "Kreon",
            "Kristi" => "Kristi",
            "Krona One" => "Krona+One",
            "La Belle Aurore" => "La+Belle+Aurore",
            "Lancelot" => "Lancelot",
            "Lato" => "Lato",
            "League Script" => "League+Script",
            "Leckerli One" => "Leckerli+One",
            "Ledger" => "Ledger",
            "Lekton" => "Lekton",
            "Lemon" => "Lemon",
            "Libre Baskerville" => "Libre+Baskerville",
            "Life Savers" => "Life+Savers",
            "Lilita One" => "Lilita+One",
            "Limelight" => "Limelight",
            "Linden Hill" => "Linden+Hill",
            "Lobster" => "Lobster",
            "Lobster Two" => "Lobster+Two",
            "Londrina Outline" => "Londrina+Outline",
            "Londrina Shadow" => "Londrina+Shadow",
            "Londrina Sketch" => "Londrina+Sketch",
            "Londrina Solid" => "Londrina+Solid",
            "Lora" => "Lora",
            "Love Ya Like A Sister" => "Love+Ya+Like+A+Sister",
            "Loved by the King" => "Loved+by+the+King",
            "Lovers Quarrel" => "Lovers+Quarrel",
            "Luckiest Guy" => "Luckiest+Guy",
            "Lusitana" => "Lusitana",
            "Lustria" => "Lustria",
            "Macondo" => "Macondo",
            "Macondo Swash Caps" => "Macondo+Swash+Caps",
            "Magra" => "Magra",
            "Maiden Orange" => "Maiden+Orange",
            "Mako" => "Mako",
            "Marcellus" => "Marcellus",
            "Marcellus SC" => "Marcellus+SC",
            "Marck Script" => "Marck+Script",
            "Margarine" => "Margarine",
            "Marko One" => "Marko+One",
            "Marmelad" => "Marmelad",
            "Marvel" => "Marvel",
            "Mate" => "Mate",
            "Mate SC" => "Mate+SC",
            "Maven Pro" => "Maven+Pro",
            "McLaren" => "McLaren",
            "Meddon" => "Meddon",
            "MedievalSharp" => "MedievalSharp",
            "Medula One" => "Medula+One",
            "Megrim" => "Megrim",
            "Meie Script" => "Meie+Script",
            "Merienda" => "Merienda",
            "Merienda One" => "Merienda+One",
            "Merriweather" => "Merriweather",
            "Merriweather Sans" => "Merriweather+Sans",
            "Metal" => "Metal",
            "Metal Mania" => "Metal+Mania",
            "Metamorphous" => "Metamorphous",
            "Metrophobic" => "Metrophobic",
            "Michroma" => "Michroma",
            "Milonga" => "Milonga",
            "Miltonian" => "Miltonian",
            "Miltonian Tattoo" => "Miltonian+Tattoo",
            "Miniver" => "Miniver",
            "Miss Fajardose" => "Miss+Fajardose",
            "Modern Antiqua" => "Modern+Antiqua",
            "Molengo" => "Molengo",
            "Molle" => "Molle",
            "Monda" => "Monda",
            "Monofett" => "Monofett",
            "Monoton" => "Monoton",
            "Monsieur La Doulaise" => "Monsieur+La+Doulaise",
            "Montaga" => "Montaga",
            "Montez" => "Montez",
            "Montserrat" => "Montserrat",
            "Montserrat Alternates" => "Montserrat+Alternates",
            "Montserrat Subrayada" => "Montserrat+Subrayada",
            "Moul" => "Moul",
            "Moulpali" => "Moulpali",
            "Mountains of Christmas" => "Mountains+of+Christmas",
            "Mouse Memoirs" => "Mouse+Memoirs",
            "Mr Bedfort" => "Mr+Bedfort",
            "Mr Dafoe" => "Mr+Dafoe",
            "Mr De Haviland" => "Mr+De+Haviland",
            "Mrs Saint Delafield" => "Mrs+Saint+Delafield",
            "Mrs Sheppards" => "Mrs+Sheppards",
            "Muli" => "Muli",
            "Mystery Quest" => "Mystery+Quest",
            "Neucha" => "Neucha",
            "Neuton" => "Neuton",
            "New Rocker" => "New+Rocker",
            "News Cycle" => "News+Cycle",
            "Niconne" => "Niconne",
            "Nixie One" => "Nixie+One",
            "Nobile" => "Nobile",
            "Nokora" => "Nokora",
            "Norican" => "Norican",
            "Nosifer" => "Nosifer",
            "Nothing You Could Do" => "Nothing+You+Could+Do",
            "Noticia Text" => "Noticia+Text",
            "Nova Cut" => "Nova+Cut",
            "Nova Flat" => "Nova+Flat",
            "Nova Mono" => "Nova+Mono",
            "Nova Oval" => "Nova+Oval",
            "Nova Round" => "Nova+Round",
            "Nova Script" => "Nova+Script",
            "Nova Slim" => "Nova+Slim",
            "Nova Square" => "Nova+Square",
            "Numans" => "Numans",
            "Nunito" => "Nunito",
            "Odor Mean Chey" => "Odor+Mean+Chey",
            "Offside" => "Offside",
            "Old Standard TT" => "Old+Standard+TT",
            "Oldenburg" => "Oldenburg",
            "Oleo Script" => "Oleo+Script",
            "Oleo Script Swash Caps" => "Oleo+Script+Swash+Caps",
            "Open Sans" => "Open+Sans",
            "Open Sans Condensed" => "Open+Sans+Condensed",
            "Oranienbaum" => "Oranienbaum",
            "Orbitron" => "Orbitron",
            "Oregano" => "Oregano",
            "Orienta" => "Orienta",
            "Original Surfer" => "Original+Surfer",
            "Oswald" => "Oswald",
            "Over the Rainbow" => "Over+the+Rainbow",
            "Overlock" => "Overlock",
            "Overlock SC" => "Overlock+SC",
            "Ovo" => "Ovo",
            "Oxygen" => "Oxygen",
            "Oxygen Mono" => "Oxygen+Mono",
            "PT Mono" => "PT+Mono",
            "PT Sans" => "PT+Sans",
            "PT Sans Caption" => "PT+Sans+Caption",
            "PT Sans Narrow" => "PT+Sans+Narrow",
            "PT Serif" => "PT+Serif",
            "PT Serif Caption" => "PT+Serif+Caption",
            "Pacifico" => "Pacifico",
            "Paprika" => "Paprika",
            "Parisienne" => "Parisienne",
            "Passero One" => "Passero+One",
            "Passion One" => "Passion+One",
            "Patrick Hand" => "Patrick+Hand",
            "Patrick Hand SC" => "Patrick+Hand+SC",
            "Patua One" => "Patua+One",
            "Paytone One" => "Paytone+One",
            "Peralta" => "Peralta",
            "Permanent Marker" => "Permanent+Marker",
            "Petit Formal Script" => "Petit+Formal+Script",
            "Petrona" => "Petrona",
            "Philosopher" => "Philosopher",
            "Piedra" => "Piedra",
            "Pinyon Script" => "Pinyon+Script",
            "Pirata One" => "Pirata+One",
            "Plaster" => "Plaster",
            "Play" => "Play",
            "Playball" => "Playball",
            "Playfair Display" => "Playfair+Display",
            "Playfair Display SC" => "Playfair+Display+SC",
            "Podkova" => "Podkova",
            "Poiret One" => "Poiret+One",
            "Poller One" => "Poller+One",
            "Poly" => "Poly",
            "Pompiere" => "Pompiere",
            "Pontano Sans" => "Pontano+Sans",
            "Port Lligat Sans" => "Port+Lligat+Sans",
            "Port Lligat Slab" => "Port+Lligat+Slab",
            "Prata" => "Prata",
            "Preahvihear" => "Preahvihear",
            "Press Start 2P" => "Press+Start+2P",
            "Princess Sofia" => "Princess+Sofia",
            "Prociono" => "Prociono",
            "Prosto One" => "Prosto+One",
            "Puritan" => "Puritan",
            "Purple Purse" => "Purple+Purse",
            "Quando" => "Quando",
            "Quantico" => "Quantico",
            "Quattrocento" => "Quattrocento",
            "Quattrocento Sans" => "Quattrocento+Sans",
            "Questrial" => "Questrial",
            "Quicksand" => "Quicksand",
            "Quintessential" => "Quintessential",
            "Qwigley" => "Qwigley",
            "Racing Sans One" => "Racing+Sans+One",
            "Radley" => "Radley",
            "Raleway" => "Raleway",
            "Raleway Dots" => "Raleway+Dots",
            "Rambla" => "Rambla",
            "Rammetto One" => "Rammetto+One",
            "Ranchers" => "Ranchers",
            "Rancho" => "Rancho",
            "Rationale" => "Rationale",
            "Redressed" => "Redressed",
            "Reenie Beanie" => "Reenie+Beanie",
            "Revalia" => "Revalia",
            "Ribeye" => "Ribeye",
            "Ribeye Marrow" => "Ribeye+Marrow",
            "Righteous" => "Righteous",
            "Risque" => "Risque",
            "Roboto" => "Roboto",
            "Roboto Condensed" => "Roboto+Condensed",
            "Rochester" => "Rochester",
            "Rock Salt" => "Rock+Salt",
            "Rokkitt" => "Rokkitt",
            "Romanesco" => "Romanesco",
            "Ropa Sans" => "Ropa+Sans",
            "Rosario" => "Rosario",
            "Rosarivo" => "Rosarivo",
            "Rouge Script" => "Rouge+Script",
            "Ruda" => "Ruda",
            "Rufina" => "Rufina",
            "Ruge Boogie" => "Ruge+Boogie",
            "Ruluko" => "Ruluko",
            "Rum Raisin" => "Rum+Raisin",
            "Ruslan Display" => "Ruslan+Display",
            "Russo One" => "Russo+One",
            "Ruthie" => "Ruthie",
            "Rye" => "Rye",
            "Sacramento" => "Sacramento",
            "Sail" => "Sail",
            "Salsa" => "Salsa",
            "Sanchez" => "Sanchez",
            "Sancreek" => "Sancreek",
            "Sansita One" => "Sansita+One",
            "Sarina" => "Sarina",
            "Satisfy" => "Satisfy",
            "Scada" => "Scada",
            "Schoolbell" => "Schoolbell",
            "Seaweed Script" => "Seaweed+Script",
            "Sevillana" => "Sevillana",
            "Seymour One" => "Seymour+One",
            "Shadows Into Light" => "Shadows+Into+Light",
            "Shadows Into Light Two" => "Shadows+Into+Light+Two",
            "Shanti" => "Shanti",
            "Share" => "Share",
            "Share Tech" => "Share+Tech",
            "Share Tech Mono" => "Share+Tech+Mono",
            "Shojumaru" => "Shojumaru",
            "Short Stack" => "Short+Stack",
            "Siemreap" => "Siemreap",
            "Sigmar One" => "Sigmar+One",
            "Signika" => "Signika",
            "Signika Negative" => "Signika+Negative",
            "Simonetta" => "Simonetta",
            "Sintony" => "Sintony",
            "Sirin Stencil" => "Sirin+Stencil",
            "Six Caps" => "Six+Caps",
            "Skranji" => "Skranji",
            "Slackey" => "Slackey",
            "Smokum" => "Smokum",
            "Smythe" => "Smythe",
            "Sniglet" => "Sniglet",
            "Snippet" => "Snippet",
            "Snowburst One" => "Snowburst+One",
            "Sofadi One" => "Sofadi+One",
            "Sofia" => "Sofia",
            "Sonsie One" => "Sonsie+One",
            "Sorts Mill Goudy" => "Sorts+Mill+Goudy",
            "Source Code Pro" => "Source+Code+Pro",
            "Source Sans Pro" => "Source+Sans+Pro",
            "Special Elite" => "Special+Elite",
            "Spicy Rice" => "Spicy+Rice",
            "Spinnaker" => "Spinnaker",
            "Spirax" => "Spirax",
            "Squada One" => "Squada+One",
            "Stalemate" => "Stalemate",
            "Stalinist One" => "Stalinist+One",
            "Stardos Stencil" => "Stardos+Stencil",
            "Stint Ultra Condensed" => "Stint+Ultra+Condensed",
            "Stint Ultra Expanded" => "Stint+Ultra+Expanded",
            "Stoke" => "Stoke",
            "Strait" => "Strait",
            "Sue Ellen Francisco" => "Sue+Ellen+Francisco",
            "Sunshiney" => "Sunshiney",
            "Supermercado One" => "Supermercado+One",
            "Suwannaphum" => "Suwannaphum",
            "Swanky and Moo Moo" => "Swanky+and+Moo+Moo",
            "Syncopate" => "Syncopate",
            "Tangerine" => "Tangerine",
            "Taprom" => "Taprom",
            "Tauri" => "Tauri",
            "Telex" => "Telex",
            "Tenor Sans" => "Tenor+Sans",
            "Text Me One" => "Text+Me+One",
            "The Girl Next Door" => "The+Girl+Next+Door",
            "Tienne" => "Tienne",
            "Tinos" => "Tinos",
            "Titan One" => "Titan+One",
            "Titillium Web" => "Titillium+Web",
            "Trade Winds" => "Trade+Winds",
            "Trocchi" => "Trocchi",
            "Trochut" => "Trochut",
            "Trykker" => "Trykker",
            "Tulpen One" => "Tulpen+One",
            "Ubuntu" => "Ubuntu",
            "Ubuntu Condensed" => "Ubuntu+Condensed",
            "Ubuntu Mono" => "Ubuntu+Mono",
            "Ultra" => "Ultra",
            "Uncial Antiqua" => "Uncial+Antiqua",
            "Underdog" => "Underdog",
            "Unica One" => "Unica+One",
            "UnifrakturCook" => "UnifrakturCook",
            "UnifrakturMaguntia" => "UnifrakturMaguntia",
            "Unkempt" => "Unkempt",
            "Unlock" => "Unlock",
            "Unna" => "Unna",
            "VT323" => "VT323",
            "Vampiro One" => "Vampiro+One",
            "Varela" => "Varela",
            "Varela Round" => "Varela+Round",
            "Vast Shadow" => "Vast+Shadow",
            "Vibur" => "Vibur",
            "Vidaloka" => "Vidaloka",
            "Viga" => "Viga",
            "Voces" => "Voces",
            "Volkhov" => "Volkhov",
            "Vollkorn" => "Vollkorn",
            "Voltaire" => "Voltaire",
            "Waiting for the Sunrise" => "Waiting+for+the+Sunrise",
            "Wallpoet" => "Wallpoet",
            "Walter Turncoat" => "Walter+Turncoat",
            "Warnes" => "Warnes",
            "Wellfleet" => "Wellfleet",
            "Wendy One" => "Wendy+One",
            "Wire One" => "Wire+One",
            "Yanone Kaffeesatz" => "Yanone+Kaffeesatz",
            "Yellowtail" => "Yellowtail",
            "Yeseva One" => "Yeseva+One",
            "Yesteryear" => "Yesteryear",
            "Zeyada" => "Zeyada",                    

        ),
        "description" 			=> "Need help to choose video check from https://fonts.google.com/ ",
        "group" 			=> "Settings",
        
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Text 1 Size', 'awavcl' ),
            'param_name'       => 'text1_sz',
            "value" => 32,
            "min" => 5,
            "max" => 99,
            "step" => 1,
            "unit" => "px",
            "description" => __("", "awavcl"),
            "group" => __("Settings", 'awavcl'),
           
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Text 2 Size', 'awavcl' ),
            'param_name'       => 'text2_sz',
            "value" => 18,
            "min" => 5,
            "max" => 99,
            "step" => 1,
            "unit" => "px",
            "description" => __("", "awavcl"),
            "group" => __("Settings", 'awavcl'),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Text 3 Size', 'awavcl' ),
            'param_name'       => 'text3_sz',
            "value" => 18,
            "min" => 5,
            "max" => 99,
            "step" => 1,
            "unit" => "px",
            "description" => __("", "awavcl"),
            "group" => __("Settings", 'awavcl'),            
            "dependency"    => array( 'element' => "banner_style", 'value' => array('banner7',) ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Text 1", 'awavcl'),
            "param_name" => "text1_clr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
            
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Test 2", 'awavcl'),
            "param_name" => "text2_clr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Test 3", 'awavcl'),
            "param_name" => "text3_clr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
            "dependency"    => array( 'element' => "banner_style", 'value' => array('banner7',) ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Test 3 (Special Text Color)", 'awavcl'),
            "param_name" => "text3_span_clr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
            "dependency"    => array( 'element' => "banner_style", 'value' => array('banner7',) ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Text on Hover", 'awavcl'),
            "param_name" => "text_clr_hvr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),
        array(
            "type" => "vc_link",
            "heading" => __("Button Text and Link", 'awavcl'),
            "param_name" => "btn_links",
            "description" => __("", 'awavcl'),
            "value" => __("Title", 'awavcl'),
            "group" => __("Button", 'awavcl'),
        ),
         
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Text Size', 'awavcl' ),
            'param_name'       => 'btn_text_sz',
            "value" => 16,
            "min" => 5,
            "max" => 99,
            "step" => 1,
            "unit" => "px",
            "description" => __("", "awavcl"),
            "group" => __("Button", 'awavcl'),
           
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Button Text Color", 'awavcl'),
            "param_name" => "btn_tx_clr",
            "value" => "",
            "group" => __("Button", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Button Text Color On Hover", 'awavcl'),
            "param_name" => "btn_tx_hvr",
            "value" => "",
            "group" => __("Button", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Button Background", 'awavcl'),
            "param_name" => "btn_bg",
            "value" => "",
            "group" => __("Button", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Button Background on Hover", 'awavcl'),
            "param_name" => "btn_bg_hvr",
            "value" => "",
            "group" => __("Button", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Button Border Color", 'awavcl'),
            "param_name" => "btn_brdr_clr",
            "value" => "",
            "group" => __("Button", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Button Border on Hover", 'awavcl'),
            "param_name" => "btn_brdr_clr_hvr",
            "value" => "",
            "group" => __("Button", 'awavcl'),
        ),
        array(
            "type" => "textfield",
            "heading" => esc_attr__("Extra class name", 'awavcl'),
            "param_name" => "el_class",
            "description" => esc_attr__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'awavcl'),
        ),

    )

));

function awavc_banner_shortcode($atts, $content = null) {
    extract(shortcode_atts(array(

                //'show_btnnnn' => 'Yes',
                'banner_style' => 'banner1',
                'img' => '',
                'text1' => '10% off',
                'text2' => 'YOUR NEXT PURCHASE',
                'text3' => 'EVERYTHING WITH CODE:',
                'text3_span' => 'NEW 30',
                'font_family' => '',
                'text1_sz' => '',
                'text2_sz' => '',
                'text3_sz' => '',
                'text1_clr' => '',
                'text2_clr' => '',
                'text3_clr' => '',
                'text3_span_clr' => '',
                'text_clr_hvr' => '',
                'btn_links' => '',
                'btn_text_sz' => '',
                'btn_tx_clr' => '',
                'btn_tx_hvr' => '',
                'btn_bg' => '',
                'btn_bg_hvr' => '',
                'btn_brdr_clr' => '',
                'btn_brdr_clr_hvr' => '',
                'el_class' => '',
    ), $atts));

    wp_register_style( 'awavcl.style-banner.css', plugins_url( '/css/style-banner.css',  __FILE__) );
    wp_enqueue_style( 'awavcl.style-banner.css' );
    //wp_register_script('awavcl.anim-img.js', plugins_url('js/', __FILE__), array("jquery"));
    //wp_enqueue_script('awavcl.anim-img.js');
    $image = wp_get_attachment_image_src( $img, 'full' );
    
    $btn_link   = vc_build_link( $btn_links);
    $btn_url   = $btn_link['url'];
    $btn_target   = $btn_link['target'];
    $btn_title   = $btn_link['title'];
    if(empty($btn_title)){
        $btn_title ='Shop Now';
    }    
             
        $html = '';    
        
                $i = (rand(1,33));
                 if( $font_family != '' ){$html .= '<style>@import url(https://fonts.googleapis.com/css?family='.$font_family.');</style>';}
            if($banner_style == 'banner1' ){
             
                $html .= '
                        
                    <style>.sale-banner2'.$i.':hover .sale_ttl{color:'.$text_clr_hvr.'!important;} .sale-banner2'.$i.'  .btn:hover{background-color:'.$btn_bg_hvr.'!important;color:'.$btn_tx_hvr.'!important;border-color:'.$btn_brdr_clr_hvr.'!important;};</style>
                    <div class="sale-banner2 sale-banner2'.$i.' sale-banner  '.$el_class.'" style="margin-bottom:50px;">
                        <div class="innerr">
                            <div class="image"><img src="'.$image[0].'" alt=""></div>
                            <div class="content row justify-content-between mg-col-md-12" >
                                <div class="mg-col-md-7 mg-col-sm-12  mg-col-xs-12">
                                    <h2 class="sale-percent sale_ttl" style="font-family:'.$font_family.';font-size:'.$text1_sz.'px;color:'.$text1_clr.';">'.$text1.'</h2>
                                    <span class="text" style="font-size:'.$text2_sz.'px;color:'.$text2_clr.';">'.$text2.'</span>
                                </div>
                                <div class="mg-col-md-3  mg-col-sm-12  mg-col-xs-12  text-center" style="float:; overflow:hidden">
                                    <a class="btn btn-hover-dark" target="'.$btn_target.'" href="'.$btn_url.'"  style="font-size:'.$btn_text_sz.'px;color:'.$btn_tx_clr.';background-color:'.$btn_bg.';border-color:'.$btn_brdr_clr.';">'.$btn_title.'</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>';
            }
            if($banner_style == 'banner2' ){
             
                $html .= '
                <style>.sale-banner4'.$i.':hover .sale_ttl{color:'.$text_clr_hvr.'!important;} .sale-banner4'.$i.'  .btn:hover{background-color:'.$btn_bg_hvr.'!important;color:'.$btn_tx_hvr.'!important;border-color:'.$btn_brdr_clr_hvr.'!important;};</style>

                <div class="sale-banner4 sale-banner sale-banner4'.$i.' '.$el_class.'" style="margin-bottom:50px;">
                        <div class="innerr">
                            <img src="'.$image[0].'" alt="Sale Banner Image">
                            <div class="content">
                                <h3 class="sub-title" style="font-size:'.$text1_sz.'px;color:'.$text1_clr.';">'.$text1.'</h3>
                                <h2 class="title sale_ttl" style="font-family:'.$font_family.';font-size:'.$text2_sz.'px;color:'.$text2_clr.';">'.$text2.'</h2>
                                <a class="btn btn-hover-dark" target="'.$btn_target.'" href="'.$btn_url.'"  style="font-size:'.$btn_text_sz.'px;color:'.$btn_tx_clr.';background-color:'.$btn_bg.';border-color:'.$btn_brdr_clr.';">'.$btn_title.'</a>
                            </div>
                        </div>
                    </div>';
            }
            if($banner_style == 'banner3' ){
             
                $html .= '
                <style>.sale-banner5'.$i.':hover .sale_ttl{color:'.$text_clr_hvr.'!important;}</style>
                    <div class="sale-banner5  sale-banner5'.$i.'  sale-banner '.$el_class.'" style="margin-bottom:50px;">
                        <a target="'.$btn_target.'" href="'.$btn_url.'" class="innerr">
                            <img src="'.$image[0].'" alt="Sale Banner Image">
                            <div class="content">
                                <h3 class="title sale_ttl" style="font-family:'.$font_family.';font-size:'.$text1_sz.'px;color:'.$text1_clr.';">'.$text1.'</h3>
                                <span class="price" style="font-size:'.$text2_sz.'px;color:'.$text2_clr.';">'.$text2.'</span>
                            </div>
                        </a>
                    </div>';
            }
            if($banner_style == 'banner4' ){
                
                $html .= '
                    <style>.sale-banner6'.$i.':hover .sale_ttl{color:'.$text_clr_hvr.'!important;} .sale-banner6'.$i.'  .link:hover{color:'.$btn_tx_hvr.'!important;border-color:'.$btn_brdr_clr_hvr.'!important;};</style>
                    <div class="sale-banner6 '.$el_class.'" style="margin-bottom:50px;">
                        <div class="innerr">
                            <img src="'.$image[0].'" alt="Sale Banner Image">
                            <div class="content">
                                <h3 class="title" sale_ttl" style="font-family:'.$font_family.';font-size:'.$text1_sz.'px;color:'.$text1_clr.';">'.$text1.'</h3>
                                <h4 class="price" style="font-size:'.$text2_sz.'px;color:'.$text2_clr.';">'.$text2.'</h4>
                                <a class="link" target="'.$btn_target.'" href="'.$btn_url.'"  style="font-size:'.$btn_text_sz.'px;color:'.$btn_tx_clr.';;">'.$btn_title.'</a>
                            </div>
                        </div>
                    </div>';
            }
            if($banner_style == 'banner5' ){
             
                $html .= '
                    <style>.sale-banner7'.$i.':hover .sale_ttl{color:'.$text_clr_hvr.'!important;}</style>
                    <a  target="'.$btn_target.'" href="'.$btn_url.'"><div class="sale-banner7  sale-banner7'.$i.' '.$el_class.'" style="margin-bottom:50px;">
                        <div class="innerr">
                            <div class="image"><img src="'.$image[0].'" alt="Sale Banner Image"></div>
                            <div class="content">
                                <h2 class="title sale_ttl" style="font-family:'.$font_family.';font-size:'.$text1_sz.'px;color:'.$text1_clr.';">'.$text1.'</h2>
                                <h3 class="sub-title" style="font-size:'.$text2_sz.'px;color:'.$text2_clr.';">'.$text2.'</h3>
                            </div>
                        </div>
                    </div></a>';
            }
            if($banner_style == 'banner6' ){
             
                $html .= '
                    <style>.sale-banner8'.$i.':hover .sale_ttl{color:'.$text_clr_hvr.'!important;} .sale-banner8'.$i.'  .btn:hover{color:'.$btn_tx_hvr.'!important;};</style>
                    <div class="sale-banner8 sale-banner8'.$i.' '.$el_class.'" style="margin-bottom:50px;">
                        <img src="'.$image[0].'" alt="Sale Banner Image">
                        <div class="content">
                            <h2 class="title sale_ttl" style="font-family:'.$font_family.';font-size:'.$text1_sz.'px;color:'.$text1_clr.';">'.$text1.'</h2>
                            <a class="link" target="'.$btn_target.'" href="'.$btn_url.'"  style="font-size:'.$btn_text_sz.'px;color:'.$btn_tx_clr.';">'.$btn_title.'</a>
                        </div>
                    </div>';
            }
            if($banner_style == 'banner7' ){
             
                $html .= '
                <style>.sale-banner9'.$i.':hover .sale_ttl{color:'.$text_clr_hvr.'!important;} .sale-banner9'.$i.'  .btn:hover{background-color:'.$btn_bg_hvr.'!important;color:'.$btn_tx_hvr.'!important;border-color:'.$btn_brdr_clr_hvr.'!important;};</style>
                    <div class="sale-banner9 sale-banner sale-banner9'.$i.' '.$el_class.'" style="margin-bottom:50px;">
                        <div class="innerr">
                            <div class="content">
                                <h3 class="title sale_ttl" style="font-family:'.$font_family.';font-size:'.$text1_sz.'px;color:'.$text1_clr.';">'.$text1.'</h3>
                                <span class="cuppon" style="font-size:'.$text3_sz.'px;color:'.$text3_clr.';">'.$text3.'  <span class="code" style="color:'.$text3_span_clr.';">'.$text3_span.'</span></span>
                                <span class="offer" style="font-size:'.$text2_sz.'px;color:'.$text2_clr.';">'.$text2.'</span>
                                <a class="btn btn-dark btn-hover-primary" target="'.$btn_target.'" href="'.$btn_url.'"  style="font-size:'.$btn_text_sz.'px;color:'.$btn_tx_clr.';background-color:'.$btn_bg.';border-color:'.$btn_brdr_clr.';">'.$btn_title.'</a>
                            </div>
                        </div>
                    </div>';
            }
            if($banner_style == 'banner8' ){
             
                $html .= '
                    <style>.sale-banner10'.$i.':hover .sale_ttl{color:'.$text_clr_hvr.'!important;} .sale-banner10'.$i.'  .btn:hover{color:'.$btn_tx_hvr.'!important;};</style>

                    <div class="sale-banner10 sale-banner10'.$i.' sale-banner '.$el_class.'" style="margin-bottom:50px;">
                        <div class="innerr">
                            <img src="'.$image[0].'" alt="Sale Banner Image">
                            <div class="content">
                                <span class="sub-title " style="font-size:'.$text1_sz.'px;color:'.$text1_clr.';">'.$text1.'</span>
                                <h2 class="title sale_ttl" style="font-family:'.$font_family.';font-size:'.$text2_sz.'px;color:'.$text2_clr.';">'.$text2.'</h2>
                                <a href="#" class="link" target="'.$btn_target.'" href="'.$btn_url.'"  style="font-size:'.$btn_text_sz.'px;color:'.$btn_tx_clr.';">'.$btn_title.'</a>
                            </div>
                        </div>
                    </div>';
            }
            if($banner_style == 'banner9' ){
             
                $html .= '
                    <style>.sale-banner11'.$i.':hover .sale_ttl{color:'.$text_clr_hvr.'!important;} .sale-banner11'.$i.'  .btn:hover{color:'.$btn_tx_hvr.'!important;};</style>
                    <div class="sale-banner11 sale-banner11'.$i.' '.$el_class.'" style="margin-bottom:50px;">
                        <div class="innerr">
                            <img src="'.$image[0].'" alt="">
                            <div class="content">
                                <h3 class="title sale_ttl" style="font-family:'.$font_family.';font-size:'.$text1_sz.'px;color:'.$text1_clr.';">'.$text1.'</h3>
                                <a href="#" class="link" target="'.$btn_target.'" href="'.$btn_url.'"  style="font-size:'.$btn_text_sz.'px;color:'.$btn_tx_clr.';">'.$btn_title.'</a>
                                
                            </div>
                        </div>
                    </div>';
            }
     
           


    
            


    return $html;
}

add_shortcode("awavc_banner", "awavc_banner_shortcode");