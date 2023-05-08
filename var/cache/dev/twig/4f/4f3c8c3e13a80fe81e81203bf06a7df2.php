<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* template2.html.twig */
class __TwigTemplate_f8cca4546e27444bdd25ba2b65aa175f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>[Template] Sample Inner Page</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        echo " rel=\"icon\">
  <link href=";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-touch-icon.png"), "html", null, true);
        echo " rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">
  <link href=";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo " rel=\"stylesheet\">
  <link href=";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">
  <link href=";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">
  <link href=";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">
  <link href=";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.css"), "html", null, true);
        echo " rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo " rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: Logis
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"header d-flex align-items-center fixed-top\">
    <div class=\"container-fluid container-xl d-flex align-items-center justify-content-between\">

      <a href=\"index.html\" class=\"logo d-flex align-items-center\">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src=\"assets/img/logo.png\" alt=\"\"> -->
        <h1>Logis</h1>
      </a>

      <i class=\"mobile-nav-toggle mobile-nav-show bi bi-list\"></i>
      <i class=\"mobile-nav-toggle mobile-nav-hide d-none bi bi-x\"></i>
      <nav id=\"navbar\" class=\"navbar\">
        <ul>
          <li><a href=\"index.html\" class=\"active\">Home</a></li>
          <li><a href=\"about.html\">About</a></li>
          <li><a href=\"services.html\">Services</a></li>
          <li><a href=\"pricing.html\">Pricing</a></li>
          <li class=\"dropdown\"><a href=\"#\"><span>Drop Down</span> <i class=\"bi bi-chevron-down dropdown-indicator\"></i></a>
            <ul>
              <li><a href=\"#\">Drop Down 1</a></li>
              <li class=\"dropdown\"><a href=\"#\"><span>Deep Drop Down</span> <i class=\"bi bi-chevron-down dropdown-indicator\"></i></a>
                <ul>
                  <li><a href=\"#\">Deep Drop Down 1</a></li>
                  <li><a href=\"#\">Deep Drop Down 2</a></li>
                  <li><a href=\"#\">Deep Drop Down 3</a></li>
                  <li><a href=\"#\">Deep Drop Down 4</a></li>
                  <li><a href=\"#\">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href=\"#\">Drop Down 2</a></li>
              <li><a href=\"#\">Drop Down 3</a></li>
              <li><a href=\"#\">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href=\"contact.html\">Contact</a></li>
          <li><a class=\"get-a-quote\" href=\"get-a-quote.html\">Get a Quote</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <main id=\"main\">

    <section id=\"hero\" class=\"hero d-flex align-items-center\">
    <div class=\"container\">
      <div class=\"row gy-4 d-flex justify-content-between\">
        <div class=\"col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center\">
          <h2 data-aos=\"fade-up\">Your Lightning Fast Delivery Partner</h2>
          <p data-aos=\"fade-up\" data-aos-delay=\"100\">Facere distinctio molestiae nisi fugit tenetur repellat non praesentium nesciunt optio quis sit odio nemo quisquam. eius quos reiciendis eum vel eum voluptatem eum maiores eaque id optio ullam occaecati odio est possimus vel reprehenderit</p>

          <form action=\"/fr/Recherche/Show\" id=\"FormRecherche\" method=\"get\">            <div class=\"main-search-form-wrapper-01\">
                <div class=\"hero-image\"></div>
                <div class=\"hero-gradient\"></div>
                <div class=\"container hero-panel-container\">
                     <div class=\"hero-header-texting\">
                       <div class=\"container\">
                            <h1>
        Achetez vos tickets d'autocar <span class=\"visible-xs-block\"></span><i>au meilleur prix!</i>
        </h1>

                        </div>
                      </div>
                    <div class=\"main-search-form-inner bg-change-focus-addclass-wrapper\">

                            <div class=\"form-holder\">

                                <div class=\"row gap-1\">

                                    <div class=\"col-xss-12 col-xs-12 col-sm-7 col-md-7\">

                                        <div class=\"row gap-1\">
                                            <div class=\"col-xss-12 col-xs-5 col-sm-5\">
                                                <div class=\"form-group bg-change-focus-addclass  mb-1-xss\">
                                                    <select Id=\"villeDepartId\" class=\"form-control selectpicker\" data-done-button=\"true\" data-done-button-text=\"OK\" data-dropup-auto=\"false\" data-live-search=\"true\" data-live-search-normalize=\"true\" data-live-search-placeholder=\"Recherche\" data-size=\"7\" id=\"villeDepartId\" name=\"villeDepartId\" required=\"required\"><option value=\"\">--- Ville du d&#233;part ---</option>
