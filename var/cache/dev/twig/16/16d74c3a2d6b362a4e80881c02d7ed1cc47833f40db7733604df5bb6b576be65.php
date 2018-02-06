<?php

/* default/index.html.twig */
class __TwigTemplate_d7dee15485acb05b9f925a934870563bf9ba0d9b30d2d8d20e261fd8177704a9 extends Twig_Template
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
        $__internal_40b43d9dbe92609192e9805b553e0978bf1856c8ca639eae830b6fdafef194d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40b43d9dbe92609192e9805b553e0978bf1856c8ca639eae830b6fdafef194d6->enter($__internal_40b43d9dbe92609192e9805b553e0978bf1856c8ca639eae830b6fdafef194d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_8b314cabbdcd9718e723192ee03383cb87d6fa82e9c5ed5771e33e2737629da0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b314cabbdcd9718e723192ee03383cb87d6fa82e9c5ed5771e33e2737629da0->enter($__internal_8b314cabbdcd9718e723192ee03383cb87d6fa82e9c5ed5771e33e2737629da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

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
        // line 191
        echo "</head>


<div class=\"section-header\">
    ";
        // line 195
        $this->displayBlock('header', $context, $blocks);
        // line 218
        echo "</div>
<body>

<div class=\"section1\">
    ";
        // line 222
        $this->displayBlock('section1', $context, $blocks);
        // line 332
        echo "</div>




<div class=\"section2\">
    ";
        // line 338
        $this->displayBlock('section2', $context, $blocks);
        // line 493
        echo "</div>




<div class=\"section3\">
    ";
        // line 499
        $this->displayBlock('section3', $context, $blocks);
        // line 607
        echo "</div>








<div class=\"section5\">
    ";
        // line 617
        $this->displayBlock('section5', $context, $blocks);
        // line 690
        echo "</div>


<div class=\"section6\">
    ";
        // line 694
        $this->displayBlock('section6', $context, $blocks);
        // line 742
        echo "</div>






</body>


<div class=\"section-footer\">
    ";
        // line 753
        $this->displayBlock('footer', $context, $blocks);
        // line 758
        echo "</div>

</html>

";
        
        $__internal_40b43d9dbe92609192e9805b553e0978bf1856c8ca639eae830b6fdafef194d6->leave($__internal_40b43d9dbe92609192e9805b553e0978bf1856c8ca639eae830b6fdafef194d6_prof);

        
        $__internal_8b314cabbdcd9718e723192ee03383cb87d6fa82e9c5ed5771e33e2737629da0->leave($__internal_8b314cabbdcd9718e723192ee03383cb87d6fa82e9c5ed5771e33e2737629da0_prof);

    }

    // line 74
    public function block_head($context, array $blocks = array())
    {
        $__internal_9e6ead87708b159a7e1af89d665ab75864c1e9baeef6f73d57740ea5efcba4fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e6ead87708b159a7e1af89d665ab75864c1e9baeef6f73d57740ea5efcba4fe->enter($__internal_9e6ead87708b159a7e1af89d665ab75864c1e9baeef6f73d57740ea5efcba4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ddbd41463c1f8d89c45a90881830699a98f1d19c4c55a4fb98aa5b7a55407d07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddbd41463c1f8d89c45a90881830699a98f1d19c4c55a4fb98aa5b7a55407d07->enter($__internal_ddbd41463c1f8d89c45a90881830699a98f1d19c4c55a4fb98aa5b7a55407d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        // line 166
        echo "
        ";
        // line 167
        $this->displayBlock('script', $context, $blocks);
        // line 189
        echo "
    ";
        
        $__internal_ddbd41463c1f8d89c45a90881830699a98f1d19c4c55a4fb98aa5b7a55407d07->leave($__internal_ddbd41463c1f8d89c45a90881830699a98f1d19c4c55a4fb98aa5b7a55407d07_prof);

        
        $__internal_9e6ead87708b159a7e1af89d665ab75864c1e9baeef6f73d57740ea5efcba4fe->leave($__internal_9e6ead87708b159a7e1af89d665ab75864c1e9baeef6f73d57740ea5efcba4fe_prof);

    }

    // line 76
    public function block_meta($context, array $blocks = array())
    {
        $__internal_1123726d0c54eff048d4d9fd9cc90cc504ace61ea623987b7c0ad99e170e91fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1123726d0c54eff048d4d9fd9cc90cc504ace61ea623987b7c0ad99e170e91fc->enter($__internal_1123726d0c54eff048d4d9fd9cc90cc504ace61ea623987b7c0ad99e170e91fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        $__internal_004a6e9b6df97e56d95fce353dd8fe9fb413c7fd8d6c6fa78e0259ce859d9d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_004a6e9b6df97e56d95fce353dd8fe9fb413c7fd8d6c6fa78e0259ce859d9d6e->enter($__internal_004a6e9b6df97e56d95fce353dd8fe9fb413c7fd8d6c6fa78e0259ce859d9d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 77
        echo "            <meta charset=\"utf-8\" />
        ";
        
        $__internal_004a6e9b6df97e56d95fce353dd8fe9fb413c7fd8d6c6fa78e0259ce859d9d6e->leave($__internal_004a6e9b6df97e56d95fce353dd8fe9fb413c7fd8d6c6fa78e0259ce859d9d6e_prof);

        
        $__internal_1123726d0c54eff048d4d9fd9cc90cc504ace61ea623987b7c0ad99e170e91fc->leave($__internal_1123726d0c54eff048d4d9fd9cc90cc504ace61ea623987b7c0ad99e170e91fc_prof);

    }

    // line 80
    public function block_title($context, array $blocks = array())
    {
        $__internal_0eb48773a2c6fca82354e8267ae7fcad7f445f10b4db9ca9a3d08d106dbb3874 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eb48773a2c6fca82354e8267ae7fcad7f445f10b4db9ca9a3d08d106dbb3874->enter($__internal_0eb48773a2c6fca82354e8267ae7fcad7f445f10b4db9ca9a3d08d106dbb3874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cf5e5e916d32157b029a5a301f2dcaa4d292df3240809dd791cba8dc618bd207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf5e5e916d32157b029a5a301f2dcaa4d292df3240809dd791cba8dc618bd207->enter($__internal_cf5e5e916d32157b029a5a301f2dcaa4d292df3240809dd791cba8dc618bd207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Espace Etudiant ";
        
        $__internal_cf5e5e916d32157b029a5a301f2dcaa4d292df3240809dd791cba8dc618bd207->leave($__internal_cf5e5e916d32157b029a5a301f2dcaa4d292df3240809dd791cba8dc618bd207_prof);

        
        $__internal_0eb48773a2c6fca82354e8267ae7fcad7f445f10b4db9ca9a3d08d106dbb3874->leave($__internal_0eb48773a2c6fca82354e8267ae7fcad7f445f10b4db9ca9a3d08d106dbb3874_prof);

    }

    // line 82
    public function block_style($context, array $blocks = array())
    {
        $__internal_f390540cf715a8df5903400a0a69b4681e165477674d5a123b6dca7520053833 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f390540cf715a8df5903400a0a69b4681e165477674d5a123b6dca7520053833->enter($__internal_f390540cf715a8df5903400a0a69b4681e165477674d5a123b6dca7520053833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_ed8b6974d96774ec6be9f4eaa782cc76038e31426a27485b02f4fdc09a981cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed8b6974d96774ec6be9f4eaa782cc76038e31426a27485b02f4fdc09a981cc6->enter($__internal_ed8b6974d96774ec6be9f4eaa782cc76038e31426a27485b02f4fdc09a981cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

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
        <style>
            .middlebarmenu {
                vertical-align: middle;
                padding-top: 43px;
                /* display: table-column-group; */
            }

            @import url(https://fonts.googleapis.com/css?family=Raleway:400,500);
            .snip1189 {
                font-family: 'Raleway', Arial, sans-serif;
                text-align: center;
                text-transform: uppercase;
                font-weight: 500;
                letter-spacing: 1px;
            }
            .snip1189 * {
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-transition: all 0.35s ease;
                transition: all 0.35s ease;
            }
            .snip1189 li {
                display: inline-block;
                list-style: outside none none;
                margin: 0 1em;
                padding: 0;
            }
            .snip1189 a {
                padding: 0.5em 0.8em;
                margin: 0.2em 0;
                display: block;
                color: rgb(115, 16, 9);
                position: relative;
                text-decoration: none;
            }
            .snip1189 a:before,
            .snip1189 a:after {
                height: 14px;
                width: 14px;
                position: absolute;
                content: '';
                -webkit-transition: all 0.35s ease;
                transition: all 0.35s ease;
                opacity: 0;
            }
            .snip1189 a:before {
                left: 0;
                top: 0;
                border-left: 3px solid #c0392b;
                border-top: 3px solid #c0392b;
                -webkit-transform: translate(100%, 50%);
                transform: translate(100%, 50%);
            }
            .snip1189 a:after {
                right: 0;
                bottom: 0;
                border-right: 3px solid #c0392b;
                border-bottom: 3px solid #c0392b;
                -webkit-transform: translate(-100%, -50%);
                transform: translate(-100%, -50%);
            }
            .snip1189 a:hover,
            .snip1189 .current a {
                color: brown;
            }
            .snip1189 a:hover:before,
            .snip1189 .current a:before,
            .snip1189 a:hover:after,
            .snip1189 .current a:after {
                -webkit-transform: translate(0%, 0%);
                transform: translate(0%, 0%);
                opacity: 1;
            }
            /* Demo purposes only */

        </style>
        ";
        
        $__internal_ed8b6974d96774ec6be9f4eaa782cc76038e31426a27485b02f4fdc09a981cc6->leave($__internal_ed8b6974d96774ec6be9f4eaa782cc76038e31426a27485b02f4fdc09a981cc6_prof);

        
        $__internal_f390540cf715a8df5903400a0a69b4681e165477674d5a123b6dca7520053833->leave($__internal_f390540cf715a8df5903400a0a69b4681e165477674d5a123b6dca7520053833_prof);

    }

    // line 167
    public function block_script($context, array $blocks = array())
    {
        $__internal_1e68361c728470c59a83cd2a7579fee877fa900e30520979bf333d13545e1b4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e68361c728470c59a83cd2a7579fee877fa900e30520979bf333d13545e1b4c->enter($__internal_1e68361c728470c59a83cd2a7579fee877fa900e30520979bf333d13545e1b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_e91afb68785a303cf3c473f6a4e167a9ba075457b04c0bf27f4c64102c448ad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e91afb68785a303cf3c473f6a4e167a9ba075457b04c0bf27f4c64102c448ad8->enter($__internal_e91afb68785a303cf3c473f6a4e167a9ba075457b04c0bf27f4c64102c448ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 168
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/uisearch.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/SmoothScroll.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/numscroller-1.0.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/nav.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/move-top.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/lightbox-plus-jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easing.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/classie.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>

    <script>
    </script>





    ";
        
        $__internal_e91afb68785a303cf3c473f6a4e167a9ba075457b04c0bf27f4c64102c448ad8->leave($__internal_e91afb68785a303cf3c473f6a4e167a9ba075457b04c0bf27f4c64102c448ad8_prof);

        
        $__internal_1e68361c728470c59a83cd2a7579fee877fa900e30520979bf333d13545e1b4c->leave($__internal_1e68361c728470c59a83cd2a7579fee877fa900e30520979bf333d13545e1b4c_prof);

    }

    // line 195
    public function block_header($context, array $blocks = array())
    {
        $__internal_a02310bc200a5875d37da33f15034e1db0b26828c57e0968526864c9e43a3eb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a02310bc200a5875d37da33f15034e1db0b26828c57e0968526864c9e43a3eb1->enter($__internal_a02310bc200a5875d37da33f15034e1db0b26828c57e0968526864c9e43a3eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_b57fae5ef2091f34aae9306e30f51775327ed9ab8b80b5fb9b305225b08a21bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b57fae5ef2091f34aae9306e30f51775327ed9ab8b80b5fb9b305225b08a21bb->enter($__internal_b57fae5ef2091f34aae9306e30f51775327ed9ab8b80b5fb9b305225b08a21bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 196
        echo "        <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
                <div class=\"col-md-2\">
                    <img src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/abcd.png"), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-md-8 middlebarmenu\">
                    <ul class=\"snip1189\">
                        <li class=\"current\"><a href=\"#\">Home</a></li>
                        <li><a href=\"#\">Events</a></li>
                        <li><a href=\"#\">Club</a></li>
                        <li><a href=\"#\">Docs</a></li>
                        <li><a href=\"#\">Spotted</a></li>

                    </ul>
                </div>
                <div class=\"col-md-2\">C</div>
            </div>
        </nav>



    ";
        
        $__internal_b57fae5ef2091f34aae9306e30f51775327ed9ab8b80b5fb9b305225b08a21bb->leave($__internal_b57fae5ef2091f34aae9306e30f51775327ed9ab8b80b5fb9b305225b08a21bb_prof);

        
        $__internal_a02310bc200a5875d37da33f15034e1db0b26828c57e0968526864c9e43a3eb1->leave($__internal_a02310bc200a5875d37da33f15034e1db0b26828c57e0968526864c9e43a3eb1_prof);

    }

    // line 222
    public function block_section1($context, array $blocks = array())
    {
        $__internal_923cc6a95d7ba133cc1c1d4e0923a6b908b54ff50dbe223c8340aa2b3cd93915 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_923cc6a95d7ba133cc1c1d4e0923a6b908b54ff50dbe223c8340aa2b3cd93915->enter($__internal_923cc6a95d7ba133cc1c1d4e0923a6b908b54ff50dbe223c8340aa2b3cd93915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section1"));

        $__internal_e48e64957de5853f57f90ac9099ebb75965580d5404b88994212b34f532a156a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e48e64957de5853f57f90ac9099ebb75965580d5404b88994212b34f532a156a->enter($__internal_e48e64957de5853f57f90ac9099ebb75965580d5404b88994212b34f532a156a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section1"));

        // line 223
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
        
        $__internal_e48e64957de5853f57f90ac9099ebb75965580d5404b88994212b34f532a156a->leave($__internal_e48e64957de5853f57f90ac9099ebb75965580d5404b88994212b34f532a156a_prof);

        
        $__internal_923cc6a95d7ba133cc1c1d4e0923a6b908b54ff50dbe223c8340aa2b3cd93915->leave($__internal_923cc6a95d7ba133cc1c1d4e0923a6b908b54ff50dbe223c8340aa2b3cd93915_prof);

    }

    // line 338
    public function block_section2($context, array $blocks = array())
    {
        $__internal_71777a745cc191a774823bed89b14e4521515d67bde9a7f3f680b693a26501a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71777a745cc191a774823bed89b14e4521515d67bde9a7f3f680b693a26501a2->enter($__internal_71777a745cc191a774823bed89b14e4521515d67bde9a7f3f680b693a26501a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        $__internal_2825dbdbb51464bb46facb8b202b392a0f40a4534994b41aa616fe1dfaca37d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2825dbdbb51464bb46facb8b202b392a0f40a4534994b41aa616fe1dfaca37d4->enter($__internal_2825dbdbb51464bb46facb8b202b392a0f40a4534994b41aa616fe1dfaca37d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 339
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
        
        $__internal_2825dbdbb51464bb46facb8b202b392a0f40a4534994b41aa616fe1dfaca37d4->leave($__internal_2825dbdbb51464bb46facb8b202b392a0f40a4534994b41aa616fe1dfaca37d4_prof);

        
        $__internal_71777a745cc191a774823bed89b14e4521515d67bde9a7f3f680b693a26501a2->leave($__internal_71777a745cc191a774823bed89b14e4521515d67bde9a7f3f680b693a26501a2_prof);

    }

    // line 499
    public function block_section3($context, array $blocks = array())
    {
        $__internal_538b7fa14bca72b9324fa3f2a3b77539a80dd8f45855514a6b479c84796b21e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_538b7fa14bca72b9324fa3f2a3b77539a80dd8f45855514a6b479c84796b21e3->enter($__internal_538b7fa14bca72b9324fa3f2a3b77539a80dd8f45855514a6b479c84796b21e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        $__internal_96f742e024145faaba8a25585a072dc4a3edb39126fc8f1e9f82ee0d126b8cde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f742e024145faaba8a25585a072dc4a3edb39126fc8f1e9f82ee0d126b8cde->enter($__internal_96f742e024145faaba8a25585a072dc4a3edb39126fc8f1e9f82ee0d126b8cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 500
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
        
        $__internal_96f742e024145faaba8a25585a072dc4a3edb39126fc8f1e9f82ee0d126b8cde->leave($__internal_96f742e024145faaba8a25585a072dc4a3edb39126fc8f1e9f82ee0d126b8cde_prof);

        
        $__internal_538b7fa14bca72b9324fa3f2a3b77539a80dd8f45855514a6b479c84796b21e3->leave($__internal_538b7fa14bca72b9324fa3f2a3b77539a80dd8f45855514a6b479c84796b21e3_prof);

    }

    // line 617
    public function block_section5($context, array $blocks = array())
    {
        $__internal_8bca2399400b6bb0f0640ff5235b0900d5c5b907715e23f08de43c1948502e73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bca2399400b6bb0f0640ff5235b0900d5c5b907715e23f08de43c1948502e73->enter($__internal_8bca2399400b6bb0f0640ff5235b0900d5c5b907715e23f08de43c1948502e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section5"));

        $__internal_54418166d92aaf1e9d0ecfe51f26c506e2a68a3aa94d9ce4c7a404a8301278cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54418166d92aaf1e9d0ecfe51f26c506e2a68a3aa94d9ce4c7a404a8301278cf->enter($__internal_54418166d92aaf1e9d0ecfe51f26c506e2a68a3aa94d9ce4c7a404a8301278cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section5"));

        // line 618
        echo "        <div class=\"gallery\" id=\"gallery\">
            <div class=\"container\">
                <div class=\"about-head text-center \">
                    <h3>La galerie des évènements</h3>
                </div>
                <div class=\"gallery-info\">
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p1.jpg\") }} class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 626
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p2.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 631
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p3.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 636
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p4.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 641
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p4.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p5.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 646
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p5.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p6.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 651
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p6.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p7.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 656
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p7.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p8.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 661
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p8.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p9.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 666
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p9.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p10.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 671
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p10.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p11.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 676
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p11.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p12.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 681
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
        
        $__internal_54418166d92aaf1e9d0ecfe51f26c506e2a68a3aa94d9ce4c7a404a8301278cf->leave($__internal_54418166d92aaf1e9d0ecfe51f26c506e2a68a3aa94d9ce4c7a404a8301278cf_prof);

        
        $__internal_8bca2399400b6bb0f0640ff5235b0900d5c5b907715e23f08de43c1948502e73->leave($__internal_8bca2399400b6bb0f0640ff5235b0900d5c5b907715e23f08de43c1948502e73_prof);

    }

    // line 694
    public function block_section6($context, array $blocks = array())
    {
        $__internal_31375ce0e2785b9f30ef8e756b40377cbc3964b9c1ca50d4ae5c73f2f68bec90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31375ce0e2785b9f30ef8e756b40377cbc3964b9c1ca50d4ae5c73f2f68bec90->enter($__internal_31375ce0e2785b9f30ef8e756b40377cbc3964b9c1ca50d4ae5c73f2f68bec90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section6"));

        $__internal_8d802a49d20fa10baa43f44e3f6705355425f9c789af9ad34cd6f9ef6ae3fff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d802a49d20fa10baa43f44e3f6705355425f9c789af9ad34cd6f9ef6ae3fff4->enter($__internal_8d802a49d20fa10baa43f44e3f6705355425f9c789af9ad34cd6f9ef6ae3fff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section6"));

        // line 695
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
        
        $__internal_8d802a49d20fa10baa43f44e3f6705355425f9c789af9ad34cd6f9ef6ae3fff4->leave($__internal_8d802a49d20fa10baa43f44e3f6705355425f9c789af9ad34cd6f9ef6ae3fff4_prof);

        
        $__internal_31375ce0e2785b9f30ef8e756b40377cbc3964b9c1ca50d4ae5c73f2f68bec90->leave($__internal_31375ce0e2785b9f30ef8e756b40377cbc3964b9c1ca50d4ae5c73f2f68bec90_prof);

    }

    // line 753
    public function block_footer($context, array $blocks = array())
    {
        $__internal_cbd341288b187397ea8793fafc6384f8f58812f072eefe85a7c3e80f20fa9f4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbd341288b187397ea8793fafc6384f8f58812f072eefe85a7c3e80f20fa9f4c->enter($__internal_cbd341288b187397ea8793fafc6384f8f58812f072eefe85a7c3e80f20fa9f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_933ae559898ef651c9458a210eb66d899053660cfe2002c93d2c7237174a8ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_933ae559898ef651c9458a210eb66d899053660cfe2002c93d2c7237174a8ead->enter($__internal_933ae559898ef651c9458a210eb66d899053660cfe2002c93d2c7237174a8ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 754
        echo "        <div class=\"copyright-agile\">
            <p>© 2018 All rights reserved | Design by <a href=\"#\">Davinci Coders</a></p>
        </div>
    ";
        
        $__internal_933ae559898ef651c9458a210eb66d899053660cfe2002c93d2c7237174a8ead->leave($__internal_933ae559898ef651c9458a210eb66d899053660cfe2002c93d2c7237174a8ead_prof);

        
        $__internal_cbd341288b187397ea8793fafc6384f8f58812f072eefe85a7c3e80f20fa9f4c->leave($__internal_cbd341288b187397ea8793fafc6384f8f58812f072eefe85a7c3e80f20fa9f4c_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1136 => 754,  1127 => 753,  1071 => 695,  1062 => 694,  1043 => 681,  1035 => 676,  1027 => 671,  1019 => 666,  1011 => 661,  1003 => 656,  995 => 651,  987 => 646,  979 => 641,  971 => 636,  963 => 631,  955 => 626,  945 => 618,  936 => 617,  820 => 500,  811 => 499,  648 => 339,  639 => 338,  521 => 223,  512 => 222,  483 => 199,  478 => 196,  469 => 195,  449 => 179,  445 => 178,  441 => 177,  437 => 176,  433 => 175,  429 => 174,  425 => 173,  421 => 172,  417 => 171,  413 => 170,  409 => 169,  406 => 168,  397 => 167,  309 => 88,  305 => 87,  301 => 86,  297 => 85,  293 => 84,  288 => 83,  279 => 82,  261 => 80,  250 => 77,  241 => 76,  230 => 189,  228 => 167,  225 => 166,  223 => 82,  218 => 80,  215 => 79,  213 => 76,  210 => 75,  201 => 74,  187 => 758,  185 => 753,  172 => 742,  170 => 694,  164 => 690,  162 => 617,  150 => 607,  148 => 499,  140 => 493,  138 => 338,  130 => 332,  128 => 222,  122 => 218,  120 => 195,  114 => 191,  112 => 74,  37 => 1,);
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

        <title>{% block title %}Espace Etudiant {% endblock %} </title>

        {% block style %}
            <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/nav.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/lightbox.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/flexslider.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">
        <style>
            .middlebarmenu {
                vertical-align: middle;
                padding-top: 43px;
                /* display: table-column-group; */
            }

            @import url(https://fonts.googleapis.com/css?family=Raleway:400,500);
            .snip1189 {
                font-family: 'Raleway', Arial, sans-serif;
                text-align: center;
                text-transform: uppercase;
                font-weight: 500;
                letter-spacing: 1px;
            }
            .snip1189 * {
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-transition: all 0.35s ease;
                transition: all 0.35s ease;
            }
            .snip1189 li {
                display: inline-block;
                list-style: outside none none;
                margin: 0 1em;
                padding: 0;
            }
            .snip1189 a {
                padding: 0.5em 0.8em;
                margin: 0.2em 0;
                display: block;
                color: rgb(115, 16, 9);
                position: relative;
                text-decoration: none;
            }
            .snip1189 a:before,
            .snip1189 a:after {
                height: 14px;
                width: 14px;
                position: absolute;
                content: '';
                -webkit-transition: all 0.35s ease;
                transition: all 0.35s ease;
                opacity: 0;
            }
            .snip1189 a:before {
                left: 0;
                top: 0;
                border-left: 3px solid #c0392b;
                border-top: 3px solid #c0392b;
                -webkit-transform: translate(100%, 50%);
                transform: translate(100%, 50%);
            }
            .snip1189 a:after {
                right: 0;
                bottom: 0;
                border-right: 3px solid #c0392b;
                border-bottom: 3px solid #c0392b;
                -webkit-transform: translate(-100%, -50%);
                transform: translate(-100%, -50%);
            }
            .snip1189 a:hover,
            .snip1189 .current a {
                color: brown;
            }
            .snip1189 a:hover:before,
            .snip1189 .current a:before,
            .snip1189 a:hover:after,
            .snip1189 .current a:after {
                -webkit-transform: translate(0%, 0%);
                transform: translate(0%, 0%);
                opacity: 1;
            }
            /* Demo purposes only */

        </style>
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
        <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
                <div class=\"col-md-2\">
                    <img src=\"{{ asset(\"images/abcd.png\") }}\">
                </div>
                <div class=\"col-md-8 middlebarmenu\">
                    <ul class=\"snip1189\">
                        <li class=\"current\"><a href=\"#\">Home</a></li>
                        <li><a href=\"#\">Events</a></li>
                        <li><a href=\"#\">Club</a></li>
                        <li><a href=\"#\">Docs</a></li>
                        <li><a href=\"#\">Spotted</a></li>

                    </ul>
                </div>
                <div class=\"col-md-2\">C</div>
            </div>
        </nav>



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
