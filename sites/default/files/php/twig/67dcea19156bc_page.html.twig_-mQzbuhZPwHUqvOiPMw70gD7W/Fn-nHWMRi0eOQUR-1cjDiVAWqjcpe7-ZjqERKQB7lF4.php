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
class __TwigTemplate_d1963ac481a8b865f9feb5e0df51ecdb extends Template
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

";
        // line 64
        yield "<div class=\"top-logos-wrapper\">
  <div class=\"top-logos container\">
    ";
        // line 66
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_left", [], "any", false, false, true, 66) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 66))) {
            // line 67
            yield "      <div class=\"header-left\">
        <div class=\"col-sm-3 col-md-3 columns\">    
          ";
            // line 69
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_left", [], "any", false, false, true, 69), "html", null, true);
            yield "
          ";
            // line 70
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 70), "html", null, true);
            yield "
        </div>
      </div>
    ";
        }
        // line 74
        yield "    
    ";
        // line 75
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_center", [], "any", false, false, true, 75)) {
            // line 76
            yield "      <div class=\"header-center\">
        <div class=\"col-sm-6 col-md-6 columns\">
          ";
            // line 78
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_center", [], "any", false, false, true, 78), "html", null, true);
            yield "
        </div> 
      </div>
    ";
        }
        // line 82
        yield "    
    ";
        // line 83
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 83)) {
            // line 84
            yield "      <div class=\"header-right\">
        <div class=\"col-sm-3 col-md-3 columns\">
          ";
            // line 86
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 86), "html", null, true);
            yield "
        </div>  
      </div>
    ";
        }
        // line 90
        yield "  </div>
</div>
\t
";
        // line 94
        yield "<div class=\"nav-container menu-wrapper bg-dark\">
  <nav class=\"top-bar ";
        // line 95
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["mainmenu_class"] ?? null), "html", null, true);
        yield "\">
    <div class=\"container\">
      ";
        // line 97
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user_left", [], "any", false, false, true, 97) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user_right", [], "any", false, false, true, 97))) {
            // line 98
            yield "      <div class=\"row utility-menu\">
        <div class=\"col-sm-12\">
          <div class=\"utility-inner clearfix\">
            ";
            // line 101
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user_left", [], "any", false, false, true, 101)) {
                // line 102
                yield "              ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user_left", [], "any", false, false, true, 102), "html", null, true);
                yield "
            ";
            }
            // line 104
            yield "          
            ";
            // line 105
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user_right", [], "any", false, false, true, 105)) {
                // line 106
                yield "              <div class=\"pull-right\">
                ";
                // line 107
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user_right", [], "any", false, false, true, 107), "html", null, true);
                yield "
              </div>
            ";
            }
            // line 110
            yield "          </div>
        </div>
      </div>
      ";
        }
        // line 114
        yield "\t  
\t  
      ";
        // line 116
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 116) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 116))) {
            // line 117
            yield "        ";
            yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
            // line 132
            yield "      ";
        }
        // line 133
        yield "\t  
    </div>
  </nav>
</div>


";
        // line 140
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 247
        yield "