<option value=\"505\">Aarab Sebbah Ziz</option>
<option value=\"1\">Agadir</option>
<option value=\"426\">Agadir Bouachiba</option>
<option value=\"11\">Agadir - Gare Inzegane</option>
<option value=\"235\">Agdz</option>
<option value=\"358\">Aghbalou N&#39;Cerdan</option>
<option value=\"504\">Aglou</option>
<option value=\"204\">Agouim</option>
<option value=\"274\">Ahfir</option>
<option value=\"351\">Ain Aicha</option>
<option value=\"26\">Ain Bni Mathar</option>
<option value=\"465\">Ain Chair</option>
<option value=\"268\">Ain Defali</option>
<option value=\"507\">Ait Aissa Ou Brahim</option>
<option value=\"120\">Ait Amira</option>
<option value=\"353\">Ait Attab</option>
<option value=\"16\">Ait Baha</option>
<option value=\"373\">Ait Daoud</option>
<option value=\"192\">Ait Iaaza</option>
<option value=\"170\">A&#239;t Ishaq</option>
<option value=\"252\">Ait Kamara</option>
<option value=\"375\">Ait Majden</option>
<option value=\"139\">Ait Melloul</option>
<option value=\"388\">Ait Ouabelli</option>
<option value=\"257\">Ait Ourir</option>
<option value=\"236\">Ait Saoun</option>
<option value=\"369\">Ait Sedrate Sahl Gharbia</option>
<option value=\"71\">Ait Abdellah</option>
<option value=\"315\">Ajdir</option>
<option value=\"382\">Akhfenir</option>
<option value=\"209\">Akka</option>
<option value=\"314\">Aklim</option>
<option value=\"66\">Aknoul</option>
<option value=\"226\">Al Aounate</option>
<option value=\"92\">Al Aroui</option>
<option value=\"65\">Al Hoce&#239;ma</option>
<option value=\"468\">Amerzgane</option>
<option value=\"541\">Ameskend</option>
<option value=\"230\">Amizimz</option>
<option value=\"338\">Anza</option>
<option value=\"506\">Aoufous</option>
<option value=\"44\">Aoulouz</option>
<option value=\"337\">Aourir</option>
<option value=\"461\">Arbaoua</option>
<option value=\"62\">Arfoud</option>
<option value=\"280\">Argoube</option>
<option value=\"143\">Assilah</option>
<option value=\"46\">Assa</option>
<option value=\"335\">Assaka (Haha)</option>
<option value=\"384\">Assaki</option>
<option value=\"262\">Assif El Mal</option>
<option value=\"220\">Azemmour</option>
<option value=\"281\">Azilal</option>
<option value=\"58\">Azrou</option>
<option value=\"318\">A&#239;n Erreggada</option>
<option value=\"247\">Bab Berred</option>
<option value=\"244\">Bab Taza</option>
<option value=\"218\">Barakat Radi</option>
<option value=\"326\">Barrakte El Amine</option>
<option value=\"114\">Beja&#226;d</option>
<option value=\"254\">Bel Ksiri</option>
<option value=\"188\">Ben Guerir</option>
<option value=\"251\">Beni Abdellah</option>
<option value=\"87\">Beni Bouayach</option>
<option value=\"317\">Beni Drar</option>
<option value=\"306\">Beni Ensar</option>
<option value=\"282\">Beni Tajdite</option>
<option value=\"76\">B&#233;ni Mellal</option>
<option value=\"31\">Berkane</option>
<option value=\"224\">Berrechid</option>
<option value=\"277\">Bhalil</option>
<option value=\"22\">Biougra</option>
<option value=\"222\">Bir Jdid</option>
<option value=\"302\">Birguendouz</option>
<option value=\"216\">Birkouate</option>
<option value=\"250\">Bni Hadifa</option>
<option value=\"348\">Borj Agharghar</option>
<option value=\"543\">Bouabout</option>
<option value=\"544\">Bouamssa</option>
<option value=\"464\">Bouanane</option>
<option value=\"28\">Bouarfa</option>
<option value=\"463\">Boudenib</option>
<option value=\"70\">Boufakrane</option>
<option value=\"215\">Bouguedra</option>
<option value=\"185\">Bouizakarne</option>
<option value=\"33\">Boujdour</option>
<option value=\"422\">Boukidarn</option>
<option value=\"225\">Boulaouane</option>
<option value=\"102\">Boulemane</option>
<option value=\"238\">Boumalne Dades</option>
<option value=\"99\">Boumia</option>
<option value=\"580\">Bouskoura</option>
<option value=\"141\">Bruxelles</option>
<option value=\"261\">Bzou</option>
<option value=\"15\">Casablanca</option>
<option value=\"685\">Casablanca - (Azbane - Lissasfa)</option>
<option value=\"307\">Casablanca - Ain Sebaa (CTM)</option>
<option value=\"361\">Casablanca - El Oulfa</option>
<option value=\"308\">Casablanca - Maarif</option>
<option value=\"266\">Chefchaouen</option>
<option value=\"263\">Chemaia</option>
<option value=\"245\">Cherafate</option>
<option value=\"39\">Chichaoua</option>
<option value=\"258\">Chwiter</option>
<option value=\"34\">Dakhla</option>
<option value=\"116\">Demnate</option>
<option value=\"243\">Derdara</option>
<option value=\"586\">Douar Ouled Allou</option>
<option value=\"378\">Douar Sahrij</option>
<option value=\"329\">Douar Tikni (Zone Industriel El Jadida)</option>
<option value=\"94\">Driouch</option>
<option value=\"105\">El Aioune Charkia</option>
<option value=\"117\">El Attaouia</option>
<option value=\"272\">El Borouj</option>
<option value=\"255\">El Hajeb</option>
<option value=\"196\">El Henchane</option>
<option value=\"49\">El Jadida</option>
<option value=\"356\">El Ksabi</option>
<option value=\"190\">El Menzel</option>
<option value=\"381\">El Ouatia - Tan Tan</option>
<option value=\"283\">El jebha</option>
<option value=\"61\">Errachidia</option>
<option value=\"51\">Essaouira</option>
<option value=\"312\">Fask</option>
<option value=\"23\">F&#232;s</option>
<option value=\"285\">Figuig</option>
<option value=\"121\">Fnideq</option>
<option value=\"210\">Foum El Hassan</option>
<option value=\"260\">Foum Jema&#226;</option>
<option value=\"287\">Foum zguid</option>
<option value=\"74\">Fquih Ben Salah</option>
<option value=\"349\">Frouga (Guemmassa)</option>
<option value=\"331\">Ghazoua (Essaouira Al Jadida)</option>
<option value=\"108\">Goulmima</option>
<option value=\"288\">Gourrama</option>
<option value=\"135\">Guadalajara</option>
<option value=\"37\">Guelmim</option>
<option value=\"380\">Guenfouda</option>
<option value=\"90\">Guercif</option>
<option value=\"362\">Guerguerat</option>
<option value=\"103\">Guigou</option>
<option value=\"578\">Guisser</option>
<option value=\"325\">Had Draa</option>
<option value=\"223\">Had Soualem</option>
<option value=\"112\">Hassi Berkane</option>
<option value=\"652\">Hed Hrara</option>
<option value=\"387\">Icht</option>
<option value=\"214\">Ida Osmlal</option>
<option value=\"88\">Ida Ougnidif</option>
<option value=\"370\">Idelsane</option>
<option value=\"341\">Idouirane</option>
<option value=\"471\">Iflilte</option>
<option value=\"80\">Ifrane</option>
<option value=\"207\">Ighrem</option>
<option value=\"203\">Ighrem N Ougdal</option>
<option value=\"424\">Ikkaouen</option>
<option value=\"374\">Imi n Tlit</option>
<option value=\"40\">Imintanoute</option>
<option value=\"367\">Imiter</option>
<option value=\"191\">Imouzzer Kandar</option>
<option value=\"334\">Imsouane (croisement)</option>
<option value=\"86\">Imzouren</option>
<option value=\"347\">Iriq</option>
<option value=\"208\">Issafen</option>
<option value=\"248\">Issaguen</option>
<option value=\"355\">Isserarene Tamdafelt</option>
<option value=\"585\">Jemaa Mtal</option>
<option value=\"55\">Jemaa Shaim</option>
<option value=\"205\">Jerada</option>
<option value=\"267\">Jorf El Melha</option>
<option value=\"101\">Kasba Tadla</option>
<option value=\"85\">Kassita</option>
<option value=\"123\">Kelaa Mgouna</option>
<option value=\"81\">Kelaa sraghna</option>
<option value=\"21\">Kenitra</option>
<option value=\"246\">Khamis M&#39;Diq</option>
<option value=\"582\">Khemis Ksiba (Doukala)</option>
<option value=\"17\">Khemisset</option>
<option value=\"619\">Khenichet</option>
<option value=\"73\">Kh&#233;nifra</option>
<option value=\"75\">Khouribga</option>
<option value=\"144\">Ksar El K&#233;bir</option>
<option value=\"256\">Ksar Sghir</option>
<option value=\"462\">Laaouamera</option>
<option value=\"584\">Laathamena</option>
<option value=\"32\">La&#226;youne</option>
<option value=\"38\">La&#226;youne Port</option>
<option value=\"581\">Laghnimyene</option>
<option value=\"324\">Lahri</option>
<option value=\"311\">Lakhssas</option>
<option value=\"231\">Lalla Takerkoust</option>
<option value=\"111\">Larache</option>
<option value=\"371\">Lbour</option>
<option value=\"363\">Leqliaa -Agadir-</option>
<option value=\"138\">Lerida</option>
<option value=\"345\">Loudaya</option>
<option value=\"289\">MHAMID EL GHIZLANE</option>
<option value=\"134\">Madrid</option>
<option value=\"19\">Marrakech</option>
<option value=\"303\">Martil</option>
<option value=\"321\">Maaziz</option>
<option value=\"122\">Mdiq</option>
<option value=\"69\">Adrej</option>
<option value=\"342\">Mejjat</option>
<option value=\"64\">Mekn&#232;s</option>
<option value=\"316\">Melga el Ouidane</option>
<option value=\"466\">Mengoub</option>
<option value=\"350\">Mernissa (Thar Es-Souk)</option>
<option value=\"385\">Merzouga</option>
<option value=\"328\">Messawer Rasso</option>
<option value=\"583\">Metrane (Had El Aounate)</option>
<option value=\"95\">Midar</option>
<option value=\"59\">Midelt</option>
<option value=\"41\">Mirleft</option>
<option value=\"354\">Missour</option>
<option value=\"115\">Mohamm&#233;dia</option>
<option value=\"270\">Moulay Idriss Zerhoun</option>
<option value=\"310\">Moulay Ya&#226;coub</option>
<option value=\"72\">M&#39;rirt</option>
<option value=\"343\">Mzouda</option>
<option value=\"271\">N&#39;zalat Bni Amar</option>
<option value=\"91\">Nador</option>
<option value=\"540\">Nfifa</option>
<option value=\"290\">Nkob</option>
<option value=\"264\">Oualidia</option>
<option value=\"322\">Ouaoumana</option>
<option value=\"379\">Ouargui</option>
<option value=\"20\">Ouarzazate</option>
<option value=\"83\">Oued Amlil</option>
<option value=\"113\">Oued Zem</option>
<option value=\"291\">Oued laabid</option>
<option value=\"78\">Ouezzane</option>
<option value=\"25\">Oujda</option>
<option value=\"193\">Oulad Aaissa</option>
<option value=\"340\">Oulad Abbou</option>
<option value=\"43\">Oulad Berhil</option>
<option value=\"265\">Oulad Said</option>
<option value=\"54\">Oulad Teima (Houara)</option>
<option value=\"228\">Ouled Amrane</option>
<option value=\"253\">Ouled Ayad</option>
<option value=\"377\">Ouled Khellouf</option>
<option value=\"319\">Oulm&#232;s</option>
<option value=\"195\">Ounagha</option>
<option value=\"333\">Ourtofelleh</option>
<option value=\"359\">RP 33</option>
<option value=\"7\">Rabat</option>
<option value=\"68\">Ribate El Kheir (Ahermoumou)</option>
<option value=\"60\">Rich</option>
<option value=\"63\">Rissani</option>
<option value=\"53\">Safi</option>
<option value=\"293\">Saidia</option>
<option value=\"93\">Sakka</option>
<option value=\"77\">Sal&#233;</option>
<option value=\"344\">Sebt Ait Imour</option>
<option value=\"57\">Sebt gzoula</option>
<option value=\"67\">Sefrou</option>
<option value=\"242\">Selouane</option>
<option value=\"82\">Settat</option>
<option value=\"198\">Sid L&#39;Mokhtar</option>
<option value=\"240\">Sidi Allal Tazi</option>
<option value=\"227\">Sidi Bennour</option>
<option value=\"360\">Sidi Bou Othmane</option>
<option value=\"617\">Sidi Harazem</option>
<option value=\"110\">Sidi Kacem</option>
<option value=\"425\">Sidi Rahhal</option>
<option value=\"109\">Sidi Slimane</option>
<option value=\"618\">Sidi Yahya El Gharb</option>
<option value=\"357\">Sidi Yahya Ousaad</option>
<option value=\"42\">Sidi Ifni</option>
<option value=\"189\">Skhour Rehamna</option>
<option value=\"237\">Skoura</option>
<option value=\"194\">Smara</option>
<option value=\"187\">Smimou</option>
<option value=\"366\">Souk El Had Des Bradia</option>
<option value=\"368\">Souk El Khemis Dades</option>
<option value=\"119\">Souk Sebt Oulad Nemaa</option>
<option value=\"79\">Souk El Arbaa</option>
<option value=\"376\">Sour El Aaz</option>
<option value=\"202\">Taddart (Tichka)</option>
<option value=\"12\">Tafraout</option>
<option value=\"197\">Taftecht</option>
<option value=\"52\">Taghazout</option>
<option value=\"212\">Taghjijt</option>
<option value=\"294\">Tagounite</option>
<option value=\"383\">Tah</option>
<option value=\"89\">Tahla</option>
<option value=\"125\">Taliouine</option>
<option value=\"217\">Talmest</option>
<option value=\"295\">Talsint</option>
<option value=\"186\">Tamanar</option>
<option value=\"211\">Tamanart</option>
<option value=\"297\">Tamegroute</option>
<option value=\"118\">Tamelelt</option>
<option value=\"503\">Tamorot</option>
<option value=\"336\">Tamri</option>
<option value=\"35\">Tan Tan</option>
<option value=\"259\">Tanant</option>
<option value=\"13\">Tanger</option>
<option value=\"234\">Tansikhte</option>
<option value=\"542\">Taouloukoult</option>
<option value=\"298\">Taounate</option>
<option value=\"24\">Taourirt</option>
<option value=\"184\">Tarfaya</option>
<option value=\"313\">Targoumait</option>
<option value=\"249\">Targuist</option>
<option value=\"142\">Tarifa</option>
<option value=\"45\">Taroudant</option>
<option value=\"273\">Tassaout</option>
<option value=\"206\">Tata</option>
<option value=\"29\">Taza</option>
<option value=\"299\">Tazarine</option>
<option value=\"428\">Tazart</option>
<option value=\"201\">Tazlida</option>
<option value=\"124\">Taznakht</option>
<option value=\"545\">Temara</option>
<option value=\"30\">Tendrara</option>
<option value=\"96\">Tetouan</option>
<option value=\"320\">Tiddas</option>
<option value=\"427\">Tidili Fetouaka</option>
<option value=\"332\">Tidzi</option>
<option value=\"18\">Tiflet</option>
<option value=\"300\">Tighassaline</option>
<option value=\"372\">Timahdite</option>
<option value=\"467\">Timedline</option>
<option value=\"213\">Timguilcht</option>
<option value=\"386\">Timoulay</option>
<option value=\"107\">Tinejdad</option>
<option value=\"106\">Tinghir</option>
<option value=\"233\">Tinzouline</option>
<option value=\"470\">Tiourjdal</option>
<option value=\"301\">Tissint</option>
<option value=\"84\">Tizi Ouasli</option>
<option value=\"36\">Tiznit</option>
<option value=\"389\">Tizounine</option>
<option value=\"423\">Tlata Ketama</option>
<option value=\"579\">Tnine Beni Meskine</option>
<option value=\"221\">Tnine Chtouka</option>
<option value=\"327\">Tnine Ghiat</option>
<option value=\"199\">Touama</option>
<option value=\"200\">Toufliht</option>
<option value=\"133\">Valdepenas</option>
<option value=\"229\">Youssoufia</option>
<option value=\"48\">Zag</option>
<option value=\"232\">Zagora</option>
<option value=\"98\">Zaida</option>
<option value=\"241\">Zaio</option>
<option value=\"219\">Zaouiat Sidi Smail</option>
<option value=\"100\">Zaou&#239;at Cheikh</option>
<option value=\"137\">Zaragoza</option>
<option value=\"269\">Zegota</option>
<option value=\"56\">Zemamra</option>
<option value=\"339\">Zerarda</option>
<option value=\"469\">Zerkten</option>
<option value=\"346\">Znada</option>
<option value=\"352\">Zrizer</option>
</select>
                                                    <i class=\"fa fa-circle-o-notch fa-spin fa-2x\" aria-hidden=\"true\" style=\"float: right;color: #ff6900;margin-right: 3px;opacity: .15;position: absolute;top: 10px;right: 10px;\"></i>
                                                </div>

                                            </div>
                                            <div class=\"col-xss-12 col-xs-5 col-sm-5 mt-10-xss\">
                                                <div class=\"form-group bg-change-focus-addclass mb-1-xss\" id=\"arrivee\">
                                                    <select Id=\"villeArriveeId\" class=\"form-control selectpicker\" data-done-button=\"true\" data-done-button-text=\"OK\" data-dropup-auto=\"false\" data-live-search=\"true\" data-live-search-normalize=\"true\" data-live-search-placeholder=\"Recherche\" data-size=\"7\" id=\"villeArriveeId\" name=\"villeArriveeId\" required=\"required\"><option value=\"\">--- Ville d&#39;arriv&#233;e ---</option>
