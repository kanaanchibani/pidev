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
            'section5' => array($this, 'block_section5'),
            'section6' => array($this, 'block_section6'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59db06c0b2ed74f41ef57daee1d37b935e2afab582510f1f75964e7dd39a8004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59db06c0b2ed74f41ef57daee1d37b935e2afab582510f1f75964e7dd39a8004->enter($__internal_59db06c0b2ed74f41ef57daee1d37b935e2afab582510f1f75964e7dd39a8004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_3ddc9cc03de84995c4c32e70f3e2783bd44aae7637b38f294a3945bf8b36571a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ddc9cc03de84995c4c32e70f3e2783bd44aae7637b38f294a3945bf8b36571a->enter($__internal_3ddc9cc03de84995c4c32e70f3e2783bd44aae7637b38f294a3945bf8b36571a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        // line 1
        echo "<html>
<head>
    ";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 45
        echo "</head>


<div class=\"section-header\">
    ";
        // line 49
        $this->displayBlock('header', $context, $blocks);
        // line 140
        echo "</div>

<body>

<div class=\"section1\">
    ";
        // line 145
        $this->displayBlock('section1', $context, $blocks);
        // line 251
        echo "</div>




<div class=\"section2\">
    ";
        // line 257
        $this->displayBlock('section2', $context, $blocks);
        // line 312
        echo "</div>



<div class=\"section3\">
    ";
        // line 317
        $this->displayBlock('section3', $context, $blocks);
        // line 425
        echo "</div>







<div class=\"section5\">
    ";
        // line 434
        $this->displayBlock('section5', $context, $blocks);
        // line 507
        echo "</div>


<div class=\"section6\">
    ";
        // line 511
        $this->displayBlock('section6', $context, $blocks);
        // line 559
        echo "</div>






</body>


<div class=\"section-footer\">
    ";
        // line 570
        $this->displayBlock('footer', $context, $blocks);
        // line 575
        echo "</div>

</html>

";
        
        $__internal_59db06c0b2ed74f41ef57daee1d37b935e2afab582510f1f75964e7dd39a8004->leave($__internal_59db06c0b2ed74f41ef57daee1d37b935e2afab582510f1f75964e7dd39a8004_prof);

        
        $__internal_3ddc9cc03de84995c4c32e70f3e2783bd44aae7637b38f294a3945bf8b36571a->leave($__internal_3ddc9cc03de84995c4c32e70f3e2783bd44aae7637b38f294a3945bf8b36571a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1110c089e547a079bb5cbbf998b63390d3c8ac1540943e5da1d6ccf449159022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1110c089e547a079bb5cbbf998b63390d3c8ac1540943e5da1d6ccf449159022->enter($__internal_1110c089e547a079bb5cbbf998b63390d3c8ac1540943e5da1d6ccf449159022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_43507d8ed066d09e2b7cedb9dac64dae939f413f7e78c7e232d98d61e2281db1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43507d8ed066d09e2b7cedb9dac64dae939f413f7e78c7e232d98d61e2281db1->enter($__internal_43507d8ed066d09e2b7cedb9dac64dae939f413f7e78c7e232d98d61e2281db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        // line 43
        echo "
    ";
        
        $__internal_43507d8ed066d09e2b7cedb9dac64dae939f413f7e78c7e232d98d61e2281db1->leave($__internal_43507d8ed066d09e2b7cedb9dac64dae939f413f7e78c7e232d98d61e2281db1_prof);

        
        $__internal_1110c089e547a079bb5cbbf998b63390d3c8ac1540943e5da1d6ccf449159022->leave($__internal_1110c089e547a079bb5cbbf998b63390d3c8ac1540943e5da1d6ccf449159022_prof);

    }

    // line 5
    public function block_meta($context, array $blocks = array())
    {
        $__internal_61366a81e34db84e0b9e4a7f8f042333f6c03fcbe4f9cda865c7df1196e4388b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61366a81e34db84e0b9e4a7f8f042333f6c03fcbe4f9cda865c7df1196e4388b->enter($__internal_61366a81e34db84e0b9e4a7f8f042333f6c03fcbe4f9cda865c7df1196e4388b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        $__internal_67c3fe246c647df2e17b29b95e65f848c5706bae594c2689403d3f47af318414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c3fe246c647df2e17b29b95e65f848c5706bae594c2689403d3f47af318414->enter($__internal_67c3fe246c647df2e17b29b95e65f848c5706bae594c2689403d3f47af318414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 6
        echo "    <meta charset=\"utf-8\" />
    ";
        
        $__internal_67c3fe246c647df2e17b29b95e65f848c5706bae594c2689403d3f47af318414->leave($__internal_67c3fe246c647df2e17b29b95e65f848c5706bae594c2689403d3f47af318414_prof);

        
        $__internal_61366a81e34db84e0b9e4a7f8f042333f6c03fcbe4f9cda865c7df1196e4388b->leave($__internal_61366a81e34db84e0b9e4a7f8f042333f6c03fcbe4f9cda865c7df1196e4388b_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_2323b899ecb2d4007c7b32e8b3f8e027749ac21cbc5afc1e54397eebf145cabd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2323b899ecb2d4007c7b32e8b3f8e027749ac21cbc5afc1e54397eebf145cabd->enter($__internal_2323b899ecb2d4007c7b32e8b3f8e027749ac21cbc5afc1e54397eebf145cabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_947c8c30c7c93655933c20567cc8ef743aac747c113f6fe882663c97023119bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_947c8c30c7c93655933c20567cc8ef743aac747c113f6fe882663c97023119bb->enter($__internal_947c8c30c7c93655933c20567cc8ef743aac747c113f6fe882663c97023119bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Espace Etudiant ";
        
        $__internal_947c8c30c7c93655933c20567cc8ef743aac747c113f6fe882663c97023119bb->leave($__internal_947c8c30c7c93655933c20567cc8ef743aac747c113f6fe882663c97023119bb_prof);

        
        $__internal_2323b899ecb2d4007c7b32e8b3f8e027749ac21cbc5afc1e54397eebf145cabd->leave($__internal_2323b899ecb2d4007c7b32e8b3f8e027749ac21cbc5afc1e54397eebf145cabd_prof);

    }

    // line 11
    public function block_style($context, array $blocks = array())
    {
        $__internal_13c7d9687c9cf2d37c26d728fb1012ed8ca0ce3551f54ff7510df2152487f79f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13c7d9687c9cf2d37c26d728fb1012ed8ca0ce3551f54ff7510df2152487f79f->enter($__internal_13c7d9687c9cf2d37c26d728fb1012ed8ca0ce3551f54ff7510df2152487f79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_ed2c1801781fb03af04b9ad56fb7ccd324b3e939e5132887afbe27f50e377118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed2c1801781fb03af04b9ad56fb7ccd324b3e939e5132887afbe27f50e377118->enter($__internal_ed2c1801781fb03af04b9ad56fb7ccd324b3e939e5132887afbe27f50e377118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 12
        echo "    <link rel=\"stylesheet\" href=\"";
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
        
        $__internal_ed2c1801781fb03af04b9ad56fb7ccd324b3e939e5132887afbe27f50e377118->leave($__internal_ed2c1801781fb03af04b9ad56fb7ccd324b3e939e5132887afbe27f50e377118_prof);

        
        $__internal_13c7d9687c9cf2d37c26d728fb1012ed8ca0ce3551f54ff7510df2152487f79f->leave($__internal_13c7d9687c9cf2d37c26d728fb1012ed8ca0ce3551f54ff7510df2152487f79f_prof);

    }

    // line 20
    public function block_script($context, array $blocks = array())
    {
        $__internal_4fe32bd34299c3271a0196db186ce548e8c254a588cea8cd9c3c7b601e7156e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fe32bd34299c3271a0196db186ce548e8c254a588cea8cd9c3c7b601e7156e1->enter($__internal_4fe32bd34299c3271a0196db186ce548e8c254a588cea8cd9c3c7b601e7156e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_716f4fe598e3845164ba6cd546d9f43978162bc019919d36954c14132d66e04c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_716f4fe598e3845164ba6cd546d9f43978162bc019919d36954c14132d66e04c->enter($__internal_716f4fe598e3845164ba6cd546d9f43978162bc019919d36954c14132d66e04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

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
        
        $__internal_716f4fe598e3845164ba6cd546d9f43978162bc019919d36954c14132d66e04c->leave($__internal_716f4fe598e3845164ba6cd546d9f43978162bc019919d36954c14132d66e04c_prof);

        
        $__internal_4fe32bd34299c3271a0196db186ce548e8c254a588cea8cd9c3c7b601e7156e1->leave($__internal_4fe32bd34299c3271a0196db186ce548e8c254a588cea8cd9c3c7b601e7156e1_prof);

    }

    // line 49
    public function block_header($context, array $blocks = array())
    {
        $__internal_d1795f9c0628989e5f56b1ff7a0f0015e2e30f1527aa10aea5eabf04c64cc07b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1795f9c0628989e5f56b1ff7a0f0015e2e30f1527aa10aea5eabf04c64cc07b->enter($__internal_d1795f9c0628989e5f56b1ff7a0f0015e2e30f1527aa10aea5eabf04c64cc07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_278317e9793d21df4df9a7b012572f382722fac300862f6dfc0cb929aa45ac40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_278317e9793d21df4df9a7b012572f382722fac300862f6dfc0cb929aa45ac40->enter($__internal_278317e9793d21df4df9a7b012572f382722fac300862f6dfc0cb929aa45ac40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 50
        echo "

        <div class=\"sub-agile\">
            <div class=\"agile1\">
                <!-- navigation section -->
                <div>
                    <p><button id=\"trigger-overlay\" type=\"button\"><img alt=\"menu\" class=\"img-responsive\" src=\"";
        // line 56
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
        
        $__internal_278317e9793d21df4df9a7b012572f382722fac300862f6dfc0cb929aa45ac40->leave($__internal_278317e9793d21df4df9a7b012572f382722fac300862f6dfc0cb929aa45ac40_prof);

        
        $__internal_d1795f9c0628989e5f56b1ff7a0f0015e2e30f1527aa10aea5eabf04c64cc07b->leave($__internal_d1795f9c0628989e5f56b1ff7a0f0015e2e30f1527aa10aea5eabf04c64cc07b_prof);

    }

    // line 145
    public function block_section1($context, array $blocks = array())
    {
        $__internal_cb59a8417fa4e3243510fb0eb04a9c9e621115d2fb4846332ca861f6727ad7ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb59a8417fa4e3243510fb0eb04a9c9e621115d2fb4846332ca861f6727ad7ac->enter($__internal_cb59a8417fa4e3243510fb0eb04a9c9e621115d2fb4846332ca861f6727ad7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section1"));

        $__internal_f2dde2e01fdb47cac0e37af7a748eb4cfd0e55585a4ac2adbbbe59747e3a2c25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2dde2e01fdb47cac0e37af7a748eb4cfd0e55585a4ac2adbbbe59747e3a2c25->enter($__internal_f2dde2e01fdb47cac0e37af7a748eb4cfd0e55585a4ac2adbbbe59747e3a2c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section1"));

        // line 146
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
        
        $__internal_f2dde2e01fdb47cac0e37af7a748eb4cfd0e55585a4ac2adbbbe59747e3a2c25->leave($__internal_f2dde2e01fdb47cac0e37af7a748eb4cfd0e55585a4ac2adbbbe59747e3a2c25_prof);

        
        $__internal_cb59a8417fa4e3243510fb0eb04a9c9e621115d2fb4846332ca861f6727ad7ac->leave($__internal_cb59a8417fa4e3243510fb0eb04a9c9e621115d2fb4846332ca861f6727ad7ac_prof);

    }

    // line 257
    public function block_section2($context, array $blocks = array())
    {
        $__internal_9c9f3b9ca01767ee1f0b5137507c09bade97701bf46aaf7f51a7b5986fee6720 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c9f3b9ca01767ee1f0b5137507c09bade97701bf46aaf7f51a7b5986fee6720->enter($__internal_9c9f3b9ca01767ee1f0b5137507c09bade97701bf46aaf7f51a7b5986fee6720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        $__internal_92efd93686c778fabd278f9a0e67aa8f6f2b480aee7ea6e57af29552cabf1b87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92efd93686c778fabd278f9a0e67aa8f6f2b480aee7ea6e57af29552cabf1b87->enter($__internal_92efd93686c778fabd278f9a0e67aa8f6f2b480aee7ea6e57af29552cabf1b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 258
        echo "        <div class=\"about\" id=\"about\">
            <div class=\"container\">
                <div class=\"about-head text-center \">
                    <h3>Les plus d'Esprit Entr'aide</h3>
                </div>
                <div class=\"about-top-grids\">
                    <div class=\"col-md-3 grid\">
                        <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
                        <h3>Réunir les étudiants d'Esprit dans une seule plateforme</h3>
                    </div>
                    <div class=\"col-md-3 grid\">
                        <i class=\"fa fa-slideshare \" aria-hidden=\"true\"></i>
                        <h3>Une plateforme de partage et d'entraide destinée aux étudiants</h3>
                    </div>
                    <div class=\"col-md-3 grid\">
                        <i class=\"fa fa-exchange\" aria-hidden=\"true\"></i>
                        <h3>Faciliter l'interaction entre l'étudiant et son environnement</h3>
                    </div>
                    <div class=\"col-md-3 grid\">
                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                        <h3>Un coin spotted</h3>
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
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/about1.jpg"), "html", null, true);
        echo " alt=\"\">
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"about-bottom-grid2\">
                    <div class=\"col-md-6 bottomgridimg\">
                        <img src=";
        // line 297
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
        
        $__internal_92efd93686c778fabd278f9a0e67aa8f6f2b480aee7ea6e57af29552cabf1b87->leave($__internal_92efd93686c778fabd278f9a0e67aa8f6f2b480aee7ea6e57af29552cabf1b87_prof);

        
        $__internal_9c9f3b9ca01767ee1f0b5137507c09bade97701bf46aaf7f51a7b5986fee6720->leave($__internal_9c9f3b9ca01767ee1f0b5137507c09bade97701bf46aaf7f51a7b5986fee6720_prof);

    }

    // line 317
    public function block_section3($context, array $blocks = array())
    {
        $__internal_23c36362709fbe2a0baa100594e37ee8af28c1eb57ee2393f501222c1e691c1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23c36362709fbe2a0baa100594e37ee8af28c1eb57ee2393f501222c1e691c1e->enter($__internal_23c36362709fbe2a0baa100594e37ee8af28c1eb57ee2393f501222c1e691c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        $__internal_ec72ea2793a02f1cde5d47f2bfbbdb0ac822bfe1b0362bc014ee8cc5922186f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec72ea2793a02f1cde5d47f2bfbbdb0ac822bfe1b0362bc014ee8cc5922186f3->enter($__internal_ec72ea2793a02f1cde5d47f2bfbbdb0ac822bfe1b0362bc014ee8cc5922186f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 318
        echo "        <div class=\"services\" id=\"services\">
            <div class=\"banner-dott1\">
                <div class=\"container\">
                    <div class=\"about-head text-center \">
                        <h3>Les annonces</h3>
                    </div>

                    <div class=\"service-top-grids\">
                        <div class=\"col-md-3\">
                            <div class=\"service1\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-building\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Collocations</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service2\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Objets perdus</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service3\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-car\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Covoiturage</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service4\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-briefcase\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Offres de stage</h4>
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
                                    <i class=\"fa fa-comments\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Forum</h4>
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

                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    ";
        
        $__internal_ec72ea2793a02f1cde5d47f2bfbbdb0ac822bfe1b0362bc014ee8cc5922186f3->leave($__internal_ec72ea2793a02f1cde5d47f2bfbbdb0ac822bfe1b0362bc014ee8cc5922186f3_prof);

        
        $__internal_23c36362709fbe2a0baa100594e37ee8af28c1eb57ee2393f501222c1e691c1e->leave($__internal_23c36362709fbe2a0baa100594e37ee8af28c1eb57ee2393f501222c1e691c1e_prof);

    }

    // line 434
    public function block_section5($context, array $blocks = array())
    {
        $__internal_922deffc88380def98a7792bdc2cb8f036658189cf9231893fc8a63db26e2813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_922deffc88380def98a7792bdc2cb8f036658189cf9231893fc8a63db26e2813->enter($__internal_922deffc88380def98a7792bdc2cb8f036658189cf9231893fc8a63db26e2813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section5"));

        $__internal_f1d7c9af50d3a03b2e428e085f0154d0b172e58ed7e117b36b3d66dec087ec11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1d7c9af50d3a03b2e428e085f0154d0b172e58ed7e117b36b3d66dec087ec11->enter($__internal_f1d7c9af50d3a03b2e428e085f0154d0b172e58ed7e117b36b3d66dec087ec11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section5"));

        // line 435
        echo "        <div class=\"gallery\" id=\"gallery\">
            <div class=\"container\">
                <div class=\"about-head text-center \">
                    <h3>La galerie des évènements</h3>
                </div>
                <div class=\"gallery-info\">
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p1.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 443
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p2.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p3.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p4.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 458
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p4.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p5.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p5.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p6.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 468
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p6.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p7.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p7.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p8.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 478
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p8.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p9.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p9.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p10.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p10.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p11.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p11.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p12.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 498
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
        
        $__internal_f1d7c9af50d3a03b2e428e085f0154d0b172e58ed7e117b36b3d66dec087ec11->leave($__internal_f1d7c9af50d3a03b2e428e085f0154d0b172e58ed7e117b36b3d66dec087ec11_prof);

        
        $__internal_922deffc88380def98a7792bdc2cb8f036658189cf9231893fc8a63db26e2813->leave($__internal_922deffc88380def98a7792bdc2cb8f036658189cf9231893fc8a63db26e2813_prof);

    }

    // line 511
    public function block_section6($context, array $blocks = array())
    {
        $__internal_77de6e185251f50a6e58c1140cb1681df738aca29ec981d7bfff1759e4fe1d25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77de6e185251f50a6e58c1140cb1681df738aca29ec981d7bfff1759e4fe1d25->enter($__internal_77de6e185251f50a6e58c1140cb1681df738aca29ec981d7bfff1759e4fe1d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section6"));

        $__internal_f5b34deca6db916553c3e6d54c74496b0688ceac12a958fd241b51a3bd566951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5b34deca6db916553c3e6d54c74496b0688ceac12a958fd241b51a3bd566951->enter($__internal_f5b34deca6db916553c3e6d54c74496b0688ceac12a958fd241b51a3bd566951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section6"));

        // line 512
        echo "        <div class=\"count-agileits\" id=\"stats\">
            <div id=\"particles-js\"></div>
            <div class=\"about-head text-center \">
                <h3>Nos statistiques</h3>
            </div>
            <div class=\"count-grids\">
                <div class=\"count-bgcolor-w3ls\">
                    <div class=\"col-md-3 count-grid\">
                        <div class=\"count hvr-bounce-to-bottom\">
                            <div class=\"numscroller numscroller-big-bottom roller-title-number-1 scrollzip isShown\" data-slno=\"1\" data-min=\"0\" data-max=\"1052\" data-delay=\".5\" data-increment=\"5\">52</div>
                            <span></span>
                            <h5>Objets perdus</h5>
                        </div>
                    </div>
                    <div class=\"col-md-3 count-grid\">
                        <div class=\"count hvr-bounce-to-bottom\">
                            <div class=\"numscroller numscroller-big-bottom roller-title-number-2 scrollzip isShown\" data-slno=\"2\" data-min=\"0\" data-max=\"2372\" data-delay=\".5\" data-increment=\"5\">28</div>
                            <span></span>
                            <h5>Offres de stages</h5>
                        </div>
                    </div>
                    <div class=\"col-md-3 count-grid\">
                        <div class=\"count hvr-bounce-to-bottom\">
                            <div class=\"numscroller numscroller-big-bottom roller-title-number-3 scrollzip isShown\" data-slno=\"3\" data-min=\"0\" data-max=\"3272\" data-delay=\".5\" data-increment=\"5\">7</div>
                            <span></span>
                            <h5>Evènements à venir cette semaine</h5>
                        </div>
                    </div>
                    <div class=\"col-md-3 count-grid\">
                        <div class=\"count hvr-bounce-to-bottom\">
                            <div class=\"numscroller numscroller-big-bottom roller-title-number-4 scrollzip isShown\" data-slno=\"4\" data-min=\"0\" data-max=\"1509\" data-delay=\".5\" data-increment=\"5\">15</div>
                            <span></span>
                            <h5>Offres de covoiturage</h5>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
            <div class=\"statsimg\">
                <div class=\"quote\">
                    <span></span>
                    <h3>Réussir ensemble, le signe du succès</h3>
                    <span></span>
                </div>
            </div>
        </div>
    ";
        
        $__internal_f5b34deca6db916553c3e6d54c74496b0688ceac12a958fd241b51a3bd566951->leave($__internal_f5b34deca6db916553c3e6d54c74496b0688ceac12a958fd241b51a3bd566951_prof);

        
        $__internal_77de6e185251f50a6e58c1140cb1681df738aca29ec981d7bfff1759e4fe1d25->leave($__internal_77de6e185251f50a6e58c1140cb1681df738aca29ec981d7bfff1759e4fe1d25_prof);

    }

    // line 570
    public function block_footer($context, array $blocks = array())
    {
        $__internal_58ceb588b6e8ff5df01d57cfd80c4aa92cdebbe2cbdd7bb7a27d6b10e001bcb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58ceb588b6e8ff5df01d57cfd80c4aa92cdebbe2cbdd7bb7a27d6b10e001bcb6->enter($__internal_58ceb588b6e8ff5df01d57cfd80c4aa92cdebbe2cbdd7bb7a27d6b10e001bcb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_dd3e7e3d1992d732a743181538450d46beb28446c3dca219e1b09e39106e8dc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd3e7e3d1992d732a743181538450d46beb28446c3dca219e1b09e39106e8dc0->enter($__internal_dd3e7e3d1992d732a743181538450d46beb28446c3dca219e1b09e39106e8dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 571
        echo "        <div class=\"copyright-agile\">
            <p>© 2018 All rights reserved | Design by <a href=\"#\">Davinci Coders</a></p>
        </div>
    ";
        
        $__internal_dd3e7e3d1992d732a743181538450d46beb28446c3dca219e1b09e39106e8dc0->leave($__internal_dd3e7e3d1992d732a743181538450d46beb28446c3dca219e1b09e39106e8dc0_prof);

        
        $__internal_58ceb588b6e8ff5df01d57cfd80c4aa92cdebbe2cbdd7bb7a27d6b10e001bcb6->leave($__internal_58ceb588b6e8ff5df01d57cfd80c4aa92cdebbe2cbdd7bb7a27d6b10e001bcb6_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  959 => 571,  950 => 570,  894 => 512,  885 => 511,  866 => 498,  858 => 493,  850 => 488,  842 => 483,  834 => 478,  826 => 473,  818 => 468,  810 => 463,  802 => 458,  794 => 453,  786 => 448,  778 => 443,  768 => 435,  759 => 434,  643 => 318,  634 => 317,  609 => 297,  600 => 291,  565 => 258,  556 => 257,  442 => 146,  433 => 145,  339 => 56,  331 => 50,  322 => 49,  301 => 32,  297 => 31,  293 => 30,  289 => 29,  285 => 28,  281 => 27,  277 => 26,  273 => 25,  269 => 24,  265 => 23,  261 => 22,  258 => 21,  249 => 20,  237 => 17,  233 => 16,  229 => 15,  225 => 14,  221 => 13,  216 => 12,  207 => 11,  189 => 9,  178 => 6,  169 => 5,  158 => 43,  156 => 20,  153 => 19,  151 => 11,  146 => 9,  143 => 8,  141 => 5,  138 => 4,  129 => 3,  115 => 575,  113 => 570,  100 => 559,  98 => 511,  92 => 507,  90 => 434,  79 => 425,  77 => 317,  70 => 312,  68 => 257,  60 => 251,  58 => 145,  51 => 140,  49 => 49,  43 => 45,  41 => 3,  37 => 1,);
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
                    <h3>Les plus d'Esprit Entr'aide</h3>
                </div>
                <div class=\"about-top-grids\">
                    <div class=\"col-md-3 grid\">
                        <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
                        <h3>Réunir les étudiants d'Esprit dans une seule plateforme</h3>
                    </div>
                    <div class=\"col-md-3 grid\">
                        <i class=\"fa fa-slideshare \" aria-hidden=\"true\"></i>
                        <h3>Une plateforme de partage et d'entraide destinée aux étudiants</h3>
                    </div>
                    <div class=\"col-md-3 grid\">
                        <i class=\"fa fa-exchange\" aria-hidden=\"true\"></i>
                        <h3>Faciliter l'interaction entre l'étudiant et son environnement</h3>
                    </div>
                    <div class=\"col-md-3 grid\">
                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                        <h3>Un coin spotted</h3>
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
                        <h3>Les annonces</h3>
                    </div>

                    <div class=\"service-top-grids\">
                        <div class=\"col-md-3\">
                            <div class=\"service1\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-building\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Collocations</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service2\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Objets perdus</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service3\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-car\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Covoiturage</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service4\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-briefcase\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Offres de stage</h4>
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
                                    <i class=\"fa fa-comments\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Forum</h4>
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

                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    {% endblock %}
</div>







<div class=\"section5\">
    {% block section5 %}
        <div class=\"gallery\" id=\"gallery\">
            <div class=\"container\">
                <div class=\"about-head text-center \">
                    <h3>La galerie des évènements</h3>
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
                <h3>Nos statistiques</h3>
            </div>
            <div class=\"count-grids\">
                <div class=\"count-bgcolor-w3ls\">
                    <div class=\"col-md-3 count-grid\">
                        <div class=\"count hvr-bounce-to-bottom\">
                            <div class=\"numscroller numscroller-big-bottom roller-title-number-1 scrollzip isShown\" data-slno=\"1\" data-min=\"0\" data-max=\"1052\" data-delay=\".5\" data-increment=\"5\">52</div>
                            <span></span>
                            <h5>Objets perdus</h5>
                        </div>
                    </div>
                    <div class=\"col-md-3 count-grid\">
                        <div class=\"count hvr-bounce-to-bottom\">
                            <div class=\"numscroller numscroller-big-bottom roller-title-number-2 scrollzip isShown\" data-slno=\"2\" data-min=\"0\" data-max=\"2372\" data-delay=\".5\" data-increment=\"5\">28</div>
                            <span></span>
                            <h5>Offres de stages</h5>
                        </div>
                    </div>
                    <div class=\"col-md-3 count-grid\">
                        <div class=\"count hvr-bounce-to-bottom\">
                            <div class=\"numscroller numscroller-big-bottom roller-title-number-3 scrollzip isShown\" data-slno=\"3\" data-min=\"0\" data-max=\"3272\" data-delay=\".5\" data-increment=\"5\">7</div>
                            <span></span>
                            <h5>Evènements à venir cette semaine</h5>
                        </div>
                    </div>
                    <div class=\"col-md-3 count-grid\">
                        <div class=\"count hvr-bounce-to-bottom\">
                            <div class=\"numscroller numscroller-big-bottom roller-title-number-4 scrollzip isShown\" data-slno=\"4\" data-min=\"0\" data-max=\"1509\" data-delay=\".5\" data-increment=\"5\">15</div>
                            <span></span>
                            <h5>Offres de covoiturage</h5>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
            <div class=\"statsimg\">
                <div class=\"quote\">
                    <span></span>
                    <h3>Réussir ensemble, le signe du succès</h3>
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

", "default/index.html.twig", "C:\\wamp64\\www\\pidev\\app\\Resources\\views\\default\\index.html.twig");
    }
}
