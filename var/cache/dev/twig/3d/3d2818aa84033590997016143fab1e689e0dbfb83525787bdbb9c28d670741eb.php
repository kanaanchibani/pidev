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
        $__internal_af1b075bfa24f5afd3622ddfd5a5cc1dd5cfcc052ff08ab0796d6cc604c7b4b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af1b075bfa24f5afd3622ddfd5a5cc1dd5cfcc052ff08ab0796d6cc604c7b4b0->enter($__internal_af1b075bfa24f5afd3622ddfd5a5cc1dd5cfcc052ff08ab0796d6cc604c7b4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_7dcd0879503919042ad4d8e844eaad561d9f31837fcac8850cfc7e64c72e5a5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dcd0879503919042ad4d8e844eaad561d9f31837fcac8850cfc7e64c72e5a5c->enter($__internal_7dcd0879503919042ad4d8e844eaad561d9f31837fcac8850cfc7e64c72e5a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

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
        
        $__internal_af1b075bfa24f5afd3622ddfd5a5cc1dd5cfcc052ff08ab0796d6cc604c7b4b0->leave($__internal_af1b075bfa24f5afd3622ddfd5a5cc1dd5cfcc052ff08ab0796d6cc604c7b4b0_prof);

        
        $__internal_7dcd0879503919042ad4d8e844eaad561d9f31837fcac8850cfc7e64c72e5a5c->leave($__internal_7dcd0879503919042ad4d8e844eaad561d9f31837fcac8850cfc7e64c72e5a5c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e4dbcad86f36423d98b5795d7a0f614989332367a5f7825634c79ce72199f39c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4dbcad86f36423d98b5795d7a0f614989332367a5f7825634c79ce72199f39c->enter($__internal_e4dbcad86f36423d98b5795d7a0f614989332367a5f7825634c79ce72199f39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c6ba4551b4732a2cae85eda01fc4eecbac6918649377bfc7683e9ab475f302b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6ba4551b4732a2cae85eda01fc4eecbac6918649377bfc7683e9ab475f302b6->enter($__internal_c6ba4551b4732a2cae85eda01fc4eecbac6918649377bfc7683e9ab475f302b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c6ba4551b4732a2cae85eda01fc4eecbac6918649377bfc7683e9ab475f302b6->leave($__internal_c6ba4551b4732a2cae85eda01fc4eecbac6918649377bfc7683e9ab475f302b6_prof);

        
        $__internal_e4dbcad86f36423d98b5795d7a0f614989332367a5f7825634c79ce72199f39c->leave($__internal_e4dbcad86f36423d98b5795d7a0f614989332367a5f7825634c79ce72199f39c_prof);

    }

    // line 5
    public function block_meta($context, array $blocks = array())
    {
        $__internal_4449390a4790fc1dbd4838569c587960b21422943c50a7c2ca10a597e3e04c45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4449390a4790fc1dbd4838569c587960b21422943c50a7c2ca10a597e3e04c45->enter($__internal_4449390a4790fc1dbd4838569c587960b21422943c50a7c2ca10a597e3e04c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        $__internal_cc71aa0d998a918140c9263481eebb7a321af0b096d491ae27dee22b9b719a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc71aa0d998a918140c9263481eebb7a321af0b096d491ae27dee22b9b719a62->enter($__internal_cc71aa0d998a918140c9263481eebb7a321af0b096d491ae27dee22b9b719a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 6
        echo "            <meta charset=\"utf-8\" />
        ";
        
        $__internal_cc71aa0d998a918140c9263481eebb7a321af0b096d491ae27dee22b9b719a62->leave($__internal_cc71aa0d998a918140c9263481eebb7a321af0b096d491ae27dee22b9b719a62_prof);

        
        $__internal_4449390a4790fc1dbd4838569c587960b21422943c50a7c2ca10a597e3e04c45->leave($__internal_4449390a4790fc1dbd4838569c587960b21422943c50a7c2ca10a597e3e04c45_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5189875970b8c97b78feecf87bd85106e3556540f40ba5e73e966e2219c5147 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5189875970b8c97b78feecf87bd85106e3556540f40ba5e73e966e2219c5147->enter($__internal_d5189875970b8c97b78feecf87bd85106e3556540f40ba5e73e966e2219c5147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_36906029ef70a4d0ba880f813b472594435239be38a875acf6e81e3d120983c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36906029ef70a4d0ba880f813b472594435239be38a875acf6e81e3d120983c8->enter($__internal_36906029ef70a4d0ba880f813b472594435239be38a875acf6e81e3d120983c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Espace Etudiant ";
        
        $__internal_36906029ef70a4d0ba880f813b472594435239be38a875acf6e81e3d120983c8->leave($__internal_36906029ef70a4d0ba880f813b472594435239be38a875acf6e81e3d120983c8_prof);

        
        $__internal_d5189875970b8c97b78feecf87bd85106e3556540f40ba5e73e966e2219c5147->leave($__internal_d5189875970b8c97b78feecf87bd85106e3556540f40ba5e73e966e2219c5147_prof);

    }

    // line 11
    public function block_style($context, array $blocks = array())
    {
        $__internal_f92c3c3701deeac6719468c46c48545aaa4b78d0663c8e427e495da7faf7b284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f92c3c3701deeac6719468c46c48545aaa4b78d0663c8e427e495da7faf7b284->enter($__internal_f92c3c3701deeac6719468c46c48545aaa4b78d0663c8e427e495da7faf7b284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_a34cc2b6682ded1075f9bf87fafdc532e6baab7f81beb128b76186d377341b80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a34cc2b6682ded1075f9bf87fafdc532e6baab7f81beb128b76186d377341b80->enter($__internal_a34cc2b6682ded1075f9bf87fafdc532e6baab7f81beb128b76186d377341b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

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
        
        $__internal_a34cc2b6682ded1075f9bf87fafdc532e6baab7f81beb128b76186d377341b80->leave($__internal_a34cc2b6682ded1075f9bf87fafdc532e6baab7f81beb128b76186d377341b80_prof);

        
        $__internal_f92c3c3701deeac6719468c46c48545aaa4b78d0663c8e427e495da7faf7b284->leave($__internal_f92c3c3701deeac6719468c46c48545aaa4b78d0663c8e427e495da7faf7b284_prof);

    }

    // line 20
    public function block_script($context, array $blocks = array())
    {
        $__internal_ec243374d7e7b46e1eab6f2ffbd927d208fff1995e84e260bdd87ef77999946b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec243374d7e7b46e1eab6f2ffbd927d208fff1995e84e260bdd87ef77999946b->enter($__internal_ec243374d7e7b46e1eab6f2ffbd927d208fff1995e84e260bdd87ef77999946b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_3f8d9c90c574a490b68bea99f3a6383d017534378d172b14d8b1d26447d4c9ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f8d9c90c574a490b68bea99f3a6383d017534378d172b14d8b1d26447d4c9ff->enter($__internal_3f8d9c90c574a490b68bea99f3a6383d017534378d172b14d8b1d26447d4c9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

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
        
        $__internal_3f8d9c90c574a490b68bea99f3a6383d017534378d172b14d8b1d26447d4c9ff->leave($__internal_3f8d9c90c574a490b68bea99f3a6383d017534378d172b14d8b1d26447d4c9ff_prof);

        
        $__internal_ec243374d7e7b46e1eab6f2ffbd927d208fff1995e84e260bdd87ef77999946b->leave($__internal_ec243374d7e7b46e1eab6f2ffbd927d208fff1995e84e260bdd87ef77999946b_prof);

    }

    // line 48
    public function block_header($context, array $blocks = array())
    {
        $__internal_5896f86ae46aa6a37e4a2ee186dfc3634f40049782844071d1eb8ee5b1ca931b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5896f86ae46aa6a37e4a2ee186dfc3634f40049782844071d1eb8ee5b1ca931b->enter($__internal_5896f86ae46aa6a37e4a2ee186dfc3634f40049782844071d1eb8ee5b1ca931b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_3b6de966630b6f976103d93061b9e926b891841a6872d29fa06c772343eb4309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6de966630b6f976103d93061b9e926b891841a6872d29fa06c772343eb4309->enter($__internal_3b6de966630b6f976103d93061b9e926b891841a6872d29fa06c772343eb4309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_3b6de966630b6f976103d93061b9e926b891841a6872d29fa06c772343eb4309->leave($__internal_3b6de966630b6f976103d93061b9e926b891841a6872d29fa06c772343eb4309_prof);

        
        $__internal_5896f86ae46aa6a37e4a2ee186dfc3634f40049782844071d1eb8ee5b1ca931b->leave($__internal_5896f86ae46aa6a37e4a2ee186dfc3634f40049782844071d1eb8ee5b1ca931b_prof);

    }

    // line 144
    public function block_section1($context, array $blocks = array())
    {
        $__internal_69d754b3ef8b7acf1cb3e12f88fd94609a167683e8cdfc5a1437e892001fcc74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69d754b3ef8b7acf1cb3e12f88fd94609a167683e8cdfc5a1437e892001fcc74->enter($__internal_69d754b3ef8b7acf1cb3e12f88fd94609a167683e8cdfc5a1437e892001fcc74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section1"));

        $__internal_d9b34c69e134a1c9365aeec2b91d908a4736ecc7aa46d4d82213e287384557ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b34c69e134a1c9365aeec2b91d908a4736ecc7aa46d4d82213e287384557ca->enter($__internal_d9b34c69e134a1c9365aeec2b91d908a4736ecc7aa46d4d82213e287384557ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section1"));

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
        
        $__internal_d9b34c69e134a1c9365aeec2b91d908a4736ecc7aa46d4d82213e287384557ca->leave($__internal_d9b34c69e134a1c9365aeec2b91d908a4736ecc7aa46d4d82213e287384557ca_prof);

        
        $__internal_69d754b3ef8b7acf1cb3e12f88fd94609a167683e8cdfc5a1437e892001fcc74->leave($__internal_69d754b3ef8b7acf1cb3e12f88fd94609a167683e8cdfc5a1437e892001fcc74_prof);

    }

    // line 256
    public function block_section2($context, array $blocks = array())
    {
        $__internal_86aebecac8322f5907d8be3f6ddce964e6aafc3b995eef645bdfa09d3833c106 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86aebecac8322f5907d8be3f6ddce964e6aafc3b995eef645bdfa09d3833c106->enter($__internal_86aebecac8322f5907d8be3f6ddce964e6aafc3b995eef645bdfa09d3833c106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        $__internal_1c1e44e919b015f8a54f76c41a9f78f0c37f05d202750d99ad730ca054d4d361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c1e44e919b015f8a54f76c41a9f78f0c37f05d202750d99ad730ca054d4d361->enter($__internal_1c1e44e919b015f8a54f76c41a9f78f0c37f05d202750d99ad730ca054d4d361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

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
        
        $__internal_1c1e44e919b015f8a54f76c41a9f78f0c37f05d202750d99ad730ca054d4d361->leave($__internal_1c1e44e919b015f8a54f76c41a9f78f0c37f05d202750d99ad730ca054d4d361_prof);

        
        $__internal_86aebecac8322f5907d8be3f6ddce964e6aafc3b995eef645bdfa09d3833c106->leave($__internal_86aebecac8322f5907d8be3f6ddce964e6aafc3b995eef645bdfa09d3833c106_prof);

    }

    // line 316
    public function block_section3($context, array $blocks = array())
    {
        $__internal_d33e6c8376a083b6e040fdf80561cbabac3b3f91f151d9df60fbd69fb337e71a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d33e6c8376a083b6e040fdf80561cbabac3b3f91f151d9df60fbd69fb337e71a->enter($__internal_d33e6c8376a083b6e040fdf80561cbabac3b3f91f151d9df60fbd69fb337e71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        $__internal_d85a7f87e9244579415191047442c0d945a24847b9ff05830a84ac9b4c86db8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d85a7f87e9244579415191047442c0d945a24847b9ff05830a84ac9b4c86db8a->enter($__internal_d85a7f87e9244579415191047442c0d945a24847b9ff05830a84ac9b4c86db8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

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
        
        $__internal_d85a7f87e9244579415191047442c0d945a24847b9ff05830a84ac9b4c86db8a->leave($__internal_d85a7f87e9244579415191047442c0d945a24847b9ff05830a84ac9b4c86db8a_prof);

        
        $__internal_d33e6c8376a083b6e040fdf80561cbabac3b3f91f151d9df60fbd69fb337e71a->leave($__internal_d33e6c8376a083b6e040fdf80561cbabac3b3f91f151d9df60fbd69fb337e71a_prof);

    }

    // line 434
    public function block_section4($context, array $blocks = array())
    {
        $__internal_26671f909c710f9e4d99329c63b732a905f8f48f578a7f417ffbd8e79bc8b07f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26671f909c710f9e4d99329c63b732a905f8f48f578a7f417ffbd8e79bc8b07f->enter($__internal_26671f909c710f9e4d99329c63b732a905f8f48f578a7f417ffbd8e79bc8b07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section4"));

        $__internal_6a781a3d290696e91315c8c15a1fa1c0b9a31822d232b83cb03ad33b0a9e63ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a781a3d290696e91315c8c15a1fa1c0b9a31822d232b83cb03ad33b0a9e63ab->enter($__internal_6a781a3d290696e91315c8c15a1fa1c0b9a31822d232b83cb03ad33b0a9e63ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section4"));

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
        
        $__internal_6a781a3d290696e91315c8c15a1fa1c0b9a31822d232b83cb03ad33b0a9e63ab->leave($__internal_6a781a3d290696e91315c8c15a1fa1c0b9a31822d232b83cb03ad33b0a9e63ab_prof);

        
        $__internal_26671f909c710f9e4d99329c63b732a905f8f48f578a7f417ffbd8e79bc8b07f->leave($__internal_26671f909c710f9e4d99329c63b732a905f8f48f578a7f417ffbd8e79bc8b07f_prof);

    }

    // line 507
    public function block_section5($context, array $blocks = array())
    {
        $__internal_16d6321d8d0d701c94d3a9ed95bc57b32e1c46343f19ca8dbab9281cf459c608 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16d6321d8d0d701c94d3a9ed95bc57b32e1c46343f19ca8dbab9281cf459c608->enter($__internal_16d6321d8d0d701c94d3a9ed95bc57b32e1c46343f19ca8dbab9281cf459c608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section5"));

        $__internal_2652bc7028d0162dc52bd6c92ad1c8121ed5c421ee587b26715bea9eb116146a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2652bc7028d0162dc52bd6c92ad1c8121ed5c421ee587b26715bea9eb116146a->enter($__internal_2652bc7028d0162dc52bd6c92ad1c8121ed5c421ee587b26715bea9eb116146a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section5"));

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
        
        $__internal_2652bc7028d0162dc52bd6c92ad1c8121ed5c421ee587b26715bea9eb116146a->leave($__internal_2652bc7028d0162dc52bd6c92ad1c8121ed5c421ee587b26715bea9eb116146a_prof);

        
        $__internal_16d6321d8d0d701c94d3a9ed95bc57b32e1c46343f19ca8dbab9281cf459c608->leave($__internal_16d6321d8d0d701c94d3a9ed95bc57b32e1c46343f19ca8dbab9281cf459c608_prof);

    }

    // line 584
    public function block_section6($context, array $blocks = array())
    {
        $__internal_444a13cca86995a8ffd75b99ce1d41c1e50d1e7f13c69d607d3cc67582ad7926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_444a13cca86995a8ffd75b99ce1d41c1e50d1e7f13c69d607d3cc67582ad7926->enter($__internal_444a13cca86995a8ffd75b99ce1d41c1e50d1e7f13c69d607d3cc67582ad7926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section6"));

        $__internal_66198348dd9462b0db0a55264f48ae313b424cfd27137f9121e496ebd1d2d3f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66198348dd9462b0db0a55264f48ae313b424cfd27137f9121e496ebd1d2d3f6->enter($__internal_66198348dd9462b0db0a55264f48ae313b424cfd27137f9121e496ebd1d2d3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section6"));

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
        
        $__internal_66198348dd9462b0db0a55264f48ae313b424cfd27137f9121e496ebd1d2d3f6->leave($__internal_66198348dd9462b0db0a55264f48ae313b424cfd27137f9121e496ebd1d2d3f6_prof);

        
        $__internal_444a13cca86995a8ffd75b99ce1d41c1e50d1e7f13c69d607d3cc67582ad7926->leave($__internal_444a13cca86995a8ffd75b99ce1d41c1e50d1e7f13c69d607d3cc67582ad7926_prof);

    }

    // line 643
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b078c8cdf07a81ee662139e601105b49863e2c927e5b7ab3f9e8d49b223c956d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b078c8cdf07a81ee662139e601105b49863e2c927e5b7ab3f9e8d49b223c956d->enter($__internal_b078c8cdf07a81ee662139e601105b49863e2c927e5b7ab3f9e8d49b223c956d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_14119c4ab8878cc1b24df5152f546f7418c6f865132e964718224311a4121f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14119c4ab8878cc1b24df5152f546f7418c6f865132e964718224311a4121f09->enter($__internal_14119c4ab8878cc1b24df5152f546f7418c6f865132e964718224311a4121f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 644
        echo "        <div class=\"copyright-agile\">
            <p>© 2018 All rights reserved | Design by <a href=\"#\">Davinci Coders</a></p>
        </div>
    ";
        
        $__internal_14119c4ab8878cc1b24df5152f546f7418c6f865132e964718224311a4121f09->leave($__internal_14119c4ab8878cc1b24df5152f546f7418c6f865132e964718224311a4121f09_prof);

        
        $__internal_b078c8cdf07a81ee662139e601105b49863e2c927e5b7ab3f9e8d49b223c956d->leave($__internal_b078c8cdf07a81ee662139e601105b49863e2c927e5b7ab3f9e8d49b223c956d_prof);

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

", "default/index.html.twig", "C:\\wamp64\\www\\Esprit Entr'aide\\app\\Resources\\views\\default\\index.html.twig");
    }
}