";
        // line 248
        if (((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_first", [], "any", false, false, true, 248) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_second", [], "any", false, false, true, 248)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_third", [], "any", false, false, true, 248)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_fouth", [], "any", false, false, true, 248)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 248))) {
            // line 249
            yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "page", "mainmenu_class", "content_attributes", "breadcrumb", "title", "title_attributes", "action_links"]);        yield from [];
    }

    // line 117
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 118
        yield "          <div class=\"row nav-menu\">
            <div class=\"col-sm-3 col-md-3 columns\">
            </div>
        ";
        // line 121
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 121)) {
            // line 122
            yield "            <div class=\"col-sm-9 col-md-9 columns\">
              ";
            // line 123
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 123), "html", null, true);
            yield "
            </div>
        ";
        }
        // line 126
        yield "        </div>
      
        <div class=\"mobile-toggle\">
          <i class=\"icon icon_menu\"></i>
        </div>
        ";
        yield from [];
    }

    // line 140
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 141
        yield "<div role=\"main\" id=\"main-container\" class=\"main-container js-quickedit-main-content\">
  <div class=\"container\">
    ";
        // line 144
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 144)) {
            // line 145
            yield "    <header class=\"title\">
      <div role=\"header\" class=\"header-container ";
            // line 146
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true);
            yield " \">
        <div class=\"row\">
        ";
            // line 149
            yield "          ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 149)) {
                // line 150
                yield "            ";
                yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
                // line 155
                yield "          ";
            }
            // line 156
            yield "        
      </div>
      </div>
    </header>
    ";
        }
        // line 161
        yield "    ";
        // line 162
        yield "
    ";
        // line 164
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, true, 164)) {
            // line 165
            yield "    <div class=\"title-wrapper\">
          ";
            // line 167
            yield "          ";
            yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
            // line 169
            yield "\t 
    </div>
    ";
        }
        // line 172
        yield "    ";
        // line 173
        yield "
    <div class=\"row\">
      ";
        // line 176
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 176)) {
            // line 177
            yield "        ";
            yield from $this->unwrap()->yieldBlock('sidebar_first', $context, $blocks);
            // line 182
            yield "      ";
        }
        // line 183
        yield "
      ";
        // line 185
        yield "      ";
        // line 186
        $context["content_classes"] = [(((CoreExtension::getAttribute($this->env, $this->source,         // line 187
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 187) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 187))) ? ("col-md-6") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 188
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 188) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 188)))) ? ("col-md-9") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 189
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 189) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 189)))) ? ("col-md-8") : ("")), (((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,         // line 190
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 190)) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 190)))) ? ("col-md-12") : (""))];
        // line 193
        yield "      <div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [($context["content_classes"] ?? null)], "method", false, false, true, 193), "html", null, true);
        yield ">

        ";
        // line 196
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 196)) {
            // line 197
            yield "          ";
            yield from $this->unwrap()->yieldBlock('highlighted', $context, $blocks);
            // line 200
            yield "        ";
        }
        // line 201
        yield "
        ";
        // line 203
        yield "        ";
        if (($context["breadcrumb"] ?? null)) {
            // line 204
            yield "          ";
            yield from $this->unwrap()->yieldBlock('breadcrumb', $context, $blocks);
            // line 207
            yield "        ";
        }
        // line 208
        yield "
        ";
        // line 210
        yield "        ";
        if (($context["title"] ?? null)) {
            // line 211
            yield "          <h1";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["page-header"], "method", false, false, true, 211), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "</h1>
        ";
        }
        // line 213
        yield "        ";
        // line 214
        yield "      
        ";
        // line 216
        yield "        ";
        if (($context["action_links"] ?? null)) {
            // line 217
            yield "          ";
            yield from $this->unwrap()->yieldBlock('action_links', $context, $blocks);
            // line 220
            yield "        ";
        }
        // line 221
        yield "
        ";
        // line 223
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 223)) {
            // line 224
            yield "          ";
            yield from $this->unwrap()->yieldBlock('help', $context, $blocks);
            // line 227
            yield "        ";
        }
        // line 228
        yield "
        ";
        // line 230
        yield "        <div class=\"region region-content\">
          ";
        // line 231
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 231), "html", null, true);
        yield "
        </div>
      </div>

      ";
        // line 236
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 236)) {
            // line 237
            yield "        ";
            yield from $this->unwrap()->yieldBlock('sidebar_second', $context, $blocks);
            // line 242
            yield "      ";
        }
        // line 243
        yield "    </div>
  </div>
</div>
";
        yield from [];
    }

    // line 150
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 151
        yield "              <div class=\"col-sm-12\" role=\"headingsecond\">
                ";
        // line 152
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 152), "html", null, true);
        yield "
              </div>
            ";
        yield from [];
    }

    // line 167
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 168
        yield "              ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, true, 168), "html", null, true);
        yield "
          ";
        yield from [];
    }

    // line 177
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_first(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 178
        yield "          <aside class=\"col-md-3\" role=\"complementary\">
            ";
        // line 179
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 179), "html", null, true);
        yield "
          </aside>
        ";
        yield from [];
    }

    // line 197
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_highlighted(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 198
        yield "            <div class=\"highlighted\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 198), "html", null, true);
        yield "</div>
          ";
        yield from [];
    }

    // line 204
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 205
        yield "            ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["breadcrumb"] ?? null), "html", null, true);
        yield "
          ";
        yield from [];
    }

    // line 217
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_action_links(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 218
        yield "            <ul class=\"action-links\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["action_links"] ?? null), "html", null, true);
        yield "</ul>
          ";
        yield from [];
    }

    // line 224
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_help(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 225
        yield "            ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 225), "html", null, true);
        yield "
          ";
        yield from [];
    }

    // line 237
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_second(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 238
        yield "          <aside id=\"sidebar-second\" class=\"col-sm-4 hidden-sm\" role=\"complementary\">
            ";
        // line 239
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 239), "html", null, true);
        yield "
          </aside>
        ";
        yield from [];
    }

    // line 249
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 250
        yield "<div class=\"footer-container\" role=\"contentinfo\">
