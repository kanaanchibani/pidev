<?php

/* default/index.html.twig */
class __TwigTemplate_89be544c04df309b1844a99285a5f00503d2350f710540f94adb95501325a567 extends Twig_Template
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
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
    ";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 38
        echo "</head>


<div class=\"section-header\">
    ";
        // line 42
        $this->displayBlock('header', $context, $blocks);
        // line 133
        echo "</div>

<body>

<div class=\"section1\">
    ";
        // line 138
        $this->displayBlock('section1', $context, $blocks);
        // line 141
        echo "</div>




<div class=\"section2\">
    ";
        // line 147
        $this->displayBlock('section2', $context, $blocks);
        // line 150
        echo "</div>



<div class=\"section3\">
    ";
        // line 155
        $this->displayBlock('section3', $context, $blocks);
        // line 158
        echo "</div>




<div class=\"section4\">
    ";
        // line 164
        $this->displayBlock('section4', $context, $blocks);
        // line 167
        echo "</div>




<div class=\"section5\">
    ";
        // line 173
        $this->displayBlock('section5', $context, $blocks);
        // line 176
        echo "</div>





</body>


<div class=\"section-footer\">
    ";
        // line 186
        $this->displayBlock('footer', $context, $blocks);
        // line 189
        echo "</div>


</html>";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
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
        // line 36
        echo "
    ";
    }

    // line 5
    public function block_meta($context, array $blocks = array())
    {
        // line 6
        echo "            <meta charset=\"utf-8\" />
        ";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Espace Etudiant ";
    }

    // line 11
    public function block_style($context, array $blocks = array())
    {
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
    }

    // line 20
    public function block_script($context, array $blocks = array())
    {
        // line 21
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/uisearch.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/SmoothScroll.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/numscroller-1.0.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/nav.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/move-top.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/lightbox-plus-jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easing.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/classie.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>



        ";
    }

    // line 42
    public function block_header($context, array $blocks = array())
    {
        // line 43
        echo "

        <div class=\"sub-agile\">
            <div class=\"agile1\">
                <!-- navigation section -->
                <div>
                    <p><button id=\"trigger-overlay\" type=\"button\"><img alt=\"menu\" class=\"img-responsive\" src=\"";
        // line 49
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
                        <h1>Inspiring</h1>
                    </li>
                </ul></a>
            <div class=\"number\">
                <p><a class=\"scroll\" href=\"#contact\"><i aria-hidden=\"true\" class=\"fa fa-envelope\"></i></a></p>
                <p>+013 244 5566</p>
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
    }

    // line 138
    public function block_section1($context, array $blocks = array())
    {
        // line 139
        echo "        section 1
    ";
    }

    // line 147
    public function block_section2($context, array $blocks = array())
    {
        // line 148
        echo "        section 2
    ";
    }

    // line 155
    public function block_section3($context, array $blocks = array())
    {
        // line 156
        echo "        section 3
    ";
    }

    // line 164
    public function block_section4($context, array $blocks = array())
    {
        // line 165
        echo "        section 4
    ";
    }

    // line 173
    public function block_section5($context, array $blocks = array())
    {
        // line 174
        echo "        section 5
    ";
    }

    // line 186
    public function block_footer($context, array $blocks = array())
    {
        // line 187
        echo "        footer
    ";
    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  381 => 187,  378 => 186,  373 => 174,  370 => 173,  365 => 165,  362 => 164,  357 => 156,  354 => 155,  349 => 148,  346 => 147,  341 => 139,  338 => 138,  250 => 49,  242 => 43,  239 => 42,  230 => 31,  226 => 30,  222 => 29,  218 => 28,  214 => 27,  210 => 26,  206 => 25,  202 => 24,  198 => 23,  194 => 22,  189 => 21,  186 => 20,  180 => 17,  176 => 16,  172 => 15,  168 => 14,  164 => 13,  159 => 12,  156 => 11,  150 => 9,  145 => 6,  142 => 5,  137 => 36,  135 => 20,  132 => 19,  130 => 11,  125 => 9,  122 => 8,  120 => 5,  117 => 4,  114 => 3,  107 => 189,  105 => 186,  93 => 176,  91 => 173,  83 => 167,  81 => 164,  73 => 158,  71 => 155,  64 => 150,  62 => 147,  54 => 141,  52 => 138,  45 => 133,  43 => 42,  37 => 38,  35 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/index.html.twig", "C:\\wamp64\\www\\Esprit Entr'aide\\app\\Resources\\views\\default\\index.html.twig");
    }
}
