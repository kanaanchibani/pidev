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
        $__internal_fc953c9c21c25b178933e4e9e37f1b0b537b0adf15694173587602eadcec8656 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc953c9c21c25b178933e4e9e37f1b0b537b0adf15694173587602eadcec8656->enter($__internal_fc953c9c21c25b178933e4e9e37f1b0b537b0adf15694173587602eadcec8656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_bda39f2ead8b13d1985ac10d2f925d4b9b76e56c85315d8b8ad1d8d2a69be69b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bda39f2ead8b13d1985ac10d2f925d4b9b76e56c85315d8b8ad1d8d2a69be69b->enter($__internal_bda39f2ead8b13d1985ac10d2f925d4b9b76e56c85315d8b8ad1d8d2a69be69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

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
        // line 487
        echo "</div>



<div class=\"section3\">
    ";
        // line 492
        $this->displayBlock('section3', $context, $blocks);
        // line 604
        echo "</div>




<div class=\"section4\">
    ";
        // line 610
        $this->displayBlock('section4', $context, $blocks);
        // line 677
        echo "</div>




<div class=\"section5\">
    ";
        // line 683
        $this->displayBlock('section5', $context, $blocks);
        // line 756
        echo "</div>


<div class=\"section6\">
    ";
        // line 760
        $this->displayBlock('section6', $context, $blocks);
        // line 808
        echo "</div>






</body>


<div class=\"section-footer\">
    ";
        // line 819
        $this->displayBlock('footer', $context, $blocks);
        // line 824
        echo "</div>

</html>

";
        
        $__internal_fc953c9c21c25b178933e4e9e37f1b0b537b0adf15694173587602eadcec8656->leave($__internal_fc953c9c21c25b178933e4e9e37f1b0b537b0adf15694173587602eadcec8656_prof);

        
        $__internal_bda39f2ead8b13d1985ac10d2f925d4b9b76e56c85315d8b8ad1d8d2a69be69b->leave($__internal_bda39f2ead8b13d1985ac10d2f925d4b9b76e56c85315d8b8ad1d8d2a69be69b_prof);

    }

    // line 74
    public function block_head($context, array $blocks = array())
    {
        $__internal_89d34673e39420f901053870a98cd7c770f6fba330aab42ac1ec57ffdbd10ea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89d34673e39420f901053870a98cd7c770f6fba330aab42ac1ec57ffdbd10ea2->enter($__internal_89d34673e39420f901053870a98cd7c770f6fba330aab42ac1ec57ffdbd10ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_85da2b0bb00f8fd59a413f46b9083fa35004ef69bc3091b6f217f68d5b03ecb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85da2b0bb00f8fd59a413f46b9083fa35004ef69bc3091b6f217f68d5b03ecb7->enter($__internal_85da2b0bb00f8fd59a413f46b9083fa35004ef69bc3091b6f217f68d5b03ecb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_85da2b0bb00f8fd59a413f46b9083fa35004ef69bc3091b6f217f68d5b03ecb7->leave($__internal_85da2b0bb00f8fd59a413f46b9083fa35004ef69bc3091b6f217f68d5b03ecb7_prof);

        
        $__internal_89d34673e39420f901053870a98cd7c770f6fba330aab42ac1ec57ffdbd10ea2->leave($__internal_89d34673e39420f901053870a98cd7c770f6fba330aab42ac1ec57ffdbd10ea2_prof);

    }

    // line 76
    public function block_meta($context, array $blocks = array())
    {
        $__internal_e59afdf0563cab6d85af7161200d3e133204fb4c9058bba3e83d6443d4d3a7f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e59afdf0563cab6d85af7161200d3e133204fb4c9058bba3e83d6443d4d3a7f9->enter($__internal_e59afdf0563cab6d85af7161200d3e133204fb4c9058bba3e83d6443d4d3a7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        $__internal_d0c9802679c7c60a39792dc418d1cf8519755b11c73c8b2e03e81437a5541423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0c9802679c7c60a39792dc418d1cf8519755b11c73c8b2e03e81437a5541423->enter($__internal_d0c9802679c7c60a39792dc418d1cf8519755b11c73c8b2e03e81437a5541423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 77
        echo "            <meta charset=\"utf-8\" />
        ";
        
        $__internal_d0c9802679c7c60a39792dc418d1cf8519755b11c73c8b2e03e81437a5541423->leave($__internal_d0c9802679c7c60a39792dc418d1cf8519755b11c73c8b2e03e81437a5541423_prof);

        
        $__internal_e59afdf0563cab6d85af7161200d3e133204fb4c9058bba3e83d6443d4d3a7f9->leave($__internal_e59afdf0563cab6d85af7161200d3e133204fb4c9058bba3e83d6443d4d3a7f9_prof);

    }

    // line 80
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6f282f99fd8513c3c59ee5d01e618320a53e697b6c2894085209742f17ff569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6f282f99fd8513c3c59ee5d01e618320a53e697b6c2894085209742f17ff569->enter($__internal_a6f282f99fd8513c3c59ee5d01e618320a53e697b6c2894085209742f17ff569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_87c216ca6d4a50af3fe5c240353b7ee07cb3482207ce08bc7fa2f361308177dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c216ca6d4a50af3fe5c240353b7ee07cb3482207ce08bc7fa2f361308177dd->enter($__internal_87c216ca6d4a50af3fe5c240353b7ee07cb3482207ce08bc7fa2f361308177dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Espace Etudiant 000";
        
        $__internal_87c216ca6d4a50af3fe5c240353b7ee07cb3482207ce08bc7fa2f361308177dd->leave($__internal_87c216ca6d4a50af3fe5c240353b7ee07cb3482207ce08bc7fa2f361308177dd_prof);

        
        $__internal_a6f282f99fd8513c3c59ee5d01e618320a53e697b6c2894085209742f17ff569->leave($__internal_a6f282f99fd8513c3c59ee5d01e618320a53e697b6c2894085209742f17ff569_prof);

    }

    // line 82
    public function block_style($context, array $blocks = array())
    {
        $__internal_c2376b0149ae5181490926cf6c9fe467c72a95fb5d3707181dfb6ee6a7d1a8c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2376b0149ae5181490926cf6c9fe467c72a95fb5d3707181dfb6ee6a7d1a8c4->enter($__internal_c2376b0149ae5181490926cf6c9fe467c72a95fb5d3707181dfb6ee6a7d1a8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_26c3b119df1bc0b02d3032c66a09d847418bcefaa60aff1a48d0a0ada9674aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26c3b119df1bc0b02d3032c66a09d847418bcefaa60aff1a48d0a0ada9674aa9->enter($__internal_26c3b119df1bc0b02d3032c66a09d847418bcefaa60aff1a48d0a0ada9674aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

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
        
        $__internal_26c3b119df1bc0b02d3032c66a09d847418bcefaa60aff1a48d0a0ada9674aa9->leave($__internal_26c3b119df1bc0b02d3032c66a09d847418bcefaa60aff1a48d0a0ada9674aa9_prof);

        
        $__internal_c2376b0149ae5181490926cf6c9fe467c72a95fb5d3707181dfb6ee6a7d1a8c4->leave($__internal_c2376b0149ae5181490926cf6c9fe467c72a95fb5d3707181dfb6ee6a7d1a8c4_prof);

    }

    // line 91
    public function block_script($context, array $blocks = array())
    {
        $__internal_7ef10cba6edc735bb6f01b238d85cacda3c94ea7d82469c5a7c47b3f649c8e0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ef10cba6edc735bb6f01b238d85cacda3c94ea7d82469c5a7c47b3f649c8e0a->enter($__internal_7ef10cba6edc735bb6f01b238d85cacda3c94ea7d82469c5a7c47b3f649c8e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_2ffcfedcc43ca31284c688f83aadce0a2b805d538f067c111ed50be95a7a220b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ffcfedcc43ca31284c688f83aadce0a2b805d538f067c111ed50be95a7a220b->enter($__internal_2ffcfedcc43ca31284c688f83aadce0a2b805d538f067c111ed50be95a7a220b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

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
        
        $__internal_2ffcfedcc43ca31284c688f83aadce0a2b805d538f067c111ed50be95a7a220b->leave($__internal_2ffcfedcc43ca31284c688f83aadce0a2b805d538f067c111ed50be95a7a220b_prof);

        
        $__internal_7ef10cba6edc735bb6f01b238d85cacda3c94ea7d82469c5a7c47b3f649c8e0a->leave($__internal_7ef10cba6edc735bb6f01b238d85cacda3c94ea7d82469c5a7c47b3f649c8e0a_prof);

    }

    // line 119
    public function block_header($context, array $blocks = array())
    {
        $__internal_0c86e0d3bac580ad950e7366368deb0d2beaa6de55da84f581696a96a61fbe39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c86e0d3bac580ad950e7366368deb0d2beaa6de55da84f581696a96a61fbe39->enter($__internal_0c86e0d3bac580ad950e7366368deb0d2beaa6de55da84f581696a96a61fbe39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_a7272a3df6c0322edc996a2ec46f2f420ca401c2551afee621befb6f0ffafbfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7272a3df6c0322edc996a2ec46f2f420ca401c2551afee621befb6f0ffafbfa->enter($__internal_a7272a3df6c0322edc996a2ec46f2f420ca401c2551afee621befb6f0ffafbfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_a7272a3df6c0322edc996a2ec46f2f420ca401c2551afee621befb6f0ffafbfa->leave($__internal_a7272a3df6c0322edc996a2ec46f2f420ca401c2551afee621befb6f0ffafbfa_prof);

        
        $__internal_0c86e0d3bac580ad950e7366368deb0d2beaa6de55da84f581696a96a61fbe39->leave($__internal_0c86e0d3bac580ad950e7366368deb0d2beaa6de55da84f581696a96a61fbe39_prof);

    }

    // line 215
    public function block_section1($context, array $blocks = array())
    {
        $__internal_a3b01f7983aab4c6c1bb8099b10ac4bbc3bdfc72118fcdcec4eea485a9afb15e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3b01f7983aab4c6c1bb8099b10ac4bbc3bdfc72118fcdcec4eea485a9afb15e->enter($__internal_a3b01f7983aab4c6c1bb8099b10ac4bbc3bdfc72118fcdcec4eea485a9afb15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section1"));

        $__internal_4d540bceb1dea3361126a1ff38103a7092e9ded29754e5508f47e73fd4704008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d540bceb1dea3361126a1ff38103a7092e9ded29754e5508f47e73fd4704008->enter($__internal_4d540bceb1dea3361126a1ff38103a7092e9ded29754e5508f47e73fd4704008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section1"));

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
        
        $__internal_4d540bceb1dea3361126a1ff38103a7092e9ded29754e5508f47e73fd4704008->leave($__internal_4d540bceb1dea3361126a1ff38103a7092e9ded29754e5508f47e73fd4704008_prof);

        
        $__internal_a3b01f7983aab4c6c1bb8099b10ac4bbc3bdfc72118fcdcec4eea485a9afb15e->leave($__internal_a3b01f7983aab4c6c1bb8099b10ac4bbc3bdfc72118fcdcec4eea485a9afb15e_prof);

    }

    // line 331
    public function block_section2($context, array $blocks = array())
    {
        $__internal_f4f68ad555d6a4a02489a9b114000f5ea42307e95d9973abfadf0ca5411f8a17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4f68ad555d6a4a02489a9b114000f5ea42307e95d9973abfadf0ca5411f8a17->enter($__internal_f4f68ad555d6a4a02489a9b114000f5ea42307e95d9973abfadf0ca5411f8a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        $__internal_cb1d9715f26790830b149d6fc8526d97a1bc5ca9ec6d1fa9d085ca8493076244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb1d9715f26790830b149d6fc8526d97a1bc5ca9ec6d1fa9d085ca8493076244->enter($__internal_cb1d9715f26790830b149d6fc8526d97a1bc5ca9ec6d1fa9d085ca8493076244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 332
        echo "
    <div class=\"about\" id=\"about\">
        <div class=\"container\">
            <div class=\"about-head text-center\">
                <h3>About</h3>
            </div>
            <div class=\"about-top-grids\">
                <div class=\"col-md-3 grid\">
                    <i aria-hidden=\"true\" class=\"fa fa-pencil\"></i>
                    <h3>Education-key to unlock door of freedom</h3>
                </div>
                <div class=\"col-md-3 grid\">
                    <i aria-hidden=\"true\" class=\"fa fa-book\"></i>
                    <h3>Education is the passport to the future</h3>
                </div>
                <div class=\"col-md-3 grid\">
                    <i aria-hidden=\"true\" class=\"fa fa-flask\"></i>
                    <h3>Education is the premise of the progress</h3>
                </div>
                <div class=\"col-md-3 grid\">
                    <i aria-hidden=\"true\" class=\"fa fa-graduation-cap\"></i>
                    <h3>Education is the most powerful weapon</h3>
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
        
        $__internal_cb1d9715f26790830b149d6fc8526d97a1bc5ca9ec6d1fa9d085ca8493076244->leave($__internal_cb1d9715f26790830b149d6fc8526d97a1bc5ca9ec6d1fa9d085ca8493076244_prof);

        
        $__internal_f4f68ad555d6a4a02489a9b114000f5ea42307e95d9973abfadf0ca5411f8a17->leave($__internal_f4f68ad555d6a4a02489a9b114000f5ea42307e95d9973abfadf0ca5411f8a17_prof);

    }

    // line 492
    public function block_section3($context, array $blocks = array())
    {
        $__internal_4735efb959f3ac2222ae93e8c8baa39d8d058567b79e77385ec51956acf436ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4735efb959f3ac2222ae93e8c8baa39d8d058567b79e77385ec51956acf436ff->enter($__internal_4735efb959f3ac2222ae93e8c8baa39d8d058567b79e77385ec51956acf436ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        $__internal_08cde9ff739f1df4115ac0fa495010fdfb73629a6af913a4209b6a462e65ca66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08cde9ff739f1df4115ac0fa495010fdfb73629a6af913a4209b6a462e65ca66->enter($__internal_08cde9ff739f1df4115ac0fa495010fdfb73629a6af913a4209b6a462e65ca66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 493
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
        
        $__internal_08cde9ff739f1df4115ac0fa495010fdfb73629a6af913a4209b6a462e65ca66->leave($__internal_08cde9ff739f1df4115ac0fa495010fdfb73629a6af913a4209b6a462e65ca66_prof);

        
        $__internal_4735efb959f3ac2222ae93e8c8baa39d8d058567b79e77385ec51956acf436ff->leave($__internal_4735efb959f3ac2222ae93e8c8baa39d8d058567b79e77385ec51956acf436ff_prof);

    }

    // line 610
    public function block_section4($context, array $blocks = array())
    {
        $__internal_f93c708b641541e47c58ee10f6a3e7ea62ce2b4be1889bf26cf96000d632a027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f93c708b641541e47c58ee10f6a3e7ea62ce2b4be1889bf26cf96000d632a027->enter($__internal_f93c708b641541e47c58ee10f6a3e7ea62ce2b4be1889bf26cf96000d632a027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section4"));

        $__internal_b0396d25771370764f5c1eabb970ba76cd634138627e670ce8052374631d190f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0396d25771370764f5c1eabb970ba76cd634138627e670ce8052374631d190f->enter($__internal_b0396d25771370764f5c1eabb970ba76cd634138627e670ce8052374631d190f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section4"));

        // line 611
        echo "        <section class=\"team\" id=\"team\">
            <div class=\"container\">
                <div class=\"about-head text-center \">
                    <h3>Meet our Professors</h3>
                </div>

                <div class=\"team-grid-top\">
                    <div class=\"col-md-3 team1\">
                        <div class=\"inner-team1\">
                            <img src=";
        // line 620
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
        // line 633
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
        // line 646
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
        // line 659
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
        
        $__internal_b0396d25771370764f5c1eabb970ba76cd634138627e670ce8052374631d190f->leave($__internal_b0396d25771370764f5c1eabb970ba76cd634138627e670ce8052374631d190f_prof);

        
        $__internal_f93c708b641541e47c58ee10f6a3e7ea62ce2b4be1889bf26cf96000d632a027->leave($__internal_f93c708b641541e47c58ee10f6a3e7ea62ce2b4be1889bf26cf96000d632a027_prof);

    }

    // line 683
    public function block_section5($context, array $blocks = array())
    {
        $__internal_c0c0e18a73a6dfabd07e8627f27b358228fe577d8b4db796628f438723e23bb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0c0e18a73a6dfabd07e8627f27b358228fe577d8b4db796628f438723e23bb3->enter($__internal_c0c0e18a73a6dfabd07e8627f27b358228fe577d8b4db796628f438723e23bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section5"));

        $__internal_1fff667d42ec1fda430e0e9149ab941fb9be219c1eb1dda9f328b582f3840d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fff667d42ec1fda430e0e9149ab941fb9be219c1eb1dda9f328b582f3840d30->enter($__internal_1fff667d42ec1fda430e0e9149ab941fb9be219c1eb1dda9f328b582f3840d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section5"));

        // line 684
        echo "        <div class=\"gallery\" id=\"gallery\">
            <div class=\"container\">
                <div class=\"about-head text-center \">
                    <h3>Gallery</h3>
                </div>
                <div class=\"gallery-info\">
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p1.jpg\") }} class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 692
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p2.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 697
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p3.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 702
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p4.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 707
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p4.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p5.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 712
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p5.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p6.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 717
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p6.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p7.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 722
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p7.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p8.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 727
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p8.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p9.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 732
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p9.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p10.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 737
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p10.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p11.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 742
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p11.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p12.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 747
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
        
        $__internal_1fff667d42ec1fda430e0e9149ab941fb9be219c1eb1dda9f328b582f3840d30->leave($__internal_1fff667d42ec1fda430e0e9149ab941fb9be219c1eb1dda9f328b582f3840d30_prof);

        
        $__internal_c0c0e18a73a6dfabd07e8627f27b358228fe577d8b4db796628f438723e23bb3->leave($__internal_c0c0e18a73a6dfabd07e8627f27b358228fe577d8b4db796628f438723e23bb3_prof);

    }

    // line 760
    public function block_section6($context, array $blocks = array())
    {
        $__internal_e4f7c0b33d0c5158058a20ab35caca415e3d3235439c0a20e70636af19cb3bd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4f7c0b33d0c5158058a20ab35caca415e3d3235439c0a20e70636af19cb3bd7->enter($__internal_e4f7c0b33d0c5158058a20ab35caca415e3d3235439c0a20e70636af19cb3bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section6"));

        $__internal_618a2701a3edb1bc580fbdac003b55b509cb41cdbed34763800a1332f435fff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_618a2701a3edb1bc580fbdac003b55b509cb41cdbed34763800a1332f435fff3->enter($__internal_618a2701a3edb1bc580fbdac003b55b509cb41cdbed34763800a1332f435fff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section6"));

        // line 761
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
        
        $__internal_618a2701a3edb1bc580fbdac003b55b509cb41cdbed34763800a1332f435fff3->leave($__internal_618a2701a3edb1bc580fbdac003b55b509cb41cdbed34763800a1332f435fff3_prof);

        
        $__internal_e4f7c0b33d0c5158058a20ab35caca415e3d3235439c0a20e70636af19cb3bd7->leave($__internal_e4f7c0b33d0c5158058a20ab35caca415e3d3235439c0a20e70636af19cb3bd7_prof);

    }

    // line 819
    public function block_footer($context, array $blocks = array())
    {
        $__internal_70697eb50068d43398d112be0ea4d3a89e878944448ed899fd72cb6c1e41d945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70697eb50068d43398d112be0ea4d3a89e878944448ed899fd72cb6c1e41d945->enter($__internal_70697eb50068d43398d112be0ea4d3a89e878944448ed899fd72cb6c1e41d945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_31e476fae69681c9b60854c5a38c23318e320956a8c5b65566b7e38f23fa07fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e476fae69681c9b60854c5a38c23318e320956a8c5b65566b7e38f23fa07fd->enter($__internal_31e476fae69681c9b60854c5a38c23318e320956a8c5b65566b7e38f23fa07fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 820
        echo "        <div class=\"copyright-agile\">
            <p>© 2018 All rights reserved | Design by <a href=\"#\">Davinci Coders</a></p>
        </div>
    ";
        
        $__internal_31e476fae69681c9b60854c5a38c23318e320956a8c5b65566b7e38f23fa07fd->leave($__internal_31e476fae69681c9b60854c5a38c23318e320956a8c5b65566b7e38f23fa07fd_prof);

        
        $__internal_70697eb50068d43398d112be0ea4d3a89e878944448ed899fd72cb6c1e41d945->leave($__internal_70697eb50068d43398d112be0ea4d3a89e878944448ed899fd72cb6c1e41d945_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1236 => 820,  1227 => 819,  1171 => 761,  1162 => 760,  1143 => 747,  1135 => 742,  1127 => 737,  1119 => 732,  1111 => 727,  1103 => 722,  1095 => 717,  1087 => 712,  1079 => 707,  1071 => 702,  1063 => 697,  1055 => 692,  1045 => 684,  1036 => 683,  1008 => 659,  992 => 646,  976 => 633,  960 => 620,  949 => 611,  940 => 610,  820 => 493,  811 => 492,  647 => 332,  638 => 331,  520 => 216,  511 => 215,  417 => 126,  409 => 120,  400 => 119,  380 => 103,  376 => 102,  372 => 101,  368 => 100,  364 => 99,  360 => 98,  356 => 97,  352 => 96,  348 => 95,  344 => 94,  340 => 93,  337 => 92,  328 => 91,  316 => 88,  312 => 87,  308 => 86,  304 => 85,  300 => 84,  295 => 83,  286 => 82,  268 => 80,  257 => 77,  248 => 76,  237 => 113,  235 => 91,  232 => 90,  230 => 82,  225 => 80,  222 => 79,  220 => 76,  217 => 75,  208 => 74,  194 => 824,  192 => 819,  179 => 808,  177 => 760,  171 => 756,  169 => 683,  161 => 677,  159 => 610,  151 => 604,  149 => 492,  142 => 487,  140 => 331,  132 => 325,  130 => 215,  123 => 210,  121 => 119,  115 => 115,  113 => 74,  38 => 1,);
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
            <div class=\"about-head text-center\">
                <h3>About</h3>
            </div>
            <div class=\"about-top-grids\">
                <div class=\"col-md-3 grid\">
                    <i aria-hidden=\"true\" class=\"fa fa-pencil\"></i>
                    <h3>Education-key to unlock door of freedom</h3>
                </div>
                <div class=\"col-md-3 grid\">
                    <i aria-hidden=\"true\" class=\"fa fa-book\"></i>
                    <h3>Education is the passport to the future</h3>
                </div>
                <div class=\"col-md-3 grid\">
                    <i aria-hidden=\"true\" class=\"fa fa-flask\"></i>
                    <h3>Education is the premise of the progress</h3>
                </div>
                <div class=\"col-md-3 grid\">
                    <i aria-hidden=\"true\" class=\"fa fa-graduation-cap\"></i>
                    <h3>Education is the most powerful weapon</h3>
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

", "default/index.html.twig", "C:\\wamp64\\www\\pidev\\app\\Resources\\views\\default\\index.html.twig");
    }
}