\t<!-- postscript -->
\t";
        // line 252
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_first", [], "any", false, false, true, 252) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_second", [], "any", false, false, true, 252)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_third", [], "any", false, false, true, 252)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_fouth", [], "any", false, false, true, 252))) {
            // line 253
            yield "    <div id=\"postscript\" class=\"postscript row\">
      <div class=\"col-lg-3 col-md-3 col-sm-12 col-12 postscript_first\">
        ";
            // line 255
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_first", [], "any", false, false, true, 255), "html", null, true);
            yield "
      </div>
      <div class=\"col-lg-3 col-md-3 col-sm-12 col-12 postscript_second\">
        ";
            // line 258
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_second", [], "any", false, false, true, 258), "html", null, true);
            yield "
      </div>
      <div class=\"col-lg-3 col-md-3 col-sm-12 col-12 postscript_third\">
        ";
            // line 261
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_third", [], "any", false, false, true, 261), "html", null, true);
            yield "
      </div>
      <div class=\"col-lg-3 col-md-3 col-sm-12 col-12 postscript_fouth\">
        ";
            // line 264
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "postscript_fouth", [], "any", false, false, true, 264), "html", null, true);
            yield "
      </div>
    </div>
    ";
        }
        // line 268
        yield "\t
    ";
        // line 269
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 269)) {
            // line 270
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 270), "html", null, true);
            yield "
    ";
        }
        // line 272
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
        return array (  592 => 272,  586 => 270,  584 => 269,  581 => 268,  574 => 264,  568 => 261,  562 => 258,  556 => 255,  552 => 253,  550 => 252,  546 => 250,  539 => 249,  531 => 239,  528 => 238,  521 => 237,  513 => 225,  506 => 224,  498 => 218,  491 => 217,  483 => 205,  476 => 204,  468 => 198,  461 => 197,  453 => 179,  450 => 178,  443 => 177,  435 => 168,  428 => 167,  420 => 152,  417 => 151,  410 => 150,  402 => 243,  399 => 242,  396 => 237,  393 => 236,  386 => 231,  383 => 230,  380 => 228,  377 => 227,  374 => 224,  371 => 223,  368 => 221,  365 => 220,  362 => 217,  359 => 216,  356 => 214,  354 => 213,  346 => 211,  343 => 210,  340 => 208,  337 => 207,  334 => 204,  331 => 203,  328 => 201,  325 => 200,  322 => 197,  319 => 196,  313 => 193,  311 => 190,  310 => 189,  309 => 188,  308 => 187,  307 => 186,  305 => 185,  302 => 183,  299 => 182,  296 => 177,  293 => 176,  289 => 173,  287 => 172,  282 => 169,  279 => 167,  276 => 165,  273 => 164,  270 => 162,  268 => 161,  261 => 156,  258 => 155,  255 => 150,  252 => 149,  247 => 146,  244 => 145,  241 => 144,  237 => 141,  230 => 140,  220 => 126,  214 => 123,  211 => 122,  209 => 121,  204 => 118,  197 => 117,  190 => 249,  188 => 248,  185 => 247,  183 => 140,  175 => 133,  172 => 132,  169 => 117,  167 => 116,  163 => 114,  157 => 110,  151 => 107,  148 => 106,  146 => 105,  143 => 104,  137 => 102,  135 => 101,  130 => 98,  128 => 97,  123 => 95,  120 => 94,  115 => 90,  108 => 86,  104 => 84,  102 => 83,  99 => 82,  92 => 78,  88 => 76,  86 => 75,  83 => 74,  76 => 70,  72 => 69,  68 => 67,  66 => 66,  62 => 64,  57 => 60,  55 => 59,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/pivot/templates/layout/page.html.twig", "D:\\Wamp\\www\\museo\\themes\\custom\\pivot\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 59, "if" => 66, "block" => 117];
        static $filters = ["escape" => 69];
        static $functions = [];

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