<option value=\"505\">Aarab Sebbah Ziz</option>
<option value=\"1\">Agadir</option>
<option value=\"426\">Agadir Bouachiba</option>
<option value=\"11\">Agadir - Gare Inzegane</option>
<option value=\"235\">Agdz</option>
<option value=\"358\">Aghbalou N&#39;Cerdan</option>
<option value=\"504\">Aglou</option>
<option value=\"204\">Agouim</option>
<option value=\"274\">Ahfir</option>
<option value=\"351\">Ain Aicha</option>
<option value=\"26\">Ain Bni Mathar</option>
<option value=\"465\">Ain Chair</option>
<option value=\"268\">Ain Defali</option>
<option value=\"507\">Ait Aissa Ou Brahim</option>
<option value=\"120\">Ait Amira</option>
<option value=\"353\">Ait Attab</option>
<option value=\"16\">Ait Baha</option>
<option value=\"373\">Ait Daoud</option>
<option value=\"192\">Ait Iaaza</option>
<option value=\"170\">A&#239;t Ishaq</option>
<option value=\"252\">Ait Kamara</option>
<option value=\"375\">Ait Majden</option>
<option value=\"139\">Ait Melloul</option>
<option value=\"388\">Ait Ouabelli</option>
<option value=\"257\">Ait Ourir</option>
<option value=\"236\">Ait Saoun</option>
<option value=\"369\">Ait Sedrate Sahl Gharbia</option>
<option value=\"71\">Ait Abdellah</option>
<option value=\"315\">Ajdir</option>
<option value=\"382\">Akhfenir</option>
<option value=\"209\">Akka</option>
<option value=\"314\">Aklim</option>
<option value=\"66\">Aknoul</option>
<option value=\"226\">Al Aounate</option>
<option value=\"92\">Al Aroui</option>
<option value=\"65\">Al Hoce&#239;ma</option>
<option value=\"468\">Amerzgane</option>
<option value=\"541\">Ameskend</option>
<option value=\"230\">Amizimz</option>
<option value=\"338\">Anza</option>
<option value=\"506\">Aoufous</option>
<option value=\"44\">Aoulouz</option>
<option value=\"337\">Aourir</option>
<option value=\"461\">Arbaoua</option>
<option value=\"62\">Arfoud</option>
<option value=\"280\">Argoube</option>
<option value=\"143\">Assilah</option>
<option value=\"46\">Assa</option>
<option value=\"335\">Assaka (Haha)</option>
<option value=\"384\">Assaki</option>
<option value=\"262\">Assif El Mal</option>
<option value=\"220\">Azemmour</option>
<option value=\"281\">Azilal</option>
<option value=\"58\">Azrou</option>
<option value=\"318\">A&#239;n Erreggada</option>
<option value=\"247\">Bab Berred</option>
<option value=\"244\">Bab Taza</option>
<option value=\"218\">Barakat Radi</option>
<option value=\"326\">Barrakte El Amine</option>
<option value=\"114\">Beja&#226;d</option>
<option value=\"254\">Bel Ksiri</option>
<option value=\"188\">Ben Guerir</option>
<option value=\"251\">Beni Abdellah</option>
<option value=\"87\">Beni Bouayach</option>
<option value=\"317\">Beni Drar</option>
<option value=\"306\">Beni Ensar</option>
<option value=\"282\">Beni Tajdite</option>
<option value=\"76\">B&#233;ni Mellal</option>
<option value=\"31\">Berkane</option>
<option value=\"224\">Berrechid</option>
<option value=\"277\">Bhalil</option>
<option value=\"22\">Biougra</option>
<option value=\"222\">Bir Jdid</option>
<option value=\"302\">Birguendouz</option>
<option value=\"216\">Birkouate</option>
<option value=\"250\">Bni Hadifa</option>
<option value=\"348\">Borj Agharghar</option>
<option value=\"543\">Bouabout</option>
<option value=\"544\">Bouamssa</option>
<option value=\"464\">Bouanane</option>
<option value=\"28\">Bouarfa</option>
<option value=\"463\">Boudenib</option>
<option value=\"70\">Boufakrane</option>
<option value=\"215\">Bouguedra</option>
<option value=\"185\">Bouizakarne</option>
<option value=\"33\">Boujdour</option>
<option value=\"422\">Boukidarn</option>
<option value=\"225\">Boulaouane</option>
<option value=\"102\">Boulemane</option>
<option value=\"238\">Boumalne Dades</option>
<option value=\"99\">Boumia</option>
<option value=\"580\">Bouskoura</option>
<option value=\"141\">Bruxelles</option>
<option value=\"261\">Bzou</option>
<option value=\"15\">Casablanca</option>
<option value=\"685\">Casablanca - (Azbane - Lissasfa)</option>
<option value=\"307\">Casablanca - Ain Sebaa (CTM)</option>
<option value=\"361\">Casablanca - El Oulfa</option>
<option value=\"308\">Casablanca - Maarif</option>
<option value=\"266\">Chefchaouen</option>
<option value=\"263\">Chemaia</option>
<option value=\"245\">Cherafate</option>
<option value=\"39\">Chichaoua</option>
<option value=\"258\">Chwiter</option>
<option value=\"34\">Dakhla</option>
<option value=\"116\">Demnate</option>
<option value=\"243\">Derdara</option>
<option value=\"586\">Douar Ouled Allou</option>
<option value=\"378\">Douar Sahrij</option>
<option value=\"329\">Douar Tikni (Zone Industriel El Jadida)</option>
<option value=\"94\">Driouch</option>
<option value=\"105\">El Aioune Charkia</option>
<option value=\"117\">El Attaouia</option>
<option value=\"272\">El Borouj</option>
<option value=\"255\">El Hajeb</option>
<option value=\"196\">El Henchane</option>
<option value=\"49\">El Jadida</option>
<option value=\"356\">El Ksabi</option>
<option value=\"190\">El Menzel</option>
<option value=\"381\">El Ouatia - Tan Tan</option>
<option value=\"283\">El jebha</option>
<option value=\"61\">Errachidia</option>
<option value=\"51\">Essaouira</option>
<option value=\"312\">Fask</option>
<option value=\"23\">F&#232;s</option>
<option value=\"285\">Figuig</option>
<option value=\"121\">Fnideq</option>
<option value=\"210\">Foum El Hassan</option>
<option value=\"260\">Foum Jema&#226;</option>
<option value=\"287\">Foum zguid</option>
<option value=\"74\">Fquih Ben Salah</option>
<option value=\"349\">Frouga (Guemmassa)</option>
<option value=\"331\">Ghazoua (Essaouira Al Jadida)</option>
<option value=\"108\">Goulmima</option>
<option value=\"288\">Gourrama</option>
<option value=\"135\">Guadalajara</option>
<option value=\"37\">Guelmim</option>
<option value=\"380\">Guenfouda</option>
<option value=\"90\">Guercif</option>
<option value=\"362\">Guerguerat</option>
<option value=\"103\">Guigou</option>
<option value=\"578\">Guisser</option>
<option value=\"325\">Had Draa</option>
<option value=\"223\">Had Soualem</option>
<option value=\"112\">Hassi Berkane</option>
<option value=\"652\">Hed Hrara</option>
<option value=\"387\">Icht</option>
<option value=\"214\">Ida Osmlal</option>
<option value=\"88\">Ida Ougnidif</option>
<option value=\"370\">Idelsane</option>
<option value=\"341\">Idouirane</option>
<option value=\"471\">Iflilte</option>
<option value=\"80\">Ifrane</option>
<option value=\"207\">Ighrem</option>
<option value=\"203\">Ighrem N Ougdal</option>
<option value=\"424\">Ikkaouen</option>
<option value=\"374\">Imi n Tlit</option>
<option value=\"40\">Imintanoute</option>
<option value=\"367\">Imiter</option>
<option value=\"191\">Imouzzer Kandar</option>
<option value=\"334\">Imsouane (croisement)</option>
<option value=\"86\">Imzouren</option>
<option value=\"347\">Iriq</option>
<option value=\"208\">Issafen</option>
<option value=\"248\">Issaguen</option>
<option value=\"355\">Isserarene Tamdafelt</option>
<option value=\"585\">Jemaa Mtal</option>
<option value=\"55\">Jemaa Shaim</option>
<option value=\"205\">Jerada</option>
<option value=\"267\">Jorf El Melha</option>
<option value=\"101\">Kasba Tadla</option>
<option value=\"85\">Kassita</option>
<option value=\"123\">Kelaa Mgouna</option>
<option value=\"81\">Kelaa sraghna</option>
<option value=\"21\">Kenitra</option>
<option value=\"246\">Khamis M&#39;Diq</option>
<option value=\"582\">Khemis Ksiba (Doukala)</option>
<option value=\"17\">Khemisset</option>
<option value=\"619\">Khenichet</option>
<option value=\"73\">Kh&#233;nifra</option>
<option value=\"75\">Khouribga</option>
<option value=\"144\">Ksar El K&#233;bir</option>
<option value=\"256\">Ksar Sghir</option>
<option value=\"462\">Laaouamera</option>
<option value=\"584\">Laathamena</option>
<option value=\"32\">La&#226;youne</option>
<option value=\"38\">La&#226;youne Port</option>
<option value=\"581\">Laghnimyene</option>
<option value=\"324\">Lahri</option>
<option value=\"311\">Lakhssas</option>
<option value=\"231\">Lalla Takerkoust</option>
<option value=\"111\">Larache</option>
<option value=\"371\">Lbour</option>
<option value=\"363\">Leqliaa -Agadir-</option>
<option value=\"138\">Lerida</option>
<option value=\"345\">Loudaya</option>
<option value=\"289\">MHAMID EL GHIZLANE</option>
<option value=\"134\">Madrid</option>
<option value=\"19\">Marrakech</option>
<option value=\"303\">Martil</option>
<option value=\"321\">Maaziz</option>
<option value=\"122\">Mdiq</option>
<option value=\"69\">Adrej</option>
<option value=\"342\">Mejjat</option>
<option value=\"64\">Mekn&#232;s</option>
<option value=\"316\">Melga el Ouidane</option>
<option value=\"466\">Mengoub</option>
<option value=\"350\">Mernissa (Thar Es-Souk)</option>
<option value=\"385\">Merzouga</option>
<option value=\"328\">Messawer Rasso</option>
<option value=\"583\">Metrane (Had El Aounate)</option>
<option value=\"95\">Midar</option>
<option value=\"59\">Midelt</option>
<option value=\"41\">Mirleft</option>
<option value=\"354\">Missour</option>
<option value=\"115\">Mohamm&#233;dia</option>
<option value=\"270\">Moulay Idriss Zerhoun</option>
<option value=\"310\">Moulay Ya&#226;coub</option>
<option value=\"72\">M&#39;rirt</option>
<option value=\"343\">Mzouda</option>
<option value=\"271\">N&#39;zalat Bni Amar</option>
<option value=\"91\">Nador</option>
<option value=\"540\">Nfifa</option>
<option value=\"290\">Nkob</option>
<option value=\"264\">Oualidia</option>
<option value=\"322\">Ouaoumana</option>
<option value=\"379\">Ouargui</option>
<option value=\"20\">Ouarzazate</option>
<option value=\"83\">Oued Amlil</option>
<option value=\"113\">Oued Zem</option>
<option value=\"291\">Oued laabid</option>
<option value=\"78\">Ouezzane</option>
<option value=\"25\">Oujda</option>
<option value=\"193\">Oulad Aaissa</option>
<option value=\"340\">Oulad Abbou</option>
<option value=\"43\">Oulad Berhil</option>
<option value=\"265\">Oulad Said</option>
<option value=\"54\">Oulad Teima (Houara)</option>
<option value=\"228\">Ouled Amrane</option>
<option value=\"253\">Ouled Ayad</option>
<option value=\"377\">Ouled Khellouf</option>
<option value=\"319\">Oulm&#232;s</option>
<option value=\"195\">Ounagha</option>
<option value=\"333\">Ourtofelleh</option>
<option value=\"359\">RP 33</option>
<option value=\"7\">Rabat</option>
<option value=\"68\">Ribate El Kheir (Ahermoumou)</option>
<option value=\"60\">Rich</option>
<option value=\"63\">Rissani</option>
<option value=\"53\">Safi</option>
<option value=\"293\">Saidia</option>
<option value=\"93\">Sakka</option>
<option value=\"77\">Sal&#233;</option>
<option value=\"344\">Sebt Ait Imour</option>
<option value=\"57\">Sebt gzoula</option>
<option value=\"67\">Sefrou</option>
<option value=\"242\">Selouane</option>
<option value=\"82\">Settat</option>
<option value=\"198\">Sid L&#39;Mokhtar</option>
<option value=\"240\">Sidi Allal Tazi</option>
<option value=\"227\">Sidi Bennour</option>
<option value=\"360\">Sidi Bou Othmane</option>
<option value=\"617\">Sidi Harazem</option>
<option value=\"110\">Sidi Kacem</option>
<option value=\"425\">Sidi Rahhal</option>
<option value=\"109\">Sidi Slimane</option>
<option value=\"618\">Sidi Yahya El Gharb</option>
<option value=\"357\">Sidi Yahya Ousaad</option>
<option value=\"42\">Sidi Ifni</option>
<option value=\"189\">Skhour Rehamna</option>
<option value=\"237\">Skoura</option>
<option value=\"194\">Smara</option>
<option value=\"187\">Smimou</option>
<option value=\"366\">Souk El Had Des Bradia</option>
<option value=\"368\">Souk El Khemis Dades</option>
<option value=\"119\">Souk Sebt Oulad Nemaa</option>
<option value=\"79\">Souk El Arbaa</option>
<option value=\"376\">Sour El Aaz</option>
<option value=\"202\">Taddart (Tichka)</option>
<option value=\"12\">Tafraout</option>
<option value=\"197\">Taftecht</option>
<option value=\"52\">Taghazout</option>
<option value=\"212\">Taghjijt</option>
<option value=\"294\">Tagounite</option>
<option value=\"383\">Tah</option>
<option value=\"89\">Tahla</option>
<option value=\"125\">Taliouine</option>
<option value=\"217\">Talmest</option>
<option value=\"295\">Talsint</option>
<option value=\"186\">Tamanar</option>
<option value=\"211\">Tamanart</option>
<option value=\"297\">Tamegroute</option>
<option value=\"118\">Tamelelt</option>
<option value=\"503\">Tamorot</option>
<option value=\"336\">Tamri</option>
<option value=\"35\">Tan Tan</option>
<option value=\"259\">Tanant</option>
<option value=\"13\">Tanger</option>
<option value=\"234\">Tansikhte</option>
<option value=\"542\">Taouloukoult</option>
<option value=\"298\">Taounate</option>
<option value=\"24\">Taourirt</option>
<option value=\"184\">Tarfaya</option>
<option value=\"313\">Targoumait</option>
<option value=\"249\">Targuist</option>
<option value=\"142\">Tarifa</option>
<option value=\"45\">Taroudant</option>
<option value=\"273\">Tassaout</option>
<option value=\"206\">Tata</option>
<option value=\"29\">Taza</option>
<option value=\"299\">Tazarine</option>
<option value=\"428\">Tazart</option>
<option value=\"201\">Tazlida</option>
<option value=\"124\">Taznakht</option>
<option value=\"545\">Temara</option>
<option value=\"30\">Tendrara</option>
<option value=\"96\">Tetouan</option>
<option value=\"320\">Tiddas</option>
<option value=\"427\">Tidili Fetouaka</option>
<option value=\"332\">Tidzi</option>
<option value=\"18\">Tiflet</option>
<option value=\"300\">Tighassaline</option>
<option value=\"372\">Timahdite</option>
<option value=\"467\">Timedline</option>
<option value=\"213\">Timguilcht</option>
<option value=\"386\">Timoulay</option>
<option value=\"107\">Tinejdad</option>
<option value=\"106\">Tinghir</option>
<option value=\"233\">Tinzouline</option>
<option value=\"470\">Tiourjdal</option>
<option value=\"301\">Tissint</option>
<option value=\"84\">Tizi Ouasli</option>
<option value=\"36\">Tiznit</option>
<option value=\"389\">Tizounine</option>
<option value=\"423\">Tlata Ketama</option>
<option value=\"579\">Tnine Beni Meskine</option>
<option value=\"221\">Tnine Chtouka</option>
<option value=\"327\">Tnine Ghiat</option>
<option value=\"199\">Touama</option>
<option value=\"200\">Toufliht</option>
<option value=\"133\">Valdepenas</option>
<option value=\"229\">Youssoufia</option>
<option value=\"48\">Zag</option>
<option value=\"232\">Zagora</option>
<option value=\"98\">Zaida</option>
<option value=\"241\">Zaio</option>
<option value=\"219\">Zaouiat Sidi Smail</option>
<option value=\"100\">Zaou&#239;at Cheikh</option>
<option value=\"137\">Zaragoza</option>
<option value=\"269\">Zegota</option>
<option value=\"56\">Zemamra</option>
<option value=\"339\">Zerarda</option>
<option value=\"469\">Zerkten</option>
<option value=\"346\">Znada</option>
<option value=\"352\">Zrizer</option>
</select>
                                                    <i class=\"fa fa-circle-o-notch fa-spin fa-2x\" aria-hidden=\"true\" style=\"float: right;color: #ff6900;margin-right: 3px;opacity: .15;position: absolute;top: 10px;right: 10px;\"></i>
                                                </div>
                                            </div>
                                            <div class=\"col-xss-12 col-xs-2 col-sm-2 mt-10-xss\">
