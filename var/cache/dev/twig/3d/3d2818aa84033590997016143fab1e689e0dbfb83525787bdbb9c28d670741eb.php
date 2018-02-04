<?php

/* default/index.html.twig */
class __TwigTemplate_49f26b627150329d46e0cb55c64e42cb2d006ffbc1dcc4a79937a1eae40d2a80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'style' => array($this, 'block_style'),
            'script' => array($this, 'block_script'),
            'header' => array($this, 'block_header'),
            'section1' => array($this, 'block_section1'),
            'section2' => array($this, 'block_section2'),
            'section3' => array($this, 'block_section3'),
            'section4' => array($this, 'block_section4'),
            'section5' => array($this, 'block_section5'),
            'section6' => array($this, 'block_section6'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed03710298448f8e3ac4690102aba07ffc5c063adf82360d3a98c2c04b5184bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed03710298448f8e3ac4690102aba07ffc5c063adf82360d3a98c2c04b5184bc->enter($__internal_ed03710298448f8e3ac4690102aba07ffc5c063adf82360d3a98c2c04b5184bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_6eed28b3d1d80a55580151ae445a7ef491e413090c3752f61381e32814083606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eed28b3d1d80a55580151ae445a7ef491e413090c3752f61381e32814083606->enter($__internal_6eed28b3d1d80a55580151ae445a7ef491e413090c3752f61381e32814083606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        // line 1
        echo "<html>
<head>
    ";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 44
        echo "</head>


<div class=\"section-header\">
    ";
        // line 48
        $this->displayBlock('header', $context, $blocks);
        // line 139
        echo "</div>

<body>

<div class=\"section1\">
    ";
        // line 144
        $this->displayBlock('section1', $context, $blocks);
        // line 250
        echo "</div>




<div class=\"section2\">
    ";
        // line 256
        $this->displayBlock('section2', $context, $blocks);
        // line 311
        echo "</div>



<div class=\"section3\">
    ";
        // line 316
        $this->displayBlock('section3', $context, $blocks);
        // line 428
        echo "</div>




<div class=\"section4\">
    ";
        // line 434
        $this->displayBlock('section4', $context, $blocks);
        // line 501
        echo "</div>




<div class=\"section5\">
    ";
        // line 507
        $this->displayBlock('section5', $context, $blocks);
        // line 580
        echo "</div>


<div class=\"section6\">
    ";
        // line 584
        $this->displayBlock('section6', $context, $blocks);
        // line 632
        echo "</div>






</body>


<div class=\"section-footer\">
    ";
        // line 643
        $this->displayBlock('footer', $context, $blocks);
        // line 648
        echo "</div>

</html>

";
        
        $__internal_ed03710298448f8e3ac4690102aba07ffc5c063adf82360d3a98c2c04b5184bc->leave($__internal_ed03710298448f8e3ac4690102aba07ffc5c063adf82360d3a98c2c04b5184bc_prof);

        
        $__internal_6eed28b3d1d80a55580151ae445a7ef491e413090c3752f61381e32814083606->leave($__internal_6eed28b3d1d80a55580151ae445a7ef491e413090c3752f61381e32814083606_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_44934f1fcbaaa780cb71075ed7563a7a45da52e427bf91368a8c733f89147d45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44934f1fcbaaa780cb71075ed7563a7a45da52e427bf91368a8c733f89147d45->enter($__internal_44934f1fcbaaa780cb71075ed7563a7a45da52e427bf91368a8c733f89147d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8f58ad332b2a8dbb7c4f30a2c42d23e733343fb4aeb564de91f594739c006dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f58ad332b2a8dbb7c4f30a2c42d23e733343fb4aeb564de91f594739c006dc4->enter($__internal_8f58ad332b2a8dbb7c4f30a2c42d23e733343fb4aeb564de91f594739c006dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "
        ";
        // line 5
        $this->displayBlock('meta', $context, $blocks);
        // line 8
        echo "
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo " </title>

        ";
        // line 11
        $this->displayBlock('style', $context, $blocks);
        // line 19
        echo "
        ";
        // line 20
        $this->displayBlock('script', $context, $blocks);
        // line 42
        echo "
    ";
        
        $__internal_8f58ad332b2a8dbb7c4f30a2c42d23e733343fb4aeb564de91f594739c006dc4->leave($__internal_8f58ad332b2a8dbb7c4f30a2c42d23e733343fb4aeb564de91f594739c006dc4_prof);

        
        $__internal_44934f1fcbaaa780cb71075ed7563a7a45da52e427bf91368a8c733f89147d45->leave($__internal_44934f1fcbaaa780cb71075ed7563a7a45da52e427bf91368a8c733f89147d45_prof);

    }

    // line 5
    public function block_meta($context, array $blocks = array())
    {
        $__internal_55d35b490494f9ab0c60b3c5d28d37ef816d383536957144c33d53c7200b0084 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55d35b490494f9ab0c60b3c5d28d37ef816d383536957144c33d53c7200b0084->enter($__internal_55d35b490494f9ab0c60b3c5d28d37ef816d383536957144c33d53c7200b0084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        $__internal_85fd33a211ed5f69c5b7d7095d13435b498a28087e7889207a771d58246113cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85fd33a211ed5f69c5b7d7095d13435b498a28087e7889207a771d58246113cf->enter($__internal_85fd33a211ed5f69c5b7d7095d13435b498a28087e7889207a771d58246113cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 6
        echo "            <meta charset=\"utf-8\" />
        ";
        
        $__internal_85fd33a211ed5f69c5b7d7095d13435b498a28087e7889207a771d58246113cf->leave($__internal_85fd33a211ed5f69c5b7d7095d13435b498a28087e7889207a771d58246113cf_prof);

        
        $__internal_55d35b490494f9ab0c60b3c5d28d37ef816d383536957144c33d53c7200b0084->leave($__internal_55d35b490494f9ab0c60b3c5d28d37ef816d383536957144c33d53c7200b0084_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9671723188a01d809e1a9aa4fdc0ce37ad1ac6cc0bd2b2be7b7d594f37c2420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9671723188a01d809e1a9aa4fdc0ce37ad1ac6cc0bd2b2be7b7d594f37c2420->enter($__internal_e9671723188a01d809e1a9aa4fdc0ce37ad1ac6cc0bd2b2be7b7d594f37c2420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dbe2e84729e3d9a07c895a86f5d5334009ba3bbe3dda344b20fa4dcbaac6d038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbe2e84729e3d9a07c895a86f5d5334009ba3bbe3dda344b20fa4dcbaac6d038->enter($__internal_dbe2e84729e3d9a07c895a86f5d5334009ba3bbe3dda344b20fa4dcbaac6d038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Espace Etudiant ";
        
        $__internal_dbe2e84729e3d9a07c895a86f5d5334009ba3bbe3dda344b20fa4dcbaac6d038->leave($__internal_dbe2e84729e3d9a07c895a86f5d5334009ba3bbe3dda344b20fa4dcbaac6d038_prof);

        
        $__internal_e9671723188a01d809e1a9aa4fdc0ce37ad1ac6cc0bd2b2be7b7d594f37c2420->leave($__internal_e9671723188a01d809e1a9aa4fdc0ce37ad1ac6cc0bd2b2be7b7d594f37c2420_prof);

    }

    // line 11
    public function block_style($context, array $blocks = array())
    {
        $__internal_8993c6c67327bbaba26f7d100610f84766e6ee4ec1acda1385e27e87797f95eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8993c6c67327bbaba26f7d100610f84766e6ee4ec1acda1385e27e87797f95eb->enter($__internal_8993c6c67327bbaba26f7d100610f84766e6ee4ec1acda1385e27e87797f95eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_a3e385af86769ce179addb4a19f095857d5720549dae561d49b767fc0d27a06e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3e385af86769ce179addb4a19f095857d5720549dae561d49b767fc0d27a06e->enter($__internal_a3e385af86769ce179addb4a19f095857d5720549dae561d49b767fc0d27a06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/nav.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/lightbox.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/flexslider.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_a3e385af86769ce179addb4a19f095857d5720549dae561d49b767fc0d27a06e->leave($__internal_a3e385af86769ce179addb4a19f095857d5720549dae561d49b767fc0d27a06e_prof);

        
        $__internal_8993c6c67327bbaba26f7d100610f84766e6ee4ec1acda1385e27e87797f95eb->leave($__internal_8993c6c67327bbaba26f7d100610f84766e6ee4ec1acda1385e27e87797f95eb_prof);

    }

    // line 20
    public function block_script($context, array $blocks = array())
    {
        $__internal_746cbaa45185a2890e2539d6dbef446ccdbe8943bbdfe0efa1be01fb12e2049e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_746cbaa45185a2890e2539d6dbef446ccdbe8943bbdfe0efa1be01fb12e2049e->enter($__internal_746cbaa45185a2890e2539d6dbef446ccdbe8943bbdfe0efa1be01fb12e2049e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_e754177363a80057ddf128296593280c2711ea08337ef769fcb0a8e133bc1db7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e754177363a80057ddf128296593280c2711ea08337ef769fcb0a8e133bc1db7->enter($__internal_e754177363a80057ddf128296593280c2711ea08337ef769fcb0a8e133bc1db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 21
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/uisearch.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/SmoothScroll.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/numscroller-1.0.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/nav.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/move-top.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/lightbox-plus-jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easing.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/classie.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>

    <script>
    </script>





    ";
        
        $__internal_e754177363a80057ddf128296593280c2711ea08337ef769fcb0a8e133bc1db7->leave($__internal_e754177363a80057ddf128296593280c2711ea08337ef769fcb0a8e133bc1db7_prof);

        
        $__internal_746cbaa45185a2890e2539d6dbef446ccdbe8943bbdfe0efa1be01fb12e2049e->leave($__internal_746cbaa45185a2890e2539d6dbef446ccdbe8943bbdfe0efa1be01fb12e2049e_prof);

    }

    // line 48
    public function block_header($context, array $blocks = array())
    {
        $__internal_e738f5e0450ad6a9da6575cc01c800aa85c38a09fec60ea2d8f2e3b5ffea6e14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e738f5e0450ad6a9da6575cc01c800aa85c38a09fec60ea2d8f2e3b5ffea6e14->enter($__internal_e738f5e0450ad6a9da6575cc01c800aa85c38a09fec60ea2d8f2e3b5ffea6e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_ecc414b1845a83643f5ee348c33835a45adfbcde7a6a292c0aadefc91fd3a3f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecc414b1845a83643f5ee348c33835a45adfbcde7a6a292c0aadefc91fd3a3f1->enter($__internal_ecc414b1845a83643f5ee348c33835a45adfbcde7a6a292c0aadefc91fd3a3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 49
        echo "

        <div class=\"sub-agile\">
            <div class=\"agile1\">
                <!-- navigation section -->
                <div>
                    <p><button id=\"trigger-overlay\" type=\"button\"><img alt=\"menu\" class=\"img-responsive\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/menu.png"), "html", null, true);
        echo "\"></button></p>
                </div><!-- open/close -->
                <div class=\"overlay overlay-boxes\">
                    <svg height=\"101%\" preserveAspectRatio=\"none\" viewBox=\"0 0 1440 806\" width=\"100%\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"m0.005959,200.364029l207.551124,0l0,204.342453l-207.551124,0l0,-204.342453z\"></path>
                        <path d=\"m0.005959,400.45401l207.551124,0l0,204.342499l-207.551124,0l0,-204.342499z\"></path>
                        <path d=\"m0.005959,600.544067l207.551124,0l0,204.342468l-207.551124,0l0,-204.342468z\"></path>
                        <path d=\"m205.752151,-0.36l207.551163,0l0,204.342437l-207.551163,0l0,-204.342437z\"></path>
                        <path d=\"m204.744629,200.364029l207.551147,0l0,204.342453l-207.551147,0l0,-204.342453z\"></path>
                        <path d=\"m204.744629,400.45401l207.551147,0l0,204.342499l-207.551147,0l0,-204.342499z\"></path>
                        <path d=\"m204.744629,600.544067l207.551147,0l0,204.342468l-207.551147,0l0,-204.342468z\"></path>
                        <path d=\"m410.416046,-0.36l207.551117,0l0,204.342437l-207.551117,0l0,-204.342437z\"></path>
                        <path d=\"m410.416046,200.364029l207.551117,0l0,204.342453l-207.551117,0l0,-204.342453z\"></path>
                        <path d=\"m410.416046,400.45401l207.551117,0l0,204.342499l-207.551117,0l0,-204.342499z\"></path>
                        <path d=\"m410.416046,600.544067l207.551117,0l0,204.342468l-207.551117,0l0,-204.342468z\"></path>
                        <path d=\"m616.087402,-0.36l207.551086,0l0,204.342437l-207.551086,0l0,-204.342437z\"></path>
                        <path d=\"m616.087402,200.364029l207.551086,0l0,204.342453l-207.551086,0l0,-204.342453z\"></path>
                        <path d=\"m616.087402,400.45401l207.551086,0l0,204.342499l-207.551086,0l0,-204.342499z\"></path>
                        <path d=\"m616.087402,600.544067l207.551086,0l0,204.342468l-207.551086,0l0,-204.342468z\"></path>
                        <path d=\"m821.748718,-0.36l207.550964,0l0,204.342437l-207.550964,0l0,-204.342437z\"></path>
                        <path d=\"m821.748718,200.364029l207.550964,0l0,204.342453l-207.550964,0l0,-204.342453z\"></path>
                        <path d=\"m821.748718,400.45401l207.550964,0l0,204.342499l-207.550964,0l0,-204.342499z\"></path>
                        <path d=\"m821.748718,600.544067l207.550964,0l0,204.342468l-207.550964,0l0,-204.342468z\"></path>
                        <path d=\"m1027.203979,-0.36l207.550903,0l0,204.342437l-207.550903,0l0,-204.342437z\"></path>
                        <path d=\"m1027.203979,200.364029l207.550903,0l0,204.342453l-207.550903,0l0,-204.342453z\"></path>
                        <path d=\"m1027.203979,400.45401l207.550903,0l0,204.342499l-207.550903,0l0,-204.342499z\"></path>
                        <path d=\"m1027.203979,600.544067l207.550903,0l0,204.342468l-207.550903,0l0,-204.342468z\"></path>
                        <path d=\"m1232.659302,-0.36l207.551147,0l0,204.342437l-207.551147,0l0,-204.342437z\"></path>
                        <path d=\"m1232.659302,200.364029l207.551147,0l0,204.342453l-207.551147,0l0,-204.342453z\"></path>
                        <path d=\"m1232.659302,400.45401l207.551147,0l0,204.342499l-207.551147,0l0,-204.342499z\"></path>
                        <path d=\"m1232.659302,600.544067l207.551147,0l0,204.342468l-207.551147,0l0,-204.342468z\"></path>
                        <path d=\"m-0.791443,-0.360001l207.551163,0l0,204.342438l-207.551163,0l0,-204.342438z\"></path></svg> <button class=\"overlay-close\" type=\"button\">Close</button>
                    <nav>
                        <ul>
                            <li>
                                <a href=\"index.html\">Home</a>
                            </li>
                            <li>
                                <a class=\"scroll\" href=\"#about\">About</a>
                            </li>
                            <li>
                                <a class=\"scroll\" href=\"#services\">Services</a>
                            </li>
                            <li>
                                <a class=\"scroll\" href=\"#team\">Team</a>
                            </li>
                            <li>
                                <a class=\"scroll\" href=\"#gallery\">Gallery</a>
                            </li>
                            <li>
                                <a class=\"scroll\" href=\"#stats\">Stats</a>
                            </li>
                            <li>
                                <a class=\"scroll\" href=\"#contact\">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div><!-- /open/close -->
                <!-- /navigation section -->
            </div><a href=\"index.html\">
                <ul class=\"logo\">
                    <li><i aria-hidden=\"true\" class=\"glyphicon glyphicon-book\"></i></li>
                    <li>
                        <h1>Esprit Entr'Aide</h1>
                    </li>
                </ul></a>
            <div class=\"number\">
                <p><a class=\"scroll\" href=\"#contact\"><i aria-hidden=\"true\" class=\"fa fa-envelope\"></i></a></p>
                <p>+216 90 000 000</p>
            </div>
            <div class=\"clearfix\"></div>
            <div class=\"search-box\">
                <div class=\"sb-search\" id=\"sb-search\">
                    <form>
                        <input class=\"sb-search-input\" id=\"search\" name=\"search\" placeholder=\"Enter your search term...\" type=\"search\"> <input class=\"sb-search-submit\" type=\"submit\" value=\"\"> <span class=\"sb-icon-search\"></span>
                    </form>
                </div>
            </div>
            <div class=\"clearfix\"></div>
        </div>



    ";
        
        $__internal_ecc414b1845a83643f5ee348c33835a45adfbcde7a6a292c0aadefc91fd3a3f1->leave($__internal_ecc414b1845a83643f5ee348c33835a45adfbcde7a6a292c0aadefc91fd3a3f1_prof);

        
        $__internal_e738f5e0450ad6a9da6575cc01c800aa85c38a09fec60ea2d8f2e3b5ffea6e14->leave($__internal_e738f5e0450ad6a9da6575cc01c800aa85c38a09fec60ea2d8f2e3b5ffea6e14_prof);

    }

    // line 144
    public function block_section1($context, array $blocks = array())
    {
        $__internal_b2d12cc42f462b2abebcf7173abdd8fb752c88cb9af2ba73c0de5621a589d09d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2d12cc42f462b2abebcf7173abdd8fb752c88cb9af2ba73c0de5621a589d09d->enter($__internal_b2d12cc42f462b2abebcf7173abdd8fb752c88cb9af2ba73c0de5621a589d09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section1"));

        $__internal_490f6be82382e9e559aa7dbc8167e58225392f7eb4c71d4eaf89b87dd97e9c88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_490f6be82382e9e559aa7dbc8167e58225392f7eb4c71d4eaf89b87dd97e9c88->enter($__internal_490f6be82382e9e559aa7dbc8167e58225392f7eb4c71d4eaf89b87dd97e9c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section1"));

        // line 145
        echo "

        <div class=\"w3l-banner\">
            <div class=\"banner-dott\">
                <div class=\"header\">
                    <!-- //Header -->
                    <div class=\"container\">
                        <div class=\"flexslider-info\">
                            <section class=\"slider\">
                                <div class=\"flexslider\">
                                    <div class=\"flex-viewport\" style=\"overflow: hidden; position: relative;\">
                                        <ul class=\"slides\" style=\"width: 1000%; transition-duration: 0s; transform: translate3d(-1140px, 0px, 0px);\">
                                            <li class=\"clone\" style=\"width: 1140px; float: left; display: block;\">
                                                <div class=\"w3l-info\">
                                                    <h3>Because you care...</h3>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-book\"></i>
                                                            <p>SAVING THE PLANET By educating people</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-pencil\"></i>
                                                            <p>Education is to unlock the freedom</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-graduation-cap\"></i>
                                                            <p>The aim of education is not knowledge</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"clearfix\"></div>
                                                </div>
                                            </li>
                                            <li class=\"flex-active-slide\" style=\"width: 1140px; float: left; display: block;\">
                                                <div class=\"w3l-info\">
                                                    <h2>Because you care...</h2>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-graduation-cap\"></i>
                                                            <p>5 Derniers Collocation</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-pencil\"></i>
                                                            <p>5 Derniers Objets perdues</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-book\"></i>
                                                            <p>5 Derniers evenements</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"clearfix\"></div>
                                                </div>
                                            </li>
                                            <li class=\"\" style=\"width: 1140px; float: left; display: block;\">
                                                <div class=\"w3l-info\">
                                                    <h3>Education is important to our life</h3>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-pencil\"></i>
                                                            <p>Education is not pail but lighting of fire.</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-graduation-cap\"></i>
                                                            <p>Education is the key to success in life</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-book\"></i>
                                                            <p>Education is not preparation,is life</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"clearfix\"></div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>

                                    <ul class=\"flex-direction-nav\">
                                        <li>
                                            <a class=\"flex-prev\" href=\"#\">Previous</a>
                                        </li>
                                        <li>
                                            <a class=\"flex-next\" href=\"#\">Next</a>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    ";
        
        $__internal_490f6be82382e9e559aa7dbc8167e58225392f7eb4c71d4eaf89b87dd97e9c88->leave($__internal_490f6be82382e9e559aa7dbc8167e58225392f7eb4c71d4eaf89b87dd97e9c88_prof);

        
        $__internal_b2d12cc42f462b2abebcf7173abdd8fb752c88cb9af2ba73c0de5621a589d09d->leave($__internal_b2d12cc42f462b2abebcf7173abdd8fb752c88cb9af2ba73c0de5621a589d09d_prof);

    }

    // line 256
    public function block_section2($context, array $blocks = array())
    {
        $__internal_c4d6a0fd96284e513516f2f18232e4ca8cfe7a8441726579f38f9138fedd5c8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4d6a0fd96284e513516f2f18232e4ca8cfe7a8441726579f38f9138fedd5c8b->enter($__internal_c4d6a0fd96284e513516f2f18232e4ca8cfe7a8441726579f38f9138fedd5c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        $__internal_41dbe76b010a75fa42968677337677d56939a25ef5114c485305540f066881f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41dbe76b010a75fa42968677337677d56939a25ef5114c485305540f066881f6->enter($__internal_41dbe76b010a75fa42968677337677d56939a25ef5114c485305540f066881f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 257
        echo "        <div class=\"about\" id=\"about\">
            <div class=\"container\">
                <div class=\"about-head text-center \">
                    <h3>About</h3>
                </div>
                <div class=\"about-top-grids\">
                    <div class=\"col-md-3 grid\">
                        <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                        <h3>Education-key to unlock door of freedom</h3>
                    </div>
                    <div class=\"col-md-3 grid\">
                        <i class=\"fa fa-book\" aria-hidden=\"true\"></i>
                        <h3>Education is the passport to the future</h3>
                    </div>
                    <div class=\"col-md-3 grid\">
                        <i class=\"fa fa-flask\" aria-hidden=\"true\"></i>
                        <h3>Education is the premise of the progress</h3>
                    </div>
                    <div class=\"col-md-3 grid\">
                        <i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i>
                        <h3>Education is the most powerful weapon</h3>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"about-bottom-grid1\">
                    <div class=\"col-md-6 bottomgridtext\">
                        <h3>Lorem ipsum dolor sit amet ?</h3>
                        <p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore </p>
                        <div class=\"readmore-w3\">
                            <a class=\"readmore\" href=\"#\" data-toggle=\"modal\" data-target=\"#myModal1\">Read More<i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-md-6 bottomgridimg\">
                        <img src=";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/about1.jpg"), "html", null, true);
        echo " alt=\"\">
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"about-bottom-grid2\">
                    <div class=\"col-md-6 bottomgridimg\">
                        <img src=";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/about2.jpg"), "html", null, true);
        echo " alt=\"\">
                    </div>
                    <div class=\"col-md-6 bottomgridtext bottomleft\">
                        <h3>Lorem ipsum dolor sit amet ?</h3>
                        <p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore </p>
                        <div class=\"readmore-w3\">
                            <a class=\"readmore\" href=\"#\" data-toggle=\"modal\" data-target=\"#myModal1\">Read More<i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>

    ";
        
        $__internal_41dbe76b010a75fa42968677337677d56939a25ef5114c485305540f066881f6->leave($__internal_41dbe76b010a75fa42968677337677d56939a25ef5114c485305540f066881f6_prof);

        
        $__internal_c4d6a0fd96284e513516f2f18232e4ca8cfe7a8441726579f38f9138fedd5c8b->leave($__internal_c4d6a0fd96284e513516f2f18232e4ca8cfe7a8441726579f38f9138fedd5c8b_prof);

    }

    // line 316
    public function block_section3($context, array $blocks = array())
    {
        $__internal_3dac7da04f61d665dc6cb2ec41879e25d5da9b6af02499542e1135ea47e2cfad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dac7da04f61d665dc6cb2ec41879e25d5da9b6af02499542e1135ea47e2cfad->enter($__internal_3dac7da04f61d665dc6cb2ec41879e25d5da9b6af02499542e1135ea47e2cfad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        $__internal_015599a7c8923d0403d65e964943f0ca59d730751b757f5b889dac2aa37f886b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_015599a7c8923d0403d65e964943f0ca59d730751b757f5b889dac2aa37f886b->enter($__internal_015599a7c8923d0403d65e964943f0ca59d730751b757f5b889dac2aa37f886b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 317
        echo "        <div class=\"services\" id=\"services\">
            <div class=\"banner-dott1\">
                <div class=\"container\">
                    <div class=\"about-head text-center \">
                        <h3>Services</h3>
                    </div>

                    <div class=\"service-top-grids\">
                        <div class=\"col-md-3\">
                            <div class=\"service1\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service2\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-book\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service3\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service4\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-flask\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"service-bottom-grids\">
                        <div class=\"col-md-3\">
                            <div class=\"service1\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-book\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service2\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service3\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-flask\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service4\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"col-md-6 servicebottomtext\">
                        <p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore
                            Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore
                            Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore</p>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    ";
        
        $__internal_015599a7c8923d0403d65e964943f0ca59d730751b757f5b889dac2aa37f886b->leave($__internal_015599a7c8923d0403d65e964943f0ca59d730751b757f5b889dac2aa37f886b_prof);

        
        $__internal_3dac7da04f61d665dc6cb2ec41879e25d5da9b6af02499542e1135ea47e2cfad->leave($__internal_3dac7da04f61d665dc6cb2ec41879e25d5da9b6af02499542e1135ea47e2cfad_prof);

    }

    // line 434
    public function block_section4($context, array $blocks = array())
    {
        $__internal_5d676197659552889aa20e5de9d98e0b785222a20ca2321bb7fe9526c1d3260b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d676197659552889aa20e5de9d98e0b785222a20ca2321bb7fe9526c1d3260b->enter($__internal_5d676197659552889aa20e5de9d98e0b785222a20ca2321bb7fe9526c1d3260b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section4"));

        $__internal_182c97ba3af77132897a6fb0800b95b92d122f30ac3cc92824c5d3be3d177a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_182c97ba3af77132897a6fb0800b95b92d122f30ac3cc92824c5d3be3d177a0a->enter($__internal_182c97ba3af77132897a6fb0800b95b92d122f30ac3cc92824c5d3be3d177a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section4"));

        // line 435
        echo "        <section class=\"team\" id=\"team\">
            <div class=\"container\">
                <div class=\"about-head text-center \">
                    <h3>Meet our Professors</h3>
                </div>

                <div class=\"team-grid-top\">
                    <div class=\"col-md-3 team1\">
                        <div class=\"inner-team1\">
                            <img src=";
        // line 444
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t1.jpg"), "html", null, true);
        echo " alt=\"\">
                            <h3>Selena</h3>
                            <h4>Head Master</h4>
                            <p>Lorem ipsum dolor sit amet, Phasselleous carnivel dolor</p>
                            <div class=\"team-social\">
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 team1\">
                        <div class=\"inner-team1\">
                            <img src=";
        // line 457
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t3.jpg"), "html", null, true);
        echo " alt=\"\">
                            <h3>Mary louis</h3>
                            <h4>Science Professor</h4>
                            <p>Lorem ipsum dolor sit amet, Phasselleous carnivel dolor</p>
                            <div class=\"team-social\">
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 team1\">
                        <div class=\"inner-team1\">
                            <img src=";
        // line 470
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t2.jpg"), "html", null, true);
        echo " alt=\"\">
                            <h3>Paul kerry</h3>
                            <h4>Staff</h4>
                            <p>Lorem ipsum dolor sit amet, Phasselleous carnivel dolor</p>
                            <div class=\"team-social\">
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 team1\">
                        <div class=\"inner-team1\">
                            <img src=";
        // line 483
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t4.jpg"), "html", null, true);
        echo " alt=\"\">
                            <h3>john watson</h3>
                            <h4>Lab Staff</h4>
                            <p>Lorem ipsum dolor sit amet, Phasselleous carnivel dolor</p>
                            <div class=\"team-social\">
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>

            </div>
        </section>
    ";
        
        $__internal_182c97ba3af77132897a6fb0800b95b92d122f30ac3cc92824c5d3be3d177a0a->leave($__internal_182c97ba3af77132897a6fb0800b95b92d122f30ac3cc92824c5d3be3d177a0a_prof);

        
        $__internal_5d676197659552889aa20e5de9d98e0b785222a20ca2321bb7fe9526c1d3260b->leave($__internal_5d676197659552889aa20e5de9d98e0b785222a20ca2321bb7fe9526c1d3260b_prof);

    }

    // line 507
    public function block_section5($context, array $blocks = array())
    {
        $__internal_34debc5a231ae2c151b8ce1ff15103b136e8ffd2c323b7b4d93c1c95fe822d62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34debc5a231ae2c151b8ce1ff15103b136e8ffd2c323b7b4d93c1c95fe822d62->enter($__internal_34debc5a231ae2c151b8ce1ff15103b136e8ffd2c323b7b4d93c1c95fe822d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section5"));

        $__internal_bffdbe0f62262aabd1df82416659a20f977bbe77d29a9a8109861d1b04e4d712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bffdbe0f62262aabd1df82416659a20f977bbe77d29a9a8109861d1b04e4d712->enter($__internal_bffdbe0f62262aabd1df82416659a20f977bbe77d29a9a8109861d1b04e4d712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section5"));

        // line 508
        echo "        <div class=\"gallery\" id=\"gallery\">
            <div class=\"container\">
                <div class=\"about-head text-center \">
                    <h3>Gallery</h3>
                </div>
                <div class=\"gallery-info\">
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p1.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 516
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p2.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 521
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p3.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 526
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p4.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 531
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p4.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p5.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 536
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p5.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p6.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 541
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p6.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p7.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 546
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p7.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p8.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 551
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p8.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p9.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 556
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p9.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p10.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 561
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p10.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p11.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 566
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p11.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p12.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 571
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p12.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <script src=\"js/lightbox-plus-jquery.min.js\"></script>
            </div>
        </div>
    ";
        
        $__internal_bffdbe0f62262aabd1df82416659a20f977bbe77d29a9a8109861d1b04e4d712->leave($__internal_bffdbe0f62262aabd1df82416659a20f977bbe77d29a9a8109861d1b04e4d712_prof);

        
        $__internal_34debc5a231ae2c151b8ce1ff15103b136e8ffd2c323b7b4d93c1c95fe822d62->leave($__internal_34debc5a231ae2c151b8ce1ff15103b136e8ffd2c323b7b4d93c1c95fe822d62_prof);

    }

    // line 584
    public function block_section6($context, array $blocks = array())
    {
        $__internal_805eae5f7cf26a2898fe1921518ee06c60fdc545dcbc7418c5e9d49f41cec7e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_805eae5f7cf26a2898fe1921518ee06c60fdc545dcbc7418c5e9d49f41cec7e7->enter($__internal_805eae5f7cf26a2898fe1921518ee06c60fdc545dcbc7418c5e9d49f41cec7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section6"));

        $__internal_45d810efa32480f9c27bdd797f67fe674d710af1f1ef88146714c460dba600ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45d810efa32480f9c27bdd797f67fe674d710af1f1ef88146714c460dba600ef->enter($__internal_45d810efa32480f9c27bdd797f67fe674d710af1f1ef88146714c460dba600ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section6"));

        // line 585
        echo "        <div class=\"count-agileits\" id=\"stats\">
            <div id=\"particles-js\"></div>
            <div class=\"about-head text-center \">
                <h3>stats</h3>
            </div>
            <div class=\"count-grids\">
                <div class=\"count-bgcolor-w3ls\">
                    <div class=\"col-md-3 count-grid\">
                        <div class=\"count hvr-bounce-to-bottom\">
                            <div class=\"numscroller numscroller-big-bottom roller-title-number-1 scrollzip isShown\" data-slno=\"1\" data-min=\"0\" data-max=\"1052\" data-delay=\".5\" data-increment=\"5\">1052</div>
                            <span></span>
                            <h5>Services available</h5>
                        </div>
                    </div>
                    <div class=\"col-md-3 count-grid\">
                        <div class=\"count hvr-bounce-to-bottom\">
                            <div class=\"numscroller numscroller-big-bottom roller-title-number-2 scrollzip isShown\" data-slno=\"2\" data-min=\"0\" data-max=\"2372\" data-delay=\".5\" data-increment=\"5\">2372</div>
                            <span></span>
                            <h5>Clients</h5>
                        </div>
                    </div>
                    <div class=\"col-md-3 count-grid\">
                        <div class=\"count hvr-bounce-to-bottom\">
                            <div class=\"numscroller numscroller-big-bottom roller-title-number-3 scrollzip isShown\" data-slno=\"3\" data-min=\"0\" data-max=\"3272\" data-delay=\".5\" data-increment=\"5\">3272</div>
                            <span></span>
                            <h5>our projects</h5>
                        </div>
                    </div>
                    <div class=\"col-md-3 count-grid\">
                        <div class=\"count hvr-bounce-to-bottom\">
                            <div class=\"numscroller numscroller-big-bottom roller-title-number-4 scrollzip isShown\" data-slno=\"4\" data-min=\"0\" data-max=\"1509\" data-delay=\".5\" data-increment=\"5\">1509</div>
                            <span></span>
                            <h5>Viewers</h5>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
            <div class=\"statsimg\">
                <div class=\"quote\">
                    <span></span>
                    <h3>Education doesn't give life instead knowledge gives</h3>
                    <span></span>
                </div>
            </div>
        </div>
    ";
        
        $__internal_45d810efa32480f9c27bdd797f67fe674d710af1f1ef88146714c460dba600ef->leave($__internal_45d810efa32480f9c27bdd797f67fe674d710af1f1ef88146714c460dba600ef_prof);

        
        $__internal_805eae5f7cf26a2898fe1921518ee06c60fdc545dcbc7418c5e9d49f41cec7e7->leave($__internal_805eae5f7cf26a2898fe1921518ee06c60fdc545dcbc7418c5e9d49f41cec7e7_prof);

    }

    // line 643
    public function block_footer($context, array $blocks = array())
    {
        $__internal_45289e9def07a3ae3e9009fe312f8ac2f083900ac60871ce322767ed912f746b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45289e9def07a3ae3e9009fe312f8ac2f083900ac60871ce322767ed912f746b->enter($__internal_45289e9def07a3ae3e9009fe312f8ac2f083900ac60871ce322767ed912f746b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_d8ecb0f0ea64b77d41d038f634dd61d8a3529238e88ff1263a89f5b1bff894f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ecb0f0ea64b77d41d038f634dd61d8a3529238e88ff1263a89f5b1bff894f2->enter($__internal_d8ecb0f0ea64b77d41d038f634dd61d8a3529238e88ff1263a89f5b1bff894f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 644
        echo "        <div class=\"copyright-agile\">
            <p>© 2018 All rights reserved | Design by <a href=\"#\">Davinci Coders</a></p>
        </div>
    ";
        
        $__internal_d8ecb0f0ea64b77d41d038f634dd61d8a3529238e88ff1263a89f5b1bff894f2->leave($__internal_d8ecb0f0ea64b77d41d038f634dd61d8a3529238e88ff1263a89f5b1bff894f2_prof);

        
        $__internal_45289e9def07a3ae3e9009fe312f8ac2f083900ac60871ce322767ed912f746b->leave($__internal_45289e9def07a3ae3e9009fe312f8ac2f083900ac60871ce322767ed912f746b_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1066 => 644,  1057 => 643,  1001 => 585,  992 => 584,  973 => 571,  965 => 566,  957 => 561,  949 => 556,  941 => 551,  933 => 546,  925 => 541,  917 => 536,  909 => 531,  901 => 526,  893 => 521,  885 => 516,  875 => 508,  866 => 507,  838 => 483,  822 => 470,  806 => 457,  790 => 444,  779 => 435,  770 => 434,  650 => 317,  641 => 316,  616 => 296,  607 => 290,  572 => 257,  563 => 256,  449 => 145,  440 => 144,  346 => 55,  338 => 49,  329 => 48,  309 => 32,  305 => 31,  301 => 30,  297 => 29,  293 => 28,  289 => 27,  285 => 26,  281 => 25,  277 => 24,  273 => 23,  269 => 22,  266 => 21,  257 => 20,  245 => 17,  241 => 16,  237 => 15,  233 => 14,  229 => 13,  224 => 12,  215 => 11,  197 => 9,  186 => 6,  177 => 5,  166 => 42,  164 => 20,  161 => 19,  159 => 11,  154 => 9,  151 => 8,  149 => 5,  146 => 4,  137 => 3,  123 => 648,  121 => 643,  108 => 632,  106 => 584,  100 => 580,  98 => 507,  90 => 501,  88 => 434,  80 => 428,  78 => 316,  71 => 311,  69 => 256,  61 => 250,  59 => 144,  52 => 139,  50 => 48,  44 => 44,  42 => 3,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
    {% block head %}

        {% block meta %}
            <meta charset=\"utf-8\" />
        {% endblock %}

        <title>{% block title %}Espace Etudiant {% endblock %} </title>

        {% block style %}
            <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/nav.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/lightbox.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/flexslider.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">
        {% endblock %}

        {% block script %}
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/uisearch.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/SmoothScroll.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/numscroller-1.0.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/nav.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/move-top.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/lightbox-plus-jquery.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/jquery-2.1.4.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/jquery.flexslider.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/easing.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/classie.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/bootstrap.js') }}\"></script>

    <script>
    </script>





    {% endblock %}

    {% endblock %}
</head>


<div class=\"section-header\">
    {% block header %}


        <div class=\"sub-agile\">
            <div class=\"agile1\">
                <!-- navigation section -->
                <div>
                    <p><button id=\"trigger-overlay\" type=\"button\"><img alt=\"menu\" class=\"img-responsive\" src=\"{{ asset('images/menu.png') }}\"></button></p>
                </div><!-- open/close -->
                <div class=\"overlay overlay-boxes\">
                    <svg height=\"101%\" preserveAspectRatio=\"none\" viewBox=\"0 0 1440 806\" width=\"100%\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"m0.005959,200.364029l207.551124,0l0,204.342453l-207.551124,0l0,-204.342453z\"></path>
                        <path d=\"m0.005959,400.45401l207.551124,0l0,204.342499l-207.551124,0l0,-204.342499z\"></path>
                        <path d=\"m0.005959,600.544067l207.551124,0l0,204.342468l-207.551124,0l0,-204.342468z\"></path>
                        <path d=\"m205.752151,-0.36l207.551163,0l0,204.342437l-207.551163,0l0,-204.342437z\"></path>
                        <path d=\"m204.744629,200.364029l207.551147,0l0,204.342453l-207.551147,0l0,-204.342453z\"></path>
                        <path d=\"m204.744629,400.45401l207.551147,0l0,204.342499l-207.551147,0l0,-204.342499z\"></path>
                        <path d=\"m204.744629,600.544067l207.551147,0l0,204.342468l-207.551147,0l0,-204.342468z\"></path>
                        <path d=\"m410.416046,-0.36l207.551117,0l0,204.342437l-207.551117,0l0,-204.342437z\"></path>
                        <path d=\"m410.416046,200.364029l207.551117,0l0,204.342453l-207.551117,0l0,-204.342453z\"></path>
                        <path d=\"m410.416046,400.45401l207.551117,0l0,204.342499l-207.551117,0l0,-204.342499z\"></path>
                        <path d=\"m410.416046,600.544067l207.551117,0l0,204.342468l-207.551117,0l0,-204.342468z\"></path>
                        <path d=\"m616.087402,-0.36l207.551086,0l0,204.342437l-207.551086,0l0,-204.342437z\"></path>
                        <path d=\"m616.087402,200.364029l207.551086,0l0,204.342453l-207.551086,0l0,-204.342453z\"></path>
                        <path d=\"m616.087402,400.45401l207.551086,0l0,204.342499l-207.551086,0l0,-204.342499z\"></path>
                        <path d=\"m616.087402,600.544067l207.551086,0l0,204.342468l-207.551086,0l0,-204.342468z\"></path>
                        <path d=\"m821.748718,-0.36l207.550964,0l0,204.342437l-207.550964,0l0,-204.342437z\"></path>
                        <path d=\"m821.748718,200.364029l207.550964,0l0,204.342453l-207.550964,0l0,-204.342453z\"></path>
                        <path d=\"m821.748718,400.45401l207.550964,0l0,204.342499l-207.550964,0l0,-204.342499z\"></path>
                        <path d=\"m821.748718,600.544067l207.550964,0l0,204.342468l-207.550964,0l0,-204.342468z\"></path>
                        <path d=\"m1027.203979,-0.36l207.550903,0l0,204.342437l-207.550903,0l0,-204.342437z\"></path>
                        <path d=\"m1027.203979,200.364029l207.550903,0l0,204.342453l-207.550903,0l0,-204.342453z\"></path>
                        <path d=\"m1027.203979,400.45401l207.550903,0l0,204.342499l-207.550903,0l0,-204.342499z\"></path>
                        <path d=\"m1027.203979,600.544067l207.550903,0l0,204.342468l-207.550903,0l0,-204.342468z\"></path>
                        <path d=\"m1232.659302,-0.36l207.551147,0l0,204.342437l-207.551147,0l0,-204.342437z\"></path>
                        <path d=\"m1232.659302,200.364029l207.551147,0l0,204.342453l-207.551147,0l0,-204.342453z\"></path>
                        <path d=\"m1232.659302,400.45401l207.551147,0l0,204.342499l-207.551147,0l0,-204.342499z\"></path>
                        <path d=\"m1232.659302,600.544067l207.551147,0l0,204.342468l-207.551147,0l0,-204.342468z\"></path>
                        <path d=\"m-0.791443,-0.360001l207.551163,0l0,204.342438l-207.551163,0l0,-204.342438z\"></path></svg> <button class=\"overlay-close\" type=\"button\">Close</button>
                    <nav>
                        <ul>
                            <li>
                                <a href=\"index.html\">Home</a>
                            </li>
                            <li>
                                <a class=\"scroll\" href=\"#about\">About</a>
                            </li>
                            <li>
                                <a class=\"scroll\" href=\"#services\">Services</a>
                            </li>
                            <li>
                                <a class=\"scroll\" href=\"#team\">Team</a>
                            </li>
                            <li>
                                <a class=\"scroll\" href=\"#gallery\">Gallery</a>
                            </li>
                            <li>
                                <a class=\"scroll\" href=\"#stats\">Stats</a>
                            </li>
                            <li>
                                <a class=\"scroll\" href=\"#contact\">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div><!-- /open/close -->
                <!-- /navigation section -->
            </div><a href=\"index.html\">
                <ul class=\"logo\">
                    <li><i aria-hidden=\"true\" class=\"glyphicon glyphicon-book\"></i></li>
                    <li>
                        <h1>Esprit Entr'Aide</h1>
                    </li>
                </ul></a>
            <div class=\"number\">
                <p><a class=\"scroll\" href=\"#contact\"><i aria-hidden=\"true\" class=\"fa fa-envelope\"></i></a></p>
                <p>+216 90 000 000</p>
            </div>
            <div class=\"clearfix\"></div>
            <div class=\"search-box\">
                <div class=\"sb-search\" id=\"sb-search\">
                    <form>
                        <input class=\"sb-search-input\" id=\"search\" name=\"search\" placeholder=\"Enter your search term...\" type=\"search\"> <input class=\"sb-search-submit\" type=\"submit\" value=\"\"> <span class=\"sb-icon-search\"></span>
                    </form>
                </div>
            </div>
            <div class=\"clearfix\"></div>
        </div>



    {% endblock %}
</div>

<body>

<div class=\"section1\">
    {% block section1 %}


        <div class=\"w3l-banner\">
            <div class=\"banner-dott\">
                <div class=\"header\">
                    <!-- //Header -->
                    <div class=\"container\">
                        <div class=\"flexslider-info\">
                            <section class=\"slider\">
                                <div class=\"flexslider\">
                                    <div class=\"flex-viewport\" style=\"overflow: hidden; position: relative;\">
                                        <ul class=\"slides\" style=\"width: 1000%; transition-duration: 0s; transform: translate3d(-1140px, 0px, 0px);\">
                                            <li class=\"clone\" style=\"width: 1140px; float: left; display: block;\">
                                                <div class=\"w3l-info\">
                                                    <h3>Because you care...</h3>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-book\"></i>
                                                            <p>SAVING THE PLANET By educating people</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-pencil\"></i>
                                                            <p>Education is to unlock the freedom</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-graduation-cap\"></i>
                                                            <p>The aim of education is not knowledge</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"clearfix\"></div>
                                                </div>
                                            </li>
                                            <li class=\"flex-active-slide\" style=\"width: 1140px; float: left; display: block;\">
                                                <div class=\"w3l-info\">
                                                    <h2>Because you care...</h2>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-graduation-cap\"></i>
                                                            <p>5 Derniers Collocation</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-pencil\"></i>
                                                            <p>5 Derniers Objets perdues</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-book\"></i>
                                                            <p>5 Derniers evenements</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"clearfix\"></div>
                                                </div>
                                            </li>
                                            <li class=\"\" style=\"width: 1140px; float: left; display: block;\">
                                                <div class=\"w3l-info\">
                                                    <h3>Education is important to our life</h3>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-pencil\"></i>
                                                            <p>Education is not pail but lighting of fire.</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-graduation-cap\"></i>
                                                            <p>Education is the key to success in life</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-book\"></i>
                                                            <p>Education is not preparation,is life</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"clearfix\"></div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>

                                    <ul class=\"flex-direction-nav\">
                                        <li>
                                            <a class=\"flex-prev\" href=\"#\">Previous</a>
                                        </li>
                                        <li>
                                            <a class=\"flex-next\" href=\"#\">Next</a>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    {% endblock %}
</div>




<div class=\"section2\">
    {% block section2 %}
        <div class=\"about\" id=\"about\">
            <div class=\"container\">
                <div class=\"about-head text-center \">
                    <h3>About</h3>
                </div>
                <div class=\"about-top-grids\">
                    <div class=\"col-md-3 grid\">
                        <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                        <h3>Education-key to unlock door of freedom</h3>
                    </div>
                    <div class=\"col-md-3 grid\">
                        <i class=\"fa fa-book\" aria-hidden=\"true\"></i>
                        <h3>Education is the passport to the future</h3>
                    </div>
                    <div class=\"col-md-3 grid\">
                        <i class=\"fa fa-flask\" aria-hidden=\"true\"></i>
                        <h3>Education is the premise of the progress</h3>
                    </div>
                    <div class=\"col-md-3 grid\">
                        <i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i>
                        <h3>Education is the most powerful weapon</h3>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"about-bottom-grid1\">
                    <div class=\"col-md-6 bottomgridtext\">
                        <h3>Lorem ipsum dolor sit amet ?</h3>
                        <p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore </p>
                        <div class=\"readmore-w3\">
                            <a class=\"readmore\" href=\"#\" data-toggle=\"modal\" data-target=\"#myModal1\">Read More<i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-md-6 bottomgridimg\">
                        <img src={{ asset(\"images/about1.jpg\") }} alt=\"\">
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"about-bottom-grid2\">
                    <div class=\"col-md-6 bottomgridimg\">
                        <img src={{ asset(\"images/about2.jpg\") }} alt=\"\">
                    </div>
                    <div class=\"col-md-6 bottomgridtext bottomleft\">
                        <h3>Lorem ipsum dolor sit amet ?</h3>
                        <p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore </p>
                        <div class=\"readmore-w3\">
                            <a class=\"readmore\" href=\"#\" data-toggle=\"modal\" data-target=\"#myModal1\">Read More<i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>

    {% endblock %}
</div>



<div class=\"section3\">
    {% block section3 %}
        <div class=\"services\" id=\"services\">
            <div class=\"banner-dott1\">
                <div class=\"container\">
                    <div class=\"about-head text-center \">
                        <h3>Services</h3>
                    </div>

                    <div class=\"service-top-grids\">
                        <div class=\"col-md-3\">
                            <div class=\"service1\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service2\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-book\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service3\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service4\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-flask\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"service-bottom-grids\">
                        <div class=\"col-md-3\">
                            <div class=\"service1\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-book\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service2\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service3\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-flask\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service4\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"col-md-6 servicebottomtext\">
                        <p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore
                            Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore
                            Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore</p>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    {% endblock %}
</div>




<div class=\"section4\">
    {% block section4 %}
        <section class=\"team\" id=\"team\">
            <div class=\"container\">
                <div class=\"about-head text-center \">
                    <h3>Meet our Professors</h3>
                </div>

                <div class=\"team-grid-top\">
                    <div class=\"col-md-3 team1\">
                        <div class=\"inner-team1\">
                            <img src={{ asset(\"images/t1.jpg\") }} alt=\"\">
                            <h3>Selena</h3>
                            <h4>Head Master</h4>
                            <p>Lorem ipsum dolor sit amet, Phasselleous carnivel dolor</p>
                            <div class=\"team-social\">
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 team1\">
                        <div class=\"inner-team1\">
                            <img src={{ asset(\"images/t3.jpg\") }} alt=\"\">
                            <h3>Mary louis</h3>
                            <h4>Science Professor</h4>
                            <p>Lorem ipsum dolor sit amet, Phasselleous carnivel dolor</p>
                            <div class=\"team-social\">
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 team1\">
                        <div class=\"inner-team1\">
                            <img src={{ asset(\"images/t2.jpg\") }} alt=\"\">
                            <h3>Paul kerry</h3>
                            <h4>Staff</h4>
                            <p>Lorem ipsum dolor sit amet, Phasselleous carnivel dolor</p>
                            <div class=\"team-social\">
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 team1\">
                        <div class=\"inner-team1\">
                            <img src={{ asset(\"images/t4.jpg\") }} alt=\"\">
                            <h3>john watson</h3>
                            <h4>Lab Staff</h4>
                            <p>Lorem ipsum dolor sit amet, Phasselleous carnivel dolor</p>
                            <div class=\"team-social\">
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>

            </div>
        </section>
    {% endblock %}
</div>




<div class=\"section5\">
    {% block section5 %}
        <div class=\"gallery\" id=\"gallery\">
            <div class=\"container\">
                <div class=\"about-head text-center \">
                    <h3>Gallery</h3>
                </div>
                <div class=\"gallery-info\">
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p1.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"{{ asset(\"images/p1.jpg\") }}\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p2.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"{{ asset(\"images/p2.jpg\") }}\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p3.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"{{ asset(\"images/p3.jpg\") }}\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p4.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"{{ asset(\"images/p4.jpg\") }}\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p5.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"{{ asset(\"images/p5.jpg\") }}\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p6.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"{{ asset(\"images/p6.jpg\") }}\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p7.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"{{ asset(\"images/p7.jpg\") }}\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p8.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"{{ asset(\"images/p8.jpg\") }}\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p9.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"{{ asset(\"images/p9.jpg\") }}\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p10.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"{{ asset(\"images/p10.jpg\") }}\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p11.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"{{ asset(\"images/p11.jpg\") }}\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p12.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"{{ asset(\"images/p12.jpg\") }}\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <script src=\"js/lightbox-plus-jquery.min.js\"></script>
            </div>
        </div>
    {% endblock %}
</div>


<div class=\"section6\">
    {% block section6 %}
        <div class=\"count-agileits\" id=\"stats\">
            <div id=\"particles-js\"></div>
            <div class=\"about-head text-center \">
                <h3>stats</h3>
            </div>
            <div class=\"count-grids\">
                <div class=\"count-bgcolor-w3ls\">
                    <div class=\"col-md-3 count-grid\">
                        <div class=\"count hvr-bounce-to-bottom\">
                            <div class=\"numscroller numscroller-big-bottom roller-title-number-1 scrollzip isShown\" data-slno=\"1\" data-min=\"0\" data-max=\"1052\" data-delay=\".5\" data-increment=\"5\">1052</div>
                            <span></span>
                            <h5>Services available</h5>
                        </div>
                    </div>
                    <div class=\"col-md-3 count-grid\">
                        <div class=\"count hvr-bounce-to-bottom\">
                            <div class=\"numscroller numscroller-big-bottom roller-title-number-2 scrollzip isShown\" data-slno=\"2\" data-min=\"0\" data-max=\"2372\" data-delay=\".5\" data-increment=\"5\">2372</div>
                            <span></span>
                            <h5>Clients</h5>
                        </div>
                    </div>
                    <div class=\"col-md-3 count-grid\">
                        <div class=\"count hvr-bounce-to-bottom\">
                            <div class=\"numscroller numscroller-big-bottom roller-title-number-3 scrollzip isShown\" data-slno=\"3\" data-min=\"0\" data-max=\"3272\" data-delay=\".5\" data-increment=\"5\">3272</div>
                            <span></span>
                            <h5>our projects</h5>
                        </div>
                    </div>
                    <div class=\"col-md-3 count-grid\">
                        <div class=\"count hvr-bounce-to-bottom\">
                            <div class=\"numscroller numscroller-big-bottom roller-title-number-4 scrollzip isShown\" data-slno=\"4\" data-min=\"0\" data-max=\"1509\" data-delay=\".5\" data-increment=\"5\">1509</div>
                            <span></span>
                            <h5>Viewers</h5>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
            <div class=\"statsimg\">
                <div class=\"quote\">
                    <span></span>
                    <h3>Education doesn't give life instead knowledge gives</h3>
                    <span></span>
                </div>
            </div>
        </div>
    {% endblock %}
</div>






</body>


<div class=\"section-footer\">
    {% block footer %}
        <div class=\"copyright-agile\">
            <p>© 2018 All rights reserved | Design by <a href=\"#\">Davinci Coders</a></p>
        </div>
    {% endblock %}
</div>

</html>

", "default/index.html.twig", "C:\\wamp64\\www\\pidev0\\app\\Resources\\views\\default\\index.html.twig");
    }
}
