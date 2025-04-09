<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/pivot/templates/layout/page.html.twig */
class __TwigTemplate_2cbe31be6e97a4e76b50bf9b2b4366a6 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'title' => [$this, 'block_title'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 59
        $context["container"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 59), "fluid_container", [], "any", false, false, true, 59)) ? ("container-fluid") : ("container"));
        // line 60
        yield "
  <a id=\"top\"></a>

\t
";
        // line 65
        yield "<div class=\"nav-container\">
  <nav class=\"top-bar ";
        // line 66
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mainmenu_class"] ?? null), 66, $this->source), "html", null, true);
        yield "\">
    <div class=\"container\">
      ";
        // line 68
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user_left", [], "any", false, false, true, 68) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user_right", [], "any", false, false, true, 68))) {
            // line 69
            yield "      <div class=\"row utility-menu\">
        <div class=\"col-sm-12\">
          <div class=\"utility-inner clearfix\">
            ";
            // line 72
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user_left", [], "any", false, false, true, 72)) {
                // line 73
                yield "              ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user_left", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                yield "
            ";
            }
            // line 75
            yield "          
            ";
            // line 76
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user_right", [], "any", false, false, true, 76)) {
                // line 77
                yield "              <div class=\"pull-right\">
                ";
                // line 78
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user_right", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
                yield "
              </div>
            ";
            }
            // line 81
            yield "          </div>
        </div>
      </div>
      ";
        }
        // line 85
        yield "\t  
\t  
      ";
        // line 87
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 87) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 87)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 87))) {
            // line 88
            yield "        ";
            yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
            // line 104
            yield "      ";
        }
        // line 105
        yield "\t  
    </div>
  </nav>
</div>


";
        // line 112
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 219
        yield "