\t\t\t\t\t\t\t\t\t\t
                                                <div class=\"form-group bg-change-focus-addclass  mb-1-xss\">                          
                                                    <select class=\"form-control selectpicker\" name=\"nbrSeat\"  >
                                                        <option value=\"1\">1 Passager</option>
                                                        <option value=\"2\">2 Passager</option>
                                                        <option value=\"3\">3 Passager</option>
                                                        <option value=\"4\">4 Passager</option>
                                                        <option value=\"5\">5 Passager</option>
                                                        <option value=\"6\">6 Passager</option>
                                                        <option value=\"7\">7 Passager</option>
                                                        <option value=\"8\">8 Passager</option>
                                                    </select>
                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t
                                            </div>
                                        </div>

                                    </div>


                                    <div class=\"col-xss-12 col-xs-12 col-sm-3 col-md-3 mt-10-xs\">
                                        <div class=\"form-group bg-change-focus-addclass mb-1-xs\">
                                            <div class=\"input-group\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"fa fa-calendar\" style=\"color: rgb(255, 105, 0);\"></i>
                                                </div>
                                                <input type=\"text\" name=\"dateDepart\" class=\"form-control\" id=\"datepicker\" value=\"2023-05-07\">
                                            </div>
                                        </div>
                                     
                                    </div>  
                                    <div class=\"col-xss-12 col-xs-12 col-sm-2 col-md-2 mt-10-xs\">
                                       

                                        <div class=\"btn-holder\">
                                            <button type=\"submit\" id=\"rechercher\" data-spinner-color=\"#FFFFFF\" data-style=\"zoom-in\" data-size=\"xl\" class=\"btn btn-block btn-primary ladda-button\">
                                                <span class=\"ladda-label\"><i class=\"fa fa-search\"></i>Rechercher</span>
                                            </button>                               
                                        </div>
                                        
                                    </div>

                                   </div>
                                </div>
                            </div>
                </div>

            </div>
