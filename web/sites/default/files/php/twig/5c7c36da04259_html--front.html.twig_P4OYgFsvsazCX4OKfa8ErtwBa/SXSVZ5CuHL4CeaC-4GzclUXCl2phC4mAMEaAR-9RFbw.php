<?php

/* themes/codesurfboards/templates/layout/html--front.html.twig */
class __TwigTemplate_9ef2e483a22b60a20625b67a21bce45cc4c013d61a4611fc8ce75e9ea1c8a11b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $tags = [];
        $filters = ["safe_join" => 35, "trans" => 51];
        $functions = [];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                [],
                ['safe_join', 'trans'],
                []
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 26
        echo "
<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        <link href=\"https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900\" rel=\"stylesheet\">
        <head-placeholder token=\"";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true));
        echo "\">
        <title>";
        // line 35
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, ($context["head_title"] ?? null), " | ")));
        echo "</title>
        <css-placeholder token=\"";
        // line 36
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true));
        echo "\">
        <js-placeholder token=\"";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true));
        echo "\">
    </head>
    
    <body>
    ";
        // line 41
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_top"] ?? null), "html", null, true));
        echo "
        <header class=\"header\">
            <div class=\"header__logo-box\">
                <img src=\"";
        // line 44
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/img/logo-white.png\" alt=\"Logo\" class=\"header__logo\">
            </div>

            <div class=\"header__text-box\">
                <h1 class=\"heading-primary\">
                    <span class=\"heading-primary--main\" style=\"line-height: 6.5rem; margin-top: 7.5rem;\"> ";
        // line 49
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["head_title"] ?? null), "name", []), "html", null, true));
        echo " </span>
                    <span class=\"heading-primary--sub\">
                        ";
        // line 51
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Design/Entrepreneurial bootcamp")));
        echo "
                    </span>
                </h1>

                <a href=\"#section-about\" class=\"btn btn--white btn--animated\">";
        // line 55
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Learn more about our programmes")));
        echo "</a>
            </div>
        </header>

        <main>
            <section class=\"section-about\">
                <div class=\"u-center-text u-margin-bottom-big\">
                    <h2 class=\"heading-secondary\">
                        ";
        // line 63
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Learn to develop your business and relax in beautiful Morrocco.")));
        echo "
                    </h2>
                </div>

                <div class=\"row\">
                    <div class=\"col-1-of-2\">
                        <h3 class=\"heading-tertiary u-margin-bottom-small\">We will help you to take control of your website.</h3>
                        <p class=\"paragraph\">
                            Change your life, empower youself by learning the best techniques to take control of your website and learn to love a new sport. 
                            We will teach you how to use Wordpress, PHP and Front-End technologies to set you free
                        </p>

                        <h3 class=\"heading-tertiary u-margin-bottom-small\">Live adventures like you never have before</h3>
                        <p class=\"paragraph\">
                            Learn to surf and adopt a new lifestyle.
                        </p>

                        <a href=\"#\" class=\"btn-text\">Learn more &rarr;</a>
                    </div>
                    <div class=\"col-1-of-2\">
                        <div class=\"composition\">
                            <img src=\"";
        // line 84
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/img/morroco_patio.jpg\" alt=\"Photo 1\" class=\"composition__photo composition__photo--p1\">
                            <img src=\"";
        // line 85
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/img/IMG_0215.jpg\" alt=\"Photo 2\" class=\"composition__photo composition__photo--p2\">
                            <img src=\"";
        // line 86
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/img/Spiders 09.12.16-0026.jpg\" alt=\"Photo 3\" class=\"composition__photo composition__photo--p3\">
                        </div>
                    </div>
                </div>
            </section>

            <section class=\"section-features\">

                <h2 class=\"heading-secondary heading-secondary--new --white\">All included programme.</h2>
                <p class=\"paragraph --white\">Our programme includes everything, from picking you up at the air port, housing, meals and of course coding and surfing lessons.</p>
                <div class=\"row\">
                    <div class=\"col-1-of-4\">
                        <div class=\"feature-box\">
                            <i class=\"feature-box__icon icon-basic-home\"></i>
                            <h3 class=\"heading-tertiary u-margin-bottom-small\">Housing</h3>
                            <p class=\"feature-box__text\">
                                text
                            </p>
                        </div>
                    </div>

                    <div class=\"col-1-of-4\">
                        <div class=\"feature-box\">
                            <i class=\"feature-box__icon icon-basic-compass\"></i>
                            <h3 class=\"heading-tertiary u-margin-bottom-small\">Surf Classes</h3>
                            <p class=\"feature-box__text\">
                                text
                            </p>
                        </div>
                    </div>

                    <div class=\"col-1-of-4\">
                        <div class=\"feature-box\">
                            <i class=\"feature-box__icon icon-basic-map\"></i>
                            <h3 class=\"heading-tertiary u-margin-bottom-small\">Air transport</h3>
                             <p class=\"feature-box__text\">
                                text
                            </p>
                        </div>
                    </div>

                    <div class=\"col-1-of-4\">
                        <div class=\"feature-box\">
                            <i class=\"feature-box__icon icon-basic-laptop\"></i>
                            <h3 class=\"heading-tertiary u-margin-bottom-small\">Dev Classes</h3>
                            <p class=\"feature-box__text\">
                                text
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class=\"section-tours\" id=\"section-tours\">
                <div class=\"u-center-text u-margin-bottom-big\">
                    <h2 class=\"heading-secondary\">
                        Our 3 Week Programe.
                    </h2>
                    <p>
                    Check out our comprehensive coding programme. 
                    Taking you from novice to experienced in just 3 weeks
                    </p>
                </div>

                <div class=\"row\">
                    <div class=\"col-1-of-3\">
                       <div class=\"card\">
                           <div class=\"card__side card__side--front\">
                                <div class=\"card__picture card__picture--1\">
                                    &nbsp;
                                </div>
                                <h4 class=\"card__heading\">
                                    <span class=\"card__heading-span card__heading-span--1\">Programming 101</span>
                                </h4>
                                <div class=\"card__details\">
                                    <ul>
                                        <li>Setup dev environment</li>
                                        <li>Intro to Programming</li>
                                        <li>WordPress setup</li>
                                        <li>Installing Wordpress Modules</li>
                                        <li>Wordpress SEO</li>
                                    </ul>
                                </div>
                           </div>
                           <div class=\"card__side card__side--back card__side--back-1\">
                                <div class=\"card__cta\">
                                    <div class=\"card__price-box\">
                                        <p class=\"card__price-only\">
                                            On the first week we will teach you how to organize content and setup your own development environment:
                                        </p>
                                        ";
        // line 177
        echo "                                    </div>
                                    <a href=\"#contact-form\" class=\"btn btn--white\">Sign up now!</a>
                                </div>
                            </div>
                       </div>
                    </div>


                    <div class=\"col-1-of-3\">
                        <div class=\"card\">
                            <div class=\"card__side card__side--front\">
                                <div class=\"card__picture card__picture--2\">
                                    &nbsp;
                                </div>
                                <h4 class=\"card__heading\">
                                    <span class=\"card__heading-span card__heading-span--2\">Front-End</span>
                                </h4>

                                <div class=\"card__details\">
                                    <ul>                            
                                        <li>HTML &amp; SCSS</li>
                                        <li>Bootstrap</li>
                                        <li>Javascript</li>
                                        <li>Wordpress Site Structure</li>
                                    </ul>
                                </div>

                            </div>
                            <div class=\"card__side card__side--back card__side--back-2\">
                                <div class=\"card__cta\">
                                    <div class=\"card__price-box\">
                                        <p class=\"card__price-only\">Learn how to make your designs happen and add a touch of magic with Javascript.</p>
                                        ";
        // line 210
        echo "                                    </div>
                                    <a href=\"#contact-form\" class=\"btn btn--white\">Sign up now!</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class=\"col-1-of-3\">
                        <div class=\"card\">
                            <div class=\"card__side card__side--front\">
                                <div class=\"card__picture card__picture--3\">
                                    &nbsp;
                                </div>
                                <h4 class=\"card__heading\">
                                    <span class=\"card__heading-span card__heading-span--3\">Capstone project</span>
                                </h4>
                                <div class=\"card__details\">
                                    <ul>
                                        <li>Organizing WordPress Sites</li>
                                        <li>Wordpress Site Structure</li>
                                        <li>Components Hierarchy</li>
                                        <li>Building Custom Templates</li>
                                        <li>Functions &amp; Variables</li>
                                        <li>Building Custom Modules</li>
                                        <li>Capstone Project presentation</li>
                                    </ul>
                                </div>

                            </div>
                            <div class=\"card__side card__side--back card__side--back-3\">
                                <div class=\"card__cta\">
                                    <div class=\"card__price-box\">
                                        <p class=\"card__price-only\">
                                            Convert your HTML template into functional Wordpress Themes and Build your own custom modules.
                                        </p>
                                        ";
        // line 247
        echo "                                    </div>
                                    <a href=\"#contact-form\" class=\"btn btn--white\">Sign up now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        ";
        // line 256
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page"] ?? null), "html", null, true));
        echo "
        </main>

        <footer class=\"footer\">
            <div class=\"footer__logo-box\">
                <img src=\"";
        // line 261
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/img/logo-green-2x.png\" alt=\"Full logo\" class=\"footer__logo\">
            </div>
            <div class=\"row\">
                <div class=\"col-1-of-2\">
                    <div class=\"footer__navigation\">
                        <ul class=\"footer__list\">
                            <li class=\"footer__item\"><a href=\"#\" class=\"footer__link\">Company</a></li>
                            <li class=\"footer__item\"><a href=\"#\" class=\"footer__link\">Contact us</a></li>
                            <li class=\"footer__item\"><a href=\"#\" class=\"footer__link\">Carrers</a></li>
                            <li class=\"footer__item\"><a href=\"#\" class=\"footer__link\">Privacy policy</a></li>
                            <li class=\"footer__item\"><a href=\"#\" class=\"footer__link\">Terms</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-1-of-2\">
                    <p class=\"footer__copyright\">
                        Built by <a href=\"#\" class=\"footer__link\">Jonas Schmedtmann</a> for his online course <a href=\"#\" class=\"footer__link\">Advanced CSS and Sass</a>.
                        Copyright &copy; by Jonas Schmedtmann. You are 100% allowed to use this webpage for both personal
                        and commercial use, but NOT to claim it as your own design. A credit to the original author, Jonas
                        Schmedtmann, is of course highly appreciated!
                    </p>
                </div>
            </div>
        </footer>

        <div class=\"popup\" id=\"popup\">
            <div class=\"popup__content\">
                <div class=\"popup__left\">
                    <img src=\"";
        // line 289
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/img/nat-8.jpg\" alt=\"Tour photo\" class=\"popup__img\">
                    <img src=\"";
        // line 290
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/img/nat-9.jpg\" alt=\"Tour photo\" class=\"popup__img\">
                </div>
                <div class=\"popup__right\">
                    <a href=\"#section-tours\" class=\"popup__close\">&times;</a>
                    <h2 class=\"heading-secondary u-margin-bottom-small\">Start booking now</h2>
                    <h3 class=\"heading-tertiary u-margin-bottom-small\">Important &ndash; Please read these terms before booking</h3>
                    <p class=\"popup__text\">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Sed sed risus pretium quam. Aliquam sem et tortor consequat id. Volutpat odio facilisis mauris sit
                        amet massa vitae. Mi bibendum neque egestas congue. Placerat orci nulla pellentesque dignissim enim
                        sit. Vitae semper quis lectus nulla at volutpat diam ut venenatis. Malesuada pellentesque elit eget
                        gravida cum sociis natoque penatibus et. Proin fermentum leo vel orci porta non pulvinar neque laoreet.
                        Gravida neque convallis a cras semper. Molestie at elementum eu facilisis sed odio morbi quis. Faucibus
                        vitae aliquet nec ullamcorper sit amet risus nullam eget. Nam libero justo laoreet sit. Amet massa
                        vitae tortor condimentum lacinia quis vel eros donec. Sit amet facilisis magna etiam. Imperdiet sed
                        euismod nisi porta.
                    </p>
                    <a href=\"#\" class=\"btn btn--green\">Book now</a>
                </div>
            </div>
        </div>
        ";
        // line 311
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_bottom"] ?? null), "html", null, true));
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "themes/codesurfboards/templates/layout/html--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 311,  360 => 290,  356 => 289,  325 => 261,  317 => 256,  306 => 247,  268 => 210,  234 => 177,  141 => 86,  137 => 85,  133 => 84,  109 => 63,  98 => 55,  91 => 51,  86 => 49,  78 => 44,  72 => 41,  65 => 37,  61 => 36,  57 => 35,  53 => 34,  43 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Theme override for the basic structure of a single Drupal page.
 *
 * Variables:
 * - logged_in: A flag indicating if user is logged in.
 * - root_path: The root path of the current page (e.g., node, admin, user).
 * - node_type: The content type for the current node, if the page is a node.
 * - head_title: List of text elements that make up the head_title variable.
 *   May contain one or more of the following:
 *   - title: The title of the page.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site.
 * - page_top: Initial rendered markup. This should be printed before 'page'.
 * - page: The rendered page markup.
 * - page_bottom: Closing rendered markup. This variable should be printed after
 *   'page'.
 * - db_offline: A flag indicating if the database is offline.
 * - placeholder_token: The token for generating head, css, js and js-bottom
 *   placeholders.
 *
 * @see template_preprocess_html()
 */