";
        // line 220
        if (((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_first", [], "any", false, false, true, 220) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_second", [], "any", false, false, true, 220)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_third", [], "any", false, false, true, 220)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_fouth", [], "any", false, false, true, 220)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 220))) {
            // line 221
            yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "mainmenu_class", "page", "content_attributes", "breadcrumb", "title", "title_attributes", "action_links"]);        yield from [];
    }

    // line 88
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 89
        yield "          <div class=\"row nav-menu\">
            <div class=\"col-sm-3 col-md-3 columns\">
            ";
        // line 91
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
        yield "
            </div>
        ";
        // line 93
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 93)) {
            // line 94
            yield "            <div class=\"col-sm-9 col-md-9 columns\">
              ";
            // line 95
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
            yield "
            </div>
        ";
        }
        // line 98
        yield "        </div>
      
        <div class=\"mobile-toggle\">
          <i class=\"icon icon_menu\"></i>
        </div>
        ";
        yield from [];
    }

    // line 112
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 113
        yield "<div role=\"main\" id=\"main-container\" class=\"main-container js-quickedit-main-content\">
  <div class=\"container\">
    ";
        // line 116
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 116)) {
            // line 117
            yield "    <header class=\"title\">
      <div role=\"header\" class=\"header-container ";
            // line 118
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 118, $this->source), "html", null, true);
            yield " \">
        <div class=\"row\">
        ";
            // line 121
            yield "          ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 121)) {
                // line 122
                yield "            ";
                yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
                // line 127
                yield "          ";
            }
            // line 128
            yield "        
      </div>
      </div>
    </header>
    ";
        }
        // line 133
        yield "    ";
        // line 134
        yield "
    ";
        // line 136
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, true, 136)) {
            // line 137
            yield "    <div class=\"title-wrapper\">
          ";
            // line 139
            yield "          ";
            yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
            // line 141
            yield "\t 
    </div>
    ";
        }
        // line 144
        yield "    ";
        // line 145
        yield "
    <div class=\"row\">
      ";
        // line 148
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 148)) {
            // line 149
            yield "        ";
            yield from $this->unwrap()->yieldBlock('sidebar_first', $context, $blocks);
            // line 154
            yield "      ";
        }
        // line 155
        yield "
      ";
        // line 157
        yield "      ";
        // line 158
        $context["content_classes"] = [(((CoreExtension::getAttribute($this->env, $this->source,         // line 159
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 159) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 159))) ? ("col-md-6") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 160
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 160) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 160)))) ? ("col-md-9") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 161
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 161) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 161)))) ? ("col-md-8") : ("")), (((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,         // line 162
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 162)) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 162)))) ? ("col-md-12") : (""))];
        // line 165
        yield "      <div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [($context["content_classes"] ?? null)], "method", false, false, true, 165), 165, $this->source), "html", null, true);
        yield ">

        ";
        // line 168
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 168)) {
            // line 169
            yield "          ";
            yield from $this->unwrap()->yieldBlock('highlighted', $context, $blocks);
            // line 172
            yield "        ";
        }
        // line 173
        yield "
        ";
        // line 175
        yield "        ";
        if (($context["breadcrumb"] ?? null)) {
            // line 176
            yield "          ";
            yield from $this->unwrap()->yieldBlock('breadcrumb', $context, $blocks);
            // line 179
            yield "        ";
        }
        // line 180
        yield "
        ";
        // line 182
        yield "        ";
        if (($context["title"] ?? null)) {
            // line 183
            yield "          <h1";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["page-header"], "method", false, false, true, 183), 183, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 183, $this->source), "html", null, true);
            yield "</h1>
        ";
        }
        // line 185
        yield "        ";
        // line 186
        yield "      
        ";
        // line 188
        yield "        ";
        if (($context["action_links"] ?? null)) {
            // line 189
            yield "          ";
            yield from $this->unwrap()->yieldBlock('action_links', $context, $blocks);
            // line 192
            yield "        ";
        }
        // line 193
        yield "
        ";
        // line 195
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 195)) {
            // line 196
            yield "          ";
            yield from $this->unwrap()->yieldBlock('help', $context, $blocks);
            // line 199
            yield "        ";
        }
        // line 200
        yield "
        ";
        // line 202
        yield "        <div class=\"region region-content\">
          ";
        // line 203
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 203), 203, $this->source), "html", null, true);
        yield "
        </div>
      </div>

      ";
        // line 208
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 208)) {
            // line 209
            yield "        ";
            yield from $this->unwrap()->yieldBlock('sidebar_second', $context, $blocks);
            // line 214
            yield "      ";
        }
        // line 215
        yield "    </div>
  </div>
</div>
";
        yield from [];
    }

    // line 122
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 123
        yield "              <div class=\"col-sm-12\" role=\"headingsecond\">
                ";
        // line 124
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
        yield "
              </div>
            ";
        yield from [];
    }

    // line 139
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 140
        yield "              ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
        yield "
          ";
        yield from [];
    }

    // line 149
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_first(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 150
        yield "          <aside class=\"col-md-3\" role=\"complementary\">
            ";
        // line 151
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
        yield "
          </aside>
        ";
        yield from [];
    }

    // line 169
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_highlighted(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 170
        yield "            <div class=\"highlighted\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 170), 170, $this->source), "html", null, true);
        yield "</div>
          ";
        yield from [];
    }

    // line 176
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 177
        yield "            ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 177, $this->source), "html", null, true);
        yield "
          ";
        yield from [];
    }

    // line 189
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_action_links(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 190
        yield "            <ul class=\"action-links\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 190, $this->source), "html", null, true);
        yield "</ul>
          ";
        yield from [];
    }

    // line 196
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_help(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 197
        yield "            ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 197), 197, $this->source), "html", null, true);
        yield "
          ";
        yield from [];
    }

    // line 209
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_second(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 210
        yield "          <aside id=\"sidebar-second\" class=\"col-sm-4 hidden-sm\" role=\"complementary\">
            ";
        // line 211
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 211), 211, $this->source), "html", null, true);
        yield "
          </aside>
        ";
        yield from [];
    }

    // line 221
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 222
        yield "<div class=\"footer-container\" role=\"contentinfo\">