</form>

          <div class=\"row gy-4\" data-aos=\"fade-up\" data-aos-delay=\"400\">

            <div class=\"col-lg-3 col-6\">
              <div class=\"stats-item text-center w-100 h-100\">
                <span data-purecounter-start=\"0\" data-purecounter-end=\"232\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                <p>Clients</p>
              </div>
            </div><!-- End Stats Item -->

            <div class=\"col-lg-3 col-6\">
              <div class=\"stats-item text-center w-100 h-100\">
                <span data-purecounter-start=\"0\" data-purecounter-end=\"521\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                <p>Projects</p>
              </div>
            </div><!-- End Stats Item -->

            <div class=\"col-lg-3 col-6\">
              <div class=\"stats-item text-center w-100 h-100\">
                <span data-purecounter-start=\"0\" data-purecounter-end=\"1453\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                <p>Support</p>
              </div>
            </div><!-- End Stats Item -->

            <div class=\"col-lg-3 col-6\">
              <div class=\"stats-item text-center w-100 h-100\">
                <span data-purecounter-start=\"0\" data-purecounter-end=\"32\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                <p>Workers</p>
              </div>
            </div><!-- End Stats Item -->

          </div>
        </div>

        <div class=\"col-lg-5 order-1 order-lg-2 hero-img\" data-aos=\"zoom-out\">
          <img src=";
        // line 927
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/hero-img.svg"), "html", null, true);
        echo " class=\"img-fluid mb-3 mb-lg-0\" alt=\"\">
        </div>

      </div>
    </div>
  </section><!-- End Hero Section -->

    <section class=\"sample-page\">
      <div class=\"container\" data-aos=\"fade-up\">
        ";
        // line 936
        $this->displayBlock('body', $context, $blocks);
        // line 939
        echo "      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id=\"footer\" class=\"footer\">

    <div class=\"container\">
      <div class=\"row gy-4\">
        <div class=\"col-lg-5 col-md-12 footer-info\">
          <a href=\"index.html\" class=\"logo d-flex align-items-center\">
            <span>Logis</span>
          </a>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
          <div class=\"social-links d-flex mt-4\">
            <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter\"></i></a>
            <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
            <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
            <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
          </div>
        </div>

        <div class=\"col-lg-2 col-6 footer-links\">
          <h4>Useful Links</h4>
          <ul>
            <li><a href=\"#\">Home</a></li>
            <li><a href=\"#\">About us</a></li>
            <li><a href=\"#\">Services</a></li>
            <li><a href=\"#\">Terms of service</a></li>
            <li><a href=\"#\">Privacy policy</a></li>
          </ul>
        </div>

        <div class=\"col-lg-2 col-6 footer-links\">
          <h4>Our Services</h4>
          <ul>
            <li><a href=\"#\">Web Design</a></li>
            <li><a href=\"#\">Web Development</a></li>
            <li><a href=\"#\">Product Management</a></li>
            <li><a href=\"#\">Marketing</a></li>
            <li><a href=\"#\">Graphic Design</a></li>
          </ul>
        </div>

        <div class=\"col-lg-3 col-md-12 footer-contact text-center text-md-start\">
          <h4>Contact Us</h4>
          <p>
            A108 Adam Street <br>
            New York, NY 535022<br>
            United States <br><br>
            <strong>Phone:</strong> +1 5589 55488 55<br>
            <strong>Email:</strong> info@example.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class=\"container mt-4\">
      <div class=\"copyright\">
        &copy; Copyright <strong><span>Logis</span></strong>. All Rights Reserved
      </div>
      <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href=\"#\" class=\"scroll-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <div id=\"preloader\"></div>

  <!-- Vendor JS Files -->
  <script src=";
        // line 1020
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "></script>
  <script src=";
        // line 1021
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/purecounter/purecounter_vanilla.js"), "html", null, true);
        echo "></script>
  <script src=";
        // line 1022
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "></script>
  <script src=";
        // line 1023
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "></script>
  <script src=";
        // line 1024
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.js"), "html", null, true);
        echo "></script>
  <script src=";
        // line 1025
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "></script>

  <!-- Template Main JS File -->
  <script src=";
        // line 1028
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "></script>

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 936
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 937
        echo "          Template Body
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "template2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1147 => 937,  1137 => 936,  1122 => 1028,  1116 => 1025,  1112 => 1024,  1108 => 1023,  1104 => 1022,  1100 => 1021,  1096 => 1020,  1013 => 939,  1011 => 936,  999 => 927,  99 => 30,  93 => 27,  89 => 26,  85 => 25,  81 => 24,  77 => 23,  73 => 22,  62 => 14,  58 => 13,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>[Template] Sample Inner Page</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href={{ asset('assets/img/favicon.png') }} rel=\"icon\">
  <link href={{ asset('assets/img/apple-touch-icon.png') }} rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href={{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }} rel=\"stylesheet\">
  <link href={{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }} rel=\"stylesheet\">
  <link href={{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }} rel=\"stylesheet\">
  <link href={{ asset('assets/vendor/glightbox/css/glightbox.min.css') }} rel=\"stylesheet\">
  <link href={{ asset('assets/vendor/swiper/swiper-bundle.min.css') }} rel=\"stylesheet\">
  <link href={{ asset('assets/vendor/aos/aos.css') }} rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href={{ asset('assets/css/main.css') }} rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: Logis
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"header d-flex align-items-center fixed-top\">
    <div class=\"container-fluid container-xl d-flex align-items-center justify-content-between\">

      <a href=\"index.html\" class=\"logo d-flex align-items-center\">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src=\"assets/img/logo.png\" alt=\"\"> -->
        <h1>Logis</h1>
      </a>

      <i class=\"mobile-nav-toggle mobile-nav-show bi bi-list\"></i>
      <i class=\"mobile-nav-toggle mobile-nav-hide d-none bi bi-x\"></i>
      <nav id=\"navbar\" class=\"navbar\">
        <ul>
          <li><a href=\"index.html\" class=\"active\">Home</a></li>
          <li><a href=\"about.html\">About</a></li>
          <li><a href=\"services.html\">Services</a></li>
          <li><a href=\"pricing.html\">Pricing</a></li>
          <li class=\"dropdown\"><a href=\"#\"><span>Drop Down</span> <i class=\"bi bi-chevron-down dropdown-indicator\"></i></a>
            <ul>
              <li><a href=\"#\">Drop Down 1</a></li>
              <li class=\"dropdown\"><a href=\"#\"><span>Deep Drop Down</span> <i class=\"bi bi-chevron-down dropdown-indicator\"></i></a>
                <ul>
                  <li><a href=\"#\">Deep Drop Down 1</a></li>
                  <li><a href=\"#\">Deep Drop Down 2</a></li>
                  <li><a href=\"#\">Deep Drop Down 3</a></li>
                  <li><a href=\"#\">Deep Drop Down 4</a></li>
                  <li><a href=\"#\">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href=\"#\">Drop Down 2</a></li>
              <li><a href=\"#\">Drop Down 3</a></li>
              <li><a href=\"#\">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href=\"contact.html\">Contact</a></li>
          <li><a class=\"get-a-quote\" href=\"get-a-quote.html\">Get a Quote</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <main id=\"main\">

    <section id=\"hero\" class=\"hero d-flex align-items-center\">
    <div class=\"container\">
      <div class=\"row gy-4 d-flex justify-content-between\">
        <div class=\"col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center\">
          <h2 data-aos=\"fade-up\">Your Lightning Fast Delivery Partner</h2>
          <p data-aos=\"fade-up\" data-aos-delay=\"100\">Facere distinctio molestiae nisi fugit tenetur repellat non praesentium nesciunt optio quis sit odio nemo quisquam. eius quos reiciendis eum vel eum voluptatem eum maiores eaque id optio ullam occaecati odio est possimus vel reprehenderit</p>

          <form action=\"/fr/Recherche/Show\" id=\"FormRecherche\" method=\"get\">            <div class=\"main-search-form-wrapper-01\">
                <div class=\"hero-image\"></div>
                <div class=\"hero-gradient\"></div>
                <div class=\"container hero-panel-container\">
                     <div class=\"hero-header-texting\">
                       <div class=\"container\">
                            <h1>
        Achetez vos tickets d'autocar <span class=\"visible-xs-block\"></span><i>au meilleur prix!</i>
        </h1>

                        </div>
                      </div>
                    <div class=\"main-search-form-inner bg-change-focus-addclass-wrapper\">

                            <div class=\"form-holder\">

                                <div class=\"row gap-1\">

                                    <div class=\"col-xss-12 col-xs-12 col-sm-7 col-md-7\">

                                        <div class=\"row gap-1\">
                                            <div class=\"col-xss-12 col-xs-5 col-sm-5\">
                                                <div class=\"form-group bg-change-focus-addclass  mb-1-xss\">
                                                    <select Id=\"villeDepartId\" class=\"form-control selectpicker\" data-done-button=\"true\" data-done-button-text=\"OK\" data-dropup-auto=\"false\" data-live-search=\"true\" data-live-search-normalize=\"true\" data-live-search-placeholder=\"Recherche\" data-size=\"7\" id=\"villeDepartId\" name=\"villeDepartId\" required=\"required\"><option value=\"\">--- Ville du d&#233;part ---</option>
