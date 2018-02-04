<?php

/* ::/default/header.html.twig */
class __TwigTemplate_ba688282426ecaf7b7f8a65ed1e2096efd1817790f9d1c655dfbadeb3900f930 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "::/default/header.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c988af4a1cb0d6297dfae0b061fc5dd5b1befde259a3f073dba212289bf4e7f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c988af4a1cb0d6297dfae0b061fc5dd5b1befde259a3f073dba212289bf4e7f5->enter($__internal_c988af4a1cb0d6297dfae0b061fc5dd5b1befde259a3f073dba212289bf4e7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::/default/header.html.twig"));

        $__internal_2e2808f7f4feea36bd98c0e6ddf28344445adbb95235222db9f94d25eaec353e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e2808f7f4feea36bd98c0e6ddf28344445adbb95235222db9f94d25eaec353e->enter($__internal_2e2808f7f4feea36bd98c0e6ddf28344445adbb95235222db9f94d25eaec353e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::/default/header.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c988af4a1cb0d6297dfae0b061fc5dd5b1befde259a3f073dba212289bf4e7f5->leave($__internal_c988af4a1cb0d6297dfae0b061fc5dd5b1befde259a3f073dba212289bf4e7f5_prof);

        
        $__internal_2e2808f7f4feea36bd98c0e6ddf28344445adbb95235222db9f94d25eaec353e->leave($__internal_2e2808f7f4feea36bd98c0e6ddf28344445adbb95235222db9f94d25eaec353e_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_cfb1640e60fcbf886f1ca57f08b9e5e5f5cffe90c3a6d9766e55de528c1a931d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfb1640e60fcbf886f1ca57f08b9e5e5f5cffe90c3a6d9766e55de528c1a931d->enter($__internal_cfb1640e60fcbf886f1ca57f08b9e5e5f5cffe90c3a6d9766e55de528c1a931d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_15a42befaf461a3b0ac061cb4815227e7518c78fbdbfb9c36f30e611ae52bf25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15a42befaf461a3b0ac061cb4815227e7518c78fbdbfb9c36f30e611ae52bf25->enter($__internal_15a42befaf461a3b0ac061cb4815227e7518c78fbdbfb9c36f30e611ae52bf25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "
   <div class=\"sub-agile\">
            <div class=\"agile1\">
                <!-- navigation section -->
                <div>
                    <p><button id=\"trigger-overlay\" type=\"button\"><img alt=\"menu\" class=\"img-responsive\" src=\"";
        // line 8
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
        
        $__internal_15a42befaf461a3b0ac061cb4815227e7518c78fbdbfb9c36f30e611ae52bf25->leave($__internal_15a42befaf461a3b0ac061cb4815227e7518c78fbdbfb9c36f30e611ae52bf25_prof);

        
        $__internal_cfb1640e60fcbf886f1ca57f08b9e5e5f5cffe90c3a6d9766e55de528c1a931d->leave($__internal_cfb1640e60fcbf886f1ca57f08b9e5e5f5cffe90c3a6d9766e55de528c1a931d_prof);

    }

    public function getTemplateName()
    {
        return "::/default/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("  {% extends \"index.html.twig\" %}
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
        {% endblock %}", "::/default/header.html.twig", "C:\\wamp64\\www\\Esprit Entr'aide\\app/Resources\\views/default/header.html.twig");
    }
}
