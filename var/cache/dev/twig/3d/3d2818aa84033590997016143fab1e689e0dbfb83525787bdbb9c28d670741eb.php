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
        $__internal_f3618d18d2af8da1a6d9dfbf054d4954ee65401a7a3893262852f9de37ea993c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3618d18d2af8da1a6d9dfbf054d4954ee65401a7a3893262852f9de37ea993c->enter($__internal_f3618d18d2af8da1a6d9dfbf054d4954ee65401a7a3893262852f9de37ea993c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_b963c85812eca6132c42845c8ab540808bb1d302c6d307d478956a3567e84506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b963c85812eca6132c42845c8ab540808bb1d302c6d307d478956a3567e84506->enter($__internal_b963c85812eca6132c42845c8ab540808bb1d302c6d307d478956a3567e84506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        // line 1
        echo "<html>
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
<head>
    ";
        // line 74
        $this->displayBlock('head', $context, $blocks);
        // line 115
        echo "</head>


<div class=\"section-header\">
    ";
        // line 119
        $this->displayBlock('header', $context, $blocks);
        // line 210
        echo "</div>

<body>

<div class=\"section1\">
    ";
        // line 215
        $this->displayBlock('section1', $context, $blocks);
        // line 325
        echo "</div>




<div class=\"section2\">
    ";
        // line 331
        $this->displayBlock('section2', $context, $blocks);
        // line 486
        echo "</div>




<div class=\"section3\">
    ";
        // line 492
        $this->displayBlock('section3', $context, $blocks);
        // line 600
        echo "</div>








<div class=\"section5\">
    ";
        // line 610
        $this->displayBlock('section5', $context, $blocks);
        // line 683
        echo "</div>


<div class=\"section6\">
    ";
        // line 687
        $this->displayBlock('section6', $context, $blocks);
        // line 735
        echo "</div>






</body>


<div class=\"section-footer\">
    ";
        // line 746
        $this->displayBlock('footer', $context, $blocks);
        // line 751
        echo "</div>

</html>

";
        
        $__internal_f3618d18d2af8da1a6d9dfbf054d4954ee65401a7a3893262852f9de37ea993c->leave($__internal_f3618d18d2af8da1a6d9dfbf054d4954ee65401a7a3893262852f9de37ea993c_prof);

        
        $__internal_b963c85812eca6132c42845c8ab540808bb1d302c6d307d478956a3567e84506->leave($__internal_b963c85812eca6132c42845c8ab540808bb1d302c6d307d478956a3567e84506_prof);

    }

    // line 74
    public function block_head($context, array $blocks = array())
    {
        $__internal_bd76cbc75e8b6c91caa63170541bb2cce86d3fdd32e9861d94110af1ccb89838 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd76cbc75e8b6c91caa63170541bb2cce86d3fdd32e9861d94110af1ccb89838->enter($__internal_bd76cbc75e8b6c91caa63170541bb2cce86d3fdd32e9861d94110af1ccb89838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_67c8659a30d30d0f5a20b9a9e98636e6ad68265580c2ea8d35f927f3cadbac0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c8659a30d30d0f5a20b9a9e98636e6ad68265580c2ea8d35f927f3cadbac0e->enter($__internal_67c8659a30d30d0f5a20b9a9e98636e6ad68265580c2ea8d35f927f3cadbac0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 75
        echo "
        ";
        // line 76
        $this->displayBlock('meta', $context, $blocks);
        // line 79
        echo "
        <title>";
        // line 80
        $this->displayBlock('title', $context, $blocks);
        echo " </title>

        ";
        // line 82
        $this->displayBlock('style', $context, $blocks);
        // line 90
        echo "
        ";
        // line 91
        $this->displayBlock('script', $context, $blocks);
        // line 113
        echo "
    ";
        
        $__internal_67c8659a30d30d0f5a20b9a9e98636e6ad68265580c2ea8d35f927f3cadbac0e->leave($__internal_67c8659a30d30d0f5a20b9a9e98636e6ad68265580c2ea8d35f927f3cadbac0e_prof);

        
        $__internal_bd76cbc75e8b6c91caa63170541bb2cce86d3fdd32e9861d94110af1ccb89838->leave($__internal_bd76cbc75e8b6c91caa63170541bb2cce86d3fdd32e9861d94110af1ccb89838_prof);

    }

    // line 76
    public function block_meta($context, array $blocks = array())
    {
        $__internal_e591ddc788c2bae37fb830f7fefbc6f545ff5783d44ea05597c7d532548c101f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e591ddc788c2bae37fb830f7fefbc6f545ff5783d44ea05597c7d532548c101f->enter($__internal_e591ddc788c2bae37fb830f7fefbc6f545ff5783d44ea05597c7d532548c101f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        $__internal_b265ffa073dbed2205f02f708171aed9e9a9c584af3109c7b56babf2782f562f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b265ffa073dbed2205f02f708171aed9e9a9c584af3109c7b56babf2782f562f->enter($__internal_b265ffa073dbed2205f02f708171aed9e9a9c584af3109c7b56babf2782f562f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 77
        echo "            <meta charset=\"utf-8\" />
        ";
        
        $__internal_b265ffa073dbed2205f02f708171aed9e9a9c584af3109c7b56babf2782f562f->leave($__internal_b265ffa073dbed2205f02f708171aed9e9a9c584af3109c7b56babf2782f562f_prof);

        
        $__internal_e591ddc788c2bae37fb830f7fefbc6f545ff5783d44ea05597c7d532548c101f->leave($__internal_e591ddc788c2bae37fb830f7fefbc6f545ff5783d44ea05597c7d532548c101f_prof);

    }

    // line 80
    public function block_title($context, array $blocks = array())
    {
        $__internal_f78706dc636cd971dccdf44b8531b0544f90264672817f1647607359c0212119 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f78706dc636cd971dccdf44b8531b0544f90264672817f1647607359c0212119->enter($__internal_f78706dc636cd971dccdf44b8531b0544f90264672817f1647607359c0212119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_be3e4fdcdb7deed08081e9c725324bea94d84eda9fd3ba83fa962383605d5031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be3e4fdcdb7deed08081e9c725324bea94d84eda9fd3ba83fa962383605d5031->enter($__internal_be3e4fdcdb7deed08081e9c725324bea94d84eda9fd3ba83fa962383605d5031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Espace Etudiant 000";
        
        $__internal_be3e4fdcdb7deed08081e9c725324bea94d84eda9fd3ba83fa962383605d5031->leave($__internal_be3e4fdcdb7deed08081e9c725324bea94d84eda9fd3ba83fa962383605d5031_prof);

        
        $__internal_f78706dc636cd971dccdf44b8531b0544f90264672817f1647607359c0212119->leave($__internal_f78706dc636cd971dccdf44b8531b0544f90264672817f1647607359c0212119_prof);

    }

    // line 82
    public function block_style($context, array $blocks = array())
    {
        $__internal_31f809fcbd3b84adee3c535f5af21b31cf2fe72522f0cc8fa2f2a038f409d767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31f809fcbd3b84adee3c535f5af21b31cf2fe72522f0cc8fa2f2a038f409d767->enter($__internal_31f809fcbd3b84adee3c535f5af21b31cf2fe72522f0cc8fa2f2a038f409d767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_988f2a54c285f0e56343d5d0d36120f9713f41e5e95d2d7fe54cc05ef8bbd5d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_988f2a54c285f0e56343d5d0d36120f9713f41e5e95d2d7fe54cc05ef8bbd5d5->enter($__internal_988f2a54c285f0e56343d5d0d36120f9713f41e5e95d2d7fe54cc05ef8bbd5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 83
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/nav.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/lightbox.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/flexslider.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_988f2a54c285f0e56343d5d0d36120f9713f41e5e95d2d7fe54cc05ef8bbd5d5->leave($__internal_988f2a54c285f0e56343d5d0d36120f9713f41e5e95d2d7fe54cc05ef8bbd5d5_prof);

        
        $__internal_31f809fcbd3b84adee3c535f5af21b31cf2fe72522f0cc8fa2f2a038f409d767->leave($__internal_31f809fcbd3b84adee3c535f5af21b31cf2fe72522f0cc8fa2f2a038f409d767_prof);

    }

    // line 91
    public function block_script($context, array $blocks = array())
    {
        $__internal_496aeef65ed6dba879a267fac31ed6b7e94a030e1dd1eeecfe32081e0614ac50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_496aeef65ed6dba879a267fac31ed6b7e94a030e1dd1eeecfe32081e0614ac50->enter($__internal_496aeef65ed6dba879a267fac31ed6b7e94a030e1dd1eeecfe32081e0614ac50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_54ff7d0d315a94f9c12687880e5e3d1436c617d3fe27de1842ecda6e923a4a22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54ff7d0d315a94f9c12687880e5e3d1436c617d3fe27de1842ecda6e923a4a22->enter($__internal_54ff7d0d315a94f9c12687880e5e3d1436c617d3fe27de1842ecda6e923a4a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 92
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/uisearch.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/SmoothScroll.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/numscroller-1.0.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/nav.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/move-top.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/lightbox-plus-jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easing.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/classie.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>

    <script>
    </script>





    ";
        
        $__internal_54ff7d0d315a94f9c12687880e5e3d1436c617d3fe27de1842ecda6e923a4a22->leave($__internal_54ff7d0d315a94f9c12687880e5e3d1436c617d3fe27de1842ecda6e923a4a22_prof);

        
        $__internal_496aeef65ed6dba879a267fac31ed6b7e94a030e1dd1eeecfe32081e0614ac50->leave($__internal_496aeef65ed6dba879a267fac31ed6b7e94a030e1dd1eeecfe32081e0614ac50_prof);

    }

    // line 119
    public function block_header($context, array $blocks = array())
    {
        $__internal_625b862797f885a26c3e888b443325ecf72712f303b44c0f167c6cfefd6c34c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_625b862797f885a26c3e888b443325ecf72712f303b44c0f167c6cfefd6c34c9->enter($__internal_625b862797f885a26c3e888b443325ecf72712f303b44c0f167c6cfefd6c34c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_4ad77da419da3fe74fb5af5f7cc219bd08ff476980f0036789edd3afa58257bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ad77da419da3fe74fb5af5f7cc219bd08ff476980f0036789edd3afa58257bb->enter($__internal_4ad77da419da3fe74fb5af5f7cc219bd08ff476980f0036789edd3afa58257bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 120
        echo "

        <div class=\"sub-agile\">
            <div class=\"agile1\">
                <!-- navigation section -->
                <div>
                    <p><button id=\"trigger-overlay\" type=\"button\"><img alt=\"menu\" class=\"img-responsive\" src=\"";
        // line 126
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
                <p>+216 70 250 000 </p>
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
        
        $__internal_4ad77da419da3fe74fb5af5f7cc219bd08ff476980f0036789edd3afa58257bb->leave($__internal_4ad77da419da3fe74fb5af5f7cc219bd08ff476980f0036789edd3afa58257bb_prof);

        
        $__internal_625b862797f885a26c3e888b443325ecf72712f303b44c0f167c6cfefd6c34c9->leave($__internal_625b862797f885a26c3e888b443325ecf72712f303b44c0f167c6cfefd6c34c9_prof);

    }

    // line 215
    public function block_section1($context, array $blocks = array())
    {
        $__internal_1912b1c97536b9ef41df86ef17752d02583e3b4ce76970137ee9a1d3a82fd309 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1912b1c97536b9ef41df86ef17752d02583e3b4ce76970137ee9a1d3a82fd309->enter($__internal_1912b1c97536b9ef41df86ef17752d02583e3b4ce76970137ee9a1d3a82fd309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section1"));

        $__internal_6edbf14a3fb04f32bdf9a9d2f3ffb1fabd78d8af696dd954fc01e6ddeb8af5eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6edbf14a3fb04f32bdf9a9d2f3ffb1fabd78d8af696dd954fc01e6ddeb8af5eb->enter($__internal_6edbf14a3fb04f32bdf9a9d2f3ffb1fabd78d8af696dd954fc01e6ddeb8af5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section1"));

        // line 216
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
                                                            
                                                            <p>Dernières offres de Collocation</p>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-pencil\"></i>
                                                            
                                                            <p>Derniers Objets perdus</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-book\"></i>
                                                            
                                                            <p>Derniers évènements</p>
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
        
        $__internal_6edbf14a3fb04f32bdf9a9d2f3ffb1fabd78d8af696dd954fc01e6ddeb8af5eb->leave($__internal_6edbf14a3fb04f32bdf9a9d2f3ffb1fabd78d8af696dd954fc01e6ddeb8af5eb_prof);

        
        $__internal_1912b1c97536b9ef41df86ef17752d02583e3b4ce76970137ee9a1d3a82fd309->leave($__internal_1912b1c97536b9ef41df86ef17752d02583e3b4ce76970137ee9a1d3a82fd309_prof);

    }

    // line 331
    public function block_section2($context, array $blocks = array())
    {
        $__internal_d19274db12a1111e277266953ea2438772c22c6fef22dec711a69d297ae45284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d19274db12a1111e277266953ea2438772c22c6fef22dec711a69d297ae45284->enter($__internal_d19274db12a1111e277266953ea2438772c22c6fef22dec711a69d297ae45284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        $__internal_76916b9fbb0759b9f86ad611538df9885488ffca82017048e218178b6d397517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76916b9fbb0759b9f86ad611538df9885488ffca82017048e218178b6d397517->enter($__internal_76916b9fbb0759b9f86ad611538df9885488ffca82017048e218178b6d397517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 332
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
                    <h3>Clubs ESPRIT</h3>
                    <p>Au sein d’Esprit, les associations et clubs remplissent plusieurs rôles étant donné la diversité des motivations qui animent ceux qui en sont à l’origine. Conscients de l’importance de la vie associative, les étudiants jouent un rôle important dans l’élaboration et la transmission des messages aux destinataires.</p>
                    <div class=\"menuimage\">
                        <a class=\"readmore\" data-target=\"#myModal1\" data-toggle=\"modal\" href=\"#\">Read More<i aria-hidden=\"true\" class=\"fa fa-long-arrow-right\"></i></a>
                    </div>
                </div>
                
    <div class=\"col-md-6 bottomgridimg\">
        <div class=\"slideshow-container\">
            <div class=\"mySlides fade\">
                <div class=\"numbertext\">
                    1 / 3
                </div><img src=\"/pidev/web/images/photoclubesprit/c1.jpg\" style=\"width:100%\">
                <div class=\"text\">
                    Caption Text
                </div>
            </div>
            <div class=\"mySlides fade\">
                <div class=\"numbertext\">
                    2 / 3
                </div><img src=\"/pidev/web/images/photoclubesprit/c8.jpg\" style=\"width:100%\">
                <div class=\"text\">
                    Caption Two
                </div>
            </div>
            <div class=\"mySlides fade\">
                <div class=\"numbertext\">
                    3 / 3
                </div><img src=\"/pidev/web/images/photoclubesprit/c11.jpg\" style=\"width:100%\">
                <div class=\"text\">
                    Caption Three
                </div>
            </div>
        </div>
    </div>
<br>

<div style=\"text-align:center\">
  <span class=\"dot\"></span> 
  <span class=\"dot\"></span> 
  <span class=\"dot\"></span> 
</div>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName(\"mySlides\");
    var dots = document.getElementsByClassName(\"dot\");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = \"none\";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(\" active\", \"\");
    }
    slides[slideIndex-1].style.display = \"block\";  
    dots[slideIndex-1].className += \" active\";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>





                





                <div class=\"clearfix\"></div>
            </div>
            <div class=\"about-bottom-grid2\">
                <div class=\"col-md-6 bottomgridimg\"><img alt=\"\" src=\"/pidev/web/images/about2.jpg\"></div>
                <div class=\"col-md-6 bottomgridtext bottomleft\">
                    <h3>Evénements et Challenges</h3>
                    <p>Etre étudiant c’est aussi partager des moments conviviaux et festifs au sein de la communauté Espritienne. Chaque semaine, une pléiade d’événements (musicaux, écologiques etc) est organisée par les étudiants et leurs enseignants pour enrichir l’atmosphère de l’école et continuer de rayonner tant sur l’aspect académique que sur l’aspect culturel.</p>
                    <div class=\"readmore-w3\">
                        <a class=\"readmore\" data-target=\"#myModal1\" data-toggle=\"modal\" href=\"#\">Read More<i aria-hidden=\"true\" class=\"fa fa-long-arrow-right\"></i></a>
                    </div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"about-bottom-grid1\">
                <div class=\"col-md-6 bottomgridtext\">
                    <h3>Spotted</h3>
                    <p>Spotted est ta machine à rencontrer des gens/remonter le temps! C'est un moyen simple et amusant de se connecter avec les gens que tu as rencontrés à esprit. Rencontre de nouvelles personnes sur le campus. Avec Spotted, tu peux écrire aux gens que tu croises dans ton quotidien ou leur laisser un post anonyme pour les retrouver.</p>
                    <div class=\"readmore-w3\">
                        <a class=\"readmore\" data-target=\"#myModal1\" data-toggle=\"modal\" href=\"#\">Read More<i aria-hidden=\"true\" class=\"fa fa-long-arrow-right\"></i></a>
                    </div>
                </div>
                <div class=\"col-md-6 bottomgridimg\"><img alt=\"\" src=\"/pidev/web/images/about1.jpg\"></div>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"about-bottom-grid2\">
                <div class=\"col-md-6 bottomgridimg\"><img alt=\"\" src=\"/pidev/web/images/about2.jpg\"></div>
                <div class=\"col-md-6 bottomgridtext bottomleft\">
                    <h3>Lancez vos impressions à distance !</h3>
                    <p>Notre service <b>Impression</b> vous permet de lancer vos impressions depuis n’importe quel appareil connecté (Ordinateur, Tablette, Mobile...). Il vous suffit ensuite de passer en boutique pour récupérer vos documents !</p>
                    <div class=\"readmore-w3\">
                        <a class=\"readmore\" data-target=\"#myModal1\" data-toggle=\"modal\" href=\"#\">Read More<i aria-hidden=\"true\" class=\"fa fa-long-arrow-right\"></i></a>
                    </div>
                </div>
            </div>

            <div class=\"about-bottom-grid1\">
                <div class=\"col-md-6 bottomgridtext\">
                    <h3>Annonce</h3>
                    <p>C'est un Service internet gratuit et social pour retrouver ou déclarer objets perdus, trouvés, volés. Que vous ayez perdu, trouvé ou fait volé votre Pc, chargeur, clés, lunettes,  iPhone, portable, portefeuille ... ENSEMBLE, nous allons essayer de vous aider en partageant vos annonces sur notre Site.</p>
                    <div class=\"readmore-w3\">
                        <a class=\"readmore\" data-target=\"#myModal1\" data-toggle=\"modal\" href=\"#\">Read More<i aria-hidden=\"true\" class=\"fa fa-long-arrow-right\"></i></a>
                    </div>
                </div>
                <div class=\"col-md-6 bottomgridimg\"><img alt=\"\" src=\"/pidev/web/images/about1.jpg\"></div>
                <div class=\"clearfix\"></div>
            </div>

        </div>
    </div>


    ";
        
        $__internal_76916b9fbb0759b9f86ad611538df9885488ffca82017048e218178b6d397517->leave($__internal_76916b9fbb0759b9f86ad611538df9885488ffca82017048e218178b6d397517_prof);

        
        $__internal_d19274db12a1111e277266953ea2438772c22c6fef22dec711a69d297ae45284->leave($__internal_d19274db12a1111e277266953ea2438772c22c6fef22dec711a69d297ae45284_prof);

    }

    // line 492
    public function block_section3($context, array $blocks = array())
    {
        $__internal_dacad46cf3efc6b6b5e686bb7f1ad66eecd221620ceae8e7deb12aa7b3b605f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dacad46cf3efc6b6b5e686bb7f1ad66eecd221620ceae8e7deb12aa7b3b605f6->enter($__internal_dacad46cf3efc6b6b5e686bb7f1ad66eecd221620ceae8e7deb12aa7b3b605f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        $__internal_781a615556d6e160c5120d8fe28dc3f5ab62e81be220a8fdaa73433470f90f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_781a615556d6e160c5120d8fe28dc3f5ab62e81be220a8fdaa73433470f90f09->enter($__internal_781a615556d6e160c5120d8fe28dc3f5ab62e81be220a8fdaa73433470f90f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 493
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
        
        $__internal_781a615556d6e160c5120d8fe28dc3f5ab62e81be220a8fdaa73433470f90f09->leave($__internal_781a615556d6e160c5120d8fe28dc3f5ab62e81be220a8fdaa73433470f90f09_prof);

        
        $__internal_dacad46cf3efc6b6b5e686bb7f1ad66eecd221620ceae8e7deb12aa7b3b605f6->leave($__internal_dacad46cf3efc6b6b5e686bb7f1ad66eecd221620ceae8e7deb12aa7b3b605f6_prof);

    }

    // line 610
    public function block_section5($context, array $blocks = array())
    {
        $__internal_2aca7f97f5af763fc6347f30e6e0de97c6bd514051d637aed170d534ac90f905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aca7f97f5af763fc6347f30e6e0de97c6bd514051d637aed170d534ac90f905->enter($__internal_2aca7f97f5af763fc6347f30e6e0de97c6bd514051d637aed170d534ac90f905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section5"));

        $__internal_689e35365e9350e753fab36eee10e585c8b2670c7cb3dc94e40f3725ec40b3d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_689e35365e9350e753fab36eee10e585c8b2670c7cb3dc94e40f3725ec40b3d6->enter($__internal_689e35365e9350e753fab36eee10e585c8b2670c7cb3dc94e40f3725ec40b3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section5"));

        // line 611
        echo "        <div class=\"gallery\" id=\"gallery\">
            <div class=\"container\">
                <div class=\"about-head text-center \">
                    <h3>La galerie des évènements</h3>
                </div>
                <div class=\"gallery-info\">
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p1.jpg\") }} class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 619
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p2.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 624
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p3.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 629
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p4.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 634
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p4.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p5.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 639
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p5.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p6.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 644
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p6.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p7.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 649
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p7.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p8.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 654
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p8.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p9.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 659
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p9.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p10.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 664
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p10.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p11.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 669
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p11.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p12.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 674
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
        
        $__internal_689e35365e9350e753fab36eee10e585c8b2670c7cb3dc94e40f3725ec40b3d6->leave($__internal_689e35365e9350e753fab36eee10e585c8b2670c7cb3dc94e40f3725ec40b3d6_prof);

        
        $__internal_2aca7f97f5af763fc6347f30e6e0de97c6bd514051d637aed170d534ac90f905->leave($__internal_2aca7f97f5af763fc6347f30e6e0de97c6bd514051d637aed170d534ac90f905_prof);

    }

    // line 687
    public function block_section6($context, array $blocks = array())
    {
        $__internal_c13386e62a72fdb71a0bb0acd63e83b31c7f95c0a359e4d3c9031f7b0a8a5ce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c13386e62a72fdb71a0bb0acd63e83b31c7f95c0a359e4d3c9031f7b0a8a5ce9->enter($__internal_c13386e62a72fdb71a0bb0acd63e83b31c7f95c0a359e4d3c9031f7b0a8a5ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section6"));

        $__internal_f03e12b79f6f161c0ec6f73772c42333c2a5065f940b19b24a26f9bd9c372b69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f03e12b79f6f161c0ec6f73772c42333c2a5065f940b19b24a26f9bd9c372b69->enter($__internal_f03e12b79f6f161c0ec6f73772c42333c2a5065f940b19b24a26f9bd9c372b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section6"));

        // line 688
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
        
        $__internal_f03e12b79f6f161c0ec6f73772c42333c2a5065f940b19b24a26f9bd9c372b69->leave($__internal_f03e12b79f6f161c0ec6f73772c42333c2a5065f940b19b24a26f9bd9c372b69_prof);

        
        $__internal_c13386e62a72fdb71a0bb0acd63e83b31c7f95c0a359e4d3c9031f7b0a8a5ce9->leave($__internal_c13386e62a72fdb71a0bb0acd63e83b31c7f95c0a359e4d3c9031f7b0a8a5ce9_prof);

    }

    // line 746
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6c0770af677afc3630800fb3489c0b20a6df8a57a42448fb2ad4459269e36855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c0770af677afc3630800fb3489c0b20a6df8a57a42448fb2ad4459269e36855->enter($__internal_6c0770af677afc3630800fb3489c0b20a6df8a57a42448fb2ad4459269e36855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_5bac1416abd7197e8292cee7ec695bce7985fb4addae73546bf25f4d742947a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bac1416abd7197e8292cee7ec695bce7985fb4addae73546bf25f4d742947a2->enter($__internal_5bac1416abd7197e8292cee7ec695bce7985fb4addae73546bf25f4d742947a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 747
        echo "        <div class=\"copyright-agile\">
            <p>© 2018 All rights reserved | Design by <a href=\"#\">Davinci Coders</a></p>
        </div>
    ";
        
        $__internal_5bac1416abd7197e8292cee7ec695bce7985fb4addae73546bf25f4d742947a2->leave($__internal_5bac1416abd7197e8292cee7ec695bce7985fb4addae73546bf25f4d742947a2_prof);

        
        $__internal_6c0770af677afc3630800fb3489c0b20a6df8a57a42448fb2ad4459269e36855->leave($__internal_6c0770af677afc3630800fb3489c0b20a6df8a57a42448fb2ad4459269e36855_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1129 => 747,  1120 => 746,  1064 => 688,  1055 => 687,  1036 => 674,  1028 => 669,  1020 => 664,  1012 => 659,  1004 => 654,  996 => 649,  988 => 644,  980 => 639,  972 => 634,  964 => 629,  956 => 624,  948 => 619,  938 => 611,  929 => 610,  813 => 493,  804 => 492,  641 => 332,  632 => 331,  514 => 216,  505 => 215,  411 => 126,  403 => 120,  394 => 119,  374 => 103,  370 => 102,  366 => 101,  362 => 100,  358 => 99,  354 => 98,  350 => 97,  346 => 96,  342 => 95,  338 => 94,  334 => 93,  331 => 92,  322 => 91,  310 => 88,  306 => 87,  302 => 86,  298 => 85,  294 => 84,  289 => 83,  280 => 82,  262 => 80,  251 => 77,  242 => 76,  231 => 113,  229 => 91,  226 => 90,  224 => 82,  219 => 80,  216 => 79,  214 => 76,  211 => 75,  202 => 74,  188 => 751,  186 => 746,  173 => 735,  171 => 687,  165 => 683,  163 => 610,  151 => 600,  149 => 492,  141 => 486,  139 => 331,  131 => 325,  129 => 215,  122 => 210,  120 => 119,  114 => 115,  112 => 74,  37 => 1,);
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
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
<head>
    {% block head %}

        {% block meta %}
            <meta charset=\"utf-8\" />
        {% endblock %}

        <title>{% block title %}Espace Etudiant 000{% endblock %} </title>

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
                <p>+216 70 250 000 </p>
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
                                                            
                                                            <p>Dernières offres de Collocation</p>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-pencil\"></i>
                                                            
                                                            <p>Derniers Objets perdus</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-book\"></i>
                                                            
                                                            <p>Derniers évènements</p>
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
                    <h3>Clubs ESPRIT</h3>
                    <p>Au sein d’Esprit, les associations et clubs remplissent plusieurs rôles étant donné la diversité des motivations qui animent ceux qui en sont à l’origine. Conscients de l’importance de la vie associative, les étudiants jouent un rôle important dans l’élaboration et la transmission des messages aux destinataires.</p>
                    <div class=\"menuimage\">
                        <a class=\"readmore\" data-target=\"#myModal1\" data-toggle=\"modal\" href=\"#\">Read More<i aria-hidden=\"true\" class=\"fa fa-long-arrow-right\"></i></a>
                    </div>
                </div>
                
    <div class=\"col-md-6 bottomgridimg\">
        <div class=\"slideshow-container\">
            <div class=\"mySlides fade\">
                <div class=\"numbertext\">
                    1 / 3
                </div><img src=\"/pidev/web/images/photoclubesprit/c1.jpg\" style=\"width:100%\">
                <div class=\"text\">
                    Caption Text
                </div>
            </div>
            <div class=\"mySlides fade\">
                <div class=\"numbertext\">
                    2 / 3
                </div><img src=\"/pidev/web/images/photoclubesprit/c8.jpg\" style=\"width:100%\">
                <div class=\"text\">
                    Caption Two
                </div>
            </div>
            <div class=\"mySlides fade\">
                <div class=\"numbertext\">
                    3 / 3
                </div><img src=\"/pidev/web/images/photoclubesprit/c11.jpg\" style=\"width:100%\">
                <div class=\"text\">
                    Caption Three
                </div>
            </div>
        </div>
    </div>
<br>

<div style=\"text-align:center\">
  <span class=\"dot\"></span> 
  <span class=\"dot\"></span> 
  <span class=\"dot\"></span> 
</div>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName(\"mySlides\");
    var dots = document.getElementsByClassName(\"dot\");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = \"none\";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(\" active\", \"\");
    }
    slides[slideIndex-1].style.display = \"block\";  
    dots[slideIndex-1].className += \" active\";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>





                





                <div class=\"clearfix\"></div>
            </div>
            <div class=\"about-bottom-grid2\">
                <div class=\"col-md-6 bottomgridimg\"><img alt=\"\" src=\"/pidev/web/images/about2.jpg\"></div>
                <div class=\"col-md-6 bottomgridtext bottomleft\">
                    <h3>Evénements et Challenges</h3>
                    <p>Etre étudiant c’est aussi partager des moments conviviaux et festifs au sein de la communauté Espritienne. Chaque semaine, une pléiade d’événements (musicaux, écologiques etc) est organisée par les étudiants et leurs enseignants pour enrichir l’atmosphère de l’école et continuer de rayonner tant sur l’aspect académique que sur l’aspect culturel.</p>
                    <div class=\"readmore-w3\">
                        <a class=\"readmore\" data-target=\"#myModal1\" data-toggle=\"modal\" href=\"#\">Read More<i aria-hidden=\"true\" class=\"fa fa-long-arrow-right\"></i></a>
                    </div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"about-bottom-grid1\">
                <div class=\"col-md-6 bottomgridtext\">
                    <h3>Spotted</h3>
                    <p>Spotted est ta machine à rencontrer des gens/remonter le temps! C'est un moyen simple et amusant de se connecter avec les gens que tu as rencontrés à esprit. Rencontre de nouvelles personnes sur le campus. Avec Spotted, tu peux écrire aux gens que tu croises dans ton quotidien ou leur laisser un post anonyme pour les retrouver.</p>
                    <div class=\"readmore-w3\">
                        <a class=\"readmore\" data-target=\"#myModal1\" data-toggle=\"modal\" href=\"#\">Read More<i aria-hidden=\"true\" class=\"fa fa-long-arrow-right\"></i></a>
                    </div>
                </div>
                <div class=\"col-md-6 bottomgridimg\"><img alt=\"\" src=\"/pidev/web/images/about1.jpg\"></div>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"about-bottom-grid2\">
                <div class=\"col-md-6 bottomgridimg\"><img alt=\"\" src=\"/pidev/web/images/about2.jpg\"></div>
                <div class=\"col-md-6 bottomgridtext bottomleft\">
                    <h3>Lancez vos impressions à distance !</h3>
                    <p>Notre service <b>Impression</b> vous permet de lancer vos impressions depuis n’importe quel appareil connecté (Ordinateur, Tablette, Mobile...). Il vous suffit ensuite de passer en boutique pour récupérer vos documents !</p>
                    <div class=\"readmore-w3\">
                        <a class=\"readmore\" data-target=\"#myModal1\" data-toggle=\"modal\" href=\"#\">Read More<i aria-hidden=\"true\" class=\"fa fa-long-arrow-right\"></i></a>
                    </div>
                </div>
            </div>

            <div class=\"about-bottom-grid1\">
                <div class=\"col-md-6 bottomgridtext\">
                    <h3>Annonce</h3>
                    <p>C'est un Service internet gratuit et social pour retrouver ou déclarer objets perdus, trouvés, volés. Que vous ayez perdu, trouvé ou fait volé votre Pc, chargeur, clés, lunettes,  iPhone, portable, portefeuille ... ENSEMBLE, nous allons essayer de vous aider en partageant vos annonces sur notre Site.</p>
                    <div class=\"readmore-w3\">
                        <a class=\"readmore\" data-target=\"#myModal1\" data-toggle=\"modal\" href=\"#\">Read More<i aria-hidden=\"true\" class=\"fa fa-long-arrow-right\"></i></a>
                    </div>
                </div>
                <div class=\"col-md-6 bottomgridimg\"><img alt=\"\" src=\"/pidev/web/images/about1.jpg\"></div>
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
                        <a href=\"images/p1.jpg\") }} class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
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