<option value=\"505\">Aarab Sebbah Ziz</option>
<option value=\"1\">Agadir</option>
<option value=\"426\">Agadir Bouachiba</option>
<option value=\"11\">Agadir - Gare Inzegane</option>
<option value=\"235\">Agdz</option>
<option value=\"358\">Aghbalou N&#39;Cerdan</option>
<option value=\"504\">Aglou</option>
<option value=\"204\">Agouim</option>
<option value=\"274\">Ahfir</option>
<option value=\"351\">Ain Aicha</option>
<option value=\"26\">Ain Bni Mathar</option>
<option value=\"465\">Ain Chair</option>
<option value=\"268\">Ain Defali</option>
<option value=\"507\">Ait Aissa Ou Brahim</option>
<option value=\"120\">Ait Amira</option>
<option value=\"353\">Ait Attab</option>
<option value=\"16\">Ait Baha</option>
<option value=\"373\">Ait Daoud</option>
<option value=\"192\">Ait Iaaza</option>
<option value=\"170\">A&#239;t Ishaq</option>
<option value=\"252\">Ait Kamara</option>
<option value=\"375\">Ait Majden</option>
<option value=\"139\">Ait Melloul</option>
<option value=\"388\">Ait Ouabelli</option>
<option value=\"257\">Ait Ourir</option>
<option value=\"236\">Ait Saoun</option>
<option value=\"369\">Ait Sedrate Sahl Gharbia</option>
<option value=\"71\">Ait Abdellah</option>
<option value=\"315\">Ajdir</option>
<option value=\"382\">Akhfenir</option>
<option value=\"209\">Akka</option>
<option value=\"314\">Aklim</option>
<option value=\"66\">Aknoul</option>
<option value=\"226\">Al Aounate</option>
<option value=\"92\">Al Aroui</option>
<option value=\"65\">Al Hoce&#239;ma</option>
<option value=\"468\">Amerzgane</option>
<option value=\"541\">Ameskend</option>
<option value=\"230\">Amizimz</option>
<option value=\"338\">Anza</option>
<option value=\"506\">Aoufous</option>
<option value=\"44\">Aoulouz</option>
<option value=\"337\">Aourir</option>
<option value=\"461\">Arbaoua</option>
<option value=\"62\">Arfoud</option>
<option value=\"280\">Argoube</option>
<option value=\"143\">Assilah</option>
<option value=\"46\">Assa</option>
<option value=\"335\">Assaka (Haha)</option>
<option value=\"384\">Assaki</option>
<option value=\"262\">Assif El Mal</option>
<option value=\"220\">Azemmour</option>
<option value=\"281\">Azilal</option>
<option value=\"58\">Azrou</option>
<option value=\"318\">A&#239;n Erreggada</option>
<option value=\"247\">Bab Berred</option>
<option value=\"244\">Bab Taza</option>
<option value=\"218\">Barakat Radi</option>
<option value=\"326\">Barrakte El Amine</option>
<option value=\"114\">Beja&#226;d</option>
<option value=\"254\">Bel Ksiri</option>
<option value=\"188\">Ben Guerir</option>
<option value=\"251\">Beni Abdellah</option>
<option value=\"87\">Beni Bouayach</option>
<option value=\"317\">Beni Drar</option>
<option value=\"306\">Beni Ensar</option>
<option value=\"282\">Beni Tajdite</option>
<option value=\"76\">B&#233;ni Mellal</option>
<option value=\"31\">Berkane</option>
<option value=\"224\">Berrechid</option>
<option value=\"277\">Bhalil</option>
<option value=\"22\">Biougra</option>
<option value=\"222\">Bir Jdid</option>
<option value=\"302\">Birguendouz</option>
<option value=\"216\">Birkouate</option>
<option value=\"250\">Bni Hadifa</option>
<option value=\"348\">Borj Agharghar</option>
<option value=\"543\">Bouabout</option>
<option value=\"544\">Bouamssa</option>
<option value=\"464\">Bouanane</option>
<option value=\"28\">Bouarfa</option>
<option value=\"463\">Boudenib</option>
<option value=\"70\">Boufakrane</option>
<option value=\"215\">Bouguedra</option>
<option value=\"185\">Bouizakarne</option>
<option value=\"33\">Boujdour</option>
<option value=\"422\">Boukidarn</option>
<option value=\"225\">Boulaouane</option>
<option value=\"102\">Boulemane</option>
<option value=\"238\">Boumalne Dades</option>
<option value=\"99\">Boumia</option>
<option value=\"580\">Bouskoura</option>
<option value=\"141\">Bruxelles</option>
<option value=\"261\">Bzou</option>
<option value=\"15\">Casablanca</option>
<option value=\"685\">Casablanca - (Azbane - Lissasfa)</option>
<option value=\"307\">Casablanca - Ain Sebaa (CTM)</option>
<option value=\"361\">Casablanca - El Oulfa</option>
<option value=\"308\">Casablanca - Maarif</option>
<option value=\"266\">Chefchaouen</option>
<option value=\"263\">Chemaia</option>
<option value=\"245\">Cherafate</option>
<option value=\"39\">Chichaoua</option>
<option value=\"258\">Chwiter</option>
<option value=\"34\">Dakhla</option>
<option value=\"116\">Demnate</option>
<option value=\"243\">Derdara</option>
<option value=\"586\">Douar Ouled Allou</option>
<option value=\"378\">Douar Sahrij</option>
<option value=\"329\">Douar Tikni (Zone Industriel El Jadida)</option>
<option value=\"94\">Driouch</option>
<option value=\"105\">El Aioune Charkia</option>
<option value=\"117\">El Attaouia</option>
<option value=\"272\">El Borouj</option>
<option value=\"255\">El Hajeb</option>
<option value=\"196\">El Henchane</option>
<option value=\"49\">El Jadida</option>
<option value=\"356\">El Ksabi</option>
<option value=\"190\">El Menzel</option>
<option value=\"381\">El Ouatia - Tan Tan</option>
<option value=\"283\">El jebha</option>
<option value=\"61\">Errachidia</option>
<option value=\"51\">Essaouira</option>
<option value=\"312\">Fask</option>
<option value=\"23\">F&#232;s</option>
<option value=\"285\">Figuig</option>
<option value=\"121\">Fnideq</option>
<option value=\"210\">Foum El Hassan</option>
<option value=\"260\">Foum Jema&#226;</option>
<option value=\"287\">Foum zguid</option>
<option value=\"74\">Fquih Ben Salah</option>
<option value=\"349\">Frouga (Guemmassa)</option>
<option value=\"331\">Ghazoua (Essaouira Al Jadida)</option>
<option value=\"108\">Goulmima</option>
<option value=\"288\">Gourrama</option>
<option value=\"135\">Guadalajara</option>
<option value=\"37\">Guelmim</option>
<option value=\"380\">Guenfouda</option>
<option value=\"90\">Guercif</option>
<option value=\"362\">Guerguerat</option>
<option value=\"103\">Guigou</option>
<option value=\"578\">Guisser</option>
<option value=\"325\">Had Draa</option>
<option value=\"223\">Had Soualem</option>
<option value=\"112\">Hassi Berkane</option>
<option value=\"652\">Hed Hrara</option>
<option value=\"387\">Icht</option>
<option value=\"214\">Ida Osmlal</option>
<option value=\"88\">Ida Ougnidif</option>
<option value=\"370\">Idelsane</option>
<option value=\"341\">Idouirane</option>
<option value=\"471\">Iflilte</option>
<option value=\"80\">Ifrane</option>
<option value=\"207\">Ighrem</option>
<option value=\"203\">Ighrem N Ougdal</option>
<option value=\"424\">Ikkaouen</option>
<option value=\"374\">Imi n Tlit</option>
<option value=\"40\">Imintanoute</option>
<option value=\"367\">Imiter</option>
<option value=\"191\">Imouzzer Kandar</option>
<option value=\"334\">Imsouane (croisement)</option>
<option value=\"86\">Imzouren</option>
<option value=\"347\">Iriq</option>
<option value=\"208\">Issafen</option>
<option value=\"248\">Issaguen</option>
<option value=\"355\">Isserarene Tamdafelt</option>
<option value=\"585\">Jemaa Mtal</option>
<option value=\"55\">Jemaa Shaim</option>
<option value=\"205\">Jerada</option>
<option value=\"267\">Jorf El Melha</option>
<option value=\"101\">Kasba Tadla</option>
<option value=\"85\">Kassita</option>
<option value=\"123\">Kelaa Mgouna</option>
<option value=\"81\">Kelaa sraghna</option>
<option value=\"21\">Kenitra</option>
<option value=\"246\">Khamis M&#39;Diq</option>
<option value=\"582\">Khemis Ksiba (Doukala)</option>
<option value=\"17\">Khemisset</option>
<option value=\"619\">Khenichet</option>
<option value=\"73\">Kh&#233;nifra</option>
<option value=\"75\">Khouribga</option>
<option value=\"144\">Ksar El K&#233;bir</option>
<option value=\"256\">Ksar Sghir</option>
<option value=\"462\">Laaouamera</option>
<option value=\"584\">Laathamena</option>
<option value=\"32\">La&#226;youne</option>
<option value=\"38\">La&#226;youne Port</option>
<option value=\"581\">Laghnimyene</option>
<option value=\"324\">Lahri</option>
<option value=\"311\">Lakhssas</option>
<option value=\"231\">Lalla Takerkoust</option>
<option value=\"111\">Larache</option>
<option value=\"371\">Lbour</option>
<option value=\"363\">Leqliaa -Agadir-</option>
<option value=\"138\">Lerida</option>
<option value=\"345\">Loudaya</option>
<option value=\"289\">MHAMID EL GHIZLANE</option>
<option value=\"134\">Madrid</option>
<option value=\"19\">Marrakech</option>
<option value=\"303\">Martil</option>
<option value=\"321\">Maaziz</option>
<option value=\"122\">Mdiq</option>
<option value=\"69\">Adrej</option>
<option value=\"342\">Mejjat</option>
<option value=\"64\">Mekn&#232;s</option>
<option value=\"316\">Melga el Ouidane</option>
<option value=\"466\">Mengoub</option>
<option value=\"350\">Mernissa (Thar Es-Souk)</option>
<option value=\"385\">Merzouga</option>
<option value=\"328\">Messawer Rasso</option>
<option value=\"583\">Metrane (Had El Aounate)</option>
<option value=\"95\">Midar</option>
<option value=\"59\">Midelt</option>
<option value=\"41\">Mirleft</option>
<option value=\"354\">Missour</option>
<option value=\"115\">Mohamm&#233;dia</option>
<option value=\"270\">Moulay Idriss Zerhoun</option>
<option value=\"310\">Moulay Ya&#226;coub</option>
<option value=\"72\">M&#39;rirt</option>
<option value=\"343\">Mzouda</option>
<option value=\"271\">N&#39;zalat Bni Amar</option>
<option value=\"91\">Nador</option>
<option value=\"540\">Nfifa</option>
<option value=\"290\">Nkob</option>
<option value=\"264\">Oualidia</option>
<option value=\"322\">Ouaoumana</option>
<option value=\"379\">Ouargui</option>
<option value=\"20\">Ouarzazate</option>
<option value=\"83\">Oued Amlil</option>
<option value=\"113\">Oued Zem</option>
<option value=\"291\">Oued laabid</option>
<option value=\"78\">Ouezzane</option>
<option value=\"25\">Oujda</option>
<option value=\"193\">Oulad Aaissa</option>
<option value=\"340\">Oulad Abbou</option>
<option value=\"43\">Oulad Berhil</option>
<option value=\"265\">Oulad Said</option>
<option value=\"54\">Oulad Teima (Houara)</option>
<option value=\"228\">Ouled Amrane</option>
<option value=\"253\">Ouled Ayad</option>
<option value=\"377\">Ouled Khellouf</option>
<option value=\"319\">Oulm&#232;s</option>
<option value=\"195\">Ounagha</option>
<option value=\"333\">Ourtofelleh</option>
<option value=\"359\">RP 33</option>
<option value=\"7\">Rabat</option>
<option value=\"68\">Ribate El Kheir (Ahermoumou)</option>
<option value=\"60\">Rich</option>
<option value=\"63\">Rissani</option>
<option value=\"53\">Safi</option>
<option value=\"293\">Saidia</option>
<option value=\"93\">Sakka</option>
<option value=\"77\">Sal&#233;</option>
<option value=\"344\">Sebt Ait Imour</option>
<option value=\"57\">Sebt gzoula</option>
<option value=\"67\">Sefrou</option>
<option value=\"242\">Selouane</option>
<option value=\"82\">Settat</option>
<option value=\"198\">Sid L&#39;Mokhtar</option>
<option value=\"240\">Sidi Allal Tazi</option>
<option value=\"227\">Sidi Bennour</option>
<option value=\"360\">Sidi Bou Othmane</option>
<option value=\"617\">Sidi Harazem</option>
<option value=\"110\">Sidi Kacem</option>
<option value=\"425\">Sidi Rahhal</option>
<option value=\"109\">Sidi Slimane</option>
<option value=\"618\">Sidi Yahya El Gharb</option>
<option value=\"357\">Sidi Yahya Ousaad</option>
<option value=\"42\">Sidi Ifni</option>
<option value=\"189\">Skhour Rehamna</option>
<option value=\"237\">Skoura</option>
<option value=\"194\">Smara</option>
<option value=\"187\">Smimou</option>
<option value=\"366\">Souk El Had Des Bradia</option>
<option value=\"368\">Souk El Khemis Dades</option>
<option value=\"119\">Souk Sebt Oulad Nemaa</option>
<option value=\"79\">Souk El Arbaa</option>
<option value=\"376\">Sour El Aaz</option>
<option value=\"202\">Taddart (Tichka)</option>
<option value=\"12\">Tafraout</option>
<option value=\"197\">Taftecht</option>
<option value=\"52\">Taghazout</option>
<option value=\"212\">Taghjijt</option>
<option value=\"294\">Tagounite</option>
<option value=\"383\">Tah</option>
<option value=\"89\">Tahla</option>
<option value=\"125\">Taliouine</option>
<option value=\"217\">Talmest</option>
<option value=\"295\">Talsint</option>
<option value=\"186\">Tamanar</option>
<option value=\"211\">Tamanart</option>
<option value=\"297\">Tamegroute</option>
<option value=\"118\">Tamelelt</option>
<option value=\"503\">Tamorot</option>
<option value=\"336\">Tamri</option>
<option value=\"35\">Tan Tan</option>
<option value=\"259\">Tanant</option>
<option value=\"13\">Tanger</option>
<option value=\"234\">Tansikhte</option>
<option value=\"542\">Taouloukoult</option>
<option value=\"298\">Taounate</option>
<option value=\"24\">Taourirt</option>
<option value=\"184\">Tarfaya</option>
<option value=\"313\">Targoumait</option>
<option value=\"249\">Targuist</option>
<option value=\"142\">Tarifa</option>
<option value=\"45\">Taroudant</option>
<option value=\"273\">Tassaout</option>
<option value=\"206\">Tata</option>
<option value=\"29\">Taza</option>
<option value=\"299\">Tazarine</option>
<option value=\"428\">Tazart</option>
<option value=\"201\">Tazlida</option>
<option value=\"124\">Taznakht</option>
<option value=\"545\">Temara</option>
<option value=\"30\">Tendrara</option>
<option value=\"96\">Tetouan</option>
<option value=\"320\">Tiddas</option>
<option value=\"427\">Tidili Fetouaka</option>
<option value=\"332\">Tidzi</option>
<option value=\"18\">Tiflet</option>
<option value=\"300\">Tighassaline</option>
<option value=\"372\">Timahdite</option>
<option value=\"467\">Timedline</option>
<option value=\"213\">Timguilcht</option>
<option value=\"386\">Timoulay</option>
<option value=\"107\">Tinejdad</option>
<option value=\"106\">Tinghir</option>
<option value=\"233\">Tinzouline</option>
<option value=\"470\">Tiourjdal</option>
<option value=\"301\">Tissint</option>
<option value=\"84\">Tizi Ouasli</option>
<option value=\"36\">Tiznit</option>
<option value=\"389\">Tizounine</option>
<option value=\"423\">Tlata Ketama</option>
<option value=\"579\">Tnine Beni Meskine</option>
<option value=\"221\">Tnine Chtouka</option>
<option value=\"327\">Tnine Ghiat</option>
<option value=\"199\">Touama</option>
<option value=\"200\">Toufliht</option>
<option value=\"133\">Valdepenas</option>
<option value=\"229\">Youssoufia</option>
<option value=\"48\">Zag</option>
<option value=\"232\">Zagora</option>
<option value=\"98\">Zaida</option>
<option value=\"241\">Zaio</option>
<option value=\"219\">Zaouiat Sidi Smail</option>
<option value=\"100\">Zaou&#239;at Cheikh</option>
<option value=\"137\">Zaragoza</option>
<option value=\"269\">Zegota</option>
<option value=\"56\">Zemamra</option>
<option value=\"339\">Zerarda</option>
<option value=\"469\">Zerkten</option>
<option value=\"346\">Znada</option>
<option value=\"352\">Zrizer</option>
</select>
                                                    <i class=\"fa fa-circle-o-notch fa-spin fa-2x\" aria-hidden=\"true\" style=\"float: right;color: #ff6900;margin-right: 3px;opacity: .15;position: absolute;top: 10px;right: 10px;\"></i>
                                                </div>

                                            </div>
                                            <div class=\"col-xss-12 col-xs-5 col-sm-5 mt-10-xss\">
                                                <div class=\"form-group bg-change-focus-addclass mb-1-xss\" id=\"arrivee\">
                                                    <select Id=\"villeArriveeId\" class=\"form-control selectpicker\" data-done-button=\"true\" data-done-button-text=\"OK\" data-dropup-auto=\"false\" data-live-search=\"true\" data-live-search-normalize=\"true\" data-live-search-placeholder=\"Recherche\" data-size=\"7\" id=\"villeArriveeId\" name=\"villeArriveeId\" required=\"required\"><option value=\"\">--- Ville d&#39;arriv&#233;e ---</option>