\t<!-- postscript -->
\t";
        // line 224
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_first", [], "any", false, false, true, 224) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_second", [], "any", false, false, true, 224)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_third", [], "any", false, false, true, 224)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_fouth", [], "any", false, false, true, 224))) {
            // line 225
            yield "    <div id=\"postscript\" class=\"postscript row\">
      <div class=\"col-lg-3 col-md-3 col-sm-12 col-12 postscript_first\">
        ";
            // line 227
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_first", [], "any", false, false, true, 227), 227, $this->source), "html", null, true);
            yield "
      </div>
      <div class=\"col-lg-3 col-md-3 col-sm-12 col-12 postscript_second\">
        ";
            // line 230
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_second", [], "any", false, false, true, 230), 230, $this->source), "html", null, true);
            yield "
      </div>
      <div class=\"col-lg-3 col-md-3 col-sm-12 col-12 postscript_third\">
        ";
            // line 233
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_third", [], "any", false, false, true, 233), 233, $this->source), "html", null, true);
            yield "
      </div>
      <div class=\"col-lg-3 col-md-3 col-sm-12 col-12 postscript_fouth\">
        ";
            // line 236
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_fouth", [], "any", false, false, true, 236), 236, $this->source), "html", null, true);
            yield "
      </div>
    </div>
    ";
        }
        // line 240
        yield "\t
    ";
        // line 241
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 241)) {
            // line 242
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 242), 242, $this->source), "html", null, true);
            yield "
    ";
        }
        // line 244
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/pivot/templates/layout/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  539 => 244,  533 => 242,  531 => 241,  528 => 240,  521 => 236,  515 => 233,  509 => 230,  503 => 227,  499 => 225,  497 => 224,  493 => 222,  486 => 221,  478 => 211,  475 => 210,  468 => 209,  460 => 197,  453 => 196,  445 => 190,  438 => 189,  430 => 177,  423 => 176,  415 => 170,  408 => 169,  400 => 151,  397 => 150,  390 => 149,  382 => 140,  375 => 139,  367 => 124,  364 => 123,  357 => 122,  349 => 215,  346 => 214,  343 => 209,  340 => 208,  333 => 203,  330 => 202,  327 => 200,  324 => 199,  321 => 196,  318 => 195,  315 => 193,  312 => 192,  309 => 189,  306 => 188,  303 => 186,  301 => 185,  293 => 183,  290 => 182,  287 => 180,  284 => 179,  281 => 176,  278 => 175,  275 => 173,  272 => 172,  269 => 169,  266 => 168,  260 => 165,  258 => 162,  257 => 161,  256 => 160,  255 => 159,  254 => 158,  252 => 157,  249 => 155,  246 => 154,  243 => 149,  240 => 148,  236 => 145,  234 => 144,  229 => 141,  226 => 139,  223 => 137,  220 => 136,  217 => 134,  215 => 133,  208 => 128,  205 => 127,  202 => 122,  199 => 121,  194 => 118,  191 => 117,  188 => 116,  184 => 113,  177 => 112,  167 => 98,  161 => 95,  158 => 94,  156 => 93,  151 => 91,  147 => 89,  140 => 88,  133 => 221,  131 => 220,  128 => 219,  126 => 112,  118 => 105,  115 => 104,  112 => 88,  110 => 87,  106 => 85,  100 => 81,  94 => 78,  91 => 77,  89 => 76,  86 => 75,  80 => 73,  78 => 72,  73 => 69,  71 => 68,  66 => 66,  63 => 65,  57 => 60,  55 => 59,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/pivot/templates/layout/page.html.twig", "D:\\Wamp\\www\\museo\\themes\\custom\\pivot\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 59, "if" => 68, "block" => 88);
        static $filters = array("escape" => 66);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