#}

<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        <link href=\"https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900\" rel=\"stylesheet\">
        <head-placeholder token=\"{{ placeholder_token }}\">
        <title>{{ head_title|safe_join(' | ') }}</title>
        <css-placeholder token=\"{{ placeholder_token }}\">
        <js-placeholder token=\"{{ placeholder_token }}\">
    </head>
    
    <body>
    {{ page_top }}
        <header class=\"header\">
            <div class=\"header__logo-box\">
                <img src=\"{{directory}}/img/logo-white.png\" alt=\"Logo\" class=\"header__logo\">
            </div>

            <div class=\"header__text-box\">
                <h1 class=\"heading-primary\">
                    <span class=\"heading-primary--main\" style=\"line-height: 6.5rem; margin-top: 7.5rem;\"> {{ head_title.name }} </span>
                    <span class=\"heading-primary--sub\">
                        {{ \"Design/Entrepreneurial bootcamp\" | trans }}
                    </span>
                </h1>

                <a href=\"#section-about\" class=\"btn btn--white btn--animated\">{{ \"Learn more about our programmes\" | trans }}</a>
            </div>
        </header>

        <main>
            <section class=\"section-about\">
                <div class=\"u-center-text u-margin-bottom-big\">
                    <h2 class=\"heading-secondary\">
                        {{ \"Learn to develop your business and relax in beautiful Morrocco.\" | trans }}
                    </h2>
                </div>

                <div class=\"row\">
                    <div class=\"col-1-of-2\">
                        <h3 class=\"heading-tertiary u-margin-bottom-small\">We will help you to take control of your website.</h3>
                        <p class=\"paragraph\">
                            Change your life, empower youself by learning the best techniques to take control of your website and learn to love a new sport. 
                            We will teach you how to use Wordpress, PHP and Front-End technologies to set you free
                        </p>

                        <h3 class=\"heading-tertiary u-margin-bottom-small\">Live adventures like you never have before</h3>
                        <p class=\"paragraph\">
                            Learn to surf and adopt a new lifestyle.
                        </p>

                        <a href=\"#\" class=\"btn-text\">Learn more &rarr;</a>
                    </div>
                    <div class=\"col-1-of-2\">
                        <div class=\"composition\">
                            <img src=\"{{directory}}/img/morroco_patio.jpg\" alt=\"Photo 1\" class=\"composition__photo composition__photo--p1\">
                            <img src=\"{{directory}}/img/IMG_0215.jpg\" alt=\"Photo 2\" class=\"composition__photo composition__photo--p2\">
                            <img src=\"{{directory}}/img/Spiders 09.12.16-0026.jpg\" alt=\"Photo 3\" class=\"composition__photo composition__photo--p3\">
                        </div>
                    </div>
                </div>
            </section>

            <section class=\"section-features\">

                <h2 class=\"heading-secondary heading-secondary--new --white\">All included programme.</h2>
                <p class=\"paragraph --white\">Our programme includes everything, from picking you up at the air port, housing, meals and of course coding and surfing lessons.</p>
                <div class=\"row\">
                    <div class=\"col-1-of-4\">
                        <div class=\"feature-box\">
                            <i class=\"feature-box__icon icon-basic-home\"></i>
                            <h3 class=\"heading-tertiary u-margin-bottom-small\">Housing</h3>
                            <p class=\"feature-box__text\">
                                text
                            </p>
                        </div>
                    </div>

                    <div class=\"col-1-of-4\">
                        <div class=\"feature-box\">
                            <i class=\"feature-box__icon icon-basic-compass\"></i>
                            <h3 class=\"heading-tertiary u-margin-bottom-small\">Surf Classes</h3>
                            <p class=\"feature-box__text\">
                                text
                            </p>
                        </div>
                    </div>

                    <div class=\"col-1-of-4\">
                        <div class=\"feature-box\">
                            <i class=\"feature-box__icon icon-basic-map\"></i>
                            <h3 class=\"heading-tertiary u-margin-bottom-small\">Air transport</h3>
                             <p class=\"feature-box__text\">
                                text
                            </p>
                        </div>
                    </div>

                    <div class=\"col-1-of-4\">
                        <div class=\"feature-box\">
                            <i class=\"feature-box__icon icon-basic-laptop\"></i>
                            <h3 class=\"heading-tertiary u-margin-bottom-small\">Dev Classes</h3>
                            <p class=\"feature-box__text\">
                                text
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class=\"section-tours\" id=\"section-tours\">
                <div class=\"u-center-text u-margin-bottom-big\">
                    <h2 class=\"heading-secondary\">
                        Our 3 Week Programe.
                    </h2>
                    <p>
                    Check out our comprehensive coding programme. 
                    Taking you from novice to experienced in just 3 weeks
                    </p>
                </div>

                <div class=\"row\">
                    <div class=\"col-1-of-3\">
                       <div class=\"card\">
                           <div class=\"card__side card__side--front\">
                                <div class=\"card__picture card__picture--1\">
                                    &nbsp;
                                </div>
                                <h4 class=\"card__heading\">
                                    <span class=\"card__heading-span card__heading-span--1\">Programming 101</span>
                                </h4>
                                <div class=\"card__details\">
                                    <ul>
                                        <li>Setup dev environment</li>
                                        <li>Intro to Programming</li>
                                        <li>WordPress setup</li>
                                        <li>Installing Wordpress Modules</li>
                                        <li>Wordpress SEO</li>
                                    </ul>
                                </div>
                           </div>
                           <div class=\"card__side card__side--back card__side--back-1\">
                                <div class=\"card__cta\">
                                    <div class=\"card__price-box\">
                                        <p class=\"card__price-only\">
                                            On the first week we will teach you how to organize content and setup your own development environment:
                                        </p>
                                        {# <p class=\"card__price-value\">\$297</p> #}
                                    </div>
                                    <a href=\"#contact-form\" class=\"btn btn--white\">Sign up now!</a>
                                </div>
                            </div>
                       </div>
                    </div>


                    <div class=\"col-1-of-3\">
                        <div class=\"card\">
                            <div class=\"card__side card__side--front\">
                                <div class=\"card__picture card__picture--2\">
                                    &nbsp;
                                </div>
                                <h4 class=\"card__heading\">
                                    <span class=\"card__heading-span card__heading-span--2\">Front-End</span>
                                </h4>

                                <div class=\"card__details\">
                                    <ul>                            
                                        <li>HTML &amp; SCSS</li>
                                        <li>Bootstrap</li>
                                        <li>Javascript</li>
                                        <li>Wordpress Site Structure</li>
                                    </ul>
                                </div>

                            </div>
                            <div class=\"card__side card__side--back card__side--back-2\">
                                <div class=\"card__cta\">
                                    <div class=\"card__price-box\">
                                        <p class=\"card__price-only\">Learn how to make your designs happen and add a touch of magic with Javascript.</p>
                                        {# <p class=\"card__price-value\">\$497</p> #}
                                    </div>
                                    <a href=\"#contact-form\" class=\"btn btn--white\">Sign up now!</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class=\"col-1-of-3\">
                        <div class=\"card\">
                            <div class=\"card__side card__side--front\">
                                <div class=\"card__picture card__picture--3\">
                                    &nbsp;
                                </div>
                                <h4 class=\"card__heading\">
                                    <span class=\"card__heading-span card__heading-span--3\">Capstone project</span>
                                </h4>
                                <div class=\"card__details\">
                                    <ul>
                                        <li>Organizing WordPress Sites</li>
                                        <li>Wordpress Site Structure</li>
                                        <li>Components Hierarchy</li>
                                        <li>Building Custom Templates</li>
                                        <li>Functions &amp; Variables</li>
                                        <li>Building Custom Modules</li>
                                        <li>Capstone Project presentation</li>
                                    </ul>
                                </div>

                            </div>
                            <div class=\"card__side card__side--back card__side--back-3\">
                                <div class=\"card__cta\">
                                    <div class=\"card__price-box\">
                                        <p class=\"card__price-only\">
                                            Convert your HTML template into functional Wordpress Themes and Build your own custom modules.
                                        </p>
                                        {# <p class=\"card__price-value\">\$897</p> #}
                                    </div>
                                    <a href=\"#contact-form\" class=\"btn btn--white\">Sign up now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        {{ page }}
        </main>

        <footer class=\"footer\">
            <div class=\"footer__logo-box\">
                <img src=\"{{directory}}/img/logo-green-2x.png\" alt=\"Full logo\" class=\"footer__logo\">
            </div>
            <div class=\"row\">
                <div class=\"col-1-of-2\">
                    <div class=\"footer__navigation\">
                        <ul class=\"footer__list\">
                            <li class=\"footer__item\"><a href=\"#\" class=\"footer__link\">Company</a></li>
                            <li class=\"footer__item\"><a href=\"#\" class=\"footer__link\">Contact us</a></li>
                            <li class=\"footer__item\"><a href=\"#\" class=\"footer__link\">Carrers</a></li>
                            <li class=\"footer__item\"><a href=\"#\" class=\"footer__link\">Privacy policy</a></li>
                            <li class=\"footer__item\"><a href=\"#\" class=\"footer__link\">Terms</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-1-of-2\">
                    <p class=\"footer__copyright\">
                        Built by <a href=\"#\" class=\"footer__link\">Jonas Schmedtmann</a> for his online course <a href=\"#\" class=\"footer__link\">Advanced CSS and Sass</a>.
                        Copyright &copy; by Jonas Schmedtmann. You are 100% allowed to use this webpage for both personal
                        and commercial use, but NOT to claim it as your own design. A credit to the original author, Jonas
                        Schmedtmann, is of course highly appreciated!
                    </p>
                </div>
            </div>
        </footer>

        <div class=\"popup\" id=\"popup\">
            <div class=\"popup__content\">
                <div class=\"popup__left\">
                    <img src=\"{{directory}}/img/nat-8.jpg\" alt=\"Tour photo\" class=\"popup__img\">
                    <img src=\"{{directory}}/img/nat-9.jpg\" alt=\"Tour photo\" class=\"popup__img\">
                </div>
                <div class=\"popup__right\">
                    <a href=\"#section-tours\" class=\"popup__close\">&times;</a>
                    <h2 class=\"heading-secondary u-margin-bottom-small\">Start booking now</h2>
                    <h3 class=\"heading-tertiary u-margin-bottom-small\">Important &ndash; Please read these terms before booking</h3>
                    <p class=\"popup__text\">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Sed sed risus pretium quam. Aliquam sem et tortor consequat id. Volutpat odio facilisis mauris sit
                        amet massa vitae. Mi bibendum neque egestas congue. Placerat orci nulla pellentesque dignissim enim
                        sit. Vitae semper quis lectus nulla at volutpat diam ut venenatis. Malesuada pellentesque elit eget
                        gravida cum sociis natoque penatibus et. Proin fermentum leo vel orci porta non pulvinar neque laoreet.
                        Gravida neque convallis a cras semper. Molestie at elementum eu facilisis sed odio morbi quis. Faucibus
                        vitae aliquet nec ullamcorper sit amet risus nullam eget. Nam libero justo laoreet sit. Amet massa
                        vitae tortor condimentum lacinia quis vel eros donec. Sit amet facilisis magna etiam. Imperdiet sed
                        euismod nisi porta.
                    </p>
                    <a href=\"#\" class=\"btn btn--green\">Book now</a>
                </div>
            </div>
        </div>
        {{ page_bottom }}
    </body>
</html>", "themes/codesurfboards/templates/layout/html--front.html.twig", "/Users/gilmarfdelima/Projects/Personal/surfcode/web/themes/codesurfboards/templates/layout/html--front.html.twig");
    }
}