<option value=\"505\">Aarab Sebbah Ziz</option>
<option value=\"1\">Agadir</option>
<option value=\"426\">Agadir Bouachiba</option>
<option value=\"11\">Agadir - Gare Inzegane</option>
<option value=\"235\">Agdz</option>
<option value=\"358\">Aghbalou N&#39;Cerdan</option>
<option value=\"504\">Aglou</option>
<option value=\"204\">Agouim</option>
<option value=\"274\">Ahfir</option>
<option value=\"351\">Ain Aicha</option>
<option value=\"26\">Ain Bni Mathar</option>
<option value=\"465\">Ain Chair</option>
<option value=\"268\">Ain Defali</option>
<option value=\"507\">Ait Aissa Ou Brahim</option>
<option value=\"120\">Ait Amira</option>
<option value=\"353\">Ait Attab</option>
<option value=\"16\">Ait Baha</option>
<option value=\"373\">Ait Daoud</option>
<option value=\"192\">Ait Iaaza</option>
<option value=\"170\">A&#239;t Ishaq</option>
<option value=\"252\">Ait Kamara</option>
<option value=\"375\">Ait Majden</option>
<option value=\"139\">Ait Melloul</option>
<option value=\"388\">Ait Ouabelli</option>
<option value=\"257\">Ait Ourir</option>
<option value=\"236\">Ait Saoun</option>
<option value=\"369\">Ait Sedrate Sahl Gharbia</option>
<option value=\"71\">Ait Abdellah</option>
<option value=\"315\">Ajdir</option>
<option value=\"382\">Akhfenir</option>
<option value=\"209\">Akka</option>
<option value=\"314\">Aklim</option>
<option value=\"66\">Aknoul</option>
<option value=\"226\">Al Aounate</option>
<option value=\"92\">Al Aroui</option>
<option value=\"65\">Al Hoce&#239;ma</option>
<option value=\"468\">Amerzgane</option>
<option value=\"541\">Ameskend</option>
<option value=\"230\">Amizimz</option>
<option value=\"338\">Anza</option>
<option value=\"506\">Aoufous</option>
<option value=\"44\">Aoulouz</option>
<option value=\"337\">Aourir</option>
<option value=\"461\">Arbaoua</option>
<option value=\"62\">Arfoud</option>
<option value=\"280\">Argoube</option>
<option value=\"143\">Assilah</option>
<option value=\"46\">Assa</option>
<option value=\"335\">Assaka (Haha)</option>
<option value=\"384\">Assaki</option>
<option value=\"262\">Assif El Mal</option>
<option value=\"220\">Azemmour</option>
<option value=\"281\">Azilal</option>
<option value=\"58\">Azrou</option>
<option value=\"318\">A&#239;n Erreggada</option>
<option value=\"247\">Bab Berred</option>
<option value=\"244\">Bab Taza</option>
<option value=\"218\">Barakat Radi</option>
<option value=\"326\">Barrakte El Amine</option>
<option value=\"114\">Beja&#226;d</option>
<option value=\"254\">Bel Ksiri</option>
<option value=\"188\">Ben Guerir</option>
<option value=\"251\">Beni Abdellah</option>
<option value=\"87\">Beni Bouayach</option>
<option value=\"317\">Beni Drar</option>
<option value=\"306\">Beni Ensar</option>
<option value=\"282\">Beni Tajdite</option>
<option value=\"76\">B&#233;ni Mellal</option>
<option value=\"31\">Berkane</option>
<option value=\"224\">Berrechid</option>
<option value=\"277\">Bhalil</option>
<option value=\"22\">Biougra</option>
<option value=\"222\">Bir Jdid</option>
<option value=\"302\">Birguendouz</option>
<option value=\"216\">Birkouate</option>
<option value=\"250\">Bni Hadifa</option>
<option value=\"348\">Borj Agharghar</option>
<option value=\"543\">Bouabout</option>
<option value=\"544\">Bouamssa</option>
<option value=\"464\">Bouanane</option>
<option value=\"28\">Bouarfa</option>
<option value=\"463\">Boudenib</option>
<option value=\"70\">Boufakrane</option>
<option value=\"215\">Bouguedra</option>
<option value=\"185\">Bouizakarne</option>
<option value=\"33\">Boujdour</option>
<option value=\"422\">Boukidarn</option>
<option value=\"225\">Boulaouane</option>
<option value=\"102\">Boulemane</option>
<option value=\"238\">Boumalne Dades</option>
<option value=\"99\">Boumia</option>
<option value=\"580\">Bouskoura</option>
<option value=\"141\">Bruxelles</option>
<option value=\"261\">Bzou</option>
<option value=\"15\">Casablanca</option>
<option value=\"685\">Casablanca - (Azbane - Lissasfa)</option>
<option value=\"307\">Casablanca - Ain Sebaa (CTM)</option>
<option value=\"361\">Casablanca - El Oulfa</option>
<option value=\"308\">Casablanca - Maarif</option>
<option value=\"266\">Chefchaouen</option>
<option value=\"263\">Chemaia</option>
<option value=\"245\">Cherafate</option>
<option value=\"39\">Chichaoua</option>
<option value=\"258\">Chwiter</option>
<option value=\"34\">Dakhla</option>
<option value=\"116\">Demnate</option>
<option value=\"243\">Derdara</option>
<option value=\"586\">Douar Ouled Allou</option>
<option value=\"378\">Douar Sahrij</option>
<option value=\"329\">Douar Tikni (Zone Industriel El Jadida)</option>
<option value=\"94\">Driouch</option>
<option value=\"105\">El Aioune Charkia</option>
<option value=\"117\">El Attaouia</option>
<option value=\"272\">El Borouj</option>
<option value=\"255\">El Hajeb</option>
<option value=\"196\">El Henchane</option>
<option value=\"49\">El Jadida</option>
<option value=\"356\">El Ksabi</option>
<option value=\"190\">El Menzel</option>
<option value=\"381\">El Ouatia - Tan Tan</option>
<option value=\"283\">El jebha</option>
<option value=\"61\">Errachidia</option>
<option value=\"51\">Essaouira</option>
<option value=\"312\">Fask</option>
<option value=\"23\">F&#232;s</option>
<option value=\"285\">Figuig</option>
<option value=\"121\">Fnideq</option>
<option value=\"210\">Foum El Hassan</option>
<option value=\"260\">Foum Jema&#226;</option>
<option value=\"287\">Foum zguid</option>
<option value=\"74\">Fquih Ben Salah</option>
<option value=\"349\">Frouga (Guemmassa)</option>
<option value=\"331\">Ghazoua (Essaouira Al Jadida)</option>
<option value=\"108\">Goulmima</option>
<option value=\"288\">Gourrama</option>
<option value=\"135\">Guadalajara</option>
<option value=\"37\">Guelmim</option>
<option value=\"380\">Guenfouda</option>
<option value=\"90\">Guercif</option>
<option value=\"362\">Guerguerat</option>
<option value=\"103\">Guigou</option>
<option value=\"578\">Guisser</option>
<option value=\"325\">Had Draa</option>
<option value=\"223\">Had Soualem</option>
<option value=\"112\">Hassi Berkane</option>
<option value=\"652\">Hed Hrara</option>
<option value=\"387\">Icht</option>
<option value=\"214\">Ida Osmlal</option>
<option value=\"88\">Ida Ougnidif</option>
<option value=\"370\">Idelsane</option>
<option value=\"341\">Idouirane</option>
<option value=\"471\">Iflilte</option>
<option value=\"80\">Ifrane</option>
<option value=\"207\">Ighrem</option>
<option value=\"203\">Ighrem N Ougdal</option>
<option value=\"424\">Ikkaouen</option>
<option value=\"374\">Imi n Tlit</option>
<option value=\"40\">Imintanoute</option>
<option value=\"367\">Imiter</option>
<option value=\"191\">Imouzzer Kandar</option>
<option value=\"334\">Imsouane (croisement)</option>
<option value=\"86\">Imzouren</option>
<option value=\"347\">Iriq</option>
<option value=\"208\">Issafen</option>
<option value=\"248\">Issaguen</option>
<option value=\"355\">Isserarene Tamdafelt</option>
<option value=\"585\">Jemaa Mtal</option>
<option value=\"55\">Jemaa Shaim</option>
<option value=\"205\">Jerada</option>
<option value=\"267\">Jorf El Melha</option>
<option value=\"101\">Kasba Tadla</option>
<option value=\"85\">Kassita</option>
<option value=\"123\">Kelaa Mgouna</option>
<option value=\"81\">Kelaa sraghna</option>
<option value=\"21\">Kenitra</option>
<option value=\"246\">Khamis M&#39;Diq</option>
<option value=\"582\">Khemis Ksiba (Doukala)</option>
<option value=\"17\">Khemisset</option>
<option value=\"619\">Khenichet</option>
<option value=\"73\">Kh&#233;nifra</option>
<option value=\"75\">Khouribga</option>
<option value=\"144\">Ksar El K&#233;bir</option>
<option value=\"256\">Ksar Sghir</option>
<option value=\"462\">Laaouamera</option>
<option value=\"584\">Laathamena</option>
<option value=\"32\">La&#226;youne</option>
<option value=\"38\">La&#226;youne Port</option>
<option value=\"581\">Laghnimyene</option>
<option value=\"324\">Lahri</option>
<option value=\"311\">Lakhssas</option>
<option value=\"231\">Lalla Takerkoust</option>
<option value=\"111\">Larache</option>
<option value=\"371\">Lbour</option>
<option value=\"363\">Leqliaa -Agadir-</option>
<option value=\"138\">Lerida</option>
<option value=\"345\">Loudaya</option>
<option value=\"289\">MHAMID EL GHIZLANE</option>
<option value=\"134\">Madrid</option>
<option value=\"19\">Marrakech</option>
<option value=\"303\">Martil</option>
<option value=\"321\">Maaziz</option>
<option value=\"122\">Mdiq</option>
<option value=\"69\">Adrej</option>
<option value=\"342\">Mejjat</option>
<option value=\"64\">Mekn&#232;s</option>
<option value=\"316\">Melga el Ouidane</option>
<option value=\"466\">Mengoub</option>
<option value=\"350\">Mernissa (Thar Es-Souk)</option>
<option value=\"385\">Merzouga</option>
<option value=\"328\">Messawer Rasso</option>
<option value=\"583\">Metrane (Had El Aounate)</option>
<option value=\"95\">Midar</option>
<option value=\"59\">Midelt</option>
<option value=\"41\">Mirleft</option>
<option value=\"354\">Missour</option>
<option value=\"115\">Mohamm&#233;dia</option>
<option value=\"270\">Moulay Idriss Zerhoun</option>
<option value=\"310\">Moulay Ya&#226;coub</option>
<option value=\"72\">M&#39;rirt</option>
<option value=\"343\">Mzouda</option>
<option value=\"271\">N&#39;zalat Bni Amar</option>
<option value=\"91\">Nador</option>
<option value=\"540\">Nfifa</option>
<option value=\"290\">Nkob</option>
<option value=\"264\">Oualidia</option>
<option value=\"322\">Ouaoumana</option>
<option value=\"379\">Ouargui</option>
<option value=\"20\">Ouarzazate</option>
<option value=\"83\">Oued Amlil</option>
<option value=\"113\">Oued Zem</option>
<option value=\"291\">Oued laabid</option>
<option value=\"78\">Ouezzane</option>
<option value=\"25\">Oujda</option>
<option value=\"193\">Oulad Aaissa</option>
<option value=\"340\">Oulad Abbou</option>
<option value=\"43\">Oulad Berhil</option>
<option value=\"265\">Oulad Said</option>
<option value=\"54\">Oulad Teima (Houara)</option>
<option value=\"228\">Ouled Amrane</option>
<option value=\"253\">Ouled Ayad</option>
<option value=\"377\">Ouled Khellouf</option>
<option value=\"319\">Oulm&#232;s</option>
<option value=\"195\">Ounagha</option>
<option value=\"333\">Ourtofelleh</option>
<option value=\"359\">RP 33</option>
<option value=\"7\">Rabat</option>
<option value=\"68\">Ribate El Kheir (Ahermoumou)</option>
<option value=\"60\">Rich</option>
<option value=\"63\">Rissani</option>
<option value=\"53\">Safi</option>
<option value=\"293\">Saidia</option>
<option value=\"93\">Sakka</option>
<option value=\"77\">Sal&#233;</option>
<option value=\"344\">Sebt Ait Imour</option>
<option value=\"57\">Sebt gzoula</option>
<option value=\"67\">Sefrou</option>
<option value=\"242\">Selouane</option>
<option value=\"82\">Settat</option>
<option value=\"198\">Sid L&#39;Mokhtar</option>
<option value=\"240\">Sidi Allal Tazi</option>
<option value=\"227\">Sidi Bennour</option>
<option value=\"360\">Sidi Bou Othmane</option>
<option value=\"617\">Sidi Harazem</option>
<option value=\"110\">Sidi Kacem</option>
<option value=\"425\">Sidi Rahhal</option>
<option value=\"109\">Sidi Slimane</option>
<option value=\"618\">Sidi Yahya El Gharb</option>
<option value=\"357\">Sidi Yahya Ousaad</option>
<option value=\"42\">Sidi Ifni</option>
<option value=\"189\">Skhour Rehamna</option>
<option value=\"237\">Skoura</option>
<option value=\"194\">Smara</option>
<option value=\"187\">Smimou</option>
<option value=\"366\">Souk El Had Des Bradia</option>
<option value=\"368\">Souk El Khemis Dades</option>
<option value=\"119\">Souk Sebt Oulad Nemaa</option>
<option value=\"79\">Souk El Arbaa</option>
<option value=\"376\">Sour El Aaz</option>
<option value=\"202\">Taddart (Tichka)</option>
<option value=\"12\">Tafraout</option>
<option value=\"197\">Taftecht</option>
<option value=\"52\">Taghazout</option>
<option value=\"212\">Taghjijt</option>
<option value=\"294\">Tagounite</option>
<option value=\"383\">Tah</option>
<option value=\"89\">Tahla</option>
<option value=\"125\">Taliouine</option>
<option value=\"217\">Talmest</option>
<option value=\"295\">Talsint</option>
<option value=\"186\">Tamanar</option>
<option value=\"211\">Tamanart</option>
<option value=\"297\">Tamegroute</option>
<option value=\"118\">Tamelelt</option>
<option value=\"503\">Tamorot</option>
<option value=\"336\">Tamri</option>
<option value=\"35\">Tan Tan</option>
<option value=\"259\">Tanant</option>
<option value=\"13\">Tanger</option>
<option value=\"234\">Tansikhte</option>
<option value=\"542\">Taouloukoult</option>
<option value=\"298\">Taounate</option>
<option value=\"24\">Taourirt</option>
<option value=\"184\">Tarfaya</option>
<option value=\"313\">Targoumait</option>
<option value=\"249\">Targuist</option>
<option value=\"142\">Tarifa</option>
<option value=\"45\">Taroudant</option>
<option value=\"273\">Tassaout</option>
<option value=\"206\">Tata</option>
<option value=\"29\">Taza</option>
<option value=\"299\">Tazarine</option>
<option value=\"428\">Tazart</option>
<option value=\"201\">Tazlida</option>
<option value=\"124\">Taznakht</option>
<option value=\"545\">Temara</option>
<option value=\"30\">Tendrara</option>
<option value=\"96\">Tetouan</option>
<option value=\"320\">Tiddas</option>
<option value=\"427\">Tidili Fetouaka</option>
<option value=\"332\">Tidzi</option>
<option value=\"18\">Tiflet</option>
<option value=\"300\">Tighassaline</option>
<option value=\"372\">Timahdite</option>
<option value=\"467\">Timedline</option>
<option value=\"213\">Timguilcht</option>
<option value=\"386\">Timoulay</option>
<option value=\"107\">Tinejdad</option>
<option value=\"106\">Tinghir</option>
<option value=\"233\">Tinzouline</option>
<option value=\"470\">Tiourjdal</option>
<option value=\"301\">Tissint</option>
<option value=\"84\">Tizi Ouasli</option>
<option value=\"36\">Tiznit</option>
<option value=\"389\">Tizounine</option>
<option value=\"423\">Tlata Ketama</option>
<option value=\"579\">Tnine Beni Meskine</option>
<option value=\"221\">Tnine Chtouka</option>
<option value=\"327\">Tnine Ghiat</option>
<option value=\"199\">Touama</option>
<option value=\"200\">Toufliht</option>
<option value=\"133\">Valdepenas</option>
<option value=\"229\">Youssoufia</option>
<option value=\"48\">Zag</option>
<option value=\"232\">Zagora</option>
<option value=\"98\">Zaida</option>
<option value=\"241\">Zaio</option>
<option value=\"219\">Zaouiat Sidi Smail</option>
<option value=\"100\">Zaou&#239;at Cheikh</option>
<option value=\"137\">Zaragoza</option>
<option value=\"269\">Zegota</option>
<option value=\"56\">Zemamra</option>
<option value=\"339\">Zerarda</option>
<option value=\"469\">Zerkten</option>
<option value=\"346\">Znada</option>
<option value=\"352\">Zrizer</option>
</select>
                                                    <i class=\"fa fa-circle-o-notch fa-spin fa-2x\" aria-hidden=\"true\" style=\"float: right;color: #ff6900;margin-right: 3px;opacity: .15;position: absolute;top: 10px;right: 10px;\"></i>
                                                </div>
                                            </div>
                                            <div class=\"col-xss-12 col-xs-2 col-sm-2 mt-10-xss\">
\t\t\t\t\t\t\t\t\t\t
                                                <div class=\"form-group bg-change-focus-addclass  mb-1-xss\">                          
                                                    <select class=\"form-control selectpicker\" name=\"nbrSeat\"  >
                                                        <option value=\"1\">1 Passager</option>
                                                        <option value=\"2\">2 Passager</option>
                                                        <option value=\"3\">3 Passager</option>
                                                        <option value=\"4\">4 Passager</option>
                                                        <option value=\"5\">5 Passager</option>
                                                        <option value=\"6\">6 Passager</option>
                                                        <option value=\"7\">7 Passager</option>
                                                        <option value=\"8\">8 Passager</option>
                                                    </select>
                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t
                                            </div>
                                        </div>

                                    </div>


                                    <div class=\"col-xss-12 col-xs-12 col-sm-3 col-md-3 mt-10-xs\">
                                        <div class=\"form-group bg-change-focus-addclass mb-1-xs\">
                                            <div class=\"input-group\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"fa fa-calendar\" style=\"color: rgb(255, 105, 0);\"></i>
                                                </div>
                                                <input type=\"text\" name=\"dateDepart\" class=\"form-control\" id=\"datepicker\" value=\"2023-05-07\">
                                            </div>
                                        </div>
                                     
                                    </div>  
                                    <div class=\"col-xss-12 col-xs-12 col-sm-2 col-md-2 mt-10-xs\">
                                       

                                        <div class=\"btn-holder\">
                                            <button type=\"submit\" id=\"rechercher\" data-spinner-color=\"#FFFFFF\" data-style=\"zoom-in\" data-size=\"xl\" class=\"btn btn-block btn-primary ladda-button\">
                                                <span class=\"ladda-label\"><i class=\"fa fa-search\"></i>Rechercher</span>
                                            </button>                               
                                        </div>
                                        
                                    </div>

                                   </div>
                                </div>
                            </div>
                </div>

            </div>
</form>

          <div class=\"row gy-4\" data-aos=\"fade-up\" data-aos-delay=\"400\">

            <div class=\"col-lg-3 col-6\">
              <div class=\"stats-item text-center w-100 h-100\">
                <span data-purecounter-start=\"0\" data-purecounter-end=\"232\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                <p>Clients</p>
              </div>
            </div><!-- End Stats Item -->

            <div class=\"col-lg-3 col-6\">
              <div class=\"stats-item text-center w-100 h-100\">
                <span data-purecounter-start=\"0\" data-purecounter-end=\"521\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                <p>Projects</p>
              </div>
            </div><!-- End Stats Item -->

            <div class=\"col-lg-3 col-6\">
              <div class=\"stats-item text-center w-100 h-100\">
                <span data-purecounter-start=\"0\" data-purecounter-end=\"1453\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                <p>Support</p>
              </div>
            </div><!-- End Stats Item -->

            <div class=\"col-lg-3 col-6\">
              <div class=\"stats-item text-center w-100 h-100\">
                <span data-purecounter-start=\"0\" data-purecounter-end=\"32\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                <p>Workers</p>
              </div>
            </div><!-- End Stats Item -->

          </div>
        </div>

        <div class=\"col-lg-5 order-1 order-lg-2 hero-img\" data-aos=\"zoom-out\">
          <img src={{ asset('assets/img/hero-img.svg') }} class=\"img-fluid mb-3 mb-lg-0\" alt=\"\">
        </div>

      </div>
    </div>
  </section><!-- End Hero Section -->

    <section class=\"sample-page\">
      <div class=\"container\" data-aos=\"fade-up\">
        {% block body %}
          Template Body
        {% endblock %}
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id=\"footer\" class=\"footer\">

    <div class=\"container\">
      <div class=\"row gy-4\">
        <div class=\"col-lg-5 col-md-12 footer-info\">
          <a href=\"index.html\" class=\"logo d-flex align-items-center\">
            <span>Logis</span>
          </a>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
          <div class=\"social-links d-flex mt-4\">
            <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter\"></i></a>
            <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
            <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
            <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
          </div>
        </div>

        <div class=\"col-lg-2 col-6 footer-links\">
          <h4>Useful Links</h4>
          <ul>
            <li><a href=\"#\">Home</a></li>
            <li><a href=\"#\">About us</a></li>
            <li><a href=\"#\">Services</a></li>
            <li><a href=\"#\">Terms of service</a></li>
            <li><a href=\"#\">Privacy policy</a></li>
          </ul>
        </div>

        <div class=\"col-lg-2 col-6 footer-links\">
          <h4>Our Services</h4>
          <ul>
            <li><a href=\"#\">Web Design</a></li>
            <li><a href=\"#\">Web Development</a></li>
            <li><a href=\"#\">Product Management</a></li>
            <li><a href=\"#\">Marketing</a></li>
            <li><a href=\"#\">Graphic Design</a></li>
          </ul>
        </div>

        <div class=\"col-lg-3 col-md-12 footer-contact text-center text-md-start\">
          <h4>Contact Us</h4>
          <p>
            A108 Adam Street <br>
            New York, NY 535022<br>
            United States <br><br>
            <strong>Phone:</strong> +1 5589 55488 55<br>
            <strong>Email:</strong> info@example.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class=\"container mt-4\">
      <div class=\"copyright\">
        &copy; Copyright <strong><span>Logis</span></strong>. All Rights Reserved
      </div>
      <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href=\"#\" class=\"scroll-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <div id=\"preloader\"></div>

  <!-- Vendor JS Files -->
  <script src={{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>
  <script src={{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}></script>
  <script src={{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}></script>
  <script src={{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}></script>
  <script src={{ asset('assets/vendor/aos/aos.js') }}></script>
  <script src={{ asset('assets/vendor/php-email-form/validate.js') }}></script>

  <!-- Template Main JS File -->
  <script src={{ asset('assets/js/main.js') }}></script>

</body>

</html>", "template2.html.twig", "D:\\Personal files\\Documents\\ENSIAS IDSIT\\Frameworks Web\\Workspace\\ipark\\templates\\template2.html.twig");
    }
}
